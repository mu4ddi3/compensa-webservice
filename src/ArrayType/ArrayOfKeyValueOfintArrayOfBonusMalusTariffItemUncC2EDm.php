<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfKeyValueOfintArrayOfBonusMalusTariffItemUncC2EDm
 * ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfKeyValueOfintArrayOfBonusMalusTariffItemUncC2EDm
 * @subpackage Arrays
 */
class ArrayOfKeyValueOfintArrayOfBonusMalusTariffItemUncC2EDm extends AbstractStructArrayBase
{
    /**
     * The KeyValueOfintArrayOfBonusMalusTariffItemUncC2EDm
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfintArrayOfBonusMalusTariffItemUncC2EDm[]
     */
    public $KeyValueOfintArrayOfBonusMalusTariffItemUncC2EDm;
    /**
     * Constructor method for ArrayOfKeyValueOfintArrayOfBonusMalusTariffItemUncC2EDm
     * @uses ArrayOfKeyValueOfintArrayOfBonusMalusTariffItemUncC2EDm::setKeyValueOfintArrayOfBonusMalusTariffItemUncC2EDm()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfintArrayOfBonusMalusTariffItemUncC2EDm[] $keyValueOfintArrayOfBonusMalusTariffItemUncC2EDm
     */
    public function __construct(array $keyValueOfintArrayOfBonusMalusTariffItemUncC2EDm = array())
    {
        $this
            ->setKeyValueOfintArrayOfBonusMalusTariffItemUncC2EDm($keyValueOfintArrayOfBonusMalusTariffItemUncC2EDm);
    }
    /**
     * Get KeyValueOfintArrayOfBonusMalusTariffItemUncC2EDm value
     * @return \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfintArrayOfBonusMalusTariffItemUncC2EDm[]|null
     */
    public function getKeyValueOfintArrayOfBonusMalusTariffItemUncC2EDm()
    {
        return $this->KeyValueOfintArrayOfBonusMalusTariffItemUncC2EDm;
    }
    /**
     * Set KeyValueOfintArrayOfBonusMalusTariffItemUncC2EDm value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfintArrayOfBonusMalusTariffItemUncC2EDm[] $keyValueOfintArrayOfBonusMalusTariffItemUncC2EDm
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfKeyValueOfintArrayOfBonusMalusTariffItemUncC2EDm
     */
    public function setKeyValueOfintArrayOfBonusMalusTariffItemUncC2EDm(array $keyValueOfintArrayOfBonusMalusTariffItemUncC2EDm = array())
    {
        foreach ($keyValueOfintArrayOfBonusMalusTariffItemUncC2EDm as $arrayOfKeyValueOfintArrayOfBonusMalusTariffItemUncC2EDmKeyValueOfintArrayOfBonusMalusTariffItemUncC2EDmItem) {
            // validation for constraint: itemType
            if (!$arrayOfKeyValueOfintArrayOfBonusMalusTariffItemUncC2EDmKeyValueOfintArrayOfBonusMalusTariffItemUncC2EDmItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfintArrayOfBonusMalusTariffItemUncC2EDm) {
                throw new \InvalidArgumentException(sprintf('The KeyValueOfintArrayOfBonusMalusTariffItemUncC2EDm property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfintArrayOfBonusMalusTariffItemUncC2EDm, "%s" given', is_object($arrayOfKeyValueOfintArrayOfBonusMalusTariffItemUncC2EDmKeyValueOfintArrayOfBonusMalusTariffItemUncC2EDmItem) ? get_class($arrayOfKeyValueOfintArrayOfBonusMalusTariffItemUncC2EDmKeyValueOfintArrayOfBonusMalusTariffItemUncC2EDmItem) : gettype($arrayOfKeyValueOfintArrayOfBonusMalusTariffItemUncC2EDmKeyValueOfintArrayOfBonusMalusTariffItemUncC2EDmItem)), __LINE__);
            }
        }
        $this->KeyValueOfintArrayOfBonusMalusTariffItemUncC2EDm = $keyValueOfintArrayOfBonusMalusTariffItemUncC2EDm;
        return $this;
    }
    /**
     * Add item to KeyValueOfintArrayOfBonusMalusTariffItemUncC2EDm value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfintArrayOfBonusMalusTariffItemUncC2EDm $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfKeyValueOfintArrayOfBonusMalusTariffItemUncC2EDm
     */
    public function addToKeyValueOfintArrayOfBonusMalusTariffItemUncC2EDm(\Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfintArrayOfBonusMalusTariffItemUncC2EDm $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfintArrayOfBonusMalusTariffItemUncC2EDm) {
            throw new \InvalidArgumentException(sprintf('The KeyValueOfintArrayOfBonusMalusTariffItemUncC2EDm property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfintArrayOfBonusMalusTariffItemUncC2EDm, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->KeyValueOfintArrayOfBonusMalusTariffItemUncC2EDm[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfintArrayOfBonusMalusTariffItemUncC2EDm|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfintArrayOfBonusMalusTariffItemUncC2EDm|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfintArrayOfBonusMalusTariffItemUncC2EDm|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfintArrayOfBonusMalusTariffItemUncC2EDm|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfintArrayOfBonusMalusTariffItemUncC2EDm|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string KeyValueOfintArrayOfBonusMalusTariffItemUncC2EDm
     */
    public function getAttributeName()
    {
        return 'KeyValueOfintArrayOfBonusMalusTariffItemUncC2EDm';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfKeyValueOfintArrayOfBonusMalusTariffItemUncC2EDm
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
