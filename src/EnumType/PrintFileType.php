<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for PrintFileType EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PrintFileType
 * @subpackage Enumerations
 */
class PrintFileType
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'Footer'
     * @return string 'Footer'
     */
    const VALUE_FOOTER = 'Footer';
    /**
     * Constant for value 'Offer1'
     * @return string 'Offer1'
     */
    const VALUE_OFFER_1 = 'Offer1';
    /**
     * Constant for value 'Offer2'
     * @return string 'Offer2'
     */
    const VALUE_OFFER_2 = 'Offer2';
    /**
     * Constant for value 'AcClaimSettlementVariant'
     * @return string 'AcClaimSettlementVariant'
     */
    const VALUE_AC_CLAIM_SETTLEMENT_VARIANT = 'AcClaimSettlementVariant';
    /**
     * Constant for value 'AssistanceVariant'
     * @return string 'AssistanceVariant'
     */
    const VALUE_ASSISTANCE_VARIANT = 'AssistanceVariant';
    /**
     * Constant for value 'ProductCardOcRisk'
     * @return string 'ProductCardOcRisk'
     */
    const VALUE_PRODUCT_CARD_OC_RISK = 'ProductCardOcRisk';
    /**
     * Constant for value 'ProductCardOtherRisks'
     * @return string 'ProductCardOtherRisks'
     */
    const VALUE_PRODUCT_CARD_OTHER_RISKS = 'ProductCardOtherRisks';
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
     * @uses self::VALUE_FOOTER
     * @uses self::VALUE_OFFER_1
     * @uses self::VALUE_OFFER_2
     * @uses self::VALUE_AC_CLAIM_SETTLEMENT_VARIANT
     * @uses self::VALUE_ASSISTANCE_VARIANT
     * @uses self::VALUE_PRODUCT_CARD_OC_RISK
     * @uses self::VALUE_PRODUCT_CARD_OTHER_RISKS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_FOOTER,
            self::VALUE_OFFER_1,
            self::VALUE_OFFER_2,
            self::VALUE_AC_CLAIM_SETTLEMENT_VARIANT,
            self::VALUE_ASSISTANCE_VARIANT,
            self::VALUE_PRODUCT_CARD_OC_RISK,
            self::VALUE_PRODUCT_CARD_OTHER_RISKS,
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
