<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LuggageVariantCondition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:LuggageVariantCondition
 * @subpackage Structs
 */
class LuggageVariantCondition extends AvailabilityConditionBase
{
    /**
     * The RiskVariants
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRiskVariant
     */
    public $RiskVariants;
    /**
     * Constructor method for LuggageVariantCondition
     * @uses LuggageVariantCondition::setRiskVariants()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRiskVariant $riskVariants
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRiskVariant $riskVariants = null)
    {
        $this
            ->setRiskVariants($riskVariants);
    }
    /**
     * Get RiskVariants value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRiskVariant|null
     */
    public function getRiskVariants()
    {
        return isset($this->RiskVariants) ? $this->RiskVariants : null;
    }
    /**
     * Set RiskVariants value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRiskVariant $riskVariants
     * @return \Mu4ddi3\Compensa\Webservice\StructType\LuggageVariantCondition
     */
    public function setRiskVariants(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRiskVariant $riskVariants = null)
    {
        if (is_null($riskVariants) || (is_array($riskVariants) && empty($riskVariants))) {
            unset($this->RiskVariants);
        } else {
            $this->RiskVariants = $riskVariants;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\LuggageVariantCondition
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
