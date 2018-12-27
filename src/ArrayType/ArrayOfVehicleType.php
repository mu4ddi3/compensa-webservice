<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfVehicleType ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfVehicleType
 * @subpackage Arrays
 */
class ArrayOfVehicleType extends AbstractStructArrayBase
{
    /**
     * The VehicleType
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $VehicleType;
    /**
     * Constructor method for ArrayOfVehicleType
     * @uses ArrayOfVehicleType::setVehicleType()
     * @param string[] $vehicleType
     */
    public function __construct(array $vehicleType = array())
    {
        $this
            ->setVehicleType($vehicleType);
    }
    /**
     * Get VehicleType value
     * @return string[]|null
     */
    public function getVehicleType()
    {
        return $this->VehicleType;
    }
    /**
     * Set VehicleType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VehicleType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VehicleType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $vehicleType
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVehicleType
     */
    public function setVehicleType(array $vehicleType = array())
    {
        $invalidValues = array();
        foreach ($vehicleType as $arrayOfVehicleTypeVehicleTypeItem) {
            if (!\Mu4ddi3\Compensa\Webservice\EnumType\VehicleType::valueIsValid($arrayOfVehicleTypeVehicleTypeItem)) {
                $invalidValues[] = var_export($arrayOfVehicleTypeVehicleTypeItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\VehicleType::getValidValues())), __LINE__);
        }
        $this->VehicleType = $vehicleType;
        return $this;
    }
    /**
     * Add item to VehicleType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VehicleType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VehicleType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVehicleType
     */
    public function addToVehicleType($item)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\VehicleType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\VehicleType::getValidValues())), __LINE__);
        }
        $this->VehicleType[] = $item;
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
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VehicleType::valueIsValid()
     * @param string $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVehicleType
     */
    public function add($item)
    {
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\VehicleType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\VehicleType::getValidValues())), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string VehicleType
     */
    public function getAttributeName()
    {
        return 'VehicleType';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVehicleType
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
