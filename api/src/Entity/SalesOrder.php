<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiProperty;
use ApiPlatform\Core\Exception\InvalidIdentifierException;

#[ApiResource(mercure: true)]
class SalesOrder
{
	#[ApiProperty(identifier: true)]
    private string $dataAreaId;

    /**
	 * @return string
	 */
	public function getdataAreaId(): string
	{
		return $this->dataAreaId;
	}

    /**
     * Set the value of dataAreaId
     *
     * @param string $dataAreaId
     *
     * @return  self
     */ 
    public function setdataAreaId(string $dataAreaId)
    {
        $this->dataAreaId = $dataAreaId;

        return $this;
    }


	#[ApiProperty(identifier: true)]
    private string $salesOrderNumber;

    /**
	 * @return string
	 */
	public function getSalesOrderNumber(): string
	{
		return $this->salesOrderNumber;
	}

    /**
     * Set the value of salesOrderNumber
     *
     * @param string $salesOrderNumber
     *
     * @return  self
     */ 
    public function setSalesOrderNumber(string $salesOrderNumber)
    {
        $this->salesOrderNumber = $salesOrderNumber;

        return $this;
    }



    private string $orderTotalChargesAmount;

    /**
	 * @return string
	 */
	public function getOrderTotalChargesAmount(): string
	{
		return $this->orderTotalChargesAmount;
	}

    /**
     * Set the value of orderTotalChargesAmount
     *
     * @param string $orderTotalChargesAmount
     *
     * @return  self
     */ 
    public function setOrderTotalChargesAmount(string $orderTotalChargesAmount)
    {
        $this->orderTotalChargesAmount = $orderTotalChargesAmount;

        return $this;
    }



    private string $fiscalDocumentOperationTypeId;

    /**
	 * @return string
	 */
	public function getFiscalDocumentOperationTypeId(): string
	{
		return $this->fiscalDocumentOperationTypeId;
	}

    /**
     * Set the value of fiscalDocumentOperationTypeId
     *
     * @param string $fiscalDocumentOperationTypeId
     *
     * @return  self
     */ 
    public function setFiscalDocumentOperationTypeId(string $fiscalDocumentOperationTypeId)
    {
        $this->fiscalDocumentOperationTypeId = $fiscalDocumentOperationTypeId;

        return $this;
    }



    private string $orderTakerPersonnelNumber;

    /**
	 * @return string
	 */
	public function getOrderTakerPersonnelNumber(): string
	{
		return $this->orderTakerPersonnelNumber;
	}

    /**
     * Set the value of orderTakerPersonnelNumber
     *
     * @param string $orderTakerPersonnelNumber
     *
     * @return  self
     */ 
    public function setOrderTakerPersonnelNumber(string $orderTakerPersonnelNumber)
    {
        $this->orderTakerPersonnelNumber = $orderTakerPersonnelNumber;

        return $this;
    }



    private string $requestedReceiptDate;

    /**
	 * @return string
	 */
	public function getRequestedReceiptDate(): string
	{
		return $this->requestedReceiptDate;
	}

    /**
     * Set the value of requestedReceiptDate
     *
     * @param string $requestedReceiptDate
     *
     * @return  self
     */ 
    public function setRequestedReceiptDate(string $requestedReceiptDate)
    {
        $this->requestedReceiptDate = $requestedReceiptDate;

        return $this;
    }



    private string $eInvoiceDimensionAccountCode;

    /**
	 * @return string
	 */
	public function getEInvoiceDimensionAccountCode(): string
	{
		return $this->eInvoiceDimensionAccountCode;
	}

    /**
     * Set the value of eInvoiceDimensionAccountCode
     *
     * @param string $eInvoiceDimensionAccountCode
     *
     * @return  self
     */ 
    public function setEInvoiceDimensionAccountCode(string $eInvoiceDimensionAccountCode)
    {
        $this->eInvoiceDimensionAccountCode = $eInvoiceDimensionAccountCode;

        return $this;
    }



    private string $isOwnEntryCertificateIssued;

    /**
	 * @return string
	 */
	public function getIsOwnEntryCertificateIssued(): string
	{
		return $this->isOwnEntryCertificateIssued;
	}

    /**
     * Set the value of isOwnEntryCertificateIssued
     *
     * @param string $isOwnEntryCertificateIssued
     *
     * @return  self
     */ 
    public function setIsOwnEntryCertificateIssued(string $isOwnEntryCertificateIssued)
    {
        $this->isOwnEntryCertificateIssued = $isOwnEntryCertificateIssued;

        return $this;
    }



    private string $invoiceAddressStreet;

    /**
	 * @return string
	 */
	public function getInvoiceAddressStreet(): string
	{
		return $this->invoiceAddressStreet;
	}

    /**
     * Set the value of invoiceAddressStreet
     *
     * @param string $invoiceAddressStreet
     *
     * @return  self
     */ 
    public function setInvoiceAddressStreet(string $invoiceAddressStreet)
    {
        $this->invoiceAddressStreet = $invoiceAddressStreet;

        return $this;
    }



    private string $campaignId;

    /**
	 * @return string
	 */
	public function getCampaignId(): string
	{
		return $this->campaignId;
	}

    /**
     * Set the value of campaignId
     *
     * @param string $campaignId
     *
     * @return  self
     */ 
    public function setCampaignId(string $campaignId)
    {
        $this->campaignId = $campaignId;

        return $this;
    }



    private string $formattedDelveryAddress;

    /**
	 * @return string
	 */
	public function getFormattedDelveryAddress(): string
	{
		return $this->formattedDelveryAddress;
	}

    /**
     * Set the value of formattedDelveryAddress
     *
     * @param string $formattedDelveryAddress
     *
     * @return  self
     */ 
    public function setFormattedDelveryAddress(string $formattedDelveryAddress)
    {
        $this->formattedDelveryAddress = $formattedDelveryAddress;

        return $this;
    }



    private string $email;

    /**
	 * @return string
	 */
	public function getEmail(): string
	{
		return $this->email;
	}

    /**
     * Set the value of email
     *
     * @param string $email
     *
     * @return  self
     */ 
    public function setEmail(string $email)
    {
        $this->email = $email;

        return $this;
    }



    private string $baseDocumentLineNumber;

    /**
	 * @return string
	 */
	public function getBaseDocumentLineNumber(): string
	{
		return $this->baseDocumentLineNumber;
	}

    /**
     * Set the value of baseDocumentLineNumber
     *
     * @param string $baseDocumentLineNumber
     *
     * @return  self
     */ 
    public function setBaseDocumentLineNumber(string $baseDocumentLineNumber)
    {
        $this->baseDocumentLineNumber = $baseDocumentLineNumber;

        return $this;
    }



    private string $baseDocumentType;

    /**
	 * @return string
	 */
	public function getBaseDocumentType(): string
	{
		return $this->baseDocumentType;
	}

    /**
     * Set the value of baseDocumentType
     *
     * @param string $baseDocumentType
     *
     * @return  self
     */ 
    public function setBaseDocumentType(string $baseDocumentType)
    {
        $this->baseDocumentType = $baseDocumentType;

        return $this;
    }



    private string $defaultShippingSiteId;

    /**
	 * @return string
	 */
	public function getDefaultShippingSiteId(): string
	{
		return $this->defaultShippingSiteId;
	}

    /**
     * Set the value of defaultShippingSiteId
     *
     * @param string $defaultShippingSiteId
     *
     * @return  self
     */ 
    public function setDefaultShippingSiteId(string $defaultShippingSiteId)
    {
        $this->defaultShippingSiteId = $defaultShippingSiteId;

        return $this;
    }



    private string $transportationBrokerId;

    /**
	 * @return string
	 */
	public function getTransportationBrokerId(): string
	{
		return $this->transportationBrokerId;
	}

    /**
     * Set the value of transportationBrokerId
     *
     * @param string $transportationBrokerId
     *
     * @return  self
     */ 
    public function setTransportationBrokerId(string $transportationBrokerId)
    {
        $this->transportationBrokerId = $transportationBrokerId;

        return $this;
    }



    private string $transportationModeId;

    /**
	 * @return string
	 */
	public function getTransportationModeId(): string
	{
		return $this->transportationModeId;
	}

    /**
     * Set the value of transportationModeId
     *
     * @param string $transportationModeId
     *
     * @return  self
     */ 
    public function setTransportationModeId(string $transportationModeId)
    {
        $this->transportationModeId = $transportationModeId;

        return $this;
    }



    private string $deliveryAddressDescription;

    /**
	 * @return string
	 */
	public function getDeliveryAddressDescription(): string
	{
		return $this->deliveryAddressDescription;
	}

    /**
     * Set the value of deliveryAddressDescription
     *
     * @param string $deliveryAddressDescription
     *
     * @return  self
     */ 
    public function setDeliveryAddressDescription(string $deliveryAddressDescription)
    {
        $this->deliveryAddressDescription = $deliveryAddressDescription;

        return $this;
    }



    private string $cFPSCode;

    /**
	 * @return string
	 */
	public function getCFPSCode(): string
	{
		return $this->cFPSCode;
	}

    /**
     * Set the value of cFPSCode
     *
     * @param string $cFPSCode
     *
     * @return  self
     */ 
    public function setCFPSCode(string $cFPSCode)
    {
        $this->cFPSCode = $cFPSCode;

        return $this;
    }



    private string $isInvoiceAddressPrivate;

    /**
	 * @return string
	 */
	public function getIsInvoiceAddressPrivate(): string
	{
		return $this->isInvoiceAddressPrivate;
	}

    /**
     * Set the value of isInvoiceAddressPrivate
     *
     * @param string $isInvoiceAddressPrivate
     *
     * @return  self
     */ 
    public function setIsInvoiceAddressPrivate(string $isInvoiceAddressPrivate)
    {
        $this->isInvoiceAddressPrivate = $isInvoiceAddressPrivate;

        return $this;
    }



    private string $isSalesProcessingStopped;

    /**
	 * @return string
	 */
	public function getIsSalesProcessingStopped(): string
	{
		return $this->isSalesProcessingStopped;
	}

    /**
     * Set the value of isSalesProcessingStopped
     *
     * @param string $isSalesProcessingStopped
     *
     * @return  self
     */ 
    public function setIsSalesProcessingStopped(string $isSalesProcessingStopped)
    {
        $this->isSalesProcessingStopped = $isSalesProcessingStopped;

        return $this;
    }



    private string $shippingCarrierCustomerAccountNumber;

    /**
	 * @return string
	 */
	public function getShippingCarrierCustomerAccountNumber(): string
	{
		return $this->shippingCarrierCustomerAccountNumber;
	}

    /**
     * Set the value of shippingCarrierCustomerAccountNumber
     *
     * @param string $shippingCarrierCustomerAccountNumber
     *
     * @return  self
     */ 
    public function setShippingCarrierCustomerAccountNumber(string $shippingCarrierCustomerAccountNumber)
    {
        $this->shippingCarrierCustomerAccountNumber = $shippingCarrierCustomerAccountNumber;

        return $this;
    }



    private string $tMACustomerGroupId;

    /**
	 * @return string
	 */
	public function getTMACustomerGroupId(): string
	{
		return $this->tMACustomerGroupId;
	}

    /**
     * Set the value of tMACustomerGroupId
     *
     * @param string $tMACustomerGroupId
     *
     * @return  self
     */ 
    public function setTMACustomerGroupId(string $tMACustomerGroupId)
    {
        $this->tMACustomerGroupId = $tMACustomerGroupId;

        return $this;
    }



    private string $bankSpecificSymbol;

    /**
	 * @return string
	 */
	public function getBankSpecificSymbol(): string
	{
		return $this->bankSpecificSymbol;
	}

    /**
     * Set the value of bankSpecificSymbol
     *
     * @param string $bankSpecificSymbol
     *
     * @return  self
     */ 
    public function setBankSpecificSymbol(string $bankSpecificSymbol)
    {
        $this->bankSpecificSymbol = $bankSpecificSymbol;

        return $this;
    }



    private string $salesOrderStatus;

    /**
	 * @return string
	 */
	public function getSalesOrderStatus(): string
	{
		return $this->salesOrderStatus;
	}

    /**
     * Set the value of salesOrderStatus
     *
     * @param string $salesOrderStatus
     *
     * @return  self
     */ 
    public function setSalesOrderStatus(string $salesOrderStatus)
    {
        $this->salesOrderStatus = $salesOrderStatus;

        return $this;
    }



    private string $numberSequenceGroupId;

    /**
	 * @return string
	 */
	public function getNumberSequenceGroupId(): string
	{
		return $this->numberSequenceGroupId;
	}

    /**
     * Set the value of numberSequenceGroupId
     *
     * @param string $numberSequenceGroupId
     *
     * @return  self
     */ 
    public function setNumberSequenceGroupId(string $numberSequenceGroupId)
    {
        $this->numberSequenceGroupId = $numberSequenceGroupId;

        return $this;
    }



    private string $salesOrderOriginCode;

    /**
	 * @return string
	 */
	public function getSalesOrderOriginCode(): string
	{
		return $this->salesOrderOriginCode;
	}

    /**
     * Set the value of salesOrderOriginCode
     *
     * @param string $salesOrderOriginCode
     *
     * @return  self
     */ 
    public function setSalesOrderOriginCode(string $salesOrderOriginCode)
    {
        $this->salesOrderOriginCode = $salesOrderOriginCode;

        return $this;
    }



    private string $invoiceAddressLatitude;

    /**
	 * @return string
	 */
	public function getInvoiceAddressLatitude(): string
	{
		return $this->invoiceAddressLatitude;
	}

    /**
     * Set the value of invoiceAddressLatitude
     *
     * @param string $invoiceAddressLatitude
     *
     * @return  self
     */ 
    public function setInvoiceAddressLatitude(string $invoiceAddressLatitude)
    {
        $this->invoiceAddressLatitude = $invoiceAddressLatitude;

        return $this;
    }



    private string $customerPaymentFinancialInterestCode;

    /**
	 * @return string
	 */
	public function getCustomerPaymentFinancialInterestCode(): string
	{
		return $this->customerPaymentFinancialInterestCode;
	}

    /**
     * Set the value of customerPaymentFinancialInterestCode
     *
     * @param string $customerPaymentFinancialInterestCode
     *
     * @return  self
     */ 
    public function setCustomerPaymentFinancialInterestCode(string $customerPaymentFinancialInterestCode)
    {
        $this->customerPaymentFinancialInterestCode = $customerPaymentFinancialInterestCode;

        return $this;
    }



    private string $transportationTemplateId;

    /**
	 * @return string
	 */
	public function getTransportationTemplateId(): string
	{
		return $this->transportationTemplateId;
	}

