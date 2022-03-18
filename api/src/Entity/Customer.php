<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiProperty;
use ApiPlatform\Core\Exception\InvalidIdentifierException;

#[ApiResource(mercure: true)]
class Customer
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
    private string $customerAccount;

    /**
	 * @return string
	 */
	public function getCustomerAccount(): string
	{
		return $this->customerAccount;
	}

    /**
     * Set the value of customerAccount
     *
     * @param string $customerAccount
     *
     * @return  self
     */ 
    public function setCustomerAccount(string $customerAccount)
    {
        $this->customerAccount = $customerAccount;

        return $this;
    }



    private string $addressBrazilianCNPJOrCPF;

    /**
	 * @return string
	 */
	public function getAddressBrazilianCNPJOrCPF(): string
	{
		return $this->addressBrazilianCNPJOrCPF;
	}

    /**
     * Set the value of addressBrazilianCNPJOrCPF
     *
     * @param string $addressBrazilianCNPJOrCPF
     *
     * @return  self
     */ 
    public function setAddressBrazilianCNPJOrCPF(string $addressBrazilianCNPJOrCPF)
    {
        $this->addressBrazilianCNPJOrCPF = $addressBrazilianCNPJOrCPF;

        return $this;
    }



    private string $partyType;

    /**
	 * @return string
	 */
	public function getPartyType(): string
	{
		return $this->partyType;
	}

    /**
     * Set the value of partyType
     *
     * @param string $partyType
     *
     * @return  self
     */ 
    public function setPartyType(string $partyType)
    {
        $this->partyType = $partyType;

        return $this;
    }



    private string $primaryContactFaxExtension;

    /**
	 * @return string
	 */
	public function getPrimaryContactFaxExtension(): string
	{
		return $this->primaryContactFaxExtension;
	}

    /**
     * Set the value of primaryContactFaxExtension
     *
     * @param string $primaryContactFaxExtension
     *
     * @return  self
     */ 
    public function setPrimaryContactFaxExtension(string $primaryContactFaxExtension)
    {
        $this->primaryContactFaxExtension = $primaryContactFaxExtension;

        return $this;
    }



    private string $isFuelSurchargeApplied;

    /**
	 * @return string
	 */
	public function getIsFuelSurchargeApplied(): string
	{
		return $this->isFuelSurchargeApplied;
	}

    /**
     * Set the value of isFuelSurchargeApplied
     *
     * @param string $isFuelSurchargeApplied
     *
     * @return  self
     */ 
    public function setIsFuelSurchargeApplied(string $isFuelSurchargeApplied)
    {
        $this->isFuelSurchargeApplied = $isFuelSurchargeApplied;

        return $this;
    }



    private string $salesTaxGroup;

    /**
	 * @return string
	 */
	public function getSalesTaxGroup(): string
	{
		return $this->salesTaxGroup;
	}

    /**
     * Set the value of salesTaxGroup
     *
     * @param string $salesTaxGroup
     *
     * @return  self
     */ 
    public function setSalesTaxGroup(string $salesTaxGroup)
    {
        $this->salesTaxGroup = $salesTaxGroup;

        return $this;
    }



    private string $addressCountryRegionId;

    /**
	 * @return string
	 */
	public function getAddressCountryRegionId(): string
	{
		return $this->addressCountryRegionId;
	}

    /**
     * Set the value of addressCountryRegionId
     *
     * @param string $addressCountryRegionId
     *
     * @return  self
     */ 
    public function setAddressCountryRegionId(string $addressCountryRegionId)
    {
        $this->addressCountryRegionId = $addressCountryRegionId;

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



    private string $birthCountyCode;

    /**
	 * @return string
	 */
	public function getBirthCountyCode(): string
	{
		return $this->birthCountyCode;
	}

    /**
     * Set the value of birthCountyCode
     *
     * @param string $birthCountyCode
     *
     * @return  self
     */ 
    public function setBirthCountyCode(string $birthCountyCode)
    {
        $this->birthCountyCode = $birthCountyCode;

        return $this;
    }



    private string $invoiceAddress;

    /**
	 * @return string
	 */
	public function getInvoiceAddress(): string
	{
		return $this->invoiceAddress;
	}

    /**
     * Set the value of invoiceAddress
     *
     * @param string $invoiceAddress
     *
     * @return  self
     */ 
    public function setInvoiceAddress(string $invoiceAddress)
    {
        $this->invoiceAddress = $invoiceAddress;

        return $this;
    }



    private string $packingMaterialFeeLicenseNumber;

    /**
	 * @return string
	 */
	public function getPackingMaterialFeeLicenseNumber(): string
	{
		return $this->packingMaterialFeeLicenseNumber;
	}

    /**
     * Set the value of packingMaterialFeeLicenseNumber
     *
     * @param string $packingMaterialFeeLicenseNumber
     *
     * @return  self
     */ 
    public function setPackingMaterialFeeLicenseNumber(string $packingMaterialFeeLicenseNumber)
    {
        $this->packingMaterialFeeLicenseNumber = $packingMaterialFeeLicenseNumber;

        return $this;
    }



    private string $transactionPresenceType;

    /**
	 * @return string
	 */
	public function getTransactionPresenceType(): string
	{
		return $this->transactionPresenceType;
	}

    /**
     * Set the value of transactionPresenceType
     *
     * @param string $transactionPresenceType
     *
     * @return  self
     */ 
    public function setTransactionPresenceType(string $transactionPresenceType)
    {
        $this->transactionPresenceType = $transactionPresenceType;

        return $this;
    }



    private string $primaryContactEmailIsIM;

    /**
	 * @return string
	 */
	public function getPrimaryContactEmailIsIM(): string
	{
		return $this->primaryContactEmailIsIM;
	}

    /**
     * Set the value of primaryContactEmailIsIM
     *
     * @param string $primaryContactEmailIsIM
     *
     * @return  self
     */ 
    public function setPrimaryContactEmailIsIM(string $primaryContactEmailIsIM)
    {
        $this->primaryContactEmailIsIM = $primaryContactEmailIsIM;

        return $this;
    }



    private string $primaryContactTwitter;

    /**
	 * @return string
	 */
	public function getPrimaryContactTwitter(): string
	{
		return $this->primaryContactTwitter;
	}

    /**
     * Set the value of primaryContactTwitter
     *
     * @param string $primaryContactTwitter
     *
     * @return  self
     */ 
    public function setPrimaryContactTwitter(string $primaryContactTwitter)
    {
        $this->primaryContactTwitter = $primaryContactTwitter;

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



    private string $primaryContactEmail;

    /**
	 * @return string
	 */
	public function getPrimaryContactEmail(): string
	{
		return $this->primaryContactEmail;
	}

    /**
     * Set the value of primaryContactEmail
     *
     * @param string $primaryContactEmail
     *
     * @return  self
     */ 
    public function setPrimaryContactEmail(string $primaryContactEmail)
    {
        $this->primaryContactEmail = $primaryContactEmail;

        return $this;
    }



    private string $deliveryAddressCounty;

    /**
	 * @return string
	 */
	public function getDeliveryAddressCounty(): string
	{
		return $this->deliveryAddressCounty;
	}

    /**
     * Set the value of deliveryAddressCounty
     *
     * @param string $deliveryAddressCounty
     *
     * @return  self
     */ 
    public function setDeliveryAddressCounty(string $deliveryAddressCounty)
    {
        $this->deliveryAddressCounty = $deliveryAddressCounty;

        return $this;
    }



    private string $hasSuframaDiscountPISandCOFINS;

    /**
	 * @return string
	 */
	public function getHasSuframaDiscountPISandCOFINS(): string
	{
		return $this->hasSuframaDiscountPISandCOFINS;
	}

    /**
     * Set the value of hasSuframaDiscountPISandCOFINS
     *
     * @param string $hasSuframaDiscountPISandCOFINS
     *
     * @return  self
     */ 
    public function setHasSuframaDiscountPISandCOFINS(string $hasSuframaDiscountPISandCOFINS)
    {
        $this->hasSuframaDiscountPISandCOFINS = $hasSuframaDiscountPISandCOFINS;

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



    private string $cURPNumber;

    /**
	 * @return string
	 */
	public function getCURPNumber(): string
	{
		return $this->cURPNumber;
	}

    /**
     * Set the value of cURPNumber
     *
     * @param string $cURPNumber
     *
     * @return  self
     */ 
    public function setCURPNumber(string $cURPNumber)
    {
        $this->cURPNumber = $cURPNumber;

        return $this;
    }



    private string $primaryContactLinkedInDescription;

    /**
	 * @return string
	 */
	public function getPrimaryContactLinkedInDescription(): string
	{
		return $this->primaryContactLinkedInDescription;
	}

    /**
     * Set the value of primaryContactLinkedInDescription
     *
     * @param string $primaryContactLinkedInDescription
     *
     * @return  self
     */ 
    public function setPrimaryContactLinkedInDescription(string $primaryContactLinkedInDescription)
    {
        $this->primaryContactLinkedInDescription = $primaryContactLinkedInDescription;

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



    private string $itemCustomerGroupId;

    /**
	 * @return string
	 */
	public function getItemCustomerGroupId(): string
	{
		return $this->itemCustomerGroupId;
	}

    /**
     * Set the value of itemCustomerGroupId
     *
     * @param string $itemCustomerGroupId
     *
     * @return  self
     */ 
    public function setItemCustomerGroupId(string $itemCustomerGroupId)
    {
        $this->itemCustomerGroupId = $itemCustomerGroupId;

        return $this;
    }



    private string $personProfessionalTitle;

    /**
	 * @return string
	 */
	public function getPersonProfessionalTitle(): string
	{
		return $this->personProfessionalTitle;
	}

    /**
     * Set the value of personProfessionalTitle
     *
     * @param string $personProfessionalTitle
     *
     * @return  self
     */ 
    public function setPersonProfessionalTitle(string $personProfessionalTitle)
    {
        $this->personProfessionalTitle = $personProfessionalTitle;

        return $this;
    }



    private string $salesSegmentId;

    /**
	 * @return string
	 */
	public function getSalesSegmentId(): string
	{
		return $this->salesSegmentId;
	}

    /**
     * Set the value of salesSegmentId
     *
     * @param string $salesSegmentId
     *
     * @return  self
     */ 
    public function setSalesSegmentId(string $salesSegmentId)
    {
        $this->salesSegmentId = $salesSegmentId;

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



    private string $primaryContactTelexDescription;

    /**
	 * @return string
	 */
	public function getPrimaryContactTelexDescription(): string
	{
		return $this->primaryContactTelexDescription;
	}

    /**
     * Set the value of primaryContactTelexDescription
     *
     * @param string $primaryContactTelexDescription
     *
     * @return  self
     */ 
    public function setPrimaryContactTelexDescription(string $primaryContactTelexDescription)
    {
        $this->primaryContactTelexDescription = $primaryContactTelexDescription;

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



    private string $salesAccountNumber;

    /**
	 * @return string
	 */
	public function getSalesAccountNumber(): string
	{
		return $this->salesAccountNumber;
	}

    /**
     * Set the value of salesAccountNumber
     *
     * @param string $salesAccountNumber
     *
     * @return  self
     */ 
    public function setSalesAccountNumber(string $salesAccountNumber)
    {
        $this->salesAccountNumber = $salesAccountNumber;

        return $this;
    }



    private string $primaryContactPhoneIsMobile;

    /**
	 * @return string
	 */
	public function getPrimaryContactPhoneIsMobile(): string
	{
		return $this->primaryContactPhoneIsMobile;
	}

    /**
     * Set the value of primaryContactPhoneIsMobile
     *
     * @param string $primaryContactPhoneIsMobile
     *
     * @return  self
     */ 
    public function setPrimaryContactPhoneIsMobile(string $primaryContactPhoneIsMobile)
    {
        $this->primaryContactPhoneIsMobile = $primaryContactPhoneIsMobile;

        return $this;
    }



    private string $primaryContactFacebookDescription;

    /**
	 * @return string
	 */
	public function getPrimaryContactFacebookDescription(): string
	{
		return $this->primaryContactFacebookDescription;
	}

    /**
     * Set the value of primaryContactFacebookDescription
     *
     * @param string $primaryContactFacebookDescription
     *
     * @return  self
     */ 
    public function setPrimaryContactFacebookDescription(string $primaryContactFacebookDescription)
    {
        $this->primaryContactFacebookDescription = $primaryContactFacebookDescription;

        return $this;
    }



    private string $primaryContactFaxRecordId;

    /**
	 * @return string
	 */
	public function getPrimaryContactFaxRecordId(): string
	{
		return $this->primaryContactFaxRecordId;
	}

    /**
     * Set the value of primaryContactFaxRecordId
     *
     * @param string $primaryContactFaxRecordId
     *
     * @return  self
     */ 
    public function setPrimaryContactFaxRecordId(string $primaryContactFaxRecordId)
    {
        $this->primaryContactFaxRecordId = $primaryContactFaxRecordId;

        return $this;
    }



    private string $tCSGroup;

    /**
	 * @return string
	 */
	public function getTCSGroup(): string
	{
		return $this->tCSGroup;
	}

    /**
     * Set the value of tCSGroup
     *
     * @param string $tCSGroup
     *
     * @return  self
     */ 
    public function setTCSGroup(string $tCSGroup)
    {
        $this->tCSGroup = $tCSGroup;

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



    private string $interCompanyAutoCreateOrders;

    /**
	 * @return string
	 */
	public function getInterCompanyAutoCreateOrders(): string
	{
		return $this->interCompanyAutoCreateOrders;
	}

    /**
     * Set the value of interCompanyAutoCreateOrders
     *
     * @param string $interCompanyAutoCreateOrders
     *
     * @return  self
     */ 
    public function setInterCompanyAutoCreateOrders(string $interCompanyAutoCreateOrders)
    {
        $this->interCompanyAutoCreateOrders = $interCompanyAutoCreateOrders;

        return $this;
    }



    private string $addressZipCode;

    /**
	 * @return string
	 */
	public function getAddressZipCode(): string
	{
		return $this->addressZipCode;
	}

    /**
     * Set the value of addressZipCode
     *
     * @param string $addressZipCode
     *
     * @return  self
     */ 
    public function setAddressZipCode(string $addressZipCode)
    {
        $this->addressZipCode = $addressZipCode;

        return $this;
    }



    private string $giroTypeProjInvoice;

    /**
	 * @return string
	 */
	public function getGiroTypeProjInvoice(): string
	{
		return $this->giroTypeProjInvoice;
	}

    /**
     * Set the value of giroTypeProjInvoice
     *
     * @param string $giroTypeProjInvoice
     *
     * @return  self
     */ 
    public function setGiroTypeProjInvoice(string $giroTypeProjInvoice)
    {
        $this->giroTypeProjInvoice = $giroTypeProjInvoice;

        return $this;
    }



    private string $lineOfBusinessId;

    /**
	 * @return string
	 */
	public function getLineOfBusinessId(): string
	{
		return $this->lineOfBusinessId;
	}

    /**
     * Set the value of lineOfBusinessId
     *
     * @param string $lineOfBusinessId
     *
     * @return  self
     */ 
    public function setLineOfBusinessId(string $lineOfBusinessId)
    {
        $this->lineOfBusinessId = $lineOfBusinessId;

        return $this;
    }



    private string $organizationPhoneticName;

    /**
	 * @return string
	 */
	public function getOrganizationPhoneticName(): string
	{
		return $this->organizationPhoneticName;
	}

    /**
     * Set the value of organizationPhoneticName
     *
     * @param string $organizationPhoneticName
     *
     * @return  self
     */ 
    public function setOrganizationPhoneticName(string $organizationPhoneticName)
    {
        $this->organizationPhoneticName = $organizationPhoneticName;

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



    private string $creditCardCVC;

    /**
	 * @return string
	 */
	public function getCreditCardCVC(): string
	{
		return $this->creditCardCVC;
	}

    /**
     * Set the value of creditCardCVC
     *
     * @param string $creditCardCVC
     *
     * @return  self
     */ 
    public function setCreditCardCVC(string $creditCardCVC)
    {
        $this->creditCardCVC = $creditCardCVC;

        return $this;
    }



    private string $deliveryAddressValidFrom;

    /**
	 * @return string
	 */
	public function getDeliveryAddressValidFrom(): string
	{
		return $this->deliveryAddressValidFrom;
	}

    /**
     * Set the value of deliveryAddressValidFrom
     *
     * @param string $deliveryAddressValidFrom
     *
     * @return  self
     */ 
    public function setDeliveryAddressValidFrom(string $deliveryAddressValidFrom)
    {
        $this->deliveryAddressValidFrom = $deliveryAddressValidFrom;

        return $this;
    }



    private string $giroTypeAccountStatement;

    /**
	 * @return string
	 */
	public function getGiroTypeAccountStatement(): string
	{
		return $this->giroTypeAccountStatement;
	}

    /**
     * Set the value of giroTypeAccountStatement
     *
     * @param string $giroTypeAccountStatement
     *
     * @return  self
     */ 
    public function setGiroTypeAccountStatement(string $giroTypeAccountStatement)
    {
        $this->giroTypeAccountStatement = $giroTypeAccountStatement;

        return $this;
    }



    private string $calculateWithholdingTax;

    /**
	 * @return string
	 */
	public function getCalculateWithholdingTax(): string
	{
		return $this->calculateWithholdingTax;
	}

    /**
     * Set the value of calculateWithholdingTax
     *
     * @param string $calculateWithholdingTax
     *
     * @return  self
     */ 
    public function setCalculateWithholdingTax(string $calculateWithholdingTax)
    {
        $this->calculateWithholdingTax = $calculateWithholdingTax;

        return $this;
    }



    private string $electronicInvoiceEAN;

    /**
	 * @return string
	 */
	public function getElectronicInvoiceEAN(): string
	{
		return $this->electronicInvoiceEAN;
	}

    /**
     * Set the value of electronicInvoiceEAN
     *
     * @param string $electronicInvoiceEAN
     *
     * @return  self
     */ 
    public function setElectronicInvoiceEAN(string $electronicInvoiceEAN)
    {
        $this->electronicInvoiceEAN = $electronicInvoiceEAN;

        return $this;
    }



    private string $deliveryFreightZone;

    /**
	 * @return string
	 */
	public function getDeliveryFreightZone(): string
	{
		return $this->deliveryFreightZone;
	}

    /**
     * Set the value of deliveryFreightZone
     *
     * @param string $deliveryFreightZone
     *
     * @return  self
     */ 
    public function setDeliveryFreightZone(string $deliveryFreightZone)
    {
        $this->deliveryFreightZone = $deliveryFreightZone;

        return $this;
    }



    private string $primaryContactFax;

    /**
	 * @return string
	 */
	public function getPrimaryContactFax(): string
	{
		return $this->primaryContactFax;
	}

    /**
     * Set the value of primaryContactFax
     *
     * @param string $primaryContactFax
     *
     * @return  self
     */ 
    public function setPrimaryContactFax(string $primaryContactFax)
    {
        $this->primaryContactFax = $primaryContactFax;

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



    private string $birthPlace;

    /**
	 * @return string
	 */
	public function getBirthPlace(): string
	{
		return $this->birthPlace;
	}

    /**
     * Set the value of birthPlace
     *
     * @param string $birthPlace
     *
     * @return  self
     */ 
    public function setBirthPlace(string $birthPlace)
    {
        $this->birthPlace = $birthPlace;

        return $this;
    }



    private string $addressCity;

    /**
	 * @return string
	 */
	public function getAddressCity(): string
	{
		return $this->addressCity;
	}

    /**
     * Set the value of addressCity
     *
     * @param string $addressCity
     *
     * @return  self
     */ 
    public function setAddressCity(string $addressCity)
    {
        $this->addressCity = $addressCity;

        return $this;
    }



    private string $personInitials;

    /**
	 * @return string
	 */
	public function getPersonInitials(): string
	{
		return $this->personInitials;
	}

    /**
     * Set the value of personInitials
     *
     * @param string $personInitials
     *
     * @return  self
     */ 
    public function setPersonInitials(string $personInitials)
    {
        $this->personInitials = $personInitials;

        return $this;
    }



    private string $defaultECommerceOperator;

    /**
	 * @return string
	 */
	public function getDefaultECommerceOperator(): string
	{
		return $this->defaultECommerceOperator;
	}

    /**
     * Set the value of defaultECommerceOperator
     *
     * @param string $defaultECommerceOperator
     *
     * @return  self
     */ 
    public function setDefaultECommerceOperator(string $defaultECommerceOperator)
    {
        $this->defaultECommerceOperator = $defaultECommerceOperator;

        return $this;
    }



    private string $centralBankPurposeCode;

    /**
	 * @return string
	 */
	public function getCentralBankPurposeCode(): string
	{
		return $this->centralBankPurposeCode;
	}

    /**
     * Set the value of centralBankPurposeCode
     *
     * @param string $centralBankPurposeCode
     *
     * @return  self
     */ 
    public function setCentralBankPurposeCode(string $centralBankPurposeCode)
    {
        $this->centralBankPurposeCode = $centralBankPurposeCode;

        return $this;
    }



    private string $giroTypeCollectionletter;

    /**
	 * @return string
	 */
	public function getGiroTypeCollectionletter(): string
	{
		return $this->giroTypeCollectionletter;
	}

    /**
     * Set the value of giroTypeCollectionletter
     *
     * @param string $giroTypeCollectionletter
     *
     * @return  self
     */ 
    public function setGiroTypeCollectionletter(string $giroTypeCollectionletter)
    {
        $this->giroTypeCollectionletter = $giroTypeCollectionletter;

        return $this;
    }



    private string $fullPrimaryAddress;

    /**
	 * @return string
	 */
	public function getFullPrimaryAddress(): string
	{
		return $this->fullPrimaryAddress;
	}

    /**
     * Set the value of fullPrimaryAddress
     *
     * @param string $fullPrimaryAddress
     *
     * @return  self
     */ 
    public function setFullPrimaryAddress(string $fullPrimaryAddress)
    {
        $this->fullPrimaryAddress = $fullPrimaryAddress;

        return $this;
    }



    private string $orderEntryDeadline;

    /**
	 * @return string
	 */
	public function getOrderEntryDeadline(): string
	{
		return $this->orderEntryDeadline;
	}

    /**
     * Set the value of orderEntryDeadline
     *
     * @param string $orderEntryDeadline
     *
     * @return  self
     */ 
    public function setOrderEntryDeadline(string $orderEntryDeadline)
    {
        $this->orderEntryDeadline = $orderEntryDeadline;

        return $this;
    }



    private string $foreignerId;

    /**
	 * @return string
	 */
	public function getForeignerId(): string
	{
		return $this->foreignerId;
	}

    /**
     * Set the value of foreignerId
     *
     * @param string $foreignerId
     *
     * @return  self
     */ 
    public function setForeignerId(string $foreignerId)
    {
        $this->foreignerId = $foreignerId;

        return $this;
    }



    private string $warehouseIsASNGenerated;

    /**
	 * @return string
	 */
	public function getWarehouseIsASNGenerated(): string
	{
		return $this->warehouseIsASNGenerated;
	}

    /**
     * Set the value of warehouseIsASNGenerated
     *
     * @param string $warehouseIsASNGenerated
     *
     * @return  self
     */ 
    public function setWarehouseIsASNGenerated(string $warehouseIsASNGenerated)
    {
        $this->warehouseIsASNGenerated = $warehouseIsASNGenerated;

        return $this;
    }



    private string $addressLongitude;

    /**
	 * @return string
	 */
	public function getAddressLongitude(): string
	{
		return $this->addressLongitude;
	}

    /**
     * Set the value of addressLongitude
     *
     * @param string $addressLongitude
     *
     * @return  self
     */ 
    public function setAddressLongitude(string $addressLongitude)
    {
        $this->addressLongitude = $addressLongitude;

        return $this;
    }



    private string $customerType;

    /**
	 * @return string
	 */
	public function getCustomerType(): string
	{
		return $this->customerType;
	}

    /**
     * Set the value of customerType
     *
     * @param string $customerType
     *
     * @return  self
     */ 
    public function setCustomerType(string $customerType)
    {
        $this->customerType = $customerType;

        return $this;
    }



    private string $primaryContactLinkedIn;

    /**
	 * @return string
	 */
	public function getPrimaryContactLinkedIn(): string
	{
		return $this->primaryContactLinkedIn;
	}

    /**
     * Set the value of primaryContactLinkedIn
     *
     * @param string $primaryContactLinkedIn
     *
     * @return  self
     */ 
    public function setPrimaryContactLinkedIn(string $primaryContactLinkedIn)
    {
        $this->primaryContactLinkedIn = $primaryContactLinkedIn;

        return $this;
    }



    private string $primaryContactURL;

    /**
	 * @return string
	 */
	public function getPrimaryContactURL(): string
	{
		return $this->primaryContactURL;
	}

    /**
     * Set the value of primaryContactURL
     *
     * @param string $primaryContactURL
     *
     * @return  self
     */ 
    public function setPrimaryContactURL(string $primaryContactURL)
    {
        $this->primaryContactURL = $primaryContactURL;

        return $this;
    }



    private string $isFreightAccrued;

    /**
	 * @return string
	 */
	public function getIsFreightAccrued(): string
	{
		return $this->isFreightAccrued;
	}

    /**
     * Set the value of isFreightAccrued
     *
     * @param string $isFreightAccrued
     *
     * @return  self
     */ 
    public function setIsFreightAccrued(string $isFreightAccrued)
    {
        $this->isFreightAccrued = $isFreightAccrued;

        return $this;
    }



    private string $partyState;

    /**
	 * @return string
	 */
	public function getPartyState(): string
	{
		return $this->partyState;
	}

    /**
     * Set the value of partyState
     *
     * @param string $partyState
     *
     * @return  self
     */ 
    public function setPartyState(string $partyState)
    {
        $this->partyState = $partyState;

        return $this;
    }



    private string $invoiceAccount;

    /**
	 * @return string
	 */
	public function getInvoiceAccount(): string
	{
		return $this->invoiceAccount;
	}

    /**
     * Set the value of invoiceAccount
     *
     * @param string $invoiceAccount
     *
     * @return  self
     */ 
    public function setInvoiceAccount(string $invoiceAccount)
    {
        $this->invoiceAccount = $invoiceAccount;

        return $this;
    }



    private string $partyNumber;

    /**
	 * @return string
	 */
	public function getPartyNumber(): string
	{
		return $this->partyNumber;
	}

    /**
     * Set the value of partyNumber
     *
     * @param string $partyNumber
     *
     * @return  self
     */ 
    public function setPartyNumber(string $partyNumber)
    {
        $this->partyNumber = $partyNumber;

        return $this;
    }



    private string $centralBankPurposeNotes;

    /**
	 * @return string
	 */
	public function getCentralBankPurposeNotes(): string
	{
		return $this->centralBankPurposeNotes;
	}

    /**
     * Set the value of centralBankPurposeNotes
     *
     * @param string $centralBankPurposeNotes
     *
     * @return  self
     */ 
    public function setCentralBankPurposeNotes(string $centralBankPurposeNotes)
    {
        $this->centralBankPurposeNotes = $centralBankPurposeNotes;

        return $this;
    }



    private string $personMaritalStatus;

    /**
	 * @return string
	 */
	public function getPersonMaritalStatus(): string
	{
		return $this->personMaritalStatus;
	}

    /**
     * Set the value of personMaritalStatus
     *
     * @param string $personMaritalStatus
     *
     * @return  self
     */ 
    public function setPersonMaritalStatus(string $personMaritalStatus)
    {
        $this->personMaritalStatus = $personMaritalStatus;

        return $this;
    }



    private string $collectionsContactPersonId;

    /**
	 * @return string
	 */
	public function getCollectionsContactPersonId(): string
	{
		return $this->collectionsContactPersonId;
	}

    /**
     * Set the value of collectionsContactPersonId
     *
     * @param string $collectionsContactPersonId
     *
     * @return  self
     */ 
    public function setCollectionsContactPersonId(string $collectionsContactPersonId)
    {
        $this->collectionsContactPersonId = $collectionsContactPersonId;

        return $this;
    }



    private string $addressBuildingComplement;

    /**
	 * @return string
	 */
	public function getAddressBuildingComplement(): string
	{
		return $this->addressBuildingComplement;
	}

    /**
     * Set the value of addressBuildingComplement
     *
     * @param string $addressBuildingComplement
     *
     * @return  self
     */ 
    public function setAddressBuildingComplement(string $addressBuildingComplement)
    {
        $this->addressBuildingComplement = $addressBuildingComplement;

        return $this;
    }



    private string $addressLocationId;

    /**
	 * @return string
	 */
	public function getAddressLocationId(): string
	{
		return $this->addressLocationId;
	}

    /**
     * Set the value of addressLocationId
     *
     * @param string $addressLocationId
     *
     * @return  self
     */ 
    public function setAddressLocationId(string $addressLocationId)
    {
        $this->addressLocationId = $addressLocationId;

        return $this;
    }



    private string $paymentSchedule;

    /**
	 * @return string
	 */
	public function getPaymentSchedule(): string
	{
		return $this->paymentSchedule;
	}

    /**
     * Set the value of paymentSchedule
     *
     * @param string $paymentSchedule
     *
     * @return  self
     */ 
    public function setPaymentSchedule(string $paymentSchedule)
    {
        $this->paymentSchedule = $paymentSchedule;

        return $this;
    }



    private string $primaryContactTwitterPurpose;

    /**
	 * @return string
	 */
	public function getPrimaryContactTwitterPurpose(): string
	{
		return $this->primaryContactTwitterPurpose;
	}

    /**
     * Set the value of primaryContactTwitterPurpose
     *
     * @param string $primaryContactTwitterPurpose
     *
     * @return  self
     */ 
    public function setPrimaryContactTwitterPurpose(string $primaryContactTwitterPurpose)
    {
        $this->primaryContactTwitterPurpose = $primaryContactTwitterPurpose;

        return $this;
    }



    private string $giroType;

    /**
	 * @return string
	 */
	public function getGiroType(): string
	{
		return $this->giroType;
	}

    /**
     * Set the value of giroType
     *
     * @param string $giroType
     *
     * @return  self
     */ 
    public function setGiroType(string $giroType)
    {
        $this->giroType = $giroType;

        return $this;
    }



    private string $invoiceAddressDescription;

    /**
	 * @return string
	 */
	public function getInvoiceAddressDescription(): string
	{
		return $this->invoiceAddressDescription;
	}

    /**
     * Set the value of invoiceAddressDescription
     *
     * @param string $invoiceAddressDescription
     *
     * @return  self
     */ 
    public function setInvoiceAddressDescription(string $invoiceAddressDescription)
    {
        $this->invoiceAddressDescription = $invoiceAddressDescription;

        return $this;
    }



    private string $addressDistrictName;

    /**
	 * @return string
	 */
	public function getAddressDistrictName(): string
	{
		return $this->addressDistrictName;
	}

    /**
     * Set the value of addressDistrictName
     *
     * @param string $addressDistrictName
     *
     * @return  self
     */ 
    public function setAddressDistrictName(string $addressDistrictName)
    {
        $this->addressDistrictName = $addressDistrictName;

        return $this;
    }



    private string $deliveryTerms;

    /**
	 * @return string
	 */
	public function getDeliveryTerms(): string
	{
		return $this->deliveryTerms;
	}

    /**
     * Set the value of deliveryTerms
     *
     * @param string $deliveryTerms
     *
     * @return  self
     */ 
    public function setDeliveryTerms(string $deliveryTerms)
    {
        $this->deliveryTerms = $deliveryTerms;

        return $this;
    }



    private string $numberSequenceGroup;

    /**
	 * @return string
	 */
	public function getNumberSequenceGroup(): string
	{
		return $this->numberSequenceGroup;
	}

    /**
     * Set the value of numberSequenceGroup
     *
     * @param string $numberSequenceGroup
     *
     * @return  self
     */ 
    public function setNumberSequenceGroup(string $numberSequenceGroup)
    {
        $this->numberSequenceGroup = $numberSequenceGroup;

        return $this;
    }



    private string $personChildrenNames;

    /**
	 * @return string
	 */
	public function getPersonChildrenNames(): string
	{
		return $this->personChildrenNames;
	}

    /**
     * Set the value of personChildrenNames
     *
     * @param string $personChildrenNames
     *
     * @return  self
     */ 
    public function setPersonChildrenNames(string $personChildrenNames)
    {
        $this->personChildrenNames = $personChildrenNames;

        return $this;
    }



    private string $paymentMethod;

    /**
	 * @return string
	 */
	public function getPaymentMethod(): string
	{
		return $this->paymentMethod;
	}

    /**
     * Set the value of paymentMethod
     *
     * @param string $paymentMethod
     *
     * @return  self
     */ 
    public function setPaymentMethod(string $paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }



    private string $foreignResident;

    /**
	 * @return string
	 */
	public function getForeignResident(): string
	{
		return $this->foreignResident;
	}

    /**
     * Set the value of foreignResident
     *
     * @param string $foreignResident
     *
     * @return  self
     */ 
    public function setForeignResident(string $foreignResident)
    {
        $this->foreignResident = $foreignResident;

        return $this;
    }



    private string $deliveryMode;

    /**
	 * @return string
	 */
	public function getDeliveryMode(): string
	{
		return $this->deliveryMode;
	}

    /**
     * Set the value of deliveryMode
     *
     * @param string $deliveryMode
     *
     * @return  self
     */ 
    public function setDeliveryMode(string $deliveryMode)
    {
        $this->deliveryMode = $deliveryMode;

        return $this;
    }



    private string $personProfessionalSuffix;

    /**
	 * @return string
	 */
	public function getPersonProfessionalSuffix(): string
	{
		return $this->personProfessionalSuffix;
	}

    /**
     * Set the value of personProfessionalSuffix
     *
     * @param string $personProfessionalSuffix
     *
     * @return  self
     */ 
    public function setPersonProfessionalSuffix(string $personProfessionalSuffix)
    {
        $this->personProfessionalSuffix = $personProfessionalSuffix;

        return $this;
    }



    private string $onHoldStatus;

    /**
	 * @return string
	 */
	public function getOnHoldStatus(): string
	{
		return $this->onHoldStatus;
	}

    /**
     * Set the value of onHoldStatus
     *
     * @param string $onHoldStatus
     *
     * @return  self
     */ 
    public function setOnHoldStatus(string $onHoldStatus)
    {
        $this->onHoldStatus = $onHoldStatus;

        return $this;
    }



    private string $accountStatement;

    /**
	 * @return string
	 */
	public function getAccountStatement(): string
	{
		return $this->accountStatement;
	}

    /**
     * Set the value of accountStatement
     *
     * @param string $accountStatement
     *
     * @return  self
     */ 
    public function setAccountStatement(string $accountStatement)
    {
        $this->accountStatement = $accountStatement;

        return $this;
    }



    private string $warehouseId;

    /**
	 * @return string
	 */
	public function getWarehouseId(): string
	{
		return $this->warehouseId;
	}

    /**
     * Set the value of warehouseId
     *
     * @param string $warehouseId
     *
     * @return  self
     */ 
    public function setWarehouseId(string $warehouseId)
    {
        $this->warehouseId = $warehouseId;

        return $this;
    }



    private string $destinationCode;

    /**
	 * @return string
	 */
	public function getDestinationCode(): string
	{
		return $this->destinationCode;
	}

    /**
     * Set the value of destinationCode
     *
     * @param string $destinationCode
     *
     * @return  self
     */ 
    public function setDestinationCode(string $destinationCode)
    {
        $this->destinationCode = $destinationCode;

        return $this;
    }



    private string $eInvoiceRegister;

    /**
	 * @return string
	 */
	public function getEInvoiceRegister(): string
	{
		return $this->eInvoiceRegister;
	}

    /**
     * Set the value of eInvoiceRegister
     *
     * @param string $eInvoiceRegister
     *
     * @return  self
     */ 
    public function setEInvoiceRegister(string $eInvoiceRegister)
    {
        $this->eInvoiceRegister = $eInvoiceRegister;

        return $this;
    }



    private string $iRS1099CIndicator;

    /**
	 * @return string
	 */
	public function getIRS1099CIndicator(): string
	{
		return $this->iRS1099CIndicator;
	}

    /**
     * Set the value of iRS1099CIndicator
     *
     * @param string $iRS1099CIndicator
     *
     * @return  self
     */ 
    public function setIRS1099CIndicator(string $iRS1099CIndicator)
    {
        $this->iRS1099CIndicator = $iRS1099CIndicator;

        return $this;
    }


    private string $frenchSiret;

    /**
	 * @return string
	 */
	public function getFrenchSiret(): string
	{
		return $this->frenchSiret;
	}

    /**
     * Set the value of frenchSiret
     *
     * @param string $frenchSiret
     *
     * @return  self
     */ 
    public function setFrenchSiret(string $frenchSiret)
    {
        $this->frenchSiret = $frenchSiret;

        return $this;
    }



    private string $paymentDay;

    /**
	 * @return string
	 */
	public function getPaymentDay(): string
	{
		return $this->paymentDay;
	}

    /**
     * Set the value of paymentDay
     *
     * @param string $paymentDay
     *
     * @return  self
     */ 
    public function setPaymentDay(string $paymentDay)
    {
        $this->paymentDay = $paymentDay;

        return $this;
    }



    private string $brazilianNIT;

    /**
	 * @return string
	 */
	public function getBrazilianNIT(): string
	{
		return $this->brazilianNIT;
	}

    /**
     * Set the value of brazilianNIT
     *
     * @param string $brazilianNIT
     *
     * @return  self
     */ 
    public function setBrazilianNIT(string $brazilianNIT)
    {
        $this->brazilianNIT = $brazilianNIT;

        return $this;
    }



    private string $federalIndicator;

    /**
	 * @return string
	 */
	public function getFederalIndicator(): string
	{
		return $this->federalIndicator;
	}

    /**
     * Set the value of federalIndicator
     *
     * @param string $federalIndicator
     *
     * @return  self
     */ 
    public function setFederalIndicator(string $federalIndicator)
    {
        $this->federalIndicator = $federalIndicator;

        return $this;
    }



    private string $employeeResponsibleNumber;

    /**
	 * @return string
	 */
	public function getEmployeeResponsibleNumber(): string
	{
		return $this->employeeResponsibleNumber;
	}

    /**
     * Set the value of employeeResponsibleNumber
     *
     * @param string $employeeResponsibleNumber
     *
     * @return  self
     */ 
    public function setEmployeeResponsibleNumber(string $employeeResponsibleNumber)
    {
        $this->employeeResponsibleNumber = $employeeResponsibleNumber;

        return $this;
    }



    private string $personAnniversaryYear;

    /**
	 * @return string
	 */
	public function getPersonAnniversaryYear(): string
	{
		return $this->personAnniversaryYear;
	}

    /**
     * Set the value of personAnniversaryYear
     *
     * @param string $personAnniversaryYear
     *
     * @return  self
     */ 
    public function setPersonAnniversaryYear(string $personAnniversaryYear)
    {
        $this->personAnniversaryYear = $personAnniversaryYear;

        return $this;
    }



    private string $defaultInventoryStatusId;

    /**
	 * @return string
	 */
	public function getDefaultInventoryStatusId(): string
	{
		return $this->defaultInventoryStatusId;
	}

    /**
     * Set the value of defaultInventoryStatusId
     *
     * @param string $defaultInventoryStatusId
     *
     * @return  self
     */ 
    public function setDefaultInventoryStatusId(string $defaultInventoryStatusId)
    {
        $this->defaultInventoryStatusId = $defaultInventoryStatusId;

        return $this;
    }



    private string $primaryContactEmailDescription;

    /**
	 * @return string
	 */
	public function getPrimaryContactEmailDescription(): string
	{
		return $this->primaryContactEmailDescription;
	}

    /**
     * Set the value of primaryContactEmailDescription
     *
     * @param string $primaryContactEmailDescription
     *
     * @return  self
     */ 
    public function setPrimaryContactEmailDescription(string $primaryContactEmailDescription)
    {
        $this->primaryContactEmailDescription = $primaryContactEmailDescription;

        return $this;
    }



    private string $addressTimeZone;

    /**
	 * @return string
	 */
	public function getAddressTimeZone(): string
	{
		return $this->addressTimeZone;
	}

    /**
     * Set the value of addressTimeZone
     *
     * @param string $addressTimeZone
     *
     * @return  self
     */ 
    public function setAddressTimeZone(string $addressTimeZone)
    {
        $this->addressTimeZone = $addressTimeZone;

        return $this;
    }



    private string $primaryContactPhone;

    /**
	 * @return string
	 */
	public function getPrimaryContactPhone(): string
	{
		return $this->primaryContactPhone;
	}

    /**
     * Set the value of primaryContactPhone
     *
     * @param string $primaryContactPhone
     *
     * @return  self
     */ 
    public function setPrimaryContactPhone(string $primaryContactPhone)
    {
        $this->primaryContactPhone = $primaryContactPhone;

        return $this;
    }



    private string $primaryContactPhoneRecordId;

    /**
	 * @return string
	 */
	public function getPrimaryContactPhoneRecordId(): string
	{
		return $this->primaryContactPhoneRecordId;
	}

    /**
     * Set the value of primaryContactPhoneRecordId
     *
     * @param string $primaryContactPhoneRecordId
     *
     * @return  self
     */ 
    public function setPrimaryContactPhoneRecordId(string $primaryContactPhoneRecordId)
    {
        $this->primaryContactPhoneRecordId = $primaryContactPhoneRecordId;

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



    private string $invoiceAddressCounty;

    /**
	 * @return string
	 */
	public function getInvoiceAddressCounty(): string
	{
		return $this->invoiceAddressCounty;
	}

    /**
     * Set the value of invoiceAddressCounty
     *
     * @param string $invoiceAddressCounty
     *
     * @return  self
     */ 
    public function setInvoiceAddressCounty(string $invoiceAddressCounty)
    {
        $this->invoiceAddressCounty = $invoiceAddressCounty;

        return $this;
    }



    private string $pANReferenceNumber;

    /**
	 * @return string
	 */
	public function getPANReferenceNumber(): string
	{
		return $this->pANReferenceNumber;
	}

    /**
     * Set the value of pANReferenceNumber
     *
     * @param string $pANReferenceNumber
     *
     * @return  self
     */ 
    public function setPANReferenceNumber(string $pANReferenceNumber)
    {
        $this->pANReferenceNumber = $pANReferenceNumber;

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



    private string $salesCurrencyCode;

    /**
	 * @return string
	 */
	public function getSalesCurrencyCode(): string
	{
		return $this->salesCurrencyCode;
	}

    /**
     * Set the value of salesCurrencyCode
     *
     * @param string $salesCurrencyCode
     *
     * @return  self
     */ 
    public function setSalesCurrencyCode(string $salesCurrencyCode)
    {
        $this->salesCurrencyCode = $salesCurrencyCode;

        return $this;
    }



    private string $priority;

    /**
	 * @return string
	 */
	public function getPriority(): string
	{
		return $this->priority;
	}

    /**
     * Set the value of priority
     *
     * @param string $priority
     *
     * @return  self
     */ 
    public function setPriority(string $priority)
    {
        $this->priority = $priority;

        return $this;
    }



    private string $isSalesTaxIncludedInPrices;

    /**
	 * @return string
	 */
	public function getIsSalesTaxIncludedInPrices(): string
	{
		return $this->isSalesTaxIncludedInPrices;
	}

    /**
     * Set the value of isSalesTaxIncludedInPrices
     *
     * @param string $isSalesTaxIncludedInPrices
     *
     * @return  self
     */ 
    public function setIsSalesTaxIncludedInPrices(string $isSalesTaxIncludedInPrices)
    {
        $this->isSalesTaxIncludedInPrices = $isSalesTaxIncludedInPrices;

        return $this;
    }



    private string $brazilianCNPJOrCPF;

    /**
	 * @return string
	 */
	public function getBrazilianCNPJOrCPF(): string
	{
		return $this->brazilianCNPJOrCPF;
	}

    /**
     * Set the value of brazilianCNPJOrCPF
     *
     * @param string $brazilianCNPJOrCPF
     *
     * @return  self
     */ 
    public function setBrazilianCNPJOrCPF(string $brazilianCNPJOrCPF)
    {
        $this->brazilianCNPJOrCPF = $brazilianCNPJOrCPF;

        return $this;
    }



    private string $paymentFactoringAccount;

    /**
	 * @return string
	 */
	public function getPaymentFactoringAccount(): string
	{
		return $this->paymentFactoringAccount;
	}

    /**
     * Set the value of paymentFactoringAccount
     *
     * @param string $paymentFactoringAccount
     *
     * @return  self
     */ 
    public function setPaymentFactoringAccount(string $paymentFactoringAccount)
    {
        $this->paymentFactoringAccount = $paymentFactoringAccount;

        return $this;
    }



    private string $pANNumber;

    /**
	 * @return string
	 */
	public function getPANNumber(): string
	{
		return $this->pANNumber;
	}

    /**
     * Set the value of pANNumber
     *
     * @param string $pANNumber
     *
     * @return  self
     */ 
    public function setPANNumber(string $pANNumber)
    {
        $this->pANNumber = $pANNumber;

        return $this;
    }



    private string $primaryContactTwitterDescription;

    /**
	 * @return string
	 */
	public function getPrimaryContactTwitterDescription(): string
	{
		return $this->primaryContactTwitterDescription;
	}

    /**
     * Set the value of primaryContactTwitterDescription
     *
     * @param string $primaryContactTwitterDescription
     *
     * @return  self
     */ 
    public function setPrimaryContactTwitterDescription(string $primaryContactTwitterDescription)
    {
        $this->primaryContactTwitterDescription = $primaryContactTwitterDescription;

        return $this;
    }



    private string $personFirstName;

    /**
	 * @return string
	 */
	public function getPersonFirstName(): string
	{
		return $this->personFirstName;
	}

    /**
     * Set the value of personFirstName
     *
     * @param string $personFirstName
     *
     * @return  self
     */ 
    public function setPersonFirstName(string $personFirstName)
    {
        $this->personFirstName = $personFirstName;

        return $this;
    }



    private string $brazilianCCM;

    /**
	 * @return string
	 */
	public function getBrazilianCCM(): string
	{
		return $this->brazilianCCM;
	}

    /**
     * Set the value of brazilianCCM
     *
     * @param string $brazilianCCM
     *
     * @return  self
     */ 
    public function setBrazilianCCM(string $brazilianCCM)
    {
        $this->brazilianCCM = $brazilianCCM;

        return $this;
    }



    private string $receiptEmail;

    /**
	 * @return string
	 */
	public function getReceiptEmail(): string
	{
		return $this->receiptEmail;
	}

    /**
     * Set the value of receiptEmail
     *
     * @param string $receiptEmail
     *
     * @return  self
     */ 
    public function setReceiptEmail(string $receiptEmail)
    {
        $this->receiptEmail = $receiptEmail;

        return $this;
    }



    private string $tDSGroup;

    /**
	 * @return string
	 */
	public function getTDSGroup(): string
	{
		return $this->tDSGroup;
	}

    /**
     * Set the value of tDSGroup
     *
     * @param string $tDSGroup
     *
     * @return  self
     */ 
    public function setTDSGroup(string $tDSGroup)
    {
        $this->tDSGroup = $tDSGroup;

        return $this;
    }



    private string $multiLineDiscountCode;

    /**
	 * @return string
	 */
	public function getMultiLineDiscountCode(): string
	{
		return $this->multiLineDiscountCode;
	}

    /**
     * Set the value of multiLineDiscountCode
     *
     * @param string $multiLineDiscountCode
     *
     * @return  self
     */ 
    public function setMultiLineDiscountCode(string $multiLineDiscountCode)
    {
        $this->multiLineDiscountCode = $multiLineDiscountCode;

        return $this;
    }



    private string $personAnniversaryDay;

    /**
	 * @return string
	 */
	public function getPersonAnniversaryDay(): string
	{
		return $this->personAnniversaryDay;
	}

    /**
     * Set the value of personAnniversaryDay
     *
     * @param string $personAnniversaryDay
     *
     * @return  self
     */ 
    public function setPersonAnniversaryDay(string $personAnniversaryDay)
    {
        $this->personAnniversaryDay = $personAnniversaryDay;

        return $this;
    }



    private string $defaultDimensionDisplayValue;

    /**
	 * @return string
	 */
	public function getDefaultDimensionDisplayValue(): string
	{
		return $this->defaultDimensionDisplayValue;
	}

    /**
     * Set the value of defaultDimensionDisplayValue
     *
     * @param string $defaultDimensionDisplayValue
     *
     * @return  self
     */ 
    public function setDefaultDimensionDisplayValue(string $defaultDimensionDisplayValue)
    {
        $this->defaultDimensionDisplayValue = $defaultDimensionDisplayValue;

        return $this;
    }



    private string $supplementaryItemGroupId;

    /**
	 * @return string
	 */
	public function getSupplementaryItemGroupId(): string
	{
		return $this->supplementaryItemGroupId;
	}

    /**
     * Set the value of supplementaryItemGroupId
     *
     * @param string $supplementaryItemGroupId
     *
     * @return  self
     */ 
    public function setSupplementaryItemGroupId(string $supplementaryItemGroupId)
    {
        $this->supplementaryItemGroupId = $supplementaryItemGroupId;

        return $this;
    }



    private string $isWithholdingTaxCalculated;

    /**
	 * @return string
	 */
	public function getIsWithholdingTaxCalculated(): string
	{
		return $this->isWithholdingTaxCalculated;
	}

    /**
     * Set the value of isWithholdingTaxCalculated
     *
     * @param string $isWithholdingTaxCalculated
     *
     * @return  self
     */ 
    public function setIsWithholdingTaxCalculated(string $isWithholdingTaxCalculated)
    {
        $this->isWithholdingTaxCalculated = $isWithholdingTaxCalculated;

        return $this;
    }



    private string $paymentSpecification;

    /**
	 * @return string
	 */
	public function getPaymentSpecification(): string
	{
		return $this->paymentSpecification;
	}

    /**
     * Set the value of paymentSpecification
     *
     * @param string $paymentSpecification
     *
     * @return  self
     */ 
    public function setPaymentSpecification(string $paymentSpecification)
    {
        $this->paymentSpecification = $paymentSpecification;

        return $this;
    }



    private string $addressRecordId;

    /**
	 * @return string
	 */
	public function getAddressRecordId(): string
	{
		return $this->addressRecordId;
	}

    /**
     * Set the value of addressRecordId
     *
     * @param string $addressRecordId
     *
     * @return  self
     */ 
    public function setAddressRecordId(string $addressRecordId)
    {
        $this->addressRecordId = $addressRecordId;

        return $this;
    }



    private string $addressBooks;

    /**
	 * @return string
	 */
	public function getAddressBooks(): string
	{
		return $this->addressBooks;
	}

    /**
     * Set the value of addressBooks
     *
     * @param string $addressBooks
     *
     * @return  self
     */ 
    public function setAddressBooks(string $addressBooks)
    {
        $this->addressBooks = $addressBooks;

        return $this;
    }



    private string $primaryContactEmailPurpose;

    /**
	 * @return string
	 */
	public function getPrimaryContactEmailPurpose(): string
	{
		return $this->primaryContactEmailPurpose;
	}

    /**
     * Set the value of primaryContactEmailPurpose
     *
     * @param string $primaryContactEmailPurpose
     *
     * @return  self
     */ 
    public function setPrimaryContactEmailPurpose(string $primaryContactEmailPurpose)
    {
        $this->primaryContactEmailPurpose = $primaryContactEmailPurpose;

        return $this;
    }



    private string $fulfillmentPolicyName;

    /**
	 * @return string
	 */
	public function getFulfillmentPolicyName(): string
	{
		return $this->fulfillmentPolicyName;
	}

    /**
     * Set the value of fulfillmentPolicyName
     *
     * @param string $fulfillmentPolicyName
     *
     * @return  self
     */ 
    public function setFulfillmentPolicyName(string $fulfillmentPolicyName)
    {
        $this->fulfillmentPolicyName = $fulfillmentPolicyName;

        return $this;
    }



    private string $salesDistrict;

    /**
	 * @return string
	 */
	public function getSalesDistrict(): string
	{
		return $this->salesDistrict;
	}

    /**
     * Set the value of salesDistrict
     *
     * @param string $salesDistrict
     *
     * @return  self
     */ 
    public function setSalesDistrict(string $salesDistrict)
    {
        $this->salesDistrict = $salesDistrict;

        return $this;
    }



    private string $consolidationDay;

    /**
	 * @return string
	 */
	public function getConsolidationDay(): string
	{
		return $this->consolidationDay;
	}

    /**
     * Set the value of consolidationDay
     *
     * @param string $consolidationDay
     *
     * @return  self
     */ 
    public function setConsolidationDay(string $consolidationDay)
    {
        $this->consolidationDay = $consolidationDay;

        return $this;
    }



    private string $isExpressBillOfLadingAccepted;

    /**
	 * @return string
	 */
	public function getIsExpressBillOfLadingAccepted(): string
	{
		return $this->isExpressBillOfLadingAccepted;
	}

    /**
     * Set the value of isExpressBillOfLadingAccepted
     *
     * @param string $isExpressBillOfLadingAccepted
     *
     * @return  self
     */ 
    public function setIsExpressBillOfLadingAccepted(string $isExpressBillOfLadingAccepted)
    {
        $this->isExpressBillOfLadingAccepted = $isExpressBillOfLadingAccepted;

        return $this;
    }



    private string $creditCardAddressVerification;

    /**
	 * @return string
	 */
	public function getCreditCardAddressVerification(): string
	{
		return $this->creditCardAddressVerification;
	}

    /**
     * Set the value of creditCardAddressVerification
     *
     * @param string $creditCardAddressVerification
     *
     * @return  self
     */ 
    public function setCreditCardAddressVerification(string $creditCardAddressVerification)
    {
        $this->creditCardAddressVerification = $creditCardAddressVerification;

        return $this;
    }



    private string $invoiceAddressBuildingComplement;

    /**
	 * @return string
	 */
	public function getInvoiceAddressBuildingComplement(): string
	{
		return $this->invoiceAddressBuildingComplement;
	}

    /**
     * Set the value of invoiceAddressBuildingComplement
     *
     * @param string $invoiceAddressBuildingComplement
     *
     * @return  self
     */ 
    public function setInvoiceAddressBuildingComplement(string $invoiceAddressBuildingComplement)
    {
        $this->invoiceAddressBuildingComplement = $invoiceAddressBuildingComplement;

        return $this;
    }



    private string $addressState;

    /**
	 * @return string
	 */
	public function getAddressState(): string
	{
		return $this->addressState;
	}

    /**
     * Set the value of addressState
     *
     * @param string $addressState
     *
     * @return  self
     */ 
    public function setAddressState(string $addressState)
    {
        $this->addressState = $addressState;

        return $this;
    }



    private string $isExcludedFromCollectionFeeCalculation;

    /**
	 * @return string
	 */
	public function getIsExcludedFromCollectionFeeCalculation(): string
	{
		return $this->isExcludedFromCollectionFeeCalculation;
	}

    /**
     * Set the value of isExcludedFromCollectionFeeCalculation
     *
     * @param string $isExcludedFromCollectionFeeCalculation
     *
     * @return  self
     */ 
    public function setIsExcludedFromCollectionFeeCalculation(string $isExcludedFromCollectionFeeCalculation)
    {
        $this->isExcludedFromCollectionFeeCalculation = $isExcludedFromCollectionFeeCalculation;

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



    private string $isTransactionPostedAsShipment;

    /**
	 * @return string
	 */
	public function getIsTransactionPostedAsShipment(): string
	{
		return $this->isTransactionPostedAsShipment;
	}

    /**
     * Set the value of isTransactionPostedAsShipment
     *
     * @param string $isTransactionPostedAsShipment
     *
     * @return  self
     */ 
    public function setIsTransactionPostedAsShipment(string $isTransactionPostedAsShipment)
    {
        $this->isTransactionPostedAsShipment = $isTransactionPostedAsShipment;

        return $this;
    }



    private string $creditLimitIsMandatory;

    /**
	 * @return string
	 */
	public function getCreditLimitIsMandatory(): string
	{
		return $this->creditLimitIsMandatory;
	}

    /**
     * Set the value of creditLimitIsMandatory
     *
     * @param string $creditLimitIsMandatory
     *
     * @return  self
     */ 
    public function setCreditLimitIsMandatory(string $creditLimitIsMandatory)
    {
        $this->creditLimitIsMandatory = $creditLimitIsMandatory;

        return $this;
    }



    private string $isExternallyMaintained;

    /**
	 * @return string
	 */
	public function getIsExternallyMaintained(): string
	{
		return $this->isExternallyMaintained;
	}

    /**
     * Set the value of isExternallyMaintained
     *
     * @param string $isExternallyMaintained
     *
     * @return  self
     */ 
    public function setIsExternallyMaintained(string $isExternallyMaintained)
    {
        $this->isExternallyMaintained = $isExternallyMaintained;

        return $this;
    }



    private string $paymentTermsBaseDays;

    /**
	 * @return string
	 */
	public function getPaymentTermsBaseDays(): string
	{
		return $this->paymentTermsBaseDays;
	}

    /**
     * Set the value of paymentTermsBaseDays
     *
     * @param string $paymentTermsBaseDays
     *
     * @return  self
     */ 
    public function setPaymentTermsBaseDays(string $paymentTermsBaseDays)
    {
        $this->paymentTermsBaseDays = $paymentTermsBaseDays;

        return $this;
    }



    private string $fiscalCode;

    /**
	 * @return string
	 */
	public function getFiscalCode(): string
	{
		return $this->fiscalCode;
	}

    /**
     * Set the value of fiscalCode
     *
     * @param string $fiscalCode
     *
     * @return  self
     */ 
    public function setFiscalCode(string $fiscalCode)
    {
        $this->fiscalCode = $fiscalCode;

        return $this;
    }



    private string $knownAs;

    /**
	 * @return string
	 */
	public function getKnownAs(): string
	{
		return $this->knownAs;
	}

    /**
     * Set the value of knownAs
     *
     * @param string $knownAs
     *
     * @return  self
     */ 
    public function setKnownAs(string $knownAs)
    {
        $this->knownAs = $knownAs;

        return $this;
    }



    private string $primaryContactTelex;

    /**
	 * @return string
	 */
	public function getPrimaryContactTelex(): string
	{
		return $this->primaryContactTelex;
	}

    /**
     * Set the value of primaryContactTelex
     *
     * @param string $primaryContactTelex
     *
     * @return  self
     */ 
    public function setPrimaryContactTelex(string $primaryContactTelex)
    {
        $this->primaryContactTelex = $primaryContactTelex;

        return $this;
    }



    private string $paymentBankAccount;

    /**
	 * @return string
	 */
	public function getPaymentBankAccount(): string
	{
		return $this->paymentBankAccount;
	}

    /**
     * Set the value of paymentBankAccount
     *
     * @param string $paymentBankAccount
     *
     * @return  self
     */ 
    public function setPaymentBankAccount(string $paymentBankAccount)
    {
        $this->paymentBankAccount = $paymentBankAccount;

        return $this;
    }



    private string $brazilianIE;

    /**
	 * @return string
	 */
	public function getBrazilianIE(): string
	{
		return $this->brazilianIE;
	}

    /**
     * Set the value of brazilianIE
     *
     * @param string $brazilianIE
     *
     * @return  self
     */ 
    public function setBrazilianIE(string $brazilianIE)
    {
        $this->brazilianIE = $brazilianIE;

        return $this;
    }



    private string $preferentialCustomer;

    /**
	 * @return string
	 */
	public function getPreferentialCustomer(): string
	{
		return $this->preferentialCustomer;
	}

    /**
     * Set the value of preferentialCustomer
     *
     * @param string $preferentialCustomer
     *
     * @return  self
     */ 
    public function setPreferentialCustomer(string $preferentialCustomer)
    {
        $this->preferentialCustomer = $preferentialCustomer;

        return $this;
    }



    private string $primaryContactEmailRecordId;

    /**
	 * @return string
	 */
	public function getPrimaryContactEmailRecordId(): string
	{
		return $this->primaryContactEmailRecordId;
	}

    /**
     * Set the value of primaryContactEmailRecordId
     *
     * @param string $primaryContactEmailRecordId
     *
     * @return  self
     */ 
    public function setPrimaryContactEmailRecordId(string $primaryContactEmailRecordId)
    {
        $this->primaryContactEmailRecordId = $primaryContactEmailRecordId;

        return $this;
    }



    private string $receiptOption;

    /**
	 * @return string
	 */
	public function getReceiptOption(): string
	{
		return $this->receiptOption;
	}

    /**
     * Set the value of receiptOption
     *
     * @param string $receiptOption
     *
     * @return  self
     */ 
    public function setReceiptOption(string $receiptOption)
    {
        $this->receiptOption = $receiptOption;

        return $this;
    }



    private string $addressBrazilianIE;

    /**
	 * @return string
	 */
	public function getAddressBrazilianIE(): string
	{
		return $this->addressBrazilianIE;
	}

    /**
     * Set the value of addressBrazilianIE
     *
     * @param string $addressBrazilianIE
     *
     * @return  self
     */ 
    public function setAddressBrazilianIE(string $addressBrazilianIE)
    {
        $this->addressBrazilianIE = $addressBrazilianIE;

        return $this;
    }



    private string $personAnniversaryMonth;

    /**
	 * @return string
	 */
	public function getPersonAnniversaryMonth(): string
	{
		return $this->personAnniversaryMonth;
	}

    /**
     * Set the value of personAnniversaryMonth
     *
     * @param string $personAnniversaryMonth
     *
     * @return  self
     */ 
    public function setPersonAnniversaryMonth(string $personAnniversaryMonth)
    {
        $this->personAnniversaryMonth = $personAnniversaryMonth;

        return $this;
    }



    private string $primaryContactPhoneExtension;

    /**
	 * @return string
	 */
	public function getPrimaryContactPhoneExtension(): string
	{
		return $this->primaryContactPhoneExtension;
	}

    /**
     * Set the value of primaryContactPhoneExtension
     *
     * @param string $primaryContactPhoneExtension
     *
     * @return  self
     */ 
    public function setPrimaryContactPhoneExtension(string $primaryContactPhoneExtension)
    {
        $this->primaryContactPhoneExtension = $primaryContactPhoneExtension;

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



    private string $primaryContactPhonePurpose;

    /**
	 * @return string
	 */
	public function getPrimaryContactPhonePurpose(): string
	{
		return $this->primaryContactPhonePurpose;
	}

    /**
     * Set the value of primaryContactPhonePurpose
     *
     * @param string $primaryContactPhonePurpose
     *
     * @return  self
     */ 
    public function setPrimaryContactPhonePurpose(string $primaryContactPhonePurpose)
    {
        $this->primaryContactPhonePurpose = $primaryContactPhonePurpose;

        return $this;
    }



    private string $exportSale;

    /**
	 * @return string
	 */
	public function getExportSale(): string
	{
		return $this->exportSale;
	}

    /**
     * Set the value of exportSale
     *
     * @param string $exportSale
     *
     * @return  self
     */ 
    public function setExportSale(string $exportSale)
    {
        $this->exportSale = $exportSale;

        return $this;
    }



    private string $organizationNumber;

    /**
	 * @return string
	 */
	public function getOrganizationNumber(): string
	{
		return $this->organizationNumber;
	}

    /**
     * Set the value of organizationNumber
     *
     * @param string $organizationNumber
     *
     * @return  self
     */ 
    public function setOrganizationNumber(string $organizationNumber)
    {
        $this->organizationNumber = $organizationNumber;

        return $this;
    }



    private string $invoicePostingType;

    /**
	 * @return string
	 */
	public function getInvoicePostingType(): string
	{
		return $this->invoicePostingType;
	}

    /**
     * Set the value of invoicePostingType
     *
     * @param string $invoicePostingType
     *
     * @return  self
     */ 
    public function setInvoicePostingType(string $invoicePostingType)
    {
        $this->invoicePostingType = $invoicePostingType;

        return $this;
    }



    private string $creditCardAddressVerificationIsAuthorizationVoidedOnFailure;

    /**
	 * @return string
	 */
	public function getCreditCardAddressVerificationIsAuthorizationVoidedOnFailure(): string
	{
		return $this->creditCardAddressVerificationIsAuthorizationVoidedOnFailure;
	}

    /**
     * Set the value of creditCardAddressVerificationIsAuthorizationVoidedOnFailure
     *
     * @param string $creditCardAddressVerificationIsAuthorizationVoidedOnFailure
     *
     * @return  self
     */ 
    public function setCreditCardAddressVerificationIsAuthorizationVoidedOnFailure(string $creditCardAddressVerificationIsAuthorizationVoidedOnFailure)
    {
        $this->creditCardAddressVerificationIsAuthorizationVoidedOnFailure = $creditCardAddressVerificationIsAuthorizationVoidedOnFailure;

        return $this;
    }



    private string $invoiceAddressState;

    /**
	 * @return string
	 */
	public function getInvoiceAddressState(): string
	{
		return $this->invoiceAddressState;
	}

    /**
     * Set the value of invoiceAddressState
     *
     * @param string $invoiceAddressState
     *
     * @return  self
     */ 
    public function setInvoiceAddressState(string $invoiceAddressState)
    {
        $this->invoiceAddressState = $invoiceAddressState;

        return $this;
    }



    private string $receiptCalendar;

    /**
	 * @return string
	 */
	public function getReceiptCalendar(): string
	{
		return $this->receiptCalendar;
	}

    /**
     * Set the value of receiptCalendar
     *
     * @param string $receiptCalendar
     *
     * @return  self
     */ 
    public function setReceiptCalendar(string $receiptCalendar)
    {
        $this->receiptCalendar = $receiptCalendar;

        return $this;
    }



    private string $deliveryAddressState;

    /**
	 * @return string
	 */
	public function getDeliveryAddressState(): string
	{
		return $this->deliveryAddressState;
	}

    /**
     * Set the value of deliveryAddressState
     *
     * @param string $deliveryAddressState
     *
     * @return  self
     */ 
    public function setDeliveryAddressState(string $deliveryAddressState)
    {
        $this->deliveryAddressState = $deliveryAddressState;

        return $this;
    }



    private string $stateInscription;

    /**
	 * @return string
	 */
	public function getStateInscription(): string
	{
		return $this->stateInscription;
	}

    /**
     * Set the value of stateInscription
     *
     * @param string $stateInscription
     *
     * @return  self
     */ 
    public function setStateInscription(string $stateInscription)
    {
        $this->stateInscription = $stateInscription;

        return $this;
    }



    private string $personLastNamePrefix;

    /**
	 * @return string
	 */
	public function getPersonLastNamePrefix(): string
	{
		return $this->personLastNamePrefix;
	}

    /**
     * Set the value of personLastNamePrefix
     *
     * @param string $personLastNamePrefix
     *
     * @return  self
     */ 
    public function setPersonLastNamePrefix(string $personLastNamePrefix)
    {
        $this->personLastNamePrefix = $personLastNamePrefix;

        return $this;
    }



    private string $salesReturnTaxGroup;

    /**
	 * @return string
	 */
	public function getSalesReturnTaxGroup(): string
	{
		return $this->salesReturnTaxGroup;
	}

    /**
     * Set the value of salesReturnTaxGroup
     *
     * @param string $salesReturnTaxGroup
     *
     * @return  self
     */ 
    public function setSalesReturnTaxGroup(string $salesReturnTaxGroup)
    {
        $this->salesReturnTaxGroup = $salesReturnTaxGroup;

        return $this;
    }



    private string $primaryContactURLDescription;

    /**
	 * @return string
	 */
	public function getPrimaryContactURLDescription(): string
	{
		return $this->primaryContactURLDescription;
	}

    /**
     * Set the value of primaryContactURLDescription
     *
     * @param string $primaryContactURLDescription
     *
     * @return  self
     */ 
    public function setPrimaryContactURLDescription(string $primaryContactURLDescription)
    {
        $this->primaryContactURLDescription = $primaryContactURLDescription;

        return $this;
    }



    private string $customerWithholdingContributionType;

    /**
	 * @return string
	 */
	public function getCustomerWithholdingContributionType(): string
	{
		return $this->customerWithholdingContributionType;
	}

    /**
     * Set the value of customerWithholdingContributionType
     *
     * @param string $customerWithholdingContributionType
     *
     * @return  self
     */ 
    public function setCustomerWithholdingContributionType(string $customerWithholdingContributionType)
    {
        $this->customerWithholdingContributionType = $customerWithholdingContributionType;

        return $this;
    }



    private string $isElectronicInvoice;

    /**
	 * @return string
	 */
	public function getIsElectronicInvoice(): string
	{
		return $this->isElectronicInvoice;
	}

    /**
     * Set the value of isElectronicInvoice
     *
     * @param string $isElectronicInvoice
     *
     * @return  self
     */ 
    public function setIsElectronicInvoice(string $isElectronicInvoice)
    {
        $this->isElectronicInvoice = $isElectronicInvoice;

        return $this;
    }



    private string $federalAgencyLocationCode;

    /**
	 * @return string
	 */
	public function getFederalAgencyLocationCode(): string
	{
		return $this->federalAgencyLocationCode;
	}

    /**
     * Set the value of federalAgencyLocationCode
     *
     * @param string $federalAgencyLocationCode
     *
     * @return  self
     */ 
    public function setFederalAgencyLocationCode(string $federalAgencyLocationCode)
    {
        $this->federalAgencyLocationCode = $federalAgencyLocationCode;

        return $this;
    }



    private string $giroTypeFreeTextInvoice;

    /**
	 * @return string
	 */
	public function getGiroTypeFreeTextInvoice(): string
	{
		return $this->giroTypeFreeTextInvoice;
	}

    /**
     * Set the value of giroTypeFreeTextInvoice
     *
     * @param string $giroTypeFreeTextInvoice
     *
     * @return  self
     */ 
    public function setGiroTypeFreeTextInvoice(string $giroTypeFreeTextInvoice)
    {
        $this->giroTypeFreeTextInvoice = $giroTypeFreeTextInvoice;

        return $this;
    }



    private string $deliveryAddressValidTo;

    /**
	 * @return string
	 */
	public function getDeliveryAddressValidTo(): string
	{
		return $this->deliveryAddressValidTo;
	}

    /**
     * Set the value of deliveryAddressValidTo
     *
     * @param string $deliveryAddressValidTo
     *
     * @return  self
     */ 
    public function setDeliveryAddressValidTo(string $deliveryAddressValidTo)
    {
        $this->deliveryAddressValidTo = $deliveryAddressValidTo;

        return $this;
    }



    private string $personPhoneticMiddleName;

    /**
	 * @return string
	 */
	public function getPersonPhoneticMiddleName(): string
	{
		return $this->personPhoneticMiddleName;
	}

    /**
     * Set the value of personPhoneticMiddleName
     *
     * @param string $personPhoneticMiddleName
     *
     * @return  self
     */ 
    public function setPersonPhoneticMiddleName(string $personPhoneticMiddleName)
    {
        $this->personPhoneticMiddleName = $personPhoneticMiddleName;

        return $this;
    }



    private string $organizationABCCode;

    /**
	 * @return string
	 */
	public function getOrganizationABCCode(): string
	{
		return $this->organizationABCCode;
	}

    /**
     * Set the value of organizationABCCode
     *
     * @param string $organizationABCCode
     *
     * @return  self
     */ 
    public function setOrganizationABCCode(string $organizationABCCode)
    {
        $this->organizationABCCode = $organizationABCCode;

        return $this;
    }



    private string $brazilianCNAE;

    /**
	 * @return string
	 */
	public function getBrazilianCNAE(): string
	{
		return $this->brazilianCNAE;
	}

    /**
     * Set the value of brazilianCNAE
     *
     * @param string $brazilianCNAE
     *
     * @return  self
     */ 
    public function setBrazilianCNAE(string $brazilianCNAE)
    {
        $this->brazilianCNAE = $brazilianCNAE;

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



    private string $nAFCode;

    /**
	 * @return string
	 */
	public function getNAFCode(): string
	{
		return $this->nAFCode;
	}

    /**
     * Set the value of nAFCode
     *
     * @param string $nAFCode
     *
     * @return  self
     */ 
    public function setNAFCode(string $nAFCode)
    {
        $this->nAFCode = $nAFCode;

        return $this;
    }



    private string $addressLatitude;

    /**
	 * @return string
	 */
	public function getAddressLatitude(): string
	{
		return $this->addressLatitude;
	}

    /**
     * Set the value of addressLatitude
     *
     * @param string $addressLatitude
     *
     * @return  self
     */ 
    public function setAddressLatitude(string $addressLatitude)
    {
        $this->addressLatitude = $addressLatitude;

        return $this;
    }



    private string $totalDiscountCode;

    /**
	 * @return string
	 */
	public function getTotalDiscountCode(): string
	{
		return $this->totalDiscountCode;
	}

    /**
     * Set the value of totalDiscountCode
     *
     * @param string $totalDiscountCode
     *
     * @return  self
     */ 
    public function setTotalDiscountCode(string $totalDiscountCode)
    {
        $this->totalDiscountCode = $totalDiscountCode;

        return $this;
    }



    private string $addressLocationRoles;

    /**
	 * @return string
	 */
	public function getAddressLocationRoles(): string
	{
		return $this->addressLocationRoles;
	}

    /**
     * Set the value of addressLocationRoles
     *
     * @param string $addressLocationRoles
     *
     * @return  self
     */ 
    public function setAddressLocationRoles(string $addressLocationRoles)
    {
        $this->addressLocationRoles = $addressLocationRoles;

        return $this;
    }



    private string $paymentCashDiscount;

    /**
	 * @return string
	 */
	public function getPaymentCashDiscount(): string
	{
		return $this->paymentCashDiscount;
	}

    /**
     * Set the value of paymentCashDiscount
     *
     * @param string $paymentCashDiscount
     *
     * @return  self
     */ 
    public function setPaymentCashDiscount(string $paymentCashDiscount)
    {
        $this->paymentCashDiscount = $paymentCashDiscount;

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



    private string $collectionLetterCode;

    /**
	 * @return string
	 */
	public function getCollectionLetterCode(): string
	{
		return $this->collectionLetterCode;
	}

    /**
     * Set the value of collectionLetterCode
     *
     * @param string $collectionLetterCode
     *
     * @return  self
     */ 
    public function setCollectionLetterCode(string $collectionLetterCode)
    {
        $this->collectionLetterCode = $collectionLetterCode;

        return $this;
    }



    private string $eInvoiceAttachment;

    /**
	 * @return string
	 */
	public function getEInvoiceAttachment(): string
	{
		return $this->eInvoiceAttachment;
	}

    /**
     * Set the value of eInvoiceAttachment
     *
     * @param string $eInvoiceAttachment
     *
     * @return  self
     */ 
    public function setEInvoiceAttachment(string $eInvoiceAttachment)
    {
        $this->eInvoiceAttachment = $eInvoiceAttachment;

        return $this;
    }



    private string $merchantID;

    /**
	 * @return string
	 */
	public function getMerchantID(): string
	{
		return $this->merchantID;
	}

    /**
     * Set the value of merchantID
     *
     * @param string $merchantID
     *
     * @return  self
     */ 
    public function setMerchantID(string $merchantID)
    {
        $this->merchantID = $merchantID;

        return $this;
    }



    private string $creditRating;

    /**
	 * @return string
	 */
	public function getCreditRating(): string
	{
		return $this->creditRating;
	}

    /**
     * Set the value of creditRating
     *
     * @param string $creditRating
     *
     * @return  self
     */ 
    public function setCreditRating(string $creditRating)
    {
        $this->creditRating = $creditRating;

        return $this;
    }



    private string $primaryContactFacebook;

    /**
	 * @return string
	 */
	public function getPrimaryContactFacebook(): string
	{
		return $this->primaryContactFacebook;
	}

    /**
     * Set the value of primaryContactFacebook
     *
     * @param string $primaryContactFacebook
     *
     * @return  self
     */ 
    public function setPrimaryContactFacebook(string $primaryContactFacebook)
    {
        $this->primaryContactFacebook = $primaryContactFacebook;

        return $this;
    }



    private string $deliveryAddressBuildingComplement;

    /**
	 * @return string
	 */
	public function getDeliveryAddressBuildingComplement(): string
	{
		return $this->deliveryAddressBuildingComplement;
	}

    /**
     * Set the value of deliveryAddressBuildingComplement
     *
     * @param string $deliveryAddressBuildingComplement
     *
     * @return  self
     */ 
    public function setDeliveryAddressBuildingComplement(string $deliveryAddressBuildingComplement)
    {
        $this->deliveryAddressBuildingComplement = $deliveryAddressBuildingComplement;

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



    private string $lineDiscountCode;

    /**
	 * @return string
	 */
	public function getLineDiscountCode(): string
	{
		return $this->lineDiscountCode;
	}

    /**
     * Set the value of lineDiscountCode
     *
     * @param string $lineDiscountCode
     *
     * @return  self
     */ 
    public function setLineDiscountCode(string $lineDiscountCode)
    {
        $this->lineDiscountCode = $lineDiscountCode;

        return $this;
    }



    private string $partyCountry;

    /**
	 * @return string
	 */
	public function getPartyCountry(): string
	{
		return $this->partyCountry;
	}

    /**
     * Set the value of partyCountry
     *
     * @param string $partyCountry
     *
     * @return  self
     */ 
    public function setPartyCountry(string $partyCountry)
    {
        $this->partyCountry = $partyCountry;

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



    private string $isInSuframaRegion;

    /**
	 * @return string
	 */
	public function getIsInSuframaRegion(): string
	{
		return $this->isInSuframaRegion;
	}

    /**
     * Set the value of isInSuframaRegion
     *
     * @param string $isInSuframaRegion
     *
     * @return  self
     */ 
    public function setIsInSuframaRegion(string $isInSuframaRegion)
    {
        $this->isInSuframaRegion = $isInSuframaRegion;

        return $this;
    }



    private string $isIncomingFiscalDocumentGenerated;

    /**
	 * @return string
	 */
	public function getIsIncomingFiscalDocumentGenerated(): string
	{
		return $this->isIncomingFiscalDocumentGenerated;
	}

    /**
     * Set the value of isIncomingFiscalDocumentGenerated
     *
     * @param string $isIncomingFiscalDocumentGenerated
     *
     * @return  self
     */ 
    public function setIsIncomingFiscalDocumentGenerated(string $isIncomingFiscalDocumentGenerated)
    {
        $this->isIncomingFiscalDocumentGenerated = $isIncomingFiscalDocumentGenerated;

        return $this;
    }



    private string $salesMemo;

    /**
	 * @return string
	 */
	public function getSalesMemo(): string
	{
		return $this->salesMemo;
	}

    /**
     * Set the value of salesMemo
     *
     * @param string $salesMemo
     *
     * @return  self
     */ 
    public function setSalesMemo(string $salesMemo)
    {
        $this->salesMemo = $salesMemo;

        return $this;
    }



    private string $reliefGroupId;

    /**
	 * @return string
	 */
	public function getReliefGroupId(): string
	{
		return $this->reliefGroupId;
	}

    /**
     * Set the value of reliefGroupId
     *
     * @param string $reliefGroupId
     *
     * @return  self
     */ 
    public function setReliefGroupId(string $reliefGroupId)
    {
        $this->reliefGroupId = $reliefGroupId;

        return $this;
    }



    private string $isExcludedFromInterestChargeCalculation;

    /**
	 * @return string
	 */
	public function getIsExcludedFromInterestChargeCalculation(): string
	{
		return $this->isExcludedFromInterestChargeCalculation;
	}

    /**
     * Set the value of isExcludedFromInterestChargeCalculation
     *
     * @param string $isExcludedFromInterestChargeCalculation
     *
     * @return  self
     */ 
    public function setIsExcludedFromInterestChargeCalculation(string $isExcludedFromInterestChargeCalculation)
    {
        $this->isExcludedFromInterestChargeCalculation = $isExcludedFromInterestChargeCalculation;

        return $this;
    }



    private string $statisticsGroupId;

    /**
	 * @return string
	 */
	public function getStatisticsGroupId(): string
	{
		return $this->statisticsGroupId;
	}

    /**
     * Set the value of statisticsGroupId
     *
     * @param string $statisticsGroupId
     *
     * @return  self
     */ 
    public function setStatisticsGroupId(string $statisticsGroupId)
    {
        $this->statisticsGroupId = $statisticsGroupId;

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



    private string $organizationName;

    /**
	 * @return string
	 */
	public function getOrganizationName(): string
	{
		return $this->organizationName;
	}

    /**
     * Set the value of organizationName
     *
     * @param string $organizationName
     *
     * @return  self
     */ 
    public function setOrganizationName(string $organizationName)
    {
        $this->organizationName = $organizationName;

        return $this;
    }



    private string $isOrderNumberReferenceUsed;

    /**
	 * @return string
	 */
	public function getIsOrderNumberReferenceUsed(): string
	{
		return $this->isOrderNumberReferenceUsed;
	}

    /**
     * Set the value of isOrderNumberReferenceUsed
     *
     * @param string $isOrderNumberReferenceUsed
     *
     * @return  self
     */ 
    public function setIsOrderNumberReferenceUsed(string $isOrderNumberReferenceUsed)
    {
        $this->isOrderNumberReferenceUsed = $isOrderNumberReferenceUsed;

        return $this;
    }



    private string $custClassificationId;

    /**
	 * @return string
	 */
	public function getCustClassificationId(): string
	{
		return $this->custClassificationId;
	}

    /**
     * Set the value of custClassificationId
     *
     * @param string $custClassificationId
     *
     * @return  self
     */ 
    public function setCustClassificationId(string $custClassificationId)
    {
        $this->custClassificationId = $custClassificationId;

        return $this;
    }



    private string $addressValidTo;

    /**
	 * @return string
	 */
	public function getAddressValidTo(): string
	{
		return $this->addressValidTo;
	}

    /**
     * Set the value of addressValidTo
     *
     * @param string $addressValidTo
     *
     * @return  self
     */ 
    public function setAddressValidTo(string $addressValidTo)
    {
        $this->addressValidTo = $addressValidTo;

        return $this;
    }



    private string $federalComments;

    /**
	 * @return string
	 */
	public function getFederalComments(): string
	{
		return $this->federalComments;
	}

    /**
     * Set the value of federalComments
     *
     * @param string $federalComments
     *
     * @return  self
     */ 
    public function setFederalComments(string $federalComments)
    {
        $this->federalComments = $federalComments;

        return $this;
    }



    private string $personGender;

    /**
	 * @return string
	 */
	public function getPersonGender(): string
	{
		return $this->personGender;
	}

    /**
     * Set the value of personGender
     *
     * @param string $personGender
     *
     * @return  self
     */ 
    public function setPersonGender(string $personGender)
    {
        $this->personGender = $personGender;

        return $this;
    }



    private string $paymentTerms;

    /**
	 * @return string
	 */
	public function getPaymentTerms(): string
	{
		return $this->paymentTerms;
	}

    /**
     * Set the value of paymentTerms
     *
     * @param string $paymentTerms
     *
     * @return  self
     */ 
    public function setPaymentTerms(string $paymentTerms)
    {
        $this->paymentTerms = $paymentTerms;

        return $this;
    }



    private string $primaryContactPhoneDescription;

    /**
	 * @return string
	 */
	public function getPrimaryContactPhoneDescription(): string
	{
		return $this->primaryContactPhoneDescription;
	}

    /**
     * Set the value of primaryContactPhoneDescription
     *
     * @param string $primaryContactPhoneDescription
     *
     * @return  self
     */ 
    public function setPrimaryContactPhoneDescription(string $primaryContactPhoneDescription)
    {
        $this->primaryContactPhoneDescription = $primaryContactPhoneDescription;

        return $this;
    }



    private string $addressPostbox;

    /**
	 * @return string
	 */
	public function getAddressPostbox(): string
	{
		return $this->addressPostbox;
	}

    /**
     * Set the value of addressPostbox
     *
     * @param string $addressPostbox
     *
     * @return  self
     */ 
    public function setAddressPostbox(string $addressPostbox)
    {
        $this->addressPostbox = $addressPostbox;

        return $this;
    }



    private string $salesSubsegmentId;

    /**
	 * @return string
	 */
	public function getSalesSubsegmentId(): string
	{
		return $this->salesSubsegmentId;
	}

    /**
     * Set the value of salesSubsegmentId
     *
     * @param string $salesSubsegmentId
     *
     * @return  self
     */ 
    public function setSalesSubsegmentId(string $salesSubsegmentId)
    {
        $this->salesSubsegmentId = $salesSubsegmentId;

        return $this;
    }



    private string $customerRebateGroupId;

    /**
	 * @return string
	 */
	public function getCustomerRebateGroupId(): string
	{
		return $this->customerRebateGroupId;
	}

    /**
     * Set the value of customerRebateGroupId
     *
     * @param string $customerRebateGroupId
     *
     * @return  self
     */ 
    public function setCustomerRebateGroupId(string $customerRebateGroupId)
    {
        $this->customerRebateGroupId = $customerRebateGroupId;

        return $this;
    }



    private string $addressCounty;

    /**
	 * @return string
	 */
	public function getAddressCounty(): string
	{
		return $this->addressCounty;
	}

    /**
     * Set the value of addressCounty
     *
     * @param string $addressCounty
     *
     * @return  self
     */ 
    public function setAddressCounty(string $addressCounty)
    {
        $this->addressCounty = $addressCounty;

        return $this;
    }



    private string $primaryContactURLRecordId;

    /**
	 * @return string
	 */
	public function getPrimaryContactURLRecordId(): string
	{
		return $this->primaryContactURLRecordId;
	}

    /**
     * Set the value of primaryContactURLRecordId
     *
     * @param string $primaryContactURLRecordId
     *
     * @return  self
     */ 
    public function setPrimaryContactURLRecordId(string $primaryContactURLRecordId)
    {
        $this->primaryContactURLRecordId = $primaryContactURLRecordId;

        return $this;
    }



    private string $isICMSContributor;

    /**
	 * @return string
	 */
	public function getIsICMSContributor(): string
	{
		return $this->isICMSContributor;
	}

    /**
     * Set the value of isICMSContributor
     *
     * @param string $isICMSContributor
     *
     * @return  self
     */ 
    public function setIsICMSContributor(string $isICMSContributor)
    {
        $this->isICMSContributor = $isICMSContributor;

        return $this;
    }



    private string $invoiceAddressValidTo;

    /**
	 * @return string
	 */
	public function getInvoiceAddressValidTo(): string
	{
		return $this->invoiceAddressValidTo;
	}

    /**
     * Set the value of invoiceAddressValidTo
     *
     * @param string $invoiceAddressValidTo
     *
     * @return  self
     */ 
    public function setInvoiceAddressValidTo(string $invoiceAddressValidTo)
    {
        $this->invoiceAddressValidTo = $invoiceAddressValidTo;

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



    private string $invoiceAddressValidFrom;

    /**
	 * @return string
	 */
	public function getInvoiceAddressValidFrom(): string
	{
		return $this->invoiceAddressValidFrom;
	}

    /**
     * Set the value of invoiceAddressValidFrom
     *
     * @param string $invoiceAddressValidFrom
     *
     * @return  self
     */ 
    public function setInvoiceAddressValidFrom(string $invoiceAddressValidFrom)
    {
        $this->invoiceAddressValidFrom = $invoiceAddressValidFrom;

        return $this;
    }



    private string $creditLimit;

    /**
	 * @return string
	 */
	public function getCreditLimit(): string
	{
		return $this->creditLimit;
	}

    /**
     * Set the value of creditLimit
     *
     * @param string $creditLimit
     *
     * @return  self
     */ 
    public function setCreditLimit(string $creditLimit)
    {
        $this->creditLimit = $creditLimit;

        return $this;
    }



    private string $creditCardAddressVerificationLevel;

    /**
	 * @return string
	 */
	public function getCreditCardAddressVerificationLevel(): string
	{
		return $this->creditCardAddressVerificationLevel;
	}

    /**
     * Set the value of creditCardAddressVerificationLevel
     *
     * @param string $creditCardAddressVerificationLevel
     *
     * @return  self
     */ 
    public function setCreditCardAddressVerificationLevel(string $creditCardAddressVerificationLevel)
    {
        $this->creditCardAddressVerificationLevel = $creditCardAddressVerificationLevel;

        return $this;
    }



    private string $warehouseIsEntireShipmentFilled;

    /**
	 * @return string
	 */
	public function getWarehouseIsEntireShipmentFilled(): string
	{
		return $this->warehouseIsEntireShipmentFilled;
	}

    /**
     * Set the value of warehouseIsEntireShipmentFilled
     *
     * @param string $warehouseIsEntireShipmentFilled
     *
     * @return  self
     */ 
    public function setWarehouseIsEntireShipmentFilled(string $warehouseIsEntireShipmentFilled)
    {
        $this->warehouseIsEntireShipmentFilled = $warehouseIsEntireShipmentFilled;

        return $this;
    }



    private string $packingDutyLicense;

    /**
	 * @return string
	 */
	public function getPackingDutyLicense(): string
	{
		return $this->packingDutyLicense;
	}

    /**
     * Set the value of packingDutyLicense
     *
     * @param string $packingDutyLicense
     *
     * @return  self
     */ 
    public function setPackingDutyLicense(string $packingDutyLicense)
    {
        $this->packingDutyLicense = $packingDutyLicense;

        return $this;
    }



    private string $nationalRegistryNumber;

    /**
	 * @return string
	 */
	public function getNationalRegistryNumber(): string
	{
		return $this->nationalRegistryNumber;
	}

    /**
     * Set the value of nationalRegistryNumber
     *
     * @param string $nationalRegistryNumber
     *
     * @return  self
     */ 
    public function setNationalRegistryNumber(string $nationalRegistryNumber)
    {
        $this->nationalRegistryNumber = $nationalRegistryNumber;

        return $this;
    }



    private string $siteId;

    /**
	 * @return string
	 */
	public function getSiteId(): string
	{
		return $this->siteId;
	}

    /**
     * Set the value of siteId
     *
     * @param string $siteId
     *
     * @return  self
     */ 
    public function setSiteId(string $siteId)
    {
        $this->siteId = $siteId;

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



    private string $isAllowCreateIndirectOrderLines;

    /**
	 * @return string
	 */
	public function getIsAllowCreateIndirectOrderLines(): string
	{
		return $this->isAllowCreateIndirectOrderLines;
	}

    /**
     * Set the value of isAllowCreateIndirectOrderLines
     *
     * @param string $isAllowCreateIndirectOrderLines
     *
     * @return  self
     */ 
    public function setIsAllowCreateIndirectOrderLines(string $isAllowCreateIndirectOrderLines)
    {
        $this->isAllowCreateIndirectOrderLines = $isAllowCreateIndirectOrderLines;

        return $this;
    }



    private string $primaryContactURLPurpose;

    /**
	 * @return string
	 */
	public function getPrimaryContactURLPurpose(): string
	{
		return $this->primaryContactURLPurpose;
	}

    /**
     * Set the value of primaryContactURLPurpose
     *
     * @param string $primaryContactURLPurpose
     *
     * @return  self
     */ 
    public function setPrimaryContactURLPurpose(string $primaryContactURLPurpose)
    {
        $this->primaryContactURLPurpose = $primaryContactURLPurpose;

        return $this;
    }



    private string $chargesGroupId;

    /**
	 * @return string
	 */
	public function getChargesGroupId(): string
	{
		return $this->chargesGroupId;
	}

    /**
     * Set the value of chargesGroupId
     *
     * @param string $chargesGroupId
     *
     * @return  self
     */ 
    public function setChargesGroupId(string $chargesGroupId)
    {
        $this->chargesGroupId = $chargesGroupId;

        return $this;
    }



    private string $panStatus;

    /**
	 * @return string
	 */
	public function getPanStatus(): string
	{
		return $this->panStatus;
	}

    /**
     * Set the value of panStatus
     *
     * @param string $panStatus
     *
     * @return  self
     */ 
    public function setPanStatus(string $panStatus)
    {
        $this->panStatus = $panStatus;

        return $this;
    }



    private string $commissionSalesGroupId;

    /**
	 * @return string
	 */
	public function getCommissionSalesGroupId(): string
	{
		return $this->commissionSalesGroupId;
	}

    /**
     * Set the value of commissionSalesGroupId
     *
     * @param string $commissionSalesGroupId
     *
     * @return  self
     */ 
    public function setCommissionSalesGroupId(string $commissionSalesGroupId)
    {
        $this->commissionSalesGroupId = $commissionSalesGroupId;

        return $this;
    }



    private string $nameAlias;

    /**
	 * @return string
	 */
	public function getNameAlias(): string
	{
		return $this->nameAlias;
	}

    /**
     * Set the value of nameAlias
     *
     * @param string $nameAlias
     *
     * @return  self
     */ 
    public function setNameAlias(string $nameAlias)
    {
        $this->nameAlias = $nameAlias;

        return $this;
    }



    private string $primaryContactFaxPurpose;

    /**
	 * @return string
	 */
	public function getPrimaryContactFaxPurpose(): string
	{
		return $this->primaryContactFaxPurpose;
	}

    /**
     * Set the value of primaryContactFaxPurpose
     *
     * @param string $primaryContactFaxPurpose
     *
     * @return  self
     */ 
    public function setPrimaryContactFaxPurpose(string $primaryContactFaxPurpose)
    {
        $this->primaryContactFaxPurpose = $primaryContactFaxPurpose;

        return $this;
    }



    private string $addressStreetNumber;

    /**
	 * @return string
	 */
	public function getAddressStreetNumber(): string
	{
		return $this->addressStreetNumber;
	}

    /**
     * Set the value of addressStreetNumber
     *
     * @param string $addressStreetNumber
     *
     * @return  self
     */ 
    public function setAddressStreetNumber(string $addressStreetNumber)
    {
        $this->addressStreetNumber = $addressStreetNumber;

        return $this;
    }



    private string $personLastName;

    /**
	 * @return string
	 */
	public function getPersonLastName(): string
	{
		return $this->personLastName;
	}

    /**
     * Set the value of personLastName
     *
     * @param string $personLastName
     *
     * @return  self
     */ 
    public function setPersonLastName(string $personLastName)
    {
        $this->personLastName = $personLastName;

        return $this;
    }



    private string $paymentIdType;

    /**
	 * @return string
	 */
	public function getPaymentIdType(): string
	{
		return $this->paymentIdType;
	}

    /**
     * Set the value of paymentIdType
     *
     * @param string $paymentIdType
     *
     * @return  self
     */ 
    public function setPaymentIdType(string $paymentIdType)
    {
        $this->paymentIdType = $paymentIdType;

        return $this;
    }



    private string $vendorAccount;

    /**
	 * @return string
	 */
	public function getVendorAccount(): string
	{
		return $this->vendorAccount;
	}

    /**
     * Set the value of vendorAccount
     *
     * @param string $vendorAccount
     *
     * @return  self
     */ 
    public function setVendorAccount(string $vendorAccount)
    {
        $this->vendorAccount = $vendorAccount;

        return $this;
    }



    private string $addressCountryRegionISOCode;

    /**
	 * @return string
	 */
	public function getAddressCountryRegionISOCode(): string
	{
		return $this->addressCountryRegionISOCode;
	}

    /**
     * Set the value of addressCountryRegionISOCode
     *
     * @param string $addressCountryRegionISOCode
     *
     * @return  self
     */ 
    public function setAddressCountryRegionISOCode(string $addressCountryRegionISOCode)
    {
        $this->addressCountryRegionISOCode = $addressCountryRegionISOCode;

        return $this;
    }



    private string $residenceForeignCountryRegionId;

    /**
	 * @return string
	 */
	public function getResidenceForeignCountryRegionId(): string
	{
		return $this->residenceForeignCountryRegionId;
	}

    /**
     * Set the value of residenceForeignCountryRegionId
     *
     * @param string $residenceForeignCountryRegionId
     *
     * @return  self
     */ 
    public function setResidenceForeignCountryRegionId(string $residenceForeignCountryRegionId)
    {
        $this->residenceForeignCountryRegionId = $residenceForeignCountryRegionId;

        return $this;
    }



    private string $rFCNumber;

    /**
	 * @return string
	 */
	public function getRFCNumber(): string
	{
		return $this->rFCNumber;
	}

    /**
     * Set the value of rFCNumber
     *
     * @param string $rFCNumber
     *
     * @return  self
     */ 
    public function setRFCNumber(string $rFCNumber)
    {
        $this->rFCNumber = $rFCNumber;

        return $this;
    }



    private string $personHobbies;

    /**
	 * @return string
	 */
	public function getPersonHobbies(): string
	{
		return $this->personHobbies;
	}

    /**
     * Set the value of personHobbies
     *
     * @param string $personHobbies
     *
     * @return  self
     */ 
    public function setPersonHobbies(string $personHobbies)
    {
        $this->personHobbies = $personHobbies;

        return $this;
    }



    private string $electronicLocationId;

    /**
	 * @return string
	 */
	public function getElectronicLocationId(): string
	{
		return $this->electronicLocationId;
	}

    /**
     * Set the value of electronicLocationId
     *
     * @param string $electronicLocationId
     *
     * @return  self
     */ 
    public function setElectronicLocationId(string $electronicLocationId)
    {
        $this->electronicLocationId = $electronicLocationId;

        return $this;
    }



    private string $primaryContactLinkedInPurpose;

    /**
	 * @return string
	 */
	public function getPrimaryContactLinkedInPurpose(): string
	{
		return $this->primaryContactLinkedInPurpose;
	}

    /**
     * Set the value of primaryContactLinkedInPurpose
     *
     * @param string $primaryContactLinkedInPurpose
     *
     * @return  self
     */ 
    public function setPrimaryContactLinkedInPurpose(string $primaryContactLinkedInPurpose)
    {
        $this->primaryContactLinkedInPurpose = $primaryContactLinkedInPurpose;

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



    private string $foreignCustomer;

    /**
	 * @return string
	 */
	public function getForeignCustomer(): string
	{
		return $this->foreignCustomer;
	}

    /**
     * Set the value of foreignCustomer
     *
     * @param string $foreignCustomer
     *
     * @return  self
     */ 
    public function setForeignCustomer(string $foreignCustomer)
    {
        $this->foreignCustomer = $foreignCustomer;

        return $this;
    }



    private string $customerTMAGroupId;

    /**
	 * @return string
	 */
	public function getCustomerTMAGroupId(): string
	{
		return $this->customerTMAGroupId;
	}

    /**
     * Set the value of customerTMAGroupId
     *
     * @param string $customerTMAGroupId
     *
     * @return  self
     */ 
    public function setCustomerTMAGroupId(string $customerTMAGroupId)
    {
        $this->customerTMAGroupId = $customerTMAGroupId;

        return $this;
    }



    private string $addressValidFrom;

    /**
	 * @return string
	 */
	public function getAddressValidFrom(): string
	{
		return $this->addressValidFrom;
	}

    /**
     * Set the value of addressValidFrom
     *
     * @param string $addressValidFrom
     *
     * @return  self
     */ 
    public function setAddressValidFrom(string $addressValidFrom)
    {
        $this->addressValidFrom = $addressValidFrom;

        return $this;
    }



    private string $organizationNumberOfEmployees;

    /**
	 * @return string
	 */
	public function getOrganizationNumberOfEmployees(): string
	{
		return $this->organizationNumberOfEmployees;
	}

    /**
     * Set the value of organizationNumberOfEmployees
     *
     * @param string $organizationNumberOfEmployees
     *
     * @return  self
     */ 
    public function setOrganizationNumberOfEmployees(string $organizationNumberOfEmployees)
    {
        $this->organizationNumberOfEmployees = $organizationNumberOfEmployees;

        return $this;
    }



    private string $companyType;

    /**
	 * @return string
	 */
	public function getCompanyType(): string
	{
		return $this->companyType;
	}

    /**
     * Set the value of companyType
     *
     * @param string $companyType
     *
     * @return  self
     */ 
    public function setCompanyType(string $companyType)
    {
        $this->companyType = $companyType;

        return $this;
    }



    private string $customerGroupId;

    /**
	 * @return string
	 */
	public function getCustomerGroupId(): string
	{
		return $this->customerGroupId;
	}

    /**
     * Set the value of customerGroupId
     *
     * @param string $customerGroupId
     *
     * @return  self
     */ 
    public function setCustomerGroupId(string $customerGroupId)
    {
        $this->customerGroupId = $customerGroupId;

        return $this;
    }



    private string $giroTypeInterestNote;

    /**
	 * @return string
	 */
	public function getGiroTypeInterestNote(): string
	{
		return $this->giroTypeInterestNote;
	}

    /**
     * Set the value of giroTypeInterestNote
     *
     * @param string $giroTypeInterestNote
     *
     * @return  self
     */ 
    public function setGiroTypeInterestNote(string $giroTypeInterestNote)
    {
        $this->giroTypeInterestNote = $giroTypeInterestNote;

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



    private string $deliveryReason;

    /**
	 * @return string
	 */
	public function getDeliveryReason(): string
	{
		return $this->deliveryReason;
	}

    /**
     * Set the value of deliveryReason
     *
     * @param string $deliveryReason
     *
     * @return  self
     */ 
    public function setDeliveryReason(string $deliveryReason)
    {
        $this->deliveryReason = $deliveryReason;

        return $this;
    }



    private string $taxRegistrationId;

    /**
	 * @return string
	 */
	public function getTaxRegistrationId(): string
	{
		return $this->taxRegistrationId;
	}

    /**
     * Set the value of taxRegistrationId
     *
     * @param string $taxRegistrationId
     *
     * @return  self
     */ 
    public function setTaxRegistrationId(string $taxRegistrationId)
    {
        $this->taxRegistrationId = $taxRegistrationId;

        return $this;
    }



    private string $paymentUseCashDiscount;

    /**
	 * @return string
	 */
	public function getPaymentUseCashDiscount(): string
	{
		return $this->paymentUseCashDiscount;
	}

    /**
     * Set the value of paymentUseCashDiscount
     *
     * @param string $paymentUseCashDiscount
     *
     * @return  self
     */ 
    public function setPaymentUseCashDiscount(string $paymentUseCashDiscount)
    {
        $this->paymentUseCashDiscount = $paymentUseCashDiscount;

        return $this;
    }



    private string $discountPriceGroupId;

    /**
	 * @return string
	 */
	public function getDiscountPriceGroupId(): string
	{
		return $this->discountPriceGroupId;
	}

    /**
     * Set the value of discountPriceGroupId
     *
     * @param string $discountPriceGroupId
     *
     * @return  self
     */ 
    public function setDiscountPriceGroupId(string $discountPriceGroupId)
    {
        $this->discountPriceGroupId = $discountPriceGroupId;

        return $this;
    }



    private string $addressDescription;

    /**
	 * @return string
	 */
	public function getAddressDescription(): string
	{
		return $this->addressDescription;
	}

    /**
     * Set the value of addressDescription
     *
     * @param string $addressDescription
     *
     * @return  self
     */ 
    public function setAddressDescription(string $addressDescription)
    {
        $this->addressDescription = $addressDescription;

        return $this;
    }



    private string $suframaNumber;

    /**
	 * @return string
	 */
	public function getSuframaNumber(): string
	{
		return $this->suframaNumber;
	}

    /**
     * Set the value of suframaNumber
     *
     * @param string $suframaNumber
     *
     * @return  self
     */ 
    public function setSuframaNumber(string $suframaNumber)
    {
        $this->suframaNumber = $suframaNumber;

        return $this;
    }



    private string $identificationNumber;

    /**
	 * @return string
	 */
	public function getIdentificationNumber(): string
	{
		return $this->identificationNumber;
	}

    /**
     * Set the value of identificationNumber
     *
     * @param string $identificationNumber
     *
     * @return  self
     */ 
    public function setIdentificationNumber(string $identificationNumber)
    {
        $this->identificationNumber = $identificationNumber;

        return $this;
    }



    private string $authorityOffice;

    /**
	 * @return string
	 */
	public function getAuthorityOffice(): string
	{
		return $this->authorityOffice;
	}

    /**
     * Set the value of authorityOffice
     *
     * @param string $authorityOffice
     *
     * @return  self
     */ 
    public function setAuthorityOffice(string $authorityOffice)
    {
        $this->authorityOffice = $authorityOffice;

        return $this;
    }



    private string $personPhoneticFirstName;

    /**
	 * @return string
	 */
	public function getPersonPhoneticFirstName(): string
	{
		return $this->personPhoneticFirstName;
	}

    /**
     * Set the value of personPhoneticFirstName
     *
     * @param string $personPhoneticFirstName
     *
     * @return  self
     */ 
    public function setPersonPhoneticFirstName(string $personPhoneticFirstName)
    {
        $this->personPhoneticFirstName = $personPhoneticFirstName;

        return $this;
    }



    private string $primaryContactTelexPurpose;

    /**
	 * @return string
	 */
	public function getPrimaryContactTelexPurpose(): string
	{
		return $this->primaryContactTelexPurpose;
	}

    /**
     * Set the value of primaryContactTelexPurpose
     *
     * @param string $primaryContactTelexPurpose
     *
     * @return  self
     */ 
    public function setPrimaryContactTelexPurpose(string $primaryContactTelexPurpose)
    {
        $this->primaryContactTelexPurpose = $primaryContactTelexPurpose;

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



    private string $primaryContactFacebookPurpose;

    /**
	 * @return string
	 */
	public function getPrimaryContactFacebookPurpose(): string
	{
		return $this->primaryContactFacebookPurpose;
	}

    /**
     * Set the value of primaryContactFacebookPurpose
     *
     * @param string $primaryContactFacebookPurpose
     *
     * @return  self
     */ 
    public function setPrimaryContactFacebookPurpose(string $primaryContactFacebookPurpose)
    {
        $this->primaryContactFacebookPurpose = $primaryContactFacebookPurpose;

        return $this;
    }



    private string $companyChain;

    /**
	 * @return string
	 */
	public function getCompanyChain(): string
	{
		return $this->companyChain;
	}

    /**
     * Set the value of companyChain
     *
     * @param string $companyChain
     *
     * @return  self
     */ 
    public function setCompanyChain(string $companyChain)
    {
        $this->companyChain = $companyChain;

        return $this;
    }



    private string $brazilianINSSCEI;

    /**
	 * @return string
	 */
	public function getBrazilianINSSCEI(): string
	{
		return $this->brazilianINSSCEI;
	}

    /**
     * Set the value of brazilianINSSCEI
     *
     * @param string $brazilianINSSCEI
     *
     * @return  self
     */ 
    public function setBrazilianINSSCEI(string $brazilianINSSCEI)
    {
        $this->brazilianINSSCEI = $brazilianINSSCEI;

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



    private string $primaryContactFaxDescription;

    /**
	 * @return string
	 */
	public function getPrimaryContactFaxDescription(): string
	{
		return $this->primaryContactFaxDescription;
	}

    /**
     * Set the value of primaryContactFaxDescription
     *
     * @param string $primaryContactFaxDescription
     *
     * @return  self
     */ 
    public function setPrimaryContactFaxDescription(string $primaryContactFaxDescription)
    {
        $this->primaryContactFaxDescription = $primaryContactFaxDescription;

        return $this;
    }



    private string $natureOfAssessee;

    /**
	 * @return string
	 */
	public function getNatureOfAssessee(): string
	{
		return $this->natureOfAssessee;
	}

    /**
     * Set the value of natureOfAssessee
     *
     * @param string $natureOfAssessee
     *
     * @return  self
     */ 
    public function setNatureOfAssessee(string $natureOfAssessee)
    {
        $this->natureOfAssessee = $natureOfAssessee;

        return $this;
    }



    private string $writeoffReason;

    /**
	 * @return string
	 */
	public function getWriteoffReason(): string
	{
		return $this->writeoffReason;
	}

    /**
     * Set the value of writeoffReason
     *
     * @param string $writeoffReason
     *
     * @return  self
     */ 
    public function setWriteoffReason(string $writeoffReason)
    {
        $this->writeoffReason = $writeoffReason;

        return $this;
    }



    private string $personMiddleName;

    /**
	 * @return string
	 */
	public function getPersonMiddleName(): string
	{
		return $this->personMiddleName;
	}

    /**
     * Set the value of personMiddleName
     *
     * @param string $personMiddleName
     *
     * @return  self
     */ 
    public function setPersonMiddleName(string $personMiddleName)
    {
        $this->personMiddleName = $personMiddleName;

        return $this;
    }



    private string $invoiceAddressLocationId;

    /**
	 * @return string
	 */
	public function getInvoiceAddressLocationId(): string
	{
		return $this->invoiceAddressLocationId;
	}

    /**
     * Set the value of invoiceAddressLocationId
     *
     * @param string $invoiceAddressLocationId
     *
     * @return  self
     */ 
    public function setInvoiceAddressLocationId(string $invoiceAddressLocationId)
    {
        $this->invoiceAddressLocationId = $invoiceAddressLocationId;

        return $this;
    }



    private string $personPhoneticLastName;

    /**
	 * @return string
	 */
	public function getPersonPhoneticLastName(): string
	{
		return $this->personPhoneticLastName;
	}

    /**
     * Set the value of personPhoneticLastName
     *
     * @param string $personPhoneticLastName
     *
     * @return  self
     */ 
    public function setPersonPhoneticLastName(string $personPhoneticLastName)
    {
        $this->personPhoneticLastName = $personPhoneticLastName;

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



    private string $addressStreet;

    /**
	 * @return string
	 */
	public function getAddressStreet(): string
	{
		return $this->addressStreet;
	}

    /**
     * Set the value of addressStreet
     *
     * @param string $addressStreet
     *
     * @return  self
     */ 
    public function setAddressStreet(string $addressStreet)
    {
        $this->addressStreet = $addressStreet;

        return $this;
    }



    private string $isPurchRequestUsed;

    /**
	 * @return string
	 */
	public function getIsPurchRequestUsed(): string
	{
		return $this->isPurchRequestUsed;
	}

    /**
     * Set the value of isPurchRequestUsed
     *
     * @param string $isPurchRequestUsed
     *
     * @return  self
     */ 
    public function setIsPurchRequestUsed(string $isPurchRequestUsed)
    {
        $this->isPurchRequestUsed = $isPurchRequestUsed;

        return $this;
    }



    private string $isPublicSector_IT;

    /**
	 * @return string
	 */
	public function getIsPublicSector_IT(): string
	{
		return $this->isPublicSector_IT;
	}

    /**
     * Set the value of isPublicSector_IT
     *
     * @param string $isPublicSector_IT
     *
     * @return  self
     */ 
    public function setIsPublicSector_IT(string $isPublicSector_IT)
    {
        $this->isPublicSector_IT = $isPublicSector_IT;

        return $this;
    }



    private string $credManEligibleCreditLimitCurrency;

    /**
	 * @return string
	 */
	public function getCredManEligibleCreditLimitCurrency(): string
	{
		return $this->credManEligibleCreditLimitCurrency;
	}

    /**
     * Set the value of credManEligibleCreditLimitCurrency
     *
     * @param string $credManEligibleCreditLimitCurrency
     *
     * @return  self
     */ 
    public function setCredManEligibleCreditLimitCurrency(string $credManEligibleCreditLimitCurrency)
    {
        $this->credManEligibleCreditLimitCurrency = $credManEligibleCreditLimitCurrency;

        return $this;
    }



    private string $credManCustCreditMaxAlt;

    /**
	 * @return string
	 */
	public function getCredManCustCreditMaxAlt(): string
	{
		return $this->credManCustCreditMaxAlt;
	}

    /**
     * Set the value of credManCustCreditMaxAlt
     *
     * @param string $credManCustCreditMaxAlt
     *
     * @return  self
     */ 
    public function setCredManCustCreditMaxAlt(string $credManCustCreditMaxAlt)
    {
        $this->credManCustCreditMaxAlt = $credManCustCreditMaxAlt;

        return $this;
    }



    private string $credManStatusReasonId;

    /**
	 * @return string
	 */
	public function getCredManStatusReasonId(): string
	{
		return $this->credManStatusReasonId;
	}

    /**
     * Set the value of credManStatusReasonId
     *
     * @param string $credManStatusReasonId
     *
     * @return  self
     */ 
    public function setCredManStatusReasonId(string $credManStatusReasonId)
    {
        $this->credManStatusReasonId = $credManStatusReasonId;

        return $this;
    }



    private string $credManEligibleCreditMax;

    /**
	 * @return string
	 */
	public function getCredManEligibleCreditMax(): string
	{
		return $this->credManEligibleCreditMax;
	}

    /**
     * Set the value of credManEligibleCreditMax
     *
     * @param string $credManEligibleCreditMax
     *
     * @return  self
     */ 
    public function setCredManEligibleCreditMax(string $credManEligibleCreditMax)
    {
        $this->credManEligibleCreditMax = $credManEligibleCreditMax;

        return $this;
    }



    private string $credManCustUnlimitedCredit;

    /**
	 * @return string
	 */
	public function getCredManCustUnlimitedCredit(): string
	{
		return $this->credManCustUnlimitedCredit;
	}

    /**
     * Set the value of credManCustUnlimitedCredit
     *
     * @param string $credManCustUnlimitedCredit
     *
     * @return  self
     */ 
    public function setCredManCustUnlimitedCredit(string $credManCustUnlimitedCredit)
    {
        $this->credManCustUnlimitedCredit = $credManCustUnlimitedCredit;

        return $this;
    }



    private string $credManEligibleCreditLimitDate;

    /**
	 * @return string
	 */
	public function getCredManEligibleCreditLimitDate(): string
	{
		return $this->credManEligibleCreditLimitDate;
	}

    /**
     * Set the value of credManEligibleCreditLimitDate
     *
     * @param string $credManEligibleCreditLimitDate
     *
     * @return  self
     */ 
    public function setCredManEligibleCreditLimitDate(string $credManEligibleCreditLimitDate)
    {
        $this->credManEligibleCreditLimitDate = $credManEligibleCreditLimitDate;

        return $this;
    }



    private string $credManWithAgency;

    /**
	 * @return string
	 */
	public function getCredManWithAgency(): string
	{
		return $this->credManWithAgency;
	}

    /**
     * Set the value of credManWithAgency
     *
     * @param string $credManWithAgency
     *
     * @return  self
     */ 
    public function setCredManWithAgency(string $credManWithAgency)
    {
        $this->credManWithAgency = $credManWithAgency;

        return $this;
    }



    private string $credManCreditLimitDate;

    /**
	 * @return string
	 */
	public function getCredManCreditLimitDate(): string
	{
		return $this->credManCreditLimitDate;
	}

    /**
     * Set the value of credManCreditLimitDate
     *
     * @param string $credManCreditLimitDate
     *
     * @return  self
     */ 
    public function setCredManCreditLimitDate(string $credManCreditLimitDate)
    {
        $this->credManCreditLimitDate = $credManCreditLimitDate;

        return $this;
    }



    private string $credManNextSchedReviewDate;

    /**
	 * @return string
	 */
	public function getCredManNextSchedReviewDate(): string
	{
		return $this->credManNextSchedReviewDate;
	}

    /**
     * Set the value of credManNextSchedReviewDate
     *
     * @param string $credManNextSchedReviewDate
     *
     * @return  self
     */ 
    public function setCredManNextSchedReviewDate(string $credManNextSchedReviewDate)
    {
        $this->credManNextSchedReviewDate = $credManNextSchedReviewDate;

        return $this;
    }



    private string $credManLastReviewDate;

    /**
	 * @return string
	 */
	public function getCredManLastReviewDate(): string
	{
		return $this->credManLastReviewDate;
	}

    /**
     * Set the value of credManLastReviewDate
     *
     * @param string $credManLastReviewDate
     *
     * @return  self
     */ 
    public function setCredManLastReviewDate(string $credManLastReviewDate)
    {
        $this->credManLastReviewDate = $credManLastReviewDate;

        return $this;
    }



    private string $credManCustomerSince;

    /**
	 * @return string
	 */
	public function getCredManCustomerSince(): string
	{
		return $this->credManCustomerSince;
	}

    /**
     * Set the value of credManCustomerSince
     *
     * @param string $credManCustomerSince
     *
     * @return  self
     */ 
    public function setCredManCustomerSince(string $credManCustomerSince)
    {
        $this->credManCustomerSince = $credManCustomerSince;

        return $this;
    }



    private string $credManTitleHeld;

    /**
	 * @return string
	 */
	public function getCredManTitleHeld(): string
	{
		return $this->credManTitleHeld;
	}

    /**
     * Set the value of credManTitleHeld
     *
     * @param string $credManTitleHeld
     *
     * @return  self
     */ 
    public function setCredManTitleHeld(string $credManTitleHeld)
    {
        $this->credManTitleHeld = $credManTitleHeld;

        return $this;
    }



    private string $credManExclude;

    /**
	 * @return string
	 */
	public function getCredManExclude(): string
	{
		return $this->credManExclude;
	}

    /**
     * Set the value of credManExclude
     *
     * @param string $credManExclude
     *
     * @return  self
     */ 
    public function setCredManExclude(string $credManExclude)
    {
        $this->credManExclude = $credManExclude;

        return $this;
    }



    private string $credManBusinessStarted;

    /**
	 * @return string
	 */
	public function getCredManBusinessStarted(): string
	{
		return $this->credManBusinessStarted;
	}

    /**
     * Set the value of credManBusinessStarted
     *
     * @param string $credManBusinessStarted
     *
     * @return  self
     */ 
    public function setCredManBusinessStarted(string $credManBusinessStarted)
    {
        $this->credManBusinessStarted = $credManBusinessStarted;

        return $this;
    }



    private string $credManNotes;

    /**
	 * @return string
	 */
	public function getCredManNotes(): string
	{
		return $this->credManNotes;
	}

    /**
     * Set the value of credManNotes
     *
     * @param string $credManNotes
     *
     * @return  self
     */ 
    public function setCredManNotes(string $credManNotes)
    {
        $this->credManNotes = $credManNotes;

        return $this;
    }



    private string $credManCollectionGroupId;

    /**
	 * @return string
	 */
	public function getCredManCollectionGroupId(): string
	{
		return $this->credManCollectionGroupId;
	}

    /**
     * Set the value of credManCollectionGroupId
     *
     * @param string $credManCollectionGroupId
     *
     * @return  self
     */ 
    public function setCredManCollectionGroupId(string $credManCollectionGroupId)
    {
        $this->credManCollectionGroupId = $credManCollectionGroupId;

        return $this;
    }



    private string $credManGroupId;

    /**
	 * @return string
	 */
	public function getCredManGroupId(): string
	{
		return $this->credManGroupId;
	}

    /**
     * Set the value of credManGroupId
     *
     * @param string $credManGroupId
     *
     * @return  self
     */ 
    public function setCredManGroupId(string $credManGroupId)
    {
        $this->credManGroupId = $credManGroupId;

        return $this;
    }



    private string $credManAccountStatusId;

    /**
	 * @return string
	 */
	public function getCredManAccountStatusId(): string
	{
		return $this->credManAccountStatusId;
	}

    /**
     * Set the value of credManAccountStatusId
     *
     * @param string $credManAccountStatusId
     *
     * @return  self
     */ 
    public function setCredManAccountStatusId(string $credManAccountStatusId)
    {
        $this->credManAccountStatusId = $credManAccountStatusId;

        return $this;
    }



    private string $credManCreditLimitExpiryDate;

    /**
	 * @return string
	 */
	public function getCredManCreditLimitExpiryDate(): string
	{
		return $this->credManCreditLimitExpiryDate;
	}

    /**
     * Set the value of credManCreditLimitExpiryDate
     *
     * @param string $credManCreditLimitExpiryDate
     *
     * @return  self
     */ 
    public function setCredManCreditLimitExpiryDate(string $credManCreditLimitExpiryDate)
    {
        $this->credManCreditLimitExpiryDate = $credManCreditLimitExpiryDate;

        return $this;
    }



    private string $eXAEPlatformEnabled;

    /**
	 * @return string
	 */
	public function getEXAEPlatformEnabled(): string
	{
		return $this->eXAEPlatformEnabled;
	}

    /**
     * Set the value of eXAEPlatformEnabled
     *
     * @param string $eXAEPlatformEnabled
     *
     * @return  self
     */ 
    public function setEXAEPlatformEnabled(string $eXAEPlatformEnabled)
    {
        $this->eXAEPlatformEnabled = $eXAEPlatformEnabled;

        return $this;
    }



    private string $fNDFormNoteTypeConfirmation;

    /**
	 * @return string
	 */
	public function getFNDFormNoteTypeConfirmation(): string
	{
		return $this->fNDFormNoteTypeConfirmation;
	}

    /**
     * Set the value of fNDFormNoteTypeConfirmation
     *
     * @param string $fNDFormNoteTypeConfirmation
     *
     * @return  self
     */ 
    public function setFNDFormNoteTypeConfirmation(string $fNDFormNoteTypeConfirmation)
    {
        $this->fNDFormNoteTypeConfirmation = $fNDFormNoteTypeConfirmation;

        return $this;
    }



    private string $fNDFormNotePackingSlip;

    /**
	 * @return string
	 */
	public function getFNDFormNotePackingSlip(): string
	{
		return $this->fNDFormNotePackingSlip;
	}

    /**
     * Set the value of fNDFormNotePackingSlip
     *
     * @param string $fNDFormNotePackingSlip
     *
     * @return  self
     */ 
    public function setFNDFormNotePackingSlip(string $fNDFormNotePackingSlip)
    {
        $this->fNDFormNotePackingSlip = $fNDFormNotePackingSlip;

        return $this;
    }



    private string $fNDFormNoteTypePickingList;

    /**
	 * @return string
	 */
	public function getFNDFormNoteTypePickingList(): string
	{
		return $this->fNDFormNoteTypePickingList;
	}

    /**
     * Set the value of fNDFormNoteTypePickingList
     *
     * @param string $fNDFormNoteTypePickingList
     *
     * @return  self
     */ 
    public function setFNDFormNoteTypePickingList(string $fNDFormNoteTypePickingList)
    {
        $this->fNDFormNoteTypePickingList = $fNDFormNoteTypePickingList;

        return $this;
    }



    private string $fNDFormNoteProduction;

    /**
	 * @return string
	 */
	public function getFNDFormNoteProduction(): string
	{
		return $this->fNDFormNoteProduction;
	}

    /**
     * Set the value of fNDFormNoteProduction
     *
     * @param string $fNDFormNoteProduction
     *
     * @return  self
     */ 
    public function setFNDFormNoteProduction(string $fNDFormNoteProduction)
    {
        $this->fNDFormNoteProduction = $fNDFormNoteProduction;

        return $this;
    }



    private string $fNDFormNotePickingList;

    /**
	 * @return string
	 */
	public function getFNDFormNotePickingList(): string
	{
		return $this->fNDFormNotePickingList;
	}

    /**
     * Set the value of fNDFormNotePickingList
     *
     * @param string $fNDFormNotePickingList
     *
     * @return  self
     */ 
    public function setFNDFormNotePickingList(string $fNDFormNotePickingList)
    {
        $this->fNDFormNotePickingList = $fNDFormNotePickingList;

        return $this;
    }



    private string $fNDFormNoteConfirmation;

    /**
	 * @return string
	 */
	public function getFNDFormNoteConfirmation(): string
	{
		return $this->fNDFormNoteConfirmation;
	}

    /**
     * Set the value of fNDFormNoteConfirmation
     *
     * @param string $fNDFormNoteConfirmation
     *
     * @return  self
     */ 
    public function setFNDFormNoteConfirmation(string $fNDFormNoteConfirmation)
    {
        $this->fNDFormNoteConfirmation = $fNDFormNoteConfirmation;

        return $this;
    }



    private string $fNDFormNoteTypeInvoice;

    /**
	 * @return string
	 */
	public function getFNDFormNoteTypeInvoice(): string
	{
		return $this->fNDFormNoteTypeInvoice;
	}

    /**
     * Set the value of fNDFormNoteTypeInvoice
     *
     * @param string $fNDFormNoteTypeInvoice
     *
     * @return  self
     */ 
    public function setFNDFormNoteTypeInvoice(string $fNDFormNoteTypeInvoice)
    {
        $this->fNDFormNoteTypeInvoice = $fNDFormNoteTypeInvoice;

        return $this;
    }



    private string $fNDFormNoteTypeQuotation;

    /**
	 * @return string
	 */
	public function getFNDFormNoteTypeQuotation(): string
	{
		return $this->fNDFormNoteTypeQuotation;
	}

    /**
     * Set the value of fNDFormNoteTypeQuotation
     *
     * @param string $fNDFormNoteTypeQuotation
     *
     * @return  self
     */ 
    public function setFNDFormNoteTypeQuotation(string $fNDFormNoteTypeQuotation)
    {
        $this->fNDFormNoteTypeQuotation = $fNDFormNoteTypeQuotation;

        return $this;
    }



    private string $fNDFormNoteTypePackingSlip;

    /**
	 * @return string
	 */
	public function getFNDFormNoteTypePackingSlip(): string
	{
		return $this->fNDFormNoteTypePackingSlip;
	}

    /**
     * Set the value of fNDFormNoteTypePackingSlip
     *
     * @param string $fNDFormNoteTypePackingSlip
     *
     * @return  self
     */ 
    public function setFNDFormNoteTypePackingSlip(string $fNDFormNoteTypePackingSlip)
    {
        $this->fNDFormNoteTypePackingSlip = $fNDFormNoteTypePackingSlip;

        return $this;
    }



    private string $fNDFormNoteQuotation;

    /**
	 * @return string
	 */
	public function getFNDFormNoteQuotation(): string
	{
		return $this->fNDFormNoteQuotation;
	}

    /**
     * Set the value of fNDFormNoteQuotation
     *
     * @param string $fNDFormNoteQuotation
     *
     * @return  self
     */ 
    public function setFNDFormNoteQuotation(string $fNDFormNoteQuotation)
    {
        $this->fNDFormNoteQuotation = $fNDFormNoteQuotation;

        return $this;
    }



    private string $fNDFormNoteInvoice;

    /**
	 * @return string
	 */
	public function getFNDFormNoteInvoice(): string
	{
		return $this->fNDFormNoteInvoice;
	}

    /**
     * Set the value of fNDFormNoteInvoice
     *
     * @param string $fNDFormNoteInvoice
     *
     * @return  self
     */ 
    public function setFNDFormNoteInvoice(string $fNDFormNoteInvoice)
    {
        $this->fNDFormNoteInvoice = $fNDFormNoteInvoice;

        return $this;
    }



    private string $fNDFormNoteTypeProduction;

    /**
	 * @return string
	 */
	public function getFNDFormNoteTypeProduction(): string
	{
		return $this->fNDFormNoteTypeProduction;
	}

    /**
     * Set the value of fNDFormNoteTypeProduction
     *
     * @param string $fNDFormNoteTypeProduction
     *
     * @return  self
     */ 
    public function setFNDFormNoteTypeProduction(string $fNDFormNoteTypeProduction)
    {
        $this->fNDFormNoteTypeProduction = $fNDFormNoteTypeProduction;

        return $this;
    }

    /**
     * Article constructor.
     * @param array $data
     * @throws InvalidIdentifierException
     */
    public function __construct($data)
    {
        if ($data == ""){return;}
        if (isset($data['CustomerAccount']) && !empty($data['CustomerAccount'])) {
            $this->customerAccount = $data['CustomerAccount'];
            // $this->invoiceAccount = $data['CustomerAccount'];
        } else {
         throw new InvalidIdentifierException("You must provide 'CustomerAccount' to identify the requested ressource");
        }

        if (isset($data['dataAreaId']) && !empty($data['dataAreaId'])) {
            $this->dataAreaId = $data['dataAreaId'];
        } else {
            throw new InvalidIdentifierException("You must provide 'dataAreaId' to identify the requested ressource");
        }

        $this->addressBrazilianCNPJOrCPF = (isset($data['AddressBrazilianCNPJOrCPF']) && !empty($data['AddressBrazilianCNPJOrCPF'])) ? $data['AddressBrazilianCNPJOrCPF'] : '';
        $this->partyType = (isset($data['PartyType']) && !empty($data['PartyType'])) ? $data['PartyType'] : '';
        $this->primaryContactFaxExtension = (isset($data['PrimaryContactFaxExtension']) && !empty($data['PrimaryContactFaxExtension'])) ? $data['PrimaryContactFaxExtension'] : '';
        $this->isFuelSurchargeApplied = (isset($data['IsFuelSurchargeApplied']) && !empty($data['IsFuelSurchargeApplied'])) ? $data['IsFuelSurchargeApplied'] : '';
        $this->salesTaxGroup = (isset($data['SalesTaxGroup']) && !empty($data['SalesTaxGroup'])) ? $data['SalesTaxGroup'] : '';
        $this->addressCountryRegionId = (isset($data['AddressCountryRegionId']) && !empty($data['AddressCountryRegionId'])) ? $data['AddressCountryRegionId'] : '';
        $this->contactPersonId = (isset($data['ContactPersonId']) && !empty($data['ContactPersonId'])) ? $data['ContactPersonId'] : '';
        $this->customerPaymentFineCode = (isset($data['CustomerPaymentFineCode']) && !empty($data['CustomerPaymentFineCode'])) ? $data['CustomerPaymentFineCode'] : '';
        $this->birthCountyCode = (isset($data['BirthCountyCode']) && !empty($data['BirthCountyCode'])) ? $data['BirthCountyCode'] : '';
        $this->invoiceAddress = (isset($data['InvoiceAddress']) && !empty($data['InvoiceAddress'])) ? $data['InvoiceAddress'] : '';
        $this->packingMaterialFeeLicenseNumber = (isset($data['PackingMaterialFeeLicenseNumber']) && !empty($data['PackingMaterialFeeLicenseNumber'])) ? $data['PackingMaterialFeeLicenseNumber'] : '';
        $this->transactionPresenceType = (isset($data['TransactionPresenceType']) && !empty($data['TransactionPresenceType'])) ? $data['TransactionPresenceType'] : '';
        $this->primaryContactEmailIsIM = (isset($data['PrimaryContactEmailIsIM']) && !empty($data['PrimaryContactEmailIsIM'])) ? $data['PrimaryContactEmailIsIM'] : '';
        $this->primaryContactTwitter = (isset($data['PrimaryContactTwitter']) && !empty($data['PrimaryContactTwitter'])) ? $data['PrimaryContactTwitter'] : '';
        $this->invoiceAddressCity = (isset($data['InvoiceAddressCity']) && !empty($data['InvoiceAddressCity'])) ? $data['InvoiceAddressCity'] : '';
        $this->isFinalUser = (isset($data['IsFinalUser']) && !empty($data['IsFinalUser'])) ? $data['IsFinalUser'] : '';
        $this->primaryContactEmail = (isset($data['PrimaryContactEmail']) && !empty($data['PrimaryContactEmail'])) ? $data['PrimaryContactEmail'] : '';
        $this->deliveryAddressCounty = (isset($data['DeliveryAddressCounty']) && !empty($data['DeliveryAddressCounty'])) ? $data['DeliveryAddressCounty'] : '';
        $this->hasSuframaDiscountPISandCOFINS = (isset($data['HasSuframaDiscountPISandCOFINS']) && !empty($data['HasSuframaDiscountPISandCOFINS'])) ? $data['HasSuframaDiscountPISandCOFINS'] : '';
        $this->invoiceAddressStreet = (isset($data['InvoiceAddressStreet']) && !empty($data['InvoiceAddressStreet'])) ? $data['InvoiceAddressStreet'] : '';
        $this->cURPNumber = (isset($data['CURPNumber']) && !empty($data['CURPNumber'])) ? $data['CURPNumber'] : '';
        $this->primaryContactLinkedInDescription = (isset($data['PrimaryContactLinkedInDescription']) && !empty($data['PrimaryContactLinkedInDescription'])) ? $data['PrimaryContactLinkedInDescription'] : '';
        $this->deliveryAddressCountryRegionId = (isset($data['DeliveryAddressCountryRegionId']) && !empty($data['DeliveryAddressCountryRegionId'])) ? $data['DeliveryAddressCountryRegionId'] : '';
        $this->itemCustomerGroupId = (isset($data['ItemCustomerGroupId']) && !empty($data['ItemCustomerGroupId'])) ? $data['ItemCustomerGroupId'] : '';
        $this->personProfessionalTitle = (isset($data['PersonProfessionalTitle']) && !empty($data['PersonProfessionalTitle'])) ? $data['PersonProfessionalTitle'] : '';
        $this->salesSegmentId = (isset($data['SalesSegmentId']) && !empty($data['SalesSegmentId'])) ? $data['SalesSegmentId'] : '';
        $this->isServiceDeliveryAddressBased = (isset($data['IsServiceDeliveryAddressBased']) && !empty($data['IsServiceDeliveryAddressBased'])) ? $data['IsServiceDeliveryAddressBased'] : '';
        $this->primaryContactTelexDescription = (isset($data['PrimaryContactTelexDescription']) && !empty($data['PrimaryContactTelexDescription'])) ? $data['PrimaryContactTelexDescription'] : '';
        $this->invoiceAddressDistrictName = (isset($data['InvoiceAddressDistrictName']) && !empty($data['InvoiceAddressDistrictName'])) ? $data['InvoiceAddressDistrictName'] : '';
        $this->invoiceAddressTimeZone = (isset($data['InvoiceAddressTimeZone']) && !empty($data['InvoiceAddressTimeZone'])) ? $data['InvoiceAddressTimeZone'] : '';
        $this->salesAccountNumber = (isset($data['SalesAccountNumber']) && !empty($data['SalesAccountNumber'])) ? $data['SalesAccountNumber'] : '';
        $this->primaryContactPhoneIsMobile = (isset($data['PrimaryContactPhoneIsMobile']) && !empty($data['PrimaryContactPhoneIsMobile'])) ? $data['PrimaryContactPhoneIsMobile'] : '';
        $this->primaryContactFacebookDescription = (isset($data['PrimaryContactFacebookDescription']) && !empty($data['PrimaryContactFacebookDescription'])) ? $data['PrimaryContactFacebookDescription'] : '';
        $this->primaryContactFaxRecordId = (isset($data['PrimaryContactFaxRecordId']) && !empty($data['PrimaryContactFaxRecordId'])) ? $data['PrimaryContactFaxRecordId'] : '';
        $this->tCSGroup = (isset($data['TCSGroup']) && !empty($data['TCSGroup'])) ? $data['TCSGroup'] : '';
        $this->deliveryAddressLocationId = (isset($data['DeliveryAddressLocationId']) && !empty($data['DeliveryAddressLocationId'])) ? $data['DeliveryAddressLocationId'] : '';
        $this->interCompanyAutoCreateOrders = (isset($data['InterCompanyAutoCreateOrders']) && !empty($data['InterCompanyAutoCreateOrders'])) ? $data['InterCompanyAutoCreateOrders'] : '';
        $this->addressZipCode = (isset($data['AddressZipCode']) && !empty($data['AddressZipCode'])) ? $data['AddressZipCode'] : '';
        $this->giroTypeProjInvoice = (isset($data['GiroTypeProjInvoice']) && !empty($data['GiroTypeProjInvoice'])) ? $data['GiroTypeProjInvoice'] : '';
        $this->lineOfBusinessId = (isset($data['LineOfBusinessId']) && !empty($data['LineOfBusinessId'])) ? $data['LineOfBusinessId'] : '';
        $this->organizationPhoneticName = (isset($data['OrganizationPhoneticName']) && !empty($data['OrganizationPhoneticName'])) ? $data['OrganizationPhoneticName'] : '';
        $this->deliveryAddressCountryRegionISOCode = (isset($data['DeliveryAddressCountryRegionISOCode']) && !empty($data['DeliveryAddressCountryRegionISOCode'])) ? $data['DeliveryAddressCountryRegionISOCode'] : '';
        $this->creditCardCVC = (isset($data['CreditCardCVC']) && !empty($data['CreditCardCVC'])) ? $data['CreditCardCVC'] : '';
        $this->deliveryAddressValidFrom = (isset($data['DeliveryAddressValidFrom']) && !empty($data['DeliveryAddressValidFrom'])) ? $data['DeliveryAddressValidFrom'] : '';
        $this->giroTypeAccountStatement = (isset($data['GiroTypeAccountStatement']) && !empty($data['GiroTypeAccountStatement'])) ? $data['GiroTypeAccountStatement'] : '';
        $this->calculateWithholdingTax = (isset($data['CalculateWithholdingTax']) && !empty($data['CalculateWithholdingTax'])) ? $data['CalculateWithholdingTax'] : '';
        $this->electronicInvoiceEAN = (isset($data['ElectronicInvoiceEAN']) && !empty($data['ElectronicInvoiceEAN'])) ? $data['ElectronicInvoiceEAN'] : '';
        $this->deliveryFreightZone = (isset($data['DeliveryFreightZone']) && !empty($data['DeliveryFreightZone'])) ? $data['DeliveryFreightZone'] : '';
        $this->primaryContactFax = (isset($data['PrimaryContactFax']) && !empty($data['PrimaryContactFax'])) ? $data['PrimaryContactFax'] : '';
        $this->taxExemptNumber = (isset($data['TaxExemptNumber']) && !empty($data['TaxExemptNumber'])) ? $data['TaxExemptNumber'] : '';
        $this->deliveryAddressDescription = (isset($data['DeliveryAddressDescription']) && !empty($data['DeliveryAddressDescription'])) ? $data['DeliveryAddressDescription'] : '';
        $this->deliveryAddressLongitude = (isset($data['DeliveryAddressLongitude']) && !empty($data['DeliveryAddressLongitude'])) ? $data['DeliveryAddressLongitude'] : '';
        $this->birthPlace = (isset($data['BirthPlace']) && !empty($data['BirthPlace'])) ? $data['BirthPlace'] : '';
        $this->addressCity = (isset($data['AddressCity']) && !empty($data['AddressCity'])) ? $data['AddressCity'] : '';
        $this->personInitials = (isset($data['PersonInitials']) && !empty($data['PersonInitials'])) ? $data['PersonInitials'] : '';
        $this->defaultECommerceOperator = (isset($data['DefaultECommerceOperator']) && !empty($data['DefaultECommerceOperator'])) ? $data['DefaultECommerceOperator'] : '';
        $this->centralBankPurposeCode = (isset($data['CentralBankPurposeCode']) && !empty($data['CentralBankPurposeCode'])) ? $data['CentralBankPurposeCode'] : '';
        $this->giroTypeCollectionletter = (isset($data['GiroTypeCollectionletter']) && !empty($data['GiroTypeCollectionletter'])) ? $data['GiroTypeCollectionletter'] : '';
        $this->fullPrimaryAddress = (isset($data['FullPrimaryAddress']) && !empty($data['FullPrimaryAddress'])) ? $data['FullPrimaryAddress'] : '';
        $this->orderEntryDeadline = (isset($data['OrderEntryDeadline']) && !empty($data['OrderEntryDeadline'])) ? $data['OrderEntryDeadline'] : '';
        $this->foreignerId = (isset($data['ForeignerId']) && !empty($data['ForeignerId'])) ? $data['ForeignerId'] : '';
        $this->warehouseIsASNGenerated = (isset($data['WarehouseIsASNGenerated']) && !empty($data['WarehouseIsASNGenerated'])) ? $data['WarehouseIsASNGenerated'] : '';
        $this->addressLongitude = (isset($data['AddressLongitude']) && !empty($data['AddressLongitude'])) ? $data['AddressLongitude'] : '';
        $this->customerType = (isset($data['CustomerType']) && !empty($data['CustomerType'])) ? $data['CustomerType'] : '';
        $this->primaryContactLinkedIn = (isset($data['PrimaryContactLinkedIn']) && !empty($data['PrimaryContactLinkedIn'])) ? $data['PrimaryContactLinkedIn'] : '';
        $this->primaryContactURL = (isset($data['PrimaryContactURL']) && !empty($data['PrimaryContactURL'])) ? $data['PrimaryContactURL'] : '';
        $this->isFreightAccrued = (isset($data['IsFreightAccrued']) && !empty($data['IsFreightAccrued'])) ? $data['IsFreightAccrued'] : '';
        $this->partyState = (isset($data['PartyState']) && !empty($data['PartyState'])) ? $data['PartyState'] : '';
        $this->invoiceAccount = (isset($data['InvoiceAccount']) && !empty($data['InvoiceAccount'])) ? $data['InvoiceAccount'] : '';
        $this->partyNumber = (isset($data['PartyNumber']) && !empty($data['PartyNumber'])) ? $data['PartyNumber'] : '';
        $this->centralBankPurposeNotes = (isset($data['CentralBankPurposeNotes']) && !empty($data['CentralBankPurposeNotes'])) ? $data['CentralBankPurposeNotes'] : '';
        $this->personMaritalStatus = (isset($data['PersonMaritalStatus']) && !empty($data['PersonMaritalStatus'])) ? $data['PersonMaritalStatus'] : '';
        $this->collectionsContactPersonId = (isset($data['CollectionsContactPersonId']) && !empty($data['CollectionsContactPersonId'])) ? $data['CollectionsContactPersonId'] : '';
        $this->addressBuildingComplement = (isset($data['AddressBuildingComplement']) && !empty($data['AddressBuildingComplement'])) ? $data['AddressBuildingComplement'] : '';
        $this->addressLocationId = (isset($data['AddressLocationId']) && !empty($data['AddressLocationId'])) ? $data['AddressLocationId'] : '';
        $this->paymentSchedule = (isset($data['PaymentSchedule']) && !empty($data['PaymentSchedule'])) ? $data['PaymentSchedule'] : '';
        $this->primaryContactTwitterPurpose = (isset($data['PrimaryContactTwitterPurpose']) && !empty($data['PrimaryContactTwitterPurpose'])) ? $data['PrimaryContactTwitterPurpose'] : '';
        $this->giroType = (isset($data['GiroType']) && !empty($data['GiroType'])) ? $data['GiroType'] : '';
        $this->invoiceAddressDescription = (isset($data['InvoiceAddressDescription']) && !empty($data['InvoiceAddressDescription'])) ? $data['InvoiceAddressDescription'] : '';
        $this->addressDistrictName = (isset($data['AddressDistrictName']) && !empty($data['AddressDistrictName'])) ? $data['AddressDistrictName'] : '';
        $this->deliveryTerms = (isset($data['DeliveryTerms']) && !empty($data['DeliveryTerms'])) ? $data['DeliveryTerms'] : '';
        $this->numberSequenceGroup = (isset($data['NumberSequenceGroup']) && !empty($data['NumberSequenceGroup'])) ? $data['NumberSequenceGroup'] : '';
        $this->personChildrenNames = (isset($data['PersonChildrenNames']) && !empty($data['PersonChildrenNames'])) ? $data['PersonChildrenNames'] : '';
        $this->paymentMethod = (isset($data['PaymentMethod']) && !empty($data['PaymentMethod'])) ? $data['PaymentMethod'] : '';
        $this->foreignResident = (isset($data['ForeignResident']) && !empty($data['ForeignResident'])) ? $data['ForeignResident'] : '';
        $this->deliveryMode = (isset($data['DeliveryMode']) && !empty($data['DeliveryMode'])) ? $data['DeliveryMode'] : '';
        $this->personProfessionalSuffix = (isset($data['PersonProfessionalSuffix']) && !empty($data['PersonProfessionalSuffix'])) ? $data['PersonProfessionalSuffix'] : '';
        $this->onHoldStatus = (isset($data['OnHoldStatus']) && !empty($data['OnHoldStatus'])) ? $data['OnHoldStatus'] : '';
        $this->accountStatement = (isset($data['AccountStatement']) && !empty($data['AccountStatement'])) ? $data['AccountStatement'] : '';
        $this->warehouseId = (isset($data['WarehouseId']) && !empty($data['WarehouseId'])) ? $data['WarehouseId'] : '';
        $this->destinationCode = (isset($data['DestinationCode']) && !empty($data['DestinationCode'])) ? $data['DestinationCode'] : '';
        $this->eInvoiceRegister = (isset($data['EInvoiceRegister']) && !empty($data['EInvoiceRegister'])) ? $data['EInvoiceRegister'] : '';
        $this->iRS1099CIndicator = (isset($data['IRS1099CIndicator']) && !empty($data['IRS1099CIndicator'])) ? $data['IRS1099CIndicator'] : '';
        $this->frenchSiret = (isset($data['FrenchSiret']) && !empty($data['FrenchSiret'])) ? $data['FrenchSiret'] : '';
        $this->paymentDay = (isset($data['PaymentDay']) && !empty($data['PaymentDay'])) ? $data['PaymentDay'] : '';
        $this->brazilianNIT = (isset($data['BrazilianNIT']) && !empty($data['BrazilianNIT'])) ? $data['BrazilianNIT'] : '';
        $this->federalIndicator = (isset($data['FederalIndicator']) && !empty($data['FederalIndicator'])) ? $data['FederalIndicator'] : '';
        $this->employeeResponsibleNumber = (isset($data['EmployeeResponsibleNumber']) && !empty($data['EmployeeResponsibleNumber'])) ? $data['EmployeeResponsibleNumber'] : '';
        $this->personAnniversaryYear = (isset($data['PersonAnniversaryYear']) && !empty($data['PersonAnniversaryYear'])) ? $data['PersonAnniversaryYear'] : '';
        $this->defaultInventoryStatusId = (isset($data['DefaultInventoryStatusId']) && !empty($data['DefaultInventoryStatusId'])) ? $data['DefaultInventoryStatusId'] : '';
        $this->primaryContactEmailDescription = (isset($data['PrimaryContactEmailDescription']) && !empty($data['PrimaryContactEmailDescription'])) ? $data['PrimaryContactEmailDescription'] : '';
        $this->addressTimeZone = (isset($data['AddressTimeZone']) && !empty($data['AddressTimeZone'])) ? $data['AddressTimeZone'] : '';
        $this->primaryContactPhone = (isset($data['PrimaryContactPhone']) && !empty($data['PrimaryContactPhone'])) ? $data['PrimaryContactPhone'] : '';
        $this->primaryContactPhoneRecordId = (isset($data['PrimaryContactPhoneRecordId']) && !empty($data['PrimaryContactPhoneRecordId'])) ? $data['PrimaryContactPhoneRecordId'] : '';
        $this->deliveryAddressCity = (isset($data['DeliveryAddressCity']) && !empty($data['DeliveryAddressCity'])) ? $data['DeliveryAddressCity'] : '';
        $this->invoiceAddressCounty = (isset($data['InvoiceAddressCounty']) && !empty($data['InvoiceAddressCounty'])) ? $data['InvoiceAddressCounty'] : '';
        $this->pANReferenceNumber = (isset($data['PANReferenceNumber']) && !empty($data['PANReferenceNumber'])) ? $data['PANReferenceNumber'] : '';
        $this->deliveryAddressStreet = (isset($data['DeliveryAddressStreet']) && !empty($data['DeliveryAddressStreet'])) ? $data['DeliveryAddressStreet'] : '';
        $this->salesCurrencyCode = (isset($data['SalesCurrencyCode']) && !empty($data['SalesCurrencyCode'])) ? $data['SalesCurrencyCode'] : '';
        $this->priority = (isset($data['Priority']) && !empty($data['Priority'])) ? $data['Priority'] : '';
        $this->isSalesTaxIncludedInPrices = (isset($data['IsSalesTaxIncludedInPrices']) && !empty($data['IsSalesTaxIncludedInPrices'])) ? $data['IsSalesTaxIncludedInPrices'] : '';
        $this->brazilianCNPJOrCPF = (isset($data['BrazilianCNPJOrCPF']) && !empty($data['BrazilianCNPJOrCPF'])) ? $data['BrazilianCNPJOrCPF'] : '';
        $this->paymentFactoringAccount = (isset($data['PaymentFactoringAccount']) && !empty($data['PaymentFactoringAccount'])) ? $data['PaymentFactoringAccount'] : '';
        $this->pANNumber = (isset($data['PANNumber']) && !empty($data['PANNumber'])) ? $data['PANNumber'] : '';
        $this->primaryContactTwitterDescription = (isset($data['PrimaryContactTwitterDescription']) && !empty($data['PrimaryContactTwitterDescription'])) ? $data['PrimaryContactTwitterDescription'] : '';
        $this->personFirstName = (isset($data['PersonFirstName']) && !empty($data['PersonFirstName'])) ? $data['PersonFirstName'] : '';
        $this->brazilianCCM = (isset($data['BrazilianCCM']) && !empty($data['BrazilianCCM'])) ? $data['BrazilianCCM'] : '';
        $this->receiptEmail = (isset($data['ReceiptEmail']) && !empty($data['ReceiptEmail'])) ? $data['ReceiptEmail'] : '';
        $this->tDSGroup = (isset($data['TDSGroup']) && !empty($data['TDSGroup'])) ? $data['TDSGroup'] : '';
        $this->multiLineDiscountCode = (isset($data['MultiLineDiscountCode']) && !empty($data['MultiLineDiscountCode'])) ? $data['MultiLineDiscountCode'] : '';
        $this->personAnniversaryDay = (isset($data['PersonAnniversaryDay']) && !empty($data['PersonAnniversaryDay'])) ? $data['PersonAnniversaryDay'] : '';
        $this->defaultDimensionDisplayValue = (isset($data['DefaultDimensionDisplayValue']) && !empty($data['DefaultDimensionDisplayValue'])) ? $data['DefaultDimensionDisplayValue'] : '';
        $this->supplementaryItemGroupId = (isset($data['SupplementaryItemGroupId']) && !empty($data['SupplementaryItemGroupId'])) ? $data['SupplementaryItemGroupId'] : '';
        $this->isWithholdingTaxCalculated = (isset($data['IsWithholdingTaxCalculated']) && !empty($data['IsWithholdingTaxCalculated'])) ? $data['IsWithholdingTaxCalculated'] : '';
        $this->paymentSpecification = (isset($data['PaymentSpecification']) && !empty($data['PaymentSpecification'])) ? $data['PaymentSpecification'] : '';
        $this->addressRecordId = (isset($data['AddressRecordId']) && !empty($data['AddressRecordId'])) ? $data['AddressRecordId'] : '';
        $this->addressBooks = (isset($data['AddressBooks']) && !empty($data['AddressBooks'])) ? $data['AddressBooks'] : '';
        $this->primaryContactEmailPurpose = (isset($data['PrimaryContactEmailPurpose']) && !empty($data['PrimaryContactEmailPurpose'])) ? $data['PrimaryContactEmailPurpose'] : '';
        $this->fulfillmentPolicyName = (isset($data['FulfillmentPolicyName']) && !empty($data['FulfillmentPolicyName'])) ? $data['FulfillmentPolicyName'] : '';
        $this->salesDistrict = (isset($data['SalesDistrict']) && !empty($data['SalesDistrict'])) ? $data['SalesDistrict'] : '';
        $this->consolidationDay = (isset($data['ConsolidationDay']) && !empty($data['ConsolidationDay'])) ? $data['ConsolidationDay'] : '';
        $this->isExpressBillOfLadingAccepted = (isset($data['IsExpressBillOfLadingAccepted']) && !empty($data['IsExpressBillOfLadingAccepted'])) ? $data['IsExpressBillOfLadingAccepted'] : '';
        $this->creditCardAddressVerification = (isset($data['CreditCardAddressVerification']) && !empty($data['CreditCardAddressVerification'])) ? $data['CreditCardAddressVerification'] : '';
        $this->invoiceAddressBuildingComplement = (isset($data['InvoiceAddressBuildingComplement']) && !empty($data['InvoiceAddressBuildingComplement'])) ? $data['InvoiceAddressBuildingComplement'] : '';
        $this->addressState = (isset($data['AddressState']) && !empty($data['AddressState'])) ? $data['AddressState'] : '';
        $this->isExcludedFromCollectionFeeCalculation = (isset($data['IsExcludedFromCollectionFeeCalculation']) && !empty($data['IsExcludedFromCollectionFeeCalculation'])) ? $data['IsExcludedFromCollectionFeeCalculation'] : '';
        $this->customerPaymentFinancialInterestCode = (isset($data['CustomerPaymentFinancialInterestCode']) && !empty($data['CustomerPaymentFinancialInterestCode'])) ? $data['CustomerPaymentFinancialInterestCode'] : '';
        $this->isTransactionPostedAsShipment = (isset($data['IsTransactionPostedAsShipment']) && !empty($data['IsTransactionPostedAsShipment'])) ? $data['IsTransactionPostedAsShipment'] : '';
        $this->creditLimitIsMandatory = (isset($data['CreditLimitIsMandatory']) && !empty($data['CreditLimitIsMandatory'])) ? $data['CreditLimitIsMandatory'] : '';
        $this->isExternallyMaintained = (isset($data['IsExternallyMaintained']) && !empty($data['IsExternallyMaintained'])) ? $data['IsExternallyMaintained'] : '';
        $this->paymentTermsBaseDays = (isset($data['PaymentTermsBaseDays']) && !empty($data['PaymentTermsBaseDays'])) ? $data['PaymentTermsBaseDays'] : '';
        $this->fiscalCode = (isset($data['FiscalCode']) && !empty($data['FiscalCode'])) ? $data['FiscalCode'] : '';
        $this->knownAs = (isset($data['KnownAs']) && !empty($data['KnownAs'])) ? $data['KnownAs'] : '';
        $this->primaryContactTelex = (isset($data['PrimaryContactTelex']) && !empty($data['PrimaryContactTelex'])) ? $data['PrimaryContactTelex'] : '';
        $this->paymentBankAccount = (isset($data['PaymentBankAccount']) && !empty($data['PaymentBankAccount'])) ? $data['PaymentBankAccount'] : '';
        $this->brazilianIE = (isset($data['BrazilianIE']) && !empty($data['BrazilianIE'])) ? $data['BrazilianIE'] : '';
        $this->preferentialCustomer = (isset($data['PreferentialCustomer']) && !empty($data['PreferentialCustomer'])) ? $data['PreferentialCustomer'] : '';
        $this->primaryContactEmailRecordId = (isset($data['PrimaryContactEmailRecordId']) && !empty($data['PrimaryContactEmailRecordId'])) ? $data['PrimaryContactEmailRecordId'] : '';
        $this->receiptOption = (isset($data['ReceiptOption']) && !empty($data['ReceiptOption'])) ? $data['ReceiptOption'] : '';
        $this->addressBrazilianIE = (isset($data['AddressBrazilianIE']) && !empty($data['AddressBrazilianIE'])) ? $data['AddressBrazilianIE'] : '';
        $this->personAnniversaryMonth = (isset($data['PersonAnniversaryMonth']) && !empty($data['PersonAnniversaryMonth'])) ? $data['PersonAnniversaryMonth'] : '';
        $this->primaryContactPhoneExtension = (isset($data['PrimaryContactPhoneExtension']) && !empty($data['PrimaryContactPhoneExtension'])) ? $data['PrimaryContactPhoneExtension'] : '';
        $this->invoiceAddressStreetNumber = (isset($data['InvoiceAddressStreetNumber']) && !empty($data['InvoiceAddressStreetNumber'])) ? $data['InvoiceAddressStreetNumber'] : '';
        $this->primaryContactPhonePurpose = (isset($data['PrimaryContactPhonePurpose']) && !empty($data['PrimaryContactPhonePurpose'])) ? $data['PrimaryContactPhonePurpose'] : '';
        $this->exportSale = (isset($data['ExportSale']) && !empty($data['ExportSale'])) ? $data['ExportSale'] : '';
        $this->organizationNumber = (isset($data['OrganizationNumber']) && !empty($data['OrganizationNumber'])) ? $data['OrganizationNumber'] : '';
        $this->invoicePostingType = (isset($data['InvoicePostingType']) && !empty($data['InvoicePostingType'])) ? $data['InvoicePostingType'] : '';
        $this->creditCardAddressVerificationIsAuthorizationVoidedOnFailure = (isset($data['CreditCardAddressVerificationIsAuthorizationVoidedOnFailure']) && !empty($data['CreditCardAddressVerificationIsAuthorizationVoidedOnFailure'])) ? $data['CreditCardAddressVerificationIsAuthorizationVoidedOnFailure'] : '';
        $this->invoiceAddressState = (isset($data['InvoiceAddressState']) && !empty($data['InvoiceAddressState'])) ? $data['InvoiceAddressState'] : '';
        $this->receiptCalendar = (isset($data['ReceiptCalendar']) && !empty($data['ReceiptCalendar'])) ? $data['ReceiptCalendar'] : '';
        $this->deliveryAddressState = (isset($data['DeliveryAddressState']) && !empty($data['DeliveryAddressState'])) ? $data['DeliveryAddressState'] : '';
        $this->stateInscription = (isset($data['StateInscription']) && !empty($data['StateInscription'])) ? $data['StateInscription'] : '';
        $this->personLastNamePrefix = (isset($data['PersonLastNamePrefix']) && !empty($data['PersonLastNamePrefix'])) ? $data['PersonLastNamePrefix'] : '';
        $this->salesReturnTaxGroup = (isset($data['SalesReturnTaxGroup']) && !empty($data['SalesReturnTaxGroup'])) ? $data['SalesReturnTaxGroup'] : '';
        $this->primaryContactURLDescription = (isset($data['PrimaryContactURLDescription']) && !empty($data['PrimaryContactURLDescription'])) ? $data['PrimaryContactURLDescription'] : '';
        $this->customerWithholdingContributionType = (isset($data['CustomerWithholdingContributionType']) && !empty($data['CustomerWithholdingContributionType'])) ? $data['CustomerWithholdingContributionType'] : '';
        $this->isElectronicInvoice = (isset($data['IsElectronicInvoice']) && !empty($data['IsElectronicInvoice'])) ? $data['IsElectronicInvoice'] : '';
        $this->federalAgencyLocationCode = (isset($data['FederalAgencyLocationCode']) && !empty($data['FederalAgencyLocationCode'])) ? $data['FederalAgencyLocationCode'] : '';
        $this->giroTypeFreeTextInvoice = (isset($data['GiroTypeFreeTextInvoice']) && !empty($data['GiroTypeFreeTextInvoice'])) ? $data['GiroTypeFreeTextInvoice'] : '';
        $this->deliveryAddressValidTo = (isset($data['DeliveryAddressValidTo']) && !empty($data['DeliveryAddressValidTo'])) ? $data['DeliveryAddressValidTo'] : '';
        $this->personPhoneticMiddleName = (isset($data['PersonPhoneticMiddleName']) && !empty($data['PersonPhoneticMiddleName'])) ? $data['PersonPhoneticMiddleName'] : '';
        $this->organizationABCCode = (isset($data['OrganizationABCCode']) && !empty($data['OrganizationABCCode'])) ? $data['OrganizationABCCode'] : '';
        $this->brazilianCNAE = (isset($data['BrazilianCNAE']) && !empty($data['BrazilianCNAE'])) ? $data['BrazilianCNAE'] : '';
        $this->withholdingTaxGroupCode = (isset($data['WithholdingTaxGroupCode']) && !empty($data['WithholdingTaxGroupCode'])) ? $data['WithholdingTaxGroupCode'] : '';
        $this->nAFCode = (isset($data['NAFCode']) && !empty($data['NAFCode'])) ? $data['NAFCode'] : '';
        $this->addressLatitude = (isset($data['AddressLatitude']) && !empty($data['AddressLatitude'])) ? $data['AddressLatitude'] : '';
        $this->totalDiscountCode = (isset($data['TotalDiscountCode']) && !empty($data['TotalDiscountCode'])) ? $data['TotalDiscountCode'] : '';
        $this->addressLocationRoles = (isset($data['AddressLocationRoles']) && !empty($data['AddressLocationRoles'])) ? $data['AddressLocationRoles'] : '';
        $this->paymentCashDiscount = (isset($data['PaymentCashDiscount']) && !empty($data['PaymentCashDiscount'])) ? $data['PaymentCashDiscount'] : '';
        $this->deliveryAddressDistrictName = (isset($data['DeliveryAddressDistrictName']) && !empty($data['DeliveryAddressDistrictName'])) ? $data['DeliveryAddressDistrictName'] : '';
        $this->collectionLetterCode = (isset($data['CollectionLetterCode']) && !empty($data['CollectionLetterCode'])) ? $data['CollectionLetterCode'] : '';
        $this->eInvoiceAttachment = (isset($data['EInvoiceAttachment']) && !empty($data['EInvoiceAttachment'])) ? $data['EInvoiceAttachment'] : '';
        $this->merchantID = (isset($data['MerchantID']) && !empty($data['MerchantID'])) ? $data['MerchantID'] : '';
        $this->creditRating = (isset($data['CreditRating']) && !empty($data['CreditRating'])) ? $data['CreditRating'] : '';
        $this->primaryContactFacebook = (isset($data['PrimaryContactFacebook']) && !empty($data['PrimaryContactFacebook'])) ? $data['PrimaryContactFacebook'] : '';
        $this->deliveryAddressBuildingComplement = (isset($data['DeliveryAddressBuildingComplement']) && !empty($data['DeliveryAddressBuildingComplement'])) ? $data['DeliveryAddressBuildingComplement'] : '';
        $this->deliveryAddressStreetNumber = (isset($data['DeliveryAddressStreetNumber']) && !empty($data['DeliveryAddressStreetNumber'])) ? $data['DeliveryAddressStreetNumber'] : '';
        $this->invoiceAddressLongitude = (isset($data['InvoiceAddressLongitude']) && !empty($data['InvoiceAddressLongitude'])) ? $data['InvoiceAddressLongitude'] : '';
        $this->lineDiscountCode = (isset($data['LineDiscountCode']) && !empty($data['LineDiscountCode'])) ? $data['LineDiscountCode'] : '';
        $this->partyCountry = (isset($data['PartyCountry']) && !empty($data['PartyCountry'])) ? $data['PartyCountry'] : '';
        $this->invoiceAddressLatitude = (isset($data['InvoiceAddressLatitude']) && !empty($data['InvoiceAddressLatitude'])) ? $data['InvoiceAddressLatitude'] : '';
        $this->isInSuframaRegion = (isset($data['IsInSuframaRegion']) && !empty($data['IsInSuframaRegion'])) ? $data['IsInSuframaRegion'] : '';
        $this->isIncomingFiscalDocumentGenerated = (isset($data['IsIncomingFiscalDocumentGenerated']) && !empty($data['IsIncomingFiscalDocumentGenerated'])) ? $data['IsIncomingFiscalDocumentGenerated'] : '';
        $this->salesMemo = (isset($data['SalesMemo']) && !empty($data['SalesMemo'])) ? $data['SalesMemo'] : '';
        $this->reliefGroupId = (isset($data['ReliefGroupId']) && !empty($data['ReliefGroupId'])) ? $data['ReliefGroupId'] : '';
        $this->isExcludedFromInterestChargeCalculation = (isset($data['IsExcludedFromInterestChargeCalculation']) && !empty($data['IsExcludedFromInterestChargeCalculation'])) ? $data['IsExcludedFromInterestChargeCalculation'] : '';
        $this->statisticsGroupId = (isset($data['StatisticsGroupId']) && !empty($data['StatisticsGroupId'])) ? $data['StatisticsGroupId'] : '';
        $this->salesOrderPoolId = (isset($data['SalesOrderPoolId']) && !empty($data['SalesOrderPoolId'])) ? $data['SalesOrderPoolId'] : '';
        $this->organizationName = (isset($data['OrganizationName']) && !empty($data['OrganizationName'])) ? $data['OrganizationName'] : '';
        $this->isOrderNumberReferenceUsed = (isset($data['IsOrderNumberReferenceUsed']) && !empty($data['IsOrderNumberReferenceUsed'])) ? $data['IsOrderNumberReferenceUsed'] : '';
        $this->custClassificationId = (isset($data['CustClassificationId']) && !empty($data['CustClassificationId'])) ? $data['CustClassificationId'] : '';
        $this->addressValidTo = (isset($data['AddressValidTo']) && !empty($data['AddressValidTo'])) ? $data['AddressValidTo'] : '';
        $this->federalComments = (isset($data['FederalComments']) && !empty($data['FederalComments'])) ? $data['FederalComments'] : '';
        $this->personGender = (isset($data['PersonGender']) && !empty($data['PersonGender'])) ? $data['PersonGender'] : '';
        $this->paymentTerms = (isset($data['PaymentTerms']) && !empty($data['PaymentTerms'])) ? $data['PaymentTerms'] : '';
        $this->primaryContactPhoneDescription = (isset($data['PrimaryContactPhoneDescription']) && !empty($data['PrimaryContactPhoneDescription'])) ? $data['PrimaryContactPhoneDescription'] : '';
        $this->addressPostbox = (isset($data['AddressPostbox']) && !empty($data['AddressPostbox'])) ? $data['AddressPostbox'] : '';
        $this->salesSubsegmentId = (isset($data['SalesSubsegmentId']) && !empty($data['SalesSubsegmentId'])) ? $data['SalesSubsegmentId'] : '';
        $this->customerRebateGroupId = (isset($data['CustomerRebateGroupId']) && !empty($data['CustomerRebateGroupId'])) ? $data['CustomerRebateGroupId'] : '';
        $this->addressCounty = (isset($data['AddressCounty']) && !empty($data['AddressCounty'])) ? $data['AddressCounty'] : '';
        $this->primaryContactURLRecordId = (isset($data['PrimaryContactURLRecordId']) && !empty($data['PrimaryContactURLRecordId'])) ? $data['PrimaryContactURLRecordId'] : '';
        $this->isICMSContributor = (isset($data['IsICMSContributor']) && !empty($data['IsICMSContributor'])) ? $data['IsICMSContributor'] : '';
        $this->invoiceAddressValidTo = (isset($data['InvoiceAddressValidTo']) && !empty($data['InvoiceAddressValidTo'])) ? $data['InvoiceAddressValidTo'] : '';
        $this->deliveryAddressTimeZone = (isset($data['DeliveryAddressTimeZone']) && !empty($data['DeliveryAddressTimeZone'])) ? $data['DeliveryAddressTimeZone'] : '';
        $this->invoiceAddressValidFrom = (isset($data['InvoiceAddressValidFrom']) && !empty($data['InvoiceAddressValidFrom'])) ? $data['InvoiceAddressValidFrom'] : '';
        $this->creditLimit = (isset($data['CreditLimit']) && !empty($data['CreditLimit'])) ? $data['CreditLimit'] : '';
        $this->creditCardAddressVerificationLevel = (isset($data['CreditCardAddressVerificationLevel']) && !empty($data['CreditCardAddressVerificationLevel'])) ? $data['CreditCardAddressVerificationLevel'] : '';
        $this->warehouseIsEntireShipmentFilled = (isset($data['WarehouseIsEntireShipmentFilled']) && !empty($data['WarehouseIsEntireShipmentFilled'])) ? $data['WarehouseIsEntireShipmentFilled'] : '';
        $this->packingDutyLicense = (isset($data['PackingDutyLicense']) && !empty($data['PackingDutyLicense'])) ? $data['PackingDutyLicense'] : '';
        $this->nationalRegistryNumber = (isset($data['NationalRegistryNumber']) && !empty($data['NationalRegistryNumber'])) ? $data['NationalRegistryNumber'] : '';
        $this->siteId = (isset($data['SiteId']) && !empty($data['SiteId'])) ? $data['SiteId'] : '';
        $this->invoiceAddressCountryRegionISOCode = (isset($data['InvoiceAddressCountryRegionISOCode']) && !empty($data['InvoiceAddressCountryRegionISOCode'])) ? $data['InvoiceAddressCountryRegionISOCode'] : '';
        $this->isAllowCreateIndirectOrderLines = (isset($data['IsAllowCreateIndirectOrderLines']) && !empty($data['IsAllowCreateIndirectOrderLines'])) ? $data['IsAllowCreateIndirectOrderLines'] : '';
        $this->primaryContactURLPurpose = (isset($data['PrimaryContactURLPurpose']) && !empty($data['PrimaryContactURLPurpose'])) ? $data['PrimaryContactURLPurpose'] : '';
        $this->chargesGroupId = (isset($data['ChargesGroupId']) && !empty($data['ChargesGroupId'])) ? $data['ChargesGroupId'] : '';
        $this->panStatus = (isset($data['PanStatus']) && !empty($data['PanStatus'])) ? $data['PanStatus'] : '';
        $this->commissionSalesGroupId = (isset($data['CommissionSalesGroupId']) && !empty($data['CommissionSalesGroupId'])) ? $data['CommissionSalesGroupId'] : '';
        $this->nameAlias = (isset($data['NameAlias']) && !empty($data['NameAlias'])) ? $data['NameAlias'] : '';
        $this->primaryContactFaxPurpose = (isset($data['PrimaryContactFaxPurpose']) && !empty($data['PrimaryContactFaxPurpose'])) ? $data['PrimaryContactFaxPurpose'] : '';
        $this->addressStreetNumber = (isset($data['AddressStreetNumber']) && !empty($data['AddressStreetNumber'])) ? $data['AddressStreetNumber'] : '';
        $this->personLastName = (isset($data['PersonLastName']) && !empty($data['PersonLastName'])) ? $data['PersonLastName'] : '';
        $this->paymentIdType = (isset($data['PaymentIdType']) && !empty($data['PaymentIdType'])) ? $data['PaymentIdType'] : '';
        $this->vendorAccount = (isset($data['VendorAccount']) && !empty($data['VendorAccount'])) ? $data['VendorAccount'] : '';
        $this->addressCountryRegionISOCode = (isset($data['AddressCountryRegionISOCode']) && !empty($data['AddressCountryRegionISOCode'])) ? $data['AddressCountryRegionISOCode'] : '';
        $this->residenceForeignCountryRegionId = (isset($data['ResidenceForeignCountryRegionId']) && !empty($data['ResidenceForeignCountryRegionId'])) ? $data['ResidenceForeignCountryRegionId'] : '';
        $this->rFCNumber = (isset($data['RFCNumber']) && !empty($data['RFCNumber'])) ? $data['RFCNumber'] : '';
        $this->personHobbies = (isset($data['PersonHobbies']) && !empty($data['PersonHobbies'])) ? $data['PersonHobbies'] : '';
        $this->electronicLocationId = (isset($data['ElectronicLocationId']) && !empty($data['ElectronicLocationId'])) ? $data['ElectronicLocationId'] : '';
        $this->primaryContactLinkedInPurpose = (isset($data['PrimaryContactLinkedInPurpose']) && !empty($data['PrimaryContactLinkedInPurpose'])) ? $data['PrimaryContactLinkedInPurpose'] : '';
        $this->invoiceAddressZipCode = (isset($data['InvoiceAddressZipCode']) && !empty($data['InvoiceAddressZipCode'])) ? $data['InvoiceAddressZipCode'] : '';
        $this->isOneTimeCustomer = (isset($data['IsOneTimeCustomer']) && !empty($data['IsOneTimeCustomer'])) ? $data['IsOneTimeCustomer'] : '';
        $this->foreignCustomer = (isset($data['ForeignCustomer']) && !empty($data['ForeignCustomer'])) ? $data['ForeignCustomer'] : '';
        $this->customerTMAGroupId = (isset($data['CustomerTMAGroupId']) && !empty($data['CustomerTMAGroupId'])) ? $data['CustomerTMAGroupId'] : '';
        $this->addressValidFrom = (isset($data['AddressValidFrom']) && !empty($data['AddressValidFrom'])) ? $data['AddressValidFrom'] : '';
        $this->organizationNumberOfEmployees = (isset($data['OrganizationNumberOfEmployees']) && !empty($data['OrganizationNumberOfEmployees'])) ? $data['OrganizationNumberOfEmployees'] : '';
        $this->companyType = (isset($data['CompanyType']) && !empty($data['CompanyType'])) ? $data['CompanyType'] : '';
        $this->customerGroupId = (isset($data['CustomerGroupId']) && !empty($data['CustomerGroupId'])) ? $data['CustomerGroupId'] : '';
        $this->giroTypeInterestNote = (isset($data['GiroTypeInterestNote']) && !empty($data['GiroTypeInterestNote'])) ? $data['GiroTypeInterestNote'] : '';
        $this->deliveryAddressZipCode = (isset($data['DeliveryAddressZipCode']) && !empty($data['DeliveryAddressZipCode'])) ? $data['DeliveryAddressZipCode'] : '';
        $this->deliveryReason = (isset($data['DeliveryReason']) && !empty($data['DeliveryReason'])) ? $data['DeliveryReason'] : '';
        $this->taxRegistrationId = (isset($data['TaxRegistrationId']) && !empty($data['TaxRegistrationId'])) ? $data['TaxRegistrationId'] : '';
        $this->paymentUseCashDiscount = (isset($data['PaymentUseCashDiscount']) && !empty($data['PaymentUseCashDiscount'])) ? $data['PaymentUseCashDiscount'] : '';
        $this->discountPriceGroupId = (isset($data['DiscountPriceGroupId']) && !empty($data['DiscountPriceGroupId'])) ? $data['DiscountPriceGroupId'] : '';
        $this->addressDescription = (isset($data['AddressDescription']) && !empty($data['AddressDescription'])) ? $data['AddressDescription'] : '';
        $this->suframaNumber = (isset($data['SuframaNumber']) && !empty($data['SuframaNumber'])) ? $data['SuframaNumber'] : '';
        $this->identificationNumber = (isset($data['IdentificationNumber']) && !empty($data['IdentificationNumber'])) ? $data['IdentificationNumber'] : '';
        $this->authorityOffice = (isset($data['AuthorityOffice']) && !empty($data['AuthorityOffice'])) ? $data['AuthorityOffice'] : '';
        $this->personPhoneticFirstName = (isset($data['PersonPhoneticFirstName']) && !empty($data['PersonPhoneticFirstName'])) ? $data['PersonPhoneticFirstName'] : '';
        $this->primaryContactTelexPurpose = (isset($data['PrimaryContactTelexPurpose']) && !empty($data['PrimaryContactTelexPurpose'])) ? $data['PrimaryContactTelexPurpose'] : '';
        $this->deliveryAddressLatitude = (isset($data['DeliveryAddressLatitude']) && !empty($data['DeliveryAddressLatitude'])) ? $data['DeliveryAddressLatitude'] : '';
        $this->invoiceAddressCountryRegionId = (isset($data['InvoiceAddressCountryRegionId']) && !empty($data['InvoiceAddressCountryRegionId'])) ? $data['InvoiceAddressCountryRegionId'] : '';
        $this->primaryContactFacebookPurpose = (isset($data['PrimaryContactFacebookPurpose']) && !empty($data['PrimaryContactFacebookPurpose'])) ? $data['PrimaryContactFacebookPurpose'] : '';
        $this->companyChain = (isset($data['CompanyChain']) && !empty($data['CompanyChain'])) ? $data['CompanyChain'] : '';
        $this->brazilianINSSCEI = (isset($data['BrazilianINSSCEI']) && !empty($data['BrazilianINSSCEI'])) ? $data['BrazilianINSSCEI'] : '';
        $this->commissionCustomerGroupId = (isset($data['CommissionCustomerGroupId']) && !empty($data['CommissionCustomerGroupId'])) ? $data['CommissionCustomerGroupId'] : '';
        $this->primaryContactFaxDescription = (isset($data['PrimaryContactFaxDescription']) && !empty($data['PrimaryContactFaxDescription'])) ? $data['PrimaryContactFaxDescription'] : '';
        $this->natureOfAssessee = (isset($data['NatureOfAssessee']) && !empty($data['NatureOfAssessee'])) ? $data['NatureOfAssessee'] : '';
        $this->writeoffReason = (isset($data['WriteoffReason']) && !empty($data['WriteoffReason'])) ? $data['WriteoffReason'] : '';
        $this->personMiddleName = (isset($data['PersonMiddleName']) && !empty($data['PersonMiddleName'])) ? $data['PersonMiddleName'] : '';
        $this->invoiceAddressLocationId = (isset($data['InvoiceAddressLocationId']) && !empty($data['InvoiceAddressLocationId'])) ? $data['InvoiceAddressLocationId'] : '';
        $this->personPhoneticLastName = (isset($data['PersonPhoneticLastName']) && !empty($data['PersonPhoneticLastName'])) ? $data['PersonPhoneticLastName'] : '';
        $this->languageId = (isset($data['LanguageId']) && !empty($data['LanguageId'])) ? $data['LanguageId'] : '';
        $this->addressStreet = (isset($data['AddressStreet']) && !empty($data['AddressStreet'])) ? $data['AddressStreet'] : '';
        $this->isPurchRequestUsed = (isset($data['IsPurchRequestUsed']) && !empty($data['IsPurchRequestUsed'])) ? $data['IsPurchRequestUsed'] : '';
        $this->isPublicSector_IT = (isset($data['IsPublicSector_IT']) && !empty($data['IsPublicSector_IT'])) ? $data['IsPublicSector_IT'] : '';
        $this->credManEligibleCreditLimitCurrency = (isset($data['CredManEligibleCreditLimitCurrency']) && !empty($data['CredManEligibleCreditLimitCurrency'])) ? $data['CredManEligibleCreditLimitCurrency'] : '';
        $this->credManCustCreditMaxAlt = (isset($data['CredManCustCreditMaxAlt']) && !empty($data['CredManCustCreditMaxAlt'])) ? $data['CredManCustCreditMaxAlt'] : '';
        $this->credManStatusReasonId = (isset($data['CredManStatusReasonId']) && !empty($data['CredManStatusReasonId'])) ? $data['CredManStatusReasonId'] : '';
        $this->credManEligibleCreditMax = (isset($data['CredManEligibleCreditMax']) && !empty($data['CredManEligibleCreditMax'])) ? $data['CredManEligibleCreditMax'] : '';
        $this->credManCustUnlimitedCredit = (isset($data['CredManCustUnlimitedCredit']) && !empty($data['CredManCustUnlimitedCredit'])) ? $data['CredManCustUnlimitedCredit'] : '';
        $this->credManEligibleCreditLimitDate = (isset($data['CredManEligibleCreditLimitDate']) && !empty($data['CredManEligibleCreditLimitDate'])) ? $data['CredManEligibleCreditLimitDate'] : '';
        $this->credManWithAgency = (isset($data['CredManWithAgency']) && !empty($data['CredManWithAgency'])) ? $data['CredManWithAgency'] : '';
        $this->credManCreditLimitDate = (isset($data['CredManCreditLimitDate']) && !empty($data['CredManCreditLimitDate'])) ? $data['CredManCreditLimitDate'] : '';
        $this->credManNextSchedReviewDate = (isset($data['CredManNextSchedReviewDate']) && !empty($data['CredManNextSchedReviewDate'])) ? $data['CredManNextSchedReviewDate'] : '';
        $this->credManLastReviewDate = (isset($data['CredManLastReviewDate']) && !empty($data['CredManLastReviewDate'])) ? $data['CredManLastReviewDate'] : '';
        $this->credManCustomerSince = (isset($data['CredManCustomerSince']) && !empty($data['CredManCustomerSince'])) ? $data['CredManCustomerSince'] : '';
        $this->credManTitleHeld = (isset($data['CredManTitleHeld']) && !empty($data['CredManTitleHeld'])) ? $data['CredManTitleHeld'] : '';
        $this->credManExclude = (isset($data['CredManExclude']) && !empty($data['CredManExclude'])) ? $data['CredManExclude'] : '';
        $this->credManBusinessStarted = (isset($data['CredManBusinessStarted']) && !empty($data['CredManBusinessStarted'])) ? $data['CredManBusinessStarted'] : '';
        $this->credManNotes = (isset($data['CredManNotes']) && !empty($data['CredManNotes'])) ? $data['CredManNotes'] : '';
        $this->credManCollectionGroupId = (isset($data['CredManCollectionGroupId']) && !empty($data['CredManCollectionGroupId'])) ? $data['CredManCollectionGroupId'] : '';
        $this->credManGroupId = (isset($data['CredManGroupId']) && !empty($data['CredManGroupId'])) ? $data['CredManGroupId'] : '';
        $this->credManAccountStatusId = (isset($data['CredManAccountStatusId']) && !empty($data['CredManAccountStatusId'])) ? $data['CredManAccountStatusId'] : '';
        $this->credManCreditLimitExpiryDate = (isset($data['CredManCreditLimitExpiryDate']) && !empty($data['CredManCreditLimitExpiryDate'])) ? $data['CredManCreditLimitExpiryDate'] : '';
        $this->eXAEPlatformEnabled = (isset($data['EXAEPlatformEnabled']) && !empty($data['EXAEPlatformEnabled'])) ? $data['EXAEPlatformEnabled'] : '';
        $this->fNDFormNoteTypeConfirmation = (isset($data['FNDFormNoteTypeConfirmation']) && !empty($data['FNDFormNoteTypeConfirmation'])) ? $data['FNDFormNoteTypeConfirmation'] : '';
        $this->fNDFormNotePackingSlip = (isset($data['FNDFormNotePackingSlip']) && !empty($data['FNDFormNotePackingSlip'])) ? $data['FNDFormNotePackingSlip'] : '';
        $this->fNDFormNoteTypePickingList = (isset($data['FNDFormNoteTypePickingList']) && !empty($data['FNDFormNoteTypePickingList'])) ? $data['FNDFormNoteTypePickingList'] : '';
        $this->fNDFormNoteProduction = (isset($data['FNDFormNoteProduction']) && !empty($data['FNDFormNoteProduction'])) ? $data['FNDFormNoteProduction'] : '';
        $this->fNDFormNotePickingList = (isset($data['FNDFormNotePickingList']) && !empty($data['FNDFormNotePickingList'])) ? $data['FNDFormNotePickingList'] : '';
        $this->fNDFormNoteConfirmation = (isset($data['FNDFormNoteConfirmation']) && !empty($data['FNDFormNoteConfirmation'])) ? $data['FNDFormNoteConfirmation'] : '';
        $this->fNDFormNoteTypeInvoice = (isset($data['FNDFormNoteTypeInvoice']) && !empty($data['FNDFormNoteTypeInvoice'])) ? $data['FNDFormNoteTypeInvoice'] : '';
        $this->fNDFormNoteTypeQuotation = (isset($data['FNDFormNoteTypeQuotation']) && !empty($data['FNDFormNoteTypeQuotation'])) ? $data['FNDFormNoteTypeQuotation'] : '';
        $this->fNDFormNoteTypePackingSlip = (isset($data['FNDFormNoteTypePackingSlip']) && !empty($data['FNDFormNoteTypePackingSlip'])) ? $data['FNDFormNoteTypePackingSlip'] : '';
        $this->fNDFormNoteQuotation = (isset($data['FNDFormNoteQuotation']) && !empty($data['FNDFormNoteQuotation'])) ? $data['FNDFormNoteQuotation'] : '';
        $this->fNDFormNoteInvoice = (isset($data['FNDFormNoteInvoice']) && !empty($data['FNDFormNoteInvoice'])) ? $data['FNDFormNoteInvoice'] : '';
        $this->fNDFormNoteTypeProduction = (isset($data['FNDFormNoteTypeProduction']) && !empty($data['FNDFormNoteTypeProduction'])) ? $data['FNDFormNoteTypeProduction'] : '';

        $this->links['self'] = "/customers/dataAreaId=$this->dataAreaId;customerAccount=$this->customerAccount";
    }

}


