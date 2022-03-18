<?php


namespace App\DataPersister;

use ApiPlatform\Core\DataPersister\DataPersisterInterface;
use ApiPlatform\Core\DataPersister\ContextAwareDataPersisterInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use App\Entity\SalesOrderLine;
use GuzzleHttp\Exception\BadResponseException;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

final class SalesOrderLineDataPersister implements DataPersisterInterface
{
    private $container;
    private $client;
    private $entity_name;

    /**
     * LicensePlateDataPersister constructor.
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
        $this->client = $this->container->get('eight_points_guzzle.client.api_365');
        if($this->container->hasParameter('entity.sales_order_line')) {
            $this->entity_name = $this->container->getParameter('entity.sales_order_line');
        }else{
            throw new \UnexpectedValueException("Data entity name for SalesOrderLine is not correctly configured");
        }
    }

    /**
     * Is the data supported by the persister?
     */
    public function supports($data, array $context = []): bool
    {
        if (gettype($data) == gettype([]) && array_key_exists('Entity', $data) && $data['Entity'] === 'SalesOrderLine'){
            return true;            
        }
        return $data instanceof SalesOrderLine;
    }

    /**
     * Persists the data.
     *
     * @return object|void Void will not be supported in API Platform 3, an object should always be returned
     */
    public function persist($data, array $context = [])
    {
        $method = $this->container->get('request_stack')->getCurrentRequest()->getMethod();
        switch ($method) {
            case 'POST':
                return $this->post_element($data);
                break;
            case 'PATCH':
                return $this->patch_element($data);
                break;
        }
    }

    public function post_element($data)
    {
        try {
            if(isset($data['DataAreaId'])){
                $data['dataAreaId'] = $data['DataAreaId'];
                unset($data['DataAreaId']);
            }
            if(isset($data['Entity'])){              
                unset($data['Entity']);
            }               

            $res = $this->client->request(
                'POST',
                "data/$this->entity_name",
                ["json" => $data]
            );
            $result = strval($res->getBody());
            $result_array = json_decode($result, true);
            return new SalesOrderLine($result_array);
            
        } catch (BadResponseException $e) {
            $errorDetails = json_decode($e->getResponse()->getBody()->getContents());
            $errorMessage = $errorDetails->error->innererror->message;            
            throw new BadRequestHttpException($errorMessage);
        }
    }


    
    private function patch_element($data)
    {
        try {           
            $jsonData = [];
            $request = $this->container->get('request_stack')->getCurrentRequest();
            $formData = json_decode($request->getContent());
            foreach($formData as $key => $value){
                $jsonData[$key] = $value;
            }    
            $this->client->request(
                'PATCH',
                "data/$this->entity_name(dataAreaId='" . $data->getDataAreaId() . "',InventoryLotId='" . $data->getInventoryLotId() . "')",
                ["json" => $jsonData]
            );
            return $data; // Data it's the merged entity.
        } catch (BadResponseException $e) {
            $errorDetails = json_decode($e->getResponse()->getBody()->getContents());
            $errorMessage = $errorDetails->error->innererror->message;            
            throw new BadRequestHttpException($errorMessage);
        }
    }

    /**
     * Removes the data.
     */
    public function remove($data)
    {
        // TODO: Implement remove() method.
    }
}
   