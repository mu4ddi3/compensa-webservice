<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for CrossSellWith21021 EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CrossSellWith21021
 * @subpackage Enumerations
 */
class CrossSellWith21021
{
    /**
     * Constant for value 'X'
     * @return string 'X'
     */
    const VALUE_X = 'X';
    /**
     * Constant for value 'N'
     * @return string 'N'
     */
    const VALUE_N = 'N';
    /**
     * Constant for value 'T'
     * @return string 'T'
     */
    const VALUE_T = 'T';
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
     * @uses self::VALUE_X
     * @uses self::VALUE_N
     * @uses self::VALUE_T
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_X,
            self::VALUE_N,
            self::VALUE_T,
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
