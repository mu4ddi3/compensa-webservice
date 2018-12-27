<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClientCodeCondition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ClientCodeCondition
 * @subpackage Structs
 */
class ClientCodeCondition extends AvailabilityConditionWithFilter
{
    /**
     * The ClientCodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClientCode
     */
    public $ClientCodes;
    /**
     * Constructor method for ClientCodeCondition
     * @uses ClientCodeCondition::setClientCodes()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClientCode $clientCodes
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClientCode $clientCodes = null)
    {
        $this
            ->setClientCodes($clientCodes);
    }
    /**
     * Get ClientCodes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClientCode|null
     */
    public function getClientCodes()
    {
        return isset($this->ClientCodes) ? $this->ClientCodes : null;
    }
    /**
     * Set ClientCodes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClientCode $clientCodes
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClientCodeCondition
     */
    public function setClientCodes(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClientCode $clientCodes = null)
    {
        if (is_null($clientCodes) || (is_array($clientCodes) && empty($clientCodes))) {
            unset($this->ClientCodes);
        } else {
            $this->ClientCodes = $clientCodes;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClientCodeCondition
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
