<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TerritoryUsageAvailabilityCondition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:TerritoryUsageAvailabilityCondition
 * @subpackage Structs
 */
class TerritoryUsageAvailabilityCondition extends AvailabilityCondition
{
    /**
     * The TerritoryUsageValues
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTerritoryUsageType
     */
    public $TerritoryUsageValues;
    /**
     * Constructor method for TerritoryUsageAvailabilityCondition
     * @uses TerritoryUsageAvailabilityCondition::setTerritoryUsageValues()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTerritoryUsageType $territoryUsageValues
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTerritoryUsageType $territoryUsageValues = null)
    {
        $this
            ->setTerritoryUsageValues($territoryUsageValues);
    }
    /**
     * Get TerritoryUsageValues value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTerritoryUsageType|null
     */
    public function getTerritoryUsageValues()
    {
        return isset($this->TerritoryUsageValues) ? $this->TerritoryUsageValues : null;
    }
    /**
     * Set TerritoryUsageValues value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTerritoryUsageType $territoryUsageValues
     * @return \Mu4ddi3\Compensa\Webservice\StructType\TerritoryUsageAvailabilityCondition
     */
    public function setTerritoryUsageValues(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTerritoryUsageType $territoryUsageValues = null)
    {
        if (is_null($territoryUsageValues) || (is_array($territoryUsageValues) && empty($territoryUsageValues))) {
            unset($this->TerritoryUsageValues);
        } else {
            $this->TerritoryUsageValues = $territoryUsageValues;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\TerritoryUsageAvailabilityCondition
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
