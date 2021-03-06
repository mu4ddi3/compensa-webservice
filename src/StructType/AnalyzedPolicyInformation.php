<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AnalyzedPolicyInformation StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AnalyzedPolicyInformation
 * @subpackage Structs
 */
class AnalyzedPolicyInformation extends AbstractStructBase
{
    /**
     * The EarnedDays
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $EarnedDays;
    /**
     * The EndDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $EndDate;
    /**
     * The IsCompensa
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsCompensa;
    /**
     * The PolicyId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PolicyId;
    /**
     * The ProductTypeId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ProductTypeId;
    /**
     * The RiskCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RiskCode;
    /**
     * The StartDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $StartDate;
    /**
     * Constructor method for AnalyzedPolicyInformation
     * @uses AnalyzedPolicyInformation::setEarnedDays()
     * @uses AnalyzedPolicyInformation::setEndDate()
     * @uses AnalyzedPolicyInformation::setIsCompensa()
     * @uses AnalyzedPolicyInformation::setPolicyId()
     * @uses AnalyzedPolicyInformation::setProductTypeId()
     * @uses AnalyzedPolicyInformation::setRiskCode()
     * @uses AnalyzedPolicyInformation::setStartDate()
     * @param int $earnedDays
     * @param string $endDate
     * @param bool $isCompensa
     * @param string $policyId
     * @param string $productTypeId
     * @param string $riskCode
     * @param string $startDate
     */
    public function __construct($earnedDays = null, $endDate = null, $isCompensa = null, $policyId = null, $productTypeId = null, $riskCode = null, $startDate = null)
    {
        $this
            ->setEarnedDays($earnedDays)
            ->setEndDate($endDate)
            ->setIsCompensa($isCompensa)
            ->setPolicyId($policyId)
            ->setProductTypeId($productTypeId)
            ->setRiskCode($riskCode)
            ->setStartDate($startDate);
    }
    /**
     * Get EarnedDays value
     * @return int|null
     */
    public function getEarnedDays()
    {
        return $this->EarnedDays;
    }
    /**
     * Set EarnedDays value
     * @param int $earnedDays
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AnalyzedPolicyInformation
     */
    public function setEarnedDays($earnedDays = null)
    {
        // validation for constraint: int
        if (!is_null($earnedDays) && !is_numeric($earnedDays)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($earnedDays)), __LINE__);
        }
        $this->EarnedDays = $earnedDays;
        return $this;
    }
    /**
     * Get EndDate value
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }
    /**
     * Set EndDate value
     * @param string $endDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AnalyzedPolicyInformation
     */
    public function setEndDate($endDate = null)
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endDate)), __LINE__);
        }
        $this->EndDate = $endDate;
        return $this;
    }
    /**
     * Get IsCompensa value
     * @return bool|null
     */
    public function getIsCompensa()
    {
        return $this->IsCompensa;
    }
    /**
     * Set IsCompensa value
     * @param bool $isCompensa
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AnalyzedPolicyInformation
     */
    public function setIsCompensa($isCompensa = null)
    {
        // validation for constraint: boolean
        if (!is_null($isCompensa) && !is_bool($isCompensa)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isCompensa)), __LINE__);
        }
        $this->IsCompensa = $isCompensa;
        return $this;
    }
    /**
     * Get PolicyId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPolicyId()
    {
        return isset($this->PolicyId) ? $this->PolicyId : null;
    }
    /**
     * Set PolicyId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $policyId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AnalyzedPolicyInformation
     */
    public function setPolicyId($policyId = null)
    {
        // validation for constraint: string
        if (!is_null($policyId) && !is_string($policyId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($policyId)), __LINE__);
        }
        if (is_null($policyId) || (is_array($policyId) && empty($policyId))) {
            unset($this->PolicyId);
        } else {
            $this->PolicyId = $policyId;
        }
        return $this;
    }
    /**
     * Get ProductTypeId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProductTypeId()
    {
        return isset($this->ProductTypeId) ? $this->ProductTypeId : null;
    }
    /**
     * Set ProductTypeId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $productTypeId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AnalyzedPolicyInformation
     */
    public function setProductTypeId($productTypeId = null)
    {
        // validation for constraint: string
        if (!is_null($productTypeId) && !is_string($productTypeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productTypeId)), __LINE__);
        }
        if (is_null($productTypeId) || (is_array($productTypeId) && empty($productTypeId))) {
            unset($this->ProductTypeId);
        } else {
            $this->ProductTypeId = $productTypeId;
        }
        return $this;
    }
    /**
     * Get RiskCode value
     * @return string|null
     */
    public function getRiskCode()
    {
        return $this->RiskCode;
    }
    /**
     * Set RiskCode value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\RiskCode::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\RiskCode::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $riskCode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AnalyzedPolicyInformation
     */
    public function setRiskCode($riskCode = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\RiskCode::valueIsValid($riskCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $riskCode, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\RiskCode::getValidValues())), __LINE__);
        }
        $this->RiskCode = $riskCode;
        return $this;
    }
    /**
     * Get StartDate value
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }
    /**
     * Set StartDate value
     * @param string $startDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AnalyzedPolicyInformation
     */
    public function setStartDate($startDate = null)
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startDate)), __LINE__);
        }
        $this->StartDate = $startDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AnalyzedPolicyInformation
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
