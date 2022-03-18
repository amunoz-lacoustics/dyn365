<?php
/**
 * User: johan.nagou
 * Date: 27/05/2019
 */

namespace App\DataProvider;

use ApiPlatform\Core\DataProvider\DenormalizedIdentifiersAwareItemDataProviderInterface;
use ApiPlatform\Core\DataProvider\RestrictedDataProviderInterface;
use ApiPlatform\Core\Exception\InvalidIdentifierException;
use ApiPlatform\Core\Exception\ResourceClassNotSupportedException;
use App\Entity\SalesOrderLine;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class SalesOrderLineItemDataProvider
 * @package App\DataProvider
 */
final class SalesOrderLineItemDataProvider implements DenormalizedIdentifiersAwareItemDataProviderInterface, RestrictedDataProviderInterface
{
    private $container;
    private $client;
    private $entity_name;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
        $this->client = $this->container->get('eight_points_guzzle.client.api_365');
        if($this->container->hasParameter('entity.sales_order_line')) {
            $this->entity_name = $this->container->getParameter('entity.sales_order_line');
        }else{
            throw new \UnexpectedValueException("Data entity name for sales order line is not correctly configured");
        }
    }

    /**
     * {@inheritdoc}
     */
    public function supports(string $resourceClass, string $operationName = null, array $context = []): bool
    {
        return SalesOrderLine::class === $resourceClass;
    }

    /**
     * {@inheritdoc}
     */
    public function getItem(string $resourceClass, $id, string $operationName = null, array $context = []): ?SalesOrderLine
    {
        $dataAreaId = (isset($id['data_area_id']) && !empty($id['data_area_id'])) ? $id['data_area_id'] : 'lafr';
        if (isset($id['inventory_lot_id']) && !empty($id['inventory_lot_id'])) {
            $number = $id['inventory_lot_id'];
        } else {
            throw new InvalidIdentifierException("You must provide 'data_area_id' and 'inventory_lot_id' to identify the requested ressource");
        }

        $res = $this->client->get("data/$this->entity_name(dataAreaId='$dataAreaId',InventoryLotId='$number')?cross-company=true");
        $result = strval($res->getBody());
        $orderline = json_decode($result, true);

        return new SalesOrderLine($orderline);
    }
}