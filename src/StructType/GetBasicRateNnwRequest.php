<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBasicRateNnwRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetBasicRateNnwRequest
 * @subpackage Structs
 */
class GetBasicRateNnwRequest extends GetBasicRateRequest
{
    /**
     * The InsuranceSum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $InsuranceSum;
    /**
     * Constructor method for GetBasicRateNnwRequest
     * @uses GetBasicRateNnwRequest::setInsuranceSum()
     * @param int $insuranceSum
     */
    public function __construct($insuranceSum = null)
    {
        $this
            ->setInsuranceSum($insuranceSum);
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetBasicRateNnwRequest
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetBasicRateNnwRequest
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
