<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DepartmentAvailabilityCondition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DepartmentAvailabilityCondition
 * @subpackage Structs
 */
class DepartmentAvailabilityCondition extends AvailabilityCondition
{
    /**
     * The DepartmentFilterValues
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint
     */
    public $DepartmentFilterValues;
    /**
     * Constructor method for DepartmentAvailabilityCondition
     * @uses DepartmentAvailabilityCondition::setDepartmentFilterValues()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint $departmentFilterValues
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint $departmentFilterValues = null)
    {
        $this
            ->setDepartmentFilterValues($departmentFilterValues);
    }
    /**
     * Get DepartmentFilterValues value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint|null
     */
    public function getDepartmentFilterValues()
    {
        return isset($this->DepartmentFilterValues) ? $this->DepartmentFilterValues : null;
    }
    /**
     * Set DepartmentFilterValues value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint $departmentFilterValues
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DepartmentAvailabilityCondition
     */
    public function setDepartmentFilterValues(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint $departmentFilterValues = null)
    {
        if (is_null($departmentFilterValues) || (is_array($departmentFilterValues) && empty($departmentFilterValues))) {
            unset($this->DepartmentFilterValues);
        } else {
            $this->DepartmentFilterValues = $departmentFilterValues;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DepartmentAvailabilityCondition
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
