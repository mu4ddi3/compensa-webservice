<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for VehicleValueSource EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:VehicleValueSource
 * @subpackage Enumerations
 */
class VehicleValueSource
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'InfoEkspert'
     * @return string 'InfoEkspert'
     */
    const VALUE_INFO_EKSPERT = 'InfoEkspert';
    /**
     * Constant for value 'EuroTax'
     * @return string 'EuroTax'
     */
    const VALUE_EURO_TAX = 'EuroTax';
    /**
     * Constant for value 'Invoice'
     * @return string 'Invoice'
     */
    const VALUE_INVOICE = 'Invoice';
    /**
     * Constant for value 'ExpertPricing'
     * @return string 'ExpertPricing'
     */
    const VALUE_EXPERT_PRICING = 'ExpertPricing';
    /**
     * Constant for value 'Indexation'
     * @return string 'Indexation'
     */
    const VALUE_INDEXATION = 'Indexation';
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
     * @uses self::VALUE_INFO_EKSPERT
     * @uses self::VALUE_EURO_TAX
     * @uses self::VALUE_INVOICE
     * @uses self::VALUE_EXPERT_PRICING
     * @uses self::VALUE_INDEXATION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_INFO_EKSPERT,
            self::VALUE_EURO_TAX,
            self::VALUE_INVOICE,
            self::VALUE_EXPERT_PRICING,
            self::VALUE_INDEXATION,
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
