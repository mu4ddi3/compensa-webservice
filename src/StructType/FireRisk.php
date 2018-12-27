<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FireRisk StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:FireRisk
 * @subpackage Structs
 */
class FireRisk extends MyBusinessRisk
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
     * The InsuranceSystem
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\InsuranceSystem
     */
    public $InsuranceSystem;
    /**
     * Constructor method for FireRisk
     * @uses FireRisk::setInsuranceSumType()
     * @uses FireRisk::setInsuranceSystem()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InsuranceSumType $insuranceSumType
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InsuranceSystem $insuranceSystem
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\InsuranceSumType $insuranceSumType = null, \Mu4ddi3\Compensa\Webservice\StructType\InsuranceSystem $insuranceSystem = null)
    {
        $this
            ->setInsuranceSumType($insuranceSumType)
            ->setInsuranceSystem($insuranceSystem);
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\FireRisk
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
     * Get InsuranceSystem value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuranceSystem|null
     */
    public function getInsuranceSystem()
    {
        return isset($this->InsuranceSystem) ? $this->InsuranceSystem : null;
    }
    /**
     * Set InsuranceSystem value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InsuranceSystem $insuranceSystem
     * @return \Mu4ddi3\Compensa\Webservice\StructType\FireRisk
     */
    public function setInsuranceSystem(\Mu4ddi3\Compensa\Webservice\StructType\InsuranceSystem $insuranceSystem = null)
    {
        if (is_null($insuranceSystem) || (is_array($insuranceSystem) && empty($insuranceSystem))) {
            unset($this->InsuranceSystem);
        } else {
            $this->InsuranceSystem = $insuranceSystem;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\FireRisk
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
