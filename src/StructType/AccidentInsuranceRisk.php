<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccidentInsuranceRisk StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AccidentInsuranceRisk
 * @subpackage Structs
 */
class AccidentInsuranceRisk extends InsuranceRisk
{
    /**
     * The InsuredPeopleDataType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\AccidentInsuredPeopleDataType
     */
    public $InsuredPeopleDataType;
    /**
     * The IsIncludedRiskOfMyocardialAndStroke
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsIncludedRiskOfMyocardialAndStroke;
    /**
     * The IsInsuranceLimitedToAccidentsAtWork
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsInsuranceLimitedToAccidentsAtWork;
    /**
     * The insuredPeople
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAccidentInsuredPerson
     */
    public $insuredPeople;
    /**
     * Constructor method for AccidentInsuranceRisk
     * @uses AccidentInsuranceRisk::setInsuredPeopleDataType()
     * @uses AccidentInsuranceRisk::setIsIncludedRiskOfMyocardialAndStroke()
     * @uses AccidentInsuranceRisk::setIsInsuranceLimitedToAccidentsAtWork()
     * @uses AccidentInsuranceRisk::setInsuredPeople()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AccidentInsuredPeopleDataType $insuredPeopleDataType
     * @param bool $isIncludedRiskOfMyocardialAndStroke
     * @param bool $isInsuranceLimitedToAccidentsAtWork
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAccidentInsuredPerson $insuredPeople
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\AccidentInsuredPeopleDataType $insuredPeopleDataType = null, $isIncludedRiskOfMyocardialAndStroke = null, $isInsuranceLimitedToAccidentsAtWork = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAccidentInsuredPerson $insuredPeople = null)
    {
        $this
            ->setInsuredPeopleDataType($insuredPeopleDataType)
            ->setIsIncludedRiskOfMyocardialAndStroke($isIncludedRiskOfMyocardialAndStroke)
            ->setIsInsuranceLimitedToAccidentsAtWork($isInsuranceLimitedToAccidentsAtWork)
            ->setInsuredPeople($insuredPeople);
    }
    /**
     * Get InsuredPeopleDataType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AccidentInsuredPeopleDataType|null
     */
    public function getInsuredPeopleDataType()
    {
        return isset($this->InsuredPeopleDataType) ? $this->InsuredPeopleDataType : null;
    }
    /**
     * Set InsuredPeopleDataType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AccidentInsuredPeopleDataType $insuredPeopleDataType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AccidentInsuranceRisk
     */
    public function setInsuredPeopleDataType(\Mu4ddi3\Compensa\Webservice\StructType\AccidentInsuredPeopleDataType $insuredPeopleDataType = null)
    {
        if (is_null($insuredPeopleDataType) || (is_array($insuredPeopleDataType) && empty($insuredPeopleDataType))) {
            unset($this->InsuredPeopleDataType);
        } else {
            $this->InsuredPeopleDataType = $insuredPeopleDataType;
        }
        return $this;
    }
    /**
     * Get IsIncludedRiskOfMyocardialAndStroke value
     * @return bool|null
     */
    public function getIsIncludedRiskOfMyocardialAndStroke()
    {
        return $this->IsIncludedRiskOfMyocardialAndStroke;
    }
    /**
     * Set IsIncludedRiskOfMyocardialAndStroke value
     * @param bool $isIncludedRiskOfMyocardialAndStroke
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AccidentInsuranceRisk
     */
    public function setIsIncludedRiskOfMyocardialAndStroke($isIncludedRiskOfMyocardialAndStroke = null)
    {
        // validation for constraint: boolean
        if (!is_null($isIncludedRiskOfMyocardialAndStroke) && !is_bool($isIncludedRiskOfMyocardialAndStroke)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isIncludedRiskOfMyocardialAndStroke)), __LINE__);
        }
        $this->IsIncludedRiskOfMyocardialAndStroke = $isIncludedRiskOfMyocardialAndStroke;
        return $this;
    }
    /**
     * Get IsInsuranceLimitedToAccidentsAtWork value
     * @return bool|null
     */
    public function getIsInsuranceLimitedToAccidentsAtWork()
    {
        return $this->IsInsuranceLimitedToAccidentsAtWork;
    }
    /**
     * Set IsInsuranceLimitedToAccidentsAtWork value
     * @param bool $isInsuranceLimitedToAccidentsAtWork
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AccidentInsuranceRisk
     */
    public function setIsInsuranceLimitedToAccidentsAtWork($isInsuranceLimitedToAccidentsAtWork = null)
    {
        // validation for constraint: boolean
        if (!is_null($isInsuranceLimitedToAccidentsAtWork) && !is_bool($isInsuranceLimitedToAccidentsAtWork)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isInsuranceLimitedToAccidentsAtWork)), __LINE__);
        }
        $this->IsInsuranceLimitedToAccidentsAtWork = $isInsuranceLimitedToAccidentsAtWork;
        return $this;
    }
    /**
     * Get insuredPeople value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAccidentInsuredPerson|null
     */
    public function getInsuredPeople()
    {
        return isset($this->insuredPeople) ? $this->insuredPeople : null;
    }
    /**
     * Set insuredPeople value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAccidentInsuredPerson $insuredPeople
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AccidentInsuranceRisk
     */
    public function setInsuredPeople(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAccidentInsuredPerson $insuredPeople = null)
    {
        if (is_null($insuredPeople) || (is_array($insuredPeople) && empty($insuredPeople))) {
            unset($this->insuredPeople);
        } else {
            $this->insuredPeople = $insuredPeople;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AccidentInsuranceRisk
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
