<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MyBusinessInsuredObject StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MyBusinessInsuredObject
 * @subpackage Structs
 */
class MyBusinessInsuredObject extends CompensaInsuredObject
{
    /**
     * The InsuredPlaces
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMyBusinessInsuredPlace
     */
    public $InsuredPlaces;
    /**
     * Constructor method for MyBusinessInsuredObject
     * @uses MyBusinessInsuredObject::setInsuredPlaces()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMyBusinessInsuredPlace $insuredPlaces
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMyBusinessInsuredPlace $insuredPlaces = null)
    {
        $this
            ->setInsuredPlaces($insuredPlaces);
    }
    /**
     * Get InsuredPlaces value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMyBusinessInsuredPlace|null
     */
    public function getInsuredPlaces()
    {
        return isset($this->InsuredPlaces) ? $this->InsuredPlaces : null;
    }
    /**
     * Set InsuredPlaces value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMyBusinessInsuredPlace $insuredPlaces
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessInsuredObject
     */
    public function setInsuredPlaces(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMyBusinessInsuredPlace $insuredPlaces = null)
    {
        if (is_null($insuredPlaces) || (is_array($insuredPlaces) && empty($insuredPlaces))) {
            unset($this->InsuredPlaces);
        } else {
            $this->InsuredPlaces = $insuredPlaces;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessInsuredObject
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
