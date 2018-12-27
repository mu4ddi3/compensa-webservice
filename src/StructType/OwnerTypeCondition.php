<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OwnerTypeCondition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:OwnerTypeCondition
 * @subpackage Structs
 */
class OwnerTypeCondition extends AvailabilityConditionBase
{
    /**
     * The LegalPersonTypes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfLegalPersonType
     */
    public $LegalPersonTypes;
    /**
     * Constructor method for OwnerTypeCondition
     * @uses OwnerTypeCondition::setLegalPersonTypes()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfLegalPersonType $legalPersonTypes
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfLegalPersonType $legalPersonTypes = null)
    {
        $this
            ->setLegalPersonTypes($legalPersonTypes);
    }
    /**
     * Get LegalPersonTypes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfLegalPersonType|null
     */
    public function getLegalPersonTypes()
    {
        return isset($this->LegalPersonTypes) ? $this->LegalPersonTypes : null;
    }
    /**
     * Set LegalPersonTypes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfLegalPersonType $legalPersonTypes
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OwnerTypeCondition
     */
    public function setLegalPersonTypes(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfLegalPersonType $legalPersonTypes = null)
    {
        if (is_null($legalPersonTypes) || (is_array($legalPersonTypes) && empty($legalPersonTypes))) {
            unset($this->LegalPersonTypes);
        } else {
            $this->LegalPersonTypes = $legalPersonTypes;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OwnerTypeCondition
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
