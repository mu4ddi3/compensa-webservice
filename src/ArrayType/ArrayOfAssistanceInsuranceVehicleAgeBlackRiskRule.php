<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAssistanceInsuranceVehicleAgeBlackRiskRule
 * ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAssistanceInsuranceVehicleAgeBlackRiskRule
 * @subpackage Arrays
 */
class ArrayOfAssistanceInsuranceVehicleAgeBlackRiskRule extends AbstractStructArrayBase
{
    /**
     * The AssistanceInsuranceVehicleAgeBlackRiskRule
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\AssistanceInsuranceVehicleAgeBlackRiskRule[]
     */
    public $AssistanceInsuranceVehicleAgeBlackRiskRule;
    /**
     * Constructor method for ArrayOfAssistanceInsuranceVehicleAgeBlackRiskRule
     * @uses ArrayOfAssistanceInsuranceVehicleAgeBlackRiskRule::setAssistanceInsuranceVehicleAgeBlackRiskRule()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AssistanceInsuranceVehicleAgeBlackRiskRule[] $assistanceInsuranceVehicleAgeBlackRiskRule
     */
    public function __construct(array $assistanceInsuranceVehicleAgeBlackRiskRule = array())
    {
        $this
            ->setAssistanceInsuranceVehicleAgeBlackRiskRule($assistanceInsuranceVehicleAgeBlackRiskRule);
    }
    /**
     * Get AssistanceInsuranceVehicleAgeBlackRiskRule value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AssistanceInsuranceVehicleAgeBlackRiskRule[]|null
     */
    public function getAssistanceInsuranceVehicleAgeBlackRiskRule()
    {
        return isset($this->AssistanceInsuranceVehicleAgeBlackRiskRule) ? $this->AssistanceInsuranceVehicleAgeBlackRiskRule : null;
    }
    /**
     * Set AssistanceInsuranceVehicleAgeBlackRiskRule value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AssistanceInsuranceVehicleAgeBlackRiskRule[] $assistanceInsuranceVehicleAgeBlackRiskRule
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAssistanceInsuranceVehicleAgeBlackRiskRule
     */
    public function setAssistanceInsuranceVehicleAgeBlackRiskRule(array $assistanceInsuranceVehicleAgeBlackRiskRule = array())
    {
        foreach ($assistanceInsuranceVehicleAgeBlackRiskRule as $arrayOfAssistanceInsuranceVehicleAgeBlackRiskRuleAssistanceInsuranceVehicleAgeBlackRiskRuleItem) {
            // validation for constraint: itemType
            if (!$arrayOfAssistanceInsuranceVehicleAgeBlackRiskRuleAssistanceInsuranceVehicleAgeBlackRiskRuleItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\AssistanceInsuranceVehicleAgeBlackRiskRule) {
                throw new \InvalidArgumentException(sprintf('The AssistanceInsuranceVehicleAgeBlackRiskRule property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\AssistanceInsuranceVehicleAgeBlackRiskRule, "%s" given', is_object($arrayOfAssistanceInsuranceVehicleAgeBlackRiskRuleAssistanceInsuranceVehicleAgeBlackRiskRuleItem) ? get_class($arrayOfAssistanceInsuranceVehicleAgeBlackRiskRuleAssistanceInsuranceVehicleAgeBlackRiskRuleItem) : gettype($arrayOfAssistanceInsuranceVehicleAgeBlackRiskRuleAssistanceInsuranceVehicleAgeBlackRiskRuleItem)), __LINE__);
            }
        }
        if (is_null($assistanceInsuranceVehicleAgeBlackRiskRule) || (is_array($assistanceInsuranceVehicleAgeBlackRiskRule) && empty($assistanceInsuranceVehicleAgeBlackRiskRule))) {
            unset($this->AssistanceInsuranceVehicleAgeBlackRiskRule);
        } else {
            $this->AssistanceInsuranceVehicleAgeBlackRiskRule = $assistanceInsuranceVehicleAgeBlackRiskRule;
        }
        return $this;
    }
    /**
     * Add item to AssistanceInsuranceVehicleAgeBlackRiskRule value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AssistanceInsuranceVehicleAgeBlackRiskRule $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAssistanceInsuranceVehicleAgeBlackRiskRule
     */
    public function addToAssistanceInsuranceVehicleAgeBlackRiskRule(\Mu4ddi3\Compensa\Webservice\StructType\AssistanceInsuranceVehicleAgeBlackRiskRule $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\AssistanceInsuranceVehicleAgeBlackRiskRule) {
            throw new \InvalidArgumentException(sprintf('The AssistanceInsuranceVehicleAgeBlackRiskRule property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\AssistanceInsuranceVehicleAgeBlackRiskRule, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AssistanceInsuranceVehicleAgeBlackRiskRule[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AssistanceInsuranceVehicleAgeBlackRiskRule|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AssistanceInsuranceVehicleAgeBlackRiskRule|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AssistanceInsuranceVehicleAgeBlackRiskRule|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AssistanceInsuranceVehicleAgeBlackRiskRule|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AssistanceInsuranceVehicleAgeBlackRiskRule|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AssistanceInsuranceVehicleAgeBlackRiskRule
     */
    public function getAttributeName()
    {
        return 'AssistanceInsuranceVehicleAgeBlackRiskRule';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAssistanceInsuranceVehicleAgeBlackRiskRule
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
