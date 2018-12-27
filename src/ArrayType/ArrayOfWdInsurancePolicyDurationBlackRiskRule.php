<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWdInsurancePolicyDurationBlackRiskRule ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfWdInsurancePolicyDurationBlackRiskRule
 * @subpackage Arrays
 */
class ArrayOfWdInsurancePolicyDurationBlackRiskRule extends AbstractStructArrayBase
{
    /**
     * The WdInsurancePolicyDurationBlackRiskRule
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\WdInsurancePolicyDurationBlackRiskRule[]
     */
    public $WdInsurancePolicyDurationBlackRiskRule;
    /**
     * Constructor method for ArrayOfWdInsurancePolicyDurationBlackRiskRule
     * @uses ArrayOfWdInsurancePolicyDurationBlackRiskRule::setWdInsurancePolicyDurationBlackRiskRule()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\WdInsurancePolicyDurationBlackRiskRule[] $wdInsurancePolicyDurationBlackRiskRule
     */
    public function __construct(array $wdInsurancePolicyDurationBlackRiskRule = array())
    {
        $this
            ->setWdInsurancePolicyDurationBlackRiskRule($wdInsurancePolicyDurationBlackRiskRule);
    }
    /**
     * Get WdInsurancePolicyDurationBlackRiskRule value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\WdInsurancePolicyDurationBlackRiskRule[]|null
     */
    public function getWdInsurancePolicyDurationBlackRiskRule()
    {
        return isset($this->WdInsurancePolicyDurationBlackRiskRule) ? $this->WdInsurancePolicyDurationBlackRiskRule : null;
    }
    /**
     * Set WdInsurancePolicyDurationBlackRiskRule value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\WdInsurancePolicyDurationBlackRiskRule[] $wdInsurancePolicyDurationBlackRiskRule
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfWdInsurancePolicyDurationBlackRiskRule
     */
    public function setWdInsurancePolicyDurationBlackRiskRule(array $wdInsurancePolicyDurationBlackRiskRule = array())
    {
        foreach ($wdInsurancePolicyDurationBlackRiskRule as $arrayOfWdInsurancePolicyDurationBlackRiskRuleWdInsurancePolicyDurationBlackRiskRuleItem) {
            // validation for constraint: itemType
            if (!$arrayOfWdInsurancePolicyDurationBlackRiskRuleWdInsurancePolicyDurationBlackRiskRuleItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\WdInsurancePolicyDurationBlackRiskRule) {
                throw new \InvalidArgumentException(sprintf('The WdInsurancePolicyDurationBlackRiskRule property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\WdInsurancePolicyDurationBlackRiskRule, "%s" given', is_object($arrayOfWdInsurancePolicyDurationBlackRiskRuleWdInsurancePolicyDurationBlackRiskRuleItem) ? get_class($arrayOfWdInsurancePolicyDurationBlackRiskRuleWdInsurancePolicyDurationBlackRiskRuleItem) : gettype($arrayOfWdInsurancePolicyDurationBlackRiskRuleWdInsurancePolicyDurationBlackRiskRuleItem)), __LINE__);
            }
        }
        if (is_null($wdInsurancePolicyDurationBlackRiskRule) || (is_array($wdInsurancePolicyDurationBlackRiskRule) && empty($wdInsurancePolicyDurationBlackRiskRule))) {
            unset($this->WdInsurancePolicyDurationBlackRiskRule);
        } else {
            $this->WdInsurancePolicyDurationBlackRiskRule = $wdInsurancePolicyDurationBlackRiskRule;
        }
        return $this;
    }
    /**
     * Add item to WdInsurancePolicyDurationBlackRiskRule value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\WdInsurancePolicyDurationBlackRiskRule $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfWdInsurancePolicyDurationBlackRiskRule
     */
    public function addToWdInsurancePolicyDurationBlackRiskRule(\Mu4ddi3\Compensa\Webservice\StructType\WdInsurancePolicyDurationBlackRiskRule $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\WdInsurancePolicyDurationBlackRiskRule) {
            throw new \InvalidArgumentException(sprintf('The WdInsurancePolicyDurationBlackRiskRule property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\WdInsurancePolicyDurationBlackRiskRule, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WdInsurancePolicyDurationBlackRiskRule[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\WdInsurancePolicyDurationBlackRiskRule|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\WdInsurancePolicyDurationBlackRiskRule|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\WdInsurancePolicyDurationBlackRiskRule|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\WdInsurancePolicyDurationBlackRiskRule|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\WdInsurancePolicyDurationBlackRiskRule|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WdInsurancePolicyDurationBlackRiskRule
     */
    public function getAttributeName()
    {
        return 'WdInsurancePolicyDurationBlackRiskRule';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfWdInsurancePolicyDurationBlackRiskRule
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
