<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContractInformationWrapper StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ContractInformationWrapper
 * @subpackage Structs
 */
class ContractInformationWrapper extends AbstractStructBase
{
    /**
     * The bankAccount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\BankAccount
     */
    public $bankAccount;
    /**
     * The endDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $endDate;
    /**
     * The issueDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $issueDate;
    /**
     * The issuePlace
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $issuePlace;
    /**
     * The paymentDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $paymentDate;
    /**
     * The paymentMethod
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PaymentMethod
     */
    public $paymentMethod;
    /**
     * The startDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $startDate;
    /**
     * Constructor method for ContractInformationWrapper
     * @uses ContractInformationWrapper::setBankAccount()
     * @uses ContractInformationWrapper::setEndDate()
     * @uses ContractInformationWrapper::setIssueDate()
     * @uses ContractInformationWrapper::setIssuePlace()
     * @uses ContractInformationWrapper::setPaymentDate()
     * @uses ContractInformationWrapper::setPaymentMethod()
     * @uses ContractInformationWrapper::setStartDate()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\BankAccount $bankAccount
     * @param string $endDate
     * @param string $issueDate
     * @param string $issuePlace
     * @param string $paymentDate
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PaymentMethod $paymentMethod
     * @param string $startDate
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\BankAccount $bankAccount = null, $endDate = null, $issueDate = null, $issuePlace = null, $paymentDate = null, \Mu4ddi3\Compensa\Webservice\StructType\PaymentMethod $paymentMethod = null, $startDate = null)
    {
        $this
            ->setBankAccount($bankAccount)
            ->setEndDate($endDate)
            ->setIssueDate($issueDate)
            ->setIssuePlace($issuePlace)
            ->setPaymentDate($paymentDate)
            ->setPaymentMethod($paymentMethod)
            ->setStartDate($startDate);
    }
    /**
     * Get bankAccount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BankAccount|null
     */
    public function getBankAccount()
    {
        return isset($this->bankAccount) ? $this->bankAccount : null;
    }
    /**
     * Set bankAccount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\BankAccount $bankAccount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ContractInformationWrapper
     */
    public function setBankAccount(\Mu4ddi3\Compensa\Webservice\StructType\BankAccount $bankAccount = null)
    {
        if (is_null($bankAccount) || (is_array($bankAccount) && empty($bankAccount))) {
            unset($this->bankAccount);
        } else {
            $this->bankAccount = $bankAccount;
        }
        return $this;
    }
    /**
     * Get endDate value
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->endDate;
    }
    /**
     * Set endDate value
     * @param string $endDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ContractInformationWrapper
     */
    public function setEndDate($endDate = null)
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endDate)), __LINE__);
        }
        $this->endDate = $endDate;
        return $this;
    }
    /**
     * Get issueDate value
     * @return string|null
     */
    public function getIssueDate()
    {
        return $this->issueDate;
    }
    /**
     * Set issueDate value
     * @param string $issueDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ContractInformationWrapper
     */
    public function setIssueDate($issueDate = null)
    {
        // validation for constraint: string
        if (!is_null($issueDate) && !is_string($issueDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($issueDate)), __LINE__);
        }
        $this->issueDate = $issueDate;
        return $this;
    }
    /**
     * Get issuePlace value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIssuePlace()
    {
        return isset($this->issuePlace) ? $this->issuePlace : null;
    }
    /**
     * Set issuePlace value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $issuePlace
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ContractInformationWrapper
     */
    public function setIssuePlace($issuePlace = null)
    {
        // validation for constraint: string
        if (!is_null($issuePlace) && !is_string($issuePlace)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($issuePlace)), __LINE__);
        }
        if (is_null($issuePlace) || (is_array($issuePlace) && empty($issuePlace))) {
            unset($this->issuePlace);
        } else {
            $this->issuePlace = $issuePlace;
        }
        return $this;
    }
    /**
     * Get paymentDate value
     * @return string|null
     */
    public function getPaymentDate()
    {
        return $this->paymentDate;
    }
    /**
     * Set paymentDate value
     * @param string $paymentDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ContractInformationWrapper
     */
    public function setPaymentDate($paymentDate = null)
    {
        // validation for constraint: string
        if (!is_null($paymentDate) && !is_string($paymentDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paymentDate)), __LINE__);
        }
        $this->paymentDate = $paymentDate;
        return $this;
    }
    /**
     * Get paymentMethod value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PaymentMethod|null
     */
    public function getPaymentMethod()
    {
        return isset($this->paymentMethod) ? $this->paymentMethod : null;
    }
    /**
     * Set paymentMethod value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PaymentMethod $paymentMethod
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ContractInformationWrapper
     */
    public function setPaymentMethod(\Mu4ddi3\Compensa\Webservice\StructType\PaymentMethod $paymentMethod = null)
    {
        if (is_null($paymentMethod) || (is_array($paymentMethod) && empty($paymentMethod))) {
            unset($this->paymentMethod);
        } else {
            $this->paymentMethod = $paymentMethod;
        }
        return $this;
    }
    /**
     * Get startDate value
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->startDate;
    }
    /**
     * Set startDate value
     * @param string $startDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ContractInformationWrapper
     */
    public function setStartDate($startDate = null)
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startDate)), __LINE__);
        }
        $this->startDate = $startDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ContractInformationWrapper
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
