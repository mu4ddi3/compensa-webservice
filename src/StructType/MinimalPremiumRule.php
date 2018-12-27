<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MinimalPremiumRule StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MinimalPremiumRule
 * @subpackage Structs
 */
class MinimalPremiumRule extends AbstractStructBase
{
    /**
     * The BasePremiumFactor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $BasePremiumFactor;
    /**
     * The ContinuationSource
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ContinuationSource;
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
     * @var int
     */
    public $EngineCapacityLeftBound;
    /**
     * The EngineCapacityRightBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $EngineCapacityRightBound;
    /**
     * The EnginePowerLeftBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $EnginePowerLeftBound;
    /**
     * The EnginePowerRightBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $EnginePowerRightBound;
    /**
     * The MinimalPremiumValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $MinimalPremiumValue;
    /**
     * The PolgenId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $PolgenId;
    /**
     * The PostalCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PostalCode;
    /**
     * The PropertyPremiumRange
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint
     */
    public $PropertyPremiumRange;
    /**
     * The TariffMode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TariffMode;
    /**
     * The TerritoryUsageType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TerritoryUsageType;
    /**
     * The VehicleGroupId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $VehicleGroupId;
    /**
     * The ZoneLeftBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ZoneLeftBound;
    /**
     * The ZoneRightBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ZoneRightBound;
    /**
     * Constructor method for MinimalPremiumRule
     * @uses MinimalPremiumRule::setBasePremiumFactor()
     * @uses MinimalPremiumRule::setContinuationSource()
     * @uses MinimalPremiumRule::setEmployeeDiscount()
     * @uses MinimalPremiumRule::setEngineCapacityLeftBound()
     * @uses MinimalPremiumRule::setEngineCapacityRightBound()
     * @uses MinimalPremiumRule::setEnginePowerLeftBound()
     * @uses MinimalPremiumRule::setEnginePowerRightBound()
     * @uses MinimalPremiumRule::setMinimalPremiumValue()
     * @uses MinimalPremiumRule::setPolgenId()
     * @uses MinimalPremiumRule::setPostalCode()
     * @uses MinimalPremiumRule::setPropertyPremiumRange()
     * @uses MinimalPremiumRule::setTariffMode()
     * @uses MinimalPremiumRule::setTerritoryUsageType()
     * @uses MinimalPremiumRule::setVehicleGroupId()
     * @uses MinimalPremiumRule::setZoneLeftBound()
     * @uses MinimalPremiumRule::setZoneRightBound()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $basePremiumFactor
     * @param string $continuationSource
     * @param bool $employeeDiscount
     * @param int $engineCapacityLeftBound
     * @param int $engineCapacityRightBound
     * @param int $enginePowerLeftBound
     * @param int $enginePowerRightBound
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $minimalPremiumValue
     * @param int $polgenId
     * @param string $postalCode
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint $propertyPremiumRange
     * @param string $tariffMode
     * @param string $territoryUsageType
     * @param int $vehicleGroupId
     * @param int $zoneLeftBound
     * @param int $zoneRightBound
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\Factor $basePremiumFactor = null, $continuationSource = null, $employeeDiscount = null, $engineCapacityLeftBound = null, $engineCapacityRightBound = null, $enginePowerLeftBound = null, $enginePowerRightBound = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $minimalPremiumValue = null, $polgenId = null, $postalCode = null, \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint $propertyPremiumRange = null, $tariffMode = null, $territoryUsageType = null, $vehicleGroupId = null, $zoneLeftBound = null, $zoneRightBound = null)
    {
        $this
            ->setBasePremiumFactor($basePremiumFactor)
            ->setContinuationSource($continuationSource)
            ->setEmployeeDiscount($employeeDiscount)
            ->setEngineCapacityLeftBound($engineCapacityLeftBound)
            ->setEngineCapacityRightBound($engineCapacityRightBound)
            ->setEnginePowerLeftBound($enginePowerLeftBound)
            ->setEnginePowerRightBound($enginePowerRightBound)
            ->setMinimalPremiumValue($minimalPremiumValue)
            ->setPolgenId($polgenId)
            ->setPostalCode($postalCode)
            ->setPropertyPremiumRange($propertyPremiumRange)
            ->setTariffMode($tariffMode)
            ->setTerritoryUsageType($territoryUsageType)
            ->setVehicleGroupId($vehicleGroupId)
            ->setZoneLeftBound($zoneLeftBound)
            ->setZoneRightBound($zoneRightBound);
    }
    /**
     * Get BasePremiumFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getBasePremiumFactor()
    {
        return isset($this->BasePremiumFactor) ? $this->BasePremiumFactor : null;
    }
    /**
     * Set BasePremiumFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $basePremiumFactor
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRule
     */
    public function setBasePremiumFactor(\Mu4ddi3\Compensa\Webservice\StructType\Factor $basePremiumFactor = null)
    {
        if (is_null($basePremiumFactor) || (is_array($basePremiumFactor) && empty($basePremiumFactor))) {
            unset($this->BasePremiumFactor);
        } else {
            $this->BasePremiumFactor = $basePremiumFactor;
        }
        return $this;
    }
    /**
     * Get ContinuationSource value
     * @return string|null
     */
    public function getContinuationSource()
    {
        return $this->ContinuationSource;
    }
    /**
     * Set ContinuationSource value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\ContinuationSource::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\ContinuationSource::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $continuationSource
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRule
     */
    public function setContinuationSource($continuationSource = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\ContinuationSource::valueIsValid($continuationSource)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $continuationSource, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\ContinuationSource::getValidValues())), __LINE__);
        }
        $this->ContinuationSource = $continuationSource;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRule
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
     * @return int|null
     */
    public function getEngineCapacityLeftBound()
    {
        return $this->EngineCapacityLeftBound;
    }
    /**
     * Set EngineCapacityLeftBound value
     * @param int $engineCapacityLeftBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRule
     */
    public function setEngineCapacityLeftBound($engineCapacityLeftBound = null)
    {
        // validation for constraint: int
        if (!is_null($engineCapacityLeftBound) && !is_numeric($engineCapacityLeftBound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($engineCapacityLeftBound)), __LINE__);
        }
        $this->EngineCapacityLeftBound = $engineCapacityLeftBound;
        return $this;
    }
    /**
     * Get EngineCapacityRightBound value
     * @return int|null
     */
    public function getEngineCapacityRightBound()
    {
        return $this->EngineCapacityRightBound;
    }
    /**
     * Set EngineCapacityRightBound value
     * @param int $engineCapacityRightBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRule
     */
    public function setEngineCapacityRightBound($engineCapacityRightBound = null)
    {
        // validation for constraint: int
        if (!is_null($engineCapacityRightBound) && !is_numeric($engineCapacityRightBound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($engineCapacityRightBound)), __LINE__);
        }
        $this->EngineCapacityRightBound = $engineCapacityRightBound;
        return $this;
    }
    /**
     * Get EnginePowerLeftBound value
     * @return int|null
     */
    public function getEnginePowerLeftBound()
    {
        return $this->EnginePowerLeftBound;
    }
    /**
     * Set EnginePowerLeftBound value
     * @param int $enginePowerLeftBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRule
     */
    public function setEnginePowerLeftBound($enginePowerLeftBound = null)
    {
        // validation for constraint: int
        if (!is_null($enginePowerLeftBound) && !is_numeric($enginePowerLeftBound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($enginePowerLeftBound)), __LINE__);
        }
        $this->EnginePowerLeftBound = $enginePowerLeftBound;
        return $this;
    }
    /**
     * Get EnginePowerRightBound value
     * @return int|null
     */
    public function getEnginePowerRightBound()
    {
        return $this->EnginePowerRightBound;
    }
    /**
     * Set EnginePowerRightBound value
     * @param int $enginePowerRightBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRule
     */
    public function setEnginePowerRightBound($enginePowerRightBound = null)
    {
        // validation for constraint: int
        if (!is_null($enginePowerRightBound) && !is_numeric($enginePowerRightBound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($enginePowerRightBound)), __LINE__);
        }
        $this->EnginePowerRightBound = $enginePowerRightBound;
        return $this;
    }
    /**
     * Get MinimalPremiumValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getMinimalPremiumValue()
    {
        return isset($this->MinimalPremiumValue) ? $this->MinimalPremiumValue : null;
    }
    /**
     * Set MinimalPremiumValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $minimalPremiumValue
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRule
     */
    public function setMinimalPremiumValue(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $minimalPremiumValue = null)
    {
        if (is_null($minimalPremiumValue) || (is_array($minimalPremiumValue) && empty($minimalPremiumValue))) {
            unset($this->MinimalPremiumValue);
        } else {
            $this->MinimalPremiumValue = $minimalPremiumValue;
        }
        return $this;
    }
    /**
     * Get PolgenId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getPolgenId()
    {
        return isset($this->PolgenId) ? $this->PolgenId : null;
    }
    /**
     * Set PolgenId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $polgenId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRule
     */
    public function setPolgenId($polgenId = null)
    {
        // validation for constraint: int
        if (!is_null($polgenId) && !is_numeric($polgenId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($polgenId)), __LINE__);
        }
        if (is_null($polgenId) || (is_array($polgenId) && empty($polgenId))) {
            unset($this->PolgenId);
        } else {
            $this->PolgenId = $polgenId;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRule
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
     * Get PropertyPremiumRange value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint|null
     */
    public function getPropertyPremiumRange()
    {
        return isset($this->PropertyPremiumRange) ? $this->PropertyPremiumRange : null;
    }
    /**
     * Set PropertyPremiumRange value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint $propertyPremiumRange
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRule
     */
    public function setPropertyPremiumRange(\Mu4ddi3\Compensa\Webservice\StructType\RangeOfint $propertyPremiumRange = null)
    {
        if (is_null($propertyPremiumRange) || (is_array($propertyPremiumRange) && empty($propertyPremiumRange))) {
            unset($this->PropertyPremiumRange);
        } else {
            $this->PropertyPremiumRange = $propertyPremiumRange;
        }
        return $this;
    }
    /**
     * Get TariffMode value
     * @return string|null
     */
    public function getTariffMode()
    {
        return $this->TariffMode;
    }
    /**
     * Set TariffMode value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\TariffMode::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\TariffMode::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $tariffMode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRule
     */
    public function setTariffMode($tariffMode = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\TariffMode::valueIsValid($tariffMode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $tariffMode, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\TariffMode::getValidValues())), __LINE__);
        }
        $this->TariffMode = $tariffMode;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRule
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRule
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
     * Get ZoneLeftBound value
     * @return int|null
     */
    public function getZoneLeftBound()
    {
        return $this->ZoneLeftBound;
    }
    /**
     * Set ZoneLeftBound value
     * @param int $zoneLeftBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRule
     */
    public function setZoneLeftBound($zoneLeftBound = null)
    {
        // validation for constraint: int
        if (!is_null($zoneLeftBound) && !is_numeric($zoneLeftBound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($zoneLeftBound)), __LINE__);
        }
        $this->ZoneLeftBound = $zoneLeftBound;
        return $this;
    }
    /**
     * Get ZoneRightBound value
     * @return int|null
     */
    public function getZoneRightBound()
    {
        return $this->ZoneRightBound;
    }
    /**
     * Set ZoneRightBound value
     * @param int $zoneRightBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRule
     */
    public function setZoneRightBound($zoneRightBound = null)
    {
        // validation for constraint: int
        if (!is_null($zoneRightBound) && !is_numeric($zoneRightBound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($zoneRightBound)), __LINE__);
        }
        $this->ZoneRightBound = $zoneRightBound;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRule
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
