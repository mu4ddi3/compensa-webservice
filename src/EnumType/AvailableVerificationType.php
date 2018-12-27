<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for AvailableVerificationType EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AvailableVerificationType
 * @subpackage Enumerations
 */
class AvailableVerificationType
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'Unavailable'
     * @return string 'Unavailable'
     */
    const VALUE_UNAVAILABLE = 'Unavailable';
    /**
     * Constant for value 'Partner'
     * @return string 'Partner'
     */
    const VALUE_PARTNER = 'Partner';
    /**
     * Constant for value 'PartnerAndVehicle'
     * @return string 'PartnerAndVehicle'
     */
    const VALUE_PARTNER_AND_VEHICLE = 'PartnerAndVehicle';
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
     * @uses self::VALUE_UNAVAILABLE
     * @uses self::VALUE_PARTNER
     * @uses self::VALUE_PARTNER_AND_VEHICLE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_UNAVAILABLE,
            self::VALUE_PARTNER,
            self::VALUE_PARTNER_AND_VEHICLE,
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
