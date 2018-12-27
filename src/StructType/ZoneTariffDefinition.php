<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ZoneTariffDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ZoneTariffDefinition
 * @subpackage Structs
 */
class ZoneTariffDefinition extends AbstractStructBase
{
    /**
     * The ZoneAcDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ZoneAcDefinitionId;
    /**
     * The ZoneOcDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ZoneOcDefinitionId;
    /**
     * Constructor method for ZoneTariffDefinition
     * @uses ZoneTariffDefinition::setZoneAcDefinitionId()
     * @uses ZoneTariffDefinition::setZoneOcDefinitionId()
     * @param int $zoneAcDefinitionId
     * @param int $zoneOcDefinitionId
     */
    public function __construct($zoneAcDefinitionId = null, $zoneOcDefinitionId = null)
    {
        $this
            ->setZoneAcDefinitionId($zoneAcDefinitionId)
            ->setZoneOcDefinitionId($zoneOcDefinitionId);
    }
    /**
     * Get ZoneAcDefinitionId value
     * @return int|null
     */
    public function getZoneAcDefinitionId()
    {
        return $this->ZoneAcDefinitionId;
    }
    /**
     * Set ZoneAcDefinitionId value
     * @param int $zoneAcDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ZoneTariffDefinition
     */
    public function setZoneAcDefinitionId($zoneAcDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($zoneAcDefinitionId) && !is_numeric($zoneAcDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($zoneAcDefinitionId)), __LINE__);
        }
        $this->ZoneAcDefinitionId = $zoneAcDefinitionId;
        return $this;
    }
    /**
     * Get ZoneOcDefinitionId value
     * @return int|null
     */
    public function getZoneOcDefinitionId()
    {
        return $this->ZoneOcDefinitionId;
    }
    /**
     * Set ZoneOcDefinitionId value
     * @param int $zoneOcDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ZoneTariffDefinition
     */
    public function setZoneOcDefinitionId($zoneOcDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($zoneOcDefinitionId) && !is_numeric($zoneOcDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($zoneOcDefinitionId)), __LINE__);
        }
        $this->ZoneOcDefinitionId = $zoneOcDefinitionId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ZoneTariffDefinition
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
