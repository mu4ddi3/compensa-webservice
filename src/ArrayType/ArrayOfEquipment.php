<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfEquipment ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfEquipment
 * @subpackage Arrays
 */
class ArrayOfEquipment extends AbstractStructArrayBase
{
    /**
     * The Equipment
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Equipment[]
     */
    public $Equipment;
    /**
     * Constructor method for ArrayOfEquipment
     * @uses ArrayOfEquipment::setEquipment()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Equipment[] $equipment
     */
    public function __construct(array $equipment = array())
    {
        $this
            ->setEquipment($equipment);
    }
    /**
     * Get Equipment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Equipment[]|null
     */
    public function getEquipment()
    {
        return isset($this->Equipment) ? $this->Equipment : null;
    }
    /**
     * Set Equipment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Equipment[] $equipment
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfEquipment
     */
    public function setEquipment(array $equipment = array())
    {
        foreach ($equipment as $arrayOfEquipmentEquipmentItem) {
            // validation for constraint: itemType
            if (!$arrayOfEquipmentEquipmentItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\Equipment) {
                throw new \InvalidArgumentException(sprintf('The Equipment property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\Equipment, "%s" given', is_object($arrayOfEquipmentEquipmentItem) ? get_class($arrayOfEquipmentEquipmentItem) : gettype($arrayOfEquipmentEquipmentItem)), __LINE__);
            }
        }
        if (is_null($equipment) || (is_array($equipment) && empty($equipment))) {
            unset($this->Equipment);
        } else {
            $this->Equipment = $equipment;
        }
        return $this;
    }
    /**
     * Add item to Equipment value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Equipment $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfEquipment
     */
    public function addToEquipment(\Mu4ddi3\Compensa\Webservice\StructType\Equipment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\Equipment) {
            throw new \InvalidArgumentException(sprintf('The Equipment property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\Equipment, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Equipment[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Equipment|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Equipment|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Equipment|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Equipment|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Equipment|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Equipment
     */
    public function getAttributeName()
    {
        return 'Equipment';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfEquipment
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
