<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfUnderwriterBlackRiskRule ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfUnderwriterBlackRiskRule
 * @subpackage Arrays
 */
class ArrayOfUnderwriterBlackRiskRule extends AbstractStructArrayBase
{
    /**
     * The UnderwriterBlackRiskRule
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\UnderwriterBlackRiskRule[]
     */
    public $UnderwriterBlackRiskRule;
    /**
     * Constructor method for ArrayOfUnderwriterBlackRiskRule
     * @uses ArrayOfUnderwriterBlackRiskRule::setUnderwriterBlackRiskRule()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\UnderwriterBlackRiskRule[] $underwriterBlackRiskRule
     */
    public function __construct(array $underwriterBlackRiskRule = array())
    {
        $this
            ->setUnderwriterBlackRiskRule($underwriterBlackRiskRule);
    }
    /**
     * Get UnderwriterBlackRiskRule value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UnderwriterBlackRiskRule[]|null
     */
    public function getUnderwriterBlackRiskRule()
    {
        return isset($this->UnderwriterBlackRiskRule) ? $this->UnderwriterBlackRiskRule : null;
    }
    /**
     * Set UnderwriterBlackRiskRule value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\UnderwriterBlackRiskRule[] $underwriterBlackRiskRule
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfUnderwriterBlackRiskRule
     */
    public function setUnderwriterBlackRiskRule(array $underwriterBlackRiskRule = array())
    {
        foreach ($underwriterBlackRiskRule as $arrayOfUnderwriterBlackRiskRuleUnderwriterBlackRiskRuleItem) {
            // validation for constraint: itemType
            if (!$arrayOfUnderwriterBlackRiskRuleUnderwriterBlackRiskRuleItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\UnderwriterBlackRiskRule) {
                throw new \InvalidArgumentException(sprintf('The UnderwriterBlackRiskRule property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\UnderwriterBlackRiskRule, "%s" given', is_object($arrayOfUnderwriterBlackRiskRuleUnderwriterBlackRiskRuleItem) ? get_class($arrayOfUnderwriterBlackRiskRuleUnderwriterBlackRiskRuleItem) : gettype($arrayOfUnderwriterBlackRiskRuleUnderwriterBlackRiskRuleItem)), __LINE__);
            }
        }
        if (is_null($underwriterBlackRiskRule) || (is_array($underwriterBlackRiskRule) && empty($underwriterBlackRiskRule))) {
            unset($this->UnderwriterBlackRiskRule);
        } else {
            $this->UnderwriterBlackRiskRule = $underwriterBlackRiskRule;
        }
        return $this;
    }
    /**
     * Add item to UnderwriterBlackRiskRule value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\UnderwriterBlackRiskRule $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfUnderwriterBlackRiskRule
     */
    public function addToUnderwriterBlackRiskRule(\Mu4ddi3\Compensa\Webservice\StructType\UnderwriterBlackRiskRule $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\UnderwriterBlackRiskRule) {
            throw new \InvalidArgumentException(sprintf('The UnderwriterBlackRiskRule property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\UnderwriterBlackRiskRule, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->UnderwriterBlackRiskRule[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UnderwriterBlackRiskRule|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UnderwriterBlackRiskRule|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UnderwriterBlackRiskRule|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UnderwriterBlackRiskRule|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UnderwriterBlackRiskRule|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string UnderwriterBlackRiskRule
     */
    public function getAttributeName()
    {
        return 'UnderwriterBlackRiskRule';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfUnderwriterBlackRiskRule
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
