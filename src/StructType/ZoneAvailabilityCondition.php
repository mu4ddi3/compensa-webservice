<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ZoneAvailabilityCondition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ZoneAvailabilityCondition
 * @subpackage Structs
 */
class ZoneAvailabilityCondition extends AvailabilityCondition
{
    /**
     * The PackageZoneSource
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PackageZoneSource;
    /**
     * The ZoneRanges
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfZoneRange
     */
    public $ZoneRanges;
    /**
     * Constructor method for ZoneAvailabilityCondition
     * @uses ZoneAvailabilityCondition::setPackageZoneSource()
     * @uses ZoneAvailabilityCondition::setZoneRanges()
     * @param string $packageZoneSource
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfZoneRange $zoneRanges
     */
    public function __construct($packageZoneSource = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfZoneRange $zoneRanges = null)
    {
        $this
            ->setPackageZoneSource($packageZoneSource)
            ->setZoneRanges($zoneRanges);
    }
    /**
     * Get PackageZoneSource value
     * @return string|null
     */
    public function getPackageZoneSource()
    {
        return $this->PackageZoneSource;
    }
    /**
     * Set PackageZoneSource value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PackageZoneSource::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PackageZoneSource::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $packageZoneSource
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ZoneAvailabilityCondition
     */
    public function setPackageZoneSource($packageZoneSource = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\PackageZoneSource::valueIsValid($packageZoneSource)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $packageZoneSource, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\PackageZoneSource::getValidValues())), __LINE__);
        }
        $this->PackageZoneSource = $packageZoneSource;
        return $this;
    }
    /**
     * Get ZoneRanges value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfZoneRange|null
     */
    public function getZoneRanges()
    {
        return isset($this->ZoneRanges) ? $this->ZoneRanges : null;
    }
    /**
     * Set ZoneRanges value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfZoneRange $zoneRanges
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ZoneAvailabilityCondition
     */
    public function setZoneRanges(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfZoneRange $zoneRanges = null)
    {
        if (is_null($zoneRanges) || (is_array($zoneRanges) && empty($zoneRanges))) {
            unset($this->ZoneRanges);
        } else {
            $this->ZoneRanges = $zoneRanges;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ZoneAvailabilityCondition
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
