<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfLeasingCorrectionRule ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfLeasingCorrectionRule
 * @subpackage Arrays
 */
class ArrayOfLeasingCorrectionRule extends AbstractStructArrayBase
{
    /**
     * The LeasingCorrectionRule
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\LeasingCorrectionRule[]
     */
    public $LeasingCorrectionRule;
    /**
     * Constructor method for ArrayOfLeasingCorrectionRule
     * @uses ArrayOfLeasingCorrectionRule::setLeasingCorrectionRule()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\LeasingCorrectionRule[] $leasingCorrectionRule
     */
    public function __construct(array $leasingCorrectionRule = array())
    {
        $this
            ->setLeasingCorrectionRule($leasingCorrectionRule);
    }
    /**
     * Get LeasingCorrectionRule value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\LeasingCorrectionRule[]|null
     */
    public function getLeasingCorrectionRule()
    {
        return isset($this->LeasingCorrectionRule) ? $this->LeasingCorrectionRule : null;
    }
    /**
     * Set LeasingCorrectionRule value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\LeasingCorrectionRule[] $leasingCorrectionRule
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfLeasingCorrectionRule
     */
    public function setLeasingCorrectionRule(array $leasingCorrectionRule = array())
    {
        foreach ($leasingCorrectionRule as $arrayOfLeasingCorrectionRuleLeasingCorrectionRuleItem) {
            // validation for constraint: itemType
            if (!$arrayOfLeasingCorrectionRuleLeasingCorrectionRuleItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\LeasingCorrectionRule) {
                throw new \InvalidArgumentException(sprintf('The LeasingCorrectionRule property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\LeasingCorrectionRule, "%s" given', is_object($arrayOfLeasingCorrectionRuleLeasingCorrectionRuleItem) ? get_class($arrayOfLeasingCorrectionRuleLeasingCorrectionRuleItem) : gettype($arrayOfLeasingCorrectionRuleLeasingCorrectionRuleItem)), __LINE__);
            }
        }
        if (is_null($leasingCorrectionRule) || (is_array($leasingCorrectionRule) && empty($leasingCorrectionRule))) {
            unset($this->LeasingCorrectionRule);
        } else {
            $this->LeasingCorrectionRule = $leasingCorrectionRule;
        }
        return $this;
    }
    /**
     * Add item to LeasingCorrectionRule value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\LeasingCorrectionRule $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfLeasingCorrectionRule
     */
    public function addToLeasingCorrectionRule(\Mu4ddi3\Compensa\Webservice\StructType\LeasingCorrectionRule $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\LeasingCorrectionRule) {
            throw new \InvalidArgumentException(sprintf('The LeasingCorrectionRule property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\LeasingCorrectionRule, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->LeasingCorrectionRule[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\LeasingCorrectionRule|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\LeasingCorrectionRule|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\LeasingCorrectionRule|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\LeasingCorrectionRule|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\LeasingCorrectionRule|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string LeasingCorrectionRule
     */
    public function getAttributeName()
    {
        return 'LeasingCorrectionRule';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfLeasingCorrectionRule
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
