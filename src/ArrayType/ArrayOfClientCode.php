<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfClientCode ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfClientCode
 * @subpackage Arrays
 */
class ArrayOfClientCode extends AbstractStructArrayBase
{
    /**
     * The ClientCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ClientCode[]
     */
    public $ClientCode;
    /**
     * Constructor method for ArrayOfClientCode
     * @uses ArrayOfClientCode::setClientCode()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ClientCode[] $clientCode
     */
    public function __construct(array $clientCode = array())
    {
        $this
            ->setClientCode($clientCode);
    }
    /**
     * Get ClientCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClientCode[]|null
     */
    public function getClientCode()
    {
        return isset($this->ClientCode) ? $this->ClientCode : null;
    }
    /**
     * Set ClientCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ClientCode[] $clientCode
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClientCode
     */
    public function setClientCode(array $clientCode = array())
    {
        foreach ($clientCode as $arrayOfClientCodeClientCodeItem) {
            // validation for constraint: itemType
            if (!$arrayOfClientCodeClientCodeItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\ClientCode) {
                throw new \InvalidArgumentException(sprintf('The ClientCode property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\ClientCode, "%s" given', is_object($arrayOfClientCodeClientCodeItem) ? get_class($arrayOfClientCodeClientCodeItem) : gettype($arrayOfClientCodeClientCodeItem)), __LINE__);
            }
        }
        if (is_null($clientCode) || (is_array($clientCode) && empty($clientCode))) {
            unset($this->ClientCode);
        } else {
            $this->ClientCode = $clientCode;
        }
        return $this;
    }
    /**
     * Add item to ClientCode value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ClientCode $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClientCode
     */
    public function addToClientCode(\Mu4ddi3\Compensa\Webservice\StructType\ClientCode $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\ClientCode) {
            throw new \InvalidArgumentException(sprintf('The ClientCode property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\ClientCode, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ClientCode[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClientCode|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClientCode|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClientCode|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClientCode|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClientCode|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ClientCode
     */
    public function getAttributeName()
    {
        return 'ClientCode';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClientCode
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
