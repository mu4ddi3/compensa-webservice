<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InsuranceOptionCondition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:InsuranceOptionCondition
 * @subpackage Structs
 */
class InsuranceOptionCondition extends AvailabilityConditionBase
{
    /**
     * The InsuranceOptions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuranceOption
     */
    public $InsuranceOptions;
    /**
     * Constructor method for InsuranceOptionCondition
     * @uses InsuranceOptionCondition::setInsuranceOptions()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuranceOption $insuranceOptions
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuranceOption $insuranceOptions = null)
    {
        $this
            ->setInsuranceOptions($insuranceOptions);
    }
    /**
     * Get InsuranceOptions value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuranceOption|null
     */
    public function getInsuranceOptions()
    {
        return isset($this->InsuranceOptions) ? $this->InsuranceOptions : null;
    }
    /**
     * Set InsuranceOptions value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuranceOption $insuranceOptions
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuranceOptionCondition
     */
    public function setInsuranceOptions(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuranceOption $insuranceOptions = null)
    {
        if (is_null($insuranceOptions) || (is_array($insuranceOptions) && empty($insuranceOptions))) {
            unset($this->InsuranceOptions);
        } else {
            $this->InsuranceOptions = $insuranceOptions;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuranceOptionCondition
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
