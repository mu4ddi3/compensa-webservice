<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for PromotionGoal EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PromotionGoal
 * @subpackage Enumerations
 */
class PromotionGoal
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'UpSell'
     * @return string 'UpSell'
     */
    const VALUE_UP_SELL = 'UpSell';
    /**
     * Constant for value 'CrossSell'
     * @return string 'CrossSell'
     */
    const VALUE_CROSS_SELL = 'CrossSell';
    /**
     * Constant for value 'ClientPreservation'
     * @return string 'ClientPreservation'
     */
    const VALUE_CLIENT_PRESERVATION = 'ClientPreservation';
    /**
     * Constant for value 'ClientAcquisition'
     * @return string 'ClientAcquisition'
     */
    const VALUE_CLIENT_ACQUISITION = 'ClientAcquisition';
    /**
     * Constant for value 'ProductPromotion'
     * @return string 'ProductPromotion'
     */
    const VALUE_PRODUCT_PROMOTION = 'ProductPromotion';
    /**
     * Constant for value 'SalesNetworkActivation'
     * @return string 'SalesNetworkActivation'
     */
    const VALUE_SALES_NETWORK_ACTIVATION = 'SalesNetworkActivation';
    /**
     * Constant for value 'PromotionUsageActivation'
     * @return string 'PromotionUsageActivation'
     */
    const VALUE_PROMOTION_USAGE_ACTIVATION = 'PromotionUsageActivation';
    /**
     * Constant for value 'AgentsWallet'
     * @return string 'AgentsWallet'
     */
    const VALUE_AGENTS_WALLET = 'AgentsWallet';
    /**
     * Constant for value 'ExternalCodes'
     * @return string 'ExternalCodes'
     */
    const VALUE_EXTERNAL_CODES = 'ExternalCodes';
    /**
     * Constant for value 'Emergency'
     * @return string 'Emergency'
     */
    const VALUE_EMERGENCY = 'Emergency';
    /**
     * Constant for value 'Other'
     * @return string 'Other'
     */
    const VALUE_OTHER = 'Other';
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
     * @uses self::VALUE_UP_SELL
     * @uses self::VALUE_CROSS_SELL
     * @uses self::VALUE_CLIENT_PRESERVATION
     * @uses self::VALUE_CLIENT_ACQUISITION
     * @uses self::VALUE_PRODUCT_PROMOTION
     * @uses self::VALUE_SALES_NETWORK_ACTIVATION
     * @uses self::VALUE_PROMOTION_USAGE_ACTIVATION
     * @uses self::VALUE_AGENTS_WALLET
     * @uses self::VALUE_EXTERNAL_CODES
     * @uses self::VALUE_EMERGENCY
     * @uses self::VALUE_OTHER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_UP_SELL,
            self::VALUE_CROSS_SELL,
            self::VALUE_CLIENT_PRESERVATION,
            self::VALUE_CLIENT_ACQUISITION,
            self::VALUE_PRODUCT_PROMOTION,
            self::VALUE_SALES_NETWORK_ACTIVATION,
            self::VALUE_PROMOTION_USAGE_ACTIVATION,
            self::VALUE_AGENTS_WALLET,
            self::VALUE_EXTERNAL_CODES,
            self::VALUE_EMERGENCY,
            self::VALUE_OTHER,
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
