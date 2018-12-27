<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MyBusinessCessionary StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MyBusinessCessionary
 * @subpackage Structs
 */
class MyBusinessCessionary extends Cessionary
{
    /**
     * The Department
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessDepartment
     */
    public $Department;
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Id;
    /**
     * Constructor method for MyBusinessCessionary
     * @uses MyBusinessCessionary::setDepartment()
     * @uses MyBusinessCessionary::setId()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessDepartment $department
     * @param string $id
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\MyBusinessDepartment $department = null, $id = null)
    {
        $this
            ->setDepartment($department)
            ->setId($id);
    }
    /**
     * Get Department value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessDepartment|null
     */
    public function getDepartment()
    {
        return isset($this->Department) ? $this->Department : null;
    }
    /**
     * Set Department value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessDepartment $department
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessCessionary
     */
    public function setDepartment(\Mu4ddi3\Compensa\Webservice\StructType\MyBusinessDepartment $department = null)
    {
        if (is_null($department) || (is_array($department) && empty($department))) {
            unset($this->Department);
        } else {
            $this->Department = $department;
        }
        return $this;
    }
    /**
     * Get Id value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getId()
    {
        return isset($this->Id) ? $this->Id : null;
    }
    /**
     * Set Id value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $id
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessCessionary
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        if (is_null($id) || (is_array($id) && empty($id))) {
            unset($this->Id);
        } else {
            $this->Id = $id;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessCessionary
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
