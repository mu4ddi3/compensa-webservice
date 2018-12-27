<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfVehicleGroupEnum ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfVehicleGroupEnum
 * @subpackage Arrays
 */
class ArrayOfVehicleGroupEnum extends AbstractStructArrayBase
{
    /**
     * The VehicleGroupEnum
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $VehicleGroupEnum;
    /**
     * Constructor method for ArrayOfVehicleGroupEnum
     * @uses ArrayOfVehicleGroupEnum::setVehicleGroupEnum()
     * @param string[] $vehicleGroupEnum
     */
    public function __construct(array $vehicleGroupEnum = array())
    {
        $this
            ->setVehicleGroupEnum($vehicleGroupEnum);
    }
    /**
     * Get VehicleGroupEnum value
     * @return string[]|null
     */
    public function getVehicleGroupEnum()
    {
        return $this->VehicleGroupEnum;
    }
    /**
     * Set VehicleGroupEnum value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VehicleGroupEnum::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VehicleGroupEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $vehicleGroupEnum
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVehicleGroupEnum
     */
    public function setVehicleGroupEnum(array $vehicleGroupEnum = array())
    {
        $invalidValues = array();
        foreach ($vehicleGroupEnum as $arrayOfVehicleGroupEnumVehicleGroupEnumItem) {
            if (!\Mu4ddi3\Compensa\Webservice\EnumType\VehicleGroupEnum::valueIsValid($arrayOfVehicleGroupEnumVehicleGroupEnumItem)) {
                $invalidValues[] = var_export($arrayOfVehicleGroupEnumVehicleGroupEnumItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\VehicleGroupEnum::getValidValues())), __LINE__);
        }
        $this->VehicleGroupEnum = $vehicleGroupEnum;
        return $this;
    }
    /**
     * Add item to VehicleGroupEnum value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VehicleGroupEnum::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VehicleGroupEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVehicleGroupEnum
     */
    public function addToVehicleGroupEnum($item)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\VehicleGroupEnum::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\VehicleGroupEnum::getValidValues())), __LINE__);
        }
        $this->VehicleGroupEnum[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws \InvalidArgumentException
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VehicleGroupEnum::valueIsValid()
     * @param string $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVehicleGroupEnum
     */
    public function add($item)
    {
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\VehicleGroupEnum::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\VehicleGroupEnum::getValidValues())), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string VehicleGroupEnum
     */
    public function getAttributeName()
    {
        return 'VehicleGroupEnum';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVehicleGroupEnum
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
