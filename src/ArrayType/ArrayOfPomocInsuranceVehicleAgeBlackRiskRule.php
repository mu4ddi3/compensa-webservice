<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPomocInsuranceVehicleAgeBlackRiskRule ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPomocInsuranceVehicleAgeBlackRiskRule
 * @subpackage Arrays
 */
class ArrayOfPomocInsuranceVehicleAgeBlackRiskRule extends AbstractStructArrayBase
{
    /**
     * The PomocInsuranceVehicleAgeBlackRiskRule
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PomocInsuranceVehicleAgeBlackRiskRule[]
     */
    public $PomocInsuranceVehicleAgeBlackRiskRule;
    /**
     * Constructor method for ArrayOfPomocInsuranceVehicleAgeBlackRiskRule
     * @uses ArrayOfPomocInsuranceVehicleAgeBlackRiskRule::setPomocInsuranceVehicleAgeBlackRiskRule()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PomocInsuranceVehicleAgeBlackRiskRule[] $pomocInsuranceVehicleAgeBlackRiskRule
     */
    public function __construct(array $pomocInsuranceVehicleAgeBlackRiskRule = array())
    {
        $this
            ->setPomocInsuranceVehicleAgeBlackRiskRule($pomocInsuranceVehicleAgeBlackRiskRule);
    }
    /**
     * Get PomocInsuranceVehicleAgeBlackRiskRule value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PomocInsuranceVehicleAgeBlackRiskRule[]|null
     */
    public function getPomocInsuranceVehicleAgeBlackRiskRule()
    {
        return isset($this->PomocInsuranceVehicleAgeBlackRiskRule) ? $this->PomocInsuranceVehicleAgeBlackRiskRule : null;
    }
    /**
     * Set PomocInsuranceVehicleAgeBlackRiskRule value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PomocInsuranceVehicleAgeBlackRiskRule[] $pomocInsuranceVehicleAgeBlackRiskRule
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPomocInsuranceVehicleAgeBlackRiskRule
     */
    public function setPomocInsuranceVehicleAgeBlackRiskRule(array $pomocInsuranceVehicleAgeBlackRiskRule = array())
    {
        foreach ($pomocInsuranceVehicleAgeBlackRiskRule as $arrayOfPomocInsuranceVehicleAgeBlackRiskRulePomocInsuranceVehicleAgeBlackRiskRuleItem) {
            // validation for constraint: itemType
            if (!$arrayOfPomocInsuranceVehicleAgeBlackRiskRulePomocInsuranceVehicleAgeBlackRiskRuleItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\PomocInsuranceVehicleAgeBlackRiskRule) {
                throw new \InvalidArgumentException(sprintf('The PomocInsuranceVehicleAgeBlackRiskRule property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\PomocInsuranceVehicleAgeBlackRiskRule, "%s" given', is_object($arrayOfPomocInsuranceVehicleAgeBlackRiskRulePomocInsuranceVehicleAgeBlackRiskRuleItem) ? get_class($arrayOfPomocInsuranceVehicleAgeBlackRiskRulePomocInsuranceVehicleAgeBlackRiskRuleItem) : gettype($arrayOfPomocInsuranceVehicleAgeBlackRiskRulePomocInsuranceVehicleAgeBlackRiskRuleItem)), __LINE__);
            }
        }
        if (is_null($pomocInsuranceVehicleAgeBlackRiskRule) || (is_array($pomocInsuranceVehicleAgeBlackRiskRule) && empty($pomocInsuranceVehicleAgeBlackRiskRule))) {
            unset($this->PomocInsuranceVehicleAgeBlackRiskRule);
        } else {
            $this->PomocInsuranceVehicleAgeBlackRiskRule = $pomocInsuranceVehicleAgeBlackRiskRule;
        }
        return $this;
    }
    /**
     * Add item to PomocInsuranceVehicleAgeBlackRiskRule value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PomocInsuranceVehicleAgeBlackRiskRule $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPomocInsuranceVehicleAgeBlackRiskRule
     */
    public function addToPomocInsuranceVehicleAgeBlackRiskRule(\Mu4ddi3\Compensa\Webservice\StructType\PomocInsuranceVehicleAgeBlackRiskRule $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\PomocInsuranceVehicleAgeBlackRiskRule) {
            throw new \InvalidArgumentException(sprintf('The PomocInsuranceVehicleAgeBlackRiskRule property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\PomocInsuranceVehicleAgeBlackRiskRule, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PomocInsuranceVehicleAgeBlackRiskRule[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PomocInsuranceVehicleAgeBlackRiskRule|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PomocInsuranceVehicleAgeBlackRiskRule|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PomocInsuranceVehicleAgeBlackRiskRule|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PomocInsuranceVehicleAgeBlackRiskRule|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PomocInsuranceVehicleAgeBlackRiskRule|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PomocInsuranceVehicleAgeBlackRiskRule
     */
    public function getAttributeName()
    {
        return 'PomocInsuranceVehicleAgeBlackRiskRule';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPomocInsuranceVehicleAgeBlackRiskRule
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
