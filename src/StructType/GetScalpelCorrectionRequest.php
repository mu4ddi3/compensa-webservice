<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetScalpelCorrectionRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetScalpelCorrectionRequest
 * @subpackage Structs
 */
class GetScalpelCorrectionRequest extends AbstractStructBase
{
    /**
     * The MotorContract
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public $MotorContract;
    /**
     * Constructor method for GetScalpelCorrectionRequest
     * @uses GetScalpelCorrectionRequest::setMotorContract()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MotorContract $motorContract
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\MotorContract $motorContract = null)
    {
        $this
            ->setMotorContract($motorContract);
    }
    /**
     * Get MotorContract value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract|null
     */
    public function getMotorContract()
    {
        return isset($this->MotorContract) ? $this->MotorContract : null;
    }
    /**
     * Set MotorContract value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MotorContract $motorContract
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetScalpelCorrectionRequest
     */
    public function setMotorContract(\Mu4ddi3\Compensa\Webservice\StructType\MotorContract $motorContract = null)
    {
        if (is_null($motorContract) || (is_array($motorContract) && empty($motorContract))) {
            unset($this->MotorContract);
        } else {
            $this->MotorContract = $motorContract;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetScalpelCorrectionRequest
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
