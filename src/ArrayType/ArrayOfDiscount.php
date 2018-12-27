<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDiscount ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfDiscount
 * @subpackage Arrays
 */
class ArrayOfDiscount extends AbstractStructArrayBase
{
    /**
     * The Discount
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Discount[]
     */
    public $Discount;
    /**
     * Constructor method for ArrayOfDiscount
     * @uses ArrayOfDiscount::setDiscount()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Discount[] $discount
     */
    public function __construct(array $discount = array())
    {
        $this
            ->setDiscount($discount);
    }
    /**
     * Get Discount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Discount[]|null
     */
    public function getDiscount()
    {
        return isset($this->Discount) ? $this->Discount : null;
    }
    /**
     * Set Discount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Discount[] $discount
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDiscount
     */
    public function setDiscount(array $discount = array())
    {
        foreach ($discount as $arrayOfDiscountDiscountItem) {
            // validation for constraint: itemType
            if (!$arrayOfDiscountDiscountItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\Discount) {
                throw new \InvalidArgumentException(sprintf('The Discount property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\Discount, "%s" given', is_object($arrayOfDiscountDiscountItem) ? get_class($arrayOfDiscountDiscountItem) : gettype($arrayOfDiscountDiscountItem)), __LINE__);
            }
        }
        if (is_null($discount) || (is_array($discount) && empty($discount))) {
            unset($this->Discount);
        } else {
            $this->Discount = $discount;
        }
        return $this;
    }
    /**
     * Add item to Discount value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Discount $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDiscount
     */
    public function addToDiscount(\Mu4ddi3\Compensa\Webservice\StructType\Discount $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\Discount) {
            throw new \InvalidArgumentException(sprintf('The Discount property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\Discount, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Discount[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Discount|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Discount|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Discount|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Discount|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Discount|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Discount
     */
    public function getAttributeName()
    {
        return 'Discount';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDiscount
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
