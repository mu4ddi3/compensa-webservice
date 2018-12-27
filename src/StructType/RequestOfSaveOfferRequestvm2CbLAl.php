<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestOfSaveOfferRequestvm2CbLAl StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RequestOfSaveOfferRequestvm2CbLAl
 * @subpackage Structs
 */
class RequestOfSaveOfferRequestvm2CbLAl extends AbstractStructBase
{
    /**
     * The MethodName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $MethodName;
    /**
     * The Password
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Password;
    /**
     * The RequestData
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\SaveOfferRequest
     */
    public $RequestData;
    /**
     * The RequestID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string
     */
    public $RequestID;
    /**
     * The Timestamp
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Timestamp;
    /**
     * The UserName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $UserName;
    /**
     * Constructor method for RequestOfSaveOfferRequestvm2CbLAl
     * @uses RequestOfSaveOfferRequestvm2CbLAl::setMethodName()
     * @uses RequestOfSaveOfferRequestvm2CbLAl::setPassword()
     * @uses RequestOfSaveOfferRequestvm2CbLAl::setRequestData()
     * @uses RequestOfSaveOfferRequestvm2CbLAl::setRequestID()
     * @uses RequestOfSaveOfferRequestvm2CbLAl::setTimestamp()
     * @uses RequestOfSaveOfferRequestvm2CbLAl::setUserName()
     * @param string $methodName
     * @param string $password
     * @param \Mu4ddi3\Compensa\Webservice\StructType\SaveOfferRequest $requestData
     * @param string $requestID
     * @param string $timestamp
     * @param string $userName
     */
    public function __construct($methodName = null, $password = null, \Mu4ddi3\Compensa\Webservice\StructType\SaveOfferRequest $requestData = null, $requestID = null, $timestamp = null, $userName = null)
    {
        $this
            ->setMethodName($methodName)
            ->setPassword($password)
            ->setRequestData($requestData)
            ->setRequestID($requestID)
            ->setTimestamp($timestamp)
            ->setUserName($userName);
    }
    /**
     * Get MethodName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMethodName()
    {
        return isset($this->MethodName) ? $this->MethodName : null;
    }
    /**
     * Set MethodName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $methodName
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RequestOfSaveOfferRequestvm2CbLAl
     */
    public function setMethodName($methodName = null)
    {
        // validation for constraint: string
        if (!is_null($methodName) && !is_string($methodName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($methodName)), __LINE__);
        }
        if (is_null($methodName) || (is_array($methodName) && empty($methodName))) {
            unset($this->MethodName);
        } else {
            $this->MethodName = $methodName;
        }
        return $this;
    }
    /**
     * Get Password value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPassword()
    {
        return isset($this->Password) ? $this->Password : null;
    }
    /**
     * Set Password value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $password
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RequestOfSaveOfferRequestvm2CbLAl
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($password)), __LINE__);
        }
        if (is_null($password) || (is_array($password) && empty($password))) {
            unset($this->Password);
        } else {
            $this->Password = $password;
        }
        return $this;
    }
    /**
     * Get RequestData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\SaveOfferRequest|null
     */
    public function getRequestData()
    {
        return isset($this->RequestData) ? $this->RequestData : null;
    }
    /**
     * Set RequestData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\SaveOfferRequest $requestData
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RequestOfSaveOfferRequestvm2CbLAl
     */
    public function setRequestData(\Mu4ddi3\Compensa\Webservice\StructType\SaveOfferRequest $requestData = null)
    {
        if (is_null($requestData) || (is_array($requestData) && empty($requestData))) {
            unset($this->RequestData);
        } else {
            $this->RequestData = $requestData;
        }
        return $this;
    }
    /**
     * Get RequestID value
     * @return string|null
     */
    public function getRequestID()
    {
        return $this->RequestID;
    }
    /**
     * Set RequestID value
     * @param string $requestID
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RequestOfSaveOfferRequestvm2CbLAl
     */
    public function setRequestID($requestID = null)
    {
        // validation for constraint: pattern
        if (is_scalar($requestID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $requestID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}", "%s" given', var_export($requestID, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($requestID) && !is_string($requestID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($requestID)), __LINE__);
        }
        $this->RequestID = $requestID;
        return $this;
    }
    /**
     * Get Timestamp value
     * @return string|null
     */
    public function getTimestamp()
    {
        return $this->Timestamp;
    }
    /**
     * Set Timestamp value
     * @param string $timestamp
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RequestOfSaveOfferRequestvm2CbLAl
     */
    public function setTimestamp($timestamp = null)
    {
        // validation for constraint: string
        if (!is_null($timestamp) && !is_string($timestamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timestamp)), __LINE__);
        }
        $this->Timestamp = $timestamp;
        return $this;
    }
    /**
     * Get UserName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUserName()
    {
        return isset($this->UserName) ? $this->UserName : null;
    }
    /**
     * Set UserName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $userName
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RequestOfSaveOfferRequestvm2CbLAl
     */
    public function setUserName($userName = null)
    {
        // validation for constraint: string
        if (!is_null($userName) && !is_string($userName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($userName)), __LINE__);
        }
        if (is_null($userName) || (is_array($userName) && empty($userName))) {
            unset($this->UserName);
        } else {
            $this->UserName = $userName;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RequestOfSaveOfferRequestvm2CbLAl
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
