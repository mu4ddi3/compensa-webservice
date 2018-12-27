<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfUniqueNumber ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfUniqueNumber
 * @subpackage Arrays
 */
class ArrayOfUniqueNumber extends AbstractStructArrayBase
{
    /**
     * The UniqueNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\UniqueNumber[]
     */
    public $UniqueNumber;
    /**
     * Constructor method for ArrayOfUniqueNumber
     * @uses ArrayOfUniqueNumber::setUniqueNumber()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\UniqueNumber[] $uniqueNumber
     */
    public function __construct(array $uniqueNumber = array())
    {
        $this
            ->setUniqueNumber($uniqueNumber);
    }
    /**
     * Get UniqueNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UniqueNumber[]|null
     */
    public function getUniqueNumber()
    {
        return isset($this->UniqueNumber) ? $this->UniqueNumber : null;
    }
    /**
     * Set UniqueNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\UniqueNumber[] $uniqueNumber
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfUniqueNumber
     */
    public function setUniqueNumber(array $uniqueNumber = array())
    {
        foreach ($uniqueNumber as $arrayOfUniqueNumberUniqueNumberItem) {
            // validation for constraint: itemType
            if (!$arrayOfUniqueNumberUniqueNumberItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\UniqueNumber) {
                throw new \InvalidArgumentException(sprintf('The UniqueNumber property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\UniqueNumber, "%s" given', is_object($arrayOfUniqueNumberUniqueNumberItem) ? get_class($arrayOfUniqueNumberUniqueNumberItem) : gettype($arrayOfUniqueNumberUniqueNumberItem)), __LINE__);
            }
        }
        if (is_null($uniqueNumber) || (is_array($uniqueNumber) && empty($uniqueNumber))) {
            unset($this->UniqueNumber);
        } else {
            $this->UniqueNumber = $uniqueNumber;
        }
        return $this;
    }
    /**
     * Add item to UniqueNumber value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\UniqueNumber $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfUniqueNumber
     */
    public function addToUniqueNumber(\Mu4ddi3\Compensa\Webservice\StructType\UniqueNumber $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\UniqueNumber) {
            throw new \InvalidArgumentException(sprintf('The UniqueNumber property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\UniqueNumber, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->UniqueNumber[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UniqueNumber|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UniqueNumber|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UniqueNumber|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UniqueNumber|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UniqueNumber|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string UniqueNumber
     */
    public function getAttributeName()
    {
        return 'UniqueNumber';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfUniqueNumber
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
