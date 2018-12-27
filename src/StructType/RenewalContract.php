<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RenewalContract StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RenewalContract
 * @subpackage Structs
 */
class RenewalContract extends AbstractStructBase
{
    /**
     * The AssignedUserId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $AssignedUserId;
    /**
     * The CommisionFor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CommisionFor;
    /**
     * The Contract
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Contract
     */
    public $Contract;
    /**
     * The ErrorList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfError
     */
    public $ErrorList;
    /**
     * The ExpiryDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ExpiryDate;
    /**
     * The IsCentralRenewal
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $IsCentralRenewal;
    /**
     * The IssuePolicyRenewalMode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\IssuePolicyRenewalMode
     */
    public $IssuePolicyRenewalMode;
    /**
     * The LastProcessingDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LastProcessingDate;
    /**
     * The NewProductTypeId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NewProductTypeId;
    /**
     * The PartnerCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PartnerCode;
    /**
     * The PartnerName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PartnerName;
    /**
     * The PolicyId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PolicyId;
    /**
     * The PreviousOfferId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PreviousOfferId;
    /**
     * The ProcessingReason
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ProcessingReason
     */
    public $ProcessingReason;
    /**
     * The ProcessingStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ProcessingStatus
     */
    public $ProcessingStatus;
    /**
     * The ProductTypeId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ProductTypeId;
    /**
     * The ProductTypeV4Id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ProductTypeV4Id;
    /**
     * The RenewalMode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\RenewalMode
     */
    public $RenewalMode;
    /**
     * The RenewalStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\RenewalStatus
     */
    public $RenewalStatus;
    /**
     * The RenewedPolicyId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $RenewedPolicyId;
    /**
     * The RenewedProductTypeId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $RenewedProductTypeId;
    /**
     * The TariffVersion
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $TariffVersion;
    /**
     * The UserId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $UserId;
    /**
     * The WorkflowId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string
     */
    public $WorkflowId;
    /**
     * The version
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $version;
    /**
     * Constructor method for RenewalContract
     * @uses RenewalContract::setAssignedUserId()
     * @uses RenewalContract::setCommisionFor()
     * @uses RenewalContract::setContract()
     * @uses RenewalContract::setErrorList()
     * @uses RenewalContract::setExpiryDate()
     * @uses RenewalContract::setIsCentralRenewal()
     * @uses RenewalContract::setIssuePolicyRenewalMode()
     * @uses RenewalContract::setLastProcessingDate()
     * @uses RenewalContract::setNewProductTypeId()
     * @uses RenewalContract::setPartnerCode()
     * @uses RenewalContract::setPartnerName()
     * @uses RenewalContract::setPolicyId()
     * @uses RenewalContract::setPreviousOfferId()
     * @uses RenewalContract::setProcessingReason()
     * @uses RenewalContract::setProcessingStatus()
     * @uses RenewalContract::setProductTypeId()
     * @uses RenewalContract::setProductTypeV4Id()
     * @uses RenewalContract::setRenewalMode()
     * @uses RenewalContract::setRenewalStatus()
     * @uses RenewalContract::setRenewedPolicyId()
     * @uses RenewalContract::setRenewedProductTypeId()
     * @uses RenewalContract::setTariffVersion()
     * @uses RenewalContract::setUserId()
     * @uses RenewalContract::setWorkflowId()
     * @uses RenewalContract::setVersion()
     * @param int $assignedUserId
     * @param string $commisionFor
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Contract $contract
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfError $errorList
     * @param string $expiryDate
     * @param bool $isCentralRenewal
     * @param \Mu4ddi3\Compensa\Webservice\StructType\IssuePolicyRenewalMode $issuePolicyRenewalMode
     * @param string $lastProcessingDate
     * @param int $newProductTypeId
     * @param string $partnerCode
     * @param string $partnerName
     * @param int $policyId
     * @param int $previousOfferId
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ProcessingReason $processingReason
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ProcessingStatus $processingStatus
     * @param int $productTypeId
     * @param int $productTypeV4Id
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RenewalMode $renewalMode
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RenewalStatus $renewalStatus
     * @param int $renewedPolicyId
     * @param int $renewedProductTypeId
     * @param int $tariffVersion
     * @param int $userId
     * @param string $workflowId
     * @param string $version
     */
    public function __construct($assignedUserId = null, $commisionFor = null, \Mu4ddi3\Compensa\Webservice\StructType\Contract $contract = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfError $errorList = null, $expiryDate = null, $isCentralRenewal = null, \Mu4ddi3\Compensa\Webservice\StructType\IssuePolicyRenewalMode $issuePolicyRenewalMode = null, $lastProcessingDate = null, $newProductTypeId = null, $partnerCode = null, $partnerName = null, $policyId = null, $previousOfferId = null, \Mu4ddi3\Compensa\Webservice\StructType\ProcessingReason $processingReason = null, \Mu4ddi3\Compensa\Webservice\StructType\ProcessingStatus $processingStatus = null, $productTypeId = null, $productTypeV4Id = null, \Mu4ddi3\Compensa\Webservice\StructType\RenewalMode $renewalMode = null, \Mu4ddi3\Compensa\Webservice\StructType\RenewalStatus $renewalStatus = null, $renewedPolicyId = null, $renewedProductTypeId = null, $tariffVersion = null, $userId = null, $workflowId = null, $version = null)
    {
        $this
            ->setAssignedUserId($assignedUserId)
            ->setCommisionFor($commisionFor)
            ->setContract($contract)
            ->setErrorList($errorList)
            ->setExpiryDate($expiryDate)
            ->setIsCentralRenewal($isCentralRenewal)
            ->setIssuePolicyRenewalMode($issuePolicyRenewalMode)
            ->setLastProcessingDate($lastProcessingDate)
            ->setNewProductTypeId($newProductTypeId)
            ->setPartnerCode($partnerCode)
            ->setPartnerName($partnerName)
            ->setPolicyId($policyId)
            ->setPreviousOfferId($previousOfferId)
            ->setProcessingReason($processingReason)
            ->setProcessingStatus($processingStatus)
            ->setProductTypeId($productTypeId)
            ->setProductTypeV4Id($productTypeV4Id)
            ->setRenewalMode($renewalMode)
            ->setRenewalStatus($renewalStatus)
            ->setRenewedPolicyId($renewedPolicyId)
            ->setRenewedProductTypeId($renewedProductTypeId)
            ->setTariffVersion($tariffVersion)
            ->setUserId($userId)
            ->setWorkflowId($workflowId)
            ->setVersion($version);
    }
    /**
     * Get AssignedUserId value
     * @return int|null
     */
    public function getAssignedUserId()
    {
        return $this->AssignedUserId;
    }
    /**
     * Set AssignedUserId value
     * @param int $assignedUserId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalContract
     */
    public function setAssignedUserId($assignedUserId = null)
    {
        // validation for constraint: int
        if (!is_null($assignedUserId) && !is_numeric($assignedUserId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($assignedUserId)), __LINE__);
        }
        $this->AssignedUserId = $assignedUserId;
        return $this;
    }
    /**
     * Get CommisionFor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCommisionFor()
    {
        return isset($this->CommisionFor) ? $this->CommisionFor : null;
    }
    /**
     * Set CommisionFor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $commisionFor
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalContract
     */
    public function setCommisionFor($commisionFor = null)
    {
        // validation for constraint: string
        if (!is_null($commisionFor) && !is_string($commisionFor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($commisionFor)), __LINE__);
        }
        if (is_null($commisionFor) || (is_array($commisionFor) && empty($commisionFor))) {
            unset($this->CommisionFor);
        } else {
            $this->CommisionFor = $commisionFor;
        }
        return $this;
    }
    /**
     * Get Contract value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Contract|null
     */
    public function getContract()
    {
        return isset($this->Contract) ? $this->Contract : null;
    }
    /**
     * Set Contract value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Contract $contract
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalContract
     */
    public function setContract(\Mu4ddi3\Compensa\Webservice\StructType\Contract $contract = null)
    {
        if (is_null($contract) || (is_array($contract) && empty($contract))) {
            unset($this->Contract);
        } else {
            $this->Contract = $contract;
        }
        return $this;
    }
    /**
     * Get ErrorList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfError|null
     */
    public function getErrorList()
    {
        return isset($this->ErrorList) ? $this->ErrorList : null;
    }
    /**
     * Set ErrorList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfError $errorList
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalContract
     */
    public function setErrorList(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfError $errorList = null)
    {
        if (is_null($errorList) || (is_array($errorList) && empty($errorList))) {
            unset($this->ErrorList);
        } else {
            $this->ErrorList = $errorList;
        }
        return $this;
    }
    /**
     * Get ExpiryDate value
     * @return string|null
     */
    public function getExpiryDate()
    {
        return $this->ExpiryDate;
    }
    /**
     * Set ExpiryDate value
     * @param string $expiryDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalContract
     */
    public function setExpiryDate($expiryDate = null)
    {
        // validation for constraint: string
        if (!is_null($expiryDate) && !is_string($expiryDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expiryDate)), __LINE__);
        }
        $this->ExpiryDate = $expiryDate;
        return $this;
    }
    /**
     * Get IsCentralRenewal value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsCentralRenewal()
    {
        return isset($this->IsCentralRenewal) ? $this->IsCentralRenewal : null;
    }
    /**
     * Set IsCentralRenewal value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isCentralRenewal
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalContract
     */
    public function setIsCentralRenewal($isCentralRenewal = null)
    {
        // validation for constraint: boolean
        if (!is_null($isCentralRenewal) && !is_bool($isCentralRenewal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isCentralRenewal)), __LINE__);
        }
        if (is_null($isCentralRenewal) || (is_array($isCentralRenewal) && empty($isCentralRenewal))) {
            unset($this->IsCentralRenewal);
        } else {
            $this->IsCentralRenewal = $isCentralRenewal;
        }
        return $this;
    }
    /**
     * Get IssuePolicyRenewalMode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\IssuePolicyRenewalMode|null
     */
    public function getIssuePolicyRenewalMode()
    {
        return isset($this->IssuePolicyRenewalMode) ? $this->IssuePolicyRenewalMode : null;
    }
    /**
     * Set IssuePolicyRenewalMode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\IssuePolicyRenewalMode $issuePolicyRenewalMode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalContract
     */
    public function setIssuePolicyRenewalMode(\Mu4ddi3\Compensa\Webservice\StructType\IssuePolicyRenewalMode $issuePolicyRenewalMode = null)
    {
        if (is_null($issuePolicyRenewalMode) || (is_array($issuePolicyRenewalMode) && empty($issuePolicyRenewalMode))) {
            unset($this->IssuePolicyRenewalMode);
        } else {
            $this->IssuePolicyRenewalMode = $issuePolicyRenewalMode;
        }
        return $this;
    }
    /**
     * Get LastProcessingDate value
     * @return string|null
     */
    public function getLastProcessingDate()
    {
        return $this->LastProcessingDate;
    }
    /**
     * Set LastProcessingDate value
     * @param string $lastProcessingDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalContract
     */
    public function setLastProcessingDate($lastProcessingDate = null)
    {
        // validation for constraint: string
        if (!is_null($lastProcessingDate) && !is_string($lastProcessingDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastProcessingDate)), __LINE__);
        }
        $this->LastProcessingDate = $lastProcessingDate;
        return $this;
    }
    /**
     * Get NewProductTypeId value
     * @return int|null
     */
    public function getNewProductTypeId()
    {
        return $this->NewProductTypeId;
    }
    /**
     * Set NewProductTypeId value
     * @param int $newProductTypeId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalContract
     */
    public function setNewProductTypeId($newProductTypeId = null)
    {
        // validation for constraint: int
        if (!is_null($newProductTypeId) && !is_numeric($newProductTypeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($newProductTypeId)), __LINE__);
        }
        $this->NewProductTypeId = $newProductTypeId;
        return $this;
    }
    /**
     * Get PartnerCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPartnerCode()
    {
        return isset($this->PartnerCode) ? $this->PartnerCode : null;
    }
    /**
     * Set PartnerCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $partnerCode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalContract
     */
    public function setPartnerCode($partnerCode = null)
    {
        // validation for constraint: string
        if (!is_null($partnerCode) && !is_string($partnerCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($partnerCode)), __LINE__);
        }
        if (is_null($partnerCode) || (is_array($partnerCode) && empty($partnerCode))) {
            unset($this->PartnerCode);
        } else {
            $this->PartnerCode = $partnerCode;
        }
        return $this;
    }
    /**
     * Get PartnerName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPartnerName()
    {
        return isset($this->PartnerName) ? $this->PartnerName : null;
    }
    /**
     * Set PartnerName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $partnerName
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalContract
     */
    public function setPartnerName($partnerName = null)
    {
        // validation for constraint: string
        if (!is_null($partnerName) && !is_string($partnerName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($partnerName)), __LINE__);
        }
        if (is_null($partnerName) || (is_array($partnerName) && empty($partnerName))) {
            unset($this->PartnerName);
        } else {
            $this->PartnerName = $partnerName;
        }
        return $this;
    }
    /**
     * Get PolicyId value
     * @return int|null
     */
    public function getPolicyId()
    {
        return $this->PolicyId;
    }
    /**
     * Set PolicyId value
     * @param int $policyId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalContract
     */
    public function setPolicyId($policyId = null)
    {
        // validation for constraint: int
        if (!is_null($policyId) && !is_numeric($policyId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($policyId)), __LINE__);
        }
        $this->PolicyId = $policyId;
        return $this;
    }
    /**
     * Get PreviousOfferId value
     * @return int|null
     */
    public function getPreviousOfferId()
    {
        return $this->PreviousOfferId;
    }
    /**
     * Set PreviousOfferId value
     * @param int $previousOfferId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalContract
     */
    public function setPreviousOfferId($previousOfferId = null)
    {
        // validation for constraint: int
        if (!is_null($previousOfferId) && !is_numeric($previousOfferId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($previousOfferId)), __LINE__);
        }
        $this->PreviousOfferId = $previousOfferId;
        return $this;
    }
    /**
     * Get ProcessingReason value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ProcessingReason|null
     */
    public function getProcessingReason()
    {
        return isset($this->ProcessingReason) ? $this->ProcessingReason : null;
    }
    /**
     * Set ProcessingReason value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ProcessingReason $processingReason
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalContract
     */
    public function setProcessingReason(\Mu4ddi3\Compensa\Webservice\StructType\ProcessingReason $processingReason = null)
    {
        if (is_null($processingReason) || (is_array($processingReason) && empty($processingReason))) {
            unset($this->ProcessingReason);
        } else {
            $this->ProcessingReason = $processingReason;
        }
        return $this;
    }
    /**
     * Get ProcessingStatus value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ProcessingStatus|null
     */
    public function getProcessingStatus()
    {
        return isset($this->ProcessingStatus) ? $this->ProcessingStatus : null;
    }
    /**
     * Set ProcessingStatus value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ProcessingStatus $processingStatus
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalContract
     */
    public function setProcessingStatus(\Mu4ddi3\Compensa\Webservice\StructType\ProcessingStatus $processingStatus = null)
    {
        if (is_null($processingStatus) || (is_array($processingStatus) && empty($processingStatus))) {
            unset($this->ProcessingStatus);
        } else {
            $this->ProcessingStatus = $processingStatus;
        }
        return $this;
    }
    /**
     * Get ProductTypeId value
     * @return int|null
     */
    public function getProductTypeId()
    {
        return $this->ProductTypeId;
    }
    /**
     * Set ProductTypeId value
     * @param int $productTypeId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalContract
     */
    public function setProductTypeId($productTypeId = null)
    {
        // validation for constraint: int
        if (!is_null($productTypeId) && !is_numeric($productTypeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($productTypeId)), __LINE__);
        }
        $this->ProductTypeId = $productTypeId;
        return $this;
    }
    /**
     * Get ProductTypeV4Id value
     * @return int|null
     */
    public function getProductTypeV4Id()
    {
        return $this->ProductTypeV4Id;
    }
    /**
     * Set ProductTypeV4Id value
     * @param int $productTypeV4Id
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalContract
     */
    public function setProductTypeV4Id($productTypeV4Id = null)
    {
        // validation for constraint: int
        if (!is_null($productTypeV4Id) && !is_numeric($productTypeV4Id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($productTypeV4Id)), __LINE__);
        }
        $this->ProductTypeV4Id = $productTypeV4Id;
        return $this;
    }
    /**
     * Get RenewalMode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalMode|null
     */
    public function getRenewalMode()
    {
        return isset($this->RenewalMode) ? $this->RenewalMode : null;
    }
    /**
     * Set RenewalMode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RenewalMode $renewalMode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalContract
     */
    public function setRenewalMode(\Mu4ddi3\Compensa\Webservice\StructType\RenewalMode $renewalMode = null)
    {
        if (is_null($renewalMode) || (is_array($renewalMode) && empty($renewalMode))) {
            unset($this->RenewalMode);
        } else {
            $this->RenewalMode = $renewalMode;
        }
        return $this;
    }
    /**
     * Get RenewalStatus value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalStatus|null
     */
    public function getRenewalStatus()
    {
        return isset($this->RenewalStatus) ? $this->RenewalStatus : null;
    }
    /**
     * Set RenewalStatus value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RenewalStatus $renewalStatus
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalContract
     */
    public function setRenewalStatus(\Mu4ddi3\Compensa\Webservice\StructType\RenewalStatus $renewalStatus = null)
    {
        if (is_null($renewalStatus) || (is_array($renewalStatus) && empty($renewalStatus))) {
            unset($this->RenewalStatus);
        } else {
            $this->RenewalStatus = $renewalStatus;
        }
        return $this;
    }
    /**
     * Get RenewedPolicyId value
     * @return int|null
     */
    public function getRenewedPolicyId()
    {
        return $this->RenewedPolicyId;
    }
    /**
     * Set RenewedPolicyId value
     * @param int $renewedPolicyId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalContract
     */
    public function setRenewedPolicyId($renewedPolicyId = null)
    {
        // validation for constraint: int
        if (!is_null($renewedPolicyId) && !is_numeric($renewedPolicyId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($renewedPolicyId)), __LINE__);
        }
        $this->RenewedPolicyId = $renewedPolicyId;
        return $this;
    }
    /**
     * Get RenewedProductTypeId value
     * @return int|null
     */
    public function getRenewedProductTypeId()
    {
        return $this->RenewedProductTypeId;
    }
    /**
     * Set RenewedProductTypeId value
     * @param int $renewedProductTypeId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalContract
     */
    public function setRenewedProductTypeId($renewedProductTypeId = null)
    {
        // validation for constraint: int
        if (!is_null($renewedProductTypeId) && !is_numeric($renewedProductTypeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($renewedProductTypeId)), __LINE__);
        }
        $this->RenewedProductTypeId = $renewedProductTypeId;
        return $this;
    }
    /**
     * Get TariffVersion value
     * @return int|null
     */
    public function getTariffVersion()
    {
        return $this->TariffVersion;
    }
    /**
     * Set TariffVersion value
     * @param int $tariffVersion
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalContract
     */
    public function setTariffVersion($tariffVersion = null)
    {
        // validation for constraint: int
        if (!is_null($tariffVersion) && !is_numeric($tariffVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($tariffVersion)), __LINE__);
        }
        $this->TariffVersion = $tariffVersion;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalContract
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
     * Get WorkflowId value
     * @return string|null
     */
    public function getWorkflowId()
    {
        return $this->WorkflowId;
    }
    /**
     * Set WorkflowId value
     * @param string $workflowId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalContract
     */
    public function setWorkflowId($workflowId = null)
    {
        // validation for constraint: pattern
        if (is_scalar($workflowId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $workflowId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}", "%s" given', var_export($workflowId, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($workflowId) && !is_string($workflowId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($workflowId)), __LINE__);
        }
        $this->WorkflowId = $workflowId;
        return $this;
    }
    /**
     * Get version value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getVersion()
    {
        return isset($this->version) ? $this->version : null;
    }
    /**
     * Set version value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $version
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalContract
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($version)), __LINE__);
        }
        if (is_null($version) || (is_array($version) && empty($version))) {
            unset($this->version);
        } else {
            $this->version = $version;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalContract
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
