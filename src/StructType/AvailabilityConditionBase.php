<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AvailabilityConditionBase StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AvailabilityConditionBase
 * @subpackage Structs
 */
class AvailabilityConditionBase extends AbstractStructBase
{
    /**
     * The IsChangePossible
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsChangePossible;
    /**
     * The LogicalOperatorType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LogicalOperatorType;
    /**
     * Constructor method for AvailabilityConditionBase
     * @uses AvailabilityConditionBase::setIsChangePossible()
     * @uses AvailabilityConditionBase::setLogicalOperatorType()
     * @param bool $isChangePossible
     * @param string $logicalOperatorType
     */
    public function __construct($isChangePossible = null, $logicalOperatorType = null)
    {
        $this
            ->setIsChangePossible($isChangePossible)
            ->setLogicalOperatorType($logicalOperatorType);
    }
    /**
     * Get IsChangePossible value
     * @return bool|null
     */
    public function getIsChangePossible()
    {
        return $this->IsChangePossible;
    }
    /**
     * Set IsChangePossible value
     * @param bool $isChangePossible
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AvailabilityConditionBase
     */
    public function setIsChangePossible($isChangePossible = null)
    {
        // validation for constraint: boolean
        if (!is_null($isChangePossible) && !is_bool($isChangePossible)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isChangePossible)), __LINE__);
        }
        $this->IsChangePossible = $isChangePossible;
        return $this;
    }
    /**
     * Get LogicalOperatorType value
     * @return string|null
     */
    public function getLogicalOperatorType()
    {
        return $this->LogicalOperatorType;
    }
    /**
     * Set LogicalOperatorType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\LogicalOperatorType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\LogicalOperatorType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $logicalOperatorType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AvailabilityConditionBase
     */
    public function setLogicalOperatorType($logicalOperatorType = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\LogicalOperatorType::valueIsValid($logicalOperatorType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $logicalOperatorType, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\LogicalOperatorType::getValidValues())), __LINE__);
        }
        $this->LogicalOperatorType = $logicalOperatorType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AvailabilityConditionBase
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
