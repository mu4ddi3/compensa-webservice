<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfUsaVehicleDiscountFactor ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfUsaVehicleDiscountFactor
 * @subpackage Arrays
 */
class ArrayOfUsaVehicleDiscountFactor extends AbstractStructArrayBase
{
    /**
     * The UsaVehicleDiscountFactor
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\UsaVehicleDiscountFactor[]
     */
    public $UsaVehicleDiscountFactor;
    /**
     * Constructor method for ArrayOfUsaVehicleDiscountFactor
     * @uses ArrayOfUsaVehicleDiscountFactor::setUsaVehicleDiscountFactor()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\UsaVehicleDiscountFactor[] $usaVehicleDiscountFactor
     */
    public function __construct(array $usaVehicleDiscountFactor = array())
    {
        $this
            ->setUsaVehicleDiscountFactor($usaVehicleDiscountFactor);
    }
    /**
     * Get UsaVehicleDiscountFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UsaVehicleDiscountFactor[]|null
     */
    public function getUsaVehicleDiscountFactor()
    {
        return isset($this->UsaVehicleDiscountFactor) ? $this->UsaVehicleDiscountFactor : null;
    }
    /**
     * Set UsaVehicleDiscountFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\UsaVehicleDiscountFactor[] $usaVehicleDiscountFactor
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfUsaVehicleDiscountFactor
     */
    public function setUsaVehicleDiscountFactor(array $usaVehicleDiscountFactor = array())
    {
        foreach ($usaVehicleDiscountFactor as $arrayOfUsaVehicleDiscountFactorUsaVehicleDiscountFactorItem) {
            // validation for constraint: itemType
            if (!$arrayOfUsaVehicleDiscountFactorUsaVehicleDiscountFactorItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\UsaVehicleDiscountFactor) {
                throw new \InvalidArgumentException(sprintf('The UsaVehicleDiscountFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\UsaVehicleDiscountFactor, "%s" given', is_object($arrayOfUsaVehicleDiscountFactorUsaVehicleDiscountFactorItem) ? get_class($arrayOfUsaVehicleDiscountFactorUsaVehicleDiscountFactorItem) : gettype($arrayOfUsaVehicleDiscountFactorUsaVehicleDiscountFactorItem)), __LINE__);
            }
        }
        if (is_null($usaVehicleDiscountFactor) || (is_array($usaVehicleDiscountFactor) && empty($usaVehicleDiscountFactor))) {
            unset($this->UsaVehicleDiscountFactor);
        } else {
            $this->UsaVehicleDiscountFactor = $usaVehicleDiscountFactor;
        }
        return $this;
    }
    /**
     * Add item to UsaVehicleDiscountFactor value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\UsaVehicleDiscountFactor $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfUsaVehicleDiscountFactor
     */
    public function addToUsaVehicleDiscountFactor(\Mu4ddi3\Compensa\Webservice\StructType\UsaVehicleDiscountFactor $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\UsaVehicleDiscountFactor) {
            throw new \InvalidArgumentException(sprintf('The UsaVehicleDiscountFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\UsaVehicleDiscountFactor, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->UsaVehicleDiscountFactor[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UsaVehicleDiscountFactor|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UsaVehicleDiscountFactor|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UsaVehicleDiscountFactor|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UsaVehicleDiscountFactor|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UsaVehicleDiscountFactor|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string UsaVehicleDiscountFactor
     */
    public function getAttributeName()
    {
        return 'UsaVehicleDiscountFactor';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfUsaVehicleDiscountFactor
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
