<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RiskAvaliabilityCondition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RiskAvaliabilityCondition
 * @subpackage Structs
 */
class RiskAvaliabilityCondition extends AvailabilityConditionBase
{
    /**
     * The DisplayName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $DisplayName;
    /**
     * The MaximalInsuranceSum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $MaximalInsuranceSum;
    /**
     * The MinimalInsuranceSum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $MinimalInsuranceSum;
    /**
     * The RiskId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $RiskId;
    /**
     * Constructor method for RiskAvaliabilityCondition
     * @uses RiskAvaliabilityCondition::setDisplayName()
     * @uses RiskAvaliabilityCondition::setMaximalInsuranceSum()
     * @uses RiskAvaliabilityCondition::setMinimalInsuranceSum()
     * @uses RiskAvaliabilityCondition::setRiskId()
     * @param string $displayName
     * @param int $maximalInsuranceSum
     * @param int $minimalInsuranceSum
     * @param int $riskId
     */
    public function __construct($displayName = null, $maximalInsuranceSum = null, $minimalInsuranceSum = null, $riskId = null)
    {
        $this
            ->setDisplayName($displayName)
            ->setMaximalInsuranceSum($maximalInsuranceSum)
            ->setMinimalInsuranceSum($minimalInsuranceSum)
            ->setRiskId($riskId);
    }
    /**
     * Get DisplayName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDisplayName()
    {
        return isset($this->DisplayName) ? $this->DisplayName : null;
    }
    /**
     * Set DisplayName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $displayName
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskAvaliabilityCondition
     */
    public function setDisplayName($displayName = null)
    {
        // validation for constraint: string
        if (!is_null($displayName) && !is_string($displayName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($displayName)), __LINE__);
        }
        if (is_null($displayName) || (is_array($displayName) && empty($displayName))) {
            unset($this->DisplayName);
        } else {
            $this->DisplayName = $displayName;
        }
        return $this;
    }
    /**
     * Get MaximalInsuranceSum value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getMaximalInsuranceSum()
    {
        return isset($this->MaximalInsuranceSum) ? $this->MaximalInsuranceSum : null;
    }
    /**
     * Set MaximalInsuranceSum value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $maximalInsuranceSum
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskAvaliabilityCondition
     */
    public function setMaximalInsuranceSum($maximalInsuranceSum = null)
    {
        // validation for constraint: int
        if (!is_null($maximalInsuranceSum) && !is_numeric($maximalInsuranceSum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maximalInsuranceSum)), __LINE__);
        }
        if (is_null($maximalInsuranceSum) || (is_array($maximalInsuranceSum) && empty($maximalInsuranceSum))) {
            unset($this->MaximalInsuranceSum);
        } else {
            $this->MaximalInsuranceSum = $maximalInsuranceSum;
        }
        return $this;
    }
    /**
     * Get MinimalInsuranceSum value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getMinimalInsuranceSum()
    {
        return isset($this->MinimalInsuranceSum) ? $this->MinimalInsuranceSum : null;
    }
    /**
     * Set MinimalInsuranceSum value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $minimalInsuranceSum
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskAvaliabilityCondition
     */
    public function setMinimalInsuranceSum($minimalInsuranceSum = null)
    {
        // validation for constraint: int
        if (!is_null($minimalInsuranceSum) && !is_numeric($minimalInsuranceSum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minimalInsuranceSum)), __LINE__);
        }
        if (is_null($minimalInsuranceSum) || (is_array($minimalInsuranceSum) && empty($minimalInsuranceSum))) {
            unset($this->MinimalInsuranceSum);
        } else {
            $this->MinimalInsuranceSum = $minimalInsuranceSum;
        }
        return $this;
    }
    /**
     * Get RiskId value
     * @return int|null
     */
    public function getRiskId()
    {
        return $this->RiskId;
    }
    /**
     * Set RiskId value
     * @param int $riskId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskAvaliabilityCondition
     */
    public function setRiskId($riskId = null)
    {
        // validation for constraint: int
        if (!is_null($riskId) && !is_numeric($riskId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($riskId)), __LINE__);
        }
        $this->RiskId = $riskId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskAvaliabilityCondition
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
