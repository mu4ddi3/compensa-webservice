<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompensaIssuerInfo StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CompensaIssuerInfo
 * @subpackage Structs
 */
class CompensaIssuerInfo extends AbstractStructBase
{
    /**
     * The AgencyId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $AgencyId;
    /**
     * The AgencyLifeNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AgencyLifeNumber;
    /**
     * The AgencyMagId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $AgencyMagId;
    /**
     * The AgencyTypeShortName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AgencyTypeShortName;
    /**
     * The BranchNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $BranchNumber;
    /**
     * The Department
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Department;
    /**
     * The Email
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Email;
    /**
     * The FirstName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FirstName;
    /**
     * The LastName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $LastName;
    /**
     * The Login
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Login;
    /**
     * The MagicNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $MagicNumber;
    /**
     * The PhoneNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PhoneNumber;
    /**
     * The PortalNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PortalNumber;
    /**
     * The RepresentativeNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $RepresentativeNumber;
    /**
     * The UserId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $UserId;
    /**
     * The UserTypesIds
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint
     */
    public $UserTypesIds;
    /**
     * Constructor method for CompensaIssuerInfo
     * @uses CompensaIssuerInfo::setAgencyId()
     * @uses CompensaIssuerInfo::setAgencyLifeNumber()
     * @uses CompensaIssuerInfo::setAgencyMagId()
     * @uses CompensaIssuerInfo::setAgencyTypeShortName()
     * @uses CompensaIssuerInfo::setBranchNumber()
     * @uses CompensaIssuerInfo::setDepartment()
     * @uses CompensaIssuerInfo::setEmail()
     * @uses CompensaIssuerInfo::setFirstName()
     * @uses CompensaIssuerInfo::setLastName()
     * @uses CompensaIssuerInfo::setLogin()
     * @uses CompensaIssuerInfo::setMagicNumber()
     * @uses CompensaIssuerInfo::setPhoneNumber()
     * @uses CompensaIssuerInfo::setPortalNumber()
     * @uses CompensaIssuerInfo::setRepresentativeNumber()
     * @uses CompensaIssuerInfo::setUserId()
     * @uses CompensaIssuerInfo::setUserTypesIds()
     * @param int $agencyId
     * @param string $agencyLifeNumber
     * @param int $agencyMagId
     * @param string $agencyTypeShortName
     * @param int $branchNumber
     * @param int $department
     * @param string $email
     * @param string $firstName
     * @param string $lastName
     * @param string $login
     * @param string $magicNumber
     * @param string $phoneNumber
     * @param int $portalNumber
     * @param int $representativeNumber
     * @param int $userId
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint $userTypesIds
     */
    public function __construct($agencyId = null, $agencyLifeNumber = null, $agencyMagId = null, $agencyTypeShortName = null, $branchNumber = null, $department = null, $email = null, $firstName = null, $lastName = null, $login = null, $magicNumber = null, $phoneNumber = null, $portalNumber = null, $representativeNumber = null, $userId = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint $userTypesIds = null)
    {
        $this
            ->setAgencyId($agencyId)
            ->setAgencyLifeNumber($agencyLifeNumber)
            ->setAgencyMagId($agencyMagId)
            ->setAgencyTypeShortName($agencyTypeShortName)
            ->setBranchNumber($branchNumber)
            ->setDepartment($department)
            ->setEmail($email)
            ->setFirstName($firstName)
            ->setLastName($lastName)
            ->setLogin($login)
            ->setMagicNumber($magicNumber)
            ->setPhoneNumber($phoneNumber)
            ->setPortalNumber($portalNumber)
            ->setRepresentativeNumber($representativeNumber)
            ->setUserId($userId)
            ->setUserTypesIds($userTypesIds);
    }
    /**
     * Get AgencyId value
     * @return int|null
     */
    public function getAgencyId()
    {
        return $this->AgencyId;
    }
    /**
     * Set AgencyId value
     * @param int $agencyId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaIssuerInfo
     */
    public function setAgencyId($agencyId = null)
    {
        // validation for constraint: int
        if (!is_null($agencyId) && !is_numeric($agencyId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($agencyId)), __LINE__);
        }
        $this->AgencyId = $agencyId;
        return $this;
    }
    /**
     * Get AgencyLifeNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAgencyLifeNumber()
    {
        return isset($this->AgencyLifeNumber) ? $this->AgencyLifeNumber : null;
    }
    /**
     * Set AgencyLifeNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $agencyLifeNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaIssuerInfo
     */
    public function setAgencyLifeNumber($agencyLifeNumber = null)
    {
        // validation for constraint: string
        if (!is_null($agencyLifeNumber) && !is_string($agencyLifeNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($agencyLifeNumber)), __LINE__);
        }
        if (is_null($agencyLifeNumber) || (is_array($agencyLifeNumber) && empty($agencyLifeNumber))) {
            unset($this->AgencyLifeNumber);
        } else {
            $this->AgencyLifeNumber = $agencyLifeNumber;
        }
        return $this;
    }
    /**
     * Get AgencyMagId value
     * @return int|null
     */
    public function getAgencyMagId()
    {
        return $this->AgencyMagId;
    }
    /**
     * Set AgencyMagId value
     * @param int $agencyMagId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaIssuerInfo
     */
    public function setAgencyMagId($agencyMagId = null)
    {
        // validation for constraint: int
        if (!is_null($agencyMagId) && !is_numeric($agencyMagId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($agencyMagId)), __LINE__);
        }
        $this->AgencyMagId = $agencyMagId;
        return $this;
    }
    /**
     * Get AgencyTypeShortName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAgencyTypeShortName()
    {
        return isset($this->AgencyTypeShortName) ? $this->AgencyTypeShortName : null;
    }
    /**
     * Set AgencyTypeShortName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $agencyTypeShortName
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaIssuerInfo
     */
    public function setAgencyTypeShortName($agencyTypeShortName = null)
    {
        // validation for constraint: string
        if (!is_null($agencyTypeShortName) && !is_string($agencyTypeShortName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($agencyTypeShortName)), __LINE__);
        }
        if (is_null($agencyTypeShortName) || (is_array($agencyTypeShortName) && empty($agencyTypeShortName))) {
            unset($this->AgencyTypeShortName);
        } else {
            $this->AgencyTypeShortName = $agencyTypeShortName;
        }
        return $this;
    }
    /**
     * Get BranchNumber value
     * @return int|null
     */
    public function getBranchNumber()
    {
        return $this->BranchNumber;
    }
    /**
     * Set BranchNumber value
     * @param int $branchNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaIssuerInfo
     */
    public function setBranchNumber($branchNumber = null)
    {
        // validation for constraint: int
        if (!is_null($branchNumber) && !is_numeric($branchNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($branchNumber)), __LINE__);
        }
        $this->BranchNumber = $branchNumber;
        return $this;
    }
    /**
     * Get Department value
     * @return int|null
     */
    public function getDepartment()
    {
        return $this->Department;
    }
    /**
     * Set Department value
     * @param int $department
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaIssuerInfo
     */
    public function setDepartment($department = null)
    {
        // validation for constraint: int
        if (!is_null($department) && !is_numeric($department)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($department)), __LINE__);
        }
        $this->Department = $department;
        return $this;
    }
    /**
     * Get Email value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEmail()
    {
        return isset($this->Email) ? $this->Email : null;
    }
    /**
     * Set Email value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $email
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaIssuerInfo
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($email)), __LINE__);
        }
        if (is_null($email) || (is_array($email) && empty($email))) {
            unset($this->Email);
        } else {
            $this->Email = $email;
        }
        return $this;
    }
    /**
     * Get FirstName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFirstName()
    {
        return isset($this->FirstName) ? $this->FirstName : null;
    }
    /**
     * Set FirstName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $firstName
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaIssuerInfo
     */
    public function setFirstName($firstName = null)
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($firstName)), __LINE__);
        }
        if (is_null($firstName) || (is_array($firstName) && empty($firstName))) {
            unset($this->FirstName);
        } else {
            $this->FirstName = $firstName;
        }
        return $this;
    }
    /**
     * Get LastName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLastName()
    {
        return isset($this->LastName) ? $this->LastName : null;
    }
    /**
     * Set LastName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $lastName
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaIssuerInfo
     */
    public function setLastName($lastName = null)
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastName)), __LINE__);
        }
        if (is_null($lastName) || (is_array($lastName) && empty($lastName))) {
            unset($this->LastName);
        } else {
            $this->LastName = $lastName;
        }
        return $this;
    }
    /**
     * Get Login value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLogin()
    {
        return isset($this->Login) ? $this->Login : null;
    }
    /**
     * Set Login value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $login
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaIssuerInfo
     */
    public function setLogin($login = null)
    {
        // validation for constraint: string
        if (!is_null($login) && !is_string($login)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($login)), __LINE__);
        }
        if (is_null($login) || (is_array($login) && empty($login))) {
            unset($this->Login);
        } else {
            $this->Login = $login;
        }
        return $this;
    }
    /**
     * Get MagicNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMagicNumber()
    {
        return isset($this->MagicNumber) ? $this->MagicNumber : null;
    }
    /**
     * Set MagicNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $magicNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaIssuerInfo
     */
    public function setMagicNumber($magicNumber = null)
    {
        // validation for constraint: string
        if (!is_null($magicNumber) && !is_string($magicNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($magicNumber)), __LINE__);
        }
        if (is_null($magicNumber) || (is_array($magicNumber) && empty($magicNumber))) {
            unset($this->MagicNumber);
        } else {
            $this->MagicNumber = $magicNumber;
        }
        return $this;
    }
    /**
     * Get PhoneNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return isset($this->PhoneNumber) ? $this->PhoneNumber : null;
    }
    /**
     * Set PhoneNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $phoneNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaIssuerInfo
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        // validation for constraint: string
        if (!is_null($phoneNumber) && !is_string($phoneNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phoneNumber)), __LINE__);
        }
        if (is_null($phoneNumber) || (is_array($phoneNumber) && empty($phoneNumber))) {
            unset($this->PhoneNumber);
        } else {
            $this->PhoneNumber = $phoneNumber;
        }
        return $this;
    }
    /**
     * Get PortalNumber value
     * @return int|null
     */
    public function getPortalNumber()
    {
        return $this->PortalNumber;
    }
    /**
     * Set PortalNumber value
     * @param int $portalNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaIssuerInfo
     */
    public function setPortalNumber($portalNumber = null)
    {
        // validation for constraint: int
        if (!is_null($portalNumber) && !is_numeric($portalNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($portalNumber)), __LINE__);
        }
        $this->PortalNumber = $portalNumber;
        return $this;
    }
    /**
     * Get RepresentativeNumber value
     * @return int|null
     */
    public function getRepresentativeNumber()
    {
        return $this->RepresentativeNumber;
    }
    /**
     * Set RepresentativeNumber value
     * @param int $representativeNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaIssuerInfo
     */
    public function setRepresentativeNumber($representativeNumber = null)
    {
        // validation for constraint: int
        if (!is_null($representativeNumber) && !is_numeric($representativeNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($representativeNumber)), __LINE__);
        }
        $this->RepresentativeNumber = $representativeNumber;
        return $this;
    }
    /**
     * Get UserId value
     * @return int|null
     */
    public function getUserId()
    {
        return $this->UserId;
    }
    /**
     * Set UserId value
     * @param int $userId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaIssuerInfo
     */
    public function setUserId($userId = null)
    {
        // validation for constraint: int
        if (!is_null($userId) && !is_numeric($userId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($userId)), __LINE__);
        }
        $this->UserId = $userId;
        return $this;
    }
    /**
     * Get UserTypesIds value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint|null
     */
    public function getUserTypesIds()
    {
        return isset($this->UserTypesIds) ? $this->UserTypesIds : null;
    }
    /**
     * Set UserTypesIds value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint $userTypesIds
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaIssuerInfo
     */
    public function setUserTypesIds(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint $userTypesIds = null)
    {
        if (is_null($userTypesIds) || (is_array($userTypesIds) && empty($userTypesIds))) {
            unset($this->UserTypesIds);
        } else {
            $this->UserTypesIds = $userTypesIds;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaIssuerInfo
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
