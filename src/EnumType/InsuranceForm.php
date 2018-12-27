<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for InsuranceForm EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:InsuranceForm
 * @subpackage Enumerations
 */
class InsuranceForm
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'Individual'
     * @return string 'Individual'
     */
    const VALUE_INDIVIDUAL = 'Individual';
    /**
     * Constant for value 'Group'
     * @return string 'Group'
     */
    const VALUE_GROUP = 'Group';
    /**
     * Constant for value 'FireFighters'
     * @return string 'FireFighters'
     */
    const VALUE_FIRE_FIGHTERS = 'FireFighters';
    /**
     * Constant for value 'Family'
     * @return string 'Family'
     */
    const VALUE_FAMILY = 'Family';
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
     * @uses self::VALUE_INDIVIDUAL
     * @uses self::VALUE_GROUP
     * @uses self::VALUE_FIRE_FIGHTERS
     * @uses self::VALUE_FAMILY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_INDIVIDUAL,
            self::VALUE_GROUP,
            self::VALUE_FIRE_FIGHTERS,
            self::VALUE_FAMILY,
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
