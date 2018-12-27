<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for LeasingTariffVariant EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:LeasingTariffVariant
 * @subpackage Enumerations
 */
class LeasingTariffVariant
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'CompensaLeasing'
     * @return string 'CompensaLeasing'
     */
    const VALUE_COMPENSA_LEASING = 'CompensaLeasing';
    /**
     * Constant for value 'OtherLeasing'
     * @return string 'OtherLeasing'
     */
    const VALUE_OTHER_LEASING = 'OtherLeasing';
    /**
     * Constant for value 'NoLeasing'
     * @return string 'NoLeasing'
     */
    const VALUE_NO_LEASING = 'NoLeasing';
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
     * @uses self::VALUE_COMPENSA_LEASING
     * @uses self::VALUE_OTHER_LEASING
     * @uses self::VALUE_NO_LEASING
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_COMPENSA_LEASING,
            self::VALUE_OTHER_LEASING,
            self::VALUE_NO_LEASING,
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
