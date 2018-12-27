<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTerritoryUsageDiscountValue ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfTerritoryUsageDiscountValue
 * @subpackage Arrays
 */
class ArrayOfTerritoryUsageDiscountValue extends AbstractStructArrayBase
{
    /**
     * The TerritoryUsageDiscountValue
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\TerritoryUsageDiscountValue[]
     */
    public $TerritoryUsageDiscountValue;
    /**
     * Constructor method for ArrayOfTerritoryUsageDiscountValue
     * @uses ArrayOfTerritoryUsageDiscountValue::setTerritoryUsageDiscountValue()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\TerritoryUsageDiscountValue[] $territoryUsageDiscountValue
     */
    public function __construct(array $territoryUsageDiscountValue = array())
    {
        $this
            ->setTerritoryUsageDiscountValue($territoryUsageDiscountValue);
    }
    /**
     * Get TerritoryUsageDiscountValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\TerritoryUsageDiscountValue[]|null
     */
    public function getTerritoryUsageDiscountValue()
    {
        return isset($this->TerritoryUsageDiscountValue) ? $this->TerritoryUsageDiscountValue : null;
    }
    /**
     * Set TerritoryUsageDiscountValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\TerritoryUsageDiscountValue[] $territoryUsageDiscountValue
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTerritoryUsageDiscountValue
     */
    public function setTerritoryUsageDiscountValue(array $territoryUsageDiscountValue = array())
    {
        foreach ($territoryUsageDiscountValue as $arrayOfTerritoryUsageDiscountValueTerritoryUsageDiscountValueItem) {
            // validation for constraint: itemType
            if (!$arrayOfTerritoryUsageDiscountValueTerritoryUsageDiscountValueItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\TerritoryUsageDiscountValue) {
                throw new \InvalidArgumentException(sprintf('The TerritoryUsageDiscountValue property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\TerritoryUsageDiscountValue, "%s" given', is_object($arrayOfTerritoryUsageDiscountValueTerritoryUsageDiscountValueItem) ? get_class($arrayOfTerritoryUsageDiscountValueTerritoryUsageDiscountValueItem) : gettype($arrayOfTerritoryUsageDiscountValueTerritoryUsageDiscountValueItem)), __LINE__);
            }
        }
        if (is_null($territoryUsageDiscountValue) || (is_array($territoryUsageDiscountValue) && empty($territoryUsageDiscountValue))) {
            unset($this->TerritoryUsageDiscountValue);
        } else {
            $this->TerritoryUsageDiscountValue = $territoryUsageDiscountValue;
        }
        return $this;
    }
    /**
     * Add item to TerritoryUsageDiscountValue value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\TerritoryUsageDiscountValue $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTerritoryUsageDiscountValue
     */
    public function addToTerritoryUsageDiscountValue(\Mu4ddi3\Compensa\Webservice\StructType\TerritoryUsageDiscountValue $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\TerritoryUsageDiscountValue) {
            throw new \InvalidArgumentException(sprintf('The TerritoryUsageDiscountValue property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\TerritoryUsageDiscountValue, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TerritoryUsageDiscountValue[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\TerritoryUsageDiscountValue|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\TerritoryUsageDiscountValue|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\TerritoryUsageDiscountValue|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\TerritoryUsageDiscountValue|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\TerritoryUsageDiscountValue|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TerritoryUsageDiscountValue
     */
    public function getAttributeName()
    {
        return 'TerritoryUsageDiscountValue';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTerritoryUsageDiscountValue
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
