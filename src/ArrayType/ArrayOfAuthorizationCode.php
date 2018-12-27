<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAuthorizationCode ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAuthorizationCode
 * @subpackage Arrays
 */
class ArrayOfAuthorizationCode extends AbstractStructArrayBase
{
    /**
     * The AuthorizationCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\AuthorizationCode[]
     */
    public $AuthorizationCode;
    /**
     * Constructor method for ArrayOfAuthorizationCode
     * @uses ArrayOfAuthorizationCode::setAuthorizationCode()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AuthorizationCode[] $authorizationCode
     */
    public function __construct(array $authorizationCode = array())
    {
        $this
            ->setAuthorizationCode($authorizationCode);
    }
    /**
     * Get AuthorizationCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AuthorizationCode[]|null
     */
    public function getAuthorizationCode()
    {
        return isset($this->AuthorizationCode) ? $this->AuthorizationCode : null;
    }
    /**
     * Set AuthorizationCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AuthorizationCode[] $authorizationCode
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAuthorizationCode
     */
    public function setAuthorizationCode(array $authorizationCode = array())
    {
        foreach ($authorizationCode as $arrayOfAuthorizationCodeAuthorizationCodeItem) {
            // validation for constraint: itemType
            if (!$arrayOfAuthorizationCodeAuthorizationCodeItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\AuthorizationCode) {
                throw new \InvalidArgumentException(sprintf('The AuthorizationCode property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\AuthorizationCode, "%s" given', is_object($arrayOfAuthorizationCodeAuthorizationCodeItem) ? get_class($arrayOfAuthorizationCodeAuthorizationCodeItem) : gettype($arrayOfAuthorizationCodeAuthorizationCodeItem)), __LINE__);
            }
        }
        if (is_null($authorizationCode) || (is_array($authorizationCode) && empty($authorizationCode))) {
            unset($this->AuthorizationCode);
        } else {
            $this->AuthorizationCode = $authorizationCode;
        }
        return $this;
    }
    /**
     * Add item to AuthorizationCode value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AuthorizationCode $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAuthorizationCode
     */
    public function addToAuthorizationCode(\Mu4ddi3\Compensa\Webservice\StructType\AuthorizationCode $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\AuthorizationCode) {
            throw new \InvalidArgumentException(sprintf('The AuthorizationCode property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\AuthorizationCode, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AuthorizationCode[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AuthorizationCode|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AuthorizationCode|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AuthorizationCode|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AuthorizationCode|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AuthorizationCode|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AuthorizationCode
     */
    public function getAttributeName()
    {
        return 'AuthorizationCode';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAuthorizationCode
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