    /**
     * Set the value of transportationTemplateId
     *
     * @param string $transportationTemplateId
     *
     * @return  self
     */ 
    public function setTransportationTemplateId(string $transportationTemplateId)
    {
        $this->transportationTemplateId = $transportationTemplateId;

        return $this;
    }



    private string $invoiceAddressStreetInKana;

    /**
	 * @return string
	 */
	public function getInvoiceAddressStreetInKana(): string
	{
		return $this->invoiceAddressStreetInKana;
	}

    /**
     * Set the value of invoiceAddressStreetInKana
     *
     * @param string $invoiceAddressStreetInKana
     *
     * @return  self
     */ 
    public function setInvoiceAddressStreetInKana(string $invoiceAddressStreetInKana)
    {
        $this->invoiceAddressStreetInKana = $invoiceAddressStreetInKana;

        return $this;
    }



    private string $bankConstantSymbol;

    /**
	 * @return string
	 */
	public function getBankConstantSymbol(): string
	{
		return $this->bankConstantSymbol;
	}

    /**
     * Set the value of bankConstantSymbol
     *
     * @param string $bankConstantSymbol
     *
     * @return  self
     */ 
    public function setBankConstantSymbol(string $bankConstantSymbol)
    {
        $this->bankConstantSymbol = $bankConstantSymbol;

        return $this;
    }



    private string $orderTotalTaxAmount;

    /**
	 * @return string
	 */
	public function getOrderTotalTaxAmount(): string
	{
		return $this->orderTotalTaxAmount;
	}

    /**
     * Set the value of orderTotalTaxAmount
     *
     * @param string $orderTotalTaxAmount
     *
     * @return  self
     */ 
    public function setOrderTotalTaxAmount(string $orderTotalTaxAmount)
    {
        $this->orderTotalTaxAmount = $orderTotalTaxAmount;

        return $this;
    }



    private string $isOneTimeCustomer;

    /**
	 * @return string
	 */
	public function getIsOneTimeCustomer(): string
	{
		return $this->isOneTimeCustomer;
	}

    /**
     * Set the value of isOneTimeCustomer
     *
     * @param string $isOneTimeCustomer
     *
     * @return  self
     */ 
    public function setIsOneTimeCustomer(string $isOneTimeCustomer)
    {
        $this->isOneTimeCustomer = $isOneTimeCustomer;

        return $this;
    }



    private string $salesOrderPoolId;

    /**
	 * @return string
	 */
	public function getSalesOrderPoolId(): string
	{
		return $this->salesOrderPoolId;
	}

    /**
     * Set the value of salesOrderPoolId
     *
     * @param string $salesOrderPoolId
     *
     * @return  self
     */ 
    public function setSalesOrderPoolId(string $salesOrderPoolId)
    {
        $this->salesOrderPoolId = $salesOrderPoolId;

        return $this;
    }



    private string $deliveryAddressCountryRegionId;

    /**
	 * @return string
	 */
	public function getDeliveryAddressCountryRegionId(): string
	{
		return $this->deliveryAddressCountryRegionId;
	}

    /**
     * Set the value of deliveryAddressCountryRegionId
     *
     * @param string $deliveryAddressCountryRegionId
     *
     * @return  self
     */ 
    public function setDeliveryAddressCountryRegionId(string $deliveryAddressCountryRegionId)
    {
        $this->deliveryAddressCountryRegionId = $deliveryAddressCountryRegionId;

        return $this;
    }



    private string $deliveryAddressLatitude;

    /**
	 * @return string
	 */
	public function getDeliveryAddressLatitude(): string
	{
		return $this->deliveryAddressLatitude;
	}

    /**
     * Set the value of deliveryAddressLatitude
     *
     * @param string $deliveryAddressLatitude
     *
     * @return  self
     */ 
    public function setDeliveryAddressLatitude(string $deliveryAddressLatitude)
    {
        $this->deliveryAddressLatitude = $deliveryAddressLatitude;

        return $this;
    }



    private string $totalDiscountCustomerGroupCode;

    /**
	 * @return string
	 */
	public function getTotalDiscountCustomerGroupCode(): string
	{
		return $this->totalDiscountCustomerGroupCode;
	}

    /**
     * Set the value of totalDiscountCustomerGroupCode
     *
     * @param string $totalDiscountCustomerGroupCode
     *
     * @return  self
     */ 
    public function setTotalDiscountCustomerGroupCode(string $totalDiscountCustomerGroupCode)
    {
        $this->totalDiscountCustomerGroupCode = $totalDiscountCustomerGroupCode;

        return $this;
    }



    private string $deliveryAddressCity;

    /**
	 * @return string
	 */
	public function getDeliveryAddressCity(): string
	{
		return $this->deliveryAddressCity;
	}

    /**
     * Set the value of deliveryAddressCity
     *
     * @param string $deliveryAddressCity
     *
     * @return  self
     */ 
    public function setDeliveryAddressCity(string $deliveryAddressCity)
    {
        $this->deliveryAddressCity = $deliveryAddressCity;

        return $this;
    }



    private string $salesRebateCustomerGroupId;

    /**
	 * @return string
	 */
	public function getSalesRebateCustomerGroupId(): string
	{
		return $this->salesRebateCustomerGroupId;
	}

    /**
     * Set the value of salesRebateCustomerGroupId
     *
     * @param string $salesRebateCustomerGroupId
     *
     * @return  self
     */ 
    public function setSalesRebateCustomerGroupId(string $salesRebateCustomerGroupId)
    {
        $this->salesRebateCustomerGroupId = $salesRebateCustomerGroupId;

        return $this;
    }



    private string $thirdPartySalesDigitalPlatformCNPJ;

    /**
	 * @return string
	 */
	public function getThirdPartySalesDigitalPlatformCNPJ(): string
	{
		return $this->thirdPartySalesDigitalPlatformCNPJ;
	}

    /**
     * Set the value of thirdPartySalesDigitalPlatformCNPJ
     *
     * @param string $thirdPartySalesDigitalPlatformCNPJ
     *
     * @return  self
     */ 
    public function setThirdPartySalesDigitalPlatformCNPJ(string $thirdPartySalesDigitalPlatformCNPJ)
    {
        $this->thirdPartySalesDigitalPlatformCNPJ = $thirdPartySalesDigitalPlatformCNPJ;

        return $this;
    }



    private string $salesOrderPromisingMethod;

    /**
	 * @return string
	 */
	public function getSalesOrderPromisingMethod(): string
	{
		return $this->salesOrderPromisingMethod;
	}

    /**
     * Set the value of salesOrderPromisingMethod
     *
     * @param string $salesOrderPromisingMethod
     *
     * @return  self
     */ 
    public function setSalesOrderPromisingMethod(string $salesOrderPromisingMethod)
    {
        $this->salesOrderPromisingMethod = $salesOrderPromisingMethod;

        return $this;
    }



    private string $projectId;

    /**
	 * @return string
	 */
	public function getProjectId(): string
	{
		return $this->projectId;
	}

    /**
     * Set the value of projectId
     *
     * @param string $projectId
     *
     * @return  self
     */ 
    public function setProjectId(string $projectId)
    {
        $this->projectId = $projectId;

        return $this;
    }



    private string $shippingCarrierId;

    /**
	 * @return string
	 */
	public function getShippingCarrierId(): string
	{
		return $this->shippingCarrierId;
	}

    /**
     * Set the value of shippingCarrierId
     *
     * @param string $shippingCarrierId
     *
     * @return  self
     */ 
    public function setShippingCarrierId(string $shippingCarrierId)
    {
        $this->shippingCarrierId = $shippingCarrierId;

        return $this;
    }



    private string $totalDiscountPercentage;

    /**
	 * @return string
	 */
	public function getTotalDiscountPercentage(): string
	{
		return $this->totalDiscountPercentage;
	}

    /**
     * Set the value of totalDiscountPercentage
     *
     * @param string $totalDiscountPercentage
     *
     * @return  self
     */ 
    public function setTotalDiscountPercentage(string $totalDiscountPercentage)
    {
        $this->totalDiscountPercentage = $totalDiscountPercentage;

        return $this;
    }



    private string $deliveryAddressDistrictName;

    /**
	 * @return string
	 */
	public function getDeliveryAddressDistrictName(): string
	{
		return $this->deliveryAddressDistrictName;
	}

    /**
     * Set the value of deliveryAddressDistrictName
     *
     * @param string $deliveryAddressDistrictName
     *
     * @return  self
     */ 
    public function setDeliveryAddressDistrictName(string $deliveryAddressDistrictName)
    {
        $this->deliveryAddressDistrictName = $deliveryAddressDistrictName;

        return $this;
    }



    private string $deliveryAddressCountyId;

    /**
	 * @return string
	 */
	public function getDeliveryAddressCountyId(): string
	{
		return $this->deliveryAddressCountyId;
	}

    /**
     * Set the value of deliveryAddressCountyId
     *
     * @param string $deliveryAddressCountyId
     *
     * @return  self
     */ 
    public function setDeliveryAddressCountyId(string $deliveryAddressCountyId)
    {
        $this->deliveryAddressCountyId = $deliveryAddressCountyId;

        return $this;
    }



    private string $confirmedReceiptDate;

    /**
	 * @return string
	 */
	public function getConfirmedReceiptDate(): string
	{
		return $this->confirmedReceiptDate;
	}

    /**
     * Set the value of confirmedReceiptDate
     *
     * @param string $confirmedReceiptDate
     *
     * @return  self
     */ 
    public function setConfirmedReceiptDate(string $confirmedReceiptDate)
    {
        $this->confirmedReceiptDate = $confirmedReceiptDate;

        return $this;
    }



    private string $baseDocumentItemNumber;

    /**
	 * @return string
	 */
	public function getBaseDocumentItemNumber(): string
	{
		return $this->baseDocumentItemNumber;
	}

    /**
     * Set the value of baseDocumentItemNumber
     *
     * @param string $baseDocumentItemNumber
     *
     * @return  self
     */ 
    public function setBaseDocumentItemNumber(string $baseDocumentItemNumber)
    {
        $this->baseDocumentItemNumber = $baseDocumentItemNumber;

        return $this;
    }



    private string $deliveryAddressZipCode;

    /**
	 * @return string
	 */
	public function getDeliveryAddressZipCode(): string
	{
		return $this->deliveryAddressZipCode;
	}

    /**
     * Set the value of deliveryAddressZipCode
     *
     * @param string $deliveryAddressZipCode
     *
     * @return  self
     */ 
    public function setDeliveryAddressZipCode(string $deliveryAddressZipCode)
    {
        $this->deliveryAddressZipCode = $deliveryAddressZipCode;

        return $this;
    }



    private string $fiscalOperationPresenceType;

    /**
	 * @return string
	 */
	public function getFiscalOperationPresenceType(): string
	{
		return $this->fiscalOperationPresenceType;
	}

    /**
     * Set the value of fiscalOperationPresenceType
     *
     * @param string $fiscalOperationPresenceType
     *
     * @return  self
     */ 
    public function setFiscalOperationPresenceType(string $fiscalOperationPresenceType)
    {
        $this->fiscalOperationPresenceType = $fiscalOperationPresenceType;

        return $this;
    }



    private string $quotationNumber;

    /**
	 * @return string
	 */
	public function getQuotationNumber(): string
	{
		return $this->quotationNumber;
	}

    /**
     * Set the value of quotationNumber
     *
     * @param string $quotationNumber
     *
     * @return  self
     */ 
    public function setQuotationNumber(string $quotationNumber)
    {
        $this->quotationNumber = $quotationNumber;

        return $this;
    }



    private string $isConsolidatedInvoiceTarget;

    /**
	 * @return string
	 */
	public function getIsConsolidatedInvoiceTarget(): string
	{
		return $this->isConsolidatedInvoiceTarget;
	}

    /**
     * Set the value of isConsolidatedInvoiceTarget
     *
     * @param string $isConsolidatedInvoiceTarget
     *
     * @return  self
     */ 
    public function setIsConsolidatedInvoiceTarget(string $isConsolidatedInvoiceTarget)
    {
        $this->isConsolidatedInvoiceTarget = $isConsolidatedInvoiceTarget;

        return $this;
    }



    private string $languageId;

    /**
	 * @return string
	 */
	public function getLanguageId(): string
	{
		return $this->languageId;
	}

    /**
     * Set the value of languageId
     *
     * @param string $languageId
     *
     * @return  self
     */ 
    public function setLanguageId(string $languageId)
    {
        $this->languageId = $languageId;

        return $this;
    }



    private string $deliveryAddressDunsNumber;

    /**
	 * @return string
	 */
	public function getDeliveryAddressDunsNumber(): string
	{
		return $this->deliveryAddressDunsNumber;
	}

    /**
     * Set the value of deliveryAddressDunsNumber
     *
     * @param string $deliveryAddressDunsNumber
     *
     * @return  self
     */ 
    public function setDeliveryAddressDunsNumber(string $deliveryAddressDunsNumber)
    {
        $this->deliveryAddressDunsNumber = $deliveryAddressDunsNumber;

        return $this;
    }



    private string $multilineDiscountCustomerGroupCode;

    /**
	 * @return string
	 */
	public function getMultilineDiscountCustomerGroupCode(): string
	{
		return $this->multilineDiscountCustomerGroupCode;
	}

    /**
     * Set the value of multilineDiscountCustomerGroupCode
     *
     * @param string $multilineDiscountCustomerGroupCode
     *
     * @return  self
     */ 
    public function setMultilineDiscountCustomerGroupCode(string $multilineDiscountCustomerGroupCode)
    {
        $this->multilineDiscountCustomerGroupCode = $multilineDiscountCustomerGroupCode;

        return $this;
    }



    private string $baseDocumentNumber;

    /**
	 * @return string
	 */
	public function getBaseDocumentNumber(): string
	{
		return $this->baseDocumentNumber;
	}

    /**
     * Set the value of baseDocumentNumber
     *
     * @param string $baseDocumentNumber
     *
     * @return  self
     */ 
    public function setBaseDocumentNumber(string $baseDocumentNumber)
    {
        $this->baseDocumentNumber = $baseDocumentNumber;

        return $this;
    }



    private string $invoiceAddressStateId;

    /**
	 * @return string
	 */
	public function getInvoiceAddressStateId(): string
	{
		return $this->invoiceAddressStateId;
	}

    /**
     * Set the value of invoiceAddressStateId
     *
     * @param string $invoiceAddressStateId
     *
     * @return  self
     */ 
    public function setInvoiceAddressStateId(string $invoiceAddressStateId)
    {
        $this->invoiceAddressStateId = $invoiceAddressStateId;

        return $this;
    }



    private string $serviceFiscalInformationCode;

    /**
	 * @return string
	 */
	public function getServiceFiscalInformationCode(): string
	{
		return $this->serviceFiscalInformationCode;
	}

