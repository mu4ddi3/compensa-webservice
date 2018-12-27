<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBasicRateResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetBasicRateResponse
 * @subpackage Structs
 */
class GetBasicRateResponse extends AbstractStructBase
{
    /**
     * The BasicRate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $BasicRate;
    /**
     * The InsuranceSumFactor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $InsuranceSumFactor;
    /**
     * Constructor method for GetBasicRateResponse
     * @uses GetBasicRateResponse::setBasicRate()
     * @uses GetBasicRateResponse::setInsuranceSumFactor()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $basicRate
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $insuranceSumFactor
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\Factor $basicRate = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $insuranceSumFactor = null)
    {
        $this
            ->setBasicRate($basicRate)
            ->setInsuranceSumFactor($insuranceSumFactor);
    }
    /**
     * Get BasicRate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getBasicRate()
    {
        return isset($this->BasicRate) ? $this->BasicRate : null;
    }
    /**
     * Set BasicRate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $basicRate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetBasicRateResponse
     */
    public function setBasicRate(\Mu4ddi3\Compensa\Webservice\StructType\Factor $basicRate = null)
    {
        if (is_null($basicRate) || (is_array($basicRate) && empty($basicRate))) {
            unset($this->BasicRate);
        } else {
            $this->BasicRate = $basicRate;
        }
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetBasicRateResponse
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetBasicRateResponse
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
