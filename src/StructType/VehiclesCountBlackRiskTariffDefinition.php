<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehiclesCountBlackRiskTariffDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:VehiclesCountBlackRiskTariffDefinition
 * @subpackage Structs
 */
class VehiclesCountBlackRiskTariffDefinition extends CommonTariffDefinition
{
    /**
     * The CompensaVehiclesRuleMessage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CompensaVehiclesRuleMessage;
    /**
     * The IsExceedingCompensaVehiclesCountBlackRisk
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsExceedingCompensaVehiclesCountBlackRisk;
    /**
     * The IsExceedingUfgVehiclesCountBlackRisk
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsExceedingUfgVehiclesCountBlackRisk;
    /**
     * The MaximumCompensaVehiclesCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MaximumCompensaVehiclesCount;
    /**
     * The MaximumUfgVehiclesCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MaximumUfgVehiclesCount;
    /**
     * The UfgVehiclesRuleMessage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $UfgVehiclesRuleMessage;
    /**
     * Constructor method for VehiclesCountBlackRiskTariffDefinition
     * @uses VehiclesCountBlackRiskTariffDefinition::setCompensaVehiclesRuleMessage()
     * @uses VehiclesCountBlackRiskTariffDefinition::setIsExceedingCompensaVehiclesCountBlackRisk()
     * @uses VehiclesCountBlackRiskTariffDefinition::setIsExceedingUfgVehiclesCountBlackRisk()
     * @uses VehiclesCountBlackRiskTariffDefinition::setMaximumCompensaVehiclesCount()
     * @uses VehiclesCountBlackRiskTariffDefinition::setMaximumUfgVehiclesCount()
     * @uses VehiclesCountBlackRiskTariffDefinition::setUfgVehiclesRuleMessage()
     * @param string $compensaVehiclesRuleMessage
     * @param bool $isExceedingCompensaVehiclesCountBlackRisk
     * @param bool $isExceedingUfgVehiclesCountBlackRisk
     * @param int $maximumCompensaVehiclesCount
     * @param int $maximumUfgVehiclesCount
     * @param string $ufgVehiclesRuleMessage
     */
    public function __construct($compensaVehiclesRuleMessage = null, $isExceedingCompensaVehiclesCountBlackRisk = null, $isExceedingUfgVehiclesCountBlackRisk = null, $maximumCompensaVehiclesCount = null, $maximumUfgVehiclesCount = null, $ufgVehiclesRuleMessage = null)
    {
        $this
            ->setCompensaVehiclesRuleMessage($compensaVehiclesRuleMessage)
            ->setIsExceedingCompensaVehiclesCountBlackRisk($isExceedingCompensaVehiclesCountBlackRisk)
            ->setIsExceedingUfgVehiclesCountBlackRisk($isExceedingUfgVehiclesCountBlackRisk)
            ->setMaximumCompensaVehiclesCount($maximumCompensaVehiclesCount)
            ->setMaximumUfgVehiclesCount($maximumUfgVehiclesCount)
            ->setUfgVehiclesRuleMessage($ufgVehiclesRuleMessage);
    }
    /**
     * Get CompensaVehiclesRuleMessage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCompensaVehiclesRuleMessage()
    {
        return isset($this->CompensaVehiclesRuleMessage) ? $this->CompensaVehiclesRuleMessage : null;
    }
    /**
     * Set CompensaVehiclesRuleMessage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $compensaVehiclesRuleMessage
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehiclesCountBlackRiskTariffDefinition
     */
    public function setCompensaVehiclesRuleMessage($compensaVehiclesRuleMessage = null)
    {
        // validation for constraint: string
        if (!is_null($compensaVehiclesRuleMessage) && !is_string($compensaVehiclesRuleMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($compensaVehiclesRuleMessage)), __LINE__);
        }
        if (is_null($compensaVehiclesRuleMessage) || (is_array($compensaVehiclesRuleMessage) && empty($compensaVehiclesRuleMessage))) {
            unset($this->CompensaVehiclesRuleMessage);
        } else {
            $this->CompensaVehiclesRuleMessage = $compensaVehiclesRuleMessage;
        }
        return $this;
    }
    /**
     * Get IsExceedingCompensaVehiclesCountBlackRisk value
     * @return bool|null
     */
    public function getIsExceedingCompensaVehiclesCountBlackRisk()
    {
        return $this->IsExceedingCompensaVehiclesCountBlackRisk;
    }
    /**
     * Set IsExceedingCompensaVehiclesCountBlackRisk value
     * @param bool $isExceedingCompensaVehiclesCountBlackRisk
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehiclesCountBlackRiskTariffDefinition
     */
    public function setIsExceedingCompensaVehiclesCountBlackRisk($isExceedingCompensaVehiclesCountBlackRisk = null)
    {
        // validation for constraint: boolean
        if (!is_null($isExceedingCompensaVehiclesCountBlackRisk) && !is_bool($isExceedingCompensaVehiclesCountBlackRisk)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isExceedingCompensaVehiclesCountBlackRisk)), __LINE__);
        }
        $this->IsExceedingCompensaVehiclesCountBlackRisk = $isExceedingCompensaVehiclesCountBlackRisk;
        return $this;
    }
    /**
     * Get IsExceedingUfgVehiclesCountBlackRisk value
     * @return bool|null
     */
    public function getIsExceedingUfgVehiclesCountBlackRisk()
    {
        return $this->IsExceedingUfgVehiclesCountBlackRisk;
    }
    /**
     * Set IsExceedingUfgVehiclesCountBlackRisk value
     * @param bool $isExceedingUfgVehiclesCountBlackRisk
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehiclesCountBlackRiskTariffDefinition
     */
    public function setIsExceedingUfgVehiclesCountBlackRisk($isExceedingUfgVehiclesCountBlackRisk = null)
    {
        // validation for constraint: boolean
        if (!is_null($isExceedingUfgVehiclesCountBlackRisk) && !is_bool($isExceedingUfgVehiclesCountBlackRisk)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isExceedingUfgVehiclesCountBlackRisk)), __LINE__);
        }
        $this->IsExceedingUfgVehiclesCountBlackRisk = $isExceedingUfgVehiclesCountBlackRisk;
        return $this;
    }
    /**
     * Get MaximumCompensaVehiclesCount value
     * @return int|null
     */
    public function getMaximumCompensaVehiclesCount()
    {
        return $this->MaximumCompensaVehiclesCount;
    }
    /**
     * Set MaximumCompensaVehiclesCount value
     * @param int $maximumCompensaVehiclesCount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehiclesCountBlackRiskTariffDefinition
     */
    public function setMaximumCompensaVehiclesCount($maximumCompensaVehiclesCount = null)
    {
        // validation for constraint: int
        if (!is_null($maximumCompensaVehiclesCount) && !is_numeric($maximumCompensaVehiclesCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maximumCompensaVehiclesCount)), __LINE__);
        }
        $this->MaximumCompensaVehiclesCount = $maximumCompensaVehiclesCount;
        return $this;
    }
    /**
     * Get MaximumUfgVehiclesCount value
     * @return int|null
     */
    public function getMaximumUfgVehiclesCount()
    {
        return $this->MaximumUfgVehiclesCount;
    }
    /**
     * Set MaximumUfgVehiclesCount value
     * @param int $maximumUfgVehiclesCount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehiclesCountBlackRiskTariffDefinition
     */
    public function setMaximumUfgVehiclesCount($maximumUfgVehiclesCount = null)
    {
        // validation for constraint: int
        if (!is_null($maximumUfgVehiclesCount) && !is_numeric($maximumUfgVehiclesCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maximumUfgVehiclesCount)), __LINE__);
        }
        $this->MaximumUfgVehiclesCount = $maximumUfgVehiclesCount;
        return $this;
    }
    /**
     * Get UfgVehiclesRuleMessage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUfgVehiclesRuleMessage()
    {
        return isset($this->UfgVehiclesRuleMessage) ? $this->UfgVehiclesRuleMessage : null;
    }
    /**
     * Set UfgVehiclesRuleMessage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $ufgVehiclesRuleMessage
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehiclesCountBlackRiskTariffDefinition
     */
    public function setUfgVehiclesRuleMessage($ufgVehiclesRuleMessage = null)
    {
        // validation for constraint: string
        if (!is_null($ufgVehiclesRuleMessage) && !is_string($ufgVehiclesRuleMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ufgVehiclesRuleMessage)), __LINE__);
        }
        if (is_null($ufgVehiclesRuleMessage) || (is_array($ufgVehiclesRuleMessage) && empty($ufgVehiclesRuleMessage))) {
            unset($this->UfgVehiclesRuleMessage);
        } else {
            $this->UfgVehiclesRuleMessage = $ufgVehiclesRuleMessage;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehiclesCountBlackRiskTariffDefinition
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
