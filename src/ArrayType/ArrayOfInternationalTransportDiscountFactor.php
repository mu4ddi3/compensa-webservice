<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfInternationalTransportDiscountFactor ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfInternationalTransportDiscountFactor
 * @subpackage Arrays
 */
class ArrayOfInternationalTransportDiscountFactor extends AbstractStructArrayBase
{
    /**
     * The InternationalTransportDiscountFactor
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\InternationalTransportDiscountFactor[]
     */
    public $InternationalTransportDiscountFactor;
    /**
     * Constructor method for ArrayOfInternationalTransportDiscountFactor
     * @uses ArrayOfInternationalTransportDiscountFactor::setInternationalTransportDiscountFactor()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InternationalTransportDiscountFactor[] $internationalTransportDiscountFactor
     */
    public function __construct(array $internationalTransportDiscountFactor = array())
    {
        $this
            ->setInternationalTransportDiscountFactor($internationalTransportDiscountFactor);
    }
    /**
     * Get InternationalTransportDiscountFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InternationalTransportDiscountFactor[]|null
     */
    public function getInternationalTransportDiscountFactor()
    {
        return isset($this->InternationalTransportDiscountFactor) ? $this->InternationalTransportDiscountFactor : null;
    }
    /**
     * Set InternationalTransportDiscountFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InternationalTransportDiscountFactor[] $internationalTransportDiscountFactor
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInternationalTransportDiscountFactor
     */
    public function setInternationalTransportDiscountFactor(array $internationalTransportDiscountFactor = array())
    {
        foreach ($internationalTransportDiscountFactor as $arrayOfInternationalTransportDiscountFactorInternationalTransportDiscountFactorItem) {
            // validation for constraint: itemType
            if (!$arrayOfInternationalTransportDiscountFactorInternationalTransportDiscountFactorItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\InternationalTransportDiscountFactor) {
                throw new \InvalidArgumentException(sprintf('The InternationalTransportDiscountFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\InternationalTransportDiscountFactor, "%s" given', is_object($arrayOfInternationalTransportDiscountFactorInternationalTransportDiscountFactorItem) ? get_class($arrayOfInternationalTransportDiscountFactorInternationalTransportDiscountFactorItem) : gettype($arrayOfInternationalTransportDiscountFactorInternationalTransportDiscountFactorItem)), __LINE__);
            }
        }
        if (is_null($internationalTransportDiscountFactor) || (is_array($internationalTransportDiscountFactor) && empty($internationalTransportDiscountFactor))) {
            unset($this->InternationalTransportDiscountFactor);
        } else {
            $this->InternationalTransportDiscountFactor = $internationalTransportDiscountFactor;
        }
        return $this;
    }
    /**
     * Add item to InternationalTransportDiscountFactor value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InternationalTransportDiscountFactor $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInternationalTransportDiscountFactor
     */
    public function addToInternationalTransportDiscountFactor(\Mu4ddi3\Compensa\Webservice\StructType\InternationalTransportDiscountFactor $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\InternationalTransportDiscountFactor) {
            throw new \InvalidArgumentException(sprintf('The InternationalTransportDiscountFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\InternationalTransportDiscountFactor, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->InternationalTransportDiscountFactor[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InternationalTransportDiscountFactor|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InternationalTransportDiscountFactor|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InternationalTransportDiscountFactor|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InternationalTransportDiscountFactor|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InternationalTransportDiscountFactor|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string InternationalTransportDiscountFactor
     */
    public function getAttributeName()
    {
        return 'InternationalTransportDiscountFactor';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInternationalTransportDiscountFactor
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
