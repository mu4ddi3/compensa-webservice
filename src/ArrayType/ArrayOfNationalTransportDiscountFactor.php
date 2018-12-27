<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfNationalTransportDiscountFactor ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfNationalTransportDiscountFactor
 * @subpackage Arrays
 */
class ArrayOfNationalTransportDiscountFactor extends AbstractStructArrayBase
{
    /**
     * The NationalTransportDiscountFactor
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\NationalTransportDiscountFactor[]
     */
    public $NationalTransportDiscountFactor;
    /**
     * Constructor method for ArrayOfNationalTransportDiscountFactor
     * @uses ArrayOfNationalTransportDiscountFactor::setNationalTransportDiscountFactor()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\NationalTransportDiscountFactor[] $nationalTransportDiscountFactor
     */
    public function __construct(array $nationalTransportDiscountFactor = array())
    {
        $this
            ->setNationalTransportDiscountFactor($nationalTransportDiscountFactor);
    }
    /**
     * Get NationalTransportDiscountFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\NationalTransportDiscountFactor[]|null
     */
    public function getNationalTransportDiscountFactor()
    {
        return isset($this->NationalTransportDiscountFactor) ? $this->NationalTransportDiscountFactor : null;
    }
    /**
     * Set NationalTransportDiscountFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\NationalTransportDiscountFactor[] $nationalTransportDiscountFactor
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfNationalTransportDiscountFactor
     */
    public function setNationalTransportDiscountFactor(array $nationalTransportDiscountFactor = array())
    {
        foreach ($nationalTransportDiscountFactor as $arrayOfNationalTransportDiscountFactorNationalTransportDiscountFactorItem) {
            // validation for constraint: itemType
            if (!$arrayOfNationalTransportDiscountFactorNationalTransportDiscountFactorItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\NationalTransportDiscountFactor) {
                throw new \InvalidArgumentException(sprintf('The NationalTransportDiscountFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\NationalTransportDiscountFactor, "%s" given', is_object($arrayOfNationalTransportDiscountFactorNationalTransportDiscountFactorItem) ? get_class($arrayOfNationalTransportDiscountFactorNationalTransportDiscountFactorItem) : gettype($arrayOfNationalTransportDiscountFactorNationalTransportDiscountFactorItem)), __LINE__);
            }
        }
        if (is_null($nationalTransportDiscountFactor) || (is_array($nationalTransportDiscountFactor) && empty($nationalTransportDiscountFactor))) {
            unset($this->NationalTransportDiscountFactor);
        } else {
            $this->NationalTransportDiscountFactor = $nationalTransportDiscountFactor;
        }
        return $this;
    }
    /**
     * Add item to NationalTransportDiscountFactor value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\NationalTransportDiscountFactor $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfNationalTransportDiscountFactor
     */
    public function addToNationalTransportDiscountFactor(\Mu4ddi3\Compensa\Webservice\StructType\NationalTransportDiscountFactor $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\NationalTransportDiscountFactor) {
            throw new \InvalidArgumentException(sprintf('The NationalTransportDiscountFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\NationalTransportDiscountFactor, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->NationalTransportDiscountFactor[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\NationalTransportDiscountFactor|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\NationalTransportDiscountFactor|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\NationalTransportDiscountFactor|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\NationalTransportDiscountFactor|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\NationalTransportDiscountFactor|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string NationalTransportDiscountFactor
     */
    public function getAttributeName()
    {
        return 'NationalTransportDiscountFactor';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfNationalTransportDiscountFactor
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
