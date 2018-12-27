<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPostalCodeZone ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPostalCodeZone
 * @subpackage Arrays
 */
class ArrayOfPostalCodeZone extends AbstractStructArrayBase
{
    /**
     * The PostalCodeZone
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PostalCodeZone[]
     */
    public $PostalCodeZone;
    /**
     * Constructor method for ArrayOfPostalCodeZone
     * @uses ArrayOfPostalCodeZone::setPostalCodeZone()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PostalCodeZone[] $postalCodeZone
     */
    public function __construct(array $postalCodeZone = array())
    {
        $this
            ->setPostalCodeZone($postalCodeZone);
    }
    /**
     * Get PostalCodeZone value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PostalCodeZone[]|null
     */
    public function getPostalCodeZone()
    {
        return isset($this->PostalCodeZone) ? $this->PostalCodeZone : null;
    }
    /**
     * Set PostalCodeZone value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PostalCodeZone[] $postalCodeZone
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPostalCodeZone
     */
    public function setPostalCodeZone(array $postalCodeZone = array())
    {
        foreach ($postalCodeZone as $arrayOfPostalCodeZonePostalCodeZoneItem) {
            // validation for constraint: itemType
            if (!$arrayOfPostalCodeZonePostalCodeZoneItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\PostalCodeZone) {
                throw new \InvalidArgumentException(sprintf('The PostalCodeZone property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\PostalCodeZone, "%s" given', is_object($arrayOfPostalCodeZonePostalCodeZoneItem) ? get_class($arrayOfPostalCodeZonePostalCodeZoneItem) : gettype($arrayOfPostalCodeZonePostalCodeZoneItem)), __LINE__);
            }
        }
        if (is_null($postalCodeZone) || (is_array($postalCodeZone) && empty($postalCodeZone))) {
            unset($this->PostalCodeZone);
        } else {
            $this->PostalCodeZone = $postalCodeZone;
        }
        return $this;
    }
    /**
     * Add item to PostalCodeZone value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PostalCodeZone $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPostalCodeZone
     */
    public function addToPostalCodeZone(\Mu4ddi3\Compensa\Webservice\StructType\PostalCodeZone $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\PostalCodeZone) {
            throw new \InvalidArgumentException(sprintf('The PostalCodeZone property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\PostalCodeZone, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PostalCodeZone[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PostalCodeZone|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PostalCodeZone|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PostalCodeZone|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PostalCodeZone|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PostalCodeZone|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PostalCodeZone
     */
    public function getAttributeName()
    {
        return 'PostalCodeZone';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPostalCodeZone
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
