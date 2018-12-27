<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MyBusinessInsuredPlace StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MyBusinessInsuredPlace
 * @subpackage Structs
 */
class MyBusinessInsuredPlace extends AbstractStructBase
{
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Address
     */
    public $Address;
    /**
     * The InsuranceTypes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuranceType
     */
    public $InsuranceTypes;
    /**
     * Constructor method for MyBusinessInsuredPlace
     * @uses MyBusinessInsuredPlace::setAddress()
     * @uses MyBusinessInsuredPlace::setInsuranceTypes()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Address $address
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuranceType $insuranceTypes
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\Address $address = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuranceType $insuranceTypes = null)
    {
        $this
            ->setAddress($address)
            ->setInsuranceTypes($insuranceTypes);
    }
    /**
     * Get Address value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Address|null
     */
    public function getAddress()
    {
        return isset($this->Address) ? $this->Address : null;
    }
    /**
     * Set Address value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Address $address
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessInsuredPlace
     */
    public function setAddress(\Mu4ddi3\Compensa\Webservice\StructType\Address $address = null)
    {
        if (is_null($address) || (is_array($address) && empty($address))) {
            unset($this->Address);
        } else {
            $this->Address = $address;
        }
        return $this;
    }
    /**
     * Get InsuranceTypes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuranceType|null
     */
    public function getInsuranceTypes()
    {
        return isset($this->InsuranceTypes) ? $this->InsuranceTypes : null;
    }
    /**
     * Set InsuranceTypes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuranceType $insuranceTypes
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessInsuredPlace
     */
    public function setInsuranceTypes(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuranceType $insuranceTypes = null)
    {
        if (is_null($insuranceTypes) || (is_array($insuranceTypes) && empty($insuranceTypes))) {
            unset($this->InsuranceTypes);
        } else {
            $this->InsuranceTypes = $insuranceTypes;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessInsuredPlace
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
