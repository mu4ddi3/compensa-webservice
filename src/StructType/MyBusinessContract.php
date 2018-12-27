<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MyBusinessContract StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MyBusinessContract
 * @subpackage Structs
 */
class MyBusinessContract extends PlContract
{
    /**
     * The AdditionalDiscounts
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscounts
     */
    public $AdditionalDiscounts;
    /**
     * The AdditionalNotice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AdditionalNotice;
    /**
     * The AdditionalResolutions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AdditionalResolutions;
    /**
     * The AreMinBurglaryRequirementsFulfilled
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $AreMinBurglaryRequirementsFulfilled;
    /**
     * The AuthorizationCodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAuthorizationCode
     */
    public $AuthorizationCodes;
    /**
     * The BusinessActivities
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMyBusinessActivity
     */
    public $BusinessActivities;
    /**
     * The CalculationDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CalculationDate;
    /**
     * The Cessionary
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessCessionary
     */
    public $Cessionary;
    /**
     * The ClientHasLifePolicy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ClientHasLifePolicy;
    /**
     * The CompensaCommercialInformationAgreement
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $CompensaCommercialInformationAgreement;
    /**
     * The CompensaLifeCommercialInformationAgreement
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $CompensaLifeCommercialInformationAgreement;
    /**
     * The ContractType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessContractType
     */
    public $ContractType;
    /**
     * The District
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $District;
    /**
     * The EndDatePrev
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $EndDatePrev;
    /**
     * The FranchiseType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessFranchiseType
     */
    public $FranchiseType;
    /**
     * The HeadOfficeAgreementForPkd
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $HeadOfficeAgreementForPkd;
    /**
     * The InstallmentsNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $InstallmentsNumber;
    /**
     * The InsurancePlaceType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\InsurancePlaceType
     */
    public $InsurancePlaceType;
    /**
     * The InsuranceSumContainsVAT
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $InsuranceSumContainsVAT;
    /**
     * The InsurantOwnershipOfInsuredProperty
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $InsurantOwnershipOfInsuredProperty;
    /**
     * The InsuredAllPossessedProperty
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $InsuredAllPossessedProperty;
    /**
     * The InsurerIsInsured
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $InsurerIsInsured;
    /**
     * The IsBankruptcy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsBankruptcy;
    /**
     * The IsFullRenewalCalculationRequired
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsFullRenewalCalculationRequired;
    /**
     * The IsIssuerPartnersAdoInformed
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $IsIssuerPartnersAdoInformed;
    /**
     * The IsPkdCodesFromExternalServer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsPkdCodesFromExternalServer;
    /**
     * The IsRestricted6820PKD
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $IsRestricted6820PKD;
    /**
     * The IssueDatePrev
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $IssueDatePrev;
    /**
     * The Last3YearsLosses
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMyBusinessLossData
     */
    public $Last3YearsLosses;
    /**
     * The LastYearLossCountMoreThan3OrLossValueExceeded20k
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $LastYearLossCountMoreThan3OrLossValueExceeded20k;
    /**
     * The OfferName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OfferName;
    /**
     * The OrganizationalUnit
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\OrganizationalUnit
     */
    public $OrganizationalUnit;
    /**
     * The PostalCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PostalCode;
    /**
     * The PreviousContractId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ContractUniqueNumber
     */
    public $PreviousContractId;
    /**
     * The ProtectionOfPersonalDataAgreement
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ProtectionOfPersonalDataAgreement;
    /**
     * The RepresentativePerson
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\RepresentativePerson
     */
    public $RepresentativePerson;
    /**
     * The SettlementBasedOnTaxCard
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $SettlementBasedOnTaxCard;
    /**
     * The Stamp
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Stamp
     */
    public $Stamp;
    /**
     * The StartDatePrev
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $StartDatePrev;
    /**
     * The UnselectedBusinessActivities
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMyBusinessActivity
     */
    public $UnselectedBusinessActivities;
    /**
     * Constructor method for MyBusinessContract
     * @uses MyBusinessContract::setAdditionalDiscounts()
     * @uses MyBusinessContract::setAdditionalNotice()
     * @uses MyBusinessContract::setAdditionalResolutions()
     * @uses MyBusinessContract::setAreMinBurglaryRequirementsFulfilled()
     * @uses MyBusinessContract::setAuthorizationCodes()
     * @uses MyBusinessContract::setBusinessActivities()
     * @uses MyBusinessContract::setCalculationDate()
     * @uses MyBusinessContract::setCessionary()
     * @uses MyBusinessContract::setClientHasLifePolicy()
     * @uses MyBusinessContract::setCompensaCommercialInformationAgreement()
     * @uses MyBusinessContract::setCompensaLifeCommercialInformationAgreement()
     * @uses MyBusinessContract::setContractType()
     * @uses MyBusinessContract::setDistrict()
     * @uses MyBusinessContract::setEndDatePrev()
     * @uses MyBusinessContract::setFranchiseType()
     * @uses MyBusinessContract::setHeadOfficeAgreementForPkd()
     * @uses MyBusinessContract::setInstallmentsNumber()
     * @uses MyBusinessContract::setInsurancePlaceType()
     * @uses MyBusinessContract::setInsuranceSumContainsVAT()
     * @uses MyBusinessContract::setInsurantOwnershipOfInsuredProperty()
     * @uses MyBusinessContract::setInsuredAllPossessedProperty()
     * @uses MyBusinessContract::setInsurerIsInsured()
     * @uses MyBusinessContract::setIsBankruptcy()
     * @uses MyBusinessContract::setIsFullRenewalCalculationRequired()
     * @uses MyBusinessContract::setIsIssuerPartnersAdoInformed()
     * @uses MyBusinessContract::setIsPkdCodesFromExternalServer()
     * @uses MyBusinessContract::setIsRestricted6820PKD()
     * @uses MyBusinessContract::setIssueDatePrev()
     * @uses MyBusinessContract::setLast3YearsLosses()
     * @uses MyBusinessContract::setLastYearLossCountMoreThan3OrLossValueExceeded20k()
     * @uses MyBusinessContract::setOfferName()
     * @uses MyBusinessContract::setOrganizationalUnit()
     * @uses MyBusinessContract::setPostalCode()
     * @uses MyBusinessContract::setPreviousContractId()
     * @uses MyBusinessContract::setProtectionOfPersonalDataAgreement()
     * @uses MyBusinessContract::setRepresentativePerson()
     * @uses MyBusinessContract::setSettlementBasedOnTaxCard()
     * @uses MyBusinessContract::setStamp()
     * @uses MyBusinessContract::setStartDatePrev()
     * @uses MyBusinessContract::setUnselectedBusinessActivities()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscounts $additionalDiscounts
     * @param string $additionalNotice
     * @param string $additionalResolutions
     * @param bool $areMinBurglaryRequirementsFulfilled
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAuthorizationCode $authorizationCodes
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMyBusinessActivity $businessActivities
     * @param string $calculationDate
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessCessionary $cessionary
     * @param bool $clientHasLifePolicy
     * @param bool $compensaCommercialInformationAgreement
     * @param bool $compensaLifeCommercialInformationAgreement
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessContractType $contractType
     * @param string $district
     * @param string $endDatePrev
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessFranchiseType $franchiseType
     * @param bool $headOfficeAgreementForPkd
     * @param string $installmentsNumber
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InsurancePlaceType $insurancePlaceType
     * @param bool $insuranceSumContainsVAT
     * @param bool $insurantOwnershipOfInsuredProperty
     * @param bool $insuredAllPossessedProperty
     * @param bool $insurerIsInsured
     * @param bool $isBankruptcy
     * @param bool $isFullRenewalCalculationRequired
     * @param bool $isIssuerPartnersAdoInformed
     * @param bool $isPkdCodesFromExternalServer
     * @param bool $isRestricted6820PKD
     * @param string $issueDatePrev
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMyBusinessLossData $last3YearsLosses
     * @param bool $lastYearLossCountMoreThan3OrLossValueExceeded20k
     * @param string $offerName
     * @param \Mu4ddi3\Compensa\Webservice\StructType\OrganizationalUnit $organizationalUnit
     * @param string $postalCode
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ContractUniqueNumber $previousContractId
     * @param bool $protectionOfPersonalDataAgreement
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RepresentativePerson $representativePerson
     * @param bool $settlementBasedOnTaxCard
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Stamp $stamp
     * @param string $startDatePrev
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMyBusinessActivity $unselectedBusinessActivities
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscounts $additionalDiscounts = null, $additionalNotice = null, $additionalResolutions = null, $areMinBurglaryRequirementsFulfilled = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAuthorizationCode $authorizationCodes = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMyBusinessActivity $businessActivities = null, $calculationDate = null, \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessCessionary $cessionary = null, $clientHasLifePolicy = null, $compensaCommercialInformationAgreement = null, $compensaLifeCommercialInformationAgreement = null, \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessContractType $contractType = null, $district = null, $endDatePrev = null, \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessFranchiseType $franchiseType = null, $headOfficeAgreementForPkd = null, $installmentsNumber = null, \Mu4ddi3\Compensa\Webservice\StructType\InsurancePlaceType $insurancePlaceType = null, $insuranceSumContainsVAT = null, $insurantOwnershipOfInsuredProperty = null, $insuredAllPossessedProperty = null, $insurerIsInsured = null, $isBankruptcy = null, $isFullRenewalCalculationRequired = null, $isIssuerPartnersAdoInformed = null, $isPkdCodesFromExternalServer = null, $isRestricted6820PKD = null, $issueDatePrev = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMyBusinessLossData $last3YearsLosses = null, $lastYearLossCountMoreThan3OrLossValueExceeded20k = null, $offerName = null, \Mu4ddi3\Compensa\Webservice\StructType\OrganizationalUnit $organizationalUnit = null, $postalCode = null, \Mu4ddi3\Compensa\Webservice\StructType\ContractUniqueNumber $previousContractId = null, $protectionOfPersonalDataAgreement = null, \Mu4ddi3\Compensa\Webservice\StructType\RepresentativePerson $representativePerson = null, $settlementBasedOnTaxCard = null, \Mu4ddi3\Compensa\Webservice\StructType\Stamp $stamp = null, $startDatePrev = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMyBusinessActivity $unselectedBusinessActivities = null)
    {
        $this
            ->setAdditionalDiscounts($additionalDiscounts)
            ->setAdditionalNotice($additionalNotice)
            ->setAdditionalResolutions($additionalResolutions)
            ->setAreMinBurglaryRequirementsFulfilled($areMinBurglaryRequirementsFulfilled)
            ->setAuthorizationCodes($authorizationCodes)
            ->setBusinessActivities($businessActivities)
            ->setCalculationDate($calculationDate)
            ->setCessionary($cessionary)
            ->setClientHasLifePolicy($clientHasLifePolicy)
            ->setCompensaCommercialInformationAgreement($compensaCommercialInformationAgreement)
            ->setCompensaLifeCommercialInformationAgreement($compensaLifeCommercialInformationAgreement)
            ->setContractType($contractType)
            ->setDistrict($district)
            ->setEndDatePrev($endDatePrev)
            ->setFranchiseType($franchiseType)
            ->setHeadOfficeAgreementForPkd($headOfficeAgreementForPkd)
            ->setInstallmentsNumber($installmentsNumber)
            ->setInsurancePlaceType($insurancePlaceType)
            ->setInsuranceSumContainsVAT($insuranceSumContainsVAT)
            ->setInsurantOwnershipOfInsuredProperty($insurantOwnershipOfInsuredProperty)
            ->setInsuredAllPossessedProperty($insuredAllPossessedProperty)
            ->setInsurerIsInsured($insurerIsInsured)
            ->setIsBankruptcy($isBankruptcy)
            ->setIsFullRenewalCalculationRequired($isFullRenewalCalculationRequired)
            ->setIsIssuerPartnersAdoInformed($isIssuerPartnersAdoInformed)
            ->setIsPkdCodesFromExternalServer($isPkdCodesFromExternalServer)
            ->setIsRestricted6820PKD($isRestricted6820PKD)
            ->setIssueDatePrev($issueDatePrev)
            ->setLast3YearsLosses($last3YearsLosses)
            ->setLastYearLossCountMoreThan3OrLossValueExceeded20k($lastYearLossCountMoreThan3OrLossValueExceeded20k)
            ->setOfferName($offerName)
            ->setOrganizationalUnit($organizationalUnit)
            ->setPostalCode($postalCode)
            ->setPreviousContractId($previousContractId)
            ->setProtectionOfPersonalDataAgreement($protectionOfPersonalDataAgreement)
            ->setRepresentativePerson($representativePerson)
            ->setSettlementBasedOnTaxCard($settlementBasedOnTaxCard)
            ->setStamp($stamp)
            ->setStartDatePrev($startDatePrev)
            ->setUnselectedBusinessActivities($unselectedBusinessActivities);
    }
    /**
     * Get AdditionalDiscounts value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscounts|null
     */
    public function getAdditionalDiscounts()
    {
        return isset($this->AdditionalDiscounts) ? $this->AdditionalDiscounts : null;
    }
    /**
     * Set AdditionalDiscounts value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscounts $additionalDiscounts
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessContract
     */
    public function setAdditionalDiscounts(\Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscounts $additionalDiscounts = null)
    {
        if (is_null($additionalDiscounts) || (is_array($additionalDiscounts) && empty($additionalDiscounts))) {
            unset($this->AdditionalDiscounts);
        } else {
            $this->AdditionalDiscounts = $additionalDiscounts;
        }
        return $this;
    }
    /**
     * Get AdditionalNotice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAdditionalNotice()
    {
        return isset($this->AdditionalNotice) ? $this->AdditionalNotice : null;
    }
    /**
     * Set AdditionalNotice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $additionalNotice
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessContract
     */
    public function setAdditionalNotice($additionalNotice = null)
    {
        // validation for constraint: string
        if (!is_null($additionalNotice) && !is_string($additionalNotice)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($additionalNotice)), __LINE__);
        }
        if (is_null($additionalNotice) || (is_array($additionalNotice) && empty($additionalNotice))) {
            unset($this->AdditionalNotice);
        } else {
            $this->AdditionalNotice = $additionalNotice;
        }
        return $this;
    }
    /**
     * Get AdditionalResolutions value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAdditionalResolutions()
    {
        return isset($this->AdditionalResolutions) ? $this->AdditionalResolutions : null;
    }
    /**
     * Set AdditionalResolutions value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $additionalResolutions
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessContract
     */
    public function setAdditionalResolutions($additionalResolutions = null)
    {
        // validation for constraint: string
        if (!is_null($additionalResolutions) && !is_string($additionalResolutions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($additionalResolutions)), __LINE__);
        }
        if (is_null($additionalResolutions) || (is_array($additionalResolutions) && empty($additionalResolutions))) {
            unset($this->AdditionalResolutions);
        } else {
            $this->AdditionalResolutions = $additionalResolutions;
        }
        return $this;
    }
    /**
     * Get AreMinBurglaryRequirementsFulfilled value
     * @return bool|null
     */
    public function getAreMinBurglaryRequirementsFulfilled()
    {
        return $this->AreMinBurglaryRequirementsFulfilled;
    }
    /**
     * Set AreMinBurglaryRequirementsFulfilled value
     * @param bool $areMinBurglaryRequirementsFulfilled
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessContract
     */
    public function setAreMinBurglaryRequirementsFulfilled($areMinBurglaryRequirementsFulfilled = null)
    {
        // validation for constraint: boolean
        if (!is_null($areMinBurglaryRequirementsFulfilled) && !is_bool($areMinBurglaryRequirementsFulfilled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($areMinBurglaryRequirementsFulfilled)), __LINE__);
        }
        $this->AreMinBurglaryRequirementsFulfilled = $areMinBurglaryRequirementsFulfilled;
        return $this;
    }
    /**
     * Get AuthorizationCodes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAuthorizationCode|null
     */
    public function getAuthorizationCodes()
    {
        return isset($this->AuthorizationCodes) ? $this->AuthorizationCodes : null;
    }
    /**
     * Set AuthorizationCodes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAuthorizationCode $authorizationCodes
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessContract
     */
    public function setAuthorizationCodes(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAuthorizationCode $authorizationCodes = null)
    {
        if (is_null($authorizationCodes) || (is_array($authorizationCodes) && empty($authorizationCodes))) {
            unset($this->AuthorizationCodes);
        } else {
            $this->AuthorizationCodes = $authorizationCodes;
        }
        return $this;
    }
    /**
     * Get BusinessActivities value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMyBusinessActivity|null
     */
    public function getBusinessActivities()
    {
        return isset($this->BusinessActivities) ? $this->BusinessActivities : null;
    }
    /**
     * Set BusinessActivities value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMyBusinessActivity $businessActivities
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessContract
     */
    public function setBusinessActivities(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMyBusinessActivity $businessActivities = null)
    {
        if (is_null($businessActivities) || (is_array($businessActivities) && empty($businessActivities))) {
            unset($this->BusinessActivities);
        } else {
            $this->BusinessActivities = $businessActivities;
        }
        return $this;
    }
    /**
     * Get CalculationDate value
     * @return string|null
     */
    public function getCalculationDate()
    {
        return $this->CalculationDate;
    }
    /**
     * Set CalculationDate value
     * @param string $calculationDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessContract
     */
    public function setCalculationDate($calculationDate = null)
    {
        // validation for constraint: string
        if (!is_null($calculationDate) && !is_string($calculationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($calculationDate)), __LINE__);
        }
        $this->CalculationDate = $calculationDate;
        return $this;
    }
    /**
     * Get Cessionary value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessCessionary|null
     */
    public function getCessionary()
    {
        return isset($this->Cessionary) ? $this->Cessionary : null;
    }
    /**
     * Set Cessionary value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessCessionary $cessionary
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessContract
     */
    public function setCessionary(\Mu4ddi3\Compensa\Webservice\StructType\MyBusinessCessionary $cessionary = null)
    {
        if (is_null($cessionary) || (is_array($cessionary) && empty($cessionary))) {
            unset($this->Cessionary);
        } else {
            $this->Cessionary = $cessionary;
        }
        return $this;
    }
    /**
     * Get ClientHasLifePolicy value
     * @return bool|null
     */
    public function getClientHasLifePolicy()
    {
        return $this->ClientHasLifePolicy;
    }
    /**
     * Set ClientHasLifePolicy value
     * @param bool $clientHasLifePolicy
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessContract
     */
    public function setClientHasLifePolicy($clientHasLifePolicy = null)
    {
        // validation for constraint: boolean
        if (!is_null($clientHasLifePolicy) && !is_bool($clientHasLifePolicy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($clientHasLifePolicy)), __LINE__);
        }
        $this->ClientHasLifePolicy = $clientHasLifePolicy;
        return $this;
    }
    /**
     * Get CompensaCommercialInformationAgreement value
     * @return bool|null
     */
    public function getCompensaCommercialInformationAgreement()
    {
        return $this->CompensaCommercialInformationAgreement;
    }
    /**
     * Set CompensaCommercialInformationAgreement value
     * @param bool $compensaCommercialInformationAgreement
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessContract
     */
    public function setCompensaCommercialInformationAgreement($compensaCommercialInformationAgreement = null)
    {
        // validation for constraint: boolean
        if (!is_null($compensaCommercialInformationAgreement) && !is_bool($compensaCommercialInformationAgreement)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($compensaCommercialInformationAgreement)), __LINE__);
        }
        $this->CompensaCommercialInformationAgreement = $compensaCommercialInformationAgreement;
        return $this;
    }
    /**
     * Get CompensaLifeCommercialInformationAgreement value
     * @return bool|null
     */
    public function getCompensaLifeCommercialInformationAgreement()
    {
        return $this->CompensaLifeCommercialInformationAgreement;
    }
    /**
     * Set CompensaLifeCommercialInformationAgreement value
     * @param bool $compensaLifeCommercialInformationAgreement
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessContract
     */
    public function setCompensaLifeCommercialInformationAgreement($compensaLifeCommercialInformationAgreement = null)
    {
        // validation for constraint: boolean
        if (!is_null($compensaLifeCommercialInformationAgreement) && !is_bool($compensaLifeCommercialInformationAgreement)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($compensaLifeCommercialInformationAgreement)), __LINE__);
        }
        $this->CompensaLifeCommercialInformationAgreement = $compensaLifeCommercialInformationAgreement;
        return $this;
    }
    /**
     * Get ContractType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessContractType|null
     */
    public function getContractType()
    {
        return isset($this->ContractType) ? $this->ContractType : null;
    }
    /**
     * Set ContractType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessContractType $contractType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessContract
     */
    public function setContractType(\Mu4ddi3\Compensa\Webservice\StructType\MyBusinessContractType $contractType = null)
    {
        if (is_null($contractType) || (is_array($contractType) && empty($contractType))) {
            unset($this->ContractType);
        } else {
            $this->ContractType = $contractType;
        }
        return $this;
    }
    /**
     * Get District value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDistrict()
    {
        return isset($this->District) ? $this->District : null;
    }
    /**
     * Set District value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $district
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessContract
     */
    public function setDistrict($district = null)
    {
        // validation for constraint: string
        if (!is_null($district) && !is_string($district)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($district)), __LINE__);
        }
        if (is_null($district) || (is_array($district) && empty($district))) {
            unset($this->District);
        } else {
            $this->District = $district;
        }
        return $this;
    }
    /**
     * Get EndDatePrev value
     * @return string|null
     */
    public function getEndDatePrev()
    {
        return $this->EndDatePrev;
    }
    /**
     * Set EndDatePrev value
     * @param string $endDatePrev
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessContract
     */
    public function setEndDatePrev($endDatePrev = null)
    {
        // validation for constraint: string
        if (!is_null($endDatePrev) && !is_string($endDatePrev)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endDatePrev)), __LINE__);
        }
        $this->EndDatePrev = $endDatePrev;
        return $this;
    }
    /**
     * Get FranchiseType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessFranchiseType|null
     */
    public function getFranchiseType()
    {
        return isset($this->FranchiseType) ? $this->FranchiseType : null;
    }
    /**
     * Set FranchiseType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessFranchiseType $franchiseType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessContract
     */
    public function setFranchiseType(\Mu4ddi3\Compensa\Webservice\StructType\MyBusinessFranchiseType $franchiseType = null)
    {
        if (is_null($franchiseType) || (is_array($franchiseType) && empty($franchiseType))) {
            unset($this->FranchiseType);
        } else {
            $this->FranchiseType = $franchiseType;
        }
        return $this;
    }
    /**
     * Get HeadOfficeAgreementForPkd value
     * @return bool|null
     */
    public function getHeadOfficeAgreementForPkd()
    {
        return $this->HeadOfficeAgreementForPkd;
    }
    /**
     * Set HeadOfficeAgreementForPkd value
     * @param bool $headOfficeAgreementForPkd
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessContract
     */
    public function setHeadOfficeAgreementForPkd($headOfficeAgreementForPkd = null)
    {
        // validation for constraint: boolean
        if (!is_null($headOfficeAgreementForPkd) && !is_bool($headOfficeAgreementForPkd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($headOfficeAgreementForPkd)), __LINE__);
        }
        $this->HeadOfficeAgreementForPkd = $headOfficeAgreementForPkd;
        return $this;
    }
    /**
     * Get InstallmentsNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInstallmentsNumber()
    {
        return isset($this->InstallmentsNumber) ? $this->InstallmentsNumber : null;
    }
    /**
     * Set InstallmentsNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\InstallmentsNumber::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\InstallmentsNumber::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $installmentsNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessContract
     */
    public function setInstallmentsNumber($installmentsNumber = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\InstallmentsNumber::valueIsValid($installmentsNumber)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $installmentsNumber, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\InstallmentsNumber::getValidValues())), __LINE__);
        }
        if (is_null($installmentsNumber) || (is_array($installmentsNumber) && empty($installmentsNumber))) {
            unset($this->InstallmentsNumber);
        } else {
            $this->InstallmentsNumber = $installmentsNumber;
        }
        return $this;
    }
    /**
     * Get InsurancePlaceType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsurancePlaceType|null
     */
    public function getInsurancePlaceType()
    {
        return isset($this->InsurancePlaceType) ? $this->InsurancePlaceType : null;
    }
    /**
     * Set InsurancePlaceType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InsurancePlaceType $insurancePlaceType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessContract
     */
    public function setInsurancePlaceType(\Mu4ddi3\Compensa\Webservice\StructType\InsurancePlaceType $insurancePlaceType = null)
    {
        if (is_null($insurancePlaceType) || (is_array($insurancePlaceType) && empty($insurancePlaceType))) {
            unset($this->InsurancePlaceType);
        } else {
            $this->InsurancePlaceType = $insurancePlaceType;
        }
        return $this;
    }
    /**
     * Get InsuranceSumContainsVAT value
     * @return bool|null
     */
    public function getInsuranceSumContainsVAT()
    {
        return $this->InsuranceSumContainsVAT;
    }
    /**
     * Set InsuranceSumContainsVAT value
     * @param bool $insuranceSumContainsVAT
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessContract
     */
    public function setInsuranceSumContainsVAT($insuranceSumContainsVAT = null)
    {
        // validation for constraint: boolean
        if (!is_null($insuranceSumContainsVAT) && !is_bool($insuranceSumContainsVAT)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($insuranceSumContainsVAT)), __LINE__);
        }
        $this->InsuranceSumContainsVAT = $insuranceSumContainsVAT;
        return $this;
    }
    /**
     * Get InsurantOwnershipOfInsuredProperty value
     * @return bool|null
     */
    public function getInsurantOwnershipOfInsuredProperty()
    {
        return $this->InsurantOwnershipOfInsuredProperty;
    }
    /**
     * Set InsurantOwnershipOfInsuredProperty value
     * @param bool $insurantOwnershipOfInsuredProperty
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessContract
     */
    public function setInsurantOwnershipOfInsuredProperty($insurantOwnershipOfInsuredProperty = null)
    {
        // validation for constraint: boolean
        if (!is_null($insurantOwnershipOfInsuredProperty) && !is_bool($insurantOwnershipOfInsuredProperty)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($insurantOwnershipOfInsuredProperty)), __LINE__);
        }
        $this->InsurantOwnershipOfInsuredProperty = $insurantOwnershipOfInsuredProperty;
        return $this;
    }
    /**
     * Get InsuredAllPossessedProperty value
     * @return bool|null
     */
    public function getInsuredAllPossessedProperty()
    {
        return $this->InsuredAllPossessedProperty;
    }
    /**
     * Set InsuredAllPossessedProperty value
     * @param bool $insuredAllPossessedProperty
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessContract
     */
    public function setInsuredAllPossessedProperty($insuredAllPossessedProperty = null)
    {
        // validation for constraint: boolean
        if (!is_null($insuredAllPossessedProperty) && !is_bool($insuredAllPossessedProperty)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($insuredAllPossessedProperty)), __LINE__);
        }
        $this->InsuredAllPossessedProperty = $insuredAllPossessedProperty;
        return $this;
    }
    /**
     * Get InsurerIsInsured value
     * @return bool|null
     */
    public function getInsurerIsInsured()
    {
        return $this->InsurerIsInsured;
    }
    /**
     * Set InsurerIsInsured value
     * @param bool $insurerIsInsured
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessContract
     */
    public function setInsurerIsInsured($insurerIsInsured = null)
    {
        // validation for constraint: boolean
        if (!is_null($insurerIsInsured) && !is_bool($insurerIsInsured)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($insurerIsInsured)), __LINE__);
        }
        $this->InsurerIsInsured = $insurerIsInsured;
        return $this;
    }
    /**
     * Get IsBankruptcy value
     * @return bool|null
     */
    public function getIsBankruptcy()
    {
        return $this->IsBankruptcy;
    }
    /**
     * Set IsBankruptcy value
     * @param bool $isBankruptcy
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessContract
     */
    public function setIsBankruptcy($isBankruptcy = null)
    {
        // validation for constraint: boolean
        if (!is_null($isBankruptcy) && !is_bool($isBankruptcy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isBankruptcy)), __LINE__);
        }
        $this->IsBankruptcy = $isBankruptcy;
        return $this;
    }
    /**
     * Get IsFullRenewalCalculationRequired value
     * @return bool|null
     */
    public function getIsFullRenewalCalculationRequired()
    {
        return $this->IsFullRenewalCalculationRequired;
    }
    /**
     * Set IsFullRenewalCalculationRequired value
     * @param bool $isFullRenewalCalculationRequired
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessContract
     */
    public function setIsFullRenewalCalculationRequired($isFullRenewalCalculationRequired = null)
    {
        // validation for constraint: boolean
        if (!is_null($isFullRenewalCalculationRequired) && !is_bool($isFullRenewalCalculationRequired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isFullRenewalCalculationRequired)), __LINE__);
        }
        $this->IsFullRenewalCalculationRequired = $isFullRenewalCalculationRequired;
        return $this;
    }
    /**
     * Get IsIssuerPartnersAdoInformed value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsIssuerPartnersAdoInformed()
    {
        return isset($this->IsIssuerPartnersAdoInformed) ? $this->IsIssuerPartnersAdoInformed : null;
    }
    /**
     * Set IsIssuerPartnersAdoInformed value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isIssuerPartnersAdoInformed
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessContract
     */
    public function setIsIssuerPartnersAdoInformed($isIssuerPartnersAdoInformed = null)
    {
        // validation for constraint: boolean
        if (!is_null($isIssuerPartnersAdoInformed) && !is_bool($isIssuerPartnersAdoInformed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isIssuerPartnersAdoInformed)), __LINE__);
        }
        if (is_null($isIssuerPartnersAdoInformed) || (is_array($isIssuerPartnersAdoInformed) && empty($isIssuerPartnersAdoInformed))) {
            unset($this->IsIssuerPartnersAdoInformed);
        } else {
            $this->IsIssuerPartnersAdoInformed = $isIssuerPartnersAdoInformed;
        }
        return $this;
    }
    /**
     * Get IsPkdCodesFromExternalServer value
     * @return bool|null
     */
    public function getIsPkdCodesFromExternalServer()
    {
        return $this->IsPkdCodesFromExternalServer;
    }
    /**
     * Set IsPkdCodesFromExternalServer value
     * @param bool $isPkdCodesFromExternalServer
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessContract
     */
    public function setIsPkdCodesFromExternalServer($isPkdCodesFromExternalServer = null)
    {
        // validation for constraint: boolean
        if (!is_null($isPkdCodesFromExternalServer) && !is_bool($isPkdCodesFromExternalServer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isPkdCodesFromExternalServer)), __LINE__);
        }
        $this->IsPkdCodesFromExternalServer = $isPkdCodesFromExternalServer;
        return $this;
    }
    /**
     * Get IsRestricted6820PKD value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsRestricted6820PKD()
    {
        return isset($this->IsRestricted6820PKD) ? $this->IsRestricted6820PKD : null;
    }
    /**
     * Set IsRestricted6820PKD value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isRestricted6820PKD
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessContract
     */
    public function setIsRestricted6820PKD($isRestricted6820PKD = null)
    {
        // validation for constraint: boolean
        if (!is_null($isRestricted6820PKD) && !is_bool($isRestricted6820PKD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isRestricted6820PKD)), __LINE__);
        }
        if (is_null($isRestricted6820PKD) || (is_array($isRestricted6820PKD) && empty($isRestricted6820PKD))) {
            unset($this->IsRestricted6820PKD);
        } else {
            $this->IsRestricted6820PKD = $isRestricted6820PKD;
        }
        return $this;
    }
    /**
     * Get IssueDatePrev value
     * @return string|null
     */
    public function getIssueDatePrev()
    {
        return $this->IssueDatePrev;
    }
    /**
     * Set IssueDatePrev value
     * @param string $issueDatePrev
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessContract
     */
    public function setIssueDatePrev($issueDatePrev = null)
    {
        // validation for constraint: string
        if (!is_null($issueDatePrev) && !is_string($issueDatePrev)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($issueDatePrev)), __LINE__);
        }
        $this->IssueDatePrev = $issueDatePrev;
        return $this;
    }
    /**
     * Get Last3YearsLosses value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMyBusinessLossData|null
     */
    public function getLast3YearsLosses()
    {
        return isset($this->Last3YearsLosses) ? $this->Last3YearsLosses : null;
    }
    /**
     * Set Last3YearsLosses value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMyBusinessLossData $last3YearsLosses
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessContract
     */
    public function setLast3YearsLosses(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMyBusinessLossData $last3YearsLosses = null)
    {
        if (is_null($last3YearsLosses) || (is_array($last3YearsLosses) && empty($last3YearsLosses))) {
            unset($this->Last3YearsLosses);
        } else {
            $this->Last3YearsLosses = $last3YearsLosses;
        }
        return $this;
    }
    /**
     * Get LastYearLossCountMoreThan3OrLossValueExceeded20k value
     * @return bool|null
     */
    public function getLastYearLossCountMoreThan3OrLossValueExceeded20k()
    {
        return $this->LastYearLossCountMoreThan3OrLossValueExceeded20k;
    }
    /**
     * Set LastYearLossCountMoreThan3OrLossValueExceeded20k value
     * @param bool $lastYearLossCountMoreThan3OrLossValueExceeded20k
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessContract
     */
    public function setLastYearLossCountMoreThan3OrLossValueExceeded20k($lastYearLossCountMoreThan3OrLossValueExceeded20k = null)
    {
        // validation for constraint: boolean
        if (!is_null($lastYearLossCountMoreThan3OrLossValueExceeded20k) && !is_bool($lastYearLossCountMoreThan3OrLossValueExceeded20k)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($lastYearLossCountMoreThan3OrLossValueExceeded20k)), __LINE__);
        }
        $this->LastYearLossCountMoreThan3OrLossValueExceeded20k = $lastYearLossCountMoreThan3OrLossValueExceeded20k;
        return $this;
    }
    /**
     * Get OfferName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOfferName()
    {
        return isset($this->OfferName) ? $this->OfferName : null;
    }
    /**
     * Set OfferName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $offerName
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessContract
     */
    public function setOfferName($offerName = null)
    {
        // validation for constraint: string
        if (!is_null($offerName) && !is_string($offerName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($offerName)), __LINE__);
        }
        if (is_null($offerName) || (is_array($offerName) && empty($offerName))) {
            unset($this->OfferName);
        } else {
            $this->OfferName = $offerName;
        }
        return $this;
    }
    /**
     * Get OrganizationalUnit value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OrganizationalUnit|null
     */
    public function getOrganizationalUnit()
    {
        return isset($this->OrganizationalUnit) ? $this->OrganizationalUnit : null;
    }
    /**
     * Set OrganizationalUnit value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\OrganizationalUnit $organizationalUnit
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessContract
     */
    public function setOrganizationalUnit(\Mu4ddi3\Compensa\Webservice\StructType\OrganizationalUnit $organizationalUnit = null)
    {
        if (is_null($organizationalUnit) || (is_array($organizationalUnit) && empty($organizationalUnit))) {
            unset($this->OrganizationalUnit);
        } else {
            $this->OrganizationalUnit = $organizationalUnit;
        }
        return $this;
    }
    /**
     * Get PostalCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPostalCode()
    {
        return isset($this->PostalCode) ? $this->PostalCode : null;
    }
    /**
     * Set PostalCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $postalCode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessContract
     */
    public function setPostalCode($postalCode = null)
    {
        // validation for constraint: string
        if (!is_null($postalCode) && !is_string($postalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postalCode)), __LINE__);
        }
        if (is_null($postalCode) || (is_array($postalCode) && empty($postalCode))) {
            unset($this->PostalCode);
        } else {
            $this->PostalCode = $postalCode;
        }
        return $this;
    }
    /**
     * Get PreviousContractId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ContractUniqueNumber|null
     */
    public function getPreviousContractId()
    {
        return isset($this->PreviousContractId) ? $this->PreviousContractId : null;
    }
    /**
     * Set PreviousContractId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ContractUniqueNumber $previousContractId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessContract
     */
    public function setPreviousContractId(\Mu4ddi3\Compensa\Webservice\StructType\ContractUniqueNumber $previousContractId = null)
    {
        if (is_null($previousContractId) || (is_array($previousContractId) && empty($previousContractId))) {
            unset($this->PreviousContractId);
        } else {
            $this->PreviousContractId = $previousContractId;
        }
        return $this;
    }
    /**
     * Get ProtectionOfPersonalDataAgreement value
     * @return bool|null
     */
    public function getProtectionOfPersonalDataAgreement()
    {
        return $this->ProtectionOfPersonalDataAgreement;
    }
    /**
     * Set ProtectionOfPersonalDataAgreement value
     * @param bool $protectionOfPersonalDataAgreement
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessContract
     */
    public function setProtectionOfPersonalDataAgreement($protectionOfPersonalDataAgreement = null)
    {
        // validation for constraint: boolean
        if (!is_null($protectionOfPersonalDataAgreement) && !is_bool($protectionOfPersonalDataAgreement)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($protectionOfPersonalDataAgreement)), __LINE__);
        }
        $this->ProtectionOfPersonalDataAgreement = $protectionOfPersonalDataAgreement;
        return $this;
    }
    /**
     * Get RepresentativePerson value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RepresentativePerson|null
     */
    public function getRepresentativePerson()
    {
        return isset($this->RepresentativePerson) ? $this->RepresentativePerson : null;
    }
    /**
     * Set RepresentativePerson value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RepresentativePerson $representativePerson
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessContract
     */
    public function setRepresentativePerson(\Mu4ddi3\Compensa\Webservice\StructType\RepresentativePerson $representativePerson = null)
    {
        if (is_null($representativePerson) || (is_array($representativePerson) && empty($representativePerson))) {
            unset($this->RepresentativePerson);
        } else {
            $this->RepresentativePerson = $representativePerson;
        }
        return $this;
    }
    /**
     * Get SettlementBasedOnTaxCard value
     * @return bool|null
     */
    public function getSettlementBasedOnTaxCard()
    {
        return $this->SettlementBasedOnTaxCard;
    }
    /**
     * Set SettlementBasedOnTaxCard value
     * @param bool $settlementBasedOnTaxCard
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessContract
     */
    public function setSettlementBasedOnTaxCard($settlementBasedOnTaxCard = null)
    {
        // validation for constraint: boolean
        if (!is_null($settlementBasedOnTaxCard) && !is_bool($settlementBasedOnTaxCard)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($settlementBasedOnTaxCard)), __LINE__);
        }
        $this->SettlementBasedOnTaxCard = $settlementBasedOnTaxCard;
        return $this;
    }
    /**
     * Get Stamp value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Stamp|null
     */
    public function getStamp()
    {
        return isset($this->Stamp) ? $this->Stamp : null;
    }
    /**
     * Set Stamp value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Stamp $stamp
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessContract
     */
    public function setStamp(\Mu4ddi3\Compensa\Webservice\StructType\Stamp $stamp = null)
    {
        if (is_null($stamp) || (is_array($stamp) && empty($stamp))) {
            unset($this->Stamp);
        } else {
            $this->Stamp = $stamp;
        }
        return $this;
    }
    /**
     * Get StartDatePrev value
     * @return string|null
     */
    public function getStartDatePrev()
    {
        return $this->StartDatePrev;
    }
    /**
     * Set StartDatePrev value
     * @param string $startDatePrev
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessContract
     */
    public function setStartDatePrev($startDatePrev = null)
    {
        // validation for constraint: string
        if (!is_null($startDatePrev) && !is_string($startDatePrev)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startDatePrev)), __LINE__);
        }
        $this->StartDatePrev = $startDatePrev;
        return $this;
    }
    /**
     * Get UnselectedBusinessActivities value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMyBusinessActivity|null
     */
    public function getUnselectedBusinessActivities()
    {
        return isset($this->UnselectedBusinessActivities) ? $this->UnselectedBusinessActivities : null;
    }
    /**
     * Set UnselectedBusinessActivities value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMyBusinessActivity $unselectedBusinessActivities
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessContract
     */
    public function setUnselectedBusinessActivities(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMyBusinessActivity $unselectedBusinessActivities = null)
    {
        if (is_null($unselectedBusinessActivities) || (is_array($unselectedBusinessActivities) && empty($unselectedBusinessActivities))) {
            unset($this->UnselectedBusinessActivities);
        } else {
            $this->UnselectedBusinessActivities = $unselectedBusinessActivities;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessContract
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
