<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for VehicleSource EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:VehicleSource
 * @subpackage Enumerations
 */
class VehicleSource
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'InfoEkspert'
     * @return string 'InfoEkspert'
     */
    const VALUE_INFO_EKSPERT = 'InfoEkspert';
    /**
     * Constant for value 'CompensaDictionary'
     * @return string 'CompensaDictionary'
     */
    const VALUE_COMPENSA_DICTIONARY = 'CompensaDictionary';
    /**
     * Constant for value 'ExternalDictionary'
     * @return string 'ExternalDictionary'
     */
    const VALUE_EXTERNAL_DICTIONARY = 'ExternalDictionary';
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
     * @uses self::VALUE_INFO_EKSPERT
     * @uses self::VALUE_COMPENSA_DICTIONARY
     * @uses self::VALUE_EXTERNAL_DICTIONARY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_INFO_EKSPERT,
            self::VALUE_COMPENSA_DICTIONARY,
            self::VALUE_EXTERNAL_DICTIONARY,
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
