<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for SteeringWheelConfiguration EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:SteeringWheelConfiguration
 * @subpackage Enumerations
 */
class SteeringWheelConfiguration
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'LHD'
     * @return string 'LHD'
     */
    const VALUE_LHD = 'LHD';
    /**
     * Constant for value 'RHD'
     * @return string 'RHD'
     */
    const VALUE_RHD = 'RHD';
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
     * @uses self::VALUE_LHD
     * @uses self::VALUE_RHD
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_LHD,
            self::VALUE_RHD,
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
