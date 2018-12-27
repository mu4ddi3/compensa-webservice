<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for InsuranceHistoryType EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:InsuranceHistoryType
 * @subpackage Enumerations
 */
class InsuranceHistoryType
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'NewContract'
     * @return string 'NewContract'
     */
    const VALUE_NEW_CONTRACT = 'NewContract';
    /**
     * Constant for value 'OneYearWithoutClaim'
     * @return string 'OneYearWithoutClaim'
     */
    const VALUE_ONE_YEAR_WITHOUT_CLAIM = 'OneYearWithoutClaim';
    /**
     * Constant for value 'TwoYearsWithoutClaim'
     * @return string 'TwoYearsWithoutClaim'
     */
    const VALUE_TWO_YEARS_WITHOUT_CLAIM = 'TwoYearsWithoutClaim';
    /**
     * Constant for value 'ThreeOrMoreYearsWithoutClaim'
     * @return string 'ThreeOrMoreYearsWithoutClaim'
     */
    const VALUE_THREE_OR_MORE_YEARS_WITHOUT_CLAIM = 'ThreeOrMoreYearsWithoutClaim';
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
     * @uses self::VALUE_NEW_CONTRACT
     * @uses self::VALUE_ONE_YEAR_WITHOUT_CLAIM
     * @uses self::VALUE_TWO_YEARS_WITHOUT_CLAIM
     * @uses self::VALUE_THREE_OR_MORE_YEARS_WITHOUT_CLAIM
     * @uses self::VALUE_OTHER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_NEW_CONTRACT,
            self::VALUE_ONE_YEAR_WITHOUT_CLAIM,
            self::VALUE_TWO_YEARS_WITHOUT_CLAIM,
            self::VALUE_THREE_OR_MORE_YEARS_WITHOUT_CLAIM,
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
