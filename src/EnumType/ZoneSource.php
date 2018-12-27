<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for ZoneSource EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ZoneSource
 * @subpackage Enumerations
 */
class ZoneSource
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'OwnerPostalCode'
     * @return string 'OwnerPostalCode'
     */
    const VALUE_OWNER_POSTAL_CODE = 'OwnerPostalCode';
    /**
     * Constant for value 'CoOwnerPostalCode'
     * @return string 'CoOwnerPostalCode'
     */
    const VALUE_CO_OWNER_POSTAL_CODE = 'CoOwnerPostalCode';
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
     * @uses self::VALUE_OWNER_POSTAL_CODE
     * @uses self::VALUE_CO_OWNER_POSTAL_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_OWNER_POSTAL_CODE,
            self::VALUE_CO_OWNER_POSTAL_CODE,
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
