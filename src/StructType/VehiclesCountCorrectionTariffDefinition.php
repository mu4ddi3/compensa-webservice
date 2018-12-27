<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehiclesCountCorrectionTariffDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:VehiclesCountCorrectionTariffDefinition
 * @subpackage Structs
 */
class VehiclesCountCorrectionTariffDefinition extends AbstractStructBase
{
    /**
     * The VehiclesCountCorrectionValues
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVehiclesCountCorrectionValue
     */
    public $VehiclesCountCorrectionValues;
    /**
     * Constructor method for VehiclesCountCorrectionTariffDefinition
     * @uses VehiclesCountCorrectionTariffDefinition::setVehiclesCountCorrectionValues()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVehiclesCountCorrectionValue $vehiclesCountCorrectionValues
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVehiclesCountCorrectionValue $vehiclesCountCorrectionValues = null)
    {
        $this
            ->setVehiclesCountCorrectionValues($vehiclesCountCorrectionValues);
    }
    /**
     * Get VehiclesCountCorrectionValues value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVehiclesCountCorrectionValue|null
     */
    public function getVehiclesCountCorrectionValues()
    {
        return isset($this->VehiclesCountCorrectionValues) ? $this->VehiclesCountCorrectionValues : null;
    }
    /**
     * Set VehiclesCountCorrectionValues value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVehiclesCountCorrectionValue $vehiclesCountCorrectionValues
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehiclesCountCorrectionTariffDefinition
     */
    public function setVehiclesCountCorrectionValues(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVehiclesCountCorrectionValue $vehiclesCountCorrectionValues = null)
    {
        if (is_null($vehiclesCountCorrectionValues) || (is_array($vehiclesCountCorrectionValues) && empty($vehiclesCountCorrectionValues))) {
            unset($this->VehiclesCountCorrectionValues);
        } else {
            $this->VehiclesCountCorrectionValues = $vehiclesCountCorrectionValues;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehiclesCountCorrectionTariffDefinition
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
