<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RiskValidationItem StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RiskValidationItem
 * @subpackage Structs
 */
class RiskValidationItem extends AbstractStructBase
{
    /**
     * The InsuranceSum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $InsuranceSum;
    /**
     * The IsChangePossible
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsChangePossible;
    /**
     * The LogicalOperatorType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LogicalOperatorType;
    /**
     * The RiskId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $RiskId;
    /**
     * The Symbol
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Symbol;
    /**
     * Constructor method for RiskValidationItem
     * @uses RiskValidationItem::setInsuranceSum()
     * @uses RiskValidationItem::setIsChangePossible()
     * @uses RiskValidationItem::setLogicalOperatorType()
     * @uses RiskValidationItem::setRiskId()
     * @uses RiskValidationItem::setSymbol()
     * @param int $insuranceSum
     * @param bool $isChangePossible
     * @param string $logicalOperatorType
     * @param int $riskId
     * @param int $symbol
     */
    public function __construct($insuranceSum = null, $isChangePossible = null, $logicalOperatorType = null, $riskId = null, $symbol = null)
    {
        $this
            ->setInsuranceSum($insuranceSum)
            ->setIsChangePossible($isChangePossible)
            ->setLogicalOperatorType($logicalOperatorType)
            ->setRiskId($riskId)
            ->setSymbol($symbol);
    }
    /**
     * Get InsuranceSum value
     * @return int|null
     */
    public function getInsuranceSum()
    {
        return $this->InsuranceSum;
    }
    /**
     * Set InsuranceSum value
     * @param int $insuranceSum
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskValidationItem
     */
    public function setInsuranceSum($insuranceSum = null)
    {
        // validation for constraint: int
        if (!is_null($insuranceSum) && !is_numeric($insuranceSum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($insuranceSum)), __LINE__);
        }
        $this->InsuranceSum = $insuranceSum;
        return $this;
    }
    /**
     * Get IsChangePossible value
     * @return bool|null
     */
    public function getIsChangePossible()
    {
        return $this->IsChangePossible;
    }
    /**
     * Set IsChangePossible value
     * @param bool $isChangePossible
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskValidationItem
     */
    public function setIsChangePossible($isChangePossible = null)
    {
        // validation for constraint: boolean
        if (!is_null($isChangePossible) && !is_bool($isChangePossible)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isChangePossible)), __LINE__);
        }
        $this->IsChangePossible = $isChangePossible;
        return $this;
    }
    /**
     * Get LogicalOperatorType value
     * @return string|null
     */
    public function getLogicalOperatorType()
    {
        return $this->LogicalOperatorType;
    }
    /**
     * Set LogicalOperatorType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\LogicalOperatorType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\LogicalOperatorType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $logicalOperatorType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskValidationItem
     */
    public function setLogicalOperatorType($logicalOperatorType = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\LogicalOperatorType::valueIsValid($logicalOperatorType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $logicalOperatorType, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\LogicalOperatorType::getValidValues())), __LINE__);
        }
        $this->LogicalOperatorType = $logicalOperatorType;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskValidationItem
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
     * Get Symbol value
     * @return int|null
     */
    public function getSymbol()
    {
        return $this->Symbol;
    }
    /**
     * Set Symbol value
     * @param int $symbol
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskValidationItem
     */
    public function setSymbol($symbol = null)
    {
        // validation for constraint: int
        if (!is_null($symbol) && !is_numeric($symbol)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($symbol)), __LINE__);
        }
        $this->Symbol = $symbol;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskValidationItem
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
