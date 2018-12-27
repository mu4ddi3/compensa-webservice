<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CommonConditions StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CommonConditions
 * @subpackage Structs
 */
class CommonConditions extends ConditionsBase
{
    /**
     * The Agency
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\AgencyCondition
     */
    public $Agency;
    /**
     * The AgencyType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\AgencyTypeCondition
     */
    public $AgencyType;
    /**
     * The AgentId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\AgentCondition
     */
    public $AgentId;
    /**
     * The ClientAge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ClientAgeCondition
     */
    public $ClientAge;
    /**
     * The ClientCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ClientCodeCondition
     */
    public $ClientCode;
    /**
     * The ClientInactivity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ClientInactivityCondition
     */
    public $ClientInactivity;
    /**
     * The ClientType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ClientTypeCondition
     */
    public $ClientType;
    /**
     * The Department
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\DepartmentCondition
     */
    public $Department;
    /**
     * The MiminalPolicyPremium
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $MiminalPolicyPremium;
    /**
     * The Pkd
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PkdCondition
     */
    public $Pkd;
    /**
     * The PolicyDuration
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PolicyDurationCondition
     */
    public $PolicyDuration;
    /**
     * The PolicyPaymentType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PolicyPaymentTypeCondition
     */
    public $PolicyPaymentType;
    /**
     * The PostalCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PostalCodeCondition
     */
    public $PostalCode;
    /**
     * The RenewalPolicy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\RenewalPolicyCondition
     */
    public $RenewalPolicy;
    /**
     * The Structure
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\StructureCondition
     */
    public $Structure;
    /**
     * Constructor method for CommonConditions
     * @uses CommonConditions::setAgency()
     * @uses CommonConditions::setAgencyType()
     * @uses CommonConditions::setAgentId()
     * @uses CommonConditions::setClientAge()
     * @uses CommonConditions::setClientCode()
     * @uses CommonConditions::setClientInactivity()
     * @uses CommonConditions::setClientType()
     * @uses CommonConditions::setDepartment()
     * @uses CommonConditions::setMiminalPolicyPremium()
     * @uses CommonConditions::setPkd()
     * @uses CommonConditions::setPolicyDuration()
     * @uses CommonConditions::setPolicyPaymentType()
     * @uses CommonConditions::setPostalCode()
     * @uses CommonConditions::setRenewalPolicy()
     * @uses CommonConditions::setStructure()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AgencyCondition $agency
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AgencyTypeCondition $agencyType
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AgentCondition $agentId
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ClientAgeCondition $clientAge
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ClientCodeCondition $clientCode
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ClientInactivityCondition $clientInactivity
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ClientTypeCondition $clientType
     * @param \Mu4ddi3\Compensa\Webservice\StructType\DepartmentCondition $department
     * @param float $miminalPolicyPremium
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PkdCondition $pkd
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PolicyDurationCondition $policyDuration
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PolicyPaymentTypeCondition $policyPaymentType
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PostalCodeCondition $postalCode
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RenewalPolicyCondition $renewalPolicy
     * @param \Mu4ddi3\Compensa\Webservice\StructType\StructureCondition $structure
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\AgencyCondition $agency = null, \Mu4ddi3\Compensa\Webservice\StructType\AgencyTypeCondition $agencyType = null, \Mu4ddi3\Compensa\Webservice\StructType\AgentCondition $agentId = null, \Mu4ddi3\Compensa\Webservice\StructType\ClientAgeCondition $clientAge = null, \Mu4ddi3\Compensa\Webservice\StructType\ClientCodeCondition $clientCode = null, \Mu4ddi3\Compensa\Webservice\StructType\ClientInactivityCondition $clientInactivity = null, \Mu4ddi3\Compensa\Webservice\StructType\ClientTypeCondition $clientType = null, \Mu4ddi3\Compensa\Webservice\StructType\DepartmentCondition $department = null, $miminalPolicyPremium = null, \Mu4ddi3\Compensa\Webservice\StructType\PkdCondition $pkd = null, \Mu4ddi3\Compensa\Webservice\StructType\PolicyDurationCondition $policyDuration = null, \Mu4ddi3\Compensa\Webservice\StructType\PolicyPaymentTypeCondition $policyPaymentType = null, \Mu4ddi3\Compensa\Webservice\StructType\PostalCodeCondition $postalCode = null, \Mu4ddi3\Compensa\Webservice\StructType\RenewalPolicyCondition $renewalPolicy = null, \Mu4ddi3\Compensa\Webservice\StructType\StructureCondition $structure = null)
    {
        $this
            ->setAgency($agency)
            ->setAgencyType($agencyType)
            ->setAgentId($agentId)
            ->setClientAge($clientAge)
            ->setClientCode($clientCode)
            ->setClientInactivity($clientInactivity)
            ->setClientType($clientType)
            ->setDepartment($department)
            ->setMiminalPolicyPremium($miminalPolicyPremium)
            ->setPkd($pkd)
            ->setPolicyDuration($policyDuration)
            ->setPolicyPaymentType($policyPaymentType)
            ->setPostalCode($postalCode)
            ->setRenewalPolicy($renewalPolicy)
            ->setStructure($structure);
    }
    /**
     * Get Agency value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AgencyCondition|null
     */
    public function getAgency()
    {
        return isset($this->Agency) ? $this->Agency : null;
    }
    /**
     * Set Agency value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AgencyCondition $agency
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CommonConditions
     */
    public function setAgency(\Mu4ddi3\Compensa\Webservice\StructType\AgencyCondition $agency = null)
    {
        if (is_null($agency) || (is_array($agency) && empty($agency))) {
            unset($this->Agency);
        } else {
            $this->Agency = $agency;
        }
        return $this;
    }
    /**
     * Get AgencyType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AgencyTypeCondition|null
     */
    public function getAgencyType()
    {
        return isset($this->AgencyType) ? $this->AgencyType : null;
    }
    /**
     * Set AgencyType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AgencyTypeCondition $agencyType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CommonConditions
     */
    public function setAgencyType(\Mu4ddi3\Compensa\Webservice\StructType\AgencyTypeCondition $agencyType = null)
    {
        if (is_null($agencyType) || (is_array($agencyType) && empty($agencyType))) {
            unset($this->AgencyType);
        } else {
            $this->AgencyType = $agencyType;
        }
        return $this;
    }
    /**
     * Get AgentId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AgentCondition|null
     */
    public function getAgentId()
    {
        return isset($this->AgentId) ? $this->AgentId : null;
    }
    /**
     * Set AgentId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AgentCondition $agentId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CommonConditions
     */
    public function setAgentId(\Mu4ddi3\Compensa\Webservice\StructType\AgentCondition $agentId = null)
    {
        if (is_null($agentId) || (is_array($agentId) && empty($agentId))) {
            unset($this->AgentId);
        } else {
            $this->AgentId = $agentId;
        }
        return $this;
    }
    /**
     * Get ClientAge value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClientAgeCondition|null
     */
    public function getClientAge()
    {
        return isset($this->ClientAge) ? $this->ClientAge : null;
    }
    /**
     * Set ClientAge value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ClientAgeCondition $clientAge
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CommonConditions
     */
    public function setClientAge(\Mu4ddi3\Compensa\Webservice\StructType\ClientAgeCondition $clientAge = null)
    {
        if (is_null($clientAge) || (is_array($clientAge) && empty($clientAge))) {
            unset($this->ClientAge);
        } else {
            $this->ClientAge = $clientAge;
        }
        return $this;
    }
    /**
     * Get ClientCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClientCodeCondition|null
     */
    public function getClientCode()
    {
        return isset($this->ClientCode) ? $this->ClientCode : null;
    }
    /**
     * Set ClientCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ClientCodeCondition $clientCode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CommonConditions
     */
    public function setClientCode(\Mu4ddi3\Compensa\Webservice\StructType\ClientCodeCondition $clientCode = null)
    {
        if (is_null($clientCode) || (is_array($clientCode) && empty($clientCode))) {
            unset($this->ClientCode);
        } else {
            $this->ClientCode = $clientCode;
        }
        return $this;
    }
    /**
     * Get ClientInactivity value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClientInactivityCondition|null
     */
    public function getClientInactivity()
    {
        return isset($this->ClientInactivity) ? $this->ClientInactivity : null;
    }
    /**
     * Set ClientInactivity value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ClientInactivityCondition $clientInactivity
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CommonConditions
     */
    public function setClientInactivity(\Mu4ddi3\Compensa\Webservice\StructType\ClientInactivityCondition $clientInactivity = null)
    {
        if (is_null($clientInactivity) || (is_array($clientInactivity) && empty($clientInactivity))) {
            unset($this->ClientInactivity);
        } else {
            $this->ClientInactivity = $clientInactivity;
        }
        return $this;
    }
    /**
     * Get ClientType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClientTypeCondition|null
     */
    public function getClientType()
    {
        return isset($this->ClientType) ? $this->ClientType : null;
    }
    /**
     * Set ClientType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ClientTypeCondition $clientType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CommonConditions
     */
    public function setClientType(\Mu4ddi3\Compensa\Webservice\StructType\ClientTypeCondition $clientType = null)
    {
        if (is_null($clientType) || (is_array($clientType) && empty($clientType))) {
            unset($this->ClientType);
        } else {
            $this->ClientType = $clientType;
        }
        return $this;
    }
    /**
     * Get Department value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DepartmentCondition|null
     */
    public function getDepartment()
    {
        return isset($this->Department) ? $this->Department : null;
    }
    /**
     * Set Department value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\DepartmentCondition $department
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CommonConditions
     */
    public function setDepartment(\Mu4ddi3\Compensa\Webservice\StructType\DepartmentCondition $department = null)
    {
        if (is_null($department) || (is_array($department) && empty($department))) {
            unset($this->Department);
        } else {
            $this->Department = $department;
        }
        return $this;
    }
    /**
     * Get MiminalPolicyPremium value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getMiminalPolicyPremium()
    {
        return isset($this->MiminalPolicyPremium) ? $this->MiminalPolicyPremium : null;
    }
    /**
     * Set MiminalPolicyPremium value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $miminalPolicyPremium
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CommonConditions
     */
    public function setMiminalPolicyPremium($miminalPolicyPremium = null)
    {
        if (is_null($miminalPolicyPremium) || (is_array($miminalPolicyPremium) && empty($miminalPolicyPremium))) {
            unset($this->MiminalPolicyPremium);
        } else {
            $this->MiminalPolicyPremium = $miminalPolicyPremium;
        }
        return $this;
    }
    /**
     * Get Pkd value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PkdCondition|null
     */
    public function getPkd()
    {
        return isset($this->Pkd) ? $this->Pkd : null;
    }
    /**
     * Set Pkd value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PkdCondition $pkd
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CommonConditions
     */
    public function setPkd(\Mu4ddi3\Compensa\Webservice\StructType\PkdCondition $pkd = null)
    {
        if (is_null($pkd) || (is_array($pkd) && empty($pkd))) {
            unset($this->Pkd);
        } else {
            $this->Pkd = $pkd;
        }
        return $this;
    }
    /**
     * Get PolicyDuration value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicyDurationCondition|null
     */
    public function getPolicyDuration()
    {
        return isset($this->PolicyDuration) ? $this->PolicyDuration : null;
    }
    /**
     * Set PolicyDuration value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PolicyDurationCondition $policyDuration
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CommonConditions
     */
    public function setPolicyDuration(\Mu4ddi3\Compensa\Webservice\StructType\PolicyDurationCondition $policyDuration = null)
    {
        if (is_null($policyDuration) || (is_array($policyDuration) && empty($policyDuration))) {
            unset($this->PolicyDuration);
        } else {
            $this->PolicyDuration = $policyDuration;
        }
        return $this;
    }
    /**
     * Get PolicyPaymentType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicyPaymentTypeCondition|null
     */
    public function getPolicyPaymentType()
    {
        return isset($this->PolicyPaymentType) ? $this->PolicyPaymentType : null;
    }
    /**
     * Set PolicyPaymentType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PolicyPaymentTypeCondition $policyPaymentType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CommonConditions
     */
    public function setPolicyPaymentType(\Mu4ddi3\Compensa\Webservice\StructType\PolicyPaymentTypeCondition $policyPaymentType = null)
    {
        if (is_null($policyPaymentType) || (is_array($policyPaymentType) && empty($policyPaymentType))) {
            unset($this->PolicyPaymentType);
        } else {
            $this->PolicyPaymentType = $policyPaymentType;
        }
        return $this;
    }
    /**
     * Get PostalCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PostalCodeCondition|null
     */
    public function getPostalCode()
    {
        return isset($this->PostalCode) ? $this->PostalCode : null;
    }
    /**
     * Set PostalCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PostalCodeCondition $postalCode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CommonConditions
     */
    public function setPostalCode(\Mu4ddi3\Compensa\Webservice\StructType\PostalCodeCondition $postalCode = null)
    {
        if (is_null($postalCode) || (is_array($postalCode) && empty($postalCode))) {
            unset($this->PostalCode);
        } else {
            $this->PostalCode = $postalCode;
        }
        return $this;
    }
    /**
     * Get RenewalPolicy value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalPolicyCondition|null
     */
    public function getRenewalPolicy()
    {
        return isset($this->RenewalPolicy) ? $this->RenewalPolicy : null;
    }
    /**
     * Set RenewalPolicy value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RenewalPolicyCondition $renewalPolicy
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CommonConditions
     */
    public function setRenewalPolicy(\Mu4ddi3\Compensa\Webservice\StructType\RenewalPolicyCondition $renewalPolicy = null)
    {
        if (is_null($renewalPolicy) || (is_array($renewalPolicy) && empty($renewalPolicy))) {
            unset($this->RenewalPolicy);
        } else {
            $this->RenewalPolicy = $renewalPolicy;
        }
        return $this;
    }
    /**
     * Get Structure value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\StructureCondition|null
     */
    public function getStructure()
    {
        return isset($this->Structure) ? $this->Structure : null;
    }
    /**
     * Set Structure value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\StructureCondition $structure
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CommonConditions
     */
    public function setStructure(\Mu4ddi3\Compensa\Webservice\StructType\StructureCondition $structure = null)
    {
        if (is_null($structure) || (is_array($structure) && empty($structure))) {
            unset($this->Structure);
        } else {
            $this->Structure = $structure;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CommonConditions
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
