<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClaimSettlementVariantAvaliability StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ClaimSettlementVariantAvaliability
 * @subpackage Structs
 */
class ClaimSettlementVariantAvaliability extends AbstractStructBase
{
    /**
     * The AvaliableVariants
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimSettlementVariant
     */
    public $AvaliableVariants;
    /**
     * The DefaultVariant
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DefaultVariant;
    /**
     * The VehicleAge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint
     */
    public $VehicleAge;
    /**
     * The VehicleGroupId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $VehicleGroupId;
    /**
     * Constructor method for ClaimSettlementVariantAvaliability
     * @uses ClaimSettlementVariantAvaliability::setAvaliableVariants()
     * @uses ClaimSettlementVariantAvaliability::setDefaultVariant()
     * @uses ClaimSettlementVariantAvaliability::setVehicleAge()
     * @uses ClaimSettlementVariantAvaliability::setVehicleGroupId()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimSettlementVariant $avaliableVariants
     * @param string $defaultVariant
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint $vehicleAge
     * @param int $vehicleGroupId
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimSettlementVariant $avaliableVariants = null, $defaultVariant = null, \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint $vehicleAge = null, $vehicleGroupId = null)
    {
        $this
            ->setAvaliableVariants($avaliableVariants)
            ->setDefaultVariant($defaultVariant)
            ->setVehicleAge($vehicleAge)
            ->setVehicleGroupId($vehicleGroupId);
    }
    /**
     * Get AvaliableVariants value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimSettlementVariant|null
     */
    public function getAvaliableVariants()
    {
        return isset($this->AvaliableVariants) ? $this->AvaliableVariants : null;
    }
    /**
     * Set AvaliableVariants value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimSettlementVariant $avaliableVariants
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantAvaliability
     */
    public function setAvaliableVariants(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimSettlementVariant $avaliableVariants = null)
    {
        if (is_null($avaliableVariants) || (is_array($avaliableVariants) && empty($avaliableVariants))) {
            unset($this->AvaliableVariants);
        } else {
            $this->AvaliableVariants = $avaliableVariants;
        }
        return $this;
    }
    /**
     * Get DefaultVariant value
     * @return string|null
     */
    public function getDefaultVariant()
    {
        return $this->DefaultVariant;
    }
    /**
     * Set DefaultVariant value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\ClaimSettlementVariant::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\ClaimSettlementVariant::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $defaultVariant
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantAvaliability
     */
    public function setDefaultVariant($defaultVariant = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\ClaimSettlementVariant::valueIsValid($defaultVariant)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $defaultVariant, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\ClaimSettlementVariant::getValidValues())), __LINE__);
        }
        $this->DefaultVariant = $defaultVariant;
        return $this;
    }
    /**
     * Get VehicleAge value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint|null
     */
    public function getVehicleAge()
    {
        return isset($this->VehicleAge) ? $this->VehicleAge : null;
    }
    /**
     * Set VehicleAge value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint $vehicleAge
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantAvaliability
     */
    public function setVehicleAge(\Mu4ddi3\Compensa\Webservice\StructType\RangeOfint $vehicleAge = null)
    {
        if (is_null($vehicleAge) || (is_array($vehicleAge) && empty($vehicleAge))) {
            unset($this->VehicleAge);
        } else {
            $this->VehicleAge = $vehicleAge;
        }
        return $this;
    }
    /**
     * Get VehicleGroupId value
     * @return int|null
     */
    public function getVehicleGroupId()
    {
        return $this->VehicleGroupId;
    }
    /**
     * Set VehicleGroupId value
     * @param int $vehicleGroupId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantAvaliability
     */
    public function setVehicleGroupId($vehicleGroupId = null)
    {
        // validation for constraint: int
        if (!is_null($vehicleGroupId) && !is_numeric($vehicleGroupId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($vehicleGroupId)), __LINE__);
        }
        $this->VehicleGroupId = $vehicleGroupId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantAvaliability
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
