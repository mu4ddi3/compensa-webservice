<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for InstallmentsNumber EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:InstallmentsNumber
 * @subpackage Enumerations
 */
class InstallmentsNumber extends ObjectEnum
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'OneInstallment'
     * @return string 'OneInstallment'
     */
    const VALUE_ONE_INSTALLMENT = 'OneInstallment';
    /**
     * Constant for value 'TwoInstallments'
     * @return string 'TwoInstallments'
     */
    const VALUE_TWO_INSTALLMENTS = 'TwoInstallments';
    /**
     * Constant for value 'FourInstallments'
     * @return string 'FourInstallments'
     */
    const VALUE_FOUR_INSTALLMENTS = 'FourInstallments';
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
     * @uses self::VALUE_ONE_INSTALLMENT
     * @uses self::VALUE_TWO_INSTALLMENTS
     * @uses self::VALUE_FOUR_INSTALLMENTS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_ONE_INSTALLMENT,
            self::VALUE_TWO_INSTALLMENTS,
            self::VALUE_FOUR_INSTALLMENTS,
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
