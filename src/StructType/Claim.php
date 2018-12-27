<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Claim StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Claim
 * @subpackage Structs
 */
class Claim extends AbstractStructBase
{
    /**
     * The AccidentClaimsCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $AccidentClaimsCount;
    /**
     * The ClaimId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ClaimId;
    /**
     * The EventDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $EventDate;
    /**
     * The EventId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $EventId;
    /**
     * The FullRegression
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $FullRegression;
    /**
     * The IsBLS
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsBLS;
    /**
     * The IsLuggage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsLuggage;
    /**
     * The IsMiniAC
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsMiniAC;
    /**
     * The IsOUZ
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsOUZ;
    /**
     * The IsPane
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsPane;
    /**
     * The MtplClaimType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $MtplClaimType;
    /**
     * The NumberOfPayment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfPayment;
    /**
     * The PartnerRoleOnClaim
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PartnerRoleOnClaim;
    /**
     * The PayoutBalance
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $PayoutBalance;
    /**
     * The RefusalsCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $RefusalsCount;
    /**
     * The RegressPayingBalance
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $RegressPayingBalance;
    /**
     * The ReserveBalance
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $ReserveBalance;
    /**
     * The Risk
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Risk;
    /**
     * The Scope
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Scope;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $Value;
    /**
     * The VerificationType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $VerificationType;
    /**
     * The AccidentId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AccidentId;
    /**
     * The AccidentPlace
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Address
     */
    public $AccidentPlace;
    /**
     * The Benefits
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBenefit
     */
    public $Benefits;
    /**
     * The ClaimDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ClaimDate;
    /**
     * The ClaimReason
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ClaimReasonType
     */
    public $ClaimReason;
    /**
     * The ClaimStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ClaimStatusType
     */
    public $ClaimStatus;
    /**
     * The ClaimSubmitDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ClaimSubmitDate;
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Id;
    /**
     * The PerpetratorVehicle
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Vehicle
     */
    public $PerpetratorVehicle;
    /**
     * The Victim
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Partner
     */
    public $Victim;
    /**
     * Constructor method for Claim
     * @uses Claim::setAccidentClaimsCount()
     * @uses Claim::setClaimId()
     * @uses Claim::setEventDate()
     * @uses Claim::setEventId()
     * @uses Claim::setFullRegression()
     * @uses Claim::setIsBLS()
     * @uses Claim::setIsLuggage()
     * @uses Claim::setIsMiniAC()
     * @uses Claim::setIsOUZ()
     * @uses Claim::setIsPane()
     * @uses Claim::setMtplClaimType()
     * @uses Claim::setNumberOfPayment()
     * @uses Claim::setPartnerRoleOnClaim()
     * @uses Claim::setPayoutBalance()
     * @uses Claim::setRefusalsCount()
     * @uses Claim::setRegressPayingBalance()
     * @uses Claim::setReserveBalance()
     * @uses Claim::setRisk()
     * @uses Claim::setScope()
     * @uses Claim::setStatus()
     * @uses Claim::setValue()
     * @uses Claim::setVerificationType()
     * @uses Claim::setAccidentId()
     * @uses Claim::setAccidentPlace()
     * @uses Claim::setBenefits()
     * @uses Claim::setClaimDate()
     * @uses Claim::setClaimReason()
     * @uses Claim::setClaimStatus()
     * @uses Claim::setClaimSubmitDate()
     * @uses Claim::setId()
     * @uses Claim::setPerpetratorVehicle()
     * @uses Claim::setVictim()
     * @param int $accidentClaimsCount
     * @param string $claimId
     * @param string $eventDate
     * @param string $eventId
     * @param bool $fullRegression
     * @param bool $isBLS
     * @param bool $isLuggage
     * @param bool $isMiniAC
     * @param bool $isOUZ
     * @param bool $isPane
     * @param string $mtplClaimType
     * @param int $numberOfPayment
     * @param string $partnerRoleOnClaim
     * @param float $payoutBalance
     * @param int $refusalsCount
     * @param float $regressPayingBalance
     * @param float $reserveBalance
     * @param string $risk
     * @param string $scope
     * @param string $status
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $value
     * @param string $verificationType
     * @param string $accidentId
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Address $accidentPlace
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBenefit $benefits
     * @param string $claimDate
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ClaimReasonType $claimReason
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ClaimStatusType $claimStatus
     * @param string $claimSubmitDate
     * @param string $id
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Vehicle $perpetratorVehicle
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Partner $victim
     */
    public function __construct($accidentClaimsCount = null, $claimId = null, $eventDate = null, $eventId = null, $fullRegression = null, $isBLS = null, $isLuggage = null, $isMiniAC = null, $isOUZ = null, $isPane = null, $mtplClaimType = null, $numberOfPayment = null, $partnerRoleOnClaim = null, $payoutBalance = null, $refusalsCount = null, $regressPayingBalance = null, $reserveBalance = null, $risk = null, $scope = null, $status = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $value = null, $verificationType = null, $accidentId = null, \Mu4ddi3\Compensa\Webservice\StructType\Address $accidentPlace = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBenefit $benefits = null, $claimDate = null, \Mu4ddi3\Compensa\Webservice\StructType\ClaimReasonType $claimReason = null, \Mu4ddi3\Compensa\Webservice\StructType\ClaimStatusType $claimStatus = null, $claimSubmitDate = null, $id = null, \Mu4ddi3\Compensa\Webservice\StructType\Vehicle $perpetratorVehicle = null, \Mu4ddi3\Compensa\Webservice\StructType\Partner $victim = null)
    {
        $this
            ->setAccidentClaimsCount($accidentClaimsCount)
            ->setClaimId($claimId)
            ->setEventDate($eventDate)
            ->setEventId($eventId)
            ->setFullRegression($fullRegression)
            ->setIsBLS($isBLS)
            ->setIsLuggage($isLuggage)
            ->setIsMiniAC($isMiniAC)
            ->setIsOUZ($isOUZ)
            ->setIsPane($isPane)
            ->setMtplClaimType($mtplClaimType)
            ->setNumberOfPayment($numberOfPayment)
            ->setPartnerRoleOnClaim($partnerRoleOnClaim)
            ->setPayoutBalance($payoutBalance)
            ->setRefusalsCount($refusalsCount)
            ->setRegressPayingBalance($regressPayingBalance)
            ->setReserveBalance($reserveBalance)
            ->setRisk($risk)
            ->setScope($scope)
            ->setStatus($status)
            ->setValue($value)
            ->setVerificationType($verificationType)
            ->setAccidentId($accidentId)
            ->setAccidentPlace($accidentPlace)
            ->setBenefits($benefits)
            ->setClaimDate($claimDate)
            ->setClaimReason($claimReason)
            ->setClaimStatus($claimStatus)
            ->setClaimSubmitDate($claimSubmitDate)
            ->setId($id)
            ->setPerpetratorVehicle($perpetratorVehicle)
            ->setVictim($victim);
    }
    /**
     * Get AccidentClaimsCount value
     * @return int|null
     */
    public function getAccidentClaimsCount()
    {
        return $this->AccidentClaimsCount;
    }
    /**
     * Set AccidentClaimsCount value
     * @param int $accidentClaimsCount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Claim
     */
    public function setAccidentClaimsCount($accidentClaimsCount = null)
    {
        // validation for constraint: int
        if (!is_null($accidentClaimsCount) && !is_numeric($accidentClaimsCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($accidentClaimsCount)), __LINE__);
        }
        $this->AccidentClaimsCount = $accidentClaimsCount;
        return $this;
    }
    /**
     * Get ClaimId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getClaimId()
    {
        return isset($this->ClaimId) ? $this->ClaimId : null;
    }
    /**
     * Set ClaimId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $claimId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Claim
     */
    public function setClaimId($claimId = null)
    {
        // validation for constraint: string
        if (!is_null($claimId) && !is_string($claimId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($claimId)), __LINE__);
        }
        if (is_null($claimId) || (is_array($claimId) && empty($claimId))) {
            unset($this->ClaimId);
        } else {
            $this->ClaimId = $claimId;
        }
        return $this;
    }
    /**
     * Get EventDate value
     * @return string|null
     */
    public function getEventDate()
    {
        return $this->EventDate;
    }
    /**
     * Set EventDate value
     * @param string $eventDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Claim
     */
    public function setEventDate($eventDate = null)
    {
        // validation for constraint: string
        if (!is_null($eventDate) && !is_string($eventDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eventDate)), __LINE__);
        }
        $this->EventDate = $eventDate;
        return $this;
    }
    /**
     * Get EventId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEventId()
    {
        return isset($this->EventId) ? $this->EventId : null;
    }
    /**
     * Set EventId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $eventId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Claim
     */
    public function setEventId($eventId = null)
    {
        // validation for constraint: string
        if (!is_null($eventId) && !is_string($eventId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eventId)), __LINE__);
        }
        if (is_null($eventId) || (is_array($eventId) && empty($eventId))) {
            unset($this->EventId);
        } else {
            $this->EventId = $eventId;
        }
        return $this;
    }
    /**
     * Get FullRegression value
     * @return bool|null
     */
    public function getFullRegression()
    {
        return $this->FullRegression;
    }
    /**
     * Set FullRegression value
     * @param bool $fullRegression
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Claim
     */
    public function setFullRegression($fullRegression = null)
    {
        // validation for constraint: boolean
        if (!is_null($fullRegression) && !is_bool($fullRegression)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($fullRegression)), __LINE__);
        }
        $this->FullRegression = $fullRegression;
        return $this;
    }
    /**
     * Get IsBLS value
     * @return bool|null
     */
    public function getIsBLS()
    {
        return $this->IsBLS;
    }
    /**
     * Set IsBLS value
     * @param bool $isBLS
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Claim
     */
    public function setIsBLS($isBLS = null)
    {
        // validation for constraint: boolean
        if (!is_null($isBLS) && !is_bool($isBLS)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isBLS)), __LINE__);
        }
        $this->IsBLS = $isBLS;
        return $this;
    }
    /**
     * Get IsLuggage value
     * @return bool|null
     */
    public function getIsLuggage()
    {
        return $this->IsLuggage;
    }
    /**
     * Set IsLuggage value
     * @param bool $isLuggage
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Claim
     */
    public function setIsLuggage($isLuggage = null)
    {
        // validation for constraint: boolean
        if (!is_null($isLuggage) && !is_bool($isLuggage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isLuggage)), __LINE__);
        }
        $this->IsLuggage = $isLuggage;
        return $this;
    }
    /**
     * Get IsMiniAC value
     * @return bool|null
     */
    public function getIsMiniAC()
    {
        return $this->IsMiniAC;
    }
    /**
     * Set IsMiniAC value
     * @param bool $isMiniAC
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Claim
     */
    public function setIsMiniAC($isMiniAC = null)
    {
        // validation for constraint: boolean
        if (!is_null($isMiniAC) && !is_bool($isMiniAC)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isMiniAC)), __LINE__);
        }
        $this->IsMiniAC = $isMiniAC;
        return $this;
    }
    /**
     * Get IsOUZ value
     * @return bool|null
     */
    public function getIsOUZ()
    {
        return $this->IsOUZ;
    }
    /**
     * Set IsOUZ value
     * @param bool $isOUZ
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Claim
     */
    public function setIsOUZ($isOUZ = null)
    {
        // validation for constraint: boolean
        if (!is_null($isOUZ) && !is_bool($isOUZ)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isOUZ)), __LINE__);
        }
        $this->IsOUZ = $isOUZ;
        return $this;
    }
    /**
     * Get IsPane value
     * @return bool|null
     */
    public function getIsPane()
    {
        return $this->IsPane;
    }
    /**
     * Set IsPane value
     * @param bool $isPane
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Claim
     */
    public function setIsPane($isPane = null)
    {
        // validation for constraint: boolean
        if (!is_null($isPane) && !is_bool($isPane)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isPane)), __LINE__);
        }
        $this->IsPane = $isPane;
        return $this;
    }
    /**
     * Get MtplClaimType value
     * @return string|null
     */
    public function getMtplClaimType()
    {
        return $this->MtplClaimType;
    }
    /**
     * Set MtplClaimType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\MtplClaimType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\MtplClaimType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $mtplClaimType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Claim
     */
    public function setMtplClaimType($mtplClaimType = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\MtplClaimType::valueIsValid($mtplClaimType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $mtplClaimType, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\MtplClaimType::getValidValues())), __LINE__);
        }
        $this->MtplClaimType = $mtplClaimType;
        return $this;
    }
    /**
     * Get NumberOfPayment value
     * @return int|null
     */
    public function getNumberOfPayment()
    {
        return $this->NumberOfPayment;
    }
    /**
     * Set NumberOfPayment value
     * @param int $numberOfPayment
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Claim
     */
    public function setNumberOfPayment($numberOfPayment = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfPayment) && !is_numeric($numberOfPayment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfPayment)), __LINE__);
        }
        $this->NumberOfPayment = $numberOfPayment;
        return $this;
    }
    /**
     * Get PartnerRoleOnClaim value
     * @return string|null
     */
    public function getPartnerRoleOnClaim()
    {
        return $this->PartnerRoleOnClaim;
    }
    /**
     * Set PartnerRoleOnClaim value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PartnerRoleOnClaim::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PartnerRoleOnClaim::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $partnerRoleOnClaim
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Claim
     */
    public function setPartnerRoleOnClaim($partnerRoleOnClaim = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\PartnerRoleOnClaim::valueIsValid($partnerRoleOnClaim)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $partnerRoleOnClaim, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\PartnerRoleOnClaim::getValidValues())), __LINE__);
        }
        $this->PartnerRoleOnClaim = $partnerRoleOnClaim;
        return $this;
    }
    /**
     * Get PayoutBalance value
     * @return float|null
     */
    public function getPayoutBalance()
    {
        return $this->PayoutBalance;
    }
    /**
     * Set PayoutBalance value
     * @param float $payoutBalance
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Claim
     */
    public function setPayoutBalance($payoutBalance = null)
    {
        $this->PayoutBalance = $payoutBalance;
        return $this;
    }
    /**
     * Get RefusalsCount value
     * @return int|null
     */
    public function getRefusalsCount()
    {
        return $this->RefusalsCount;
    }
    /**
     * Set RefusalsCount value
     * @param int $refusalsCount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Claim
     */
    public function setRefusalsCount($refusalsCount = null)
    {
        // validation for constraint: int
        if (!is_null($refusalsCount) && !is_numeric($refusalsCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($refusalsCount)), __LINE__);
        }
        $this->RefusalsCount = $refusalsCount;
        return $this;
    }
    /**
     * Get RegressPayingBalance value
     * @return float|null
     */
    public function getRegressPayingBalance()
    {
        return $this->RegressPayingBalance;
    }
    /**
     * Set RegressPayingBalance value
     * @param float $regressPayingBalance
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Claim
     */
    public function setRegressPayingBalance($regressPayingBalance = null)
    {
        $this->RegressPayingBalance = $regressPayingBalance;
        return $this;
    }
    /**
     * Get ReserveBalance value
     * @return float|null
     */
    public function getReserveBalance()
    {
        return $this->ReserveBalance;
    }
    /**
     * Set ReserveBalance value
     * @param float $reserveBalance
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Claim
     */
    public function setReserveBalance($reserveBalance = null)
    {
        $this->ReserveBalance = $reserveBalance;
        return $this;
    }
    /**
     * Get Risk value
     * @return string|null
     */
    public function getRisk()
    {
        return $this->Risk;
    }
    /**
     * Set Risk value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\RiskType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\RiskType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $risk
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Claim
     */
    public function setRisk($risk = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\RiskType::valueIsValid($risk)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $risk, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\RiskType::getValidValues())), __LINE__);
        }
        $this->Risk = $risk;
        return $this;
    }
    /**
     * Get Scope value
     * @return string|null
     */
    public function getScope()
    {
        return $this->Scope;
    }
    /**
     * Set Scope value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\ClaimScope::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\ClaimScope::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $scope
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Claim
     */
    public function setScope($scope = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\ClaimScope::valueIsValid($scope)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $scope, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\ClaimScope::getValidValues())), __LINE__);
        }
        $this->Scope = $scope;
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
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\ClaimStatus::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\ClaimStatus::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Claim
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\ClaimStatus::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\ClaimStatus::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get Value value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getValue()
    {
        return isset($this->Value) ? $this->Value : null;
    }
    /**
     * Set Value value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $value
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Claim
     */
    public function setValue(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $value = null)
    {
        if (is_null($value) || (is_array($value) && empty($value))) {
            unset($this->Value);
        } else {
            $this->Value = $value;
        }
        return $this;
    }
    /**
     * Get VerificationType value
     * @return string|null
     */
    public function getVerificationType()
    {
        return $this->VerificationType;
    }
    /**
     * Set VerificationType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VerificationType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VerificationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $verificationType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Claim
     */
    public function setVerificationType($verificationType = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\VerificationType::valueIsValid($verificationType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $verificationType, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\VerificationType::getValidValues())), __LINE__);
        }
        $this->VerificationType = $verificationType;
        return $this;
    }
    /**
     * Get AccidentId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAccidentId()
    {
        return isset($this->AccidentId) ? $this->AccidentId : null;
    }
    /**
     * Set AccidentId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $accidentId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Claim
     */
    public function setAccidentId($accidentId = null)
    {
        // validation for constraint: string
        if (!is_null($accidentId) && !is_string($accidentId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accidentId)), __LINE__);
        }
        if (is_null($accidentId) || (is_array($accidentId) && empty($accidentId))) {
            unset($this->AccidentId);
        } else {
            $this->AccidentId = $accidentId;
        }
        return $this;
    }
    /**
     * Get AccidentPlace value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Address|null
     */
    public function getAccidentPlace()
    {
        return isset($this->AccidentPlace) ? $this->AccidentPlace : null;
    }
    /**
     * Set AccidentPlace value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Address $accidentPlace
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Claim
     */
    public function setAccidentPlace(\Mu4ddi3\Compensa\Webservice\StructType\Address $accidentPlace = null)
    {
        if (is_null($accidentPlace) || (is_array($accidentPlace) && empty($accidentPlace))) {
            unset($this->AccidentPlace);
        } else {
            $this->AccidentPlace = $accidentPlace;
        }
        return $this;
    }
    /**
     * Get Benefits value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBenefit|null
     */
    public function getBenefits()
    {
        return isset($this->Benefits) ? $this->Benefits : null;
    }
    /**
     * Set Benefits value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBenefit $benefits
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Claim
     */
    public function setBenefits(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBenefit $benefits = null)
    {
        if (is_null($benefits) || (is_array($benefits) && empty($benefits))) {
            unset($this->Benefits);
        } else {
            $this->Benefits = $benefits;
        }
        return $this;
    }
    /**
     * Get ClaimDate value
     * @return string|null
     */
    public function getClaimDate()
    {
        return $this->ClaimDate;
    }
    /**
     * Set ClaimDate value
     * @param string $claimDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Claim
     */
    public function setClaimDate($claimDate = null)
    {
        // validation for constraint: string
        if (!is_null($claimDate) && !is_string($claimDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($claimDate)), __LINE__);
        }
        $this->ClaimDate = $claimDate;
        return $this;
    }
    /**
     * Get ClaimReason value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimReasonType|null
     */
    public function getClaimReason()
    {
        return isset($this->ClaimReason) ? $this->ClaimReason : null;
    }
    /**
     * Set ClaimReason value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ClaimReasonType $claimReason
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Claim
     */
    public function setClaimReason(\Mu4ddi3\Compensa\Webservice\StructType\ClaimReasonType $claimReason = null)
    {
        if (is_null($claimReason) || (is_array($claimReason) && empty($claimReason))) {
            unset($this->ClaimReason);
        } else {
            $this->ClaimReason = $claimReason;
        }
        return $this;
    }
    /**
     * Get ClaimStatus value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimStatusType|null
     */
    public function getClaimStatus()
    {
        return isset($this->ClaimStatus) ? $this->ClaimStatus : null;
    }
    /**
     * Set ClaimStatus value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ClaimStatusType $claimStatus
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Claim
     */
    public function setClaimStatus(\Mu4ddi3\Compensa\Webservice\StructType\ClaimStatusType $claimStatus = null)
    {
        if (is_null($claimStatus) || (is_array($claimStatus) && empty($claimStatus))) {
            unset($this->ClaimStatus);
        } else {
            $this->ClaimStatus = $claimStatus;
        }
        return $this;
    }
    /**
     * Get ClaimSubmitDate value
     * @return string|null
     */
    public function getClaimSubmitDate()
    {
        return $this->ClaimSubmitDate;
    }
    /**
     * Set ClaimSubmitDate value
     * @param string $claimSubmitDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Claim
     */
    public function setClaimSubmitDate($claimSubmitDate = null)
    {
        // validation for constraint: string
        if (!is_null($claimSubmitDate) && !is_string($claimSubmitDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($claimSubmitDate)), __LINE__);
        }
        $this->ClaimSubmitDate = $claimSubmitDate;
        return $this;
    }
    /**
     * Get Id value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getId()
    {
        return isset($this->Id) ? $this->Id : null;
    }
    /**
     * Set Id value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $id
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Claim
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        if (is_null($id) || (is_array($id) && empty($id))) {
            unset($this->Id);
        } else {
            $this->Id = $id;
        }
        return $this;
    }
    /**
     * Get PerpetratorVehicle value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Vehicle|null
     */
    public function getPerpetratorVehicle()
    {
        return isset($this->PerpetratorVehicle) ? $this->PerpetratorVehicle : null;
    }
    /**
     * Set PerpetratorVehicle value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Vehicle $perpetratorVehicle
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Claim
     */
    public function setPerpetratorVehicle(\Mu4ddi3\Compensa\Webservice\StructType\Vehicle $perpetratorVehicle = null)
    {
        if (is_null($perpetratorVehicle) || (is_array($perpetratorVehicle) && empty($perpetratorVehicle))) {
            unset($this->PerpetratorVehicle);
        } else {
            $this->PerpetratorVehicle = $perpetratorVehicle;
        }
        return $this;
    }
    /**
     * Get Victim value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Partner|null
     */
    public function getVictim()
    {
        return isset($this->Victim) ? $this->Victim : null;
    }
    /**
     * Set Victim value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Partner $victim
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Claim
     */
    public function setVictim(\Mu4ddi3\Compensa\Webservice\StructType\Partner $victim = null)
    {
        if (is_null($victim) || (is_array($victim) && empty($victim))) {
            unset($this->Victim);
        } else {
            $this->Victim = $victim;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Claim
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
