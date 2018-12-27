<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDeductibleVariantPolicyDurationBlackRiskRule
 * ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfDeductibleVariantPolicyDurationBlackRiskRule
 * @subpackage Arrays
 */
class ArrayOfDeductibleVariantPolicyDurationBlackRiskRule extends AbstractStructArrayBase
{
    /**
     * The DeductibleVariantPolicyDurationBlackRiskRule
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\DeductibleVariantPolicyDurationBlackRiskRule[]
     */
    public $DeductibleVariantPolicyDurationBlackRiskRule;
    /**
     * Constructor method for ArrayOfDeductibleVariantPolicyDurationBlackRiskRule
     * @uses ArrayOfDeductibleVariantPolicyDurationBlackRiskRule::setDeductibleVariantPolicyDurationBlackRiskRule()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\DeductibleVariantPolicyDurationBlackRiskRule[] $deductibleVariantPolicyDurationBlackRiskRule
     */
    public function __construct(array $deductibleVariantPolicyDurationBlackRiskRule = array())
    {
        $this
            ->setDeductibleVariantPolicyDurationBlackRiskRule($deductibleVariantPolicyDurationBlackRiskRule);
    }
    /**
     * Get DeductibleVariantPolicyDurationBlackRiskRule value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DeductibleVariantPolicyDurationBlackRiskRule[]|null
     */
    public function getDeductibleVariantPolicyDurationBlackRiskRule()
    {
        return isset($this->DeductibleVariantPolicyDurationBlackRiskRule) ? $this->DeductibleVariantPolicyDurationBlackRiskRule : null;
    }
    /**
     * Set DeductibleVariantPolicyDurationBlackRiskRule value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\DeductibleVariantPolicyDurationBlackRiskRule[] $deductibleVariantPolicyDurationBlackRiskRule
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDeductibleVariantPolicyDurationBlackRiskRule
     */
    public function setDeductibleVariantPolicyDurationBlackRiskRule(array $deductibleVariantPolicyDurationBlackRiskRule = array())
    {
        foreach ($deductibleVariantPolicyDurationBlackRiskRule as $arrayOfDeductibleVariantPolicyDurationBlackRiskRuleDeductibleVariantPolicyDurationBlackRiskRuleItem) {
            // validation for constraint: itemType
            if (!$arrayOfDeductibleVariantPolicyDurationBlackRiskRuleDeductibleVariantPolicyDurationBlackRiskRuleItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\DeductibleVariantPolicyDurationBlackRiskRule) {
                throw new \InvalidArgumentException(sprintf('The DeductibleVariantPolicyDurationBlackRiskRule property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\DeductibleVariantPolicyDurationBlackRiskRule, "%s" given', is_object($arrayOfDeductibleVariantPolicyDurationBlackRiskRuleDeductibleVariantPolicyDurationBlackRiskRuleItem) ? get_class($arrayOfDeductibleVariantPolicyDurationBlackRiskRuleDeductibleVariantPolicyDurationBlackRiskRuleItem) : gettype($arrayOfDeductibleVariantPolicyDurationBlackRiskRuleDeductibleVariantPolicyDurationBlackRiskRuleItem)), __LINE__);
            }
        }
        if (is_null($deductibleVariantPolicyDurationBlackRiskRule) || (is_array($deductibleVariantPolicyDurationBlackRiskRule) && empty($deductibleVariantPolicyDurationBlackRiskRule))) {
            unset($this->DeductibleVariantPolicyDurationBlackRiskRule);
        } else {
            $this->DeductibleVariantPolicyDurationBlackRiskRule = $deductibleVariantPolicyDurationBlackRiskRule;
        }
        return $this;
    }
    /**
     * Add item to DeductibleVariantPolicyDurationBlackRiskRule value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\DeductibleVariantPolicyDurationBlackRiskRule $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDeductibleVariantPolicyDurationBlackRiskRule
     */
    public function addToDeductibleVariantPolicyDurationBlackRiskRule(\Mu4ddi3\Compensa\Webservice\StructType\DeductibleVariantPolicyDurationBlackRiskRule $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\DeductibleVariantPolicyDurationBlackRiskRule) {
            throw new \InvalidArgumentException(sprintf('The DeductibleVariantPolicyDurationBlackRiskRule property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\DeductibleVariantPolicyDurationBlackRiskRule, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DeductibleVariantPolicyDurationBlackRiskRule[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DeductibleVariantPolicyDurationBlackRiskRule|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DeductibleVariantPolicyDurationBlackRiskRule|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DeductibleVariantPolicyDurationBlackRiskRule|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DeductibleVariantPolicyDurationBlackRiskRule|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DeductibleVariantPolicyDurationBlackRiskRule|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DeductibleVariantPolicyDurationBlackRiskRule
     */
    public function getAttributeName()
    {
        return 'DeductibleVariantPolicyDurationBlackRiskRule';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDeductibleVariantPolicyDurationBlackRiskRule
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
