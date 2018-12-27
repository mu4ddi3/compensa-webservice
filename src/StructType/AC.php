<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AC StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AC
 * @subpackage Structs
 */
class AC extends MotorRisk
{
    /**
     * The AcContinuationData
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\AcContinuationData
     */
    public $AcContinuationData;
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
     * The CentralCorrectionPercentageValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CentralCorrectionPercentageValue;
    /**
     * The ClaimSettlementVariant
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ClaimSettlementVariant;
    /**
     * The ClaimSettlementVariantInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantInfo
     */
    public $ClaimSettlementVariantInfo;
    /**
     * The ContinuationMode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ContinuationMode;
    /**
     * The DeductibleVariant
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DeductibleVariant;
    /**
     * The DepartmentDirectorDiscountPercentageValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $DepartmentDirectorDiscountPercentageValue;
    /**
     * The IsAdditionalDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAdditionalDiscount;
    /**
     * The IsAmortizationCancelled
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAmortizationCancelled;
    /**
     * The IsBurglaryExcluded
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsBurglaryExcluded;
    /**
     * The IsCentralCorrection
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsCentralCorrection;
    /**
     * The IsConstantInsuranceSum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsConstantInsuranceSum;
    /**
     * The IsContinuation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsContinuation;
    /**
     * The IsDepartmentDirectorDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsDepartmentDirectorDiscount;
    /**
     * The IsGanTrack
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsGanTrack;
    /**
     * The IsLifeInsuranceDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsLifeInsuranceDiscount;
    /**
     * The IsNewOrContinuationSelected
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsNewOrContinuationSelected;
    /**
     * The IsNoConsumptionInsuranceSum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsNoConsumptionInsuranceSum;
    /**
     * The IsPropertyInsuranceDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsPropertyInsuranceDiscount;
    /**
     * The IsSameVehicleWithOcInsurance
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsSameVehicleWithOcInsurance;
    /**
     * The IsTerritorialExtendedInsuranceCoverage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsTerritorialExtendedInsuranceCoverage;
    /**
     * The IsUnderwriterDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsUnderwriterDiscount;
    /**
     * The PropertyInsuranceDiscountPercentageValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PropertyInsuranceDiscountPercentageValue;
    /**
     * The PropertyInsuranceMaxDiscountPercentageValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PropertyInsuranceMaxDiscountPercentageValue;
    /**
     * The PropertyInsuranceMinDiscountPercentageValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PropertyInsuranceMinDiscountPercentageValue;
    /**
     * The UnderwriterDiscountPercentageValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $UnderwriterDiscountPercentageValue;
    /**
     * Constructor method for AC
     * @uses AC::setAcContinuationData()
     * @uses AC::setAdditionalDiscountCode()
     * @uses AC::setAdditionalDiscountPercentageValue()
     * @uses AC::setCentralCorrectionPercentageValue()
     * @uses AC::setClaimSettlementVariant()
     * @uses AC::setClaimSettlementVariantInfo()
     * @uses AC::setContinuationMode()
     * @uses AC::setDeductibleVariant()
     * @uses AC::setDepartmentDirectorDiscountPercentageValue()
     * @uses AC::setIsAdditionalDiscount()
     * @uses AC::setIsAmortizationCancelled()
     * @uses AC::setIsBurglaryExcluded()
     * @uses AC::setIsCentralCorrection()
     * @uses AC::setIsConstantInsuranceSum()
     * @uses AC::setIsContinuation()
     * @uses AC::setIsDepartmentDirectorDiscount()
     * @uses AC::setIsGanTrack()
     * @uses AC::setIsLifeInsuranceDiscount()
     * @uses AC::setIsNewOrContinuationSelected()
     * @uses AC::setIsNoConsumptionInsuranceSum()
     * @uses AC::setIsPropertyInsuranceDiscount()
     * @uses AC::setIsSameVehicleWithOcInsurance()
     * @uses AC::setIsTerritorialExtendedInsuranceCoverage()
     * @uses AC::setIsUnderwriterDiscount()
     * @uses AC::setPropertyInsuranceDiscountPercentageValue()
     * @uses AC::setPropertyInsuranceMaxDiscountPercentageValue()
     * @uses AC::setPropertyInsuranceMinDiscountPercentageValue()
     * @uses AC::setUnderwriterDiscountPercentageValue()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AcContinuationData $acContinuationData
     * @param string $additionalDiscountCode
     * @param int $additionalDiscountPercentageValue
     * @param int $centralCorrectionPercentageValue
     * @param string $claimSettlementVariant
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantInfo $claimSettlementVariantInfo
     * @param string $continuationMode
     * @param string $deductibleVariant
     * @param int $departmentDirectorDiscountPercentageValue
     * @param bool $isAdditionalDiscount
     * @param bool $isAmortizationCancelled
     * @param bool $isBurglaryExcluded
     * @param bool $isCentralCorrection
     * @param bool $isConstantInsuranceSum
     * @param bool $isContinuation
     * @param bool $isDepartmentDirectorDiscount
     * @param bool $isGanTrack
     * @param bool $isLifeInsuranceDiscount
     * @param bool $isNewOrContinuationSelected
     * @param bool $isNoConsumptionInsuranceSum
     * @param bool $isPropertyInsuranceDiscount
     * @param bool $isSameVehicleWithOcInsurance
     * @param bool $isTerritorialExtendedInsuranceCoverage
     * @param bool $isUnderwriterDiscount
     * @param int $propertyInsuranceDiscountPercentageValue
     * @param int $propertyInsuranceMaxDiscountPercentageValue
     * @param int $propertyInsuranceMinDiscountPercentageValue
     * @param int $underwriterDiscountPercentageValue
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\AcContinuationData $acContinuationData = null, $additionalDiscountCode = null, $additionalDiscountPercentageValue = null, $centralCorrectionPercentageValue = null, $claimSettlementVariant = null, \Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantInfo $claimSettlementVariantInfo = null, $continuationMode = null, $deductibleVariant = null, $departmentDirectorDiscountPercentageValue = null, $isAdditionalDiscount = null, $isAmortizationCancelled = null, $isBurglaryExcluded = null, $isCentralCorrection = null, $isConstantInsuranceSum = null, $isContinuation = null, $isDepartmentDirectorDiscount = null, $isGanTrack = null, $isLifeInsuranceDiscount = null, $isNewOrContinuationSelected = null, $isNoConsumptionInsuranceSum = null, $isPropertyInsuranceDiscount = null, $isSameVehicleWithOcInsurance = null, $isTerritorialExtendedInsuranceCoverage = null, $isUnderwriterDiscount = null, $propertyInsuranceDiscountPercentageValue = null, $propertyInsuranceMaxDiscountPercentageValue = null, $propertyInsuranceMinDiscountPercentageValue = null, $underwriterDiscountPercentageValue = null)
    {
        $this
            ->setAcContinuationData($acContinuationData)
            ->setAdditionalDiscountCode($additionalDiscountCode)
            ->setAdditionalDiscountPercentageValue($additionalDiscountPercentageValue)
            ->setCentralCorrectionPercentageValue($centralCorrectionPercentageValue)
            ->setClaimSettlementVariant($claimSettlementVariant)
            ->setClaimSettlementVariantInfo($claimSettlementVariantInfo)
            ->setContinuationMode($continuationMode)
            ->setDeductibleVariant($deductibleVariant)
            ->setDepartmentDirectorDiscountPercentageValue($departmentDirectorDiscountPercentageValue)
            ->setIsAdditionalDiscount($isAdditionalDiscount)
            ->setIsAmortizationCancelled($isAmortizationCancelled)
            ->setIsBurglaryExcluded($isBurglaryExcluded)
            ->setIsCentralCorrection($isCentralCorrection)
            ->setIsConstantInsuranceSum($isConstantInsuranceSum)
            ->setIsContinuation($isContinuation)
            ->setIsDepartmentDirectorDiscount($isDepartmentDirectorDiscount)
            ->setIsGanTrack($isGanTrack)
            ->setIsLifeInsuranceDiscount($isLifeInsuranceDiscount)
            ->setIsNewOrContinuationSelected($isNewOrContinuationSelected)
            ->setIsNoConsumptionInsuranceSum($isNoConsumptionInsuranceSum)
            ->setIsPropertyInsuranceDiscount($isPropertyInsuranceDiscount)
            ->setIsSameVehicleWithOcInsurance($isSameVehicleWithOcInsurance)
            ->setIsTerritorialExtendedInsuranceCoverage($isTerritorialExtendedInsuranceCoverage)
            ->setIsUnderwriterDiscount($isUnderwriterDiscount)
            ->setPropertyInsuranceDiscountPercentageValue($propertyInsuranceDiscountPercentageValue)
            ->setPropertyInsuranceMaxDiscountPercentageValue($propertyInsuranceMaxDiscountPercentageValue)
            ->setPropertyInsuranceMinDiscountPercentageValue($propertyInsuranceMinDiscountPercentageValue)
            ->setUnderwriterDiscountPercentageValue($underwriterDiscountPercentageValue);
    }
    /**
     * Get AcContinuationData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AcContinuationData|null
     */
    public function getAcContinuationData()
    {
        return isset($this->AcContinuationData) ? $this->AcContinuationData : null;
    }
    /**
     * Set AcContinuationData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AcContinuationData $acContinuationData
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AC
     */
    public function setAcContinuationData(\Mu4ddi3\Compensa\Webservice\StructType\AcContinuationData $acContinuationData = null)
    {
        if (is_null($acContinuationData) || (is_array($acContinuationData) && empty($acContinuationData))) {
            unset($this->AcContinuationData);
        } else {
            $this->AcContinuationData = $acContinuationData;
        }
        return $this;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AC
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AC
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
     * Get CentralCorrectionPercentageValue value
     * @return int|null
     */
    public function getCentralCorrectionPercentageValue()
    {
        return $this->CentralCorrectionPercentageValue;
    }
    /**
     * Set CentralCorrectionPercentageValue value
     * @param int $centralCorrectionPercentageValue
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AC
     */
    public function setCentralCorrectionPercentageValue($centralCorrectionPercentageValue = null)
    {
        // validation for constraint: int
        if (!is_null($centralCorrectionPercentageValue) && !is_numeric($centralCorrectionPercentageValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($centralCorrectionPercentageValue)), __LINE__);
        }
        $this->CentralCorrectionPercentageValue = $centralCorrectionPercentageValue;
        return $this;
    }
    /**
     * Get ClaimSettlementVariant value
     * @return string|null
     */
    public function getClaimSettlementVariant()
    {
        return $this->ClaimSettlementVariant;
    }
    /**
     * Set ClaimSettlementVariant value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\ClaimSettlementVariant::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\ClaimSettlementVariant::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $claimSettlementVariant
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AC
     */
    public function setClaimSettlementVariant($claimSettlementVariant = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\ClaimSettlementVariant::valueIsValid($claimSettlementVariant)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $claimSettlementVariant, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\ClaimSettlementVariant::getValidValues())), __LINE__);
        }
        $this->ClaimSettlementVariant = $claimSettlementVariant;
        return $this;
    }
    /**
     * Get ClaimSettlementVariantInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantInfo|null
     */
    public function getClaimSettlementVariantInfo()
    {
        return isset($this->ClaimSettlementVariantInfo) ? $this->ClaimSettlementVariantInfo : null;
    }
    /**
     * Set ClaimSettlementVariantInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantInfo $claimSettlementVariantInfo
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AC
     */
    public function setClaimSettlementVariantInfo(\Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantInfo $claimSettlementVariantInfo = null)
    {
        if (is_null($claimSettlementVariantInfo) || (is_array($claimSettlementVariantInfo) && empty($claimSettlementVariantInfo))) {
            unset($this->ClaimSettlementVariantInfo);
        } else {
            $this->ClaimSettlementVariantInfo = $claimSettlementVariantInfo;
        }
        return $this;
    }
    /**
     * Get ContinuationMode value
     * @return string|null
     */
    public function getContinuationMode()
    {
        return $this->ContinuationMode;
    }
    /**
     * Set ContinuationMode value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\ContinuationMode::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\ContinuationMode::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $continuationMode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AC
     */
    public function setContinuationMode($continuationMode = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\ContinuationMode::valueIsValid($continuationMode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $continuationMode, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\ContinuationMode::getValidValues())), __LINE__);
        }
        $this->ContinuationMode = $continuationMode;
        return $this;
    }
    /**
     * Get DeductibleVariant value
     * @return string|null
     */
    public function getDeductibleVariant()
    {
        return $this->DeductibleVariant;
    }
    /**
     * Set DeductibleVariant value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\DeductibleVariant::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\DeductibleVariant::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $deductibleVariant
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AC
     */
    public function setDeductibleVariant($deductibleVariant = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\DeductibleVariant::valueIsValid($deductibleVariant)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $deductibleVariant, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\DeductibleVariant::getValidValues())), __LINE__);
        }
        $this->DeductibleVariant = $deductibleVariant;
        return $this;
    }
    /**
     * Get DepartmentDirectorDiscountPercentageValue value
     * @return int|null
     */
    public function getDepartmentDirectorDiscountPercentageValue()
    {
        return $this->DepartmentDirectorDiscountPercentageValue;
    }
    /**
     * Set DepartmentDirectorDiscountPercentageValue value
     * @param int $departmentDirectorDiscountPercentageValue
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AC
     */
    public function setDepartmentDirectorDiscountPercentageValue($departmentDirectorDiscountPercentageValue = null)
    {
        // validation for constraint: int
        if (!is_null($departmentDirectorDiscountPercentageValue) && !is_numeric($departmentDirectorDiscountPercentageValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($departmentDirectorDiscountPercentageValue)), __LINE__);
        }
        $this->DepartmentDirectorDiscountPercentageValue = $departmentDirectorDiscountPercentageValue;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AC
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
     * Get IsAmortizationCancelled value
     * @return bool|null
     */
    public function getIsAmortizationCancelled()
    {
        return $this->IsAmortizationCancelled;
    }
    /**
     * Set IsAmortizationCancelled value
     * @param bool $isAmortizationCancelled
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AC
     */
    public function setIsAmortizationCancelled($isAmortizationCancelled = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAmortizationCancelled) && !is_bool($isAmortizationCancelled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAmortizationCancelled)), __LINE__);
        }
        $this->IsAmortizationCancelled = $isAmortizationCancelled;
        return $this;
    }
    /**
     * Get IsBurglaryExcluded value
     * @return bool|null
     */
    public function getIsBurglaryExcluded()
    {
        return $this->IsBurglaryExcluded;
    }
    /**
     * Set IsBurglaryExcluded value
     * @param bool $isBurglaryExcluded
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AC
     */
    public function setIsBurglaryExcluded($isBurglaryExcluded = null)
    {
        // validation for constraint: boolean
        if (!is_null($isBurglaryExcluded) && !is_bool($isBurglaryExcluded)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isBurglaryExcluded)), __LINE__);
        }
        $this->IsBurglaryExcluded = $isBurglaryExcluded;
        return $this;
    }
    /**
     * Get IsCentralCorrection value
     * @return bool|null
     */
    public function getIsCentralCorrection()
    {
        return $this->IsCentralCorrection;
    }
    /**
     * Set IsCentralCorrection value
     * @param bool $isCentralCorrection
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AC
     */
    public function setIsCentralCorrection($isCentralCorrection = null)
    {
        // validation for constraint: boolean
        if (!is_null($isCentralCorrection) && !is_bool($isCentralCorrection)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isCentralCorrection)), __LINE__);
        }
        $this->IsCentralCorrection = $isCentralCorrection;
        return $this;
    }
    /**
     * Get IsConstantInsuranceSum value
     * @return bool|null
     */
    public function getIsConstantInsuranceSum()
    {
        return $this->IsConstantInsuranceSum;
    }
    /**
     * Set IsConstantInsuranceSum value
     * @param bool $isConstantInsuranceSum
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AC
     */
    public function setIsConstantInsuranceSum($isConstantInsuranceSum = null)
    {
        // validation for constraint: boolean
        if (!is_null($isConstantInsuranceSum) && !is_bool($isConstantInsuranceSum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isConstantInsuranceSum)), __LINE__);
        }
        $this->IsConstantInsuranceSum = $isConstantInsuranceSum;
        return $this;
    }
    /**
     * Get IsContinuation value
     * @return bool|null
     */
    public function getIsContinuation()
    {
        return $this->IsContinuation;
    }
    /**
     * Set IsContinuation value
     * @param bool $isContinuation
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AC
     */
    public function setIsContinuation($isContinuation = null)
    {
        // validation for constraint: boolean
        if (!is_null($isContinuation) && !is_bool($isContinuation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isContinuation)), __LINE__);
        }
        $this->IsContinuation = $isContinuation;
        return $this;
    }
    /**
     * Get IsDepartmentDirectorDiscount value
     * @return bool|null
     */
    public function getIsDepartmentDirectorDiscount()
    {
        return $this->IsDepartmentDirectorDiscount;
    }
    /**
     * Set IsDepartmentDirectorDiscount value
     * @param bool $isDepartmentDirectorDiscount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AC
     */
    public function setIsDepartmentDirectorDiscount($isDepartmentDirectorDiscount = null)
    {
        // validation for constraint: boolean
        if (!is_null($isDepartmentDirectorDiscount) && !is_bool($isDepartmentDirectorDiscount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isDepartmentDirectorDiscount)), __LINE__);
        }
        $this->IsDepartmentDirectorDiscount = $isDepartmentDirectorDiscount;
        return $this;
    }
    /**
     * Get IsGanTrack value
     * @return bool|null
     */
    public function getIsGanTrack()
    {
        return $this->IsGanTrack;
    }
    /**
     * Set IsGanTrack value
     * @param bool $isGanTrack
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AC
     */
    public function setIsGanTrack($isGanTrack = null)
    {
        // validation for constraint: boolean
        if (!is_null($isGanTrack) && !is_bool($isGanTrack)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isGanTrack)), __LINE__);
        }
        $this->IsGanTrack = $isGanTrack;
        return $this;
    }
    /**
     * Get IsLifeInsuranceDiscount value
     * @return bool|null
     */
    public function getIsLifeInsuranceDiscount()
    {
        return $this->IsLifeInsuranceDiscount;
    }
    /**
     * Set IsLifeInsuranceDiscount value
     * @param bool $isLifeInsuranceDiscount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AC
     */
    public function setIsLifeInsuranceDiscount($isLifeInsuranceDiscount = null)
    {
        // validation for constraint: boolean
        if (!is_null($isLifeInsuranceDiscount) && !is_bool($isLifeInsuranceDiscount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isLifeInsuranceDiscount)), __LINE__);
        }
        $this->IsLifeInsuranceDiscount = $isLifeInsuranceDiscount;
        return $this;
    }
    /**
     * Get IsNewOrContinuationSelected value
     * @return bool|null
     */
    public function getIsNewOrContinuationSelected()
    {
        return $this->IsNewOrContinuationSelected;
    }
    /**
     * Set IsNewOrContinuationSelected value
     * @param bool $isNewOrContinuationSelected
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AC
     */
    public function setIsNewOrContinuationSelected($isNewOrContinuationSelected = null)
    {
        // validation for constraint: boolean
        if (!is_null($isNewOrContinuationSelected) && !is_bool($isNewOrContinuationSelected)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isNewOrContinuationSelected)), __LINE__);
        }
        $this->IsNewOrContinuationSelected = $isNewOrContinuationSelected;
        return $this;
    }
    /**
     * Get IsNoConsumptionInsuranceSum value
     * @return bool|null
     */
    public function getIsNoConsumptionInsuranceSum()
    {
        return $this->IsNoConsumptionInsuranceSum;
    }
    /**
     * Set IsNoConsumptionInsuranceSum value
     * @param bool $isNoConsumptionInsuranceSum
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AC
     */
    public function setIsNoConsumptionInsuranceSum($isNoConsumptionInsuranceSum = null)
    {
        // validation for constraint: boolean
        if (!is_null($isNoConsumptionInsuranceSum) && !is_bool($isNoConsumptionInsuranceSum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isNoConsumptionInsuranceSum)), __LINE__);
        }
        $this->IsNoConsumptionInsuranceSum = $isNoConsumptionInsuranceSum;
        return $this;
    }
    /**
     * Get IsPropertyInsuranceDiscount value
     * @return bool|null
     */
    public function getIsPropertyInsuranceDiscount()
    {
        return $this->IsPropertyInsuranceDiscount;
    }
    /**
     * Set IsPropertyInsuranceDiscount value
     * @param bool $isPropertyInsuranceDiscount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AC
     */
    public function setIsPropertyInsuranceDiscount($isPropertyInsuranceDiscount = null)
    {
        // validation for constraint: boolean
        if (!is_null($isPropertyInsuranceDiscount) && !is_bool($isPropertyInsuranceDiscount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isPropertyInsuranceDiscount)), __LINE__);
        }
        $this->IsPropertyInsuranceDiscount = $isPropertyInsuranceDiscount;
        return $this;
    }
    /**
     * Get IsSameVehicleWithOcInsurance value
     * @return bool|null
     */
    public function getIsSameVehicleWithOcInsurance()
    {
        return $this->IsSameVehicleWithOcInsurance;
    }
    /**
     * Set IsSameVehicleWithOcInsurance value
     * @param bool $isSameVehicleWithOcInsurance
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AC
     */
    public function setIsSameVehicleWithOcInsurance($isSameVehicleWithOcInsurance = null)
    {
        // validation for constraint: boolean
        if (!is_null($isSameVehicleWithOcInsurance) && !is_bool($isSameVehicleWithOcInsurance)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isSameVehicleWithOcInsurance)), __LINE__);
        }
        $this->IsSameVehicleWithOcInsurance = $isSameVehicleWithOcInsurance;
        return $this;
    }
    /**
     * Get IsTerritorialExtendedInsuranceCoverage value
     * @return bool|null
     */
    public function getIsTerritorialExtendedInsuranceCoverage()
    {
        return $this->IsTerritorialExtendedInsuranceCoverage;
    }
    /**
     * Set IsTerritorialExtendedInsuranceCoverage value
     * @param bool $isTerritorialExtendedInsuranceCoverage
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AC
     */
    public function setIsTerritorialExtendedInsuranceCoverage($isTerritorialExtendedInsuranceCoverage = null)
    {
        // validation for constraint: boolean
        if (!is_null($isTerritorialExtendedInsuranceCoverage) && !is_bool($isTerritorialExtendedInsuranceCoverage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isTerritorialExtendedInsuranceCoverage)), __LINE__);
        }
        $this->IsTerritorialExtendedInsuranceCoverage = $isTerritorialExtendedInsuranceCoverage;
        return $this;
    }
    /**
     * Get IsUnderwriterDiscount value
     * @return bool|null
     */
    public function getIsUnderwriterDiscount()
    {
        return $this->IsUnderwriterDiscount;
    }
    /**
     * Set IsUnderwriterDiscount value
     * @param bool $isUnderwriterDiscount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AC
     */
    public function setIsUnderwriterDiscount($isUnderwriterDiscount = null)
    {
        // validation for constraint: boolean
        if (!is_null($isUnderwriterDiscount) && !is_bool($isUnderwriterDiscount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isUnderwriterDiscount)), __LINE__);
        }
        $this->IsUnderwriterDiscount = $isUnderwriterDiscount;
        return $this;
    }
    /**
     * Get PropertyInsuranceDiscountPercentageValue value
     * @return int|null
     */
    public function getPropertyInsuranceDiscountPercentageValue()
    {
        return $this->PropertyInsuranceDiscountPercentageValue;
    }
    /**
     * Set PropertyInsuranceDiscountPercentageValue value
     * @param int $propertyInsuranceDiscountPercentageValue
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AC
     */
    public function setPropertyInsuranceDiscountPercentageValue($propertyInsuranceDiscountPercentageValue = null)
    {
        // validation for constraint: int
        if (!is_null($propertyInsuranceDiscountPercentageValue) && !is_numeric($propertyInsuranceDiscountPercentageValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($propertyInsuranceDiscountPercentageValue)), __LINE__);
        }
        $this->PropertyInsuranceDiscountPercentageValue = $propertyInsuranceDiscountPercentageValue;
        return $this;
    }
    /**
     * Get PropertyInsuranceMaxDiscountPercentageValue value
     * @return int|null
     */
    public function getPropertyInsuranceMaxDiscountPercentageValue()
    {
        return $this->PropertyInsuranceMaxDiscountPercentageValue;
    }
    /**
     * Set PropertyInsuranceMaxDiscountPercentageValue value
     * @param int $propertyInsuranceMaxDiscountPercentageValue
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AC
     */
    public function setPropertyInsuranceMaxDiscountPercentageValue($propertyInsuranceMaxDiscountPercentageValue = null)
    {
        // validation for constraint: int
        if (!is_null($propertyInsuranceMaxDiscountPercentageValue) && !is_numeric($propertyInsuranceMaxDiscountPercentageValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($propertyInsuranceMaxDiscountPercentageValue)), __LINE__);
        }
        $this->PropertyInsuranceMaxDiscountPercentageValue = $propertyInsuranceMaxDiscountPercentageValue;
        return $this;
    }
    /**
     * Get PropertyInsuranceMinDiscountPercentageValue value
     * @return int|null
     */
    public function getPropertyInsuranceMinDiscountPercentageValue()
    {
        return $this->PropertyInsuranceMinDiscountPercentageValue;
    }
    /**
     * Set PropertyInsuranceMinDiscountPercentageValue value
     * @param int $propertyInsuranceMinDiscountPercentageValue
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AC
     */
    public function setPropertyInsuranceMinDiscountPercentageValue($propertyInsuranceMinDiscountPercentageValue = null)
    {
        // validation for constraint: int
        if (!is_null($propertyInsuranceMinDiscountPercentageValue) && !is_numeric($propertyInsuranceMinDiscountPercentageValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($propertyInsuranceMinDiscountPercentageValue)), __LINE__);
        }
        $this->PropertyInsuranceMinDiscountPercentageValue = $propertyInsuranceMinDiscountPercentageValue;
        return $this;
    }
    /**
     * Get UnderwriterDiscountPercentageValue value
     * @return int|null
     */
    public function getUnderwriterDiscountPercentageValue()
    {
        return $this->UnderwriterDiscountPercentageValue;
    }
    /**
     * Set UnderwriterDiscountPercentageValue value
     * @param int $underwriterDiscountPercentageValue
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AC
     */
    public function setUnderwriterDiscountPercentageValue($underwriterDiscountPercentageValue = null)
    {
        // validation for constraint: int
        if (!is_null($underwriterDiscountPercentageValue) && !is_numeric($underwriterDiscountPercentageValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($underwriterDiscountPercentageValue)), __LINE__);
        }
        $this->UnderwriterDiscountPercentageValue = $underwriterDiscountPercentageValue;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AC
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
