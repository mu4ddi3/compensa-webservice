<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BonusMalusParametersTariffDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BonusMalusParametersTariffDefinition
 * @subpackage Structs
 */
class BonusMalusParametersTariffDefinition extends CommonTariffDefinition
{
    /**
     * The MaxClaimWieghtForRewritingBonusMalus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $MaxClaimWieghtForRewritingBonusMalus;
    /**
     * The MinimalPolicyDaysForAcBonusMalusCalculation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MinimalPolicyDaysForAcBonusMalusCalculation;
    /**
     * The MinimalPolicyDaysForOcBonusMalusCalculation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MinimalPolicyDaysForOcBonusMalusCalculation;
    /**
     * The PolicyTypesForAcVerification
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfModVariant
     */
    public $PolicyTypesForAcVerification;
    /**
     * The PolicyTypesForOcVerification
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMtplVariant
     */
    public $PolicyTypesForOcVerification;
    /**
     * The VerificationYearsNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $VerificationYearsNumber;
    /**
     * Constructor method for BonusMalusParametersTariffDefinition
     * @uses BonusMalusParametersTariffDefinition::setMaxClaimWieghtForRewritingBonusMalus()
     * @uses BonusMalusParametersTariffDefinition::setMinimalPolicyDaysForAcBonusMalusCalculation()
     * @uses BonusMalusParametersTariffDefinition::setMinimalPolicyDaysForOcBonusMalusCalculation()
     * @uses BonusMalusParametersTariffDefinition::setPolicyTypesForAcVerification()
     * @uses BonusMalusParametersTariffDefinition::setPolicyTypesForOcVerification()
     * @uses BonusMalusParametersTariffDefinition::setVerificationYearsNumber()
     * @param float $maxClaimWieghtForRewritingBonusMalus
     * @param int $minimalPolicyDaysForAcBonusMalusCalculation
     * @param int $minimalPolicyDaysForOcBonusMalusCalculation
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfModVariant $policyTypesForAcVerification
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMtplVariant $policyTypesForOcVerification
     * @param int $verificationYearsNumber
     */
    public function __construct($maxClaimWieghtForRewritingBonusMalus = null, $minimalPolicyDaysForAcBonusMalusCalculation = null, $minimalPolicyDaysForOcBonusMalusCalculation = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfModVariant $policyTypesForAcVerification = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMtplVariant $policyTypesForOcVerification = null, $verificationYearsNumber = null)
    {
        $this
            ->setMaxClaimWieghtForRewritingBonusMalus($maxClaimWieghtForRewritingBonusMalus)
            ->setMinimalPolicyDaysForAcBonusMalusCalculation($minimalPolicyDaysForAcBonusMalusCalculation)
            ->setMinimalPolicyDaysForOcBonusMalusCalculation($minimalPolicyDaysForOcBonusMalusCalculation)
            ->setPolicyTypesForAcVerification($policyTypesForAcVerification)
            ->setPolicyTypesForOcVerification($policyTypesForOcVerification)
            ->setVerificationYearsNumber($verificationYearsNumber);
    }
    /**
     * Get MaxClaimWieghtForRewritingBonusMalus value
     * @return float|null
     */
    public function getMaxClaimWieghtForRewritingBonusMalus()
    {
        return $this->MaxClaimWieghtForRewritingBonusMalus;
    }
    /**
     * Set MaxClaimWieghtForRewritingBonusMalus value
     * @param float $maxClaimWieghtForRewritingBonusMalus
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusParametersTariffDefinition
     */
    public function setMaxClaimWieghtForRewritingBonusMalus($maxClaimWieghtForRewritingBonusMalus = null)
    {
        $this->MaxClaimWieghtForRewritingBonusMalus = $maxClaimWieghtForRewritingBonusMalus;
        return $this;
    }
    /**
     * Get MinimalPolicyDaysForAcBonusMalusCalculation value
     * @return int|null
     */
    public function getMinimalPolicyDaysForAcBonusMalusCalculation()
    {
        return $this->MinimalPolicyDaysForAcBonusMalusCalculation;
    }
    /**
     * Set MinimalPolicyDaysForAcBonusMalusCalculation value
     * @param int $minimalPolicyDaysForAcBonusMalusCalculation
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusParametersTariffDefinition
     */
    public function setMinimalPolicyDaysForAcBonusMalusCalculation($minimalPolicyDaysForAcBonusMalusCalculation = null)
    {
        // validation for constraint: int
        if (!is_null($minimalPolicyDaysForAcBonusMalusCalculation) && !is_numeric($minimalPolicyDaysForAcBonusMalusCalculation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minimalPolicyDaysForAcBonusMalusCalculation)), __LINE__);
        }
        $this->MinimalPolicyDaysForAcBonusMalusCalculation = $minimalPolicyDaysForAcBonusMalusCalculation;
        return $this;
    }
    /**
     * Get MinimalPolicyDaysForOcBonusMalusCalculation value
     * @return int|null
     */
    public function getMinimalPolicyDaysForOcBonusMalusCalculation()
    {
        return $this->MinimalPolicyDaysForOcBonusMalusCalculation;
    }
    /**
     * Set MinimalPolicyDaysForOcBonusMalusCalculation value
     * @param int $minimalPolicyDaysForOcBonusMalusCalculation
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusParametersTariffDefinition
     */
    public function setMinimalPolicyDaysForOcBonusMalusCalculation($minimalPolicyDaysForOcBonusMalusCalculation = null)
    {
        // validation for constraint: int
        if (!is_null($minimalPolicyDaysForOcBonusMalusCalculation) && !is_numeric($minimalPolicyDaysForOcBonusMalusCalculation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minimalPolicyDaysForOcBonusMalusCalculation)), __LINE__);
        }
        $this->MinimalPolicyDaysForOcBonusMalusCalculation = $minimalPolicyDaysForOcBonusMalusCalculation;
        return $this;
    }
    /**
     * Get PolicyTypesForAcVerification value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfModVariant|null
     */
    public function getPolicyTypesForAcVerification()
    {
        return isset($this->PolicyTypesForAcVerification) ? $this->PolicyTypesForAcVerification : null;
    }
    /**
     * Set PolicyTypesForAcVerification value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfModVariant $policyTypesForAcVerification
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusParametersTariffDefinition
     */
    public function setPolicyTypesForAcVerification(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfModVariant $policyTypesForAcVerification = null)
    {
        if (is_null($policyTypesForAcVerification) || (is_array($policyTypesForAcVerification) && empty($policyTypesForAcVerification))) {
            unset($this->PolicyTypesForAcVerification);
        } else {
            $this->PolicyTypesForAcVerification = $policyTypesForAcVerification;
        }
        return $this;
    }
    /**
     * Get PolicyTypesForOcVerification value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMtplVariant|null
     */
    public function getPolicyTypesForOcVerification()
    {
        return isset($this->PolicyTypesForOcVerification) ? $this->PolicyTypesForOcVerification : null;
    }
    /**
     * Set PolicyTypesForOcVerification value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMtplVariant $policyTypesForOcVerification
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusParametersTariffDefinition
     */
    public function setPolicyTypesForOcVerification(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMtplVariant $policyTypesForOcVerification = null)
    {
        if (is_null($policyTypesForOcVerification) || (is_array($policyTypesForOcVerification) && empty($policyTypesForOcVerification))) {
            unset($this->PolicyTypesForOcVerification);
        } else {
            $this->PolicyTypesForOcVerification = $policyTypesForOcVerification;
        }
        return $this;
    }
    /**
     * Get VerificationYearsNumber value
     * @return int|null
     */
    public function getVerificationYearsNumber()
    {
        return $this->VerificationYearsNumber;
    }
    /**
     * Set VerificationYearsNumber value
     * @param int $verificationYearsNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusParametersTariffDefinition
     */
    public function setVerificationYearsNumber($verificationYearsNumber = null)
    {
        // validation for constraint: int
        if (!is_null($verificationYearsNumber) && !is_numeric($verificationYearsNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($verificationYearsNumber)), __LINE__);
        }
        $this->VerificationYearsNumber = $verificationYearsNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusParametersTariffDefinition
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
