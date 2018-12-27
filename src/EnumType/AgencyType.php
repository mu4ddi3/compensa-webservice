<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for AgencyType EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AgencyType
 * @subpackage Enumerations
 */
class AgencyType
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'Agency'
     * @return string 'Agency'
     */
    const VALUE_AGENCY = 'Agency';
    /**
     * Constant for value 'Asb'
     * @return string 'Asb'
     */
    const VALUE_ASB = 'Asb';
    /**
     * Constant for value 'Bao'
     * @return string 'Bao'
     */
    const VALUE_BAO = 'Bao';
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
     * @uses self::VALUE_AGENCY
     * @uses self::VALUE_ASB
     * @uses self::VALUE_BAO
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_AGENCY,
            self::VALUE_ASB,
            self::VALUE_BAO,
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
