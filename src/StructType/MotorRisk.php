<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MotorRisk StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MotorRisk
 * @subpackage Structs
 */
class MotorRisk extends CompensaRisk
{
    /**
     * The CalculationMode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CalculationMode;
    /**
     * The CapFactor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $CapFactor;
    /**
     * The CollarFactor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $CollarFactor;
    /**
     * The DeltaBM
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $DeltaBM;
    /**
     * The DeltaMAJ
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $DeltaMAJ;
    /**
     * The DeltaWAR
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $DeltaWAR;
    /**
     * The DeltaWU
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $DeltaWU;
    /**
     * The EndDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $EndDate;
    /**
     * The IsCapAndCollarApplicable
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsCapAndCollarApplicable;
    /**
     * The IsCapAndCollarNotAvailable
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsCapAndCollarNotAvailable;
    /**
     * The IsCapApplied
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsCapApplied;
    /**
     * The IsCollarApplied
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsCollarApplied;
    /**
     * The IsInstallmentApplicable
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsInstallmentApplicable;
    /**
     * The IsPremiumMinimalAchieved
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsPremiumMinimalAchieved;
    /**
     * The IsShortTermApplicable
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsShortTermApplicable;
    /**
     * The PremiumBefore
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $PremiumBefore;
    /**
     * The PremiumCapValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $PremiumCapValue;
    /**
     * The PremiumCollarValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $PremiumCollarValue;
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
     * The TariffMode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TariffMode;
    /**
     * Constructor method for MotorRisk
     * @uses MotorRisk::setCalculationMode()
     * @uses MotorRisk::setCapFactor()
     * @uses MotorRisk::setCollarFactor()
     * @uses MotorRisk::setDeltaBM()
     * @uses MotorRisk::setDeltaMAJ()
     * @uses MotorRisk::setDeltaWAR()
     * @uses MotorRisk::setDeltaWU()
     * @uses MotorRisk::setEndDate()
     * @uses MotorRisk::setIsCapAndCollarApplicable()
     * @uses MotorRisk::setIsCapAndCollarNotAvailable()
     * @uses MotorRisk::setIsCapApplied()
     * @uses MotorRisk::setIsCollarApplied()
     * @uses MotorRisk::setIsInstallmentApplicable()
     * @uses MotorRisk::setIsPremiumMinimalAchieved()
     * @uses MotorRisk::setIsShortTermApplicable()
     * @uses MotorRisk::setPremiumBefore()
     * @uses MotorRisk::setPremiumCapValue()
     * @uses MotorRisk::setPremiumCollarValue()
     * @uses MotorRisk::setRiskCode()
     * @uses MotorRisk::setStartDate()
     * @uses MotorRisk::setTariffMode()
     * @param string $calculationMode
     * @param float $capFactor
     * @param float $collarFactor
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaBM
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaMAJ
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaWAR
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaWU
     * @param string $endDate
     * @param bool $isCapAndCollarApplicable
     * @param bool $isCapAndCollarNotAvailable
     * @param bool $isCapApplied
     * @param bool $isCollarApplied
     * @param bool $isInstallmentApplicable
     * @param bool $isPremiumMinimalAchieved
     * @param bool $isShortTermApplicable
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premiumBefore
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premiumCapValue
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premiumCollarValue
     * @param string $riskCode
     * @param string $startDate
     * @param string $tariffMode
     */
    public function __construct($calculationMode = null, $capFactor = null, $collarFactor = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaBM = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaMAJ = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaWAR = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaWU = null, $endDate = null, $isCapAndCollarApplicable = null, $isCapAndCollarNotAvailable = null, $isCapApplied = null, $isCollarApplied = null, $isInstallmentApplicable = null, $isPremiumMinimalAchieved = null, $isShortTermApplicable = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premiumBefore = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premiumCapValue = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premiumCollarValue = null, $riskCode = null, $startDate = null, $tariffMode = null)
    {
        $this
            ->setCalculationMode($calculationMode)
            ->setCapFactor($capFactor)
            ->setCollarFactor($collarFactor)
            ->setDeltaBM($deltaBM)
            ->setDeltaMAJ($deltaMAJ)
            ->setDeltaWAR($deltaWAR)
            ->setDeltaWU($deltaWU)
            ->setEndDate($endDate)
            ->setIsCapAndCollarApplicable($isCapAndCollarApplicable)
            ->setIsCapAndCollarNotAvailable($isCapAndCollarNotAvailable)
            ->setIsCapApplied($isCapApplied)
            ->setIsCollarApplied($isCollarApplied)
            ->setIsInstallmentApplicable($isInstallmentApplicable)
            ->setIsPremiumMinimalAchieved($isPremiumMinimalAchieved)
            ->setIsShortTermApplicable($isShortTermApplicable)
            ->setPremiumBefore($premiumBefore)
            ->setPremiumCapValue($premiumCapValue)
            ->setPremiumCollarValue($premiumCollarValue)
            ->setRiskCode($riskCode)
            ->setStartDate($startDate)
            ->setTariffMode($tariffMode);
    }
    /**
     * Get CalculationMode value
     * @return string|null
     */
    public function getCalculationMode()
    {
        return $this->CalculationMode;
    }
    /**
     * Set CalculationMode value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\CalculationMode::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\CalculationMode::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $calculationMode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorRisk
     */
    public function setCalculationMode($calculationMode = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\CalculationMode::valueIsValid($calculationMode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $calculationMode, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\CalculationMode::getValidValues())), __LINE__);
        }
        $this->CalculationMode = $calculationMode;
        return $this;
    }
    /**
     * Get CapFactor value
     * @return float|null
     */
    public function getCapFactor()
    {
        return $this->CapFactor;
    }
    /**
     * Set CapFactor value
     * @param float $capFactor
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorRisk
     */
    public function setCapFactor($capFactor = null)
    {
        $this->CapFactor = $capFactor;
        return $this;
    }
    /**
     * Get CollarFactor value
     * @return float|null
     */
    public function getCollarFactor()
    {
        return $this->CollarFactor;
    }
    /**
     * Set CollarFactor value
     * @param float $collarFactor
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorRisk
     */
    public function setCollarFactor($collarFactor = null)
    {
        $this->CollarFactor = $collarFactor;
        return $this;
    }
    /**
     * Get DeltaBM value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getDeltaBM()
    {
        return isset($this->DeltaBM) ? $this->DeltaBM : null;
    }
    /**
     * Set DeltaBM value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaBM
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorRisk
     */
    public function setDeltaBM(\Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaBM = null)
    {
        if (is_null($deltaBM) || (is_array($deltaBM) && empty($deltaBM))) {
            unset($this->DeltaBM);
        } else {
            $this->DeltaBM = $deltaBM;
        }
        return $this;
    }
    /**
     * Get DeltaMAJ value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getDeltaMAJ()
    {
        return isset($this->DeltaMAJ) ? $this->DeltaMAJ : null;
    }
    /**
     * Set DeltaMAJ value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaMAJ
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorRisk
     */
    public function setDeltaMAJ(\Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaMAJ = null)
    {
        if (is_null($deltaMAJ) || (is_array($deltaMAJ) && empty($deltaMAJ))) {
            unset($this->DeltaMAJ);
        } else {
            $this->DeltaMAJ = $deltaMAJ;
        }
        return $this;
    }
    /**
     * Get DeltaWAR value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getDeltaWAR()
    {
        return isset($this->DeltaWAR) ? $this->DeltaWAR : null;
    }
    /**
     * Set DeltaWAR value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaWAR
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorRisk
     */
    public function setDeltaWAR(\Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaWAR = null)
    {
        if (is_null($deltaWAR) || (is_array($deltaWAR) && empty($deltaWAR))) {
            unset($this->DeltaWAR);
        } else {
            $this->DeltaWAR = $deltaWAR;
        }
        return $this;
    }
    /**
     * Get DeltaWU value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getDeltaWU()
    {
        return isset($this->DeltaWU) ? $this->DeltaWU : null;
    }
    /**
     * Set DeltaWU value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaWU
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorRisk
     */
    public function setDeltaWU(\Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaWU = null)
    {
        if (is_null($deltaWU) || (is_array($deltaWU) && empty($deltaWU))) {
            unset($this->DeltaWU);
        } else {
            $this->DeltaWU = $deltaWU;
        }
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorRisk
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
     * Get IsCapAndCollarApplicable value
     * @return bool|null
     */
    public function getIsCapAndCollarApplicable()
    {
        return $this->IsCapAndCollarApplicable;
    }
    /**
     * Set IsCapAndCollarApplicable value
     * @param bool $isCapAndCollarApplicable
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorRisk
     */
    public function setIsCapAndCollarApplicable($isCapAndCollarApplicable = null)
    {
        // validation for constraint: boolean
        if (!is_null($isCapAndCollarApplicable) && !is_bool($isCapAndCollarApplicable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isCapAndCollarApplicable)), __LINE__);
        }
        $this->IsCapAndCollarApplicable = $isCapAndCollarApplicable;
        return $this;
    }
    /**
     * Get IsCapAndCollarNotAvailable value
     * @return bool|null
     */
    public function getIsCapAndCollarNotAvailable()
    {
        return $this->IsCapAndCollarNotAvailable;
    }
    /**
     * Set IsCapAndCollarNotAvailable value
     * @param bool $isCapAndCollarNotAvailable
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorRisk
     */
    public function setIsCapAndCollarNotAvailable($isCapAndCollarNotAvailable = null)
    {
        // validation for constraint: boolean
        if (!is_null($isCapAndCollarNotAvailable) && !is_bool($isCapAndCollarNotAvailable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isCapAndCollarNotAvailable)), __LINE__);
        }
        $this->IsCapAndCollarNotAvailable = $isCapAndCollarNotAvailable;
        return $this;
    }
    /**
     * Get IsCapApplied value
     * @return bool|null
     */
    public function getIsCapApplied()
    {
        return $this->IsCapApplied;
    }
    /**
     * Set IsCapApplied value
     * @param bool $isCapApplied
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorRisk
     */
    public function setIsCapApplied($isCapApplied = null)
    {
        // validation for constraint: boolean
        if (!is_null($isCapApplied) && !is_bool($isCapApplied)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isCapApplied)), __LINE__);
        }
        $this->IsCapApplied = $isCapApplied;
        return $this;
    }
    /**
     * Get IsCollarApplied value
     * @return bool|null
     */
    public function getIsCollarApplied()
    {
        return $this->IsCollarApplied;
    }
    /**
     * Set IsCollarApplied value
     * @param bool $isCollarApplied
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorRisk
     */
    public function setIsCollarApplied($isCollarApplied = null)
    {
        // validation for constraint: boolean
        if (!is_null($isCollarApplied) && !is_bool($isCollarApplied)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isCollarApplied)), __LINE__);
        }
        $this->IsCollarApplied = $isCollarApplied;
        return $this;
    }
    /**
     * Get IsInstallmentApplicable value
     * @return bool|null
     */
    public function getIsInstallmentApplicable()
    {
        return $this->IsInstallmentApplicable;
    }
    /**
     * Set IsInstallmentApplicable value
     * @param bool $isInstallmentApplicable
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorRisk
     */
    public function setIsInstallmentApplicable($isInstallmentApplicable = null)
    {
        // validation for constraint: boolean
        if (!is_null($isInstallmentApplicable) && !is_bool($isInstallmentApplicable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isInstallmentApplicable)), __LINE__);
        }
        $this->IsInstallmentApplicable = $isInstallmentApplicable;
        return $this;
    }
    /**
     * Get IsPremiumMinimalAchieved value
     * @return bool|null
     */
    public function getIsPremiumMinimalAchieved()
    {
        return $this->IsPremiumMinimalAchieved;
    }
    /**
     * Set IsPremiumMinimalAchieved value
     * @param bool $isPremiumMinimalAchieved
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorRisk
     */
    public function setIsPremiumMinimalAchieved($isPremiumMinimalAchieved = null)
    {
        // validation for constraint: boolean
        if (!is_null($isPremiumMinimalAchieved) && !is_bool($isPremiumMinimalAchieved)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isPremiumMinimalAchieved)), __LINE__);
        }
        $this->IsPremiumMinimalAchieved = $isPremiumMinimalAchieved;
        return $this;
    }
    /**
     * Get IsShortTermApplicable value
     * @return bool|null
     */
    public function getIsShortTermApplicable()
    {
        return $this->IsShortTermApplicable;
    }
    /**
     * Set IsShortTermApplicable value
     * @param bool $isShortTermApplicable
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorRisk
     */
    public function setIsShortTermApplicable($isShortTermApplicable = null)
    {
        // validation for constraint: boolean
        if (!is_null($isShortTermApplicable) && !is_bool($isShortTermApplicable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isShortTermApplicable)), __LINE__);
        }
        $this->IsShortTermApplicable = $isShortTermApplicable;
        return $this;
    }
    /**
     * Get PremiumBefore value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getPremiumBefore()
    {
        return isset($this->PremiumBefore) ? $this->PremiumBefore : null;
    }
    /**
     * Set PremiumBefore value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premiumBefore
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorRisk
     */
    public function setPremiumBefore(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premiumBefore = null)
    {
        if (is_null($premiumBefore) || (is_array($premiumBefore) && empty($premiumBefore))) {
            unset($this->PremiumBefore);
        } else {
            $this->PremiumBefore = $premiumBefore;
        }
        return $this;
    }
    /**
     * Get PremiumCapValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getPremiumCapValue()
    {
        return isset($this->PremiumCapValue) ? $this->PremiumCapValue : null;
    }
    /**
     * Set PremiumCapValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premiumCapValue
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorRisk
     */
    public function setPremiumCapValue(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premiumCapValue = null)
    {
        if (is_null($premiumCapValue) || (is_array($premiumCapValue) && empty($premiumCapValue))) {
            unset($this->PremiumCapValue);
        } else {
            $this->PremiumCapValue = $premiumCapValue;
        }
        return $this;
    }
    /**
     * Get PremiumCollarValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getPremiumCollarValue()
    {
        return isset($this->PremiumCollarValue) ? $this->PremiumCollarValue : null;
    }
    /**
     * Set PremiumCollarValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premiumCollarValue
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorRisk
     */
    public function setPremiumCollarValue(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premiumCollarValue = null)
    {
        if (is_null($premiumCollarValue) || (is_array($premiumCollarValue) && empty($premiumCollarValue))) {
            unset($this->PremiumCollarValue);
        } else {
            $this->PremiumCollarValue = $premiumCollarValue;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorRisk
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorRisk
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
     * Get TariffMode value
     * @return string|null
     */
    public function getTariffMode()
    {
        return $this->TariffMode;
    }
    /**
     * Set TariffMode value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\TariffMode::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\TariffMode::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $tariffMode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorRisk
     */
    public function setTariffMode($tariffMode = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\TariffMode::valueIsValid($tariffMode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $tariffMode, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\TariffMode::getValidValues())), __LINE__);
        }
        $this->TariffMode = $tariffMode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorRisk
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
