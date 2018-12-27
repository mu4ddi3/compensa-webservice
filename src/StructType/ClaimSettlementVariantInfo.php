<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClaimSettlementVariantInfo StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ClaimSettlementVariantInfo
 * @subpackage Structs
 */
class ClaimSettlementVariantInfo extends AbstractStructBase
{
    /**
     * The AvaliableAcClaimSettlementVariants
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimSettlementVariant
     */
    public $AvaliableAcClaimSettlementVariants;
    /**
     * The DefaultClaimSettlementVariant
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DefaultClaimSettlementVariant;
    /**
     * The VehicleAge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
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
     * Constructor method for ClaimSettlementVariantInfo
     * @uses ClaimSettlementVariantInfo::setAvaliableAcClaimSettlementVariants()
     * @uses ClaimSettlementVariantInfo::setDefaultClaimSettlementVariant()
     * @uses ClaimSettlementVariantInfo::setVehicleAge()
     * @uses ClaimSettlementVariantInfo::setVehicleGroupId()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimSettlementVariant $avaliableAcClaimSettlementVariants
     * @param string $defaultClaimSettlementVariant
     * @param int $vehicleAge
     * @param int $vehicleGroupId
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimSettlementVariant $avaliableAcClaimSettlementVariants = null, $defaultClaimSettlementVariant = null, $vehicleAge = null, $vehicleGroupId = null)
    {
        $this
            ->setAvaliableAcClaimSettlementVariants($avaliableAcClaimSettlementVariants)
            ->setDefaultClaimSettlementVariant($defaultClaimSettlementVariant)
            ->setVehicleAge($vehicleAge)
            ->setVehicleGroupId($vehicleGroupId);
    }
    /**
     * Get AvaliableAcClaimSettlementVariants value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimSettlementVariant|null
     */
    public function getAvaliableAcClaimSettlementVariants()
    {
        return isset($this->AvaliableAcClaimSettlementVariants) ? $this->AvaliableAcClaimSettlementVariants : null;
    }
    /**
     * Set AvaliableAcClaimSettlementVariants value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimSettlementVariant $avaliableAcClaimSettlementVariants
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantInfo
     */
    public function setAvaliableAcClaimSettlementVariants(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimSettlementVariant $avaliableAcClaimSettlementVariants = null)
    {
        if (is_null($avaliableAcClaimSettlementVariants) || (is_array($avaliableAcClaimSettlementVariants) && empty($avaliableAcClaimSettlementVariants))) {
            unset($this->AvaliableAcClaimSettlementVariants);
        } else {
            $this->AvaliableAcClaimSettlementVariants = $avaliableAcClaimSettlementVariants;
        }
        return $this;
    }
    /**
     * Get DefaultClaimSettlementVariant value
     * @return string|null
     */
    public function getDefaultClaimSettlementVariant()
    {
        return $this->DefaultClaimSettlementVariant;
    }
    /**
     * Set DefaultClaimSettlementVariant value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\ClaimSettlementVariant::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\ClaimSettlementVariant::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $defaultClaimSettlementVariant
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantInfo
     */
    public function setDefaultClaimSettlementVariant($defaultClaimSettlementVariant = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\ClaimSettlementVariant::valueIsValid($defaultClaimSettlementVariant)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $defaultClaimSettlementVariant, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\ClaimSettlementVariant::getValidValues())), __LINE__);
        }
        $this->DefaultClaimSettlementVariant = $defaultClaimSettlementVariant;
        return $this;
    }
    /**
     * Get VehicleAge value
     * @return int|null
     */
    public function getVehicleAge()
    {
        return $this->VehicleAge;
    }
    /**
     * Set VehicleAge value
     * @param int $vehicleAge
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantInfo
     */
    public function setVehicleAge($vehicleAge = null)
    {
        // validation for constraint: int
        if (!is_null($vehicleAge) && !is_numeric($vehicleAge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($vehicleAge)), __LINE__);
        }
        $this->VehicleAge = $vehicleAge;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantInfo
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantInfo
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
