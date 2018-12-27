<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MoneyAmountStorage StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MoneyAmountStorage
 * @subpackage Structs
 */
class MoneyAmountStorage extends AbstractStructBase
{
    /**
     * The amount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $amount;
    /**
     * The currencyOfPayment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $currencyOfPayment;
    /**
     * The nativeCurrency
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $nativeCurrency;
    /**
     * The toNativeCurrencyConversionRate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $toNativeCurrencyConversionRate;
    /**
     * Constructor method for MoneyAmountStorage
     * @uses MoneyAmountStorage::setAmount()
     * @uses MoneyAmountStorage::setCurrencyOfPayment()
     * @uses MoneyAmountStorage::setNativeCurrency()
     * @uses MoneyAmountStorage::setToNativeCurrencyConversionRate()
     * @param float $amount
     * @param string $currencyOfPayment
     * @param string $nativeCurrency
     * @param float $toNativeCurrencyConversionRate
     */
    public function __construct($amount = null, $currencyOfPayment = null, $nativeCurrency = null, $toNativeCurrencyConversionRate = null)
    {
        $this
            ->setAmount($amount)
            ->setCurrencyOfPayment($currencyOfPayment)
            ->setNativeCurrency($nativeCurrency)
            ->setToNativeCurrencyConversionRate($toNativeCurrencyConversionRate);
    }
    /**
     * Get amount value
     * @return float|null
     */
    public function getAmount()
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param float $amount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public function setAmount($amount = null)
    {
        $this->amount = $amount;
        return $this;
    }
    /**
     * Get currencyOfPayment value
     * @return string|null
     */
    public function getCurrencyOfPayment()
    {
        return $this->currencyOfPayment;
    }
    /**
     * Set currencyOfPayment value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\Currency::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\Currency::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $currencyOfPayment
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public function setCurrencyOfPayment($currencyOfPayment = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\Currency::valueIsValid($currencyOfPayment)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $currencyOfPayment, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\Currency::getValidValues())), __LINE__);
        }
        $this->currencyOfPayment = $currencyOfPayment;
        return $this;
    }
    /**
     * Get nativeCurrency value
     * @return string|null
     */
    public function getNativeCurrency()
    {
        return $this->nativeCurrency;
    }
    /**
     * Set nativeCurrency value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\Currency::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\Currency::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $nativeCurrency
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public function setNativeCurrency($nativeCurrency = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\Currency::valueIsValid($nativeCurrency)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $nativeCurrency, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\Currency::getValidValues())), __LINE__);
        }
        $this->nativeCurrency = $nativeCurrency;
        return $this;
    }
    /**
     * Get toNativeCurrencyConversionRate value
     * @return float|null
     */
    public function getToNativeCurrencyConversionRate()
    {
        return $this->toNativeCurrencyConversionRate;
    }
    /**
     * Set toNativeCurrencyConversionRate value
     * @param float $toNativeCurrencyConversionRate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public function setToNativeCurrencyConversionRate($toNativeCurrencyConversionRate = null)
    {
        $this->toNativeCurrencyConversionRate = $toNativeCurrencyConversionRate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
