<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MinimalPremiumTariffDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MinimalPremiumTariffDefinition
 * @subpackage Structs
 */
class MinimalPremiumTariffDefinition extends AbstractStructBase
{
    /**
     * The MinimalPremiumRulesAcShortDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MinimalPremiumRulesAcShortDefinitionId;
    /**
     * The MinimalPremiumRulesAcYearDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MinimalPremiumRulesAcYearDefinitionId;
    /**
     * The MinimalPremiumRulesAssistanceYearDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MinimalPremiumRulesAssistanceYearDefinitionId;
    /**
     * The MinimalPremiumRulesNnwYearDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MinimalPremiumRulesNnwYearDefinitionId;
    /**
     * The MinimalPremiumRulesOcShortDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MinimalPremiumRulesOcShortDefinitionId;
    /**
     * The MinimalPremiumRulesOcYearDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MinimalPremiumRulesOcYearDefinitionId;
    /**
     * The MinimalPremiumRulesOpYearDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MinimalPremiumRulesOpYearDefinitionId;
    /**
     * The MinimalPremiumRulesPomocYearDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MinimalPremiumRulesPomocYearDefinitionId;
    /**
     * Constructor method for MinimalPremiumTariffDefinition
     * @uses MinimalPremiumTariffDefinition::setMinimalPremiumRulesAcShortDefinitionId()
     * @uses MinimalPremiumTariffDefinition::setMinimalPremiumRulesAcYearDefinitionId()
     * @uses MinimalPremiumTariffDefinition::setMinimalPremiumRulesAssistanceYearDefinitionId()
     * @uses MinimalPremiumTariffDefinition::setMinimalPremiumRulesNnwYearDefinitionId()
     * @uses MinimalPremiumTariffDefinition::setMinimalPremiumRulesOcShortDefinitionId()
     * @uses MinimalPremiumTariffDefinition::setMinimalPremiumRulesOcYearDefinitionId()
     * @uses MinimalPremiumTariffDefinition::setMinimalPremiumRulesOpYearDefinitionId()
     * @uses MinimalPremiumTariffDefinition::setMinimalPremiumRulesPomocYearDefinitionId()
     * @param int $minimalPremiumRulesAcShortDefinitionId
     * @param int $minimalPremiumRulesAcYearDefinitionId
     * @param int $minimalPremiumRulesAssistanceYearDefinitionId
     * @param int $minimalPremiumRulesNnwYearDefinitionId
     * @param int $minimalPremiumRulesOcShortDefinitionId
     * @param int $minimalPremiumRulesOcYearDefinitionId
     * @param int $minimalPremiumRulesOpYearDefinitionId
     * @param int $minimalPremiumRulesPomocYearDefinitionId
     */
    public function __construct($minimalPremiumRulesAcShortDefinitionId = null, $minimalPremiumRulesAcYearDefinitionId = null, $minimalPremiumRulesAssistanceYearDefinitionId = null, $minimalPremiumRulesNnwYearDefinitionId = null, $minimalPremiumRulesOcShortDefinitionId = null, $minimalPremiumRulesOcYearDefinitionId = null, $minimalPremiumRulesOpYearDefinitionId = null, $minimalPremiumRulesPomocYearDefinitionId = null)
    {
        $this
            ->setMinimalPremiumRulesAcShortDefinitionId($minimalPremiumRulesAcShortDefinitionId)
            ->setMinimalPremiumRulesAcYearDefinitionId($minimalPremiumRulesAcYearDefinitionId)
            ->setMinimalPremiumRulesAssistanceYearDefinitionId($minimalPremiumRulesAssistanceYearDefinitionId)
            ->setMinimalPremiumRulesNnwYearDefinitionId($minimalPremiumRulesNnwYearDefinitionId)
            ->setMinimalPremiumRulesOcShortDefinitionId($minimalPremiumRulesOcShortDefinitionId)
            ->setMinimalPremiumRulesOcYearDefinitionId($minimalPremiumRulesOcYearDefinitionId)
            ->setMinimalPremiumRulesOpYearDefinitionId($minimalPremiumRulesOpYearDefinitionId)
            ->setMinimalPremiumRulesPomocYearDefinitionId($minimalPremiumRulesPomocYearDefinitionId);
    }
    /**
     * Get MinimalPremiumRulesAcShortDefinitionId value
     * @return int|null
     */
    public function getMinimalPremiumRulesAcShortDefinitionId()
    {
        return $this->MinimalPremiumRulesAcShortDefinitionId;
    }
    /**
     * Set MinimalPremiumRulesAcShortDefinitionId value
     * @param int $minimalPremiumRulesAcShortDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumTariffDefinition
     */
    public function setMinimalPremiumRulesAcShortDefinitionId($minimalPremiumRulesAcShortDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($minimalPremiumRulesAcShortDefinitionId) && !is_numeric($minimalPremiumRulesAcShortDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minimalPremiumRulesAcShortDefinitionId)), __LINE__);
        }
        $this->MinimalPremiumRulesAcShortDefinitionId = $minimalPremiumRulesAcShortDefinitionId;
        return $this;
    }
    /**
     * Get MinimalPremiumRulesAcYearDefinitionId value
     * @return int|null
     */
    public function getMinimalPremiumRulesAcYearDefinitionId()
    {
        return $this->MinimalPremiumRulesAcYearDefinitionId;
    }
    /**
     * Set MinimalPremiumRulesAcYearDefinitionId value
     * @param int $minimalPremiumRulesAcYearDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumTariffDefinition
     */
    public function setMinimalPremiumRulesAcYearDefinitionId($minimalPremiumRulesAcYearDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($minimalPremiumRulesAcYearDefinitionId) && !is_numeric($minimalPremiumRulesAcYearDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minimalPremiumRulesAcYearDefinitionId)), __LINE__);
        }
        $this->MinimalPremiumRulesAcYearDefinitionId = $minimalPremiumRulesAcYearDefinitionId;
        return $this;
    }
    /**
     * Get MinimalPremiumRulesAssistanceYearDefinitionId value
     * @return int|null
     */
    public function getMinimalPremiumRulesAssistanceYearDefinitionId()
    {
        return $this->MinimalPremiumRulesAssistanceYearDefinitionId;
    }
    /**
     * Set MinimalPremiumRulesAssistanceYearDefinitionId value
     * @param int $minimalPremiumRulesAssistanceYearDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumTariffDefinition
     */
    public function setMinimalPremiumRulesAssistanceYearDefinitionId($minimalPremiumRulesAssistanceYearDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($minimalPremiumRulesAssistanceYearDefinitionId) && !is_numeric($minimalPremiumRulesAssistanceYearDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minimalPremiumRulesAssistanceYearDefinitionId)), __LINE__);
        }
        $this->MinimalPremiumRulesAssistanceYearDefinitionId = $minimalPremiumRulesAssistanceYearDefinitionId;
        return $this;
    }
    /**
     * Get MinimalPremiumRulesNnwYearDefinitionId value
     * @return int|null
     */
    public function getMinimalPremiumRulesNnwYearDefinitionId()
    {
        return $this->MinimalPremiumRulesNnwYearDefinitionId;
    }
    /**
     * Set MinimalPremiumRulesNnwYearDefinitionId value
     * @param int $minimalPremiumRulesNnwYearDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumTariffDefinition
     */
    public function setMinimalPremiumRulesNnwYearDefinitionId($minimalPremiumRulesNnwYearDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($minimalPremiumRulesNnwYearDefinitionId) && !is_numeric($minimalPremiumRulesNnwYearDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minimalPremiumRulesNnwYearDefinitionId)), __LINE__);
        }
        $this->MinimalPremiumRulesNnwYearDefinitionId = $minimalPremiumRulesNnwYearDefinitionId;
        return $this;
    }
    /**
     * Get MinimalPremiumRulesOcShortDefinitionId value
     * @return int|null
     */
    public function getMinimalPremiumRulesOcShortDefinitionId()
    {
        return $this->MinimalPremiumRulesOcShortDefinitionId;
    }
    /**
     * Set MinimalPremiumRulesOcShortDefinitionId value
     * @param int $minimalPremiumRulesOcShortDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumTariffDefinition
     */
    public function setMinimalPremiumRulesOcShortDefinitionId($minimalPremiumRulesOcShortDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($minimalPremiumRulesOcShortDefinitionId) && !is_numeric($minimalPremiumRulesOcShortDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minimalPremiumRulesOcShortDefinitionId)), __LINE__);
        }
        $this->MinimalPremiumRulesOcShortDefinitionId = $minimalPremiumRulesOcShortDefinitionId;
        return $this;
    }
    /**
     * Get MinimalPremiumRulesOcYearDefinitionId value
     * @return int|null
     */
    public function getMinimalPremiumRulesOcYearDefinitionId()
    {
        return $this->MinimalPremiumRulesOcYearDefinitionId;
    }
    /**
     * Set MinimalPremiumRulesOcYearDefinitionId value
     * @param int $minimalPremiumRulesOcYearDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumTariffDefinition
     */
    public function setMinimalPremiumRulesOcYearDefinitionId($minimalPremiumRulesOcYearDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($minimalPremiumRulesOcYearDefinitionId) && !is_numeric($minimalPremiumRulesOcYearDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minimalPremiumRulesOcYearDefinitionId)), __LINE__);
        }
        $this->MinimalPremiumRulesOcYearDefinitionId = $minimalPremiumRulesOcYearDefinitionId;
        return $this;
    }
    /**
     * Get MinimalPremiumRulesOpYearDefinitionId value
     * @return int|null
     */
    public function getMinimalPremiumRulesOpYearDefinitionId()
    {
        return $this->MinimalPremiumRulesOpYearDefinitionId;
    }
    /**
     * Set MinimalPremiumRulesOpYearDefinitionId value
     * @param int $minimalPremiumRulesOpYearDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumTariffDefinition
     */
    public function setMinimalPremiumRulesOpYearDefinitionId($minimalPremiumRulesOpYearDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($minimalPremiumRulesOpYearDefinitionId) && !is_numeric($minimalPremiumRulesOpYearDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minimalPremiumRulesOpYearDefinitionId)), __LINE__);
        }
        $this->MinimalPremiumRulesOpYearDefinitionId = $minimalPremiumRulesOpYearDefinitionId;
        return $this;
    }
    /**
     * Get MinimalPremiumRulesPomocYearDefinitionId value
     * @return int|null
     */
    public function getMinimalPremiumRulesPomocYearDefinitionId()
    {
        return $this->MinimalPremiumRulesPomocYearDefinitionId;
    }
    /**
     * Set MinimalPremiumRulesPomocYearDefinitionId value
     * @param int $minimalPremiumRulesPomocYearDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumTariffDefinition
     */
    public function setMinimalPremiumRulesPomocYearDefinitionId($minimalPremiumRulesPomocYearDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($minimalPremiumRulesPomocYearDefinitionId) && !is_numeric($minimalPremiumRulesPomocYearDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minimalPremiumRulesPomocYearDefinitionId)), __LINE__);
        }
        $this->MinimalPremiumRulesPomocYearDefinitionId = $minimalPremiumRulesPomocYearDefinitionId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumTariffDefinition
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
