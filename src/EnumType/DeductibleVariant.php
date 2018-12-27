<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for DeductibleVariant EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DeductibleVariant
 * @subpackage Enumerations
 */
class DeductibleVariant
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'Off'
     * @return string 'Off'
     */
    const VALUE_OFF = 'Off';
    /**
     * Constant for value 'Standard'
     * @return string 'Standard'
     */
    const VALUE_STANDARD = 'Standard';
    /**
     * Constant for value 'FixedValue1500'
     * @return string 'FixedValue1500'
     */
    const VALUE_FIXED_VALUE_1500 = 'FixedValue1500';
    /**
     * Constant for value 'FixedValue3000'
     * @return string 'FixedValue3000'
     */
    const VALUE_FIXED_VALUE_3000 = 'FixedValue3000';
    /**
     * Constant for value 'FixedValue4000'
     * @return string 'FixedValue4000'
     */
    const VALUE_FIXED_VALUE_4000 = 'FixedValue4000';
    /**
     * Constant for value 'FixedValue5000'
     * @return string 'FixedValue5000'
     */
    const VALUE_FIXED_VALUE_5000 = 'FixedValue5000';
    /**
     * Constant for value 'Percentage2'
     * @return string 'Percentage2'
     */
    const VALUE_PERCENTAGE_2 = 'Percentage2';
    /**
     * Constant for value 'Percentage5'
     * @return string 'Percentage5'
     */
    const VALUE_PERCENTAGE_5 = 'Percentage5';
    /**
     * Constant for value 'Percentage10'
     * @return string 'Percentage10'
     */
    const VALUE_PERCENTAGE_10 = 'Percentage10';
    /**
     * Constant for value 'Percentage15'
     * @return string 'Percentage15'
     */
    const VALUE_PERCENTAGE_15 = 'Percentage15';
    /**
     * Constant for value 'Percentage20'
     * @return string 'Percentage20'
     */
    const VALUE_PERCENTAGE_20 = 'Percentage20';
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
     * @uses self::VALUE_OFF
     * @uses self::VALUE_STANDARD
     * @uses self::VALUE_FIXED_VALUE_1500
     * @uses self::VALUE_FIXED_VALUE_3000
     * @uses self::VALUE_FIXED_VALUE_4000
     * @uses self::VALUE_FIXED_VALUE_5000
     * @uses self::VALUE_PERCENTAGE_2
     * @uses self::VALUE_PERCENTAGE_5
     * @uses self::VALUE_PERCENTAGE_10
     * @uses self::VALUE_PERCENTAGE_15
     * @uses self::VALUE_PERCENTAGE_20
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_OFF,
            self::VALUE_STANDARD,
            self::VALUE_FIXED_VALUE_1500,
            self::VALUE_FIXED_VALUE_3000,
            self::VALUE_FIXED_VALUE_4000,
            self::VALUE_FIXED_VALUE_5000,
            self::VALUE_PERCENTAGE_2,
            self::VALUE_PERCENTAGE_5,
            self::VALUE_PERCENTAGE_10,
            self::VALUE_PERCENTAGE_15,
            self::VALUE_PERCENTAGE_20,
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
