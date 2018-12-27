<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAssistanceInsuranceBlackRiskRule ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAssistanceInsuranceBlackRiskRule
 * @subpackage Arrays
 */
class ArrayOfAssistanceInsuranceBlackRiskRule extends AbstractStructArrayBase
{
    /**
     * The AssistanceInsuranceBlackRiskRule
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\AssistanceInsuranceBlackRiskRule[]
     */
    public $AssistanceInsuranceBlackRiskRule;
    /**
     * Constructor method for ArrayOfAssistanceInsuranceBlackRiskRule
     * @uses ArrayOfAssistanceInsuranceBlackRiskRule::setAssistanceInsuranceBlackRiskRule()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AssistanceInsuranceBlackRiskRule[] $assistanceInsuranceBlackRiskRule
     */
    public function __construct(array $assistanceInsuranceBlackRiskRule = array())
    {
        $this
            ->setAssistanceInsuranceBlackRiskRule($assistanceInsuranceBlackRiskRule);
    }
    /**
     * Get AssistanceInsuranceBlackRiskRule value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AssistanceInsuranceBlackRiskRule[]|null
     */
    public function getAssistanceInsuranceBlackRiskRule()
    {
        return isset($this->AssistanceInsuranceBlackRiskRule) ? $this->AssistanceInsuranceBlackRiskRule : null;
    }
    /**
     * Set AssistanceInsuranceBlackRiskRule value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AssistanceInsuranceBlackRiskRule[] $assistanceInsuranceBlackRiskRule
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAssistanceInsuranceBlackRiskRule
     */
    public function setAssistanceInsuranceBlackRiskRule(array $assistanceInsuranceBlackRiskRule = array())
    {
        foreach ($assistanceInsuranceBlackRiskRule as $arrayOfAssistanceInsuranceBlackRiskRuleAssistanceInsuranceBlackRiskRuleItem) {
            // validation for constraint: itemType
            if (!$arrayOfAssistanceInsuranceBlackRiskRuleAssistanceInsuranceBlackRiskRuleItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\AssistanceInsuranceBlackRiskRule) {
                throw new \InvalidArgumentException(sprintf('The AssistanceInsuranceBlackRiskRule property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\AssistanceInsuranceBlackRiskRule, "%s" given', is_object($arrayOfAssistanceInsuranceBlackRiskRuleAssistanceInsuranceBlackRiskRuleItem) ? get_class($arrayOfAssistanceInsuranceBlackRiskRuleAssistanceInsuranceBlackRiskRuleItem) : gettype($arrayOfAssistanceInsuranceBlackRiskRuleAssistanceInsuranceBlackRiskRuleItem)), __LINE__);
            }
        }
        if (is_null($assistanceInsuranceBlackRiskRule) || (is_array($assistanceInsuranceBlackRiskRule) && empty($assistanceInsuranceBlackRiskRule))) {
            unset($this->AssistanceInsuranceBlackRiskRule);
        } else {
            $this->AssistanceInsuranceBlackRiskRule = $assistanceInsuranceBlackRiskRule;
        }
        return $this;
    }
    /**
     * Add item to AssistanceInsuranceBlackRiskRule value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AssistanceInsuranceBlackRiskRule $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAssistanceInsuranceBlackRiskRule
     */
    public function addToAssistanceInsuranceBlackRiskRule(\Mu4ddi3\Compensa\Webservice\StructType\AssistanceInsuranceBlackRiskRule $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\AssistanceInsuranceBlackRiskRule) {
            throw new \InvalidArgumentException(sprintf('The AssistanceInsuranceBlackRiskRule property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\AssistanceInsuranceBlackRiskRule, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AssistanceInsuranceBlackRiskRule[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AssistanceInsuranceBlackRiskRule|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AssistanceInsuranceBlackRiskRule|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AssistanceInsuranceBlackRiskRule|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AssistanceInsuranceBlackRiskRule|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AssistanceInsuranceBlackRiskRule|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AssistanceInsuranceBlackRiskRule
     */
    public function getAttributeName()
    {
        return 'AssistanceInsuranceBlackRiskRule';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAssistanceInsuranceBlackRiskRule
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
