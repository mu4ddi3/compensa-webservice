<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehiclesCountCorrectionValue StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:VehiclesCountCorrectionValue
 * @subpackage Structs
 */
class VehiclesCountCorrectionValue extends AbstractStructBase
{
    /**
     * The CompensaVehiclesCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint
     */
    public $CompensaVehiclesCount;
    /**
     * The Factor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $Factor;
    /**
     * The RiskCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RiskCode;
    /**
     * The UfgVehiclesCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint
     */
    public $UfgVehiclesCount;
    /**
     * The VehicleGroupId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $VehicleGroupId;
    /**
     * The VehicleType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $VehicleType;
    /**
     * Constructor method for VehiclesCountCorrectionValue
     * @uses VehiclesCountCorrectionValue::setCompensaVehiclesCount()
     * @uses VehiclesCountCorrectionValue::setFactor()
     * @uses VehiclesCountCorrectionValue::setRiskCode()
     * @uses VehiclesCountCorrectionValue::setUfgVehiclesCount()
     * @uses VehiclesCountCorrectionValue::setVehicleGroupId()
     * @uses VehiclesCountCorrectionValue::setVehicleType()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint $compensaVehiclesCount
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $factor
     * @param string $riskCode
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint $ufgVehiclesCount
     * @param int $vehicleGroupId
     * @param string $vehicleType
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\RangeOfint $compensaVehiclesCount = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $factor = null, $riskCode = null, \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint $ufgVehiclesCount = null, $vehicleGroupId = null, $vehicleType = null)
    {
        $this
            ->setCompensaVehiclesCount($compensaVehiclesCount)
            ->setFactor($factor)
            ->setRiskCode($riskCode)
            ->setUfgVehiclesCount($ufgVehiclesCount)
            ->setVehicleGroupId($vehicleGroupId)
            ->setVehicleType($vehicleType);
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehiclesCountCorrectionValue
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
     * Get Factor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getFactor()
    {
        return isset($this->Factor) ? $this->Factor : null;
    }
    /**
     * Set Factor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $factor
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehiclesCountCorrectionValue
     */
    public function setFactor(\Mu4ddi3\Compensa\Webservice\StructType\Factor $factor = null)
    {
        if (is_null($factor) || (is_array($factor) && empty($factor))) {
            unset($this->Factor);
        } else {
            $this->Factor = $factor;
        }
        return $this;
    }
    /**
     * Get RiskCode value
     * @return string|null
     */
    public function getRiskCode()
    {
        return $this->RiskCode;
    }
    /**
     * Set RiskCode value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\RiskCode::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\RiskCode::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $riskCode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehiclesCountCorrectionValue
     */
    public function setRiskCode($riskCode = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\RiskCode::valueIsValid($riskCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $riskCode, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\RiskCode::getValidValues())), __LINE__);
        }
        $this->RiskCode = $riskCode;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehiclesCountCorrectionValue
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehiclesCountCorrectionValue
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
     * Get VehicleType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getVehicleType()
    {
        return isset($this->VehicleType) ? $this->VehicleType : null;
    }
    /**
     * Set VehicleType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VehicleType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VehicleType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $vehicleType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehiclesCountCorrectionValue
     */
    public function setVehicleType($vehicleType = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\VehicleType::valueIsValid($vehicleType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $vehicleType, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\VehicleType::getValidValues())), __LINE__);
        }
        if (is_null($vehicleType) || (is_array($vehicleType) && empty($vehicleType))) {
            unset($this->VehicleType);
        } else {
            $this->VehicleType = $vehicleType;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehiclesCountCorrectionValue
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
