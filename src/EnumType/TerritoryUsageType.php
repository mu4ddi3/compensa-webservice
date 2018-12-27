<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for TerritoryUsageType EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:TerritoryUsageType
 * @subpackage Enumerations
 */
class TerritoryUsageType
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'OnlyPoland'
     * @return string 'OnlyPoland'
     */
    const VALUE_ONLY_POLAND = 'OnlyPoland';
    /**
     * Constant for value 'Abroad'
     * @return string 'Abroad'
     */
    const VALUE_ABROAD = 'Abroad';
    /**
     * Constant for value 'AbroadWithoutGB'
     * @return string 'AbroadWithoutGB'
     */
    const VALUE_ABROAD_WITHOUT_GB = 'AbroadWithoutGB';
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
     * @uses self::VALUE_ONLY_POLAND
     * @uses self::VALUE_ABROAD
     * @uses self::VALUE_ABROAD_WITHOUT_GB
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_ONLY_POLAND,
            self::VALUE_ABROAD,
            self::VALUE_ABROAD_WITHOUT_GB,
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
