<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDiscountAvaliabilityCondition ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfDiscountAvaliabilityCondition
 * @subpackage Arrays
 */
class ArrayOfDiscountAvaliabilityCondition extends AbstractStructArrayBase
{
    /**
     * The DiscountAvaliabilityCondition
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\DiscountAvaliabilityCondition[]
     */
    public $DiscountAvaliabilityCondition;
    /**
     * Constructor method for ArrayOfDiscountAvaliabilityCondition
     * @uses ArrayOfDiscountAvaliabilityCondition::setDiscountAvaliabilityCondition()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\DiscountAvaliabilityCondition[] $discountAvaliabilityCondition
     */
    public function __construct(array $discountAvaliabilityCondition = array())
    {
        $this
            ->setDiscountAvaliabilityCondition($discountAvaliabilityCondition);
    }
    /**
     * Get DiscountAvaliabilityCondition value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DiscountAvaliabilityCondition[]|null
     */
    public function getDiscountAvaliabilityCondition()
    {
        return isset($this->DiscountAvaliabilityCondition) ? $this->DiscountAvaliabilityCondition : null;
    }
    /**
     * Set DiscountAvaliabilityCondition value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\DiscountAvaliabilityCondition[] $discountAvaliabilityCondition
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDiscountAvaliabilityCondition
     */
    public function setDiscountAvaliabilityCondition(array $discountAvaliabilityCondition = array())
    {
        foreach ($discountAvaliabilityCondition as $arrayOfDiscountAvaliabilityConditionDiscountAvaliabilityConditionItem) {
            // validation for constraint: itemType
            if (!$arrayOfDiscountAvaliabilityConditionDiscountAvaliabilityConditionItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\DiscountAvaliabilityCondition) {
                throw new \InvalidArgumentException(sprintf('The DiscountAvaliabilityCondition property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\DiscountAvaliabilityCondition, "%s" given', is_object($arrayOfDiscountAvaliabilityConditionDiscountAvaliabilityConditionItem) ? get_class($arrayOfDiscountAvaliabilityConditionDiscountAvaliabilityConditionItem) : gettype($arrayOfDiscountAvaliabilityConditionDiscountAvaliabilityConditionItem)), __LINE__);
            }
        }
        if (is_null($discountAvaliabilityCondition) || (is_array($discountAvaliabilityCondition) && empty($discountAvaliabilityCondition))) {
            unset($this->DiscountAvaliabilityCondition);
        } else {
            $this->DiscountAvaliabilityCondition = $discountAvaliabilityCondition;
        }
        return $this;
    }
    /**
     * Add item to DiscountAvaliabilityCondition value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\DiscountAvaliabilityCondition $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDiscountAvaliabilityCondition
     */
    public function addToDiscountAvaliabilityCondition(\Mu4ddi3\Compensa\Webservice\StructType\DiscountAvaliabilityCondition $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\DiscountAvaliabilityCondition) {
            throw new \InvalidArgumentException(sprintf('The DiscountAvaliabilityCondition property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\DiscountAvaliabilityCondition, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DiscountAvaliabilityCondition[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DiscountAvaliabilityCondition|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DiscountAvaliabilityCondition|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DiscountAvaliabilityCondition|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DiscountAvaliabilityCondition|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DiscountAvaliabilityCondition|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DiscountAvaliabilityCondition
     */
    public function getAttributeName()
    {
        return 'DiscountAvaliabilityCondition';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDiscountAvaliabilityCondition
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
