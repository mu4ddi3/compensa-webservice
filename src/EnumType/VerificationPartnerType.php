<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for VerificationPartnerType EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:VerificationPartnerType
 * @subpackage Enumerations
 */
class VerificationPartnerType
{
    /**
     * Constant for value 'Owner'
     * @return string 'Owner'
     */
    const VALUE_OWNER = 'Owner';
    /**
     * Constant for value 'CoOwner'
     * @return string 'CoOwner'
     */
    const VALUE_CO_OWNER = 'CoOwner';
    /**
     * Constant for value 'Renewal'
     * @return string 'Renewal'
     */
    const VALUE_RENEWAL = 'Renewal';
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
     * @uses self::VALUE_OWNER
     * @uses self::VALUE_CO_OWNER
     * @uses self::VALUE_RENEWAL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_OWNER,
            self::VALUE_CO_OWNER,
            self::VALUE_RENEWAL,
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
