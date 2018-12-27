<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BonusMalusFactorsInfo StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BonusMalusFactorsInfo
 * @subpackage Structs
 */
class BonusMalusFactorsInfo extends AbstractStructBase
{
    /**
     * The AvailableFactors
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfFactor
     */
    public $AvailableFactors;
    /**
     * Constructor method for BonusMalusFactorsInfo
     * @uses BonusMalusFactorsInfo::setAvailableFactors()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfFactor $availableFactors
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfFactor $availableFactors = null)
    {
        $this
            ->setAvailableFactors($availableFactors);
    }
    /**
     * Get AvailableFactors value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfFactor|null
     */
    public function getAvailableFactors()
    {
        return isset($this->AvailableFactors) ? $this->AvailableFactors : null;
    }
    /**
     * Set AvailableFactors value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfFactor $availableFactors
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusFactorsInfo
     */
    public function setAvailableFactors(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfFactor $availableFactors = null)
    {
        if (is_null($availableFactors) || (is_array($availableFactors) && empty($availableFactors))) {
            unset($this->AvailableFactors);
        } else {
            $this->AvailableFactors = $availableFactors;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusFactorsInfo
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
