<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfEnginePowerBlackRiskRule ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfEnginePowerBlackRiskRule
 * @subpackage Arrays
 */
class ArrayOfEnginePowerBlackRiskRule extends AbstractStructArrayBase
{
    /**
     * The EnginePowerBlackRiskRule
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\EnginePowerBlackRiskRule[]
     */
    public $EnginePowerBlackRiskRule;
    /**
     * Constructor method for ArrayOfEnginePowerBlackRiskRule
     * @uses ArrayOfEnginePowerBlackRiskRule::setEnginePowerBlackRiskRule()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\EnginePowerBlackRiskRule[] $enginePowerBlackRiskRule
     */
    public function __construct(array $enginePowerBlackRiskRule = array())
    {
        $this
            ->setEnginePowerBlackRiskRule($enginePowerBlackRiskRule);
    }
    /**
     * Get EnginePowerBlackRiskRule value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\EnginePowerBlackRiskRule[]|null
     */
    public function getEnginePowerBlackRiskRule()
    {
        return isset($this->EnginePowerBlackRiskRule) ? $this->EnginePowerBlackRiskRule : null;
    }
    /**
     * Set EnginePowerBlackRiskRule value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\EnginePowerBlackRiskRule[] $enginePowerBlackRiskRule
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfEnginePowerBlackRiskRule
     */
    public function setEnginePowerBlackRiskRule(array $enginePowerBlackRiskRule = array())
    {
        foreach ($enginePowerBlackRiskRule as $arrayOfEnginePowerBlackRiskRuleEnginePowerBlackRiskRuleItem) {
            // validation for constraint: itemType
            if (!$arrayOfEnginePowerBlackRiskRuleEnginePowerBlackRiskRuleItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\EnginePowerBlackRiskRule) {
                throw new \InvalidArgumentException(sprintf('The EnginePowerBlackRiskRule property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\EnginePowerBlackRiskRule, "%s" given', is_object($arrayOfEnginePowerBlackRiskRuleEnginePowerBlackRiskRuleItem) ? get_class($arrayOfEnginePowerBlackRiskRuleEnginePowerBlackRiskRuleItem) : gettype($arrayOfEnginePowerBlackRiskRuleEnginePowerBlackRiskRuleItem)), __LINE__);
            }
        }
        if (is_null($enginePowerBlackRiskRule) || (is_array($enginePowerBlackRiskRule) && empty($enginePowerBlackRiskRule))) {
            unset($this->EnginePowerBlackRiskRule);
        } else {
            $this->EnginePowerBlackRiskRule = $enginePowerBlackRiskRule;
        }
        return $this;
    }
    /**
     * Add item to EnginePowerBlackRiskRule value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\EnginePowerBlackRiskRule $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfEnginePowerBlackRiskRule
     */
    public function addToEnginePowerBlackRiskRule(\Mu4ddi3\Compensa\Webservice\StructType\EnginePowerBlackRiskRule $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\EnginePowerBlackRiskRule) {
            throw new \InvalidArgumentException(sprintf('The EnginePowerBlackRiskRule property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\EnginePowerBlackRiskRule, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->EnginePowerBlackRiskRule[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\EnginePowerBlackRiskRule|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\EnginePowerBlackRiskRule|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\EnginePowerBlackRiskRule|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\EnginePowerBlackRiskRule|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\EnginePowerBlackRiskRule|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string EnginePowerBlackRiskRule
     */
    public function getAttributeName()
    {
        return 'EnginePowerBlackRiskRule';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfEnginePowerBlackRiskRule
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
