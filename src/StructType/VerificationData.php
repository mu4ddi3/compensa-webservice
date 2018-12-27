<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VerificationData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:VerificationData
 * @subpackage Structs
 */
class VerificationData extends AbstractStructBase
{
    /**
     * The IsAgreementForBonusMalusVerification
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAgreementForBonusMalusVerification;
    /**
     * The IsExtendedVerification
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsExtendedVerification;
    /**
     * The IsExtendedVerificationForRegistrationNumberSelected
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsExtendedVerificationForRegistrationNumberSelected;
    /**
     * The IsExtendedVerificationForVinSelected
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsExtendedVerificationForVinSelected;
    /**
     * The ManualClaims
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimInfo
     */
    public $ManualClaims;
    /**
     * The ManualPolicies
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPolicyInfo
     */
    public $ManualPolicies;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The VerificationDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $VerificationDate;
    /**
     * The VerificationYears
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $VerificationYears;
    /**
     * The VerifiedPartners
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVerificationPartner
     */
    public $VerifiedPartners;
    /**
     * Constructor method for VerificationData
     * @uses VerificationData::setIsAgreementForBonusMalusVerification()
     * @uses VerificationData::setIsExtendedVerification()
     * @uses VerificationData::setIsExtendedVerificationForRegistrationNumberSelected()
     * @uses VerificationData::setIsExtendedVerificationForVinSelected()
     * @uses VerificationData::setManualClaims()
     * @uses VerificationData::setManualPolicies()
     * @uses VerificationData::setStatus()
     * @uses VerificationData::setVerificationDate()
     * @uses VerificationData::setVerificationYears()
     * @uses VerificationData::setVerifiedPartners()
     * @param bool $isAgreementForBonusMalusVerification
     * @param bool $isExtendedVerification
     * @param bool $isExtendedVerificationForRegistrationNumberSelected
     * @param bool $isExtendedVerificationForVinSelected
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimInfo $manualClaims
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPolicyInfo $manualPolicies
     * @param string $status
     * @param string $verificationDate
     * @param int $verificationYears
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVerificationPartner $verifiedPartners
     */
    public function __construct($isAgreementForBonusMalusVerification = null, $isExtendedVerification = null, $isExtendedVerificationForRegistrationNumberSelected = null, $isExtendedVerificationForVinSelected = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimInfo $manualClaims = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPolicyInfo $manualPolicies = null, $status = null, $verificationDate = null, $verificationYears = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVerificationPartner $verifiedPartners = null)
    {
        $this
            ->setIsAgreementForBonusMalusVerification($isAgreementForBonusMalusVerification)
            ->setIsExtendedVerification($isExtendedVerification)
            ->setIsExtendedVerificationForRegistrationNumberSelected($isExtendedVerificationForRegistrationNumberSelected)
            ->setIsExtendedVerificationForVinSelected($isExtendedVerificationForVinSelected)
            ->setManualClaims($manualClaims)
            ->setManualPolicies($manualPolicies)
            ->setStatus($status)
            ->setVerificationDate($verificationDate)
            ->setVerificationYears($verificationYears)
            ->setVerifiedPartners($verifiedPartners);
    }
    /**
     * Get IsAgreementForBonusMalusVerification value
     * @return bool|null
     */
    public function getIsAgreementForBonusMalusVerification()
    {
        return $this->IsAgreementForBonusMalusVerification;
    }
    /**
     * Set IsAgreementForBonusMalusVerification value
     * @param bool $isAgreementForBonusMalusVerification
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VerificationData
     */
    public function setIsAgreementForBonusMalusVerification($isAgreementForBonusMalusVerification = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAgreementForBonusMalusVerification) && !is_bool($isAgreementForBonusMalusVerification)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAgreementForBonusMalusVerification)), __LINE__);
        }
        $this->IsAgreementForBonusMalusVerification = $isAgreementForBonusMalusVerification;
        return $this;
    }
    /**
     * Get IsExtendedVerification value
     * @return bool|null
     */
    public function getIsExtendedVerification()
    {
        return $this->IsExtendedVerification;
    }
    /**
     * Set IsExtendedVerification value
     * @param bool $isExtendedVerification
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VerificationData
     */
    public function setIsExtendedVerification($isExtendedVerification = null)
    {
        // validation for constraint: boolean
        if (!is_null($isExtendedVerification) && !is_bool($isExtendedVerification)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isExtendedVerification)), __LINE__);
        }
        $this->IsExtendedVerification = $isExtendedVerification;
        return $this;
    }
    /**
     * Get IsExtendedVerificationForRegistrationNumberSelected value
     * @return bool|null
     */
    public function getIsExtendedVerificationForRegistrationNumberSelected()
    {
        return $this->IsExtendedVerificationForRegistrationNumberSelected;
    }
    /**
     * Set IsExtendedVerificationForRegistrationNumberSelected value
     * @param bool $isExtendedVerificationForRegistrationNumberSelected
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VerificationData
     */
    public function setIsExtendedVerificationForRegistrationNumberSelected($isExtendedVerificationForRegistrationNumberSelected = null)
    {
        // validation for constraint: boolean
        if (!is_null($isExtendedVerificationForRegistrationNumberSelected) && !is_bool($isExtendedVerificationForRegistrationNumberSelected)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isExtendedVerificationForRegistrationNumberSelected)), __LINE__);
        }
        $this->IsExtendedVerificationForRegistrationNumberSelected = $isExtendedVerificationForRegistrationNumberSelected;
        return $this;
    }
    /**
     * Get IsExtendedVerificationForVinSelected value
     * @return bool|null
     */
    public function getIsExtendedVerificationForVinSelected()
    {
        return $this->IsExtendedVerificationForVinSelected;
    }
    /**
     * Set IsExtendedVerificationForVinSelected value
     * @param bool $isExtendedVerificationForVinSelected
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VerificationData
     */
    public function setIsExtendedVerificationForVinSelected($isExtendedVerificationForVinSelected = null)
    {
        // validation for constraint: boolean
        if (!is_null($isExtendedVerificationForVinSelected) && !is_bool($isExtendedVerificationForVinSelected)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isExtendedVerificationForVinSelected)), __LINE__);
        }
        $this->IsExtendedVerificationForVinSelected = $isExtendedVerificationForVinSelected;
        return $this;
    }
    /**
     * Get ManualClaims value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimInfo|null
     */
    public function getManualClaims()
    {
        return isset($this->ManualClaims) ? $this->ManualClaims : null;
    }
    /**
     * Set ManualClaims value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimInfo $manualClaims
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VerificationData
     */
    public function setManualClaims(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimInfo $manualClaims = null)
    {
        if (is_null($manualClaims) || (is_array($manualClaims) && empty($manualClaims))) {
            unset($this->ManualClaims);
        } else {
            $this->ManualClaims = $manualClaims;
        }
        return $this;
    }
    /**
     * Get ManualPolicies value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPolicyInfo|null
     */
    public function getManualPolicies()
    {
        return isset($this->ManualPolicies) ? $this->ManualPolicies : null;
    }
    /**
     * Set ManualPolicies value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPolicyInfo $manualPolicies
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VerificationData
     */
    public function setManualPolicies(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPolicyInfo $manualPolicies = null)
    {
        if (is_null($manualPolicies) || (is_array($manualPolicies) && empty($manualPolicies))) {
            unset($this->ManualPolicies);
        } else {
            $this->ManualPolicies = $manualPolicies;
        }
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VerificationStatus::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VerificationStatus::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VerificationData
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\VerificationStatus::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\VerificationStatus::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get VerificationDate value
     * @return string|null
     */
    public function getVerificationDate()
    {
        return $this->VerificationDate;
    }
    /**
     * Set VerificationDate value
     * @param string $verificationDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VerificationData
     */
    public function setVerificationDate($verificationDate = null)
    {
        // validation for constraint: string
        if (!is_null($verificationDate) && !is_string($verificationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($verificationDate)), __LINE__);
        }
        $this->VerificationDate = $verificationDate;
        return $this;
    }
    /**
     * Get VerificationYears value
     * @return int|null
     */
    public function getVerificationYears()
    {
        return $this->VerificationYears;
    }
    /**
     * Set VerificationYears value
     * @param int $verificationYears
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VerificationData
     */
    public function setVerificationYears($verificationYears = null)
    {
        // validation for constraint: int
        if (!is_null($verificationYears) && !is_numeric($verificationYears)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($verificationYears)), __LINE__);
        }
        $this->VerificationYears = $verificationYears;
        return $this;
    }
    /**
     * Get VerifiedPartners value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVerificationPartner|null
     */
    public function getVerifiedPartners()
    {
        return isset($this->VerifiedPartners) ? $this->VerifiedPartners : null;
    }
    /**
     * Set VerifiedPartners value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVerificationPartner $verifiedPartners
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VerificationData
     */
    public function setVerifiedPartners(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVerificationPartner $verifiedPartners = null)
    {
        if (is_null($verifiedPartners) || (is_array($verifiedPartners) && empty($verifiedPartners))) {
            unset($this->VerifiedPartners);
        } else {
            $this->VerifiedPartners = $verifiedPartners;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VerificationData
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
