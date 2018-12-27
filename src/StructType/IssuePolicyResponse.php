<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IssuePolicyResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:IssuePolicyResponse
 * @subpackage Structs
 */
class IssuePolicyResponse extends AbstractStructBase
{
    /**
     * The IssuePolicyResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ResponseOfIssuePolicyResponseAwgQbKoT
     */
    public $IssuePolicyResult;
    /**
     * The Contract
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public $Contract;
    /**
     * The PolicyNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PolicyNumber;
    /**
     * The PolicyType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PolicyType;
    /**
     * The Success
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Success;
    /**
     * Constructor method for IssuePolicyResponse
     * @uses IssuePolicyResponse::setIssuePolicyResult()
     * @uses IssuePolicyResponse::setContract()
     * @uses IssuePolicyResponse::setPolicyNumber()
     * @uses IssuePolicyResponse::setPolicyType()
     * @uses IssuePolicyResponse::setSuccess()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ResponseOfIssuePolicyResponseAwgQbKoT $issuePolicyResult
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MotorContract $contract
     * @param int $policyNumber
     * @param string $policyType
     * @param bool $success
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\ResponseOfIssuePolicyResponseAwgQbKoT $issuePolicyResult = null, \Mu4ddi3\Compensa\Webservice\StructType\MotorContract $contract = null, $policyNumber = null, $policyType = null, $success = null)
    {
        $this
            ->setIssuePolicyResult($issuePolicyResult)
            ->setContract($contract)
            ->setPolicyNumber($policyNumber)
            ->setPolicyType($policyType)
            ->setSuccess($success);
    }
    /**
     * Get IssuePolicyResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ResponseOfIssuePolicyResponseAwgQbKoT|null
     */
    public function getIssuePolicyResult()
    {
        return isset($this->IssuePolicyResult) ? $this->IssuePolicyResult : null;
    }
    /**
     * Set IssuePolicyResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ResponseOfIssuePolicyResponseAwgQbKoT $issuePolicyResult
     * @return \Mu4ddi3\Compensa\Webservice\StructType\IssuePolicyResponse
     */
    public function setIssuePolicyResult(\Mu4ddi3\Compensa\Webservice\StructType\ResponseOfIssuePolicyResponseAwgQbKoT $issuePolicyResult = null)
    {
        if (is_null($issuePolicyResult) || (is_array($issuePolicyResult) && empty($issuePolicyResult))) {
            unset($this->IssuePolicyResult);
        } else {
            $this->IssuePolicyResult = $issuePolicyResult;
        }
        return $this;
    }
    /**
     * Get Contract value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract|null
     */
    public function getContract()
    {
        return isset($this->Contract) ? $this->Contract : null;
    }
    /**
     * Set Contract value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MotorContract $contract
     * @return \Mu4ddi3\Compensa\Webservice\StructType\IssuePolicyResponse
     */
    public function setContract(\Mu4ddi3\Compensa\Webservice\StructType\MotorContract $contract = null)
    {
        if (is_null($contract) || (is_array($contract) && empty($contract))) {
            unset($this->Contract);
        } else {
            $this->Contract = $contract;
        }
        return $this;
    }
    /**
     * Get PolicyNumber value
     * @return int|null
     */
    public function getPolicyNumber()
    {
        return $this->PolicyNumber;
    }
    /**
     * Set PolicyNumber value
     * @param int $policyNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\IssuePolicyResponse
     */
    public function setPolicyNumber($policyNumber = null)
    {
        // validation for constraint: int
        if (!is_null($policyNumber) && !is_numeric($policyNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($policyNumber)), __LINE__);
        }
        $this->PolicyNumber = $policyNumber;
        return $this;
    }
    /**
     * Get PolicyType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPolicyType()
    {
        return isset($this->PolicyType) ? $this->PolicyType : null;
    }
    /**
     * Set PolicyType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $policyType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\IssuePolicyResponse
     */
    public function setPolicyType($policyType = null)
    {
        // validation for constraint: string
        if (!is_null($policyType) && !is_string($policyType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($policyType)), __LINE__);
        }
        if (is_null($policyType) || (is_array($policyType) && empty($policyType))) {
            unset($this->PolicyType);
        } else {
            $this->PolicyType = $policyType;
        }
        return $this;
    }
    /**
     * Get Success value
     * @return bool|null
     */
    public function getSuccess()
    {
        return $this->Success;
    }
    /**
     * Set Success value
     * @param bool $success
     * @return \Mu4ddi3\Compensa\Webservice\StructType\IssuePolicyResponse
     */
    public function setSuccess($success = null)
    {
        // validation for constraint: boolean
        if (!is_null($success) && !is_bool($success)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($success)), __LINE__);
        }
        $this->Success = $success;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\IssuePolicyResponse
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
