<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPromotionForCodeResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetPromotionForCodeResponse
 * @subpackage Structs
 */
class GetPromotionForCodeResponse extends ResponseBase
{
    /**
     * The Contract
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var mixed
     */
    public $Contract;
    /**
     * Constructor method for GetPromotionForCodeResponse
     * @uses GetPromotionForCodeResponse::setContract()
     * @param mixed $contract
     */
    public function __construct($contract = null)
    {
        $this
            ->setContract($contract);
    }
    /**
     * Get Contract value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return mixed|null
     */
    public function getContract()
    {
        return isset($this->Contract) ? $this->Contract : null;
    }
    /**
     * Set Contract value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param mixed $contract
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetPromotionForCodeResponse
     */
    public function setContract($contract = null)
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetPromotionForCodeResponse
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
