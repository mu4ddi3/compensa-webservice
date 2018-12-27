<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InsuranceHistoryCondition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:InsuranceHistoryCondition
 * @subpackage Structs
 */
class InsuranceHistoryCondition extends AvailabilityConditionBase
{
    /**
     * The InsuranceHistoryTypes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuranceHistoryType
     */
    public $InsuranceHistoryTypes;
    /**
     * Constructor method for InsuranceHistoryCondition
     * @uses InsuranceHistoryCondition::setInsuranceHistoryTypes()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuranceHistoryType $insuranceHistoryTypes
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuranceHistoryType $insuranceHistoryTypes = null)
    {
        $this
            ->setInsuranceHistoryTypes($insuranceHistoryTypes);
    }
    /**
     * Get InsuranceHistoryTypes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuranceHistoryType|null
     */
    public function getInsuranceHistoryTypes()
    {
        return isset($this->InsuranceHistoryTypes) ? $this->InsuranceHistoryTypes : null;
    }
    /**
     * Set InsuranceHistoryTypes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuranceHistoryType $insuranceHistoryTypes
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuranceHistoryCondition
     */
    public function setInsuranceHistoryTypes(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuranceHistoryType $insuranceHistoryTypes = null)
    {
        if (is_null($insuranceHistoryTypes) || (is_array($insuranceHistoryTypes) && empty($insuranceHistoryTypes))) {
            unset($this->InsuranceHistoryTypes);
        } else {
            $this->InsuranceHistoryTypes = $insuranceHistoryTypes;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuranceHistoryCondition
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