    /**
     * Set the value of serviceFiscalInformationCode
     *
     * @param string $serviceFiscalInformationCode
     *
     * @return  self
     */ 
    public function setServiceFiscalInformationCode(string $serviceFiscalInformationCode)
    {
        $this->serviceFiscalInformationCode = $serviceFiscalInformationCode;

        return $this;
    }



    private string $customerPaymentMethodSpecificationName;

    /**
	 * @return string
	 */
	public function getCustomerPaymentMethodSpecificationName(): string
	{
		return $this->customerPaymentMethodSpecificationName;
	}

    /**
     * Set the value of customerPaymentMethodSpecificationName
     *
     * @param string $customerPaymentMethodSpecificationName
     *
     * @return  self
     */ 
    public function setCustomerPaymentMethodSpecificationName(string $customerPaymentMethodSpecificationName)
    {
        $this->customerPaymentMethodSpecificationName = $customerPaymentMethodSpecificationName;

        return $this;
    }



    private string $commissionCustomerGroupId;

    /**
	 * @return string
	 */
	public function getCommissionCustomerGroupId(): string
	{
		return $this->commissionCustomerGroupId;
	}

    /**
     * Set the value of commissionCustomerGroupId
     *
     * @param string $commissionCustomerGroupId
     *
     * @return  self
     */ 
    public function setCommissionCustomerGroupId(string $commissionCustomerGroupId)
    {
        $this->commissionCustomerGroupId = $commissionCustomerGroupId;

        return $this;
    }



    private string $deliveryAddressName;

    /**
	 * @return string
	 */
	public function getDeliveryAddressName(): string
	{
		return $this->deliveryAddressName;
	}

    /**
     * Set the value of deliveryAddressName
     *
     * @param string $deliveryAddressName
     *
     * @return  self
     */ 
    public function setDeliveryAddressName(string $deliveryAddressName)
    {
        $this->deliveryAddressName = $deliveryAddressName;

        return $this;
    }



    private string $invoiceAddressCountryRegionId;

    /**
	 * @return string
	 */
	public function getInvoiceAddressCountryRegionId(): string
	{
		return $this->invoiceAddressCountryRegionId;
	}

    /**
     * Set the value of invoiceAddressCountryRegionId
     *
     * @param string $invoiceAddressCountryRegionId
     *
     * @return  self
     */ 
    public function setInvoiceAddressCountryRegionId(string $invoiceAddressCountryRegionId)
    {
        $this->invoiceAddressCountryRegionId = $invoiceAddressCountryRegionId;

        return $this;
    }



    private string $paymentTermsBaseDate;

    /**
	 * @return string
	 */
	public function getPaymentTermsBaseDate(): string
	{
		return $this->paymentTermsBaseDate;
	}

    /**
     * Set the value of paymentTermsBaseDate
     *
     * @param string $paymentTermsBaseDate
     *
     * @return  self
     */ 
    public function setPaymentTermsBaseDate(string $paymentTermsBaseDate)
    {
        $this->paymentTermsBaseDate = $paymentTermsBaseDate;

        return $this;
    }



    private string $deliveryAddressStreetNumber;

    /**
	 * @return string
	 */
	public function getDeliveryAddressStreetNumber(): string
	{
		return $this->deliveryAddressStreetNumber;
	}

    /**
     * Set the value of deliveryAddressStreetNumber
     *
     * @param string $deliveryAddressStreetNumber
     *
     * @return  self
     */ 
    public function setDeliveryAddressStreetNumber(string $deliveryAddressStreetNumber)
    {
        $this->deliveryAddressStreetNumber = $deliveryAddressStreetNumber;

        return $this;
    }



    private string $creditNoteReasonCode;

    /**
	 * @return string
	 */
	public function getCreditNoteReasonCode(): string
	{
		return $this->creditNoteReasonCode;
	}

    /**
     * Set the value of creditNoteReasonCode
     *
     * @param string $creditNoteReasonCode
     *
     * @return  self
     */ 
    public function setCreditNoteReasonCode(string $creditNoteReasonCode)
    {
        $this->creditNoteReasonCode = $creditNoteReasonCode;

        return $this;
    }



    private string $deliveryAddressStreetInKana;

    /**
	 * @return string
	 */
	public function getDeliveryAddressStreetInKana(): string
	{
		return $this->deliveryAddressStreetInKana;
	}

    /**
     * Set the value of deliveryAddressStreetInKana
     *
     * @param string $deliveryAddressStreetInKana
     *
     * @return  self
     */ 
    public function setDeliveryAddressStreetInKana(string $deliveryAddressStreetInKana)
    {
        $this->deliveryAddressStreetInKana = $deliveryAddressStreetInKana;

        return $this;
    }



    private string $chargeCustomerGroupId;

    /**
	 * @return string
	 */
	public function getChargeCustomerGroupId(): string
	{
		return $this->chargeCustomerGroupId;
	}

    /**
     * Set the value of chargeCustomerGroupId
     *
     * @param string $chargeCustomerGroupId
     *
     * @return  self
     */ 
    public function setChargeCustomerGroupId(string $chargeCustomerGroupId)
    {
        $this->chargeCustomerGroupId = $chargeCustomerGroupId;

        return $this;
    }



    private string $invoiceAddressStreetNumber;

    /**
	 * @return string
	 */
	public function getInvoiceAddressStreetNumber(): string
	{
		return $this->invoiceAddressStreetNumber;
	}

    /**
     * Set the value of invoiceAddressStreetNumber
     *
     * @param string $invoiceAddressStreetNumber
     *
     * @return  self
     */ 
    public function setInvoiceAddressStreetNumber(string $invoiceAddressStreetNumber)
    {
        $this->invoiceAddressStreetNumber = $invoiceAddressStreetNumber;

        return $this;
    }



    private string $isDeliveryAddressPrivate;

    /**
	 * @return string
	 */
	public function getIsDeliveryAddressPrivate(): string
	{
		return $this->isDeliveryAddressPrivate;
	}

    /**
     * Set the value of isDeliveryAddressPrivate
     *
     * @param string $isDeliveryAddressPrivate
     *
     * @return  self
     */ 
    public function setIsDeliveryAddressPrivate(string $isDeliveryAddressPrivate)
    {
        $this->isDeliveryAddressPrivate = $isDeliveryAddressPrivate;

        return $this;
    }



    private string $taxExemptNumber;

    /**
	 * @return string
	 */
	public function getTaxExemptNumber(): string
	{
		return $this->taxExemptNumber;
	}

    /**
     * Set the value of taxExemptNumber
     *
     * @param string $taxExemptNumber
     *
     * @return  self
     */ 
    public function setTaxExemptNumber(string $taxExemptNumber)
    {
        $this->taxExemptNumber = $taxExemptNumber;

        return $this;
    }



    private string $areTotalsCalculated;

    /**
	 * @return string
	 */
	public function getAreTotalsCalculated(): string
	{
		return $this->areTotalsCalculated;
	}

    /**
     * Set the value of areTotalsCalculated
     *
     * @param string $areTotalsCalculated
     *
     * @return  self
     */ 
    public function setAreTotalsCalculated(string $areTotalsCalculated)
    {
        $this->areTotalsCalculated = $areTotalsCalculated;

        return $this;
    }



    private string $totalDiscountAmount;

    /**
	 * @return string
	 */
	public function getTotalDiscountAmount(): string
	{
		return $this->totalDiscountAmount;
	}

    /**
     * Set the value of totalDiscountAmount
     *
     * @param string $totalDiscountAmount
     *
     * @return  self
     */ 
    public function setTotalDiscountAmount(string $totalDiscountAmount)
    {
        $this->totalDiscountAmount = $totalDiscountAmount;

        return $this;
    }



    private string $orderTotalAmount;

    /**
	 * @return string
	 */
	public function getOrderTotalAmount(): string
	{
		return $this->orderTotalAmount;
	}

    /**
     * Set the value of orderTotalAmount
     *
     * @param string $orderTotalAmount
     *
     * @return  self
     */ 
    public function setOrderTotalAmount(string $orderTotalAmount)
    {
        $this->orderTotalAmount = $orderTotalAmount;

        return $this;
    }



    private string $customersOrderReference;

    /**
	 * @return string
	 */
	public function getCustomersOrderReference(): string
	{
		return $this->customersOrderReference;
	}

    /**
     * Set the value of customersOrderReference
     *
     * @param string $customersOrderReference
     *
     * @return  self
     */ 
    public function setCustomersOrderReference(string $customersOrderReference)
    {
        $this->customersOrderReference = $customersOrderReference;

        return $this;
    }



    private string $formattedInvoiceAddress;

    /**
	 * @return string
	 */
	public function getFormattedInvoiceAddress(): string
	{
		return $this->formattedInvoiceAddress;
	}

    /**
     * Set the value of formattedInvoiceAddress
     *
     * @param string $formattedInvoiceAddress
     *
     * @return  self
     */ 
    public function setFormattedInvoiceAddress(string $formattedInvoiceAddress)
    {
        $this->formattedInvoiceAddress = $formattedInvoiceAddress;

        return $this;
    }



    private string $orderResponsiblePersonnelNumber;

    /**
	 * @return string
	 */
	public function getOrderResponsiblePersonnelNumber(): string
	{
		return $this->orderResponsiblePersonnelNumber;
	}

    /**
     * Set the value of orderResponsiblePersonnelNumber
     *
     * @param string $orderResponsiblePersonnelNumber
     *
     * @return  self
     */ 
    public function setOrderResponsiblePersonnelNumber(string $orderResponsiblePersonnelNumber)
    {
        $this->orderResponsiblePersonnelNumber = $orderResponsiblePersonnelNumber;

        return $this;
    }



    private string $exportReason;

    /**
	 * @return string
	 */
	public function getExportReason(): string
	{
		return $this->exportReason;
	}

    /**
     * Set the value of exportReason
     *
     * @param string $exportReason
     *
     * @return  self
     */ 
    public function setExportReason(string $exportReason)
    {
        $this->exportReason = $exportReason;

        return $this;
    }



    private string $deliveryAddressCountryRegionISOCode;

    /**
	 * @return string
	 */
	public function getDeliveryAddressCountryRegionISOCode(): string
	{
		return $this->deliveryAddressCountryRegionISOCode;
	}

    /**
     * Set the value of deliveryAddressCountryRegionISOCode
     *
     * @param string $deliveryAddressCountryRegionISOCode
     *
     * @return  self
     */ 
    public function setDeliveryAddressCountryRegionISOCode(string $deliveryAddressCountryRegionISOCode)
    {
        $this->deliveryAddressCountryRegionISOCode = $deliveryAddressCountryRegionISOCode;

        return $this;
    }



    private string $cashDiscountCode;

    /**
	 * @return string
	 */
	public function getCashDiscountCode(): string
	{
		return $this->cashDiscountCode;
	}

    /**
     * Set the value of cashDiscountCode
     *
     * @param string $cashDiscountCode
     *
     * @return  self
     */ 
    public function setCashDiscountCode(string $cashDiscountCode)
    {
        $this->cashDiscountCode = $cashDiscountCode;

        return $this;
    }



    private string $orderOrAgreementCode;

    /**
	 * @return string
	 */
	public function getOrderOrAgreementCode(): string
	{
		return $this->orderOrAgreementCode;
	}

    /**
     * Set the value of orderOrAgreementCode
     *
     * @param string $orderOrAgreementCode
     *
     * @return  self
     */ 
    public function setOrderOrAgreementCode(string $orderOrAgreementCode)
    {
        $this->orderOrAgreementCode = $orderOrAgreementCode;

        return $this;
    }



    private string $paymentScheduleName;

    /**
	 * @return string
	 */
	public function getPaymentScheduleName(): string
	{
		return $this->paymentScheduleName;
	}

    /**
     * Set the value of paymentScheduleName
     *
     * @param string $paymentScheduleName
     *
     * @return  self
     */ 
    public function setPaymentScheduleName(string $paymentScheduleName)
    {
        $this->paymentScheduleName = $paymentScheduleName;

        return $this;
    }



    private string $invoiceAddressCountryRegionISOCode;

    /**
	 * @return string
	 */
	public function getInvoiceAddressCountryRegionISOCode(): string
	{
		return $this->invoiceAddressCountryRegionISOCode;
	}

    /**
     * Set the value of invoiceAddressCountryRegionISOCode
     *
     * @param string $invoiceAddressCountryRegionISOCode
     *
     * @return  self
     */ 
    public function setInvoiceAddressCountryRegionISOCode(string $invoiceAddressCountryRegionISOCode)
    {
        $this->invoiceAddressCountryRegionISOCode = $invoiceAddressCountryRegionISOCode;

        return $this;
    }



    private string $intrastatTransactionCode;

    /**
	 * @return string
	 */
	public function getIntrastatTransactionCode(): string
	{
		return $this->intrastatTransactionCode;
	}

    /**
     * Set the value of intrastatTransactionCode
     *
     * @param string $intrastatTransactionCode
     *
     * @return  self
     */ 
    public function setIntrastatTransactionCode(string $intrastatTransactionCode)
    {
        $this->intrastatTransactionCode = $intrastatTransactionCode;

        return $this;
    }



    private string $uRL;

    /**
	 * @return string
	 */
	public function getURL(): string
	{
		return $this->uRL;
	}

    /**
     * Set the value of uRL
     *
     * @param string $uRL
     *
     * @return  self
     */ 
    public function setURL(string $uRL)
    {
        $this->uRL = $uRL;

        return $this;
    }



    private string $orderTotalDiscountAmount;

    /**
	 * @return string
	 */
	public function getOrderTotalDiscountAmount(): string
	{
		return $this->orderTotalDiscountAmount;
	}

    /**
     * Set the value of orderTotalDiscountAmount
     *
     * @param string $orderTotalDiscountAmount
     *
     * @return  self
     */ 
    public function setOrderTotalDiscountAmount(string $orderTotalDiscountAmount)
    {
        $this->orderTotalDiscountAmount = $orderTotalDiscountAmount;

        return $this;
    }



    private string $currencyCode;

    /**
	 * @return string
	 */
	public function getCurrencyCode(): string
	{
		return $this->currencyCode;
	}

    /**
     * Set the value of currencyCode
     *
     * @param string $currencyCode
     *
     * @return  self
     */ 
    public function setCurrencyCode(string $currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }



    private string $invoiceType;

    /**
	 * @return string
	 */
	public function getInvoiceType(): string
	{
		return $this->invoiceType;
	}

    /**
     * Set the value of invoiceType
     *
     * @param string $invoiceType
     *
     * @return  self
     */ 
    public function setInvoiceType(string $invoiceType)
    {
        $this->invoiceType = $invoiceType;

        return $this;
    }



    private string $orderCreationDateTime;

    /**
	 * @return string
	 */
	public function getOrderCreationDateTime(): string
	{
		return $this->orderCreationDateTime;
	}

