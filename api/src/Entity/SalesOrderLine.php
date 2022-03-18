<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiProperty;
use ApiPlatform\Core\Exception\InvalidIdentifierException;

#[ApiResource(mercure: true)]
class SalesOrderLine
{

	#[ApiProperty(identifier: true)]
    private string $dataAreaId;

	 /**
	 * @return string
	 */
	public function getDataAreaId(): string
	{
		return $this->dataAreaId;
	}

    /**
     * Set the value of dataAreaId
     *
     * @param string $dataAreaId
     *
     * @return self
     */ 
    public function setDataAreaId(string $dataAreaId)
    {
        $this->dataAreaId= $dataAreaId;

        return $this;
    }



	#[ApiProperty(identifier: true)]
	private string $inventoryLotId;

    /**
	 * @return string
	 */
	public function getInventoryLotId(): string
	{
		return $this->inventoryLotId;
	}

    /**
     * Set the value of inventoryLotId
     *
     * @param string $inventoryLotId
     *
     * @return  self
     */ 
    public function setInventoryLotId(string $inventoryLotId)
    {
        $this->inventoryLotId = $inventoryLotId;

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



    private string $retailCalculatedTotalDiscountPercentage;

    /**
	 * @return string
	 */
	public function getRetailCalculatedTotalDiscountPercentage(): string
	{
		return $this->retailCalculatedTotalDiscountPercentage;
	}

    /**
     * Set the value of retailCalculatedTotalDiscountPercentage
     *
     * @param string $retailCalculatedTotalDiscountPercentage
     *
     * @return  self
     */ 
    public function setRetailCalculatedTotalDiscountPercentage(string $retailCalculatedTotalDiscountPercentage)
    {
        $this->retailCalculatedTotalDiscountPercentage = $retailCalculatedTotalDiscountPercentage;

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



    private string $shippingWarehouseLocationId;

    /**
	 * @return string
	 */
	public function getShippingWarehouseLocationId(): string
	{
		return $this->shippingWarehouseLocationId;
	}

    /**
     * Set the value of shippingWarehouseLocationId
     *
     * @param string $shippingWarehouseLocationId
     *
     * @return  self
     */ 
    public function setShippingWarehouseLocationId(string $shippingWarehouseLocationId)
    {
        $this->shippingWarehouseLocationId = $shippingWarehouseLocationId;

        return $this;
    }



    private string $salesOrderLineStatus;

    /**
	 * @return string
	 */
	public function getSalesOrderLineStatus(): string
	{
		return $this->salesOrderLineStatus;
	}

    /**
     * Set the value of salesOrderLineStatus
     *
     * @param string $salesOrderLineStatus
     *
     * @return  self
     */ 
    public function setSalesOrderLineStatus(string $salesOrderLineStatus)
    {
        $this->salesOrderLineStatus = $salesOrderLineStatus;

        return $this;
    }



    private string $projectCategoryId;

    /**
	 * @return string
	 */
	public function getProjectCategoryId(): string
	{
		return $this->projectCategoryId;
	}

    /**
     * Set the value of projectCategoryId
     *
     * @param string $projectCategoryId
     *
     * @return  self
     */ 
    public function setProjectCategoryId(string $projectCategoryId)
    {
        $this->projectCategoryId = $projectCategoryId;

        return $this;
    }



    private string $itemNumber;

    /**
	 * @return string
	 */
	public function getItemNumber(): string
	{
		return $this->itemNumber;
	}

    /**
     * Set the value of itemNumber
     *
     * @param string $itemNumber
     *
     * @return  self
     */ 
    public function setItemNumber(string $itemNumber)
    {
        $this->itemNumber = $itemNumber;

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



    private string $multilineDiscountPercentage;

    /**
	 * @return string
	 */
	public function getMultilineDiscountPercentage(): string
	{
		return $this->multilineDiscountPercentage;
	}

    /**
     * Set the value of multilineDiscountPercentage
     *
     * @param string $multilineDiscountPercentage
     *
     * @return  self
     */ 
    public function setMultilineDiscountPercentage(string $multilineDiscountPercentage)
    {
        $this->multilineDiscountPercentage = $multilineDiscountPercentage;

        return $this;
    }



    private string $shippingWarehouseId;

    /**
	 * @return string
	 */
	public function getShippingWarehouseId(): string
	{
		return $this->shippingWarehouseId;
	}

    /**
     * Set the value of shippingWarehouseId
     *
     * @param string $shippingWarehouseId
     *
     * @return  self
     */ 
    public function setShippingWarehouseId(string $shippingWarehouseId)
    {
        $this->shippingWarehouseId = $shippingWarehouseId;

        return $this;
    }



    private string $giftCardBuyerName;

    /**
	 * @return string
	 */
	public function getGiftCardBuyerName(): string
	{
		return $this->giftCardBuyerName;
	}

    /**
     * Set the value of giftCardBuyerName
     *
     * @param string $giftCardBuyerName
     *
     * @return  self
     */ 
    public function setGiftCardBuyerName(string $giftCardBuyerName)
    {
        $this->giftCardBuyerName = $giftCardBuyerName;

        return $this;
    }



    private string $giftCardNumber;

    /**
	 * @return string
	 */
	public function getGiftCardNumber(): string
	{
		return $this->giftCardNumber;
	}

    /**
     * Set the value of giftCardNumber
     *
     * @param string $giftCardNumber
     *
     * @return  self
     */ 
    public function setGiftCardNumber(string $giftCardNumber)
    {
        $this->giftCardNumber = $giftCardNumber;

        return $this;
    }



    private string $customsDocumentNumber;

    /**
	 * @return string
	 */
	public function getCustomsDocumentNumber(): string
	{
		return $this->customsDocumentNumber;
	}

    /**
     * Set the value of customsDocumentNumber
     *
     * @param string $customsDocumentNumber
     *
     * @return  self
     */ 
    public function setCustomsDocumentNumber(string $customsDocumentNumber)
    {
        $this->customsDocumentNumber = $customsDocumentNumber;

        return $this;
    }



    private string $lineDiscountAmount;

    /**
	 * @return string
	 */
	public function getLineDiscountAmount(): string
	{
		return $this->lineDiscountAmount;
	}

    /**
     * Set the value of lineDiscountAmount
     *
     * @param string $lineDiscountAmount
     *
     * @return  self
     */ 
    public function setLineDiscountAmount(string $lineDiscountAmount)
    {
        $this->lineDiscountAmount = $lineDiscountAmount;

        return $this;
    }



    private string $productStyleId;

    /**
	 * @return string
	 */
	public function getProductStyleId(): string
	{
		return $this->productStyleId;
	}

    /**
     * Set the value of productStyleId
     *
     * @param string $productStyleId
     *
     * @return  self
     */ 
    public function setProductStyleId(string $productStyleId)
    {
        $this->productStyleId = $productStyleId;

        return $this;
    }



    private string $productConfigurationId;

    /**
	 * @return string
	 */
	public function getProductConfigurationId(): string
	{
		return $this->productConfigurationId;
	}

    /**
     * Set the value of productConfigurationId
     *
     * @param string $productConfigurationId
     *
     * @return  self
     */ 
    public function setProductConfigurationId(string $productConfigurationId)
    {
        $this->productConfigurationId = $productConfigurationId;

        return $this;
    }



    private string $deliverySalesTaxGroupCode;

    /**
	 * @return string
	 */
	public function getDeliverySalesTaxGroupCode(): string
	{
		return $this->deliverySalesTaxGroupCode;
	}

    /**
     * Set the value of deliverySalesTaxGroupCode
     *
     * @param string $deliverySalesTaxGroupCode
     *
     * @return  self
     */ 
    public function setDeliverySalesTaxGroupCode(string $deliverySalesTaxGroupCode)
    {
        $this->deliverySalesTaxGroupCode = $deliverySalesTaxGroupCode;

        return $this;
    }



    private string $isIntrastatTriangularDeal;

    /**
	 * @return string
	 */
	public function getIsIntrastatTriangularDeal(): string
	{
		return $this->isIntrastatTriangularDeal;
	}

    /**
     * Set the value of isIntrastatTriangularDeal
     *
     * @param string $isIntrastatTriangularDeal
     *
     * @return  self
     */ 
    public function setIsIntrastatTriangularDeal(string $isIntrastatTriangularDeal)
    {
        $this->isIntrastatTriangularDeal = $isIntrastatTriangularDeal;

        return $this;
    }



    private string $multilineDiscountAmount;

    /**
	 * @return string
	 */
	public function getMultilineDiscountAmount(): string
	{
		return $this->multilineDiscountAmount;
	}

    /**
     * Set the value of multilineDiscountAmount
     *
     * @param string $multilineDiscountAmount
     *
     * @return  self
     */ 
    public function setMultilineDiscountAmount(string $multilineDiscountAmount)
    {
        $this->multilineDiscountAmount = $multilineDiscountAmount;

        return $this;
    }



    private string $itemBatchNumber;

    /**
	 * @return string
	 */
	public function getItemBatchNumber(): string
	{
		return $this->itemBatchNumber;
	}

    /**
     * Set the value of itemBatchNumber
     *
     * @param string $itemBatchNumber
     *
     * @return  self
     */ 
    public function setItemBatchNumber(string $itemBatchNumber)
    {
        $this->itemBatchNumber = $itemBatchNumber;

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



    private string $isPriceLocked;

    /**
	 * @return string
	 */
	public function getIsPriceLocked(): string
	{
		return $this->isPriceLocked;
	}

    /**
     * Set the value of isPriceLocked
     *
     * @param string $isPriceLocked
     *
     * @return  self
     */ 
    public function setIsPriceLocked(string $isPriceLocked)
    {
        $this->isPriceLocked = $isPriceLocked;

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



    private string $salesProductCategoryName;

    /**
	 * @return string
	 */
	public function getSalesProductCategoryName(): string
	{
		return $this->salesProductCategoryName;
	}

    /**
     * Set the value of salesProductCategoryName
     *
     * @param string $salesProductCategoryName
     *
     * @return  self
     */ 
    public function setSalesProductCategoryName(string $salesProductCategoryName)
    {
        $this->salesProductCategoryName = $salesProductCategoryName;

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



    private string $projectLinePropertyId;

    /**
	 * @return string
	 */
	public function getProjectLinePropertyId(): string
	{
		return $this->projectLinePropertyId;
	}

    /**
     * Set the value of projectLinePropertyId
     *
     * @param string $projectLinePropertyId
     *
     * @return  self
     */ 
    public function setProjectLinePropertyId(string $projectLinePropertyId)
    {
        $this->projectLinePropertyId = $projectLinePropertyId;

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



    private string $salesRebateProductGroupId;

    /**
	 * @return string
	 */
	public function getSalesRebateProductGroupId(): string
	{
		return $this->salesRebateProductGroupId;
	}

    /**
     * Set the value of salesRebateProductGroupId
     *
     * @param string $salesRebateProductGroupId
     *
     * @return  self
     */ 
    public function setSalesRebateProductGroupId(string $salesRebateProductGroupId)
    {
        $this->salesRebateProductGroupId = $salesRebateProductGroupId;

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



    private string $salesUnitSymbol;

    /**
	 * @return string
	 */
	public function getSalesUnitSymbol(): string
	{
		return $this->salesUnitSymbol;
	}

    /**
     * Set the value of salesUnitSymbol
     *
     * @param string $salesUnitSymbol
     *
     * @return  self
     */ 
    public function setSalesUnitSymbol(string $salesUnitSymbol)
    {
        $this->salesUnitSymbol = $salesUnitSymbol;

        return $this;
    }



    private string $itemWithholdingTaxCodeGroupCode;

    /**
	 * @return string
	 */
	public function getItemWithholdingTaxCodeGroupCode(): string
	{
		return $this->itemWithholdingTaxCodeGroupCode;
	}

    /**
     * Set the value of itemWithholdingTaxCodeGroupCode
     *
     * @param string $itemWithholdingTaxCodeGroupCode
     *
     * @return  self
     */ 
    public function setItemWithholdingTaxCodeGroupCode(string $itemWithholdingTaxCodeGroupCode)
    {
        $this->itemWithholdingTaxCodeGroupCode = $itemWithholdingTaxCodeGroupCode;

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



    private string $productSizeId;

    /**
	 * @return string
	 */
	public function getProductSizeId(): string
	{
		return $this->productSizeId;
	}

    /**
     * Set the value of productSizeId
     *
     * @param string $productSizeId
     *
     * @return  self
     */ 
    public function setProductSizeId(string $productSizeId)
    {
        $this->productSizeId = $productSizeId;

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



    private string $fixedPriceCharges;

    /**
	 * @return string
	 */
	public function getFixedPriceCharges(): string
	{
		return $this->fixedPriceCharges;
	}

    /**
     * Set the value of fixedPriceCharges
     *
     * @param string $fixedPriceCharges
     *
     * @return  self
     */ 
    public function setFixedPriceCharges(string $fixedPriceCharges)
    {
        $this->fixedPriceCharges = $fixedPriceCharges;

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



    private string $deliveryTermsId;

    /**
	 * @return string
	 */
	public function getDeliveryTermsId(): string
	{
		return $this->deliveryTermsId;
	}

    /**
     * Set the value of deliveryTermsId
     *
     * @param string $deliveryTermsId
     *
     * @return  self
     */ 
    public function setDeliveryTermsId(string $deliveryTermsId)
    {
        $this->deliveryTermsId = $deliveryTermsId;

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



    private string $retailCalculatedTotalDiscountAmount;

    /**
	 * @return string
	 */
	public function getRetailCalculatedTotalDiscountAmount(): string
	{
		return $this->retailCalculatedTotalDiscountAmount;
	}

    /**
     * Set the value of retailCalculatedTotalDiscountAmount
     *
     * @param string $retailCalculatedTotalDiscountAmount
     *
     * @return  self
     */ 
    public function setRetailCalculatedTotalDiscountAmount(string $retailCalculatedTotalDiscountAmount)
    {
        $this->retailCalculatedTotalDiscountAmount = $retailCalculatedTotalDiscountAmount;

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



    private string $packingUnitSymbol;

    /**
	 * @return string
	 */
	public function getPackingUnitSymbol(): string
	{
		return $this->packingUnitSymbol;
	}

    /**
     * Set the value of packingUnitSymbol
     *
     * @param string $packingUnitSymbol
     *
     * @return  self
     */ 
    public function setPackingUnitSymbol(string $packingUnitSymbol)
    {
        $this->packingUnitSymbol = $packingUnitSymbol;

        return $this;
    }



    private string $orderedSalesQuantity;

    /**
	 * @return string
	 */
	public function getOrderedSalesQuantity(): string
	{
		return $this->orderedSalesQuantity;
	}

    /**
     * Set the value of orderedSalesQuantity
     *
     * @param string $orderedSalesQuantity
     *
     * @return  self
     */ 
    public function setOrderedSalesQuantity(string $orderedSalesQuantity)
    {
        $this->orderedSalesQuantity = $orderedSalesQuantity;

        return $this;
    }



    private string $bOMId;

    /**
	 * @return string
	 */
	public function getBOMId(): string
	{
		return $this->bOMId;
	}

    /**
     * Set the value of bOMId
     *
     * @param string $bOMId
     *
     * @return  self
     */ 
    public function setBOMId(string $bOMId)
    {
        $this->bOMId = $bOMId;

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



    private string $shippingSiteId;

    /**
	 * @return string
	 */
	public function getShippingSiteId(): string
	{
		return $this->shippingSiteId;
	}

    /**
     * Set the value of shippingSiteId
     *
     * @param string $shippingSiteId
     *
     * @return  self
     */ 
    public function setShippingSiteId(string $shippingSiteId)
    {
        $this->shippingSiteId = $shippingSiteId;

        return $this;
    }



    private string $nGPCode;

    /**
	 * @return string
	 */
	public function getNGPCode(): string
	{
		return $this->nGPCode;
	}

    /**
     * Set the value of nGPCode
     *
     * @param string $nGPCode
     *
     * @return  self
     */ 
    public function setNGPCode(string $nGPCode)
    {
        $this->nGPCode = $nGPCode;

        return $this;
    }



    private string $retailCalculatedLineDiscountAmount;

    /**
	 * @return string
	 */
	public function getRetailCalculatedLineDiscountAmount(): string
	{
		return $this->retailCalculatedLineDiscountAmount;
	}

    /**
     * Set the value of retailCalculatedLineDiscountAmount
     *
     * @param string $retailCalculatedLineDiscountAmount
     *
     * @return  self
     */ 
    public function setRetailCalculatedLineDiscountAmount(string $retailCalculatedLineDiscountAmount)
    {
        $this->retailCalculatedLineDiscountAmount = $retailCalculatedLineDiscountAmount;

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



    private string $lineCreationSequenceNumber;

    /**
	 * @return string
	 */
	public function getLineCreationSequenceNumber(): string
	{
		return $this->lineCreationSequenceNumber;
	}

    /**
     * Set the value of lineCreationSequenceNumber
     *
     * @param string $lineCreationSequenceNumber
     *
     * @return  self
     */ 
    public function setLineCreationSequenceNumber(string $lineCreationSequenceNumber)
    {
        $this->lineCreationSequenceNumber = $lineCreationSequenceNumber;

        return $this;
    }



    private string $retailCalculatedTenderDiscountPercentage;

    /**
	 * @return string
	 */
	public function getRetailCalculatedTenderDiscountPercentage(): string
	{
		return $this->retailCalculatedTenderDiscountPercentage;
	}

    /**
     * Set the value of retailCalculatedTenderDiscountPercentage
     *
     * @param string $retailCalculatedTenderDiscountPercentage
     *
     * @return  self
     */ 
    public function setRetailCalculatedTenderDiscountPercentage(string $retailCalculatedTenderDiscountPercentage)
    {
        $this->retailCalculatedTenderDiscountPercentage = $retailCalculatedTenderDiscountPercentage;

        return $this;
    }



    private string $mainAccountIdDisplayValue;

    /**
	 * @return string
	 */
	public function getMainAccountIdDisplayValue(): string
	{
		return $this->mainAccountIdDisplayValue;
	}

    /**
     * Set the value of mainAccountIdDisplayValue
     *
     * @param string $mainAccountIdDisplayValue
     *
     * @return  self
     */ 
    public function setMainAccountIdDisplayValue(string $mainAccountIdDisplayValue)
    {
        $this->mainAccountIdDisplayValue = $mainAccountIdDisplayValue;

        return $this;
    }



    private string $orderedInventoryStatusId;

    /**
	 * @return string
	 */
	public function getOrderedInventoryStatusId(): string
	{
		return $this->orderedInventoryStatusId;
	}

    /**
     * Set the value of orderedInventoryStatusId
     *
     * @param string $orderedInventoryStatusId
     *
     * @return  self
     */ 
    public function setOrderedInventoryStatusId(string $orderedInventoryStatusId)
    {
        $this->orderedInventoryStatusId = $orderedInventoryStatusId;

        return $this;
    }



    private string $giftCardRecipientEmail;

    /**
	 * @return string
	 */
	public function getGiftCardRecipientEmail(): string
	{
		return $this->giftCardRecipientEmail;
	}

    /**
     * Set the value of giftCardRecipientEmail
     *
     * @param string $giftCardRecipientEmail
     *
     * @return  self
     */ 
    public function setGiftCardRecipientEmail(string $giftCardRecipientEmail)
    {
        $this->giftCardRecipientEmail = $giftCardRecipientEmail;

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



    private string $itemSerialNumber;

    /**
	 * @return string
	 */
	public function getItemSerialNumber(): string
	{
		return $this->itemSerialNumber;
	}

    /**
     * Set the value of itemSerialNumber
     *
     * @param string $itemSerialNumber
     *
     * @return  self
     */ 
    public function setItemSerialNumber(string $itemSerialNumber)
    {
        $this->itemSerialNumber = $itemSerialNumber;

        return $this;
    }



    private string $retailCalculatedManualLineDiscountPercentage;

    /**
	 * @return string
	 */
	public function getRetailCalculatedManualLineDiscountPercentage(): string
	{
		return $this->retailCalculatedManualLineDiscountPercentage;
	}

    /**
     * Set the value of retailCalculatedManualLineDiscountPercentage
     *
     * @param string $retailCalculatedManualLineDiscountPercentage
     *
     * @return  self
     */ 
    public function setRetailCalculatedManualLineDiscountPercentage(string $retailCalculatedManualLineDiscountPercentage)
    {
        $this->retailCalculatedManualLineDiscountPercentage = $retailCalculatedManualLineDiscountPercentage;

        return $this;
    }



    private string $calculateLineAmount;

    /**
	 * @return string
	 */
	public function getCalculateLineAmount(): string
	{
		return $this->calculateLineAmount;
	}

    /**
     * Set the value of calculateLineAmount
     *
     * @param string $calculateLineAmount
     *
     * @return  self
     */ 
    public function setCalculateLineAmount(string $calculateLineAmount)
    {
        $this->calculateLineAmount = $calculateLineAmount;

        return $this;
    }



    private string $retailCalculatedPeriodicDiscountAmount;

    /**
	 * @return string
	 */
	public function getRetailCalculatedPeriodicDiscountAmount(): string
	{
		return $this->retailCalculatedPeriodicDiscountAmount;
	}

    /**
     * Set the value of retailCalculatedPeriodicDiscountAmount
     *
     * @param string $retailCalculatedPeriodicDiscountAmount
     *
     * @return  self
     */ 
    public function setRetailCalculatedPeriodicDiscountAmount(string $retailCalculatedPeriodicDiscountAmount)
    {
        $this->retailCalculatedPeriodicDiscountAmount = $retailCalculatedPeriodicDiscountAmount;

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



    private string $salesTaxItemGroupCode;

    /**
	 * @return string
	 */
	public function getSalesTaxItemGroupCode(): string
	{
		return $this->salesTaxItemGroupCode;
	}

    /**
     * Set the value of salesTaxItemGroupCode
     *
     * @param string $salesTaxItemGroupCode
     *
     * @return  self
     */ 
    public function setSalesTaxItemGroupCode(string $salesTaxItemGroupCode)
    {
        $this->salesTaxItemGroupCode = $salesTaxItemGroupCode;

        return $this;
    }



    private string $routeId;

    /**
	 * @return string
	 */
	public function getRouteId(): string
	{
		return $this->routeId;
	}

    /**
     * Set the value of routeId
     *
     * @param string $routeId
     *
     * @return  self
     */ 
    public function setRouteId(string $routeId)
    {
        $this->routeId = $routeId;

        return $this;
    }



    private string $eInvoicePropertyNumber;

    /**
	 * @return string
	 */
	public function getEInvoicePropertyNumber(): string
	{
		return $this->eInvoicePropertyNumber;
	}

    /**
     * Set the value of eInvoicePropertyNumber
     *
     * @param string $eInvoicePropertyNumber
     *
     * @return  self
     */ 
    public function setEInvoicePropertyNumber(string $eInvoicePropertyNumber)
    {
        $this->eInvoicePropertyNumber = $eInvoicePropertyNumber;

        return $this;
    }



    private string $productVersionId;

    /**
	 * @return string
	 */
	public function getProductVersionId(): string
	{
		return $this->productVersionId;
	}

    /**
     * Set the value of productVersionId
     *
     * @param string $productVersionId
     *
     * @return  self
     */ 
    public function setProductVersionId(string $productVersionId)
    {
        $this->productVersionId = $productVersionId;

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



    private string $customsDocumentName;

    /**
	 * @return string
	 */
	public function getCustomsDocumentName(): string
	{
		return $this->customsDocumentName;
	}

    /**
     * Set the value of customsDocumentName
     *
     * @param string $customsDocumentName
     *
     * @return  self
     */ 
    public function setCustomsDocumentName(string $customsDocumentName)
    {
        $this->customsDocumentName = $customsDocumentName;

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



    private string $overrideSalesTax;

    /**
	 * @return string
	 */
	public function getOverrideSalesTax(): string
	{
		return $this->overrideSalesTax;
	}

    /**
     * Set the value of overrideSalesTax
     *
     * @param string $overrideSalesTax
     *
     * @return  self
     */ 
    public function setOverrideSalesTax(string $overrideSalesTax)
    {
        $this->overrideSalesTax = $overrideSalesTax;

        return $this;
    }



    private string $lineDescription;

    /**
	 * @return string
	 */
	public function getLineDescription(): string
	{
		return $this->lineDescription;
	}

    /**
     * Set the value of lineDescription
     *
     * @param string $lineDescription
     *
     * @return  self
     */ 
    public function setLineDescription(string $lineDescription)
    {
        $this->lineDescription = $lineDescription;

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



    private string $retailCalculatedLineDiscountPercentage;

    /**
	 * @return string
	 */
	public function getRetailCalculatedLineDiscountPercentage(): string
	{
		return $this->retailCalculatedLineDiscountPercentage;
	}

    /**
     * Set the value of retailCalculatedLineDiscountPercentage
     *
     * @param string $retailCalculatedLineDiscountPercentage
     *
     * @return  self
     */ 
    public function setRetailCalculatedLineDiscountPercentage(string $retailCalculatedLineDiscountPercentage)
    {
        $this->retailCalculatedLineDiscountPercentage = $retailCalculatedLineDiscountPercentage;

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



    private string $serviceOrderNumber;

    /**
	 * @return string
	 */
	public function getServiceOrderNumber(): string
	{
		return $this->serviceOrderNumber;
	}

    /**
     * Set the value of serviceOrderNumber
     *
     * @param string $serviceOrderNumber
     *
     * @return  self
     */ 
    public function setServiceOrderNumber(string $serviceOrderNumber)
    {
        $this->serviceOrderNumber = $serviceOrderNumber;

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



    private string $fiscalDocumentTypeId;

    /**
	 * @return string
	 */
	public function getFiscalDocumentTypeId(): string
	{
		return $this->fiscalDocumentTypeId;
	}

    /**
     * Set the value of fiscalDocumentTypeId
     *
     * @param string $fiscalDocumentTypeId
     *
     * @return  self
     */ 
    public function setFiscalDocumentTypeId(string $fiscalDocumentTypeId)
    {
        $this->fiscalDocumentTypeId = $fiscalDocumentTypeId;

        return $this;
    }



    private string $planningPriority;

    /**
	 * @return string
	 */
	public function getPlanningPriority(): string
	{
		return $this->planningPriority;
	}

    /**
     * Set the value of planningPriority
     *
     * @param string $planningPriority
     *
     * @return  self
     */ 
    public function setPlanningPriority(string $planningPriority)
    {
        $this->planningPriority = $planningPriority;

        return $this;
    }



    private string $deliveryCFOPCode;

    /**
	 * @return string
	 */
	public function getDeliveryCFOPCode(): string
	{
		return $this->deliveryCFOPCode;
	}

    /**
     * Set the value of deliveryCFOPCode
     *
     * @param string $deliveryCFOPCode
     *
     * @return  self
     */ 
    public function setDeliveryCFOPCode(string $deliveryCFOPCode)
    {
        $this->deliveryCFOPCode = $deliveryCFOPCode;

        return $this;
    }



    private string $lineDiscountPercentage;

    /**
	 * @return string
	 */
	public function getLineDiscountPercentage(): string
	{
		return $this->lineDiscountPercentage;
	}

    /**
     * Set the value of lineDiscountPercentage
     *
     * @param string $lineDiscountPercentage
     *
     * @return  self
     */ 
    public function setLineDiscountPercentage(string $lineDiscountPercentage)
    {
        $this->lineDiscountPercentage = $lineDiscountPercentage;

        return $this;
    }



    private string $salesPrice;

    /**
	 * @return string
	 */
	public function getSalesPrice(): string
	{
		return $this->salesPrice;
	}

    /**
     * Set the value of salesPrice
     *
     * @param string $salesPrice
     *
     * @return  self
     */ 
    public function setSalesPrice(string $salesPrice)
    {
        $this->salesPrice = $salesPrice;

        return $this;
    }



    private string $giftCardGiftMessage;

    /**
	 * @return string
	 */
	public function getGiftCardGiftMessage(): string
	{
		return $this->giftCardGiftMessage;
	}

    /**
     * Set the value of giftCardGiftMessage
     *
     * @param string $giftCardGiftMessage
     *
     * @return  self
     */ 
    public function setGiftCardGiftMessage(string $giftCardGiftMessage)
    {
        $this->giftCardGiftMessage = $giftCardGiftMessage;

        return $this;
    }



    private string $fulfillmentStatus;

    /**
	 * @return string
	 */
	public function getFulfillmentStatus(): string
	{
		return $this->fulfillmentStatus;
	}

    /**
     * Set the value of fulfillmentStatus
     *
     * @param string $fulfillmentStatus
     *
     * @return  self
     */ 
    public function setFulfillmentStatus(string $fulfillmentStatus)
    {
        $this->fulfillmentStatus = $fulfillmentStatus;

        return $this;
    }



    private string $orderedCatchWeightQuantity;

    /**
	 * @return string
	 */
	public function getOrderedCatchWeightQuantity(): string
	{
		return $this->orderedCatchWeightQuantity;
	}

    /**
     * Set the value of orderedCatchWeightQuantity
     *
     * @param string $orderedCatchWeightQuantity
     *
     * @return  self
     */ 
    public function setOrderedCatchWeightQuantity(string $orderedCatchWeightQuantity)
    {
        $this->orderedCatchWeightQuantity = $orderedCatchWeightQuantity;

        return $this;
    }



    private string $retailCalculatedPeriodicDiscountPercentage;

    /**
	 * @return string
	 */
	public function getRetailCalculatedPeriodicDiscountPercentage(): string
	{
		return $this->retailCalculatedPeriodicDiscountPercentage;
	}

    /**
     * Set the value of retailCalculatedPeriodicDiscountPercentage
     *
     * @param string $retailCalculatedPeriodicDiscountPercentage
     *
     * @return  self
     */ 
    public function setRetailCalculatedPeriodicDiscountPercentage(string $retailCalculatedPeriodicDiscountPercentage)
    {
        $this->retailCalculatedPeriodicDiscountPercentage = $retailCalculatedPeriodicDiscountPercentage;

        return $this;
    }



    private string $orderLineReference;

    /**
	 * @return string
	 */
	public function getOrderLineReference(): string
	{
		return $this->orderLineReference;
	}

    /**
     * Set the value of orderLineReference
     *
     * @param string $orderLineReference
     *
     * @return  self
     */ 
    public function setOrderLineReference(string $orderLineReference)
    {
        $this->orderLineReference = $orderLineReference;

        return $this;
    }



    private string $allowedUnderdeliveryPercentage;

    /**
	 * @return string
	 */
	public function getAllowedUnderdeliveryPercentage(): string
	{
		return $this->allowedUnderdeliveryPercentage;
	}

    /**
     * Set the value of allowedUnderdeliveryPercentage
     *
     * @param string $allowedUnderdeliveryPercentage
     *
     * @return  self
     */ 
    public function setAllowedUnderdeliveryPercentage(string $allowedUnderdeliveryPercentage)
    {
        $this->allowedUnderdeliveryPercentage = $allowedUnderdeliveryPercentage;

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



    private string $allowedOverdeliveryPercentage;

    /**
	 * @return string
	 */
	public function getAllowedOverdeliveryPercentage(): string
	{
		return $this->allowedOverdeliveryPercentage;
	}

    /**
     * Set the value of allowedOverdeliveryPercentage
     *
     * @param string $allowedOverdeliveryPercentage
     *
     * @return  self
     */ 
    public function setAllowedOverdeliveryPercentage(string $allowedOverdeliveryPercentage)
    {
        $this->allowedOverdeliveryPercentage = $allowedOverdeliveryPercentage;

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



    private string $intrastatCommodityCode;

    /**
	 * @return string
	 */
	public function getIntrastatCommodityCode(): string
	{
		return $this->intrastatCommodityCode;
	}

    /**
     * Set the value of intrastatCommodityCode
     *
     * @param string $intrastatCommodityCode
     *
     * @return  self
     */ 
    public function setIntrastatCommodityCode(string $intrastatCommodityCode)
    {
        $this->intrastatCommodityCode = $intrastatCommodityCode;

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



    private string $lineNumber;

    /**
	 * @return string
	 */
	public function getLineNumber(): string
	{
		return $this->lineNumber;
	}

    /**
     * Set the value of lineNumber
     *
     * @param string $lineNumber
     *
     * @return  self
     */ 
    public function setLineNumber(string $lineNumber)
    {
        $this->lineNumber = $lineNumber;

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



    private string $productColorId;

    /**
	 * @return string
	 */
	public function getProductColorId(): string
	{
		return $this->productColorId;
	}

    /**
     * Set the value of productColorId
     *
     * @param string $productColorId
     *
     * @return  self
     */ 
    public function setProductColorId(string $productColorId)
    {
        $this->productColorId = $productColorId;

        return $this;
    }



    private string $giftCardRecipientName;

    /**
	 * @return string
	 */
	public function getGiftCardRecipientName(): string
	{
		return $this->giftCardRecipientName;
	}

    /**
     * Set the value of giftCardRecipientName
     *
     * @param string $giftCardRecipientName
     *
     * @return  self
     */ 
    public function setGiftCardRecipientName(string $giftCardRecipientName)
    {
        $this->giftCardRecipientName = $giftCardRecipientName;

        return $this;
    }



    private string $cFOPCode;

    /**
	 * @return string
	 */
	public function getCFOPCode(): string
	{
		return $this->cFOPCode;
	}

    /**
     * Set the value of cFOPCode
     *
     * @param string $cFOPCode
     *
     * @return  self
     */ 
    public function setCFOPCode(string $cFOPCode)
    {
        $this->cFOPCode = $cFOPCode;

        return $this;
    }



    private string $deliverySalesTaxItemGroupCode;

    /**
	 * @return string
	 */
	public function getDeliverySalesTaxItemGroupCode(): string
	{
		return $this->deliverySalesTaxItemGroupCode;
	}

    /**
     * Set the value of deliverySalesTaxItemGroupCode
     *
     * @param string $deliverySalesTaxItemGroupCode
     *
     * @return  self
     */ 
    public function setDeliverySalesTaxItemGroupCode(string $deliverySalesTaxItemGroupCode)
    {
        $this->deliverySalesTaxItemGroupCode = $deliverySalesTaxItemGroupCode;

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



    private string $customsDocumentDate;

    /**
	 * @return string
	 */
	public function getCustomsDocumentDate(): string
	{
		return $this->customsDocumentDate;
	}

    /**
     * Set the value of customsDocumentDate
     *
     * @param string $customsDocumentDate
     *
     * @return  self
     */ 
    public function setCustomsDocumentDate(string $customsDocumentDate)
    {
        $this->customsDocumentDate = $customsDocumentDate;

        return $this;
    }



    private string $customersLineNumber;

    /**
	 * @return string
	 */
	public function getCustomersLineNumber(): string
	{
		return $this->customersLineNumber;
	}

    /**
     * Set the value of customersLineNumber
     *
     * @param string $customersLineNumber
     *
     * @return  self
     */ 
    public function setCustomersLineNumber(string $customersLineNumber)
    {
        $this->customersLineNumber = $customersLineNumber;

        return $this;
    }



    private string $giftCardType;

    /**
	 * @return string
	 */
	public function getGiftCardType(): string
	{
		return $this->giftCardType;
	}

    /**
     * Set the value of giftCardType
     *
     * @param string $giftCardType
     *
     * @return  self
     */ 
    public function setGiftCardType(string $giftCardType)
    {
        $this->giftCardType = $giftCardType;

        return $this;
    }



    private string $lineAmount;

    /**
	 * @return string
	 */
	public function getLineAmount(): string
	{
		return $this->lineAmount;
	}

    /**
     * Set the value of lineAmount
     *
     * @param string $lineAmount
     *
     * @return  self
     */ 
    public function setLineAmount(string $lineAmount)
    {
        $this->lineAmount = $lineAmount;

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



    private string $intrastatSpecialMovementCode;

    /**
	 * @return string
	 */
	public function getIntrastatSpecialMovementCode(): string
	{
		return $this->intrastatSpecialMovementCode;
	}

    /**
     * Set the value of intrastatSpecialMovementCode
     *
     * @param string $intrastatSpecialMovementCode
     *
     * @return  self
     */ 
    public function setIntrastatSpecialMovementCode(string $intrastatSpecialMovementCode)
    {
        $this->intrastatSpecialMovementCode = $intrastatSpecialMovementCode;

        return $this;
    }



    private string $salesPriceQuantity;

    /**
	 * @return string
	 */
	public function getSalesPriceQuantity(): string
	{
		return $this->salesPriceQuantity;
	}

    /**
     * Set the value of salesPriceQuantity
     *
     * @param string $salesPriceQuantity
     *
     * @return  self
     */ 
    public function setSalesPriceQuantity(string $salesPriceQuantity)
    {
        $this->salesPriceQuantity = $salesPriceQuantity;

        return $this;
    }



    private string $willRebateCalculationExcludeLine;

    /**
	 * @return string
	 */
	public function getWillRebateCalculationExcludeLine(): string
	{
		return $this->willRebateCalculationExcludeLine;
	}

    /**
     * Set the value of willRebateCalculationExcludeLine
     *
     * @param string $willRebateCalculationExcludeLine
     *
     * @return  self
     */ 
    public function setWillRebateCalculationExcludeLine(string $willRebateCalculationExcludeLine)
    {
        $this->willRebateCalculationExcludeLine = $willRebateCalculationExcludeLine;

        return $this;
    }



    private string $retailCalculatedTenderDiscountAmount;

    /**
	 * @return string
	 */
	public function getRetailCalculatedTenderDiscountAmount(): string
	{
		return $this->retailCalculatedTenderDiscountAmount;
	}

    /**
     * Set the value of retailCalculatedTenderDiscountAmount
     *
     * @param string $retailCalculatedTenderDiscountAmount
     *
     * @return  self
     */ 
    public function setRetailCalculatedTenderDiscountAmount(string $retailCalculatedTenderDiscountAmount)
    {
        $this->retailCalculatedTenderDiscountAmount = $retailCalculatedTenderDiscountAmount;

        return $this;
    }



    private string $suframaDiscountPercentage;

    /**
	 * @return string
	 */
	public function getSuframaDiscountPercentage(): string
	{
		return $this->suframaDiscountPercentage;
	}

    /**
     * Set the value of suframaDiscountPercentage
     *
     * @param string $suframaDiscountPercentage
     *
     * @return  self
     */ 
    public function setSuframaDiscountPercentage(string $suframaDiscountPercentage)
    {
        $this->suframaDiscountPercentage = $suframaDiscountPercentage;

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



    private string $retailCalculatedManualLineDiscountAmount;

    /**
	 * @return string
	 */
	public function getRetailCalculatedManualLineDiscountAmount(): string
	{
		return $this->retailCalculatedManualLineDiscountAmount;
	}

    /**
     * Set the value of retailCalculatedManualLineDiscountAmount
     *
     * @param string $retailCalculatedManualLineDiscountAmount
     *
     * @return  self
     */ 
    public function setRetailCalculatedManualLineDiscountAmount(string $retailCalculatedManualLineDiscountAmount)
    {
        $this->retailCalculatedManualLineDiscountAmount = $retailCalculatedManualLineDiscountAmount;

        return $this;
    }



    private string $withholdingTaxGroupCode;

    /**
	 * @return string
	 */
	public function getWithholdingTaxGroupCode(): string
	{
		return $this->withholdingTaxGroupCode;
	}

    /**
     * Set the value of withholdingTaxGroupCode
     *
     * @param string $withholdingTaxGroupCode
     *
     * @return  self
     */ 
    public function setWithholdingTaxGroupCode(string $withholdingTaxGroupCode)
    {
        $this->withholdingTaxGroupCode = $withholdingTaxGroupCode;

        return $this;
    }



    private string $fulfillmentStoreId;

    /**
	 * @return string
	 */
	public function getFulfillmentStoreId(): string
	{
		return $this->fulfillmentStoreId;
	}

    /**
     * Set the value of fulfillmentStoreId
     *
     * @param string $fulfillmentStoreId
     *
     * @return  self
     */ 
    public function setFulfillmentStoreId(string $fulfillmentStoreId)
    {
        $this->fulfillmentStoreId = $fulfillmentStoreId;

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



    private string $externalItemNumber;

    /**
	 * @return string
	 */
	public function getExternalItemNumber(): string
	{
		return $this->externalItemNumber;
	}

    /**
     * Set the value of externalItemNumber
     *
     * @param string $externalItemNumber
     *
     * @return  self
     */ 
    public function setExternalItemNumber(string $externalItemNumber)
    {
        $this->externalItemNumber = $externalItemNumber;

        return $this;
    }



    private string $intrastatStatisticValue;

    /**
	 * @return string
	 */
	public function getIntrastatStatisticValue(): string
	{
		return $this->intrastatStatisticValue;
	}

    /**
     * Set the value of intrastatStatisticValue
     *
     * @param string $intrastatStatisticValue
     *
     * @return  self
     */ 
    public function setIntrastatStatisticValue(string $intrastatStatisticValue)
    {
        $this->intrastatStatisticValue = $intrastatStatisticValue;

        return $this;
    }



    private string $isLineStopped;

    /**
	 * @return string
	 */
	public function getIsLineStopped(): string
	{
		return $this->isLineStopped;
	}

    /**
     * Set the value of isLineStopped
     *
     * @param string $isLineStopped
     *
     * @return  self
     */ 
    public function setIsLineStopped(string $isLineStopped)
    {
        $this->isLineStopped = $isLineStopped;

        return $this;
    }



    private string $giftCardBuyerEmail;

    /**
	 * @return string
	 */
	public function getGiftCardBuyerEmail(): string
	{
		return $this->giftCardBuyerEmail;
	}

    /**
     * Set the value of giftCardBuyerEmail
     *
     * @param string $giftCardBuyerEmail
     *
     * @return  self
     */ 
    public function setGiftCardBuyerEmail(string $giftCardBuyerEmail)
    {
        $this->giftCardBuyerEmail = $giftCardBuyerEmail;

        return $this;
    }



    private string $revRecRevenueScheduleId;

    /**
	 * @return string
	 */
	public function getRevRecRevenueScheduleId(): string
	{
		return $this->revRecRevenueScheduleId;
	}

    /**
     * Set the value of revRecRevenueScheduleId
     *
     * @param string $revRecRevenueScheduleId
     *
     * @return  self
     */ 
    public function setRevRecRevenueScheduleId(string $revRecRevenueScheduleId)
    {
        $this->revRecRevenueScheduleId = $revRecRevenueScheduleId;

        return $this;
    }



    private string $revRecSalesDeliverNow;

    /**
	 * @return string
	 */
	public function getRevRecSalesDeliverNow(): string
	{
		return $this->revRecSalesDeliverNow;
	}

    /**
     * Set the value of revRecSalesDeliverNow
     *
     * @param string $revRecSalesDeliverNow
     *
     * @return  self
     */ 
    public function setRevRecSalesDeliverNow(string $revRecSalesDeliverNow)
    {
        $this->revRecSalesDeliverNow = $revRecSalesDeliverNow;

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



    private string $revRecOccurrences;

    /**
	 * @return string
	 */
	public function getRevRecOccurrences(): string
	{
		return $this->revRecOccurrences;
	}

    /**
     * Set the value of revRecOccurrences
     *
     * @param string $revRecOccurrences
     *
     * @return  self
     */ 
    public function setRevRecOccurrences(string $revRecOccurrences)
    {
        $this->revRecOccurrences = $revRecOccurrences;

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



	
	/**
	 * SalesOrderLine constructor.
	 * @param array $data
	 * @throws InvalidIdentifierException
	 */
	public function __construct($data)
	{
		//================================ IDS ================================//
		if (isset($data['InventoryLotId']) && !empty($data['InventoryLotId'])) {
			$this->inventoryLotId = $data['InventoryLotId'];
		} else {
			throw new InvalidIdentifierException("You must provide 'InventoryLotId' to identify the requested ressource");
		}

		if (isset($data['dataAreaId']) && !empty($data['dataAreaId'])) {
			$this->dataAreaId = $data['dataAreaId'];
		} else {
			throw new InvalidIdentifierException("You must provide 'dataAreaId' to identify the requested ressource");
		}	

		// $this->dataAreaId = (isset($data['DataAreaId']) && !empty($data['DataAreaId'])) ? $data['DataAreaId'] : '';
		$this->requestedReceiptDate = (isset($data['RequestedReceiptDate']) && !empty($data['RequestedReceiptDate'])) ? $data['RequestedReceiptDate'] : '';
		$this->retailCalculatedTotalDiscountPercentage = (isset($data['RetailCalculatedTotalDiscountPercentage']) && !empty($data['RetailCalculatedTotalDiscountPercentage'])) ? $data['RetailCalculatedTotalDiscountPercentage'] : '';
		$this->eInvoiceDimensionAccountCode = (isset($data['EInvoiceDimensionAccountCode']) && !empty($data['EInvoiceDimensionAccountCode'])) ? $data['EInvoiceDimensionAccountCode'] : '';
		$this->formattedDelveryAddress = (isset($data['FormattedDelveryAddress']) && !empty($data['FormattedDelveryAddress'])) ? $data['FormattedDelveryAddress'] : '';
		$this->shippingWarehouseLocationId = (isset($data['ShippingWarehouseLocationId']) && !empty($data['ShippingWarehouseLocationId'])) ? $data['ShippingWarehouseLocationId'] : '';
		$this->salesOrderLineStatus = (isset($data['SalesOrderLineStatus']) && !empty($data['SalesOrderLineStatus'])) ? $data['SalesOrderLineStatus'] : '';
		$this->projectCategoryId = (isset($data['ProjectCategoryId']) && !empty($data['ProjectCategoryId'])) ? $data['ProjectCategoryId'] : '';
		$this->itemNumber = (isset($data['ItemNumber']) && !empty($data['ItemNumber'])) ? $data['ItemNumber'] : '';
		$this->deliveryAddressDescription = (isset($data['DeliveryAddressDescription']) && !empty($data['DeliveryAddressDescription'])) ? $data['DeliveryAddressDescription'] : '';
		$this->multilineDiscountPercentage = (isset($data['MultilineDiscountPercentage']) && !empty($data['MultilineDiscountPercentage'])) ? $data['MultilineDiscountPercentage'] : '';
		$this->shippingWarehouseId = (isset($data['ShippingWarehouseId']) && !empty($data['ShippingWarehouseId'])) ? $data['ShippingWarehouseId'] : '';
		$this->giftCardBuyerName = (isset($data['GiftCardBuyerName']) && !empty($data['GiftCardBuyerName'])) ? $data['GiftCardBuyerName'] : '';
		$this->giftCardNumber = (isset($data['GiftCardNumber']) && !empty($data['GiftCardNumber'])) ? $data['GiftCardNumber'] : '';
		$this->customsDocumentNumber = (isset($data['CustomsDocumentNumber']) && !empty($data['CustomsDocumentNumber'])) ? $data['CustomsDocumentNumber'] : '';
		$this->lineDiscountAmount = (isset($data['LineDiscountAmount']) && !empty($data['LineDiscountAmount'])) ? $data['LineDiscountAmount'] : '';
		$this->productStyleId = (isset($data['ProductStyleId']) && !empty($data['ProductStyleId'])) ? $data['ProductStyleId'] : '';
		$this->productConfigurationId = (isset($data['ProductConfigurationId']) && !empty($data['ProductConfigurationId'])) ? $data['ProductConfigurationId'] : '';
		$this->deliverySalesTaxGroupCode = (isset($data['DeliverySalesTaxGroupCode']) && !empty($data['DeliverySalesTaxGroupCode'])) ? $data['DeliverySalesTaxGroupCode'] : '';
		$this->isIntrastatTriangularDeal = (isset($data['IsIntrastatTriangularDeal']) && !empty($data['IsIntrastatTriangularDeal'])) ? $data['IsIntrastatTriangularDeal'] : '';
		$this->multilineDiscountAmount = (isset($data['MultilineDiscountAmount']) && !empty($data['MultilineDiscountAmount'])) ? $data['MultilineDiscountAmount'] : '';
		$this->itemBatchNumber = (isset($data['ItemBatchNumber']) && !empty($data['ItemBatchNumber'])) ? $data['ItemBatchNumber'] : '';
		$this->deliveryAddressCountryRegionId = (isset($data['DeliveryAddressCountryRegionId']) && !empty($data['DeliveryAddressCountryRegionId'])) ? $data['DeliveryAddressCountryRegionId'] : '';
		$this->deliveryAddressLatitude = (isset($data['DeliveryAddressLatitude']) && !empty($data['DeliveryAddressLatitude'])) ? $data['DeliveryAddressLatitude'] : '';
		$this->isPriceLocked = (isset($data['IsPriceLocked']) && !empty($data['IsPriceLocked'])) ? $data['IsPriceLocked'] : '';
		$this->deliveryAddressCity = (isset($data['DeliveryAddressCity']) && !empty($data['DeliveryAddressCity'])) ? $data['DeliveryAddressCity'] : '';
		$this->salesProductCategoryName = (isset($data['SalesProductCategoryName']) && !empty($data['SalesProductCategoryName'])) ? $data['SalesProductCategoryName'] : '';
		$this->salesOrderPromisingMethod = (isset($data['SalesOrderPromisingMethod']) && !empty($data['SalesOrderPromisingMethod'])) ? $data['SalesOrderPromisingMethod'] : '';
		$this->projectId = (isset($data['ProjectId']) && !empty($data['ProjectId'])) ? $data['ProjectId'] : '';
		$this->projectLinePropertyId = (isset($data['ProjectLinePropertyId']) && !empty($data['ProjectLinePropertyId'])) ? $data['ProjectLinePropertyId'] : '';
		$this->deliveryAddressDistrictName = (isset($data['DeliveryAddressDistrictName']) && !empty($data['DeliveryAddressDistrictName'])) ? $data['DeliveryAddressDistrictName'] : '';
		$this->salesRebateProductGroupId = (isset($data['SalesRebateProductGroupId']) && !empty($data['SalesRebateProductGroupId'])) ? $data['SalesRebateProductGroupId'] : '';
		$this->deliveryAddressCountyId = (isset($data['DeliveryAddressCountyId']) && !empty($data['DeliveryAddressCountyId'])) ? $data['DeliveryAddressCountyId'] : '';
		$this->salesUnitSymbol = (isset($data['SalesUnitSymbol']) && !empty($data['SalesUnitSymbol'])) ? $data['SalesUnitSymbol'] : '';
		$this->itemWithholdingTaxCodeGroupCode = (isset($data['ItemWithholdingTaxCodeGroupCode']) && !empty($data['ItemWithholdingTaxCodeGroupCode'])) ? $data['ItemWithholdingTaxCodeGroupCode'] : '';
		$this->confirmedReceiptDate = (isset($data['ConfirmedReceiptDate']) && !empty($data['ConfirmedReceiptDate'])) ? $data['ConfirmedReceiptDate'] : '';
		$this->productSizeId = (isset($data['ProductSizeId']) && !empty($data['ProductSizeId'])) ? $data['ProductSizeId'] : '';
		$this->deliveryAddressZipCode = (isset($data['DeliveryAddressZipCode']) && !empty($data['DeliveryAddressZipCode'])) ? $data['DeliveryAddressZipCode'] : '';
		$this->fixedPriceCharges = (isset($data['FixedPriceCharges']) && !empty($data['FixedPriceCharges'])) ? $data['FixedPriceCharges'] : '';
		$this->deliveryAddressDunsNumber = (isset($data['DeliveryAddressDunsNumber']) && !empty($data['DeliveryAddressDunsNumber'])) ? $data['DeliveryAddressDunsNumber'] : '';
		$this->deliveryTermsId = (isset($data['DeliveryTermsId']) && !empty($data['DeliveryTermsId'])) ? $data['DeliveryTermsId'] : '';
		$this->serviceFiscalInformationCode = (isset($data['ServiceFiscalInformationCode']) && !empty($data['ServiceFiscalInformationCode'])) ? $data['ServiceFiscalInformationCode'] : '';
		$this->retailCalculatedTotalDiscountAmount = (isset($data['RetailCalculatedTotalDiscountAmount']) && !empty($data['RetailCalculatedTotalDiscountAmount'])) ? $data['RetailCalculatedTotalDiscountAmount'] : '';
		$this->deliveryAddressName = (isset($data['DeliveryAddressName']) && !empty($data['DeliveryAddressName'])) ? $data['DeliveryAddressName'] : '';
		$this->packingUnitSymbol = (isset($data['PackingUnitSymbol']) && !empty($data['PackingUnitSymbol'])) ? $data['PackingUnitSymbol'] : '';
		$this->orderedSalesQuantity = (isset($data['OrderedSalesQuantity']) && !empty($data['OrderedSalesQuantity'])) ? $data['OrderedSalesQuantity'] : '';
		$this->bOMId = (isset($data['BOMId']) && !empty($data['BOMId'])) ? $data['BOMId'] : '';
		$this->deliveryAddressStreetNumber = (isset($data['DeliveryAddressStreetNumber']) && !empty($data['DeliveryAddressStreetNumber'])) ? $data['DeliveryAddressStreetNumber'] : '';
		$this->creditNoteReasonCode = (isset($data['CreditNoteReasonCode']) && !empty($data['CreditNoteReasonCode'])) ? $data['CreditNoteReasonCode'] : '';
		$this->deliveryAddressStreetInKana = (isset($data['DeliveryAddressStreetInKana']) && !empty($data['DeliveryAddressStreetInKana'])) ? $data['DeliveryAddressStreetInKana'] : '';
		$this->shippingSiteId = (isset($data['ShippingSiteId']) && !empty($data['ShippingSiteId'])) ? $data['ShippingSiteId'] : '';
		$this->nGPCode = (isset($data['NGPCode']) && !empty($data['NGPCode'])) ? $data['NGPCode'] : '';
		$this->retailCalculatedLineDiscountAmount = (isset($data['RetailCalculatedLineDiscountAmount']) && !empty($data['RetailCalculatedLineDiscountAmount'])) ? $data['RetailCalculatedLineDiscountAmount'] : '';
		$this->isDeliveryAddressPrivate = (isset($data['IsDeliveryAddressPrivate']) && !empty($data['IsDeliveryAddressPrivate'])) ? $data['IsDeliveryAddressPrivate'] : '';
		$this->lineCreationSequenceNumber = (isset($data['LineCreationSequenceNumber']) && !empty($data['LineCreationSequenceNumber'])) ? $data['LineCreationSequenceNumber'] : '';
		$this->retailCalculatedTenderDiscountPercentage = (isset($data['RetailCalculatedTenderDiscountPercentage']) && !empty($data['RetailCalculatedTenderDiscountPercentage'])) ? $data['RetailCalculatedTenderDiscountPercentage'] : '';
		$this->mainAccountIdDisplayValue = (isset($data['MainAccountIdDisplayValue']) && !empty($data['MainAccountIdDisplayValue'])) ? $data['MainAccountIdDisplayValue'] : '';
		$this->orderedInventoryStatusId = (isset($data['OrderedInventoryStatusId']) && !empty($data['OrderedInventoryStatusId'])) ? $data['OrderedInventoryStatusId'] : '';
		$this->giftCardRecipientEmail = (isset($data['GiftCardRecipientEmail']) && !empty($data['GiftCardRecipientEmail'])) ? $data['GiftCardRecipientEmail'] : '';
		$this->deliveryAddressCountryRegionISOCode = (isset($data['DeliveryAddressCountryRegionISOCode']) && !empty($data['DeliveryAddressCountryRegionISOCode'])) ? $data['DeliveryAddressCountryRegionISOCode'] : '';
		$this->itemSerialNumber = (isset($data['ItemSerialNumber']) && !empty($data['ItemSerialNumber'])) ? $data['ItemSerialNumber'] : '';
		$this->retailCalculatedManualLineDiscountPercentage = (isset($data['RetailCalculatedManualLineDiscountPercentage']) && !empty($data['RetailCalculatedManualLineDiscountPercentage'])) ? $data['RetailCalculatedManualLineDiscountPercentage'] : '';
		$this->calculateLineAmount = (isset($data['CalculateLineAmount']) && !empty($data['CalculateLineAmount'])) ? $data['CalculateLineAmount'] : '';
		$this->retailCalculatedPeriodicDiscountAmount = (isset($data['RetailCalculatedPeriodicDiscountAmount']) && !empty($data['RetailCalculatedPeriodicDiscountAmount'])) ? $data['RetailCalculatedPeriodicDiscountAmount'] : '';
		$this->intrastatTransactionCode = (isset($data['IntrastatTransactionCode']) && !empty($data['IntrastatTransactionCode'])) ? $data['IntrastatTransactionCode'] : '';
		$this->currencyCode = (isset($data['CurrencyCode']) && !empty($data['CurrencyCode'])) ? $data['CurrencyCode'] : '';
		$this->deliveryAddressLocationId = (isset($data['DeliveryAddressLocationId']) && !empty($data['DeliveryAddressLocationId'])) ? $data['DeliveryAddressLocationId'] : '';
		$this->salesTaxItemGroupCode = (isset($data['SalesTaxItemGroupCode']) && !empty($data['SalesTaxItemGroupCode'])) ? $data['SalesTaxItemGroupCode'] : '';
		$this->routeId = (isset($data['RouteId']) && !empty($data['RouteId'])) ? $data['RouteId'] : '';
		$this->eInvoicePropertyNumber = (isset($data['EInvoicePropertyNumber']) && !empty($data['EInvoicePropertyNumber'])) ? $data['EInvoicePropertyNumber'] : '';
		$this->productVersionId = (isset($data['ProductVersionId']) && !empty($data['ProductVersionId'])) ? $data['ProductVersionId'] : '';
		$this->commissionSalesRepresentativeGroupId = (isset($data['CommissionSalesRepresentativeGroupId']) && !empty($data['CommissionSalesRepresentativeGroupId'])) ? $data['CommissionSalesRepresentativeGroupId'] : '';
		$this->customsDocumentName = (isset($data['CustomsDocumentName']) && !empty($data['CustomsDocumentName'])) ? $data['CustomsDocumentName'] : '';
		$this->willAutomaticInventoryReservationConsiderBatchAttributes = (isset($data['WillAutomaticInventoryReservationConsiderBatchAttributes']) && !empty($data['WillAutomaticInventoryReservationConsiderBatchAttributes'])) ? $data['WillAutomaticInventoryReservationConsiderBatchAttributes'] : '';
		$this->intrastatStatisticsProcedureCode = (isset($data['IntrastatStatisticsProcedureCode']) && !empty($data['IntrastatStatisticsProcedureCode'])) ? $data['IntrastatStatisticsProcedureCode'] : '';
		$this->overrideSalesTax = (isset($data['OverrideSalesTax']) && !empty($data['OverrideSalesTax'])) ? $data['OverrideSalesTax'] : '';
		$this->lineDescription = (isset($data['LineDescription']) && !empty($data['LineDescription'])) ? $data['LineDescription'] : '';
		$this->deliveryAddressStreet = (isset($data['DeliveryAddressStreet']) && !empty($data['DeliveryAddressStreet'])) ? $data['DeliveryAddressStreet'] : '';
		$this->deliveryModeCode = (isset($data['DeliveryModeCode']) && !empty($data['DeliveryModeCode'])) ? $data['DeliveryModeCode'] : '';
		$this->confirmedShippingDate = (isset($data['ConfirmedShippingDate']) && !empty($data['ConfirmedShippingDate'])) ? $data['ConfirmedShippingDate'] : '';
		$this->retailCalculatedLineDiscountPercentage = (isset($data['RetailCalculatedLineDiscountPercentage']) && !empty($data['RetailCalculatedLineDiscountPercentage'])) ? $data['RetailCalculatedLineDiscountPercentage'] : '';
		$this->salesTaxGroupCode = (isset($data['SalesTaxGroupCode']) && !empty($data['SalesTaxGroupCode'])) ? $data['SalesTaxGroupCode'] : '';
		$this->serviceOrderNumber = (isset($data['ServiceOrderNumber']) && !empty($data['ServiceOrderNumber'])) ? $data['ServiceOrderNumber'] : '';
		$this->isDeliveryAddressOrderSpecific = (isset($data['IsDeliveryAddressOrderSpecific']) && !empty($data['IsDeliveryAddressOrderSpecific'])) ? $data['IsDeliveryAddressOrderSpecific'] : '';
		$this->customerRequisitionNumber = (isset($data['CustomerRequisitionNumber']) && !empty($data['CustomerRequisitionNumber'])) ? $data['CustomerRequisitionNumber'] : '';
		$this->salesOrderNumber = (isset($data['SalesOrderNumber']) && !empty($data['SalesOrderNumber'])) ? $data['SalesOrderNumber'] : '';
		$this->fiscalDocumentTypeId = (isset($data['FiscalDocumentTypeId']) && !empty($data['FiscalDocumentTypeId'])) ? $data['FiscalDocumentTypeId'] : '';
		$this->planningPriority = (isset($data['PlanningPriority']) && !empty($data['PlanningPriority'])) ? $data['PlanningPriority'] : '';
		$this->deliveryCFOPCode = (isset($data['DeliveryCFOPCode']) && !empty($data['DeliveryCFOPCode'])) ? $data['DeliveryCFOPCode'] : '';
		$this->lineDiscountPercentage = (isset($data['LineDiscountPercentage']) && !empty($data['LineDiscountPercentage'])) ? $data['LineDiscountPercentage'] : '';
		$this->salesPrice = (isset($data['SalesPrice']) && !empty($data['SalesPrice'])) ? $data['SalesPrice'] : '';
		$this->giftCardGiftMessage = (isset($data['GiftCardGiftMessage']) && !empty($data['GiftCardGiftMessage'])) ? $data['GiftCardGiftMessage'] : '';
		$this->fulfillmentStatus = (isset($data['FulfillmentStatus']) && !empty($data['FulfillmentStatus'])) ? $data['FulfillmentStatus'] : '';
		$this->orderedCatchWeightQuantity = (isset($data['OrderedCatchWeightQuantity']) && !empty($data['OrderedCatchWeightQuantity'])) ? $data['OrderedCatchWeightQuantity'] : '';
		$this->retailCalculatedPeriodicDiscountPercentage = (isset($data['RetailCalculatedPeriodicDiscountPercentage']) && !empty($data['RetailCalculatedPeriodicDiscountPercentage'])) ? $data['RetailCalculatedPeriodicDiscountPercentage'] : '';
		$this->orderLineReference = (isset($data['OrderLineReference']) && !empty($data['OrderLineReference'])) ? $data['OrderLineReference'] : '';
		$this->allowedUnderdeliveryPercentage = (isset($data['AllowedUnderdeliveryPercentage']) && !empty($data['AllowedUnderdeliveryPercentage'])) ? $data['AllowedUnderdeliveryPercentage'] : '';
		$this->deliveryAddressCityInKana = (isset($data['DeliveryAddressCityInKana']) && !empty($data['DeliveryAddressCityInKana'])) ? $data['DeliveryAddressCityInKana'] : '';
		$this->allowedOverdeliveryPercentage = (isset($data['AllowedOverdeliveryPercentage']) && !empty($data['AllowedOverdeliveryPercentage'])) ? $data['AllowedOverdeliveryPercentage'] : '';
		$this->deliveryAddressLongitude = (isset($data['DeliveryAddressLongitude']) && !empty($data['DeliveryAddressLongitude'])) ? $data['DeliveryAddressLongitude'] : '';
		$this->intrastatCommodityCode = (isset($data['IntrastatCommodityCode']) && !empty($data['IntrastatCommodityCode'])) ? $data['IntrastatCommodityCode'] : '';
		$this->defaultLedgerDimensionDisplayValue = (isset($data['DefaultLedgerDimensionDisplayValue']) && !empty($data['DefaultLedgerDimensionDisplayValue'])) ? $data['DefaultLedgerDimensionDisplayValue'] : '';
		$this->lineNumber = (isset($data['LineNumber']) && !empty($data['LineNumber'])) ? $data['LineNumber'] : '';
		$this->deliveryAddressTimeZone = (isset($data['DeliveryAddressTimeZone']) && !empty($data['DeliveryAddressTimeZone'])) ? $data['DeliveryAddressTimeZone'] : '';
		$this->productColorId = (isset($data['ProductColorId']) && !empty($data['ProductColorId'])) ? $data['ProductColorId'] : '';
		$this->giftCardRecipientName = (isset($data['GiftCardRecipientName']) && !empty($data['GiftCardRecipientName'])) ? $data['GiftCardRecipientName'] : '';
		$this->cFOPCode = (isset($data['CFOPCode']) && !empty($data['CFOPCode'])) ? $data['CFOPCode'] : '';
		$this->deliverySalesTaxItemGroupCode = (isset($data['DeliverySalesTaxItemGroupCode']) && !empty($data['DeliverySalesTaxItemGroupCode'])) ? $data['DeliverySalesTaxItemGroupCode'] : '';
		$this->deliveryAddressStateId = (isset($data['DeliveryAddressStateId']) && !empty($data['DeliveryAddressStateId'])) ? $data['DeliveryAddressStateId'] : '';
		$this->deliveryBuildingCompliment = (isset($data['DeliveryBuildingCompliment']) && !empty($data['DeliveryBuildingCompliment'])) ? $data['DeliveryBuildingCompliment'] : '';
		$this->intrastatTransportModeCode = (isset($data['IntrastatTransportModeCode']) && !empty($data['IntrastatTransportModeCode'])) ? $data['IntrastatTransportModeCode'] : '';
		$this->deliveryAddressPostBox = (isset($data['DeliveryAddressPostBox']) && !empty($data['DeliveryAddressPostBox'])) ? $data['DeliveryAddressPostBox'] : '';
		$this->customsDocumentDate = (isset($data['CustomsDocumentDate']) && !empty($data['CustomsDocumentDate'])) ? $data['CustomsDocumentDate'] : '';
		$this->customersLineNumber = (isset($data['CustomersLineNumber']) && !empty($data['CustomersLineNumber'])) ? $data['CustomersLineNumber'] : '';
		$this->giftCardType = (isset($data['GiftCardType']) && !empty($data['GiftCardType'])) ? $data['GiftCardType'] : '';
		$this->lineAmount = (isset($data['LineAmount']) && !empty($data['LineAmount'])) ? $data['LineAmount'] : '';
		$this->intrastatPortId = (isset($data['IntrastatPortId']) && !empty($data['IntrastatPortId'])) ? $data['IntrastatPortId'] : '';
		$this->intrastatSpecialMovementCode = (isset($data['IntrastatSpecialMovementCode']) && !empty($data['IntrastatSpecialMovementCode'])) ? $data['IntrastatSpecialMovementCode'] : '';
		$this->salesPriceQuantity = (isset($data['SalesPriceQuantity']) && !empty($data['SalesPriceQuantity'])) ? $data['SalesPriceQuantity'] : '';
		$this->willRebateCalculationExcludeLine = (isset($data['WillRebateCalculationExcludeLine']) && !empty($data['WillRebateCalculationExcludeLine'])) ? $data['WillRebateCalculationExcludeLine'] : '';
		$this->retailCalculatedTenderDiscountAmount = (isset($data['RetailCalculatedTenderDiscountAmount']) && !empty($data['RetailCalculatedTenderDiscountAmount'])) ? $data['RetailCalculatedTenderDiscountAmount'] : '';
		$this->suframaDiscountPercentage = (isset($data['SuframaDiscountPercentage']) && !empty($data['SuframaDiscountPercentage'])) ? $data['SuframaDiscountPercentage'] : '';
		$this->inventoryReservationMethod = (isset($data['InventoryReservationMethod']) && !empty($data['InventoryReservationMethod'])) ? $data['InventoryReservationMethod'] : '';
		$this->requestedShippingDate = (isset($data['RequestedShippingDate']) && !empty($data['RequestedShippingDate'])) ? $data['RequestedShippingDate'] : '';
		$this->retailCalculatedManualLineDiscountAmount = (isset($data['RetailCalculatedManualLineDiscountAmount']) && !empty($data['RetailCalculatedManualLineDiscountAmount'])) ? $data['RetailCalculatedManualLineDiscountAmount'] : '';
		$this->withholdingTaxGroupCode = (isset($data['WithholdingTaxGroupCode']) && !empty($data['WithholdingTaxGroupCode'])) ? $data['WithholdingTaxGroupCode'] : '';
		$this->fulfillmentStoreId = (isset($data['FulfillmentStoreId']) && !empty($data['FulfillmentStoreId'])) ? $data['FulfillmentStoreId'] : '';
		$this->skipCreateAutoCharges = (isset($data['SkipCreateAutoCharges']) && !empty($data['SkipCreateAutoCharges'])) ? $data['SkipCreateAutoCharges'] : '';
		$this->externalItemNumber = (isset($data['ExternalItemNumber']) && !empty($data['ExternalItemNumber'])) ? $data['ExternalItemNumber'] : '';
		$this->intrastatStatisticValue = (isset($data['IntrastatStatisticValue']) && !empty($data['IntrastatStatisticValue'])) ? $data['IntrastatStatisticValue'] : '';
		$this->isLineStopped = (isset($data['IsLineStopped']) && !empty($data['IsLineStopped'])) ? $data['IsLineStopped'] : '';
		$this->giftCardBuyerEmail = (isset($data['GiftCardBuyerEmail']) && !empty($data['GiftCardBuyerEmail'])) ? $data['GiftCardBuyerEmail'] : '';
		$this->revRecRevenueScheduleId = (isset($data['RevRecRevenueScheduleId']) && !empty($data['RevRecRevenueScheduleId'])) ? $data['RevRecRevenueScheduleId'] : '';
		$this->revRecSalesDeliverNow = (isset($data['RevRecSalesDeliverNow']) && !empty($data['RevRecSalesDeliverNow'])) ? $data['RevRecSalesDeliverNow'] : '';
		$this->revRecContractEndDate = (isset($data['RevRecContractEndDate']) && !empty($data['RevRecContractEndDate'])) ? $data['RevRecContractEndDate'] : '';
		$this->revRecOccurrences = (isset($data['RevRecOccurrences']) && !empty($data['RevRecOccurrences'])) ? $data['RevRecOccurrences'] : '';
		$this->revRecContractStartDate = (isset($data['RevRecContractStartDate']) && !empty($data['RevRecContractStartDate'])) ? $data['RevRecContractStartDate'] : '';
		
		$this->links['self'] = "/sales_order_lines/data_area_id=$this->dataAreaId;inventory_lot_id=$this->inventoryLotId";
	}

}
