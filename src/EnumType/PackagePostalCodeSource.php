<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for PackagePostalCodeSource EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PackagePostalCodeSource
 * @subpackage Enumerations
 */
class PackagePostalCodeSource
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'PreferredOwnerPostalCode'
     * @return string 'PreferredOwnerPostalCode'
     */
    const VALUE_PREFERRED_OWNER_POSTAL_CODE = 'PreferredOwnerPostalCode';
    /**
     * Constant for value 'PreferredCoOwnerPostalCode'
     * @return string 'PreferredCoOwnerPostalCode'
     */
    const VALUE_PREFERRED_CO_OWNER_POSTAL_CODE = 'PreferredCoOwnerPostalCode';
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
     * @uses self::VALUE_PREFERRED_OWNER_POSTAL_CODE
     * @uses self::VALUE_PREFERRED_CO_OWNER_POSTAL_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_PREFERRED_OWNER_POSTAL_CODE,
            self::VALUE_PREFERRED_CO_OWNER_POSTAL_CODE,
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
