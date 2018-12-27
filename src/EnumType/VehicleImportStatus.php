<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for VehicleImportStatus EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:VehicleImportStatus
 * @subpackage Enumerations
 */
class VehicleImportStatus
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'Imported'
     * @return string 'Imported'
     */
    const VALUE_IMPORTED = 'Imported';
    /**
     * Constant for value 'NotImported'
     * @return string 'NotImported'
     */
    const VALUE_NOT_IMPORTED = 'NotImported';
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
     * @uses self::VALUE_IMPORTED
     * @uses self::VALUE_NOT_IMPORTED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_IMPORTED,
            self::VALUE_NOT_IMPORTED,
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
