<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfOffRoadVehicleDiscountFactor ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfOffRoadVehicleDiscountFactor
 * @subpackage Arrays
 */
class ArrayOfOffRoadVehicleDiscountFactor extends AbstractStructArrayBase
{
    /**
     * The OffRoadVehicleDiscountFactor
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\OffRoadVehicleDiscountFactor[]
     */
    public $OffRoadVehicleDiscountFactor;
    /**
     * Constructor method for ArrayOfOffRoadVehicleDiscountFactor
     * @uses ArrayOfOffRoadVehicleDiscountFactor::setOffRoadVehicleDiscountFactor()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\OffRoadVehicleDiscountFactor[] $offRoadVehicleDiscountFactor
     */
    public function __construct(array $offRoadVehicleDiscountFactor = array())
    {
        $this
            ->setOffRoadVehicleDiscountFactor($offRoadVehicleDiscountFactor);
    }
    /**
     * Get OffRoadVehicleDiscountFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OffRoadVehicleDiscountFactor[]|null
     */
    public function getOffRoadVehicleDiscountFactor()
    {
        return isset($this->OffRoadVehicleDiscountFactor) ? $this->OffRoadVehicleDiscountFactor : null;
    }
    /**
     * Set OffRoadVehicleDiscountFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\OffRoadVehicleDiscountFactor[] $offRoadVehicleDiscountFactor
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfOffRoadVehicleDiscountFactor
     */
    public function setOffRoadVehicleDiscountFactor(array $offRoadVehicleDiscountFactor = array())
    {
        foreach ($offRoadVehicleDiscountFactor as $arrayOfOffRoadVehicleDiscountFactorOffRoadVehicleDiscountFactorItem) {
            // validation for constraint: itemType
            if (!$arrayOfOffRoadVehicleDiscountFactorOffRoadVehicleDiscountFactorItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\OffRoadVehicleDiscountFactor) {
                throw new \InvalidArgumentException(sprintf('The OffRoadVehicleDiscountFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\OffRoadVehicleDiscountFactor, "%s" given', is_object($arrayOfOffRoadVehicleDiscountFactorOffRoadVehicleDiscountFactorItem) ? get_class($arrayOfOffRoadVehicleDiscountFactorOffRoadVehicleDiscountFactorItem) : gettype($arrayOfOffRoadVehicleDiscountFactorOffRoadVehicleDiscountFactorItem)), __LINE__);
            }
        }
        if (is_null($offRoadVehicleDiscountFactor) || (is_array($offRoadVehicleDiscountFactor) && empty($offRoadVehicleDiscountFactor))) {
            unset($this->OffRoadVehicleDiscountFactor);
        } else {
            $this->OffRoadVehicleDiscountFactor = $offRoadVehicleDiscountFactor;
        }
        return $this;
    }
    /**
     * Add item to OffRoadVehicleDiscountFactor value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\OffRoadVehicleDiscountFactor $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfOffRoadVehicleDiscountFactor
     */
    public function addToOffRoadVehicleDiscountFactor(\Mu4ddi3\Compensa\Webservice\StructType\OffRoadVehicleDiscountFactor $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\OffRoadVehicleDiscountFactor) {
            throw new \InvalidArgumentException(sprintf('The OffRoadVehicleDiscountFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\OffRoadVehicleDiscountFactor, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->OffRoadVehicleDiscountFactor[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OffRoadVehicleDiscountFactor|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OffRoadVehicleDiscountFactor|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OffRoadVehicleDiscountFactor|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OffRoadVehicleDiscountFactor|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OffRoadVehicleDiscountFactor|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string OffRoadVehicleDiscountFactor
     */
    public function getAttributeName()
    {
        return 'OffRoadVehicleDiscountFactor';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfOffRoadVehicleDiscountFactor
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
