<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Cmd19050Conditions StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Cmd19050Conditions
 * @subpackage Structs
 */
class Cmd19050Conditions extends PropertyConditions
{
    /**
     * The AutomaticRenewal
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\AutomaticRenewalCondition
     */
    public $AutomaticRenewal;
    /**
     * Constructor method for Cmd19050Conditions
     * @uses Cmd19050Conditions::setAutomaticRenewal()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AutomaticRenewalCondition $automaticRenewal
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\AutomaticRenewalCondition $automaticRenewal = null)
    {
        $this
            ->setAutomaticRenewal($automaticRenewal);
    }
    /**
     * Get AutomaticRenewal value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AutomaticRenewalCondition|null
     */
    public function getAutomaticRenewal()
    {
        return isset($this->AutomaticRenewal) ? $this->AutomaticRenewal : null;
    }
    /**
     * Set AutomaticRenewal value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AutomaticRenewalCondition $automaticRenewal
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Cmd19050Conditions
     */
    public function setAutomaticRenewal(\Mu4ddi3\Compensa\Webservice\StructType\AutomaticRenewalCondition $automaticRenewal = null)
    {
        if (is_null($automaticRenewal) || (is_array($automaticRenewal) && empty($automaticRenewal))) {
            unset($this->AutomaticRenewal);
        } else {
            $this->AutomaticRenewal = $automaticRenewal;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Cmd19050Conditions
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
