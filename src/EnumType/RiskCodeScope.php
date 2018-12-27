<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for RiskCodeScope EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RiskCodeScope
 * @subpackage Enumerations
 */
class RiskCodeScope
{
    /**
     * Constant for value 'Uniform'
     * @return string 'Uniform'
     */
    const VALUE_UNIFORM = 'Uniform';
    /**
     * Constant for value 'OCBAZA'
     * @return string 'OCBAZA'
     */
    const VALUE_OCBAZA = 'OCBAZA';
    /**
     * Constant for value 'OCMOC'
     * @return string 'OCMOC'
     */
    const VALUE_OCMOC = 'OCMOC';
    /**
     * Constant for value 'ACBAZA'
     * @return string 'ACBAZA'
     */
    const VALUE_ACBAZA = 'ACBAZA';
    /**
     * Constant for value 'ACMOC'
     * @return string 'ACMOC'
     */
    const VALUE_ACMOC = 'ACMOC';
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
     * @uses self::VALUE_UNIFORM
     * @uses self::VALUE_OCBAZA
     * @uses self::VALUE_OCMOC
     * @uses self::VALUE_ACBAZA
     * @uses self::VALUE_ACMOC
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNIFORM,
            self::VALUE_OCBAZA,
            self::VALUE_OCMOC,
            self::VALUE_ACBAZA,
            self::VALUE_ACMOC,
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
