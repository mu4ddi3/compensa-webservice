<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RenewalClaimSettlementVariantAvaliability StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RenewalClaimSettlementVariantAvaliability
 * @subpackage Structs
 */
class RenewalClaimSettlementVariantAvaliability extends ClaimSettlementVariantAvaliability
{
    /**
     * The HasPreviousPolicyClaims
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $HasPreviousPolicyClaims;
    /**
     * The VariantOnPreviousPolicy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $VariantOnPreviousPolicy;
    /**
     * The VehicleAgeOnPreviousPolicy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint
     */
    public $VehicleAgeOnPreviousPolicy;
    /**
     * Constructor method for RenewalClaimSettlementVariantAvaliability
     * @uses RenewalClaimSettlementVariantAvaliability::setHasPreviousPolicyClaims()
     * @uses RenewalClaimSettlementVariantAvaliability::setVariantOnPreviousPolicy()
     * @uses RenewalClaimSettlementVariantAvaliability::setVehicleAgeOnPreviousPolicy()
     * @param bool $hasPreviousPolicyClaims
     * @param string $variantOnPreviousPolicy
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint $vehicleAgeOnPreviousPolicy
     */
    public function __construct($hasPreviousPolicyClaims = null, $variantOnPreviousPolicy = null, \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint $vehicleAgeOnPreviousPolicy = null)
    {
        $this
            ->setHasPreviousPolicyClaims($hasPreviousPolicyClaims)
            ->setVariantOnPreviousPolicy($variantOnPreviousPolicy)
            ->setVehicleAgeOnPreviousPolicy($vehicleAgeOnPreviousPolicy);
    }
    /**
     * Get HasPreviousPolicyClaims value
     * @return bool|null
     */
    public function getHasPreviousPolicyClaims()
    {
        return $this->HasPreviousPolicyClaims;
    }
    /**
     * Set HasPreviousPolicyClaims value
     * @param bool $hasPreviousPolicyClaims
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalClaimSettlementVariantAvaliability
     */
    public function setHasPreviousPolicyClaims($hasPreviousPolicyClaims = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasPreviousPolicyClaims) && !is_bool($hasPreviousPolicyClaims)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hasPreviousPolicyClaims)), __LINE__);
        }
        $this->HasPreviousPolicyClaims = $hasPreviousPolicyClaims;
        return $this;
    }
    /**
     * Get VariantOnPreviousPolicy value
     * @return string|null
     */
    public function getVariantOnPreviousPolicy()
    {
        return $this->VariantOnPreviousPolicy;
    }
    /**
     * Set VariantOnPreviousPolicy value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\ClaimSettlementVariant::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\ClaimSettlementVariant::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $variantOnPreviousPolicy
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalClaimSettlementVariantAvaliability
     */
    public function setVariantOnPreviousPolicy($variantOnPreviousPolicy = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\ClaimSettlementVariant::valueIsValid($variantOnPreviousPolicy)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $variantOnPreviousPolicy, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\ClaimSettlementVariant::getValidValues())), __LINE__);
        }
        $this->VariantOnPreviousPolicy = $variantOnPreviousPolicy;
        return $this;
    }
    /**
     * Get VehicleAgeOnPreviousPolicy value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint|null
     */
    public function getVehicleAgeOnPreviousPolicy()
    {
        return isset($this->VehicleAgeOnPreviousPolicy) ? $this->VehicleAgeOnPreviousPolicy : null;
    }
    /**
     * Set VehicleAgeOnPreviousPolicy value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint $vehicleAgeOnPreviousPolicy
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalClaimSettlementVariantAvaliability
     */
    public function setVehicleAgeOnPreviousPolicy(\Mu4ddi3\Compensa\Webservice\StructType\RangeOfint $vehicleAgeOnPreviousPolicy = null)
    {
        if (is_null($vehicleAgeOnPreviousPolicy) || (is_array($vehicleAgeOnPreviousPolicy) && empty($vehicleAgeOnPreviousPolicy))) {
            unset($this->VehicleAgeOnPreviousPolicy);
        } else {
            $this->VehicleAgeOnPreviousPolicy = $vehicleAgeOnPreviousPolicy;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalClaimSettlementVariantAvaliability
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
