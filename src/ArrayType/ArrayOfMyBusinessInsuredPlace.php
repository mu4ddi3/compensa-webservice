<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfMyBusinessInsuredPlace ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfMyBusinessInsuredPlace
 * @subpackage Arrays
 */
class ArrayOfMyBusinessInsuredPlace extends AbstractStructArrayBase
{
    /**
     * The MyBusinessInsuredPlace
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessInsuredPlace[]
     */
    public $MyBusinessInsuredPlace;
    /**
     * Constructor method for ArrayOfMyBusinessInsuredPlace
     * @uses ArrayOfMyBusinessInsuredPlace::setMyBusinessInsuredPlace()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessInsuredPlace[] $myBusinessInsuredPlace
     */
    public function __construct(array $myBusinessInsuredPlace = array())
    {
        $this
            ->setMyBusinessInsuredPlace($myBusinessInsuredPlace);
    }
    /**
     * Get MyBusinessInsuredPlace value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessInsuredPlace[]|null
     */
    public function getMyBusinessInsuredPlace()
    {
        return isset($this->MyBusinessInsuredPlace) ? $this->MyBusinessInsuredPlace : null;
    }
    /**
     * Set MyBusinessInsuredPlace value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessInsuredPlace[] $myBusinessInsuredPlace
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMyBusinessInsuredPlace
     */
    public function setMyBusinessInsuredPlace(array $myBusinessInsuredPlace = array())
    {
        foreach ($myBusinessInsuredPlace as $arrayOfMyBusinessInsuredPlaceMyBusinessInsuredPlaceItem) {
            // validation for constraint: itemType
            if (!$arrayOfMyBusinessInsuredPlaceMyBusinessInsuredPlaceItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessInsuredPlace) {
                throw new \InvalidArgumentException(sprintf('The MyBusinessInsuredPlace property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessInsuredPlace, "%s" given', is_object($arrayOfMyBusinessInsuredPlaceMyBusinessInsuredPlaceItem) ? get_class($arrayOfMyBusinessInsuredPlaceMyBusinessInsuredPlaceItem) : gettype($arrayOfMyBusinessInsuredPlaceMyBusinessInsuredPlaceItem)), __LINE__);
            }
        }
        if (is_null($myBusinessInsuredPlace) || (is_array($myBusinessInsuredPlace) && empty($myBusinessInsuredPlace))) {
            unset($this->MyBusinessInsuredPlace);
        } else {
            $this->MyBusinessInsuredPlace = $myBusinessInsuredPlace;
        }
        return $this;
    }
    /**
     * Add item to MyBusinessInsuredPlace value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessInsuredPlace $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMyBusinessInsuredPlace
     */
    public function addToMyBusinessInsuredPlace(\Mu4ddi3\Compensa\Webservice\StructType\MyBusinessInsuredPlace $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessInsuredPlace) {
            throw new \InvalidArgumentException(sprintf('The MyBusinessInsuredPlace property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessInsuredPlace, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->MyBusinessInsuredPlace[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessInsuredPlace|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessInsuredPlace|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessInsuredPlace|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessInsuredPlace|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessInsuredPlace|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string MyBusinessInsuredPlace
     */
    public function getAttributeName()
    {
        return 'MyBusinessInsuredPlace';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMyBusinessInsuredPlace
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
