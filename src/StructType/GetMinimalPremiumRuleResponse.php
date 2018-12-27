<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMinimalPremiumRuleResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetMinimalPremiumRuleResponse
 * @subpackage Structs
 */
class GetMinimalPremiumRuleResponse extends AbstractStructBase
{
    /**
     * The MinimalPremiumRule
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRule
     */
    public $MinimalPremiumRule;
    /**
     * Constructor method for GetMinimalPremiumRuleResponse
     * @uses GetMinimalPremiumRuleResponse::setMinimalPremiumRule()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRule $minimalPremiumRule
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRule $minimalPremiumRule = null)
    {
        $this
            ->setMinimalPremiumRule($minimalPremiumRule);
    }
    /**
     * Get MinimalPremiumRule value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRule|null
     */
    public function getMinimalPremiumRule()
    {
        return isset($this->MinimalPremiumRule) ? $this->MinimalPremiumRule : null;
    }
    /**
     * Set MinimalPremiumRule value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRule $minimalPremiumRule
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetMinimalPremiumRuleResponse
     */
    public function setMinimalPremiumRule(\Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRule $minimalPremiumRule = null)
    {
        if (is_null($minimalPremiumRule) || (is_array($minimalPremiumRule) && empty($minimalPremiumRule))) {
            unset($this->MinimalPremiumRule);
        } else {
            $this->MinimalPremiumRule = $minimalPremiumRule;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetMinimalPremiumRuleResponse
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
