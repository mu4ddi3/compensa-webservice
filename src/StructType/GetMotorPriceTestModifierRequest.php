<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMotorPriceTestModifierRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetMotorPriceTestModifierRequest
 * @subpackage Structs
 */
class GetMotorPriceTestModifierRequest extends GetPriceTestModifierRequest
{
    /**
     * The BirthDay
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $BirthDay;
    /**
     * The DeltaBM
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $DeltaBM;
    /**
     * The DeltaWU
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $DeltaWU;
    /**
     * Constructor method for GetMotorPriceTestModifierRequest
     * @uses GetMotorPriceTestModifierRequest::setBirthDay()
     * @uses GetMotorPriceTestModifierRequest::setDeltaBM()
     * @uses GetMotorPriceTestModifierRequest::setDeltaWU()
     * @param int $birthDay
     * @param float $deltaBM
     * @param float $deltaWU
     */
    public function __construct($birthDay = null, $deltaBM = null, $deltaWU = null)
    {
        $this
            ->setBirthDay($birthDay)
            ->setDeltaBM($deltaBM)
            ->setDeltaWU($deltaWU);
    }
    /**
     * Get BirthDay value
     * @return int|null
     */
    public function getBirthDay()
    {
        return $this->BirthDay;
    }
    /**
     * Set BirthDay value
     * @param int $birthDay
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetMotorPriceTestModifierRequest
     */
    public function setBirthDay($birthDay = null)
    {
        // validation for constraint: int
        if (!is_null($birthDay) && !is_numeric($birthDay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($birthDay)), __LINE__);
        }
        $this->BirthDay = $birthDay;
        return $this;
    }
    /**
     * Get DeltaBM value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getDeltaBM()
    {
        return isset($this->DeltaBM) ? $this->DeltaBM : null;
    }
    /**
     * Set DeltaBM value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $deltaBM
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetMotorPriceTestModifierRequest
     */
    public function setDeltaBM($deltaBM = null)
    {
        if (is_null($deltaBM) || (is_array($deltaBM) && empty($deltaBM))) {
            unset($this->DeltaBM);
        } else {
            $this->DeltaBM = $deltaBM;
        }
        return $this;
    }
    /**
     * Get DeltaWU value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getDeltaWU()
    {
        return isset($this->DeltaWU) ? $this->DeltaWU : null;
    }
    /**
     * Set DeltaWU value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $deltaWU
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetMotorPriceTestModifierRequest
     */
    public function setDeltaWU($deltaWU = null)
    {
        if (is_null($deltaWU) || (is_array($deltaWU) && empty($deltaWU))) {
            unset($this->DeltaWU);
        } else {
            $this->DeltaWU = $deltaWU;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetMotorPriceTestModifierRequest
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
