<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehiclePowerCondition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:VehiclePowerCondition
 * @subpackage Structs
 */
class VehiclePowerCondition extends AvailabilityConditionBase
{
    /**
     * The VehiclePowerFrom
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $VehiclePowerFrom;
    /**
     * The VehiclePowerTo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $VehiclePowerTo;
    /**
     * Constructor method for VehiclePowerCondition
     * @uses VehiclePowerCondition::setVehiclePowerFrom()
     * @uses VehiclePowerCondition::setVehiclePowerTo()
     * @param int $vehiclePowerFrom
     * @param int $vehiclePowerTo
     */
    public function __construct($vehiclePowerFrom = null, $vehiclePowerTo = null)
    {
        $this
            ->setVehiclePowerFrom($vehiclePowerFrom)
            ->setVehiclePowerTo($vehiclePowerTo);
    }
    /**
     * Get VehiclePowerFrom value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getVehiclePowerFrom()
    {
        return isset($this->VehiclePowerFrom) ? $this->VehiclePowerFrom : null;
    }
    /**
     * Set VehiclePowerFrom value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $vehiclePowerFrom
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehiclePowerCondition
     */
    public function setVehiclePowerFrom($vehiclePowerFrom = null)
    {
        // validation for constraint: int
        if (!is_null($vehiclePowerFrom) && !is_numeric($vehiclePowerFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($vehiclePowerFrom)), __LINE__);
        }
        if (is_null($vehiclePowerFrom) || (is_array($vehiclePowerFrom) && empty($vehiclePowerFrom))) {
            unset($this->VehiclePowerFrom);
        } else {
            $this->VehiclePowerFrom = $vehiclePowerFrom;
        }
        return $this;
    }
    /**
     * Get VehiclePowerTo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getVehiclePowerTo()
    {
        return isset($this->VehiclePowerTo) ? $this->VehiclePowerTo : null;
    }
    /**
     * Set VehiclePowerTo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $vehiclePowerTo
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehiclePowerCondition
     */
    public function setVehiclePowerTo($vehiclePowerTo = null)
    {
        // validation for constraint: int
        if (!is_null($vehiclePowerTo) && !is_numeric($vehiclePowerTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($vehiclePowerTo)), __LINE__);
        }
        if (is_null($vehiclePowerTo) || (is_array($vehiclePowerTo) && empty($vehiclePowerTo))) {
            unset($this->VehiclePowerTo);
        } else {
            $this->VehiclePowerTo = $vehiclePowerTo;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehiclePowerCondition
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
