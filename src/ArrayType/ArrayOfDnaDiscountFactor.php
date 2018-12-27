<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDnaDiscountFactor ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfDnaDiscountFactor
 * @subpackage Arrays
 */
class ArrayOfDnaDiscountFactor extends AbstractStructArrayBase
{
    /**
     * The DnaDiscountFactor
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\DnaDiscountFactor[]
     */
    public $DnaDiscountFactor;
    /**
     * Constructor method for ArrayOfDnaDiscountFactor
     * @uses ArrayOfDnaDiscountFactor::setDnaDiscountFactor()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\DnaDiscountFactor[] $dnaDiscountFactor
     */
    public function __construct(array $dnaDiscountFactor = array())
    {
        $this
            ->setDnaDiscountFactor($dnaDiscountFactor);
    }
    /**
     * Get DnaDiscountFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DnaDiscountFactor[]|null
     */
    public function getDnaDiscountFactor()
    {
        return isset($this->DnaDiscountFactor) ? $this->DnaDiscountFactor : null;
    }
    /**
     * Set DnaDiscountFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\DnaDiscountFactor[] $dnaDiscountFactor
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDnaDiscountFactor
     */
    public function setDnaDiscountFactor(array $dnaDiscountFactor = array())
    {
        foreach ($dnaDiscountFactor as $arrayOfDnaDiscountFactorDnaDiscountFactorItem) {
            // validation for constraint: itemType
            if (!$arrayOfDnaDiscountFactorDnaDiscountFactorItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\DnaDiscountFactor) {
                throw new \InvalidArgumentException(sprintf('The DnaDiscountFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\DnaDiscountFactor, "%s" given', is_object($arrayOfDnaDiscountFactorDnaDiscountFactorItem) ? get_class($arrayOfDnaDiscountFactorDnaDiscountFactorItem) : gettype($arrayOfDnaDiscountFactorDnaDiscountFactorItem)), __LINE__);
            }
        }
        if (is_null($dnaDiscountFactor) || (is_array($dnaDiscountFactor) && empty($dnaDiscountFactor))) {
            unset($this->DnaDiscountFactor);
        } else {
            $this->DnaDiscountFactor = $dnaDiscountFactor;
        }
        return $this;
    }
    /**
     * Add item to DnaDiscountFactor value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\DnaDiscountFactor $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDnaDiscountFactor
     */
    public function addToDnaDiscountFactor(\Mu4ddi3\Compensa\Webservice\StructType\DnaDiscountFactor $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\DnaDiscountFactor) {
            throw new \InvalidArgumentException(sprintf('The DnaDiscountFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\DnaDiscountFactor, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DnaDiscountFactor[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DnaDiscountFactor|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DnaDiscountFactor|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DnaDiscountFactor|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DnaDiscountFactor|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DnaDiscountFactor|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DnaDiscountFactor
     */
    public function getAttributeName()
    {
        return 'DnaDiscountFactor';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDnaDiscountFactor
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
