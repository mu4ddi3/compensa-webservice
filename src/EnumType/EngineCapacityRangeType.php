<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for EngineCapacityRangeType EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:EngineCapacityRangeType
 * @subpackage Enumerations
 */
class EngineCapacityRangeType
{
    /**
     * Constant for value 'Continuous'
     * @return string 'Continuous'
     */
    const VALUE_CONTINUOUS = 'Continuous';
    /**
     * Constant for value 'Discrete'
     * @return string 'Discrete'
     */
    const VALUE_DISCRETE = 'Discrete';
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
     * @uses self::VALUE_CONTINUOUS
     * @uses self::VALUE_DISCRETE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CONTINUOUS,
            self::VALUE_DISCRETE,
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
