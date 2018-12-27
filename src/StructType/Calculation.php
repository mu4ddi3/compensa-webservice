<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Calculation StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Calculation
 * @subpackage Structs
 */
class Calculation extends AbstractStructBase
{
    /**
     * The Variants
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCalculationVariant
     */
    public $Variants;
    /**
     * Constructor method for Calculation
     * @uses Calculation::setVariants()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCalculationVariant $variants
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCalculationVariant $variants = null)
    {
        $this
            ->setVariants($variants);
    }
    /**
     * Get Variants value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCalculationVariant|null
     */
    public function getVariants()
    {
        return isset($this->Variants) ? $this->Variants : null;
    }
    /**
     * Set Variants value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCalculationVariant $variants
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Calculation
     */
    public function setVariants(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCalculationVariant $variants = null)
    {
        if (is_null($variants) || (is_array($variants) && empty($variants))) {
            unset($this->Variants);
        } else {
            $this->Variants = $variants;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Calculation
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
