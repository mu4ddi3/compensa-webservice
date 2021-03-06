<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContinuationDiscountDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ContinuationDiscountDefinition
 * @subpackage Structs
 */
class ContinuationDiscountDefinition extends DiscountDefinition
{
    /**
     * The DiscountFactors
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfContinuationDiscountFactor
     */
    public $DiscountFactors;
    /**
     * Constructor method for ContinuationDiscountDefinition
     * @uses ContinuationDiscountDefinition::setDiscountFactors()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfContinuationDiscountFactor $discountFactors
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfContinuationDiscountFactor $discountFactors = null)
    {
        $this
            ->setDiscountFactors($discountFactors);
    }
    /**
     * Get DiscountFactors value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfContinuationDiscountFactor|null
     */
    public function getDiscountFactors()
    {
        return isset($this->DiscountFactors) ? $this->DiscountFactors : null;
    }
    /**
     * Set DiscountFactors value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfContinuationDiscountFactor $discountFactors
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ContinuationDiscountDefinition
     */
    public function setDiscountFactors(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfContinuationDiscountFactor $discountFactors = null)
    {
        if (is_null($discountFactors) || (is_array($discountFactors) && empty($discountFactors))) {
            unset($this->DiscountFactors);
        } else {
            $this->DiscountFactors = $discountFactors;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ContinuationDiscountDefinition
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
