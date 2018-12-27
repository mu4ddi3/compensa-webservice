<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for InsuredPropertyType EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:InsuredPropertyType
 * @subpackage Enumerations
 */
class InsuredPropertyType
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'House'
     * @return string 'House'
     */
    const VALUE_HOUSE = 'House';
    /**
     * Constant for value 'Flat'
     * @return string 'Flat'
     */
    const VALUE_FLAT = 'Flat';
    /**
     * Constant for value 'Farm'
     * @return string 'Farm'
     */
    const VALUE_FARM = 'Farm';
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
     * @uses self::VALUE_HOUSE
     * @uses self::VALUE_FLAT
     * @uses self::VALUE_FARM
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_HOUSE,
            self::VALUE_FLAT,
            self::VALUE_FARM,
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
