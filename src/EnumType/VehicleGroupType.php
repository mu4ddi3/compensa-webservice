<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for VehicleGroupType EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:VehicleGroupType
 * @subpackage Enumerations
 */
class VehicleGroupType
{
    /**
     * Constant for value 'Baza'
     * @return string 'Baza'
     */
    const VALUE_BAZA = 'Baza';
    /**
     * Constant for value 'Moc'
     * @return string 'Moc'
     */
    const VALUE_MOC = 'Moc';
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
     * @uses self::VALUE_BAZA
     * @uses self::VALUE_MOC
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BAZA,
            self::VALUE_MOC,
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
