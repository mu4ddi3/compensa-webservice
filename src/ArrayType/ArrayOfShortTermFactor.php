<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfShortTermFactor ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfShortTermFactor
 * @subpackage Arrays
 */
class ArrayOfShortTermFactor extends AbstractStructArrayBase
{
    /**
     * The ShortTermFactor
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ShortTermFactor[]
     */
    public $ShortTermFactor;
    /**
     * Constructor method for ArrayOfShortTermFactor
     * @uses ArrayOfShortTermFactor::setShortTermFactor()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ShortTermFactor[] $shortTermFactor
     */
    public function __construct(array $shortTermFactor = array())
    {
        $this
            ->setShortTermFactor($shortTermFactor);
    }
    /**
     * Get ShortTermFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ShortTermFactor[]|null
     */
    public function getShortTermFactor()
    {
        return isset($this->ShortTermFactor) ? $this->ShortTermFactor : null;
    }
    /**
     * Set ShortTermFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ShortTermFactor[] $shortTermFactor
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfShortTermFactor
     */
    public function setShortTermFactor(array $shortTermFactor = array())
    {
        foreach ($shortTermFactor as $arrayOfShortTermFactorShortTermFactorItem) {
            // validation for constraint: itemType
            if (!$arrayOfShortTermFactorShortTermFactorItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\ShortTermFactor) {
                throw new \InvalidArgumentException(sprintf('The ShortTermFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\ShortTermFactor, "%s" given', is_object($arrayOfShortTermFactorShortTermFactorItem) ? get_class($arrayOfShortTermFactorShortTermFactorItem) : gettype($arrayOfShortTermFactorShortTermFactorItem)), __LINE__);
            }
        }
        if (is_null($shortTermFactor) || (is_array($shortTermFactor) && empty($shortTermFactor))) {
            unset($this->ShortTermFactor);
        } else {
            $this->ShortTermFactor = $shortTermFactor;
        }
        return $this;
    }
    /**
     * Add item to ShortTermFactor value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ShortTermFactor $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfShortTermFactor
     */
    public function addToShortTermFactor(\Mu4ddi3\Compensa\Webservice\StructType\ShortTermFactor $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\ShortTermFactor) {
            throw new \InvalidArgumentException(sprintf('The ShortTermFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\ShortTermFactor, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ShortTermFactor[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ShortTermFactor|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ShortTermFactor|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ShortTermFactor|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ShortTermFactor|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ShortTermFactor|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ShortTermFactor
     */
    public function getAttributeName()
    {
        return 'ShortTermFactor';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfShortTermFactor
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
