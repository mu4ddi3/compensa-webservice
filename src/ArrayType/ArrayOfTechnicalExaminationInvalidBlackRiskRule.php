<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTechnicalExaminationInvalidBlackRiskRule ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfTechnicalExaminationInvalidBlackRiskRule
 * @subpackage Arrays
 */
class ArrayOfTechnicalExaminationInvalidBlackRiskRule extends AbstractStructArrayBase
{
    /**
     * The TechnicalExaminationInvalidBlackRiskRule
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\TechnicalExaminationInvalidBlackRiskRule[]
     */
    public $TechnicalExaminationInvalidBlackRiskRule;
    /**
     * Constructor method for ArrayOfTechnicalExaminationInvalidBlackRiskRule
     * @uses ArrayOfTechnicalExaminationInvalidBlackRiskRule::setTechnicalExaminationInvalidBlackRiskRule()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\TechnicalExaminationInvalidBlackRiskRule[] $technicalExaminationInvalidBlackRiskRule
     */
    public function __construct(array $technicalExaminationInvalidBlackRiskRule = array())
    {
        $this
            ->setTechnicalExaminationInvalidBlackRiskRule($technicalExaminationInvalidBlackRiskRule);
    }
    /**
     * Get TechnicalExaminationInvalidBlackRiskRule value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\TechnicalExaminationInvalidBlackRiskRule[]|null
     */
    public function getTechnicalExaminationInvalidBlackRiskRule()
    {
        return isset($this->TechnicalExaminationInvalidBlackRiskRule) ? $this->TechnicalExaminationInvalidBlackRiskRule : null;
    }
    /**
     * Set TechnicalExaminationInvalidBlackRiskRule value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\TechnicalExaminationInvalidBlackRiskRule[] $technicalExaminationInvalidBlackRiskRule
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTechnicalExaminationInvalidBlackRiskRule
     */
    public function setTechnicalExaminationInvalidBlackRiskRule(array $technicalExaminationInvalidBlackRiskRule = array())
    {
        foreach ($technicalExaminationInvalidBlackRiskRule as $arrayOfTechnicalExaminationInvalidBlackRiskRuleTechnicalExaminationInvalidBlackRiskRuleItem) {
            // validation for constraint: itemType
            if (!$arrayOfTechnicalExaminationInvalidBlackRiskRuleTechnicalExaminationInvalidBlackRiskRuleItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\TechnicalExaminationInvalidBlackRiskRule) {
                throw new \InvalidArgumentException(sprintf('The TechnicalExaminationInvalidBlackRiskRule property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\TechnicalExaminationInvalidBlackRiskRule, "%s" given', is_object($arrayOfTechnicalExaminationInvalidBlackRiskRuleTechnicalExaminationInvalidBlackRiskRuleItem) ? get_class($arrayOfTechnicalExaminationInvalidBlackRiskRuleTechnicalExaminationInvalidBlackRiskRuleItem) : gettype($arrayOfTechnicalExaminationInvalidBlackRiskRuleTechnicalExaminationInvalidBlackRiskRuleItem)), __LINE__);
            }
        }
        if (is_null($technicalExaminationInvalidBlackRiskRule) || (is_array($technicalExaminationInvalidBlackRiskRule) && empty($technicalExaminationInvalidBlackRiskRule))) {
            unset($this->TechnicalExaminationInvalidBlackRiskRule);
        } else {
            $this->TechnicalExaminationInvalidBlackRiskRule = $technicalExaminationInvalidBlackRiskRule;
        }
        return $this;
    }
    /**
     * Add item to TechnicalExaminationInvalidBlackRiskRule value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\TechnicalExaminationInvalidBlackRiskRule $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTechnicalExaminationInvalidBlackRiskRule
     */
    public function addToTechnicalExaminationInvalidBlackRiskRule(\Mu4ddi3\Compensa\Webservice\StructType\TechnicalExaminationInvalidBlackRiskRule $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\TechnicalExaminationInvalidBlackRiskRule) {
            throw new \InvalidArgumentException(sprintf('The TechnicalExaminationInvalidBlackRiskRule property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\TechnicalExaminationInvalidBlackRiskRule, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TechnicalExaminationInvalidBlackRiskRule[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\TechnicalExaminationInvalidBlackRiskRule|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\TechnicalExaminationInvalidBlackRiskRule|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\TechnicalExaminationInvalidBlackRiskRule|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\TechnicalExaminationInvalidBlackRiskRule|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\TechnicalExaminationInvalidBlackRiskRule|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TechnicalExaminationInvalidBlackRiskRule
     */
    public function getAttributeName()
    {
        return 'TechnicalExaminationInvalidBlackRiskRule';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTechnicalExaminationInvalidBlackRiskRule
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
