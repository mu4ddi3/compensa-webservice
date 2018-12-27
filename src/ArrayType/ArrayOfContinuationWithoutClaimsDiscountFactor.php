<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfContinuationWithoutClaimsDiscountFactor ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfContinuationWithoutClaimsDiscountFactor
 * @subpackage Arrays
 */
class ArrayOfContinuationWithoutClaimsDiscountFactor extends AbstractStructArrayBase
{
    /**
     * The ContinuationWithoutClaimsDiscountFactor
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ContinuationWithoutClaimsDiscountFactor[]
     */
    public $ContinuationWithoutClaimsDiscountFactor;
    /**
     * Constructor method for ArrayOfContinuationWithoutClaimsDiscountFactor
     * @uses ArrayOfContinuationWithoutClaimsDiscountFactor::setContinuationWithoutClaimsDiscountFactor()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ContinuationWithoutClaimsDiscountFactor[] $continuationWithoutClaimsDiscountFactor
     */
    public function __construct(array $continuationWithoutClaimsDiscountFactor = array())
    {
        $this
            ->setContinuationWithoutClaimsDiscountFactor($continuationWithoutClaimsDiscountFactor);
    }
    /**
     * Get ContinuationWithoutClaimsDiscountFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ContinuationWithoutClaimsDiscountFactor[]|null
     */
    public function getContinuationWithoutClaimsDiscountFactor()
    {
        return isset($this->ContinuationWithoutClaimsDiscountFactor) ? $this->ContinuationWithoutClaimsDiscountFactor : null;
    }
    /**
     * Set ContinuationWithoutClaimsDiscountFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ContinuationWithoutClaimsDiscountFactor[] $continuationWithoutClaimsDiscountFactor
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfContinuationWithoutClaimsDiscountFactor
     */
    public function setContinuationWithoutClaimsDiscountFactor(array $continuationWithoutClaimsDiscountFactor = array())
    {
        foreach ($continuationWithoutClaimsDiscountFactor as $arrayOfContinuationWithoutClaimsDiscountFactorContinuationWithoutClaimsDiscountFactorItem) {
            // validation for constraint: itemType
            if (!$arrayOfContinuationWithoutClaimsDiscountFactorContinuationWithoutClaimsDiscountFactorItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\ContinuationWithoutClaimsDiscountFactor) {
                throw new \InvalidArgumentException(sprintf('The ContinuationWithoutClaimsDiscountFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\ContinuationWithoutClaimsDiscountFactor, "%s" given', is_object($arrayOfContinuationWithoutClaimsDiscountFactorContinuationWithoutClaimsDiscountFactorItem) ? get_class($arrayOfContinuationWithoutClaimsDiscountFactorContinuationWithoutClaimsDiscountFactorItem) : gettype($arrayOfContinuationWithoutClaimsDiscountFactorContinuationWithoutClaimsDiscountFactorItem)), __LINE__);
            }
        }
        if (is_null($continuationWithoutClaimsDiscountFactor) || (is_array($continuationWithoutClaimsDiscountFactor) && empty($continuationWithoutClaimsDiscountFactor))) {
            unset($this->ContinuationWithoutClaimsDiscountFactor);
        } else {
            $this->ContinuationWithoutClaimsDiscountFactor = $continuationWithoutClaimsDiscountFactor;
        }
        return $this;
    }
    /**
     * Add item to ContinuationWithoutClaimsDiscountFactor value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ContinuationWithoutClaimsDiscountFactor $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfContinuationWithoutClaimsDiscountFactor
     */
    public function addToContinuationWithoutClaimsDiscountFactor(\Mu4ddi3\Compensa\Webservice\StructType\ContinuationWithoutClaimsDiscountFactor $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\ContinuationWithoutClaimsDiscountFactor) {
            throw new \InvalidArgumentException(sprintf('The ContinuationWithoutClaimsDiscountFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\ContinuationWithoutClaimsDiscountFactor, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ContinuationWithoutClaimsDiscountFactor[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ContinuationWithoutClaimsDiscountFactor|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ContinuationWithoutClaimsDiscountFactor|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ContinuationWithoutClaimsDiscountFactor|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ContinuationWithoutClaimsDiscountFactor|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ContinuationWithoutClaimsDiscountFactor|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ContinuationWithoutClaimsDiscountFactor
     */
    public function getAttributeName()
    {
        return 'ContinuationWithoutClaimsDiscountFactor';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfContinuationWithoutClaimsDiscountFactor
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
