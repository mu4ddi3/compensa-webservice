<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Voyage19031Conditions StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Voyage19031Conditions
 * @subpackage Structs
 */
class Voyage19031Conditions extends ProductConditions
{
    /**
     * The AssistanceVariant
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\AssistanceVariantCondition
     */
    public $AssistanceVariant;
    /**
     * The FamilyInsuredAge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\InsuredAgeCondition
     */
    public $FamilyInsuredAge;
    /**
     * The GroupInsuredAge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\InsuredAgeCondition
     */
    public $GroupInsuredAge;
    /**
     * The InsuranceForm
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\InsuranceFormCondition
     */
    public $InsuranceForm;
    /**
     * The InsuranceOption
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\InsuranceOptionCondition
     */
    public $InsuranceOption;
    /**
     * The IsContinuation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $IsContinuation;
    /**
     * The IsHouseOrApartmentRiskSelected
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $IsHouseOrApartmentRiskSelected;
    /**
     * The TerritorialScope
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\TerritorialScopeCondition
     */
    public $TerritorialScope;
    /**
     * Constructor method for Voyage19031Conditions
     * @uses Voyage19031Conditions::setAssistanceVariant()
     * @uses Voyage19031Conditions::setFamilyInsuredAge()
     * @uses Voyage19031Conditions::setGroupInsuredAge()
     * @uses Voyage19031Conditions::setInsuranceForm()
     * @uses Voyage19031Conditions::setInsuranceOption()
     * @uses Voyage19031Conditions::setIsContinuation()
     * @uses Voyage19031Conditions::setIsHouseOrApartmentRiskSelected()
     * @uses Voyage19031Conditions::setTerritorialScope()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AssistanceVariantCondition $assistanceVariant
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InsuredAgeCondition $familyInsuredAge
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InsuredAgeCondition $groupInsuredAge
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InsuranceFormCondition $insuranceForm
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InsuranceOptionCondition $insuranceOption
     * @param bool $isContinuation
     * @param bool $isHouseOrApartmentRiskSelected
     * @param \Mu4ddi3\Compensa\Webservice\StructType\TerritorialScopeCondition $territorialScope
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\AssistanceVariantCondition $assistanceVariant = null, \Mu4ddi3\Compensa\Webservice\StructType\InsuredAgeCondition $familyInsuredAge = null, \Mu4ddi3\Compensa\Webservice\StructType\InsuredAgeCondition $groupInsuredAge = null, \Mu4ddi3\Compensa\Webservice\StructType\InsuranceFormCondition $insuranceForm = null, \Mu4ddi3\Compensa\Webservice\StructType\InsuranceOptionCondition $insuranceOption = null, $isContinuation = null, $isHouseOrApartmentRiskSelected = null, \Mu4ddi3\Compensa\Webservice\StructType\TerritorialScopeCondition $territorialScope = null)
    {
        $this
            ->setAssistanceVariant($assistanceVariant)
            ->setFamilyInsuredAge($familyInsuredAge)
            ->setGroupInsuredAge($groupInsuredAge)
            ->setInsuranceForm($insuranceForm)
            ->setInsuranceOption($insuranceOption)
            ->setIsContinuation($isContinuation)
            ->setIsHouseOrApartmentRiskSelected($isHouseOrApartmentRiskSelected)
            ->setTerritorialScope($territorialScope);
    }
    /**
     * Get AssistanceVariant value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AssistanceVariantCondition|null
     */
    public function getAssistanceVariant()
    {
        return isset($this->AssistanceVariant) ? $this->AssistanceVariant : null;
    }
    /**
     * Set AssistanceVariant value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AssistanceVariantCondition $assistanceVariant
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Voyage19031Conditions
     */
    public function setAssistanceVariant(\Mu4ddi3\Compensa\Webservice\StructType\AssistanceVariantCondition $assistanceVariant = null)
    {
        if (is_null($assistanceVariant) || (is_array($assistanceVariant) && empty($assistanceVariant))) {
            unset($this->AssistanceVariant);
        } else {
            $this->AssistanceVariant = $assistanceVariant;
        }
        return $this;
    }
    /**
     * Get FamilyInsuredAge value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuredAgeCondition|null
     */
    public function getFamilyInsuredAge()
    {
        return isset($this->FamilyInsuredAge) ? $this->FamilyInsuredAge : null;
    }
    /**
     * Set FamilyInsuredAge value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InsuredAgeCondition $familyInsuredAge
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Voyage19031Conditions
     */
    public function setFamilyInsuredAge(\Mu4ddi3\Compensa\Webservice\StructType\InsuredAgeCondition $familyInsuredAge = null)
    {
        if (is_null($familyInsuredAge) || (is_array($familyInsuredAge) && empty($familyInsuredAge))) {
            unset($this->FamilyInsuredAge);
        } else {
            $this->FamilyInsuredAge = $familyInsuredAge;
        }
        return $this;
    }
    /**
     * Get GroupInsuredAge value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuredAgeCondition|null
     */
    public function getGroupInsuredAge()
    {
        return isset($this->GroupInsuredAge) ? $this->GroupInsuredAge : null;
    }
    /**
     * Set GroupInsuredAge value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InsuredAgeCondition $groupInsuredAge
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Voyage19031Conditions
     */
    public function setGroupInsuredAge(\Mu4ddi3\Compensa\Webservice\StructType\InsuredAgeCondition $groupInsuredAge = null)
    {
        if (is_null($groupInsuredAge) || (is_array($groupInsuredAge) && empty($groupInsuredAge))) {
            unset($this->GroupInsuredAge);
        } else {
            $this->GroupInsuredAge = $groupInsuredAge;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Voyage19031Conditions
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
     * Get InsuranceOption value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuranceOptionCondition|null
     */
    public function getInsuranceOption()
    {
        return isset($this->InsuranceOption) ? $this->InsuranceOption : null;
    }
    /**
     * Set InsuranceOption value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InsuranceOptionCondition $insuranceOption
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Voyage19031Conditions
     */
    public function setInsuranceOption(\Mu4ddi3\Compensa\Webservice\StructType\InsuranceOptionCondition $insuranceOption = null)
    {
        if (is_null($insuranceOption) || (is_array($insuranceOption) && empty($insuranceOption))) {
            unset($this->InsuranceOption);
        } else {
            $this->InsuranceOption = $insuranceOption;
        }
        return $this;
    }
    /**
     * Get IsContinuation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsContinuation()
    {
        return isset($this->IsContinuation) ? $this->IsContinuation : null;
    }
    /**
     * Set IsContinuation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isContinuation
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Voyage19031Conditions
     */
    public function setIsContinuation($isContinuation = null)
    {
        // validation for constraint: boolean
        if (!is_null($isContinuation) && !is_bool($isContinuation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isContinuation)), __LINE__);
        }
        if (is_null($isContinuation) || (is_array($isContinuation) && empty($isContinuation))) {
            unset($this->IsContinuation);
        } else {
            $this->IsContinuation = $isContinuation;
        }
        return $this;
    }
    /**
     * Get IsHouseOrApartmentRiskSelected value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsHouseOrApartmentRiskSelected()
    {
        return isset($this->IsHouseOrApartmentRiskSelected) ? $this->IsHouseOrApartmentRiskSelected : null;
    }
    /**
     * Set IsHouseOrApartmentRiskSelected value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isHouseOrApartmentRiskSelected
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Voyage19031Conditions
     */
    public function setIsHouseOrApartmentRiskSelected($isHouseOrApartmentRiskSelected = null)
    {
        // validation for constraint: boolean
        if (!is_null($isHouseOrApartmentRiskSelected) && !is_bool($isHouseOrApartmentRiskSelected)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isHouseOrApartmentRiskSelected)), __LINE__);
        }
        if (is_null($isHouseOrApartmentRiskSelected) || (is_array($isHouseOrApartmentRiskSelected) && empty($isHouseOrApartmentRiskSelected))) {
            unset($this->IsHouseOrApartmentRiskSelected);
        } else {
            $this->IsHouseOrApartmentRiskSelected = $isHouseOrApartmentRiskSelected;
        }
        return $this;
    }
    /**
     * Get TerritorialScope value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\TerritorialScopeCondition|null
     */
    public function getTerritorialScope()
    {
        return isset($this->TerritorialScope) ? $this->TerritorialScope : null;
    }
    /**
     * Set TerritorialScope value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\TerritorialScopeCondition $territorialScope
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Voyage19031Conditions
     */
    public function setTerritorialScope(\Mu4ddi3\Compensa\Webservice\StructType\TerritorialScopeCondition $territorialScope = null)
    {
        if (is_null($territorialScope) || (is_array($territorialScope) && empty($territorialScope))) {
            unset($this->TerritorialScope);
        } else {
            $this->TerritorialScope = $territorialScope;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Voyage19031Conditions
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
