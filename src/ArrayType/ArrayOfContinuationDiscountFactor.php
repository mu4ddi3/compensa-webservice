<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfContinuationDiscountFactor ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfContinuationDiscountFactor
 * @subpackage Arrays
 */
class ArrayOfContinuationDiscountFactor extends AbstractStructArrayBase
{
    /**
     * The ContinuationDiscountFactor
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ContinuationDiscountFactor[]
     */
    public $ContinuationDiscountFactor;
    /**
     * Constructor method for ArrayOfContinuationDiscountFactor
     * @uses ArrayOfContinuationDiscountFactor::setContinuationDiscountFactor()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ContinuationDiscountFactor[] $continuationDiscountFactor
     */
    public function __construct(array $continuationDiscountFactor = array())
    {
        $this
            ->setContinuationDiscountFactor($continuationDiscountFactor);
    }
    /**
     * Get ContinuationDiscountFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ContinuationDiscountFactor[]|null
     */
    public function getContinuationDiscountFactor()
    {
        return isset($this->ContinuationDiscountFactor) ? $this->ContinuationDiscountFactor : null;
    }
    /**
     * Set ContinuationDiscountFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ContinuationDiscountFactor[] $continuationDiscountFactor
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfContinuationDiscountFactor
     */
    public function setContinuationDiscountFactor(array $continuationDiscountFactor = array())
    {
        foreach ($continuationDiscountFactor as $arrayOfContinuationDiscountFactorContinuationDiscountFactorItem) {
            // validation for constraint: itemType
            if (!$arrayOfContinuationDiscountFactorContinuationDiscountFactorItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\ContinuationDiscountFactor) {
                throw new \InvalidArgumentException(sprintf('The ContinuationDiscountFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\ContinuationDiscountFactor, "%s" given', is_object($arrayOfContinuationDiscountFactorContinuationDiscountFactorItem) ? get_class($arrayOfContinuationDiscountFactorContinuationDiscountFactorItem) : gettype($arrayOfContinuationDiscountFactorContinuationDiscountFactorItem)), __LINE__);
            }
        }
        if (is_null($continuationDiscountFactor) || (is_array($continuationDiscountFactor) && empty($continuationDiscountFactor))) {
            unset($this->ContinuationDiscountFactor);
        } else {
            $this->ContinuationDiscountFactor = $continuationDiscountFactor;
        }
        return $this;
    }
    /**
     * Add item to ContinuationDiscountFactor value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ContinuationDiscountFactor $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfContinuationDiscountFactor
     */
    public function addToContinuationDiscountFactor(\Mu4ddi3\Compensa\Webservice\StructType\ContinuationDiscountFactor $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\ContinuationDiscountFactor) {
            throw new \InvalidArgumentException(sprintf('The ContinuationDiscountFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\ContinuationDiscountFactor, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ContinuationDiscountFactor[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ContinuationDiscountFactor|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ContinuationDiscountFactor|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ContinuationDiscountFactor|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ContinuationDiscountFactor|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ContinuationDiscountFactor|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ContinuationDiscountFactor
     */
    public function getAttributeName()
    {
        return 'ContinuationDiscountFactor';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfContinuationDiscountFactor
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
