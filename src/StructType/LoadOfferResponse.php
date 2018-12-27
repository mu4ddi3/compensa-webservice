<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LoadOfferResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:LoadOfferResponse
 * @subpackage Structs
 */
class LoadOfferResponse extends AbstractStructBase
{
    /**
     * The LoadOfferResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ResponseOfLoadOfferResponseAwgQbKoT
     */
    public $LoadOfferResult;
    /**
     * The Contract
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public $Contract;
    /**
     * Constructor method for LoadOfferResponse
     * @uses LoadOfferResponse::setLoadOfferResult()
     * @uses LoadOfferResponse::setContract()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ResponseOfLoadOfferResponseAwgQbKoT $loadOfferResult
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MotorContract $contract
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\ResponseOfLoadOfferResponseAwgQbKoT $loadOfferResult = null, \Mu4ddi3\Compensa\Webservice\StructType\MotorContract $contract = null)
    {
        $this
            ->setLoadOfferResult($loadOfferResult)
            ->setContract($contract);
    }
    /**
     * Get LoadOfferResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ResponseOfLoadOfferResponseAwgQbKoT|null
     */
    public function getLoadOfferResult()
    {
        return isset($this->LoadOfferResult) ? $this->LoadOfferResult : null;
    }
    /**
     * Set LoadOfferResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ResponseOfLoadOfferResponseAwgQbKoT $loadOfferResult
     * @return \Mu4ddi3\Compensa\Webservice\StructType\LoadOfferResponse
     */
    public function setLoadOfferResult(\Mu4ddi3\Compensa\Webservice\StructType\ResponseOfLoadOfferResponseAwgQbKoT $loadOfferResult = null)
    {
        if (is_null($loadOfferResult) || (is_array($loadOfferResult) && empty($loadOfferResult))) {
            unset($this->LoadOfferResult);
        } else {
            $this->LoadOfferResult = $loadOfferResult;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\LoadOfferResponse
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\LoadOfferResponse
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
