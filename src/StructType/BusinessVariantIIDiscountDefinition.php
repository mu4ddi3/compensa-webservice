<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BusinessVariantIIDiscountDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BusinessVariantIIDiscountDefinition
 * @subpackage Structs
 */
class BusinessVariantIIDiscountDefinition extends DiscountDefinition
{
    /**
     * The BusinessVariantIIDiscountFactors
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBusinessVariantIIDiscountFactor
     */
    public $BusinessVariantIIDiscountFactors;
    /**
     * Constructor method for BusinessVariantIIDiscountDefinition
     * @uses BusinessVariantIIDiscountDefinition::setBusinessVariantIIDiscountFactors()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBusinessVariantIIDiscountFactor $businessVariantIIDiscountFactors
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBusinessVariantIIDiscountFactor $businessVariantIIDiscountFactors = null)
    {
        $this
            ->setBusinessVariantIIDiscountFactors($businessVariantIIDiscountFactors);
    }
    /**
     * Get BusinessVariantIIDiscountFactors value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBusinessVariantIIDiscountFactor|null
     */
    public function getBusinessVariantIIDiscountFactors()
    {
        return isset($this->BusinessVariantIIDiscountFactors) ? $this->BusinessVariantIIDiscountFactors : null;
    }
    /**
     * Set BusinessVariantIIDiscountFactors value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBusinessVariantIIDiscountFactor $businessVariantIIDiscountFactors
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BusinessVariantIIDiscountDefinition
     */
    public function setBusinessVariantIIDiscountFactors(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBusinessVariantIIDiscountFactor $businessVariantIIDiscountFactors = null)
    {
        if (is_null($businessVariantIIDiscountFactors) || (is_array($businessVariantIIDiscountFactors) && empty($businessVariantIIDiscountFactors))) {
            unset($this->BusinessVariantIIDiscountFactors);
        } else {
            $this->BusinessVariantIIDiscountFactors = $businessVariantIIDiscountFactors;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BusinessVariantIIDiscountDefinition
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
