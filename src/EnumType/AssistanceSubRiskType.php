<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for AssistanceSubRiskType EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AssistanceSubRiskType
 * @subpackage Enumerations
 */
class AssistanceSubRiskType
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'Base'
     * @return string 'Base'
     */
    const VALUE_BASE = 'Base';
    /**
     * Constant for value 'Extended'
     * @return string 'Extended'
     */
    const VALUE_EXTENDED = 'Extended';
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
     * @uses self::VALUE_BASE
     * @uses self::VALUE_EXTENDED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_BASE,
            self::VALUE_EXTENDED,
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
