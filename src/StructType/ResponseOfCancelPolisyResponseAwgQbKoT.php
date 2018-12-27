<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseOfCancelPolisyResponseAwgQbKoT StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ResponseOfCancelPolisyResponseAwgQbKoT
 * @subpackage Structs
 */
class ResponseOfCancelPolisyResponseAwgQbKoT extends AbstractStructBase
{
    /**
     * The Errors
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfError
     */
    public $Errors;
    /**
     * The MethodName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $MethodName;
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
     * The ResponseData
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\CancelPolisyResponse
     */
    public $ResponseData;
    /**
     * The Timestamp
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Timestamp;
    /**
     * Constructor method for ResponseOfCancelPolisyResponseAwgQbKoT
     * @uses ResponseOfCancelPolisyResponseAwgQbKoT::setErrors()
     * @uses ResponseOfCancelPolisyResponseAwgQbKoT::setMethodName()
     * @uses ResponseOfCancelPolisyResponseAwgQbKoT::setRequestID()
     * @uses ResponseOfCancelPolisyResponseAwgQbKoT::setResponseData()
     * @uses ResponseOfCancelPolisyResponseAwgQbKoT::setTimestamp()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfError $errors
     * @param string $methodName
     * @param string $requestID
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CancelPolisyResponse $responseData
     * @param string $timestamp
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfError $errors = null, $methodName = null, $requestID = null, \Mu4ddi3\Compensa\Webservice\StructType\CancelPolisyResponse $responseData = null, $timestamp = null)
    {
        $this
            ->setErrors($errors)
            ->setMethodName($methodName)
            ->setRequestID($requestID)
            ->setResponseData($responseData)
            ->setTimestamp($timestamp);
    }
    /**
     * Get Errors value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfError|null
     */
    public function getErrors()
    {
        return isset($this->Errors) ? $this->Errors : null;
    }
    /**
     * Set Errors value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfError $errors
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ResponseOfCancelPolisyResponseAwgQbKoT
     */
    public function setErrors(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfError $errors = null)
    {
        if (is_null($errors) || (is_array($errors) && empty($errors))) {
            unset($this->Errors);
        } else {
            $this->Errors = $errors;
        }
        return $this;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ResponseOfCancelPolisyResponseAwgQbKoT
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ResponseOfCancelPolisyResponseAwgQbKoT
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
     * Get ResponseData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CancelPolisyResponse|null
     */
    public function getResponseData()
    {
        return isset($this->ResponseData) ? $this->ResponseData : null;
    }
    /**
     * Set ResponseData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CancelPolisyResponse $responseData
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ResponseOfCancelPolisyResponseAwgQbKoT
     */
    public function setResponseData(\Mu4ddi3\Compensa\Webservice\StructType\CancelPolisyResponse $responseData = null)
    {
        if (is_null($responseData) || (is_array($responseData) && empty($responseData))) {
            unset($this->ResponseData);
        } else {
            $this->ResponseData = $responseData;
        }
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ResponseOfCancelPolisyResponseAwgQbKoT
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ResponseOfCancelPolisyResponseAwgQbKoT
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
