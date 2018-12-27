<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShortTermFactorRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetShortTermFactorRequest
 * @subpackage Structs
 */
class GetShortTermFactorRequest extends AbstractStructBase
{
    /**
     * The MonthsCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MonthsCount;
    /**
     * The RiskCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RiskCode;
    /**
     * Constructor method for GetShortTermFactorRequest
     * @uses GetShortTermFactorRequest::setMonthsCount()
     * @uses GetShortTermFactorRequest::setRiskCode()
     * @param int $monthsCount
     * @param string $riskCode
     */
    public function __construct($monthsCount = null, $riskCode = null)
    {
        $this
            ->setMonthsCount($monthsCount)
            ->setRiskCode($riskCode);
    }
    /**
     * Get MonthsCount value
     * @return int|null
     */
    public function getMonthsCount()
    {
        return $this->MonthsCount;
    }
    /**
     * Set MonthsCount value
     * @param int $monthsCount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetShortTermFactorRequest
     */
    public function setMonthsCount($monthsCount = null)
    {
        // validation for constraint: int
        if (!is_null($monthsCount) && !is_numeric($monthsCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($monthsCount)), __LINE__);
        }
        $this->MonthsCount = $monthsCount;
        return $this;
    }
    /**
     * Get RiskCode value
     * @return string|null
     */
    public function getRiskCode()
    {
        return $this->RiskCode;
    }
    /**
     * Set RiskCode value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\RiskCode::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\RiskCode::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $riskCode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetShortTermFactorRequest
     */
    public function setRiskCode($riskCode = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\RiskCode::valueIsValid($riskCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $riskCode, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\RiskCode::getValidValues())), __LINE__);
        }
        $this->RiskCode = $riskCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetShortTermFactorRequest
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
