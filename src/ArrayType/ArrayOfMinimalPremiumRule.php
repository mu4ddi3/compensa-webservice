<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfMinimalPremiumRule ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfMinimalPremiumRule
 * @subpackage Arrays
 */
class ArrayOfMinimalPremiumRule extends AbstractStructArrayBase
{
    /**
     * The MinimalPremiumRule
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRule[]
     */
    public $MinimalPremiumRule;
    /**
     * Constructor method for ArrayOfMinimalPremiumRule
     * @uses ArrayOfMinimalPremiumRule::setMinimalPremiumRule()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRule[] $minimalPremiumRule
     */
    public function __construct(array $minimalPremiumRule = array())
    {
        $this
            ->setMinimalPremiumRule($minimalPremiumRule);
    }
    /**
     * Get MinimalPremiumRule value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRule[]|null
     */
    public function getMinimalPremiumRule()
    {
        return isset($this->MinimalPremiumRule) ? $this->MinimalPremiumRule : null;
    }
    /**
     * Set MinimalPremiumRule value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRule[] $minimalPremiumRule
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMinimalPremiumRule
     */
    public function setMinimalPremiumRule(array $minimalPremiumRule = array())
    {
        foreach ($minimalPremiumRule as $arrayOfMinimalPremiumRuleMinimalPremiumRuleItem) {
            // validation for constraint: itemType
            if (!$arrayOfMinimalPremiumRuleMinimalPremiumRuleItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRule) {
                throw new \InvalidArgumentException(sprintf('The MinimalPremiumRule property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRule, "%s" given', is_object($arrayOfMinimalPremiumRuleMinimalPremiumRuleItem) ? get_class($arrayOfMinimalPremiumRuleMinimalPremiumRuleItem) : gettype($arrayOfMinimalPremiumRuleMinimalPremiumRuleItem)), __LINE__);
            }
        }
        if (is_null($minimalPremiumRule) || (is_array($minimalPremiumRule) && empty($minimalPremiumRule))) {
            unset($this->MinimalPremiumRule);
        } else {
            $this->MinimalPremiumRule = $minimalPremiumRule;
        }
        return $this;
    }
    /**
     * Add item to MinimalPremiumRule value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRule $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMinimalPremiumRule
     */
    public function addToMinimalPremiumRule(\Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRule $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRule) {
            throw new \InvalidArgumentException(sprintf('The MinimalPremiumRule property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRule, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->MinimalPremiumRule[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRule|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRule|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRule|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRule|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRule|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string MinimalPremiumRule
     */
    public function getAttributeName()
    {
        return 'MinimalPremiumRule';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMinimalPremiumRule
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
