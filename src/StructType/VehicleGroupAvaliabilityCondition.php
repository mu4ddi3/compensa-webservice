<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleGroupAvaliabilityCondition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:VehicleGroupAvaliabilityCondition
 * @subpackage Structs
 */
class VehicleGroupAvaliabilityCondition extends AvailabilityCondition
{
    /**
     * The VehicleGroupIds
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint
     */
    public $VehicleGroupIds;
    /**
     * Constructor method for VehicleGroupAvaliabilityCondition
     * @uses VehicleGroupAvaliabilityCondition::setVehicleGroupIds()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint $vehicleGroupIds
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint $vehicleGroupIds = null)
    {
        $this
            ->setVehicleGroupIds($vehicleGroupIds);
    }
    /**
     * Get VehicleGroupIds value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint|null
     */
    public function getVehicleGroupIds()
    {
        return isset($this->VehicleGroupIds) ? $this->VehicleGroupIds : null;
    }
    /**
     * Set VehicleGroupIds value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint $vehicleGroupIds
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleGroupAvaliabilityCondition
     */
    public function setVehicleGroupIds(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint $vehicleGroupIds = null)
    {
        if (is_null($vehicleGroupIds) || (is_array($vehicleGroupIds) && empty($vehicleGroupIds))) {
            unset($this->VehicleGroupIds);
        } else {
            $this->VehicleGroupIds = $vehicleGroupIds;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleGroupAvaliabilityCondition
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
