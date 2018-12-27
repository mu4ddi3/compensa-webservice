<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OC StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:OC
 * @subpackage Structs
 */
class OC extends MotorRisk
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
     * The AgriculturalInsurances
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAgriculturalInsurancePolicyInfo
     */
    public $AgriculturalInsurances;
    /**
     * The CentralCorrectionPercentageValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CentralCorrectionPercentageValue;
    /**
     * The DepartmentDirectorDiscountPercentageValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $DepartmentDirectorDiscountPercentageValue;
    /**
     * The GreenCardCertificateNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $GreenCardCertificateNumber;
    /**
     * The GuaranteeInsuranceSumOnPersonTariff
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $GuaranteeInsuranceSumOnPersonTariff;
    /**
     * The GuaranteeInsuranceSumOnPropertyTariff
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $GuaranteeInsuranceSumOnPropertyTariff;
    /**
     * The IsAdditionalDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAdditionalDiscount;
    /**
     * The IsAgriculturalInsuranceDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAgriculturalInsuranceDiscount;
    /**
     * The IsCentralCorrection
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsCentralCorrection;
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
     * The IsOcPremiumCalculationBlocked
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsOcPremiumCalculationBlocked;
    /**
     * The IsPropertyInsuranceDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsPropertyInsuranceDiscount;
    /**
     * The IsSameVehicleWithAcInsurance
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsSameVehicleWithAcInsurance;
    /**
     * The IsUnderwriterDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsUnderwriterDiscount;
    /**
     * The OcContinuationData
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\OcContinuationData
     */
    public $OcContinuationData;
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
     * Constructor method for OC
     * @uses OC::setAdditionalDiscountCode()
     * @uses OC::setAdditionalDiscountPercentageValue()
     * @uses OC::setAgriculturalInsurances()
     * @uses OC::setCentralCorrectionPercentageValue()
     * @uses OC::setDepartmentDirectorDiscountPercentageValue()
     * @uses OC::setGreenCardCertificateNumber()
     * @uses OC::setGuaranteeInsuranceSumOnPersonTariff()
     * @uses OC::setGuaranteeInsuranceSumOnPropertyTariff()
     * @uses OC::setIsAdditionalDiscount()
     * @uses OC::setIsAgriculturalInsuranceDiscount()
     * @uses OC::setIsCentralCorrection()
     * @uses OC::setIsContinuation()
     * @uses OC::setIsDepartmentDirectorDiscount()
     * @uses OC::setIsLifeInsuranceDiscount()
     * @uses OC::setIsNewOrContinuationSelected()
     * @uses OC::setIsOcPremiumCalculationBlocked()
     * @uses OC::setIsPropertyInsuranceDiscount()
     * @uses OC::setIsSameVehicleWithAcInsurance()
     * @uses OC::setIsUnderwriterDiscount()
     * @uses OC::setOcContinuationData()
     * @uses OC::setPropertyInsuranceDiscountPercentageValue()
     * @uses OC::setPropertyInsuranceMaxDiscountPercentageValue()
     * @uses OC::setPropertyInsuranceMinDiscountPercentageValue()
     * @uses OC::setUnderwriterDiscountPercentageValue()
     * @param string $additionalDiscountCode
     * @param int $additionalDiscountPercentageValue
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAgriculturalInsurancePolicyInfo $agriculturalInsurances
     * @param int $centralCorrectionPercentageValue
     * @param int $departmentDirectorDiscountPercentageValue
     * @param string $greenCardCertificateNumber
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $guaranteeInsuranceSumOnPersonTariff
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $guaranteeInsuranceSumOnPropertyTariff
     * @param bool $isAdditionalDiscount
     * @param bool $isAgriculturalInsuranceDiscount
     * @param bool $isCentralCorrection
     * @param bool $isContinuation
     * @param bool $isDepartmentDirectorDiscount
     * @param bool $isLifeInsuranceDiscount
     * @param bool $isNewOrContinuationSelected
     * @param bool $isOcPremiumCalculationBlocked
     * @param bool $isPropertyInsuranceDiscount
     * @param bool $isSameVehicleWithAcInsurance
     * @param bool $isUnderwriterDiscount
     * @param \Mu4ddi3\Compensa\Webservice\StructType\OcContinuationData $ocContinuationData
     * @param int $propertyInsuranceDiscountPercentageValue
     * @param int $propertyInsuranceMaxDiscountPercentageValue
     * @param int $propertyInsuranceMinDiscountPercentageValue
     * @param int $underwriterDiscountPercentageValue
     */
    public function __construct($additionalDiscountCode = null, $additionalDiscountPercentageValue = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAgriculturalInsurancePolicyInfo $agriculturalInsurances = null, $centralCorrectionPercentageValue = null, $departmentDirectorDiscountPercentageValue = null, $greenCardCertificateNumber = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $guaranteeInsuranceSumOnPersonTariff = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $guaranteeInsuranceSumOnPropertyTariff = null, $isAdditionalDiscount = null, $isAgriculturalInsuranceDiscount = null, $isCentralCorrection = null, $isContinuation = null, $isDepartmentDirectorDiscount = null, $isLifeInsuranceDiscount = null, $isNewOrContinuationSelected = null, $isOcPremiumCalculationBlocked = null, $isPropertyInsuranceDiscount = null, $isSameVehicleWithAcInsurance = null, $isUnderwriterDiscount = null, \Mu4ddi3\Compensa\Webservice\StructType\OcContinuationData $ocContinuationData = null, $propertyInsuranceDiscountPercentageValue = null, $propertyInsuranceMaxDiscountPercentageValue = null, $propertyInsuranceMinDiscountPercentageValue = null, $underwriterDiscountPercentageValue = null)
    {
        $this
            ->setAdditionalDiscountCode($additionalDiscountCode)
            ->setAdditionalDiscountPercentageValue($additionalDiscountPercentageValue)
            ->setAgriculturalInsurances($agriculturalInsurances)
            ->setCentralCorrectionPercentageValue($centralCorrectionPercentageValue)
            ->setDepartmentDirectorDiscountPercentageValue($departmentDirectorDiscountPercentageValue)
            ->setGreenCardCertificateNumber($greenCardCertificateNumber)
            ->setGuaranteeInsuranceSumOnPersonTariff($guaranteeInsuranceSumOnPersonTariff)
            ->setGuaranteeInsuranceSumOnPropertyTariff($guaranteeInsuranceSumOnPropertyTariff)
            ->setIsAdditionalDiscount($isAdditionalDiscount)
            ->setIsAgriculturalInsuranceDiscount($isAgriculturalInsuranceDiscount)
            ->setIsCentralCorrection($isCentralCorrection)
            ->setIsContinuation($isContinuation)
            ->setIsDepartmentDirectorDiscount($isDepartmentDirectorDiscount)
            ->setIsLifeInsuranceDiscount($isLifeInsuranceDiscount)
            ->setIsNewOrContinuationSelected($isNewOrContinuationSelected)
            ->setIsOcPremiumCalculationBlocked($isOcPremiumCalculationBlocked)
            ->setIsPropertyInsuranceDiscount($isPropertyInsuranceDiscount)
            ->setIsSameVehicleWithAcInsurance($isSameVehicleWithAcInsurance)
            ->setIsUnderwriterDiscount($isUnderwriterDiscount)
            ->setOcContinuationData($ocContinuationData)
            ->setPropertyInsuranceDiscountPercentageValue($propertyInsuranceDiscountPercentageValue)
            ->setPropertyInsuranceMaxDiscountPercentageValue($propertyInsuranceMaxDiscountPercentageValue)
            ->setPropertyInsuranceMinDiscountPercentageValue($propertyInsuranceMinDiscountPercentageValue)
            ->setUnderwriterDiscountPercentageValue($underwriterDiscountPercentageValue);
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OC
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OC
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
     * Get AgriculturalInsurances value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAgriculturalInsurancePolicyInfo|null
     */
    public function getAgriculturalInsurances()
    {
        return isset($this->AgriculturalInsurances) ? $this->AgriculturalInsurances : null;
    }
    /**
     * Set AgriculturalInsurances value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAgriculturalInsurancePolicyInfo $agriculturalInsurances
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OC
     */
    public function setAgriculturalInsurances(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAgriculturalInsurancePolicyInfo $agriculturalInsurances = null)
    {
        if (is_null($agriculturalInsurances) || (is_array($agriculturalInsurances) && empty($agriculturalInsurances))) {
            unset($this->AgriculturalInsurances);
        } else {
            $this->AgriculturalInsurances = $agriculturalInsurances;
        }
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OC
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OC
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
     * Get GreenCardCertificateNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getGreenCardCertificateNumber()
    {
        return isset($this->GreenCardCertificateNumber) ? $this->GreenCardCertificateNumber : null;
    }
    /**
     * Set GreenCardCertificateNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $greenCardCertificateNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OC
     */
    public function setGreenCardCertificateNumber($greenCardCertificateNumber = null)
    {
        // validation for constraint: string
        if (!is_null($greenCardCertificateNumber) && !is_string($greenCardCertificateNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($greenCardCertificateNumber)), __LINE__);
        }
        if (is_null($greenCardCertificateNumber) || (is_array($greenCardCertificateNumber) && empty($greenCardCertificateNumber))) {
            unset($this->GreenCardCertificateNumber);
        } else {
            $this->GreenCardCertificateNumber = $greenCardCertificateNumber;
        }
        return $this;
    }
    /**
     * Get GuaranteeInsuranceSumOnPersonTariff value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getGuaranteeInsuranceSumOnPersonTariff()
    {
        return isset($this->GuaranteeInsuranceSumOnPersonTariff) ? $this->GuaranteeInsuranceSumOnPersonTariff : null;
    }
    /**
     * Set GuaranteeInsuranceSumOnPersonTariff value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $guaranteeInsuranceSumOnPersonTariff
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OC
     */
    public function setGuaranteeInsuranceSumOnPersonTariff(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $guaranteeInsuranceSumOnPersonTariff = null)
    {
        if (is_null($guaranteeInsuranceSumOnPersonTariff) || (is_array($guaranteeInsuranceSumOnPersonTariff) && empty($guaranteeInsuranceSumOnPersonTariff))) {
            unset($this->GuaranteeInsuranceSumOnPersonTariff);
        } else {
            $this->GuaranteeInsuranceSumOnPersonTariff = $guaranteeInsuranceSumOnPersonTariff;
        }
        return $this;
    }
    /**
     * Get GuaranteeInsuranceSumOnPropertyTariff value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getGuaranteeInsuranceSumOnPropertyTariff()
    {
        return isset($this->GuaranteeInsuranceSumOnPropertyTariff) ? $this->GuaranteeInsuranceSumOnPropertyTariff : null;
    }
    /**
     * Set GuaranteeInsuranceSumOnPropertyTariff value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $guaranteeInsuranceSumOnPropertyTariff
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OC
     */
    public function setGuaranteeInsuranceSumOnPropertyTariff(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $guaranteeInsuranceSumOnPropertyTariff = null)
    {
        if (is_null($guaranteeInsuranceSumOnPropertyTariff) || (is_array($guaranteeInsuranceSumOnPropertyTariff) && empty($guaranteeInsuranceSumOnPropertyTariff))) {
            unset($this->GuaranteeInsuranceSumOnPropertyTariff);
        } else {
            $this->GuaranteeInsuranceSumOnPropertyTariff = $guaranteeInsuranceSumOnPropertyTariff;
        }
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OC
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
     * Get IsAgriculturalInsuranceDiscount value
     * @return bool|null
     */
    public function getIsAgriculturalInsuranceDiscount()
    {
        return $this->IsAgriculturalInsuranceDiscount;
    }
    /**
     * Set IsAgriculturalInsuranceDiscount value
     * @param bool $isAgriculturalInsuranceDiscount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OC
     */
    public function setIsAgriculturalInsuranceDiscount($isAgriculturalInsuranceDiscount = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAgriculturalInsuranceDiscount) && !is_bool($isAgriculturalInsuranceDiscount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAgriculturalInsuranceDiscount)), __LINE__);
        }
        $this->IsAgriculturalInsuranceDiscount = $isAgriculturalInsuranceDiscount;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OC
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OC
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OC
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OC
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OC
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
     * Get IsOcPremiumCalculationBlocked value
     * @return bool|null
     */
    public function getIsOcPremiumCalculationBlocked()
    {
        return $this->IsOcPremiumCalculationBlocked;
    }
    /**
     * Set IsOcPremiumCalculationBlocked value
     * @param bool $isOcPremiumCalculationBlocked
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OC
     */
    public function setIsOcPremiumCalculationBlocked($isOcPremiumCalculationBlocked = null)
    {
        // validation for constraint: boolean
        if (!is_null($isOcPremiumCalculationBlocked) && !is_bool($isOcPremiumCalculationBlocked)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isOcPremiumCalculationBlocked)), __LINE__);
        }
        $this->IsOcPremiumCalculationBlocked = $isOcPremiumCalculationBlocked;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OC
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
     * Get IsSameVehicleWithAcInsurance value
     * @return bool|null
     */
    public function getIsSameVehicleWithAcInsurance()
    {
        return $this->IsSameVehicleWithAcInsurance;
    }
    /**
     * Set IsSameVehicleWithAcInsurance value
     * @param bool $isSameVehicleWithAcInsurance
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OC
     */
    public function setIsSameVehicleWithAcInsurance($isSameVehicleWithAcInsurance = null)
    {
        // validation for constraint: boolean
        if (!is_null($isSameVehicleWithAcInsurance) && !is_bool($isSameVehicleWithAcInsurance)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isSameVehicleWithAcInsurance)), __LINE__);
        }
        $this->IsSameVehicleWithAcInsurance = $isSameVehicleWithAcInsurance;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OC
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
     * Get OcContinuationData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OcContinuationData|null
     */
    public function getOcContinuationData()
    {
        return isset($this->OcContinuationData) ? $this->OcContinuationData : null;
    }
    /**
     * Set OcContinuationData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\OcContinuationData $ocContinuationData
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OC
     */
    public function setOcContinuationData(\Mu4ddi3\Compensa\Webservice\StructType\OcContinuationData $ocContinuationData = null)
    {
        if (is_null($ocContinuationData) || (is_array($ocContinuationData) && empty($ocContinuationData))) {
            unset($this->OcContinuationData);
        } else {
            $this->OcContinuationData = $ocContinuationData;
        }
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OC
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OC
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OC
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OC
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OC
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
