<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TerritoryUsageDiscountTariffDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:TerritoryUsageDiscountTariffDefinition
 * @subpackage Structs
 */
class TerritoryUsageDiscountTariffDefinition extends AbstractStructBase
{
    /**
     * The TerritoryUsageDiscountValues
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTerritoryUsageDiscountValue
     */
    public $TerritoryUsageDiscountValues;
    /**
     * Constructor method for TerritoryUsageDiscountTariffDefinition
     * @uses TerritoryUsageDiscountTariffDefinition::setTerritoryUsageDiscountValues()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTerritoryUsageDiscountValue $territoryUsageDiscountValues
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTerritoryUsageDiscountValue $territoryUsageDiscountValues = null)
    {
        $this
            ->setTerritoryUsageDiscountValues($territoryUsageDiscountValues);
    }
    /**
     * Get TerritoryUsageDiscountValues value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTerritoryUsageDiscountValue|null
     */
    public function getTerritoryUsageDiscountValues()
    {
        return isset($this->TerritoryUsageDiscountValues) ? $this->TerritoryUsageDiscountValues : null;
    }
    /**
     * Set TerritoryUsageDiscountValues value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTerritoryUsageDiscountValue $territoryUsageDiscountValues
     * @return \Mu4ddi3\Compensa\Webservice\StructType\TerritoryUsageDiscountTariffDefinition
     */
    public function setTerritoryUsageDiscountValues(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTerritoryUsageDiscountValue $territoryUsageDiscountValues = null)
    {
        if (is_null($territoryUsageDiscountValues) || (is_array($territoryUsageDiscountValues) && empty($territoryUsageDiscountValues))) {
            unset($this->TerritoryUsageDiscountValues);
        } else {
            $this->TerritoryUsageDiscountValues = $territoryUsageDiscountValues;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\TerritoryUsageDiscountTariffDefinition
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
