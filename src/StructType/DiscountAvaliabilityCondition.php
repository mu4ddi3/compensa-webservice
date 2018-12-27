<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DiscountAvaliabilityCondition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DiscountAvaliabilityCondition
 * @subpackage Structs
 */
class DiscountAvaliabilityCondition extends AvailabilityConditionBase
{
    /**
     * The DisplayName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $DisplayName;
    /**
     * The IsApplied
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsApplied;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * Constructor method for DiscountAvaliabilityCondition
     * @uses DiscountAvaliabilityCondition::setDisplayName()
     * @uses DiscountAvaliabilityCondition::setIsApplied()
     * @uses DiscountAvaliabilityCondition::setType()
     * @param string $displayName
     * @param bool $isApplied
     * @param string $type
     */
    public function __construct($displayName = null, $isApplied = null, $type = null)
    {
        $this
            ->setDisplayName($displayName)
            ->setIsApplied($isApplied)
            ->setType($type);
    }
    /**
     * Get DisplayName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDisplayName()
    {
        return isset($this->DisplayName) ? $this->DisplayName : null;
    }
    /**
     * Set DisplayName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $displayName
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DiscountAvaliabilityCondition
     */
    public function setDisplayName($displayName = null)
    {
        // validation for constraint: string
        if (!is_null($displayName) && !is_string($displayName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($displayName)), __LINE__);
        }
        if (is_null($displayName) || (is_array($displayName) && empty($displayName))) {
            unset($this->DisplayName);
        } else {
            $this->DisplayName = $displayName;
        }
        return $this;
    }
    /**
     * Get IsApplied value
     * @return bool|null
     */
    public function getIsApplied()
    {
        return $this->IsApplied;
    }
    /**
     * Set IsApplied value
     * @param bool $isApplied
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DiscountAvaliabilityCondition
     */
    public function setIsApplied($isApplied = null)
    {
        // validation for constraint: boolean
        if (!is_null($isApplied) && !is_bool($isApplied)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isApplied)), __LINE__);
        }
        $this->IsApplied = $isApplied;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\DiscountType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\DiscountType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DiscountAvaliabilityCondition
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\DiscountType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\DiscountType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DiscountAvaliabilityCondition
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
