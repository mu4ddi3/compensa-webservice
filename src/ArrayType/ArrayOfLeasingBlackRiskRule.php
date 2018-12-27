<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfLeasingBlackRiskRule ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfLeasingBlackRiskRule
 * @subpackage Arrays
 */
class ArrayOfLeasingBlackRiskRule extends AbstractStructArrayBase
{
    /**
     * The LeasingBlackRiskRule
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\LeasingBlackRiskRule[]
     */
    public $LeasingBlackRiskRule;
    /**
     * Constructor method for ArrayOfLeasingBlackRiskRule
     * @uses ArrayOfLeasingBlackRiskRule::setLeasingBlackRiskRule()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\LeasingBlackRiskRule[] $leasingBlackRiskRule
     */
    public function __construct(array $leasingBlackRiskRule = array())
    {
        $this
            ->setLeasingBlackRiskRule($leasingBlackRiskRule);
    }
    /**
     * Get LeasingBlackRiskRule value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\LeasingBlackRiskRule[]|null
     */
    public function getLeasingBlackRiskRule()
    {
        return isset($this->LeasingBlackRiskRule) ? $this->LeasingBlackRiskRule : null;
    }
    /**
     * Set LeasingBlackRiskRule value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\LeasingBlackRiskRule[] $leasingBlackRiskRule
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfLeasingBlackRiskRule
     */
    public function setLeasingBlackRiskRule(array $leasingBlackRiskRule = array())
    {
        foreach ($leasingBlackRiskRule as $arrayOfLeasingBlackRiskRuleLeasingBlackRiskRuleItem) {
            // validation for constraint: itemType
            if (!$arrayOfLeasingBlackRiskRuleLeasingBlackRiskRuleItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\LeasingBlackRiskRule) {
                throw new \InvalidArgumentException(sprintf('The LeasingBlackRiskRule property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\LeasingBlackRiskRule, "%s" given', is_object($arrayOfLeasingBlackRiskRuleLeasingBlackRiskRuleItem) ? get_class($arrayOfLeasingBlackRiskRuleLeasingBlackRiskRuleItem) : gettype($arrayOfLeasingBlackRiskRuleLeasingBlackRiskRuleItem)), __LINE__);
            }
        }
        if (is_null($leasingBlackRiskRule) || (is_array($leasingBlackRiskRule) && empty($leasingBlackRiskRule))) {
            unset($this->LeasingBlackRiskRule);
        } else {
            $this->LeasingBlackRiskRule = $leasingBlackRiskRule;
        }
        return $this;
    }
    /**
     * Add item to LeasingBlackRiskRule value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\LeasingBlackRiskRule $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfLeasingBlackRiskRule
     */
    public function addToLeasingBlackRiskRule(\Mu4ddi3\Compensa\Webservice\StructType\LeasingBlackRiskRule $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\LeasingBlackRiskRule) {
            throw new \InvalidArgumentException(sprintf('The LeasingBlackRiskRule property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\LeasingBlackRiskRule, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->LeasingBlackRiskRule[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\LeasingBlackRiskRule|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\LeasingBlackRiskRule|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\LeasingBlackRiskRule|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\LeasingBlackRiskRule|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\LeasingBlackRiskRule|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string LeasingBlackRiskRule
     */
    public function getAttributeName()
    {
        return 'LeasingBlackRiskRule';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfLeasingBlackRiskRule
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
