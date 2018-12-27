<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnusualVehicleUsageCorrectionFactor StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:UnusualVehicleUsageCorrectionFactor
 * @subpackage Structs
 */
class UnusualVehicleUsageCorrectionFactor extends AbstractStructBase
{
    /**
     * The Factor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $Factor;
    /**
     * The UnusualVehicleUsage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $UnusualVehicleUsage;
    /**
     * Constructor method for UnusualVehicleUsageCorrectionFactor
     * @uses UnusualVehicleUsageCorrectionFactor::setFactor()
     * @uses UnusualVehicleUsageCorrectionFactor::setUnusualVehicleUsage()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $factor
     * @param string $unusualVehicleUsage
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\Factor $factor = null, $unusualVehicleUsage = null)
    {
        $this
            ->setFactor($factor)
            ->setUnusualVehicleUsage($unusualVehicleUsage);
    }
    /**
     * Get Factor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getFactor()
    {
        return isset($this->Factor) ? $this->Factor : null;
    }
    /**
     * Set Factor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $factor
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UnusualVehicleUsageCorrectionFactor
     */
    public function setFactor(\Mu4ddi3\Compensa\Webservice\StructType\Factor $factor = null)
    {
        if (is_null($factor) || (is_array($factor) && empty($factor))) {
            unset($this->Factor);
        } else {
            $this->Factor = $factor;
        }
        return $this;
    }
    /**
     * Get UnusualVehicleUsage value
     * @return string|null
     */
    public function getUnusualVehicleUsage()
    {
        return $this->UnusualVehicleUsage;
    }
    /**
     * Set UnusualVehicleUsage value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\UnusualVehicleUsage::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\UnusualVehicleUsage::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $unusualVehicleUsage
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UnusualVehicleUsageCorrectionFactor
     */
    public function setUnusualVehicleUsage($unusualVehicleUsage = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\UnusualVehicleUsage::valueIsValid($unusualVehicleUsage)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $unusualVehicleUsage, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\UnusualVehicleUsage::getValidValues())), __LINE__);
        }
        $this->UnusualVehicleUsage = $unusualVehicleUsage;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UnusualVehicleUsageCorrectionFactor
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
