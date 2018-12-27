<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDepartmentDirectorDiscountResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetDepartmentDirectorDiscountResponse
 * @subpackage Structs
 */
class GetDepartmentDirectorDiscountResponse extends AbstractStructBase
{
    /**
     * The DepartmentDirectorDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\DepartmentDirectorDiscount
     */
    public $DepartmentDirectorDiscount;
    /**
     * Constructor method for GetDepartmentDirectorDiscountResponse
     * @uses GetDepartmentDirectorDiscountResponse::setDepartmentDirectorDiscount()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\DepartmentDirectorDiscount $departmentDirectorDiscount
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\DepartmentDirectorDiscount $departmentDirectorDiscount = null)
    {
        $this
            ->setDepartmentDirectorDiscount($departmentDirectorDiscount);
    }
    /**
     * Get DepartmentDirectorDiscount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DepartmentDirectorDiscount|null
     */
    public function getDepartmentDirectorDiscount()
    {
        return isset($this->DepartmentDirectorDiscount) ? $this->DepartmentDirectorDiscount : null;
    }
    /**
     * Set DepartmentDirectorDiscount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\DepartmentDirectorDiscount $departmentDirectorDiscount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetDepartmentDirectorDiscountResponse
     */
    public function setDepartmentDirectorDiscount(\Mu4ddi3\Compensa\Webservice\StructType\DepartmentDirectorDiscount $departmentDirectorDiscount = null)
    {
        if (is_null($departmentDirectorDiscount) || (is_array($departmentDirectorDiscount) && empty($departmentDirectorDiscount))) {
            unset($this->DepartmentDirectorDiscount);
        } else {
            $this->DepartmentDirectorDiscount = $departmentDirectorDiscount;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetDepartmentDirectorDiscountResponse
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
