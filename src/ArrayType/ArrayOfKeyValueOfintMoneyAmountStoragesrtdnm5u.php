<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfKeyValueOfintMoneyAmountStoragesrtdnm5u ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfKeyValueOfintMoneyAmountStoragesrtdnm5u
 * @subpackage Arrays
 */
class ArrayOfKeyValueOfintMoneyAmountStoragesrtdnm5u extends AbstractStructArrayBase
{
    /**
     * The KeyValueOfintMoneyAmountStoragesrtdnm5u
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfintMoneyAmountStoragesrtdnm5u[]
     */
    public $KeyValueOfintMoneyAmountStoragesrtdnm5u;
    /**
     * Constructor method for ArrayOfKeyValueOfintMoneyAmountStoragesrtdnm5u
     * @uses ArrayOfKeyValueOfintMoneyAmountStoragesrtdnm5u::setKeyValueOfintMoneyAmountStoragesrtdnm5u()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfintMoneyAmountStoragesrtdnm5u[] $keyValueOfintMoneyAmountStoragesrtdnm5u
     */
    public function __construct(array $keyValueOfintMoneyAmountStoragesrtdnm5u = array())
    {
        $this
            ->setKeyValueOfintMoneyAmountStoragesrtdnm5u($keyValueOfintMoneyAmountStoragesrtdnm5u);
    }
    /**
     * Get KeyValueOfintMoneyAmountStoragesrtdnm5u value
     * @return \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfintMoneyAmountStoragesrtdnm5u[]|null
     */
    public function getKeyValueOfintMoneyAmountStoragesrtdnm5u()
    {
        return $this->KeyValueOfintMoneyAmountStoragesrtdnm5u;
    }
    /**
     * Set KeyValueOfintMoneyAmountStoragesrtdnm5u value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfintMoneyAmountStoragesrtdnm5u[] $keyValueOfintMoneyAmountStoragesrtdnm5u
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfKeyValueOfintMoneyAmountStoragesrtdnm5u
     */
    public function setKeyValueOfintMoneyAmountStoragesrtdnm5u(array $keyValueOfintMoneyAmountStoragesrtdnm5u = array())
    {
        foreach ($keyValueOfintMoneyAmountStoragesrtdnm5u as $arrayOfKeyValueOfintMoneyAmountStoragesrtdnm5uKeyValueOfintMoneyAmountStoragesrtdnm5uItem) {
            // validation for constraint: itemType
            if (!$arrayOfKeyValueOfintMoneyAmountStoragesrtdnm5uKeyValueOfintMoneyAmountStoragesrtdnm5uItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfintMoneyAmountStoragesrtdnm5u) {
                throw new \InvalidArgumentException(sprintf('The KeyValueOfintMoneyAmountStoragesrtdnm5u property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfintMoneyAmountStoragesrtdnm5u, "%s" given', is_object($arrayOfKeyValueOfintMoneyAmountStoragesrtdnm5uKeyValueOfintMoneyAmountStoragesrtdnm5uItem) ? get_class($arrayOfKeyValueOfintMoneyAmountStoragesrtdnm5uKeyValueOfintMoneyAmountStoragesrtdnm5uItem) : gettype($arrayOfKeyValueOfintMoneyAmountStoragesrtdnm5uKeyValueOfintMoneyAmountStoragesrtdnm5uItem)), __LINE__);
            }
        }
        $this->KeyValueOfintMoneyAmountStoragesrtdnm5u = $keyValueOfintMoneyAmountStoragesrtdnm5u;
        return $this;
    }
    /**
     * Add item to KeyValueOfintMoneyAmountStoragesrtdnm5u value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfintMoneyAmountStoragesrtdnm5u $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfKeyValueOfintMoneyAmountStoragesrtdnm5u
     */
    public function addToKeyValueOfintMoneyAmountStoragesrtdnm5u(\Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfintMoneyAmountStoragesrtdnm5u $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfintMoneyAmountStoragesrtdnm5u) {
            throw new \InvalidArgumentException(sprintf('The KeyValueOfintMoneyAmountStoragesrtdnm5u property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfintMoneyAmountStoragesrtdnm5u, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->KeyValueOfintMoneyAmountStoragesrtdnm5u[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfintMoneyAmountStoragesrtdnm5u|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfintMoneyAmountStoragesrtdnm5u|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfintMoneyAmountStoragesrtdnm5u|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfintMoneyAmountStoragesrtdnm5u|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfintMoneyAmountStoragesrtdnm5u|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string KeyValueOfintMoneyAmountStoragesrtdnm5u
     */
    public function getAttributeName()
    {
        return 'KeyValueOfintMoneyAmountStoragesrtdnm5u';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfKeyValueOfintMoneyAmountStoragesrtdnm5u
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
