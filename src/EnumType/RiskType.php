<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for RiskType EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RiskType
 * @subpackage Enumerations
 */
class RiskType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Mtpl'
     * @return string 'Mtpl'
     */
    const VALUE_MTPL = 'Mtpl';
    /**
     * Constant for value 'Mod'
     * @return string 'Mod'
     */
    const VALUE_MOD = 'Mod';
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
     * @uses self::VALUE_MTPL
     * @uses self::VALUE_MOD
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_MTPL,
            self::VALUE_MOD,
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
