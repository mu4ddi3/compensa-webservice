<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for VehicleType EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:VehicleType
 * @subpackage Enumerations
 */
class VehicleType
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'A'
     * @return string 'A'
     */
    const VALUE_A = 'A';
    /**
     * Constant for value 'C'
     * @return string 'C'
     */
    const VALUE_C = 'C';
    /**
     * Constant for value 'D'
     * @return string 'D'
     */
    const VALUE_D = 'D';
    /**
     * Constant for value 'K'
     * @return string 'K'
     */
    const VALUE_K = 'K';
    /**
     * Constant for value 'M'
     * @return string 'M'
     */
    const VALUE_M = 'M';
    /**
     * Constant for value 'N'
     * @return string 'N'
     */
    const VALUE_N = 'N';
    /**
     * Constant for value 'O'
     * @return string 'O'
     */
    const VALUE_O = 'O';
    /**
     * Constant for value 'P'
     * @return string 'P'
     */
    const VALUE_P = 'P';
    /**
     * Constant for value 'R'
     * @return string 'R'
     */
    const VALUE_R = 'R';
    /**
     * Constant for value 'S'
     * @return string 'S'
     */
    const VALUE_S = 'S';
    /**
     * Constant for value 'T'
     * @return string 'T'
     */
    const VALUE_T = 'T';
    /**
     * Constant for value 'I'
     * @return string 'I'
     */
    const VALUE_I = 'I';
    /**
     * Constant for value 'W'
     * @return string 'W'
     */
    const VALUE_W = 'W';
    /**
     * Constant for value 'Z'
     * @return string 'Z'
     */
    const VALUE_Z = 'Z';
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
     * @uses self::VALUE_A
     * @uses self::VALUE_C
     * @uses self::VALUE_D
     * @uses self::VALUE_K
     * @uses self::VALUE_M
     * @uses self::VALUE_N
     * @uses self::VALUE_O
     * @uses self::VALUE_P
     * @uses self::VALUE_R
     * @uses self::VALUE_S
     * @uses self::VALUE_T
     * @uses self::VALUE_I
     * @uses self::VALUE_W
     * @uses self::VALUE_Z
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_A,
            self::VALUE_C,
            self::VALUE_D,
            self::VALUE_K,
            self::VALUE_M,
            self::VALUE_N,
            self::VALUE_O,
            self::VALUE_P,
            self::VALUE_R,
            self::VALUE_S,
            self::VALUE_T,
            self::VALUE_I,
            self::VALUE_W,
            self::VALUE_Z,
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
