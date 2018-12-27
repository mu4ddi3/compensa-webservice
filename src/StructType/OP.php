<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OP StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:OP
 * @subpackage Structs
 */
class OP extends MotorRisk
{
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
     * The DriversCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $DriversCount;
    /**
     * The IsAcInsuranceInCompensa
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAcInsuranceInCompensa;
    /**
     * The IsAdditionalDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAdditionalDiscount;
    /**
     * The IsCentralCorrection
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsCentralCorrection;
    /**
     * The IsCivilOrAdministrativeProceeding
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsCivilOrAdministrativeProceeding;
    /**
     * The IsContinuationWithoutClaims
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsContinuationWithoutClaims;
    /**
     * The IsCriminalProceeding
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsCriminalProceeding;
    /**
     * The IsRodzinaInsuranceInCompensaDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsRodzinaInsuranceInCompensaDiscount;
    /**
     * The OpContinuationData
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\OpContinuationData
     */
    public $OpContinuationData;
    /**
     * The OpVariantDriverInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\OpVariantDriverInfo
     */
    public $OpVariantDriverInfo;
    /**
     * The OwnContributionVariant
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OwnContributionVariant;
    /**
     * The RodzinaInsurances
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCompensaRodzinaPolicyInfo
     */
    public $RodzinaInsurances;
    /**
     * The TariffVariant
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TariffVariant;
    /**
     * Constructor method for OP
     * @uses OP::setAdditionalDiscountCode()
     * @uses OP::setAdditionalDiscountPercentageValue()
     * @uses OP::setCentralCorrectionPercentageValue()
     * @uses OP::setDriversCount()
     * @uses OP::setIsAcInsuranceInCompensa()
     * @uses OP::setIsAdditionalDiscount()
     * @uses OP::setIsCentralCorrection()
     * @uses OP::setIsCivilOrAdministrativeProceeding()
     * @uses OP::setIsContinuationWithoutClaims()
     * @uses OP::setIsCriminalProceeding()
     * @uses OP::setIsRodzinaInsuranceInCompensaDiscount()
     * @uses OP::setOpContinuationData()
     * @uses OP::setOpVariantDriverInfo()
     * @uses OP::setOwnContributionVariant()
     * @uses OP::setRodzinaInsurances()
     * @uses OP::setTariffVariant()
     * @param string $additionalDiscountCode
     * @param int $additionalDiscountPercentageValue
     * @param int $centralCorrectionPercentageValue
     * @param int $driversCount
     * @param bool $isAcInsuranceInCompensa
     * @param bool $isAdditionalDiscount
     * @param bool $isCentralCorrection
     * @param bool $isCivilOrAdministrativeProceeding
     * @param bool $isContinuationWithoutClaims
     * @param bool $isCriminalProceeding
     * @param bool $isRodzinaInsuranceInCompensaDiscount
     * @param \Mu4ddi3\Compensa\Webservice\StructType\OpContinuationData $opContinuationData
     * @param \Mu4ddi3\Compensa\Webservice\StructType\OpVariantDriverInfo $opVariantDriverInfo
     * @param string $ownContributionVariant
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCompensaRodzinaPolicyInfo $rodzinaInsurances
     * @param string $tariffVariant
     */
    public function __construct($additionalDiscountCode = null, $additionalDiscountPercentageValue = null, $centralCorrectionPercentageValue = null, $driversCount = null, $isAcInsuranceInCompensa = null, $isAdditionalDiscount = null, $isCentralCorrection = null, $isCivilOrAdministrativeProceeding = null, $isContinuationWithoutClaims = null, $isCriminalProceeding = null, $isRodzinaInsuranceInCompensaDiscount = null, \Mu4ddi3\Compensa\Webservice\StructType\OpContinuationData $opContinuationData = null, \Mu4ddi3\Compensa\Webservice\StructType\OpVariantDriverInfo $opVariantDriverInfo = null, $ownContributionVariant = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCompensaRodzinaPolicyInfo $rodzinaInsurances = null, $tariffVariant = null)
    {
        $this
            ->setAdditionalDiscountCode($additionalDiscountCode)
            ->setAdditionalDiscountPercentageValue($additionalDiscountPercentageValue)
            ->setCentralCorrectionPercentageValue($centralCorrectionPercentageValue)
            ->setDriversCount($driversCount)
            ->setIsAcInsuranceInCompensa($isAcInsuranceInCompensa)
            ->setIsAdditionalDiscount($isAdditionalDiscount)
            ->setIsCentralCorrection($isCentralCorrection)
            ->setIsCivilOrAdministrativeProceeding($isCivilOrAdministrativeProceeding)
            ->setIsContinuationWithoutClaims($isContinuationWithoutClaims)
            ->setIsCriminalProceeding($isCriminalProceeding)
            ->setIsRodzinaInsuranceInCompensaDiscount($isRodzinaInsuranceInCompensaDiscount)
            ->setOpContinuationData($opContinuationData)
            ->setOpVariantDriverInfo($opVariantDriverInfo)
            ->setOwnContributionVariant($ownContributionVariant)
            ->setRodzinaInsurances($rodzinaInsurances)
            ->setTariffVariant($tariffVariant);
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OP
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OP
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OP
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
     * Get DriversCount value
     * @return int|null
     */
    public function getDriversCount()
    {
        return $this->DriversCount;
    }
    /**
     * Set DriversCount value
     * @param int $driversCount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OP
     */
    public function setDriversCount($driversCount = null)
    {
        // validation for constraint: int
        if (!is_null($driversCount) && !is_numeric($driversCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($driversCount)), __LINE__);
        }
        $this->DriversCount = $driversCount;
        return $this;
    }
    /**
     * Get IsAcInsuranceInCompensa value
     * @return bool|null
     */
    public function getIsAcInsuranceInCompensa()
    {
        return $this->IsAcInsuranceInCompensa;
    }
    /**
     * Set IsAcInsuranceInCompensa value
     * @param bool $isAcInsuranceInCompensa
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OP
     */
    public function setIsAcInsuranceInCompensa($isAcInsuranceInCompensa = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAcInsuranceInCompensa) && !is_bool($isAcInsuranceInCompensa)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAcInsuranceInCompensa)), __LINE__);
        }
        $this->IsAcInsuranceInCompensa = $isAcInsuranceInCompensa;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OP
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OP
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
     * Get IsCivilOrAdministrativeProceeding value
     * @return bool|null
     */
    public function getIsCivilOrAdministrativeProceeding()
    {
        return $this->IsCivilOrAdministrativeProceeding;
    }
    /**
     * Set IsCivilOrAdministrativeProceeding value
     * @param bool $isCivilOrAdministrativeProceeding
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OP
     */
    public function setIsCivilOrAdministrativeProceeding($isCivilOrAdministrativeProceeding = null)
    {
        // validation for constraint: boolean
        if (!is_null($isCivilOrAdministrativeProceeding) && !is_bool($isCivilOrAdministrativeProceeding)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isCivilOrAdministrativeProceeding)), __LINE__);
        }
        $this->IsCivilOrAdministrativeProceeding = $isCivilOrAdministrativeProceeding;
        return $this;
    }
    /**
     * Get IsContinuationWithoutClaims value
     * @return bool|null
     */
    public function getIsContinuationWithoutClaims()
    {
        return $this->IsContinuationWithoutClaims;
    }
    /**
     * Set IsContinuationWithoutClaims value
     * @param bool $isContinuationWithoutClaims
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OP
     */
    public function setIsContinuationWithoutClaims($isContinuationWithoutClaims = null)
    {
        // validation for constraint: boolean
        if (!is_null($isContinuationWithoutClaims) && !is_bool($isContinuationWithoutClaims)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isContinuationWithoutClaims)), __LINE__);
        }
        $this->IsContinuationWithoutClaims = $isContinuationWithoutClaims;
        return $this;
    }
    /**
     * Get IsCriminalProceeding value
     * @return bool|null
     */
    public function getIsCriminalProceeding()
    {
        return $this->IsCriminalProceeding;
    }
    /**
     * Set IsCriminalProceeding value
     * @param bool $isCriminalProceeding
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OP
     */
    public function setIsCriminalProceeding($isCriminalProceeding = null)
    {
        // validation for constraint: boolean
        if (!is_null($isCriminalProceeding) && !is_bool($isCriminalProceeding)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isCriminalProceeding)), __LINE__);
        }
        $this->IsCriminalProceeding = $isCriminalProceeding;
        return $this;
    }
    /**
     * Get IsRodzinaInsuranceInCompensaDiscount value
     * @return bool|null
     */
    public function getIsRodzinaInsuranceInCompensaDiscount()
    {
        return $this->IsRodzinaInsuranceInCompensaDiscount;
    }
    /**
     * Set IsRodzinaInsuranceInCompensaDiscount value
     * @param bool $isRodzinaInsuranceInCompensaDiscount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OP
     */
    public function setIsRodzinaInsuranceInCompensaDiscount($isRodzinaInsuranceInCompensaDiscount = null)
    {
        // validation for constraint: boolean
        if (!is_null($isRodzinaInsuranceInCompensaDiscount) && !is_bool($isRodzinaInsuranceInCompensaDiscount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isRodzinaInsuranceInCompensaDiscount)), __LINE__);
        }
        $this->IsRodzinaInsuranceInCompensaDiscount = $isRodzinaInsuranceInCompensaDiscount;
        return $this;
    }
    /**
     * Get OpContinuationData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OpContinuationData|null
     */
    public function getOpContinuationData()
    {
        return isset($this->OpContinuationData) ? $this->OpContinuationData : null;
    }
    /**
     * Set OpContinuationData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\OpContinuationData $opContinuationData
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OP
     */
    public function setOpContinuationData(\Mu4ddi3\Compensa\Webservice\StructType\OpContinuationData $opContinuationData = null)
    {
        if (is_null($opContinuationData) || (is_array($opContinuationData) && empty($opContinuationData))) {
            unset($this->OpContinuationData);
        } else {
            $this->OpContinuationData = $opContinuationData;
        }
        return $this;
    }
    /**
     * Get OpVariantDriverInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OpVariantDriverInfo|null
     */
    public function getOpVariantDriverInfo()
    {
        return isset($this->OpVariantDriverInfo) ? $this->OpVariantDriverInfo : null;
    }
    /**
     * Set OpVariantDriverInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\OpVariantDriverInfo $opVariantDriverInfo
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OP
     */
    public function setOpVariantDriverInfo(\Mu4ddi3\Compensa\Webservice\StructType\OpVariantDriverInfo $opVariantDriverInfo = null)
    {
        if (is_null($opVariantDriverInfo) || (is_array($opVariantDriverInfo) && empty($opVariantDriverInfo))) {
            unset($this->OpVariantDriverInfo);
        } else {
            $this->OpVariantDriverInfo = $opVariantDriverInfo;
        }
        return $this;
    }
    /**
     * Get OwnContributionVariant value
     * @return string|null
     */
    public function getOwnContributionVariant()
    {
        return $this->OwnContributionVariant;
    }
    /**
     * Set OwnContributionVariant value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\OwnContributionVariant::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\OwnContributionVariant::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $ownContributionVariant
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OP
     */
    public function setOwnContributionVariant($ownContributionVariant = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\OwnContributionVariant::valueIsValid($ownContributionVariant)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $ownContributionVariant, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\OwnContributionVariant::getValidValues())), __LINE__);
        }
        $this->OwnContributionVariant = $ownContributionVariant;
        return $this;
    }
    /**
     * Get RodzinaInsurances value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCompensaRodzinaPolicyInfo|null
     */
    public function getRodzinaInsurances()
    {
        return isset($this->RodzinaInsurances) ? $this->RodzinaInsurances : null;
    }
    /**
     * Set RodzinaInsurances value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCompensaRodzinaPolicyInfo $rodzinaInsurances
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OP
     */
    public function setRodzinaInsurances(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCompensaRodzinaPolicyInfo $rodzinaInsurances = null)
    {
        if (is_null($rodzinaInsurances) || (is_array($rodzinaInsurances) && empty($rodzinaInsurances))) {
            unset($this->RodzinaInsurances);
        } else {
            $this->RodzinaInsurances = $rodzinaInsurances;
        }
        return $this;
    }
    /**
     * Get TariffVariant value
     * @return string|null
     */
    public function getTariffVariant()
    {
        return $this->TariffVariant;
    }
    /**
     * Set TariffVariant value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\TariffVariants::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\TariffVariants::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $tariffVariant
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OP
     */
    public function setTariffVariant($tariffVariant = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\TariffVariants::valueIsValid($tariffVariant)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $tariffVariant, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\TariffVariants::getValidValues())), __LINE__);
        }
        $this->TariffVariant = $tariffVariant;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OP
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
