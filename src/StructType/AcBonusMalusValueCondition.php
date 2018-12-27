<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcBonusMalusValueCondition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AcBonusMalusValueCondition
 * @subpackage Structs
 */
class AcBonusMalusValueCondition extends AvailabilityConditionBase
{
    /**
     * The AcBonusMalusValueFrom
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $AcBonusMalusValueFrom;
    /**
     * The AcBonusMalusValueTo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $AcBonusMalusValueTo;
    /**
     * Constructor method for AcBonusMalusValueCondition
     * @uses AcBonusMalusValueCondition::setAcBonusMalusValueFrom()
     * @uses AcBonusMalusValueCondition::setAcBonusMalusValueTo()
     * @param float $acBonusMalusValueFrom
     * @param float $acBonusMalusValueTo
     */
    public function __construct($acBonusMalusValueFrom = null, $acBonusMalusValueTo = null)
    {
        $this
            ->setAcBonusMalusValueFrom($acBonusMalusValueFrom)
            ->setAcBonusMalusValueTo($acBonusMalusValueTo);
    }
    /**
     * Get AcBonusMalusValueFrom value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getAcBonusMalusValueFrom()
    {
        return isset($this->AcBonusMalusValueFrom) ? $this->AcBonusMalusValueFrom : null;
    }
    /**
     * Set AcBonusMalusValueFrom value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $acBonusMalusValueFrom
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AcBonusMalusValueCondition
     */
    public function setAcBonusMalusValueFrom($acBonusMalusValueFrom = null)
    {
        if (is_null($acBonusMalusValueFrom) || (is_array($acBonusMalusValueFrom) && empty($acBonusMalusValueFrom))) {
            unset($this->AcBonusMalusValueFrom);
        } else {
            $this->AcBonusMalusValueFrom = $acBonusMalusValueFrom;
        }
        return $this;
    }
    /**
     * Get AcBonusMalusValueTo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getAcBonusMalusValueTo()
    {
        return isset($this->AcBonusMalusValueTo) ? $this->AcBonusMalusValueTo : null;
    }
    /**
     * Set AcBonusMalusValueTo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $acBonusMalusValueTo
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AcBonusMalusValueCondition
     */
    public function setAcBonusMalusValueTo($acBonusMalusValueTo = null)
    {
        if (is_null($acBonusMalusValueTo) || (is_array($acBonusMalusValueTo) && empty($acBonusMalusValueTo))) {
            unset($this->AcBonusMalusValueTo);
        } else {
            $this->AcBonusMalusValueTo = $acBonusMalusValueTo;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AcBonusMalusValueCondition
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
