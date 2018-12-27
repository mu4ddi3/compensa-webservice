<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModelTypeCorrectionDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ModelTypeCorrectionDefinition
 * @subpackage Structs
 */
class ModelTypeCorrectionDefinition extends DiscountDefinition
{
    /**
     * The ModelTypeCorrectionFactors
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfModelTypeCorrectionFactor
     */
    public $ModelTypeCorrectionFactors;
    /**
     * Constructor method for ModelTypeCorrectionDefinition
     * @uses ModelTypeCorrectionDefinition::setModelTypeCorrectionFactors()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfModelTypeCorrectionFactor $modelTypeCorrectionFactors
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfModelTypeCorrectionFactor $modelTypeCorrectionFactors = null)
    {
        $this
            ->setModelTypeCorrectionFactors($modelTypeCorrectionFactors);
    }
    /**
     * Get ModelTypeCorrectionFactors value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfModelTypeCorrectionFactor|null
     */
    public function getModelTypeCorrectionFactors()
    {
        return isset($this->ModelTypeCorrectionFactors) ? $this->ModelTypeCorrectionFactors : null;
    }
    /**
     * Set ModelTypeCorrectionFactors value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfModelTypeCorrectionFactor $modelTypeCorrectionFactors
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ModelTypeCorrectionDefinition
     */
    public function setModelTypeCorrectionFactors(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfModelTypeCorrectionFactor $modelTypeCorrectionFactors = null)
    {
        if (is_null($modelTypeCorrectionFactors) || (is_array($modelTypeCorrectionFactors) && empty($modelTypeCorrectionFactors))) {
            unset($this->ModelTypeCorrectionFactors);
        } else {
            $this->ModelTypeCorrectionFactors = $modelTypeCorrectionFactors;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ModelTypeCorrectionDefinition
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
