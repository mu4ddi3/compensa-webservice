<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetZoneSourceResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetZoneSourceResponse
 * @subpackage Structs
 */
class GetZoneSourceResponse extends AbstractStructBase
{
    /**
     * The ZoneSource
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ZoneSource;
    /**
     * Constructor method for GetZoneSourceResponse
     * @uses GetZoneSourceResponse::setZoneSource()
     * @param string $zoneSource
     */
    public function __construct($zoneSource = null)
    {
        $this
            ->setZoneSource($zoneSource);
    }
    /**
     * Get ZoneSource value
     * @return string|null
     */
    public function getZoneSource()
    {
        return $this->ZoneSource;
    }
    /**
     * Set ZoneSource value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\ZoneSource::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\ZoneSource::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $zoneSource
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetZoneSourceResponse
     */
    public function setZoneSource($zoneSource = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\ZoneSource::valueIsValid($zoneSource)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $zoneSource, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\ZoneSource::getValidValues())), __LINE__);
        }
        $this->ZoneSource = $zoneSource;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetZoneSourceResponse
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
