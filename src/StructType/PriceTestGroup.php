<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PriceTestGroup StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PriceTestGroup
 * @subpackage Structs
 */
class PriceTestGroup extends AbstractStructBase
{
    /**
     * The AcPriceTestModifier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\AcPriceTestModifier
     */
    public $AcPriceTestModifier;
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
     * The BirthDayLeftBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $BirthDayLeftBound;
    /**
     * The BirthDayRightBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $BirthDayRightBound;
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
     * The DeltaBmAcLeftBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $DeltaBmAcLeftBound;
    /**
     * The DeltaBmAcRightBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $DeltaBmAcRightBound;
    /**
     * The DeltaBmOcLeftBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $DeltaBmOcLeftBound;
    /**
     * The DeltaBmOcRightBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $DeltaBmOcRightBound;
    /**
     * The DeltaWUAcLeftBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $DeltaWUAcLeftBound;
    /**
     * The DeltaWUAcRightBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $DeltaWUAcRightBound;
    /**
     * The DeltaWUOcLeftBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $DeltaWUOcLeftBound;
    /**
     * The DeltaWUOcRightBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $DeltaWUOcRightBound;
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
     * The GroupName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $GroupName;
    /**
     * The InstallmentsAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $InstallmentsAmount;
    /**
     * The IsForeigner
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $IsForeigner;
    /**
     * The ModelId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $ModelId;
    /**
     * The OcPriceTestModifier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\OcPriceTestModifier
     */
    public $OcPriceTestModifier;
    /**
     * The PartnerType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PartnerType
     */
    public $PartnerType;
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
     * Constructor method for PriceTestGroup
     * @uses PriceTestGroup::setAcPriceTestModifier()
     * @uses PriceTestGroup::setAgreementType()
     * @uses PriceTestGroup::setAgreementTypeExist()
     * @uses PriceTestGroup::setBirthDayLeftBound()
     * @uses PriceTestGroup::setBirthDayRightBound()
     * @uses PriceTestGroup::setBmAcInCalculationLeftBound()
     * @uses PriceTestGroup::setBmAcInCalculationRightBound()
     * @uses PriceTestGroup::setBmOcInCalculationLeftBound()
     * @uses PriceTestGroup::setBmOcInCalculationRightBound()
     * @uses PriceTestGroup::setBranchId()
     * @uses PriceTestGroup::setBrandId()
     * @uses PriceTestGroup::setCountyPolgenId()
     * @uses PriceTestGroup::setCustomerAgeLeftBound()
     * @uses PriceTestGroup::setCustomerAgeRightBound()
     * @uses PriceTestGroup::setDeltaBmAcLeftBound()
     * @uses PriceTestGroup::setDeltaBmAcRightBound()
     * @uses PriceTestGroup::setDeltaBmOcLeftBound()
     * @uses PriceTestGroup::setDeltaBmOcRightBound()
     * @uses PriceTestGroup::setDeltaWUAcLeftBound()
     * @uses PriceTestGroup::setDeltaWUAcRightBound()
     * @uses PriceTestGroup::setDeltaWUOcLeftBound()
     * @uses PriceTestGroup::setDeltaWUOcRightBound()
     * @uses PriceTestGroup::setEngineCapacityLeftBound()
     * @uses PriceTestGroup::setEngineCapacityRightBound()
     * @uses PriceTestGroup::setEnginePowerLeftBound()
     * @uses PriceTestGroup::setEnginePowerRightBound()
     * @uses PriceTestGroup::setFuelType()
     * @uses PriceTestGroup::setGroupName()
     * @uses PriceTestGroup::setInstallmentsAmount()
     * @uses PriceTestGroup::setIsForeigner()
     * @uses PriceTestGroup::setModelId()
     * @uses PriceTestGroup::setOcPriceTestModifier()
     * @uses PriceTestGroup::setPartnerType()
     * @uses PriceTestGroup::setPostalCode()
     * @uses PriceTestGroup::setPreviousZuAcId()
     * @uses PriceTestGroup::setPreviousZuOcId()
     * @uses PriceTestGroup::setSuAcLeftBound()
     * @uses PriceTestGroup::setSuAcRightBound()
     * @uses PriceTestGroup::setTuNumberAc()
     * @uses PriceTestGroup::setTuNumberOc()
     * @uses PriceTestGroup::setVehicleAgeLeftBound()
     * @uses PriceTestGroup::setVehicleAgeRightBound()
     * @uses PriceTestGroup::setVehicleGroupId()
     * @uses PriceTestGroup::setVehicleImportedExist()
     * @uses PriceTestGroup::setVehicleType()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AcPriceTestModifier $acPriceTestModifier
     * @param string $agreementType
     * @param bool $agreementTypeExist
     * @param int $birthDayLeftBound
     * @param int $birthDayRightBound
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $bmAcInCalculationLeftBound
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $bmAcInCalculationRightBound
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $bmOcInCalculationLeftBound
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $bmOcInCalculationRightBound
     * @param int $branchId
     * @param int $brandId
     * @param int $countyPolgenId
     * @param int $customerAgeLeftBound
     * @param int $customerAgeRightBound
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaBmAcLeftBound
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaBmAcRightBound
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaBmOcLeftBound
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaBmOcRightBound
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaWUAcLeftBound
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaWUAcRightBound
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaWUOcLeftBound
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaWUOcRightBound
     * @param int $engineCapacityLeftBound
     * @param int $engineCapacityRightBound
     * @param int $enginePowerLeftBound
     * @param int $enginePowerRightBound
     * @param string $fuelType
     * @param string $groupName
     * @param string $installmentsAmount
     * @param bool $isForeigner
     * @param int $modelId
     * @param \Mu4ddi3\Compensa\Webservice\StructType\OcPriceTestModifier $ocPriceTestModifier
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PartnerType $partnerType
     * @param string $postalCode
     * @param int $previousZuAcId
     * @param int $previousZuOcId
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $suAcLeftBound
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $suAcRightBound
     * @param int $tuNumberAc
     * @param int $tuNumberOc
     * @param int $vehicleAgeLeftBound
     * @param int $vehicleAgeRightBound
     * @param int $vehicleGroupId
     * @param bool $vehicleImportedExist
     * @param string $vehicleType
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\AcPriceTestModifier $acPriceTestModifier = null, $agreementType = null, $agreementTypeExist = null, $birthDayLeftBound = null, $birthDayRightBound = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $bmAcInCalculationLeftBound = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $bmAcInCalculationRightBound = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $bmOcInCalculationLeftBound = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $bmOcInCalculationRightBound = null, $branchId = null, $brandId = null, $countyPolgenId = null, $customerAgeLeftBound = null, $customerAgeRightBound = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaBmAcLeftBound = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaBmAcRightBound = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaBmOcLeftBound = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaBmOcRightBound = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaWUAcLeftBound = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaWUAcRightBound = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaWUOcLeftBound = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaWUOcRightBound = null, $engineCapacityLeftBound = null, $engineCapacityRightBound = null, $enginePowerLeftBound = null, $enginePowerRightBound = null, $fuelType = null, $groupName = null, $installmentsAmount = null, $isForeigner = null, $modelId = null, \Mu4ddi3\Compensa\Webservice\StructType\OcPriceTestModifier $ocPriceTestModifier = null, \Mu4ddi3\Compensa\Webservice\StructType\PartnerType $partnerType = null, $postalCode = null, $previousZuAcId = null, $previousZuOcId = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $suAcLeftBound = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $suAcRightBound = null, $tuNumberAc = null, $tuNumberOc = null, $vehicleAgeLeftBound = null, $vehicleAgeRightBound = null, $vehicleGroupId = null, $vehicleImportedExist = null, $vehicleType = null)
    {
        $this
            ->setAcPriceTestModifier($acPriceTestModifier)
            ->setAgreementType($agreementType)
            ->setAgreementTypeExist($agreementTypeExist)
            ->setBirthDayLeftBound($birthDayLeftBound)
            ->setBirthDayRightBound($birthDayRightBound)
            ->setBmAcInCalculationLeftBound($bmAcInCalculationLeftBound)
            ->setBmAcInCalculationRightBound($bmAcInCalculationRightBound)
            ->setBmOcInCalculationLeftBound($bmOcInCalculationLeftBound)
            ->setBmOcInCalculationRightBound($bmOcInCalculationRightBound)
            ->setBranchId($branchId)
            ->setBrandId($brandId)
            ->setCountyPolgenId($countyPolgenId)
            ->setCustomerAgeLeftBound($customerAgeLeftBound)
            ->setCustomerAgeRightBound($customerAgeRightBound)
            ->setDeltaBmAcLeftBound($deltaBmAcLeftBound)
            ->setDeltaBmAcRightBound($deltaBmAcRightBound)
            ->setDeltaBmOcLeftBound($deltaBmOcLeftBound)
            ->setDeltaBmOcRightBound($deltaBmOcRightBound)
            ->setDeltaWUAcLeftBound($deltaWUAcLeftBound)
            ->setDeltaWUAcRightBound($deltaWUAcRightBound)
            ->setDeltaWUOcLeftBound($deltaWUOcLeftBound)
            ->setDeltaWUOcRightBound($deltaWUOcRightBound)
            ->setEngineCapacityLeftBound($engineCapacityLeftBound)
            ->setEngineCapacityRightBound($engineCapacityRightBound)
            ->setEnginePowerLeftBound($enginePowerLeftBound)
            ->setEnginePowerRightBound($enginePowerRightBound)
            ->setFuelType($fuelType)
            ->setGroupName($groupName)
            ->setInstallmentsAmount($installmentsAmount)
            ->setIsForeigner($isForeigner)
            ->setModelId($modelId)
            ->setOcPriceTestModifier($ocPriceTestModifier)
            ->setPartnerType($partnerType)
            ->setPostalCode($postalCode)
            ->setPreviousZuAcId($previousZuAcId)
            ->setPreviousZuOcId($previousZuOcId)
            ->setSuAcLeftBound($suAcLeftBound)
            ->setSuAcRightBound($suAcRightBound)
            ->setTuNumberAc($tuNumberAc)
            ->setTuNumberOc($tuNumberOc)
            ->setVehicleAgeLeftBound($vehicleAgeLeftBound)
            ->setVehicleAgeRightBound($vehicleAgeRightBound)
            ->setVehicleGroupId($vehicleGroupId)
            ->setVehicleImportedExist($vehicleImportedExist)
            ->setVehicleType($vehicleType);
    }
    /**
     * Get AcPriceTestModifier value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AcPriceTestModifier|null
     */
    public function getAcPriceTestModifier()
    {
        return isset($this->AcPriceTestModifier) ? $this->AcPriceTestModifier : null;
    }
    /**
     * Set AcPriceTestModifier value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AcPriceTestModifier $acPriceTestModifier
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup
     */
    public function setAcPriceTestModifier(\Mu4ddi3\Compensa\Webservice\StructType\AcPriceTestModifier $acPriceTestModifier = null)
    {
        if (is_null($acPriceTestModifier) || (is_array($acPriceTestModifier) && empty($acPriceTestModifier))) {
            unset($this->AcPriceTestModifier);
        } else {
            $this->AcPriceTestModifier = $acPriceTestModifier;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup
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
     * Get BirthDayLeftBound value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getBirthDayLeftBound()
    {
        return isset($this->BirthDayLeftBound) ? $this->BirthDayLeftBound : null;
    }
    /**
     * Set BirthDayLeftBound value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $birthDayLeftBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup
     */
    public function setBirthDayLeftBound($birthDayLeftBound = null)
    {
        // validation for constraint: int
        if (!is_null($birthDayLeftBound) && !is_numeric($birthDayLeftBound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($birthDayLeftBound)), __LINE__);
        }
        if (is_null($birthDayLeftBound) || (is_array($birthDayLeftBound) && empty($birthDayLeftBound))) {
            unset($this->BirthDayLeftBound);
        } else {
            $this->BirthDayLeftBound = $birthDayLeftBound;
        }
        return $this;
    }
    /**
     * Get BirthDayRightBound value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getBirthDayRightBound()
    {
        return isset($this->BirthDayRightBound) ? $this->BirthDayRightBound : null;
    }
    /**
     * Set BirthDayRightBound value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $birthDayRightBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup
     */
    public function setBirthDayRightBound($birthDayRightBound = null)
    {
        // validation for constraint: int
        if (!is_null($birthDayRightBound) && !is_numeric($birthDayRightBound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($birthDayRightBound)), __LINE__);
        }
        if (is_null($birthDayRightBound) || (is_array($birthDayRightBound) && empty($birthDayRightBound))) {
            unset($this->BirthDayRightBound);
        } else {
            $this->BirthDayRightBound = $birthDayRightBound;
        }
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup
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
     * Get DeltaBmAcLeftBound value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getDeltaBmAcLeftBound()
    {
        return isset($this->DeltaBmAcLeftBound) ? $this->DeltaBmAcLeftBound : null;
    }
    /**
     * Set DeltaBmAcLeftBound value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaBmAcLeftBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup
     */
    public function setDeltaBmAcLeftBound(\Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaBmAcLeftBound = null)
    {
        if (is_null($deltaBmAcLeftBound) || (is_array($deltaBmAcLeftBound) && empty($deltaBmAcLeftBound))) {
            unset($this->DeltaBmAcLeftBound);
        } else {
            $this->DeltaBmAcLeftBound = $deltaBmAcLeftBound;
        }
        return $this;
    }
    /**
     * Get DeltaBmAcRightBound value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getDeltaBmAcRightBound()
    {
        return isset($this->DeltaBmAcRightBound) ? $this->DeltaBmAcRightBound : null;
    }
    /**
     * Set DeltaBmAcRightBound value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaBmAcRightBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup
     */
    public function setDeltaBmAcRightBound(\Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaBmAcRightBound = null)
    {
        if (is_null($deltaBmAcRightBound) || (is_array($deltaBmAcRightBound) && empty($deltaBmAcRightBound))) {
            unset($this->DeltaBmAcRightBound);
        } else {
            $this->DeltaBmAcRightBound = $deltaBmAcRightBound;
        }
        return $this;
    }
    /**
     * Get DeltaBmOcLeftBound value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getDeltaBmOcLeftBound()
    {
        return isset($this->DeltaBmOcLeftBound) ? $this->DeltaBmOcLeftBound : null;
    }
    /**
     * Set DeltaBmOcLeftBound value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaBmOcLeftBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup
     */
    public function setDeltaBmOcLeftBound(\Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaBmOcLeftBound = null)
    {
        if (is_null($deltaBmOcLeftBound) || (is_array($deltaBmOcLeftBound) && empty($deltaBmOcLeftBound))) {
            unset($this->DeltaBmOcLeftBound);
        } else {
            $this->DeltaBmOcLeftBound = $deltaBmOcLeftBound;
        }
        return $this;
    }
    /**
     * Get DeltaBmOcRightBound value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getDeltaBmOcRightBound()
    {
        return isset($this->DeltaBmOcRightBound) ? $this->DeltaBmOcRightBound : null;
    }
    /**
     * Set DeltaBmOcRightBound value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaBmOcRightBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup
     */
    public function setDeltaBmOcRightBound(\Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaBmOcRightBound = null)
    {
        if (is_null($deltaBmOcRightBound) || (is_array($deltaBmOcRightBound) && empty($deltaBmOcRightBound))) {
            unset($this->DeltaBmOcRightBound);
        } else {
            $this->DeltaBmOcRightBound = $deltaBmOcRightBound;
        }
        return $this;
    }
    /**
     * Get DeltaWUAcLeftBound value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getDeltaWUAcLeftBound()
    {
        return isset($this->DeltaWUAcLeftBound) ? $this->DeltaWUAcLeftBound : null;
    }
    /**
     * Set DeltaWUAcLeftBound value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaWUAcLeftBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup
     */
    public function setDeltaWUAcLeftBound(\Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaWUAcLeftBound = null)
    {
        if (is_null($deltaWUAcLeftBound) || (is_array($deltaWUAcLeftBound) && empty($deltaWUAcLeftBound))) {
            unset($this->DeltaWUAcLeftBound);
        } else {
            $this->DeltaWUAcLeftBound = $deltaWUAcLeftBound;
        }
        return $this;
    }
    /**
     * Get DeltaWUAcRightBound value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getDeltaWUAcRightBound()
    {
        return isset($this->DeltaWUAcRightBound) ? $this->DeltaWUAcRightBound : null;
    }
    /**
     * Set DeltaWUAcRightBound value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaWUAcRightBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup
     */
    public function setDeltaWUAcRightBound(\Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaWUAcRightBound = null)
    {
        if (is_null($deltaWUAcRightBound) || (is_array($deltaWUAcRightBound) && empty($deltaWUAcRightBound))) {
            unset($this->DeltaWUAcRightBound);
        } else {
            $this->DeltaWUAcRightBound = $deltaWUAcRightBound;
        }
        return $this;
    }
    /**
     * Get DeltaWUOcLeftBound value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getDeltaWUOcLeftBound()
    {
        return isset($this->DeltaWUOcLeftBound) ? $this->DeltaWUOcLeftBound : null;
    }
    /**
     * Set DeltaWUOcLeftBound value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaWUOcLeftBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup
     */
    public function setDeltaWUOcLeftBound(\Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaWUOcLeftBound = null)
    {
        if (is_null($deltaWUOcLeftBound) || (is_array($deltaWUOcLeftBound) && empty($deltaWUOcLeftBound))) {
            unset($this->DeltaWUOcLeftBound);
        } else {
            $this->DeltaWUOcLeftBound = $deltaWUOcLeftBound;
        }
        return $this;
    }
    /**
     * Get DeltaWUOcRightBound value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getDeltaWUOcRightBound()
    {
        return isset($this->DeltaWUOcRightBound) ? $this->DeltaWUOcRightBound : null;
    }
    /**
     * Set DeltaWUOcRightBound value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaWUOcRightBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup
     */
    public function setDeltaWUOcRightBound(\Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaWUOcRightBound = null)
    {
        if (is_null($deltaWUOcRightBound) || (is_array($deltaWUOcRightBound) && empty($deltaWUOcRightBound))) {
            unset($this->DeltaWUOcRightBound);
        } else {
            $this->DeltaWUOcRightBound = $deltaWUOcRightBound;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup
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
     * Get GroupName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getGroupName()
    {
        return isset($this->GroupName) ? $this->GroupName : null;
    }
    /**
     * Set GroupName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $groupName
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup
     */
    public function setGroupName($groupName = null)
    {
        // validation for constraint: string
        if (!is_null($groupName) && !is_string($groupName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($groupName)), __LINE__);
        }
        if (is_null($groupName) || (is_array($groupName) && empty($groupName))) {
            unset($this->GroupName);
        } else {
            $this->GroupName = $groupName;
        }
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup
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
     * Get OcPriceTestModifier value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OcPriceTestModifier|null
     */
    public function getOcPriceTestModifier()
    {
        return isset($this->OcPriceTestModifier) ? $this->OcPriceTestModifier : null;
    }
    /**
     * Set OcPriceTestModifier value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\OcPriceTestModifier $ocPriceTestModifier
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup
     */
    public function setOcPriceTestModifier(\Mu4ddi3\Compensa\Webservice\StructType\OcPriceTestModifier $ocPriceTestModifier = null)
    {
        if (is_null($ocPriceTestModifier) || (is_array($ocPriceTestModifier) && empty($ocPriceTestModifier))) {
            unset($this->OcPriceTestModifier);
        } else {
            $this->OcPriceTestModifier = $ocPriceTestModifier;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup
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
