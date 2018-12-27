<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RiskConfigurationItem StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RiskConfigurationItem
 * @subpackage Structs
 */
class RiskConfigurationItem extends AbstractStructBase
{
    /**
     * The IsKAOnly
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsKAOnly;
    /**
     * The OrRisksGroupId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $OrRisksGroupId;
    /**
     * The RiskSymbol
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $RiskSymbol;
    /**
     * Constructor method for RiskConfigurationItem
     * @uses RiskConfigurationItem::setIsKAOnly()
     * @uses RiskConfigurationItem::setOrRisksGroupId()
     * @uses RiskConfigurationItem::setRiskSymbol()
     * @param bool $isKAOnly
     * @param int $orRisksGroupId
     * @param int $riskSymbol
     */
    public function __construct($isKAOnly = null, $orRisksGroupId = null, $riskSymbol = null)
    {
        $this
            ->setIsKAOnly($isKAOnly)
            ->setOrRisksGroupId($orRisksGroupId)
            ->setRiskSymbol($riskSymbol);
    }
    /**
     * Get IsKAOnly value
     * @return bool|null
     */
    public function getIsKAOnly()
    {
        return $this->IsKAOnly;
    }
    /**
     * Set IsKAOnly value
     * @param bool $isKAOnly
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskConfigurationItem
     */
    public function setIsKAOnly($isKAOnly = null)
    {
        // validation for constraint: boolean
        if (!is_null($isKAOnly) && !is_bool($isKAOnly)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isKAOnly)), __LINE__);
        }
        $this->IsKAOnly = $isKAOnly;
        return $this;
    }
    /**
     * Get OrRisksGroupId value
     * @return int|null
     */
    public function getOrRisksGroupId()
    {
        return $this->OrRisksGroupId;
    }
    /**
     * Set OrRisksGroupId value
     * @param int $orRisksGroupId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskConfigurationItem
     */
    public function setOrRisksGroupId($orRisksGroupId = null)
    {
        // validation for constraint: int
        if (!is_null($orRisksGroupId) && !is_numeric($orRisksGroupId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($orRisksGroupId)), __LINE__);
        }
        $this->OrRisksGroupId = $orRisksGroupId;
        return $this;
    }
    /**
     * Get RiskSymbol value
     * @return int|null
     */
    public function getRiskSymbol()
    {
        return $this->RiskSymbol;
    }
    /**
     * Set RiskSymbol value
     * @param int $riskSymbol
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskConfigurationItem
     */
    public function setRiskSymbol($riskSymbol = null)
    {
        // validation for constraint: int
        if (!is_null($riskSymbol) && !is_numeric($riskSymbol)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($riskSymbol)), __LINE__);
        }
        $this->RiskSymbol = $riskSymbol;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskConfigurationItem
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
