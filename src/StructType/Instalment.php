<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Instalment StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Instalment
 * @subpackage Structs
 */
class Instalment extends AbstractStructBase
{
    /**
     * The PaymentDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PaymentDate;
    /**
     * The PaymentValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $PaymentValue;
    /**
     * The Year
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Year;
    /**
     * Constructor method for Instalment
     * @uses Instalment::setPaymentDate()
     * @uses Instalment::setPaymentValue()
     * @uses Instalment::setYear()
     * @param string $paymentDate
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $paymentValue
     * @param int $year
     */
    public function __construct($paymentDate = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $paymentValue = null, $year = null)
    {
        $this
            ->setPaymentDate($paymentDate)
            ->setPaymentValue($paymentValue)
            ->setYear($year);
    }
    /**
     * Get PaymentDate value
     * @return string|null
     */
    public function getPaymentDate()
    {
        return $this->PaymentDate;
    }
    /**
     * Set PaymentDate value
     * @param string $paymentDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Instalment
     */
    public function setPaymentDate($paymentDate = null)
    {
        // validation for constraint: string
        if (!is_null($paymentDate) && !is_string($paymentDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paymentDate)), __LINE__);
        }
        $this->PaymentDate = $paymentDate;
        return $this;
    }
    /**
     * Get PaymentValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getPaymentValue()
    {
        return isset($this->PaymentValue) ? $this->PaymentValue : null;
    }
    /**
     * Set PaymentValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $paymentValue
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Instalment
     */
    public function setPaymentValue(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $paymentValue = null)
    {
        if (is_null($paymentValue) || (is_array($paymentValue) && empty($paymentValue))) {
            unset($this->PaymentValue);
        } else {
            $this->PaymentValue = $paymentValue;
        }
        return $this;
    }
    /**
     * Get Year value
     * @return int|null
     */
    public function getYear()
    {
        return $this->Year;
    }
    /**
     * Set Year value
     * @param int $year
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Instalment
     */
    public function setYear($year = null)
    {
        // validation for constraint: int
        if (!is_null($year) && !is_numeric($year)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($year)), __LINE__);
        }
        $this->Year = $year;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Instalment
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
