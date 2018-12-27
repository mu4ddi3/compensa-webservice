<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClaimInfo StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ClaimInfo
 * @subpackage Structs
 */
class ClaimInfo extends Claim
{
    /**
     * The EventDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $EventDate;
    /**
     * The FullRegres
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $FullRegres;
    /**
     * The IsBLS
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsBLS;
    /**
     * The IsLuggage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsLuggage;
    /**
     * The IsMiniAC
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsMiniAC;
    /**
     * The IsOUZ
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsOUZ;
    /**
     * The IsPane
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsPane;
    /**
     * The LastCheckedDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LastCheckedDate;
    /**
     * The PolicyId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PolicyId;
    /**
     * The ProductTypeId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ProductTypeId;
    /**
     * The Risk
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Risk;
    /**
     * The Scope
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Scope;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Status;
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $Value;
    /**
     * The IsCompensa
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsCompensa;
    /**
     * The PartnerRoleFromContract
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartnerRoleOnContract
     */
    public $PartnerRoleFromContract;
    /**
     * The PolicyNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PolicyNumber;
    /**
     * Constructor method for ClaimInfo
     * @uses ClaimInfo::setEventDate()
     * @uses ClaimInfo::setFullRegres()
     * @uses ClaimInfo::setIsBLS()
     * @uses ClaimInfo::setIsLuggage()
     * @uses ClaimInfo::setIsMiniAC()
     * @uses ClaimInfo::setIsOUZ()
     * @uses ClaimInfo::setIsPane()
     * @uses ClaimInfo::setLastCheckedDate()
     * @uses ClaimInfo::setPolicyId()
     * @uses ClaimInfo::setProductTypeId()
     * @uses ClaimInfo::setRisk()
     * @uses ClaimInfo::setScope()
     * @uses ClaimInfo::setStatus()
     * @uses ClaimInfo::setValue()
     * @uses ClaimInfo::setIsCompensa()
     * @uses ClaimInfo::setPartnerRoleFromContract()
     * @uses ClaimInfo::setPolicyNumber()
     * @param string $eventDate
     * @param bool $fullRegres
     * @param bool $isBLS
     * @param bool $isLuggage
     * @param bool $isMiniAC
     * @param bool $isOUZ
     * @param bool $isPane
     * @param string $lastCheckedDate
     * @param string $policyId
     * @param string $productTypeId
     * @param string $risk
     * @param int $scope
     * @param int $status
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $value
     * @param bool $isCompensa
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartnerRoleOnContract $partnerRoleFromContract
     * @param string $policyNumber
     */
    public function __construct($eventDate = null, $fullRegres = null, $isBLS = null, $isLuggage = null, $isMiniAC = null, $isOUZ = null, $isPane = null, $lastCheckedDate = null, $policyId = null, $productTypeId = null, $risk = null, $scope = null, $status = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $value = null, $isCompensa = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartnerRoleOnContract $partnerRoleFromContract = null, $policyNumber = null)
    {
        $this
            ->setEventDate($eventDate)
            ->setFullRegres($fullRegres)
            ->setIsBLS($isBLS)
            ->setIsLuggage($isLuggage)
            ->setIsMiniAC($isMiniAC)
            ->setIsOUZ($isOUZ)
            ->setIsPane($isPane)
            ->setLastCheckedDate($lastCheckedDate)
            ->setPolicyId($policyId)
            ->setProductTypeId($productTypeId)
            ->setRisk($risk)
            ->setScope($scope)
            ->setStatus($status)
            ->setValue($value)
            ->setIsCompensa($isCompensa)
            ->setPartnerRoleFromContract($partnerRoleFromContract)
            ->setPolicyNumber($policyNumber);
    }
    /**
     * Get EventDate value
     * @return string|null
     */
    public function getEventDate()
    {
        return $this->EventDate;
    }
    /**
     * Set EventDate value
     * @param string $eventDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimInfo
     */
    public function setEventDate($eventDate = null)
    {
        // validation for constraint: string
        if (!is_null($eventDate) && !is_string($eventDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eventDate)), __LINE__);
        }
        $this->EventDate = $eventDate;
        return $this;
    }
    /**
     * Get FullRegres value
     * @return bool|null
     */
    public function getFullRegres()
    {
        return $this->FullRegres;
    }
    /**
     * Set FullRegres value
     * @param bool $fullRegres
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimInfo
     */
    public function setFullRegres($fullRegres = null)
    {
        // validation for constraint: boolean
        if (!is_null($fullRegres) && !is_bool($fullRegres)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($fullRegres)), __LINE__);
        }
        $this->FullRegres = $fullRegres;
        return $this;
    }
    /**
     * Get IsBLS value
     * @return bool|null
     */
    public function getIsBLS()
    {
        return $this->IsBLS;
    }
    /**
     * Set IsBLS value
     * @param bool $isBLS
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimInfo
     */
    public function setIsBLS($isBLS = null)
    {
        // validation for constraint: boolean
        if (!is_null($isBLS) && !is_bool($isBLS)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isBLS)), __LINE__);
        }
        $this->IsBLS = $isBLS;
        return $this;
    }
    /**
     * Get IsLuggage value
     * @return bool|null
     */
    public function getIsLuggage()
    {
        return $this->IsLuggage;
    }
    /**
     * Set IsLuggage value
     * @param bool $isLuggage
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimInfo
     */
    public function setIsLuggage($isLuggage = null)
    {
        // validation for constraint: boolean
        if (!is_null($isLuggage) && !is_bool($isLuggage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isLuggage)), __LINE__);
        }
        $this->IsLuggage = $isLuggage;
        return $this;
    }
    /**
     * Get IsMiniAC value
     * @return bool|null
     */
    public function getIsMiniAC()
    {
        return $this->IsMiniAC;
    }
    /**
     * Set IsMiniAC value
     * @param bool $isMiniAC
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimInfo
     */
    public function setIsMiniAC($isMiniAC = null)
    {
        // validation for constraint: boolean
        if (!is_null($isMiniAC) && !is_bool($isMiniAC)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isMiniAC)), __LINE__);
        }
        $this->IsMiniAC = $isMiniAC;
        return $this;
    }
    /**
     * Get IsOUZ value
     * @return bool|null
     */
    public function getIsOUZ()
    {
        return $this->IsOUZ;
    }
    /**
     * Set IsOUZ value
     * @param bool $isOUZ
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimInfo
     */
    public function setIsOUZ($isOUZ = null)
    {
        // validation for constraint: boolean
        if (!is_null($isOUZ) && !is_bool($isOUZ)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isOUZ)), __LINE__);
        }
        $this->IsOUZ = $isOUZ;
        return $this;
    }
    /**
     * Get IsPane value
     * @return bool|null
     */
    public function getIsPane()
    {
        return $this->IsPane;
    }
    /**
     * Set IsPane value
     * @param bool $isPane
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimInfo
     */
    public function setIsPane($isPane = null)
    {
        // validation for constraint: boolean
        if (!is_null($isPane) && !is_bool($isPane)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isPane)), __LINE__);
        }
        $this->IsPane = $isPane;
        return $this;
    }
    /**
     * Get LastCheckedDate value
     * @return string|null
     */
    public function getLastCheckedDate()
    {
        return $this->LastCheckedDate;
    }
    /**
     * Set LastCheckedDate value
     * @param string $lastCheckedDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimInfo
     */
    public function setLastCheckedDate($lastCheckedDate = null)
    {
        // validation for constraint: string
        if (!is_null($lastCheckedDate) && !is_string($lastCheckedDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastCheckedDate)), __LINE__);
        }
        $this->LastCheckedDate = $lastCheckedDate;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimInfo
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimInfo
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
     * Get Risk value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRisk()
    {
        return isset($this->Risk) ? $this->Risk : null;
    }
    /**
     * Set Risk value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $risk
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimInfo
     */
    public function setRisk($risk = null)
    {
        // validation for constraint: string
        if (!is_null($risk) && !is_string($risk)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($risk)), __LINE__);
        }
        if (is_null($risk) || (is_array($risk) && empty($risk))) {
            unset($this->Risk);
        } else {
            $this->Risk = $risk;
        }
        return $this;
    }
    /**
     * Get Scope value
     * @return int|null
     */
    public function getScope()
    {
        return $this->Scope;
    }
    /**
     * Set Scope value
     * @param int $scope
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimInfo
     */
    public function setScope($scope = null)
    {
        // validation for constraint: int
        if (!is_null($scope) && !is_numeric($scope)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($scope)), __LINE__);
        }
        $this->Scope = $scope;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimInfo
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
     * Get Value value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getValue()
    {
        return isset($this->Value) ? $this->Value : null;
    }
    /**
     * Set Value value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $value
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimInfo
     */
    public function setValue(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $value = null)
    {
        if (is_null($value) || (is_array($value) && empty($value))) {
            unset($this->Value);
        } else {
            $this->Value = $value;
        }
        return $this;
    }
    /**
     * Get IsCompensa value
     * @return bool|null
     */
    public function getIsCompensa()
    {
        return $this->IsCompensa;
    }
    /**
     * Set IsCompensa value
     * @param bool $isCompensa
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimInfo
     */
    public function setIsCompensa($isCompensa = null)
    {
        // validation for constraint: boolean
        if (!is_null($isCompensa) && !is_bool($isCompensa)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isCompensa)), __LINE__);
        }
        $this->IsCompensa = $isCompensa;
        return $this;
    }
    /**
     * Get PartnerRoleFromContract value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartnerRoleOnContract|null
     */
    public function getPartnerRoleFromContract()
    {
        return isset($this->PartnerRoleFromContract) ? $this->PartnerRoleFromContract : null;
    }
    /**
     * Set PartnerRoleFromContract value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartnerRoleOnContract $partnerRoleFromContract
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimInfo
     */
    public function setPartnerRoleFromContract(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartnerRoleOnContract $partnerRoleFromContract = null)
    {
        if (is_null($partnerRoleFromContract) || (is_array($partnerRoleFromContract) && empty($partnerRoleFromContract))) {
            unset($this->PartnerRoleFromContract);
        } else {
            $this->PartnerRoleFromContract = $partnerRoleFromContract;
        }
        return $this;
    }
    /**
     * Get PolicyNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPolicyNumber()
    {
        return isset($this->PolicyNumber) ? $this->PolicyNumber : null;
    }
    /**
     * Set PolicyNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $policyNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimInfo
     */
    public function setPolicyNumber($policyNumber = null)
    {
        // validation for constraint: string
        if (!is_null($policyNumber) && !is_string($policyNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($policyNumber)), __LINE__);
        }
        if (is_null($policyNumber) || (is_array($policyNumber) && empty($policyNumber))) {
            unset($this->PolicyNumber);
        } else {
            $this->PolicyNumber = $policyNumber;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimInfo
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
