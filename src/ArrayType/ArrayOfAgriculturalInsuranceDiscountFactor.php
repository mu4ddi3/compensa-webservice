<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAgriculturalInsuranceDiscountFactor ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAgriculturalInsuranceDiscountFactor
 * @subpackage Arrays
 */
class ArrayOfAgriculturalInsuranceDiscountFactor extends AbstractStructArrayBase
{
    /**
     * The AgriculturalInsuranceDiscountFactor
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\AgriculturalInsuranceDiscountFactor[]
     */
    public $AgriculturalInsuranceDiscountFactor;
    /**
     * Constructor method for ArrayOfAgriculturalInsuranceDiscountFactor
     * @uses ArrayOfAgriculturalInsuranceDiscountFactor::setAgriculturalInsuranceDiscountFactor()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AgriculturalInsuranceDiscountFactor[] $agriculturalInsuranceDiscountFactor
     */
    public function __construct(array $agriculturalInsuranceDiscountFactor = array())
    {
        $this
            ->setAgriculturalInsuranceDiscountFactor($agriculturalInsuranceDiscountFactor);
    }
    /**
     * Get AgriculturalInsuranceDiscountFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AgriculturalInsuranceDiscountFactor[]|null
     */
    public function getAgriculturalInsuranceDiscountFactor()
    {
        return isset($this->AgriculturalInsuranceDiscountFactor) ? $this->AgriculturalInsuranceDiscountFactor : null;
    }
    /**
     * Set AgriculturalInsuranceDiscountFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AgriculturalInsuranceDiscountFactor[] $agriculturalInsuranceDiscountFactor
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAgriculturalInsuranceDiscountFactor
     */
    public function setAgriculturalInsuranceDiscountFactor(array $agriculturalInsuranceDiscountFactor = array())
    {
        foreach ($agriculturalInsuranceDiscountFactor as $arrayOfAgriculturalInsuranceDiscountFactorAgriculturalInsuranceDiscountFactorItem) {
            // validation for constraint: itemType
            if (!$arrayOfAgriculturalInsuranceDiscountFactorAgriculturalInsuranceDiscountFactorItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\AgriculturalInsuranceDiscountFactor) {
                throw new \InvalidArgumentException(sprintf('The AgriculturalInsuranceDiscountFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\AgriculturalInsuranceDiscountFactor, "%s" given', is_object($arrayOfAgriculturalInsuranceDiscountFactorAgriculturalInsuranceDiscountFactorItem) ? get_class($arrayOfAgriculturalInsuranceDiscountFactorAgriculturalInsuranceDiscountFactorItem) : gettype($arrayOfAgriculturalInsuranceDiscountFactorAgriculturalInsuranceDiscountFactorItem)), __LINE__);
            }
        }
        if (is_null($agriculturalInsuranceDiscountFactor) || (is_array($agriculturalInsuranceDiscountFactor) && empty($agriculturalInsuranceDiscountFactor))) {
            unset($this->AgriculturalInsuranceDiscountFactor);
        } else {
            $this->AgriculturalInsuranceDiscountFactor = $agriculturalInsuranceDiscountFactor;
        }
        return $this;
    }
    /**
     * Add item to AgriculturalInsuranceDiscountFactor value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AgriculturalInsuranceDiscountFactor $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAgriculturalInsuranceDiscountFactor
     */
    public function addToAgriculturalInsuranceDiscountFactor(\Mu4ddi3\Compensa\Webservice\StructType\AgriculturalInsuranceDiscountFactor $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\AgriculturalInsuranceDiscountFactor) {
            throw new \InvalidArgumentException(sprintf('The AgriculturalInsuranceDiscountFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\AgriculturalInsuranceDiscountFactor, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AgriculturalInsuranceDiscountFactor[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AgriculturalInsuranceDiscountFactor|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AgriculturalInsuranceDiscountFactor|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AgriculturalInsuranceDiscountFactor|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AgriculturalInsuranceDiscountFactor|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AgriculturalInsuranceDiscountFactor|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AgriculturalInsuranceDiscountFactor
     */
    public function getAttributeName()
    {
        return 'AgriculturalInsuranceDiscountFactor';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAgriculturalInsuranceDiscountFactor
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
