<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfKeyValueOfClaimScopeNullableOfbooleanBFmuWHBL
 * ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfKeyValueOfClaimScopeNullableOfbooleanBFmuWHBL
 * @subpackage Arrays
 */
class ArrayOfKeyValueOfClaimScopeNullableOfbooleanBFmuWHBL extends AbstractStructArrayBase
{
    /**
     * The KeyValueOfClaimScopeNullableOfbooleanBFmuWHBL
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfClaimScopeNullableOfbooleanBFmuWHBL[]
     */
    public $KeyValueOfClaimScopeNullableOfbooleanBFmuWHBL;
    /**
     * Constructor method for ArrayOfKeyValueOfClaimScopeNullableOfbooleanBFmuWHBL
     * @uses ArrayOfKeyValueOfClaimScopeNullableOfbooleanBFmuWHBL::setKeyValueOfClaimScopeNullableOfbooleanBFmuWHBL()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfClaimScopeNullableOfbooleanBFmuWHBL[] $keyValueOfClaimScopeNullableOfbooleanBFmuWHBL
     */
    public function __construct(array $keyValueOfClaimScopeNullableOfbooleanBFmuWHBL = array())
    {
        $this
            ->setKeyValueOfClaimScopeNullableOfbooleanBFmuWHBL($keyValueOfClaimScopeNullableOfbooleanBFmuWHBL);
    }
    /**
     * Get KeyValueOfClaimScopeNullableOfbooleanBFmuWHBL value
     * @return \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfClaimScopeNullableOfbooleanBFmuWHBL[]|null
     */
    public function getKeyValueOfClaimScopeNullableOfbooleanBFmuWHBL()
    {
        return $this->KeyValueOfClaimScopeNullableOfbooleanBFmuWHBL;
    }
    /**
     * Set KeyValueOfClaimScopeNullableOfbooleanBFmuWHBL value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfClaimScopeNullableOfbooleanBFmuWHBL[] $keyValueOfClaimScopeNullableOfbooleanBFmuWHBL
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfKeyValueOfClaimScopeNullableOfbooleanBFmuWHBL
     */
    public function setKeyValueOfClaimScopeNullableOfbooleanBFmuWHBL(array $keyValueOfClaimScopeNullableOfbooleanBFmuWHBL = array())
    {
        foreach ($keyValueOfClaimScopeNullableOfbooleanBFmuWHBL as $arrayOfKeyValueOfClaimScopeNullableOfbooleanBFmuWHBLKeyValueOfClaimScopeNullableOfbooleanBFmuWHBLItem) {
            // validation for constraint: itemType
            if (!$arrayOfKeyValueOfClaimScopeNullableOfbooleanBFmuWHBLKeyValueOfClaimScopeNullableOfbooleanBFmuWHBLItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfClaimScopeNullableOfbooleanBFmuWHBL) {
                throw new \InvalidArgumentException(sprintf('The KeyValueOfClaimScopeNullableOfbooleanBFmuWHBL property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfClaimScopeNullableOfbooleanBFmuWHBL, "%s" given', is_object($arrayOfKeyValueOfClaimScopeNullableOfbooleanBFmuWHBLKeyValueOfClaimScopeNullableOfbooleanBFmuWHBLItem) ? get_class($arrayOfKeyValueOfClaimScopeNullableOfbooleanBFmuWHBLKeyValueOfClaimScopeNullableOfbooleanBFmuWHBLItem) : gettype($arrayOfKeyValueOfClaimScopeNullableOfbooleanBFmuWHBLKeyValueOfClaimScopeNullableOfbooleanBFmuWHBLItem)), __LINE__);
            }
        }
        $this->KeyValueOfClaimScopeNullableOfbooleanBFmuWHBL = $keyValueOfClaimScopeNullableOfbooleanBFmuWHBL;
        return $this;
    }
    /**
     * Add item to KeyValueOfClaimScopeNullableOfbooleanBFmuWHBL value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfClaimScopeNullableOfbooleanBFmuWHBL $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfKeyValueOfClaimScopeNullableOfbooleanBFmuWHBL
     */
    public function addToKeyValueOfClaimScopeNullableOfbooleanBFmuWHBL(\Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfClaimScopeNullableOfbooleanBFmuWHBL $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfClaimScopeNullableOfbooleanBFmuWHBL) {
            throw new \InvalidArgumentException(sprintf('The KeyValueOfClaimScopeNullableOfbooleanBFmuWHBL property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfClaimScopeNullableOfbooleanBFmuWHBL, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->KeyValueOfClaimScopeNullableOfbooleanBFmuWHBL[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfClaimScopeNullableOfbooleanBFmuWHBL|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfClaimScopeNullableOfbooleanBFmuWHBL|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfClaimScopeNullableOfbooleanBFmuWHBL|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfClaimScopeNullableOfbooleanBFmuWHBL|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfClaimScopeNullableOfbooleanBFmuWHBL|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string KeyValueOfClaimScopeNullableOfbooleanBFmuWHBL
     */
    public function getAttributeName()
    {
        return 'KeyValueOfClaimScopeNullableOfbooleanBFmuWHBL';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfKeyValueOfClaimScopeNullableOfbooleanBFmuWHBL
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
