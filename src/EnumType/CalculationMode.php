<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for CalculationMode EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CalculationMode
 * @subpackage Enumerations
 */
class CalculationMode
{
    /**
     * Constant for value 'New'
     * @return string 'New'
     */
    const VALUE_NEW = 'New';
    /**
     * Constant for value 'Renewal'
     * @return string 'Renewal'
     */
    const VALUE_RENEWAL = 'Renewal';
    /**
     * Constant for value 'RenewalChanged'
     * @return string 'RenewalChanged'
     */
    const VALUE_RENEWAL_CHANGED = 'RenewalChanged';
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
     * @uses self::VALUE_NEW
     * @uses self::VALUE_RENEWAL
     * @uses self::VALUE_RENEWAL_CHANGED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NEW,
            self::VALUE_RENEWAL,
            self::VALUE_RENEWAL_CHANGED,
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
