<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RiskAvailabilityRuleDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RiskAvailabilityRuleDefinition
 * @subpackage Structs
 */
class RiskAvailabilityRuleDefinition extends AbstractStructBase
{
    /**
     * The AppliesFrom
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AppliesFrom;
    /**
     * The CreateDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CreateDate;
    /**
     * The ExpiryDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ExpiryDate;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Name;
    /**
     * The RiskAvailabilityRuleDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $RiskAvailabilityRuleDefinitionId;
    /**
     * The RiskAvailabilityRules
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRiskAvailabilityRule
     */
    public $RiskAvailabilityRules;
    /**
     * The UserId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $UserId;
    /**
     * The Version
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Version;
    /**
     * Constructor method for RiskAvailabilityRuleDefinition
     * @uses RiskAvailabilityRuleDefinition::setAppliesFrom()
     * @uses RiskAvailabilityRuleDefinition::setCreateDate()
     * @uses RiskAvailabilityRuleDefinition::setExpiryDate()
     * @uses RiskAvailabilityRuleDefinition::setName()
     * @uses RiskAvailabilityRuleDefinition::setRiskAvailabilityRuleDefinitionId()
     * @uses RiskAvailabilityRuleDefinition::setRiskAvailabilityRules()
     * @uses RiskAvailabilityRuleDefinition::setUserId()
     * @uses RiskAvailabilityRuleDefinition::setVersion()
     * @param string $appliesFrom
     * @param string $createDate
     * @param string $expiryDate
     * @param string $name
     * @param int $riskAvailabilityRuleDefinitionId
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRiskAvailabilityRule $riskAvailabilityRules
     * @param int $userId
     * @param int $version
     */
    public function __construct($appliesFrom = null, $createDate = null, $expiryDate = null, $name = null, $riskAvailabilityRuleDefinitionId = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRiskAvailabilityRule $riskAvailabilityRules = null, $userId = null, $version = null)
    {
        $this
            ->setAppliesFrom($appliesFrom)
            ->setCreateDate($createDate)
            ->setExpiryDate($expiryDate)
            ->setName($name)
            ->setRiskAvailabilityRuleDefinitionId($riskAvailabilityRuleDefinitionId)
            ->setRiskAvailabilityRules($riskAvailabilityRules)
            ->setUserId($userId)
            ->setVersion($version);
    }
    /**
     * Get AppliesFrom value
     * @return string|null
     */
    public function getAppliesFrom()
    {
        return $this->AppliesFrom;
    }
    /**
     * Set AppliesFrom value
     * @param string $appliesFrom
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskAvailabilityRuleDefinition
     */
    public function setAppliesFrom($appliesFrom = null)
    {
        // validation for constraint: string
        if (!is_null($appliesFrom) && !is_string($appliesFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($appliesFrom)), __LINE__);
        }
        $this->AppliesFrom = $appliesFrom;
        return $this;
    }
    /**
     * Get CreateDate value
     * @return string|null
     */
    public function getCreateDate()
    {
        return $this->CreateDate;
    }
    /**
     * Set CreateDate value
     * @param string $createDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskAvailabilityRuleDefinition
     */
    public function setCreateDate($createDate = null)
    {
        // validation for constraint: string
        if (!is_null($createDate) && !is_string($createDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($createDate)), __LINE__);
        }
        $this->CreateDate = $createDate;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskAvailabilityRuleDefinition
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
     * Get Name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getName()
    {
        return isset($this->Name) ? $this->Name : null;
    }
    /**
     * Set Name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskAvailabilityRuleDefinition
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->Name);
        } else {
            $this->Name = $name;
        }
        return $this;
    }
    /**
     * Get RiskAvailabilityRuleDefinitionId value
     * @return int|null
     */
    public function getRiskAvailabilityRuleDefinitionId()
    {
        return $this->RiskAvailabilityRuleDefinitionId;
    }
    /**
     * Set RiskAvailabilityRuleDefinitionId value
     * @param int $riskAvailabilityRuleDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskAvailabilityRuleDefinition
     */
    public function setRiskAvailabilityRuleDefinitionId($riskAvailabilityRuleDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($riskAvailabilityRuleDefinitionId) && !is_numeric($riskAvailabilityRuleDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($riskAvailabilityRuleDefinitionId)), __LINE__);
        }
        $this->RiskAvailabilityRuleDefinitionId = $riskAvailabilityRuleDefinitionId;
        return $this;
    }
    /**
     * Get RiskAvailabilityRules value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRiskAvailabilityRule|null
     */
    public function getRiskAvailabilityRules()
    {
        return isset($this->RiskAvailabilityRules) ? $this->RiskAvailabilityRules : null;
    }
    /**
     * Set RiskAvailabilityRules value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRiskAvailabilityRule $riskAvailabilityRules
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskAvailabilityRuleDefinition
     */
    public function setRiskAvailabilityRules(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRiskAvailabilityRule $riskAvailabilityRules = null)
    {
        if (is_null($riskAvailabilityRules) || (is_array($riskAvailabilityRules) && empty($riskAvailabilityRules))) {
            unset($this->RiskAvailabilityRules);
        } else {
            $this->RiskAvailabilityRules = $riskAvailabilityRules;
        }
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskAvailabilityRuleDefinition
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
     * Get Version value
     * @return int|null
     */
    public function getVersion()
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param int $version
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskAvailabilityRuleDefinition
     */
    public function setVersion($version = null)
    {
        // validation for constraint: int
        if (!is_null($version) && !is_numeric($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($version)), __LINE__);
        }
        $this->Version = $version;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskAvailabilityRuleDefinition
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
