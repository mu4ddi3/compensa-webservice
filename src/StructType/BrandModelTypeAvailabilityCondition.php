<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BrandModelTypeAvailabilityCondition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BrandModelTypeAvailabilityCondition
 * @subpackage Structs
 */
class BrandModelTypeAvailabilityCondition extends AvailabilityCondition
{
    /**
     * The BrandIdFilterValues
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint
     */
    public $BrandIdFilterValues;
    /**
     * The ModelTypeIdFilterValues
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint
     */
    public $ModelTypeIdFilterValues;
    /**
     * Constructor method for BrandModelTypeAvailabilityCondition
     * @uses BrandModelTypeAvailabilityCondition::setBrandIdFilterValues()
     * @uses BrandModelTypeAvailabilityCondition::setModelTypeIdFilterValues()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint $brandIdFilterValues
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint $modelTypeIdFilterValues
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint $brandIdFilterValues = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint $modelTypeIdFilterValues = null)
    {
        $this
            ->setBrandIdFilterValues($brandIdFilterValues)
            ->setModelTypeIdFilterValues($modelTypeIdFilterValues);
    }
    /**
     * Get BrandIdFilterValues value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint|null
     */
    public function getBrandIdFilterValues()
    {
        return isset($this->BrandIdFilterValues) ? $this->BrandIdFilterValues : null;
    }
    /**
     * Set BrandIdFilterValues value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint $brandIdFilterValues
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BrandModelTypeAvailabilityCondition
     */
    public function setBrandIdFilterValues(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint $brandIdFilterValues = null)
    {
        if (is_null($brandIdFilterValues) || (is_array($brandIdFilterValues) && empty($brandIdFilterValues))) {
            unset($this->BrandIdFilterValues);
        } else {
            $this->BrandIdFilterValues = $brandIdFilterValues;
        }
        return $this;
    }
    /**
     * Get ModelTypeIdFilterValues value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint|null
     */
    public function getModelTypeIdFilterValues()
    {
        return isset($this->ModelTypeIdFilterValues) ? $this->ModelTypeIdFilterValues : null;
    }
    /**
     * Set ModelTypeIdFilterValues value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint $modelTypeIdFilterValues
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BrandModelTypeAvailabilityCondition
     */
    public function setModelTypeIdFilterValues(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint $modelTypeIdFilterValues = null)
    {
        if (is_null($modelTypeIdFilterValues) || (is_array($modelTypeIdFilterValues) && empty($modelTypeIdFilterValues))) {
            unset($this->ModelTypeIdFilterValues);
        } else {
            $this->ModelTypeIdFilterValues = $modelTypeIdFilterValues;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BrandModelTypeAvailabilityCondition
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
