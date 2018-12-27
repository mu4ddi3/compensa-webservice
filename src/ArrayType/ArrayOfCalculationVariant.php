<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCalculationVariant ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfCalculationVariant
 * @subpackage Arrays
 */
class ArrayOfCalculationVariant extends AbstractStructArrayBase
{
    /**
     * The CalculationVariant
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\CalculationVariant[]
     */
    public $CalculationVariant;
    /**
     * Constructor method for ArrayOfCalculationVariant
     * @uses ArrayOfCalculationVariant::setCalculationVariant()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CalculationVariant[] $calculationVariant
     */
    public function __construct(array $calculationVariant = array())
    {
        $this
            ->setCalculationVariant($calculationVariant);
    }
    /**
     * Get CalculationVariant value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CalculationVariant[]|null
     */
    public function getCalculationVariant()
    {
        return isset($this->CalculationVariant) ? $this->CalculationVariant : null;
    }
    /**
     * Set CalculationVariant value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CalculationVariant[] $calculationVariant
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCalculationVariant
     */
    public function setCalculationVariant(array $calculationVariant = array())
    {
        foreach ($calculationVariant as $arrayOfCalculationVariantCalculationVariantItem) {
            // validation for constraint: itemType
            if (!$arrayOfCalculationVariantCalculationVariantItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\CalculationVariant) {
                throw new \InvalidArgumentException(sprintf('The CalculationVariant property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\CalculationVariant, "%s" given', is_object($arrayOfCalculationVariantCalculationVariantItem) ? get_class($arrayOfCalculationVariantCalculationVariantItem) : gettype($arrayOfCalculationVariantCalculationVariantItem)), __LINE__);
            }
        }
        if (is_null($calculationVariant) || (is_array($calculationVariant) && empty($calculationVariant))) {
            unset($this->CalculationVariant);
        } else {
            $this->CalculationVariant = $calculationVariant;
        }
        return $this;
    }
    /**
     * Add item to CalculationVariant value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CalculationVariant $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCalculationVariant
     */
    public function addToCalculationVariant(\Mu4ddi3\Compensa\Webservice\StructType\CalculationVariant $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\CalculationVariant) {
            throw new \InvalidArgumentException(sprintf('The CalculationVariant property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\CalculationVariant, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CalculationVariant[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CalculationVariant|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CalculationVariant|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CalculationVariant|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CalculationVariant|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CalculationVariant|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CalculationVariant
     */
    public function getAttributeName()
    {
        return 'CalculationVariant';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCalculationVariant
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
