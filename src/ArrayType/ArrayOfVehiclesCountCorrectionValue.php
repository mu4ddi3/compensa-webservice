<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfVehiclesCountCorrectionValue ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfVehiclesCountCorrectionValue
 * @subpackage Arrays
 */
class ArrayOfVehiclesCountCorrectionValue extends AbstractStructArrayBase
{
    /**
     * The VehiclesCountCorrectionValue
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\VehiclesCountCorrectionValue[]
     */
    public $VehiclesCountCorrectionValue;
    /**
     * Constructor method for ArrayOfVehiclesCountCorrectionValue
     * @uses ArrayOfVehiclesCountCorrectionValue::setVehiclesCountCorrectionValue()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VehiclesCountCorrectionValue[] $vehiclesCountCorrectionValue
     */
    public function __construct(array $vehiclesCountCorrectionValue = array())
    {
        $this
            ->setVehiclesCountCorrectionValue($vehiclesCountCorrectionValue);
    }
    /**
     * Get VehiclesCountCorrectionValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehiclesCountCorrectionValue[]|null
     */
    public function getVehiclesCountCorrectionValue()
    {
        return isset($this->VehiclesCountCorrectionValue) ? $this->VehiclesCountCorrectionValue : null;
    }
    /**
     * Set VehiclesCountCorrectionValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VehiclesCountCorrectionValue[] $vehiclesCountCorrectionValue
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVehiclesCountCorrectionValue
     */
    public function setVehiclesCountCorrectionValue(array $vehiclesCountCorrectionValue = array())
    {
        foreach ($vehiclesCountCorrectionValue as $arrayOfVehiclesCountCorrectionValueVehiclesCountCorrectionValueItem) {
            // validation for constraint: itemType
            if (!$arrayOfVehiclesCountCorrectionValueVehiclesCountCorrectionValueItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\VehiclesCountCorrectionValue) {
                throw new \InvalidArgumentException(sprintf('The VehiclesCountCorrectionValue property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\VehiclesCountCorrectionValue, "%s" given', is_object($arrayOfVehiclesCountCorrectionValueVehiclesCountCorrectionValueItem) ? get_class($arrayOfVehiclesCountCorrectionValueVehiclesCountCorrectionValueItem) : gettype($arrayOfVehiclesCountCorrectionValueVehiclesCountCorrectionValueItem)), __LINE__);
            }
        }
        if (is_null($vehiclesCountCorrectionValue) || (is_array($vehiclesCountCorrectionValue) && empty($vehiclesCountCorrectionValue))) {
            unset($this->VehiclesCountCorrectionValue);
        } else {
            $this->VehiclesCountCorrectionValue = $vehiclesCountCorrectionValue;
        }
        return $this;
    }
    /**
     * Add item to VehiclesCountCorrectionValue value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VehiclesCountCorrectionValue $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVehiclesCountCorrectionValue
     */
    public function addToVehiclesCountCorrectionValue(\Mu4ddi3\Compensa\Webservice\StructType\VehiclesCountCorrectionValue $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\VehiclesCountCorrectionValue) {
            throw new \InvalidArgumentException(sprintf('The VehiclesCountCorrectionValue property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\VehiclesCountCorrectionValue, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->VehiclesCountCorrectionValue[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehiclesCountCorrectionValue|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehiclesCountCorrectionValue|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehiclesCountCorrectionValue|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehiclesCountCorrectionValue|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehiclesCountCorrectionValue|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string VehiclesCountCorrectionValue
     */
    public function getAttributeName()
    {
        return 'VehiclesCountCorrectionValue';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVehiclesCountCorrectionValue
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
