<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MotorContract StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MotorContract
 * @subpackage Structs
 */
class MotorContract extends PlContract
{
    /**
     * The AdditionalPartnersCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $AdditionalPartnersCount;
    /**
     * The AdditionalTerms
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AdditionalTerms;
    /**
     * The AuthorizationCodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAuthorizationCode
     */
    public $AuthorizationCodes;
    /**
     * The AvaliableAcClaimSettlementVariants
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimSettlementVariant
     */
    public $AvaliableAcClaimSettlementVariants;
    /**
     * The AvaliableClauses
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMotorClauseInformation
     */
    public $AvaliableClauses;
    /**
     * The BonusMalusCalculationInformation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusCalculationInformation
     */
    public $BonusMalusCalculationInformation;
    /**
     * The CalculationDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CalculationDate;
    /**
     * The CalculationMode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CalculationMode;
    /**
     * The CaseNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CaseNumber;
    /**
     * The Cessionary
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Cessionary
     */
    public $Cessionary;
    /**
     * The CoOwner
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MotorPartner
     */
    public $CoOwner;
    /**
     * The CoOwnerType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CoOwnerType;
    /**
     * The ContractType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ContractType
     */
    public $ContractType;
    /**
     * The CrossSellWith21021
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $CrossSellWith21021;
    /**
     * The DaysOfferValidity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $DaysOfferValidity;
    /**
     * The Declarations
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Declarations
     */
    public $Declarations;
    /**
     * The DepartmentContractScope
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DepartmentContractScope;
    /**
     * The InstallmentsNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $InstallmentsNumber;
    /**
     * The InsurerDocumentForPromotion
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $InsurerDocumentForPromotion;
    /**
     * The InternetSalesConfiguration
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\InternetSalesConfiguration
     */
    public $InternetSalesConfiguration;
    /**
     * The IsCentralDiscountBlocked
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsCentralDiscountBlocked;
    /**
     * The IsEmployeeDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsEmployeeDiscount;
    /**
     * The IsInternationalTransport
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsInternationalTransport;
    /**
     * The IsNationalTransport
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsNationalTransport;
    /**
     * The IsOtherUser
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsOtherUser;
    /**
     * The IsPackageSpecyficConditionDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsPackageSpecyficConditionDescription;
    /**
     * The IsRequiredSelectCalculationMode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsRequiredSelectCalculationMode;
    /**
     * The IsShortTerm
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsShortTerm;
    /**
     * The IsUnderwriterDiscountBlocked
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsUnderwriterDiscountBlocked;
    /**
     * The ItisChecksum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ItisChecksum;
    /**
     * The LifeInsurances
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfLifeInsurancePolicyInfo
     */
    public $LifeInsurances;
    /**
     * The MonthsCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MonthsCount;
    /**
     * The OfferName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OfferName;
    /**
     * The Owner
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MotorPartner
     */
    public $Owner;
    /**
     * The PackageAdditionalData
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PackageAdditionalData
     */
    public $PackageAdditionalData;
    /**
     * The PackageCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PackageCode;
    /**
     * The PackageName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PackageName;
    /**
     * The PackageRangeDefinition
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeDefinition
     */
    public $PackageRangeDefinition;
    /**
     * The PackageRangeFilter
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeFilter
     */
    public $PackageRangeFilter;
    /**
     * The PackagesChanges
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPackageRangeDefinition
     */
    public $PackagesChanges;
    /**
     * The PartnersDataCorrections
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMotorPartnerCorrectionData
     */
    public $PartnersDataCorrections;
    /**
     * The Permissions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Permissions
     */
    public $Permissions;
    /**
     * The PolgenId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PolgenId;
    /**
     * The PremiumAdjustedToMinimalPremium
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $PremiumAdjustedToMinimalPremium;
    /**
     * The PreviousInsuranceCompanyInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PreviousInsuranceCompanyInfo
     */
    public $PreviousInsuranceCompanyInfo;
    /**
     * The PriceTestsData
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PriceTestsData
     */
    public $PriceTestsData;
    /**
     * The PrintsConfiguration
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PrintsConfiguration
     */
    public $PrintsConfiguration;
    /**
     * The PropertyInsurances
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPropertyInsurancePolicyInfo
     */
    public $PropertyInsurances;
    /**
     * The RenewalData
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\RenewalData
     */
    public $RenewalData;
    /**
     * The RenewalProcessingAppVariant
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RenewalProcessingAppVariant;
    /**
     * The RisksAvailableToChoose
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRiskCode
     */
    public $RisksAvailableToChoose;
    /**
     * The SameVehicleInsuranceInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\SameVehicleInsuranceInfo
     */
    public $SameVehicleInsuranceInfo;
    /**
     * The SavedPackagesIds
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint
     */
    public $SavedPackagesIds;
    /**
     * The SelectedPackagesIds
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint
     */
    public $SelectedPackagesIds;
    /**
     * The SpecificPackageConditionsDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SpecificPackageConditionsDescription;
    /**
     * The Stamp
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Stamp
     */
    public $Stamp;
    /**
     * The TariffVersion
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\TariffVersion
     */
    public $TariffVersion;
    /**
     * The VerificationBonusMalus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\BonusMalus
     */
    public $VerificationBonusMalus;
    /**
     * The VerificationData
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\VerificationData
     */
    public $VerificationData;
    /**
     * The YoungestOtherUserAge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $YoungestOtherUserAge;
    /**
     * The YoungestUserAge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $YoungestUserAge;
    /**
     * The ZoneSource
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ZoneSource;
    /**
     * Constructor method for MotorContract
     * @uses MotorContract::setAdditionalPartnersCount()
     * @uses MotorContract::setAdditionalTerms()
     * @uses MotorContract::setAuthorizationCodes()
     * @uses MotorContract::setAvaliableAcClaimSettlementVariants()
     * @uses MotorContract::setAvaliableClauses()
     * @uses MotorContract::setBonusMalusCalculationInformation()
     * @uses MotorContract::setCalculationDate()
     * @uses MotorContract::setCalculationMode()
     * @uses MotorContract::setCaseNumber()
     * @uses MotorContract::setCessionary()
     * @uses MotorContract::setCoOwner()
     * @uses MotorContract::setCoOwnerType()
     * @uses MotorContract::setContractType()
     * @uses MotorContract::setCrossSellWith21021()
     * @uses MotorContract::setDaysOfferValidity()
     * @uses MotorContract::setDeclarations()
     * @uses MotorContract::setDepartmentContractScope()
     * @uses MotorContract::setInstallmentsNumber()
     * @uses MotorContract::setInsurerDocumentForPromotion()
     * @uses MotorContract::setInternetSalesConfiguration()
     * @uses MotorContract::setIsCentralDiscountBlocked()
     * @uses MotorContract::setIsEmployeeDiscount()
     * @uses MotorContract::setIsInternationalTransport()
     * @uses MotorContract::setIsNationalTransport()
     * @uses MotorContract::setIsOtherUser()
     * @uses MotorContract::setIsPackageSpecyficConditionDescription()
     * @uses MotorContract::setIsRequiredSelectCalculationMode()
     * @uses MotorContract::setIsShortTerm()
     * @uses MotorContract::setIsUnderwriterDiscountBlocked()
     * @uses MotorContract::setItisChecksum()
     * @uses MotorContract::setLifeInsurances()
     * @uses MotorContract::setMonthsCount()
     * @uses MotorContract::setOfferName()
     * @uses MotorContract::setOwner()
     * @uses MotorContract::setPackageAdditionalData()
     * @uses MotorContract::setPackageCode()
     * @uses MotorContract::setPackageName()
     * @uses MotorContract::setPackageRangeDefinition()
     * @uses MotorContract::setPackageRangeFilter()
     * @uses MotorContract::setPackagesChanges()
     * @uses MotorContract::setPartnersDataCorrections()
     * @uses MotorContract::setPermissions()
     * @uses MotorContract::setPolgenId()
     * @uses MotorContract::setPremiumAdjustedToMinimalPremium()
     * @uses MotorContract::setPreviousInsuranceCompanyInfo()
     * @uses MotorContract::setPriceTestsData()
     * @uses MotorContract::setPrintsConfiguration()
     * @uses MotorContract::setPropertyInsurances()
     * @uses MotorContract::setRenewalData()
     * @uses MotorContract::setRenewalProcessingAppVariant()
     * @uses MotorContract::setRisksAvailableToChoose()
     * @uses MotorContract::setSameVehicleInsuranceInfo()
     * @uses MotorContract::setSavedPackagesIds()
     * @uses MotorContract::setSelectedPackagesIds()
     * @uses MotorContract::setSpecificPackageConditionsDescription()
     * @uses MotorContract::setStamp()
     * @uses MotorContract::setTariffVersion()
     * @uses MotorContract::setVerificationBonusMalus()
     * @uses MotorContract::setVerificationData()
     * @uses MotorContract::setYoungestOtherUserAge()
     * @uses MotorContract::setYoungestUserAge()
     * @uses MotorContract::setZoneSource()
     * @param int $additionalPartnersCount
     * @param string $additionalTerms
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAuthorizationCode $authorizationCodes
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimSettlementVariant $avaliableAcClaimSettlementVariants
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMotorClauseInformation $avaliableClauses
     * @param \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusCalculationInformation $bonusMalusCalculationInformation
     * @param string $calculationDate
     * @param string $calculationMode
     * @param string $caseNumber
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Cessionary $cessionary
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MotorPartner $coOwner
     * @param string $coOwnerType
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ContractType $contractType
     * @param bool $crossSellWith21021
     * @param int $daysOfferValidity
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Declarations $declarations
     * @param string $departmentContractScope
     * @param string $installmentsNumber
     * @param string $insurerDocumentForPromotion
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InternetSalesConfiguration $internetSalesConfiguration
     * @param bool $isCentralDiscountBlocked
     * @param bool $isEmployeeDiscount
     * @param bool $isInternationalTransport
     * @param bool $isNationalTransport
     * @param bool $isOtherUser
     * @param bool $isPackageSpecyficConditionDescription
     * @param bool $isRequiredSelectCalculationMode
     * @param bool $isShortTerm
     * @param bool $isUnderwriterDiscountBlocked
     * @param string $itisChecksum
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfLifeInsurancePolicyInfo $lifeInsurances
     * @param int $monthsCount
     * @param string $offerName
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MotorPartner $owner
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PackageAdditionalData $packageAdditionalData
     * @param string $packageCode
     * @param string $packageName
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeDefinition $packageRangeDefinition
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeFilter $packageRangeFilter
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPackageRangeDefinition $packagesChanges
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMotorPartnerCorrectionData $partnersDataCorrections
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Permissions $permissions
     * @param int $polgenId
     * @param bool $premiumAdjustedToMinimalPremium
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PreviousInsuranceCompanyInfo $previousInsuranceCompanyInfo
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PriceTestsData $priceTestsData
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PrintsConfiguration $printsConfiguration
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPropertyInsurancePolicyInfo $propertyInsurances
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RenewalData $renewalData
     * @param string $renewalProcessingAppVariant
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRiskCode $risksAvailableToChoose
     * @param \Mu4ddi3\Compensa\Webservice\StructType\SameVehicleInsuranceInfo $sameVehicleInsuranceInfo
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint $savedPackagesIds
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint $selectedPackagesIds
     * @param string $specificPackageConditionsDescription
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Stamp $stamp
     * @param \Mu4ddi3\Compensa\Webservice\StructType\TariffVersion $tariffVersion
     * @param \Mu4ddi3\Compensa\Webservice\StructType\BonusMalus $verificationBonusMalus
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VerificationData $verificationData
     * @param int $youngestOtherUserAge
     * @param int $youngestUserAge
     * @param string $zoneSource
     */
    public function __construct($additionalPartnersCount = null, $additionalTerms = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAuthorizationCode $authorizationCodes = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimSettlementVariant $avaliableAcClaimSettlementVariants = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMotorClauseInformation $avaliableClauses = null, \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusCalculationInformation $bonusMalusCalculationInformation = null, $calculationDate = null, $calculationMode = null, $caseNumber = null, \Mu4ddi3\Compensa\Webservice\StructType\Cessionary $cessionary = null, \Mu4ddi3\Compensa\Webservice\StructType\MotorPartner $coOwner = null, $coOwnerType = null, \Mu4ddi3\Compensa\Webservice\StructType\ContractType $contractType = null, $crossSellWith21021 = null, $daysOfferValidity = null, \Mu4ddi3\Compensa\Webservice\StructType\Declarations $declarations = null, $departmentContractScope = null, $installmentsNumber = null, $insurerDocumentForPromotion = null, \Mu4ddi3\Compensa\Webservice\StructType\InternetSalesConfiguration $internetSalesConfiguration = null, $isCentralDiscountBlocked = null, $isEmployeeDiscount = null, $isInternationalTransport = null, $isNationalTransport = null, $isOtherUser = null, $isPackageSpecyficConditionDescription = null, $isRequiredSelectCalculationMode = null, $isShortTerm = null, $isUnderwriterDiscountBlocked = null, $itisChecksum = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfLifeInsurancePolicyInfo $lifeInsurances = null, $monthsCount = null, $offerName = null, \Mu4ddi3\Compensa\Webservice\StructType\MotorPartner $owner = null, \Mu4ddi3\Compensa\Webservice\StructType\PackageAdditionalData $packageAdditionalData = null, $packageCode = null, $packageName = null, \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeDefinition $packageRangeDefinition = null, \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeFilter $packageRangeFilter = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPackageRangeDefinition $packagesChanges = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMotorPartnerCorrectionData $partnersDataCorrections = null, \Mu4ddi3\Compensa\Webservice\StructType\Permissions $permissions = null, $polgenId = null, $premiumAdjustedToMinimalPremium = null, \Mu4ddi3\Compensa\Webservice\StructType\PreviousInsuranceCompanyInfo $previousInsuranceCompanyInfo = null, \Mu4ddi3\Compensa\Webservice\StructType\PriceTestsData $priceTestsData = null, \Mu4ddi3\Compensa\Webservice\StructType\PrintsConfiguration $printsConfiguration = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPropertyInsurancePolicyInfo $propertyInsurances = null, \Mu4ddi3\Compensa\Webservice\StructType\RenewalData $renewalData = null, $renewalProcessingAppVariant = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRiskCode $risksAvailableToChoose = null, \Mu4ddi3\Compensa\Webservice\StructType\SameVehicleInsuranceInfo $sameVehicleInsuranceInfo = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint $savedPackagesIds = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint $selectedPackagesIds = null, $specificPackageConditionsDescription = null, \Mu4ddi3\Compensa\Webservice\StructType\Stamp $stamp = null, \Mu4ddi3\Compensa\Webservice\StructType\TariffVersion $tariffVersion = null, \Mu4ddi3\Compensa\Webservice\StructType\BonusMalus $verificationBonusMalus = null, \Mu4ddi3\Compensa\Webservice\StructType\VerificationData $verificationData = null, $youngestOtherUserAge = null, $youngestUserAge = null, $zoneSource = null)
    {
        $this
            ->setAdditionalPartnersCount($additionalPartnersCount)
            ->setAdditionalTerms($additionalTerms)
            ->setAuthorizationCodes($authorizationCodes)
            ->setAvaliableAcClaimSettlementVariants($avaliableAcClaimSettlementVariants)
            ->setAvaliableClauses($avaliableClauses)
            ->setBonusMalusCalculationInformation($bonusMalusCalculationInformation)
            ->setCalculationDate($calculationDate)
            ->setCalculationMode($calculationMode)
            ->setCaseNumber($caseNumber)
            ->setCessionary($cessionary)
            ->setCoOwner($coOwner)
            ->setCoOwnerType($coOwnerType)
            ->setContractType($contractType)
            ->setCrossSellWith21021($crossSellWith21021)
            ->setDaysOfferValidity($daysOfferValidity)
            ->setDeclarations($declarations)
            ->setDepartmentContractScope($departmentContractScope)
            ->setInstallmentsNumber($installmentsNumber)
            ->setInsurerDocumentForPromotion($insurerDocumentForPromotion)
            ->setInternetSalesConfiguration($internetSalesConfiguration)
            ->setIsCentralDiscountBlocked($isCentralDiscountBlocked)
            ->setIsEmployeeDiscount($isEmployeeDiscount)
            ->setIsInternationalTransport($isInternationalTransport)
            ->setIsNationalTransport($isNationalTransport)
            ->setIsOtherUser($isOtherUser)
            ->setIsPackageSpecyficConditionDescription($isPackageSpecyficConditionDescription)
            ->setIsRequiredSelectCalculationMode($isRequiredSelectCalculationMode)
            ->setIsShortTerm($isShortTerm)
            ->setIsUnderwriterDiscountBlocked($isUnderwriterDiscountBlocked)
            ->setItisChecksum($itisChecksum)
            ->setLifeInsurances($lifeInsurances)
            ->setMonthsCount($monthsCount)
            ->setOfferName($offerName)
            ->setOwner($owner)
            ->setPackageAdditionalData($packageAdditionalData)
            ->setPackageCode($packageCode)
            ->setPackageName($packageName)
            ->setPackageRangeDefinition($packageRangeDefinition)
            ->setPackageRangeFilter($packageRangeFilter)
            ->setPackagesChanges($packagesChanges)
            ->setPartnersDataCorrections($partnersDataCorrections)
            ->setPermissions($permissions)
            ->setPolgenId($polgenId)
            ->setPremiumAdjustedToMinimalPremium($premiumAdjustedToMinimalPremium)
            ->setPreviousInsuranceCompanyInfo($previousInsuranceCompanyInfo)
            ->setPriceTestsData($priceTestsData)
            ->setPrintsConfiguration($printsConfiguration)
            ->setPropertyInsurances($propertyInsurances)
            ->setRenewalData($renewalData)
            ->setRenewalProcessingAppVariant($renewalProcessingAppVariant)
            ->setRisksAvailableToChoose($risksAvailableToChoose)
            ->setSameVehicleInsuranceInfo($sameVehicleInsuranceInfo)
            ->setSavedPackagesIds($savedPackagesIds)
            ->setSelectedPackagesIds($selectedPackagesIds)
            ->setSpecificPackageConditionsDescription($specificPackageConditionsDescription)
            ->setStamp($stamp)
            ->setTariffVersion($tariffVersion)
            ->setVerificationBonusMalus($verificationBonusMalus)
            ->setVerificationData($verificationData)
            ->setYoungestOtherUserAge($youngestOtherUserAge)
            ->setYoungestUserAge($youngestUserAge)
            ->setZoneSource($zoneSource);
    }
    /**
     * Get AdditionalPartnersCount value
     * @return int|null
     */
    public function getAdditionalPartnersCount()
    {
        return $this->AdditionalPartnersCount;
    }
    /**
     * Set AdditionalPartnersCount value
     * @param int $additionalPartnersCount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setAdditionalPartnersCount($additionalPartnersCount = null)
    {
        // validation for constraint: int
        if (!is_null($additionalPartnersCount) && !is_numeric($additionalPartnersCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($additionalPartnersCount)), __LINE__);
        }
        $this->AdditionalPartnersCount = $additionalPartnersCount;
        return $this;
    }
    /**
     * Get AdditionalTerms value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAdditionalTerms()
    {
        return isset($this->AdditionalTerms) ? $this->AdditionalTerms : null;
    }
    /**
     * Set AdditionalTerms value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $additionalTerms
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setAdditionalTerms($additionalTerms = null)
    {
        // validation for constraint: string
        if (!is_null($additionalTerms) && !is_string($additionalTerms)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($additionalTerms)), __LINE__);
        }
        if (is_null($additionalTerms) || (is_array($additionalTerms) && empty($additionalTerms))) {
            unset($this->AdditionalTerms);
        } else {
            $this->AdditionalTerms = $additionalTerms;
        }
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
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
     * Get AvaliableAcClaimSettlementVariants value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimSettlementVariant|null
     */
    public function getAvaliableAcClaimSettlementVariants()
    {
        return isset($this->AvaliableAcClaimSettlementVariants) ? $this->AvaliableAcClaimSettlementVariants : null;
    }
    /**
     * Set AvaliableAcClaimSettlementVariants value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimSettlementVariant $avaliableAcClaimSettlementVariants
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setAvaliableAcClaimSettlementVariants(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimSettlementVariant $avaliableAcClaimSettlementVariants = null)
    {
        if (is_null($avaliableAcClaimSettlementVariants) || (is_array($avaliableAcClaimSettlementVariants) && empty($avaliableAcClaimSettlementVariants))) {
            unset($this->AvaliableAcClaimSettlementVariants);
        } else {
            $this->AvaliableAcClaimSettlementVariants = $avaliableAcClaimSettlementVariants;
        }
        return $this;
    }
    /**
     * Get AvaliableClauses value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMotorClauseInformation|null
     */
    public function getAvaliableClauses()
    {
        return isset($this->AvaliableClauses) ? $this->AvaliableClauses : null;
    }
    /**
     * Set AvaliableClauses value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMotorClauseInformation $avaliableClauses
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setAvaliableClauses(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMotorClauseInformation $avaliableClauses = null)
    {
        if (is_null($avaliableClauses) || (is_array($avaliableClauses) && empty($avaliableClauses))) {
            unset($this->AvaliableClauses);
        } else {
            $this->AvaliableClauses = $avaliableClauses;
        }
        return $this;
    }
    /**
     * Get BonusMalusCalculationInformation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusCalculationInformation|null
     */
    public function getBonusMalusCalculationInformation()
    {
        return isset($this->BonusMalusCalculationInformation) ? $this->BonusMalusCalculationInformation : null;
    }
    /**
     * Set BonusMalusCalculationInformation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusCalculationInformation $bonusMalusCalculationInformation
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setBonusMalusCalculationInformation(\Mu4ddi3\Compensa\Webservice\StructType\BonusMalusCalculationInformation $bonusMalusCalculationInformation = null)
    {
        if (is_null($bonusMalusCalculationInformation) || (is_array($bonusMalusCalculationInformation) && empty($bonusMalusCalculationInformation))) {
            unset($this->BonusMalusCalculationInformation);
        } else {
            $this->BonusMalusCalculationInformation = $bonusMalusCalculationInformation;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
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
     * Get CalculationMode value
     * @return string|null
     */
    public function getCalculationMode()
    {
        return $this->CalculationMode;
    }
    /**
     * Set CalculationMode value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\CalculationMode::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\CalculationMode::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $calculationMode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setCalculationMode($calculationMode = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\CalculationMode::valueIsValid($calculationMode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $calculationMode, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\CalculationMode::getValidValues())), __LINE__);
        }
        $this->CalculationMode = $calculationMode;
        return $this;
    }
    /**
     * Get CaseNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCaseNumber()
    {
        return isset($this->CaseNumber) ? $this->CaseNumber : null;
    }
    /**
     * Set CaseNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $caseNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setCaseNumber($caseNumber = null)
    {
        // validation for constraint: string
        if (!is_null($caseNumber) && !is_string($caseNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($caseNumber)), __LINE__);
        }
        if (is_null($caseNumber) || (is_array($caseNumber) && empty($caseNumber))) {
            unset($this->CaseNumber);
        } else {
            $this->CaseNumber = $caseNumber;
        }
        return $this;
    }
    /**
     * Get Cessionary value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Cessionary|null
     */
    public function getCessionary()
    {
        return isset($this->Cessionary) ? $this->Cessionary : null;
    }
    /**
     * Set Cessionary value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Cessionary $cessionary
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setCessionary(\Mu4ddi3\Compensa\Webservice\StructType\Cessionary $cessionary = null)
    {
        if (is_null($cessionary) || (is_array($cessionary) && empty($cessionary))) {
            unset($this->Cessionary);
        } else {
            $this->Cessionary = $cessionary;
        }
        return $this;
    }
    /**
     * Get CoOwner value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorPartner|null
     */
    public function getCoOwner()
    {
        return isset($this->CoOwner) ? $this->CoOwner : null;
    }
    /**
     * Set CoOwner value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MotorPartner $coOwner
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setCoOwner(\Mu4ddi3\Compensa\Webservice\StructType\MotorPartner $coOwner = null)
    {
        if (is_null($coOwner) || (is_array($coOwner) && empty($coOwner))) {
            unset($this->CoOwner);
        } else {
            $this->CoOwner = $coOwner;
        }
        return $this;
    }
    /**
     * Get CoOwnerType value
     * @return string|null
     */
    public function getCoOwnerType()
    {
        return $this->CoOwnerType;
    }
    /**
     * Set CoOwnerType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\CoOwnerType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\CoOwnerType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $coOwnerType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setCoOwnerType($coOwnerType = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\CoOwnerType::valueIsValid($coOwnerType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $coOwnerType, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\CoOwnerType::getValidValues())), __LINE__);
        }
        $this->CoOwnerType = $coOwnerType;
        return $this;
    }
    /**
     * Get ContractType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ContractType|null
     */
    public function getContractType()
    {
        return isset($this->ContractType) ? $this->ContractType : null;
    }
    /**
     * Set ContractType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ContractType $contractType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setContractType(\Mu4ddi3\Compensa\Webservice\StructType\ContractType $contractType = null)
    {
        if (is_null($contractType) || (is_array($contractType) && empty($contractType))) {
            unset($this->ContractType);
        } else {
            $this->ContractType = $contractType;
        }
        return $this;
    }
    /**
     * Get CrossSellWith21021 value
     * @return bool|null
     */
    public function getCrossSellWith21021()
    {
        return $this->CrossSellWith21021;
    }
    /**
     * Set CrossSellWith21021 value
     * @param bool $crossSellWith21021
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setCrossSellWith21021($crossSellWith21021 = null)
    {
        // validation for constraint: boolean
        if (!is_null($crossSellWith21021) && !is_bool($crossSellWith21021)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($crossSellWith21021)), __LINE__);
        }
        $this->CrossSellWith21021 = $crossSellWith21021;
        return $this;
    }
    /**
     * Get DaysOfferValidity value
     * @return int|null
     */
    public function getDaysOfferValidity()
    {
        return $this->DaysOfferValidity;
    }
    /**
     * Set DaysOfferValidity value
     * @param int $daysOfferValidity
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setDaysOfferValidity($daysOfferValidity = null)
    {
        // validation for constraint: int
        if (!is_null($daysOfferValidity) && !is_numeric($daysOfferValidity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($daysOfferValidity)), __LINE__);
        }
        $this->DaysOfferValidity = $daysOfferValidity;
        return $this;
    }
    /**
     * Get Declarations value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Declarations|null
     */
    public function getDeclarations()
    {
        return isset($this->Declarations) ? $this->Declarations : null;
    }
    /**
     * Set Declarations value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Declarations $declarations
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setDeclarations(\Mu4ddi3\Compensa\Webservice\StructType\Declarations $declarations = null)
    {
        if (is_null($declarations) || (is_array($declarations) && empty($declarations))) {
            unset($this->Declarations);
        } else {
            $this->Declarations = $declarations;
        }
        return $this;
    }
    /**
     * Get DepartmentContractScope value
     * @return string|null
     */
    public function getDepartmentContractScope()
    {
        return $this->DepartmentContractScope;
    }
    /**
     * Set DepartmentContractScope value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\DepartmentContractScope::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\DepartmentContractScope::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $departmentContractScope
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setDepartmentContractScope($departmentContractScope = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\DepartmentContractScope::valueIsValid($departmentContractScope)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $departmentContractScope, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\DepartmentContractScope::getValidValues())), __LINE__);
        }
        $this->DepartmentContractScope = $departmentContractScope;
        return $this;
    }
    /**
     * Get InstallmentsNumber value
     * @return string|null
     */
    public function getInstallmentsNumber()
    {
        return $this->InstallmentsNumber;
    }
    /**
     * Set InstallmentsNumber value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\InstallmentsNumber::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\InstallmentsNumber::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $installmentsNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setInstallmentsNumber($installmentsNumber = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\InstallmentsNumber::valueIsValid($installmentsNumber)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $installmentsNumber, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\InstallmentsNumber::getValidValues())), __LINE__);
        }
        $this->InstallmentsNumber = $installmentsNumber;
        return $this;
    }
    /**
     * Get InsurerDocumentForPromotion value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInsurerDocumentForPromotion()
    {
        return isset($this->InsurerDocumentForPromotion) ? $this->InsurerDocumentForPromotion : null;
    }
    /**
     * Set InsurerDocumentForPromotion value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $insurerDocumentForPromotion
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setInsurerDocumentForPromotion($insurerDocumentForPromotion = null)
    {
        // validation for constraint: string
        if (!is_null($insurerDocumentForPromotion) && !is_string($insurerDocumentForPromotion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($insurerDocumentForPromotion)), __LINE__);
        }
        if (is_null($insurerDocumentForPromotion) || (is_array($insurerDocumentForPromotion) && empty($insurerDocumentForPromotion))) {
            unset($this->InsurerDocumentForPromotion);
        } else {
            $this->InsurerDocumentForPromotion = $insurerDocumentForPromotion;
        }
        return $this;
    }
    /**
     * Get InternetSalesConfiguration value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InternetSalesConfiguration|null
     */
    public function getInternetSalesConfiguration()
    {
        return isset($this->InternetSalesConfiguration) ? $this->InternetSalesConfiguration : null;
    }
    /**
     * Set InternetSalesConfiguration value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InternetSalesConfiguration $internetSalesConfiguration
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setInternetSalesConfiguration(\Mu4ddi3\Compensa\Webservice\StructType\InternetSalesConfiguration $internetSalesConfiguration = null)
    {
        if (is_null($internetSalesConfiguration) || (is_array($internetSalesConfiguration) && empty($internetSalesConfiguration))) {
            unset($this->InternetSalesConfiguration);
        } else {
            $this->InternetSalesConfiguration = $internetSalesConfiguration;
        }
        return $this;
    }
    /**
     * Get IsCentralDiscountBlocked value
     * @return bool|null
     */
    public function getIsCentralDiscountBlocked()
    {
        return $this->IsCentralDiscountBlocked;
    }
    /**
     * Set IsCentralDiscountBlocked value
     * @param bool $isCentralDiscountBlocked
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setIsCentralDiscountBlocked($isCentralDiscountBlocked = null)
    {
        // validation for constraint: boolean
        if (!is_null($isCentralDiscountBlocked) && !is_bool($isCentralDiscountBlocked)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isCentralDiscountBlocked)), __LINE__);
        }
        $this->IsCentralDiscountBlocked = $isCentralDiscountBlocked;
        return $this;
    }
    /**
     * Get IsEmployeeDiscount value
     * @return bool|null
     */
    public function getIsEmployeeDiscount()
    {
        return $this->IsEmployeeDiscount;
    }
    /**
     * Set IsEmployeeDiscount value
     * @param bool $isEmployeeDiscount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setIsEmployeeDiscount($isEmployeeDiscount = null)
    {
        // validation for constraint: boolean
        if (!is_null($isEmployeeDiscount) && !is_bool($isEmployeeDiscount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isEmployeeDiscount)), __LINE__);
        }
        $this->IsEmployeeDiscount = $isEmployeeDiscount;
        return $this;
    }
    /**
     * Get IsInternationalTransport value
     * @return bool|null
     */
    public function getIsInternationalTransport()
    {
        return $this->IsInternationalTransport;
    }
    /**
     * Set IsInternationalTransport value
     * @param bool $isInternationalTransport
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setIsInternationalTransport($isInternationalTransport = null)
    {
        // validation for constraint: boolean
        if (!is_null($isInternationalTransport) && !is_bool($isInternationalTransport)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isInternationalTransport)), __LINE__);
        }
        $this->IsInternationalTransport = $isInternationalTransport;
        return $this;
    }
    /**
     * Get IsNationalTransport value
     * @return bool|null
     */
    public function getIsNationalTransport()
    {
        return $this->IsNationalTransport;
    }
    /**
     * Set IsNationalTransport value
     * @param bool $isNationalTransport
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setIsNationalTransport($isNationalTransport = null)
    {
        // validation for constraint: boolean
        if (!is_null($isNationalTransport) && !is_bool($isNationalTransport)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isNationalTransport)), __LINE__);
        }
        $this->IsNationalTransport = $isNationalTransport;
        return $this;
    }
    /**
     * Get IsOtherUser value
     * @return bool|null
     */
    public function getIsOtherUser()
    {
        return $this->IsOtherUser;
    }
    /**
     * Set IsOtherUser value
     * @param bool $isOtherUser
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setIsOtherUser($isOtherUser = null)
    {
        // validation for constraint: boolean
        if (!is_null($isOtherUser) && !is_bool($isOtherUser)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isOtherUser)), __LINE__);
        }
        $this->IsOtherUser = $isOtherUser;
        return $this;
    }
    /**
     * Get IsPackageSpecyficConditionDescription value
     * @return bool|null
     */
    public function getIsPackageSpecyficConditionDescription()
    {
        return $this->IsPackageSpecyficConditionDescription;
    }
    /**
     * Set IsPackageSpecyficConditionDescription value
     * @param bool $isPackageSpecyficConditionDescription
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setIsPackageSpecyficConditionDescription($isPackageSpecyficConditionDescription = null)
    {
        // validation for constraint: boolean
        if (!is_null($isPackageSpecyficConditionDescription) && !is_bool($isPackageSpecyficConditionDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isPackageSpecyficConditionDescription)), __LINE__);
        }
        $this->IsPackageSpecyficConditionDescription = $isPackageSpecyficConditionDescription;
        return $this;
    }
    /**
     * Get IsRequiredSelectCalculationMode value
     * @return bool|null
     */
    public function getIsRequiredSelectCalculationMode()
    {
        return $this->IsRequiredSelectCalculationMode;
    }
    /**
     * Set IsRequiredSelectCalculationMode value
     * @param bool $isRequiredSelectCalculationMode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setIsRequiredSelectCalculationMode($isRequiredSelectCalculationMode = null)
    {
        // validation for constraint: boolean
        if (!is_null($isRequiredSelectCalculationMode) && !is_bool($isRequiredSelectCalculationMode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isRequiredSelectCalculationMode)), __LINE__);
        }
        $this->IsRequiredSelectCalculationMode = $isRequiredSelectCalculationMode;
        return $this;
    }
    /**
     * Get IsShortTerm value
     * @return bool|null
     */
    public function getIsShortTerm()
    {
        return $this->IsShortTerm;
    }
    /**
     * Set IsShortTerm value
     * @param bool $isShortTerm
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setIsShortTerm($isShortTerm = null)
    {
        // validation for constraint: boolean
        if (!is_null($isShortTerm) && !is_bool($isShortTerm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isShortTerm)), __LINE__);
        }
        $this->IsShortTerm = $isShortTerm;
        return $this;
    }
    /**
     * Get IsUnderwriterDiscountBlocked value
     * @return bool|null
     */
    public function getIsUnderwriterDiscountBlocked()
    {
        return $this->IsUnderwriterDiscountBlocked;
    }
    /**
     * Set IsUnderwriterDiscountBlocked value
     * @param bool $isUnderwriterDiscountBlocked
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setIsUnderwriterDiscountBlocked($isUnderwriterDiscountBlocked = null)
    {
        // validation for constraint: boolean
        if (!is_null($isUnderwriterDiscountBlocked) && !is_bool($isUnderwriterDiscountBlocked)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isUnderwriterDiscountBlocked)), __LINE__);
        }
        $this->IsUnderwriterDiscountBlocked = $isUnderwriterDiscountBlocked;
        return $this;
    }
    /**
     * Get ItisChecksum value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getItisChecksum()
    {
        return isset($this->ItisChecksum) ? $this->ItisChecksum : null;
    }
    /**
     * Set ItisChecksum value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $itisChecksum
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setItisChecksum($itisChecksum = null)
    {
        // validation for constraint: string
        if (!is_null($itisChecksum) && !is_string($itisChecksum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itisChecksum)), __LINE__);
        }
        if (is_null($itisChecksum) || (is_array($itisChecksum) && empty($itisChecksum))) {
            unset($this->ItisChecksum);
        } else {
            $this->ItisChecksum = $itisChecksum;
        }
        return $this;
    }
    /**
     * Get LifeInsurances value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfLifeInsurancePolicyInfo|null
     */
    public function getLifeInsurances()
    {
        return isset($this->LifeInsurances) ? $this->LifeInsurances : null;
    }
    /**
     * Set LifeInsurances value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfLifeInsurancePolicyInfo $lifeInsurances
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setLifeInsurances(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfLifeInsurancePolicyInfo $lifeInsurances = null)
    {
        if (is_null($lifeInsurances) || (is_array($lifeInsurances) && empty($lifeInsurances))) {
            unset($this->LifeInsurances);
        } else {
            $this->LifeInsurances = $lifeInsurances;
        }
        return $this;
    }
    /**
     * Get MonthsCount value
     * @return int|null
     */
    public function getMonthsCount()
    {
        return $this->MonthsCount;
    }
    /**
     * Set MonthsCount value
     * @param int $monthsCount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setMonthsCount($monthsCount = null)
    {
        // validation for constraint: int
        if (!is_null($monthsCount) && !is_numeric($monthsCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($monthsCount)), __LINE__);
        }
        $this->MonthsCount = $monthsCount;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
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
     * Get Owner value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorPartner|null
     */
    public function getOwner()
    {
        return isset($this->Owner) ? $this->Owner : null;
    }
    /**
     * Set Owner value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MotorPartner $owner
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setOwner(\Mu4ddi3\Compensa\Webservice\StructType\MotorPartner $owner = null)
    {
        if (is_null($owner) || (is_array($owner) && empty($owner))) {
            unset($this->Owner);
        } else {
            $this->Owner = $owner;
        }
        return $this;
    }
    /**
     * Get PackageAdditionalData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageAdditionalData|null
     */
    public function getPackageAdditionalData()
    {
        return isset($this->PackageAdditionalData) ? $this->PackageAdditionalData : null;
    }
    /**
     * Set PackageAdditionalData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PackageAdditionalData $packageAdditionalData
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setPackageAdditionalData(\Mu4ddi3\Compensa\Webservice\StructType\PackageAdditionalData $packageAdditionalData = null)
    {
        if (is_null($packageAdditionalData) || (is_array($packageAdditionalData) && empty($packageAdditionalData))) {
            unset($this->PackageAdditionalData);
        } else {
            $this->PackageAdditionalData = $packageAdditionalData;
        }
        return $this;
    }
    /**
     * Get PackageCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPackageCode()
    {
        return isset($this->PackageCode) ? $this->PackageCode : null;
    }
    /**
     * Set PackageCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $packageCode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setPackageCode($packageCode = null)
    {
        // validation for constraint: string
        if (!is_null($packageCode) && !is_string($packageCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($packageCode)), __LINE__);
        }
        if (is_null($packageCode) || (is_array($packageCode) && empty($packageCode))) {
            unset($this->PackageCode);
        } else {
            $this->PackageCode = $packageCode;
        }
        return $this;
    }
    /**
     * Get PackageName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPackageName()
    {
        return isset($this->PackageName) ? $this->PackageName : null;
    }
    /**
     * Set PackageName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $packageName
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setPackageName($packageName = null)
    {
        // validation for constraint: string
        if (!is_null($packageName) && !is_string($packageName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($packageName)), __LINE__);
        }
        if (is_null($packageName) || (is_array($packageName) && empty($packageName))) {
            unset($this->PackageName);
        } else {
            $this->PackageName = $packageName;
        }
        return $this;
    }
    /**
     * Get PackageRangeDefinition value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeDefinition|null
     */
    public function getPackageRangeDefinition()
    {
        return isset($this->PackageRangeDefinition) ? $this->PackageRangeDefinition : null;
    }
    /**
     * Set PackageRangeDefinition value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeDefinition $packageRangeDefinition
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setPackageRangeDefinition(\Mu4ddi3\Compensa\Webservice\StructType\PackageRangeDefinition $packageRangeDefinition = null)
    {
        if (is_null($packageRangeDefinition) || (is_array($packageRangeDefinition) && empty($packageRangeDefinition))) {
            unset($this->PackageRangeDefinition);
        } else {
            $this->PackageRangeDefinition = $packageRangeDefinition;
        }
        return $this;
    }
    /**
     * Get PackageRangeFilter value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeFilter|null
     */
    public function getPackageRangeFilter()
    {
        return isset($this->PackageRangeFilter) ? $this->PackageRangeFilter : null;
    }
    /**
     * Set PackageRangeFilter value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeFilter $packageRangeFilter
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setPackageRangeFilter(\Mu4ddi3\Compensa\Webservice\StructType\PackageRangeFilter $packageRangeFilter = null)
    {
        if (is_null($packageRangeFilter) || (is_array($packageRangeFilter) && empty($packageRangeFilter))) {
            unset($this->PackageRangeFilter);
        } else {
            $this->PackageRangeFilter = $packageRangeFilter;
        }
        return $this;
    }
    /**
     * Get PackagesChanges value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPackageRangeDefinition|null
     */
    public function getPackagesChanges()
    {
        return isset($this->PackagesChanges) ? $this->PackagesChanges : null;
    }
    /**
     * Set PackagesChanges value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPackageRangeDefinition $packagesChanges
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setPackagesChanges(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPackageRangeDefinition $packagesChanges = null)
    {
        if (is_null($packagesChanges) || (is_array($packagesChanges) && empty($packagesChanges))) {
            unset($this->PackagesChanges);
        } else {
            $this->PackagesChanges = $packagesChanges;
        }
        return $this;
    }
    /**
     * Get PartnersDataCorrections value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMotorPartnerCorrectionData|null
     */
    public function getPartnersDataCorrections()
    {
        return isset($this->PartnersDataCorrections) ? $this->PartnersDataCorrections : null;
    }
    /**
     * Set PartnersDataCorrections value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMotorPartnerCorrectionData $partnersDataCorrections
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setPartnersDataCorrections(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMotorPartnerCorrectionData $partnersDataCorrections = null)
    {
        if (is_null($partnersDataCorrections) || (is_array($partnersDataCorrections) && empty($partnersDataCorrections))) {
            unset($this->PartnersDataCorrections);
        } else {
            $this->PartnersDataCorrections = $partnersDataCorrections;
        }
        return $this;
    }
    /**
     * Get Permissions value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Permissions|null
     */
    public function getPermissions()
    {
        return isset($this->Permissions) ? $this->Permissions : null;
    }
    /**
     * Set Permissions value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Permissions $permissions
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setPermissions(\Mu4ddi3\Compensa\Webservice\StructType\Permissions $permissions = null)
    {
        if (is_null($permissions) || (is_array($permissions) && empty($permissions))) {
            unset($this->Permissions);
        } else {
            $this->Permissions = $permissions;
        }
        return $this;
    }
    /**
     * Get PolgenId value
     * @return int|null
     */
    public function getPolgenId()
    {
        return $this->PolgenId;
    }
    /**
     * Set PolgenId value
     * @param int $polgenId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setPolgenId($polgenId = null)
    {
        // validation for constraint: int
        if (!is_null($polgenId) && !is_numeric($polgenId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($polgenId)), __LINE__);
        }
        $this->PolgenId = $polgenId;
        return $this;
    }
    /**
     * Get PremiumAdjustedToMinimalPremium value
     * @return bool|null
     */
    public function getPremiumAdjustedToMinimalPremium()
    {
        return $this->PremiumAdjustedToMinimalPremium;
    }
    /**
     * Set PremiumAdjustedToMinimalPremium value
     * @param bool $premiumAdjustedToMinimalPremium
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setPremiumAdjustedToMinimalPremium($premiumAdjustedToMinimalPremium = null)
    {
        // validation for constraint: boolean
        if (!is_null($premiumAdjustedToMinimalPremium) && !is_bool($premiumAdjustedToMinimalPremium)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($premiumAdjustedToMinimalPremium)), __LINE__);
        }
        $this->PremiumAdjustedToMinimalPremium = $premiumAdjustedToMinimalPremium;
        return $this;
    }
    /**
     * Get PreviousInsuranceCompanyInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PreviousInsuranceCompanyInfo|null
     */
    public function getPreviousInsuranceCompanyInfo()
    {
        return isset($this->PreviousInsuranceCompanyInfo) ? $this->PreviousInsuranceCompanyInfo : null;
    }
    /**
     * Set PreviousInsuranceCompanyInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PreviousInsuranceCompanyInfo $previousInsuranceCompanyInfo
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setPreviousInsuranceCompanyInfo(\Mu4ddi3\Compensa\Webservice\StructType\PreviousInsuranceCompanyInfo $previousInsuranceCompanyInfo = null)
    {
        if (is_null($previousInsuranceCompanyInfo) || (is_array($previousInsuranceCompanyInfo) && empty($previousInsuranceCompanyInfo))) {
            unset($this->PreviousInsuranceCompanyInfo);
        } else {
            $this->PreviousInsuranceCompanyInfo = $previousInsuranceCompanyInfo;
        }
        return $this;
    }
    /**
     * Get PriceTestsData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestsData|null
     */
    public function getPriceTestsData()
    {
        return isset($this->PriceTestsData) ? $this->PriceTestsData : null;
    }
    /**
     * Set PriceTestsData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PriceTestsData $priceTestsData
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setPriceTestsData(\Mu4ddi3\Compensa\Webservice\StructType\PriceTestsData $priceTestsData = null)
    {
        if (is_null($priceTestsData) || (is_array($priceTestsData) && empty($priceTestsData))) {
            unset($this->PriceTestsData);
        } else {
            $this->PriceTestsData = $priceTestsData;
        }
        return $this;
    }
    /**
     * Get PrintsConfiguration value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PrintsConfiguration|null
     */
    public function getPrintsConfiguration()
    {
        return isset($this->PrintsConfiguration) ? $this->PrintsConfiguration : null;
    }
    /**
     * Set PrintsConfiguration value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PrintsConfiguration $printsConfiguration
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setPrintsConfiguration(\Mu4ddi3\Compensa\Webservice\StructType\PrintsConfiguration $printsConfiguration = null)
    {
        if (is_null($printsConfiguration) || (is_array($printsConfiguration) && empty($printsConfiguration))) {
            unset($this->PrintsConfiguration);
        } else {
            $this->PrintsConfiguration = $printsConfiguration;
        }
        return $this;
    }
    /**
     * Get PropertyInsurances value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPropertyInsurancePolicyInfo|null
     */
    public function getPropertyInsurances()
    {
        return isset($this->PropertyInsurances) ? $this->PropertyInsurances : null;
    }
    /**
     * Set PropertyInsurances value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPropertyInsurancePolicyInfo $propertyInsurances
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setPropertyInsurances(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPropertyInsurancePolicyInfo $propertyInsurances = null)
    {
        if (is_null($propertyInsurances) || (is_array($propertyInsurances) && empty($propertyInsurances))) {
            unset($this->PropertyInsurances);
        } else {
            $this->PropertyInsurances = $propertyInsurances;
        }
        return $this;
    }
    /**
     * Get RenewalData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalData|null
     */
    public function getRenewalData()
    {
        return isset($this->RenewalData) ? $this->RenewalData : null;
    }
    /**
     * Set RenewalData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RenewalData $renewalData
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setRenewalData(\Mu4ddi3\Compensa\Webservice\StructType\RenewalData $renewalData = null)
    {
        if (is_null($renewalData) || (is_array($renewalData) && empty($renewalData))) {
            unset($this->RenewalData);
        } else {
            $this->RenewalData = $renewalData;
        }
        return $this;
    }
    /**
     * Get RenewalProcessingAppVariant value
     * @return string|null
     */
    public function getRenewalProcessingAppVariant()
    {
        return $this->RenewalProcessingAppVariant;
    }
    /**
     * Set RenewalProcessingAppVariant value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\RenewalProcessingAppVariant::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\RenewalProcessingAppVariant::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $renewalProcessingAppVariant
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setRenewalProcessingAppVariant($renewalProcessingAppVariant = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\RenewalProcessingAppVariant::valueIsValid($renewalProcessingAppVariant)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $renewalProcessingAppVariant, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\RenewalProcessingAppVariant::getValidValues())), __LINE__);
        }
        $this->RenewalProcessingAppVariant = $renewalProcessingAppVariant;
        return $this;
    }
    /**
     * Get RisksAvailableToChoose value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRiskCode|null
     */
    public function getRisksAvailableToChoose()
    {
        return isset($this->RisksAvailableToChoose) ? $this->RisksAvailableToChoose : null;
    }
    /**
     * Set RisksAvailableToChoose value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRiskCode $risksAvailableToChoose
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setRisksAvailableToChoose(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRiskCode $risksAvailableToChoose = null)
    {
        if (is_null($risksAvailableToChoose) || (is_array($risksAvailableToChoose) && empty($risksAvailableToChoose))) {
            unset($this->RisksAvailableToChoose);
        } else {
            $this->RisksAvailableToChoose = $risksAvailableToChoose;
        }
        return $this;
    }
    /**
     * Get SameVehicleInsuranceInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\SameVehicleInsuranceInfo|null
     */
    public function getSameVehicleInsuranceInfo()
    {
        return isset($this->SameVehicleInsuranceInfo) ? $this->SameVehicleInsuranceInfo : null;
    }
    /**
     * Set SameVehicleInsuranceInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\SameVehicleInsuranceInfo $sameVehicleInsuranceInfo
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setSameVehicleInsuranceInfo(\Mu4ddi3\Compensa\Webservice\StructType\SameVehicleInsuranceInfo $sameVehicleInsuranceInfo = null)
    {
        if (is_null($sameVehicleInsuranceInfo) || (is_array($sameVehicleInsuranceInfo) && empty($sameVehicleInsuranceInfo))) {
            unset($this->SameVehicleInsuranceInfo);
        } else {
            $this->SameVehicleInsuranceInfo = $sameVehicleInsuranceInfo;
        }
        return $this;
    }
    /**
     * Get SavedPackagesIds value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint|null
     */
    public function getSavedPackagesIds()
    {
        return isset($this->SavedPackagesIds) ? $this->SavedPackagesIds : null;
    }
    /**
     * Set SavedPackagesIds value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint $savedPackagesIds
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setSavedPackagesIds(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint $savedPackagesIds = null)
    {
        if (is_null($savedPackagesIds) || (is_array($savedPackagesIds) && empty($savedPackagesIds))) {
            unset($this->SavedPackagesIds);
        } else {
            $this->SavedPackagesIds = $savedPackagesIds;
        }
        return $this;
    }
    /**
     * Get SelectedPackagesIds value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint|null
     */
    public function getSelectedPackagesIds()
    {
        return isset($this->SelectedPackagesIds) ? $this->SelectedPackagesIds : null;
    }
    /**
     * Set SelectedPackagesIds value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint $selectedPackagesIds
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setSelectedPackagesIds(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint $selectedPackagesIds = null)
    {
        if (is_null($selectedPackagesIds) || (is_array($selectedPackagesIds) && empty($selectedPackagesIds))) {
            unset($this->SelectedPackagesIds);
        } else {
            $this->SelectedPackagesIds = $selectedPackagesIds;
        }
        return $this;
    }
    /**
     * Get SpecificPackageConditionsDescription value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSpecificPackageConditionsDescription()
    {
        return isset($this->SpecificPackageConditionsDescription) ? $this->SpecificPackageConditionsDescription : null;
    }
    /**
     * Set SpecificPackageConditionsDescription value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $specificPackageConditionsDescription
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setSpecificPackageConditionsDescription($specificPackageConditionsDescription = null)
    {
        // validation for constraint: string
        if (!is_null($specificPackageConditionsDescription) && !is_string($specificPackageConditionsDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($specificPackageConditionsDescription)), __LINE__);
        }
        if (is_null($specificPackageConditionsDescription) || (is_array($specificPackageConditionsDescription) && empty($specificPackageConditionsDescription))) {
            unset($this->SpecificPackageConditionsDescription);
        } else {
            $this->SpecificPackageConditionsDescription = $specificPackageConditionsDescription;
        }
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
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
     * Get TariffVersion value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\TariffVersion|null
     */
    public function getTariffVersion()
    {
        return isset($this->TariffVersion) ? $this->TariffVersion : null;
    }
    /**
     * Set TariffVersion value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\TariffVersion $tariffVersion
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setTariffVersion(\Mu4ddi3\Compensa\Webservice\StructType\TariffVersion $tariffVersion = null)
    {
        if (is_null($tariffVersion) || (is_array($tariffVersion) && empty($tariffVersion))) {
            unset($this->TariffVersion);
        } else {
            $this->TariffVersion = $tariffVersion;
        }
        return $this;
    }
    /**
     * Get VerificationBonusMalus value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalus|null
     */
    public function getVerificationBonusMalus()
    {
        return isset($this->VerificationBonusMalus) ? $this->VerificationBonusMalus : null;
    }
    /**
     * Set VerificationBonusMalus value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\BonusMalus $verificationBonusMalus
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setVerificationBonusMalus(\Mu4ddi3\Compensa\Webservice\StructType\BonusMalus $verificationBonusMalus = null)
    {
        if (is_null($verificationBonusMalus) || (is_array($verificationBonusMalus) && empty($verificationBonusMalus))) {
            unset($this->VerificationBonusMalus);
        } else {
            $this->VerificationBonusMalus = $verificationBonusMalus;
        }
        return $this;
    }
    /**
     * Get VerificationData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VerificationData|null
     */
    public function getVerificationData()
    {
        return isset($this->VerificationData) ? $this->VerificationData : null;
    }
    /**
     * Set VerificationData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VerificationData $verificationData
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setVerificationData(\Mu4ddi3\Compensa\Webservice\StructType\VerificationData $verificationData = null)
    {
        if (is_null($verificationData) || (is_array($verificationData) && empty($verificationData))) {
            unset($this->VerificationData);
        } else {
            $this->VerificationData = $verificationData;
        }
        return $this;
    }
    /**
     * Get YoungestOtherUserAge value
     * @return int|null
     */
    public function getYoungestOtherUserAge()
    {
        return $this->YoungestOtherUserAge;
    }
    /**
     * Set YoungestOtherUserAge value
     * @param int $youngestOtherUserAge
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setYoungestOtherUserAge($youngestOtherUserAge = null)
    {
        // validation for constraint: int
        if (!is_null($youngestOtherUserAge) && !is_numeric($youngestOtherUserAge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($youngestOtherUserAge)), __LINE__);
        }
        $this->YoungestOtherUserAge = $youngestOtherUserAge;
        return $this;
    }
    /**
     * Get YoungestUserAge value
     * @return int|null
     */
    public function getYoungestUserAge()
    {
        return $this->YoungestUserAge;
    }
    /**
     * Set YoungestUserAge value
     * @param int $youngestUserAge
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setYoungestUserAge($youngestUserAge = null)
    {
        // validation for constraint: int
        if (!is_null($youngestUserAge) && !is_numeric($youngestUserAge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($youngestUserAge)), __LINE__);
        }
        $this->YoungestUserAge = $youngestUserAge;
        return $this;
    }
    /**
     * Get ZoneSource value
     * @return string|null
     */
    public function getZoneSource()
    {
        return $this->ZoneSource;
    }
    /**
     * Set ZoneSource value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\ZoneSource::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\ZoneSource::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $zoneSource
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public function setZoneSource($zoneSource = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\ZoneSource::valueIsValid($zoneSource)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $zoneSource, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\ZoneSource::getValidValues())), __LINE__);
        }
        $this->ZoneSource = $zoneSource;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
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
