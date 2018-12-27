<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for LogicalOperatorType EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:LogicalOperatorType
 * @subpackage Enumerations
 */
class LogicalOperatorType
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'And'
     * @return string 'And'
     */
    const VALUE_AND = 'And';
    /**
     * Constant for value 'Or'
     * @return string 'Or'
     */
    const VALUE_OR = 'Or';
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
     * @uses self::VALUE_AND
     * @uses self::VALUE_OR
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_AND,
            self::VALUE_OR,
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
