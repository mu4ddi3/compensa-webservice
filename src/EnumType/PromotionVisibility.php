<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for PromotionVisibility EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PromotionVisibility
 * @subpackage Enumerations
 */
class PromotionVisibility
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'ClientCard'
     * @return string 'ClientCard'
     */
    const VALUE_CLIENT_CARD = 'ClientCard';
    /**
     * Constant for value 'UserPromotions'
     * @return string 'UserPromotions'
     */
    const VALUE_USER_PROMOTIONS = 'UserPromotions';
    /**
     * Constant for value 'Calculator'
     * @return string 'Calculator'
     */
    const VALUE_CALCULATOR = 'Calculator';
    /**
     * Constant for value 'PolicyIssue'
     * @return string 'PolicyIssue'
     */
    const VALUE_POLICY_ISSUE = 'PolicyIssue';
    /**
     * Constant for value 'Offer'
     * @return string 'Offer'
     */
    const VALUE_OFFER = 'Offer';
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
     * @uses self::VALUE_CLIENT_CARD
     * @uses self::VALUE_USER_PROMOTIONS
     * @uses self::VALUE_CALCULATOR
     * @uses self::VALUE_POLICY_ISSUE
     * @uses self::VALUE_OFFER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_CLIENT_CARD,
            self::VALUE_USER_PROMOTIONS,
            self::VALUE_CALCULATOR,
            self::VALUE_POLICY_ISSUE,
            self::VALUE_OFFER,
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
