<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for TariffMode EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:TariffMode
 * @subpackage Enumerations
 */
class TariffMode
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'Standard'
     * @return string 'Standard'
     */
    const VALUE_STANDARD = 'Standard';
    /**
     * Constant for value 'Continuation'
     * @return string 'Continuation'
     */
    const VALUE_CONTINUATION = 'Continuation';
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
     * @uses self::VALUE_STANDARD
     * @uses self::VALUE_CONTINUATION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_STANDARD,
            self::VALUE_CONTINUATION,
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
