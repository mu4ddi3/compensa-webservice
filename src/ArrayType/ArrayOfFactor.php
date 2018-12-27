<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFactor ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfFactor
 * @subpackage Arrays
 */
class ArrayOfFactor extends AbstractStructArrayBase
{
    /**
     * The Factor
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor[]
     */
    public $Factor;
    /**
     * Constructor method for ArrayOfFactor
     * @uses ArrayOfFactor::setFactor()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor[] $factor
     */
    public function __construct(array $factor = array())
    {
        $this
            ->setFactor($factor);
    }
    /**
     * Get Factor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor[]|null
     */
    public function getFactor()
    {
        return isset($this->Factor) ? $this->Factor : null;
    }
    /**
     * Set Factor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor[] $factor
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfFactor
     */
    public function setFactor(array $factor = array())
    {
        foreach ($factor as $arrayOfFactorFactorItem) {
            // validation for constraint: itemType
            if (!$arrayOfFactorFactorItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\Factor) {
                throw new \InvalidArgumentException(sprintf('The Factor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\Factor, "%s" given', is_object($arrayOfFactorFactorItem) ? get_class($arrayOfFactorFactorItem) : gettype($arrayOfFactorFactorItem)), __LINE__);
            }
        }
        if (is_null($factor) || (is_array($factor) && empty($factor))) {
            unset($this->Factor);
        } else {
            $this->Factor = $factor;
        }
        return $this;
    }
    /**
     * Add item to Factor value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfFactor
     */
    public function addToFactor(\Mu4ddi3\Compensa\Webservice\StructType\Factor $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\Factor) {
            throw new \InvalidArgumentException(sprintf('The Factor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\Factor, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Factor[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Factor
     */
    public function getAttributeName()
    {
        return 'Factor';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfFactor
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
