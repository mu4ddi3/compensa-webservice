<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MZPDiscount StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MZPDiscount
 * @subpackage Structs
 */
class MZPDiscount extends AbstractStructBase
{
    /**
     * The AdjustedAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $AdjustedAmount;
    /**
     * The Amount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $Amount;
    /**
     * The IsReductionPossible
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsReductionPossible;
    /**
     * The MaximalDiscountValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $MaximalDiscountValue;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * Constructor method for MZPDiscount
     * @uses MZPDiscount::setAdjustedAmount()
     * @uses MZPDiscount::setAmount()
     * @uses MZPDiscount::setIsReductionPossible()
     * @uses MZPDiscount::setMaximalDiscountValue()
     * @uses MZPDiscount::setType()
     * @param float $adjustedAmount
     * @param float $amount
     * @param bool $isReductionPossible
     * @param float $maximalDiscountValue
     * @param string $type
     */
    public function __construct($adjustedAmount = null, $amount = null, $isReductionPossible = null, $maximalDiscountValue = null, $type = null)
    {
        $this
            ->setAdjustedAmount($adjustedAmount)
            ->setAmount($amount)
            ->setIsReductionPossible($isReductionPossible)
            ->setMaximalDiscountValue($maximalDiscountValue)
            ->setType($type);
    }
    /**
     * Get AdjustedAmount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getAdjustedAmount()
    {
        return isset($this->AdjustedAmount) ? $this->AdjustedAmount : null;
    }
    /**
     * Set AdjustedAmount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $adjustedAmount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPDiscount
     */
    public function setAdjustedAmount($adjustedAmount = null)
    {
        if (is_null($adjustedAmount) || (is_array($adjustedAmount) && empty($adjustedAmount))) {
            unset($this->AdjustedAmount);
        } else {
            $this->AdjustedAmount = $adjustedAmount;
        }
        return $this;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPDiscount
     */
    public function setAmount($amount = null)
    {
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get IsReductionPossible value
     * @return bool|null
     */
    public function getIsReductionPossible()
    {
        return $this->IsReductionPossible;
    }
    /**
     * Set IsReductionPossible value
     * @param bool $isReductionPossible
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPDiscount
     */
    public function setIsReductionPossible($isReductionPossible = null)
    {
        // validation for constraint: boolean
        if (!is_null($isReductionPossible) && !is_bool($isReductionPossible)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isReductionPossible)), __LINE__);
        }
        $this->IsReductionPossible = $isReductionPossible;
        return $this;
    }
    /**
     * Get MaximalDiscountValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getMaximalDiscountValue()
    {
        return isset($this->MaximalDiscountValue) ? $this->MaximalDiscountValue : null;
    }
    /**
     * Set MaximalDiscountValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $maximalDiscountValue
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPDiscount
     */
    public function setMaximalDiscountValue($maximalDiscountValue = null)
    {
        if (is_null($maximalDiscountValue) || (is_array($maximalDiscountValue) && empty($maximalDiscountValue))) {
            unset($this->MaximalDiscountValue);
        } else {
            $this->MaximalDiscountValue = $maximalDiscountValue;
        }
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\DiscountType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\DiscountType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPDiscount
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\DiscountType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\DiscountType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPDiscount
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
