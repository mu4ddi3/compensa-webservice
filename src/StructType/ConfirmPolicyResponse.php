<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConfirmPolicyResponse StructType
 * @subpackage Structs
 */
class ConfirmPolicyResponse extends AbstractStructBase
{
    /**
     * The ConfirmPolicyResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ResponseOfConfirmPolisyResponseAwgQbKoT
     */
    public $ConfirmPolicyResult;
    /**
     * Constructor method for ConfirmPolicyResponse
     * @uses ConfirmPolicyResponse::setConfirmPolicyResult()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ResponseOfConfirmPolisyResponseAwgQbKoT $confirmPolicyResult
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\ResponseOfConfirmPolisyResponseAwgQbKoT $confirmPolicyResult = null)
    {
        $this
            ->setConfirmPolicyResult($confirmPolicyResult);
    }
    /**
     * Get ConfirmPolicyResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ResponseOfConfirmPolisyResponseAwgQbKoT|null
     */
    public function getConfirmPolicyResult()
    {
        return isset($this->ConfirmPolicyResult) ? $this->ConfirmPolicyResult : null;
    }
    /**
     * Set ConfirmPolicyResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ResponseOfConfirmPolisyResponseAwgQbKoT $confirmPolicyResult
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ConfirmPolicyResponse
     */
    public function setConfirmPolicyResult(\Mu4ddi3\Compensa\Webservice\StructType\ResponseOfConfirmPolisyResponseAwgQbKoT $confirmPolicyResult = null)
    {
        if (is_null($confirmPolicyResult) || (is_array($confirmPolicyResult) && empty($confirmPolicyResult))) {
            unset($this->ConfirmPolicyResult);
        } else {
            $this->ConfirmPolicyResult = $confirmPolicyResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ConfirmPolicyResponse
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
