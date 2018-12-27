<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for PartnerCorrectionType EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PartnerCorrectionType
 * @subpackage Enumerations
 */
class PartnerCorrectionType
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'FamilyName'
     * @return string 'FamilyName'
     */
    const VALUE_FAMILY_NAME = 'FamilyName';
    /**
     * Constant for value 'Spouse'
     * @return string 'Spouse'
     */
    const VALUE_SPOUSE = 'Spouse';
    /**
     * Constant for value 'FirstNameLastNameName'
     * @return string 'FirstNameLastNameName'
     */
    const VALUE_FIRST_NAME_LAST_NAME_NAME = 'FirstNameLastNameName';
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
     * @uses self::VALUE_FAMILY_NAME
     * @uses self::VALUE_SPOUSE
     * @uses self::VALUE_FIRST_NAME_LAST_NAME_NAME
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_FAMILY_NAME,
            self::VALUE_SPOUSE,
            self::VALUE_FIRST_NAME_LAST_NAME_NAME,
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
