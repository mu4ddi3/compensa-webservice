<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PackageRangeDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PackageRangeDefinition
 * @subpackage Structs
 */
class PackageRangeDefinition extends AbstractStructBase
{
    /**
     * The ClaimSettlementVariant
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ClaimSettlementVariant;
    /**
     * The DeductibleVariant
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DeductibleVariant;
    /**
     * The GapInsurancePeriod
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $GapInsurancePeriod;
    /**
     * The GapVariant
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $GapVariant;
    /**
     * The IsAc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAc;
    /**
     * The IsAmortizationCancelled
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAmortizationCancelled;
    /**
     * The IsAssistance
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAssistance;
    /**
     * The IsBLS
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsBLS;
    /**
     * The IsBagaz
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsBagaz;
    /**
     * The IsBurglaryExcluded
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsBurglaryExcluded;
    /**
     * The IsConstantInsuranceSum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsConstantInsuranceSum;
    /**
     * The IsDna
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsDna;
    /**
     * The IsGap
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsGap;
    /**
     * The IsNnw
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsNnw;
    /**
     * The IsNoConsumptionInsuranceSum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsNoConsumptionInsuranceSum;
    /**
     * The IsOc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsOc;
    /**
     * The IsOp
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsOp;
    /**
     * The IsOuzAc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsOuzAc;
    /**
     * The IsOuzOc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsOuzOc;
    /**
     * The IsPomoc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsPomoc;
    /**
     * The IsSzyby
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsSzyby;
    /**
     * The IsTerritorialExtended
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsTerritorialExtended;
    /**
     * The NnwInsuranceSum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $NnwInsuranceSum;
    /**
     * The OpInsuranceSum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $OpInsuranceSum;
    /**
     * The OpOwnContributionVariant
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OpOwnContributionVariant;
    /**
     * The OpVariant
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OpVariant;
    /**
     * The PackageId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PackageId;
    /**
     * The PomocVariant
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PomocVariant;
    /**
     * The SelectedAssistanceVariants
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTariffVariants
     */
    public $SelectedAssistanceVariants;
    /**
     * Constructor method for PackageRangeDefinition
     * @uses PackageRangeDefinition::setClaimSettlementVariant()
     * @uses PackageRangeDefinition::setDeductibleVariant()
     * @uses PackageRangeDefinition::setGapInsurancePeriod()
     * @uses PackageRangeDefinition::setGapVariant()
     * @uses PackageRangeDefinition::setIsAc()
     * @uses PackageRangeDefinition::setIsAmortizationCancelled()
     * @uses PackageRangeDefinition::setIsAssistance()
     * @uses PackageRangeDefinition::setIsBLS()
     * @uses PackageRangeDefinition::setIsBagaz()
     * @uses PackageRangeDefinition::setIsBurglaryExcluded()
     * @uses PackageRangeDefinition::setIsConstantInsuranceSum()
     * @uses PackageRangeDefinition::setIsDna()
     * @uses PackageRangeDefinition::setIsGap()
     * @uses PackageRangeDefinition::setIsNnw()
     * @uses PackageRangeDefinition::setIsNoConsumptionInsuranceSum()
     * @uses PackageRangeDefinition::setIsOc()
     * @uses PackageRangeDefinition::setIsOp()
     * @uses PackageRangeDefinition::setIsOuzAc()
     * @uses PackageRangeDefinition::setIsOuzOc()
     * @uses PackageRangeDefinition::setIsPomoc()
     * @uses PackageRangeDefinition::setIsSzyby()
     * @uses PackageRangeDefinition::setIsTerritorialExtended()
     * @uses PackageRangeDefinition::setNnwInsuranceSum()
     * @uses PackageRangeDefinition::setOpInsuranceSum()
     * @uses PackageRangeDefinition::setOpOwnContributionVariant()
     * @uses PackageRangeDefinition::setOpVariant()
     * @uses PackageRangeDefinition::setPackageId()
     * @uses PackageRangeDefinition::setPomocVariant()
     * @uses PackageRangeDefinition::setSelectedAssistanceVariants()
     * @param string $claimSettlementVariant
     * @param string $deductibleVariant
     * @param int $gapInsurancePeriod
     * @param string $gapVariant
     * @param bool $isAc
     * @param bool $isAmortizationCancelled
     * @param bool $isAssistance
     * @param bool $isBLS
     * @param bool $isBagaz
     * @param bool $isBurglaryExcluded
     * @param bool $isConstantInsuranceSum
     * @param bool $isDna
     * @param bool $isGap
     * @param bool $isNnw
     * @param bool $isNoConsumptionInsuranceSum
     * @param bool $isOc
     * @param bool $isOp
     * @param bool $isOuzAc
     * @param bool $isOuzOc
     * @param bool $isPomoc
     * @param bool $isSzyby
     * @param bool $isTerritorialExtended
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $nnwInsuranceSum
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $opInsuranceSum
     * @param string $opOwnContributionVariant
     * @param string $opVariant
     * @param int $packageId
     * @param string $pomocVariant
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTariffVariants $selectedAssistanceVariants
     */
    public function __construct($claimSettlementVariant = null, $deductibleVariant = null, $gapInsurancePeriod = null, $gapVariant = null, $isAc = null, $isAmortizationCancelled = null, $isAssistance = null, $isBLS = null, $isBagaz = null, $isBurglaryExcluded = null, $isConstantInsuranceSum = null, $isDna = null, $isGap = null, $isNnw = null, $isNoConsumptionInsuranceSum = null, $isOc = null, $isOp = null, $isOuzAc = null, $isOuzOc = null, $isPomoc = null, $isSzyby = null, $isTerritorialExtended = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $nnwInsuranceSum = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $opInsuranceSum = null, $opOwnContributionVariant = null, $opVariant = null, $packageId = null, $pomocVariant = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTariffVariants $selectedAssistanceVariants = null)
    {
        $this
            ->setClaimSettlementVariant($claimSettlementVariant)
            ->setDeductibleVariant($deductibleVariant)
            ->setGapInsurancePeriod($gapInsurancePeriod)
            ->setGapVariant($gapVariant)
            ->setIsAc($isAc)
            ->setIsAmortizationCancelled($isAmortizationCancelled)
            ->setIsAssistance($isAssistance)
            ->setIsBLS($isBLS)
            ->setIsBagaz($isBagaz)
            ->setIsBurglaryExcluded($isBurglaryExcluded)
            ->setIsConstantInsuranceSum($isConstantInsuranceSum)
            ->setIsDna($isDna)
            ->setIsGap($isGap)
            ->setIsNnw($isNnw)
            ->setIsNoConsumptionInsuranceSum($isNoConsumptionInsuranceSum)
            ->setIsOc($isOc)
            ->setIsOp($isOp)
            ->setIsOuzAc($isOuzAc)
            ->setIsOuzOc($isOuzOc)
            ->setIsPomoc($isPomoc)
            ->setIsSzyby($isSzyby)
            ->setIsTerritorialExtended($isTerritorialExtended)
            ->setNnwInsuranceSum($nnwInsuranceSum)
            ->setOpInsuranceSum($opInsuranceSum)
            ->setOpOwnContributionVariant($opOwnContributionVariant)
            ->setOpVariant($opVariant)
            ->setPackageId($packageId)
            ->setPomocVariant($pomocVariant)
            ->setSelectedAssistanceVariants($selectedAssistanceVariants);
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeDefinition
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeDefinition
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
     * Get GapInsurancePeriod value
     * @return int|null
     */
    public function getGapInsurancePeriod()
    {
        return $this->GapInsurancePeriod;
    }
    /**
     * Set GapInsurancePeriod value
     * @param int $gapInsurancePeriod
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeDefinition
     */
    public function setGapInsurancePeriod($gapInsurancePeriod = null)
    {
        // validation for constraint: int
        if (!is_null($gapInsurancePeriod) && !is_numeric($gapInsurancePeriod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($gapInsurancePeriod)), __LINE__);
        }
        $this->GapInsurancePeriod = $gapInsurancePeriod;
        return $this;
    }
    /**
     * Get GapVariant value
     * @return string|null
     */
    public function getGapVariant()
    {
        return $this->GapVariant;
    }
    /**
     * Set GapVariant value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\TariffVariants::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\TariffVariants::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $gapVariant
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeDefinition
     */
    public function setGapVariant($gapVariant = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\TariffVariants::valueIsValid($gapVariant)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $gapVariant, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\TariffVariants::getValidValues())), __LINE__);
        }
        $this->GapVariant = $gapVariant;
        return $this;
    }
    /**
     * Get IsAc value
     * @return bool|null
     */
    public function getIsAc()
    {
        return $this->IsAc;
    }
    /**
     * Set IsAc value
     * @param bool $isAc
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeDefinition
     */
    public function setIsAc($isAc = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAc) && !is_bool($isAc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAc)), __LINE__);
        }
        $this->IsAc = $isAc;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeDefinition
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
     * Get IsAssistance value
     * @return bool|null
     */
    public function getIsAssistance()
    {
        return $this->IsAssistance;
    }
    /**
     * Set IsAssistance value
     * @param bool $isAssistance
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeDefinition
     */
    public function setIsAssistance($isAssistance = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAssistance) && !is_bool($isAssistance)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAssistance)), __LINE__);
        }
        $this->IsAssistance = $isAssistance;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeDefinition
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
     * Get IsBagaz value
     * @return bool|null
     */
    public function getIsBagaz()
    {
        return $this->IsBagaz;
    }
    /**
     * Set IsBagaz value
     * @param bool $isBagaz
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeDefinition
     */
    public function setIsBagaz($isBagaz = null)
    {
        // validation for constraint: boolean
        if (!is_null($isBagaz) && !is_bool($isBagaz)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isBagaz)), __LINE__);
        }
        $this->IsBagaz = $isBagaz;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeDefinition
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeDefinition
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
     * Get IsDna value
     * @return bool|null
     */
    public function getIsDna()
    {
        return $this->IsDna;
    }
    /**
     * Set IsDna value
     * @param bool $isDna
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeDefinition
     */
    public function setIsDna($isDna = null)
    {
        // validation for constraint: boolean
        if (!is_null($isDna) && !is_bool($isDna)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isDna)), __LINE__);
        }
        $this->IsDna = $isDna;
        return $this;
    }
    /**
     * Get IsGap value
     * @return bool|null
     */
    public function getIsGap()
    {
        return $this->IsGap;
    }
    /**
     * Set IsGap value
     * @param bool $isGap
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeDefinition
     */
    public function setIsGap($isGap = null)
    {
        // validation for constraint: boolean
        if (!is_null($isGap) && !is_bool($isGap)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isGap)), __LINE__);
        }
        $this->IsGap = $isGap;
        return $this;
    }
    /**
     * Get IsNnw value
     * @return bool|null
     */
    public function getIsNnw()
    {
        return $this->IsNnw;
    }
    /**
     * Set IsNnw value
     * @param bool $isNnw
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeDefinition
     */
    public function setIsNnw($isNnw = null)
    {
        // validation for constraint: boolean
        if (!is_null($isNnw) && !is_bool($isNnw)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isNnw)), __LINE__);
        }
        $this->IsNnw = $isNnw;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeDefinition
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
     * Get IsOc value
     * @return bool|null
     */
    public function getIsOc()
    {
        return $this->IsOc;
    }
    /**
     * Set IsOc value
     * @param bool $isOc
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeDefinition
     */
    public function setIsOc($isOc = null)
    {
        // validation for constraint: boolean
        if (!is_null($isOc) && !is_bool($isOc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isOc)), __LINE__);
        }
        $this->IsOc = $isOc;
        return $this;
    }
    /**
     * Get IsOp value
     * @return bool|null
     */
    public function getIsOp()
    {
        return $this->IsOp;
    }
    /**
     * Set IsOp value
     * @param bool $isOp
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeDefinition
     */
    public function setIsOp($isOp = null)
    {
        // validation for constraint: boolean
        if (!is_null($isOp) && !is_bool($isOp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isOp)), __LINE__);
        }
        $this->IsOp = $isOp;
        return $this;
    }
    /**
     * Get IsOuzAc value
     * @return bool|null
     */
    public function getIsOuzAc()
    {
        return $this->IsOuzAc;
    }
    /**
     * Set IsOuzAc value
     * @param bool $isOuzAc
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeDefinition
     */
    public function setIsOuzAc($isOuzAc = null)
    {
        // validation for constraint: boolean
        if (!is_null($isOuzAc) && !is_bool($isOuzAc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isOuzAc)), __LINE__);
        }
        $this->IsOuzAc = $isOuzAc;
        return $this;
    }
    /**
     * Get IsOuzOc value
     * @return bool|null
     */
    public function getIsOuzOc()
    {
        return $this->IsOuzOc;
    }
    /**
     * Set IsOuzOc value
     * @param bool $isOuzOc
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeDefinition
     */
    public function setIsOuzOc($isOuzOc = null)
    {
        // validation for constraint: boolean
        if (!is_null($isOuzOc) && !is_bool($isOuzOc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isOuzOc)), __LINE__);
        }
        $this->IsOuzOc = $isOuzOc;
        return $this;
    }
    /**
     * Get IsPomoc value
     * @return bool|null
     */
    public function getIsPomoc()
    {
        return $this->IsPomoc;
    }
    /**
     * Set IsPomoc value
     * @param bool $isPomoc
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeDefinition
     */
    public function setIsPomoc($isPomoc = null)
    {
        // validation for constraint: boolean
        if (!is_null($isPomoc) && !is_bool($isPomoc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isPomoc)), __LINE__);
        }
        $this->IsPomoc = $isPomoc;
        return $this;
    }
    /**
     * Get IsSzyby value
     * @return bool|null
     */
    public function getIsSzyby()
    {
        return $this->IsSzyby;
    }
    /**
     * Set IsSzyby value
     * @param bool $isSzyby
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeDefinition
     */
    public function setIsSzyby($isSzyby = null)
    {
        // validation for constraint: boolean
        if (!is_null($isSzyby) && !is_bool($isSzyby)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isSzyby)), __LINE__);
        }
        $this->IsSzyby = $isSzyby;
        return $this;
    }
    /**
     * Get IsTerritorialExtended value
     * @return bool|null
     */
    public function getIsTerritorialExtended()
    {
        return $this->IsTerritorialExtended;
    }
    /**
     * Set IsTerritorialExtended value
     * @param bool $isTerritorialExtended
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeDefinition
     */
    public function setIsTerritorialExtended($isTerritorialExtended = null)
    {
        // validation for constraint: boolean
        if (!is_null($isTerritorialExtended) && !is_bool($isTerritorialExtended)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isTerritorialExtended)), __LINE__);
        }
        $this->IsTerritorialExtended = $isTerritorialExtended;
        return $this;
    }
    /**
     * Get NnwInsuranceSum value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getNnwInsuranceSum()
    {
        return isset($this->NnwInsuranceSum) ? $this->NnwInsuranceSum : null;
    }
    /**
     * Set NnwInsuranceSum value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $nnwInsuranceSum
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeDefinition
     */
    public function setNnwInsuranceSum(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $nnwInsuranceSum = null)
    {
        if (is_null($nnwInsuranceSum) || (is_array($nnwInsuranceSum) && empty($nnwInsuranceSum))) {
            unset($this->NnwInsuranceSum);
        } else {
            $this->NnwInsuranceSum = $nnwInsuranceSum;
        }
        return $this;
    }
    /**
     * Get OpInsuranceSum value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getOpInsuranceSum()
    {
        return isset($this->OpInsuranceSum) ? $this->OpInsuranceSum : null;
    }
    /**
     * Set OpInsuranceSum value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $opInsuranceSum
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeDefinition
     */
    public function setOpInsuranceSum(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $opInsuranceSum = null)
    {
        if (is_null($opInsuranceSum) || (is_array($opInsuranceSum) && empty($opInsuranceSum))) {
            unset($this->OpInsuranceSum);
        } else {
            $this->OpInsuranceSum = $opInsuranceSum;
        }
        return $this;
    }
    /**
     * Get OpOwnContributionVariant value
     * @return string|null
     */
    public function getOpOwnContributionVariant()
    {
        return $this->OpOwnContributionVariant;
    }
    /**
     * Set OpOwnContributionVariant value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\OwnContributionVariant::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\OwnContributionVariant::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $opOwnContributionVariant
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeDefinition
     */
    public function setOpOwnContributionVariant($opOwnContributionVariant = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\OwnContributionVariant::valueIsValid($opOwnContributionVariant)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $opOwnContributionVariant, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\OwnContributionVariant::getValidValues())), __LINE__);
        }
        $this->OpOwnContributionVariant = $opOwnContributionVariant;
        return $this;
    }
    /**
     * Get OpVariant value
     * @return string|null
     */
    public function getOpVariant()
    {
        return $this->OpVariant;
    }
    /**
     * Set OpVariant value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\TariffVariants::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\TariffVariants::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $opVariant
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeDefinition
     */
    public function setOpVariant($opVariant = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\TariffVariants::valueIsValid($opVariant)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $opVariant, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\TariffVariants::getValidValues())), __LINE__);
        }
        $this->OpVariant = $opVariant;
        return $this;
    }
    /**
     * Get PackageId value
     * @return int|null
     */
    public function getPackageId()
    {
        return $this->PackageId;
    }
    /**
     * Set PackageId value
     * @param int $packageId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeDefinition
     */
    public function setPackageId($packageId = null)
    {
        // validation for constraint: int
        if (!is_null($packageId) && !is_numeric($packageId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($packageId)), __LINE__);
        }
        $this->PackageId = $packageId;
        return $this;
    }
    /**
     * Get PomocVariant value
     * @return string|null
     */
    public function getPomocVariant()
    {
        return $this->PomocVariant;
    }
    /**
     * Set PomocVariant value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\TariffVariants::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\TariffVariants::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $pomocVariant
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeDefinition
     */
    public function setPomocVariant($pomocVariant = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\TariffVariants::valueIsValid($pomocVariant)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $pomocVariant, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\TariffVariants::getValidValues())), __LINE__);
        }
        $this->PomocVariant = $pomocVariant;
        return $this;
    }
    /**
     * Get SelectedAssistanceVariants value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTariffVariants|null
     */
    public function getSelectedAssistanceVariants()
    {
        return isset($this->SelectedAssistanceVariants) ? $this->SelectedAssistanceVariants : null;
    }
    /**
     * Set SelectedAssistanceVariants value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTariffVariants $selectedAssistanceVariants
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeDefinition
     */
    public function setSelectedAssistanceVariants(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTariffVariants $selectedAssistanceVariants = null)
    {
        if (is_null($selectedAssistanceVariants) || (is_array($selectedAssistanceVariants) && empty($selectedAssistanceVariants))) {
            unset($this->SelectedAssistanceVariants);
        } else {
            $this->SelectedAssistanceVariants = $selectedAssistanceVariants;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeDefinition
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
