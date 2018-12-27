<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MotorVehicle StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MotorVehicle
 * @subpackage Structs
 */
class MotorVehicle extends InsuredObject
{
    /**
     * The Age
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Age;
    /**
     * The AntiTheftSecurity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\AntiTheftSecurity
     */
    public $AntiTheftSecurity;
    /**
     * The Body
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Body;
    /**
     * The BodyShort
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $BodyShort;
    /**
     * The Brand
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Brand;
    /**
     * The BrandId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $BrandId;
    /**
     * The Capacity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Capacity;
    /**
     * The EnginePower
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $EnginePower;
    /**
     * The EnginePowerKM
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $EnginePowerKM;
    /**
     * The FirstRegistrationDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FirstRegistrationDate;
    /**
     * The FuelType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FuelType;
    /**
     * The InspectionData
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\InspectionData
     */
    public $InspectionData;
    /**
     * The IsCabrio
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsCabrio;
    /**
     * The IsCrashBarInstalled
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsCrashBarInstalled;
    /**
     * The IsForcedToBeOnBlackList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsForcedToBeOnBlackList;
    /**
     * The IsNoRegistrationNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsNoRegistrationNumber;
    /**
     * The IsNotRegistered
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsNotRegistered;
    /**
     * The IsOffRoad
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsOffRoad;
    /**
     * The IsPhotoDocumentationRequired
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsPhotoDocumentationRequired;
    /**
     * The IsPriceNetto
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsPriceNetto;
    /**
     * The IsSUV
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsSUV;
    /**
     * The IsTechnicalExaminationInvalid
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsTechnicalExaminationInvalid;
    /**
     * The IsUSA
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsUSA;
    /**
     * The IsVehicleValueFromPortal
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsVehicleValueFromPortal;
    /**
     * The MaximumWeight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MaximumWeight;
    /**
     * The Mileage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Mileage;
    /**
     * The Model
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Model;
    /**
     * The ModelId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ModelId;
    /**
     * The ModelTypeId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ModelTypeId;
    /**
     * The NextTechnicalExaminationDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $NextTechnicalExaminationDate;
    /**
     * The NumberOfSeats
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfSeats;
    /**
     * The PhotoDocumentationNotRequiredReason
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PhotoDocumentationNotRequiredReason;
    /**
     * The PriceMaximum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $PriceMaximum;
    /**
     * The PriceMinimum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $PriceMinimum;
    /**
     * The ProductionYear
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ProductionYear;
    /**
     * The RegistrationCounty
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $RegistrationCounty;
    /**
     * The RegistrationNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $RegistrationNumber;
    /**
     * The RoundedVehicleValueFromInfoEkspert
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $RoundedVehicleValueFromInfoEkspert;
    /**
     * The SteeringWheelConfiguration
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SteeringWheelConfiguration;
    /**
     * The TerritoryUsageType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TerritoryUsageType;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Type;
    /**
     * The UnusualVehicleUsage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $UnusualVehicleUsage;
    /**
     * The VIN
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $VIN;
    /**
     * The VehicleDataCorrection
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\VehicleDataCorrection
     */
    public $VehicleDataCorrection;
    /**
     * The VehicleEquipment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\VehicleEquipment
     */
    public $VehicleEquipment;
    /**
     * The VehicleGroupId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $VehicleGroupId;
    /**
     * The VehicleOriginData
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\VehicleOriginData
     */
    public $VehicleOriginData;
    /**
     * The VehiclePriceType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $VehiclePriceType;
    /**
     * The VehicleSource
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $VehicleSource;
    /**
     * The VehicleType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $VehicleType;
    /**
     * The VehicleValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $VehicleValue;
    /**
     * The VehicleValueFromInfoEkspert
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $VehicleValueFromInfoEkspert;
    /**
     * The VehicleValueFromInfoEkspertBeforeCorrection
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $VehicleValueFromInfoEkspertBeforeCorrection;
    /**
     * The VehicleValueSource
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $VehicleValueSource;
    /**
     * The ZoneAc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ZoneAc;
    /**
     * The ZoneOc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ZoneOc;
    /**
     * Constructor method for MotorVehicle
     * @uses MotorVehicle::setAge()
     * @uses MotorVehicle::setAntiTheftSecurity()
     * @uses MotorVehicle::setBody()
     * @uses MotorVehicle::setBodyShort()
     * @uses MotorVehicle::setBrand()
     * @uses MotorVehicle::setBrandId()
     * @uses MotorVehicle::setCapacity()
     * @uses MotorVehicle::setEnginePower()
     * @uses MotorVehicle::setEnginePowerKM()
     * @uses MotorVehicle::setFirstRegistrationDate()
     * @uses MotorVehicle::setFuelType()
     * @uses MotorVehicle::setInspectionData()
     * @uses MotorVehicle::setIsCabrio()
     * @uses MotorVehicle::setIsCrashBarInstalled()
     * @uses MotorVehicle::setIsForcedToBeOnBlackList()
     * @uses MotorVehicle::setIsNoRegistrationNumber()
     * @uses MotorVehicle::setIsNotRegistered()
     * @uses MotorVehicle::setIsOffRoad()
     * @uses MotorVehicle::setIsPhotoDocumentationRequired()
     * @uses MotorVehicle::setIsPriceNetto()
     * @uses MotorVehicle::setIsSUV()
     * @uses MotorVehicle::setIsTechnicalExaminationInvalid()
     * @uses MotorVehicle::setIsUSA()
     * @uses MotorVehicle::setIsVehicleValueFromPortal()
     * @uses MotorVehicle::setMaximumWeight()
     * @uses MotorVehicle::setMileage()
     * @uses MotorVehicle::setModel()
     * @uses MotorVehicle::setModelId()
     * @uses MotorVehicle::setModelTypeId()
     * @uses MotorVehicle::setNextTechnicalExaminationDate()
     * @uses MotorVehicle::setNumberOfSeats()
     * @uses MotorVehicle::setPhotoDocumentationNotRequiredReason()
     * @uses MotorVehicle::setPriceMaximum()
     * @uses MotorVehicle::setPriceMinimum()
     * @uses MotorVehicle::setProductionYear()
     * @uses MotorVehicle::setRegistrationCounty()
     * @uses MotorVehicle::setRegistrationNumber()
     * @uses MotorVehicle::setRoundedVehicleValueFromInfoEkspert()
     * @uses MotorVehicle::setSteeringWheelConfiguration()
     * @uses MotorVehicle::setTerritoryUsageType()
     * @uses MotorVehicle::setType()
     * @uses MotorVehicle::setUnusualVehicleUsage()
     * @uses MotorVehicle::setVIN()
     * @uses MotorVehicle::setVehicleDataCorrection()
     * @uses MotorVehicle::setVehicleEquipment()
     * @uses MotorVehicle::setVehicleGroupId()
     * @uses MotorVehicle::setVehicleOriginData()
     * @uses MotorVehicle::setVehiclePriceType()
     * @uses MotorVehicle::setVehicleSource()
     * @uses MotorVehicle::setVehicleType()
     * @uses MotorVehicle::setVehicleValue()
     * @uses MotorVehicle::setVehicleValueFromInfoEkspert()
     * @uses MotorVehicle::setVehicleValueFromInfoEkspertBeforeCorrection()
     * @uses MotorVehicle::setVehicleValueSource()
     * @uses MotorVehicle::setZoneAc()
     * @uses MotorVehicle::setZoneOc()
     * @param int $age
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AntiTheftSecurity $antiTheftSecurity
     * @param string $body
     * @param string $bodyShort
     * @param string $brand
     * @param int $brandId
     * @param int $capacity
     * @param int $enginePower
     * @param int $enginePowerKM
     * @param string $firstRegistrationDate
     * @param string $fuelType
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InspectionData $inspectionData
     * @param bool $isCabrio
     * @param bool $isCrashBarInstalled
     * @param bool $isForcedToBeOnBlackList
     * @param bool $isNoRegistrationNumber
     * @param bool $isNotRegistered
     * @param bool $isOffRoad
     * @param bool $isPhotoDocumentationRequired
     * @param bool $isPriceNetto
     * @param bool $isSUV
     * @param bool $isTechnicalExaminationInvalid
     * @param bool $isUSA
     * @param bool $isVehicleValueFromPortal
     * @param int $maximumWeight
     * @param int $mileage
     * @param string $model
     * @param int $modelId
     * @param int $modelTypeId
     * @param string $nextTechnicalExaminationDate
     * @param int $numberOfSeats
     * @param string $photoDocumentationNotRequiredReason
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $priceMaximum
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $priceMinimum
     * @param int $productionYear
     * @param int $registrationCounty
     * @param string $registrationNumber
     * @param int $roundedVehicleValueFromInfoEkspert
     * @param string $steeringWheelConfiguration
     * @param string $territoryUsageType
     * @param string $type
     * @param string $unusualVehicleUsage
     * @param string $vIN
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VehicleDataCorrection $vehicleDataCorrection
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VehicleEquipment $vehicleEquipment
     * @param int $vehicleGroupId
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VehicleOriginData $vehicleOriginData
     * @param string $vehiclePriceType
     * @param string $vehicleSource
     * @param string $vehicleType
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $vehicleValue
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $vehicleValueFromInfoEkspert
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $vehicleValueFromInfoEkspertBeforeCorrection
     * @param string $vehicleValueSource
     * @param int $zoneAc
     * @param int $zoneOc
     */
    public function __construct($age = null, \Mu4ddi3\Compensa\Webservice\StructType\AntiTheftSecurity $antiTheftSecurity = null, $body = null, $bodyShort = null, $brand = null, $brandId = null, $capacity = null, $enginePower = null, $enginePowerKM = null, $firstRegistrationDate = null, $fuelType = null, \Mu4ddi3\Compensa\Webservice\StructType\InspectionData $inspectionData = null, $isCabrio = null, $isCrashBarInstalled = null, $isForcedToBeOnBlackList = null, $isNoRegistrationNumber = null, $isNotRegistered = null, $isOffRoad = null, $isPhotoDocumentationRequired = null, $isPriceNetto = null, $isSUV = null, $isTechnicalExaminationInvalid = null, $isUSA = null, $isVehicleValueFromPortal = null, $maximumWeight = null, $mileage = null, $model = null, $modelId = null, $modelTypeId = null, $nextTechnicalExaminationDate = null, $numberOfSeats = null, $photoDocumentationNotRequiredReason = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $priceMaximum = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $priceMinimum = null, $productionYear = null, $registrationCounty = null, $registrationNumber = null, $roundedVehicleValueFromInfoEkspert = null, $steeringWheelConfiguration = null, $territoryUsageType = null, $type = null, $unusualVehicleUsage = null, $vIN = null, \Mu4ddi3\Compensa\Webservice\StructType\VehicleDataCorrection $vehicleDataCorrection = null, \Mu4ddi3\Compensa\Webservice\StructType\VehicleEquipment $vehicleEquipment = null, $vehicleGroupId = null, \Mu4ddi3\Compensa\Webservice\StructType\VehicleOriginData $vehicleOriginData = null, $vehiclePriceType = null, $vehicleSource = null, $vehicleType = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $vehicleValue = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $vehicleValueFromInfoEkspert = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $vehicleValueFromInfoEkspertBeforeCorrection = null, $vehicleValueSource = null, $zoneAc = null, $zoneOc = null)
    {
        $this
            ->setAge($age)
            ->setAntiTheftSecurity($antiTheftSecurity)
            ->setBody($body)
            ->setBodyShort($bodyShort)
            ->setBrand($brand)
            ->setBrandId($brandId)
            ->setCapacity($capacity)
            ->setEnginePower($enginePower)
            ->setEnginePowerKM($enginePowerKM)
            ->setFirstRegistrationDate($firstRegistrationDate)
            ->setFuelType($fuelType)
            ->setInspectionData($inspectionData)
            ->setIsCabrio($isCabrio)
            ->setIsCrashBarInstalled($isCrashBarInstalled)
            ->setIsForcedToBeOnBlackList($isForcedToBeOnBlackList)
            ->setIsNoRegistrationNumber($isNoRegistrationNumber)
            ->setIsNotRegistered($isNotRegistered)
            ->setIsOffRoad($isOffRoad)
            ->setIsPhotoDocumentationRequired($isPhotoDocumentationRequired)
            ->setIsPriceNetto($isPriceNetto)
            ->setIsSUV($isSUV)
            ->setIsTechnicalExaminationInvalid($isTechnicalExaminationInvalid)
            ->setIsUSA($isUSA)
            ->setIsVehicleValueFromPortal($isVehicleValueFromPortal)
            ->setMaximumWeight($maximumWeight)
            ->setMileage($mileage)
            ->setModel($model)
            ->setModelId($modelId)
            ->setModelTypeId($modelTypeId)
            ->setNextTechnicalExaminationDate($nextTechnicalExaminationDate)
            ->setNumberOfSeats($numberOfSeats)
            ->setPhotoDocumentationNotRequiredReason($photoDocumentationNotRequiredReason)
            ->setPriceMaximum($priceMaximum)
            ->setPriceMinimum($priceMinimum)
            ->setProductionYear($productionYear)
            ->setRegistrationCounty($registrationCounty)
            ->setRegistrationNumber($registrationNumber)
            ->setRoundedVehicleValueFromInfoEkspert($roundedVehicleValueFromInfoEkspert)
            ->setSteeringWheelConfiguration($steeringWheelConfiguration)
            ->setTerritoryUsageType($territoryUsageType)
            ->setType($type)
            ->setUnusualVehicleUsage($unusualVehicleUsage)
            ->setVIN($vIN)
            ->setVehicleDataCorrection($vehicleDataCorrection)
            ->setVehicleEquipment($vehicleEquipment)
            ->setVehicleGroupId($vehicleGroupId)
            ->setVehicleOriginData($vehicleOriginData)
            ->setVehiclePriceType($vehiclePriceType)
            ->setVehicleSource($vehicleSource)
            ->setVehicleType($vehicleType)
            ->setVehicleValue($vehicleValue)
            ->setVehicleValueFromInfoEkspert($vehicleValueFromInfoEkspert)
            ->setVehicleValueFromInfoEkspertBeforeCorrection($vehicleValueFromInfoEkspertBeforeCorrection)
            ->setVehicleValueSource($vehicleValueSource)
            ->setZoneAc($zoneAc)
            ->setZoneOc($zoneOc);
    }
    /**
     * Get Age value
     * @return int|null
     */
    public function getAge()
    {
        return $this->Age;
    }
    /**
     * Set Age value
     * @param int $age
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
     */
    public function setAge($age = null)
    {
        // validation for constraint: int
        if (!is_null($age) && !is_numeric($age)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($age)), __LINE__);
        }
        $this->Age = $age;
        return $this;
    }
    /**
     * Get AntiTheftSecurity value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AntiTheftSecurity|null
     */
    public function getAntiTheftSecurity()
    {
        return isset($this->AntiTheftSecurity) ? $this->AntiTheftSecurity : null;
    }
    /**
     * Set AntiTheftSecurity value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AntiTheftSecurity $antiTheftSecurity
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
     */
    public function setAntiTheftSecurity(\Mu4ddi3\Compensa\Webservice\StructType\AntiTheftSecurity $antiTheftSecurity = null)
    {
        if (is_null($antiTheftSecurity) || (is_array($antiTheftSecurity) && empty($antiTheftSecurity))) {
            unset($this->AntiTheftSecurity);
        } else {
            $this->AntiTheftSecurity = $antiTheftSecurity;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
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
     * Get BodyShort value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBodyShort()
    {
        return isset($this->BodyShort) ? $this->BodyShort : null;
    }
    /**
     * Set BodyShort value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $bodyShort
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
     */
    public function setBodyShort($bodyShort = null)
    {
        // validation for constraint: string
        if (!is_null($bodyShort) && !is_string($bodyShort)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bodyShort)), __LINE__);
        }
        if (is_null($bodyShort) || (is_array($bodyShort) && empty($bodyShort))) {
            unset($this->BodyShort);
        } else {
            $this->BodyShort = $bodyShort;
        }
        return $this;
    }
    /**
     * Get Brand value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBrand()
    {
        return isset($this->Brand) ? $this->Brand : null;
    }
    /**
     * Set Brand value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $brand
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
     */
    public function setBrand($brand = null)
    {
        // validation for constraint: string
        if (!is_null($brand) && !is_string($brand)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($brand)), __LINE__);
        }
        if (is_null($brand) || (is_array($brand) && empty($brand))) {
            unset($this->Brand);
        } else {
            $this->Brand = $brand;
        }
        return $this;
    }
    /**
     * Get BrandId value
     * @return int|null
     */
    public function getBrandId()
    {
        return $this->BrandId;
    }
    /**
     * Set BrandId value
     * @param int $brandId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
     */
    public function setBrandId($brandId = null)
    {
        // validation for constraint: int
        if (!is_null($brandId) && !is_numeric($brandId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($brandId)), __LINE__);
        }
        $this->BrandId = $brandId;
        return $this;
    }
    /**
     * Get Capacity value
     * @return int|null
     */
    public function getCapacity()
    {
        return $this->Capacity;
    }
    /**
     * Set Capacity value
     * @param int $capacity
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
     */
    public function setCapacity($capacity = null)
    {
        // validation for constraint: int
        if (!is_null($capacity) && !is_numeric($capacity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($capacity)), __LINE__);
        }
        $this->Capacity = $capacity;
        return $this;
    }
    /**
     * Get EnginePower value
     * @return int|null
     */
    public function getEnginePower()
    {
        return $this->EnginePower;
    }
    /**
     * Set EnginePower value
     * @param int $enginePower
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
     */
    public function setEnginePower($enginePower = null)
    {
        // validation for constraint: int
        if (!is_null($enginePower) && !is_numeric($enginePower)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($enginePower)), __LINE__);
        }
        $this->EnginePower = $enginePower;
        return $this;
    }
    /**
     * Get EnginePowerKM value
     * @return int|null
     */
    public function getEnginePowerKM()
    {
        return $this->EnginePowerKM;
    }
    /**
     * Set EnginePowerKM value
     * @param int $enginePowerKM
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
     */
    public function setEnginePowerKM($enginePowerKM = null)
    {
        // validation for constraint: int
        if (!is_null($enginePowerKM) && !is_numeric($enginePowerKM)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($enginePowerKM)), __LINE__);
        }
        $this->EnginePowerKM = $enginePowerKM;
        return $this;
    }
    /**
     * Get FirstRegistrationDate value
     * @return string|null
     */
    public function getFirstRegistrationDate()
    {
        return $this->FirstRegistrationDate;
    }
    /**
     * Set FirstRegistrationDate value
     * @param string $firstRegistrationDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
     */
    public function setFirstRegistrationDate($firstRegistrationDate = null)
    {
        // validation for constraint: string
        if (!is_null($firstRegistrationDate) && !is_string($firstRegistrationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($firstRegistrationDate)), __LINE__);
        }
        $this->FirstRegistrationDate = $firstRegistrationDate;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
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
     * Get InspectionData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InspectionData|null
     */
    public function getInspectionData()
    {
        return isset($this->InspectionData) ? $this->InspectionData : null;
    }
    /**
     * Set InspectionData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InspectionData $inspectionData
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
     */
    public function setInspectionData(\Mu4ddi3\Compensa\Webservice\StructType\InspectionData $inspectionData = null)
    {
        if (is_null($inspectionData) || (is_array($inspectionData) && empty($inspectionData))) {
            unset($this->InspectionData);
        } else {
            $this->InspectionData = $inspectionData;
        }
        return $this;
    }
    /**
     * Get IsCabrio value
     * @return bool|null
     */
    public function getIsCabrio()
    {
        return $this->IsCabrio;
    }
    /**
     * Set IsCabrio value
     * @param bool $isCabrio
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
     */
    public function setIsCabrio($isCabrio = null)
    {
        // validation for constraint: boolean
        if (!is_null($isCabrio) && !is_bool($isCabrio)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isCabrio)), __LINE__);
        }
        $this->IsCabrio = $isCabrio;
        return $this;
    }
    /**
     * Get IsCrashBarInstalled value
     * @return bool|null
     */
    public function getIsCrashBarInstalled()
    {
        return $this->IsCrashBarInstalled;
    }
    /**
     * Set IsCrashBarInstalled value
     * @param bool $isCrashBarInstalled
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
     */
    public function setIsCrashBarInstalled($isCrashBarInstalled = null)
    {
        // validation for constraint: boolean
        if (!is_null($isCrashBarInstalled) && !is_bool($isCrashBarInstalled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isCrashBarInstalled)), __LINE__);
        }
        $this->IsCrashBarInstalled = $isCrashBarInstalled;
        return $this;
    }
    /**
     * Get IsForcedToBeOnBlackList value
     * @return bool|null
     */
    public function getIsForcedToBeOnBlackList()
    {
        return $this->IsForcedToBeOnBlackList;
    }
    /**
     * Set IsForcedToBeOnBlackList value
     * @param bool $isForcedToBeOnBlackList
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
     */
    public function setIsForcedToBeOnBlackList($isForcedToBeOnBlackList = null)
    {
        // validation for constraint: boolean
        if (!is_null($isForcedToBeOnBlackList) && !is_bool($isForcedToBeOnBlackList)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isForcedToBeOnBlackList)), __LINE__);
        }
        $this->IsForcedToBeOnBlackList = $isForcedToBeOnBlackList;
        return $this;
    }
    /**
     * Get IsNoRegistrationNumber value
     * @return bool|null
     */
    public function getIsNoRegistrationNumber()
    {
        return $this->IsNoRegistrationNumber;
    }
    /**
     * Set IsNoRegistrationNumber value
     * @param bool $isNoRegistrationNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
     */
    public function setIsNoRegistrationNumber($isNoRegistrationNumber = null)
    {
        // validation for constraint: boolean
        if (!is_null($isNoRegistrationNumber) && !is_bool($isNoRegistrationNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isNoRegistrationNumber)), __LINE__);
        }
        $this->IsNoRegistrationNumber = $isNoRegistrationNumber;
        return $this;
    }
    /**
     * Get IsNotRegistered value
     * @return bool|null
     */
    public function getIsNotRegistered()
    {
        return $this->IsNotRegistered;
    }
    /**
     * Set IsNotRegistered value
     * @param bool $isNotRegistered
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
     */
    public function setIsNotRegistered($isNotRegistered = null)
    {
        // validation for constraint: boolean
        if (!is_null($isNotRegistered) && !is_bool($isNotRegistered)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isNotRegistered)), __LINE__);
        }
        $this->IsNotRegistered = $isNotRegistered;
        return $this;
    }
    /**
     * Get IsOffRoad value
     * @return bool|null
     */
    public function getIsOffRoad()
    {
        return $this->IsOffRoad;
    }
    /**
     * Set IsOffRoad value
     * @param bool $isOffRoad
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
     */
    public function setIsOffRoad($isOffRoad = null)
    {
        // validation for constraint: boolean
        if (!is_null($isOffRoad) && !is_bool($isOffRoad)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isOffRoad)), __LINE__);
        }
        $this->IsOffRoad = $isOffRoad;
        return $this;
    }
    /**
     * Get IsPhotoDocumentationRequired value
     * @return bool|null
     */
    public function getIsPhotoDocumentationRequired()
    {
        return $this->IsPhotoDocumentationRequired;
    }
    /**
     * Set IsPhotoDocumentationRequired value
     * @param bool $isPhotoDocumentationRequired
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
     */
    public function setIsPhotoDocumentationRequired($isPhotoDocumentationRequired = null)
    {
        // validation for constraint: boolean
        if (!is_null($isPhotoDocumentationRequired) && !is_bool($isPhotoDocumentationRequired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isPhotoDocumentationRequired)), __LINE__);
        }
        $this->IsPhotoDocumentationRequired = $isPhotoDocumentationRequired;
        return $this;
    }
    /**
     * Get IsPriceNetto value
     * @return bool|null
     */
    public function getIsPriceNetto()
    {
        return $this->IsPriceNetto;
    }
    /**
     * Set IsPriceNetto value
     * @param bool $isPriceNetto
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
     */
    public function setIsPriceNetto($isPriceNetto = null)
    {
        // validation for constraint: boolean
        if (!is_null($isPriceNetto) && !is_bool($isPriceNetto)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isPriceNetto)), __LINE__);
        }
        $this->IsPriceNetto = $isPriceNetto;
        return $this;
    }
    /**
     * Get IsSUV value
     * @return bool|null
     */
    public function getIsSUV()
    {
        return $this->IsSUV;
    }
    /**
     * Set IsSUV value
     * @param bool $isSUV
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
     */
    public function setIsSUV($isSUV = null)
    {
        // validation for constraint: boolean
        if (!is_null($isSUV) && !is_bool($isSUV)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isSUV)), __LINE__);
        }
        $this->IsSUV = $isSUV;
        return $this;
    }
    /**
     * Get IsTechnicalExaminationInvalid value
     * @return bool|null
     */
    public function getIsTechnicalExaminationInvalid()
    {
        return $this->IsTechnicalExaminationInvalid;
    }
    /**
     * Set IsTechnicalExaminationInvalid value
     * @param bool $isTechnicalExaminationInvalid
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
     */
    public function setIsTechnicalExaminationInvalid($isTechnicalExaminationInvalid = null)
    {
        // validation for constraint: boolean
        if (!is_null($isTechnicalExaminationInvalid) && !is_bool($isTechnicalExaminationInvalid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isTechnicalExaminationInvalid)), __LINE__);
        }
        $this->IsTechnicalExaminationInvalid = $isTechnicalExaminationInvalid;
        return $this;
    }
    /**
     * Get IsUSA value
     * @return bool|null
     */
    public function getIsUSA()
    {
        return $this->IsUSA;
    }
    /**
     * Set IsUSA value
     * @param bool $isUSA
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
     */
    public function setIsUSA($isUSA = null)
    {
        // validation for constraint: boolean
        if (!is_null($isUSA) && !is_bool($isUSA)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isUSA)), __LINE__);
        }
        $this->IsUSA = $isUSA;
        return $this;
    }
    /**
     * Get IsVehicleValueFromPortal value
     * @return bool|null
     */
    public function getIsVehicleValueFromPortal()
    {
        return $this->IsVehicleValueFromPortal;
    }
    /**
     * Set IsVehicleValueFromPortal value
     * @param bool $isVehicleValueFromPortal
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
     */
    public function setIsVehicleValueFromPortal($isVehicleValueFromPortal = null)
    {
        // validation for constraint: boolean
        if (!is_null($isVehicleValueFromPortal) && !is_bool($isVehicleValueFromPortal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isVehicleValueFromPortal)), __LINE__);
        }
        $this->IsVehicleValueFromPortal = $isVehicleValueFromPortal;
        return $this;
    }
    /**
     * Get MaximumWeight value
     * @return int|null
     */
    public function getMaximumWeight()
    {
        return $this->MaximumWeight;
    }
    /**
     * Set MaximumWeight value
     * @param int $maximumWeight
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
     */
    public function setMaximumWeight($maximumWeight = null)
    {
        // validation for constraint: int
        if (!is_null($maximumWeight) && !is_numeric($maximumWeight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maximumWeight)), __LINE__);
        }
        $this->MaximumWeight = $maximumWeight;
        return $this;
    }
    /**
     * Get Mileage value
     * @return int|null
     */
    public function getMileage()
    {
        return $this->Mileage;
    }
    /**
     * Set Mileage value
     * @param int $mileage
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
     */
    public function setMileage($mileage = null)
    {
        // validation for constraint: int
        if (!is_null($mileage) && !is_numeric($mileage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($mileage)), __LINE__);
        }
        $this->Mileage = $mileage;
        return $this;
    }
    /**
     * Get Model value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getModel()
    {
        return isset($this->Model) ? $this->Model : null;
    }
    /**
     * Set Model value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $model
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
     */
    public function setModel($model = null)
    {
        // validation for constraint: string
        if (!is_null($model) && !is_string($model)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($model)), __LINE__);
        }
        if (is_null($model) || (is_array($model) && empty($model))) {
            unset($this->Model);
        } else {
            $this->Model = $model;
        }
        return $this;
    }
    /**
     * Get ModelId value
     * @return int|null
     */
    public function getModelId()
    {
        return $this->ModelId;
    }
    /**
     * Set ModelId value
     * @param int $modelId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
     */
    public function setModelId($modelId = null)
    {
        // validation for constraint: int
        if (!is_null($modelId) && !is_numeric($modelId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($modelId)), __LINE__);
        }
        $this->ModelId = $modelId;
        return $this;
    }
    /**
     * Get ModelTypeId value
     * @return int|null
     */
    public function getModelTypeId()
    {
        return $this->ModelTypeId;
    }
    /**
     * Set ModelTypeId value
     * @param int $modelTypeId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
     */
    public function setModelTypeId($modelTypeId = null)
    {
        // validation for constraint: int
        if (!is_null($modelTypeId) && !is_numeric($modelTypeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($modelTypeId)), __LINE__);
        }
        $this->ModelTypeId = $modelTypeId;
        return $this;
    }
    /**
     * Get NextTechnicalExaminationDate value
     * @return string|null
     */
    public function getNextTechnicalExaminationDate()
    {
        return $this->NextTechnicalExaminationDate;
    }
    /**
     * Set NextTechnicalExaminationDate value
     * @param string $nextTechnicalExaminationDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
     */
    public function setNextTechnicalExaminationDate($nextTechnicalExaminationDate = null)
    {
        // validation for constraint: string
        if (!is_null($nextTechnicalExaminationDate) && !is_string($nextTechnicalExaminationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nextTechnicalExaminationDate)), __LINE__);
        }
        $this->NextTechnicalExaminationDate = $nextTechnicalExaminationDate;
        return $this;
    }
    /**
     * Get NumberOfSeats value
     * @return int|null
     */
    public function getNumberOfSeats()
    {
        return $this->NumberOfSeats;
    }
    /**
     * Set NumberOfSeats value
     * @param int $numberOfSeats
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
     */
    public function setNumberOfSeats($numberOfSeats = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfSeats) && !is_numeric($numberOfSeats)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfSeats)), __LINE__);
        }
        $this->NumberOfSeats = $numberOfSeats;
        return $this;
    }
    /**
     * Get PhotoDocumentationNotRequiredReason value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPhotoDocumentationNotRequiredReason()
    {
        return isset($this->PhotoDocumentationNotRequiredReason) ? $this->PhotoDocumentationNotRequiredReason : null;
    }
    /**
     * Set PhotoDocumentationNotRequiredReason value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PhotoDocumentationNotRequiredReason::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PhotoDocumentationNotRequiredReason::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $photoDocumentationNotRequiredReason
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
     */
    public function setPhotoDocumentationNotRequiredReason($photoDocumentationNotRequiredReason = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\PhotoDocumentationNotRequiredReason::valueIsValid($photoDocumentationNotRequiredReason)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $photoDocumentationNotRequiredReason, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\PhotoDocumentationNotRequiredReason::getValidValues())), __LINE__);
        }
        if (is_null($photoDocumentationNotRequiredReason) || (is_array($photoDocumentationNotRequiredReason) && empty($photoDocumentationNotRequiredReason))) {
            unset($this->PhotoDocumentationNotRequiredReason);
        } else {
            $this->PhotoDocumentationNotRequiredReason = $photoDocumentationNotRequiredReason;
        }
        return $this;
    }
    /**
     * Get PriceMaximum value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getPriceMaximum()
    {
        return isset($this->PriceMaximum) ? $this->PriceMaximum : null;
    }
    /**
     * Set PriceMaximum value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $priceMaximum
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
     */
    public function setPriceMaximum(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $priceMaximum = null)
    {
        if (is_null($priceMaximum) || (is_array($priceMaximum) && empty($priceMaximum))) {
            unset($this->PriceMaximum);
        } else {
            $this->PriceMaximum = $priceMaximum;
        }
        return $this;
    }
    /**
     * Get PriceMinimum value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getPriceMinimum()
    {
        return isset($this->PriceMinimum) ? $this->PriceMinimum : null;
    }
    /**
     * Set PriceMinimum value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $priceMinimum
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
     */
    public function setPriceMinimum(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $priceMinimum = null)
    {
        if (is_null($priceMinimum) || (is_array($priceMinimum) && empty($priceMinimum))) {
            unset($this->PriceMinimum);
        } else {
            $this->PriceMinimum = $priceMinimum;
        }
        return $this;
    }
    /**
     * Get ProductionYear value
     * @return int|null
     */
    public function getProductionYear()
    {
        return $this->ProductionYear;
    }
    /**
     * Set ProductionYear value
     * @param int $productionYear
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
     */
    public function setProductionYear($productionYear = null)
    {
        // validation for constraint: int
        if (!is_null($productionYear) && !is_numeric($productionYear)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($productionYear)), __LINE__);
        }
        $this->ProductionYear = $productionYear;
        return $this;
    }
    /**
     * Get RegistrationCounty value
     * @return int|null
     */
    public function getRegistrationCounty()
    {
        return $this->RegistrationCounty;
    }
    /**
     * Set RegistrationCounty value
     * @param int $registrationCounty
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
     */
    public function setRegistrationCounty($registrationCounty = null)
    {
        // validation for constraint: int
        if (!is_null($registrationCounty) && !is_numeric($registrationCounty)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($registrationCounty)), __LINE__);
        }
        $this->RegistrationCounty = $registrationCounty;
        return $this;
    }
    /**
     * Get RegistrationNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRegistrationNumber()
    {
        return isset($this->RegistrationNumber) ? $this->RegistrationNumber : null;
    }
    /**
     * Set RegistrationNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $registrationNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
     */
    public function setRegistrationNumber($registrationNumber = null)
    {
        // validation for constraint: string
        if (!is_null($registrationNumber) && !is_string($registrationNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($registrationNumber)), __LINE__);
        }
        if (is_null($registrationNumber) || (is_array($registrationNumber) && empty($registrationNumber))) {
            unset($this->RegistrationNumber);
        } else {
            $this->RegistrationNumber = $registrationNumber;
        }
        return $this;
    }
    /**
     * Get RoundedVehicleValueFromInfoEkspert value
     * @return int|null
     */
    public function getRoundedVehicleValueFromInfoEkspert()
    {
        return $this->RoundedVehicleValueFromInfoEkspert;
    }
    /**
     * Set RoundedVehicleValueFromInfoEkspert value
     * @param int $roundedVehicleValueFromInfoEkspert
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
     */
    public function setRoundedVehicleValueFromInfoEkspert($roundedVehicleValueFromInfoEkspert = null)
    {
        // validation for constraint: int
        if (!is_null($roundedVehicleValueFromInfoEkspert) && !is_numeric($roundedVehicleValueFromInfoEkspert)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($roundedVehicleValueFromInfoEkspert)), __LINE__);
        }
        $this->RoundedVehicleValueFromInfoEkspert = $roundedVehicleValueFromInfoEkspert;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
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
     * Get Type value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getType()
    {
        return isset($this->Type) ? $this->Type : null;
    }
    /**
     * Set Type value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $type
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        if (is_null($type) || (is_array($type) && empty($type))) {
            unset($this->Type);
        } else {
            $this->Type = $type;
        }
        return $this;
    }
    /**
     * Get UnusualVehicleUsage value
     * @return string|null
     */
    public function getUnusualVehicleUsage()
    {
        return $this->UnusualVehicleUsage;
    }
    /**
     * Set UnusualVehicleUsage value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\UnusualVehicleUsage::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\UnusualVehicleUsage::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $unusualVehicleUsage
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
     */
    public function setUnusualVehicleUsage($unusualVehicleUsage = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\UnusualVehicleUsage::valueIsValid($unusualVehicleUsage)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $unusualVehicleUsage, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\UnusualVehicleUsage::getValidValues())), __LINE__);
        }
        $this->UnusualVehicleUsage = $unusualVehicleUsage;
        return $this;
    }
    /**
     * Get VIN value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getVIN()
    {
        return isset($this->VIN) ? $this->VIN : null;
    }
    /**
     * Set VIN value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $vIN
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
     */
    public function setVIN($vIN = null)
    {
        // validation for constraint: string
        if (!is_null($vIN) && !is_string($vIN)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vIN)), __LINE__);
        }
        if (is_null($vIN) || (is_array($vIN) && empty($vIN))) {
            unset($this->VIN);
        } else {
            $this->VIN = $vIN;
        }
        return $this;
    }
    /**
     * Get VehicleDataCorrection value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleDataCorrection|null
     */
    public function getVehicleDataCorrection()
    {
        return isset($this->VehicleDataCorrection) ? $this->VehicleDataCorrection : null;
    }
    /**
     * Set VehicleDataCorrection value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VehicleDataCorrection $vehicleDataCorrection
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
     */
    public function setVehicleDataCorrection(\Mu4ddi3\Compensa\Webservice\StructType\VehicleDataCorrection $vehicleDataCorrection = null)
    {
        if (is_null($vehicleDataCorrection) || (is_array($vehicleDataCorrection) && empty($vehicleDataCorrection))) {
            unset($this->VehicleDataCorrection);
        } else {
            $this->VehicleDataCorrection = $vehicleDataCorrection;
        }
        return $this;
    }
    /**
     * Get VehicleEquipment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleEquipment|null
     */
    public function getVehicleEquipment()
    {
        return isset($this->VehicleEquipment) ? $this->VehicleEquipment : null;
    }
    /**
     * Set VehicleEquipment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VehicleEquipment $vehicleEquipment
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
     */
    public function setVehicleEquipment(\Mu4ddi3\Compensa\Webservice\StructType\VehicleEquipment $vehicleEquipment = null)
    {
        if (is_null($vehicleEquipment) || (is_array($vehicleEquipment) && empty($vehicleEquipment))) {
            unset($this->VehicleEquipment);
        } else {
            $this->VehicleEquipment = $vehicleEquipment;
        }
        return $this;
    }
    /**
     * Get VehicleGroupId value
     * @return int|null
     */
    public function getVehicleGroupId()
    {
        return $this->VehicleGroupId;
    }
    /**
     * Set VehicleGroupId value
     * @param int $vehicleGroupId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
     */
    public function setVehicleGroupId($vehicleGroupId = null)
    {
        // validation for constraint: int
        if (!is_null($vehicleGroupId) && !is_numeric($vehicleGroupId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($vehicleGroupId)), __LINE__);
        }
        $this->VehicleGroupId = $vehicleGroupId;
        return $this;
    }
    /**
     * Get VehicleOriginData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleOriginData|null
     */
    public function getVehicleOriginData()
    {
        return isset($this->VehicleOriginData) ? $this->VehicleOriginData : null;
    }
    /**
     * Set VehicleOriginData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VehicleOriginData $vehicleOriginData
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
     */
    public function setVehicleOriginData(\Mu4ddi3\Compensa\Webservice\StructType\VehicleOriginData $vehicleOriginData = null)
    {
        if (is_null($vehicleOriginData) || (is_array($vehicleOriginData) && empty($vehicleOriginData))) {
            unset($this->VehicleOriginData);
        } else {
            $this->VehicleOriginData = $vehicleOriginData;
        }
        return $this;
    }
    /**
     * Get VehiclePriceType value
     * @return string|null
     */
    public function getVehiclePriceType()
    {
        return $this->VehiclePriceType;
    }
    /**
     * Set VehiclePriceType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VehiclePriceType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VehiclePriceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $vehiclePriceType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
     */
    public function setVehiclePriceType($vehiclePriceType = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\VehiclePriceType::valueIsValid($vehiclePriceType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $vehiclePriceType, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\VehiclePriceType::getValidValues())), __LINE__);
        }
        $this->VehiclePriceType = $vehiclePriceType;
        return $this;
    }
    /**
     * Get VehicleSource value
     * @return string|null
     */
    public function getVehicleSource()
    {
        return $this->VehicleSource;
    }
    /**
     * Set VehicleSource value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VehicleSource::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VehicleSource::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $vehicleSource
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
     */
    public function setVehicleSource($vehicleSource = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\VehicleSource::valueIsValid($vehicleSource)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $vehicleSource, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\VehicleSource::getValidValues())), __LINE__);
        }
        $this->VehicleSource = $vehicleSource;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
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
     * Get VehicleValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getVehicleValue()
    {
        return isset($this->VehicleValue) ? $this->VehicleValue : null;
    }
    /**
     * Set VehicleValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $vehicleValue
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
     */
    public function setVehicleValue(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $vehicleValue = null)
    {
        if (is_null($vehicleValue) || (is_array($vehicleValue) && empty($vehicleValue))) {
            unset($this->VehicleValue);
        } else {
            $this->VehicleValue = $vehicleValue;
        }
        return $this;
    }
    /**
     * Get VehicleValueFromInfoEkspert value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getVehicleValueFromInfoEkspert()
    {
        return isset($this->VehicleValueFromInfoEkspert) ? $this->VehicleValueFromInfoEkspert : null;
    }
    /**
     * Set VehicleValueFromInfoEkspert value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $vehicleValueFromInfoEkspert
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
     */
    public function setVehicleValueFromInfoEkspert(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $vehicleValueFromInfoEkspert = null)
    {
        if (is_null($vehicleValueFromInfoEkspert) || (is_array($vehicleValueFromInfoEkspert) && empty($vehicleValueFromInfoEkspert))) {
            unset($this->VehicleValueFromInfoEkspert);
        } else {
            $this->VehicleValueFromInfoEkspert = $vehicleValueFromInfoEkspert;
        }
        return $this;
    }
    /**
     * Get VehicleValueFromInfoEkspertBeforeCorrection value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getVehicleValueFromInfoEkspertBeforeCorrection()
    {
        return isset($this->VehicleValueFromInfoEkspertBeforeCorrection) ? $this->VehicleValueFromInfoEkspertBeforeCorrection : null;
    }
    /**
     * Set VehicleValueFromInfoEkspertBeforeCorrection value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $vehicleValueFromInfoEkspertBeforeCorrection
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
     */
    public function setVehicleValueFromInfoEkspertBeforeCorrection(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $vehicleValueFromInfoEkspertBeforeCorrection = null)
    {
        if (is_null($vehicleValueFromInfoEkspertBeforeCorrection) || (is_array($vehicleValueFromInfoEkspertBeforeCorrection) && empty($vehicleValueFromInfoEkspertBeforeCorrection))) {
            unset($this->VehicleValueFromInfoEkspertBeforeCorrection);
        } else {
            $this->VehicleValueFromInfoEkspertBeforeCorrection = $vehicleValueFromInfoEkspertBeforeCorrection;
        }
        return $this;
    }
    /**
     * Get VehicleValueSource value
     * @return string|null
     */
    public function getVehicleValueSource()
    {
        return $this->VehicleValueSource;
    }
    /**
     * Set VehicleValueSource value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VehicleValueSource::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VehicleValueSource::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $vehicleValueSource
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
     */
    public function setVehicleValueSource($vehicleValueSource = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\VehicleValueSource::valueIsValid($vehicleValueSource)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $vehicleValueSource, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\VehicleValueSource::getValidValues())), __LINE__);
        }
        $this->VehicleValueSource = $vehicleValueSource;
        return $this;
    }
    /**
     * Get ZoneAc value
     * @return int|null
     */
    public function getZoneAc()
    {
        return $this->ZoneAc;
    }
    /**
     * Set ZoneAc value
     * @param int $zoneAc
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
     */
    public function setZoneAc($zoneAc = null)
    {
        // validation for constraint: int
        if (!is_null($zoneAc) && !is_numeric($zoneAc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($zoneAc)), __LINE__);
        }
        $this->ZoneAc = $zoneAc;
        return $this;
    }
    /**
     * Get ZoneOc value
     * @return int|null
     */
    public function getZoneOc()
    {
        return $this->ZoneOc;
    }
    /**
     * Set ZoneOc value
     * @param int $zoneOc
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
     */
    public function setZoneOc($zoneOc = null)
    {
        // validation for constraint: int
        if (!is_null($zoneOc) && !is_numeric($zoneOc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($zoneOc)), __LINE__);
        }
        $this->ZoneOc = $zoneOc;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorVehicle
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
