<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompensaDiscount StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CompensaDiscount
 * @subpackage Structs
 */
class CompensaDiscount extends Discount
{
    /**
     * The ActualFactorDiscountValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $ActualFactorDiscountValue;
    /**
     * The ActualSumFactorDiscountValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $ActualSumFactorDiscountValue;
    /**
     * The AdjustedAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $AdjustedAmount;
    /**
     * The BelowMinimal
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $BelowMinimal;
    /**
     * The IsReductionPossible
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsReductionPossible;
    /**
     * The MZPPromotionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $MZPPromotionId;
    /**
     * The MaximalDiscountValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $MaximalDiscountValue;
    /**
     * The PremiumBeforeDiscountApplied
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $PremiumBeforeDiscountApplied;
    /**
     * Constructor method for CompensaDiscount
     * @uses CompensaDiscount::setActualFactorDiscountValue()
     * @uses CompensaDiscount::setActualSumFactorDiscountValue()
     * @uses CompensaDiscount::setAdjustedAmount()
     * @uses CompensaDiscount::setBelowMinimal()
     * @uses CompensaDiscount::setIsReductionPossible()
     * @uses CompensaDiscount::setMZPPromotionId()
     * @uses CompensaDiscount::setMaximalDiscountValue()
     * @uses CompensaDiscount::setPremiumBeforeDiscountApplied()
     * @param float $actualFactorDiscountValue
     * @param float $actualSumFactorDiscountValue
     * @param float $adjustedAmount
     * @param bool $belowMinimal
     * @param bool $isReductionPossible
     * @param int $mZPPromotionId
     * @param float $maximalDiscountValue
     * @param float $premiumBeforeDiscountApplied
     */
    public function __construct($actualFactorDiscountValue = null, $actualSumFactorDiscountValue = null, $adjustedAmount = null, $belowMinimal = null, $isReductionPossible = null, $mZPPromotionId = null, $maximalDiscountValue = null, $premiumBeforeDiscountApplied = null)
    {
        $this
            ->setActualFactorDiscountValue($actualFactorDiscountValue)
            ->setActualSumFactorDiscountValue($actualSumFactorDiscountValue)
            ->setAdjustedAmount($adjustedAmount)
            ->setBelowMinimal($belowMinimal)
            ->setIsReductionPossible($isReductionPossible)
            ->setMZPPromotionId($mZPPromotionId)
            ->setMaximalDiscountValue($maximalDiscountValue)
            ->setPremiumBeforeDiscountApplied($premiumBeforeDiscountApplied);
    }
    /**
     * Get ActualFactorDiscountValue value
     * @return float|null
     */
    public function getActualFactorDiscountValue()
    {
        return $this->ActualFactorDiscountValue;
    }
    /**
     * Set ActualFactorDiscountValue value
     * @param float $actualFactorDiscountValue
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaDiscount
     */
    public function setActualFactorDiscountValue($actualFactorDiscountValue = null)
    {
        $this->ActualFactorDiscountValue = $actualFactorDiscountValue;
        return $this;
    }
    /**
     * Get ActualSumFactorDiscountValue value
     * @return float|null
     */
    public function getActualSumFactorDiscountValue()
    {
        return $this->ActualSumFactorDiscountValue;
    }
    /**
     * Set ActualSumFactorDiscountValue value
     * @param float $actualSumFactorDiscountValue
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaDiscount
     */
    public function setActualSumFactorDiscountValue($actualSumFactorDiscountValue = null)
    {
        $this->ActualSumFactorDiscountValue = $actualSumFactorDiscountValue;
        return $this;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaDiscount
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
     * Get BelowMinimal value
     * @return bool|null
     */
    public function getBelowMinimal()
    {
        return $this->BelowMinimal;
    }
    /**
     * Set BelowMinimal value
     * @param bool $belowMinimal
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaDiscount
     */
    public function setBelowMinimal($belowMinimal = null)
    {
        // validation for constraint: boolean
        if (!is_null($belowMinimal) && !is_bool($belowMinimal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($belowMinimal)), __LINE__);
        }
        $this->BelowMinimal = $belowMinimal;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaDiscount
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
     * Get MZPPromotionId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getMZPPromotionId()
    {
        return isset($this->MZPPromotionId) ? $this->MZPPromotionId : null;
    }
    /**
     * Set MZPPromotionId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $mZPPromotionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaDiscount
     */
    public function setMZPPromotionId($mZPPromotionId = null)
    {
        // validation for constraint: int
        if (!is_null($mZPPromotionId) && !is_numeric($mZPPromotionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($mZPPromotionId)), __LINE__);
        }
        if (is_null($mZPPromotionId) || (is_array($mZPPromotionId) && empty($mZPPromotionId))) {
            unset($this->MZPPromotionId);
        } else {
            $this->MZPPromotionId = $mZPPromotionId;
        }
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaDiscount
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
     * Get PremiumBeforeDiscountApplied value
     * @return float|null
     */
    public function getPremiumBeforeDiscountApplied()
    {
        return $this->PremiumBeforeDiscountApplied;
    }
    /**
     * Set PremiumBeforeDiscountApplied value
     * @param float $premiumBeforeDiscountApplied
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaDiscount
     */
    public function setPremiumBeforeDiscountApplied($premiumBeforeDiscountApplied = null)
    {
        $this->PremiumBeforeDiscountApplied = $premiumBeforeDiscountApplied;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaDiscount
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
