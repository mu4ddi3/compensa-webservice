<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRiskAvailabilityRule ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfRiskAvailabilityRule
 * @subpackage Arrays
 */
class ArrayOfRiskAvailabilityRule extends AbstractStructArrayBase
{
    /**
     * The RiskAvailabilityRule
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\RiskAvailabilityRule[]
     */
    public $RiskAvailabilityRule;
    /**
     * Constructor method for ArrayOfRiskAvailabilityRule
     * @uses ArrayOfRiskAvailabilityRule::setRiskAvailabilityRule()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RiskAvailabilityRule[] $riskAvailabilityRule
     */
    public function __construct(array $riskAvailabilityRule = array())
    {
        $this
            ->setRiskAvailabilityRule($riskAvailabilityRule);
    }
    /**
     * Get RiskAvailabilityRule value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskAvailabilityRule[]|null
     */
    public function getRiskAvailabilityRule()
    {
        return isset($this->RiskAvailabilityRule) ? $this->RiskAvailabilityRule : null;
    }
    /**
     * Set RiskAvailabilityRule value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RiskAvailabilityRule[] $riskAvailabilityRule
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRiskAvailabilityRule
     */
    public function setRiskAvailabilityRule(array $riskAvailabilityRule = array())
    {
        foreach ($riskAvailabilityRule as $arrayOfRiskAvailabilityRuleRiskAvailabilityRuleItem) {
            // validation for constraint: itemType
            if (!$arrayOfRiskAvailabilityRuleRiskAvailabilityRuleItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\RiskAvailabilityRule) {
                throw new \InvalidArgumentException(sprintf('The RiskAvailabilityRule property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\RiskAvailabilityRule, "%s" given', is_object($arrayOfRiskAvailabilityRuleRiskAvailabilityRuleItem) ? get_class($arrayOfRiskAvailabilityRuleRiskAvailabilityRuleItem) : gettype($arrayOfRiskAvailabilityRuleRiskAvailabilityRuleItem)), __LINE__);
            }
        }
        if (is_null($riskAvailabilityRule) || (is_array($riskAvailabilityRule) && empty($riskAvailabilityRule))) {
            unset($this->RiskAvailabilityRule);
        } else {
            $this->RiskAvailabilityRule = $riskAvailabilityRule;
        }
        return $this;
    }
    /**
     * Add item to RiskAvailabilityRule value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RiskAvailabilityRule $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRiskAvailabilityRule
     */
    public function addToRiskAvailabilityRule(\Mu4ddi3\Compensa\Webservice\StructType\RiskAvailabilityRule $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\RiskAvailabilityRule) {
            throw new \InvalidArgumentException(sprintf('The RiskAvailabilityRule property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\RiskAvailabilityRule, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RiskAvailabilityRule[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskAvailabilityRule|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskAvailabilityRule|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskAvailabilityRule|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskAvailabilityRule|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskAvailabilityRule|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RiskAvailabilityRule
     */
    public function getAttributeName()
    {
        return 'RiskAvailabilityRule';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRiskAvailabilityRule
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
