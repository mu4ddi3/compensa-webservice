<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfanyType ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfanyType
 * @subpackage Arrays
 */
class ArrayOfanyType extends AbstractStructArrayBase
{
    /**
     * The anyType
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var mixed[]
     */
    public $anyType;
    /**
     * Constructor method for ArrayOfanyType
     * @uses ArrayOfanyType::setAnyType()
     * @param mixed[] $anyType
     */
    public function __construct(array $anyType = array())
    {
        $this
            ->setAnyType($anyType);
    }
    /**
     * Get anyType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return mixed[]|null
     */
    public function getAnyType()
    {
        return isset($this->anyType) ? $this->anyType : null;
    }
    /**
     * Set anyType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param mixed[] $anyType
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfanyType
     */
    public function setAnyType(array $anyType = array())
    {
        foreach ($anyType as $arrayOfanyTypeAnyTypeItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The anyType property can only contain items of anyType, "%s" given', is_object($arrayOfanyTypeAnyTypeItem) ? get_class($arrayOfanyTypeAnyTypeItem) : gettype($arrayOfanyTypeAnyTypeItem)), __LINE__);
            }
        }
        if (is_null($anyType) || (is_array($anyType) && empty($anyType))) {
            unset($this->anyType);
        } else {
            $this->anyType = $anyType;
        }
        return $this;
    }
    /**
     * Add item to anyType value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfanyType
     */
    public function addToAnyType($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The anyType property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->anyType[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return mixed|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return mixed|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return mixed|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return mixed|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string anyType
     */
    public function getAttributeName()
    {
        return 'anyType';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfanyType
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
