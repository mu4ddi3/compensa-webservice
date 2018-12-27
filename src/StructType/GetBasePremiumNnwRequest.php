<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBasePremiumNnwRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetBasePremiumNnwRequest
 * @subpackage Structs
 */
class GetBasePremiumNnwRequest extends GetBasePremiumRequest
{
    /**
     * The RiskInsuranceSum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $RiskInsuranceSum;
    /**
     * Constructor method for GetBasePremiumNnwRequest
     * @uses GetBasePremiumNnwRequest::setRiskInsuranceSum()
     * @param int $riskInsuranceSum
     */
    public function __construct($riskInsuranceSum = null)
    {
        $this
            ->setRiskInsuranceSum($riskInsuranceSum);
    }
    /**
     * Get RiskInsuranceSum value
     * @return int|null
     */
    public function getRiskInsuranceSum()
    {
        return $this->RiskInsuranceSum;
    }
    /**
     * Set RiskInsuranceSum value
     * @param int $riskInsuranceSum
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetBasePremiumNnwRequest
     */
    public function setRiskInsuranceSum($riskInsuranceSum = null)
    {
        // validation for constraint: int
        if (!is_null($riskInsuranceSum) && !is_numeric($riskInsuranceSum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($riskInsuranceSum)), __LINE__);
        }
        $this->RiskInsuranceSum = $riskInsuranceSum;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetBasePremiumNnwRequest
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
