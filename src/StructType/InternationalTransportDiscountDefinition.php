<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InternationalTransportDiscountDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:InternationalTransportDiscountDefinition
 * @subpackage Structs
 */
class InternationalTransportDiscountDefinition extends DiscountDefinition
{
    /**
     * The InternationalTransportDiscountFactors
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInternationalTransportDiscountFactor
     */
    public $InternationalTransportDiscountFactors;
    /**
     * Constructor method for InternationalTransportDiscountDefinition
     * @uses InternationalTransportDiscountDefinition::setInternationalTransportDiscountFactors()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInternationalTransportDiscountFactor $internationalTransportDiscountFactors
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInternationalTransportDiscountFactor $internationalTransportDiscountFactors = null)
    {
        $this
            ->setInternationalTransportDiscountFactors($internationalTransportDiscountFactors);
    }
    /**
     * Get InternationalTransportDiscountFactors value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInternationalTransportDiscountFactor|null
     */
    public function getInternationalTransportDiscountFactors()
    {
        return isset($this->InternationalTransportDiscountFactors) ? $this->InternationalTransportDiscountFactors : null;
    }
    /**
     * Set InternationalTransportDiscountFactors value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInternationalTransportDiscountFactor $internationalTransportDiscountFactors
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InternationalTransportDiscountDefinition
     */
    public function setInternationalTransportDiscountFactors(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInternationalTransportDiscountFactor $internationalTransportDiscountFactors = null)
    {
        if (is_null($internationalTransportDiscountFactors) || (is_array($internationalTransportDiscountFactors) && empty($internationalTransportDiscountFactors))) {
            unset($this->InternationalTransportDiscountFactors);
        } else {
            $this->InternationalTransportDiscountFactors = $internationalTransportDiscountFactors;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InternationalTransportDiscountDefinition
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
