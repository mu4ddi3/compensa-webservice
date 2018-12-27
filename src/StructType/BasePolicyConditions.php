<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BasePolicyConditions StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BasePolicyConditions
 * @subpackage Structs
 */
class BasePolicyConditions extends ConditionsBase
{
    /**
     * The IncludePoliciesIssuedInDays
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $IncludePoliciesIssuedInDays;
    /**
     * The Policies
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBasePolicy
     */
    public $Policies;
    /**
     * Constructor method for BasePolicyConditions
     * @uses BasePolicyConditions::setIncludePoliciesIssuedInDays()
     * @uses BasePolicyConditions::setPolicies()
     * @param int $includePoliciesIssuedInDays
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBasePolicy $policies
     */
    public function __construct($includePoliciesIssuedInDays = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBasePolicy $policies = null)
    {
        $this
            ->setIncludePoliciesIssuedInDays($includePoliciesIssuedInDays)
            ->setPolicies($policies);
    }
    /**
     * Get IncludePoliciesIssuedInDays value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getIncludePoliciesIssuedInDays()
    {
        return isset($this->IncludePoliciesIssuedInDays) ? $this->IncludePoliciesIssuedInDays : null;
    }
    /**
     * Set IncludePoliciesIssuedInDays value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $includePoliciesIssuedInDays
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePolicyConditions
     */
    public function setIncludePoliciesIssuedInDays($includePoliciesIssuedInDays = null)
    {
        // validation for constraint: int
        if (!is_null($includePoliciesIssuedInDays) && !is_numeric($includePoliciesIssuedInDays)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($includePoliciesIssuedInDays)), __LINE__);
        }
        if (is_null($includePoliciesIssuedInDays) || (is_array($includePoliciesIssuedInDays) && empty($includePoliciesIssuedInDays))) {
            unset($this->IncludePoliciesIssuedInDays);
        } else {
            $this->IncludePoliciesIssuedInDays = $includePoliciesIssuedInDays;
        }
        return $this;
    }
    /**
     * Get Policies value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBasePolicy|null
     */
    public function getPolicies()
    {
        return isset($this->Policies) ? $this->Policies : null;
    }
    /**
     * Set Policies value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBasePolicy $policies
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePolicyConditions
     */
    public function setPolicies(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBasePolicy $policies = null)
    {
        if (is_null($policies) || (is_array($policies) && empty($policies))) {
            unset($this->Policies);
        } else {
            $this->Policies = $policies;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePolicyConditions
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
