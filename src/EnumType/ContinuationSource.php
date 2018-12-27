<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for ContinuationSource EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ContinuationSource
 * @subpackage Enumerations
 */
class ContinuationSource
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'Compensa'
     * @return string 'Compensa'
     */
    const VALUE_COMPENSA = 'Compensa';
    /**
     * Constant for value 'Benefia'
     * @return string 'Benefia'
     */
    const VALUE_BENEFIA = 'Benefia';
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
     * @uses self::VALUE_COMPENSA
     * @uses self::VALUE_BENEFIA
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_COMPENSA,
            self::VALUE_BENEFIA,
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
