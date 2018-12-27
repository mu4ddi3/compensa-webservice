<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfNoAmortizationDiscountFactor ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfNoAmortizationDiscountFactor
 * @subpackage Arrays
 */
class ArrayOfNoAmortizationDiscountFactor extends AbstractStructArrayBase
{
    /**
     * The NoAmortizationDiscountFactor
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\NoAmortizationDiscountFactor[]
     */
    public $NoAmortizationDiscountFactor;
    /**
     * Constructor method for ArrayOfNoAmortizationDiscountFactor
     * @uses ArrayOfNoAmortizationDiscountFactor::setNoAmortizationDiscountFactor()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\NoAmortizationDiscountFactor[] $noAmortizationDiscountFactor
     */
    public function __construct(array $noAmortizationDiscountFactor = array())
    {
        $this
            ->setNoAmortizationDiscountFactor($noAmortizationDiscountFactor);
    }
    /**
     * Get NoAmortizationDiscountFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\NoAmortizationDiscountFactor[]|null
     */
    public function getNoAmortizationDiscountFactor()
    {
        return isset($this->NoAmortizationDiscountFactor) ? $this->NoAmortizationDiscountFactor : null;
    }
    /**
     * Set NoAmortizationDiscountFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\NoAmortizationDiscountFactor[] $noAmortizationDiscountFactor
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfNoAmortizationDiscountFactor
     */
    public function setNoAmortizationDiscountFactor(array $noAmortizationDiscountFactor = array())
    {
        foreach ($noAmortizationDiscountFactor as $arrayOfNoAmortizationDiscountFactorNoAmortizationDiscountFactorItem) {
            // validation for constraint: itemType
            if (!$arrayOfNoAmortizationDiscountFactorNoAmortizationDiscountFactorItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\NoAmortizationDiscountFactor) {
                throw new \InvalidArgumentException(sprintf('The NoAmortizationDiscountFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\NoAmortizationDiscountFactor, "%s" given', is_object($arrayOfNoAmortizationDiscountFactorNoAmortizationDiscountFactorItem) ? get_class($arrayOfNoAmortizationDiscountFactorNoAmortizationDiscountFactorItem) : gettype($arrayOfNoAmortizationDiscountFactorNoAmortizationDiscountFactorItem)), __LINE__);
            }
        }
        if (is_null($noAmortizationDiscountFactor) || (is_array($noAmortizationDiscountFactor) && empty($noAmortizationDiscountFactor))) {
            unset($this->NoAmortizationDiscountFactor);
        } else {
            $this->NoAmortizationDiscountFactor = $noAmortizationDiscountFactor;
        }
        return $this;
    }
    /**
     * Add item to NoAmortizationDiscountFactor value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\NoAmortizationDiscountFactor $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfNoAmortizationDiscountFactor
     */
    public function addToNoAmortizationDiscountFactor(\Mu4ddi3\Compensa\Webservice\StructType\NoAmortizationDiscountFactor $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\NoAmortizationDiscountFactor) {
            throw new \InvalidArgumentException(sprintf('The NoAmortizationDiscountFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\NoAmortizationDiscountFactor, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->NoAmortizationDiscountFactor[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\NoAmortizationDiscountFactor|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\NoAmortizationDiscountFactor|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\NoAmortizationDiscountFactor|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\NoAmortizationDiscountFactor|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\NoAmortizationDiscountFactor|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string NoAmortizationDiscountFactor
     */
    public function getAttributeName()
    {
        return 'NoAmortizationDiscountFactor';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfNoAmortizationDiscountFactor
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
