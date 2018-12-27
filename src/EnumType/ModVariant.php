<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for ModVariant EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ModVariant
 * @subpackage Enumerations
 */
class ModVariant
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Mod'
     * @return string 'Mod'
     */
    const VALUE_MOD = 'Mod';
    /**
     * Constant for value 'ModVehicleElements'
     * @return string 'ModVehicleElements'
     */
    const VALUE_MOD_VEHICLE_ELEMENTS = 'ModVehicleElements';
    /**
     * Constant for value 'ModTheft'
     * @return string 'ModTheft'
     */
    const VALUE_MOD_THEFT = 'ModTheft';
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
     * @uses self::VALUE_MOD
     * @uses self::VALUE_MOD_VEHICLE_ELEMENTS
     * @uses self::VALUE_MOD_THEFT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_MOD,
            self::VALUE_MOD_VEHICLE_ELEMENTS,
            self::VALUE_MOD_THEFT,
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
