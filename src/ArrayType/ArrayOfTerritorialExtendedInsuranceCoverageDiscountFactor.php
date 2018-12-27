<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTerritorialExtendedInsuranceCoverageDiscountFactor
 * ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfTerritorialExtendedInsuranceCoverageDiscountFactor
 * @subpackage Arrays
 */
class ArrayOfTerritorialExtendedInsuranceCoverageDiscountFactor extends AbstractStructArrayBase
{
    /**
     * The TerritorialExtendedInsuranceCoverageDiscountFactor
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\TerritorialExtendedInsuranceCoverageDiscountFactor[]
     */
    public $TerritorialExtendedInsuranceCoverageDiscountFactor;
    /**
     * Constructor method for ArrayOfTerritorialExtendedInsuranceCoverageDiscountFactor
     * @uses ArrayOfTerritorialExtendedInsuranceCoverageDiscountFactor::setTerritorialExtendedInsuranceCoverageDiscountFactor()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\TerritorialExtendedInsuranceCoverageDiscountFactor[] $territorialExtendedInsuranceCoverageDiscountFactor
     */
    public function __construct(array $territorialExtendedInsuranceCoverageDiscountFactor = array())
    {
        $this
            ->setTerritorialExtendedInsuranceCoverageDiscountFactor($territorialExtendedInsuranceCoverageDiscountFactor);
    }
    /**
     * Get TerritorialExtendedInsuranceCoverageDiscountFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\TerritorialExtendedInsuranceCoverageDiscountFactor[]|null
     */
    public function getTerritorialExtendedInsuranceCoverageDiscountFactor()
    {
        return isset($this->TerritorialExtendedInsuranceCoverageDiscountFactor) ? $this->TerritorialExtendedInsuranceCoverageDiscountFactor : null;
    }
    /**
     * Set TerritorialExtendedInsuranceCoverageDiscountFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\TerritorialExtendedInsuranceCoverageDiscountFactor[] $territorialExtendedInsuranceCoverageDiscountFactor
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTerritorialExtendedInsuranceCoverageDiscountFactor
     */
    public function setTerritorialExtendedInsuranceCoverageDiscountFactor(array $territorialExtendedInsuranceCoverageDiscountFactor = array())
    {
        foreach ($territorialExtendedInsuranceCoverageDiscountFactor as $arrayOfTerritorialExtendedInsuranceCoverageDiscountFactorTerritorialExtendedInsuranceCoverageDiscountFactorItem) {
            // validation for constraint: itemType
            if (!$arrayOfTerritorialExtendedInsuranceCoverageDiscountFactorTerritorialExtendedInsuranceCoverageDiscountFactorItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\TerritorialExtendedInsuranceCoverageDiscountFactor) {
                throw new \InvalidArgumentException(sprintf('The TerritorialExtendedInsuranceCoverageDiscountFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\TerritorialExtendedInsuranceCoverageDiscountFactor, "%s" given', is_object($arrayOfTerritorialExtendedInsuranceCoverageDiscountFactorTerritorialExtendedInsuranceCoverageDiscountFactorItem) ? get_class($arrayOfTerritorialExtendedInsuranceCoverageDiscountFactorTerritorialExtendedInsuranceCoverageDiscountFactorItem) : gettype($arrayOfTerritorialExtendedInsuranceCoverageDiscountFactorTerritorialExtendedInsuranceCoverageDiscountFactorItem)), __LINE__);
            }
        }
        if (is_null($territorialExtendedInsuranceCoverageDiscountFactor) || (is_array($territorialExtendedInsuranceCoverageDiscountFactor) && empty($territorialExtendedInsuranceCoverageDiscountFactor))) {
            unset($this->TerritorialExtendedInsuranceCoverageDiscountFactor);
        } else {
            $this->TerritorialExtendedInsuranceCoverageDiscountFactor = $territorialExtendedInsuranceCoverageDiscountFactor;
        }
        return $this;
    }
    /**
     * Add item to TerritorialExtendedInsuranceCoverageDiscountFactor value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\TerritorialExtendedInsuranceCoverageDiscountFactor $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTerritorialExtendedInsuranceCoverageDiscountFactor
     */
    public function addToTerritorialExtendedInsuranceCoverageDiscountFactor(\Mu4ddi3\Compensa\Webservice\StructType\TerritorialExtendedInsuranceCoverageDiscountFactor $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\TerritorialExtendedInsuranceCoverageDiscountFactor) {
            throw new \InvalidArgumentException(sprintf('The TerritorialExtendedInsuranceCoverageDiscountFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\TerritorialExtendedInsuranceCoverageDiscountFactor, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TerritorialExtendedInsuranceCoverageDiscountFactor[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\TerritorialExtendedInsuranceCoverageDiscountFactor|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\TerritorialExtendedInsuranceCoverageDiscountFactor|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\TerritorialExtendedInsuranceCoverageDiscountFactor|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\TerritorialExtendedInsuranceCoverageDiscountFactor|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\TerritorialExtendedInsuranceCoverageDiscountFactor|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TerritorialExtendedInsuranceCoverageDiscountFactor
     */
    public function getAttributeName()
    {
        return 'TerritorialExtendedInsuranceCoverageDiscountFactor';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTerritorialExtendedInsuranceCoverageDiscountFactor
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
