<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CalculatePremiumResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CalculatePremiumResponse
 * @subpackage Structs
 */
class CalculatePremiumResponse extends AbstractStructBase
{
    /**
     * The CalculatePremiumResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ResponseOfCalculatePremiumResponseAwgQbKoT
     */
    public $CalculatePremiumResult;
    /**
     * The CalculationResults
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMotorContract
     */
    public $CalculationResults;
    /**
     * The Contract
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public $Contract;
    /**
     * Constructor method for CalculatePremiumResponse
     * @uses CalculatePremiumResponse::setCalculatePremiumResult()
     * @uses CalculatePremiumResponse::setCalculationResults()
     * @uses CalculatePremiumResponse::setContract()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ResponseOfCalculatePremiumResponseAwgQbKoT $calculatePremiumResult
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMotorContract $calculationResults
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MotorContract $contract
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\ResponseOfCalculatePremiumResponseAwgQbKoT $calculatePremiumResult = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMotorContract $calculationResults = null, \Mu4ddi3\Compensa\Webservice\StructType\MotorContract $contract = null)
    {
        $this
            ->setCalculatePremiumResult($calculatePremiumResult)
            ->setCalculationResults($calculationResults)
            ->setContract($contract);
    }
    /**
     * Get CalculatePremiumResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ResponseOfCalculatePremiumResponseAwgQbKoT|null
     */
    public function getCalculatePremiumResult()
    {
        return isset($this->CalculatePremiumResult) ? $this->CalculatePremiumResult : null;
    }
    /**
     * Set CalculatePremiumResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ResponseOfCalculatePremiumResponseAwgQbKoT $calculatePremiumResult
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CalculatePremiumResponse
     */
    public function setCalculatePremiumResult(\Mu4ddi3\Compensa\Webservice\StructType\ResponseOfCalculatePremiumResponseAwgQbKoT $calculatePremiumResult = null)
    {
        if (is_null($calculatePremiumResult) || (is_array($calculatePremiumResult) && empty($calculatePremiumResult))) {
            unset($this->CalculatePremiumResult);
        } else {
            $this->CalculatePremiumResult = $calculatePremiumResult;
        }
        return $this;
    }
    /**
     * Get CalculationResults value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMotorContract|null
     */
    public function getCalculationResults()
    {
        return isset($this->CalculationResults) ? $this->CalculationResults : null;
    }
    /**
     * Set CalculationResults value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMotorContract $calculationResults
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CalculatePremiumResponse
     */
    public function setCalculationResults(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMotorContract $calculationResults = null)
    {
        if (is_null($calculationResults) || (is_array($calculationResults) && empty($calculationResults))) {
            unset($this->CalculationResults);
        } else {
            $this->CalculationResults = $calculationResults;
        }
        return $this;
    }
    /**
     * Get Contract value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract|null
     */
    public function getContract()
    {
        return isset($this->Contract) ? $this->Contract : null;
    }
    /**
     * Set Contract value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MotorContract $contract
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CalculatePremiumResponse
     */
    public function setContract(\Mu4ddi3\Compensa\Webservice\StructType\MotorContract $contract = null)
    {
        if (is_null($contract) || (is_array($contract) && empty($contract))) {
            unset($this->Contract);
        } else {
            $this->Contract = $contract;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CalculatePremiumResponse
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
