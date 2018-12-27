<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DepartmentCondition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DepartmentCondition
 * @subpackage Structs
 */
class DepartmentCondition extends AvailabilityConditionBase
{
    /**
     * The DepartmentNumbers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint
     */
    public $DepartmentNumbers;
    /**
     * Constructor method for DepartmentCondition
     * @uses DepartmentCondition::setDepartmentNumbers()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint $departmentNumbers
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint $departmentNumbers = null)
    {
        $this
            ->setDepartmentNumbers($departmentNumbers);
    }
    /**
     * Get DepartmentNumbers value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint|null
     */
    public function getDepartmentNumbers()
    {
        return isset($this->DepartmentNumbers) ? $this->DepartmentNumbers : null;
    }
    /**
     * Set DepartmentNumbers value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint $departmentNumbers
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DepartmentCondition
     */
    public function setDepartmentNumbers(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint $departmentNumbers = null)
    {
        if (is_null($departmentNumbers) || (is_array($departmentNumbers) && empty($departmentNumbers))) {
            unset($this->DepartmentNumbers);
        } else {
            $this->DepartmentNumbers = $departmentNumbers;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DepartmentCondition
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
