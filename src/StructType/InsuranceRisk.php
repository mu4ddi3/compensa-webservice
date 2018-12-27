<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InsuranceRisk StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:InsuranceRisk
 * @subpackage Structs
 */
class InsuranceRisk extends MyBusinessRisk
{
    /**
     * The AppliedInsuranceCourseDiscountValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $AppliedInsuranceCourseDiscountValue;
    /**
     * The DiscountUnderAuthorization
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $DiscountUnderAuthorization;
    /**
     * The IsInsuranceHistoryDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsInsuranceHistoryDiscount;
    /**
     * The NumberOfLossesLastYear
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfLossesLastYear;
    /**
     * The NumberOfLossesLastYearPrev
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfLossesLastYearPrev;
    /**
     * The Scope
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessRiskScope
     */
    public $Scope;
    /**
     * The YearsWithoutLoss
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $YearsWithoutLoss;
    /**
     * The YearsWithoutLossPrev
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $YearsWithoutLossPrev;
    /**
     * Constructor method for InsuranceRisk
     * @uses InsuranceRisk::setAppliedInsuranceCourseDiscountValue()
     * @uses InsuranceRisk::setDiscountUnderAuthorization()
     * @uses InsuranceRisk::setIsInsuranceHistoryDiscount()
     * @uses InsuranceRisk::setNumberOfLossesLastYear()
     * @uses InsuranceRisk::setNumberOfLossesLastYearPrev()
     * @uses InsuranceRisk::setScope()
     * @uses InsuranceRisk::setYearsWithoutLoss()
     * @uses InsuranceRisk::setYearsWithoutLossPrev()
     * @param float $appliedInsuranceCourseDiscountValue
     * @param float $discountUnderAuthorization
     * @param bool $isInsuranceHistoryDiscount
     * @param int $numberOfLossesLastYear
     * @param int $numberOfLossesLastYearPrev
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessRiskScope $scope
     * @param int $yearsWithoutLoss
     * @param int $yearsWithoutLossPrev
     */
    public function __construct($appliedInsuranceCourseDiscountValue = null, $discountUnderAuthorization = null, $isInsuranceHistoryDiscount = null, $numberOfLossesLastYear = null, $numberOfLossesLastYearPrev = null, \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessRiskScope $scope = null, $yearsWithoutLoss = null, $yearsWithoutLossPrev = null)
    {
        $this
            ->setAppliedInsuranceCourseDiscountValue($appliedInsuranceCourseDiscountValue)
            ->setDiscountUnderAuthorization($discountUnderAuthorization)
            ->setIsInsuranceHistoryDiscount($isInsuranceHistoryDiscount)
            ->setNumberOfLossesLastYear($numberOfLossesLastYear)
            ->setNumberOfLossesLastYearPrev($numberOfLossesLastYearPrev)
            ->setScope($scope)
            ->setYearsWithoutLoss($yearsWithoutLoss)
            ->setYearsWithoutLossPrev($yearsWithoutLossPrev);
    }
    /**
     * Get AppliedInsuranceCourseDiscountValue value
     * @return float|null
     */
    public function getAppliedInsuranceCourseDiscountValue()
    {
        return $this->AppliedInsuranceCourseDiscountValue;
    }
    /**
     * Set AppliedInsuranceCourseDiscountValue value
     * @param float $appliedInsuranceCourseDiscountValue
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuranceRisk
     */
    public function setAppliedInsuranceCourseDiscountValue($appliedInsuranceCourseDiscountValue = null)
    {
        $this->AppliedInsuranceCourseDiscountValue = $appliedInsuranceCourseDiscountValue;
        return $this;
    }
    /**
     * Get DiscountUnderAuthorization value
     * @return float|null
     */
    public function getDiscountUnderAuthorization()
    {
        return $this->DiscountUnderAuthorization;
    }
    /**
     * Set DiscountUnderAuthorization value
     * @param float $discountUnderAuthorization
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuranceRisk
     */
    public function setDiscountUnderAuthorization($discountUnderAuthorization = null)
    {
        $this->DiscountUnderAuthorization = $discountUnderAuthorization;
        return $this;
    }
    /**
     * Get IsInsuranceHistoryDiscount value
     * @return bool|null
     */
    public function getIsInsuranceHistoryDiscount()
    {
        return $this->IsInsuranceHistoryDiscount;
    }
    /**
     * Set IsInsuranceHistoryDiscount value
     * @param bool $isInsuranceHistoryDiscount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuranceRisk
     */
    public function setIsInsuranceHistoryDiscount($isInsuranceHistoryDiscount = null)
    {
        // validation for constraint: boolean
        if (!is_null($isInsuranceHistoryDiscount) && !is_bool($isInsuranceHistoryDiscount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isInsuranceHistoryDiscount)), __LINE__);
        }
        $this->IsInsuranceHistoryDiscount = $isInsuranceHistoryDiscount;
        return $this;
    }
    /**
     * Get NumberOfLossesLastYear value
     * @return int|null
     */
    public function getNumberOfLossesLastYear()
    {
        return $this->NumberOfLossesLastYear;
    }
    /**
     * Set NumberOfLossesLastYear value
     * @param int $numberOfLossesLastYear
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuranceRisk
     */
    public function setNumberOfLossesLastYear($numberOfLossesLastYear = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfLossesLastYear) && !is_numeric($numberOfLossesLastYear)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfLossesLastYear)), __LINE__);
        }
        $this->NumberOfLossesLastYear = $numberOfLossesLastYear;
        return $this;
    }
    /**
     * Get NumberOfLossesLastYearPrev value
     * @return int|null
     */
    public function getNumberOfLossesLastYearPrev()
    {
        return $this->NumberOfLossesLastYearPrev;
    }
    /**
     * Set NumberOfLossesLastYearPrev value
     * @param int $numberOfLossesLastYearPrev
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuranceRisk
     */
    public function setNumberOfLossesLastYearPrev($numberOfLossesLastYearPrev = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfLossesLastYearPrev) && !is_numeric($numberOfLossesLastYearPrev)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfLossesLastYearPrev)), __LINE__);
        }
        $this->NumberOfLossesLastYearPrev = $numberOfLossesLastYearPrev;
        return $this;
    }
    /**
     * Get Scope value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessRiskScope|null
     */
    public function getScope()
    {
        return isset($this->Scope) ? $this->Scope : null;
    }
    /**
     * Set Scope value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessRiskScope $scope
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuranceRisk
     */
    public function setScope(\Mu4ddi3\Compensa\Webservice\StructType\MyBusinessRiskScope $scope = null)
    {
        if (is_null($scope) || (is_array($scope) && empty($scope))) {
            unset($this->Scope);
        } else {
            $this->Scope = $scope;
        }
        return $this;
    }
    /**
     * Get YearsWithoutLoss value
     * @return int|null
     */
    public function getYearsWithoutLoss()
    {
        return $this->YearsWithoutLoss;
    }
    /**
     * Set YearsWithoutLoss value
     * @param int $yearsWithoutLoss
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuranceRisk
     */
    public function setYearsWithoutLoss($yearsWithoutLoss = null)
    {
        // validation for constraint: int
        if (!is_null($yearsWithoutLoss) && !is_numeric($yearsWithoutLoss)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($yearsWithoutLoss)), __LINE__);
        }
        $this->YearsWithoutLoss = $yearsWithoutLoss;
        return $this;
    }
    /**
     * Get YearsWithoutLossPrev value
     * @return int|null
     */
    public function getYearsWithoutLossPrev()
    {
        return $this->YearsWithoutLossPrev;
    }
    /**
     * Set YearsWithoutLossPrev value
     * @param int $yearsWithoutLossPrev
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuranceRisk
     */
    public function setYearsWithoutLossPrev($yearsWithoutLossPrev = null)
    {
        // validation for constraint: int
        if (!is_null($yearsWithoutLossPrev) && !is_numeric($yearsWithoutLossPrev)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($yearsWithoutLossPrev)), __LINE__);
        }
        $this->YearsWithoutLossPrev = $yearsWithoutLossPrev;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuranceRisk
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
