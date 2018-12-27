<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for PolicyDurationType EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PolicyDurationType
 * @subpackage Enumerations
 */
class PolicyDurationType
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'OneYear'
     * @return string 'OneYear'
     */
    const VALUE_ONE_YEAR = 'OneYear';
    /**
     * Constant for value 'TwoYears'
     * @return string 'TwoYears'
     */
    const VALUE_TWO_YEARS = 'TwoYears';
    /**
     * Constant for value 'ThreeYears'
     * @return string 'ThreeYears'
     */
    const VALUE_THREE_YEARS = 'ThreeYears';
    /**
     * Constant for value 'Other'
     * @return string 'Other'
     */
    const VALUE_OTHER = 'Other';
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
     * @uses self::VALUE_ONE_YEAR
     * @uses self::VALUE_TWO_YEARS
     * @uses self::VALUE_THREE_YEARS
     * @uses self::VALUE_OTHER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_ONE_YEAR,
            self::VALUE_TWO_YEARS,
            self::VALUE_THREE_YEARS,
            self::VALUE_OTHER,
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
