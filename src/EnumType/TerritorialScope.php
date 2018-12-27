<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for TerritorialScope EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:TerritorialScope
 * @subpackage Enumerations
 */
class TerritorialScope
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'Europe'
     * @return string 'Europe'
     */
    const VALUE_EUROPE = 'Europe';
    /**
     * Constant for value 'World'
     * @return string 'World'
     */
    const VALUE_WORLD = 'World';
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
     * @uses self::VALUE_EUROPE
     * @uses self::VALUE_WORLD
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_EUROPE,
            self::VALUE_WORLD,
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
