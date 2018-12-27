<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for InsuredAge EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:InsuredAge
 * @subpackage Enumerations
 */
class InsuredAge
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'Young'
     * @return string 'Young'
     */
    const VALUE_YOUNG = 'Young';
    /**
     * Constant for value 'Middle'
     * @return string 'Middle'
     */
    const VALUE_MIDDLE = 'Middle';
    /**
     * Constant for value 'Old'
     * @return string 'Old'
     */
    const VALUE_OLD = 'Old';
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
     * @uses self::VALUE_YOUNG
     * @uses self::VALUE_MIDDLE
     * @uses self::VALUE_OLD
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_YOUNG,
            self::VALUE_MIDDLE,
            self::VALUE_OLD,
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
