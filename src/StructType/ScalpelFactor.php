<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ScalpelFactor StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ScalpelFactor
 * @subpackage Structs
 */
class ScalpelFactor extends AbstractStructBase
{
    /**
     * The AcDamagesAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $AcDamagesAmount;
    /**
     * The AcDamagesLastYearCompensaAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $AcDamagesLastYearCompensaAmount;
    /**
     * The AcDamagesLastYearTuAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $AcDamagesLastYearTuAmount;
    /**
     * The AcFullTermsAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $AcFullTermsAmount;
    /**
     * The AcFullTermsInCompensa
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $AcFullTermsInCompensa;
    /**
     * The AcOtherActivePolicyInCompensa
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $AcOtherActivePolicyInCompensa;
    /**
     * The AgentLogin
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AgentLogin;
    /**
     * The AgreementType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AgreementType;
    /**
     * The AgreementTypeExist
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $AgreementTypeExist;
    /**
     * The BmAcInCalculationLeftBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $BmAcInCalculationLeftBound;
    /**
     * The BmAcInCalculationRightBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $BmAcInCalculationRightBound;
    /**
     * The BmOcInCalculationLeftBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $BmOcInCalculationLeftBound;
    /**
     * The BmOcInCalculationRightBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $BmOcInCalculationRightBound;
    /**
     * The Body
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Body;
    /**
     * The BranchId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $BranchId;
    /**
     * The BrandId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $BrandId;
    /**
     * The BusinessName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $BusinessName;
    /**
     * The Cabriolet
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $Cabriolet;
    /**
     * The CompensaVehiclesCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint
     */
    public $CompensaVehiclesCount;
    /**
     * The CountyPolgenId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $CountyPolgenId;
    /**
     * The CustomerAgeLeftBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $CustomerAgeLeftBound;
    /**
     * The CustomerAgeRightBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $CustomerAgeRightBound;
    /**
     * The EmployeeDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $EmployeeDiscount;
    /**
     * The EngineCapacityLeftBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $EngineCapacityLeftBound;
    /**
     * The EngineCapacityRightBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $EngineCapacityRightBound;
    /**
     * The EnginePowerLeftBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $EnginePowerLeftBound;
    /**
     * The EnginePowerRightBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $EnginePowerRightBound;
    /**
     * The FuelType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FuelType;
    /**
     * The InstallmentsAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $InstallmentsAmount;
    /**
     * The IsDomesticTransport
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $IsDomesticTransport;
    /**
     * The IsForeigner
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $IsForeigner;
    /**
     * The IsInternationalTransport
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $IsInternationalTransport;
    /**
     * The IsShortTerm
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $IsShortTerm;
    /**
     * The IsTerritorialExtendedInsuranceCoverage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $IsTerritorialExtendedInsuranceCoverage;
    /**
     * The ModelId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $ModelId;
    /**
     * The NorthAmericaVehicle
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $NorthAmericaVehicle;
    /**
     * The Nwp
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Nwp;
    /**
     * The NwpExist
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $NwpExist;
    /**
     * The OcAc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $OcAc;
    /**
     * The OcDamagesAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $OcDamagesAmount;
    /**
     * The OcDamagesLastYearCompensaAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $OcDamagesLastYearCompensaAmount;
    /**
     * The OcDamagesLastYearTuAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $OcDamagesLastYearTuAmount;
    /**
     * The OcFullTermsAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $OcFullTermsAmount;
    /**
     * The OcFullTermsInCompensa
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $OcFullTermsInCompensa;
    /**
     * The OcOtherActivePolicyInCompensa
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $OcOtherActivePolicyInCompensa;
    /**
     * The OffRoadVehicle
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $OffRoadVehicle;
    /**
     * The PartnerType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PartnerType
     */
    public $PartnerType;
    /**
     * The PkdCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PkdCode;
    /**
     * The PostalCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PostalCode;
    /**
     * The PreviousZuAcId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $PreviousZuAcId;
    /**
     * The PreviousZuOcId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $PreviousZuOcId;
    /**
     * The PropertyInsurance
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $PropertyInsurance;
    /**
     * The ScalpelCorrectionAc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ScalpelCorrectionAc
     */
    public $ScalpelCorrectionAc;
    /**
     * The ScalpelCorrectionOc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ScalpelCorrectionOc
     */
    public $ScalpelCorrectionOc;
    /**
     * The SeatsNumberLeftBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $SeatsNumberLeftBound;
    /**
     * The SeatsNumberRightBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $SeatsNumberRightBound;
    /**
     * The SteeringWheelConfiguration
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SteeringWheelConfiguration;
    /**
     * The SuAcLeftBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $SuAcLeftBound;
    /**
     * The SuAcRightBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $SuAcRightBound;
    /**
     * The Suv
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $Suv;
    /**
     * The TerritoryUsageType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TerritoryUsageType;
    /**
     * The TuNumberAc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $TuNumberAc;
    /**
     * The TuNumberOc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $TuNumberOc;
    /**
     * The UfgVehiclesCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint
     */
    public $UfgVehiclesCount;
    /**
     * The VehicleAgeLeftBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $VehicleAgeLeftBound;
    /**
     * The VehicleAgeRightBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $VehicleAgeRightBound;
    /**
     * The VehicleGroupId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $VehicleGroupId;
    /**
     * The VehicleImportStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $VehicleImportStatus;
    /**
     * The VehicleImportedExist
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $VehicleImportedExist;
    /**
     * The VehicleType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $VehicleType;
    /**
     * Constructor method for ScalpelFactor
     * @uses ScalpelFactor::setAcDamagesAmount()
     * @uses ScalpelFactor::setAcDamagesLastYearCompensaAmount()
     * @uses ScalpelFactor::setAcDamagesLastYearTuAmount()
     * @uses ScalpelFactor::setAcFullTermsAmount()
     * @uses ScalpelFactor::setAcFullTermsInCompensa()
     * @uses ScalpelFactor::setAcOtherActivePolicyInCompensa()
     * @uses ScalpelFactor::setAgentLogin()
     * @uses ScalpelFactor::setAgreementType()
     * @uses ScalpelFactor::setAgreementTypeExist()
     * @uses ScalpelFactor::setBmAcInCalculationLeftBound()
     * @uses ScalpelFactor::setBmAcInCalculationRightBound()
     * @uses ScalpelFactor::setBmOcInCalculationLeftBound()
     * @uses ScalpelFactor::setBmOcInCalculationRightBound()
     * @uses ScalpelFactor::setBody()
     * @uses ScalpelFactor::setBranchId()
     * @uses ScalpelFactor::setBrandId()
     * @uses ScalpelFactor::setBusinessName()
     * @uses ScalpelFactor::setCabriolet()
     * @uses ScalpelFactor::setCompensaVehiclesCount()
     * @uses ScalpelFactor::setCountyPolgenId()
     * @uses ScalpelFactor::setCustomerAgeLeftBound()
     * @uses ScalpelFactor::setCustomerAgeRightBound()
     * @uses ScalpelFactor::setEmployeeDiscount()
     * @uses ScalpelFactor::setEngineCapacityLeftBound()
     * @uses ScalpelFactor::setEngineCapacityRightBound()
     * @uses ScalpelFactor::setEnginePowerLeftBound()
     * @uses ScalpelFactor::setEnginePowerRightBound()
     * @uses ScalpelFactor::setFuelType()
     * @uses ScalpelFactor::setInstallmentsAmount()
     * @uses ScalpelFactor::setIsDomesticTransport()
     * @uses ScalpelFactor::setIsForeigner()
     * @uses ScalpelFactor::setIsInternationalTransport()
     * @uses ScalpelFactor::setIsShortTerm()
     * @uses ScalpelFactor::setIsTerritorialExtendedInsuranceCoverage()
     * @uses ScalpelFactor::setModelId()
     * @uses ScalpelFactor::setNorthAmericaVehicle()
     * @uses ScalpelFactor::setNwp()
     * @uses ScalpelFactor::setNwpExist()
     * @uses ScalpelFactor::setOcAc()
     * @uses ScalpelFactor::setOcDamagesAmount()
     * @uses ScalpelFactor::setOcDamagesLastYearCompensaAmount()
     * @uses ScalpelFactor::setOcDamagesLastYearTuAmount()
     * @uses ScalpelFactor::setOcFullTermsAmount()
     * @uses ScalpelFactor::setOcFullTermsInCompensa()
     * @uses ScalpelFactor::setOcOtherActivePolicyInCompensa()
     * @uses ScalpelFactor::setOffRoadVehicle()
     * @uses ScalpelFactor::setPartnerType()
     * @uses ScalpelFactor::setPkdCode()
     * @uses ScalpelFactor::setPostalCode()
     * @uses ScalpelFactor::setPreviousZuAcId()
     * @uses ScalpelFactor::setPreviousZuOcId()
     * @uses ScalpelFactor::setPropertyInsurance()
     * @uses ScalpelFactor::setScalpelCorrectionAc()
     * @uses ScalpelFactor::setScalpelCorrectionOc()
     * @uses ScalpelFactor::setSeatsNumberLeftBound()
     * @uses ScalpelFactor::setSeatsNumberRightBound()
     * @uses ScalpelFactor::setSteeringWheelConfiguration()
     * @uses ScalpelFactor::setSuAcLeftBound()
     * @uses ScalpelFactor::setSuAcRightBound()
     * @uses ScalpelFactor::setSuv()
     * @uses ScalpelFactor::setTerritoryUsageType()
     * @uses ScalpelFactor::setTuNumberAc()
     * @uses ScalpelFactor::setTuNumberOc()
     * @uses ScalpelFactor::setUfgVehiclesCount()
     * @uses ScalpelFactor::setVehicleAgeLeftBound()
     * @uses ScalpelFactor::setVehicleAgeRightBound()
     * @uses ScalpelFactor::setVehicleGroupId()
     * @uses ScalpelFactor::setVehicleImportStatus()
     * @uses ScalpelFactor::setVehicleImportedExist()
     * @uses ScalpelFactor::setVehicleType()
     * @param int $acDamagesAmount
     * @param int $acDamagesLastYearCompensaAmount
     * @param int $acDamagesLastYearTuAmount
     * @param int $acFullTermsAmount
     * @param int $acFullTermsInCompensa
     * @param bool $acOtherActivePolicyInCompensa
     * @param string $agentLogin
     * @param string $agreementType
     * @param bool $agreementTypeExist
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $bmAcInCalculationLeftBound
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $bmAcInCalculationRightBound
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $bmOcInCalculationLeftBound
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $bmOcInCalculationRightBound
     * @param string $body
     * @param int $branchId
     * @param int $brandId
     * @param string $businessName
     * @param bool $cabriolet
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint $compensaVehiclesCount
     * @param int $countyPolgenId
     * @param int $customerAgeLeftBound
     * @param int $customerAgeRightBound
     * @param bool $employeeDiscount
     * @param int $engineCapacityLeftBound
     * @param int $engineCapacityRightBound
     * @param int $enginePowerLeftBound
     * @param int $enginePowerRightBound
     * @param string $fuelType
     * @param string $installmentsAmount
     * @param bool $isDomesticTransport
     * @param bool $isForeigner
     * @param bool $isInternationalTransport
     * @param bool $isShortTerm
     * @param bool $isTerritorialExtendedInsuranceCoverage
     * @param int $modelId
     * @param bool $northAmericaVehicle
     * @param string $nwp
     * @param bool $nwpExist
     * @param bool $ocAc
     * @param int $ocDamagesAmount
     * @param int $ocDamagesLastYearCompensaAmount
     * @param int $ocDamagesLastYearTuAmount
     * @param int $ocFullTermsAmount
     * @param int $ocFullTermsInCompensa
     * @param bool $ocOtherActivePolicyInCompensa
     * @param bool $offRoadVehicle
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PartnerType $partnerType
     * @param string $pkdCode
     * @param string $postalCode
     * @param int $previousZuAcId
     * @param int $previousZuOcId
     * @param bool $propertyInsurance
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ScalpelCorrectionAc $scalpelCorrectionAc
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ScalpelCorrectionOc $scalpelCorrectionOc
     * @param int $seatsNumberLeftBound
     * @param int $seatsNumberRightBound
     * @param string $steeringWheelConfiguration
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $suAcLeftBound
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $suAcRightBound
     * @param bool $suv
     * @param string $territoryUsageType
     * @param int $tuNumberAc
     * @param int $tuNumberOc
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint $ufgVehiclesCount
     * @param int $vehicleAgeLeftBound
     * @param int $vehicleAgeRightBound
     * @param int $vehicleGroupId
     * @param string $vehicleImportStatus
     * @param bool $vehicleImportedExist
     * @param string $vehicleType
     */
    public function __construct($acDamagesAmount = null, $acDamagesLastYearCompensaAmount = null, $acDamagesLastYearTuAmount = null, $acFullTermsAmount = null, $acFullTermsInCompensa = null, $acOtherActivePolicyInCompensa = null, $agentLogin = null, $agreementType = null, $agreementTypeExist = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $bmAcInCalculationLeftBound = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $bmAcInCalculationRightBound = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $bmOcInCalculationLeftBound = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $bmOcInCalculationRightBound = null, $body = null, $branchId = null, $brandId = null, $businessName = null, $cabriolet = null, \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint $compensaVehiclesCount = null, $countyPolgenId = null, $customerAgeLeftBound = null, $customerAgeRightBound = null, $employeeDiscount = null, $engineCapacityLeftBound = null, $engineCapacityRightBound = null, $enginePowerLeftBound = null, $enginePowerRightBound = null, $fuelType = null, $installmentsAmount = null, $isDomesticTransport = null, $isForeigner = null, $isInternationalTransport = null, $isShortTerm = null, $isTerritorialExtendedInsuranceCoverage = null, $modelId = null, $northAmericaVehicle = null, $nwp = null, $nwpExist = null, $ocAc = null, $ocDamagesAmount = null, $ocDamagesLastYearCompensaAmount = null, $ocDamagesLastYearTuAmount = null, $ocFullTermsAmount = null, $ocFullTermsInCompensa = null, $ocOtherActivePolicyInCompensa = null, $offRoadVehicle = null, \Mu4ddi3\Compensa\Webservice\StructType\PartnerType $partnerType = null, $pkdCode = null, $postalCode = null, $previousZuAcId = null, $previousZuOcId = null, $propertyInsurance = null, \Mu4ddi3\Compensa\Webservice\StructType\ScalpelCorrectionAc $scalpelCorrectionAc = null, \Mu4ddi3\Compensa\Webservice\StructType\ScalpelCorrectionOc $scalpelCorrectionOc = null, $seatsNumberLeftBound = null, $seatsNumberRightBound = null, $steeringWheelConfiguration = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $suAcLeftBound = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $suAcRightBound = null, $suv = null, $territoryUsageType = null, $tuNumberAc = null, $tuNumberOc = null, \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint $ufgVehiclesCount = null, $vehicleAgeLeftBound = null, $vehicleAgeRightBound = null, $vehicleGroupId = null, $vehicleImportStatus = null, $vehicleImportedExist = null, $vehicleType = null)
    {
        $this
            ->setAcDamagesAmount($acDamagesAmount)
            ->setAcDamagesLastYearCompensaAmount($acDamagesLastYearCompensaAmount)
            ->setAcDamagesLastYearTuAmount($acDamagesLastYearTuAmount)
            ->setAcFullTermsAmount($acFullTermsAmount)
            ->setAcFullTermsInCompensa($acFullTermsInCompensa)
            ->setAcOtherActivePolicyInCompensa($acOtherActivePolicyInCompensa)
            ->setAgentLogin($agentLogin)
            ->setAgreementType($agreementType)
            ->setAgreementTypeExist($agreementTypeExist)
            ->setBmAcInCalculationLeftBound($bmAcInCalculationLeftBound)
            ->setBmAcInCalculationRightBound($bmAcInCalculationRightBound)
            ->setBmOcInCalculationLeftBound($bmOcInCalculationLeftBound)
            ->setBmOcInCalculationRightBound($bmOcInCalculationRightBound)
            ->setBody($body)
            ->setBranchId($branchId)
            ->setBrandId($brandId)
            ->setBusinessName($businessName)
            ->setCabriolet($cabriolet)
            ->setCompensaVehiclesCount($compensaVehiclesCount)
            ->setCountyPolgenId($countyPolgenId)
            ->setCustomerAgeLeftBound($customerAgeLeftBound)
            ->setCustomerAgeRightBound($customerAgeRightBound)
            ->setEmployeeDiscount($employeeDiscount)
            ->setEngineCapacityLeftBound($engineCapacityLeftBound)
            ->setEngineCapacityRightBound($engineCapacityRightBound)
            ->setEnginePowerLeftBound($enginePowerLeftBound)
            ->setEnginePowerRightBound($enginePowerRightBound)
            ->setFuelType($fuelType)
            ->setInstallmentsAmount($installmentsAmount)
            ->setIsDomesticTransport($isDomesticTransport)
            ->setIsForeigner($isForeigner)
            ->setIsInternationalTransport($isInternationalTransport)
            ->setIsShortTerm($isShortTerm)
            ->setIsTerritorialExtendedInsuranceCoverage($isTerritorialExtendedInsuranceCoverage)
            ->setModelId($modelId)
            ->setNorthAmericaVehicle($northAmericaVehicle)
            ->setNwp($nwp)
            ->setNwpExist($nwpExist)
            ->setOcAc($ocAc)
            ->setOcDamagesAmount($ocDamagesAmount)
            ->setOcDamagesLastYearCompensaAmount($ocDamagesLastYearCompensaAmount)
            ->setOcDamagesLastYearTuAmount($ocDamagesLastYearTuAmount)
            ->setOcFullTermsAmount($ocFullTermsAmount)
            ->setOcFullTermsInCompensa($ocFullTermsInCompensa)
            ->setOcOtherActivePolicyInCompensa($ocOtherActivePolicyInCompensa)
            ->setOffRoadVehicle($offRoadVehicle)
            ->setPartnerType($partnerType)
            ->setPkdCode($pkdCode)
            ->setPostalCode($postalCode)
            ->setPreviousZuAcId($previousZuAcId)
            ->setPreviousZuOcId($previousZuOcId)
            ->setPropertyInsurance($propertyInsurance)
            ->setScalpelCorrectionAc($scalpelCorrectionAc)
            ->setScalpelCorrectionOc($scalpelCorrectionOc)
            ->setSeatsNumberLeftBound($seatsNumberLeftBound)
            ->setSeatsNumberRightBound($seatsNumberRightBound)
            ->setSteeringWheelConfiguration($steeringWheelConfiguration)
            ->setSuAcLeftBound($suAcLeftBound)
            ->setSuAcRightBound($suAcRightBound)
            ->setSuv($suv)
            ->setTerritoryUsageType($territoryUsageType)
            ->setTuNumberAc($tuNumberAc)
            ->setTuNumberOc($tuNumberOc)
            ->setUfgVehiclesCount($ufgVehiclesCount)
            ->setVehicleAgeLeftBound($vehicleAgeLeftBound)
            ->setVehicleAgeRightBound($vehicleAgeRightBound)
            ->setVehicleGroupId($vehicleGroupId)
            ->setVehicleImportStatus($vehicleImportStatus)
            ->setVehicleImportedExist($vehicleImportedExist)
            ->setVehicleType($vehicleType);
    }
    /**
     * Get AcDamagesAmount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getAcDamagesAmount()
    {
        return isset($this->AcDamagesAmount) ? $this->AcDamagesAmount : null;
    }
    /**
     * Set AcDamagesAmount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $acDamagesAmount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setAcDamagesAmount($acDamagesAmount = null)
    {
        // validation for constraint: int
        if (!is_null($acDamagesAmount) && !is_numeric($acDamagesAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($acDamagesAmount)), __LINE__);
        }
        if (is_null($acDamagesAmount) || (is_array($acDamagesAmount) && empty($acDamagesAmount))) {
            unset($this->AcDamagesAmount);
        } else {
            $this->AcDamagesAmount = $acDamagesAmount;
        }
        return $this;
    }
    /**
     * Get AcDamagesLastYearCompensaAmount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getAcDamagesLastYearCompensaAmount()
    {
        return isset($this->AcDamagesLastYearCompensaAmount) ? $this->AcDamagesLastYearCompensaAmount : null;
    }
    /**
     * Set AcDamagesLastYearCompensaAmount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $acDamagesLastYearCompensaAmount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setAcDamagesLastYearCompensaAmount($acDamagesLastYearCompensaAmount = null)
    {
        // validation for constraint: int
        if (!is_null($acDamagesLastYearCompensaAmount) && !is_numeric($acDamagesLastYearCompensaAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($acDamagesLastYearCompensaAmount)), __LINE__);
        }
        if (is_null($acDamagesLastYearCompensaAmount) || (is_array($acDamagesLastYearCompensaAmount) && empty($acDamagesLastYearCompensaAmount))) {
            unset($this->AcDamagesLastYearCompensaAmount);
        } else {
            $this->AcDamagesLastYearCompensaAmount = $acDamagesLastYearCompensaAmount;
        }
        return $this;
    }
    /**
     * Get AcDamagesLastYearTuAmount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getAcDamagesLastYearTuAmount()
    {
        return isset($this->AcDamagesLastYearTuAmount) ? $this->AcDamagesLastYearTuAmount : null;
    }
    /**
     * Set AcDamagesLastYearTuAmount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $acDamagesLastYearTuAmount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setAcDamagesLastYearTuAmount($acDamagesLastYearTuAmount = null)
    {
        // validation for constraint: int
        if (!is_null($acDamagesLastYearTuAmount) && !is_numeric($acDamagesLastYearTuAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($acDamagesLastYearTuAmount)), __LINE__);
        }
        if (is_null($acDamagesLastYearTuAmount) || (is_array($acDamagesLastYearTuAmount) && empty($acDamagesLastYearTuAmount))) {
            unset($this->AcDamagesLastYearTuAmount);
        } else {
            $this->AcDamagesLastYearTuAmount = $acDamagesLastYearTuAmount;
        }
        return $this;
    }
    /**
     * Get AcFullTermsAmount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getAcFullTermsAmount()
    {
        return isset($this->AcFullTermsAmount) ? $this->AcFullTermsAmount : null;
    }
    /**
     * Set AcFullTermsAmount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $acFullTermsAmount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setAcFullTermsAmount($acFullTermsAmount = null)
    {
        // validation for constraint: int
        if (!is_null($acFullTermsAmount) && !is_numeric($acFullTermsAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($acFullTermsAmount)), __LINE__);
        }
        if (is_null($acFullTermsAmount) || (is_array($acFullTermsAmount) && empty($acFullTermsAmount))) {
            unset($this->AcFullTermsAmount);
        } else {
            $this->AcFullTermsAmount = $acFullTermsAmount;
        }
        return $this;
    }
    /**
     * Get AcFullTermsInCompensa value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getAcFullTermsInCompensa()
    {
        return isset($this->AcFullTermsInCompensa) ? $this->AcFullTermsInCompensa : null;
    }
    /**
     * Set AcFullTermsInCompensa value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $acFullTermsInCompensa
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setAcFullTermsInCompensa($acFullTermsInCompensa = null)
    {
        // validation for constraint: int
        if (!is_null($acFullTermsInCompensa) && !is_numeric($acFullTermsInCompensa)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($acFullTermsInCompensa)), __LINE__);
        }
        if (is_null($acFullTermsInCompensa) || (is_array($acFullTermsInCompensa) && empty($acFullTermsInCompensa))) {
            unset($this->AcFullTermsInCompensa);
        } else {
            $this->AcFullTermsInCompensa = $acFullTermsInCompensa;
        }
        return $this;
    }
    /**
     * Get AcOtherActivePolicyInCompensa value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getAcOtherActivePolicyInCompensa()
    {
        return isset($this->AcOtherActivePolicyInCompensa) ? $this->AcOtherActivePolicyInCompensa : null;
    }
    /**
     * Set AcOtherActivePolicyInCompensa value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $acOtherActivePolicyInCompensa
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setAcOtherActivePolicyInCompensa($acOtherActivePolicyInCompensa = null)
    {
        // validation for constraint: boolean
        if (!is_null($acOtherActivePolicyInCompensa) && !is_bool($acOtherActivePolicyInCompensa)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($acOtherActivePolicyInCompensa)), __LINE__);
        }
        if (is_null($acOtherActivePolicyInCompensa) || (is_array($acOtherActivePolicyInCompensa) && empty($acOtherActivePolicyInCompensa))) {
            unset($this->AcOtherActivePolicyInCompensa);
        } else {
            $this->AcOtherActivePolicyInCompensa = $acOtherActivePolicyInCompensa;
        }
        return $this;
    }
    /**
     * Get AgentLogin value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAgentLogin()
    {
        return isset($this->AgentLogin) ? $this->AgentLogin : null;
    }
    /**
     * Set AgentLogin value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $agentLogin
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setAgentLogin($agentLogin = null)
    {
        // validation for constraint: string
        if (!is_null($agentLogin) && !is_string($agentLogin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($agentLogin)), __LINE__);
        }
        if (is_null($agentLogin) || (is_array($agentLogin) && empty($agentLogin))) {
            unset($this->AgentLogin);
        } else {
            $this->AgentLogin = $agentLogin;
        }
        return $this;
    }
    /**
     * Get AgreementType value
     * @return string|null
     */
    public function getAgreementType()
    {
        return $this->AgreementType;
    }
    /**
     * Set AgreementType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\CalculationMode::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\CalculationMode::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $agreementType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setAgreementType($agreementType = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\CalculationMode::valueIsValid($agreementType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $agreementType, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\CalculationMode::getValidValues())), __LINE__);
        }
        $this->AgreementType = $agreementType;
        return $this;
    }
    /**
     * Get AgreementTypeExist value
     * @return bool|null
     */
    public function getAgreementTypeExist()
    {
        return $this->AgreementTypeExist;
    }
    /**
     * Set AgreementTypeExist value
     * @param bool $agreementTypeExist
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setAgreementTypeExist($agreementTypeExist = null)
    {
        // validation for constraint: boolean
        if (!is_null($agreementTypeExist) && !is_bool($agreementTypeExist)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($agreementTypeExist)), __LINE__);
        }
        $this->AgreementTypeExist = $agreementTypeExist;
        return $this;
    }
    /**
     * Get BmAcInCalculationLeftBound value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getBmAcInCalculationLeftBound()
    {
        return isset($this->BmAcInCalculationLeftBound) ? $this->BmAcInCalculationLeftBound : null;
    }
    /**
     * Set BmAcInCalculationLeftBound value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $bmAcInCalculationLeftBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setBmAcInCalculationLeftBound(\Mu4ddi3\Compensa\Webservice\StructType\Factor $bmAcInCalculationLeftBound = null)
    {
        if (is_null($bmAcInCalculationLeftBound) || (is_array($bmAcInCalculationLeftBound) && empty($bmAcInCalculationLeftBound))) {
            unset($this->BmAcInCalculationLeftBound);
        } else {
            $this->BmAcInCalculationLeftBound = $bmAcInCalculationLeftBound;
        }
        return $this;
    }
    /**
     * Get BmAcInCalculationRightBound value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getBmAcInCalculationRightBound()
    {
        return isset($this->BmAcInCalculationRightBound) ? $this->BmAcInCalculationRightBound : null;
    }
    /**
     * Set BmAcInCalculationRightBound value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $bmAcInCalculationRightBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setBmAcInCalculationRightBound(\Mu4ddi3\Compensa\Webservice\StructType\Factor $bmAcInCalculationRightBound = null)
    {
        if (is_null($bmAcInCalculationRightBound) || (is_array($bmAcInCalculationRightBound) && empty($bmAcInCalculationRightBound))) {
            unset($this->BmAcInCalculationRightBound);
        } else {
            $this->BmAcInCalculationRightBound = $bmAcInCalculationRightBound;
        }
        return $this;
    }
    /**
     * Get BmOcInCalculationLeftBound value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getBmOcInCalculationLeftBound()
    {
        return isset($this->BmOcInCalculationLeftBound) ? $this->BmOcInCalculationLeftBound : null;
    }
    /**
     * Set BmOcInCalculationLeftBound value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $bmOcInCalculationLeftBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setBmOcInCalculationLeftBound(\Mu4ddi3\Compensa\Webservice\StructType\Factor $bmOcInCalculationLeftBound = null)
    {
        if (is_null($bmOcInCalculationLeftBound) || (is_array($bmOcInCalculationLeftBound) && empty($bmOcInCalculationLeftBound))) {
            unset($this->BmOcInCalculationLeftBound);
        } else {
            $this->BmOcInCalculationLeftBound = $bmOcInCalculationLeftBound;
        }
        return $this;
    }
    /**
     * Get BmOcInCalculationRightBound value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getBmOcInCalculationRightBound()
    {
        return isset($this->BmOcInCalculationRightBound) ? $this->BmOcInCalculationRightBound : null;
    }
    /**
     * Set BmOcInCalculationRightBound value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $bmOcInCalculationRightBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setBmOcInCalculationRightBound(\Mu4ddi3\Compensa\Webservice\StructType\Factor $bmOcInCalculationRightBound = null)
    {
        if (is_null($bmOcInCalculationRightBound) || (is_array($bmOcInCalculationRightBound) && empty($bmOcInCalculationRightBound))) {
            unset($this->BmOcInCalculationRightBound);
        } else {
            $this->BmOcInCalculationRightBound = $bmOcInCalculationRightBound;
        }
        return $this;
    }
    /**
     * Get Body value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBody()
    {
        return isset($this->Body) ? $this->Body : null;
    }
    /**
     * Set Body value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $body
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setBody($body = null)
    {
        // validation for constraint: string
        if (!is_null($body) && !is_string($body)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($body)), __LINE__);
        }
        if (is_null($body) || (is_array($body) && empty($body))) {
            unset($this->Body);
        } else {
            $this->Body = $body;
        }
        return $this;
    }
    /**
     * Get BranchId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getBranchId()
    {
        return isset($this->BranchId) ? $this->BranchId : null;
    }
    /**
     * Set BranchId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $branchId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setBranchId($branchId = null)
    {
        // validation for constraint: int
        if (!is_null($branchId) && !is_numeric($branchId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($branchId)), __LINE__);
        }
        if (is_null($branchId) || (is_array($branchId) && empty($branchId))) {
            unset($this->BranchId);
        } else {
            $this->BranchId = $branchId;
        }
        return $this;
    }
    /**
     * Get BrandId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getBrandId()
    {
        return isset($this->BrandId) ? $this->BrandId : null;
    }
    /**
     * Set BrandId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $brandId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setBrandId($brandId = null)
    {
        // validation for constraint: int
        if (!is_null($brandId) && !is_numeric($brandId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($brandId)), __LINE__);
        }
        if (is_null($brandId) || (is_array($brandId) && empty($brandId))) {
            unset($this->BrandId);
        } else {
            $this->BrandId = $brandId;
        }
        return $this;
    }
    /**
     * Get BusinessName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBusinessName()
    {
        return isset($this->BusinessName) ? $this->BusinessName : null;
    }
    /**
     * Set BusinessName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $businessName
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setBusinessName($businessName = null)
    {
        // validation for constraint: string
        if (!is_null($businessName) && !is_string($businessName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($businessName)), __LINE__);
        }
        if (is_null($businessName) || (is_array($businessName) && empty($businessName))) {
            unset($this->BusinessName);
        } else {
            $this->BusinessName = $businessName;
        }
        return $this;
    }
    /**
     * Get Cabriolet value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getCabriolet()
    {
        return isset($this->Cabriolet) ? $this->Cabriolet : null;
    }
    /**
     * Set Cabriolet value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $cabriolet
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setCabriolet($cabriolet = null)
    {
        // validation for constraint: boolean
        if (!is_null($cabriolet) && !is_bool($cabriolet)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($cabriolet)), __LINE__);
        }
        if (is_null($cabriolet) || (is_array($cabriolet) && empty($cabriolet))) {
            unset($this->Cabriolet);
        } else {
            $this->Cabriolet = $cabriolet;
        }
        return $this;
    }
    /**
     * Get CompensaVehiclesCount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint|null
     */
    public function getCompensaVehiclesCount()
    {
        return isset($this->CompensaVehiclesCount) ? $this->CompensaVehiclesCount : null;
    }
    /**
     * Set CompensaVehiclesCount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint $compensaVehiclesCount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setCompensaVehiclesCount(\Mu4ddi3\Compensa\Webservice\StructType\RangeOfint $compensaVehiclesCount = null)
    {
        if (is_null($compensaVehiclesCount) || (is_array($compensaVehiclesCount) && empty($compensaVehiclesCount))) {
            unset($this->CompensaVehiclesCount);
        } else {
            $this->CompensaVehiclesCount = $compensaVehiclesCount;
        }
        return $this;
    }
    /**
     * Get CountyPolgenId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getCountyPolgenId()
    {
        return isset($this->CountyPolgenId) ? $this->CountyPolgenId : null;
    }
    /**
     * Set CountyPolgenId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $countyPolgenId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setCountyPolgenId($countyPolgenId = null)
    {
        // validation for constraint: int
        if (!is_null($countyPolgenId) && !is_numeric($countyPolgenId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($countyPolgenId)), __LINE__);
        }
        if (is_null($countyPolgenId) || (is_array($countyPolgenId) && empty($countyPolgenId))) {
            unset($this->CountyPolgenId);
        } else {
            $this->CountyPolgenId = $countyPolgenId;
        }
        return $this;
    }
    /**
     * Get CustomerAgeLeftBound value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getCustomerAgeLeftBound()
    {
        return isset($this->CustomerAgeLeftBound) ? $this->CustomerAgeLeftBound : null;
    }
    /**
     * Set CustomerAgeLeftBound value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $customerAgeLeftBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setCustomerAgeLeftBound($customerAgeLeftBound = null)
    {
        // validation for constraint: int
        if (!is_null($customerAgeLeftBound) && !is_numeric($customerAgeLeftBound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($customerAgeLeftBound)), __LINE__);
        }
        if (is_null($customerAgeLeftBound) || (is_array($customerAgeLeftBound) && empty($customerAgeLeftBound))) {
            unset($this->CustomerAgeLeftBound);
        } else {
            $this->CustomerAgeLeftBound = $customerAgeLeftBound;
        }
        return $this;
    }
    /**
     * Get CustomerAgeRightBound value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getCustomerAgeRightBound()
    {
        return isset($this->CustomerAgeRightBound) ? $this->CustomerAgeRightBound : null;
    }
    /**
     * Set CustomerAgeRightBound value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $customerAgeRightBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setCustomerAgeRightBound($customerAgeRightBound = null)
    {
        // validation for constraint: int
        if (!is_null($customerAgeRightBound) && !is_numeric($customerAgeRightBound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($customerAgeRightBound)), __LINE__);
        }
        if (is_null($customerAgeRightBound) || (is_array($customerAgeRightBound) && empty($customerAgeRightBound))) {
            unset($this->CustomerAgeRightBound);
        } else {
            $this->CustomerAgeRightBound = $customerAgeRightBound;
        }
        return $this;
    }
    /**
     * Get EmployeeDiscount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getEmployeeDiscount()
    {
        return isset($this->EmployeeDiscount) ? $this->EmployeeDiscount : null;
    }
    /**
     * Set EmployeeDiscount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $employeeDiscount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setEmployeeDiscount($employeeDiscount = null)
    {
        // validation for constraint: boolean
        if (!is_null($employeeDiscount) && !is_bool($employeeDiscount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($employeeDiscount)), __LINE__);
        }
        if (is_null($employeeDiscount) || (is_array($employeeDiscount) && empty($employeeDiscount))) {
            unset($this->EmployeeDiscount);
        } else {
            $this->EmployeeDiscount = $employeeDiscount;
        }
        return $this;
    }
    /**
     * Get EngineCapacityLeftBound value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getEngineCapacityLeftBound()
    {
        return isset($this->EngineCapacityLeftBound) ? $this->EngineCapacityLeftBound : null;
    }
    /**
     * Set EngineCapacityLeftBound value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $engineCapacityLeftBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setEngineCapacityLeftBound($engineCapacityLeftBound = null)
    {
        // validation for constraint: int
        if (!is_null($engineCapacityLeftBound) && !is_numeric($engineCapacityLeftBound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($engineCapacityLeftBound)), __LINE__);
        }
        if (is_null($engineCapacityLeftBound) || (is_array($engineCapacityLeftBound) && empty($engineCapacityLeftBound))) {
            unset($this->EngineCapacityLeftBound);
        } else {
            $this->EngineCapacityLeftBound = $engineCapacityLeftBound;
        }
        return $this;
    }
    /**
     * Get EngineCapacityRightBound value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getEngineCapacityRightBound()
    {
        return isset($this->EngineCapacityRightBound) ? $this->EngineCapacityRightBound : null;
    }
    /**
     * Set EngineCapacityRightBound value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $engineCapacityRightBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setEngineCapacityRightBound($engineCapacityRightBound = null)
    {
        // validation for constraint: int
        if (!is_null($engineCapacityRightBound) && !is_numeric($engineCapacityRightBound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($engineCapacityRightBound)), __LINE__);
        }
        if (is_null($engineCapacityRightBound) || (is_array($engineCapacityRightBound) && empty($engineCapacityRightBound))) {
            unset($this->EngineCapacityRightBound);
        } else {
            $this->EngineCapacityRightBound = $engineCapacityRightBound;
        }
        return $this;
    }
    /**
     * Get EnginePowerLeftBound value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getEnginePowerLeftBound()
    {
        return isset($this->EnginePowerLeftBound) ? $this->EnginePowerLeftBound : null;
    }
    /**
     * Set EnginePowerLeftBound value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $enginePowerLeftBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setEnginePowerLeftBound($enginePowerLeftBound = null)
    {
        // validation for constraint: int
        if (!is_null($enginePowerLeftBound) && !is_numeric($enginePowerLeftBound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($enginePowerLeftBound)), __LINE__);
        }
        if (is_null($enginePowerLeftBound) || (is_array($enginePowerLeftBound) && empty($enginePowerLeftBound))) {
            unset($this->EnginePowerLeftBound);
        } else {
            $this->EnginePowerLeftBound = $enginePowerLeftBound;
        }
        return $this;
    }
    /**
     * Get EnginePowerRightBound value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getEnginePowerRightBound()
    {
        return isset($this->EnginePowerRightBound) ? $this->EnginePowerRightBound : null;
    }
    /**
     * Set EnginePowerRightBound value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $enginePowerRightBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setEnginePowerRightBound($enginePowerRightBound = null)
    {
        // validation for constraint: int
        if (!is_null($enginePowerRightBound) && !is_numeric($enginePowerRightBound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($enginePowerRightBound)), __LINE__);
        }
        if (is_null($enginePowerRightBound) || (is_array($enginePowerRightBound) && empty($enginePowerRightBound))) {
            unset($this->EnginePowerRightBound);
        } else {
            $this->EnginePowerRightBound = $enginePowerRightBound;
        }
        return $this;
    }
    /**
     * Get FuelType value
     * @return string|null
     */
    public function getFuelType()
    {
        return $this->FuelType;
    }
    /**
     * Set FuelType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\FuelType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\FuelType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $fuelType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setFuelType($fuelType = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\FuelType::valueIsValid($fuelType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $fuelType, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\FuelType::getValidValues())), __LINE__);
        }
        $this->FuelType = $fuelType;
        return $this;
    }
    /**
     * Get InstallmentsAmount value
     * @return string|null
     */
    public function getInstallmentsAmount()
    {
        return $this->InstallmentsAmount;
    }
    /**
     * Set InstallmentsAmount value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\InstallmentsNumber::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\InstallmentsNumber::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $installmentsAmount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setInstallmentsAmount($installmentsAmount = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\InstallmentsNumber::valueIsValid($installmentsAmount)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $installmentsAmount, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\InstallmentsNumber::getValidValues())), __LINE__);
        }
        $this->InstallmentsAmount = $installmentsAmount;
        return $this;
    }
    /**
     * Get IsDomesticTransport value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsDomesticTransport()
    {
        return isset($this->IsDomesticTransport) ? $this->IsDomesticTransport : null;
    }
    /**
     * Set IsDomesticTransport value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isDomesticTransport
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setIsDomesticTransport($isDomesticTransport = null)
    {
        // validation for constraint: boolean
        if (!is_null($isDomesticTransport) && !is_bool($isDomesticTransport)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isDomesticTransport)), __LINE__);
        }
        if (is_null($isDomesticTransport) || (is_array($isDomesticTransport) && empty($isDomesticTransport))) {
            unset($this->IsDomesticTransport);
        } else {
            $this->IsDomesticTransport = $isDomesticTransport;
        }
        return $this;
    }
    /**
     * Get IsForeigner value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsForeigner()
    {
        return isset($this->IsForeigner) ? $this->IsForeigner : null;
    }
    /**
     * Set IsForeigner value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isForeigner
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setIsForeigner($isForeigner = null)
    {
        // validation for constraint: boolean
        if (!is_null($isForeigner) && !is_bool($isForeigner)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isForeigner)), __LINE__);
        }
        if (is_null($isForeigner) || (is_array($isForeigner) && empty($isForeigner))) {
            unset($this->IsForeigner);
        } else {
            $this->IsForeigner = $isForeigner;
        }
        return $this;
    }
    /**
     * Get IsInternationalTransport value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsInternationalTransport()
    {
        return isset($this->IsInternationalTransport) ? $this->IsInternationalTransport : null;
    }
    /**
     * Set IsInternationalTransport value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isInternationalTransport
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setIsInternationalTransport($isInternationalTransport = null)
    {
        // validation for constraint: boolean
        if (!is_null($isInternationalTransport) && !is_bool($isInternationalTransport)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isInternationalTransport)), __LINE__);
        }
        if (is_null($isInternationalTransport) || (is_array($isInternationalTransport) && empty($isInternationalTransport))) {
            unset($this->IsInternationalTransport);
        } else {
            $this->IsInternationalTransport = $isInternationalTransport;
        }
        return $this;
    }
    /**
     * Get IsShortTerm value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsShortTerm()
    {
        return isset($this->IsShortTerm) ? $this->IsShortTerm : null;
    }
    /**
     * Set IsShortTerm value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isShortTerm
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setIsShortTerm($isShortTerm = null)
    {
        // validation for constraint: boolean
        if (!is_null($isShortTerm) && !is_bool($isShortTerm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isShortTerm)), __LINE__);
        }
        if (is_null($isShortTerm) || (is_array($isShortTerm) && empty($isShortTerm))) {
            unset($this->IsShortTerm);
        } else {
            $this->IsShortTerm = $isShortTerm;
        }
        return $this;
    }
    /**
     * Get IsTerritorialExtendedInsuranceCoverage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsTerritorialExtendedInsuranceCoverage()
    {
        return isset($this->IsTerritorialExtendedInsuranceCoverage) ? $this->IsTerritorialExtendedInsuranceCoverage : null;
    }
    /**
     * Set IsTerritorialExtendedInsuranceCoverage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isTerritorialExtendedInsuranceCoverage
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setIsTerritorialExtendedInsuranceCoverage($isTerritorialExtendedInsuranceCoverage = null)
    {
        // validation for constraint: boolean
        if (!is_null($isTerritorialExtendedInsuranceCoverage) && !is_bool($isTerritorialExtendedInsuranceCoverage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isTerritorialExtendedInsuranceCoverage)), __LINE__);
        }
        if (is_null($isTerritorialExtendedInsuranceCoverage) || (is_array($isTerritorialExtendedInsuranceCoverage) && empty($isTerritorialExtendedInsuranceCoverage))) {
            unset($this->IsTerritorialExtendedInsuranceCoverage);
        } else {
            $this->IsTerritorialExtendedInsuranceCoverage = $isTerritorialExtendedInsuranceCoverage;
        }
        return $this;
    }
    /**
     * Get ModelId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getModelId()
    {
        return isset($this->ModelId) ? $this->ModelId : null;
    }
    /**
     * Set ModelId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $modelId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setModelId($modelId = null)
    {
        // validation for constraint: int
        if (!is_null($modelId) && !is_numeric($modelId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($modelId)), __LINE__);
        }
        if (is_null($modelId) || (is_array($modelId) && empty($modelId))) {
            unset($this->ModelId);
        } else {
            $this->ModelId = $modelId;
        }
        return $this;
    }
    /**
     * Get NorthAmericaVehicle value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getNorthAmericaVehicle()
    {
        return isset($this->NorthAmericaVehicle) ? $this->NorthAmericaVehicle : null;
    }
    /**
     * Set NorthAmericaVehicle value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $northAmericaVehicle
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setNorthAmericaVehicle($northAmericaVehicle = null)
    {
        // validation for constraint: boolean
        if (!is_null($northAmericaVehicle) && !is_bool($northAmericaVehicle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($northAmericaVehicle)), __LINE__);
        }
        if (is_null($northAmericaVehicle) || (is_array($northAmericaVehicle) && empty($northAmericaVehicle))) {
            unset($this->NorthAmericaVehicle);
        } else {
            $this->NorthAmericaVehicle = $northAmericaVehicle;
        }
        return $this;
    }
    /**
     * Get Nwp value
     * @return string|null
     */
    public function getNwp()
    {
        return $this->Nwp;
    }
    /**
     * Set Nwp value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\UnusualVehicleUsage::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\UnusualVehicleUsage::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $nwp
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setNwp($nwp = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\UnusualVehicleUsage::valueIsValid($nwp)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $nwp, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\UnusualVehicleUsage::getValidValues())), __LINE__);
        }
        $this->Nwp = $nwp;
        return $this;
    }
    /**
     * Get NwpExist value
     * @return bool|null
     */
    public function getNwpExist()
    {
        return $this->NwpExist;
    }
    /**
     * Set NwpExist value
     * @param bool $nwpExist
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setNwpExist($nwpExist = null)
    {
        // validation for constraint: boolean
        if (!is_null($nwpExist) && !is_bool($nwpExist)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($nwpExist)), __LINE__);
        }
        $this->NwpExist = $nwpExist;
        return $this;
    }
    /**
     * Get OcAc value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getOcAc()
    {
        return isset($this->OcAc) ? $this->OcAc : null;
    }
    /**
     * Set OcAc value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $ocAc
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setOcAc($ocAc = null)
    {
        // validation for constraint: boolean
        if (!is_null($ocAc) && !is_bool($ocAc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($ocAc)), __LINE__);
        }
        if (is_null($ocAc) || (is_array($ocAc) && empty($ocAc))) {
            unset($this->OcAc);
        } else {
            $this->OcAc = $ocAc;
        }
        return $this;
    }
    /**
     * Get OcDamagesAmount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getOcDamagesAmount()
    {
        return isset($this->OcDamagesAmount) ? $this->OcDamagesAmount : null;
    }
    /**
     * Set OcDamagesAmount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $ocDamagesAmount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setOcDamagesAmount($ocDamagesAmount = null)
    {
        // validation for constraint: int
        if (!is_null($ocDamagesAmount) && !is_numeric($ocDamagesAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($ocDamagesAmount)), __LINE__);
        }
        if (is_null($ocDamagesAmount) || (is_array($ocDamagesAmount) && empty($ocDamagesAmount))) {
            unset($this->OcDamagesAmount);
        } else {
            $this->OcDamagesAmount = $ocDamagesAmount;
        }
        return $this;
    }
    /**
     * Get OcDamagesLastYearCompensaAmount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getOcDamagesLastYearCompensaAmount()
    {
        return isset($this->OcDamagesLastYearCompensaAmount) ? $this->OcDamagesLastYearCompensaAmount : null;
    }
    /**
     * Set OcDamagesLastYearCompensaAmount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $ocDamagesLastYearCompensaAmount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setOcDamagesLastYearCompensaAmount($ocDamagesLastYearCompensaAmount = null)
    {
        // validation for constraint: int
        if (!is_null($ocDamagesLastYearCompensaAmount) && !is_numeric($ocDamagesLastYearCompensaAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($ocDamagesLastYearCompensaAmount)), __LINE__);
        }
        if (is_null($ocDamagesLastYearCompensaAmount) || (is_array($ocDamagesLastYearCompensaAmount) && empty($ocDamagesLastYearCompensaAmount))) {
            unset($this->OcDamagesLastYearCompensaAmount);
        } else {
            $this->OcDamagesLastYearCompensaAmount = $ocDamagesLastYearCompensaAmount;
        }
        return $this;
    }
    /**
     * Get OcDamagesLastYearTuAmount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getOcDamagesLastYearTuAmount()
    {
        return isset($this->OcDamagesLastYearTuAmount) ? $this->OcDamagesLastYearTuAmount : null;
    }
    /**
     * Set OcDamagesLastYearTuAmount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $ocDamagesLastYearTuAmount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setOcDamagesLastYearTuAmount($ocDamagesLastYearTuAmount = null)
    {
        // validation for constraint: int
        if (!is_null($ocDamagesLastYearTuAmount) && !is_numeric($ocDamagesLastYearTuAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($ocDamagesLastYearTuAmount)), __LINE__);
        }
        if (is_null($ocDamagesLastYearTuAmount) || (is_array($ocDamagesLastYearTuAmount) && empty($ocDamagesLastYearTuAmount))) {
            unset($this->OcDamagesLastYearTuAmount);
        } else {
            $this->OcDamagesLastYearTuAmount = $ocDamagesLastYearTuAmount;
        }
        return $this;
    }
    /**
     * Get OcFullTermsAmount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getOcFullTermsAmount()
    {
        return isset($this->OcFullTermsAmount) ? $this->OcFullTermsAmount : null;
    }
    /**
     * Set OcFullTermsAmount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $ocFullTermsAmount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setOcFullTermsAmount($ocFullTermsAmount = null)
    {
        // validation for constraint: int
        if (!is_null($ocFullTermsAmount) && !is_numeric($ocFullTermsAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($ocFullTermsAmount)), __LINE__);
        }
        if (is_null($ocFullTermsAmount) || (is_array($ocFullTermsAmount) && empty($ocFullTermsAmount))) {
            unset($this->OcFullTermsAmount);
        } else {
            $this->OcFullTermsAmount = $ocFullTermsAmount;
        }
        return $this;
    }
    /**
     * Get OcFullTermsInCompensa value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getOcFullTermsInCompensa()
    {
        return isset($this->OcFullTermsInCompensa) ? $this->OcFullTermsInCompensa : null;
    }
    /**
     * Set OcFullTermsInCompensa value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $ocFullTermsInCompensa
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setOcFullTermsInCompensa($ocFullTermsInCompensa = null)
    {
        // validation for constraint: int
        if (!is_null($ocFullTermsInCompensa) && !is_numeric($ocFullTermsInCompensa)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($ocFullTermsInCompensa)), __LINE__);
        }
        if (is_null($ocFullTermsInCompensa) || (is_array($ocFullTermsInCompensa) && empty($ocFullTermsInCompensa))) {
            unset($this->OcFullTermsInCompensa);
        } else {
            $this->OcFullTermsInCompensa = $ocFullTermsInCompensa;
        }
        return $this;
    }
    /**
     * Get OcOtherActivePolicyInCompensa value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getOcOtherActivePolicyInCompensa()
    {
        return isset($this->OcOtherActivePolicyInCompensa) ? $this->OcOtherActivePolicyInCompensa : null;
    }
    /**
     * Set OcOtherActivePolicyInCompensa value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $ocOtherActivePolicyInCompensa
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setOcOtherActivePolicyInCompensa($ocOtherActivePolicyInCompensa = null)
    {
        // validation for constraint: boolean
        if (!is_null($ocOtherActivePolicyInCompensa) && !is_bool($ocOtherActivePolicyInCompensa)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($ocOtherActivePolicyInCompensa)), __LINE__);
        }
        if (is_null($ocOtherActivePolicyInCompensa) || (is_array($ocOtherActivePolicyInCompensa) && empty($ocOtherActivePolicyInCompensa))) {
            unset($this->OcOtherActivePolicyInCompensa);
        } else {
            $this->OcOtherActivePolicyInCompensa = $ocOtherActivePolicyInCompensa;
        }
        return $this;
    }
    /**
     * Get OffRoadVehicle value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getOffRoadVehicle()
    {
        return isset($this->OffRoadVehicle) ? $this->OffRoadVehicle : null;
    }
    /**
     * Set OffRoadVehicle value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $offRoadVehicle
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setOffRoadVehicle($offRoadVehicle = null)
    {
        // validation for constraint: boolean
        if (!is_null($offRoadVehicle) && !is_bool($offRoadVehicle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($offRoadVehicle)), __LINE__);
        }
        if (is_null($offRoadVehicle) || (is_array($offRoadVehicle) && empty($offRoadVehicle))) {
            unset($this->OffRoadVehicle);
        } else {
            $this->OffRoadVehicle = $offRoadVehicle;
        }
        return $this;
    }
    /**
     * Get PartnerType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PartnerType|null
     */
    public function getPartnerType()
    {
        return isset($this->PartnerType) ? $this->PartnerType : null;
    }
    /**
     * Set PartnerType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PartnerType $partnerType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setPartnerType(\Mu4ddi3\Compensa\Webservice\StructType\PartnerType $partnerType = null)
    {
        if (is_null($partnerType) || (is_array($partnerType) && empty($partnerType))) {
            unset($this->PartnerType);
        } else {
            $this->PartnerType = $partnerType;
        }
        return $this;
    }
    /**
     * Get PkdCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPkdCode()
    {
        return isset($this->PkdCode) ? $this->PkdCode : null;
    }
    /**
     * Set PkdCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $pkdCode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setPkdCode($pkdCode = null)
    {
        // validation for constraint: string
        if (!is_null($pkdCode) && !is_string($pkdCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pkdCode)), __LINE__);
        }
        if (is_null($pkdCode) || (is_array($pkdCode) && empty($pkdCode))) {
            unset($this->PkdCode);
        } else {
            $this->PkdCode = $pkdCode;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
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
     * Get PreviousZuAcId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getPreviousZuAcId()
    {
        return isset($this->PreviousZuAcId) ? $this->PreviousZuAcId : null;
    }
    /**
     * Set PreviousZuAcId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $previousZuAcId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setPreviousZuAcId($previousZuAcId = null)
    {
        // validation for constraint: int
        if (!is_null($previousZuAcId) && !is_numeric($previousZuAcId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($previousZuAcId)), __LINE__);
        }
        if (is_null($previousZuAcId) || (is_array($previousZuAcId) && empty($previousZuAcId))) {
            unset($this->PreviousZuAcId);
        } else {
            $this->PreviousZuAcId = $previousZuAcId;
        }
        return $this;
    }
    /**
     * Get PreviousZuOcId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getPreviousZuOcId()
    {
        return isset($this->PreviousZuOcId) ? $this->PreviousZuOcId : null;
    }
    /**
     * Set PreviousZuOcId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $previousZuOcId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setPreviousZuOcId($previousZuOcId = null)
    {
        // validation for constraint: int
        if (!is_null($previousZuOcId) && !is_numeric($previousZuOcId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($previousZuOcId)), __LINE__);
        }
        if (is_null($previousZuOcId) || (is_array($previousZuOcId) && empty($previousZuOcId))) {
            unset($this->PreviousZuOcId);
        } else {
            $this->PreviousZuOcId = $previousZuOcId;
        }
        return $this;
    }
    /**
     * Get PropertyInsurance value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getPropertyInsurance()
    {
        return isset($this->PropertyInsurance) ? $this->PropertyInsurance : null;
    }
    /**
     * Set PropertyInsurance value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $propertyInsurance
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setPropertyInsurance($propertyInsurance = null)
    {
        // validation for constraint: boolean
        if (!is_null($propertyInsurance) && !is_bool($propertyInsurance)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($propertyInsurance)), __LINE__);
        }
        if (is_null($propertyInsurance) || (is_array($propertyInsurance) && empty($propertyInsurance))) {
            unset($this->PropertyInsurance);
        } else {
            $this->PropertyInsurance = $propertyInsurance;
        }
        return $this;
    }
    /**
     * Get ScalpelCorrectionAc value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelCorrectionAc|null
     */
    public function getScalpelCorrectionAc()
    {
        return isset($this->ScalpelCorrectionAc) ? $this->ScalpelCorrectionAc : null;
    }
    /**
     * Set ScalpelCorrectionAc value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ScalpelCorrectionAc $scalpelCorrectionAc
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setScalpelCorrectionAc(\Mu4ddi3\Compensa\Webservice\StructType\ScalpelCorrectionAc $scalpelCorrectionAc = null)
    {
        if (is_null($scalpelCorrectionAc) || (is_array($scalpelCorrectionAc) && empty($scalpelCorrectionAc))) {
            unset($this->ScalpelCorrectionAc);
        } else {
            $this->ScalpelCorrectionAc = $scalpelCorrectionAc;
        }
        return $this;
    }
    /**
     * Get ScalpelCorrectionOc value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelCorrectionOc|null
     */
    public function getScalpelCorrectionOc()
    {
        return isset($this->ScalpelCorrectionOc) ? $this->ScalpelCorrectionOc : null;
    }
    /**
     * Set ScalpelCorrectionOc value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ScalpelCorrectionOc $scalpelCorrectionOc
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setScalpelCorrectionOc(\Mu4ddi3\Compensa\Webservice\StructType\ScalpelCorrectionOc $scalpelCorrectionOc = null)
    {
        if (is_null($scalpelCorrectionOc) || (is_array($scalpelCorrectionOc) && empty($scalpelCorrectionOc))) {
            unset($this->ScalpelCorrectionOc);
        } else {
            $this->ScalpelCorrectionOc = $scalpelCorrectionOc;
        }
        return $this;
    }
    /**
     * Get SeatsNumberLeftBound value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getSeatsNumberLeftBound()
    {
        return isset($this->SeatsNumberLeftBound) ? $this->SeatsNumberLeftBound : null;
    }
    /**
     * Set SeatsNumberLeftBound value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $seatsNumberLeftBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setSeatsNumberLeftBound($seatsNumberLeftBound = null)
    {
        // validation for constraint: int
        if (!is_null($seatsNumberLeftBound) && !is_numeric($seatsNumberLeftBound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($seatsNumberLeftBound)), __LINE__);
        }
        if (is_null($seatsNumberLeftBound) || (is_array($seatsNumberLeftBound) && empty($seatsNumberLeftBound))) {
            unset($this->SeatsNumberLeftBound);
        } else {
            $this->SeatsNumberLeftBound = $seatsNumberLeftBound;
        }
        return $this;
    }
    /**
     * Get SeatsNumberRightBound value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getSeatsNumberRightBound()
    {
        return isset($this->SeatsNumberRightBound) ? $this->SeatsNumberRightBound : null;
    }
    /**
     * Set SeatsNumberRightBound value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $seatsNumberRightBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setSeatsNumberRightBound($seatsNumberRightBound = null)
    {
        // validation for constraint: int
        if (!is_null($seatsNumberRightBound) && !is_numeric($seatsNumberRightBound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($seatsNumberRightBound)), __LINE__);
        }
        if (is_null($seatsNumberRightBound) || (is_array($seatsNumberRightBound) && empty($seatsNumberRightBound))) {
            unset($this->SeatsNumberRightBound);
        } else {
            $this->SeatsNumberRightBound = $seatsNumberRightBound;
        }
        return $this;
    }
    /**
     * Get SteeringWheelConfiguration value
     * @return string|null
     */
    public function getSteeringWheelConfiguration()
    {
        return $this->SteeringWheelConfiguration;
    }
    /**
     * Set SteeringWheelConfiguration value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\SteeringWheelConfiguration::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\SteeringWheelConfiguration::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $steeringWheelConfiguration
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setSteeringWheelConfiguration($steeringWheelConfiguration = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\SteeringWheelConfiguration::valueIsValid($steeringWheelConfiguration)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $steeringWheelConfiguration, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\SteeringWheelConfiguration::getValidValues())), __LINE__);
        }
        $this->SteeringWheelConfiguration = $steeringWheelConfiguration;
        return $this;
    }
    /**
     * Get SuAcLeftBound value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getSuAcLeftBound()
    {
        return isset($this->SuAcLeftBound) ? $this->SuAcLeftBound : null;
    }
    /**
     * Set SuAcLeftBound value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $suAcLeftBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setSuAcLeftBound(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $suAcLeftBound = null)
    {
        if (is_null($suAcLeftBound) || (is_array($suAcLeftBound) && empty($suAcLeftBound))) {
            unset($this->SuAcLeftBound);
        } else {
            $this->SuAcLeftBound = $suAcLeftBound;
        }
        return $this;
    }
    /**
     * Get SuAcRightBound value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getSuAcRightBound()
    {
        return isset($this->SuAcRightBound) ? $this->SuAcRightBound : null;
    }
    /**
     * Set SuAcRightBound value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $suAcRightBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setSuAcRightBound(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $suAcRightBound = null)
    {
        if (is_null($suAcRightBound) || (is_array($suAcRightBound) && empty($suAcRightBound))) {
            unset($this->SuAcRightBound);
        } else {
            $this->SuAcRightBound = $suAcRightBound;
        }
        return $this;
    }
    /**
     * Get Suv value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getSuv()
    {
        return isset($this->Suv) ? $this->Suv : null;
    }
    /**
     * Set Suv value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $suv
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setSuv($suv = null)
    {
        // validation for constraint: boolean
        if (!is_null($suv) && !is_bool($suv)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($suv)), __LINE__);
        }
        if (is_null($suv) || (is_array($suv) && empty($suv))) {
            unset($this->Suv);
        } else {
            $this->Suv = $suv;
        }
        return $this;
    }
    /**
     * Get TerritoryUsageType value
     * @return string|null
     */
    public function getTerritoryUsageType()
    {
        return $this->TerritoryUsageType;
    }
    /**
     * Set TerritoryUsageType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\TerritoryUsageType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\TerritoryUsageType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $territoryUsageType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setTerritoryUsageType($territoryUsageType = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\TerritoryUsageType::valueIsValid($territoryUsageType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $territoryUsageType, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\TerritoryUsageType::getValidValues())), __LINE__);
        }
        $this->TerritoryUsageType = $territoryUsageType;
        return $this;
    }
    /**
     * Get TuNumberAc value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getTuNumberAc()
    {
        return isset($this->TuNumberAc) ? $this->TuNumberAc : null;
    }
    /**
     * Set TuNumberAc value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $tuNumberAc
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setTuNumberAc($tuNumberAc = null)
    {
        // validation for constraint: int
        if (!is_null($tuNumberAc) && !is_numeric($tuNumberAc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($tuNumberAc)), __LINE__);
        }
        if (is_null($tuNumberAc) || (is_array($tuNumberAc) && empty($tuNumberAc))) {
            unset($this->TuNumberAc);
        } else {
            $this->TuNumberAc = $tuNumberAc;
        }
        return $this;
    }
    /**
     * Get TuNumberOc value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getTuNumberOc()
    {
        return isset($this->TuNumberOc) ? $this->TuNumberOc : null;
    }
    /**
     * Set TuNumberOc value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $tuNumberOc
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setTuNumberOc($tuNumberOc = null)
    {
        // validation for constraint: int
        if (!is_null($tuNumberOc) && !is_numeric($tuNumberOc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($tuNumberOc)), __LINE__);
        }
        if (is_null($tuNumberOc) || (is_array($tuNumberOc) && empty($tuNumberOc))) {
            unset($this->TuNumberOc);
        } else {
            $this->TuNumberOc = $tuNumberOc;
        }
        return $this;
    }
    /**
     * Get UfgVehiclesCount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint|null
     */
    public function getUfgVehiclesCount()
    {
        return isset($this->UfgVehiclesCount) ? $this->UfgVehiclesCount : null;
    }
    /**
     * Set UfgVehiclesCount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint $ufgVehiclesCount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setUfgVehiclesCount(\Mu4ddi3\Compensa\Webservice\StructType\RangeOfint $ufgVehiclesCount = null)
    {
        if (is_null($ufgVehiclesCount) || (is_array($ufgVehiclesCount) && empty($ufgVehiclesCount))) {
            unset($this->UfgVehiclesCount);
        } else {
            $this->UfgVehiclesCount = $ufgVehiclesCount;
        }
        return $this;
    }
    /**
     * Get VehicleAgeLeftBound value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getVehicleAgeLeftBound()
    {
        return isset($this->VehicleAgeLeftBound) ? $this->VehicleAgeLeftBound : null;
    }
    /**
     * Set VehicleAgeLeftBound value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $vehicleAgeLeftBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setVehicleAgeLeftBound($vehicleAgeLeftBound = null)
    {
        // validation for constraint: int
        if (!is_null($vehicleAgeLeftBound) && !is_numeric($vehicleAgeLeftBound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($vehicleAgeLeftBound)), __LINE__);
        }
        if (is_null($vehicleAgeLeftBound) || (is_array($vehicleAgeLeftBound) && empty($vehicleAgeLeftBound))) {
            unset($this->VehicleAgeLeftBound);
        } else {
            $this->VehicleAgeLeftBound = $vehicleAgeLeftBound;
        }
        return $this;
    }
    /**
     * Get VehicleAgeRightBound value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getVehicleAgeRightBound()
    {
        return isset($this->VehicleAgeRightBound) ? $this->VehicleAgeRightBound : null;
    }
    /**
     * Set VehicleAgeRightBound value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $vehicleAgeRightBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setVehicleAgeRightBound($vehicleAgeRightBound = null)
    {
        // validation for constraint: int
        if (!is_null($vehicleAgeRightBound) && !is_numeric($vehicleAgeRightBound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($vehicleAgeRightBound)), __LINE__);
        }
        if (is_null($vehicleAgeRightBound) || (is_array($vehicleAgeRightBound) && empty($vehicleAgeRightBound))) {
            unset($this->VehicleAgeRightBound);
        } else {
            $this->VehicleAgeRightBound = $vehicleAgeRightBound;
        }
        return $this;
    }
    /**
     * Get VehicleGroupId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getVehicleGroupId()
    {
        return isset($this->VehicleGroupId) ? $this->VehicleGroupId : null;
    }
    /**
     * Set VehicleGroupId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $vehicleGroupId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setVehicleGroupId($vehicleGroupId = null)
    {
        // validation for constraint: int
        if (!is_null($vehicleGroupId) && !is_numeric($vehicleGroupId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($vehicleGroupId)), __LINE__);
        }
        if (is_null($vehicleGroupId) || (is_array($vehicleGroupId) && empty($vehicleGroupId))) {
            unset($this->VehicleGroupId);
        } else {
            $this->VehicleGroupId = $vehicleGroupId;
        }
        return $this;
    }
    /**
     * Get VehicleImportStatus value
     * @return string|null
     */
    public function getVehicleImportStatus()
    {
        return $this->VehicleImportStatus;
    }
    /**
     * Set VehicleImportStatus value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VehicleImportStatus::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VehicleImportStatus::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $vehicleImportStatus
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setVehicleImportStatus($vehicleImportStatus = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\VehicleImportStatus::valueIsValid($vehicleImportStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $vehicleImportStatus, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\VehicleImportStatus::getValidValues())), __LINE__);
        }
        $this->VehicleImportStatus = $vehicleImportStatus;
        return $this;
    }
    /**
     * Get VehicleImportedExist value
     * @return bool|null
     */
    public function getVehicleImportedExist()
    {
        return $this->VehicleImportedExist;
    }
    /**
     * Set VehicleImportedExist value
     * @param bool $vehicleImportedExist
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setVehicleImportedExist($vehicleImportedExist = null)
    {
        // validation for constraint: boolean
        if (!is_null($vehicleImportedExist) && !is_bool($vehicleImportedExist)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($vehicleImportedExist)), __LINE__);
        }
        $this->VehicleImportedExist = $vehicleImportedExist;
        return $this;
    }
    /**
     * Get VehicleType value
     * @return string|null
     */
    public function getVehicleType()
    {
        return $this->VehicleType;
    }
    /**
     * Set VehicleType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VehicleType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VehicleType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $vehicleType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
     */
    public function setVehicleType($vehicleType = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\VehicleType::valueIsValid($vehicleType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $vehicleType, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\VehicleType::getValidValues())), __LINE__);
        }
        $this->VehicleType = $vehicleType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor
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
