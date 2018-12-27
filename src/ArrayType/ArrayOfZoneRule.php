<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfZoneRule ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfZoneRule
 * @subpackage Arrays
 */
class ArrayOfZoneRule extends AbstractStructArrayBase
{
    /**
     * The ZoneRule
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ZoneRule[]
     */
    public $ZoneRule;
    /**
     * Constructor method for ArrayOfZoneRule
     * @uses ArrayOfZoneRule::setZoneRule()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ZoneRule[] $zoneRule
     */
    public function __construct(array $zoneRule = array())
    {
        $this
            ->setZoneRule($zoneRule);
    }
    /**
     * Get ZoneRule value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ZoneRule[]|null
     */
    public function getZoneRule()
    {
        return isset($this->ZoneRule) ? $this->ZoneRule : null;
    }
    /**
     * Set ZoneRule value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ZoneRule[] $zoneRule
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfZoneRule
     */
    public function setZoneRule(array $zoneRule = array())
    {
        foreach ($zoneRule as $arrayOfZoneRuleZoneRuleItem) {
            // validation for constraint: itemType
            if (!$arrayOfZoneRuleZoneRuleItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\ZoneRule) {
                throw new \InvalidArgumentException(sprintf('The ZoneRule property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\ZoneRule, "%s" given', is_object($arrayOfZoneRuleZoneRuleItem) ? get_class($arrayOfZoneRuleZoneRuleItem) : gettype($arrayOfZoneRuleZoneRuleItem)), __LINE__);
            }
        }
        if (is_null($zoneRule) || (is_array($zoneRule) && empty($zoneRule))) {
            unset($this->ZoneRule);
        } else {
            $this->ZoneRule = $zoneRule;
        }
        return $this;
    }
    /**
     * Add item to ZoneRule value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ZoneRule $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfZoneRule
     */
    public function addToZoneRule(\Mu4ddi3\Compensa\Webservice\StructType\ZoneRule $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\ZoneRule) {
            throw new \InvalidArgumentException(sprintf('The ZoneRule property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\ZoneRule, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ZoneRule[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ZoneRule|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ZoneRule|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ZoneRule|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ZoneRule|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ZoneRule|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ZoneRule
     */
    public function getAttributeName()
    {
        return 'ZoneRule';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfZoneRule
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
