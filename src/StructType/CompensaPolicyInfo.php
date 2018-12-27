<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompensaPolicyInfo StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CompensaPolicyInfo
 * @subpackage Structs
 */
class CompensaPolicyInfo extends AbstractStructBase
{
    /**
     * The Messages
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMessage
     */
    public $Messages;
    /**
     * The PolicyInfoType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\CompensaContractCalculatorType
     */
    public $PolicyInfoType;
    /**
     * The PolicyNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PolicyNumber;
    /**
     * The Premium
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $Premium;
    /**
     * The ProductTypeName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ProductTypeName;
    /**
     * Constructor method for CompensaPolicyInfo
     * @uses CompensaPolicyInfo::setMessages()
     * @uses CompensaPolicyInfo::setPolicyInfoType()
     * @uses CompensaPolicyInfo::setPolicyNumber()
     * @uses CompensaPolicyInfo::setPremium()
     * @uses CompensaPolicyInfo::setProductTypeName()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMessage $messages
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CompensaContractCalculatorType $policyInfoType
     * @param int $policyNumber
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premium
     * @param string $productTypeName
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMessage $messages = null, \Mu4ddi3\Compensa\Webservice\StructType\CompensaContractCalculatorType $policyInfoType = null, $policyNumber = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premium = null, $productTypeName = null)
    {
        $this
            ->setMessages($messages)
            ->setPolicyInfoType($policyInfoType)
            ->setPolicyNumber($policyNumber)
            ->setPremium($premium)
            ->setProductTypeName($productTypeName);
    }
    /**
     * Get Messages value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMessage|null
     */
    public function getMessages()
    {
        return isset($this->Messages) ? $this->Messages : null;
    }
    /**
     * Set Messages value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMessage $messages
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaPolicyInfo
     */
    public function setMessages(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMessage $messages = null)
    {
        if (is_null($messages) || (is_array($messages) && empty($messages))) {
            unset($this->Messages);
        } else {
            $this->Messages = $messages;
        }
        return $this;
    }
    /**
     * Get PolicyInfoType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaContractCalculatorType|null
     */
    public function getPolicyInfoType()
    {
        return isset($this->PolicyInfoType) ? $this->PolicyInfoType : null;
    }
    /**
     * Set PolicyInfoType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CompensaContractCalculatorType $policyInfoType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaPolicyInfo
     */
    public function setPolicyInfoType(\Mu4ddi3\Compensa\Webservice\StructType\CompensaContractCalculatorType $policyInfoType = null)
    {
        if (is_null($policyInfoType) || (is_array($policyInfoType) && empty($policyInfoType))) {
            unset($this->PolicyInfoType);
        } else {
            $this->PolicyInfoType = $policyInfoType;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaPolicyInfo
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
     * Get Premium value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getPremium()
    {
        return isset($this->Premium) ? $this->Premium : null;
    }
    /**
     * Set Premium value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premium
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaPolicyInfo
     */
    public function setPremium(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premium = null)
    {
        if (is_null($premium) || (is_array($premium) && empty($premium))) {
            unset($this->Premium);
        } else {
            $this->Premium = $premium;
        }
        return $this;
    }
    /**
     * Get ProductTypeName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProductTypeName()
    {
        return isset($this->ProductTypeName) ? $this->ProductTypeName : null;
    }
    /**
     * Set ProductTypeName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $productTypeName
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaPolicyInfo
     */
    public function setProductTypeName($productTypeName = null)
    {
        // validation for constraint: string
        if (!is_null($productTypeName) && !is_string($productTypeName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productTypeName)), __LINE__);
        }
        if (is_null($productTypeName) || (is_array($productTypeName) && empty($productTypeName))) {
            unset($this->ProductTypeName);
        } else {
            $this->ProductTypeName = $productTypeName;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaPolicyInfo
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
