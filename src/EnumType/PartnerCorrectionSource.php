<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for PartnerCorrectionSource EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PartnerCorrectionSource
 * @subpackage Enumerations
 */
class PartnerCorrectionSource
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
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
     * Constant for value 'Lessee'
     * @return string 'Lessee'
     */
    const VALUE_LESSEE = 'Lessee';
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
     * @uses self::VALUE_OWNER
     * @uses self::VALUE_CO_OWNER
     * @uses self::VALUE_LESSEE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_OWNER,
            self::VALUE_CO_OWNER,
            self::VALUE_LESSEE,
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
