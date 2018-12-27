<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OcBonusMalusValueCondition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:OcBonusMalusValueCondition
 * @subpackage Structs
 */
class OcBonusMalusValueCondition extends AvailabilityConditionBase
{
    /**
     * The OcBonusMalusValueFrom
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $OcBonusMalusValueFrom;
    /**
     * The OcBonusMalusValueTo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $OcBonusMalusValueTo;
    /**
     * Constructor method for OcBonusMalusValueCondition
     * @uses OcBonusMalusValueCondition::setOcBonusMalusValueFrom()
     * @uses OcBonusMalusValueCondition::setOcBonusMalusValueTo()
     * @param float $ocBonusMalusValueFrom
     * @param float $ocBonusMalusValueTo
     */
    public function __construct($ocBonusMalusValueFrom = null, $ocBonusMalusValueTo = null)
    {
        $this
            ->setOcBonusMalusValueFrom($ocBonusMalusValueFrom)
            ->setOcBonusMalusValueTo($ocBonusMalusValueTo);
    }
    /**
     * Get OcBonusMalusValueFrom value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getOcBonusMalusValueFrom()
    {
        return isset($this->OcBonusMalusValueFrom) ? $this->OcBonusMalusValueFrom : null;
    }
    /**
     * Set OcBonusMalusValueFrom value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $ocBonusMalusValueFrom
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OcBonusMalusValueCondition
     */
    public function setOcBonusMalusValueFrom($ocBonusMalusValueFrom = null)
    {
        if (is_null($ocBonusMalusValueFrom) || (is_array($ocBonusMalusValueFrom) && empty($ocBonusMalusValueFrom))) {
            unset($this->OcBonusMalusValueFrom);
        } else {
            $this->OcBonusMalusValueFrom = $ocBonusMalusValueFrom;
        }
        return $this;
    }
    /**
     * Get OcBonusMalusValueTo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getOcBonusMalusValueTo()
    {
        return isset($this->OcBonusMalusValueTo) ? $this->OcBonusMalusValueTo : null;
    }
    /**
     * Set OcBonusMalusValueTo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $ocBonusMalusValueTo
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OcBonusMalusValueCondition
     */
    public function setOcBonusMalusValueTo($ocBonusMalusValueTo = null)
    {
        if (is_null($ocBonusMalusValueTo) || (is_array($ocBonusMalusValueTo) && empty($ocBonusMalusValueTo))) {
            unset($this->OcBonusMalusValueTo);
        } else {
            $this->OcBonusMalusValueTo = $ocBonusMalusValueTo;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OcBonusMalusValueCondition
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
