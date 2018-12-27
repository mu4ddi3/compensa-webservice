<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfLifeInsuranceDiscountFactor ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfLifeInsuranceDiscountFactor
 * @subpackage Arrays
 */
class ArrayOfLifeInsuranceDiscountFactor extends AbstractStructArrayBase
{
    /**
     * The LifeInsuranceDiscountFactor
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\LifeInsuranceDiscountFactor[]
     */
    public $LifeInsuranceDiscountFactor;
    /**
     * Constructor method for ArrayOfLifeInsuranceDiscountFactor
     * @uses ArrayOfLifeInsuranceDiscountFactor::setLifeInsuranceDiscountFactor()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\LifeInsuranceDiscountFactor[] $lifeInsuranceDiscountFactor
     */
    public function __construct(array $lifeInsuranceDiscountFactor = array())
    {
        $this
            ->setLifeInsuranceDiscountFactor($lifeInsuranceDiscountFactor);
    }
    /**
     * Get LifeInsuranceDiscountFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\LifeInsuranceDiscountFactor[]|null
     */
    public function getLifeInsuranceDiscountFactor()
    {
        return isset($this->LifeInsuranceDiscountFactor) ? $this->LifeInsuranceDiscountFactor : null;
    }
    /**
     * Set LifeInsuranceDiscountFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\LifeInsuranceDiscountFactor[] $lifeInsuranceDiscountFactor
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfLifeInsuranceDiscountFactor
     */
    public function setLifeInsuranceDiscountFactor(array $lifeInsuranceDiscountFactor = array())
    {
        foreach ($lifeInsuranceDiscountFactor as $arrayOfLifeInsuranceDiscountFactorLifeInsuranceDiscountFactorItem) {
            // validation for constraint: itemType
            if (!$arrayOfLifeInsuranceDiscountFactorLifeInsuranceDiscountFactorItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\LifeInsuranceDiscountFactor) {
                throw new \InvalidArgumentException(sprintf('The LifeInsuranceDiscountFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\LifeInsuranceDiscountFactor, "%s" given', is_object($arrayOfLifeInsuranceDiscountFactorLifeInsuranceDiscountFactorItem) ? get_class($arrayOfLifeInsuranceDiscountFactorLifeInsuranceDiscountFactorItem) : gettype($arrayOfLifeInsuranceDiscountFactorLifeInsuranceDiscountFactorItem)), __LINE__);
            }
        }
        if (is_null($lifeInsuranceDiscountFactor) || (is_array($lifeInsuranceDiscountFactor) && empty($lifeInsuranceDiscountFactor))) {
            unset($this->LifeInsuranceDiscountFactor);
        } else {
            $this->LifeInsuranceDiscountFactor = $lifeInsuranceDiscountFactor;
        }
        return $this;
    }
    /**
     * Add item to LifeInsuranceDiscountFactor value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\LifeInsuranceDiscountFactor $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfLifeInsuranceDiscountFactor
     */
    public function addToLifeInsuranceDiscountFactor(\Mu4ddi3\Compensa\Webservice\StructType\LifeInsuranceDiscountFactor $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\LifeInsuranceDiscountFactor) {
            throw new \InvalidArgumentException(sprintf('The LifeInsuranceDiscountFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\LifeInsuranceDiscountFactor, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->LifeInsuranceDiscountFactor[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\LifeInsuranceDiscountFactor|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\LifeInsuranceDiscountFactor|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\LifeInsuranceDiscountFactor|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\LifeInsuranceDiscountFactor|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\LifeInsuranceDiscountFactor|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string LifeInsuranceDiscountFactor
     */
    public function getAttributeName()
    {
        return 'LifeInsuranceDiscountFactor';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfLifeInsuranceDiscountFactor
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
