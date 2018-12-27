<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPropertyInsuranceDiscountFactor ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPropertyInsuranceDiscountFactor
 * @subpackage Arrays
 */
class ArrayOfPropertyInsuranceDiscountFactor extends AbstractStructArrayBase
{
    /**
     * The PropertyInsuranceDiscountFactor
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PropertyInsuranceDiscountFactor[]
     */
    public $PropertyInsuranceDiscountFactor;
    /**
     * Constructor method for ArrayOfPropertyInsuranceDiscountFactor
     * @uses ArrayOfPropertyInsuranceDiscountFactor::setPropertyInsuranceDiscountFactor()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PropertyInsuranceDiscountFactor[] $propertyInsuranceDiscountFactor
     */
    public function __construct(array $propertyInsuranceDiscountFactor = array())
    {
        $this
            ->setPropertyInsuranceDiscountFactor($propertyInsuranceDiscountFactor);
    }
    /**
     * Get PropertyInsuranceDiscountFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PropertyInsuranceDiscountFactor[]|null
     */
    public function getPropertyInsuranceDiscountFactor()
    {
        return isset($this->PropertyInsuranceDiscountFactor) ? $this->PropertyInsuranceDiscountFactor : null;
    }
    /**
     * Set PropertyInsuranceDiscountFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PropertyInsuranceDiscountFactor[] $propertyInsuranceDiscountFactor
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPropertyInsuranceDiscountFactor
     */
    public function setPropertyInsuranceDiscountFactor(array $propertyInsuranceDiscountFactor = array())
    {
        foreach ($propertyInsuranceDiscountFactor as $arrayOfPropertyInsuranceDiscountFactorPropertyInsuranceDiscountFactorItem) {
            // validation for constraint: itemType
            if (!$arrayOfPropertyInsuranceDiscountFactorPropertyInsuranceDiscountFactorItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\PropertyInsuranceDiscountFactor) {
                throw new \InvalidArgumentException(sprintf('The PropertyInsuranceDiscountFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\PropertyInsuranceDiscountFactor, "%s" given', is_object($arrayOfPropertyInsuranceDiscountFactorPropertyInsuranceDiscountFactorItem) ? get_class($arrayOfPropertyInsuranceDiscountFactorPropertyInsuranceDiscountFactorItem) : gettype($arrayOfPropertyInsuranceDiscountFactorPropertyInsuranceDiscountFactorItem)), __LINE__);
            }
        }
        if (is_null($propertyInsuranceDiscountFactor) || (is_array($propertyInsuranceDiscountFactor) && empty($propertyInsuranceDiscountFactor))) {
            unset($this->PropertyInsuranceDiscountFactor);
        } else {
            $this->PropertyInsuranceDiscountFactor = $propertyInsuranceDiscountFactor;
        }
        return $this;
    }
    /**
     * Add item to PropertyInsuranceDiscountFactor value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PropertyInsuranceDiscountFactor $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPropertyInsuranceDiscountFactor
     */
    public function addToPropertyInsuranceDiscountFactor(\Mu4ddi3\Compensa\Webservice\StructType\PropertyInsuranceDiscountFactor $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\PropertyInsuranceDiscountFactor) {
            throw new \InvalidArgumentException(sprintf('The PropertyInsuranceDiscountFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\PropertyInsuranceDiscountFactor, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PropertyInsuranceDiscountFactor[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PropertyInsuranceDiscountFactor|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PropertyInsuranceDiscountFactor|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PropertyInsuranceDiscountFactor|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PropertyInsuranceDiscountFactor|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PropertyInsuranceDiscountFactor|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PropertyInsuranceDiscountFactor
     */
    public function getAttributeName()
    {
        return 'PropertyInsuranceDiscountFactor';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPropertyInsuranceDiscountFactor
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
