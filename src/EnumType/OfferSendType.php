<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for OfferSendType EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:OfferSendType
 * @subpackage Enumerations
 */
class OfferSendType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'ViaMail'
     * @return string 'ViaMail'
     */
    const VALUE_VIA_MAIL = 'ViaMail';
    /**
     * Constant for value 'ViaPost'
     * @return string 'ViaPost'
     */
    const VALUE_VIA_POST = 'ViaPost';
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
     * @uses self::VALUE_VIA_MAIL
     * @uses self::VALUE_VIA_POST
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_VIA_MAIL,
            self::VALUE_VIA_POST,
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
