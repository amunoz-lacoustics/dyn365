<?php

namespace App\DataProvider;

use ApiPlatform\Core\DataProvider\CollectionDataProviderInterface;
use ApiPlatform\Core\DataProvider\RestrictedDataProviderInterface;
use ApiPlatform\Core\Exception\ResourceClassNotSupportedException;
use App\Entity\Customer;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class CustomerCollectionDataProvider
 * @package App\DataProvider
 */
final class CustomerCollectionDataProvider implements CollectionDataProviderInterface, RestrictedDataProviderInterface
{
	private $container;
	private $client;
	private $entity_name;

	public function __construct(ContainerInterface $container)
	{
		$this->container = $container;
		$this->client = $this->container->get('eight_points_guzzle.client.api_365');
		if($this->container->hasParameter('entity.customer')) {
			$this->entity_name = $this->container->getParameter('entity.customer');
		}else{
			throw new \UnexpectedValueException("Data entity name for customer is not correctly configured");
		}
	}

	public function supports(string $resourceClass, string $operationName = null, array $context = []): bool
	{
		return Customer::class === $resourceClass;
	}

	public function getCollection(string $resourceClass, string $operationName = null): \Generator
	{
        $query = $this->container->get('request_stack')->getCurrentRequest()->query;
		$url = "data/$this->entity_name";
		$filter = [];
		$filter_text = '';
		$orderby = [];
		$orderby_text = '';
		$countPerPage = 30;

		$top = "\$top=$countPerPage";
		if (!is_null($query->get('top'))) {
			$top = "\$top=" . $query->get('top');
		}
		if (!is_null($query->get('page')) && $query->get('page') > 1) {
			$skip = $countPerPage * intval($query->get('page')); 
			$top = "\$top=" . $countPerPage."&\$skip=".$skip;
		}

		if (!is_null($query->get('start_date')) || !is_null($query->get('end_date'))) {
			$orderby[] = "RequestedReceiptDate";
			if (!is_null($query->get('start_date'))) {
				$start_date = $query->get('start_date');
				$filter[] = "RequestedReceiptDate ge " . DateHelper::formatDate($start_date);
			}
			if (!is_null($query->get('end_date'))) {
				$end_date = $query->get('end_date');
				$filter[] = "RequestedReceiptDate le " . DateHelper::formatDate($end_date);
			}
		} else if (!is_null($query->get('RequestedReceiptDate'))) {
			$orderby[] = "RequestedReceiptDate";
			$purchase_date = $query->get('RequestedReceiptDate');
			$filter[] = "RequestedReceiptDate eq " . DateHelper::formatDate($purchase_date);
		} else if (!is_null($query->get('ConfirmedReceiptDate'))) {
			$orderby[] = "ConfirmedReceiptDate";
			$purchase_date = $query->get('ConfirmedReceiptDate');
			$filter[] = "ConfirmedReceiptDate eq " . DateHelper::formatDate($purchase_date);
		}

		if (!is_null($query->get('customerAccount'))) {
			$filter[] = "customerAccount eq '" . $query->get('customerAccount') . "'";
		}
		
		if (!empty($filter)) {
			$filter_text = "\$filter=" . implode(' and ', $filter);
		}

		if (!empty($orderby)) {
			$orderby_text = "\$orderby=" . implode(',', $orderby);
		}

        if (!is_null($query->get('count'))) {
            $url .= "/\$count";
        }

		$url .= "?" . implode('&', array_filter([$filter_text, $orderby_text, $top]));

		try {			
			$res = $this->client->get($url);
			$result = strval($res->getBody());
            if (is_int($result) || !is_null($query->get('count'))) {
                yield  preg_replace('/[^0-9]*/', '', $result);
            }else {
                $result_array = json_decode($result, true);
                $orders = $result_array['value'];
                foreach ($orders as $data) {                    
                    yield new Customer($data);
                }
            }
		} catch (\Exception $e) {
			return yield $e->getResponse()->getBody()->getContents();
		}
	}
}