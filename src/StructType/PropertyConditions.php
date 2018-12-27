<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PropertyConditions StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PropertyConditions
 * @subpackage Structs
 */
class PropertyConditions extends ProductConditions
{
    /**
     * The InsuranceHistory
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\InsuranceHistoryCondition
     */
    public $InsuranceHistory;
    /**
     * The InsuredPropertyType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\InsuredPropertyTypeCondition
     */
    public $InsuredPropertyType;
    /**
     * The SurfaceArea
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\SurfaceAreaCondition
     */
    public $SurfaceArea;
    /**
     * Constructor method for PropertyConditions
     * @uses PropertyConditions::setInsuranceHistory()
     * @uses PropertyConditions::setInsuredPropertyType()
     * @uses PropertyConditions::setSurfaceArea()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InsuranceHistoryCondition $insuranceHistory
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InsuredPropertyTypeCondition $insuredPropertyType
     * @param \Mu4ddi3\Compensa\Webservice\StructType\SurfaceAreaCondition $surfaceArea
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\InsuranceHistoryCondition $insuranceHistory = null, \Mu4ddi3\Compensa\Webservice\StructType\InsuredPropertyTypeCondition $insuredPropertyType = null, \Mu4ddi3\Compensa\Webservice\StructType\SurfaceAreaCondition $surfaceArea = null)
    {
        $this
            ->setInsuranceHistory($insuranceHistory)
            ->setInsuredPropertyType($insuredPropertyType)
            ->setSurfaceArea($surfaceArea);
    }
    /**
     * Get InsuranceHistory value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuranceHistoryCondition|null
     */
    public function getInsuranceHistory()
    {
        return isset($this->InsuranceHistory) ? $this->InsuranceHistory : null;
    }
    /**
     * Set InsuranceHistory value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InsuranceHistoryCondition $insuranceHistory
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PropertyConditions
     */
    public function setInsuranceHistory(\Mu4ddi3\Compensa\Webservice\StructType\InsuranceHistoryCondition $insuranceHistory = null)
    {
        if (is_null($insuranceHistory) || (is_array($insuranceHistory) && empty($insuranceHistory))) {
            unset($this->InsuranceHistory);
        } else {
            $this->InsuranceHistory = $insuranceHistory;
        }
        return $this;
    }
    /**
     * Get InsuredPropertyType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuredPropertyTypeCondition|null
     */
    public function getInsuredPropertyType()
    {
        return isset($this->InsuredPropertyType) ? $this->InsuredPropertyType : null;
    }
    /**
     * Set InsuredPropertyType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InsuredPropertyTypeCondition $insuredPropertyType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PropertyConditions
     */
    public function setInsuredPropertyType(\Mu4ddi3\Compensa\Webservice\StructType\InsuredPropertyTypeCondition $insuredPropertyType = null)
    {
        if (is_null($insuredPropertyType) || (is_array($insuredPropertyType) && empty($insuredPropertyType))) {
            unset($this->InsuredPropertyType);
        } else {
            $this->InsuredPropertyType = $insuredPropertyType;
        }
        return $this;
    }
    /**
     * Get SurfaceArea value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\SurfaceAreaCondition|null
     */
    public function getSurfaceArea()
    {
        return isset($this->SurfaceArea) ? $this->SurfaceArea : null;
    }
    /**
     * Set SurfaceArea value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\SurfaceAreaCondition $surfaceArea
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PropertyConditions
     */
    public function setSurfaceArea(\Mu4ddi3\Compensa\Webservice\StructType\SurfaceAreaCondition $surfaceArea = null)
    {
        if (is_null($surfaceArea) || (is_array($surfaceArea) && empty($surfaceArea))) {
            unset($this->SurfaceArea);
        } else {
            $this->SurfaceArea = $surfaceArea;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PropertyConditions
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
