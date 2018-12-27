<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfUnderwriterDiscountFactor ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfUnderwriterDiscountFactor
 * @subpackage Arrays
 */
class ArrayOfUnderwriterDiscountFactor extends AbstractStructArrayBase
{
    /**
     * The UnderwriterDiscountFactor
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\UnderwriterDiscountFactor[]
     */
    public $UnderwriterDiscountFactor;
    /**
     * Constructor method for ArrayOfUnderwriterDiscountFactor
     * @uses ArrayOfUnderwriterDiscountFactor::setUnderwriterDiscountFactor()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\UnderwriterDiscountFactor[] $underwriterDiscountFactor
     */
    public function __construct(array $underwriterDiscountFactor = array())
    {
        $this
            ->setUnderwriterDiscountFactor($underwriterDiscountFactor);
    }
    /**
     * Get UnderwriterDiscountFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UnderwriterDiscountFactor[]|null
     */
    public function getUnderwriterDiscountFactor()
    {
        return isset($this->UnderwriterDiscountFactor) ? $this->UnderwriterDiscountFactor : null;
    }
    /**
     * Set UnderwriterDiscountFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\UnderwriterDiscountFactor[] $underwriterDiscountFactor
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfUnderwriterDiscountFactor
     */
    public function setUnderwriterDiscountFactor(array $underwriterDiscountFactor = array())
    {
        foreach ($underwriterDiscountFactor as $arrayOfUnderwriterDiscountFactorUnderwriterDiscountFactorItem) {
            // validation for constraint: itemType
            if (!$arrayOfUnderwriterDiscountFactorUnderwriterDiscountFactorItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\UnderwriterDiscountFactor) {
                throw new \InvalidArgumentException(sprintf('The UnderwriterDiscountFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\UnderwriterDiscountFactor, "%s" given', is_object($arrayOfUnderwriterDiscountFactorUnderwriterDiscountFactorItem) ? get_class($arrayOfUnderwriterDiscountFactorUnderwriterDiscountFactorItem) : gettype($arrayOfUnderwriterDiscountFactorUnderwriterDiscountFactorItem)), __LINE__);
            }
        }
        if (is_null($underwriterDiscountFactor) || (is_array($underwriterDiscountFactor) && empty($underwriterDiscountFactor))) {
            unset($this->UnderwriterDiscountFactor);
        } else {
            $this->UnderwriterDiscountFactor = $underwriterDiscountFactor;
        }
        return $this;
    }
    /**
     * Add item to UnderwriterDiscountFactor value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\UnderwriterDiscountFactor $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfUnderwriterDiscountFactor
     */
    public function addToUnderwriterDiscountFactor(\Mu4ddi3\Compensa\Webservice\StructType\UnderwriterDiscountFactor $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\UnderwriterDiscountFactor) {
            throw new \InvalidArgumentException(sprintf('The UnderwriterDiscountFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\UnderwriterDiscountFactor, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->UnderwriterDiscountFactor[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UnderwriterDiscountFactor|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UnderwriterDiscountFactor|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UnderwriterDiscountFactor|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UnderwriterDiscountFactor|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UnderwriterDiscountFactor|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string UnderwriterDiscountFactor
     */
    public function getAttributeName()
    {
        return 'UnderwriterDiscountFactor';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfUnderwriterDiscountFactor
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
