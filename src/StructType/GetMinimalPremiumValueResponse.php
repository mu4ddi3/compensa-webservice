<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMinimalPremiumValueResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetMinimalPremiumValueResponse
 * @subpackage Structs
 */
class GetMinimalPremiumValueResponse extends AbstractStructBase
{
    /**
     * The MinimalPremiumRuleDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MinimalPremiumRuleDefinitionId;
    /**
     * The MinimalPremiumValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $MinimalPremiumValue;
    /**
     * Constructor method for GetMinimalPremiumValueResponse
     * @uses GetMinimalPremiumValueResponse::setMinimalPremiumRuleDefinitionId()
     * @uses GetMinimalPremiumValueResponse::setMinimalPremiumValue()
     * @param int $minimalPremiumRuleDefinitionId
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $minimalPremiumValue
     */
    public function __construct($minimalPremiumRuleDefinitionId = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $minimalPremiumValue = null)
    {
        $this
            ->setMinimalPremiumRuleDefinitionId($minimalPremiumRuleDefinitionId)
            ->setMinimalPremiumValue($minimalPremiumValue);
    }
    /**
     * Get MinimalPremiumRuleDefinitionId value
     * @return int|null
     */
    public function getMinimalPremiumRuleDefinitionId()
    {
        return $this->MinimalPremiumRuleDefinitionId;
    }
    /**
     * Set MinimalPremiumRuleDefinitionId value
     * @param int $minimalPremiumRuleDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetMinimalPremiumValueResponse
     */
    public function setMinimalPremiumRuleDefinitionId($minimalPremiumRuleDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($minimalPremiumRuleDefinitionId) && !is_numeric($minimalPremiumRuleDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minimalPremiumRuleDefinitionId)), __LINE__);
        }
        $this->MinimalPremiumRuleDefinitionId = $minimalPremiumRuleDefinitionId;
        return $this;
    }
    /**
     * Get MinimalPremiumValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getMinimalPremiumValue()
    {
        return isset($this->MinimalPremiumValue) ? $this->MinimalPremiumValue : null;
    }
    /**
     * Set MinimalPremiumValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $minimalPremiumValue
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetMinimalPremiumValueResponse
     */
    public function setMinimalPremiumValue(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $minimalPremiumValue = null)
    {
        if (is_null($minimalPremiumValue) || (is_array($minimalPremiumValue) && empty($minimalPremiumValue))) {
            unset($this->MinimalPremiumValue);
        } else {
            $this->MinimalPremiumValue = $minimalPremiumValue;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetMinimalPremiumValueResponse
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
