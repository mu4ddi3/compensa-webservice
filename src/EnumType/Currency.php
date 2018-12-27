<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for Currency EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Currency
 * @subpackage Enumerations
 */
class Currency
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'PLN'
     * @return string 'PLN'
     */
    const VALUE_PLN = 'PLN';
    /**
     * Constant for value 'LTL'
     * @return string 'LTL'
     */
    const VALUE_LTL = 'LTL';
    /**
     * Constant for value 'RON'
     * @return string 'RON'
     */
    const VALUE_RON = 'RON';
    /**
     * Constant for value 'EUR'
     * @return string 'EUR'
     */
    const VALUE_EUR = 'EUR';
    /**
     * Constant for value 'USD'
     * @return string 'USD'
     */
    const VALUE_USD = 'USD';
    /**
     * Constant for value 'GBP'
     * @return string 'GBP'
     */
    const VALUE_GBP = 'GBP';
    /**
     * Constant for value 'LVL'
     * @return string 'LVL'
     */
    const VALUE_LVL = 'LVL';
    /**
     * Constant for value 'BGN'
     * @return string 'BGN'
     */
    const VALUE_BGN = 'BGN';
    /**
     * Constant for value 'CHF'
     * @return string 'CHF'
     */
    const VALUE_CHF = 'CHF';
    /**
     * Constant for value 'HUF'
     * @return string 'HUF'
     */
    const VALUE_HUF = 'HUF';
    /**
     * Constant for value 'MDL'
     * @return string 'MDL'
     */
    const VALUE_MDL = 'MDL';
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
     * @uses self::VALUE_NONE
     * @uses self::VALUE_PLN
     * @uses self::VALUE_LTL
     * @uses self::VALUE_RON
     * @uses self::VALUE_EUR
     * @uses self::VALUE_USD
     * @uses self::VALUE_GBP
     * @uses self::VALUE_LVL
     * @uses self::VALUE_BGN
     * @uses self::VALUE_CHF
     * @uses self::VALUE_HUF
     * @uses self::VALUE_MDL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_PLN,
            self::VALUE_LTL,
            self::VALUE_RON,
            self::VALUE_EUR,
            self::VALUE_USD,
            self::VALUE_GBP,
            self::VALUE_LVL,
            self::VALUE_BGN,
            self::VALUE_CHF,
            self::VALUE_HUF,
            self::VALUE_MDL,
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
