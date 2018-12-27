<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for MarketingDiscoutVariant EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MarketingDiscoutVariant
 * @subpackage Enumerations
 */
class MarketingDiscoutVariant
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'HomeOrFlat'
     * @return string 'HomeOrFlat'
     */
    const VALUE_HOME_OR_FLAT = 'HomeOrFlat';
    /**
     * Constant for value 'CompensaLifeCalculation'
     * @return string 'CompensaLifeCalculation'
     */
    const VALUE_COMPENSA_LIFE_CALCULATION = 'CompensaLifeCalculation';
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
     * @uses self::VALUE_HOME_OR_FLAT
     * @uses self::VALUE_COMPENSA_LIFE_CALCULATION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_HOME_OR_FLAT,
            self::VALUE_COMPENSA_LIFE_CALCULATION,
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
