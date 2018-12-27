<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleGroupBlackRiskDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:VehicleGroupBlackRiskDefinition
 * @subpackage Structs
 */
class VehicleGroupBlackRiskDefinition extends BlackRiskDefinition
{
    /**
     * The VehicleGroupBlackRiskRules
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVehicleGroupBlackRiskRule
     */
    public $VehicleGroupBlackRiskRules;
    /**
     * Constructor method for VehicleGroupBlackRiskDefinition
     * @uses VehicleGroupBlackRiskDefinition::setVehicleGroupBlackRiskRules()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVehicleGroupBlackRiskRule $vehicleGroupBlackRiskRules
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVehicleGroupBlackRiskRule $vehicleGroupBlackRiskRules = null)
    {
        $this
            ->setVehicleGroupBlackRiskRules($vehicleGroupBlackRiskRules);
    }
    /**
     * Get VehicleGroupBlackRiskRules value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVehicleGroupBlackRiskRule|null
     */
    public function getVehicleGroupBlackRiskRules()
    {
        return isset($this->VehicleGroupBlackRiskRules) ? $this->VehicleGroupBlackRiskRules : null;
    }
    /**
     * Set VehicleGroupBlackRiskRules value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVehicleGroupBlackRiskRule $vehicleGroupBlackRiskRules
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleGroupBlackRiskDefinition
     */
    public function setVehicleGroupBlackRiskRules(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVehicleGroupBlackRiskRule $vehicleGroupBlackRiskRules = null)
    {
        if (is_null($vehicleGroupBlackRiskRules) || (is_array($vehicleGroupBlackRiskRules) && empty($vehicleGroupBlackRiskRules))) {
            unset($this->VehicleGroupBlackRiskRules);
        } else {
            $this->VehicleGroupBlackRiskRules = $vehicleGroupBlackRiskRules;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleGroupBlackRiskDefinition
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
