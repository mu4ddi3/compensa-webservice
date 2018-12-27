<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnusualVehicleUsageBlackRiskRule StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:UnusualVehicleUsageBlackRiskRule
 * @subpackage Structs
 */
class UnusualVehicleUsageBlackRiskRule extends BlackRiskRule
{
    /**
     * The UnusualVehicleUsage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $UnusualVehicleUsage;
    /**
     * Constructor method for UnusualVehicleUsageBlackRiskRule
     * @uses UnusualVehicleUsageBlackRiskRule::setUnusualVehicleUsage()
     * @param string $unusualVehicleUsage
     */
    public function __construct($unusualVehicleUsage = null)
    {
        $this
            ->setUnusualVehicleUsage($unusualVehicleUsage);
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UnusualVehicleUsageBlackRiskRule
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UnusualVehicleUsageBlackRiskRule
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
