<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocumentSearchingForStructureFilter StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DocumentSearchingForStructureFilter
 * @subpackage Structs
 */
class DocumentSearchingForStructureFilter extends AbstractStructBase
{
    /**
     * The AgencyId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $AgencyId;
    /**
     * The Department
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $Department;
    /**
     * The Level
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\DocumentSearchingLevel
     */
    public $Level;
    /**
     * The Role
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\DocumentSearchingRole
     */
    public $Role;
    /**
     * The UserId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $UserId;
    /**
     * Constructor method for DocumentSearchingForStructureFilter
     * @uses DocumentSearchingForStructureFilter::setAgencyId()
     * @uses DocumentSearchingForStructureFilter::setDepartment()
     * @uses DocumentSearchingForStructureFilter::setLevel()
     * @uses DocumentSearchingForStructureFilter::setRole()
     * @uses DocumentSearchingForStructureFilter::setUserId()
     * @param int $agencyId
     * @param int $department
     * @param \Mu4ddi3\Compensa\Webservice\StructType\DocumentSearchingLevel $level
     * @param \Mu4ddi3\Compensa\Webservice\StructType\DocumentSearchingRole $role
     * @param int $userId
     */
    public function __construct($agencyId = null, $department = null, \Mu4ddi3\Compensa\Webservice\StructType\DocumentSearchingLevel $level = null, \Mu4ddi3\Compensa\Webservice\StructType\DocumentSearchingRole $role = null, $userId = null)
    {
        $this
            ->setAgencyId($agencyId)
            ->setDepartment($department)
            ->setLevel($level)
            ->setRole($role)
            ->setUserId($userId);
    }
    /**
     * Get AgencyId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getAgencyId()
    {
        return isset($this->AgencyId) ? $this->AgencyId : null;
    }
    /**
     * Set AgencyId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $agencyId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DocumentSearchingForStructureFilter
     */
    public function setAgencyId($agencyId = null)
    {
        // validation for constraint: int
        if (!is_null($agencyId) && !is_numeric($agencyId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($agencyId)), __LINE__);
        }
        if (is_null($agencyId) || (is_array($agencyId) && empty($agencyId))) {
            unset($this->AgencyId);
        } else {
            $this->AgencyId = $agencyId;
        }
        return $this;
    }
    /**
     * Get Department value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getDepartment()
    {
        return isset($this->Department) ? $this->Department : null;
    }
    /**
     * Set Department value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $department
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DocumentSearchingForStructureFilter
     */
    public function setDepartment($department = null)
    {
        // validation for constraint: int
        if (!is_null($department) && !is_numeric($department)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($department)), __LINE__);
        }
        if (is_null($department) || (is_array($department) && empty($department))) {
            unset($this->Department);
        } else {
            $this->Department = $department;
        }
        return $this;
    }
    /**
     * Get Level value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DocumentSearchingLevel|null
     */
    public function getLevel()
    {
        return isset($this->Level) ? $this->Level : null;
    }
    /**
     * Set Level value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\DocumentSearchingLevel $level
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DocumentSearchingForStructureFilter
     */
    public function setLevel(\Mu4ddi3\Compensa\Webservice\StructType\DocumentSearchingLevel $level = null)
    {
        if (is_null($level) || (is_array($level) && empty($level))) {
            unset($this->Level);
        } else {
            $this->Level = $level;
        }
        return $this;
    }
    /**
     * Get Role value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DocumentSearchingRole|null
     */
    public function getRole()
    {
        return isset($this->Role) ? $this->Role : null;
    }
    /**
     * Set Role value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\DocumentSearchingRole $role
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DocumentSearchingForStructureFilter
     */
    public function setRole(\Mu4ddi3\Compensa\Webservice\StructType\DocumentSearchingRole $role = null)
    {
        if (is_null($role) || (is_array($role) && empty($role))) {
            unset($this->Role);
        } else {
            $this->Role = $role;
        }
        return $this;
    }
    /**
     * Get UserId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getUserId()
    {
        return isset($this->UserId) ? $this->UserId : null;
    }
    /**
     * Set UserId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $userId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DocumentSearchingForStructureFilter
     */
    public function setUserId($userId = null)
    {
        // validation for constraint: int
        if (!is_null($userId) && !is_numeric($userId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($userId)), __LINE__);
        }
        if (is_null($userId) || (is_array($userId) && empty($userId))) {
            unset($this->UserId);
        } else {
            $this->UserId = $userId;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DocumentSearchingForStructureFilter
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
