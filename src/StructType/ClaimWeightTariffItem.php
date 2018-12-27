<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClaimWeightTariffItem StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ClaimWeightTariffItem
 * @subpackage Structs
 */
class ClaimWeightTariffItem extends AbstractStructBase
{
    /**
     * The ClaimCompensationAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\RangeOfdecimal
     */
    public $ClaimCompensationAmount;
    /**
     * The ClaimDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint
     */
    public $ClaimDate;
    /**
     * The ClaimScopes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfKeyValueOfClaimScopeNullableOfbooleanBFmuWHBL
     */
    public $ClaimScopes;
    /**
     * The ClaimWeight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $ClaimWeight;
    /**
     * The InsuranceCompanyCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $InsuranceCompanyCode;
    /**
     * The IsClaimAddedByAgent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $IsClaimAddedByAgent;
    /**
     * The IsClaimCompensated
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $IsClaimCompensated;
    /**
     * The IsClaimRefused
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $IsClaimRefused;
    /**
     * The IsDiscountLossProtection
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $IsDiscountLossProtection;
    /**
     * The IsFullRegression
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $IsFullRegression;
    /**
     * The MtplClaimTypes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfKeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBL
     */
    public $MtplClaimTypes;
    /**
     * The Number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Number;
    /**
     * The PartnerRolesOnClaim
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfKeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL
     */
    public $PartnerRolesOnClaim;
    /**
     * Constructor method for ClaimWeightTariffItem
     * @uses ClaimWeightTariffItem::setClaimCompensationAmount()
     * @uses ClaimWeightTariffItem::setClaimDate()
     * @uses ClaimWeightTariffItem::setClaimScopes()
     * @uses ClaimWeightTariffItem::setClaimWeight()
     * @uses ClaimWeightTariffItem::setInsuranceCompanyCode()
     * @uses ClaimWeightTariffItem::setIsClaimAddedByAgent()
     * @uses ClaimWeightTariffItem::setIsClaimCompensated()
     * @uses ClaimWeightTariffItem::setIsClaimRefused()
     * @uses ClaimWeightTariffItem::setIsDiscountLossProtection()
     * @uses ClaimWeightTariffItem::setIsFullRegression()
     * @uses ClaimWeightTariffItem::setMtplClaimTypes()
     * @uses ClaimWeightTariffItem::setNumber()
     * @uses ClaimWeightTariffItem::setPartnerRolesOnClaim()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RangeOfdecimal $claimCompensationAmount
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint $claimDate
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfKeyValueOfClaimScopeNullableOfbooleanBFmuWHBL $claimScopes
     * @param float $claimWeight
     * @param string $insuranceCompanyCode
     * @param bool $isClaimAddedByAgent
     * @param bool $isClaimCompensated
     * @param bool $isClaimRefused
     * @param bool $isDiscountLossProtection
     * @param bool $isFullRegression
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfKeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBL $mtplClaimTypes
     * @param int $number
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfKeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL $partnerRolesOnClaim
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\RangeOfdecimal $claimCompensationAmount = null, \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint $claimDate = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfKeyValueOfClaimScopeNullableOfbooleanBFmuWHBL $claimScopes = null, $claimWeight = null, $insuranceCompanyCode = null, $isClaimAddedByAgent = null, $isClaimCompensated = null, $isClaimRefused = null, $isDiscountLossProtection = null, $isFullRegression = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfKeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBL $mtplClaimTypes = null, $number = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfKeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL $partnerRolesOnClaim = null)
    {
        $this
            ->setClaimCompensationAmount($claimCompensationAmount)
            ->setClaimDate($claimDate)
            ->setClaimScopes($claimScopes)
            ->setClaimWeight($claimWeight)
            ->setInsuranceCompanyCode($insuranceCompanyCode)
            ->setIsClaimAddedByAgent($isClaimAddedByAgent)
            ->setIsClaimCompensated($isClaimCompensated)
            ->setIsClaimRefused($isClaimRefused)
            ->setIsDiscountLossProtection($isDiscountLossProtection)
            ->setIsFullRegression($isFullRegression)
            ->setMtplClaimTypes($mtplClaimTypes)
            ->setNumber($number)
            ->setPartnerRolesOnClaim($partnerRolesOnClaim);
    }
    /**
     * Get ClaimCompensationAmount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RangeOfdecimal|null
     */
    public function getClaimCompensationAmount()
    {
        return isset($this->ClaimCompensationAmount) ? $this->ClaimCompensationAmount : null;
    }
    /**
     * Set ClaimCompensationAmount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RangeOfdecimal $claimCompensationAmount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimWeightTariffItem
     */
    public function setClaimCompensationAmount(\Mu4ddi3\Compensa\Webservice\StructType\RangeOfdecimal $claimCompensationAmount = null)
    {
        if (is_null($claimCompensationAmount) || (is_array($claimCompensationAmount) && empty($claimCompensationAmount))) {
            unset($this->ClaimCompensationAmount);
        } else {
            $this->ClaimCompensationAmount = $claimCompensationAmount;
        }
        return $this;
    }
    /**
     * Get ClaimDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint|null
     */
    public function getClaimDate()
    {
        return isset($this->ClaimDate) ? $this->ClaimDate : null;
    }
    /**
     * Set ClaimDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint $claimDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimWeightTariffItem
     */
    public function setClaimDate(\Mu4ddi3\Compensa\Webservice\StructType\RangeOfint $claimDate = null)
    {
        if (is_null($claimDate) || (is_array($claimDate) && empty($claimDate))) {
            unset($this->ClaimDate);
        } else {
            $this->ClaimDate = $claimDate;
        }
        return $this;
    }
    /**
     * Get ClaimScopes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfKeyValueOfClaimScopeNullableOfbooleanBFmuWHBL|null
     */
    public function getClaimScopes()
    {
        return isset($this->ClaimScopes) ? $this->ClaimScopes : null;
    }
    /**
     * Set ClaimScopes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfKeyValueOfClaimScopeNullableOfbooleanBFmuWHBL $claimScopes
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimWeightTariffItem
     */
    public function setClaimScopes(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfKeyValueOfClaimScopeNullableOfbooleanBFmuWHBL $claimScopes = null)
    {
        if (is_null($claimScopes) || (is_array($claimScopes) && empty($claimScopes))) {
            unset($this->ClaimScopes);
        } else {
            $this->ClaimScopes = $claimScopes;
        }
        return $this;
    }
    /**
     * Get ClaimWeight value
     * @return float|null
     */
    public function getClaimWeight()
    {
        return $this->ClaimWeight;
    }
    /**
     * Set ClaimWeight value
     * @param float $claimWeight
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimWeightTariffItem
     */
    public function setClaimWeight($claimWeight = null)
    {
        $this->ClaimWeight = $claimWeight;
        return $this;
    }
    /**
     * Get InsuranceCompanyCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInsuranceCompanyCode()
    {
        return isset($this->InsuranceCompanyCode) ? $this->InsuranceCompanyCode : null;
    }
    /**
     * Set InsuranceCompanyCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $insuranceCompanyCode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimWeightTariffItem
     */
    public function setInsuranceCompanyCode($insuranceCompanyCode = null)
    {
        // validation for constraint: string
        if (!is_null($insuranceCompanyCode) && !is_string($insuranceCompanyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($insuranceCompanyCode)), __LINE__);
        }
        if (is_null($insuranceCompanyCode) || (is_array($insuranceCompanyCode) && empty($insuranceCompanyCode))) {
            unset($this->InsuranceCompanyCode);
        } else {
            $this->InsuranceCompanyCode = $insuranceCompanyCode;
        }
        return $this;
    }
    /**
     * Get IsClaimAddedByAgent value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsClaimAddedByAgent()
    {
        return isset($this->IsClaimAddedByAgent) ? $this->IsClaimAddedByAgent : null;
    }
    /**
     * Set IsClaimAddedByAgent value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isClaimAddedByAgent
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimWeightTariffItem
     */
    public function setIsClaimAddedByAgent($isClaimAddedByAgent = null)
    {
        // validation for constraint: boolean
        if (!is_null($isClaimAddedByAgent) && !is_bool($isClaimAddedByAgent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isClaimAddedByAgent)), __LINE__);
        }
        if (is_null($isClaimAddedByAgent) || (is_array($isClaimAddedByAgent) && empty($isClaimAddedByAgent))) {
            unset($this->IsClaimAddedByAgent);
        } else {
            $this->IsClaimAddedByAgent = $isClaimAddedByAgent;
        }
        return $this;
    }
    /**
     * Get IsClaimCompensated value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsClaimCompensated()
    {
        return isset($this->IsClaimCompensated) ? $this->IsClaimCompensated : null;
    }
    /**
     * Set IsClaimCompensated value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isClaimCompensated
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimWeightTariffItem
     */
    public function setIsClaimCompensated($isClaimCompensated = null)
    {
        // validation for constraint: boolean
        if (!is_null($isClaimCompensated) && !is_bool($isClaimCompensated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isClaimCompensated)), __LINE__);
        }
        if (is_null($isClaimCompensated) || (is_array($isClaimCompensated) && empty($isClaimCompensated))) {
            unset($this->IsClaimCompensated);
        } else {
            $this->IsClaimCompensated = $isClaimCompensated;
        }
        return $this;
    }
    /**
     * Get IsClaimRefused value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsClaimRefused()
    {
        return isset($this->IsClaimRefused) ? $this->IsClaimRefused : null;
    }
    /**
     * Set IsClaimRefused value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isClaimRefused
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimWeightTariffItem
     */
    public function setIsClaimRefused($isClaimRefused = null)
    {
        // validation for constraint: boolean
        if (!is_null($isClaimRefused) && !is_bool($isClaimRefused)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isClaimRefused)), __LINE__);
        }
        if (is_null($isClaimRefused) || (is_array($isClaimRefused) && empty($isClaimRefused))) {
            unset($this->IsClaimRefused);
        } else {
            $this->IsClaimRefused = $isClaimRefused;
        }
        return $this;
    }
    /**
     * Get IsDiscountLossProtection value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsDiscountLossProtection()
    {
        return isset($this->IsDiscountLossProtection) ? $this->IsDiscountLossProtection : null;
    }
    /**
     * Set IsDiscountLossProtection value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isDiscountLossProtection
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimWeightTariffItem
     */
    public function setIsDiscountLossProtection($isDiscountLossProtection = null)
    {
        // validation for constraint: boolean
        if (!is_null($isDiscountLossProtection) && !is_bool($isDiscountLossProtection)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isDiscountLossProtection)), __LINE__);
        }
        if (is_null($isDiscountLossProtection) || (is_array($isDiscountLossProtection) && empty($isDiscountLossProtection))) {
            unset($this->IsDiscountLossProtection);
        } else {
            $this->IsDiscountLossProtection = $isDiscountLossProtection;
        }
        return $this;
    }
    /**
     * Get IsFullRegression value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsFullRegression()
    {
        return isset($this->IsFullRegression) ? $this->IsFullRegression : null;
    }
    /**
     * Set IsFullRegression value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isFullRegression
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimWeightTariffItem
     */
    public function setIsFullRegression($isFullRegression = null)
    {
        // validation for constraint: boolean
        if (!is_null($isFullRegression) && !is_bool($isFullRegression)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isFullRegression)), __LINE__);
        }
        if (is_null($isFullRegression) || (is_array($isFullRegression) && empty($isFullRegression))) {
            unset($this->IsFullRegression);
        } else {
            $this->IsFullRegression = $isFullRegression;
        }
        return $this;
    }
    /**
     * Get MtplClaimTypes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfKeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBL|null
     */
    public function getMtplClaimTypes()
    {
        return isset($this->MtplClaimTypes) ? $this->MtplClaimTypes : null;
    }
    /**
     * Set MtplClaimTypes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfKeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBL $mtplClaimTypes
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimWeightTariffItem
     */
    public function setMtplClaimTypes(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfKeyValueOfMtplClaimTypeNullableOfbooleanBFmuWHBL $mtplClaimTypes = null)
    {
        if (is_null($mtplClaimTypes) || (is_array($mtplClaimTypes) && empty($mtplClaimTypes))) {
            unset($this->MtplClaimTypes);
        } else {
            $this->MtplClaimTypes = $mtplClaimTypes;
        }
        return $this;
    }
    /**
     * Get Number value
     * @return int|null
     */
    public function getNumber()
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param int $number
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimWeightTariffItem
     */
    public function setNumber($number = null)
    {
        // validation for constraint: int
        if (!is_null($number) && !is_numeric($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($number)), __LINE__);
        }
        $this->Number = $number;
        return $this;
    }
    /**
     * Get PartnerRolesOnClaim value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfKeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL|null
     */
    public function getPartnerRolesOnClaim()
    {
        return isset($this->PartnerRolesOnClaim) ? $this->PartnerRolesOnClaim : null;
    }
    /**
     * Set PartnerRolesOnClaim value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfKeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL $partnerRolesOnClaim
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimWeightTariffItem
     */
    public function setPartnerRolesOnClaim(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfKeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL $partnerRolesOnClaim = null)
    {
        if (is_null($partnerRolesOnClaim) || (is_array($partnerRolesOnClaim) && empty($partnerRolesOnClaim))) {
            unset($this->PartnerRolesOnClaim);
        } else {
            $this->PartnerRolesOnClaim = $partnerRolesOnClaim;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimWeightTariffItem
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
