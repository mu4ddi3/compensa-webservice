<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfVehicleGroupBlackRiskRule ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfVehicleGroupBlackRiskRule
 * @subpackage Arrays
 */
class ArrayOfVehicleGroupBlackRiskRule extends AbstractStructArrayBase
{
    /**
     * The VehicleGroupBlackRiskRule
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\VehicleGroupBlackRiskRule[]
     */
    public $VehicleGroupBlackRiskRule;
    /**
     * Constructor method for ArrayOfVehicleGroupBlackRiskRule
     * @uses ArrayOfVehicleGroupBlackRiskRule::setVehicleGroupBlackRiskRule()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VehicleGroupBlackRiskRule[] $vehicleGroupBlackRiskRule
     */
    public function __construct(array $vehicleGroupBlackRiskRule = array())
    {
        $this
            ->setVehicleGroupBlackRiskRule($vehicleGroupBlackRiskRule);
    }
    /**
     * Get VehicleGroupBlackRiskRule value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleGroupBlackRiskRule[]|null
     */
    public function getVehicleGroupBlackRiskRule()
    {
        return isset($this->VehicleGroupBlackRiskRule) ? $this->VehicleGroupBlackRiskRule : null;
    }
    /**
     * Set VehicleGroupBlackRiskRule value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VehicleGroupBlackRiskRule[] $vehicleGroupBlackRiskRule
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVehicleGroupBlackRiskRule
     */
    public function setVehicleGroupBlackRiskRule(array $vehicleGroupBlackRiskRule = array())
    {
        foreach ($vehicleGroupBlackRiskRule as $arrayOfVehicleGroupBlackRiskRuleVehicleGroupBlackRiskRuleItem) {
            // validation for constraint: itemType
            if (!$arrayOfVehicleGroupBlackRiskRuleVehicleGroupBlackRiskRuleItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\VehicleGroupBlackRiskRule) {
                throw new \InvalidArgumentException(sprintf('The VehicleGroupBlackRiskRule property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\VehicleGroupBlackRiskRule, "%s" given', is_object($arrayOfVehicleGroupBlackRiskRuleVehicleGroupBlackRiskRuleItem) ? get_class($arrayOfVehicleGroupBlackRiskRuleVehicleGroupBlackRiskRuleItem) : gettype($arrayOfVehicleGroupBlackRiskRuleVehicleGroupBlackRiskRuleItem)), __LINE__);
            }
        }
        if (is_null($vehicleGroupBlackRiskRule) || (is_array($vehicleGroupBlackRiskRule) && empty($vehicleGroupBlackRiskRule))) {
            unset($this->VehicleGroupBlackRiskRule);
        } else {
            $this->VehicleGroupBlackRiskRule = $vehicleGroupBlackRiskRule;
        }
        return $this;
    }
    /**
     * Add item to VehicleGroupBlackRiskRule value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VehicleGroupBlackRiskRule $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVehicleGroupBlackRiskRule
     */
    public function addToVehicleGroupBlackRiskRule(\Mu4ddi3\Compensa\Webservice\StructType\VehicleGroupBlackRiskRule $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\VehicleGroupBlackRiskRule) {
            throw new \InvalidArgumentException(sprintf('The VehicleGroupBlackRiskRule property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\VehicleGroupBlackRiskRule, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->VehicleGroupBlackRiskRule[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleGroupBlackRiskRule|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleGroupBlackRiskRule|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleGroupBlackRiskRule|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleGroupBlackRiskRule|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleGroupBlackRiskRule|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string VehicleGroupBlackRiskRule
     */
    public function getAttributeName()
    {
        return 'VehicleGroupBlackRiskRule';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVehicleGroupBlackRiskRule
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
