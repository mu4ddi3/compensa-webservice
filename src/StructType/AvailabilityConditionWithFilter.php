<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AvailabilityConditionWithFilter StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AvailabilityConditionWithFilter
 * @subpackage Structs
 */
class AvailabilityConditionWithFilter extends AvailabilityConditionBase
{
    /**
     * The AvaliabilityFilterLevel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AvaliabilityFilterLevel;
    /**
     * Constructor method for AvailabilityConditionWithFilter
     * @uses AvailabilityConditionWithFilter::setAvaliabilityFilterLevel()
     * @param string $avaliabilityFilterLevel
     */
    public function __construct($avaliabilityFilterLevel = null)
    {
        $this
            ->setAvaliabilityFilterLevel($avaliabilityFilterLevel);
    }
    /**
     * Get AvaliabilityFilterLevel value
     * @return string|null
     */
    public function getAvaliabilityFilterLevel()
    {
        return $this->AvaliabilityFilterLevel;
    }
    /**
     * Set AvaliabilityFilterLevel value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\AvaliabilityFilterLevel::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\AvaliabilityFilterLevel::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $avaliabilityFilterLevel
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AvailabilityConditionWithFilter
     */
    public function setAvaliabilityFilterLevel($avaliabilityFilterLevel = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\AvaliabilityFilterLevel::valueIsValid($avaliabilityFilterLevel)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $avaliabilityFilterLevel, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\AvaliabilityFilterLevel::getValidValues())), __LINE__);
        }
        $this->AvaliabilityFilterLevel = $avaliabilityFilterLevel;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AvailabilityConditionWithFilter
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