    /**
     * Set the value of orderCreationDateTime
     *
     * @param string $orderCreationDateTime
     *
     * @return  self
     */ 
    public function setOrderCreationDateTime(string $orderCreationDateTime)
    {
        $this->orderCreationDateTime = $orderCreationDateTime;

        return $this;
    }



    private string $arePricesIncludingSalesTax;

    /**
	 * @return string
	 */
	public function getArePricesIncludingSalesTax(): string
	{
		return $this->arePricesIncludingSalesTax;
	}

    /**
     * Set the value of arePricesIncludingSalesTax
     *
     * @param string $arePricesIncludingSalesTax
     *
     * @return  self
     */ 
    public function setArePricesIncludingSalesTax(string $arePricesIncludingSalesTax)
    {
        $this->arePricesIncludingSalesTax = $arePricesIncludingSalesTax;

        return $this;
    }



    private string $invoiceCustomerAccountNumber;

    /**
	 * @return string
	 */
	public function getInvoiceCustomerAccountNumber(): string
	{
		return $this->invoiceCustomerAccountNumber;
	}

    /**
     * Set the value of invoiceCustomerAccountNumber
     *
     * @param string $invoiceCustomerAccountNumber
     *
     * @return  self
     */ 
    public function setInvoiceCustomerAccountNumber(string $invoiceCustomerAccountNumber)
    {
        $this->invoiceCustomerAccountNumber = $invoiceCustomerAccountNumber;

        return $this;
    }



    private string $deliveryAddressLocationId;

    /**
	 * @return string
	 */
	public function getDeliveryAddressLocationId(): string
	{
		return $this->deliveryAddressLocationId;
	}

    /**
     * Set the value of deliveryAddressLocationId
     *
     * @param string $deliveryAddressLocationId
     *
     * @return  self
     */ 
    public function setDeliveryAddressLocationId(string $deliveryAddressLocationId)
    {
        $this->deliveryAddressLocationId = $deliveryAddressLocationId;

        return $this;
    }



    private string $commissionSalesRepresentativeGroupId;

    /**
	 * @return string
	 */
	public function getCommissionSalesRepresentativeGroupId(): string
	{
		return $this->commissionSalesRepresentativeGroupId;
	}

    /**
     * Set the value of commissionSalesRepresentativeGroupId
     *
     * @param string $commissionSalesRepresentativeGroupId
     *
     * @return  self
     */ 
    public function setCommissionSalesRepresentativeGroupId(string $commissionSalesRepresentativeGroupId)
    {
        $this->commissionSalesRepresentativeGroupId = $commissionSalesRepresentativeGroupId;

        return $this;
    }



    private string $customerTransactionSettlementType;

    /**
	 * @return string
	 */
	public function getCustomerTransactionSettlementType(): string
	{
		return $this->customerTransactionSettlementType;
	}

    /**
     * Set the value of customerTransactionSettlementType
     *
     * @param string $customerTransactionSettlementType
     *
     * @return  self
     */ 
    public function setCustomerTransactionSettlementType(string $customerTransactionSettlementType)
    {
        $this->customerTransactionSettlementType = $customerTransactionSettlementType;

        return $this;
    }



    private string $invoiceAddressCityInKana;

    /**
	 * @return string
	 */
	public function getInvoiceAddressCityInKana(): string
	{
		return $this->invoiceAddressCityInKana;
	}

    /**
     * Set the value of invoiceAddressCityInKana
     *
     * @param string $invoiceAddressCityInKana
     *
     * @return  self
     */ 
    public function setInvoiceAddressCityInKana(string $invoiceAddressCityInKana)
    {
        $this->invoiceAddressCityInKana = $invoiceAddressCityInKana;

        return $this;
    }



    private string $willAutomaticInventoryReservationConsiderBatchAttributes;

    /**
	 * @return string
	 */
	public function getWillAutomaticInventoryReservationConsiderBatchAttributes(): string
	{
		return $this->willAutomaticInventoryReservationConsiderBatchAttributes;
	}

    /**
     * Set the value of willAutomaticInventoryReservationConsiderBatchAttributes
     *
     * @param string $willAutomaticInventoryReservationConsiderBatchAttributes
     *
     * @return  self
     */ 
    public function setWillAutomaticInventoryReservationConsiderBatchAttributes(string $willAutomaticInventoryReservationConsiderBatchAttributes)
    {
        $this->willAutomaticInventoryReservationConsiderBatchAttributes = $willAutomaticInventoryReservationConsiderBatchAttributes;

        return $this;
    }



    private string $intrastatStatisticsProcedureCode;

    /**
	 * @return string
	 */
	public function getIntrastatStatisticsProcedureCode(): string
	{
		return $this->intrastatStatisticsProcedureCode;
	}

    /**
     * Set the value of intrastatStatisticsProcedureCode
     *
     * @param string $intrastatStatisticsProcedureCode
     *
     * @return  self
     */ 
    public function setIntrastatStatisticsProcedureCode(string $intrastatStatisticsProcedureCode)
    {
        $this->intrastatStatisticsProcedureCode = $intrastatStatisticsProcedureCode;

        return $this;
    }



    private string $isEInvoiceDimensionAccountCodeSpecifiedPerLine;

    /**
	 * @return string
	 */
	public function getIsEInvoiceDimensionAccountCodeSpecifiedPerLine(): string
	{
		return $this->isEInvoiceDimensionAccountCodeSpecifiedPerLine;
	}

    /**
     * Set the value of isEInvoiceDimensionAccountCodeSpecifiedPerLine
     *
     * @param string $isEInvoiceDimensionAccountCodeSpecifiedPerLine
     *
     * @return  self
     */ 
    public function setIsEInvoiceDimensionAccountCodeSpecifiedPerLine(string $isEInvoiceDimensionAccountCodeSpecifiedPerLine)
    {
        $this->isEInvoiceDimensionAccountCodeSpecifiedPerLine = $isEInvoiceDimensionAccountCodeSpecifiedPerLine;

        return $this;
    }



    private string $deliveryAddressStreet;

    /**
	 * @return string
	 */
	public function getDeliveryAddressStreet(): string
	{
		return $this->deliveryAddressStreet;
	}

    /**
     * Set the value of deliveryAddressStreet
     *
     * @param string $deliveryAddressStreet
     *
     * @return  self
     */ 
    public function setDeliveryAddressStreet(string $deliveryAddressStreet)
    {
        $this->deliveryAddressStreet = $deliveryAddressStreet;

        return $this;
    }



    private string $deliveryModeCode;

    /**
	 * @return string
	 */
	public function getDeliveryModeCode(): string
	{
		return $this->deliveryModeCode;
	}

    /**
     * Set the value of deliveryModeCode
     *
     * @param string $deliveryModeCode
     *
     * @return  self
     */ 
    public function setDeliveryModeCode(string $deliveryModeCode)
    {
        $this->deliveryModeCode = $deliveryModeCode;

        return $this;
    }



    private string $isExportSale;

    /**
	 * @return string
	 */
	public function getIsExportSale(): string
	{
		return $this->isExportSale;
	}

    /**
     * Set the value of isExportSale
     *
     * @param string $isExportSale
     *
     * @return  self
     */ 
    public function setIsExportSale(string $isExportSale)
    {
        $this->isExportSale = $isExportSale;

        return $this;
    }



    private string $confirmedShippingDate;

    /**
	 * @return string
	 */
	public function getConfirmedShippingDate(): string
	{
		return $this->confirmedShippingDate;
	}

    /**
     * Set the value of confirmedShippingDate
     *
     * @param string $confirmedShippingDate
     *
     * @return  self
     */ 
    public function setConfirmedShippingDate(string $confirmedShippingDate)
    {
        $this->confirmedShippingDate = $confirmedShippingDate;

        return $this;
    }



    private string $fixedDueDate;

    /**
	 * @return string
	 */
	public function getFixedDueDate(): string
	{
		return $this->fixedDueDate;
	}

    /**
     * Set the value of fixedDueDate
     *
     * @param string $fixedDueDate
     *
     * @return  self
     */ 
    public function setFixedDueDate(string $fixedDueDate)
    {
        $this->fixedDueDate = $fixedDueDate;

        return $this;
    }



    private string $transportationDocumentLineId;

    /**
	 * @return string
	 */
	public function getTransportationDocumentLineId(): string
	{
		return $this->transportationDocumentLineId;
	}

    /**
     * Set the value of transportationDocumentLineId
     *
     * @param string $transportationDocumentLineId
     *
     * @return  self
     */ 
    public function setTransportationDocumentLineId(string $transportationDocumentLineId)
    {
        $this->transportationDocumentLineId = $transportationDocumentLineId;

        return $this;
    }



    private string $salesTaxGroupCode;

    /**
	 * @return string
	 */
	public function getSalesTaxGroupCode(): string
	{
		return $this->salesTaxGroupCode;
	}

    /**
     * Set the value of salesTaxGroupCode
     *
     * @param string $salesTaxGroupCode
     *
     * @return  self
     */ 
    public function setSalesTaxGroupCode(string $salesTaxGroupCode)
    {
        $this->salesTaxGroupCode = $salesTaxGroupCode;

        return $this;
    }



    private string $isDeliveryAddressOrderSpecific;

    /**
	 * @return string
	 */
	public function getIsDeliveryAddressOrderSpecific(): string
	{
		return $this->isDeliveryAddressOrderSpecific;
	}

    /**
     * Set the value of isDeliveryAddressOrderSpecific
     *
     * @param string $isDeliveryAddressOrderSpecific
     *
     * @return  self
     */ 
    public function setIsDeliveryAddressOrderSpecific(string $isDeliveryAddressOrderSpecific)
    {
        $this->isDeliveryAddressOrderSpecific = $isDeliveryAddressOrderSpecific;

        return $this;
    }



    private string $customerRequisitionNumber;

    /**
	 * @return string
	 */
	public function getCustomerRequisitionNumber(): string
	{
		return $this->customerRequisitionNumber;
	}

    /**
     * Set the value of customerRequisitionNumber
     *
     * @param string $customerRequisitionNumber
     *
     * @return  self
     */ 
    public function setCustomerRequisitionNumber(string $customerRequisitionNumber)
    {
        $this->customerRequisitionNumber = $customerRequisitionNumber;

        return $this;
    }



    private string $invoiceAddressLongitude;

    /**
	 * @return string
	 */
	public function getInvoiceAddressLongitude(): string
	{
		return $this->invoiceAddressLongitude;
	}

    /**
     * Set the value of invoiceAddressLongitude
     *
     * @param string $invoiceAddressLongitude
     *
     * @return  self
     */ 
    public function setInvoiceAddressLongitude(string $invoiceAddressLongitude)
    {
        $this->invoiceAddressLongitude = $invoiceAddressLongitude;

        return $this;
    }



    private string $invoiceAddressCity;

    /**
	 * @return string
	 */
	public function getInvoiceAddressCity(): string
	{
		return $this->invoiceAddressCity;
	}

    /**
     * Set the value of invoiceAddressCity
     *
     * @param string $invoiceAddressCity
     *
     * @return  self
     */ 
    public function setInvoiceAddressCity(string $invoiceAddressCity)
    {
        $this->invoiceAddressCity = $invoiceAddressCity;

        return $this;
    }



    private string $isFinalUser;

    /**
	 * @return string
	 */
	public function getIsFinalUser(): string
	{
		return $this->isFinalUser;
	}

    /**
     * Set the value of isFinalUser
     *
     * @param string $isFinalUser
     *
     * @return  self
     */ 
    public function setIsFinalUser(string $isFinalUser)
    {
        $this->isFinalUser = $isFinalUser;

        return $this;
    }



    private string $invoiceAddressPostBox;

    /**
	 * @return string
	 */
	public function getInvoiceAddressPostBox(): string
	{
		return $this->invoiceAddressPostBox;
	}

    /**
     * Set the value of invoiceAddressPostBox
     *
     * @param string $invoiceAddressPostBox
     *
     * @return  self
     */ 
    public function setInvoiceAddressPostBox(string $invoiceAddressPostBox)
    {
        $this->invoiceAddressPostBox = $invoiceAddressPostBox;

        return $this;
    }



    private string $shippingCarrierServiceGroupId;

    /**
	 * @return string
	 */
	public function getShippingCarrierServiceGroupId(): string
	{
		return $this->shippingCarrierServiceGroupId;
	}

    /**
     * Set the value of shippingCarrierServiceGroupId
     *
     * @param string $shippingCarrierServiceGroupId
     *
     * @return  self
     */ 
    public function setShippingCarrierServiceGroupId(string $shippingCarrierServiceGroupId)
    {
        $this->shippingCarrierServiceGroupId = $shippingCarrierServiceGroupId;

        return $this;
    }



    private string $contactPersonId;

    /**
	 * @return string
	 */
	public function getContactPersonId(): string
	{
		return $this->contactPersonId;
	}

    /**
     * Set the value of contactPersonId
     *
     * @param string $contactPersonId
     *
     * @return  self
     */ 
    public function setContactPersonId(string $contactPersonId)
    {
        $this->contactPersonId = $contactPersonId;

        return $this;
    }



    private string $eUSalesListCode;

    /**
	 * @return string
	 */
	public function getEUSalesListCode(): string
	{
		return $this->eUSalesListCode;
	}

    /**
     * Set the value of eUSalesListCode
     *
     * @param string $eUSalesListCode
     *
     * @return  self
     */ 
    public function setEUSalesListCode(string $eUSalesListCode)
    {
        $this->eUSalesListCode = $eUSalesListCode;

        return $this;
    }



    private string $invoiceAddressDistrictName;

    /**
	 * @return string
	 */
	public function getInvoiceAddressDistrictName(): string
	{
		return $this->invoiceAddressDistrictName;
	}

    /**
     * Set the value of invoiceAddressDistrictName
     *
     * @param string $invoiceAddressDistrictName
     *
     * @return  self
     */ 
    public function setInvoiceAddressDistrictName(string $invoiceAddressDistrictName)
    {
        $this->invoiceAddressDistrictName = $invoiceAddressDistrictName;

        return $this;
    }



    private string $thirdPartySalesDigitalPlatform;

    /**
	 * @return string
	 */
	public function getThirdPartySalesDigitalPlatform(): string
	{
		return $this->thirdPartySalesDigitalPlatform;
	}

    /**
     * Set the value of thirdPartySalesDigitalPlatform
     *
     * @param string $thirdPartySalesDigitalPlatform
     *
     * @return  self
     */ 
    public function setThirdPartySalesDigitalPlatform(string $thirdPartySalesDigitalPlatform)
    {
        $this->thirdPartySalesDigitalPlatform = $thirdPartySalesDigitalPlatform;

        return $this;
    }



    private string $paymentTermsName;

