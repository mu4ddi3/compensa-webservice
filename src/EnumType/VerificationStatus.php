<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for VerificationStatus EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:VerificationStatus
 * @subpackage Enumerations
 */
class VerificationStatus
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Success'
     * @return string 'Success'
     */
    const VALUE_SUCCESS = 'Success';
    /**
     * Constant for value 'Foreigner'
     * @return string 'Foreigner'
     */
    const VALUE_FOREIGNER = 'Foreigner';
    /**
     * Constant for value 'Error'
     * @return string 'Error'
     */
    const VALUE_ERROR = 'Error';
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
     * @uses self::VALUE_SUCCESS
     * @uses self::VALUE_FOREIGNER
     * @uses self::VALUE_ERROR
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_SUCCESS,
            self::VALUE_FOREIGNER,
            self::VALUE_ERROR,
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
