<?php


namespace App\DataPersister;

use ApiPlatform\Core\DataPersister\DataPersisterInterface;
use ApiPlatform\Core\DataPersister\ContextAwareDataPersisterInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use App\Entity\Customer;
use GuzzleHttp\Exception\BadResponseException;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

final class CustomerDataPersister implements ContextAwareDataPersisterInterface
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
        if ($this->container->hasParameter('entity.customer')) {
            $this->entity_name = $this->container->getParameter('entity.customer');
        } else {
            throw new \UnexpectedValueException("Data entity name for Customer is not correctly configured");
        }
    }

    /**
     * Is the data supported by the persister?
     */
    public function supports($data, array $context = []): bool
    {
        if (gettype($data) == gettype([]) && array_key_exists('Entity', $data) && $data['Entity'] === 'Customer'){
            return true;            
        }
        return $data instanceof Customer;
    }

    /**
     * Persists the data.
     *
     * @return object|void Void will not be supported in API Platform 3, an object should always be returned
     */
    public function persist($data, array $context = [])
    {
        $method = $this->container->get('request_stack')->getCurrentRequest()->getMethod();
        echo $method."<br>";
        switch ($method) {
            case 'POST':
                return $this->post_element($data);
                break;
            case 'PATCH':
                return $this->patch_element($data);
                break;
        }
    }

    /**
     * Removes the data.
     */
    public function remove($data, array $context = [])
    {
        // TODO: Implement remove() method.
    }

    private function post_element($data)
    {
        
        try {
            if (isset($data['DataAreaId'])) {
                $data['dataAreaId'] = $data['DataAreaId'];
                unset($data['DataAreaId']);
            }
            if (isset($data['Entity'])) {
                unset($data['Entity']);
            }

            if (!isset($data['EmployeeResponsibleNumber']) || empty($data['EmployeeResponsibleNumber'])) {
                $data['EmployeeResponsibleNumber'] = $this->container->getParameter('customer.EMPLOYEERESPONSIBLENUMBER');
            }

            if (!isset($data['CreditLimitIsMandatory']) || empty($data['CreditLimitIsMandatory'])) {
                $data['CreditLimitIsMandatory'] = $this->container->getParameter('customer.CREDITLIMITISMANDATORY');
            }

            if (!isset($data['CreditLimit']) || empty($data['CreditLimit'])) {
                $data['CreditLimit'] = $this->container->getParameter('customer.CREDITLIMIT');
            }

            if (!isset($data['CommissionCustomerGroupId']) || empty($data['CommissionCustomerGroupId'])) {
                $data['CommissionCustomerGroupId'] = $this->container->getParameter('customer.COMMISSIONCUSTOMERGROUPID');
            }

            if (!isset($data['CommissionSalesGroupId']) || empty($data['CommissionSalesGroupId'])) {
                $data['CommissionSalesGroupId'] = $this->container->getParameter('customer.COMMISSIONSALESGROUPID');
            }

            if (!isset($data['DeliveryTerms']) || empty($data['DeliveryTerms'])) {
                $data['DeliveryTerms'] = $this->container->getParameter('customer.DELIVERYTERMS');
            }

            if (!isset($data['PrimaryContactEmailPurpose']) || empty($data['PrimaryContactEmailPurpose'])) {
                $data['PrimaryContactEmailPurpose'] = $this->container->getParameter('customer.PRIMARYCONTACTEMAILPURPOSE');
            }

            if (!isset($data['DeliveryReason']) || empty($data['DeliveryReason'])) {
                $data['DeliveryReason'] = $this->container->getParameter('customer.DELIVERYREASON');
            }

            if (!isset($data['AddressBooks']) || empty($data['AddressBooks'])) {
                $data['AddressBooks'] = $this->container->getParameter('customer.ADDRESSBOOKS');
            }

            if (!isset($data['FNDFormNoteQuotation']) || empty($data['FNDFormNoteQuotation'])) {
                $data['FNDFormNoteQuotation'] = $this->container->getParameter('customer.FNDFORMNOTEQUOTATION');
            }

            if (!isset($data['FNDFormNoteConfirmation']) || empty($data['FNDFormNoteConfirmation'])) {
                $data['FNDFormNoteConfirmation'] = $this->container->getParameter('customer.FNDFORMNOTECONFIRMATION');
            }

            if (!isset($data['FNDFormNoteProduction']) || empty($data['FNDFormNoteProduction'])) {
                $data['FNDFormNoteProduction'] = $this->container->getParameter('customer.FNDFORMNOTEPRODUCTION');
            }

            if (!isset($data['FNDFormNotePickingList']) || empty($data['FNDFormNotePickingList'])) {
                $data['FNDFormNotePickingList'] = $this->container->getParameter('customer.FNDFORMNOTEPICKINGLIST');
            }

            if (!isset($data['FNDFormNotePackingSlip']) || empty($data['FNDFormNotePackingSlip'])) {
                $data['FNDFormNotePackingSlip'] = $this->container->getParameter('customer.FNDFORMNOTEPACKINGSLIP');
            }

            if (!isset($data['FNDFormNoteInvoice']) || empty($data['FNDFormNoteInvoice'])) {
                $data['FNDFormNoteInvoice'] = $this->container->getParameter('customer.FNDFORMNOTEINVOICE');
            }

            $res = $this->client->request(
                'POST',
                "data/$this->entity_name",
                ["json" => $data]
            );
            $result = strval($res->getBody());
            $result_array = json_decode($result, true);
            return new Customer($result_array);
            
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
            $formData = json_decode($request->getContent(), true);
            foreach($formData as $key => $value){
                $jsonData[$key] = $value;
            }            
            $this->client->request(
                'PATCH',
                "data/$this->entity_name(dataAreaId='" . $data->getDataAreaId() . "',CustomerAccount='" . $data->getCustomerAccount() . "')",
                ["json" => $jsonData]
            );
            return $data; // Data it's the merged entity.
        } catch (BadResponseException $e) {
            throw new BadRequestHttpException($e->getResponse()->getBody()->getContents());                             
        }
    }
}

