<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BonusMalus StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BonusMalus
 * @subpackage Structs
 */
class BonusMalus extends AbstractStructBase
{
    /**
     * The AcSelectedVerificationType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AcSelectedVerificationType;
    /**
     * The AvailableVerificationType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AvailableVerificationType;
    /**
     * The CorrectionReasonAc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CorrectionReasonAc;
    /**
     * The CorrectionReasonOc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CorrectionReasonOc;
    /**
     * The DiscountSourceAcCorrection
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DiscountSourceAcCorrection;
    /**
     * The DiscountSourceAcOriginal
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DiscountSourceAcOriginal;
    /**
     * The DiscountSourceOcCorrection
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DiscountSourceOcCorrection;
    /**
     * The DiscountSourceOcOriginal
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DiscountSourceOcOriginal;
    /**
     * The IsAgreementForBonusMalusVerification
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAgreementForBonusMalusVerification;
    /**
     * The IsCorrectionAc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsCorrectionAc;
    /**
     * The IsCorrectionOc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsCorrectionOc;
    /**
     * The IsDiscountForDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsDiscountForDiscount;
    /**
     * The OcSelectedVerificationType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OcSelectedVerificationType;
    /**
     * The PartnerVerificationType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PartnerVerificationType;
    /**
     * The Partners
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVerificationPartner
     */
    public $Partners;
    /**
     * The PolicySummaryAcCorrection
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PolicySummary
     */
    public $PolicySummaryAcCorrection;
    /**
     * The PolicySummaryOcCorrection
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PolicySummary
     */
    public $PolicySummaryOcCorrection;
    /**
     * The PreviousAcFactor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $PreviousAcFactor;
    /**
     * The PreviousOcFactor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $PreviousOcFactor;
    /**
     * The RenewalDiscountSourceAc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RenewalDiscountSourceAc;
    /**
     * The RenewalDiscountSourceOc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RenewalDiscountSourceOc;
    /**
     * The RenewalPolicySummaryAc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PolicySummary
     */
    public $RenewalPolicySummaryAc;
    /**
     * The RenewalPolicySummaryOc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PolicySummary
     */
    public $RenewalPolicySummaryOc;
    /**
     * The SelectedVerificationKind
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SelectedVerificationKind;
    /**
     * The SelectedVerificationType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SelectedVerificationType;
    /**
     * The VerificationStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $VerificationStatus;
    /**
     * The VerificationVehicleRegistrationNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $VerificationVehicleRegistrationNumber;
    /**
     * The VerificationVehicleVin
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $VerificationVehicleVin;
    /**
     * The VerificationYears
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $VerificationYears;
    /**
     * Constructor method for BonusMalus
     * @uses BonusMalus::setAcSelectedVerificationType()
     * @uses BonusMalus::setAvailableVerificationType()
     * @uses BonusMalus::setCorrectionReasonAc()
     * @uses BonusMalus::setCorrectionReasonOc()
     * @uses BonusMalus::setDiscountSourceAcCorrection()
     * @uses BonusMalus::setDiscountSourceAcOriginal()
     * @uses BonusMalus::setDiscountSourceOcCorrection()
     * @uses BonusMalus::setDiscountSourceOcOriginal()
     * @uses BonusMalus::setIsAgreementForBonusMalusVerification()
     * @uses BonusMalus::setIsCorrectionAc()
     * @uses BonusMalus::setIsCorrectionOc()
     * @uses BonusMalus::setIsDiscountForDiscount()
     * @uses BonusMalus::setOcSelectedVerificationType()
     * @uses BonusMalus::setPartnerVerificationType()
     * @uses BonusMalus::setPartners()
     * @uses BonusMalus::setPolicySummaryAcCorrection()
     * @uses BonusMalus::setPolicySummaryOcCorrection()
     * @uses BonusMalus::setPreviousAcFactor()
     * @uses BonusMalus::setPreviousOcFactor()
     * @uses BonusMalus::setRenewalDiscountSourceAc()
     * @uses BonusMalus::setRenewalDiscountSourceOc()
     * @uses BonusMalus::setRenewalPolicySummaryAc()
     * @uses BonusMalus::setRenewalPolicySummaryOc()
     * @uses BonusMalus::setSelectedVerificationKind()
     * @uses BonusMalus::setSelectedVerificationType()
     * @uses BonusMalus::setVerificationStatus()
     * @uses BonusMalus::setVerificationVehicleRegistrationNumber()
     * @uses BonusMalus::setVerificationVehicleVin()
     * @uses BonusMalus::setVerificationYears()
     * @param string $acSelectedVerificationType
     * @param string $availableVerificationType
     * @param string $correctionReasonAc
     * @param string $correctionReasonOc
     * @param string $discountSourceAcCorrection
     * @param string $discountSourceAcOriginal
     * @param string $discountSourceOcCorrection
     * @param string $discountSourceOcOriginal
     * @param bool $isAgreementForBonusMalusVerification
     * @param bool $isCorrectionAc
     * @param bool $isCorrectionOc
     * @param bool $isDiscountForDiscount
     * @param string $ocSelectedVerificationType
     * @param string $partnerVerificationType
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVerificationPartner $partners
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PolicySummary $policySummaryAcCorrection
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PolicySummary $policySummaryOcCorrection
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $previousAcFactor
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $previousOcFactor
     * @param string $renewalDiscountSourceAc
     * @param string $renewalDiscountSourceOc
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PolicySummary $renewalPolicySummaryAc
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PolicySummary $renewalPolicySummaryOc
     * @param string $selectedVerificationKind
     * @param string $selectedVerificationType
     * @param string $verificationStatus
     * @param string $verificationVehicleRegistrationNumber
     * @param string $verificationVehicleVin
     * @param int $verificationYears
     */
    public function __construct($acSelectedVerificationType = null, $availableVerificationType = null, $correctionReasonAc = null, $correctionReasonOc = null, $discountSourceAcCorrection = null, $discountSourceAcOriginal = null, $discountSourceOcCorrection = null, $discountSourceOcOriginal = null, $isAgreementForBonusMalusVerification = null, $isCorrectionAc = null, $isCorrectionOc = null, $isDiscountForDiscount = null, $ocSelectedVerificationType = null, $partnerVerificationType = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVerificationPartner $partners = null, \Mu4ddi3\Compensa\Webservice\StructType\PolicySummary $policySummaryAcCorrection = null, \Mu4ddi3\Compensa\Webservice\StructType\PolicySummary $policySummaryOcCorrection = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $previousAcFactor = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $previousOcFactor = null, $renewalDiscountSourceAc = null, $renewalDiscountSourceOc = null, \Mu4ddi3\Compensa\Webservice\StructType\PolicySummary $renewalPolicySummaryAc = null, \Mu4ddi3\Compensa\Webservice\StructType\PolicySummary $renewalPolicySummaryOc = null, $selectedVerificationKind = null, $selectedVerificationType = null, $verificationStatus = null, $verificationVehicleRegistrationNumber = null, $verificationVehicleVin = null, $verificationYears = null)
    {
        $this
            ->setAcSelectedVerificationType($acSelectedVerificationType)
            ->setAvailableVerificationType($availableVerificationType)
            ->setCorrectionReasonAc($correctionReasonAc)
            ->setCorrectionReasonOc($correctionReasonOc)
            ->setDiscountSourceAcCorrection($discountSourceAcCorrection)
            ->setDiscountSourceAcOriginal($discountSourceAcOriginal)
            ->setDiscountSourceOcCorrection($discountSourceOcCorrection)
            ->setDiscountSourceOcOriginal($discountSourceOcOriginal)
            ->setIsAgreementForBonusMalusVerification($isAgreementForBonusMalusVerification)
            ->setIsCorrectionAc($isCorrectionAc)
            ->setIsCorrectionOc($isCorrectionOc)
            ->setIsDiscountForDiscount($isDiscountForDiscount)
            ->setOcSelectedVerificationType($ocSelectedVerificationType)
            ->setPartnerVerificationType($partnerVerificationType)
            ->setPartners($partners)
            ->setPolicySummaryAcCorrection($policySummaryAcCorrection)
            ->setPolicySummaryOcCorrection($policySummaryOcCorrection)
            ->setPreviousAcFactor($previousAcFactor)
            ->setPreviousOcFactor($previousOcFactor)
            ->setRenewalDiscountSourceAc($renewalDiscountSourceAc)
            ->setRenewalDiscountSourceOc($renewalDiscountSourceOc)
            ->setRenewalPolicySummaryAc($renewalPolicySummaryAc)
            ->setRenewalPolicySummaryOc($renewalPolicySummaryOc)
            ->setSelectedVerificationKind($selectedVerificationKind)
            ->setSelectedVerificationType($selectedVerificationType)
            ->setVerificationStatus($verificationStatus)
            ->setVerificationVehicleRegistrationNumber($verificationVehicleRegistrationNumber)
            ->setVerificationVehicleVin($verificationVehicleVin)
            ->setVerificationYears($verificationYears);
    }
    /**
     * Get AcSelectedVerificationType value
     * @return string|null
     */
    public function getAcSelectedVerificationType()
    {
        return $this->AcSelectedVerificationType;
    }
    /**
     * Set AcSelectedVerificationType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VerificationType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VerificationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $acSelectedVerificationType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalus
     */
    public function setAcSelectedVerificationType($acSelectedVerificationType = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\VerificationType::valueIsValid($acSelectedVerificationType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $acSelectedVerificationType, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\VerificationType::getValidValues())), __LINE__);
        }
        $this->AcSelectedVerificationType = $acSelectedVerificationType;
        return $this;
    }
    /**
     * Get AvailableVerificationType value
     * @return string|null
     */
    public function getAvailableVerificationType()
    {
        return $this->AvailableVerificationType;
    }
    /**
     * Set AvailableVerificationType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\AvailableVerificationType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\AvailableVerificationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $availableVerificationType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalus
     */
    public function setAvailableVerificationType($availableVerificationType = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\AvailableVerificationType::valueIsValid($availableVerificationType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $availableVerificationType, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\AvailableVerificationType::getValidValues())), __LINE__);
        }
        $this->AvailableVerificationType = $availableVerificationType;
        return $this;
    }
    /**
     * Get CorrectionReasonAc value
     * @return string|null
     */
    public function getCorrectionReasonAc()
    {
        return $this->CorrectionReasonAc;
    }
    /**
     * Set CorrectionReasonAc value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\CorrectionReason::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\CorrectionReason::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $correctionReasonAc
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalus
     */
    public function setCorrectionReasonAc($correctionReasonAc = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\CorrectionReason::valueIsValid($correctionReasonAc)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $correctionReasonAc, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\CorrectionReason::getValidValues())), __LINE__);
        }
        $this->CorrectionReasonAc = $correctionReasonAc;
        return $this;
    }
    /**
     * Get CorrectionReasonOc value
     * @return string|null
     */
    public function getCorrectionReasonOc()
    {
        return $this->CorrectionReasonOc;
    }
    /**
     * Set CorrectionReasonOc value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\CorrectionReason::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\CorrectionReason::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $correctionReasonOc
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalus
     */
    public function setCorrectionReasonOc($correctionReasonOc = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\CorrectionReason::valueIsValid($correctionReasonOc)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $correctionReasonOc, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\CorrectionReason::getValidValues())), __LINE__);
        }
        $this->CorrectionReasonOc = $correctionReasonOc;
        return $this;
    }
    /**
     * Get DiscountSourceAcCorrection value
     * @return string|null
     */
    public function getDiscountSourceAcCorrection()
    {
        return $this->DiscountSourceAcCorrection;
    }
    /**
     * Set DiscountSourceAcCorrection value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\DiscountSource::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\DiscountSource::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $discountSourceAcCorrection
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalus
     */
    public function setDiscountSourceAcCorrection($discountSourceAcCorrection = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\DiscountSource::valueIsValid($discountSourceAcCorrection)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $discountSourceAcCorrection, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\DiscountSource::getValidValues())), __LINE__);
        }
        $this->DiscountSourceAcCorrection = $discountSourceAcCorrection;
        return $this;
    }
    /**
     * Get DiscountSourceAcOriginal value
     * @return string|null
     */
    public function getDiscountSourceAcOriginal()
    {
        return $this->DiscountSourceAcOriginal;
    }
    /**
     * Set DiscountSourceAcOriginal value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\DiscountSource::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\DiscountSource::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $discountSourceAcOriginal
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalus
     */
    public function setDiscountSourceAcOriginal($discountSourceAcOriginal = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\DiscountSource::valueIsValid($discountSourceAcOriginal)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $discountSourceAcOriginal, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\DiscountSource::getValidValues())), __LINE__);
        }
        $this->DiscountSourceAcOriginal = $discountSourceAcOriginal;
        return $this;
    }
    /**
     * Get DiscountSourceOcCorrection value
     * @return string|null
     */
    public function getDiscountSourceOcCorrection()
    {
        return $this->DiscountSourceOcCorrection;
    }
    /**
     * Set DiscountSourceOcCorrection value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\DiscountSource::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\DiscountSource::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $discountSourceOcCorrection
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalus
     */
    public function setDiscountSourceOcCorrection($discountSourceOcCorrection = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\DiscountSource::valueIsValid($discountSourceOcCorrection)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $discountSourceOcCorrection, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\DiscountSource::getValidValues())), __LINE__);
        }
        $this->DiscountSourceOcCorrection = $discountSourceOcCorrection;
        return $this;
    }
    /**
     * Get DiscountSourceOcOriginal value
     * @return string|null
     */
    public function getDiscountSourceOcOriginal()
    {
        return $this->DiscountSourceOcOriginal;
    }
    /**
     * Set DiscountSourceOcOriginal value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\DiscountSource::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\DiscountSource::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $discountSourceOcOriginal
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalus
     */
    public function setDiscountSourceOcOriginal($discountSourceOcOriginal = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\DiscountSource::valueIsValid($discountSourceOcOriginal)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $discountSourceOcOriginal, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\DiscountSource::getValidValues())), __LINE__);
        }
        $this->DiscountSourceOcOriginal = $discountSourceOcOriginal;
        return $this;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalus
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
     * Get IsCorrectionAc value
     * @return bool|null
     */
    public function getIsCorrectionAc()
    {
        return $this->IsCorrectionAc;
    }
    /**
     * Set IsCorrectionAc value
     * @param bool $isCorrectionAc
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalus
     */
    public function setIsCorrectionAc($isCorrectionAc = null)
    {
        // validation for constraint: boolean
        if (!is_null($isCorrectionAc) && !is_bool($isCorrectionAc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isCorrectionAc)), __LINE__);
        }
        $this->IsCorrectionAc = $isCorrectionAc;
        return $this;
    }
    /**
     * Get IsCorrectionOc value
     * @return bool|null
     */
    public function getIsCorrectionOc()
    {
        return $this->IsCorrectionOc;
    }
    /**
     * Set IsCorrectionOc value
     * @param bool $isCorrectionOc
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalus
     */
    public function setIsCorrectionOc($isCorrectionOc = null)
    {
        // validation for constraint: boolean
        if (!is_null($isCorrectionOc) && !is_bool($isCorrectionOc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isCorrectionOc)), __LINE__);
        }
        $this->IsCorrectionOc = $isCorrectionOc;
        return $this;
    }
    /**
     * Get IsDiscountForDiscount value
     * @return bool|null
     */
    public function getIsDiscountForDiscount()
    {
        return $this->IsDiscountForDiscount;
    }
    /**
     * Set IsDiscountForDiscount value
     * @param bool $isDiscountForDiscount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalus
     */
    public function setIsDiscountForDiscount($isDiscountForDiscount = null)
    {
        // validation for constraint: boolean
        if (!is_null($isDiscountForDiscount) && !is_bool($isDiscountForDiscount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isDiscountForDiscount)), __LINE__);
        }
        $this->IsDiscountForDiscount = $isDiscountForDiscount;
        return $this;
    }
    /**
     * Get OcSelectedVerificationType value
     * @return string|null
     */
    public function getOcSelectedVerificationType()
    {
        return $this->OcSelectedVerificationType;
    }
    /**
     * Set OcSelectedVerificationType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VerificationType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VerificationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $ocSelectedVerificationType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalus
     */
    public function setOcSelectedVerificationType($ocSelectedVerificationType = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\VerificationType::valueIsValid($ocSelectedVerificationType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $ocSelectedVerificationType, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\VerificationType::getValidValues())), __LINE__);
        }
        $this->OcSelectedVerificationType = $ocSelectedVerificationType;
        return $this;
    }
    /**
     * Get PartnerVerificationType value
     * @return string|null
     */
    public function getPartnerVerificationType()
    {
        return $this->PartnerVerificationType;
    }
    /**
     * Set PartnerVerificationType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PartnerVerificationType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PartnerVerificationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $partnerVerificationType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalus
     */
    public function setPartnerVerificationType($partnerVerificationType = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\PartnerVerificationType::valueIsValid($partnerVerificationType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $partnerVerificationType, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\PartnerVerificationType::getValidValues())), __LINE__);
        }
        $this->PartnerVerificationType = $partnerVerificationType;
        return $this;
    }
    /**
     * Get Partners value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVerificationPartner|null
     */
    public function getPartners()
    {
        return isset($this->Partners) ? $this->Partners : null;
    }
    /**
     * Set Partners value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVerificationPartner $partners
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalus
     */
    public function setPartners(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVerificationPartner $partners = null)
    {
        if (is_null($partners) || (is_array($partners) && empty($partners))) {
            unset($this->Partners);
        } else {
            $this->Partners = $partners;
        }
        return $this;
    }
    /**
     * Get PolicySummaryAcCorrection value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicySummary|null
     */
    public function getPolicySummaryAcCorrection()
    {
        return isset($this->PolicySummaryAcCorrection) ? $this->PolicySummaryAcCorrection : null;
    }
    /**
     * Set PolicySummaryAcCorrection value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PolicySummary $policySummaryAcCorrection
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalus
     */
    public function setPolicySummaryAcCorrection(\Mu4ddi3\Compensa\Webservice\StructType\PolicySummary $policySummaryAcCorrection = null)
    {
        if (is_null($policySummaryAcCorrection) || (is_array($policySummaryAcCorrection) && empty($policySummaryAcCorrection))) {
            unset($this->PolicySummaryAcCorrection);
        } else {
            $this->PolicySummaryAcCorrection = $policySummaryAcCorrection;
        }
        return $this;
    }
    /**
     * Get PolicySummaryOcCorrection value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicySummary|null
     */
    public function getPolicySummaryOcCorrection()
    {
        return isset($this->PolicySummaryOcCorrection) ? $this->PolicySummaryOcCorrection : null;
    }
    /**
     * Set PolicySummaryOcCorrection value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PolicySummary $policySummaryOcCorrection
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalus
     */
    public function setPolicySummaryOcCorrection(\Mu4ddi3\Compensa\Webservice\StructType\PolicySummary $policySummaryOcCorrection = null)
    {
        if (is_null($policySummaryOcCorrection) || (is_array($policySummaryOcCorrection) && empty($policySummaryOcCorrection))) {
            unset($this->PolicySummaryOcCorrection);
        } else {
            $this->PolicySummaryOcCorrection = $policySummaryOcCorrection;
        }
        return $this;
    }
    /**
     * Get PreviousAcFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getPreviousAcFactor()
    {
        return isset($this->PreviousAcFactor) ? $this->PreviousAcFactor : null;
    }
    /**
     * Set PreviousAcFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $previousAcFactor
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalus
     */
    public function setPreviousAcFactor(\Mu4ddi3\Compensa\Webservice\StructType\Factor $previousAcFactor = null)
    {
        if (is_null($previousAcFactor) || (is_array($previousAcFactor) && empty($previousAcFactor))) {
            unset($this->PreviousAcFactor);
        } else {
            $this->PreviousAcFactor = $previousAcFactor;
        }
        return $this;
    }
    /**
     * Get PreviousOcFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getPreviousOcFactor()
    {
        return isset($this->PreviousOcFactor) ? $this->PreviousOcFactor : null;
    }
    /**
     * Set PreviousOcFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $previousOcFactor
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalus
     */
    public function setPreviousOcFactor(\Mu4ddi3\Compensa\Webservice\StructType\Factor $previousOcFactor = null)
    {
        if (is_null($previousOcFactor) || (is_array($previousOcFactor) && empty($previousOcFactor))) {
            unset($this->PreviousOcFactor);
        } else {
            $this->PreviousOcFactor = $previousOcFactor;
        }
        return $this;
    }
    /**
     * Get RenewalDiscountSourceAc value
     * @return string|null
     */
    public function getRenewalDiscountSourceAc()
    {
        return $this->RenewalDiscountSourceAc;
    }
    /**
     * Set RenewalDiscountSourceAc value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\DiscountSource::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\DiscountSource::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $renewalDiscountSourceAc
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalus
     */
    public function setRenewalDiscountSourceAc($renewalDiscountSourceAc = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\DiscountSource::valueIsValid($renewalDiscountSourceAc)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $renewalDiscountSourceAc, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\DiscountSource::getValidValues())), __LINE__);
        }
        $this->RenewalDiscountSourceAc = $renewalDiscountSourceAc;
        return $this;
    }
    /**
     * Get RenewalDiscountSourceOc value
     * @return string|null
     */
    public function getRenewalDiscountSourceOc()
    {
        return $this->RenewalDiscountSourceOc;
    }
    /**
     * Set RenewalDiscountSourceOc value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\DiscountSource::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\DiscountSource::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $renewalDiscountSourceOc
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalus
     */
    public function setRenewalDiscountSourceOc($renewalDiscountSourceOc = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\DiscountSource::valueIsValid($renewalDiscountSourceOc)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $renewalDiscountSourceOc, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\DiscountSource::getValidValues())), __LINE__);
        }
        $this->RenewalDiscountSourceOc = $renewalDiscountSourceOc;
        return $this;
    }
    /**
     * Get RenewalPolicySummaryAc value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicySummary|null
     */
    public function getRenewalPolicySummaryAc()
    {
        return isset($this->RenewalPolicySummaryAc) ? $this->RenewalPolicySummaryAc : null;
    }
    /**
     * Set RenewalPolicySummaryAc value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PolicySummary $renewalPolicySummaryAc
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalus
     */
    public function setRenewalPolicySummaryAc(\Mu4ddi3\Compensa\Webservice\StructType\PolicySummary $renewalPolicySummaryAc = null)
    {
        if (is_null($renewalPolicySummaryAc) || (is_array($renewalPolicySummaryAc) && empty($renewalPolicySummaryAc))) {
            unset($this->RenewalPolicySummaryAc);
        } else {
            $this->RenewalPolicySummaryAc = $renewalPolicySummaryAc;
        }
        return $this;
    }
    /**
     * Get RenewalPolicySummaryOc value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicySummary|null
     */
    public function getRenewalPolicySummaryOc()
    {
        return isset($this->RenewalPolicySummaryOc) ? $this->RenewalPolicySummaryOc : null;
    }
    /**
     * Set RenewalPolicySummaryOc value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PolicySummary $renewalPolicySummaryOc
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalus
     */
    public function setRenewalPolicySummaryOc(\Mu4ddi3\Compensa\Webservice\StructType\PolicySummary $renewalPolicySummaryOc = null)
    {
        if (is_null($renewalPolicySummaryOc) || (is_array($renewalPolicySummaryOc) && empty($renewalPolicySummaryOc))) {
            unset($this->RenewalPolicySummaryOc);
        } else {
            $this->RenewalPolicySummaryOc = $renewalPolicySummaryOc;
        }
        return $this;
    }
    /**
     * Get SelectedVerificationKind value
     * @return string|null
     */
    public function getSelectedVerificationKind()
    {
        return $this->SelectedVerificationKind;
    }
    /**
     * Set SelectedVerificationKind value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VerificationKind::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VerificationKind::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $selectedVerificationKind
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalus
     */
    public function setSelectedVerificationKind($selectedVerificationKind = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\VerificationKind::valueIsValid($selectedVerificationKind)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $selectedVerificationKind, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\VerificationKind::getValidValues())), __LINE__);
        }
        $this->SelectedVerificationKind = $selectedVerificationKind;
        return $this;
    }
    /**
     * Get SelectedVerificationType value
     * @return string|null
     */
    public function getSelectedVerificationType()
    {
        return $this->SelectedVerificationType;
    }
    /**
     * Set SelectedVerificationType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VerificationType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VerificationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $selectedVerificationType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalus
     */
    public function setSelectedVerificationType($selectedVerificationType = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\VerificationType::valueIsValid($selectedVerificationType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $selectedVerificationType, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\VerificationType::getValidValues())), __LINE__);
        }
        $this->SelectedVerificationType = $selectedVerificationType;
        return $this;
    }
    /**
     * Get VerificationStatus value
     * @return string|null
     */
    public function getVerificationStatus()
    {
        return $this->VerificationStatus;
    }
    /**
     * Set VerificationStatus value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VerificationStatus::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VerificationStatus::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $verificationStatus
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalus
     */
    public function setVerificationStatus($verificationStatus = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\VerificationStatus::valueIsValid($verificationStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $verificationStatus, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\VerificationStatus::getValidValues())), __LINE__);
        }
        $this->VerificationStatus = $verificationStatus;
        return $this;
    }
    /**
     * Get VerificationVehicleRegistrationNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getVerificationVehicleRegistrationNumber()
    {
        return isset($this->VerificationVehicleRegistrationNumber) ? $this->VerificationVehicleRegistrationNumber : null;
    }
    /**
     * Set VerificationVehicleRegistrationNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $verificationVehicleRegistrationNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalus
     */
    public function setVerificationVehicleRegistrationNumber($verificationVehicleRegistrationNumber = null)
    {
        // validation for constraint: string
        if (!is_null($verificationVehicleRegistrationNumber) && !is_string($verificationVehicleRegistrationNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($verificationVehicleRegistrationNumber)), __LINE__);
        }
        if (is_null($verificationVehicleRegistrationNumber) || (is_array($verificationVehicleRegistrationNumber) && empty($verificationVehicleRegistrationNumber))) {
            unset($this->VerificationVehicleRegistrationNumber);
        } else {
            $this->VerificationVehicleRegistrationNumber = $verificationVehicleRegistrationNumber;
        }
        return $this;
    }
    /**
     * Get VerificationVehicleVin value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getVerificationVehicleVin()
    {
        return isset($this->VerificationVehicleVin) ? $this->VerificationVehicleVin : null;
    }
    /**
     * Set VerificationVehicleVin value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $verificationVehicleVin
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalus
     */
    public function setVerificationVehicleVin($verificationVehicleVin = null)
    {
        // validation for constraint: string
        if (!is_null($verificationVehicleVin) && !is_string($verificationVehicleVin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($verificationVehicleVin)), __LINE__);
        }
        if (is_null($verificationVehicleVin) || (is_array($verificationVehicleVin) && empty($verificationVehicleVin))) {
            unset($this->VerificationVehicleVin);
        } else {
            $this->VerificationVehicleVin = $verificationVehicleVin;
        }
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalus
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalus
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
