<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for VerificationKind EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:VerificationKind
 * @subpackage Enumerations
 */
class VerificationKind
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'Partner'
     * @return string 'Partner'
     */
    const VALUE_PARTNER = 'Partner';
    /**
     * Constant for value 'Vehicle'
     * @return string 'Vehicle'
     */
    const VALUE_VEHICLE = 'Vehicle';
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
     * @uses self::VALUE_PARTNER
     * @uses self::VALUE_VEHICLE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_PARTNER,
            self::VALUE_VEHICLE,
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
