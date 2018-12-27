<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfLeasingRule ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfLeasingRule
 * @subpackage Arrays
 */
class ArrayOfLeasingRule extends AbstractStructArrayBase
{
    /**
     * The LeasingRule
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\LeasingRule[]
     */
    public $LeasingRule;
    /**
     * Constructor method for ArrayOfLeasingRule
     * @uses ArrayOfLeasingRule::setLeasingRule()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\LeasingRule[] $leasingRule
     */
    public function __construct(array $leasingRule = array())
    {
        $this
            ->setLeasingRule($leasingRule);
    }
    /**
     * Get LeasingRule value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\LeasingRule[]|null
     */
    public function getLeasingRule()
    {
        return isset($this->LeasingRule) ? $this->LeasingRule : null;
    }
    /**
     * Set LeasingRule value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\LeasingRule[] $leasingRule
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfLeasingRule
     */
    public function setLeasingRule(array $leasingRule = array())
    {
        foreach ($leasingRule as $arrayOfLeasingRuleLeasingRuleItem) {
            // validation for constraint: itemType
            if (!$arrayOfLeasingRuleLeasingRuleItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\LeasingRule) {
                throw new \InvalidArgumentException(sprintf('The LeasingRule property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\LeasingRule, "%s" given', is_object($arrayOfLeasingRuleLeasingRuleItem) ? get_class($arrayOfLeasingRuleLeasingRuleItem) : gettype($arrayOfLeasingRuleLeasingRuleItem)), __LINE__);
            }
        }
        if (is_null($leasingRule) || (is_array($leasingRule) && empty($leasingRule))) {
            unset($this->LeasingRule);
        } else {
            $this->LeasingRule = $leasingRule;
        }
        return $this;
    }
    /**
     * Add item to LeasingRule value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\LeasingRule $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfLeasingRule
     */
    public function addToLeasingRule(\Mu4ddi3\Compensa\Webservice\StructType\LeasingRule $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\LeasingRule) {
            throw new \InvalidArgumentException(sprintf('The LeasingRule property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\LeasingRule, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->LeasingRule[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\LeasingRule|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\LeasingRule|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\LeasingRule|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\LeasingRule|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\LeasingRule|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string LeasingRule
     */
    public function getAttributeName()
    {
        return 'LeasingRule';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfLeasingRule
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
