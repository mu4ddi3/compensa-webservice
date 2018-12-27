<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfZoneRange ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfZoneRange
 * @subpackage Arrays
 */
class ArrayOfZoneRange extends AbstractStructArrayBase
{
    /**
     * The ZoneRange
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ZoneRange[]
     */
    public $ZoneRange;
    /**
     * Constructor method for ArrayOfZoneRange
     * @uses ArrayOfZoneRange::setZoneRange()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ZoneRange[] $zoneRange
     */
    public function __construct(array $zoneRange = array())
    {
        $this
            ->setZoneRange($zoneRange);
    }
    /**
     * Get ZoneRange value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ZoneRange[]|null
     */
    public function getZoneRange()
    {
        return isset($this->ZoneRange) ? $this->ZoneRange : null;
    }
    /**
     * Set ZoneRange value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ZoneRange[] $zoneRange
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfZoneRange
     */
    public function setZoneRange(array $zoneRange = array())
    {
        foreach ($zoneRange as $arrayOfZoneRangeZoneRangeItem) {
            // validation for constraint: itemType
            if (!$arrayOfZoneRangeZoneRangeItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\ZoneRange) {
                throw new \InvalidArgumentException(sprintf('The ZoneRange property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\ZoneRange, "%s" given', is_object($arrayOfZoneRangeZoneRangeItem) ? get_class($arrayOfZoneRangeZoneRangeItem) : gettype($arrayOfZoneRangeZoneRangeItem)), __LINE__);
            }
        }
        if (is_null($zoneRange) || (is_array($zoneRange) && empty($zoneRange))) {
            unset($this->ZoneRange);
        } else {
            $this->ZoneRange = $zoneRange;
        }
        return $this;
    }
    /**
     * Add item to ZoneRange value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ZoneRange $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfZoneRange
     */
    public function addToZoneRange(\Mu4ddi3\Compensa\Webservice\StructType\ZoneRange $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\ZoneRange) {
            throw new \InvalidArgumentException(sprintf('The ZoneRange property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\ZoneRange, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ZoneRange[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ZoneRange|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ZoneRange|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ZoneRange|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ZoneRange|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ZoneRange|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ZoneRange
     */
    public function getAttributeName()
    {
        return 'ZoneRange';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfZoneRange
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
