<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmployeeDiscountDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:EmployeeDiscountDefinition
 * @subpackage Structs
 */
class EmployeeDiscountDefinition extends DiscountDefinition
{
    /**
     * The EmployeeDiscountFactors
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfEmployeeDiscountFactor
     */
    public $EmployeeDiscountFactors;
    /**
     * Constructor method for EmployeeDiscountDefinition
     * @uses EmployeeDiscountDefinition::setEmployeeDiscountFactors()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfEmployeeDiscountFactor $employeeDiscountFactors
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfEmployeeDiscountFactor $employeeDiscountFactors = null)
    {
        $this
            ->setEmployeeDiscountFactors($employeeDiscountFactors);
    }
    /**
     * Get EmployeeDiscountFactors value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfEmployeeDiscountFactor|null
     */
    public function getEmployeeDiscountFactors()
    {
        return isset($this->EmployeeDiscountFactors) ? $this->EmployeeDiscountFactors : null;
    }
    /**
     * Set EmployeeDiscountFactors value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfEmployeeDiscountFactor $employeeDiscountFactors
     * @return \Mu4ddi3\Compensa\Webservice\StructType\EmployeeDiscountDefinition
     */
    public function setEmployeeDiscountFactors(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfEmployeeDiscountFactor $employeeDiscountFactors = null)
    {
        if (is_null($employeeDiscountFactors) || (is_array($employeeDiscountFactors) && empty($employeeDiscountFactors))) {
            unset($this->EmployeeDiscountFactors);
        } else {
            $this->EmployeeDiscountFactors = $employeeDiscountFactors;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\EmployeeDiscountDefinition
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
