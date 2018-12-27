<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClientTypeCondition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ClientTypeCondition
 * @subpackage Structs
 */
class ClientTypeCondition extends AvailabilityConditionBase
{
    /**
     * The PartnerTypes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartnerType
     */
    public $PartnerTypes;
    /**
     * Constructor method for ClientTypeCondition
     * @uses ClientTypeCondition::setPartnerTypes()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartnerType $partnerTypes
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartnerType $partnerTypes = null)
    {
        $this
            ->setPartnerTypes($partnerTypes);
    }
    /**
     * Get PartnerTypes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartnerType|null
     */
    public function getPartnerTypes()
    {
        return isset($this->PartnerTypes) ? $this->PartnerTypes : null;
    }
    /**
     * Set PartnerTypes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartnerType $partnerTypes
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClientTypeCondition
     */
    public function setPartnerTypes(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartnerType $partnerTypes = null)
    {
        if (is_null($partnerTypes) || (is_array($partnerTypes) && empty($partnerTypes))) {
            unset($this->PartnerTypes);
        } else {
            $this->PartnerTypes = $partnerTypes;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClientTypeCondition
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
