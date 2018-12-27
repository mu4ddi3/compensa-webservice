<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BonusMalusCalculationInformation StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BonusMalusCalculationInformation
 * @subpackage Structs
 */
class BonusMalusCalculationInformation extends AbstractStructBase
{
    /**
     * The AnalyzedPolicies
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAnalyzedPolicyInformation
     */
    public $AnalyzedPolicies;
    /**
     * The BonusMalusFactorAc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $BonusMalusFactorAc;
    /**
     * The BonusMalusFactorAcFromTariff
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $BonusMalusFactorAcFromTariff;
    /**
     * The BonusMalusFactorOc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $BonusMalusFactorOc;
    /**
     * The ClaimWeightSumAc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $ClaimWeightSumAc;
    /**
     * The ClaimWeightSumOc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $ClaimWeightSumOc;
    /**
     * The ClaimWeights
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimWeightInformation
     */
    public $ClaimWeights;
    /**
     * The CompensaPolicyYearsAc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $CompensaPolicyYearsAc;
    /**
     * The CompensaPolicyYearsOc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $CompensaPolicyYearsOc;
    /**
     * The DiscountForDiscountFactor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $DiscountForDiscountFactor;
    /**
     * The PolicyYearsAc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $PolicyYearsAc;
    /**
     * The PolicyYearsOc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $PolicyYearsOc;
    /**
     * The PreviousBonusMalusFactorAc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $PreviousBonusMalusFactorAc;
    /**
     * The PreviousBonusMalusFactorOc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $PreviousBonusMalusFactorOc;
    /**
     * The RenewalBonusMalusFactorAc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $RenewalBonusMalusFactorAc;
    /**
     * The RenewalBonusMalusFactorOc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $RenewalBonusMalusFactorOc;
    /**
     * Constructor method for BonusMalusCalculationInformation
     * @uses BonusMalusCalculationInformation::setAnalyzedPolicies()
     * @uses BonusMalusCalculationInformation::setBonusMalusFactorAc()
     * @uses BonusMalusCalculationInformation::setBonusMalusFactorAcFromTariff()
     * @uses BonusMalusCalculationInformation::setBonusMalusFactorOc()
     * @uses BonusMalusCalculationInformation::setClaimWeightSumAc()
     * @uses BonusMalusCalculationInformation::setClaimWeightSumOc()
     * @uses BonusMalusCalculationInformation::setClaimWeights()
     * @uses BonusMalusCalculationInformation::setCompensaPolicyYearsAc()
     * @uses BonusMalusCalculationInformation::setCompensaPolicyYearsOc()
     * @uses BonusMalusCalculationInformation::setDiscountForDiscountFactor()
     * @uses BonusMalusCalculationInformation::setPolicyYearsAc()
     * @uses BonusMalusCalculationInformation::setPolicyYearsOc()
     * @uses BonusMalusCalculationInformation::setPreviousBonusMalusFactorAc()
     * @uses BonusMalusCalculationInformation::setPreviousBonusMalusFactorOc()
     * @uses BonusMalusCalculationInformation::setRenewalBonusMalusFactorAc()
     * @uses BonusMalusCalculationInformation::setRenewalBonusMalusFactorOc()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAnalyzedPolicyInformation $analyzedPolicies
     * @param float $bonusMalusFactorAc
     * @param float $bonusMalusFactorAcFromTariff
     * @param float $bonusMalusFactorOc
     * @param float $claimWeightSumAc
     * @param float $claimWeightSumOc
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimWeightInformation $claimWeights
     * @param float $compensaPolicyYearsAc
     * @param float $compensaPolicyYearsOc
     * @param float $discountForDiscountFactor
     * @param float $policyYearsAc
     * @param float $policyYearsOc
     * @param float $previousBonusMalusFactorAc
     * @param float $previousBonusMalusFactorOc
     * @param float $renewalBonusMalusFactorAc
     * @param float $renewalBonusMalusFactorOc
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAnalyzedPolicyInformation $analyzedPolicies = null, $bonusMalusFactorAc = null, $bonusMalusFactorAcFromTariff = null, $bonusMalusFactorOc = null, $claimWeightSumAc = null, $claimWeightSumOc = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimWeightInformation $claimWeights = null, $compensaPolicyYearsAc = null, $compensaPolicyYearsOc = null, $discountForDiscountFactor = null, $policyYearsAc = null, $policyYearsOc = null, $previousBonusMalusFactorAc = null, $previousBonusMalusFactorOc = null, $renewalBonusMalusFactorAc = null, $renewalBonusMalusFactorOc = null)
    {
        $this
            ->setAnalyzedPolicies($analyzedPolicies)
            ->setBonusMalusFactorAc($bonusMalusFactorAc)
            ->setBonusMalusFactorAcFromTariff($bonusMalusFactorAcFromTariff)
            ->setBonusMalusFactorOc($bonusMalusFactorOc)
            ->setClaimWeightSumAc($claimWeightSumAc)
            ->setClaimWeightSumOc($claimWeightSumOc)
            ->setClaimWeights($claimWeights)
            ->setCompensaPolicyYearsAc($compensaPolicyYearsAc)
            ->setCompensaPolicyYearsOc($compensaPolicyYearsOc)
            ->setDiscountForDiscountFactor($discountForDiscountFactor)
            ->setPolicyYearsAc($policyYearsAc)
            ->setPolicyYearsOc($policyYearsOc)
            ->setPreviousBonusMalusFactorAc($previousBonusMalusFactorAc)
            ->setPreviousBonusMalusFactorOc($previousBonusMalusFactorOc)
            ->setRenewalBonusMalusFactorAc($renewalBonusMalusFactorAc)
            ->setRenewalBonusMalusFactorOc($renewalBonusMalusFactorOc);
    }
    /**
     * Get AnalyzedPolicies value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAnalyzedPolicyInformation|null
     */
    public function getAnalyzedPolicies()
    {
        return isset($this->AnalyzedPolicies) ? $this->AnalyzedPolicies : null;
    }
    /**
     * Set AnalyzedPolicies value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAnalyzedPolicyInformation $analyzedPolicies
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusCalculationInformation
     */
    public function setAnalyzedPolicies(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAnalyzedPolicyInformation $analyzedPolicies = null)
    {
        if (is_null($analyzedPolicies) || (is_array($analyzedPolicies) && empty($analyzedPolicies))) {
            unset($this->AnalyzedPolicies);
        } else {
            $this->AnalyzedPolicies = $analyzedPolicies;
        }
        return $this;
    }
    /**
     * Get BonusMalusFactorAc value
     * @return float|null
     */
    public function getBonusMalusFactorAc()
    {
        return $this->BonusMalusFactorAc;
    }
    /**
     * Set BonusMalusFactorAc value
     * @param float $bonusMalusFactorAc
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusCalculationInformation
     */
    public function setBonusMalusFactorAc($bonusMalusFactorAc = null)
    {
        $this->BonusMalusFactorAc = $bonusMalusFactorAc;
        return $this;
    }
    /**
     * Get BonusMalusFactorAcFromTariff value
     * @return float|null
     */
    public function getBonusMalusFactorAcFromTariff()
    {
        return $this->BonusMalusFactorAcFromTariff;
    }
    /**
     * Set BonusMalusFactorAcFromTariff value
     * @param float $bonusMalusFactorAcFromTariff
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusCalculationInformation
     */
    public function setBonusMalusFactorAcFromTariff($bonusMalusFactorAcFromTariff = null)
    {
        $this->BonusMalusFactorAcFromTariff = $bonusMalusFactorAcFromTariff;
        return $this;
    }
    /**
     * Get BonusMalusFactorOc value
     * @return float|null
     */
    public function getBonusMalusFactorOc()
    {
        return $this->BonusMalusFactorOc;
    }
    /**
     * Set BonusMalusFactorOc value
     * @param float $bonusMalusFactorOc
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusCalculationInformation
     */
    public function setBonusMalusFactorOc($bonusMalusFactorOc = null)
    {
        $this->BonusMalusFactorOc = $bonusMalusFactorOc;
        return $this;
    }
    /**
     * Get ClaimWeightSumAc value
     * @return float|null
     */
    public function getClaimWeightSumAc()
    {
        return $this->ClaimWeightSumAc;
    }
    /**
     * Set ClaimWeightSumAc value
     * @param float $claimWeightSumAc
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusCalculationInformation
     */
    public function setClaimWeightSumAc($claimWeightSumAc = null)
    {
        $this->ClaimWeightSumAc = $claimWeightSumAc;
        return $this;
    }
    /**
     * Get ClaimWeightSumOc value
     * @return float|null
     */
    public function getClaimWeightSumOc()
    {
        return $this->ClaimWeightSumOc;
    }
    /**
     * Set ClaimWeightSumOc value
     * @param float $claimWeightSumOc
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusCalculationInformation
     */
    public function setClaimWeightSumOc($claimWeightSumOc = null)
    {
        $this->ClaimWeightSumOc = $claimWeightSumOc;
        return $this;
    }
    /**
     * Get ClaimWeights value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimWeightInformation|null
     */
    public function getClaimWeights()
    {
        return isset($this->ClaimWeights) ? $this->ClaimWeights : null;
    }
    /**
     * Set ClaimWeights value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimWeightInformation $claimWeights
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusCalculationInformation
     */
    public function setClaimWeights(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimWeightInformation $claimWeights = null)
    {
        if (is_null($claimWeights) || (is_array($claimWeights) && empty($claimWeights))) {
            unset($this->ClaimWeights);
        } else {
            $this->ClaimWeights = $claimWeights;
        }
        return $this;
    }
    /**
     * Get CompensaPolicyYearsAc value
     * @return float|null
     */
    public function getCompensaPolicyYearsAc()
    {
        return $this->CompensaPolicyYearsAc;
    }
    /**
     * Set CompensaPolicyYearsAc value
     * @param float $compensaPolicyYearsAc
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusCalculationInformation
     */
    public function setCompensaPolicyYearsAc($compensaPolicyYearsAc = null)
    {
        $this->CompensaPolicyYearsAc = $compensaPolicyYearsAc;
        return $this;
    }
    /**
     * Get CompensaPolicyYearsOc value
     * @return float|null
     */
    public function getCompensaPolicyYearsOc()
    {
        return $this->CompensaPolicyYearsOc;
    }
    /**
     * Set CompensaPolicyYearsOc value
     * @param float $compensaPolicyYearsOc
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusCalculationInformation
     */
    public function setCompensaPolicyYearsOc($compensaPolicyYearsOc = null)
    {
        $this->CompensaPolicyYearsOc = $compensaPolicyYearsOc;
        return $this;
    }
    /**
     * Get DiscountForDiscountFactor value
     * @return float|null
     */
    public function getDiscountForDiscountFactor()
    {
        return $this->DiscountForDiscountFactor;
    }
    /**
     * Set DiscountForDiscountFactor value
     * @param float $discountForDiscountFactor
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusCalculationInformation
     */
    public function setDiscountForDiscountFactor($discountForDiscountFactor = null)
    {
        $this->DiscountForDiscountFactor = $discountForDiscountFactor;
        return $this;
    }
    /**
     * Get PolicyYearsAc value
     * @return float|null
     */
    public function getPolicyYearsAc()
    {
        return $this->PolicyYearsAc;
    }
    /**
     * Set PolicyYearsAc value
     * @param float $policyYearsAc
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusCalculationInformation
     */
    public function setPolicyYearsAc($policyYearsAc = null)
    {
        $this->PolicyYearsAc = $policyYearsAc;
        return $this;
    }
    /**
     * Get PolicyYearsOc value
     * @return float|null
     */
    public function getPolicyYearsOc()
    {
        return $this->PolicyYearsOc;
    }
    /**
     * Set PolicyYearsOc value
     * @param float $policyYearsOc
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusCalculationInformation
     */
    public function setPolicyYearsOc($policyYearsOc = null)
    {
        $this->PolicyYearsOc = $policyYearsOc;
        return $this;
    }
    /**
     * Get PreviousBonusMalusFactorAc value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getPreviousBonusMalusFactorAc()
    {
        return isset($this->PreviousBonusMalusFactorAc) ? $this->PreviousBonusMalusFactorAc : null;
    }
    /**
     * Set PreviousBonusMalusFactorAc value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $previousBonusMalusFactorAc
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusCalculationInformation
     */
    public function setPreviousBonusMalusFactorAc($previousBonusMalusFactorAc = null)
    {
        if (is_null($previousBonusMalusFactorAc) || (is_array($previousBonusMalusFactorAc) && empty($previousBonusMalusFactorAc))) {
            unset($this->PreviousBonusMalusFactorAc);
        } else {
            $this->PreviousBonusMalusFactorAc = $previousBonusMalusFactorAc;
        }
        return $this;
    }
    /**
     * Get PreviousBonusMalusFactorOc value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getPreviousBonusMalusFactorOc()
    {
        return isset($this->PreviousBonusMalusFactorOc) ? $this->PreviousBonusMalusFactorOc : null;
    }
    /**
     * Set PreviousBonusMalusFactorOc value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $previousBonusMalusFactorOc
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusCalculationInformation
     */
    public function setPreviousBonusMalusFactorOc($previousBonusMalusFactorOc = null)
    {
        if (is_null($previousBonusMalusFactorOc) || (is_array($previousBonusMalusFactorOc) && empty($previousBonusMalusFactorOc))) {
            unset($this->PreviousBonusMalusFactorOc);
        } else {
            $this->PreviousBonusMalusFactorOc = $previousBonusMalusFactorOc;
        }
        return $this;
    }
    /**
     * Get RenewalBonusMalusFactorAc value
     * @return float|null
     */
    public function getRenewalBonusMalusFactorAc()
    {
        return $this->RenewalBonusMalusFactorAc;
    }
    /**
     * Set RenewalBonusMalusFactorAc value
     * @param float $renewalBonusMalusFactorAc
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusCalculationInformation
     */
    public function setRenewalBonusMalusFactorAc($renewalBonusMalusFactorAc = null)
    {
        $this->RenewalBonusMalusFactorAc = $renewalBonusMalusFactorAc;
        return $this;
    }
    /**
     * Get RenewalBonusMalusFactorOc value
     * @return float|null
     */
    public function getRenewalBonusMalusFactorOc()
    {
        return $this->RenewalBonusMalusFactorOc;
    }
    /**
     * Set RenewalBonusMalusFactorOc value
     * @param float $renewalBonusMalusFactorOc
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusCalculationInformation
     */
    public function setRenewalBonusMalusFactorOc($renewalBonusMalusFactorOc = null)
    {
        $this->RenewalBonusMalusFactorOc = $renewalBonusMalusFactorOc;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusCalculationInformation
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
