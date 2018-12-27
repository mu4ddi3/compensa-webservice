<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for VariantCalculationAssistance EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:VariantCalculationAssistance
 * @subpackage Enumerations
 */
class VariantCalculationAssistance
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'Baza'
     * @return string 'Baza'
     */
    const VALUE_BAZA = 'Baza';
    /**
     * Constant for value 'Top'
     * @return string 'Top'
     */
    const VALUE_TOP = 'Top';
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
     * @uses self::VALUE_BAZA
     * @uses self::VALUE_TOP
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_BAZA,
            self::VALUE_TOP,
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
