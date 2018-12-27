<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrganizationalUnit StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:OrganizationalUnit
 * @subpackage Structs
 */
class OrganizationalUnit extends AbstractStructBase
{
    /**
     * The Agent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Agent;
    /**
     * The Branch
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Branch;
    /**
     * The Department
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Department;
    /**
     * The Representative
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Representative;
    /**
     * Constructor method for OrganizationalUnit
     * @uses OrganizationalUnit::setAgent()
     * @uses OrganizationalUnit::setBranch()
     * @uses OrganizationalUnit::setDepartment()
     * @uses OrganizationalUnit::setRepresentative()
     * @param string $agent
     * @param string $branch
     * @param string $department
     * @param string $representative
     */
    public function __construct($agent = null, $branch = null, $department = null, $representative = null)
    {
        $this
            ->setAgent($agent)
            ->setBranch($branch)
            ->setDepartment($department)
            ->setRepresentative($representative);
    }
    /**
     * Get Agent value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAgent()
    {
        return isset($this->Agent) ? $this->Agent : null;
    }
    /**
     * Set Agent value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $agent
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OrganizationalUnit
     */
    public function setAgent($agent = null)
    {
        // validation for constraint: string
        if (!is_null($agent) && !is_string($agent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($agent)), __LINE__);
        }
        if (is_null($agent) || (is_array($agent) && empty($agent))) {
            unset($this->Agent);
        } else {
            $this->Agent = $agent;
        }
        return $this;
    }
    /**
     * Get Branch value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBranch()
    {
        return isset($this->Branch) ? $this->Branch : null;
    }
    /**
     * Set Branch value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $branch
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OrganizationalUnit
     */
    public function setBranch($branch = null)
    {
        // validation for constraint: string
        if (!is_null($branch) && !is_string($branch)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($branch)), __LINE__);
        }
        if (is_null($branch) || (is_array($branch) && empty($branch))) {
            unset($this->Branch);
        } else {
            $this->Branch = $branch;
        }
        return $this;
    }
    /**
     * Get Department value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDepartment()
    {
        return isset($this->Department) ? $this->Department : null;
    }
    /**
     * Set Department value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $department
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OrganizationalUnit
     */
    public function setDepartment($department = null)
    {
        // validation for constraint: string
        if (!is_null($department) && !is_string($department)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($department)), __LINE__);
        }
        if (is_null($department) || (is_array($department) && empty($department))) {
            unset($this->Department);
        } else {
            $this->Department = $department;
        }
        return $this;
    }
    /**
     * Get Representative value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRepresentative()
    {
        return isset($this->Representative) ? $this->Representative : null;
    }
    /**
     * Set Representative value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $representative
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OrganizationalUnit
     */
    public function setRepresentative($representative = null)
    {
        // validation for constraint: string
        if (!is_null($representative) && !is_string($representative)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($representative)), __LINE__);
        }
        if (is_null($representative) || (is_array($representative) && empty($representative))) {
            unset($this->Representative);
        } else {
            $this->Representative = $representative;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OrganizationalUnit
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
