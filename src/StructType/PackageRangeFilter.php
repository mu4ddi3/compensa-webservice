<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PackageRangeFilter StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PackageRangeFilter
 * @subpackage Structs
 */
class PackageRangeFilter extends AbstractStructBase
{
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
     * The IsAssistanceBaza
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAssistanceBaza;
    /**
     * The IsAssistanceSubriskBaza
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAssistanceSubriskBaza;
    /**
     * The IsAssistanceSubriskKomfrot
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAssistanceSubriskKomfrot;
    /**
     * The IsAssistanceSubriskKomfrotPlus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAssistanceSubriskKomfrotPlus;
    /**
     * The IsAssistanceSubriskLux
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAssistanceSubriskLux;
    /**
     * The IsAssistanceSubriskStandard
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAssistanceSubriskStandard;
    /**
     * The IsAssistanceTop
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAssistanceTop;
    /**
     * The IsAssistanceTopNDK
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAssistanceTopNDK;
    /**
     * The IsAssitance
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAssitance;
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
     * The IsClaimSettlementVariantAffiliateWorkshop
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsClaimSettlementVariantAffiliateWorkshop;
    /**
     * The IsClaimSettlementVariantEstimate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsClaimSettlementVariantEstimate;
    /**
     * The IsClaimSettlementVariantService
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsClaimSettlementVariantService;
    /**
     * The IsConstantInsuranceSum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsConstantInsuranceSum;
    /**
     * The IsDeductibleVariantOff
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsDeductibleVariantOff;
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
     * The IsOpDriver
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsOpDriver;
    /**
     * The IsOpVehicle
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsOpVehicle;
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
     * Constructor method for PackageRangeFilter
     * @uses PackageRangeFilter::setIsAc()
     * @uses PackageRangeFilter::setIsAmortizationCancelled()
     * @uses PackageRangeFilter::setIsAssistanceBaza()
     * @uses PackageRangeFilter::setIsAssistanceSubriskBaza()
     * @uses PackageRangeFilter::setIsAssistanceSubriskKomfrot()
     * @uses PackageRangeFilter::setIsAssistanceSubriskKomfrotPlus()
     * @uses PackageRangeFilter::setIsAssistanceSubriskLux()
     * @uses PackageRangeFilter::setIsAssistanceSubriskStandard()
     * @uses PackageRangeFilter::setIsAssistanceTop()
     * @uses PackageRangeFilter::setIsAssistanceTopNDK()
     * @uses PackageRangeFilter::setIsAssitance()
     * @uses PackageRangeFilter::setIsBagaz()
     * @uses PackageRangeFilter::setIsBurglaryExcluded()
     * @uses PackageRangeFilter::setIsClaimSettlementVariantAffiliateWorkshop()
     * @uses PackageRangeFilter::setIsClaimSettlementVariantEstimate()
     * @uses PackageRangeFilter::setIsClaimSettlementVariantService()
     * @uses PackageRangeFilter::setIsConstantInsuranceSum()
     * @uses PackageRangeFilter::setIsDeductibleVariantOff()
     * @uses PackageRangeFilter::setIsDna()
     * @uses PackageRangeFilter::setIsGap()
     * @uses PackageRangeFilter::setIsNnw()
     * @uses PackageRangeFilter::setIsNoConsumptionInsuranceSum()
     * @uses PackageRangeFilter::setIsOc()
     * @uses PackageRangeFilter::setIsOp()
     * @uses PackageRangeFilter::setIsOpDriver()
     * @uses PackageRangeFilter::setIsOpVehicle()
     * @uses PackageRangeFilter::setIsOuzAc()
     * @uses PackageRangeFilter::setIsOuzOc()
     * @uses PackageRangeFilter::setIsPomoc()
     * @uses PackageRangeFilter::setIsSzyby()
     * @param bool $isAc
     * @param bool $isAmortizationCancelled
     * @param bool $isAssistanceBaza
     * @param bool $isAssistanceSubriskBaza
     * @param bool $isAssistanceSubriskKomfrot
     * @param bool $isAssistanceSubriskKomfrotPlus
     * @param bool $isAssistanceSubriskLux
     * @param bool $isAssistanceSubriskStandard
     * @param bool $isAssistanceTop
     * @param bool $isAssistanceTopNDK
     * @param bool $isAssitance
     * @param bool $isBagaz
     * @param bool $isBurglaryExcluded
     * @param bool $isClaimSettlementVariantAffiliateWorkshop
     * @param bool $isClaimSettlementVariantEstimate
     * @param bool $isClaimSettlementVariantService
     * @param bool $isConstantInsuranceSum
     * @param bool $isDeductibleVariantOff
     * @param bool $isDna
     * @param bool $isGap
     * @param bool $isNnw
     * @param bool $isNoConsumptionInsuranceSum
     * @param bool $isOc
     * @param bool $isOp
     * @param bool $isOpDriver
     * @param bool $isOpVehicle
     * @param bool $isOuzAc
     * @param bool $isOuzOc
     * @param bool $isPomoc
     * @param bool $isSzyby
     */
    public function __construct($isAc = null, $isAmortizationCancelled = null, $isAssistanceBaza = null, $isAssistanceSubriskBaza = null, $isAssistanceSubriskKomfrot = null, $isAssistanceSubriskKomfrotPlus = null, $isAssistanceSubriskLux = null, $isAssistanceSubriskStandard = null, $isAssistanceTop = null, $isAssistanceTopNDK = null, $isAssitance = null, $isBagaz = null, $isBurglaryExcluded = null, $isClaimSettlementVariantAffiliateWorkshop = null, $isClaimSettlementVariantEstimate = null, $isClaimSettlementVariantService = null, $isConstantInsuranceSum = null, $isDeductibleVariantOff = null, $isDna = null, $isGap = null, $isNnw = null, $isNoConsumptionInsuranceSum = null, $isOc = null, $isOp = null, $isOpDriver = null, $isOpVehicle = null, $isOuzAc = null, $isOuzOc = null, $isPomoc = null, $isSzyby = null)
    {
        $this
            ->setIsAc($isAc)
            ->setIsAmortizationCancelled($isAmortizationCancelled)
            ->setIsAssistanceBaza($isAssistanceBaza)
            ->setIsAssistanceSubriskBaza($isAssistanceSubriskBaza)
            ->setIsAssistanceSubriskKomfrot($isAssistanceSubriskKomfrot)
            ->setIsAssistanceSubriskKomfrotPlus($isAssistanceSubriskKomfrotPlus)
            ->setIsAssistanceSubriskLux($isAssistanceSubriskLux)
            ->setIsAssistanceSubriskStandard($isAssistanceSubriskStandard)
            ->setIsAssistanceTop($isAssistanceTop)
            ->setIsAssistanceTopNDK($isAssistanceTopNDK)
            ->setIsAssitance($isAssitance)
            ->setIsBagaz($isBagaz)
            ->setIsBurglaryExcluded($isBurglaryExcluded)
            ->setIsClaimSettlementVariantAffiliateWorkshop($isClaimSettlementVariantAffiliateWorkshop)
            ->setIsClaimSettlementVariantEstimate($isClaimSettlementVariantEstimate)
            ->setIsClaimSettlementVariantService($isClaimSettlementVariantService)
            ->setIsConstantInsuranceSum($isConstantInsuranceSum)
            ->setIsDeductibleVariantOff($isDeductibleVariantOff)
            ->setIsDna($isDna)
            ->setIsGap($isGap)
            ->setIsNnw($isNnw)
            ->setIsNoConsumptionInsuranceSum($isNoConsumptionInsuranceSum)
            ->setIsOc($isOc)
            ->setIsOp($isOp)
            ->setIsOpDriver($isOpDriver)
            ->setIsOpVehicle($isOpVehicle)
            ->setIsOuzAc($isOuzAc)
            ->setIsOuzOc($isOuzOc)
            ->setIsPomoc($isPomoc)
            ->setIsSzyby($isSzyby);
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeFilter
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeFilter
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
     * Get IsAssistanceBaza value
     * @return bool|null
     */
    public function getIsAssistanceBaza()
    {
        return $this->IsAssistanceBaza;
    }
    /**
     * Set IsAssistanceBaza value
     * @param bool $isAssistanceBaza
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeFilter
     */
    public function setIsAssistanceBaza($isAssistanceBaza = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAssistanceBaza) && !is_bool($isAssistanceBaza)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAssistanceBaza)), __LINE__);
        }
        $this->IsAssistanceBaza = $isAssistanceBaza;
        return $this;
    }
    /**
     * Get IsAssistanceSubriskBaza value
     * @return bool|null
     */
    public function getIsAssistanceSubriskBaza()
    {
        return $this->IsAssistanceSubriskBaza;
    }
    /**
     * Set IsAssistanceSubriskBaza value
     * @param bool $isAssistanceSubriskBaza
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeFilter
     */
    public function setIsAssistanceSubriskBaza($isAssistanceSubriskBaza = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAssistanceSubriskBaza) && !is_bool($isAssistanceSubriskBaza)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAssistanceSubriskBaza)), __LINE__);
        }
        $this->IsAssistanceSubriskBaza = $isAssistanceSubriskBaza;
        return $this;
    }
    /**
     * Get IsAssistanceSubriskKomfrot value
     * @return bool|null
     */
    public function getIsAssistanceSubriskKomfrot()
    {
        return $this->IsAssistanceSubriskKomfrot;
    }
    /**
     * Set IsAssistanceSubriskKomfrot value
     * @param bool $isAssistanceSubriskKomfrot
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeFilter
     */
    public function setIsAssistanceSubriskKomfrot($isAssistanceSubriskKomfrot = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAssistanceSubriskKomfrot) && !is_bool($isAssistanceSubriskKomfrot)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAssistanceSubriskKomfrot)), __LINE__);
        }
        $this->IsAssistanceSubriskKomfrot = $isAssistanceSubriskKomfrot;
        return $this;
    }
    /**
     * Get IsAssistanceSubriskKomfrotPlus value
     * @return bool|null
     */
    public function getIsAssistanceSubriskKomfrotPlus()
    {
        return $this->IsAssistanceSubriskKomfrotPlus;
    }
    /**
     * Set IsAssistanceSubriskKomfrotPlus value
     * @param bool $isAssistanceSubriskKomfrotPlus
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeFilter
     */
    public function setIsAssistanceSubriskKomfrotPlus($isAssistanceSubriskKomfrotPlus = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAssistanceSubriskKomfrotPlus) && !is_bool($isAssistanceSubriskKomfrotPlus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAssistanceSubriskKomfrotPlus)), __LINE__);
        }
        $this->IsAssistanceSubriskKomfrotPlus = $isAssistanceSubriskKomfrotPlus;
        return $this;
    }
    /**
     * Get IsAssistanceSubriskLux value
     * @return bool|null
     */
    public function getIsAssistanceSubriskLux()
    {
        return $this->IsAssistanceSubriskLux;
    }
    /**
     * Set IsAssistanceSubriskLux value
     * @param bool $isAssistanceSubriskLux
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeFilter
     */
    public function setIsAssistanceSubriskLux($isAssistanceSubriskLux = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAssistanceSubriskLux) && !is_bool($isAssistanceSubriskLux)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAssistanceSubriskLux)), __LINE__);
        }
        $this->IsAssistanceSubriskLux = $isAssistanceSubriskLux;
        return $this;
    }
    /**
     * Get IsAssistanceSubriskStandard value
     * @return bool|null
     */
    public function getIsAssistanceSubriskStandard()
    {
        return $this->IsAssistanceSubriskStandard;
    }
    /**
     * Set IsAssistanceSubriskStandard value
     * @param bool $isAssistanceSubriskStandard
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeFilter
     */
    public function setIsAssistanceSubriskStandard($isAssistanceSubriskStandard = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAssistanceSubriskStandard) && !is_bool($isAssistanceSubriskStandard)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAssistanceSubriskStandard)), __LINE__);
        }
        $this->IsAssistanceSubriskStandard = $isAssistanceSubriskStandard;
        return $this;
    }
    /**
     * Get IsAssistanceTop value
     * @return bool|null
     */
    public function getIsAssistanceTop()
    {
        return $this->IsAssistanceTop;
    }
    /**
     * Set IsAssistanceTop value
     * @param bool $isAssistanceTop
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeFilter
     */
    public function setIsAssistanceTop($isAssistanceTop = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAssistanceTop) && !is_bool($isAssistanceTop)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAssistanceTop)), __LINE__);
        }
        $this->IsAssistanceTop = $isAssistanceTop;
        return $this;
    }
    /**
     * Get IsAssistanceTopNDK value
     * @return bool|null
     */
    public function getIsAssistanceTopNDK()
    {
        return $this->IsAssistanceTopNDK;
    }
    /**
     * Set IsAssistanceTopNDK value
     * @param bool $isAssistanceTopNDK
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeFilter
     */
    public function setIsAssistanceTopNDK($isAssistanceTopNDK = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAssistanceTopNDK) && !is_bool($isAssistanceTopNDK)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAssistanceTopNDK)), __LINE__);
        }
        $this->IsAssistanceTopNDK = $isAssistanceTopNDK;
        return $this;
    }
    /**
     * Get IsAssitance value
     * @return bool|null
     */
    public function getIsAssitance()
    {
        return $this->IsAssitance;
    }
    /**
     * Set IsAssitance value
     * @param bool $isAssitance
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeFilter
     */
    public function setIsAssitance($isAssitance = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAssitance) && !is_bool($isAssitance)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAssitance)), __LINE__);
        }
        $this->IsAssitance = $isAssitance;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeFilter
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeFilter
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
     * Get IsClaimSettlementVariantAffiliateWorkshop value
     * @return bool|null
     */
    public function getIsClaimSettlementVariantAffiliateWorkshop()
    {
        return $this->IsClaimSettlementVariantAffiliateWorkshop;
    }
    /**
     * Set IsClaimSettlementVariantAffiliateWorkshop value
     * @param bool $isClaimSettlementVariantAffiliateWorkshop
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeFilter
     */
    public function setIsClaimSettlementVariantAffiliateWorkshop($isClaimSettlementVariantAffiliateWorkshop = null)
    {
        // validation for constraint: boolean
        if (!is_null($isClaimSettlementVariantAffiliateWorkshop) && !is_bool($isClaimSettlementVariantAffiliateWorkshop)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isClaimSettlementVariantAffiliateWorkshop)), __LINE__);
        }
        $this->IsClaimSettlementVariantAffiliateWorkshop = $isClaimSettlementVariantAffiliateWorkshop;
        return $this;
    }
    /**
     * Get IsClaimSettlementVariantEstimate value
     * @return bool|null
     */
    public function getIsClaimSettlementVariantEstimate()
    {
        return $this->IsClaimSettlementVariantEstimate;
    }
    /**
     * Set IsClaimSettlementVariantEstimate value
     * @param bool $isClaimSettlementVariantEstimate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeFilter
     */
    public function setIsClaimSettlementVariantEstimate($isClaimSettlementVariantEstimate = null)
    {
        // validation for constraint: boolean
        if (!is_null($isClaimSettlementVariantEstimate) && !is_bool($isClaimSettlementVariantEstimate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isClaimSettlementVariantEstimate)), __LINE__);
        }
        $this->IsClaimSettlementVariantEstimate = $isClaimSettlementVariantEstimate;
        return $this;
    }
    /**
     * Get IsClaimSettlementVariantService value
     * @return bool|null
     */
    public function getIsClaimSettlementVariantService()
    {
        return $this->IsClaimSettlementVariantService;
    }
    /**
     * Set IsClaimSettlementVariantService value
     * @param bool $isClaimSettlementVariantService
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeFilter
     */
    public function setIsClaimSettlementVariantService($isClaimSettlementVariantService = null)
    {
        // validation for constraint: boolean
        if (!is_null($isClaimSettlementVariantService) && !is_bool($isClaimSettlementVariantService)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isClaimSettlementVariantService)), __LINE__);
        }
        $this->IsClaimSettlementVariantService = $isClaimSettlementVariantService;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeFilter
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
     * Get IsDeductibleVariantOff value
     * @return bool|null
     */
    public function getIsDeductibleVariantOff()
    {
        return $this->IsDeductibleVariantOff;
    }
    /**
     * Set IsDeductibleVariantOff value
     * @param bool $isDeductibleVariantOff
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeFilter
     */
    public function setIsDeductibleVariantOff($isDeductibleVariantOff = null)
    {
        // validation for constraint: boolean
        if (!is_null($isDeductibleVariantOff) && !is_bool($isDeductibleVariantOff)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isDeductibleVariantOff)), __LINE__);
        }
        $this->IsDeductibleVariantOff = $isDeductibleVariantOff;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeFilter
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeFilter
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeFilter
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeFilter
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeFilter
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeFilter
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
     * Get IsOpDriver value
     * @return bool|null
     */
    public function getIsOpDriver()
    {
        return $this->IsOpDriver;
    }
    /**
     * Set IsOpDriver value
     * @param bool $isOpDriver
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeFilter
     */
    public function setIsOpDriver($isOpDriver = null)
    {
        // validation for constraint: boolean
        if (!is_null($isOpDriver) && !is_bool($isOpDriver)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isOpDriver)), __LINE__);
        }
        $this->IsOpDriver = $isOpDriver;
        return $this;
    }
    /**
     * Get IsOpVehicle value
     * @return bool|null
     */
    public function getIsOpVehicle()
    {
        return $this->IsOpVehicle;
    }
    /**
     * Set IsOpVehicle value
     * @param bool $isOpVehicle
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeFilter
     */
    public function setIsOpVehicle($isOpVehicle = null)
    {
        // validation for constraint: boolean
        if (!is_null($isOpVehicle) && !is_bool($isOpVehicle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isOpVehicle)), __LINE__);
        }
        $this->IsOpVehicle = $isOpVehicle;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeFilter
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeFilter
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeFilter
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeFilter
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeFilter
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
