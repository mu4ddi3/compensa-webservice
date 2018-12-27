<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfKeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBL
 * ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfKeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBL
 * @subpackage Arrays
 */
class ArrayOfKeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBL extends AbstractStructArrayBase
{
    /**
     * The KeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBL
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBL[]
     */
    public $KeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBL;
    /**
     * Constructor method for ArrayOfKeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBL
     * @uses ArrayOfKeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBL::setKeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBL()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBL[] $keyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBL
     */
    public function __construct(array $keyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBL = array())
    {
        $this
            ->setKeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBL($keyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBL);
    }
    /**
     * Get KeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBL value
     * @return \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBL[]|null
     */
    public function getKeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBL()
    {
        return $this->KeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBL;
    }
    /**
     * Set KeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBL value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBL[] $keyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBL
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfKeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBL
     */
    public function setKeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBL(array $keyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBL = array())
    {
        foreach ($keyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBL as $arrayOfKeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBLKeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBLItem) {
            // validation for constraint: itemType
            if (!$arrayOfKeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBLKeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBLItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBL) {
                throw new \InvalidArgumentException(sprintf('The KeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBL property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBL, "%s" given', is_object($arrayOfKeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBLKeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBLItem) ? get_class($arrayOfKeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBLKeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBLItem) : gettype($arrayOfKeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBLKeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBLItem)), __LINE__);
            }
        }
        $this->KeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBL = $keyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBL;
        return $this;
    }
    /**
     * Add item to KeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBL value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBL $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfKeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBL
     */
    public function addToKeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBL(\Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBL $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBL) {
            throw new \InvalidArgumentException(sprintf('The KeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBL property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBL, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->KeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBL[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBL|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBL|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBL|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBL|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBL|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string KeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBL
     */
    public function getAttributeName()
    {
        return 'KeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBL';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfKeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBL
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
