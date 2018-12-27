<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for CorrectionReason EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CorrectionReason
 * @subpackage Enumerations
 */
class CorrectionReason
{
    /**
     * Constant for value 'AdjustmentOfInsurance'
     * @return string 'AdjustmentOfInsurance'
     */
    const VALUE_ADJUSTMENT_OF_INSURANCE = 'AdjustmentOfInsurance';
    /**
     * Constant for value 'InabilityToVerifyDueToUfgError'
     * @return string 'InabilityToVerifyDueToUfgError'
     */
    const VALUE_INABILITY_TO_VERIFY_DUE_TO_UFG_ERROR = 'InabilityToVerifyDueToUfgError';
    /**
     * Constant for value 'InabilityToVerifyDueToForeigner'
     * @return string 'InabilityToVerifyDueToForeigner'
     */
    const VALUE_INABILITY_TO_VERIFY_DUE_TO_FOREIGNER = 'InabilityToVerifyDueToForeigner';
    /**
     * Constant for value 'BonusMalusTransfer'
     * @return string 'BonusMalusTransfer'
     */
    const VALUE_BONUS_MALUS_TRANSFER = 'BonusMalusTransfer';
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
     * @uses self::VALUE_ADJUSTMENT_OF_INSURANCE
     * @uses self::VALUE_INABILITY_TO_VERIFY_DUE_TO_UFG_ERROR
     * @uses self::VALUE_INABILITY_TO_VERIFY_DUE_TO_FOREIGNER
     * @uses self::VALUE_BONUS_MALUS_TRANSFER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ADJUSTMENT_OF_INSURANCE,
            self::VALUE_INABILITY_TO_VERIFY_DUE_TO_UFG_ERROR,
            self::VALUE_INABILITY_TO_VERIFY_DUE_TO_FOREIGNER,
            self::VALUE_BONUS_MALUS_TRANSFER,
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
