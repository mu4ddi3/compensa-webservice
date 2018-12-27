<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DepartmentDirectorDiscountFactor StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DepartmentDirectorDiscountFactor
 * @subpackage Structs
 */
class DepartmentDirectorDiscountFactor extends AbstractStructBase
{
    /**
     * The MaxFactor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $MaxFactor;
    /**
     * The MinFactor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $MinFactor;
    /**
     * Constructor method for DepartmentDirectorDiscountFactor
     * @uses DepartmentDirectorDiscountFactor::setMaxFactor()
     * @uses DepartmentDirectorDiscountFactor::setMinFactor()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $maxFactor
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $minFactor
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\Factor $maxFactor = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $minFactor = null)
    {
        $this
            ->setMaxFactor($maxFactor)
            ->setMinFactor($minFactor);
    }
    /**
     * Get MaxFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getMaxFactor()
    {
        return isset($this->MaxFactor) ? $this->MaxFactor : null;
    }
    /**
     * Set MaxFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $maxFactor
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DepartmentDirectorDiscountFactor
     */
    public function setMaxFactor(\Mu4ddi3\Compensa\Webservice\StructType\Factor $maxFactor = null)
    {
        if (is_null($maxFactor) || (is_array($maxFactor) && empty($maxFactor))) {
            unset($this->MaxFactor);
        } else {
            $this->MaxFactor = $maxFactor;
        }
        return $this;
    }
    /**
     * Get MinFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getMinFactor()
    {
        return isset($this->MinFactor) ? $this->MinFactor : null;
    }
    /**
     * Set MinFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $minFactor
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DepartmentDirectorDiscountFactor
     */
    public function setMinFactor(\Mu4ddi3\Compensa\Webservice\StructType\Factor $minFactor = null)
    {
        if (is_null($minFactor) || (is_array($minFactor) && empty($minFactor))) {
            unset($this->MinFactor);
        } else {
            $this->MinFactor = $minFactor;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DepartmentDirectorDiscountFactor
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
