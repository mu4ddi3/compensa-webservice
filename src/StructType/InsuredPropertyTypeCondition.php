<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InsuredPropertyTypeCondition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:InsuredPropertyTypeCondition
 * @subpackage Structs
 */
class InsuredPropertyTypeCondition extends AvailabilityConditionBase
{
    /**
     * The InsuredPropertyTypes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuredPropertyType
     */
    public $InsuredPropertyTypes;
    /**
     * Constructor method for InsuredPropertyTypeCondition
     * @uses InsuredPropertyTypeCondition::setInsuredPropertyTypes()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuredPropertyType $insuredPropertyTypes
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuredPropertyType $insuredPropertyTypes = null)
    {
        $this
            ->setInsuredPropertyTypes($insuredPropertyTypes);
    }
    /**
     * Get InsuredPropertyTypes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuredPropertyType|null
     */
    public function getInsuredPropertyTypes()
    {
        return isset($this->InsuredPropertyTypes) ? $this->InsuredPropertyTypes : null;
    }
    /**
     * Set InsuredPropertyTypes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuredPropertyType $insuredPropertyTypes
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuredPropertyTypeCondition
     */
    public function setInsuredPropertyTypes(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuredPropertyType $insuredPropertyTypes = null)
    {
        if (is_null($insuredPropertyTypes) || (is_array($insuredPropertyTypes) && empty($insuredPropertyTypes))) {
            unset($this->InsuredPropertyTypes);
        } else {
            $this->InsuredPropertyTypes = $insuredPropertyTypes;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuredPropertyTypeCondition
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
