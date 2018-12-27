<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfVehicleAgeRange ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfVehicleAgeRange
 * @subpackage Arrays
 */
class ArrayOfVehicleAgeRange extends AbstractStructArrayBase
{
    /**
     * The VehicleAgeRange
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\VehicleAgeRange[]
     */
    public $VehicleAgeRange;
    /**
     * Constructor method for ArrayOfVehicleAgeRange
     * @uses ArrayOfVehicleAgeRange::setVehicleAgeRange()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VehicleAgeRange[] $vehicleAgeRange
     */
    public function __construct(array $vehicleAgeRange = array())
    {
        $this
            ->setVehicleAgeRange($vehicleAgeRange);
    }
    /**
     * Get VehicleAgeRange value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleAgeRange[]|null
     */
    public function getVehicleAgeRange()
    {
        return isset($this->VehicleAgeRange) ? $this->VehicleAgeRange : null;
    }
    /**
     * Set VehicleAgeRange value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VehicleAgeRange[] $vehicleAgeRange
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVehicleAgeRange
     */
    public function setVehicleAgeRange(array $vehicleAgeRange = array())
    {
        foreach ($vehicleAgeRange as $arrayOfVehicleAgeRangeVehicleAgeRangeItem) {
            // validation for constraint: itemType
            if (!$arrayOfVehicleAgeRangeVehicleAgeRangeItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\VehicleAgeRange) {
                throw new \InvalidArgumentException(sprintf('The VehicleAgeRange property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\VehicleAgeRange, "%s" given', is_object($arrayOfVehicleAgeRangeVehicleAgeRangeItem) ? get_class($arrayOfVehicleAgeRangeVehicleAgeRangeItem) : gettype($arrayOfVehicleAgeRangeVehicleAgeRangeItem)), __LINE__);
            }
        }
        if (is_null($vehicleAgeRange) || (is_array($vehicleAgeRange) && empty($vehicleAgeRange))) {
            unset($this->VehicleAgeRange);
        } else {
            $this->VehicleAgeRange = $vehicleAgeRange;
        }
        return $this;
    }
    /**
     * Add item to VehicleAgeRange value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VehicleAgeRange $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVehicleAgeRange
     */
    public function addToVehicleAgeRange(\Mu4ddi3\Compensa\Webservice\StructType\VehicleAgeRange $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\VehicleAgeRange) {
            throw new \InvalidArgumentException(sprintf('The VehicleAgeRange property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\VehicleAgeRange, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->VehicleAgeRange[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleAgeRange|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleAgeRange|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleAgeRange|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleAgeRange|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleAgeRange|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string VehicleAgeRange
     */
    public function getAttributeName()
    {
        return 'VehicleAgeRange';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVehicleAgeRange
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
