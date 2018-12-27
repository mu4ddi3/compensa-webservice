<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MotorDiscount StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MotorDiscount
 * @subpackage Structs
 */
class MotorDiscount extends CompensaDiscount
{
    /**
     * The ApplyOrder
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ApplyOrder;
    /**
     * The CorrectionValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $CorrectionValue;
    /**
     * The DiscountType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DiscountType;
    /**
     * The IsAvailableForShortTerm
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAvailableForShortTerm;
    /**
     * The PremiumAfterDiscountApplied
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $PremiumAfterDiscountApplied;
    /**
     * Constructor method for MotorDiscount
     * @uses MotorDiscount::setApplyOrder()
     * @uses MotorDiscount::setCorrectionValue()
     * @uses MotorDiscount::setDiscountType()
     * @uses MotorDiscount::setIsAvailableForShortTerm()
     * @uses MotorDiscount::setPremiumAfterDiscountApplied()
     * @param int $applyOrder
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $correctionValue
     * @param string $discountType
     * @param bool $isAvailableForShortTerm
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premiumAfterDiscountApplied
     */
    public function __construct($applyOrder = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $correctionValue = null, $discountType = null, $isAvailableForShortTerm = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premiumAfterDiscountApplied = null)
    {
        $this
            ->setApplyOrder($applyOrder)
            ->setCorrectionValue($correctionValue)
            ->setDiscountType($discountType)
            ->setIsAvailableForShortTerm($isAvailableForShortTerm)
            ->setPremiumAfterDiscountApplied($premiumAfterDiscountApplied);
    }
    /**
     * Get ApplyOrder value
     * @return int|null
     */
    public function getApplyOrder()
    {
        return $this->ApplyOrder;
    }
    /**
     * Set ApplyOrder value
     * @param int $applyOrder
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorDiscount
     */
    public function setApplyOrder($applyOrder = null)
    {
        // validation for constraint: int
        if (!is_null($applyOrder) && !is_numeric($applyOrder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($applyOrder)), __LINE__);
        }
        $this->ApplyOrder = $applyOrder;
        return $this;
    }
    /**
     * Get CorrectionValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getCorrectionValue()
    {
        return isset($this->CorrectionValue) ? $this->CorrectionValue : null;
    }
    /**
     * Set CorrectionValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $correctionValue
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorDiscount
     */
    public function setCorrectionValue(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $correctionValue = null)
    {
        if (is_null($correctionValue) || (is_array($correctionValue) && empty($correctionValue))) {
            unset($this->CorrectionValue);
        } else {
            $this->CorrectionValue = $correctionValue;
        }
        return $this;
    }
    /**
     * Get DiscountType value
     * @return string|null
     */
    public function getDiscountType()
    {
        return $this->DiscountType;
    }
    /**
     * Set DiscountType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\DiscountType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\DiscountType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $discountType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorDiscount
     */
    public function setDiscountType($discountType = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\DiscountType::valueIsValid($discountType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $discountType, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\DiscountType::getValidValues())), __LINE__);
        }
        $this->DiscountType = $discountType;
        return $this;
    }
    /**
     * Get IsAvailableForShortTerm value
     * @return bool|null
     */
    public function getIsAvailableForShortTerm()
    {
        return $this->IsAvailableForShortTerm;
    }
    /**
     * Set IsAvailableForShortTerm value
     * @param bool $isAvailableForShortTerm
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorDiscount
     */
    public function setIsAvailableForShortTerm($isAvailableForShortTerm = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAvailableForShortTerm) && !is_bool($isAvailableForShortTerm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAvailableForShortTerm)), __LINE__);
        }
        $this->IsAvailableForShortTerm = $isAvailableForShortTerm;
        return $this;
    }
    /**
     * Get PremiumAfterDiscountApplied value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getPremiumAfterDiscountApplied()
    {
        return isset($this->PremiumAfterDiscountApplied) ? $this->PremiumAfterDiscountApplied : null;
    }
    /**
     * Set PremiumAfterDiscountApplied value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premiumAfterDiscountApplied
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorDiscount
     */
    public function setPremiumAfterDiscountApplied(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premiumAfterDiscountApplied = null)
    {
        if (is_null($premiumAfterDiscountApplied) || (is_array($premiumAfterDiscountApplied) && empty($premiumAfterDiscountApplied))) {
            unset($this->PremiumAfterDiscountApplied);
        } else {
            $this->PremiumAfterDiscountApplied = $premiumAfterDiscountApplied;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorDiscount
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
