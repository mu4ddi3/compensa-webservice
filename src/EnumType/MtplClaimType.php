<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for MtplClaimType EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MtplClaimType
 * @subpackage Enumerations
 */
class MtplClaimType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'PropertyClaim'
     * @return string 'PropertyClaim'
     */
    const VALUE_PROPERTY_CLAIM = 'PropertyClaim';
    /**
     * Constant for value 'VehicleClaim'
     * @return string 'VehicleClaim'
     */
    const VALUE_VEHICLE_CLAIM = 'VehicleClaim';
    /**
     * Constant for value 'PersonalClaim'
     * @return string 'PersonalClaim'
     */
    const VALUE_PERSONAL_CLAIM = 'PersonalClaim';
    /**
     * Constant for value 'OtherClaim'
     * @return string 'OtherClaim'
     */
    const VALUE_OTHER_CLAIM = 'OtherClaim';
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
     * @uses self::VALUE_NONE
     * @uses self::VALUE_PROPERTY_CLAIM
     * @uses self::VALUE_VEHICLE_CLAIM
     * @uses self::VALUE_PERSONAL_CLAIM
     * @uses self::VALUE_OTHER_CLAIM
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_PROPERTY_CLAIM,
            self::VALUE_VEHICLE_CLAIM,
            self::VALUE_PERSONAL_CLAIM,
            self::VALUE_OTHER_CLAIM,
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
