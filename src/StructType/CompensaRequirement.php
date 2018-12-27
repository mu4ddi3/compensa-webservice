<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompensaRequirement StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CompensaRequirement
 * @subpackage Structs
 */
class CompensaRequirement extends Requirement
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\CompensaRequirementType
     */
    public $Type;
    /**
     * Constructor method for CompensaRequirement
     * @uses CompensaRequirement::setType()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CompensaRequirementType $type
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\CompensaRequirementType $type = null)
    {
        $this
            ->setType($type);
    }
    /**
     * Get Type value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaRequirementType|null
     */
    public function getType()
    {
        return isset($this->Type) ? $this->Type : null;
    }
    /**
     * Set Type value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CompensaRequirementType $type
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaRequirement
     */
    public function setType(\Mu4ddi3\Compensa\Webservice\StructType\CompensaRequirementType $type = null)
    {
        if (is_null($type) || (is_array($type) && empty($type))) {
            unset($this->Type);
        } else {
            $this->Type = $type;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaRequirement
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
