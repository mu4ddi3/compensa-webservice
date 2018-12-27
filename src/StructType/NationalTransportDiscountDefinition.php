<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NationalTransportDiscountDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:NationalTransportDiscountDefinition
 * @subpackage Structs
 */
class NationalTransportDiscountDefinition extends DiscountDefinition
{
    /**
     * The NationalTransportDiscountFactors
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfNationalTransportDiscountFactor
     */
    public $NationalTransportDiscountFactors;
    /**
     * Constructor method for NationalTransportDiscountDefinition
     * @uses NationalTransportDiscountDefinition::setNationalTransportDiscountFactors()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfNationalTransportDiscountFactor $nationalTransportDiscountFactors
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfNationalTransportDiscountFactor $nationalTransportDiscountFactors = null)
    {
        $this
            ->setNationalTransportDiscountFactors($nationalTransportDiscountFactors);
    }
    /**
     * Get NationalTransportDiscountFactors value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfNationalTransportDiscountFactor|null
     */
    public function getNationalTransportDiscountFactors()
    {
        return isset($this->NationalTransportDiscountFactors) ? $this->NationalTransportDiscountFactors : null;
    }
    /**
     * Set NationalTransportDiscountFactors value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfNationalTransportDiscountFactor $nationalTransportDiscountFactors
     * @return \Mu4ddi3\Compensa\Webservice\StructType\NationalTransportDiscountDefinition
     */
    public function setNationalTransportDiscountFactors(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfNationalTransportDiscountFactor $nationalTransportDiscountFactors = null)
    {
        if (is_null($nationalTransportDiscountFactors) || (is_array($nationalTransportDiscountFactors) && empty($nationalTransportDiscountFactors))) {
            unset($this->NationalTransportDiscountFactors);
        } else {
            $this->NationalTransportDiscountFactors = $nationalTransportDiscountFactors;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\NationalTransportDiscountDefinition
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
