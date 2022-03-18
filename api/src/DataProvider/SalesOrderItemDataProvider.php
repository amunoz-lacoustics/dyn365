<?php

namespace App\DataProvider;

use ApiPlatform\Core\DataProvider\DenormalizedIdentifiersAwareItemDataProviderInterface;
use ApiPlatform\Core\DataProvider\RestrictedDataProviderInterface;
use ApiPlatform\Core\Exception\InvalidIdentifierException;
use ApiPlatform\Core\Exception\ResourceClassNotSupportedException;
use App\Entity\SalesOrder;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class SalesOrderItemDataProvider
 * @package App\DataProvider
 */
final class SalesOrderItemDataProvider implements DenormalizedIdentifiersAwareItemDataProviderInterface, RestrictedDataProviderInterface
{
	private $container;
	private $client;
	private $entity_name;

	public function __construct(ContainerInterface $container)
	{
		$this->container = $container;
		$this->client = $this->container->get('eight_points_guzzle.client.api_365');
		if($this->container->hasParameter('entity.sales_order')) {
			$this->entity_name = $this->container->getParameter('entity.sales_order');
		}else{
			throw new \UnexpectedValueException("Data entity name for sales order is not correctly configured");
		}
	}

	/**
	 * {@inheritdoc}
	 */
	public function supports(string $resourceClass, string $operationName = null, array $context = []): bool
	{
		return SalesOrder::class === $resourceClass;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getItem(string $resourceClass, $id, string $operationName = null, array $context = []): ?SalesOrder
	{
		$dataAreaId = (isset($id['data_area_id']) && !empty($id['data_area_id'])) ? $id['data_area_id'] : 'lafr';
		if (isset($id['sales_order_number']) && !empty($id['sales_order_number'])) {
			$number = $id['sales_order_number'];
		} else {
			throw new InvalidIdentifierException("You must provide 'data_area_id' and 'sales_order_number' to identify the requested ressource");
		}

		$res = $this->client->get("data/$this->entity_name(dataAreaId='$dataAreaId',SalesOrderNumber='$number')");
        $result = strval($res->getBody());
        $order = json_decode($result, true);
		
		return new SalesOrder($order);
	}
}