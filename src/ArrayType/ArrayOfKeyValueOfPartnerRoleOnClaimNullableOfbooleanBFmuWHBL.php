<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for
 * ArrayOfKeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfKeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL
 * @subpackage Arrays
 */
class ArrayOfKeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL extends AbstractStructArrayBase
{
    /**
     * The KeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL[]
     */
    public $KeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL;
    /**
     * Constructor method for
     * ArrayOfKeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL
     * @uses ArrayOfKeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL::setKeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL[] $keyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL
     */
    public function __construct(array $keyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL = array())
    {
        $this
            ->setKeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL($keyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL);
    }
    /**
     * Get KeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL value
     * @return \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL[]|null
     */
    public function getKeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL()
    {
        return $this->KeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL;
    }
    /**
     * Set KeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL[] $keyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfKeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL
     */
    public function setKeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL(array $keyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL = array())
    {
        foreach ($keyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL as $arrayOfKeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBLKeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBLItem) {
            // validation for constraint: itemType
            if (!$arrayOfKeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBLKeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBLItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL) {
                throw new \InvalidArgumentException(sprintf('The KeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL, "%s" given', is_object($arrayOfKeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBLKeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBLItem) ? get_class($arrayOfKeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBLKeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBLItem) : gettype($arrayOfKeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBLKeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBLItem)), __LINE__);
            }
        }
        $this->KeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL = $keyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL;
        return $this;
    }
    /**
     * Add item to KeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfKeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL
     */
    public function addToKeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL(\Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL) {
            throw new \InvalidArgumentException(sprintf('The KeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->KeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string KeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL
     */
    public function getAttributeName()
    {
        return 'KeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfKeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL
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
