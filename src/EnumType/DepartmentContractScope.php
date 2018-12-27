<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for DepartmentContractScope EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DepartmentContractScope
 * @subpackage Enumerations
 */
class DepartmentContractScope
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'DMS'
     * @return string 'DMS'
     */
    const VALUE_DMS = 'DMS';
    /**
     * Constant for value 'DUK'
     * @return string 'DUK'
     */
    const VALUE_DUK = 'DUK';
    /**
     * Constant for value 'All'
     * @return string 'All'
     */
    const VALUE_ALL = 'All';
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
     * @uses self::VALUE_DMS
     * @uses self::VALUE_DUK
     * @uses self::VALUE_ALL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_DMS,
            self::VALUE_DUK,
            self::VALUE_ALL,
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
