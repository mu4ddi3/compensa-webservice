<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for StatementPartnerRole EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:StatementPartnerRole
 * @subpackage Enumerations
 */
class StatementPartnerRole
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Insurer'
     * @return string 'Insurer'
     */
    const VALUE_INSURER = 'Insurer';
    /**
     * Constant for value 'Insured'
     * @return string 'Insured'
     */
    const VALUE_INSURED = 'Insured';
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
     * @uses self::VALUE_INSURER
     * @uses self::VALUE_INSURED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_INSURER,
            self::VALUE_INSURED,
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
