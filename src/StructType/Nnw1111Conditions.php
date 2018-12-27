<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Nnw1111Conditions StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Nnw1111Conditions
 * @subpackage Structs
 */
class Nnw1111Conditions extends ProductConditions
{
    /**
     * The AdditionalClause
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\AdditionalClauseCondition
     */
    public $AdditionalClause;
    /**
     * The Continuation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ContinuationCondition
     */
    public $Continuation;
    /**
     * The InsuranceForm
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\InsuranceFormCondition
     */
    public $InsuranceForm;
    /**
     * The InsuredPeople
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\InsuredPeopleCondition
     */
    public $InsuredPeople;
    /**
     * The IntegralFranchise
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\IntegralFranchiseCondition
     */
    public $IntegralFranchise;
    /**
     * The Progression
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ProgressionCondition
     */
    public $Progression;
    /**
     * The ProgressionForSeriousInjuries
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ProgressionCondition
     */
    public $ProgressionForSeriousInjuries;
    /**
     * The SeriousInjury
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\SeriousInjuryCondition
     */
    public $SeriousInjury;
    /**
     * Constructor method for Nnw1111Conditions
     * @uses Nnw1111Conditions::setAdditionalClause()
     * @uses Nnw1111Conditions::setContinuation()
     * @uses Nnw1111Conditions::setInsuranceForm()
     * @uses Nnw1111Conditions::setInsuredPeople()
     * @uses Nnw1111Conditions::setIntegralFranchise()
     * @uses Nnw1111Conditions::setProgression()
     * @uses Nnw1111Conditions::setProgressionForSeriousInjuries()
     * @uses Nnw1111Conditions::setSeriousInjury()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AdditionalClauseCondition $additionalClause
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ContinuationCondition $continuation
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InsuranceFormCondition $insuranceForm
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InsuredPeopleCondition $insuredPeople
     * @param \Mu4ddi3\Compensa\Webservice\StructType\IntegralFranchiseCondition $integralFranchise
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ProgressionCondition $progression
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ProgressionCondition $progressionForSeriousInjuries
     * @param \Mu4ddi3\Compensa\Webservice\StructType\SeriousInjuryCondition $seriousInjury
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\AdditionalClauseCondition $additionalClause = null, \Mu4ddi3\Compensa\Webservice\StructType\ContinuationCondition $continuation = null, \Mu4ddi3\Compensa\Webservice\StructType\InsuranceFormCondition $insuranceForm = null, \Mu4ddi3\Compensa\Webservice\StructType\InsuredPeopleCondition $insuredPeople = null, \Mu4ddi3\Compensa\Webservice\StructType\IntegralFranchiseCondition $integralFranchise = null, \Mu4ddi3\Compensa\Webservice\StructType\ProgressionCondition $progression = null, \Mu4ddi3\Compensa\Webservice\StructType\ProgressionCondition $progressionForSeriousInjuries = null, \Mu4ddi3\Compensa\Webservice\StructType\SeriousInjuryCondition $seriousInjury = null)
    {
        $this
            ->setAdditionalClause($additionalClause)
            ->setContinuation($continuation)
            ->setInsuranceForm($insuranceForm)
            ->setInsuredPeople($insuredPeople)
            ->setIntegralFranchise($integralFranchise)
            ->setProgression($progression)
            ->setProgressionForSeriousInjuries($progressionForSeriousInjuries)
            ->setSeriousInjury($seriousInjury);
    }
    /**
     * Get AdditionalClause value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalClauseCondition|null
     */
    public function getAdditionalClause()
    {
        return isset($this->AdditionalClause) ? $this->AdditionalClause : null;
    }
    /**
     * Set AdditionalClause value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AdditionalClauseCondition $additionalClause
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Nnw1111Conditions
     */
    public function setAdditionalClause(\Mu4ddi3\Compensa\Webservice\StructType\AdditionalClauseCondition $additionalClause = null)
    {
        if (is_null($additionalClause) || (is_array($additionalClause) && empty($additionalClause))) {
            unset($this->AdditionalClause);
        } else {
            $this->AdditionalClause = $additionalClause;
        }
        return $this;
    }
    /**
     * Get Continuation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ContinuationCondition|null
     */
    public function getContinuation()
    {
        return isset($this->Continuation) ? $this->Continuation : null;
    }
    /**
     * Set Continuation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ContinuationCondition $continuation
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Nnw1111Conditions
     */
    public function setContinuation(\Mu4ddi3\Compensa\Webservice\StructType\ContinuationCondition $continuation = null)
    {
        if (is_null($continuation) || (is_array($continuation) && empty($continuation))) {
            unset($this->Continuation);
        } else {
            $this->Continuation = $continuation;
        }
        return $this;
    }
    /**
     * Get InsuranceForm value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuranceFormCondition|null
     */
    public function getInsuranceForm()
    {
        return isset($this->InsuranceForm) ? $this->InsuranceForm : null;
    }
    /**
     * Set InsuranceForm value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InsuranceFormCondition $insuranceForm
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Nnw1111Conditions
     */
    public function setInsuranceForm(\Mu4ddi3\Compensa\Webservice\StructType\InsuranceFormCondition $insuranceForm = null)
    {
        if (is_null($insuranceForm) || (is_array($insuranceForm) && empty($insuranceForm))) {
            unset($this->InsuranceForm);
        } else {
            $this->InsuranceForm = $insuranceForm;
        }
        return $this;
    }
    /**
     * Get InsuredPeople value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuredPeopleCondition|null
     */
    public function getInsuredPeople()
    {
        return isset($this->InsuredPeople) ? $this->InsuredPeople : null;
    }
    /**
     * Set InsuredPeople value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InsuredPeopleCondition $insuredPeople
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Nnw1111Conditions
     */
    public function setInsuredPeople(\Mu4ddi3\Compensa\Webservice\StructType\InsuredPeopleCondition $insuredPeople = null)
    {
        if (is_null($insuredPeople) || (is_array($insuredPeople) && empty($insuredPeople))) {
            unset($this->InsuredPeople);
        } else {
            $this->InsuredPeople = $insuredPeople;
        }
        return $this;
    }
    /**
     * Get IntegralFranchise value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\IntegralFranchiseCondition|null
     */
    public function getIntegralFranchise()
    {
        return isset($this->IntegralFranchise) ? $this->IntegralFranchise : null;
    }
    /**
     * Set IntegralFranchise value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\IntegralFranchiseCondition $integralFranchise
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Nnw1111Conditions
     */
    public function setIntegralFranchise(\Mu4ddi3\Compensa\Webservice\StructType\IntegralFranchiseCondition $integralFranchise = null)
    {
        if (is_null($integralFranchise) || (is_array($integralFranchise) && empty($integralFranchise))) {
            unset($this->IntegralFranchise);
        } else {
            $this->IntegralFranchise = $integralFranchise;
        }
        return $this;
    }
    /**
     * Get Progression value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ProgressionCondition|null
     */
    public function getProgression()
    {
        return isset($this->Progression) ? $this->Progression : null;
    }
    /**
     * Set Progression value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ProgressionCondition $progression
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Nnw1111Conditions
     */
    public function setProgression(\Mu4ddi3\Compensa\Webservice\StructType\ProgressionCondition $progression = null)
    {
        if (is_null($progression) || (is_array($progression) && empty($progression))) {
            unset($this->Progression);
        } else {
            $this->Progression = $progression;
        }
        return $this;
    }
    /**
     * Get ProgressionForSeriousInjuries value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ProgressionCondition|null
     */
    public function getProgressionForSeriousInjuries()
    {
        return isset($this->ProgressionForSeriousInjuries) ? $this->ProgressionForSeriousInjuries : null;
    }
    /**
     * Set ProgressionForSeriousInjuries value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ProgressionCondition $progressionForSeriousInjuries
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Nnw1111Conditions
     */
    public function setProgressionForSeriousInjuries(\Mu4ddi3\Compensa\Webservice\StructType\ProgressionCondition $progressionForSeriousInjuries = null)
    {
        if (is_null($progressionForSeriousInjuries) || (is_array($progressionForSeriousInjuries) && empty($progressionForSeriousInjuries))) {
            unset($this->ProgressionForSeriousInjuries);
        } else {
            $this->ProgressionForSeriousInjuries = $progressionForSeriousInjuries;
        }
        return $this;
    }
    /**
     * Get SeriousInjury value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\SeriousInjuryCondition|null
     */
    public function getSeriousInjury()
    {
        return isset($this->SeriousInjury) ? $this->SeriousInjury : null;
    }
    /**
     * Set SeriousInjury value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\SeriousInjuryCondition $seriousInjury
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Nnw1111Conditions
     */
    public function setSeriousInjury(\Mu4ddi3\Compensa\Webservice\StructType\SeriousInjuryCondition $seriousInjury = null)
    {
        if (is_null($seriousInjury) || (is_array($seriousInjury) && empty($seriousInjury))) {
            unset($this->SeriousInjury);
        } else {
            $this->SeriousInjury = $seriousInjury;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Nnw1111Conditions
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
