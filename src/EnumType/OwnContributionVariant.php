<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for OwnContributionVariant EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:OwnContributionVariant
 * @subpackage Enumerations
 */
class OwnContributionVariant
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'Supressed'
     * @return string 'Supressed'
     */
    const VALUE_SUPRESSED = 'Supressed';
    /**
     * Constant for value 'FixedValue200'
     * @return string 'FixedValue200'
     */
    const VALUE_FIXED_VALUE_200 = 'FixedValue200';
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
     * @uses self::VALUE_SUPRESSED
     * @uses self::VALUE_FIXED_VALUE_200
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_SUPRESSED,
            self::VALUE_FIXED_VALUE_200,
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
