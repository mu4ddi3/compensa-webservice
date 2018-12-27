<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RiskToChooseAvailabilityRule StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RiskToChooseAvailabilityRule
 * @subpackage Structs
 */
class RiskToChooseAvailabilityRule extends AbstractStructBase
{
    /**
     * The ExcludedRisks
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRiskCode
     */
    public $ExcludedRisks;
    /**
     * The ExcludedVehicleTypes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVehicleType
     */
    public $ExcludedVehicleTypes;
    /**
     * The IsAgreementForBMVerificationRequired
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAgreementForBMVerificationRequired;
    /**
     * The IsBmAcRequired
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsBmAcRequired;
    /**
     * The IsBmOcRequired
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsBmOcRequired;
    /**
     * The IsBurglaryExcludedAllowed
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $IsBurglaryExcludedAllowed;
    /**
     * The IsShortTermAllowed
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsShortTermAllowed;
    /**
     * The IsUnusualVehicleUsageAllowed
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsUnusualVehicleUsageAllowed;
    /**
     * The IsVehicleFromAdditionalDictionaryExcluded
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsVehicleFromAdditionalDictionaryExcluded;
    /**
     * The MaxAcInsuranceSums
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfKeyValueOfintMoneyAmountStoragesrtdnm5u
     */
    public $MaxAcInsuranceSums;
    /**
     * The MaxVehicleAge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MaxVehicleAge;
    /**
     * The MinBmCorrectionFactor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $MinBmCorrectionFactor;
    /**
     * The RequiredRisks
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRiskCode
     */
    public $RequiredRisks;
    /**
     * The RiskCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RiskCode;
    /**
     * The VehicleGroupIds
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint
     */
    public $VehicleGroupIds;
    /**
     * Constructor method for RiskToChooseAvailabilityRule
     * @uses RiskToChooseAvailabilityRule::setExcludedRisks()
     * @uses RiskToChooseAvailabilityRule::setExcludedVehicleTypes()
     * @uses RiskToChooseAvailabilityRule::setIsAgreementForBMVerificationRequired()
     * @uses RiskToChooseAvailabilityRule::setIsBmAcRequired()
     * @uses RiskToChooseAvailabilityRule::setIsBmOcRequired()
     * @uses RiskToChooseAvailabilityRule::setIsBurglaryExcludedAllowed()
     * @uses RiskToChooseAvailabilityRule::setIsShortTermAllowed()
     * @uses RiskToChooseAvailabilityRule::setIsUnusualVehicleUsageAllowed()
     * @uses RiskToChooseAvailabilityRule::setIsVehicleFromAdditionalDictionaryExcluded()
     * @uses RiskToChooseAvailabilityRule::setMaxAcInsuranceSums()
     * @uses RiskToChooseAvailabilityRule::setMaxVehicleAge()
     * @uses RiskToChooseAvailabilityRule::setMinBmCorrectionFactor()
     * @uses RiskToChooseAvailabilityRule::setRequiredRisks()
     * @uses RiskToChooseAvailabilityRule::setRiskCode()
     * @uses RiskToChooseAvailabilityRule::setVehicleGroupIds()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRiskCode $excludedRisks
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVehicleType $excludedVehicleTypes
     * @param bool $isAgreementForBMVerificationRequired
     * @param bool $isBmAcRequired
     * @param bool $isBmOcRequired
     * @param bool $isBurglaryExcludedAllowed
     * @param bool $isShortTermAllowed
     * @param bool $isUnusualVehicleUsageAllowed
     * @param bool $isVehicleFromAdditionalDictionaryExcluded
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfKeyValueOfintMoneyAmountStoragesrtdnm5u $maxAcInsuranceSums
     * @param int $maxVehicleAge
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $minBmCorrectionFactor
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRiskCode $requiredRisks
     * @param string $riskCode
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint $vehicleGroupIds
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRiskCode $excludedRisks = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVehicleType $excludedVehicleTypes = null, $isAgreementForBMVerificationRequired = null, $isBmAcRequired = null, $isBmOcRequired = null, $isBurglaryExcludedAllowed = null, $isShortTermAllowed = null, $isUnusualVehicleUsageAllowed = null, $isVehicleFromAdditionalDictionaryExcluded = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfKeyValueOfintMoneyAmountStoragesrtdnm5u $maxAcInsuranceSums = null, $maxVehicleAge = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $minBmCorrectionFactor = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRiskCode $requiredRisks = null, $riskCode = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint $vehicleGroupIds = null)
    {
        $this
            ->setExcludedRisks($excludedRisks)
            ->setExcludedVehicleTypes($excludedVehicleTypes)
            ->setIsAgreementForBMVerificationRequired($isAgreementForBMVerificationRequired)
            ->setIsBmAcRequired($isBmAcRequired)
            ->setIsBmOcRequired($isBmOcRequired)
            ->setIsBurglaryExcludedAllowed($isBurglaryExcludedAllowed)
            ->setIsShortTermAllowed($isShortTermAllowed)
            ->setIsUnusualVehicleUsageAllowed($isUnusualVehicleUsageAllowed)
            ->setIsVehicleFromAdditionalDictionaryExcluded($isVehicleFromAdditionalDictionaryExcluded)
            ->setMaxAcInsuranceSums($maxAcInsuranceSums)
            ->setMaxVehicleAge($maxVehicleAge)
            ->setMinBmCorrectionFactor($minBmCorrectionFactor)
            ->setRequiredRisks($requiredRisks)
            ->setRiskCode($riskCode)
            ->setVehicleGroupIds($vehicleGroupIds);
    }
    /**
     * Get ExcludedRisks value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRiskCode|null
     */
    public function getExcludedRisks()
    {
        return isset($this->ExcludedRisks) ? $this->ExcludedRisks : null;
    }
    /**
     * Set ExcludedRisks value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRiskCode $excludedRisks
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskToChooseAvailabilityRule
     */
    public function setExcludedRisks(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRiskCode $excludedRisks = null)
    {
        if (is_null($excludedRisks) || (is_array($excludedRisks) && empty($excludedRisks))) {
            unset($this->ExcludedRisks);
        } else {
            $this->ExcludedRisks = $excludedRisks;
        }
        return $this;
    }
    /**
     * Get ExcludedVehicleTypes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVehicleType|null
     */
    public function getExcludedVehicleTypes()
    {
        return isset($this->ExcludedVehicleTypes) ? $this->ExcludedVehicleTypes : null;
    }
    /**
     * Set ExcludedVehicleTypes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVehicleType $excludedVehicleTypes
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskToChooseAvailabilityRule
     */
    public function setExcludedVehicleTypes(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVehicleType $excludedVehicleTypes = null)
    {
        if (is_null($excludedVehicleTypes) || (is_array($excludedVehicleTypes) && empty($excludedVehicleTypes))) {
            unset($this->ExcludedVehicleTypes);
        } else {
            $this->ExcludedVehicleTypes = $excludedVehicleTypes;
        }
        return $this;
    }
    /**
     * Get IsAgreementForBMVerificationRequired value
     * @return bool|null
     */
    public function getIsAgreementForBMVerificationRequired()
    {
        return $this->IsAgreementForBMVerificationRequired;
    }
    /**
     * Set IsAgreementForBMVerificationRequired value
     * @param bool $isAgreementForBMVerificationRequired
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskToChooseAvailabilityRule
     */
    public function setIsAgreementForBMVerificationRequired($isAgreementForBMVerificationRequired = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAgreementForBMVerificationRequired) && !is_bool($isAgreementForBMVerificationRequired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAgreementForBMVerificationRequired)), __LINE__);
        }
        $this->IsAgreementForBMVerificationRequired = $isAgreementForBMVerificationRequired;
        return $this;
    }
    /**
     * Get IsBmAcRequired value
     * @return bool|null
     */
    public function getIsBmAcRequired()
    {
        return $this->IsBmAcRequired;
    }
    /**
     * Set IsBmAcRequired value
     * @param bool $isBmAcRequired
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskToChooseAvailabilityRule
     */
    public function setIsBmAcRequired($isBmAcRequired = null)
    {
        // validation for constraint: boolean
        if (!is_null($isBmAcRequired) && !is_bool($isBmAcRequired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isBmAcRequired)), __LINE__);
        }
        $this->IsBmAcRequired = $isBmAcRequired;
        return $this;
    }
    /**
     * Get IsBmOcRequired value
     * @return bool|null
     */
    public function getIsBmOcRequired()
    {
        return $this->IsBmOcRequired;
    }
    /**
     * Set IsBmOcRequired value
     * @param bool $isBmOcRequired
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskToChooseAvailabilityRule
     */
    public function setIsBmOcRequired($isBmOcRequired = null)
    {
        // validation for constraint: boolean
        if (!is_null($isBmOcRequired) && !is_bool($isBmOcRequired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isBmOcRequired)), __LINE__);
        }
        $this->IsBmOcRequired = $isBmOcRequired;
        return $this;
    }
    /**
     * Get IsBurglaryExcludedAllowed value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsBurglaryExcludedAllowed()
    {
        return isset($this->IsBurglaryExcludedAllowed) ? $this->IsBurglaryExcludedAllowed : null;
    }
    /**
     * Set IsBurglaryExcludedAllowed value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isBurglaryExcludedAllowed
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskToChooseAvailabilityRule
     */
    public function setIsBurglaryExcludedAllowed($isBurglaryExcludedAllowed = null)
    {
        // validation for constraint: boolean
        if (!is_null($isBurglaryExcludedAllowed) && !is_bool($isBurglaryExcludedAllowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isBurglaryExcludedAllowed)), __LINE__);
        }
        if (is_null($isBurglaryExcludedAllowed) || (is_array($isBurglaryExcludedAllowed) && empty($isBurglaryExcludedAllowed))) {
            unset($this->IsBurglaryExcludedAllowed);
        } else {
            $this->IsBurglaryExcludedAllowed = $isBurglaryExcludedAllowed;
        }
        return $this;
    }
    /**
     * Get IsShortTermAllowed value
     * @return bool|null
     */
    public function getIsShortTermAllowed()
    {
        return $this->IsShortTermAllowed;
    }
    /**
     * Set IsShortTermAllowed value
     * @param bool $isShortTermAllowed
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskToChooseAvailabilityRule
     */
    public function setIsShortTermAllowed($isShortTermAllowed = null)
    {
        // validation for constraint: boolean
        if (!is_null($isShortTermAllowed) && !is_bool($isShortTermAllowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isShortTermAllowed)), __LINE__);
        }
        $this->IsShortTermAllowed = $isShortTermAllowed;
        return $this;
    }
    /**
     * Get IsUnusualVehicleUsageAllowed value
     * @return bool|null
     */
    public function getIsUnusualVehicleUsageAllowed()
    {
        return $this->IsUnusualVehicleUsageAllowed;
    }
    /**
     * Set IsUnusualVehicleUsageAllowed value
     * @param bool $isUnusualVehicleUsageAllowed
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskToChooseAvailabilityRule
     */
    public function setIsUnusualVehicleUsageAllowed($isUnusualVehicleUsageAllowed = null)
    {
        // validation for constraint: boolean
        if (!is_null($isUnusualVehicleUsageAllowed) && !is_bool($isUnusualVehicleUsageAllowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isUnusualVehicleUsageAllowed)), __LINE__);
        }
        $this->IsUnusualVehicleUsageAllowed = $isUnusualVehicleUsageAllowed;
        return $this;
    }
    /**
     * Get IsVehicleFromAdditionalDictionaryExcluded value
     * @return bool|null
     */
    public function getIsVehicleFromAdditionalDictionaryExcluded()
    {
        return $this->IsVehicleFromAdditionalDictionaryExcluded;
    }
    /**
     * Set IsVehicleFromAdditionalDictionaryExcluded value
     * @param bool $isVehicleFromAdditionalDictionaryExcluded
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskToChooseAvailabilityRule
     */
    public function setIsVehicleFromAdditionalDictionaryExcluded($isVehicleFromAdditionalDictionaryExcluded = null)
    {
        // validation for constraint: boolean
        if (!is_null($isVehicleFromAdditionalDictionaryExcluded) && !is_bool($isVehicleFromAdditionalDictionaryExcluded)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isVehicleFromAdditionalDictionaryExcluded)), __LINE__);
        }
        $this->IsVehicleFromAdditionalDictionaryExcluded = $isVehicleFromAdditionalDictionaryExcluded;
        return $this;
    }
    /**
     * Get MaxAcInsuranceSums value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfKeyValueOfintMoneyAmountStoragesrtdnm5u|null
     */
    public function getMaxAcInsuranceSums()
    {
        return isset($this->MaxAcInsuranceSums) ? $this->MaxAcInsuranceSums : null;
    }
    /**
     * Set MaxAcInsuranceSums value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfKeyValueOfintMoneyAmountStoragesrtdnm5u $maxAcInsuranceSums
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskToChooseAvailabilityRule
     */
    public function setMaxAcInsuranceSums(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfKeyValueOfintMoneyAmountStoragesrtdnm5u $maxAcInsuranceSums = null)
    {
        if (is_null($maxAcInsuranceSums) || (is_array($maxAcInsuranceSums) && empty($maxAcInsuranceSums))) {
            unset($this->MaxAcInsuranceSums);
        } else {
            $this->MaxAcInsuranceSums = $maxAcInsuranceSums;
        }
        return $this;
    }
    /**
     * Get MaxVehicleAge value
     * @return int|null
     */
    public function getMaxVehicleAge()
    {
        return $this->MaxVehicleAge;
    }
    /**
     * Set MaxVehicleAge value
     * @param int $maxVehicleAge
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskToChooseAvailabilityRule
     */
    public function setMaxVehicleAge($maxVehicleAge = null)
    {
        // validation for constraint: int
        if (!is_null($maxVehicleAge) && !is_numeric($maxVehicleAge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxVehicleAge)), __LINE__);
        }
        $this->MaxVehicleAge = $maxVehicleAge;
        return $this;
    }
    /**
     * Get MinBmCorrectionFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getMinBmCorrectionFactor()
    {
        return isset($this->MinBmCorrectionFactor) ? $this->MinBmCorrectionFactor : null;
    }
    /**
     * Set MinBmCorrectionFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $minBmCorrectionFactor
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskToChooseAvailabilityRule
     */
    public function setMinBmCorrectionFactor(\Mu4ddi3\Compensa\Webservice\StructType\Factor $minBmCorrectionFactor = null)
    {
        if (is_null($minBmCorrectionFactor) || (is_array($minBmCorrectionFactor) && empty($minBmCorrectionFactor))) {
            unset($this->MinBmCorrectionFactor);
        } else {
            $this->MinBmCorrectionFactor = $minBmCorrectionFactor;
        }
        return $this;
    }
    /**
     * Get RequiredRisks value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRiskCode|null
     */
    public function getRequiredRisks()
    {
        return isset($this->RequiredRisks) ? $this->RequiredRisks : null;
    }
    /**
     * Set RequiredRisks value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRiskCode $requiredRisks
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskToChooseAvailabilityRule
     */
    public function setRequiredRisks(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRiskCode $requiredRisks = null)
    {
        if (is_null($requiredRisks) || (is_array($requiredRisks) && empty($requiredRisks))) {
            unset($this->RequiredRisks);
        } else {
            $this->RequiredRisks = $requiredRisks;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskToChooseAvailabilityRule
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
     * Get VehicleGroupIds value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint|null
     */
    public function getVehicleGroupIds()
    {
        return isset($this->VehicleGroupIds) ? $this->VehicleGroupIds : null;
    }
    /**
     * Set VehicleGroupIds value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint $vehicleGroupIds
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskToChooseAvailabilityRule
     */
    public function setVehicleGroupIds(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint $vehicleGroupIds = null)
    {
        if (is_null($vehicleGroupIds) || (is_array($vehicleGroupIds) && empty($vehicleGroupIds))) {
            unset($this->VehicleGroupIds);
        } else {
            $this->VehicleGroupIds = $vehicleGroupIds;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskToChooseAvailabilityRule
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
