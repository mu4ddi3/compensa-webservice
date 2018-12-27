<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAnyCommonTariffForUserExistsRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetAnyCommonTariffForUserExistsRequest
 * @subpackage Structs
 */
class GetAnyCommonTariffForUserExistsRequest extends AbstractStructBase
{
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
     * Constructor method for GetAnyCommonTariffForUserExistsRequest
     * @uses GetAnyCommonTariffForUserExistsRequest::setDepartment()
     * @uses GetAnyCommonTariffForUserExistsRequest::setUserId()
     * @param string $department
     * @param int $userId
     */
    public function __construct($department = null, $userId = null)
    {
        $this
            ->setDepartment($department)
            ->setUserId($userId);
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetAnyCommonTariffForUserExistsRequest
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetAnyCommonTariffForUserExistsRequest
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetAnyCommonTariffForUserExistsRequest
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