    /**
	 * @return string
	 */
	public function getPaymentTermsName(): string
	{
		return $this->paymentTermsName;
	}

    /**
     * Set the value of paymentTermsName
     *
     * @param string $paymentTermsName
     *
     * @return  self
     */ 
    public function setPaymentTermsName(string $paymentTermsName)
    {
        $this->paymentTermsName = $paymentTermsName;

        return $this;
    }



    private string $deliveryAddressCityInKana;

    /**
	 * @return string
	 */
	public function getDeliveryAddressCityInKana(): string
	{
		return $this->deliveryAddressCityInKana;
	}

    /**
     * Set the value of deliveryAddressCityInKana
     *
     * @param string $deliveryAddressCityInKana
     *
     * @return  self
     */ 
    public function setDeliveryAddressCityInKana(string $deliveryAddressCityInKana)
    {
        $this->deliveryAddressCityInKana = $deliveryAddressCityInKana;

        return $this;
    }



    private string $baseDocumentDate;

    /**
	 * @return string
	 */
	public function getBaseDocumentDate(): string
	{
		return $this->baseDocumentDate;
	}

    /**
     * Set the value of baseDocumentDate
     *
     * @param string $baseDocumentDate
     *
     * @return  self
     */ 
    public function setBaseDocumentDate(string $baseDocumentDate)
    {
        $this->baseDocumentDate = $baseDocumentDate;

        return $this;
    }



    private string $customerPostingProfileId;

    /**
	 * @return string
	 */
	public function getCustomerPostingProfileId(): string
	{
		return $this->customerPostingProfileId;
	}

    /**
     * Set the value of customerPostingProfileId
     *
     * @param string $customerPostingProfileId
     *
     * @return  self
     */ 
    public function setCustomerPostingProfileId(string $customerPostingProfileId)
    {
        $this->customerPostingProfileId = $customerPostingProfileId;

        return $this;
    }



    private string $deliveryAddressLongitude;

    /**
	 * @return string
	 */
	public function getDeliveryAddressLongitude(): string
	{
		return $this->deliveryAddressLongitude;
	}

    /**
     * Set the value of deliveryAddressLongitude
     *
     * @param string $deliveryAddressLongitude
     *
     * @return  self
     */ 
    public function setDeliveryAddressLongitude(string $deliveryAddressLongitude)
    {
        $this->deliveryAddressLongitude = $deliveryAddressLongitude;

        return $this;
    }



    private string $tenderCode;

    /**
	 * @return string
	 */
	public function getTenderCode(): string
	{
		return $this->tenderCode;
	}

    /**
     * Set the value of tenderCode
     *
     * @param string $tenderCode
     *
     * @return  self
     */ 
    public function setTenderCode(string $tenderCode)
    {
        $this->tenderCode = $tenderCode;

        return $this;
    }



    private string $invoiceAddressZipCode;

    /**
	 * @return string
	 */
	public function getInvoiceAddressZipCode(): string
	{
		return $this->invoiceAddressZipCode;
	}

    /**
     * Set the value of invoiceAddressZipCode
     *
     * @param string $invoiceAddressZipCode
     *
     * @return  self
     */ 
    public function setInvoiceAddressZipCode(string $invoiceAddressZipCode)
    {
        $this->invoiceAddressZipCode = $invoiceAddressZipCode;

        return $this;
    }



    private string $deliveryTermsCode;

    /**
	 * @return string
	 */
	public function getDeliveryTermsCode(): string
	{
		return $this->deliveryTermsCode;
	}

    /**
     * Set the value of deliveryTermsCode
     *
     * @param string $deliveryTermsCode
     *
     * @return  self
     */ 
    public function setDeliveryTermsCode(string $deliveryTermsCode)
    {
        $this->deliveryTermsCode = $deliveryTermsCode;

        return $this;
    }



    private string $shippingCarrierServiceId;

    /**
	 * @return string
	 */
	public function getShippingCarrierServiceId(): string
	{
		return $this->shippingCarrierServiceId;
	}

    /**
     * Set the value of shippingCarrierServiceId
     *
     * @param string $shippingCarrierServiceId
     *
     * @return  self
     */ 
    public function setShippingCarrierServiceId(string $shippingCarrierServiceId)
    {
        $this->shippingCarrierServiceId = $shippingCarrierServiceId;

        return $this;
    }



    private string $defaultLedgerDimensionDisplayValue;

    /**
	 * @return string
	 */
	public function getDefaultLedgerDimensionDisplayValue(): string
	{
		return $this->defaultLedgerDimensionDisplayValue;
	}

    /**
     * Set the value of defaultLedgerDimensionDisplayValue
     *
     * @param string $defaultLedgerDimensionDisplayValue
     *
     * @return  self
     */ 
    public function setDefaultLedgerDimensionDisplayValue(string $defaultLedgerDimensionDisplayValue)
    {
        $this->defaultLedgerDimensionDisplayValue = $defaultLedgerDimensionDisplayValue;

        return $this;
    }



    private string $deliveryAddressTimeZone;

    /**
	 * @return string
	 */
	public function getDeliveryAddressTimeZone(): string
	{
		return $this->deliveryAddressTimeZone;
	}

    /**
     * Set the value of deliveryAddressTimeZone
     *
     * @param string $deliveryAddressTimeZone
     *
     * @return  self
     */ 
    public function setDeliveryAddressTimeZone(string $deliveryAddressTimeZone)
    {
        $this->deliveryAddressTimeZone = $deliveryAddressTimeZone;

        return $this;
    }



    private string $salesOrderName;

    /**
	 * @return string
	 */
	public function getSalesOrderName(): string
	{
		return $this->salesOrderName;
	}

    /**
     * Set the value of salesOrderName
     *
     * @param string $salesOrderName
     *
     * @return  self
     */ 
    public function setSalesOrderName(string $salesOrderName)
    {
        $this->salesOrderName = $salesOrderName;

        return $this;
    }



    private string $defaultShippingWarehouseId;

    /**
	 * @return string
	 */
	public function getDefaultShippingWarehouseId(): string
	{
		return $this->defaultShippingWarehouseId;
	}

    /**
     * Set the value of defaultShippingWarehouseId
     *
     * @param string $defaultShippingWarehouseId
     *
     * @return  self
     */ 
    public function setDefaultShippingWarehouseId(string $defaultShippingWarehouseId)
    {
        $this->defaultShippingWarehouseId = $defaultShippingWarehouseId;

        return $this;
    }



    private string $isEntryCertificateRequired;

    /**
	 * @return string
	 */
	public function getIsEntryCertificateRequired(): string
	{
		return $this->isEntryCertificateRequired;
	}

    /**
     * Set the value of isEntryCertificateRequired
     *
     * @param string $isEntryCertificateRequired
     *
     * @return  self
     */ 
    public function setIsEntryCertificateRequired(string $isEntryCertificateRequired)
    {
        $this->isEntryCertificateRequired = $isEntryCertificateRequired;

        return $this;
    }



    private string $deliveryAddressStateId;

    /**
	 * @return string
	 */
	public function getDeliveryAddressStateId(): string
	{
		return $this->deliveryAddressStateId;
	}

    /**
     * Set the value of deliveryAddressStateId
     *
     * @param string $deliveryAddressStateId
     *
     * @return  self
     */ 
    public function setDeliveryAddressStateId(string $deliveryAddressStateId)
    {
        $this->deliveryAddressStateId = $deliveryAddressStateId;

        return $this;
    }



    private string $deliveryBuildingCompliment;

    /**
	 * @return string
	 */
	public function getDeliveryBuildingCompliment(): string
	{
		return $this->deliveryBuildingCompliment;
	}

    /**
     * Set the value of deliveryBuildingCompliment
     *
     * @param string $deliveryBuildingCompliment
     *
     * @return  self
     */ 
    public function setDeliveryBuildingCompliment(string $deliveryBuildingCompliment)
    {
        $this->deliveryBuildingCompliment = $deliveryBuildingCompliment;

        return $this;
    }



    private string $intrastatTransportModeCode;

    /**
	 * @return string
	 */
	public function getIntrastatTransportModeCode(): string
	{
		return $this->intrastatTransportModeCode;
	}

    /**
     * Set the value of intrastatTransportModeCode
     *
     * @param string $intrastatTransportModeCode
     *
     * @return  self
     */ 
    public function setIntrastatTransportModeCode(string $intrastatTransportModeCode)
    {
        $this->intrastatTransportModeCode = $intrastatTransportModeCode;

        return $this;
    }



    private string $invoicePaymentAttachmentType;

    /**
	 * @return string
	 */
	public function getInvoicePaymentAttachmentType(): string
	{
		return $this->invoicePaymentAttachmentType;
	}

    /**
     * Set the value of invoicePaymentAttachmentType
     *
     * @param string $invoicePaymentAttachmentType
     *
     * @return  self
     */ 
    public function setInvoicePaymentAttachmentType(string $invoicePaymentAttachmentType)
    {
        $this->invoicePaymentAttachmentType = $invoicePaymentAttachmentType;

        return $this;
    }



    private string $deliveryAddressPostBox;

    /**
	 * @return string
	 */
	public function getDeliveryAddressPostBox(): string
	{
		return $this->deliveryAddressPostBox;
	}

    /**
     * Set the value of deliveryAddressPostBox
     *
     * @param string $deliveryAddressPostBox
     *
     * @return  self
     */ 
    public function setDeliveryAddressPostBox(string $deliveryAddressPostBox)
    {
        $this->deliveryAddressPostBox = $deliveryAddressPostBox;

        return $this;
    }



    private string $invoiceAddressTimeZone;

    /**
	 * @return string
	 */
	public function getInvoiceAddressTimeZone(): string
	{
		return $this->invoiceAddressTimeZone;
	}

    /**
     * Set the value of invoiceAddressTimeZone
     *
     * @param string $invoiceAddressTimeZone
     *
     * @return  self
     */ 
    public function setInvoiceAddressTimeZone(string $invoiceAddressTimeZone)
    {
        $this->invoiceAddressTimeZone = $invoiceAddressTimeZone;

        return $this;
    }



    private string $invoiceAddressCountyId;

    /**
	 * @return string
	 */
	public function getInvoiceAddressCountyId(): string
	{
		return $this->invoiceAddressCountyId;
	}

    /**
     * Set the value of invoiceAddressCountyId
     *
     * @param string $invoiceAddressCountyId
     *
     * @return  self
     */ 
    public function setInvoiceAddressCountyId(string $invoiceAddressCountyId)
    {
        $this->invoiceAddressCountyId = $invoiceAddressCountyId;

        return $this;
    }



    private string $directDebitMandateId;

    /**
	 * @return string
	 */
	public function getDirectDebitMandateId(): string
	{
		return $this->directDebitMandateId;
	}

    /**
     * Set the value of directDebitMandateId
     *
     * @param string $directDebitMandateId
     *
     * @return  self
     */ 
    public function setDirectDebitMandateId(string $directDebitMandateId)
    {
        $this->directDebitMandateId = $directDebitMandateId;

        return $this;
    }



    private string $lineDiscountCustomerGroupCode;

    /**
	 * @return string
	 */
	public function getLineDiscountCustomerGroupCode(): string
	{
		return $this->lineDiscountCustomerGroupCode;
	}

    /**
     * Set the value of lineDiscountCustomerGroupCode
     *
     * @param string $lineDiscountCustomerGroupCode
     *
     * @return  self
     */ 
    public function setLineDiscountCustomerGroupCode(string $lineDiscountCustomerGroupCode)
    {
        $this->lineDiscountCustomerGroupCode = $lineDiscountCustomerGroupCode;

        return $this;
    }



    private string $intrastatPortId;

    /**
	 * @return string
	 */
	public function getIntrastatPortId(): string
	{
		return $this->intrastatPortId;
	}

    /**
     * Set the value of intrastatPortId
     *
     * @param string $intrastatPortId
     *
     * @return  self
     */ 
    public function setIntrastatPortId(string $intrastatPortId)
    {
        $this->intrastatPortId = $intrastatPortId;

        return $this;
    }



    private string $cIPEcode;

    /**
	 * @return string
	 */
	public function getCIPEcode(): string
	{
		return $this->cIPEcode;
	}

    /**
     * Set the value of cIPEcode
     *
     * @param string $cIPEcode
     *
     * @return  self
     */ 
    public function setCIPEcode(string $cIPEcode)
    {
        $this->cIPEcode = $cIPEcode;

        return $this;
    }



    private string $orderingCustomerAccountNumber;

    /**
	 * @return string
	 */
	public function getOrderingCustomerAccountNumber(): string
	{
		return $this->orderingCustomerAccountNumber;
	}

    /**
     * Set the value of orderingCustomerAccountNumber
     *
     * @param string $orderingCustomerAccountNumber
     *
     * @return  self
     */ 
    public function setOrderingCustomerAccountNumber(string $orderingCustomerAccountNumber)
    {
        $this->orderingCustomerAccountNumber = $orderingCustomerAccountNumber;

        return $this;
    }



    private string $customerPaymentFineCode;

    /**
	 * @return string
	 */
	public function getCustomerPaymentFineCode(): string
	{
		return $this->customerPaymentFineCode;
	}

    /**
     * Set the value of customerPaymentFineCode
     *
     * @param string $customerPaymentFineCode
     *
     * @return  self
     */ 
    public function setCustomerPaymentFineCode(string $customerPaymentFineCode)
    {
        $this->customerPaymentFineCode = $customerPaymentFineCode;

        return $this;
    }



    private string $invoiceBuildingCompliment;

    /**
	 * @return string
	 */
	public function getInvoiceBuildingCompliment(): string
	{
		return $this->invoiceBuildingCompliment;
	}

    /**
     * Set the value of invoiceBuildingCompliment
     *
     * @param string $invoiceBuildingCompliment
     *
     * @return  self
     */ 
    public function setInvoiceBuildingCompliment(string $invoiceBuildingCompliment)
    {
        $this->invoiceBuildingCompliment = $invoiceBuildingCompliment;

        return $this;
    }



    private string $priceCustomerGroupCode;

    /**
	 * @return string
	 */
	public function getPriceCustomerGroupCode(): string
	{
		return $this->priceCustomerGroupCode;
	}

    /**
     * Set the value of priceCustomerGroupCode
     *
     * @param string $priceCustomerGroupCode
     *
     * @return  self
     */ 
    public function setPriceCustomerGroupCode(string $priceCustomerGroupCode)
    {
        $this->priceCustomerGroupCode = $priceCustomerGroupCode;

        return $this;
    }



    private string $deliveryReasonCode;

    /**
	 * @return string
	 */
	public function getDeliveryReasonCode(): string
	{
		return $this->deliveryReasonCode;
	}

