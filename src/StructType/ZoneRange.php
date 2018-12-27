<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ZoneRange StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ZoneRange
 * @subpackage Structs
 */
class ZoneRange extends AbstractStructBase
{
    /**
     * The ZoneLeftBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ZoneLeftBound;
    /**
     * The ZoneRightBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ZoneRightBound;
    /**
     * Constructor method for ZoneRange
     * @uses ZoneRange::setZoneLeftBound()
     * @uses ZoneRange::setZoneRightBound()
     * @param int $zoneLeftBound
     * @param int $zoneRightBound
     */
    public function __construct($zoneLeftBound = null, $zoneRightBound = null)
    {
        $this
            ->setZoneLeftBound($zoneLeftBound)
            ->setZoneRightBound($zoneRightBound);
    }
    /**
     * Get ZoneLeftBound value
     * @return int|null
     */
    public function getZoneLeftBound()
    {
        return $this->ZoneLeftBound;
    }
    /**
     * Set ZoneLeftBound value
     * @param int $zoneLeftBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ZoneRange
     */
    public function setZoneLeftBound($zoneLeftBound = null)
    {
        // validation for constraint: int
        if (!is_null($zoneLeftBound) && !is_numeric($zoneLeftBound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($zoneLeftBound)), __LINE__);
        }
        $this->ZoneLeftBound = $zoneLeftBound;
        return $this;
    }
    /**
     * Get ZoneRightBound value
     * @return int|null
     */
    public function getZoneRightBound()
    {
        return $this->ZoneRightBound;
    }
    /**
     * Set ZoneRightBound value
     * @param int $zoneRightBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ZoneRange
     */
    public function setZoneRightBound($zoneRightBound = null)
    {
        // validation for constraint: int
        if (!is_null($zoneRightBound) && !is_numeric($zoneRightBound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($zoneRightBound)), __LINE__);
        }
        $this->ZoneRightBound = $zoneRightBound;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ZoneRange
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
