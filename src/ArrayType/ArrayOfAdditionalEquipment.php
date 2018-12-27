<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAdditionalEquipment ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAdditionalEquipment
 * @subpackage Arrays
 */
class ArrayOfAdditionalEquipment extends AbstractStructArrayBase
{
    /**
     * The AdditionalEquipment
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\AdditionalEquipment[]
     */
    public $AdditionalEquipment;
    /**
     * Constructor method for ArrayOfAdditionalEquipment
     * @uses ArrayOfAdditionalEquipment::setAdditionalEquipment()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AdditionalEquipment[] $additionalEquipment
     */
    public function __construct(array $additionalEquipment = array())
    {
        $this
            ->setAdditionalEquipment($additionalEquipment);
    }
    /**
     * Get AdditionalEquipment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalEquipment[]|null
     */
    public function getAdditionalEquipment()
    {
        return isset($this->AdditionalEquipment) ? $this->AdditionalEquipment : null;
    }
    /**
     * Set AdditionalEquipment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AdditionalEquipment[] $additionalEquipment
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAdditionalEquipment
     */
    public function setAdditionalEquipment(array $additionalEquipment = array())
    {
        foreach ($additionalEquipment as $arrayOfAdditionalEquipmentAdditionalEquipmentItem) {
            // validation for constraint: itemType
            if (!$arrayOfAdditionalEquipmentAdditionalEquipmentItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\AdditionalEquipment) {
                throw new \InvalidArgumentException(sprintf('The AdditionalEquipment property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\AdditionalEquipment, "%s" given', is_object($arrayOfAdditionalEquipmentAdditionalEquipmentItem) ? get_class($arrayOfAdditionalEquipmentAdditionalEquipmentItem) : gettype($arrayOfAdditionalEquipmentAdditionalEquipmentItem)), __LINE__);
            }
        }
        if (is_null($additionalEquipment) || (is_array($additionalEquipment) && empty($additionalEquipment))) {
            unset($this->AdditionalEquipment);
        } else {
            $this->AdditionalEquipment = $additionalEquipment;
        }
        return $this;
    }
    /**
     * Add item to AdditionalEquipment value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AdditionalEquipment $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAdditionalEquipment
     */
    public function addToAdditionalEquipment(\Mu4ddi3\Compensa\Webservice\StructType\AdditionalEquipment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\AdditionalEquipment) {
            throw new \InvalidArgumentException(sprintf('The AdditionalEquipment property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\AdditionalEquipment, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AdditionalEquipment[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalEquipment|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalEquipment|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalEquipment|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalEquipment|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalEquipment|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AdditionalEquipment
     */
    public function getAttributeName()
    {
        return 'AdditionalEquipment';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAdditionalEquipment
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
