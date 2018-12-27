<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for
 * ArrayOfMinimalVehicleValueOtherThanInfoEkspertBlackRiskRule ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfMinimalVehicleValueOtherThanInfoEkspertBlackRiskRule
 * @subpackage Arrays
 */
class ArrayOfMinimalVehicleValueOtherThanInfoEkspertBlackRiskRule extends AbstractStructArrayBase
{
    /**
     * The MinimalVehicleValueOtherThanInfoEkspertBlackRiskRule
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MinimalVehicleValueOtherThanInfoEkspertBlackRiskRule[]
     */
    public $MinimalVehicleValueOtherThanInfoEkspertBlackRiskRule;
    /**
     * Constructor method for
     * ArrayOfMinimalVehicleValueOtherThanInfoEkspertBlackRiskRule
     * @uses ArrayOfMinimalVehicleValueOtherThanInfoEkspertBlackRiskRule::setMinimalVehicleValueOtherThanInfoEkspertBlackRiskRule()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MinimalVehicleValueOtherThanInfoEkspertBlackRiskRule[] $minimalVehicleValueOtherThanInfoEkspertBlackRiskRule
     */
    public function __construct(array $minimalVehicleValueOtherThanInfoEkspertBlackRiskRule = array())
    {
        $this
            ->setMinimalVehicleValueOtherThanInfoEkspertBlackRiskRule($minimalVehicleValueOtherThanInfoEkspertBlackRiskRule);
    }
    /**
     * Get MinimalVehicleValueOtherThanInfoEkspertBlackRiskRule value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalVehicleValueOtherThanInfoEkspertBlackRiskRule[]|null
     */
    public function getMinimalVehicleValueOtherThanInfoEkspertBlackRiskRule()
    {
        return isset($this->MinimalVehicleValueOtherThanInfoEkspertBlackRiskRule) ? $this->MinimalVehicleValueOtherThanInfoEkspertBlackRiskRule : null;
    }
    /**
     * Set MinimalVehicleValueOtherThanInfoEkspertBlackRiskRule value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MinimalVehicleValueOtherThanInfoEkspertBlackRiskRule[] $minimalVehicleValueOtherThanInfoEkspertBlackRiskRule
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMinimalVehicleValueOtherThanInfoEkspertBlackRiskRule
     */
    public function setMinimalVehicleValueOtherThanInfoEkspertBlackRiskRule(array $minimalVehicleValueOtherThanInfoEkspertBlackRiskRule = array())
    {
        foreach ($minimalVehicleValueOtherThanInfoEkspertBlackRiskRule as $arrayOfMinimalVehicleValueOtherThanInfoEkspertBlackRiskRuleMinimalVehicleValueOtherThanInfoEkspertBlackRiskRuleItem) {
            // validation for constraint: itemType
            if (!$arrayOfMinimalVehicleValueOtherThanInfoEkspertBlackRiskRuleMinimalVehicleValueOtherThanInfoEkspertBlackRiskRuleItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\MinimalVehicleValueOtherThanInfoEkspertBlackRiskRule) {
                throw new \InvalidArgumentException(sprintf('The MinimalVehicleValueOtherThanInfoEkspertBlackRiskRule property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\MinimalVehicleValueOtherThanInfoEkspertBlackRiskRule, "%s" given', is_object($arrayOfMinimalVehicleValueOtherThanInfoEkspertBlackRiskRuleMinimalVehicleValueOtherThanInfoEkspertBlackRiskRuleItem) ? get_class($arrayOfMinimalVehicleValueOtherThanInfoEkspertBlackRiskRuleMinimalVehicleValueOtherThanInfoEkspertBlackRiskRuleItem) : gettype($arrayOfMinimalVehicleValueOtherThanInfoEkspertBlackRiskRuleMinimalVehicleValueOtherThanInfoEkspertBlackRiskRuleItem)), __LINE__);
            }
        }
        if (is_null($minimalVehicleValueOtherThanInfoEkspertBlackRiskRule) || (is_array($minimalVehicleValueOtherThanInfoEkspertBlackRiskRule) && empty($minimalVehicleValueOtherThanInfoEkspertBlackRiskRule))) {
            unset($this->MinimalVehicleValueOtherThanInfoEkspertBlackRiskRule);
        } else {
            $this->MinimalVehicleValueOtherThanInfoEkspertBlackRiskRule = $minimalVehicleValueOtherThanInfoEkspertBlackRiskRule;
        }
        return $this;
    }
    /**
     * Add item to MinimalVehicleValueOtherThanInfoEkspertBlackRiskRule value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MinimalVehicleValueOtherThanInfoEkspertBlackRiskRule $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMinimalVehicleValueOtherThanInfoEkspertBlackRiskRule
     */
    public function addToMinimalVehicleValueOtherThanInfoEkspertBlackRiskRule(\Mu4ddi3\Compensa\Webservice\StructType\MinimalVehicleValueOtherThanInfoEkspertBlackRiskRule $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\MinimalVehicleValueOtherThanInfoEkspertBlackRiskRule) {
            throw new \InvalidArgumentException(sprintf('The MinimalVehicleValueOtherThanInfoEkspertBlackRiskRule property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\MinimalVehicleValueOtherThanInfoEkspertBlackRiskRule, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->MinimalVehicleValueOtherThanInfoEkspertBlackRiskRule[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalVehicleValueOtherThanInfoEkspertBlackRiskRule|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalVehicleValueOtherThanInfoEkspertBlackRiskRule|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalVehicleValueOtherThanInfoEkspertBlackRiskRule|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalVehicleValueOtherThanInfoEkspertBlackRiskRule|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalVehicleValueOtherThanInfoEkspertBlackRiskRule|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string MinimalVehicleValueOtherThanInfoEkspertBlackRiskRule
     */
    public function getAttributeName()
    {
        return 'MinimalVehicleValueOtherThanInfoEkspertBlackRiskRule';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMinimalVehicleValueOtherThanInfoEkspertBlackRiskRule
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
