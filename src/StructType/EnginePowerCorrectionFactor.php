<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EnginePowerCorrectionFactor StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:EnginePowerCorrectionFactor
 * @subpackage Structs
 */
class EnginePowerCorrectionFactor extends AbstractStructBase
{
    /**
     * The EnginePowerKmLeftBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $EnginePowerKmLeftBound;
    /**
     * The EnginePowerKmRightBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $EnginePowerKmRightBound;
    /**
     * The Factor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $Factor;
    /**
     * Constructor method for EnginePowerCorrectionFactor
     * @uses EnginePowerCorrectionFactor::setEnginePowerKmLeftBound()
     * @uses EnginePowerCorrectionFactor::setEnginePowerKmRightBound()
     * @uses EnginePowerCorrectionFactor::setFactor()
     * @param int $enginePowerKmLeftBound
     * @param int $enginePowerKmRightBound
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $factor
     */
    public function __construct($enginePowerKmLeftBound = null, $enginePowerKmRightBound = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $factor = null)
    {
        $this
            ->setEnginePowerKmLeftBound($enginePowerKmLeftBound)
            ->setEnginePowerKmRightBound($enginePowerKmRightBound)
            ->setFactor($factor);
    }
    /**
     * Get EnginePowerKmLeftBound value
     * @return int|null
     */
    public function getEnginePowerKmLeftBound()
    {
        return $this->EnginePowerKmLeftBound;
    }
    /**
     * Set EnginePowerKmLeftBound value
     * @param int $enginePowerKmLeftBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\EnginePowerCorrectionFactor
     */
    public function setEnginePowerKmLeftBound($enginePowerKmLeftBound = null)
    {
        // validation for constraint: int
        if (!is_null($enginePowerKmLeftBound) && !is_numeric($enginePowerKmLeftBound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($enginePowerKmLeftBound)), __LINE__);
        }
        $this->EnginePowerKmLeftBound = $enginePowerKmLeftBound;
        return $this;
    }
    /**
     * Get EnginePowerKmRightBound value
     * @return int|null
     */
    public function getEnginePowerKmRightBound()
    {
        return $this->EnginePowerKmRightBound;
    }
    /**
     * Set EnginePowerKmRightBound value
     * @param int $enginePowerKmRightBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\EnginePowerCorrectionFactor
     */
    public function setEnginePowerKmRightBound($enginePowerKmRightBound = null)
    {
        // validation for constraint: int
        if (!is_null($enginePowerKmRightBound) && !is_numeric($enginePowerKmRightBound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($enginePowerKmRightBound)), __LINE__);
        }
        $this->EnginePowerKmRightBound = $enginePowerKmRightBound;
        return $this;
    }
    /**
     * Get Factor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getFactor()
    {
        return isset($this->Factor) ? $this->Factor : null;
    }
    /**
     * Set Factor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $factor
     * @return \Mu4ddi3\Compensa\Webservice\StructType\EnginePowerCorrectionFactor
     */
    public function setFactor(\Mu4ddi3\Compensa\Webservice\StructType\Factor $factor = null)
    {
        if (is_null($factor) || (is_array($factor) && empty($factor))) {
            unset($this->Factor);
        } else {
            $this->Factor = $factor;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\EnginePowerCorrectionFactor
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
