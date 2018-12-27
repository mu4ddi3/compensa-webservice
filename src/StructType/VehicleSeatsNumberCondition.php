<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleSeatsNumberCondition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:VehicleSeatsNumberCondition
 * @subpackage Structs
 */
class VehicleSeatsNumberCondition extends AvailabilityConditionBase
{
    /**
     * The VehicleSeatsNumberFrom
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $VehicleSeatsNumberFrom;
    /**
     * The VehicleSeatsNumberTo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $VehicleSeatsNumberTo;
    /**
     * Constructor method for VehicleSeatsNumberCondition
     * @uses VehicleSeatsNumberCondition::setVehicleSeatsNumberFrom()
     * @uses VehicleSeatsNumberCondition::setVehicleSeatsNumberTo()
     * @param int $vehicleSeatsNumberFrom
     * @param int $vehicleSeatsNumberTo
     */
    public function __construct($vehicleSeatsNumberFrom = null, $vehicleSeatsNumberTo = null)
    {
        $this
            ->setVehicleSeatsNumberFrom($vehicleSeatsNumberFrom)
            ->setVehicleSeatsNumberTo($vehicleSeatsNumberTo);
    }
    /**
     * Get VehicleSeatsNumberFrom value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getVehicleSeatsNumberFrom()
    {
        return isset($this->VehicleSeatsNumberFrom) ? $this->VehicleSeatsNumberFrom : null;
    }
    /**
     * Set VehicleSeatsNumberFrom value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $vehicleSeatsNumberFrom
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleSeatsNumberCondition
     */
    public function setVehicleSeatsNumberFrom($vehicleSeatsNumberFrom = null)
    {
        // validation for constraint: int
        if (!is_null($vehicleSeatsNumberFrom) && !is_numeric($vehicleSeatsNumberFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($vehicleSeatsNumberFrom)), __LINE__);
        }
        if (is_null($vehicleSeatsNumberFrom) || (is_array($vehicleSeatsNumberFrom) && empty($vehicleSeatsNumberFrom))) {
            unset($this->VehicleSeatsNumberFrom);
        } else {
            $this->VehicleSeatsNumberFrom = $vehicleSeatsNumberFrom;
        }
        return $this;
    }
    /**
     * Get VehicleSeatsNumberTo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getVehicleSeatsNumberTo()
    {
        return isset($this->VehicleSeatsNumberTo) ? $this->VehicleSeatsNumberTo : null;
    }
    /**
     * Set VehicleSeatsNumberTo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $vehicleSeatsNumberTo
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleSeatsNumberCondition
     */
    public function setVehicleSeatsNumberTo($vehicleSeatsNumberTo = null)
    {
        // validation for constraint: int
        if (!is_null($vehicleSeatsNumberTo) && !is_numeric($vehicleSeatsNumberTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($vehicleSeatsNumberTo)), __LINE__);
        }
        if (is_null($vehicleSeatsNumberTo) || (is_array($vehicleSeatsNumberTo) && empty($vehicleSeatsNumberTo))) {
            unset($this->VehicleSeatsNumberTo);
        } else {
            $this->VehicleSeatsNumberTo = $vehicleSeatsNumberTo;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleSeatsNumberCondition
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
