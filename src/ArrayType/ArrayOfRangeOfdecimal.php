<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRangeOfdecimal ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfRangeOfdecimal
 * @subpackage Arrays
 */
class ArrayOfRangeOfdecimal extends AbstractStructArrayBase
{
    /**
     * The RangeOfdecimal
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\RangeOfdecimal[]
     */
    public $RangeOfdecimal;
    /**
     * Constructor method for ArrayOfRangeOfdecimal
     * @uses ArrayOfRangeOfdecimal::setRangeOfdecimal()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RangeOfdecimal[] $rangeOfdecimal
     */
    public function __construct(array $rangeOfdecimal = array())
    {
        $this
            ->setRangeOfdecimal($rangeOfdecimal);
    }
    /**
     * Get RangeOfdecimal value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RangeOfdecimal[]|null
     */
    public function getRangeOfdecimal()
    {
        return isset($this->RangeOfdecimal) ? $this->RangeOfdecimal : null;
    }
    /**
     * Set RangeOfdecimal value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RangeOfdecimal[] $rangeOfdecimal
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRangeOfdecimal
     */
    public function setRangeOfdecimal(array $rangeOfdecimal = array())
    {
        foreach ($rangeOfdecimal as $arrayOfRangeOfdecimalRangeOfdecimalItem) {
            // validation for constraint: itemType
            if (!$arrayOfRangeOfdecimalRangeOfdecimalItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\RangeOfdecimal) {
                throw new \InvalidArgumentException(sprintf('The RangeOfdecimal property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\RangeOfdecimal, "%s" given', is_object($arrayOfRangeOfdecimalRangeOfdecimalItem) ? get_class($arrayOfRangeOfdecimalRangeOfdecimalItem) : gettype($arrayOfRangeOfdecimalRangeOfdecimalItem)), __LINE__);
            }
        }
        if (is_null($rangeOfdecimal) || (is_array($rangeOfdecimal) && empty($rangeOfdecimal))) {
            unset($this->RangeOfdecimal);
        } else {
            $this->RangeOfdecimal = $rangeOfdecimal;
        }
        return $this;
    }
    /**
     * Add item to RangeOfdecimal value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RangeOfdecimal $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRangeOfdecimal
     */
    public function addToRangeOfdecimal(\Mu4ddi3\Compensa\Webservice\StructType\RangeOfdecimal $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\RangeOfdecimal) {
            throw new \InvalidArgumentException(sprintf('The RangeOfdecimal property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\RangeOfdecimal, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RangeOfdecimal[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RangeOfdecimal|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RangeOfdecimal|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RangeOfdecimal|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RangeOfdecimal|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RangeOfdecimal|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RangeOfdecimal
     */
    public function getAttributeName()
    {
        return 'RangeOfdecimal';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRangeOfdecimal
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
