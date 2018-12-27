<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEnginePowerCorrectionRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetEnginePowerCorrectionRequest
 * @subpackage Structs
 */
class GetEnginePowerCorrectionRequest extends AbstractStructBase
{
    /**
     * The EnginePowerKm
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $EnginePowerKm;
    /**
     * Constructor method for GetEnginePowerCorrectionRequest
     * @uses GetEnginePowerCorrectionRequest::setEnginePowerKm()
     * @param int $enginePowerKm
     */
    public function __construct($enginePowerKm = null)
    {
        $this
            ->setEnginePowerKm($enginePowerKm);
    }
    /**
     * Get EnginePowerKm value
     * @return int|null
     */
    public function getEnginePowerKm()
    {
        return $this->EnginePowerKm;
    }
    /**
     * Set EnginePowerKm value
     * @param int $enginePowerKm
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetEnginePowerCorrectionRequest
     */
    public function setEnginePowerKm($enginePowerKm = null)
    {
        // validation for constraint: int
        if (!is_null($enginePowerKm) && !is_numeric($enginePowerKm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($enginePowerKm)), __LINE__);
        }
        $this->EnginePowerKm = $enginePowerKm;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetEnginePowerCorrectionRequest
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
