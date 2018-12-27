<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BasicRateNnw StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BasicRateNnw
 * @subpackage Structs
 */
class BasicRateNnw extends BasicRate
{
    /**
     * The InsuranceSum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $InsuranceSum;
    /**
     * The InsuranceSumFactor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $InsuranceSumFactor;
    /**
     * Constructor method for BasicRateNnw
     * @uses BasicRateNnw::setInsuranceSum()
     * @uses BasicRateNnw::setInsuranceSumFactor()
     * @param int $insuranceSum
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $insuranceSumFactor
     */
    public function __construct($insuranceSum = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $insuranceSumFactor = null)
    {
        $this
            ->setInsuranceSum($insuranceSum)
            ->setInsuranceSumFactor($insuranceSumFactor);
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasicRateNnw
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
     * Get InsuranceSumFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getInsuranceSumFactor()
    {
        return isset($this->InsuranceSumFactor) ? $this->InsuranceSumFactor : null;
    }
    /**
     * Set InsuranceSumFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $insuranceSumFactor
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasicRateNnw
     */
    public function setInsuranceSumFactor(\Mu4ddi3\Compensa\Webservice\StructType\Factor $insuranceSumFactor = null)
    {
        if (is_null($insuranceSumFactor) || (is_array($insuranceSumFactor) && empty($insuranceSumFactor))) {
            unset($this->InsuranceSumFactor);
        } else {
            $this->InsuranceSumFactor = $insuranceSumFactor;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasicRateNnw
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
