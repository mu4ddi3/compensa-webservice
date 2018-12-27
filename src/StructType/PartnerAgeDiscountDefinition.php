<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PartnerAgeDiscountDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PartnerAgeDiscountDefinition
 * @subpackage Structs
 */
class PartnerAgeDiscountDefinition extends DiscountDefinition
{
    /**
     * The PartnerAgeDiscountFactors
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartnerAgeDiscountFactor
     */
    public $PartnerAgeDiscountFactors;
    /**
     * Constructor method for PartnerAgeDiscountDefinition
     * @uses PartnerAgeDiscountDefinition::setPartnerAgeDiscountFactors()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartnerAgeDiscountFactor $partnerAgeDiscountFactors
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartnerAgeDiscountFactor $partnerAgeDiscountFactors = null)
    {
        $this
            ->setPartnerAgeDiscountFactors($partnerAgeDiscountFactors);
    }
    /**
     * Get PartnerAgeDiscountFactors value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartnerAgeDiscountFactor|null
     */
    public function getPartnerAgeDiscountFactors()
    {
        return isset($this->PartnerAgeDiscountFactors) ? $this->PartnerAgeDiscountFactors : null;
    }
    /**
     * Set PartnerAgeDiscountFactors value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartnerAgeDiscountFactor $partnerAgeDiscountFactors
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeDiscountDefinition
     */
    public function setPartnerAgeDiscountFactors(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartnerAgeDiscountFactor $partnerAgeDiscountFactors = null)
    {
        if (is_null($partnerAgeDiscountFactors) || (is_array($partnerAgeDiscountFactors) && empty($partnerAgeDiscountFactors))) {
            unset($this->PartnerAgeDiscountFactors);
        } else {
            $this->PartnerAgeDiscountFactors = $partnerAgeDiscountFactors;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeDiscountDefinition
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
