<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalDiscountDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AdditionalDiscountDefinition
 * @subpackage Structs
 */
class AdditionalDiscountDefinition extends DiscountDefinition
{
    /**
     * The AdditionalDiscountFactors
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAdditionalDiscountFactor
     */
    public $AdditionalDiscountFactors;
    /**
     * Constructor method for AdditionalDiscountDefinition
     * @uses AdditionalDiscountDefinition::setAdditionalDiscountFactors()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAdditionalDiscountFactor $additionalDiscountFactors
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAdditionalDiscountFactor $additionalDiscountFactors = null)
    {
        $this
            ->setAdditionalDiscountFactors($additionalDiscountFactors);
    }
    /**
     * Get AdditionalDiscountFactors value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAdditionalDiscountFactor|null
     */
    public function getAdditionalDiscountFactors()
    {
        return isset($this->AdditionalDiscountFactors) ? $this->AdditionalDiscountFactors : null;
    }
    /**
     * Set AdditionalDiscountFactors value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAdditionalDiscountFactor $additionalDiscountFactors
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscountDefinition
     */
    public function setAdditionalDiscountFactors(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAdditionalDiscountFactor $additionalDiscountFactors = null)
    {
        if (is_null($additionalDiscountFactors) || (is_array($additionalDiscountFactors) && empty($additionalDiscountFactors))) {
            unset($this->AdditionalDiscountFactors);
        } else {
            $this->AdditionalDiscountFactors = $additionalDiscountFactors;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscountDefinition
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
