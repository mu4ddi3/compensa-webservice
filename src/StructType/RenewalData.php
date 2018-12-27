<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RenewalData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RenewalData
 * @subpackage Structs
 */
class RenewalData extends AbstractStructBase
{
    /**
     * The ACClaimSettlementVariantAcDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $ACClaimSettlementVariantAcDiscount;
    /**
     * The ACPartnerAgeDiscountRatio
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $ACPartnerAgeDiscountRatio;
    /**
     * The ACPropertyInsuranceDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $ACPropertyInsuranceDiscount;
    /**
     * The AcInsuranceSumIndexation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $AcInsuranceSumIndexation;
    /**
     * The BenefiaMotorMinExpiryDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $BenefiaMotorMinExpiryDate;
    /**
     * The CompensaOcClaimsCountLastYearForOfferCalculation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $CompensaOcClaimsCountLastYearForOfferCalculation;
    /**
     * The GapInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\GapInfo
     */
    public $GapInfo;
    /**
     * The IsAcActiveOnPreviousMotorContract
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAcActiveOnPreviousMotorContract;
    /**
     * The IsCentralIssued
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsCentralIssued;
    /**
     * The IsOcActiveOnPreviousMotorContract
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsOcActiveOnPreviousMotorContract;
    /**
     * The IsPreviousMotorContractActive
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsPreviousMotorContractActive;
    /**
     * The IsPreviousMotorContractRenewed
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsPreviousMotorContractRenewed;
    /**
     * The NonCompensaOcClaimsCountLastYearForOfferCalculation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $NonCompensaOcClaimsCountLastYearForOfferCalculation;
    /**
     * The OCPartnerAgeDiscountRatio
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $OCPartnerAgeDiscountRatio;
    /**
     * The OCPropertyInsuranceDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $OCPropertyInsuranceDiscount;
    /**
     * The OcPremiumFixedValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $OcPremiumFixedValue;
    /**
     * The OcPremiumSentValueinCSOU
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $OcPremiumSentValueinCSOU;
    /**
     * The PreviousMotorContract
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public $PreviousMotorContract;
    /**
     * The WasOfferSent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $WasOfferSent;
    /**
     * The WasOfferSentInCSOU
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $WasOfferSentInCSOU;
    /**
     * Constructor method for RenewalData
     * @uses RenewalData::setACClaimSettlementVariantAcDiscount()
     * @uses RenewalData::setACPartnerAgeDiscountRatio()
     * @uses RenewalData::setACPropertyInsuranceDiscount()
     * @uses RenewalData::setAcInsuranceSumIndexation()
     * @uses RenewalData::setBenefiaMotorMinExpiryDate()
     * @uses RenewalData::setCompensaOcClaimsCountLastYearForOfferCalculation()
     * @uses RenewalData::setGapInfo()
     * @uses RenewalData::setIsAcActiveOnPreviousMotorContract()
     * @uses RenewalData::setIsCentralIssued()
     * @uses RenewalData::setIsOcActiveOnPreviousMotorContract()
     * @uses RenewalData::setIsPreviousMotorContractActive()
     * @uses RenewalData::setIsPreviousMotorContractRenewed()
     * @uses RenewalData::setNonCompensaOcClaimsCountLastYearForOfferCalculation()
     * @uses RenewalData::setOCPartnerAgeDiscountRatio()
     * @uses RenewalData::setOCPropertyInsuranceDiscount()
     * @uses RenewalData::setOcPremiumFixedValue()
     * @uses RenewalData::setOcPremiumSentValueinCSOU()
     * @uses RenewalData::setPreviousMotorContract()
     * @uses RenewalData::setWasOfferSent()
     * @uses RenewalData::setWasOfferSentInCSOU()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $aCClaimSettlementVariantAcDiscount
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $aCPartnerAgeDiscountRatio
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $aCPropertyInsuranceDiscount
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $acInsuranceSumIndexation
     * @param string $benefiaMotorMinExpiryDate
     * @param int $compensaOcClaimsCountLastYearForOfferCalculation
     * @param \Mu4ddi3\Compensa\Webservice\StructType\GapInfo $gapInfo
     * @param bool $isAcActiveOnPreviousMotorContract
     * @param bool $isCentralIssued
     * @param bool $isOcActiveOnPreviousMotorContract
     * @param bool $isPreviousMotorContractActive
     * @param bool $isPreviousMotorContractRenewed
     * @param int $nonCompensaOcClaimsCountLastYearForOfferCalculation
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $oCPartnerAgeDiscountRatio
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $oCPropertyInsuranceDiscount
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $ocPremiumFixedValue
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $ocPremiumSentValueinCSOU
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MotorContract $previousMotorContract
     * @param bool $wasOfferSent
     * @param bool $wasOfferSentInCSOU
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\Factor $aCClaimSettlementVariantAcDiscount = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $aCPartnerAgeDiscountRatio = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $aCPropertyInsuranceDiscount = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $acInsuranceSumIndexation = null, $benefiaMotorMinExpiryDate = null, $compensaOcClaimsCountLastYearForOfferCalculation = null, \Mu4ddi3\Compensa\Webservice\StructType\GapInfo $gapInfo = null, $isAcActiveOnPreviousMotorContract = null, $isCentralIssued = null, $isOcActiveOnPreviousMotorContract = null, $isPreviousMotorContractActive = null, $isPreviousMotorContractRenewed = null, $nonCompensaOcClaimsCountLastYearForOfferCalculation = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $oCPartnerAgeDiscountRatio = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $oCPropertyInsuranceDiscount = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $ocPremiumFixedValue = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $ocPremiumSentValueinCSOU = null, \Mu4ddi3\Compensa\Webservice\StructType\MotorContract $previousMotorContract = null, $wasOfferSent = null, $wasOfferSentInCSOU = null)
    {
        $this
            ->setACClaimSettlementVariantAcDiscount($aCClaimSettlementVariantAcDiscount)
            ->setACPartnerAgeDiscountRatio($aCPartnerAgeDiscountRatio)
            ->setACPropertyInsuranceDiscount($aCPropertyInsuranceDiscount)
            ->setAcInsuranceSumIndexation($acInsuranceSumIndexation)
            ->setBenefiaMotorMinExpiryDate($benefiaMotorMinExpiryDate)
            ->setCompensaOcClaimsCountLastYearForOfferCalculation($compensaOcClaimsCountLastYearForOfferCalculation)
            ->setGapInfo($gapInfo)
            ->setIsAcActiveOnPreviousMotorContract($isAcActiveOnPreviousMotorContract)
            ->setIsCentralIssued($isCentralIssued)
            ->setIsOcActiveOnPreviousMotorContract($isOcActiveOnPreviousMotorContract)
            ->setIsPreviousMotorContractActive($isPreviousMotorContractActive)
            ->setIsPreviousMotorContractRenewed($isPreviousMotorContractRenewed)
            ->setNonCompensaOcClaimsCountLastYearForOfferCalculation($nonCompensaOcClaimsCountLastYearForOfferCalculation)
            ->setOCPartnerAgeDiscountRatio($oCPartnerAgeDiscountRatio)
            ->setOCPropertyInsuranceDiscount($oCPropertyInsuranceDiscount)
            ->setOcPremiumFixedValue($ocPremiumFixedValue)
            ->setOcPremiumSentValueinCSOU($ocPremiumSentValueinCSOU)
            ->setPreviousMotorContract($previousMotorContract)
            ->setWasOfferSent($wasOfferSent)
            ->setWasOfferSentInCSOU($wasOfferSentInCSOU);
    }
    /**
     * Get ACClaimSettlementVariantAcDiscount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getACClaimSettlementVariantAcDiscount()
    {
        return isset($this->ACClaimSettlementVariantAcDiscount) ? $this->ACClaimSettlementVariantAcDiscount : null;
    }
    /**
     * Set ACClaimSettlementVariantAcDiscount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $aCClaimSettlementVariantAcDiscount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalData
     */
    public function setACClaimSettlementVariantAcDiscount(\Mu4ddi3\Compensa\Webservice\StructType\Factor $aCClaimSettlementVariantAcDiscount = null)
    {
        if (is_null($aCClaimSettlementVariantAcDiscount) || (is_array($aCClaimSettlementVariantAcDiscount) && empty($aCClaimSettlementVariantAcDiscount))) {
            unset($this->ACClaimSettlementVariantAcDiscount);
        } else {
            $this->ACClaimSettlementVariantAcDiscount = $aCClaimSettlementVariantAcDiscount;
        }
        return $this;
    }
    /**
     * Get ACPartnerAgeDiscountRatio value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getACPartnerAgeDiscountRatio()
    {
        return isset($this->ACPartnerAgeDiscountRatio) ? $this->ACPartnerAgeDiscountRatio : null;
    }
    /**
     * Set ACPartnerAgeDiscountRatio value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $aCPartnerAgeDiscountRatio
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalData
     */
    public function setACPartnerAgeDiscountRatio(\Mu4ddi3\Compensa\Webservice\StructType\Factor $aCPartnerAgeDiscountRatio = null)
    {
        if (is_null($aCPartnerAgeDiscountRatio) || (is_array($aCPartnerAgeDiscountRatio) && empty($aCPartnerAgeDiscountRatio))) {
            unset($this->ACPartnerAgeDiscountRatio);
        } else {
            $this->ACPartnerAgeDiscountRatio = $aCPartnerAgeDiscountRatio;
        }
        return $this;
    }
    /**
     * Get ACPropertyInsuranceDiscount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getACPropertyInsuranceDiscount()
    {
        return isset($this->ACPropertyInsuranceDiscount) ? $this->ACPropertyInsuranceDiscount : null;
    }
    /**
     * Set ACPropertyInsuranceDiscount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $aCPropertyInsuranceDiscount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalData
     */
    public function setACPropertyInsuranceDiscount(\Mu4ddi3\Compensa\Webservice\StructType\Factor $aCPropertyInsuranceDiscount = null)
    {
        if (is_null($aCPropertyInsuranceDiscount) || (is_array($aCPropertyInsuranceDiscount) && empty($aCPropertyInsuranceDiscount))) {
            unset($this->ACPropertyInsuranceDiscount);
        } else {
            $this->ACPropertyInsuranceDiscount = $aCPropertyInsuranceDiscount;
        }
        return $this;
    }
    /**
     * Get AcInsuranceSumIndexation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getAcInsuranceSumIndexation()
    {
        return isset($this->AcInsuranceSumIndexation) ? $this->AcInsuranceSumIndexation : null;
    }
    /**
     * Set AcInsuranceSumIndexation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $acInsuranceSumIndexation
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalData
     */
    public function setAcInsuranceSumIndexation(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $acInsuranceSumIndexation = null)
    {
        if (is_null($acInsuranceSumIndexation) || (is_array($acInsuranceSumIndexation) && empty($acInsuranceSumIndexation))) {
            unset($this->AcInsuranceSumIndexation);
        } else {
            $this->AcInsuranceSumIndexation = $acInsuranceSumIndexation;
        }
        return $this;
    }
    /**
     * Get BenefiaMotorMinExpiryDate value
     * @return string|null
     */
    public function getBenefiaMotorMinExpiryDate()
    {
        return $this->BenefiaMotorMinExpiryDate;
    }
    /**
     * Set BenefiaMotorMinExpiryDate value
     * @param string $benefiaMotorMinExpiryDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalData
     */
    public function setBenefiaMotorMinExpiryDate($benefiaMotorMinExpiryDate = null)
    {
        // validation for constraint: string
        if (!is_null($benefiaMotorMinExpiryDate) && !is_string($benefiaMotorMinExpiryDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($benefiaMotorMinExpiryDate)), __LINE__);
        }
        $this->BenefiaMotorMinExpiryDate = $benefiaMotorMinExpiryDate;
        return $this;
    }
    /**
     * Get CompensaOcClaimsCountLastYearForOfferCalculation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getCompensaOcClaimsCountLastYearForOfferCalculation()
    {
        return isset($this->CompensaOcClaimsCountLastYearForOfferCalculation) ? $this->CompensaOcClaimsCountLastYearForOfferCalculation : null;
    }
    /**
     * Set CompensaOcClaimsCountLastYearForOfferCalculation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $compensaOcClaimsCountLastYearForOfferCalculation
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalData
     */
    public function setCompensaOcClaimsCountLastYearForOfferCalculation($compensaOcClaimsCountLastYearForOfferCalculation = null)
    {
        // validation for constraint: int
        if (!is_null($compensaOcClaimsCountLastYearForOfferCalculation) && !is_numeric($compensaOcClaimsCountLastYearForOfferCalculation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($compensaOcClaimsCountLastYearForOfferCalculation)), __LINE__);
        }
        if (is_null($compensaOcClaimsCountLastYearForOfferCalculation) || (is_array($compensaOcClaimsCountLastYearForOfferCalculation) && empty($compensaOcClaimsCountLastYearForOfferCalculation))) {
            unset($this->CompensaOcClaimsCountLastYearForOfferCalculation);
        } else {
            $this->CompensaOcClaimsCountLastYearForOfferCalculation = $compensaOcClaimsCountLastYearForOfferCalculation;
        }
        return $this;
    }
    /**
     * Get GapInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GapInfo|null
     */
    public function getGapInfo()
    {
        return isset($this->GapInfo) ? $this->GapInfo : null;
    }
    /**
     * Set GapInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\GapInfo $gapInfo
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalData
     */
    public function setGapInfo(\Mu4ddi3\Compensa\Webservice\StructType\GapInfo $gapInfo = null)
    {
        if (is_null($gapInfo) || (is_array($gapInfo) && empty($gapInfo))) {
            unset($this->GapInfo);
        } else {
            $this->GapInfo = $gapInfo;
        }
        return $this;
    }
    /**
     * Get IsAcActiveOnPreviousMotorContract value
     * @return bool|null
     */
    public function getIsAcActiveOnPreviousMotorContract()
    {
        return $this->IsAcActiveOnPreviousMotorContract;
    }
    /**
     * Set IsAcActiveOnPreviousMotorContract value
     * @param bool $isAcActiveOnPreviousMotorContract
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalData
     */
    public function setIsAcActiveOnPreviousMotorContract($isAcActiveOnPreviousMotorContract = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAcActiveOnPreviousMotorContract) && !is_bool($isAcActiveOnPreviousMotorContract)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAcActiveOnPreviousMotorContract)), __LINE__);
        }
        $this->IsAcActiveOnPreviousMotorContract = $isAcActiveOnPreviousMotorContract;
        return $this;
    }
    /**
     * Get IsCentralIssued value
     * @return bool|null
     */
    public function getIsCentralIssued()
    {
        return $this->IsCentralIssued;
    }
    /**
     * Set IsCentralIssued value
     * @param bool $isCentralIssued
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalData
     */
    public function setIsCentralIssued($isCentralIssued = null)
    {
        // validation for constraint: boolean
        if (!is_null($isCentralIssued) && !is_bool($isCentralIssued)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isCentralIssued)), __LINE__);
        }
        $this->IsCentralIssued = $isCentralIssued;
        return $this;
    }
    /**
     * Get IsOcActiveOnPreviousMotorContract value
     * @return bool|null
     */
    public function getIsOcActiveOnPreviousMotorContract()
    {
        return $this->IsOcActiveOnPreviousMotorContract;
    }
    /**
     * Set IsOcActiveOnPreviousMotorContract value
     * @param bool $isOcActiveOnPreviousMotorContract
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalData
     */
    public function setIsOcActiveOnPreviousMotorContract($isOcActiveOnPreviousMotorContract = null)
    {
        // validation for constraint: boolean
        if (!is_null($isOcActiveOnPreviousMotorContract) && !is_bool($isOcActiveOnPreviousMotorContract)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isOcActiveOnPreviousMotorContract)), __LINE__);
        }
        $this->IsOcActiveOnPreviousMotorContract = $isOcActiveOnPreviousMotorContract;
        return $this;
    }
    /**
     * Get IsPreviousMotorContractActive value
     * @return bool|null
     */
    public function getIsPreviousMotorContractActive()
    {
        return $this->IsPreviousMotorContractActive;
    }
    /**
     * Set IsPreviousMotorContractActive value
     * @param bool $isPreviousMotorContractActive
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalData
     */
    public function setIsPreviousMotorContractActive($isPreviousMotorContractActive = null)
    {
        // validation for constraint: boolean
        if (!is_null($isPreviousMotorContractActive) && !is_bool($isPreviousMotorContractActive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isPreviousMotorContractActive)), __LINE__);
        }
        $this->IsPreviousMotorContractActive = $isPreviousMotorContractActive;
        return $this;
    }
    /**
     * Get IsPreviousMotorContractRenewed value
     * @return bool|null
     */
    public function getIsPreviousMotorContractRenewed()
    {
        return $this->IsPreviousMotorContractRenewed;
    }
    /**
     * Set IsPreviousMotorContractRenewed value
     * @param bool $isPreviousMotorContractRenewed
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalData
     */
    public function setIsPreviousMotorContractRenewed($isPreviousMotorContractRenewed = null)
    {
        // validation for constraint: boolean
        if (!is_null($isPreviousMotorContractRenewed) && !is_bool($isPreviousMotorContractRenewed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isPreviousMotorContractRenewed)), __LINE__);
        }
        $this->IsPreviousMotorContractRenewed = $isPreviousMotorContractRenewed;
        return $this;
    }
    /**
     * Get NonCompensaOcClaimsCountLastYearForOfferCalculation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getNonCompensaOcClaimsCountLastYearForOfferCalculation()
    {
        return isset($this->NonCompensaOcClaimsCountLastYearForOfferCalculation) ? $this->NonCompensaOcClaimsCountLastYearForOfferCalculation : null;
    }
    /**
     * Set NonCompensaOcClaimsCountLastYearForOfferCalculation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $nonCompensaOcClaimsCountLastYearForOfferCalculation
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalData
     */
    public function setNonCompensaOcClaimsCountLastYearForOfferCalculation($nonCompensaOcClaimsCountLastYearForOfferCalculation = null)
    {
        // validation for constraint: int
        if (!is_null($nonCompensaOcClaimsCountLastYearForOfferCalculation) && !is_numeric($nonCompensaOcClaimsCountLastYearForOfferCalculation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($nonCompensaOcClaimsCountLastYearForOfferCalculation)), __LINE__);
        }
        if (is_null($nonCompensaOcClaimsCountLastYearForOfferCalculation) || (is_array($nonCompensaOcClaimsCountLastYearForOfferCalculation) && empty($nonCompensaOcClaimsCountLastYearForOfferCalculation))) {
            unset($this->NonCompensaOcClaimsCountLastYearForOfferCalculation);
        } else {
            $this->NonCompensaOcClaimsCountLastYearForOfferCalculation = $nonCompensaOcClaimsCountLastYearForOfferCalculation;
        }
        return $this;
    }
    /**
     * Get OCPartnerAgeDiscountRatio value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getOCPartnerAgeDiscountRatio()
    {
        return isset($this->OCPartnerAgeDiscountRatio) ? $this->OCPartnerAgeDiscountRatio : null;
    }
    /**
     * Set OCPartnerAgeDiscountRatio value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $oCPartnerAgeDiscountRatio
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalData
     */
    public function setOCPartnerAgeDiscountRatio(\Mu4ddi3\Compensa\Webservice\StructType\Factor $oCPartnerAgeDiscountRatio = null)
    {
        if (is_null($oCPartnerAgeDiscountRatio) || (is_array($oCPartnerAgeDiscountRatio) && empty($oCPartnerAgeDiscountRatio))) {
            unset($this->OCPartnerAgeDiscountRatio);
        } else {
            $this->OCPartnerAgeDiscountRatio = $oCPartnerAgeDiscountRatio;
        }
        return $this;
    }
    /**
     * Get OCPropertyInsuranceDiscount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getOCPropertyInsuranceDiscount()
    {
        return isset($this->OCPropertyInsuranceDiscount) ? $this->OCPropertyInsuranceDiscount : null;
    }
    /**
     * Set OCPropertyInsuranceDiscount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $oCPropertyInsuranceDiscount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalData
     */
    public function setOCPropertyInsuranceDiscount(\Mu4ddi3\Compensa\Webservice\StructType\Factor $oCPropertyInsuranceDiscount = null)
    {
        if (is_null($oCPropertyInsuranceDiscount) || (is_array($oCPropertyInsuranceDiscount) && empty($oCPropertyInsuranceDiscount))) {
            unset($this->OCPropertyInsuranceDiscount);
        } else {
            $this->OCPropertyInsuranceDiscount = $oCPropertyInsuranceDiscount;
        }
        return $this;
    }
    /**
     * Get OcPremiumFixedValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getOcPremiumFixedValue()
    {
        return isset($this->OcPremiumFixedValue) ? $this->OcPremiumFixedValue : null;
    }
    /**
     * Set OcPremiumFixedValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $ocPremiumFixedValue
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalData
     */
    public function setOcPremiumFixedValue(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $ocPremiumFixedValue = null)
    {
        if (is_null($ocPremiumFixedValue) || (is_array($ocPremiumFixedValue) && empty($ocPremiumFixedValue))) {
            unset($this->OcPremiumFixedValue);
        } else {
            $this->OcPremiumFixedValue = $ocPremiumFixedValue;
        }
        return $this;
    }
    /**
     * Get OcPremiumSentValueinCSOU value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getOcPremiumSentValueinCSOU()
    {
        return isset($this->OcPremiumSentValueinCSOU) ? $this->OcPremiumSentValueinCSOU : null;
    }
    /**
     * Set OcPremiumSentValueinCSOU value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $ocPremiumSentValueinCSOU
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalData
     */
    public function setOcPremiumSentValueinCSOU(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $ocPremiumSentValueinCSOU = null)
    {
        if (is_null($ocPremiumSentValueinCSOU) || (is_array($ocPremiumSentValueinCSOU) && empty($ocPremiumSentValueinCSOU))) {
            unset($this->OcPremiumSentValueinCSOU);
        } else {
            $this->OcPremiumSentValueinCSOU = $ocPremiumSentValueinCSOU;
        }
        return $this;
    }
    /**
     * Get PreviousMotorContract value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract|null
     */
    public function getPreviousMotorContract()
    {
        return isset($this->PreviousMotorContract) ? $this->PreviousMotorContract : null;
    }
    /**
     * Set PreviousMotorContract value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MotorContract $previousMotorContract
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalData
     */
    public function setPreviousMotorContract(\Mu4ddi3\Compensa\Webservice\StructType\MotorContract $previousMotorContract = null)
    {
        if (is_null($previousMotorContract) || (is_array($previousMotorContract) && empty($previousMotorContract))) {
            unset($this->PreviousMotorContract);
        } else {
            $this->PreviousMotorContract = $previousMotorContract;
        }
        return $this;
    }
    /**
     * Get WasOfferSent value
     * @return bool|null
     */
    public function getWasOfferSent()
    {
        return $this->WasOfferSent;
    }
    /**
     * Set WasOfferSent value
     * @param bool $wasOfferSent
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalData
     */
    public function setWasOfferSent($wasOfferSent = null)
    {
        // validation for constraint: boolean
        if (!is_null($wasOfferSent) && !is_bool($wasOfferSent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($wasOfferSent)), __LINE__);
        }
        $this->WasOfferSent = $wasOfferSent;
        return $this;
    }
    /**
     * Get WasOfferSentInCSOU value
     * @return bool|null
     */
    public function getWasOfferSentInCSOU()
    {
        return $this->WasOfferSentInCSOU;
    }
    /**
     * Set WasOfferSentInCSOU value
     * @param bool $wasOfferSentInCSOU
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalData
     */
    public function setWasOfferSentInCSOU($wasOfferSentInCSOU = null)
    {
        // validation for constraint: boolean
        if (!is_null($wasOfferSentInCSOU) && !is_bool($wasOfferSentInCSOU)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($wasOfferSentInCSOU)), __LINE__);
        }
        $this->WasOfferSentInCSOU = $wasOfferSentInCSOU;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalData
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
