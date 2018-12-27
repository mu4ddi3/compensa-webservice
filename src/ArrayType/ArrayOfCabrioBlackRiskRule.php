<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCabrioBlackRiskRule ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfCabrioBlackRiskRule
 * @subpackage Arrays
 */
class ArrayOfCabrioBlackRiskRule extends AbstractStructArrayBase
{
    /**
     * The CabrioBlackRiskRule
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\CabrioBlackRiskRule[]
     */
    public $CabrioBlackRiskRule;
    /**
     * Constructor method for ArrayOfCabrioBlackRiskRule
     * @uses ArrayOfCabrioBlackRiskRule::setCabrioBlackRiskRule()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CabrioBlackRiskRule[] $cabrioBlackRiskRule
     */
    public function __construct(array $cabrioBlackRiskRule = array())
    {
        $this
            ->setCabrioBlackRiskRule($cabrioBlackRiskRule);
    }
    /**
     * Get CabrioBlackRiskRule value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CabrioBlackRiskRule[]|null
     */
    public function getCabrioBlackRiskRule()
    {
        return isset($this->CabrioBlackRiskRule) ? $this->CabrioBlackRiskRule : null;
    }
    /**
     * Set CabrioBlackRiskRule value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CabrioBlackRiskRule[] $cabrioBlackRiskRule
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCabrioBlackRiskRule
     */
    public function setCabrioBlackRiskRule(array $cabrioBlackRiskRule = array())
    {
        foreach ($cabrioBlackRiskRule as $arrayOfCabrioBlackRiskRuleCabrioBlackRiskRuleItem) {
            // validation for constraint: itemType
            if (!$arrayOfCabrioBlackRiskRuleCabrioBlackRiskRuleItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\CabrioBlackRiskRule) {
                throw new \InvalidArgumentException(sprintf('The CabrioBlackRiskRule property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\CabrioBlackRiskRule, "%s" given', is_object($arrayOfCabrioBlackRiskRuleCabrioBlackRiskRuleItem) ? get_class($arrayOfCabrioBlackRiskRuleCabrioBlackRiskRuleItem) : gettype($arrayOfCabrioBlackRiskRuleCabrioBlackRiskRuleItem)), __LINE__);
            }
        }
        if (is_null($cabrioBlackRiskRule) || (is_array($cabrioBlackRiskRule) && empty($cabrioBlackRiskRule))) {
            unset($this->CabrioBlackRiskRule);
        } else {
            $this->CabrioBlackRiskRule = $cabrioBlackRiskRule;
        }
        return $this;
    }
    /**
     * Add item to CabrioBlackRiskRule value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CabrioBlackRiskRule $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCabrioBlackRiskRule
     */
    public function addToCabrioBlackRiskRule(\Mu4ddi3\Compensa\Webservice\StructType\CabrioBlackRiskRule $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\CabrioBlackRiskRule) {
            throw new \InvalidArgumentException(sprintf('The CabrioBlackRiskRule property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\CabrioBlackRiskRule, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CabrioBlackRiskRule[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CabrioBlackRiskRule|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CabrioBlackRiskRule|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CabrioBlackRiskRule|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CabrioBlackRiskRule|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CabrioBlackRiskRule|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CabrioBlackRiskRule
     */
    public function getAttributeName()
    {
        return 'CabrioBlackRiskRule';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCabrioBlackRiskRule
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
