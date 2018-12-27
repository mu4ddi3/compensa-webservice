<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccidentBaseRisk StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AccidentBaseRisk
 * @subpackage Structs
 */
class AccidentBaseRisk extends MyBusinessRisk
{
    /**
     * The RangeId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $RangeId;
    /**
     * The RiskClass
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $RiskClass;
    /**
     * Constructor method for AccidentBaseRisk
     * @uses AccidentBaseRisk::setRangeId()
     * @uses AccidentBaseRisk::setRiskClass()
     * @param int $rangeId
     * @param int $riskClass
     */
    public function __construct($rangeId = null, $riskClass = null)
    {
        $this
            ->setRangeId($rangeId)
            ->setRiskClass($riskClass);
    }
    /**
     * Get RangeId value
     * @return int|null
     */
    public function getRangeId()
    {
        return $this->RangeId;
    }
    /**
     * Set RangeId value
     * @param int $rangeId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AccidentBaseRisk
     */
    public function setRangeId($rangeId = null)
    {
        // validation for constraint: int
        if (!is_null($rangeId) && !is_numeric($rangeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($rangeId)), __LINE__);
        }
        $this->RangeId = $rangeId;
        return $this;
    }
    /**
     * Get RiskClass value
     * @return int|null
     */
    public function getRiskClass()
    {
        return $this->RiskClass;
    }
    /**
     * Set RiskClass value
     * @param int $riskClass
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AccidentBaseRisk
     */
    public function setRiskClass($riskClass = null)
    {
        // validation for constraint: int
        if (!is_null($riskClass) && !is_numeric($riskClass)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($riskClass)), __LINE__);
        }
        $this->RiskClass = $riskClass;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AccidentBaseRisk
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
