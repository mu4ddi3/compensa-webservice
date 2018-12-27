<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for PackageZoneSource EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PackageZoneSource
 * @subpackage Enumerations
 */
class PackageZoneSource
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'ZoneOc'
     * @return string 'ZoneOc'
     */
    const VALUE_ZONE_OC = 'ZoneOc';
    /**
     * Constant for value 'ZoneAc'
     * @return string 'ZoneAc'
     */
    const VALUE_ZONE_AC = 'ZoneAc';
    /**
     * Constant for value 'ZoneOcAc'
     * @return string 'ZoneOcAc'
     */
    const VALUE_ZONE_OC_AC = 'ZoneOcAc';
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
     * @uses self::VALUE_UNDEFINED
     * @uses self::VALUE_ZONE_OC
     * @uses self::VALUE_ZONE_AC
     * @uses self::VALUE_ZONE_OC_AC
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_ZONE_OC,
            self::VALUE_ZONE_AC,
            self::VALUE_ZONE_OC_AC,
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
