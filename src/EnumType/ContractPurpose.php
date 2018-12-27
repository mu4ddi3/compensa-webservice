<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for ContractPurpose EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ContractPurpose
 * @subpackage Enumerations
 */
class ContractPurpose
{
    /**
     * Constant for value 'Test'
     * @return string 'Test'
     */
    const VALUE_TEST = 'Test';
    /**
     * Constant for value 'Production'
     * @return string 'Production'
     */
    const VALUE_PRODUCTION = 'Production';
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
     * @uses self::VALUE_TEST
     * @uses self::VALUE_PRODUCTION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_TEST,
            self::VALUE_PRODUCTION,
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
