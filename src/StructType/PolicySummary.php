<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PolicySummary StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PolicySummary
 * @subpackage Structs
 */
class PolicySummary extends AbstractStructBase
{
    /**
     * The ClaimsCountFirst3Years
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ClaimsCountFirst3Years;
    /**
     * The ClaimsCountNext4Years
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $ClaimsCountNext4Years;
    /**
     * The ComensaClaimsSinceLastfoundedPolicyBeginDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $ComensaClaimsSinceLastfoundedPolicyBeginDate;
    /**
     * The CompensaClaimsCountLastYear
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $CompensaClaimsCountLastYear;
    /**
     * The CompensaInsuredYearsFirst3Years
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CompensaInsuredYearsFirst3Years;
    /**
     * The CompensaInsuredYearsNext4Years
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $CompensaInsuredYearsNext4Years;
    /**
     * The ExtendedPeriodBegin
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ExtendedPeriodBegin;
    /**
     * The ExtendedPeriodEnd
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ExtendedPeriodEnd;
    /**
     * The Factor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $Factor;
    /**
     * The FactorFromLastFoundedComensaPolicy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $FactorFromLastFoundedComensaPolicy;
    /**
     * The FactorFromOryginalVeryfication
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $FactorFromOryginalVeryfication;
    /**
     * The InsuranceCompaniesCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $InsuranceCompaniesCount;
    /**
     * The InsuredYearsFirst3Years
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $InsuredYearsFirst3Years;
    /**
     * The InsuredYearsNext4Years
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $InsuredYearsNext4Years;
    /**
     * The IsRenewalSuperDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsRenewalSuperDiscount;
    /**
     * The LastFoundedComensaPolicyBeginDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $LastFoundedComensaPolicyBeginDate;
    /**
     * The LastFoundedCompensaPolicyNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $LastFoundedCompensaPolicyNumber;
    /**
     * The NonCompensaClaimsCountLastYear
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $NonCompensaClaimsCountLastYear;
    /**
     * The OryginalFactorFromLastFoundedComensaPolicy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $OryginalFactorFromLastFoundedComensaPolicy;
    /**
     * The PoliciesFirst3Years
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPolicyInfo
     */
    public $PoliciesFirst3Years;
    /**
     * The PoliciesNext4Years
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPolicyInfo
     */
    public $PoliciesNext4Years;
    /**
     * The StandardPeriodBegin
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $StandardPeriodBegin;
    /**
     * The StandardPeriodEnd
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $StandardPeriodEnd;
    /**
     * Constructor method for PolicySummary
     * @uses PolicySummary::setClaimsCountFirst3Years()
     * @uses PolicySummary::setClaimsCountNext4Years()
     * @uses PolicySummary::setComensaClaimsSinceLastfoundedPolicyBeginDate()
     * @uses PolicySummary::setCompensaClaimsCountLastYear()
     * @uses PolicySummary::setCompensaInsuredYearsFirst3Years()
     * @uses PolicySummary::setCompensaInsuredYearsNext4Years()
     * @uses PolicySummary::setExtendedPeriodBegin()
     * @uses PolicySummary::setExtendedPeriodEnd()
     * @uses PolicySummary::setFactor()
     * @uses PolicySummary::setFactorFromLastFoundedComensaPolicy()
     * @uses PolicySummary::setFactorFromOryginalVeryfication()
     * @uses PolicySummary::setInsuranceCompaniesCount()
     * @uses PolicySummary::setInsuredYearsFirst3Years()
     * @uses PolicySummary::setInsuredYearsNext4Years()
     * @uses PolicySummary::setIsRenewalSuperDiscount()
     * @uses PolicySummary::setLastFoundedComensaPolicyBeginDate()
     * @uses PolicySummary::setLastFoundedCompensaPolicyNumber()
     * @uses PolicySummary::setNonCompensaClaimsCountLastYear()
     * @uses PolicySummary::setOryginalFactorFromLastFoundedComensaPolicy()
     * @uses PolicySummary::setPoliciesFirst3Years()
     * @uses PolicySummary::setPoliciesNext4Years()
     * @uses PolicySummary::setStandardPeriodBegin()
     * @uses PolicySummary::setStandardPeriodEnd()
     * @param int $claimsCountFirst3Years
     * @param int $claimsCountNext4Years
     * @param int $comensaClaimsSinceLastfoundedPolicyBeginDate
     * @param int $compensaClaimsCountLastYear
     * @param int $compensaInsuredYearsFirst3Years
     * @param int $compensaInsuredYearsNext4Years
     * @param string $extendedPeriodBegin
     * @param string $extendedPeriodEnd
     * @param float $factor
     * @param float $factorFromLastFoundedComensaPolicy
     * @param float $factorFromOryginalVeryfication
     * @param int $insuranceCompaniesCount
     * @param int $insuredYearsFirst3Years
     * @param int $insuredYearsNext4Years
     * @param bool $isRenewalSuperDiscount
     * @param string $lastFoundedComensaPolicyBeginDate
     * @param string $lastFoundedCompensaPolicyNumber
     * @param int $nonCompensaClaimsCountLastYear
     * @param float $oryginalFactorFromLastFoundedComensaPolicy
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPolicyInfo $policiesFirst3Years
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPolicyInfo $policiesNext4Years
     * @param string $standardPeriodBegin
     * @param string $standardPeriodEnd
     */
    public function __construct($claimsCountFirst3Years = null, $claimsCountNext4Years = null, $comensaClaimsSinceLastfoundedPolicyBeginDate = null, $compensaClaimsCountLastYear = null, $compensaInsuredYearsFirst3Years = null, $compensaInsuredYearsNext4Years = null, $extendedPeriodBegin = null, $extendedPeriodEnd = null, $factor = null, $factorFromLastFoundedComensaPolicy = null, $factorFromOryginalVeryfication = null, $insuranceCompaniesCount = null, $insuredYearsFirst3Years = null, $insuredYearsNext4Years = null, $isRenewalSuperDiscount = null, $lastFoundedComensaPolicyBeginDate = null, $lastFoundedCompensaPolicyNumber = null, $nonCompensaClaimsCountLastYear = null, $oryginalFactorFromLastFoundedComensaPolicy = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPolicyInfo $policiesFirst3Years = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPolicyInfo $policiesNext4Years = null, $standardPeriodBegin = null, $standardPeriodEnd = null)
    {
        $this
            ->setClaimsCountFirst3Years($claimsCountFirst3Years)
            ->setClaimsCountNext4Years($claimsCountNext4Years)
            ->setComensaClaimsSinceLastfoundedPolicyBeginDate($comensaClaimsSinceLastfoundedPolicyBeginDate)
            ->setCompensaClaimsCountLastYear($compensaClaimsCountLastYear)
            ->setCompensaInsuredYearsFirst3Years($compensaInsuredYearsFirst3Years)
            ->setCompensaInsuredYearsNext4Years($compensaInsuredYearsNext4Years)
            ->setExtendedPeriodBegin($extendedPeriodBegin)
            ->setExtendedPeriodEnd($extendedPeriodEnd)
            ->setFactor($factor)
            ->setFactorFromLastFoundedComensaPolicy($factorFromLastFoundedComensaPolicy)
            ->setFactorFromOryginalVeryfication($factorFromOryginalVeryfication)
            ->setInsuranceCompaniesCount($insuranceCompaniesCount)
            ->setInsuredYearsFirst3Years($insuredYearsFirst3Years)
            ->setInsuredYearsNext4Years($insuredYearsNext4Years)
            ->setIsRenewalSuperDiscount($isRenewalSuperDiscount)
            ->setLastFoundedComensaPolicyBeginDate($lastFoundedComensaPolicyBeginDate)
            ->setLastFoundedCompensaPolicyNumber($lastFoundedCompensaPolicyNumber)
            ->setNonCompensaClaimsCountLastYear($nonCompensaClaimsCountLastYear)
            ->setOryginalFactorFromLastFoundedComensaPolicy($oryginalFactorFromLastFoundedComensaPolicy)
            ->setPoliciesFirst3Years($policiesFirst3Years)
            ->setPoliciesNext4Years($policiesNext4Years)
            ->setStandardPeriodBegin($standardPeriodBegin)
            ->setStandardPeriodEnd($standardPeriodEnd);
    }
    /**
     * Get ClaimsCountFirst3Years value
     * @return int|null
     */
    public function getClaimsCountFirst3Years()
    {
        return $this->ClaimsCountFirst3Years;
    }
    /**
     * Set ClaimsCountFirst3Years value
     * @param int $claimsCountFirst3Years
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicySummary
     */
    public function setClaimsCountFirst3Years($claimsCountFirst3Years = null)
    {
        // validation for constraint: int
        if (!is_null($claimsCountFirst3Years) && !is_numeric($claimsCountFirst3Years)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($claimsCountFirst3Years)), __LINE__);
        }
        $this->ClaimsCountFirst3Years = $claimsCountFirst3Years;
        return $this;
    }
    /**
     * Get ClaimsCountNext4Years value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getClaimsCountNext4Years()
    {
        return isset($this->ClaimsCountNext4Years) ? $this->ClaimsCountNext4Years : null;
    }
    /**
     * Set ClaimsCountNext4Years value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $claimsCountNext4Years
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicySummary
     */
    public function setClaimsCountNext4Years($claimsCountNext4Years = null)
    {
        // validation for constraint: int
        if (!is_null($claimsCountNext4Years) && !is_numeric($claimsCountNext4Years)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($claimsCountNext4Years)), __LINE__);
        }
        if (is_null($claimsCountNext4Years) || (is_array($claimsCountNext4Years) && empty($claimsCountNext4Years))) {
            unset($this->ClaimsCountNext4Years);
        } else {
            $this->ClaimsCountNext4Years = $claimsCountNext4Years;
        }
        return $this;
    }
    /**
     * Get ComensaClaimsSinceLastfoundedPolicyBeginDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getComensaClaimsSinceLastfoundedPolicyBeginDate()
    {
        return isset($this->ComensaClaimsSinceLastfoundedPolicyBeginDate) ? $this->ComensaClaimsSinceLastfoundedPolicyBeginDate : null;
    }
    /**
     * Set ComensaClaimsSinceLastfoundedPolicyBeginDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $comensaClaimsSinceLastfoundedPolicyBeginDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicySummary
     */
    public function setComensaClaimsSinceLastfoundedPolicyBeginDate($comensaClaimsSinceLastfoundedPolicyBeginDate = null)
    {
        // validation for constraint: int
        if (!is_null($comensaClaimsSinceLastfoundedPolicyBeginDate) && !is_numeric($comensaClaimsSinceLastfoundedPolicyBeginDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($comensaClaimsSinceLastfoundedPolicyBeginDate)), __LINE__);
        }
        if (is_null($comensaClaimsSinceLastfoundedPolicyBeginDate) || (is_array($comensaClaimsSinceLastfoundedPolicyBeginDate) && empty($comensaClaimsSinceLastfoundedPolicyBeginDate))) {
            unset($this->ComensaClaimsSinceLastfoundedPolicyBeginDate);
        } else {
            $this->ComensaClaimsSinceLastfoundedPolicyBeginDate = $comensaClaimsSinceLastfoundedPolicyBeginDate;
        }
        return $this;
    }
    /**
     * Get CompensaClaimsCountLastYear value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getCompensaClaimsCountLastYear()
    {
        return isset($this->CompensaClaimsCountLastYear) ? $this->CompensaClaimsCountLastYear : null;
    }
    /**
     * Set CompensaClaimsCountLastYear value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $compensaClaimsCountLastYear
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicySummary
     */
    public function setCompensaClaimsCountLastYear($compensaClaimsCountLastYear = null)
    {
        // validation for constraint: int
        if (!is_null($compensaClaimsCountLastYear) && !is_numeric($compensaClaimsCountLastYear)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($compensaClaimsCountLastYear)), __LINE__);
        }
        if (is_null($compensaClaimsCountLastYear) || (is_array($compensaClaimsCountLastYear) && empty($compensaClaimsCountLastYear))) {
            unset($this->CompensaClaimsCountLastYear);
        } else {
            $this->CompensaClaimsCountLastYear = $compensaClaimsCountLastYear;
        }
        return $this;
    }
    /**
     * Get CompensaInsuredYearsFirst3Years value
     * @return int|null
     */
    public function getCompensaInsuredYearsFirst3Years()
    {
        return $this->CompensaInsuredYearsFirst3Years;
    }
    /**
     * Set CompensaInsuredYearsFirst3Years value
     * @param int $compensaInsuredYearsFirst3Years
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicySummary
     */
    public function setCompensaInsuredYearsFirst3Years($compensaInsuredYearsFirst3Years = null)
    {
        // validation for constraint: int
        if (!is_null($compensaInsuredYearsFirst3Years) && !is_numeric($compensaInsuredYearsFirst3Years)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($compensaInsuredYearsFirst3Years)), __LINE__);
        }
        $this->CompensaInsuredYearsFirst3Years = $compensaInsuredYearsFirst3Years;
        return $this;
    }
    /**
     * Get CompensaInsuredYearsNext4Years value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getCompensaInsuredYearsNext4Years()
    {
        return isset($this->CompensaInsuredYearsNext4Years) ? $this->CompensaInsuredYearsNext4Years : null;
    }
    /**
     * Set CompensaInsuredYearsNext4Years value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $compensaInsuredYearsNext4Years
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicySummary
     */
    public function setCompensaInsuredYearsNext4Years($compensaInsuredYearsNext4Years = null)
    {
        // validation for constraint: int
        if (!is_null($compensaInsuredYearsNext4Years) && !is_numeric($compensaInsuredYearsNext4Years)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($compensaInsuredYearsNext4Years)), __LINE__);
        }
        if (is_null($compensaInsuredYearsNext4Years) || (is_array($compensaInsuredYearsNext4Years) && empty($compensaInsuredYearsNext4Years))) {
            unset($this->CompensaInsuredYearsNext4Years);
        } else {
            $this->CompensaInsuredYearsNext4Years = $compensaInsuredYearsNext4Years;
        }
        return $this;
    }
    /**
     * Get ExtendedPeriodBegin value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getExtendedPeriodBegin()
    {
        return isset($this->ExtendedPeriodBegin) ? $this->ExtendedPeriodBegin : null;
    }
    /**
     * Set ExtendedPeriodBegin value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $extendedPeriodBegin
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicySummary
     */
    public function setExtendedPeriodBegin($extendedPeriodBegin = null)
    {
        // validation for constraint: string
        if (!is_null($extendedPeriodBegin) && !is_string($extendedPeriodBegin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($extendedPeriodBegin)), __LINE__);
        }
        if (is_null($extendedPeriodBegin) || (is_array($extendedPeriodBegin) && empty($extendedPeriodBegin))) {
            unset($this->ExtendedPeriodBegin);
        } else {
            $this->ExtendedPeriodBegin = $extendedPeriodBegin;
        }
        return $this;
    }
    /**
     * Get ExtendedPeriodEnd value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getExtendedPeriodEnd()
    {
        return isset($this->ExtendedPeriodEnd) ? $this->ExtendedPeriodEnd : null;
    }
    /**
     * Set ExtendedPeriodEnd value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $extendedPeriodEnd
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicySummary
     */
    public function setExtendedPeriodEnd($extendedPeriodEnd = null)
    {
        // validation for constraint: string
        if (!is_null($extendedPeriodEnd) && !is_string($extendedPeriodEnd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($extendedPeriodEnd)), __LINE__);
        }
        if (is_null($extendedPeriodEnd) || (is_array($extendedPeriodEnd) && empty($extendedPeriodEnd))) {
            unset($this->ExtendedPeriodEnd);
        } else {
            $this->ExtendedPeriodEnd = $extendedPeriodEnd;
        }
        return $this;
    }
    /**
     * Get Factor value
     * @return float|null
     */
    public function getFactor()
    {
        return $this->Factor;
    }
    /**
     * Set Factor value
     * @param float $factor
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicySummary
     */
    public function setFactor($factor = null)
    {
        $this->Factor = $factor;
        return $this;
    }
    /**
     * Get FactorFromLastFoundedComensaPolicy value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getFactorFromLastFoundedComensaPolicy()
    {
        return isset($this->FactorFromLastFoundedComensaPolicy) ? $this->FactorFromLastFoundedComensaPolicy : null;
    }
    /**
     * Set FactorFromLastFoundedComensaPolicy value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $factorFromLastFoundedComensaPolicy
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicySummary
     */
    public function setFactorFromLastFoundedComensaPolicy($factorFromLastFoundedComensaPolicy = null)
    {
        if (is_null($factorFromLastFoundedComensaPolicy) || (is_array($factorFromLastFoundedComensaPolicy) && empty($factorFromLastFoundedComensaPolicy))) {
            unset($this->FactorFromLastFoundedComensaPolicy);
        } else {
            $this->FactorFromLastFoundedComensaPolicy = $factorFromLastFoundedComensaPolicy;
        }
        return $this;
    }
    /**
     * Get FactorFromOryginalVeryfication value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getFactorFromOryginalVeryfication()
    {
        return isset($this->FactorFromOryginalVeryfication) ? $this->FactorFromOryginalVeryfication : null;
    }
    /**
     * Set FactorFromOryginalVeryfication value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $factorFromOryginalVeryfication
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicySummary
     */
    public function setFactorFromOryginalVeryfication($factorFromOryginalVeryfication = null)
    {
        if (is_null($factorFromOryginalVeryfication) || (is_array($factorFromOryginalVeryfication) && empty($factorFromOryginalVeryfication))) {
            unset($this->FactorFromOryginalVeryfication);
        } else {
            $this->FactorFromOryginalVeryfication = $factorFromOryginalVeryfication;
        }
        return $this;
    }
    /**
     * Get InsuranceCompaniesCount value
     * @return int|null
     */
    public function getInsuranceCompaniesCount()
    {
        return $this->InsuranceCompaniesCount;
    }
    /**
     * Set InsuranceCompaniesCount value
     * @param int $insuranceCompaniesCount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicySummary
     */
    public function setInsuranceCompaniesCount($insuranceCompaniesCount = null)
    {
        // validation for constraint: int
        if (!is_null($insuranceCompaniesCount) && !is_numeric($insuranceCompaniesCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($insuranceCompaniesCount)), __LINE__);
        }
        $this->InsuranceCompaniesCount = $insuranceCompaniesCount;
        return $this;
    }
    /**
     * Get InsuredYearsFirst3Years value
     * @return int|null
     */
    public function getInsuredYearsFirst3Years()
    {
        return $this->InsuredYearsFirst3Years;
    }
    /**
     * Set InsuredYearsFirst3Years value
     * @param int $insuredYearsFirst3Years
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicySummary
     */
    public function setInsuredYearsFirst3Years($insuredYearsFirst3Years = null)
    {
        // validation for constraint: int
        if (!is_null($insuredYearsFirst3Years) && !is_numeric($insuredYearsFirst3Years)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($insuredYearsFirst3Years)), __LINE__);
        }
        $this->InsuredYearsFirst3Years = $insuredYearsFirst3Years;
        return $this;
    }
    /**
     * Get InsuredYearsNext4Years value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getInsuredYearsNext4Years()
    {
        return isset($this->InsuredYearsNext4Years) ? $this->InsuredYearsNext4Years : null;
    }
    /**
     * Set InsuredYearsNext4Years value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $insuredYearsNext4Years
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicySummary
     */
    public function setInsuredYearsNext4Years($insuredYearsNext4Years = null)
    {
        // validation for constraint: int
        if (!is_null($insuredYearsNext4Years) && !is_numeric($insuredYearsNext4Years)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($insuredYearsNext4Years)), __LINE__);
        }
        if (is_null($insuredYearsNext4Years) || (is_array($insuredYearsNext4Years) && empty($insuredYearsNext4Years))) {
            unset($this->InsuredYearsNext4Years);
        } else {
            $this->InsuredYearsNext4Years = $insuredYearsNext4Years;
        }
        return $this;
    }
    /**
     * Get IsRenewalSuperDiscount value
     * @return bool|null
     */
    public function getIsRenewalSuperDiscount()
    {
        return $this->IsRenewalSuperDiscount;
    }
    /**
     * Set IsRenewalSuperDiscount value
     * @param bool $isRenewalSuperDiscount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicySummary
     */
    public function setIsRenewalSuperDiscount($isRenewalSuperDiscount = null)
    {
        // validation for constraint: boolean
        if (!is_null($isRenewalSuperDiscount) && !is_bool($isRenewalSuperDiscount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isRenewalSuperDiscount)), __LINE__);
        }
        $this->IsRenewalSuperDiscount = $isRenewalSuperDiscount;
        return $this;
    }
    /**
     * Get LastFoundedComensaPolicyBeginDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLastFoundedComensaPolicyBeginDate()
    {
        return isset($this->LastFoundedComensaPolicyBeginDate) ? $this->LastFoundedComensaPolicyBeginDate : null;
    }
    /**
     * Set LastFoundedComensaPolicyBeginDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $lastFoundedComensaPolicyBeginDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicySummary
     */
    public function setLastFoundedComensaPolicyBeginDate($lastFoundedComensaPolicyBeginDate = null)
    {
        // validation for constraint: string
        if (!is_null($lastFoundedComensaPolicyBeginDate) && !is_string($lastFoundedComensaPolicyBeginDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastFoundedComensaPolicyBeginDate)), __LINE__);
        }
        if (is_null($lastFoundedComensaPolicyBeginDate) || (is_array($lastFoundedComensaPolicyBeginDate) && empty($lastFoundedComensaPolicyBeginDate))) {
            unset($this->LastFoundedComensaPolicyBeginDate);
        } else {
            $this->LastFoundedComensaPolicyBeginDate = $lastFoundedComensaPolicyBeginDate;
        }
        return $this;
    }
    /**
     * Get LastFoundedCompensaPolicyNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLastFoundedCompensaPolicyNumber()
    {
        return isset($this->LastFoundedCompensaPolicyNumber) ? $this->LastFoundedCompensaPolicyNumber : null;
    }
    /**
     * Set LastFoundedCompensaPolicyNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $lastFoundedCompensaPolicyNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicySummary
     */
    public function setLastFoundedCompensaPolicyNumber($lastFoundedCompensaPolicyNumber = null)
    {
        // validation for constraint: string
        if (!is_null($lastFoundedCompensaPolicyNumber) && !is_string($lastFoundedCompensaPolicyNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastFoundedCompensaPolicyNumber)), __LINE__);
        }
        if (is_null($lastFoundedCompensaPolicyNumber) || (is_array($lastFoundedCompensaPolicyNumber) && empty($lastFoundedCompensaPolicyNumber))) {
            unset($this->LastFoundedCompensaPolicyNumber);
        } else {
            $this->LastFoundedCompensaPolicyNumber = $lastFoundedCompensaPolicyNumber;
        }
        return $this;
    }
    /**
     * Get NonCompensaClaimsCountLastYear value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getNonCompensaClaimsCountLastYear()
    {
        return isset($this->NonCompensaClaimsCountLastYear) ? $this->NonCompensaClaimsCountLastYear : null;
    }
    /**
     * Set NonCompensaClaimsCountLastYear value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $nonCompensaClaimsCountLastYear
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicySummary
     */
    public function setNonCompensaClaimsCountLastYear($nonCompensaClaimsCountLastYear = null)
    {
        // validation for constraint: int
        if (!is_null($nonCompensaClaimsCountLastYear) && !is_numeric($nonCompensaClaimsCountLastYear)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($nonCompensaClaimsCountLastYear)), __LINE__);
        }
        if (is_null($nonCompensaClaimsCountLastYear) || (is_array($nonCompensaClaimsCountLastYear) && empty($nonCompensaClaimsCountLastYear))) {
            unset($this->NonCompensaClaimsCountLastYear);
        } else {
            $this->NonCompensaClaimsCountLastYear = $nonCompensaClaimsCountLastYear;
        }
        return $this;
    }
    /**
     * Get OryginalFactorFromLastFoundedComensaPolicy value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getOryginalFactorFromLastFoundedComensaPolicy()
    {
        return isset($this->OryginalFactorFromLastFoundedComensaPolicy) ? $this->OryginalFactorFromLastFoundedComensaPolicy : null;
    }
    /**
     * Set OryginalFactorFromLastFoundedComensaPolicy value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $oryginalFactorFromLastFoundedComensaPolicy
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicySummary
     */
    public function setOryginalFactorFromLastFoundedComensaPolicy($oryginalFactorFromLastFoundedComensaPolicy = null)
    {
        if (is_null($oryginalFactorFromLastFoundedComensaPolicy) || (is_array($oryginalFactorFromLastFoundedComensaPolicy) && empty($oryginalFactorFromLastFoundedComensaPolicy))) {
            unset($this->OryginalFactorFromLastFoundedComensaPolicy);
        } else {
            $this->OryginalFactorFromLastFoundedComensaPolicy = $oryginalFactorFromLastFoundedComensaPolicy;
        }
        return $this;
    }
    /**
     * Get PoliciesFirst3Years value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPolicyInfo|null
     */
    public function getPoliciesFirst3Years()
    {
        return isset($this->PoliciesFirst3Years) ? $this->PoliciesFirst3Years : null;
    }
    /**
     * Set PoliciesFirst3Years value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPolicyInfo $policiesFirst3Years
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicySummary
     */
    public function setPoliciesFirst3Years(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPolicyInfo $policiesFirst3Years = null)
    {
        if (is_null($policiesFirst3Years) || (is_array($policiesFirst3Years) && empty($policiesFirst3Years))) {
            unset($this->PoliciesFirst3Years);
        } else {
            $this->PoliciesFirst3Years = $policiesFirst3Years;
        }
        return $this;
    }
    /**
     * Get PoliciesNext4Years value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPolicyInfo|null
     */
    public function getPoliciesNext4Years()
    {
        return isset($this->PoliciesNext4Years) ? $this->PoliciesNext4Years : null;
    }
    /**
     * Set PoliciesNext4Years value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPolicyInfo $policiesNext4Years
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicySummary
     */
    public function setPoliciesNext4Years(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPolicyInfo $policiesNext4Years = null)
    {
        if (is_null($policiesNext4Years) || (is_array($policiesNext4Years) && empty($policiesNext4Years))) {
            unset($this->PoliciesNext4Years);
        } else {
            $this->PoliciesNext4Years = $policiesNext4Years;
        }
        return $this;
    }
    /**
     * Get StandardPeriodBegin value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStandardPeriodBegin()
    {
        return isset($this->StandardPeriodBegin) ? $this->StandardPeriodBegin : null;
    }
    /**
     * Set StandardPeriodBegin value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $standardPeriodBegin
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicySummary
     */
    public function setStandardPeriodBegin($standardPeriodBegin = null)
    {
        // validation for constraint: string
        if (!is_null($standardPeriodBegin) && !is_string($standardPeriodBegin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($standardPeriodBegin)), __LINE__);
        }
        if (is_null($standardPeriodBegin) || (is_array($standardPeriodBegin) && empty($standardPeriodBegin))) {
            unset($this->StandardPeriodBegin);
        } else {
            $this->StandardPeriodBegin = $standardPeriodBegin;
        }
        return $this;
    }
    /**
     * Get StandardPeriodEnd value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStandardPeriodEnd()
    {
        return isset($this->StandardPeriodEnd) ? $this->StandardPeriodEnd : null;
    }
    /**
     * Set StandardPeriodEnd value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $standardPeriodEnd
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicySummary
     */
    public function setStandardPeriodEnd($standardPeriodEnd = null)
    {
        // validation for constraint: string
        if (!is_null($standardPeriodEnd) && !is_string($standardPeriodEnd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($standardPeriodEnd)), __LINE__);
        }
        if (is_null($standardPeriodEnd) || (is_array($standardPeriodEnd) && empty($standardPeriodEnd))) {
            unset($this->StandardPeriodEnd);
        } else {
            $this->StandardPeriodEnd = $standardPeriodEnd;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicySummary
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
