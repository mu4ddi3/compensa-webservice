<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for ClaimStatus EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ClaimStatus
 * @subpackage Enumerations
 */
class ClaimStatus
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'Confirmed'
     * @return string 'Confirmed'
     */
    const VALUE_CONFIRMED = 'Confirmed';
    /**
     * Constant for value 'Refused'
     * @return string 'Refused'
     */
    const VALUE_REFUSED = 'Refused';
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
     * @uses self::VALUE_CONFIRMED
     * @uses self::VALUE_REFUSED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_CONFIRMED,
            self::VALUE_REFUSED,
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
