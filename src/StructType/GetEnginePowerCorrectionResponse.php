<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEnginePowerCorrectionResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetEnginePowerCorrectionResponse
 * @subpackage Structs
 */
class GetEnginePowerCorrectionResponse extends AbstractStructBase
{
    /**
     * The EnginePowerCorrection
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\EnginePowerCorrection
     */
    public $EnginePowerCorrection;
    /**
     * Constructor method for GetEnginePowerCorrectionResponse
     * @uses GetEnginePowerCorrectionResponse::setEnginePowerCorrection()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\EnginePowerCorrection $enginePowerCorrection
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\EnginePowerCorrection $enginePowerCorrection = null)
    {
        $this
            ->setEnginePowerCorrection($enginePowerCorrection);
    }
    /**
     * Get EnginePowerCorrection value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\EnginePowerCorrection|null
     */
    public function getEnginePowerCorrection()
    {
        return isset($this->EnginePowerCorrection) ? $this->EnginePowerCorrection : null;
    }
    /**
     * Set EnginePowerCorrection value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\EnginePowerCorrection $enginePowerCorrection
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetEnginePowerCorrectionResponse
     */
    public function setEnginePowerCorrection(\Mu4ddi3\Compensa\Webservice\StructType\EnginePowerCorrection $enginePowerCorrection = null)
    {
        if (is_null($enginePowerCorrection) || (is_array($enginePowerCorrection) && empty($enginePowerCorrection))) {
            unset($this->EnginePowerCorrection);
        } else {
            $this->EnginePowerCorrection = $enginePowerCorrection;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetEnginePowerCorrectionResponse
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
