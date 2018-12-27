<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for ClaimSettlementVariant EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ClaimSettlementVariant
 * @subpackage Enumerations
 */
class ClaimSettlementVariant
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'Service'
     * @return string 'Service'
     */
    const VALUE_SERVICE = 'Service';
    /**
     * Constant for value 'Estimate'
     * @return string 'Estimate'
     */
    const VALUE_ESTIMATE = 'Estimate';
    /**
     * Constant for value 'AffiliateWorkshop'
     * @return string 'AffiliateWorkshop'
     */
    const VALUE_AFFILIATE_WORKSHOP = 'AffiliateWorkshop';
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
     * @uses self::VALUE_SERVICE
     * @uses self::VALUE_ESTIMATE
     * @uses self::VALUE_AFFILIATE_WORKSHOP
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_SERVICE,
            self::VALUE_ESTIMATE,
            self::VALUE_AFFILIATE_WORKSHOP,
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
