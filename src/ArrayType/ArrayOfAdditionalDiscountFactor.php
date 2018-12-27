<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAdditionalDiscountFactor ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAdditionalDiscountFactor
 * @subpackage Arrays
 */
class ArrayOfAdditionalDiscountFactor extends AbstractStructArrayBase
{
    /**
     * The AdditionalDiscountFactor
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscountFactor[]
     */
    public $AdditionalDiscountFactor;
    /**
     * Constructor method for ArrayOfAdditionalDiscountFactor
     * @uses ArrayOfAdditionalDiscountFactor::setAdditionalDiscountFactor()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscountFactor[] $additionalDiscountFactor
     */
    public function __construct(array $additionalDiscountFactor = array())
    {
        $this
            ->setAdditionalDiscountFactor($additionalDiscountFactor);
    }
    /**
     * Get AdditionalDiscountFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscountFactor[]|null
     */
    public function getAdditionalDiscountFactor()
    {
        return isset($this->AdditionalDiscountFactor) ? $this->AdditionalDiscountFactor : null;
    }
    /**
     * Set AdditionalDiscountFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscountFactor[] $additionalDiscountFactor
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAdditionalDiscountFactor
     */
    public function setAdditionalDiscountFactor(array $additionalDiscountFactor = array())
    {
        foreach ($additionalDiscountFactor as $arrayOfAdditionalDiscountFactorAdditionalDiscountFactorItem) {
            // validation for constraint: itemType
            if (!$arrayOfAdditionalDiscountFactorAdditionalDiscountFactorItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscountFactor) {
                throw new \InvalidArgumentException(sprintf('The AdditionalDiscountFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscountFactor, "%s" given', is_object($arrayOfAdditionalDiscountFactorAdditionalDiscountFactorItem) ? get_class($arrayOfAdditionalDiscountFactorAdditionalDiscountFactorItem) : gettype($arrayOfAdditionalDiscountFactorAdditionalDiscountFactorItem)), __LINE__);
            }
        }
        if (is_null($additionalDiscountFactor) || (is_array($additionalDiscountFactor) && empty($additionalDiscountFactor))) {
            unset($this->AdditionalDiscountFactor);
        } else {
            $this->AdditionalDiscountFactor = $additionalDiscountFactor;
        }
        return $this;
    }
    /**
     * Add item to AdditionalDiscountFactor value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscountFactor $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAdditionalDiscountFactor
     */
    public function addToAdditionalDiscountFactor(\Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscountFactor $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscountFactor) {
            throw new \InvalidArgumentException(sprintf('The AdditionalDiscountFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscountFactor, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AdditionalDiscountFactor[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscountFactor|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscountFactor|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscountFactor|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscountFactor|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscountFactor|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AdditionalDiscountFactor
     */
    public function getAttributeName()
    {
        return 'AdditionalDiscountFactor';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAdditionalDiscountFactor
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
