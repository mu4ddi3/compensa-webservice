<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfUnusualVehicleUsageBlackRiskRule ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfUnusualVehicleUsageBlackRiskRule
 * @subpackage Arrays
 */
class ArrayOfUnusualVehicleUsageBlackRiskRule extends AbstractStructArrayBase
{
    /**
     * The UnusualVehicleUsageBlackRiskRule
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\UnusualVehicleUsageBlackRiskRule[]
     */
    public $UnusualVehicleUsageBlackRiskRule;
    /**
     * Constructor method for ArrayOfUnusualVehicleUsageBlackRiskRule
     * @uses ArrayOfUnusualVehicleUsageBlackRiskRule::setUnusualVehicleUsageBlackRiskRule()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\UnusualVehicleUsageBlackRiskRule[] $unusualVehicleUsageBlackRiskRule
     */
    public function __construct(array $unusualVehicleUsageBlackRiskRule = array())
    {
        $this
            ->setUnusualVehicleUsageBlackRiskRule($unusualVehicleUsageBlackRiskRule);
    }
    /**
     * Get UnusualVehicleUsageBlackRiskRule value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UnusualVehicleUsageBlackRiskRule[]|null
     */
    public function getUnusualVehicleUsageBlackRiskRule()
    {
        return isset($this->UnusualVehicleUsageBlackRiskRule) ? $this->UnusualVehicleUsageBlackRiskRule : null;
    }
    /**
     * Set UnusualVehicleUsageBlackRiskRule value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\UnusualVehicleUsageBlackRiskRule[] $unusualVehicleUsageBlackRiskRule
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfUnusualVehicleUsageBlackRiskRule
     */
    public function setUnusualVehicleUsageBlackRiskRule(array $unusualVehicleUsageBlackRiskRule = array())
    {
        foreach ($unusualVehicleUsageBlackRiskRule as $arrayOfUnusualVehicleUsageBlackRiskRuleUnusualVehicleUsageBlackRiskRuleItem) {
            // validation for constraint: itemType
            if (!$arrayOfUnusualVehicleUsageBlackRiskRuleUnusualVehicleUsageBlackRiskRuleItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\UnusualVehicleUsageBlackRiskRule) {
                throw new \InvalidArgumentException(sprintf('The UnusualVehicleUsageBlackRiskRule property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\UnusualVehicleUsageBlackRiskRule, "%s" given', is_object($arrayOfUnusualVehicleUsageBlackRiskRuleUnusualVehicleUsageBlackRiskRuleItem) ? get_class($arrayOfUnusualVehicleUsageBlackRiskRuleUnusualVehicleUsageBlackRiskRuleItem) : gettype($arrayOfUnusualVehicleUsageBlackRiskRuleUnusualVehicleUsageBlackRiskRuleItem)), __LINE__);
            }
        }
        if (is_null($unusualVehicleUsageBlackRiskRule) || (is_array($unusualVehicleUsageBlackRiskRule) && empty($unusualVehicleUsageBlackRiskRule))) {
            unset($this->UnusualVehicleUsageBlackRiskRule);
        } else {
            $this->UnusualVehicleUsageBlackRiskRule = $unusualVehicleUsageBlackRiskRule;
        }
        return $this;
    }
    /**
     * Add item to UnusualVehicleUsageBlackRiskRule value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\UnusualVehicleUsageBlackRiskRule $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfUnusualVehicleUsageBlackRiskRule
     */
    public function addToUnusualVehicleUsageBlackRiskRule(\Mu4ddi3\Compensa\Webservice\StructType\UnusualVehicleUsageBlackRiskRule $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\UnusualVehicleUsageBlackRiskRule) {
            throw new \InvalidArgumentException(sprintf('The UnusualVehicleUsageBlackRiskRule property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\UnusualVehicleUsageBlackRiskRule, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->UnusualVehicleUsageBlackRiskRule[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UnusualVehicleUsageBlackRiskRule|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UnusualVehicleUsageBlackRiskRule|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UnusualVehicleUsageBlackRiskRule|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UnusualVehicleUsageBlackRiskRule|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UnusualVehicleUsageBlackRiskRule|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string UnusualVehicleUsageBlackRiskRule
     */
    public function getAttributeName()
    {
        return 'UnusualVehicleUsageBlackRiskRule';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfUnusualVehicleUsageBlackRiskRule
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
