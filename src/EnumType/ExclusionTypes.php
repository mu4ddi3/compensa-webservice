<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for ExclusionTypes EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ExclusionTypes
 * @subpackage Enumerations
 */
class ExclusionTypes
{
    /**
     * Constant for value 'GAPVehicleExclusion'
     * @return string 'GAPVehicleExclusion'
     */
    const VALUE_GAPVEHICLE_EXCLUSION = 'GAPVehicleExclusion';
    /**
     * Constant for value 'DiscountExclusion'
     * @return string 'DiscountExclusion'
     */
    const VALUE_DISCOUNT_EXCLUSION = 'DiscountExclusion';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_GAPVEHICLE_EXCLUSION
     * @uses self::VALUE_DISCOUNT_EXCLUSION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_GAPVEHICLE_EXCLUSION,
            self::VALUE_DISCOUNT_EXCLUSION,
        );
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
