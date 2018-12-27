<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfMaximalInsuranceSumAcBlackRiskRule ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfMaximalInsuranceSumAcBlackRiskRule
 * @subpackage Arrays
 */
class ArrayOfMaximalInsuranceSumAcBlackRiskRule extends AbstractStructArrayBase
{
    /**
     * The MaximalInsuranceSumAcBlackRiskRule
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MaximalInsuranceSumAcBlackRiskRule[]
     */
    public $MaximalInsuranceSumAcBlackRiskRule;
    /**
     * Constructor method for ArrayOfMaximalInsuranceSumAcBlackRiskRule
     * @uses ArrayOfMaximalInsuranceSumAcBlackRiskRule::setMaximalInsuranceSumAcBlackRiskRule()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MaximalInsuranceSumAcBlackRiskRule[] $maximalInsuranceSumAcBlackRiskRule
     */
    public function __construct(array $maximalInsuranceSumAcBlackRiskRule = array())
    {
        $this
            ->setMaximalInsuranceSumAcBlackRiskRule($maximalInsuranceSumAcBlackRiskRule);
    }
    /**
     * Get MaximalInsuranceSumAcBlackRiskRule value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MaximalInsuranceSumAcBlackRiskRule[]|null
     */
    public function getMaximalInsuranceSumAcBlackRiskRule()
    {
        return isset($this->MaximalInsuranceSumAcBlackRiskRule) ? $this->MaximalInsuranceSumAcBlackRiskRule : null;
    }
    /**
     * Set MaximalInsuranceSumAcBlackRiskRule value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MaximalInsuranceSumAcBlackRiskRule[] $maximalInsuranceSumAcBlackRiskRule
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMaximalInsuranceSumAcBlackRiskRule
     */
    public function setMaximalInsuranceSumAcBlackRiskRule(array $maximalInsuranceSumAcBlackRiskRule = array())
    {
        foreach ($maximalInsuranceSumAcBlackRiskRule as $arrayOfMaximalInsuranceSumAcBlackRiskRuleMaximalInsuranceSumAcBlackRiskRuleItem) {
            // validation for constraint: itemType
            if (!$arrayOfMaximalInsuranceSumAcBlackRiskRuleMaximalInsuranceSumAcBlackRiskRuleItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\MaximalInsuranceSumAcBlackRiskRule) {
                throw new \InvalidArgumentException(sprintf('The MaximalInsuranceSumAcBlackRiskRule property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\MaximalInsuranceSumAcBlackRiskRule, "%s" given', is_object($arrayOfMaximalInsuranceSumAcBlackRiskRuleMaximalInsuranceSumAcBlackRiskRuleItem) ? get_class($arrayOfMaximalInsuranceSumAcBlackRiskRuleMaximalInsuranceSumAcBlackRiskRuleItem) : gettype($arrayOfMaximalInsuranceSumAcBlackRiskRuleMaximalInsuranceSumAcBlackRiskRuleItem)), __LINE__);
            }
        }
        if (is_null($maximalInsuranceSumAcBlackRiskRule) || (is_array($maximalInsuranceSumAcBlackRiskRule) && empty($maximalInsuranceSumAcBlackRiskRule))) {
            unset($this->MaximalInsuranceSumAcBlackRiskRule);
        } else {
            $this->MaximalInsuranceSumAcBlackRiskRule = $maximalInsuranceSumAcBlackRiskRule;
        }
        return $this;
    }
    /**
     * Add item to MaximalInsuranceSumAcBlackRiskRule value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MaximalInsuranceSumAcBlackRiskRule $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMaximalInsuranceSumAcBlackRiskRule
     */
    public function addToMaximalInsuranceSumAcBlackRiskRule(\Mu4ddi3\Compensa\Webservice\StructType\MaximalInsuranceSumAcBlackRiskRule $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\MaximalInsuranceSumAcBlackRiskRule) {
            throw new \InvalidArgumentException(sprintf('The MaximalInsuranceSumAcBlackRiskRule property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\MaximalInsuranceSumAcBlackRiskRule, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->MaximalInsuranceSumAcBlackRiskRule[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MaximalInsuranceSumAcBlackRiskRule|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MaximalInsuranceSumAcBlackRiskRule|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MaximalInsuranceSumAcBlackRiskRule|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MaximalInsuranceSumAcBlackRiskRule|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MaximalInsuranceSumAcBlackRiskRule|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string MaximalInsuranceSumAcBlackRiskRule
     */
    public function getAttributeName()
    {
        return 'MaximalInsuranceSumAcBlackRiskRule';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMaximalInsuranceSumAcBlackRiskRule
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
