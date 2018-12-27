<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PropertyInsurancePolicyInfo StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PropertyInsurancePolicyInfo
 * @subpackage Structs
 */
class PropertyInsurancePolicyInfo extends AbstractStructBase
{
    /**
     * The DoesNotExistInPortal
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $DoesNotExistInPortal;
    /**
     * The EndDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $EndDate;
    /**
     * The ManuallyAdded
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ManuallyAdded;
    /**
     * The PolicyId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PolicyId;
    /**
     * The Premium
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $Premium;
    /**
     * The ProductTypeId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ProductTypeId;
    /**
     * The StartDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $StartDate;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Status;
    /**
     * Constructor method for PropertyInsurancePolicyInfo
     * @uses PropertyInsurancePolicyInfo::setDoesNotExistInPortal()
     * @uses PropertyInsurancePolicyInfo::setEndDate()
     * @uses PropertyInsurancePolicyInfo::setManuallyAdded()
     * @uses PropertyInsurancePolicyInfo::setPolicyId()
     * @uses PropertyInsurancePolicyInfo::setPremium()
     * @uses PropertyInsurancePolicyInfo::setProductTypeId()
     * @uses PropertyInsurancePolicyInfo::setStartDate()
     * @uses PropertyInsurancePolicyInfo::setStatus()
     * @param bool $doesNotExistInPortal
     * @param string $endDate
     * @param bool $manuallyAdded
     * @param string $policyId
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premium
     * @param string $productTypeId
     * @param string $startDate
     * @param int $status
     */
    public function __construct($doesNotExistInPortal = null, $endDate = null, $manuallyAdded = null, $policyId = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premium = null, $productTypeId = null, $startDate = null, $status = null)
    {
        $this
            ->setDoesNotExistInPortal($doesNotExistInPortal)
            ->setEndDate($endDate)
            ->setManuallyAdded($manuallyAdded)
            ->setPolicyId($policyId)
            ->setPremium($premium)
            ->setProductTypeId($productTypeId)
            ->setStartDate($startDate)
            ->setStatus($status);
    }
    /**
     * Get DoesNotExistInPortal value
     * @return bool|null
     */
    public function getDoesNotExistInPortal()
    {
        return $this->DoesNotExistInPortal;
    }
    /**
     * Set DoesNotExistInPortal value
     * @param bool $doesNotExistInPortal
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PropertyInsurancePolicyInfo
     */
    public function setDoesNotExistInPortal($doesNotExistInPortal = null)
    {
        // validation for constraint: boolean
        if (!is_null($doesNotExistInPortal) && !is_bool($doesNotExistInPortal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($doesNotExistInPortal)), __LINE__);
        }
        $this->DoesNotExistInPortal = $doesNotExistInPortal;
        return $this;
    }
    /**
     * Get EndDate value
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }
    /**
     * Set EndDate value
     * @param string $endDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PropertyInsurancePolicyInfo
     */
    public function setEndDate($endDate = null)
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endDate)), __LINE__);
        }
        $this->EndDate = $endDate;
        return $this;
    }
    /**
     * Get ManuallyAdded value
     * @return bool|null
     */
    public function getManuallyAdded()
    {
        return $this->ManuallyAdded;
    }
    /**
     * Set ManuallyAdded value
     * @param bool $manuallyAdded
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PropertyInsurancePolicyInfo
     */
    public function setManuallyAdded($manuallyAdded = null)
    {
        // validation for constraint: boolean
        if (!is_null($manuallyAdded) && !is_bool($manuallyAdded)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($manuallyAdded)), __LINE__);
        }
        $this->ManuallyAdded = $manuallyAdded;
        return $this;
    }
    /**
     * Get PolicyId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPolicyId()
    {
        return isset($this->PolicyId) ? $this->PolicyId : null;
    }
    /**
     * Set PolicyId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $policyId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PropertyInsurancePolicyInfo
     */
    public function setPolicyId($policyId = null)
    {
        // validation for constraint: string
        if (!is_null($policyId) && !is_string($policyId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($policyId)), __LINE__);
        }
        if (is_null($policyId) || (is_array($policyId) && empty($policyId))) {
            unset($this->PolicyId);
        } else {
            $this->PolicyId = $policyId;
        }
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PropertyInsurancePolicyInfo
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
     * Get ProductTypeId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProductTypeId()
    {
        return isset($this->ProductTypeId) ? $this->ProductTypeId : null;
    }
    /**
     * Set ProductTypeId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $productTypeId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PropertyInsurancePolicyInfo
     */
    public function setProductTypeId($productTypeId = null)
    {
        // validation for constraint: string
        if (!is_null($productTypeId) && !is_string($productTypeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productTypeId)), __LINE__);
        }
        if (is_null($productTypeId) || (is_array($productTypeId) && empty($productTypeId))) {
            unset($this->ProductTypeId);
        } else {
            $this->ProductTypeId = $productTypeId;
        }
        return $this;
    }
    /**
     * Get StartDate value
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }
    /**
     * Set StartDate value
     * @param string $startDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PropertyInsurancePolicyInfo
     */
    public function setStartDate($startDate = null)
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startDate)), __LINE__);
        }
        $this->StartDate = $startDate;
        return $this;
    }
    /**
     * Get Status value
     * @return int|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param int $status
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PropertyInsurancePolicyInfo
     */
    public function setStatus($status = null)
    {
        // validation for constraint: int
        if (!is_null($status) && !is_numeric($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($status)), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PropertyInsurancePolicyInfo
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
