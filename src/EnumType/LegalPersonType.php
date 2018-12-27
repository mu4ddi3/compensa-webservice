<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for LegalPersonType EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:LegalPersonType
 * @subpackage Enumerations
 */
class LegalPersonType
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'Company'
     * @return string 'Company'
     */
    const VALUE_COMPANY = 'Company';
    /**
     * Constant for value 'Leasing'
     * @return string 'Leasing'
     */
    const VALUE_LEASING = 'Leasing';
    /**
     * Constant for value 'Bank'
     * @return string 'Bank'
     */
    const VALUE_BANK = 'Bank';
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
     * @uses self::VALUE_COMPANY
     * @uses self::VALUE_LEASING
     * @uses self::VALUE_BANK
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_COMPANY,
            self::VALUE_LEASING,
            self::VALUE_BANK,
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
