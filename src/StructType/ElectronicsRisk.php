<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ElectronicsRisk StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ElectronicsRisk
 * @subpackage Structs
 */
class ElectronicsRisk extends MyBusinessRisk
{
    /**
     * The InsuranceSumType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\InsuranceSumType
     */
    public $InsuranceSumType;
    /**
     * Constructor method for ElectronicsRisk
     * @uses ElectronicsRisk::setInsuranceSumType()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InsuranceSumType $insuranceSumType
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\InsuranceSumType $insuranceSumType = null)
    {
        $this
            ->setInsuranceSumType($insuranceSumType);
    }
    /**
     * Get InsuranceSumType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuranceSumType|null
     */
    public function getInsuranceSumType()
    {
        return isset($this->InsuranceSumType) ? $this->InsuranceSumType : null;
    }
    /**
     * Set InsuranceSumType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InsuranceSumType $insuranceSumType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ElectronicsRisk
     */
    public function setInsuranceSumType(\Mu4ddi3\Compensa\Webservice\StructType\InsuranceSumType $insuranceSumType = null)
    {
        if (is_null($insuranceSumType) || (is_array($insuranceSumType) && empty($insuranceSumType))) {
            unset($this->InsuranceSumType);
        } else {
            $this->InsuranceSumType = $insuranceSumType;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ElectronicsRisk
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