    /**
     * Set the value of deliveryReasonCode
     *
     * @param string $deliveryReasonCode
     *
     * @return  self
     */ 
    public function setDeliveryReasonCode(string $deliveryReasonCode)
    {
        $this->deliveryReasonCode = $deliveryReasonCode;

        return $this;
    }



    private string $isServiceDeliveryAddressBased;

    /**
	 * @return string
	 */
	public function getIsServiceDeliveryAddressBased(): string
	{
		return $this->isServiceDeliveryAddressBased;
	}

    /**
     * Set the value of isServiceDeliveryAddressBased
     *
     * @param string $isServiceDeliveryAddressBased
     *
     * @return  self
     */ 
    public function setIsServiceDeliveryAddressBased(string $isServiceDeliveryAddressBased)
    {
        $this->isServiceDeliveryAddressBased = $isServiceDeliveryAddressBased;

        return $this;
    }



    private string $reportingCurrencyFixedExchangeRate;

    /**
	 * @return string
	 */
	public function getReportingCurrencyFixedExchangeRate(): string
	{
		return $this->reportingCurrencyFixedExchangeRate;
	}

    /**
     * Set the value of reportingCurrencyFixedExchangeRate
     *
     * @param string $reportingCurrencyFixedExchangeRate
     *
     * @return  self
     */ 
    public function setReportingCurrencyFixedExchangeRate(string $reportingCurrencyFixedExchangeRate)
    {
        $this->reportingCurrencyFixedExchangeRate = $reportingCurrencyFixedExchangeRate;

        return $this;
    }



    private string $orderHeaderTaxAmount;

    /**
	 * @return string
	 */
	public function getOrderHeaderTaxAmount(): string
	{
		return $this->orderHeaderTaxAmount;
	}

    /**
     * Set the value of orderHeaderTaxAmount
     *
     * @param string $orderHeaderTaxAmount
     *
     * @return  self
     */ 
    public function setOrderHeaderTaxAmount(string $orderHeaderTaxAmount)
    {
        $this->orderHeaderTaxAmount = $orderHeaderTaxAmount;

        return $this;
    }



    private string $inventoryReservationMethod;

    /**
	 * @return string
	 */
	public function getInventoryReservationMethod(): string
	{
		return $this->inventoryReservationMethod;
	}

    /**
     * Set the value of inventoryReservationMethod
     *
     * @param string $inventoryReservationMethod
     *
     * @return  self
     */ 
    public function setInventoryReservationMethod(string $inventoryReservationMethod)
    {
        $this->inventoryReservationMethod = $inventoryReservationMethod;

        return $this;
    }



    private string $requestedShippingDate;

    /**
	 * @return string
	 */
	public function getRequestedShippingDate(): string
	{
		return $this->requestedShippingDate;
	}

    /**
     * Set the value of requestedShippingDate
     *
     * @param string $requestedShippingDate
     *
     * @return  self
     */ 
    public function setRequestedShippingDate(string $requestedShippingDate)
    {
        $this->requestedShippingDate = $requestedShippingDate;

        return $this;
    }



    private string $salesOrderProcessingStatus;

    /**
	 * @return string
	 */
	public function getSalesOrderProcessingStatus(): string
	{
		return $this->salesOrderProcessingStatus;
	}

    /**
     * Set the value of salesOrderProcessingStatus
     *
     * @param string $salesOrderProcessingStatus
     *
     * @return  self
     */ 
    public function setSalesOrderProcessingStatus(string $salesOrderProcessingStatus)
    {
        $this->salesOrderProcessingStatus = $salesOrderProcessingStatus;

        return $this;
    }



    private string $transportationRoutePlanId;

    /**
	 * @return string
	 */
	public function getTransportationRoutePlanId(): string
	{
		return $this->transportationRoutePlanId;
	}

    /**
     * Set the value of transportationRoutePlanId
     *
     * @param string $transportationRoutePlanId
     *
     * @return  self
     */ 
    public function setTransportationRoutePlanId(string $transportationRoutePlanId)
    {
        $this->transportationRoutePlanId = $transportationRoutePlanId;

        return $this;
    }



    private string $skipCreateAutoCharges;

    /**
	 * @return string
	 */
	public function getSkipCreateAutoCharges(): string
	{
		return $this->skipCreateAutoCharges;
	}

    /**
     * Set the value of skipCreateAutoCharges
     *
     * @param string $skipCreateAutoCharges
     *
     * @return  self
     */ 
    public function setSkipCreateAutoCharges(string $skipCreateAutoCharges)
    {
        $this->skipCreateAutoCharges = $skipCreateAutoCharges;

        return $this;
    }



    private string $customerPaymentMethodName;

    /**
	 * @return string
	 */
	public function getCustomerPaymentMethodName(): string
	{
		return $this->customerPaymentMethodName;
	}

    /**
     * Set the value of customerPaymentMethodName
     *
     * @param string $customerPaymentMethodName
     *
     * @return  self
     */ 
    public function setCustomerPaymentMethodName(string $customerPaymentMethodName)
    {
        $this->customerPaymentMethodName = $customerPaymentMethodName;

        return $this;
    }



    private string $salesUnitId;

    /**
	 * @return string
	 */
	public function getSalesUnitId(): string
	{
		return $this->salesUnitId;
	}

    /**
     * Set the value of salesUnitId
     *
     * @param string $salesUnitId
     *
     * @return  self
     */ 
    public function setSalesUnitId(string $salesUnitId)
    {
        $this->salesUnitId = $salesUnitId;

        return $this;
    }



    private string $fixedExchangeRate;

    /**
	 * @return string
	 */
	public function getFixedExchangeRate(): string
	{
		return $this->fixedExchangeRate;
	}

    /**
     * Set the value of fixedExchangeRate
     *
     * @param string $fixedExchangeRate
     *
     * @return  self
     */ 
    public function setFixedExchangeRate(string $fixedExchangeRate)
    {
        $this->fixedExchangeRate = $fixedExchangeRate;

        return $this;
    }



    private string $revRecReallocationId;

    /**
	 * @return string
	 */
	public function getRevRecReallocationId(): string
	{
		return $this->revRecReallocationId;
	}

    /**
     * Set the value of revRecReallocationId
     *
     * @param string $revRecReallocationId
     *
     * @return  self
     */ 
    public function setRevRecReallocationId(string $revRecReallocationId)
    {
        $this->revRecReallocationId = $revRecReallocationId;

        return $this;
    }



    private string $revRecFollowOriginalPricingMethod;

    /**
	 * @return string
	 */
	public function getRevRecFollowOriginalPricingMethod(): string
	{
		return $this->revRecFollowOriginalPricingMethod;
	}

    /**
     * Set the value of revRecFollowOriginalPricingMethod
     *
     * @param string $revRecFollowOriginalPricingMethod
     *
     * @return  self
     */ 
    public function setRevRecFollowOriginalPricingMethod(string $revRecFollowOriginalPricingMethod)
    {
        $this->revRecFollowOriginalPricingMethod = $revRecFollowOriginalPricingMethod;

        return $this;
    }



    private string $revRecMultipleSOReallocation;

    /**
	 * @return string
	 */
	public function getRevRecMultipleSOReallocation(): string
	{
		return $this->revRecMultipleSOReallocation;
	}

    /**
     * Set the value of revRecMultipleSOReallocation
     *
     * @param string $revRecMultipleSOReallocation
     *
     * @return  self
     */ 
    public function setRevRecMultipleSOReallocation(string $revRecMultipleSOReallocation)
    {
        $this->revRecMultipleSOReallocation = $revRecMultipleSOReallocation;

        return $this;
    }



    private string $revRecContractEndDate;

    /**
	 * @return string
	 */
	public function getRevRecContractEndDate(): string
	{
		return $this->revRecContractEndDate;
	}

    /**
     * Set the value of revRecContractEndDate
     *
     * @param string $revRecContractEndDate
     *
     * @return  self
     */ 
    public function setRevRecContractEndDate(string $revRecContractEndDate)
    {
        $this->revRecContractEndDate = $revRecContractEndDate;

        return $this;
    }



    private string $revRecLatestReverseJournal;

    /**
	 * @return string
	 */
	public function getRevRecLatestReverseJournal(): string
	{
		return $this->revRecLatestReverseJournal;
	}

    /**
     * Set the value of revRecLatestReverseJournal
     *
     * @param string $revRecLatestReverseJournal
     *
     * @return  self
     */ 
    public function setRevRecLatestReverseJournal(string $revRecLatestReverseJournal)
    {
        $this->revRecLatestReverseJournal = $revRecLatestReverseJournal;

        return $this;
    }



    private string $revRecContractStartDate;

    /**
	 * @return string
	 */
	public function getRevRecContractStartDate(): string
	{
		return $this->revRecContractStartDate;
	}

    /**
     * Set the value of revRecContractStartDate
     *
     * @param string $revRecContractStartDate
     *
     * @return  self
     */ 
    public function setRevRecContractStartDate(string $revRecContractStartDate)
    {
        $this->revRecContractStartDate = $revRecContractStartDate;

        return $this;
    }



    private string $lAC_ModifiedDateTime;

    /**
	 * @return string
	 */
	public function getLAC_ModifiedDateTime(): string
	{
		return $this->lAC_ModifiedDateTime;
	}

    /**
     * Set the value of lAC_ModifiedDateTime
     *
     * @param string $lAC_ModifiedDateTime
     *
     * @return  self
     */ 
    public function setLAC_ModifiedDateTime(string $lAC_ModifiedDateTime)
    {
        $this->lAC_ModifiedDateTime = $lAC_ModifiedDateTime;

        return $this;
    }



    private string $lAC_ReleaseStatus;

    /**
	 * @return string
	 */
	public function getLAC_ReleaseStatus(): string
	{
		return $this->lAC_ReleaseStatus;
	}

    /**
     * Set the value of lAC_ReleaseStatus
     *
     * @param string $lAC_ReleaseStatus
     *
     * @return  self
     */ 
    public function setLAC_ReleaseStatus(string $lAC_ReleaseStatus)
    {
        $this->lAC_ReleaseStatus = $lAC_ReleaseStatus;

        return $this;
    }



    private string $lAC_CreatedDateTime;

    /**
	 * @return string
	 */
	public function getLAC_CreatedDateTime(): string
	{
		return $this->lAC_CreatedDateTime;
	}

    /**
     * Set the value of lAC_CreatedDateTime
     *
     * @param string $lAC_CreatedDateTime
     *
     * @return  self
     */ 
    public function setLAC_CreatedDateTime(string $lAC_CreatedDateTime)
    {
        $this->lAC_CreatedDateTime = $lAC_CreatedDateTime;

        return $this;
    }



    private string $lAC_UseDlvAddrPBI;

    /**
	 * @return string
	 */
	public function getLAC_UseDlvAddrPBI(): string
	{
		return $this->lAC_UseDlvAddrPBI;
	}

    /**
     * Set the value of lAC_UseDlvAddrPBI
     *
     * @param string $lAC_UseDlvAddrPBI
     *
     * @return  self
     */ 
    public function setLAC_UseDlvAddrPBI(string $lAC_UseDlvAddrPBI)
    {
        $this->lAC_UseDlvAddrPBI = $lAC_UseDlvAddrPBI;

        return $this;
    }


