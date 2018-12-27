<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDeductibleVariantDiscountFactor ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfDeductibleVariantDiscountFactor
 * @subpackage Arrays
 */
class ArrayOfDeductibleVariantDiscountFactor extends AbstractStructArrayBase
{
    /**
     * The DeductibleVariantDiscountFactor
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\DeductibleVariantDiscountFactor[]
     */
    public $DeductibleVariantDiscountFactor;
    /**
     * Constructor method for ArrayOfDeductibleVariantDiscountFactor
     * @uses ArrayOfDeductibleVariantDiscountFactor::setDeductibleVariantDiscountFactor()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\DeductibleVariantDiscountFactor[] $deductibleVariantDiscountFactor
     */
    public function __construct(array $deductibleVariantDiscountFactor = array())
    {
        $this
            ->setDeductibleVariantDiscountFactor($deductibleVariantDiscountFactor);
    }
    /**
     * Get DeductibleVariantDiscountFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DeductibleVariantDiscountFactor[]|null
     */
    public function getDeductibleVariantDiscountFactor()
    {
        return isset($this->DeductibleVariantDiscountFactor) ? $this->DeductibleVariantDiscountFactor : null;
    }
    /**
     * Set DeductibleVariantDiscountFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\DeductibleVariantDiscountFactor[] $deductibleVariantDiscountFactor
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDeductibleVariantDiscountFactor
     */
    public function setDeductibleVariantDiscountFactor(array $deductibleVariantDiscountFactor = array())
    {
        foreach ($deductibleVariantDiscountFactor as $arrayOfDeductibleVariantDiscountFactorDeductibleVariantDiscountFactorItem) {
            // validation for constraint: itemType
            if (!$arrayOfDeductibleVariantDiscountFactorDeductibleVariantDiscountFactorItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\DeductibleVariantDiscountFactor) {
                throw new \InvalidArgumentException(sprintf('The DeductibleVariantDiscountFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\DeductibleVariantDiscountFactor, "%s" given', is_object($arrayOfDeductibleVariantDiscountFactorDeductibleVariantDiscountFactorItem) ? get_class($arrayOfDeductibleVariantDiscountFactorDeductibleVariantDiscountFactorItem) : gettype($arrayOfDeductibleVariantDiscountFactorDeductibleVariantDiscountFactorItem)), __LINE__);
            }
        }
        if (is_null($deductibleVariantDiscountFactor) || (is_array($deductibleVariantDiscountFactor) && empty($deductibleVariantDiscountFactor))) {
            unset($this->DeductibleVariantDiscountFactor);
        } else {
            $this->DeductibleVariantDiscountFactor = $deductibleVariantDiscountFactor;
        }
        return $this;
    }
    /**
     * Add item to DeductibleVariantDiscountFactor value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\DeductibleVariantDiscountFactor $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDeductibleVariantDiscountFactor
     */
    public function addToDeductibleVariantDiscountFactor(\Mu4ddi3\Compensa\Webservice\StructType\DeductibleVariantDiscountFactor $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\DeductibleVariantDiscountFactor) {
            throw new \InvalidArgumentException(sprintf('The DeductibleVariantDiscountFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\DeductibleVariantDiscountFactor, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DeductibleVariantDiscountFactor[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DeductibleVariantDiscountFactor|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DeductibleVariantDiscountFactor|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DeductibleVariantDiscountFactor|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DeductibleVariantDiscountFactor|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DeductibleVariantDiscountFactor|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DeductibleVariantDiscountFactor
     */
    public function getAttributeName()
    {
        return 'DeductibleVariantDiscountFactor';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDeductibleVariantDiscountFactor
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
