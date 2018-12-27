<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRangeOfint ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfRangeOfint
 * @subpackage Arrays
 */
class ArrayOfRangeOfint extends AbstractStructArrayBase
{
    /**
     * The RangeOfint
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint[]
     */
    public $RangeOfint;
    /**
     * Constructor method for ArrayOfRangeOfint
     * @uses ArrayOfRangeOfint::setRangeOfint()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint[] $rangeOfint
     */
    public function __construct(array $rangeOfint = array())
    {
        $this
            ->setRangeOfint($rangeOfint);
    }
    /**
     * Get RangeOfint value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint[]|null
     */
    public function getRangeOfint()
    {
        return isset($this->RangeOfint) ? $this->RangeOfint : null;
    }
    /**
     * Set RangeOfint value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint[] $rangeOfint
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRangeOfint
     */
    public function setRangeOfint(array $rangeOfint = array())
    {
        foreach ($rangeOfint as $arrayOfRangeOfintRangeOfintItem) {
            // validation for constraint: itemType
            if (!$arrayOfRangeOfintRangeOfintItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint) {
                throw new \InvalidArgumentException(sprintf('The RangeOfint property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint, "%s" given', is_object($arrayOfRangeOfintRangeOfintItem) ? get_class($arrayOfRangeOfintRangeOfintItem) : gettype($arrayOfRangeOfintRangeOfintItem)), __LINE__);
            }
        }
        if (is_null($rangeOfint) || (is_array($rangeOfint) && empty($rangeOfint))) {
            unset($this->RangeOfint);
        } else {
            $this->RangeOfint = $rangeOfint;
        }
        return $this;
    }
    /**
     * Add item to RangeOfint value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRangeOfint
     */
    public function addToRangeOfint(\Mu4ddi3\Compensa\Webservice\StructType\RangeOfint $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint) {
            throw new \InvalidArgumentException(sprintf('The RangeOfint property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RangeOfint[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RangeOfint
     */
    public function getAttributeName()
    {
        return 'RangeOfint';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRangeOfint
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
