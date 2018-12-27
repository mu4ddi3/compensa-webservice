<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MotorTariffDefinitionUser StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MotorTariffDefinitionUser
 * @subpackage Structs
 */
class MotorTariffDefinitionUser extends AbstractStructBase
{
    /**
     * The DepartmentContractScope
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DepartmentContractScope;
    /**
     * The TariffId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $TariffId;
    /**
     * The UserId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $UserId;
    /**
     * Constructor method for MotorTariffDefinitionUser
     * @uses MotorTariffDefinitionUser::setDepartmentContractScope()
     * @uses MotorTariffDefinitionUser::setTariffId()
     * @uses MotorTariffDefinitionUser::setUserId()
     * @param string $departmentContractScope
     * @param int $tariffId
     * @param int $userId
     */
    public function __construct($departmentContractScope = null, $tariffId = null, $userId = null)
    {
        $this
            ->setDepartmentContractScope($departmentContractScope)
            ->setTariffId($tariffId)
            ->setUserId($userId);
    }
    /**
     * Get DepartmentContractScope value
     * @return string|null
     */
    public function getDepartmentContractScope()
    {
        return $this->DepartmentContractScope;
    }
    /**
     * Set DepartmentContractScope value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\DepartmentContractScope::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\DepartmentContractScope::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $departmentContractScope
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorTariffDefinitionUser
     */
    public function setDepartmentContractScope($departmentContractScope = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\DepartmentContractScope::valueIsValid($departmentContractScope)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $departmentContractScope, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\DepartmentContractScope::getValidValues())), __LINE__);
        }
        $this->DepartmentContractScope = $departmentContractScope;
        return $this;
    }
    /**
     * Get TariffId value
     * @return int|null
     */
    public function getTariffId()
    {
        return $this->TariffId;
    }
    /**
     * Set TariffId value
     * @param int $tariffId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorTariffDefinitionUser
     */
    public function setTariffId($tariffId = null)
    {
        // validation for constraint: int
        if (!is_null($tariffId) && !is_numeric($tariffId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($tariffId)), __LINE__);
        }
        $this->TariffId = $tariffId;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorTariffDefinitionUser
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorTariffDefinitionUser
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
