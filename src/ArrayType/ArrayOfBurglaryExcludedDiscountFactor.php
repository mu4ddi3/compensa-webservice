<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBurglaryExcludedDiscountFactor ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfBurglaryExcludedDiscountFactor
 * @subpackage Arrays
 */
class ArrayOfBurglaryExcludedDiscountFactor extends AbstractStructArrayBase
{
    /**
     * The BurglaryExcludedDiscountFactor
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\BurglaryExcludedDiscountFactor[]
     */
    public $BurglaryExcludedDiscountFactor;
    /**
     * Constructor method for ArrayOfBurglaryExcludedDiscountFactor
     * @uses ArrayOfBurglaryExcludedDiscountFactor::setBurglaryExcludedDiscountFactor()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\BurglaryExcludedDiscountFactor[] $burglaryExcludedDiscountFactor
     */
    public function __construct(array $burglaryExcludedDiscountFactor = array())
    {
        $this
            ->setBurglaryExcludedDiscountFactor($burglaryExcludedDiscountFactor);
    }
    /**
     * Get BurglaryExcludedDiscountFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BurglaryExcludedDiscountFactor[]|null
     */
    public function getBurglaryExcludedDiscountFactor()
    {
        return isset($this->BurglaryExcludedDiscountFactor) ? $this->BurglaryExcludedDiscountFactor : null;
    }
    /**
     * Set BurglaryExcludedDiscountFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\BurglaryExcludedDiscountFactor[] $burglaryExcludedDiscountFactor
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBurglaryExcludedDiscountFactor
     */
    public function setBurglaryExcludedDiscountFactor(array $burglaryExcludedDiscountFactor = array())
    {
        foreach ($burglaryExcludedDiscountFactor as $arrayOfBurglaryExcludedDiscountFactorBurglaryExcludedDiscountFactorItem) {
            // validation for constraint: itemType
            if (!$arrayOfBurglaryExcludedDiscountFactorBurglaryExcludedDiscountFactorItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\BurglaryExcludedDiscountFactor) {
                throw new \InvalidArgumentException(sprintf('The BurglaryExcludedDiscountFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\BurglaryExcludedDiscountFactor, "%s" given', is_object($arrayOfBurglaryExcludedDiscountFactorBurglaryExcludedDiscountFactorItem) ? get_class($arrayOfBurglaryExcludedDiscountFactorBurglaryExcludedDiscountFactorItem) : gettype($arrayOfBurglaryExcludedDiscountFactorBurglaryExcludedDiscountFactorItem)), __LINE__);
            }
        }
        if (is_null($burglaryExcludedDiscountFactor) || (is_array($burglaryExcludedDiscountFactor) && empty($burglaryExcludedDiscountFactor))) {
            unset($this->BurglaryExcludedDiscountFactor);
        } else {
            $this->BurglaryExcludedDiscountFactor = $burglaryExcludedDiscountFactor;
        }
        return $this;
    }
    /**
     * Add item to BurglaryExcludedDiscountFactor value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\BurglaryExcludedDiscountFactor $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBurglaryExcludedDiscountFactor
     */
    public function addToBurglaryExcludedDiscountFactor(\Mu4ddi3\Compensa\Webservice\StructType\BurglaryExcludedDiscountFactor $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\BurglaryExcludedDiscountFactor) {
            throw new \InvalidArgumentException(sprintf('The BurglaryExcludedDiscountFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\BurglaryExcludedDiscountFactor, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BurglaryExcludedDiscountFactor[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BurglaryExcludedDiscountFactor|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BurglaryExcludedDiscountFactor|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BurglaryExcludedDiscountFactor|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BurglaryExcludedDiscountFactor|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BurglaryExcludedDiscountFactor|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string BurglaryExcludedDiscountFactor
     */
    public function getAttributeName()
    {
        return 'BurglaryExcludedDiscountFactor';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBurglaryExcludedDiscountFactor
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
