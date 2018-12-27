<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDeductibleVariantVehicleAgeBlackRiskRule ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfDeductibleVariantVehicleAgeBlackRiskRule
 * @subpackage Arrays
 */
class ArrayOfDeductibleVariantVehicleAgeBlackRiskRule extends AbstractStructArrayBase
{
    /**
     * The DeductibleVariantVehicleAgeBlackRiskRule
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\DeductibleVariantVehicleAgeBlackRiskRule[]
     */
    public $DeductibleVariantVehicleAgeBlackRiskRule;
    /**
     * Constructor method for ArrayOfDeductibleVariantVehicleAgeBlackRiskRule
     * @uses ArrayOfDeductibleVariantVehicleAgeBlackRiskRule::setDeductibleVariantVehicleAgeBlackRiskRule()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\DeductibleVariantVehicleAgeBlackRiskRule[] $deductibleVariantVehicleAgeBlackRiskRule
     */
    public function __construct(array $deductibleVariantVehicleAgeBlackRiskRule = array())
    {
        $this
            ->setDeductibleVariantVehicleAgeBlackRiskRule($deductibleVariantVehicleAgeBlackRiskRule);
    }
    /**
     * Get DeductibleVariantVehicleAgeBlackRiskRule value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DeductibleVariantVehicleAgeBlackRiskRule[]|null
     */
    public function getDeductibleVariantVehicleAgeBlackRiskRule()
    {
        return isset($this->DeductibleVariantVehicleAgeBlackRiskRule) ? $this->DeductibleVariantVehicleAgeBlackRiskRule : null;
    }
    /**
     * Set DeductibleVariantVehicleAgeBlackRiskRule value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\DeductibleVariantVehicleAgeBlackRiskRule[] $deductibleVariantVehicleAgeBlackRiskRule
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDeductibleVariantVehicleAgeBlackRiskRule
     */
    public function setDeductibleVariantVehicleAgeBlackRiskRule(array $deductibleVariantVehicleAgeBlackRiskRule = array())
    {
        foreach ($deductibleVariantVehicleAgeBlackRiskRule as $arrayOfDeductibleVariantVehicleAgeBlackRiskRuleDeductibleVariantVehicleAgeBlackRiskRuleItem) {
            // validation for constraint: itemType
            if (!$arrayOfDeductibleVariantVehicleAgeBlackRiskRuleDeductibleVariantVehicleAgeBlackRiskRuleItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\DeductibleVariantVehicleAgeBlackRiskRule) {
                throw new \InvalidArgumentException(sprintf('The DeductibleVariantVehicleAgeBlackRiskRule property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\DeductibleVariantVehicleAgeBlackRiskRule, "%s" given', is_object($arrayOfDeductibleVariantVehicleAgeBlackRiskRuleDeductibleVariantVehicleAgeBlackRiskRuleItem) ? get_class($arrayOfDeductibleVariantVehicleAgeBlackRiskRuleDeductibleVariantVehicleAgeBlackRiskRuleItem) : gettype($arrayOfDeductibleVariantVehicleAgeBlackRiskRuleDeductibleVariantVehicleAgeBlackRiskRuleItem)), __LINE__);
            }
        }
        if (is_null($deductibleVariantVehicleAgeBlackRiskRule) || (is_array($deductibleVariantVehicleAgeBlackRiskRule) && empty($deductibleVariantVehicleAgeBlackRiskRule))) {
            unset($this->DeductibleVariantVehicleAgeBlackRiskRule);
        } else {
            $this->DeductibleVariantVehicleAgeBlackRiskRule = $deductibleVariantVehicleAgeBlackRiskRule;
        }
        return $this;
    }
    /**
     * Add item to DeductibleVariantVehicleAgeBlackRiskRule value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\DeductibleVariantVehicleAgeBlackRiskRule $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDeductibleVariantVehicleAgeBlackRiskRule
     */
    public function addToDeductibleVariantVehicleAgeBlackRiskRule(\Mu4ddi3\Compensa\Webservice\StructType\DeductibleVariantVehicleAgeBlackRiskRule $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\DeductibleVariantVehicleAgeBlackRiskRule) {
            throw new \InvalidArgumentException(sprintf('The DeductibleVariantVehicleAgeBlackRiskRule property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\DeductibleVariantVehicleAgeBlackRiskRule, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DeductibleVariantVehicleAgeBlackRiskRule[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DeductibleVariantVehicleAgeBlackRiskRule|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DeductibleVariantVehicleAgeBlackRiskRule|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DeductibleVariantVehicleAgeBlackRiskRule|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DeductibleVariantVehicleAgeBlackRiskRule|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DeductibleVariantVehicleAgeBlackRiskRule|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DeductibleVariantVehicleAgeBlackRiskRule
     */
    public function getAttributeName()
    {
        return 'DeductibleVariantVehicleAgeBlackRiskRule';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDeductibleVariantVehicleAgeBlackRiskRule
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
