<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCommonTariffIdRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetCommonTariffIdRequest
 * @subpackage Structs
 */
class GetCommonTariffIdRequest extends AbstractStructBase
{
    /**
     * The CommonTariffScope
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CommonTariffScope;
    /**
     * The Department
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Department;
    /**
     * The UserId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $UserId;
    /**
     * Constructor method for GetCommonTariffIdRequest
     * @uses GetCommonTariffIdRequest::setCommonTariffScope()
     * @uses GetCommonTariffIdRequest::setDepartment()
     * @uses GetCommonTariffIdRequest::setUserId()
     * @param string $commonTariffScope
     * @param string $department
     * @param int $userId
     */
    public function __construct($commonTariffScope = null, $department = null, $userId = null)
    {
        $this
            ->setCommonTariffScope($commonTariffScope)
            ->setDepartment($department)
            ->setUserId($userId);
    }
    /**
     * Get CommonTariffScope value
     * @return string|null
     */
    public function getCommonTariffScope()
    {
        return $this->CommonTariffScope;
    }
    /**
     * Set CommonTariffScope value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\CommonTariffScope::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\CommonTariffScope::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $commonTariffScope
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetCommonTariffIdRequest
     */
    public function setCommonTariffScope($commonTariffScope = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\CommonTariffScope::valueIsValid($commonTariffScope)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $commonTariffScope, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\CommonTariffScope::getValidValues())), __LINE__);
        }
        $this->CommonTariffScope = $commonTariffScope;
        return $this;
    }
    /**
     * Get Department value
     * @return string|null
     */
    public function getDepartment()
    {
        return $this->Department;
    }
    /**
     * Set Department value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\DepartmentContractScope::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\DepartmentContractScope::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $department
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetCommonTariffIdRequest
     */
    public function setDepartment($department = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\DepartmentContractScope::valueIsValid($department)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $department, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\DepartmentContractScope::getValidValues())), __LINE__);
        }
        $this->Department = $department;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetCommonTariffIdRequest
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetCommonTariffIdRequest
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
