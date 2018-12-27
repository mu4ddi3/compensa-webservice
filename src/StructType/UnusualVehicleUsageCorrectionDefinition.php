<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnusualVehicleUsageCorrectionDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:UnusualVehicleUsageCorrectionDefinition
 * @subpackage Structs
 */
class UnusualVehicleUsageCorrectionDefinition extends DiscountDefinition
{
    /**
     * The UnusualVehicleUsageCorrectionFactors
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfUnusualVehicleUsageCorrectionFactor
     */
    public $UnusualVehicleUsageCorrectionFactors;
    /**
     * Constructor method for UnusualVehicleUsageCorrectionDefinition
     * @uses UnusualVehicleUsageCorrectionDefinition::setUnusualVehicleUsageCorrectionFactors()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfUnusualVehicleUsageCorrectionFactor $unusualVehicleUsageCorrectionFactors
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfUnusualVehicleUsageCorrectionFactor $unusualVehicleUsageCorrectionFactors = null)
    {
        $this
            ->setUnusualVehicleUsageCorrectionFactors($unusualVehicleUsageCorrectionFactors);
    }
    /**
     * Get UnusualVehicleUsageCorrectionFactors value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfUnusualVehicleUsageCorrectionFactor|null
     */
    public function getUnusualVehicleUsageCorrectionFactors()
    {
        return isset($this->UnusualVehicleUsageCorrectionFactors) ? $this->UnusualVehicleUsageCorrectionFactors : null;
    }
    /**
     * Set UnusualVehicleUsageCorrectionFactors value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfUnusualVehicleUsageCorrectionFactor $unusualVehicleUsageCorrectionFactors
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UnusualVehicleUsageCorrectionDefinition
     */
    public function setUnusualVehicleUsageCorrectionFactors(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfUnusualVehicleUsageCorrectionFactor $unusualVehicleUsageCorrectionFactors = null)
    {
        if (is_null($unusualVehicleUsageCorrectionFactors) || (is_array($unusualVehicleUsageCorrectionFactors) && empty($unusualVehicleUsageCorrectionFactors))) {
            unset($this->UnusualVehicleUsageCorrectionFactors);
        } else {
            $this->UnusualVehicleUsageCorrectionFactors = $unusualVehicleUsageCorrectionFactors;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UnusualVehicleUsageCorrectionDefinition
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
