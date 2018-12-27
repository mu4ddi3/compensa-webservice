<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfMinimalVehicleValueInfoEkspertBlackRiskRule
 * ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfMinimalVehicleValueInfoEkspertBlackRiskRule
 * @subpackage Arrays
 */
class ArrayOfMinimalVehicleValueInfoEkspertBlackRiskRule extends AbstractStructArrayBase
{
    /**
     * The MinimalVehicleValueInfoEkspertBlackRiskRule
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MinimalVehicleValueInfoEkspertBlackRiskRule[]
     */
    public $MinimalVehicleValueInfoEkspertBlackRiskRule;
    /**
     * Constructor method for ArrayOfMinimalVehicleValueInfoEkspertBlackRiskRule
     * @uses ArrayOfMinimalVehicleValueInfoEkspertBlackRiskRule::setMinimalVehicleValueInfoEkspertBlackRiskRule()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MinimalVehicleValueInfoEkspertBlackRiskRule[] $minimalVehicleValueInfoEkspertBlackRiskRule
     */
    public function __construct(array $minimalVehicleValueInfoEkspertBlackRiskRule = array())
    {
        $this
            ->setMinimalVehicleValueInfoEkspertBlackRiskRule($minimalVehicleValueInfoEkspertBlackRiskRule);
    }
    /**
     * Get MinimalVehicleValueInfoEkspertBlackRiskRule value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalVehicleValueInfoEkspertBlackRiskRule[]|null
     */
    public function getMinimalVehicleValueInfoEkspertBlackRiskRule()
    {
        return isset($this->MinimalVehicleValueInfoEkspertBlackRiskRule) ? $this->MinimalVehicleValueInfoEkspertBlackRiskRule : null;
    }
    /**
     * Set MinimalVehicleValueInfoEkspertBlackRiskRule value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MinimalVehicleValueInfoEkspertBlackRiskRule[] $minimalVehicleValueInfoEkspertBlackRiskRule
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMinimalVehicleValueInfoEkspertBlackRiskRule
     */
    public function setMinimalVehicleValueInfoEkspertBlackRiskRule(array $minimalVehicleValueInfoEkspertBlackRiskRule = array())
    {
        foreach ($minimalVehicleValueInfoEkspertBlackRiskRule as $arrayOfMinimalVehicleValueInfoEkspertBlackRiskRuleMinimalVehicleValueInfoEkspertBlackRiskRuleItem) {
            // validation for constraint: itemType
            if (!$arrayOfMinimalVehicleValueInfoEkspertBlackRiskRuleMinimalVehicleValueInfoEkspertBlackRiskRuleItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\MinimalVehicleValueInfoEkspertBlackRiskRule) {
                throw new \InvalidArgumentException(sprintf('The MinimalVehicleValueInfoEkspertBlackRiskRule property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\MinimalVehicleValueInfoEkspertBlackRiskRule, "%s" given', is_object($arrayOfMinimalVehicleValueInfoEkspertBlackRiskRuleMinimalVehicleValueInfoEkspertBlackRiskRuleItem) ? get_class($arrayOfMinimalVehicleValueInfoEkspertBlackRiskRuleMinimalVehicleValueInfoEkspertBlackRiskRuleItem) : gettype($arrayOfMinimalVehicleValueInfoEkspertBlackRiskRuleMinimalVehicleValueInfoEkspertBlackRiskRuleItem)), __LINE__);
            }
        }
        if (is_null($minimalVehicleValueInfoEkspertBlackRiskRule) || (is_array($minimalVehicleValueInfoEkspertBlackRiskRule) && empty($minimalVehicleValueInfoEkspertBlackRiskRule))) {
            unset($this->MinimalVehicleValueInfoEkspertBlackRiskRule);
        } else {
            $this->MinimalVehicleValueInfoEkspertBlackRiskRule = $minimalVehicleValueInfoEkspertBlackRiskRule;
        }
        return $this;
    }
    /**
     * Add item to MinimalVehicleValueInfoEkspertBlackRiskRule value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MinimalVehicleValueInfoEkspertBlackRiskRule $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMinimalVehicleValueInfoEkspertBlackRiskRule
     */
    public function addToMinimalVehicleValueInfoEkspertBlackRiskRule(\Mu4ddi3\Compensa\Webservice\StructType\MinimalVehicleValueInfoEkspertBlackRiskRule $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\MinimalVehicleValueInfoEkspertBlackRiskRule) {
            throw new \InvalidArgumentException(sprintf('The MinimalVehicleValueInfoEkspertBlackRiskRule property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\MinimalVehicleValueInfoEkspertBlackRiskRule, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->MinimalVehicleValueInfoEkspertBlackRiskRule[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalVehicleValueInfoEkspertBlackRiskRule|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalVehicleValueInfoEkspertBlackRiskRule|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalVehicleValueInfoEkspertBlackRiskRule|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalVehicleValueInfoEkspertBlackRiskRule|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalVehicleValueInfoEkspertBlackRiskRule|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string MinimalVehicleValueInfoEkspertBlackRiskRule
     */
    public function getAttributeName()
    {
        return 'MinimalVehicleValueInfoEkspertBlackRiskRule';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMinimalVehicleValueInfoEkspertBlackRiskRule
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
