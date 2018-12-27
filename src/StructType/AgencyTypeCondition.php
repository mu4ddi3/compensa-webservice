<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AgencyTypeCondition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AgencyTypeCondition
 * @subpackage Structs
 */
class AgencyTypeCondition extends AvailabilityConditionWithFilter
{
    /**
     * The AgencyTypes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAgencyType
     */
    public $AgencyTypes;
    /**
     * Constructor method for AgencyTypeCondition
     * @uses AgencyTypeCondition::setAgencyTypes()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAgencyType $agencyTypes
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAgencyType $agencyTypes = null)
    {
        $this
            ->setAgencyTypes($agencyTypes);
    }
    /**
     * Get AgencyTypes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAgencyType|null
     */
    public function getAgencyTypes()
    {
        return isset($this->AgencyTypes) ? $this->AgencyTypes : null;
    }
    /**
     * Set AgencyTypes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAgencyType $agencyTypes
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AgencyTypeCondition
     */
    public function setAgencyTypes(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAgencyType $agencyTypes = null)
    {
        if (is_null($agencyTypes) || (is_array($agencyTypes) && empty($agencyTypes))) {
            unset($this->AgencyTypes);
        } else {
            $this->AgencyTypes = $agencyTypes;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AgencyTypeCondition
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
