<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConstantInsuranceSumCorrectionDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ConstantInsuranceSumCorrectionDefinition
 * @subpackage Structs
 */
class ConstantInsuranceSumCorrectionDefinition extends DiscountDefinition
{
    /**
     * The ConstantInsuranceSumCorrectionFactors
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfConstantInsuranceSumCorrectionFactor
     */
    public $ConstantInsuranceSumCorrectionFactors;
    /**
     * Constructor method for ConstantInsuranceSumCorrectionDefinition
     * @uses ConstantInsuranceSumCorrectionDefinition::setConstantInsuranceSumCorrectionFactors()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfConstantInsuranceSumCorrectionFactor $constantInsuranceSumCorrectionFactors
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfConstantInsuranceSumCorrectionFactor $constantInsuranceSumCorrectionFactors = null)
    {
        $this
            ->setConstantInsuranceSumCorrectionFactors($constantInsuranceSumCorrectionFactors);
    }
    /**
     * Get ConstantInsuranceSumCorrectionFactors value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfConstantInsuranceSumCorrectionFactor|null
     */
    public function getConstantInsuranceSumCorrectionFactors()
    {
        return isset($this->ConstantInsuranceSumCorrectionFactors) ? $this->ConstantInsuranceSumCorrectionFactors : null;
    }
    /**
     * Set ConstantInsuranceSumCorrectionFactors value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfConstantInsuranceSumCorrectionFactor $constantInsuranceSumCorrectionFactors
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ConstantInsuranceSumCorrectionDefinition
     */
    public function setConstantInsuranceSumCorrectionFactors(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfConstantInsuranceSumCorrectionFactor $constantInsuranceSumCorrectionFactors = null)
    {
        if (is_null($constantInsuranceSumCorrectionFactors) || (is_array($constantInsuranceSumCorrectionFactors) && empty($constantInsuranceSumCorrectionFactors))) {
            unset($this->ConstantInsuranceSumCorrectionFactors);
        } else {
            $this->ConstantInsuranceSumCorrectionFactors = $constantInsuranceSumCorrectionFactors;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ConstantInsuranceSumCorrectionDefinition
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
