<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for VerificationType EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:VerificationType
 * @subpackage Enumerations
 */
class VerificationType
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'Standard'
     * @return string 'Standard'
     */
    const VALUE_STANDARD = 'Standard';
    /**
     * Constant for value 'Renewal'
     * @return string 'Renewal'
     */
    const VALUE_RENEWAL = 'Renewal';
    /**
     * Constant for value 'PartnerData'
     * @return string 'PartnerData'
     */
    const VALUE_PARTNER_DATA = 'PartnerData';
    /**
     * Constant for value 'PartnerCodeAndVin'
     * @return string 'PartnerCodeAndVin'
     */
    const VALUE_PARTNER_CODE_AND_VIN = 'PartnerCodeAndVin';
    /**
     * Constant for value 'PartnerCodeAndRegistrationNumber'
     * @return string 'PartnerCodeAndRegistrationNumber'
     */
    const VALUE_PARTNER_CODE_AND_REGISTRATION_NUMBER = 'PartnerCodeAndRegistrationNumber';
    /**
     * Constant for value 'Manual'
     * @return string 'Manual'
     */
    const VALUE_MANUAL = 'Manual';
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
     * @uses self::VALUE_STANDARD
     * @uses self::VALUE_RENEWAL
     * @uses self::VALUE_PARTNER_DATA
     * @uses self::VALUE_PARTNER_CODE_AND_VIN
     * @uses self::VALUE_PARTNER_CODE_AND_REGISTRATION_NUMBER
     * @uses self::VALUE_MANUAL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_STANDARD,
            self::VALUE_RENEWAL,
            self::VALUE_PARTNER_DATA,
            self::VALUE_PARTNER_CODE_AND_VIN,
            self::VALUE_PARTNER_CODE_AND_REGISTRATION_NUMBER,
            self::VALUE_MANUAL,
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
