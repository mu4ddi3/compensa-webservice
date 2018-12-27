<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TerritorialScopeCondition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:TerritorialScopeCondition
 * @subpackage Structs
 */
class TerritorialScopeCondition extends AvailabilityConditionBase
{
    /**
     * The TerritorialScopes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTerritorialScope
     */
    public $TerritorialScopes;
    /**
     * Constructor method for TerritorialScopeCondition
     * @uses TerritorialScopeCondition::setTerritorialScopes()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTerritorialScope $territorialScopes
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTerritorialScope $territorialScopes = null)
    {
        $this
            ->setTerritorialScopes($territorialScopes);
    }
    /**
     * Get TerritorialScopes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTerritorialScope|null
     */
    public function getTerritorialScopes()
    {
        return isset($this->TerritorialScopes) ? $this->TerritorialScopes : null;
    }
    /**
     * Set TerritorialScopes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTerritorialScope $territorialScopes
     * @return \Mu4ddi3\Compensa\Webservice\StructType\TerritorialScopeCondition
     */
    public function setTerritorialScopes(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTerritorialScope $territorialScopes = null)
    {
        if (is_null($territorialScopes) || (is_array($territorialScopes) && empty($territorialScopes))) {
            unset($this->TerritorialScopes);
        } else {
            $this->TerritorialScopes = $territorialScopes;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\TerritorialScopeCondition
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
