<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAcInsuranceVehicleAgeBlackRiskRule ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAcInsuranceVehicleAgeBlackRiskRule
 * @subpackage Arrays
 */
class ArrayOfAcInsuranceVehicleAgeBlackRiskRule extends AbstractStructArrayBase
{
    /**
     * The AcInsuranceVehicleAgeBlackRiskRule
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\AcInsuranceVehicleAgeBlackRiskRule[]
     */
    public $AcInsuranceVehicleAgeBlackRiskRule;
    /**
     * Constructor method for ArrayOfAcInsuranceVehicleAgeBlackRiskRule
     * @uses ArrayOfAcInsuranceVehicleAgeBlackRiskRule::setAcInsuranceVehicleAgeBlackRiskRule()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AcInsuranceVehicleAgeBlackRiskRule[] $acInsuranceVehicleAgeBlackRiskRule
     */
    public function __construct(array $acInsuranceVehicleAgeBlackRiskRule = array())
    {
        $this
            ->setAcInsuranceVehicleAgeBlackRiskRule($acInsuranceVehicleAgeBlackRiskRule);
    }
    /**
     * Get AcInsuranceVehicleAgeBlackRiskRule value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AcInsuranceVehicleAgeBlackRiskRule[]|null
     */
    public function getAcInsuranceVehicleAgeBlackRiskRule()
    {
        return isset($this->AcInsuranceVehicleAgeBlackRiskRule) ? $this->AcInsuranceVehicleAgeBlackRiskRule : null;
    }
    /**
     * Set AcInsuranceVehicleAgeBlackRiskRule value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AcInsuranceVehicleAgeBlackRiskRule[] $acInsuranceVehicleAgeBlackRiskRule
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAcInsuranceVehicleAgeBlackRiskRule
     */
    public function setAcInsuranceVehicleAgeBlackRiskRule(array $acInsuranceVehicleAgeBlackRiskRule = array())
    {
        foreach ($acInsuranceVehicleAgeBlackRiskRule as $arrayOfAcInsuranceVehicleAgeBlackRiskRuleAcInsuranceVehicleAgeBlackRiskRuleItem) {
            // validation for constraint: itemType
            if (!$arrayOfAcInsuranceVehicleAgeBlackRiskRuleAcInsuranceVehicleAgeBlackRiskRuleItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\AcInsuranceVehicleAgeBlackRiskRule) {
                throw new \InvalidArgumentException(sprintf('The AcInsuranceVehicleAgeBlackRiskRule property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\AcInsuranceVehicleAgeBlackRiskRule, "%s" given', is_object($arrayOfAcInsuranceVehicleAgeBlackRiskRuleAcInsuranceVehicleAgeBlackRiskRuleItem) ? get_class($arrayOfAcInsuranceVehicleAgeBlackRiskRuleAcInsuranceVehicleAgeBlackRiskRuleItem) : gettype($arrayOfAcInsuranceVehicleAgeBlackRiskRuleAcInsuranceVehicleAgeBlackRiskRuleItem)), __LINE__);
            }
        }
        if (is_null($acInsuranceVehicleAgeBlackRiskRule) || (is_array($acInsuranceVehicleAgeBlackRiskRule) && empty($acInsuranceVehicleAgeBlackRiskRule))) {
            unset($this->AcInsuranceVehicleAgeBlackRiskRule);
        } else {
            $this->AcInsuranceVehicleAgeBlackRiskRule = $acInsuranceVehicleAgeBlackRiskRule;
        }
        return $this;
    }
    /**
     * Add item to AcInsuranceVehicleAgeBlackRiskRule value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AcInsuranceVehicleAgeBlackRiskRule $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAcInsuranceVehicleAgeBlackRiskRule
     */
    public function addToAcInsuranceVehicleAgeBlackRiskRule(\Mu4ddi3\Compensa\Webservice\StructType\AcInsuranceVehicleAgeBlackRiskRule $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\AcInsuranceVehicleAgeBlackRiskRule) {
            throw new \InvalidArgumentException(sprintf('The AcInsuranceVehicleAgeBlackRiskRule property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\AcInsuranceVehicleAgeBlackRiskRule, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AcInsuranceVehicleAgeBlackRiskRule[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AcInsuranceVehicleAgeBlackRiskRule|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AcInsuranceVehicleAgeBlackRiskRule|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AcInsuranceVehicleAgeBlackRiskRule|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AcInsuranceVehicleAgeBlackRiskRule|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AcInsuranceVehicleAgeBlackRiskRule|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AcInsuranceVehicleAgeBlackRiskRule
     */
    public function getAttributeName()
    {
        return 'AcInsuranceVehicleAgeBlackRiskRule';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAcInsuranceVehicleAgeBlackRiskRule
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
