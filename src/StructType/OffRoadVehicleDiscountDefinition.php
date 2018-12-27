<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OffRoadVehicleDiscountDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:OffRoadVehicleDiscountDefinition
 * @subpackage Structs
 */
class OffRoadVehicleDiscountDefinition extends DiscountDefinition
{
    /**
     * The OffRoadVehicleDiscountFactors
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfOffRoadVehicleDiscountFactor
     */
    public $OffRoadVehicleDiscountFactors;
    /**
     * Constructor method for OffRoadVehicleDiscountDefinition
     * @uses OffRoadVehicleDiscountDefinition::setOffRoadVehicleDiscountFactors()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfOffRoadVehicleDiscountFactor $offRoadVehicleDiscountFactors
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfOffRoadVehicleDiscountFactor $offRoadVehicleDiscountFactors = null)
    {
        $this
            ->setOffRoadVehicleDiscountFactors($offRoadVehicleDiscountFactors);
    }
    /**
     * Get OffRoadVehicleDiscountFactors value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfOffRoadVehicleDiscountFactor|null
     */
    public function getOffRoadVehicleDiscountFactors()
    {
        return isset($this->OffRoadVehicleDiscountFactors) ? $this->OffRoadVehicleDiscountFactors : null;
    }
    /**
     * Set OffRoadVehicleDiscountFactors value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfOffRoadVehicleDiscountFactor $offRoadVehicleDiscountFactors
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OffRoadVehicleDiscountDefinition
     */
    public function setOffRoadVehicleDiscountFactors(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfOffRoadVehicleDiscountFactor $offRoadVehicleDiscountFactors = null)
    {
        if (is_null($offRoadVehicleDiscountFactors) || (is_array($offRoadVehicleDiscountFactors) && empty($offRoadVehicleDiscountFactors))) {
            unset($this->OffRoadVehicleDiscountFactors);
        } else {
            $this->OffRoadVehicleDiscountFactors = $offRoadVehicleDiscountFactors;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OffRoadVehicleDiscountDefinition
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
