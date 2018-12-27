<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfNoConsumptionInsuranceSumDiscountFactor ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfNoConsumptionInsuranceSumDiscountFactor
 * @subpackage Arrays
 */
class ArrayOfNoConsumptionInsuranceSumDiscountFactor extends AbstractStructArrayBase
{
    /**
     * The NoConsumptionInsuranceSumDiscountFactor
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\NoConsumptionInsuranceSumDiscountFactor[]
     */
    public $NoConsumptionInsuranceSumDiscountFactor;
    /**
     * Constructor method for ArrayOfNoConsumptionInsuranceSumDiscountFactor
     * @uses ArrayOfNoConsumptionInsuranceSumDiscountFactor::setNoConsumptionInsuranceSumDiscountFactor()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\NoConsumptionInsuranceSumDiscountFactor[] $noConsumptionInsuranceSumDiscountFactor
     */
    public function __construct(array $noConsumptionInsuranceSumDiscountFactor = array())
    {
        $this
            ->setNoConsumptionInsuranceSumDiscountFactor($noConsumptionInsuranceSumDiscountFactor);
    }
    /**
     * Get NoConsumptionInsuranceSumDiscountFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\NoConsumptionInsuranceSumDiscountFactor[]|null
     */
    public function getNoConsumptionInsuranceSumDiscountFactor()
    {
        return isset($this->NoConsumptionInsuranceSumDiscountFactor) ? $this->NoConsumptionInsuranceSumDiscountFactor : null;
    }
    /**
     * Set NoConsumptionInsuranceSumDiscountFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\NoConsumptionInsuranceSumDiscountFactor[] $noConsumptionInsuranceSumDiscountFactor
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfNoConsumptionInsuranceSumDiscountFactor
     */
    public function setNoConsumptionInsuranceSumDiscountFactor(array $noConsumptionInsuranceSumDiscountFactor = array())
    {
        foreach ($noConsumptionInsuranceSumDiscountFactor as $arrayOfNoConsumptionInsuranceSumDiscountFactorNoConsumptionInsuranceSumDiscountFactorItem) {
            // validation for constraint: itemType
            if (!$arrayOfNoConsumptionInsuranceSumDiscountFactorNoConsumptionInsuranceSumDiscountFactorItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\NoConsumptionInsuranceSumDiscountFactor) {
                throw new \InvalidArgumentException(sprintf('The NoConsumptionInsuranceSumDiscountFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\NoConsumptionInsuranceSumDiscountFactor, "%s" given', is_object($arrayOfNoConsumptionInsuranceSumDiscountFactorNoConsumptionInsuranceSumDiscountFactorItem) ? get_class($arrayOfNoConsumptionInsuranceSumDiscountFactorNoConsumptionInsuranceSumDiscountFactorItem) : gettype($arrayOfNoConsumptionInsuranceSumDiscountFactorNoConsumptionInsuranceSumDiscountFactorItem)), __LINE__);
            }
        }
        if (is_null($noConsumptionInsuranceSumDiscountFactor) || (is_array($noConsumptionInsuranceSumDiscountFactor) && empty($noConsumptionInsuranceSumDiscountFactor))) {
            unset($this->NoConsumptionInsuranceSumDiscountFactor);
        } else {
            $this->NoConsumptionInsuranceSumDiscountFactor = $noConsumptionInsuranceSumDiscountFactor;
        }
        return $this;
    }
    /**
     * Add item to NoConsumptionInsuranceSumDiscountFactor value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\NoConsumptionInsuranceSumDiscountFactor $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfNoConsumptionInsuranceSumDiscountFactor
     */
    public function addToNoConsumptionInsuranceSumDiscountFactor(\Mu4ddi3\Compensa\Webservice\StructType\NoConsumptionInsuranceSumDiscountFactor $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\NoConsumptionInsuranceSumDiscountFactor) {
            throw new \InvalidArgumentException(sprintf('The NoConsumptionInsuranceSumDiscountFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\NoConsumptionInsuranceSumDiscountFactor, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->NoConsumptionInsuranceSumDiscountFactor[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\NoConsumptionInsuranceSumDiscountFactor|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\NoConsumptionInsuranceSumDiscountFactor|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\NoConsumptionInsuranceSumDiscountFactor|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\NoConsumptionInsuranceSumDiscountFactor|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\NoConsumptionInsuranceSumDiscountFactor|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string NoConsumptionInsuranceSumDiscountFactor
     */
    public function getAttributeName()
    {
        return 'NoConsumptionInsuranceSumDiscountFactor';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfNoConsumptionInsuranceSumDiscountFactor
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
