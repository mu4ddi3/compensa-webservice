<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for ContinuationMode EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ContinuationMode
 * @subpackage Enumerations
 */
class ContinuationMode
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'NewContract'
     * @return string 'NewContract'
     */
    const VALUE_NEW_CONTRACT = 'NewContract';
    /**
     * Constant for value 'WithClaims'
     * @return string 'WithClaims'
     */
    const VALUE_WITH_CLAIMS = 'WithClaims';
    /**
     * Constant for value 'WithoutClaims'
     * @return string 'WithoutClaims'
     */
    const VALUE_WITHOUT_CLAIMS = 'WithoutClaims';
    /**
     * Constant for value 'WithoutClaimsCsvService'
     * @return string 'WithoutClaimsCsvService'
     */
    const VALUE_WITHOUT_CLAIMS_CSV_SERVICE = 'WithoutClaimsCsvService';
    /**
     * Constant for value 'WithoutClaimsCsvEstimate'
     * @return string 'WithoutClaimsCsvEstimate'
     */
    const VALUE_WITHOUT_CLAIMS_CSV_ESTIMATE = 'WithoutClaimsCsvEstimate';
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
     * @uses self::VALUE_NEW_CONTRACT
     * @uses self::VALUE_WITH_CLAIMS
     * @uses self::VALUE_WITHOUT_CLAIMS
     * @uses self::VALUE_WITHOUT_CLAIMS_CSV_SERVICE
     * @uses self::VALUE_WITHOUT_CLAIMS_CSV_ESTIMATE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_NEW_CONTRACT,
            self::VALUE_WITH_CLAIMS,
            self::VALUE_WITHOUT_CLAIMS,
            self::VALUE_WITHOUT_CLAIMS_CSV_SERVICE,
            self::VALUE_WITHOUT_CLAIMS_CSV_ESTIMATE,
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
