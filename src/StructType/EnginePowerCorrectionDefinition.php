<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EnginePowerCorrectionDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:EnginePowerCorrectionDefinition
 * @subpackage Structs
 */
class EnginePowerCorrectionDefinition extends DiscountDefinition
{
    /**
     * The EnginePowerCorrectionFactors
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfEnginePowerCorrectionFactor
     */
    public $EnginePowerCorrectionFactors;
    /**
     * Constructor method for EnginePowerCorrectionDefinition
     * @uses EnginePowerCorrectionDefinition::setEnginePowerCorrectionFactors()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfEnginePowerCorrectionFactor $enginePowerCorrectionFactors
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfEnginePowerCorrectionFactor $enginePowerCorrectionFactors = null)
    {
        $this
            ->setEnginePowerCorrectionFactors($enginePowerCorrectionFactors);
    }
    /**
     * Get EnginePowerCorrectionFactors value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfEnginePowerCorrectionFactor|null
     */
    public function getEnginePowerCorrectionFactors()
    {
        return isset($this->EnginePowerCorrectionFactors) ? $this->EnginePowerCorrectionFactors : null;
    }
    /**
     * Set EnginePowerCorrectionFactors value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfEnginePowerCorrectionFactor $enginePowerCorrectionFactors
     * @return \Mu4ddi3\Compensa\Webservice\StructType\EnginePowerCorrectionDefinition
     */
    public function setEnginePowerCorrectionFactors(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfEnginePowerCorrectionFactor $enginePowerCorrectionFactors = null)
    {
        if (is_null($enginePowerCorrectionFactors) || (is_array($enginePowerCorrectionFactors) && empty($enginePowerCorrectionFactors))) {
            unset($this->EnginePowerCorrectionFactors);
        } else {
            $this->EnginePowerCorrectionFactors = $enginePowerCorrectionFactors;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\EnginePowerCorrectionDefinition
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
