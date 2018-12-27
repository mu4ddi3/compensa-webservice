<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSuvDiscountFactor ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfSuvDiscountFactor
 * @subpackage Arrays
 */
class ArrayOfSuvDiscountFactor extends AbstractStructArrayBase
{
    /**
     * The SuvDiscountFactor
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\SuvDiscountFactor[]
     */
    public $SuvDiscountFactor;
    /**
     * Constructor method for ArrayOfSuvDiscountFactor
     * @uses ArrayOfSuvDiscountFactor::setSuvDiscountFactor()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\SuvDiscountFactor[] $suvDiscountFactor
     */
    public function __construct(array $suvDiscountFactor = array())
    {
        $this
            ->setSuvDiscountFactor($suvDiscountFactor);
    }
    /**
     * Get SuvDiscountFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\SuvDiscountFactor[]|null
     */
    public function getSuvDiscountFactor()
    {
        return isset($this->SuvDiscountFactor) ? $this->SuvDiscountFactor : null;
    }
    /**
     * Set SuvDiscountFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\SuvDiscountFactor[] $suvDiscountFactor
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfSuvDiscountFactor
     */
    public function setSuvDiscountFactor(array $suvDiscountFactor = array())
    {
        foreach ($suvDiscountFactor as $arrayOfSuvDiscountFactorSuvDiscountFactorItem) {
            // validation for constraint: itemType
            if (!$arrayOfSuvDiscountFactorSuvDiscountFactorItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\SuvDiscountFactor) {
                throw new \InvalidArgumentException(sprintf('The SuvDiscountFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\SuvDiscountFactor, "%s" given', is_object($arrayOfSuvDiscountFactorSuvDiscountFactorItem) ? get_class($arrayOfSuvDiscountFactorSuvDiscountFactorItem) : gettype($arrayOfSuvDiscountFactorSuvDiscountFactorItem)), __LINE__);
            }
        }
        if (is_null($suvDiscountFactor) || (is_array($suvDiscountFactor) && empty($suvDiscountFactor))) {
            unset($this->SuvDiscountFactor);
        } else {
            $this->SuvDiscountFactor = $suvDiscountFactor;
        }
        return $this;
    }
    /**
     * Add item to SuvDiscountFactor value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\SuvDiscountFactor $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfSuvDiscountFactor
     */
    public function addToSuvDiscountFactor(\Mu4ddi3\Compensa\Webservice\StructType\SuvDiscountFactor $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\SuvDiscountFactor) {
            throw new \InvalidArgumentException(sprintf('The SuvDiscountFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\SuvDiscountFactor, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SuvDiscountFactor[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\SuvDiscountFactor|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\SuvDiscountFactor|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\SuvDiscountFactor|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\SuvDiscountFactor|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\SuvDiscountFactor|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SuvDiscountFactor
     */
    public function getAttributeName()
    {
        return 'SuvDiscountFactor';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfSuvDiscountFactor
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
