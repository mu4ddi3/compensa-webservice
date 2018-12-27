<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for FuelType EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:FuelType
 * @subpackage Enumerations
 */
class FuelType
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'D'
     * @return string 'D'
     */
    const VALUE_D = 'D';
    /**
     * Constant for value 'E'
     * @return string 'E'
     */
    const VALUE_E = 'E';
    /**
     * Constant for value 'G'
     * @return string 'G'
     */
    const VALUE_G = 'G';
    /**
     * Constant for value 'H'
     * @return string 'H'
     */
    const VALUE_H = 'H';
    /**
     * Constant for value 'O'
     * @return string 'O'
     */
    const VALUE_O = 'O';
    /**
     * Constant for value 'V'
     * @return string 'V'
     */
    const VALUE_V = 'V';
    /**
     * Constant for value 'C'
     * @return string 'C'
     */
    const VALUE_C = 'C';
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
     * @uses self::VALUE_NONE
     * @uses self::VALUE_D
     * @uses self::VALUE_E
     * @uses self::VALUE_G
     * @uses self::VALUE_H
     * @uses self::VALUE_O
     * @uses self::VALUE_V
     * @uses self::VALUE_C
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_NONE,
            self::VALUE_D,
            self::VALUE_E,
            self::VALUE_G,
            self::VALUE_H,
            self::VALUE_O,
            self::VALUE_V,
            self::VALUE_C,
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
