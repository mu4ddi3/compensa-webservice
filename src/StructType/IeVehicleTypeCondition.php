<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IeVehicleTypeCondition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:IeVehicleTypeCondition
 * @subpackage Structs
 */
class IeVehicleTypeCondition extends AvailabilityConditionBase
{
    /**
     * The VehicleTypes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVehicleType
     */
    public $VehicleTypes;
    /**
     * Constructor method for IeVehicleTypeCondition
     * @uses IeVehicleTypeCondition::setVehicleTypes()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVehicleType $vehicleTypes
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVehicleType $vehicleTypes = null)
    {
        $this
            ->setVehicleTypes($vehicleTypes);
    }
    /**
     * Get VehicleTypes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVehicleType|null
     */
    public function getVehicleTypes()
    {
        return isset($this->VehicleTypes) ? $this->VehicleTypes : null;
    }
    /**
     * Set VehicleTypes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVehicleType $vehicleTypes
     * @return \Mu4ddi3\Compensa\Webservice\StructType\IeVehicleTypeCondition
     */
    public function setVehicleTypes(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVehicleType $vehicleTypes = null)
    {
        if (is_null($vehicleTypes) || (is_array($vehicleTypes) && empty($vehicleTypes))) {
            unset($this->VehicleTypes);
        } else {
            $this->VehicleTypes = $vehicleTypes;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\IeVehicleTypeCondition
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
