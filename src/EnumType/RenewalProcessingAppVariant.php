<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for RenewalProcessingAppVariant EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RenewalProcessingAppVariant
 * @subpackage Enumerations
 */
class RenewalProcessingAppVariant
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'Normal'
     * @return string 'Normal'
     */
    const VALUE_NORMAL = 'Normal';
    /**
     * Constant for value 'OfferSender'
     * @return string 'OfferSender'
     */
    const VALUE_OFFER_SENDER = 'OfferSender';
    /**
     * Constant for value 'CentralPolicy'
     * @return string 'CentralPolicy'
     */
    const VALUE_CENTRAL_POLICY = 'CentralPolicy';
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
     * @uses self::VALUE_NORMAL
     * @uses self::VALUE_OFFER_SENDER
     * @uses self::VALUE_CENTRAL_POLICY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_NORMAL,
            self::VALUE_OFFER_SENDER,
            self::VALUE_CENTRAL_POLICY,
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
