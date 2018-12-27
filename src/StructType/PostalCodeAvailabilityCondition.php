<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PostalCodeAvailabilityCondition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PostalCodeAvailabilityCondition
 * @subpackage Structs
 */
class PostalCodeAvailabilityCondition extends AvailabilityCondition
{
    /**
     * The PostalCodeFilterValues
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring
     */
    public $PostalCodeFilterValues;
    /**
     * The PostalCodeSource
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PostalCodeSource;
    /**
     * Constructor method for PostalCodeAvailabilityCondition
     * @uses PostalCodeAvailabilityCondition::setPostalCodeFilterValues()
     * @uses PostalCodeAvailabilityCondition::setPostalCodeSource()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring $postalCodeFilterValues
     * @param string $postalCodeSource
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring $postalCodeFilterValues = null, $postalCodeSource = null)
    {
        $this
            ->setPostalCodeFilterValues($postalCodeFilterValues)
            ->setPostalCodeSource($postalCodeSource);
    }
    /**
     * Get PostalCodeFilterValues value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring|null
     */
    public function getPostalCodeFilterValues()
    {
        return isset($this->PostalCodeFilterValues) ? $this->PostalCodeFilterValues : null;
    }
    /**
     * Set PostalCodeFilterValues value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring $postalCodeFilterValues
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PostalCodeAvailabilityCondition
     */
    public function setPostalCodeFilterValues(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring $postalCodeFilterValues = null)
    {
        if (is_null($postalCodeFilterValues) || (is_array($postalCodeFilterValues) && empty($postalCodeFilterValues))) {
            unset($this->PostalCodeFilterValues);
        } else {
            $this->PostalCodeFilterValues = $postalCodeFilterValues;
        }
        return $this;
    }
    /**
     * Get PostalCodeSource value
     * @return string|null
     */
    public function getPostalCodeSource()
    {
        return $this->PostalCodeSource;
    }
    /**
     * Set PostalCodeSource value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PackagePostalCodeSource::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PackagePostalCodeSource::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $postalCodeSource
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PostalCodeAvailabilityCondition
     */
    public function setPostalCodeSource($postalCodeSource = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\PackagePostalCodeSource::valueIsValid($postalCodeSource)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $postalCodeSource, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\PackagePostalCodeSource::getValidValues())), __LINE__);
        }
        $this->PostalCodeSource = $postalCodeSource;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PostalCodeAvailabilityCondition
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
