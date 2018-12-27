<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GanTrackCondition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GanTrackCondition
 * @subpackage Structs
 */
class GanTrackCondition extends AvailabilityConditionBase
{
    /**
     * The IsGanTrack
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsGanTrack;
    /**
     * Constructor method for GanTrackCondition
     * @uses GanTrackCondition::setIsGanTrack()
     * @param bool $isGanTrack
     */
    public function __construct($isGanTrack = null)
    {
        $this
            ->setIsGanTrack($isGanTrack);
    }
    /**
     * Get IsGanTrack value
     * @return bool|null
     */
    public function getIsGanTrack()
    {
        return $this->IsGanTrack;
    }
    /**
     * Set IsGanTrack value
     * @param bool $isGanTrack
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GanTrackCondition
     */
    public function setIsGanTrack($isGanTrack = null)
    {
        // validation for constraint: boolean
        if (!is_null($isGanTrack) && !is_bool($isGanTrack)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isGanTrack)), __LINE__);
        }
        $this->IsGanTrack = $isGanTrack;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GanTrackCondition
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
