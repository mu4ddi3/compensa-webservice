<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AssistanceVartiantCondition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AssistanceVartiantCondition
 * @subpackage Structs
 */
class AssistanceVartiantCondition extends AvailabilityConditionBase
{
    /**
     * The AssistanceVariants
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTariffVariants
     */
    public $AssistanceVariants;
    /**
     * Constructor method for AssistanceVartiantCondition
     * @uses AssistanceVartiantCondition::setAssistanceVariants()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTariffVariants $assistanceVariants
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTariffVariants $assistanceVariants = null)
    {
        $this
            ->setAssistanceVariants($assistanceVariants);
    }
    /**
     * Get AssistanceVariants value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTariffVariants|null
     */
    public function getAssistanceVariants()
    {
        return isset($this->AssistanceVariants) ? $this->AssistanceVariants : null;
    }
    /**
     * Set AssistanceVariants value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTariffVariants $assistanceVariants
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AssistanceVartiantCondition
     */
    public function setAssistanceVariants(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTariffVariants $assistanceVariants = null)
    {
        if (is_null($assistanceVariants) || (is_array($assistanceVariants) && empty($assistanceVariants))) {
            unset($this->AssistanceVariants);
        } else {
            $this->AssistanceVariants = $assistanceVariants;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AssistanceVartiantCondition
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
