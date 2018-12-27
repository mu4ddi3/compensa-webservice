<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InsuranceFormCondition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:InsuranceFormCondition
 * @subpackage Structs
 */
class InsuranceFormCondition extends AvailabilityConditionBase
{
    /**
     * The InsuranceForms
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuranceForm
     */
    public $InsuranceForms;
    /**
     * Constructor method for InsuranceFormCondition
     * @uses InsuranceFormCondition::setInsuranceForms()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuranceForm $insuranceForms
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuranceForm $insuranceForms = null)
    {
        $this
            ->setInsuranceForms($insuranceForms);
    }
    /**
     * Get InsuranceForms value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuranceForm|null
     */
    public function getInsuranceForms()
    {
        return isset($this->InsuranceForms) ? $this->InsuranceForms : null;
    }
    /**
     * Set InsuranceForms value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuranceForm $insuranceForms
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuranceFormCondition
     */
    public function setInsuranceForms(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuranceForm $insuranceForms = null)
    {
        if (is_null($insuranceForms) || (is_array($insuranceForms) && empty($insuranceForms))) {
            unset($this->InsuranceForms);
        } else {
            $this->InsuranceForms = $insuranceForms;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuranceFormCondition
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