	/**
	 * SalesOrder constructor.
	 * @param array $data
	 * @throws InvalidIdentifierException
	 */
	public function __construct($data)
	{
		if (isset($data['SalesOrderNumber']) && !empty($data['SalesOrderNumber'])) {
			$this->salesOrderNumber = $data['SalesOrderNumber'];
		} else {
			throw new InvalidIdentifierException("You must provide 'SalesOrderNumber' to identify the requested ressource");
		}

		if (isset($data['dataAreaId']) && !empty($data['dataAreaId'])) {
			$this->dataAreaId = $data['dataAreaId'];
		} else {
			throw new InvalidIdentifierException("You must provide 'dataAreaId' to identify the requested ressource");
		}	

        $this->orderTotalChargesAmount = (isset($data['OrderTotalChargesAmount']) && !empty($data['OrderTotalChargesAmount'])) ? $data['OrderTotalChargesAmount'] : '';
        $this->fiscalDocumentOperationTypeId = (isset($data['FiscalDocumentOperationTypeId']) && !empty($data['FiscalDocumentOperationTypeId'])) ? $data['FiscalDocumentOperationTypeId'] : '';
        $this->orderTakerPersonnelNumber = (isset($data['OrderTakerPersonnelNumber']) && !empty($data['OrderTakerPersonnelNumber'])) ? $data['OrderTakerPersonnelNumber'] : '';
        $this->requestedReceiptDate = (isset($data['RequestedReceiptDate']) && !empty($data['RequestedReceiptDate'])) ? $data['RequestedReceiptDate'] : '';
        $this->eInvoiceDimensionAccountCode = (isset($data['EInvoiceDimensionAccountCode']) && !empty($data['EInvoiceDimensionAccountCode'])) ? $data['EInvoiceDimensionAccountCode'] : '';
        $this->isOwnEntryCertificateIssued = (isset($data['IsOwnEntryCertificateIssued']) && !empty($data['IsOwnEntryCertificateIssued'])) ? $data['IsOwnEntryCertificateIssued'] : '';
        $this->invoiceAddressStreet = (isset($data['InvoiceAddressStreet']) && !empty($data['InvoiceAddressStreet'])) ? $data['InvoiceAddressStreet'] : '';
        $this->campaignId = (isset($data['CampaignId']) && !empty($data['CampaignId'])) ? $data['CampaignId'] : '';
        $this->formattedDelveryAddress = (isset($data['FormattedDelveryAddress']) && !empty($data['FormattedDelveryAddress'])) ? $data['FormattedDelveryAddress'] : '';
        $this->email = (isset($data['Email']) && !empty($data['Email'])) ? $data['Email'] : '';
        $this->baseDocumentLineNumber = (isset($data['BaseDocumentLineNumber']) && !empty($data['BaseDocumentLineNumber'])) ? $data['BaseDocumentLineNumber'] : '';
        $this->baseDocumentType = (isset($data['BaseDocumentType']) && !empty($data['BaseDocumentType'])) ? $data['BaseDocumentType'] : '';
        $this->defaultShippingSiteId = (isset($data['DefaultShippingSiteId']) && !empty($data['DefaultShippingSiteId'])) ? $data['DefaultShippingSiteId'] : '';
        $this->transportationBrokerId = (isset($data['TransportationBrokerId']) && !empty($data['TransportationBrokerId'])) ? $data['TransportationBrokerId'] : '';
        $this->transportationModeId = (isset($data['TransportationModeId']) && !empty($data['TransportationModeId'])) ? $data['TransportationModeId'] : '';
        $this->deliveryAddressDescription = (isset($data['DeliveryAddressDescription']) && !empty($data['DeliveryAddressDescription'])) ? $data['DeliveryAddressDescription'] : '';
        $this->cFPSCode = (isset($data['CFPSCode']) && !empty($data['CFPSCode'])) ? $data['CFPSCode'] : '';
        $this->isInvoiceAddressPrivate = (isset($data['IsInvoiceAddressPrivate']) && !empty($data['IsInvoiceAddressPrivate'])) ? $data['IsInvoiceAddressPrivate'] : '';
        $this->isSalesProcessingStopped = (isset($data['IsSalesProcessingStopped']) && !empty($data['IsSalesProcessingStopped'])) ? $data['IsSalesProcessingStopped'] : '';
        $this->shippingCarrierCustomerAccountNumber = (isset($data['ShippingCarrierCustomerAccountNumber']) && !empty($data['ShippingCarrierCustomerAccountNumber'])) ? $data['ShippingCarrierCustomerAccountNumber'] : '';
        $this->tMACustomerGroupId = (isset($data['TMACustomerGroupId']) && !empty($data['TMACustomerGroupId'])) ? $data['TMACustomerGroupId'] : '';
        $this->bankSpecificSymbol = (isset($data['BankSpecificSymbol']) && !empty($data['BankSpecificSymbol'])) ? $data['BankSpecificSymbol'] : '';
        $this->salesOrderStatus = (isset($data['SalesOrderStatus']) && !empty($data['SalesOrderStatus'])) ? $data['SalesOrderStatus'] : '';
        $this->numberSequenceGroupId = (isset($data['NumberSequenceGroupId']) && !empty($data['NumberSequenceGroupId'])) ? $data['NumberSequenceGroupId'] : '';
        $this->salesOrderOriginCode = (isset($data['SalesOrderOriginCode']) && !empty($data['SalesOrderOriginCode'])) ? $data['SalesOrderOriginCode'] : '';
        $this->invoiceAddressLatitude = (isset($data['InvoiceAddressLatitude']) && !empty($data['InvoiceAddressLatitude'])) ? $data['InvoiceAddressLatitude'] : '';
        $this->customerPaymentFinancialInterestCode = (isset($data['CustomerPaymentFinancialInterestCode']) && !empty($data['CustomerPaymentFinancialInterestCode'])) ? $data['CustomerPaymentFinancialInterestCode'] : '';
        $this->transportationTemplateId = (isset($data['TransportationTemplateId']) && !empty($data['TransportationTemplateId'])) ? $data['TransportationTemplateId'] : '';
        $this->invoiceAddressStreetInKana = (isset($data['InvoiceAddressStreetInKana']) && !empty($data['InvoiceAddressStreetInKana'])) ? $data['InvoiceAddressStreetInKana'] : '';
        $this->bankConstantSymbol = (isset($data['BankConstantSymbol']) && !empty($data['BankConstantSymbol'])) ? $data['BankConstantSymbol'] : '';
        $this->orderTotalTaxAmount = (isset($data['OrderTotalTaxAmount']) && !empty($data['OrderTotalTaxAmount'])) ? $data['OrderTotalTaxAmount'] : '';
        $this->isOneTimeCustomer = (isset($data['IsOneTimeCustomer']) && !empty($data['IsOneTimeCustomer'])) ? $data['IsOneTimeCustomer'] : '';
        $this->salesOrderPoolId = (isset($data['SalesOrderPoolId']) && !empty($data['SalesOrderPoolId'])) ? $data['SalesOrderPoolId'] : '';
        $this->deliveryAddressCountryRegionId = (isset($data['DeliveryAddressCountryRegionId']) && !empty($data['DeliveryAddressCountryRegionId'])) ? $data['DeliveryAddressCountryRegionId'] : '';
        $this->deliveryAddressLatitude = (isset($data['DeliveryAddressLatitude']) && !empty($data['DeliveryAddressLatitude'])) ? $data['DeliveryAddressLatitude'] : '';
        $this->totalDiscountCustomerGroupCode = (isset($data['TotalDiscountCustomerGroupCode']) && !empty($data['TotalDiscountCustomerGroupCode'])) ? $data['TotalDiscountCustomerGroupCode'] : '';
        $this->deliveryAddressCity = (isset($data['DeliveryAddressCity']) && !empty($data['DeliveryAddressCity'])) ? $data['DeliveryAddressCity'] : '';
        $this->salesRebateCustomerGroupId = (isset($data['SalesRebateCustomerGroupId']) && !empty($data['SalesRebateCustomerGroupId'])) ? $data['SalesRebateCustomerGroupId'] : '';
        $this->thirdPartySalesDigitalPlatformCNPJ = (isset($data['ThirdPartySalesDigitalPlatformCNPJ']) && !empty($data['ThirdPartySalesDigitalPlatformCNPJ'])) ? $data['ThirdPartySalesDigitalPlatformCNPJ'] : '';
        $this->salesOrderPromisingMethod = (isset($data['SalesOrderPromisingMethod']) && !empty($data['SalesOrderPromisingMethod'])) ? $data['SalesOrderPromisingMethod'] : '';
        $this->projectId = (isset($data['ProjectId']) && !empty($data['ProjectId'])) ? $data['ProjectId'] : '';
        $this->shippingCarrierId = (isset($data['ShippingCarrierId']) && !empty($data['ShippingCarrierId'])) ? $data['ShippingCarrierId'] : '';
        $this->totalDiscountPercentage = (isset($data['TotalDiscountPercentage']) && !empty($data['TotalDiscountPercentage'])) ? $data['TotalDiscountPercentage'] : '';
        $this->deliveryAddressDistrictName = (isset($data['DeliveryAddressDistrictName']) && !empty($data['DeliveryAddressDistrictName'])) ? $data['DeliveryAddressDistrictName'] : '';
        $this->deliveryAddressCountyId = (isset($data['DeliveryAddressCountyId']) && !empty($data['DeliveryAddressCountyId'])) ? $data['DeliveryAddressCountyId'] : '';
        $this->confirmedReceiptDate = (isset($data['ConfirmedReceiptDate']) && !empty($data['ConfirmedReceiptDate'])) ? $data['ConfirmedReceiptDate'] : '';
        $this->baseDocumentItemNumber = (isset($data['BaseDocumentItemNumber']) && !empty($data['BaseDocumentItemNumber'])) ? $data['BaseDocumentItemNumber'] : '';
        $this->deliveryAddressZipCode = (isset($data['DeliveryAddressZipCode']) && !empty($data['DeliveryAddressZipCode'])) ? $data['DeliveryAddressZipCode'] : '';
        $this->fiscalOperationPresenceType = (isset($data['FiscalOperationPresenceType']) && !empty($data['FiscalOperationPresenceType'])) ? $data['FiscalOperationPresenceType'] : '';
        $this->quotationNumber = (isset($data['QuotationNumber']) && !empty($data['QuotationNumber'])) ? $data['QuotationNumber'] : '';
        $this->isConsolidatedInvoiceTarget = (isset($data['IsConsolidatedInvoiceTarget']) && !empty($data['IsConsolidatedInvoiceTarget'])) ? $data['IsConsolidatedInvoiceTarget'] : '';
        $this->languageId = (isset($data['LanguageId']) && !empty($data['LanguageId'])) ? $data['LanguageId'] : '';
        $this->deliveryAddressDunsNumber = (isset($data['DeliveryAddressDunsNumber']) && !empty($data['DeliveryAddressDunsNumber'])) ? $data['DeliveryAddressDunsNumber'] : '';
        $this->multilineDiscountCustomerGroupCode = (isset($data['MultilineDiscountCustomerGroupCode']) && !empty($data['MultilineDiscountCustomerGroupCode'])) ? $data['MultilineDiscountCustomerGroupCode'] : '';
        $this->baseDocumentNumber = (isset($data['BaseDocumentNumber']) && !empty($data['BaseDocumentNumber'])) ? $data['BaseDocumentNumber'] : '';
        $this->invoiceAddressStateId = (isset($data['InvoiceAddressStateId']) && !empty($data['InvoiceAddressStateId'])) ? $data['InvoiceAddressStateId'] : '';
        $this->serviceFiscalInformationCode = (isset($data['ServiceFiscalInformationCode']) && !empty($data['ServiceFiscalInformationCode'])) ? $data['ServiceFiscalInformationCode'] : '';
        $this->customerPaymentMethodSpecificationName = (isset($data['CustomerPaymentMethodSpecificationName']) && !empty($data['CustomerPaymentMethodSpecificationName'])) ? $data['CustomerPaymentMethodSpecificationName'] : '';
        $this->commissionCustomerGroupId = (isset($data['CommissionCustomerGroupId']) && !empty($data['CommissionCustomerGroupId'])) ? $data['CommissionCustomerGroupId'] : '';
        $this->deliveryAddressName = (isset($data['DeliveryAddressName']) && !empty($data['DeliveryAddressName'])) ? $data['DeliveryAddressName'] : '';
        $this->invoiceAddressCountryRegionId = (isset($data['InvoiceAddressCountryRegionId']) && !empty($data['InvoiceAddressCountryRegionId'])) ? $data['InvoiceAddressCountryRegionId'] : '';
        $this->paymentTermsBaseDate = (isset($data['PaymentTermsBaseDate']) && !empty($data['PaymentTermsBaseDate'])) ? $data['PaymentTermsBaseDate'] : '';
        $this->deliveryAddressStreetNumber = (isset($data['DeliveryAddressStreetNumber']) && !empty($data['DeliveryAddressStreetNumber'])) ? $data['DeliveryAddressStreetNumber'] : '';
        $this->creditNoteReasonCode = (isset($data['CreditNoteReasonCode']) && !empty($data['CreditNoteReasonCode'])) ? $data['CreditNoteReasonCode'] : '';
        $this->deliveryAddressStreetInKana = (isset($data['DeliveryAddressStreetInKana']) && !empty($data['DeliveryAddressStreetInKana'])) ? $data['DeliveryAddressStreetInKana'] : '';
        $this->chargeCustomerGroupId = (isset($data['ChargeCustomerGroupId']) && !empty($data['ChargeCustomerGroupId'])) ? $data['ChargeCustomerGroupId'] : '';
        $this->invoiceAddressStreetNumber = (isset($data['InvoiceAddressStreetNumber']) && !empty($data['InvoiceAddressStreetNumber'])) ? $data['InvoiceAddressStreetNumber'] : '';
        $this->isDeliveryAddressPrivate = (isset($data['IsDeliveryAddressPrivate']) && !empty($data['IsDeliveryAddressPrivate'])) ? $data['IsDeliveryAddressPrivate'] : '';
        $this->taxExemptNumber = (isset($data['TaxExemptNumber']) && !empty($data['TaxExemptNumber'])) ? $data['TaxExemptNumber'] : '';
        $this->areTotalsCalculated = (isset($data['AreTotalsCalculated']) && !empty($data['AreTotalsCalculated'])) ? $data['AreTotalsCalculated'] : '';
        $this->totalDiscountAmount = (isset($data['TotalDiscountAmount']) && !empty($data['TotalDiscountAmount'])) ? $data['TotalDiscountAmount'] : '';
        $this->orderTotalAmount = (isset($data['OrderTotalAmount']) && !empty($data['OrderTotalAmount'])) ? $data['OrderTotalAmount'] : '';
        $this->customersOrderReference = (isset($data['CustomersOrderReference']) && !empty($data['CustomersOrderReference'])) ? $data['CustomersOrderReference'] : '';
        $this->formattedInvoiceAddress = (isset($data['FormattedInvoiceAddress']) && !empty($data['FormattedInvoiceAddress'])) ? $data['FormattedInvoiceAddress'] : '';
        $this->orderResponsiblePersonnelNumber = (isset($data['OrderResponsiblePersonnelNumber']) && !empty($data['OrderResponsiblePersonnelNumber'])) ? $data['OrderResponsiblePersonnelNumber'] : '';
        $this->exportReason = (isset($data['ExportReason']) && !empty($data['ExportReason'])) ? $data['ExportReason'] : '';
        $this->deliveryAddressCountryRegionISOCode = (isset($data['DeliveryAddressCountryRegionISOCode']) && !empty($data['DeliveryAddressCountryRegionISOCode'])) ? $data['DeliveryAddressCountryRegionISOCode'] : '';
        $this->cashDiscountCode = (isset($data['CashDiscountCode']) && !empty($data['CashDiscountCode'])) ? $data['CashDiscountCode'] : '';
        $this->orderOrAgreementCode = (isset($data['OrderOrAgreementCode']) && !empty($data['OrderOrAgreementCode'])) ? $data['OrderOrAgreementCode'] : '';
        $this->paymentScheduleName = (isset($data['PaymentScheduleName']) && !empty($data['PaymentScheduleName'])) ? $data['PaymentScheduleName'] : '';
        $this->invoiceAddressCountryRegionISOCode = (isset($data['InvoiceAddressCountryRegionISOCode']) && !empty($data['InvoiceAddressCountryRegionISOCode'])) ? $data['InvoiceAddressCountryRegionISOCode'] : '';
        $this->intrastatTransactionCode = (isset($data['IntrastatTransactionCode']) && !empty($data['IntrastatTransactionCode'])) ? $data['IntrastatTransactionCode'] : '';
        $this->uRL = (isset($data['URL']) && !empty($data['URL'])) ? $data['URL'] : '';
        $this->orderTotalDiscountAmount = (isset($data['OrderTotalDiscountAmount']) && !empty($data['OrderTotalDiscountAmount'])) ? $data['OrderTotalDiscountAmount'] : '';
        $this->currencyCode = (isset($data['CurrencyCode']) && !empty($data['CurrencyCode'])) ? $data['CurrencyCode'] : '';
        $this->invoiceType = (isset($data['InvoiceType']) && !empty($data['InvoiceType'])) ? $data['InvoiceType'] : '';
        $this->orderCreationDateTime = (isset($data['OrderCreationDateTime']) && !empty($data['OrderCreationDateTime'])) ? $data['OrderCreationDateTime'] : '';
        $this->arePricesIncludingSalesTax = (isset($data['ArePricesIncludingSalesTax']) && !empty($data['ArePricesIncludingSalesTax'])) ? $data['ArePricesIncludingSalesTax'] : '';
        $this->invoiceCustomerAccountNumber = (isset($data['InvoiceCustomerAccountNumber']) && !empty($data['InvoiceCustomerAccountNumber'])) ? $data['InvoiceCustomerAccountNumber'] : '';
        $this->deliveryAddressLocationId = (isset($data['DeliveryAddressLocationId']) && !empty($data['DeliveryAddressLocationId'])) ? $data['DeliveryAddressLocationId'] : '';
        $this->commissionSalesRepresentativeGroupId = (isset($data['CommissionSalesRepresentativeGroupId']) && !empty($data['CommissionSalesRepresentativeGroupId'])) ? $data['CommissionSalesRepresentativeGroupId'] : '';
        $this->customerTransactionSettlementType = (isset($data['CustomerTransactionSettlementType']) && !empty($data['CustomerTransactionSettlementType'])) ? $data['CustomerTransactionSettlementType'] : '';
        $this->invoiceAddressCityInKana = (isset($data['InvoiceAddressCityInKana']) && !empty($data['InvoiceAddressCityInKana'])) ? $data['InvoiceAddressCityInKana'] : '';
        $this->willAutomaticInventoryReservationConsiderBatchAttributes = (isset($data['WillAutomaticInventoryReservationConsiderBatchAttributes']) && !empty($data['WillAutomaticInventoryReservationConsiderBatchAttributes'])) ? $data['WillAutomaticInventoryReservationConsiderBatchAttributes'] : '';
        $this->intrastatStatisticsProcedureCode = (isset($data['IntrastatStatisticsProcedureCode']) && !empty($data['IntrastatStatisticsProcedureCode'])) ? $data['IntrastatStatisticsProcedureCode'] : '';
        $this->isEInvoiceDimensionAccountCodeSpecifiedPerLine = (isset($data['IsEInvoiceDimensionAccountCodeSpecifiedPerLine']) && !empty($data['IsEInvoiceDimensionAccountCodeSpecifiedPerLine'])) ? $data['IsEInvoiceDimensionAccountCodeSpecifiedPerLine'] : '';
        $this->deliveryAddressStreet = (isset($data['DeliveryAddressStreet']) && !empty($data['DeliveryAddressStreet'])) ? $data['DeliveryAddressStreet'] : '';
        $this->deliveryModeCode = (isset($data['DeliveryModeCode']) && !empty($data['DeliveryModeCode'])) ? $data['DeliveryModeCode'] : '';
        $this->isExportSale = (isset($data['IsExportSale']) && !empty($data['IsExportSale'])) ? $data['IsExportSale'] : '';
        $this->confirmedShippingDate = (isset($data['ConfirmedShippingDate']) && !empty($data['ConfirmedShippingDate'])) ? $data['ConfirmedShippingDate'] : '';
        $this->fixedDueDate = (isset($data['FixedDueDate']) && !empty($data['FixedDueDate'])) ? $data['FixedDueDate'] : '';
        $this->transportationDocumentLineId = (isset($data['TransportationDocumentLineId']) && !empty($data['TransportationDocumentLineId'])) ? $data['TransportationDocumentLineId'] : '';
        $this->salesTaxGroupCode = (isset($data['SalesTaxGroupCode']) && !empty($data['SalesTaxGroupCode'])) ? $data['SalesTaxGroupCode'] : '';
        $this->isDeliveryAddressOrderSpecific = (isset($data['IsDeliveryAddressOrderSpecific']) && !empty($data['IsDeliveryAddressOrderSpecific'])) ? $data['IsDeliveryAddressOrderSpecific'] : '';
        $this->customerRequisitionNumber = (isset($data['CustomerRequisitionNumber']) && !empty($data['CustomerRequisitionNumber'])) ? $data['CustomerRequisitionNumber'] : '';
        $this->invoiceAddressLongitude = (isset($data['InvoiceAddressLongitude']) && !empty($data['InvoiceAddressLongitude'])) ? $data['InvoiceAddressLongitude'] : '';
        $this->invoiceAddressCity = (isset($data['InvoiceAddressCity']) && !empty($data['InvoiceAddressCity'])) ? $data['InvoiceAddressCity'] : '';
        $this->isFinalUser = (isset($data['IsFinalUser']) && !empty($data['IsFinalUser'])) ? $data['IsFinalUser'] : '';
        $this->invoiceAddressPostBox = (isset($data['InvoiceAddressPostBox']) && !empty($data['InvoiceAddressPostBox'])) ? $data['InvoiceAddressPostBox'] : '';
        $this->shippingCarrierServiceGroupId = (isset($data['ShippingCarrierServiceGroupId']) && !empty($data['ShippingCarrierServiceGroupId'])) ? $data['ShippingCarrierServiceGroupId'] : '';
        $this->contactPersonId = (isset($data['ContactPersonId']) && !empty($data['ContactPersonId'])) ? $data['ContactPersonId'] : '';
        $this->eUSalesListCode = (isset($data['EUSalesListCode']) && !empty($data['EUSalesListCode'])) ? $data['EUSalesListCode'] : '';
        $this->invoiceAddressDistrictName = (isset($data['InvoiceAddressDistrictName']) && !empty($data['InvoiceAddressDistrictName'])) ? $data['InvoiceAddressDistrictName'] : '';
        $this->thirdPartySalesDigitalPlatform = (isset($data['ThirdPartySalesDigitalPlatform']) && !empty($data['ThirdPartySalesDigitalPlatform'])) ? $data['ThirdPartySalesDigitalPlatform'] : '';
        $this->paymentTermsName = (isset($data['PaymentTermsName']) && !empty($data['PaymentTermsName'])) ? $data['PaymentTermsName'] : '';
        $this->deliveryAddressCityInKana = (isset($data['DeliveryAddressCityInKana']) && !empty($data['DeliveryAddressCityInKana'])) ? $data['DeliveryAddressCityInKana'] : '';
        $this->baseDocumentDate = (isset($data['BaseDocumentDate']) && !empty($data['BaseDocumentDate'])) ? $data['BaseDocumentDate'] : '';
        $this->customerPostingProfileId = (isset($data['CustomerPostingProfileId']) && !empty($data['CustomerPostingProfileId'])) ? $data['CustomerPostingProfileId'] : '';
        $this->deliveryAddressLongitude = (isset($data['DeliveryAddressLongitude']) && !empty($data['DeliveryAddressLongitude'])) ? $data['DeliveryAddressLongitude'] : '';
        $this->tenderCode = (isset($data['TenderCode']) && !empty($data['TenderCode'])) ? $data['TenderCode'] : '';
        $this->invoiceAddressZipCode = (isset($data['InvoiceAddressZipCode']) && !empty($data['InvoiceAddressZipCode'])) ? $data['InvoiceAddressZipCode'] : '';
        $this->deliveryTermsCode = (isset($data['DeliveryTermsCode']) && !empty($data['DeliveryTermsCode'])) ? $data['DeliveryTermsCode'] : '';
        $this->shippingCarrierServiceId = (isset($data['ShippingCarrierServiceId']) && !empty($data['ShippingCarrierServiceId'])) ? $data['ShippingCarrierServiceId'] : '';
        $this->defaultLedgerDimensionDisplayValue = (isset($data['DefaultLedgerDimensionDisplayValue']) && !empty($data['DefaultLedgerDimensionDisplayValue'])) ? $data['DefaultLedgerDimensionDisplayValue'] : '';
        $this->deliveryAddressTimeZone = (isset($data['DeliveryAddressTimeZone']) && !empty($data['DeliveryAddressTimeZone'])) ? $data['DeliveryAddressTimeZone'] : '';
        $this->salesOrderName = (isset($data['SalesOrderName']) && !empty($data['SalesOrderName'])) ? $data['SalesOrderName'] : '';
        $this->defaultShippingWarehouseId = (isset($data['DefaultShippingWarehouseId']) && !empty($data['DefaultShippingWarehouseId'])) ? $data['DefaultShippingWarehouseId'] : '';
        $this->isEntryCertificateRequired = (isset($data['IsEntryCertificateRequired']) && !empty($data['IsEntryCertificateRequired'])) ? $data['IsEntryCertificateRequired'] : '';
        $this->deliveryAddressStateId = (isset($data['DeliveryAddressStateId']) && !empty($data['DeliveryAddressStateId'])) ? $data['DeliveryAddressStateId'] : '';
        $this->deliveryBuildingCompliment = (isset($data['DeliveryBuildingCompliment']) && !empty($data['DeliveryBuildingCompliment'])) ? $data['DeliveryBuildingCompliment'] : '';
        $this->intrastatTransportModeCode = (isset($data['IntrastatTransportModeCode']) && !empty($data['IntrastatTransportModeCode'])) ? $data['IntrastatTransportModeCode'] : '';
        $this->invoicePaymentAttachmentType = (isset($data['InvoicePaymentAttachmentType']) && !empty($data['InvoicePaymentAttachmentType'])) ? $data['InvoicePaymentAttachmentType'] : '';
        $this->deliveryAddressPostBox = (isset($data['DeliveryAddressPostBox']) && !empty($data['DeliveryAddressPostBox'])) ? $data['DeliveryAddressPostBox'] : '';
        $this->invoiceAddressTimeZone = (isset($data['InvoiceAddressTimeZone']) && !empty($data['InvoiceAddressTimeZone'])) ? $data['InvoiceAddressTimeZone'] : '';
        $this->invoiceAddressCountyId = (isset($data['InvoiceAddressCountyId']) && !empty($data['InvoiceAddressCountyId'])) ? $data['InvoiceAddressCountyId'] : '';
        $this->directDebitMandateId = (isset($data['DirectDebitMandateId']) && !empty($data['DirectDebitMandateId'])) ? $data['DirectDebitMandateId'] : '';
        $this->lineDiscountCustomerGroupCode = (isset($data['LineDiscountCustomerGroupCode']) && !empty($data['LineDiscountCustomerGroupCode'])) ? $data['LineDiscountCustomerGroupCode'] : '';
        $this->intrastatPortId = (isset($data['IntrastatPortId']) && !empty($data['IntrastatPortId'])) ? $data['IntrastatPortId'] : '';
        $this->cIPEcode = (isset($data['CIPEcode']) && !empty($data['CIPEcode'])) ? $data['CIPEcode'] : '';
        $this->orderingCustomerAccountNumber = (isset($data['OrderingCustomerAccountNumber']) && !empty($data['OrderingCustomerAccountNumber'])) ? $data['OrderingCustomerAccountNumber'] : '';
        $this->customerPaymentFineCode = (isset($data['CustomerPaymentFineCode']) && !empty($data['CustomerPaymentFineCode'])) ? $data['CustomerPaymentFineCode'] : '';
        $this->invoiceBuildingCompliment = (isset($data['InvoiceBuildingCompliment']) && !empty($data['InvoiceBuildingCompliment'])) ? $data['InvoiceBuildingCompliment'] : '';
        $this->priceCustomerGroupCode = (isset($data['PriceCustomerGroupCode']) && !empty($data['PriceCustomerGroupCode'])) ? $data['PriceCustomerGroupCode'] : '';
        $this->deliveryReasonCode = (isset($data['DeliveryReasonCode']) && !empty($data['DeliveryReasonCode'])) ? $data['DeliveryReasonCode'] : '';
        $this->isServiceDeliveryAddressBased = (isset($data['IsServiceDeliveryAddressBased']) && !empty($data['IsServiceDeliveryAddressBased'])) ? $data['IsServiceDeliveryAddressBased'] : '';
        $this->reportingCurrencyFixedExchangeRate = (isset($data['ReportingCurrencyFixedExchangeRate']) && !empty($data['ReportingCurrencyFixedExchangeRate'])) ? $data['ReportingCurrencyFixedExchangeRate'] : '';
        $this->orderHeaderTaxAmount = (isset($data['OrderHeaderTaxAmount']) && !empty($data['OrderHeaderTaxAmount'])) ? $data['OrderHeaderTaxAmount'] : '';
        $this->inventoryReservationMethod = (isset($data['InventoryReservationMethod']) && !empty($data['InventoryReservationMethod'])) ? $data['InventoryReservationMethod'] : '';
        $this->requestedShippingDate = (isset($data['RequestedShippingDate']) && !empty($data['RequestedShippingDate'])) ? $data['RequestedShippingDate'] : '';
        $this->salesOrderProcessingStatus = (isset($data['SalesOrderProcessingStatus']) && !empty($data['SalesOrderProcessingStatus'])) ? $data['SalesOrderProcessingStatus'] : '';
        $this->transportationRoutePlanId = (isset($data['TransportationRoutePlanId']) && !empty($data['TransportationRoutePlanId'])) ? $data['TransportationRoutePlanId'] : '';
        $this->skipCreateAutoCharges = (isset($data['SkipCreateAutoCharges']) && !empty($data['SkipCreateAutoCharges'])) ? $data['SkipCreateAutoCharges'] : '';
        $this->customerPaymentMethodName = (isset($data['CustomerPaymentMethodName']) && !empty($data['CustomerPaymentMethodName'])) ? $data['CustomerPaymentMethodName'] : '';
        $this->salesUnitId = (isset($data['SalesUnitId']) && !empty($data['SalesUnitId'])) ? $data['SalesUnitId'] : '';
        $this->fixedExchangeRate = (isset($data['FixedExchangeRate']) && !empty($data['FixedExchangeRate'])) ? $data['FixedExchangeRate'] : '';
        $this->revRecReallocationId = (isset($data['RevRecReallocationId']) && !empty($data['RevRecReallocationId'])) ? $data['RevRecReallocationId'] : '';
        $this->revRecFollowOriginalPricingMethod = (isset($data['RevRecFollowOriginalPricingMethod']) && !empty($data['RevRecFollowOriginalPricingMethod'])) ? $data['RevRecFollowOriginalPricingMethod'] : '';
        $this->revRecMultipleSOReallocation = (isset($data['RevRecMultipleSOReallocation']) && !empty($data['RevRecMultipleSOReallocation'])) ? $data['RevRecMultipleSOReallocation'] : '';
        $this->revRecContractEndDate = (isset($data['RevRecContractEndDate']) && !empty($data['RevRecContractEndDate'])) ? $data['RevRecContractEndDate'] : '';
        $this->revRecLatestReverseJournal = (isset($data['RevRecLatestReverseJournal']) && !empty($data['RevRecLatestReverseJournal'])) ? $data['RevRecLatestReverseJournal'] : '';
        $this->revRecContractStartDate = (isset($data['RevRecContractStartDate']) && !empty($data['RevRecContractStartDate'])) ? $data['RevRecContractStartDate'] : '';
        $this->lAC_ModifiedDateTime = (isset($data['LAC_ModifiedDateTime']) && !empty($data['LAC_ModifiedDateTime'])) ? $data['LAC_ModifiedDateTime'] : '';
        $this->lAC_ReleaseStatus = (isset($data['LAC_ReleaseStatus']) && !empty($data['LAC_ReleaseStatus'])) ? $data['LAC_ReleaseStatus'] : '';
        $this->lAC_CreatedDateTime = (isset($data['LAC_CreatedDateTime']) && !empty($data['LAC_CreatedDateTime'])) ? $data['LAC_CreatedDateTime'] : '';
        $this->lAC_UseDlvAddrPBI = (isset($data['LAC_UseDlvAddrPBI']) && !empty($data['LAC_UseDlvAddrPBI'])) ? $data['LAC_UseDlvAddrPBI'] : '';

		$this->links['self'] = "/sales_orders/salesOrderNumber=$this->salesOrderNumber";
	}

}

