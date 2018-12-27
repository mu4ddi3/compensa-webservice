<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Compensation StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Compensation
 * @subpackage Structs
 */
class Compensation extends Benefit
{
    /**
     * The Amount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $Amount;
    /**
     * The EstimatedAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $EstimatedAmount;
    /**
     * The Pension
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Pension;
    /**
     * Constructor method for Compensation
     * @uses Compensation::setAmount()
     * @uses Compensation::setEstimatedAmount()
     * @uses Compensation::setPension()
     * @param float $amount
     * @param bool $estimatedAmount
     * @param bool $pension
     */
    public function __construct($amount = null, $estimatedAmount = null, $pension = null)
    {
        $this
            ->setAmount($amount)
            ->setEstimatedAmount($estimatedAmount)
            ->setPension($pension);
    }
    /**
     * Get Amount value
     * @return float|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param float $amount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Compensation
     */
    public function setAmount($amount = null)
    {
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get EstimatedAmount value
     * @return bool|null
     */
    public function getEstimatedAmount()
    {
        return $this->EstimatedAmount;
    }
    /**
     * Set EstimatedAmount value
     * @param bool $estimatedAmount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Compensation
     */
    public function setEstimatedAmount($estimatedAmount = null)
    {
        // validation for constraint: boolean
        if (!is_null($estimatedAmount) && !is_bool($estimatedAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($estimatedAmount)), __LINE__);
        }
        $this->EstimatedAmount = $estimatedAmount;
        return $this;
    }
    /**
     * Get Pension value
     * @return bool|null
     */
    public function getPension()
    {
        return $this->Pension;
    }
    /**
     * Set Pension value
     * @param bool $pension
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Compensation
     */
    public function setPension($pension = null)
    {
        // validation for constraint: boolean
        if (!is_null($pension) && !is_bool($pension)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($pension)), __LINE__);
        }
        $this->Pension = $pension;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Compensation
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
