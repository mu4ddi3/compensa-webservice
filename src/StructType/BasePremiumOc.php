<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BasePremiumOc StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BasePremiumOc
 * @subpackage Structs
 */
class BasePremiumOc extends BasePremium
{
    /**
     * The CapacityLeftBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CapacityLeftBound;
    /**
     * The CapacityRightBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CapacityRightBound;
    /**
     * The EngineCapacityRangeType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $EngineCapacityRangeType;
    /**
     * The Zone
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Zone;
    /**
     * Constructor method for BasePremiumOc
     * @uses BasePremiumOc::setCapacityLeftBound()
     * @uses BasePremiumOc::setCapacityRightBound()
     * @uses BasePremiumOc::setEngineCapacityRangeType()
     * @uses BasePremiumOc::setZone()
     * @param int $capacityLeftBound
     * @param int $capacityRightBound
     * @param string $engineCapacityRangeType
     * @param int $zone
     */
    public function __construct($capacityLeftBound = null, $capacityRightBound = null, $engineCapacityRangeType = null, $zone = null)
    {
        $this
            ->setCapacityLeftBound($capacityLeftBound)
            ->setCapacityRightBound($capacityRightBound)
            ->setEngineCapacityRangeType($engineCapacityRangeType)
            ->setZone($zone);
    }
    /**
     * Get CapacityLeftBound value
     * @return int|null
     */
    public function getCapacityLeftBound()
    {
        return $this->CapacityLeftBound;
    }
    /**
     * Set CapacityLeftBound value
     * @param int $capacityLeftBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePremiumOc
     */
    public function setCapacityLeftBound($capacityLeftBound = null)
    {
        // validation for constraint: int
        if (!is_null($capacityLeftBound) && !is_numeric($capacityLeftBound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($capacityLeftBound)), __LINE__);
        }
        $this->CapacityLeftBound = $capacityLeftBound;
        return $this;
    }
    /**
     * Get CapacityRightBound value
     * @return int|null
     */
    public function getCapacityRightBound()
    {
        return $this->CapacityRightBound;
    }
    /**
     * Set CapacityRightBound value
     * @param int $capacityRightBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePremiumOc
     */
    public function setCapacityRightBound($capacityRightBound = null)
    {
        // validation for constraint: int
        if (!is_null($capacityRightBound) && !is_numeric($capacityRightBound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($capacityRightBound)), __LINE__);
        }
        $this->CapacityRightBound = $capacityRightBound;
        return $this;
    }
    /**
     * Get EngineCapacityRangeType value
     * @return string|null
     */
    public function getEngineCapacityRangeType()
    {
        return $this->EngineCapacityRangeType;
    }
    /**
     * Set EngineCapacityRangeType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\EngineCapacityRangeType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\EngineCapacityRangeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $engineCapacityRangeType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePremiumOc
     */
    public function setEngineCapacityRangeType($engineCapacityRangeType = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\EngineCapacityRangeType::valueIsValid($engineCapacityRangeType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $engineCapacityRangeType, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\EngineCapacityRangeType::getValidValues())), __LINE__);
        }
        $this->EngineCapacityRangeType = $engineCapacityRangeType;
        return $this;
    }
    /**
     * Get Zone value
     * @return int|null
     */
    public function getZone()
    {
        return $this->Zone;
    }
    /**
     * Set Zone value
     * @param int $zone
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePremiumOc
     */
    public function setZone($zone = null)
    {
        // validation for constraint: int
        if (!is_null($zone) && !is_numeric($zone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($zone)), __LINE__);
        }
        $this->Zone = $zone;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePremiumOc
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
