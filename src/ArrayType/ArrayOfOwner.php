<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfOwner ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfOwner
 * @subpackage Arrays
 */
class ArrayOfOwner extends AbstractStructArrayBase
{
    /**
     * The Owner
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Owner[]
     */
    public $Owner;
    /**
     * Constructor method for ArrayOfOwner
     * @uses ArrayOfOwner::setOwner()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Owner[] $owner
     */
    public function __construct(array $owner = array())
    {
        $this
            ->setOwner($owner);
    }
    /**
     * Get Owner value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Owner[]|null
     */
    public function getOwner()
    {
        return isset($this->Owner) ? $this->Owner : null;
    }
    /**
     * Set Owner value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Owner[] $owner
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfOwner
     */
    public function setOwner(array $owner = array())
    {
        foreach ($owner as $arrayOfOwnerOwnerItem) {
            // validation for constraint: itemType
            if (!$arrayOfOwnerOwnerItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\Owner) {
                throw new \InvalidArgumentException(sprintf('The Owner property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\Owner, "%s" given', is_object($arrayOfOwnerOwnerItem) ? get_class($arrayOfOwnerOwnerItem) : gettype($arrayOfOwnerOwnerItem)), __LINE__);
            }
        }
        if (is_null($owner) || (is_array($owner) && empty($owner))) {
            unset($this->Owner);
        } else {
            $this->Owner = $owner;
        }
        return $this;
    }
    /**
     * Add item to Owner value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Owner $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfOwner
     */
    public function addToOwner(\Mu4ddi3\Compensa\Webservice\StructType\Owner $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\Owner) {
            throw new \InvalidArgumentException(sprintf('The Owner property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\Owner, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Owner[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Owner|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Owner|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Owner|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Owner|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Owner|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Owner
     */
    public function getAttributeName()
    {
        return 'Owner';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfOwner
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
