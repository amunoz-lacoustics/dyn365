<?php

/**
 * User: johan.nagou
 * Date: 07/05/2019
 */

namespace App\DataProvider;

use ApiPlatform\Core\DataProvider\DenormalizedIdentifiersAwareItemDataProviderInterface;
use ApiPlatform\Core\DataProvider\RestrictedDataProviderInterface;
use ApiPlatform\Core\Exception\InvalidIdentifierException;
use ApiPlatform\Core\Exception\ResourceClassNotSupportedException;
use App\Entity\Customer;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class CustomerItemDataProvider
 * @package App\DataProvider
 */
final class CustomerItemDataProvider implements DenormalizedIdentifiersAwareItemDataProviderInterface, RestrictedDataProviderInterface
{
    private $container;
    private $client;
    private $entity_name;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
        $this->client = $this->container->get('eight_points_guzzle.client.api_365');
        if ($this->container->hasParameter('entity.customer')) {
            $this->entity_name = $this->container->getParameter('entity.customer');
        } else {
            throw new \UnexpectedValueException("Data entity name for customer is not correctly configured");
        }
    }

    /**
     * {@inheritdoc}
     */
    public function supports(string $resourceClass, string $operationName = null, array $context = []): bool
    {
        return Customer::class === $resourceClass;
    }

    /**
     * {@inheritdoc}
     */
    public function getItem(string $resourceClass, $id, string $operationName = null, array $context = []): ?Customer
    {
        $dataAreaId = (isset($id['data_area_id']) && !empty($id['data_area_id'])) ? $id['data_area_id'] : 'lafr';
		if (isset($id['customer_account']) && !empty($id['customer_account'])) {
			$number = $id['customer_account'];
		} else {
			throw new InvalidIdentifierException("You must provide 'data_area_id' and 'customer_account' to identify the requested ressource");
		}

		$res = $this->client->get("data/$this->entity_name(dataAreaId='$dataAreaId',CustomerAccount='$number')");
        $result = strval($res->getBody());
        $customer = json_decode($result, true);
        
        return new Customer($customer);
    }
}
