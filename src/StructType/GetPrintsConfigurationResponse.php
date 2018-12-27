<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPrintsConfigurationResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetPrintsConfigurationResponse
 * @subpackage Structs
 */
class GetPrintsConfigurationResponse extends AbstractStructBase
{
    /**
     * The ConfigurationItems
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPrintsConfigurationItem
     */
    public $ConfigurationItems;
    /**
     * Constructor method for GetPrintsConfigurationResponse
     * @uses GetPrintsConfigurationResponse::setConfigurationItems()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPrintsConfigurationItem $configurationItems
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPrintsConfigurationItem $configurationItems = null)
    {
        $this
            ->setConfigurationItems($configurationItems);
    }
    /**
     * Get ConfigurationItems value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPrintsConfigurationItem|null
     */
    public function getConfigurationItems()
    {
        return isset($this->ConfigurationItems) ? $this->ConfigurationItems : null;
    }
    /**
     * Set ConfigurationItems value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPrintsConfigurationItem $configurationItems
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetPrintsConfigurationResponse
     */
    public function setConfigurationItems(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPrintsConfigurationItem $configurationItems = null)
    {
        if (is_null($configurationItems) || (is_array($configurationItems) && empty($configurationItems))) {
            unset($this->ConfigurationItems);
        } else {
            $this->ConfigurationItems = $configurationItems;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetPrintsConfigurationResponse
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
