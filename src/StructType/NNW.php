<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NNW StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:NNW
 * @subpackage Structs
 */
class NNW extends MotorRisk
{
    /**
     * The AdditionalDiscountCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AdditionalDiscountCode;
    /**
     * The AdditionalDiscountPercentageValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $AdditionalDiscountPercentageValue;
    /**
     * The InsuranceSumFactor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $InsuranceSumFactor;
    /**
     * The IsAdditionalDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAdditionalDiscount;
    /**
     * The IsQuintupleInsuranceSum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsQuintupleInsuranceSum;
    /**
     * Constructor method for NNW
     * @uses NNW::setAdditionalDiscountCode()
     * @uses NNW::setAdditionalDiscountPercentageValue()
     * @uses NNW::setInsuranceSumFactor()
     * @uses NNW::setIsAdditionalDiscount()
     * @uses NNW::setIsQuintupleInsuranceSum()
     * @param string $additionalDiscountCode
     * @param int $additionalDiscountPercentageValue
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $insuranceSumFactor
     * @param bool $isAdditionalDiscount
     * @param bool $isQuintupleInsuranceSum
     */
    public function __construct($additionalDiscountCode = null, $additionalDiscountPercentageValue = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $insuranceSumFactor = null, $isAdditionalDiscount = null, $isQuintupleInsuranceSum = null)
    {
        $this
            ->setAdditionalDiscountCode($additionalDiscountCode)
            ->setAdditionalDiscountPercentageValue($additionalDiscountPercentageValue)
            ->setInsuranceSumFactor($insuranceSumFactor)
            ->setIsAdditionalDiscount($isAdditionalDiscount)
            ->setIsQuintupleInsuranceSum($isQuintupleInsuranceSum);
    }
    /**
     * Get AdditionalDiscountCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAdditionalDiscountCode()
    {
        return isset($this->AdditionalDiscountCode) ? $this->AdditionalDiscountCode : null;
    }
    /**
     * Set AdditionalDiscountCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $additionalDiscountCode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\NNW
     */
    public function setAdditionalDiscountCode($additionalDiscountCode = null)
    {
        // validation for constraint: string
        if (!is_null($additionalDiscountCode) && !is_string($additionalDiscountCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($additionalDiscountCode)), __LINE__);
        }
        if (is_null($additionalDiscountCode) || (is_array($additionalDiscountCode) && empty($additionalDiscountCode))) {
            unset($this->AdditionalDiscountCode);
        } else {
            $this->AdditionalDiscountCode = $additionalDiscountCode;
        }
        return $this;
    }
    /**
     * Get AdditionalDiscountPercentageValue value
     * @return int|null
     */
    public function getAdditionalDiscountPercentageValue()
    {
        return $this->AdditionalDiscountPercentageValue;
    }
    /**
     * Set AdditionalDiscountPercentageValue value
     * @param int $additionalDiscountPercentageValue
     * @return \Mu4ddi3\Compensa\Webservice\StructType\NNW
     */
    public function setAdditionalDiscountPercentageValue($additionalDiscountPercentageValue = null)
    {
        // validation for constraint: int
        if (!is_null($additionalDiscountPercentageValue) && !is_numeric($additionalDiscountPercentageValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($additionalDiscountPercentageValue)), __LINE__);
        }
        $this->AdditionalDiscountPercentageValue = $additionalDiscountPercentageValue;
        return $this;
    }
    /**
     * Get InsuranceSumFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getInsuranceSumFactor()
    {
        return isset($this->InsuranceSumFactor) ? $this->InsuranceSumFactor : null;
    }
    /**
     * Set InsuranceSumFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $insuranceSumFactor
     * @return \Mu4ddi3\Compensa\Webservice\StructType\NNW
     */
    public function setInsuranceSumFactor(\Mu4ddi3\Compensa\Webservice\StructType\Factor $insuranceSumFactor = null)
    {
        if (is_null($insuranceSumFactor) || (is_array($insuranceSumFactor) && empty($insuranceSumFactor))) {
            unset($this->InsuranceSumFactor);
        } else {
            $this->InsuranceSumFactor = $insuranceSumFactor;
        }
        return $this;
    }
    /**
     * Get IsAdditionalDiscount value
     * @return bool|null
     */
    public function getIsAdditionalDiscount()
    {
        return $this->IsAdditionalDiscount;
    }
    /**
     * Set IsAdditionalDiscount value
     * @param bool $isAdditionalDiscount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\NNW
     */
    public function setIsAdditionalDiscount($isAdditionalDiscount = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAdditionalDiscount) && !is_bool($isAdditionalDiscount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAdditionalDiscount)), __LINE__);
        }
        $this->IsAdditionalDiscount = $isAdditionalDiscount;
        return $this;
    }
    /**
     * Get IsQuintupleInsuranceSum value
     * @return bool|null
     */
    public function getIsQuintupleInsuranceSum()
    {
        return $this->IsQuintupleInsuranceSum;
    }
    /**
     * Set IsQuintupleInsuranceSum value
     * @param bool $isQuintupleInsuranceSum
     * @return \Mu4ddi3\Compensa\Webservice\StructType\NNW
     */
    public function setIsQuintupleInsuranceSum($isQuintupleInsuranceSum = null)
    {
        // validation for constraint: boolean
        if (!is_null($isQuintupleInsuranceSum) && !is_bool($isQuintupleInsuranceSum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isQuintupleInsuranceSum)), __LINE__);
        }
        $this->IsQuintupleInsuranceSum = $isQuintupleInsuranceSum;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\NNW
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
