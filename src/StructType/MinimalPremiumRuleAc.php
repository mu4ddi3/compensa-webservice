<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MinimalPremiumRuleAc StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MinimalPremiumRuleAc
 * @subpackage Structs
 */
class MinimalPremiumRuleAc extends MinimalPremiumRule
{
    /**
     * The ClaimSettlementVariant
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ClaimSettlementVariant;
    /**
     * The InsuranceSumFactor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $InsuranceSumFactor;
    /**
     * The InsuranceSumLeftBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $InsuranceSumLeftBound;
    /**
     * The InsuranceSumRightBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $InsuranceSumRightBound;
    /**
     * The LeasingTariffVariant
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LeasingTariffVariant;
    /**
     * The VehicleAge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint
     */
    public $VehicleAge;
    /**
     * Constructor method for MinimalPremiumRuleAc
     * @uses MinimalPremiumRuleAc::setClaimSettlementVariant()
     * @uses MinimalPremiumRuleAc::setInsuranceSumFactor()
     * @uses MinimalPremiumRuleAc::setInsuranceSumLeftBound()
     * @uses MinimalPremiumRuleAc::setInsuranceSumRightBound()
     * @uses MinimalPremiumRuleAc::setLeasingTariffVariant()
     * @uses MinimalPremiumRuleAc::setVehicleAge()
     * @param string $claimSettlementVariant
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $insuranceSumFactor
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSumLeftBound
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSumRightBound
     * @param string $leasingTariffVariant
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint $vehicleAge
     */
    public function __construct($claimSettlementVariant = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $insuranceSumFactor = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSumLeftBound = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSumRightBound = null, $leasingTariffVariant = null, \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint $vehicleAge = null)
    {
        $this
            ->setClaimSettlementVariant($claimSettlementVariant)
            ->setInsuranceSumFactor($insuranceSumFactor)
            ->setInsuranceSumLeftBound($insuranceSumLeftBound)
            ->setInsuranceSumRightBound($insuranceSumRightBound)
            ->setLeasingTariffVariant($leasingTariffVariant)
            ->setVehicleAge($vehicleAge);
    }
    /**
     * Get ClaimSettlementVariant value
     * @return string|null
     */
    public function getClaimSettlementVariant()
    {
        return $this->ClaimSettlementVariant;
    }
    /**
     * Set ClaimSettlementVariant value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\ClaimSettlementVariant::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\ClaimSettlementVariant::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $claimSettlementVariant
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRuleAc
     */
    public function setClaimSettlementVariant($claimSettlementVariant = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\ClaimSettlementVariant::valueIsValid($claimSettlementVariant)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $claimSettlementVariant, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\ClaimSettlementVariant::getValidValues())), __LINE__);
        }
        $this->ClaimSettlementVariant = $claimSettlementVariant;
        return $this;
    }
    /**
     * Get InsuranceSumFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getInsuranceSumFactor()
    {
        return isset($this->InsuranceSumFactor) ? $this->InsuranceSumFactor : null;
    }
    /**
     * Set InsuranceSumFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $insuranceSumFactor
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRuleAc
     */
    public function setInsuranceSumFactor(\Mu4ddi3\Compensa\Webservice\StructType\Factor $insuranceSumFactor = null)
    {
        if (is_null($insuranceSumFactor) || (is_array($insuranceSumFactor) && empty($insuranceSumFactor))) {
            unset($this->InsuranceSumFactor);
        } else {
            $this->InsuranceSumFactor = $insuranceSumFactor;
        }
        return $this;
    }
    /**
     * Get InsuranceSumLeftBound value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getInsuranceSumLeftBound()
    {
        return isset($this->InsuranceSumLeftBound) ? $this->InsuranceSumLeftBound : null;
    }
    /**
     * Set InsuranceSumLeftBound value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSumLeftBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRuleAc
     */
    public function setInsuranceSumLeftBound(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSumLeftBound = null)
    {
        if (is_null($insuranceSumLeftBound) || (is_array($insuranceSumLeftBound) && empty($insuranceSumLeftBound))) {
            unset($this->InsuranceSumLeftBound);
        } else {
            $this->InsuranceSumLeftBound = $insuranceSumLeftBound;
        }
        return $this;
    }
    /**
     * Get InsuranceSumRightBound value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getInsuranceSumRightBound()
    {
        return isset($this->InsuranceSumRightBound) ? $this->InsuranceSumRightBound : null;
    }
    /**
     * Set InsuranceSumRightBound value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSumRightBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRuleAc
     */
    public function setInsuranceSumRightBound(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSumRightBound = null)
    {
        if (is_null($insuranceSumRightBound) || (is_array($insuranceSumRightBound) && empty($insuranceSumRightBound))) {
            unset($this->InsuranceSumRightBound);
        } else {
            $this->InsuranceSumRightBound = $insuranceSumRightBound;
        }
        return $this;
    }
    /**
     * Get LeasingTariffVariant value
     * @return string|null
     */
    public function getLeasingTariffVariant()
    {
        return $this->LeasingTariffVariant;
    }
    /**
     * Set LeasingTariffVariant value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\LeasingTariffVariant::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\LeasingTariffVariant::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $leasingTariffVariant
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRuleAc
     */
    public function setLeasingTariffVariant($leasingTariffVariant = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\LeasingTariffVariant::valueIsValid($leasingTariffVariant)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $leasingTariffVariant, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\LeasingTariffVariant::getValidValues())), __LINE__);
        }
        $this->LeasingTariffVariant = $leasingTariffVariant;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRuleAc
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRuleAc
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
