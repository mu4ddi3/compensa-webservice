<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleCapacityCondition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:VehicleCapacityCondition
 * @subpackage Structs
 */
class VehicleCapacityCondition extends AvailabilityConditionBase
{
    /**
     * The VehicleCapacityFrom
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $VehicleCapacityFrom;
    /**
     * The VehicleCapacityTo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $VehicleCapacityTo;
    /**
     * Constructor method for VehicleCapacityCondition
     * @uses VehicleCapacityCondition::setVehicleCapacityFrom()
     * @uses VehicleCapacityCondition::setVehicleCapacityTo()
     * @param int $vehicleCapacityFrom
     * @param int $vehicleCapacityTo
     */
    public function __construct($vehicleCapacityFrom = null, $vehicleCapacityTo = null)
    {
        $this
            ->setVehicleCapacityFrom($vehicleCapacityFrom)
            ->setVehicleCapacityTo($vehicleCapacityTo);
    }
    /**
     * Get VehicleCapacityFrom value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getVehicleCapacityFrom()
    {
        return isset($this->VehicleCapacityFrom) ? $this->VehicleCapacityFrom : null;
    }
    /**
     * Set VehicleCapacityFrom value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $vehicleCapacityFrom
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleCapacityCondition
     */
    public function setVehicleCapacityFrom($vehicleCapacityFrom = null)
    {
        // validation for constraint: int
        if (!is_null($vehicleCapacityFrom) && !is_numeric($vehicleCapacityFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($vehicleCapacityFrom)), __LINE__);
        }
        if (is_null($vehicleCapacityFrom) || (is_array($vehicleCapacityFrom) && empty($vehicleCapacityFrom))) {
            unset($this->VehicleCapacityFrom);
        } else {
            $this->VehicleCapacityFrom = $vehicleCapacityFrom;
        }
        return $this;
    }
    /**
     * Get VehicleCapacityTo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getVehicleCapacityTo()
    {
        return isset($this->VehicleCapacityTo) ? $this->VehicleCapacityTo : null;
    }
    /**
     * Set VehicleCapacityTo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $vehicleCapacityTo
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleCapacityCondition
     */
    public function setVehicleCapacityTo($vehicleCapacityTo = null)
    {
        // validation for constraint: int
        if (!is_null($vehicleCapacityTo) && !is_numeric($vehicleCapacityTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($vehicleCapacityTo)), __LINE__);
        }
        if (is_null($vehicleCapacityTo) || (is_array($vehicleCapacityTo) && empty($vehicleCapacityTo))) {
            unset($this->VehicleCapacityTo);
        } else {
            $this->VehicleCapacityTo = $vehicleCapacityTo;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleCapacityCondition
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
