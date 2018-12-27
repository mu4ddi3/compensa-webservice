<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCentralBlackRiskRule ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfCentralBlackRiskRule
 * @subpackage Arrays
 */
class ArrayOfCentralBlackRiskRule extends AbstractStructArrayBase
{
    /**
     * The CentralBlackRiskRule
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\CentralBlackRiskRule[]
     */
    public $CentralBlackRiskRule;
    /**
     * Constructor method for ArrayOfCentralBlackRiskRule
     * @uses ArrayOfCentralBlackRiskRule::setCentralBlackRiskRule()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CentralBlackRiskRule[] $centralBlackRiskRule
     */
    public function __construct(array $centralBlackRiskRule = array())
    {
        $this
            ->setCentralBlackRiskRule($centralBlackRiskRule);
    }
    /**
     * Get CentralBlackRiskRule value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CentralBlackRiskRule[]|null
     */
    public function getCentralBlackRiskRule()
    {
        return isset($this->CentralBlackRiskRule) ? $this->CentralBlackRiskRule : null;
    }
    /**
     * Set CentralBlackRiskRule value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CentralBlackRiskRule[] $centralBlackRiskRule
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCentralBlackRiskRule
     */
    public function setCentralBlackRiskRule(array $centralBlackRiskRule = array())
    {
        foreach ($centralBlackRiskRule as $arrayOfCentralBlackRiskRuleCentralBlackRiskRuleItem) {
            // validation for constraint: itemType
            if (!$arrayOfCentralBlackRiskRuleCentralBlackRiskRuleItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\CentralBlackRiskRule) {
                throw new \InvalidArgumentException(sprintf('The CentralBlackRiskRule property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\CentralBlackRiskRule, "%s" given', is_object($arrayOfCentralBlackRiskRuleCentralBlackRiskRuleItem) ? get_class($arrayOfCentralBlackRiskRuleCentralBlackRiskRuleItem) : gettype($arrayOfCentralBlackRiskRuleCentralBlackRiskRuleItem)), __LINE__);
            }
        }
        if (is_null($centralBlackRiskRule) || (is_array($centralBlackRiskRule) && empty($centralBlackRiskRule))) {
            unset($this->CentralBlackRiskRule);
        } else {
            $this->CentralBlackRiskRule = $centralBlackRiskRule;
        }
        return $this;
    }
    /**
     * Add item to CentralBlackRiskRule value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CentralBlackRiskRule $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCentralBlackRiskRule
     */
    public function addToCentralBlackRiskRule(\Mu4ddi3\Compensa\Webservice\StructType\CentralBlackRiskRule $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\CentralBlackRiskRule) {
            throw new \InvalidArgumentException(sprintf('The CentralBlackRiskRule property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\CentralBlackRiskRule, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CentralBlackRiskRule[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CentralBlackRiskRule|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CentralBlackRiskRule|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CentralBlackRiskRule|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CentralBlackRiskRule|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CentralBlackRiskRule|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CentralBlackRiskRule
     */
    public function getAttributeName()
    {
        return 'CentralBlackRiskRule';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCentralBlackRiskRule
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
