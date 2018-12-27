<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for PolicyPaymentType EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PolicyPaymentType
 * @subpackage Enumerations
 */
class PolicyPaymentType
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'OneTime'
     * @return string 'OneTime'
     */
    const VALUE_ONE_TIME = 'OneTime';
    /**
     * Constant for value 'Yearly'
     * @return string 'Yearly'
     */
    const VALUE_YEARLY = 'Yearly';
    /**
     * Constant for value 'HalfYear'
     * @return string 'HalfYear'
     */
    const VALUE_HALF_YEAR = 'HalfYear';
    /**
     * Constant for value 'Quarterly'
     * @return string 'Quarterly'
     */
    const VALUE_QUARTERLY = 'Quarterly';
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
     * @uses self::VALUE_ONE_TIME
     * @uses self::VALUE_YEARLY
     * @uses self::VALUE_HALF_YEAR
     * @uses self::VALUE_QUARTERLY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_ONE_TIME,
            self::VALUE_YEARLY,
            self::VALUE_HALF_YEAR,
            self::VALUE_QUARTERLY,
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
