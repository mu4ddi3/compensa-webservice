<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MotorTariffDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MotorTariffDefinition
 * @subpackage Structs
 */
class MotorTariffDefinition extends AbstractStructBase
{
    /**
     * The AppliesFrom
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AppliesFrom;
    /**
     * The BasePremiumTariffDefinition
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\BasePremiumTariffDefinition
     */
    public $BasePremiumTariffDefinition;
    /**
     * The BasicRateTariffDefinition
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\BasicRateTariffDefinition
     */
    public $BasicRateTariffDefinition;
    /**
     * The BonusMalusTariffDefinition
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusTariffDefinition
     */
    public $BonusMalusTariffDefinition;
    /**
     * The CapAndCollarTariffDefinition
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\CapAndCollarTariffDefinition
     */
    public $CapAndCollarTariffDefinition;
    /**
     * The CentralAndUnderwriterDiscountBlockadTariffDefinition
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\CentralAndUnderwriterDiscountBlockadeTariffDefinition
     */
    public $CentralAndUnderwriterDiscountBlockadTariffDefinition;
    /**
     * The ClaimSettlementVariantAvaliabilityTariffDefinition
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantAvaliabilityTariffDefinition
     */
    public $ClaimSettlementVariantAvaliabilityTariffDefinition;
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Code;
    /**
     * The CreateDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CreateDate;
    /**
     * The DaysOfferValidity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $DaysOfferValidity;
    /**
     * The DepartmentContractScope
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DepartmentContractScope;
    /**
     * The DiscountTariffDefinition
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\DiscountTariffDefinition
     */
    public $DiscountTariffDefinition;
    /**
     * The ExpiryDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ExpiryDate;
    /**
     * The LeasingCorrectionTariffDefinition
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\LeasingCorrectionTariffDefinition
     */
    public $LeasingCorrectionTariffDefinition;
    /**
     * The MinimalPremiumTariffDefinition
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumTariffDefinition
     */
    public $MinimalPremiumTariffDefinition;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Name;
    /**
     * The PriceTestGroupsDefinition
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroupsDefinition
     */
    public $PriceTestGroupsDefinition;
    /**
     * The ScalpelFactorsDefinition
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactorsDefinition
     */
    public $ScalpelFactorsDefinition;
    /**
     * The TariffDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $TariffDefinitionId;
    /**
     * The TerritoryUsageDiscountTariffDefinition
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\TerritoryUsageDiscountTariffDefinition
     */
    public $TerritoryUsageDiscountTariffDefinition;
    /**
     * The UserId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $UserId;
    /**
     * The VehiclesCountCorrectionTariffDefinition
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\VehiclesCountCorrectionTariffDefinition
     */
    public $VehiclesCountCorrectionTariffDefinition;
    /**
     * The Version
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Version;
    /**
     * The ZoneTariffDefinition
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ZoneTariffDefinition
     */
    public $ZoneTariffDefinition;
    /**
     * Constructor method for MotorTariffDefinition
     * @uses MotorTariffDefinition::setAppliesFrom()
     * @uses MotorTariffDefinition::setBasePremiumTariffDefinition()
     * @uses MotorTariffDefinition::setBasicRateTariffDefinition()
     * @uses MotorTariffDefinition::setBonusMalusTariffDefinition()
     * @uses MotorTariffDefinition::setCapAndCollarTariffDefinition()
     * @uses MotorTariffDefinition::setCentralAndUnderwriterDiscountBlockadTariffDefinition()
     * @uses MotorTariffDefinition::setClaimSettlementVariantAvaliabilityTariffDefinition()
     * @uses MotorTariffDefinition::setCode()
     * @uses MotorTariffDefinition::setCreateDate()
     * @uses MotorTariffDefinition::setDaysOfferValidity()
     * @uses MotorTariffDefinition::setDepartmentContractScope()
     * @uses MotorTariffDefinition::setDiscountTariffDefinition()
     * @uses MotorTariffDefinition::setExpiryDate()
     * @uses MotorTariffDefinition::setLeasingCorrectionTariffDefinition()
     * @uses MotorTariffDefinition::setMinimalPremiumTariffDefinition()
     * @uses MotorTariffDefinition::setName()
     * @uses MotorTariffDefinition::setPriceTestGroupsDefinition()
     * @uses MotorTariffDefinition::setScalpelFactorsDefinition()
     * @uses MotorTariffDefinition::setTariffDefinitionId()
     * @uses MotorTariffDefinition::setTerritoryUsageDiscountTariffDefinition()
     * @uses MotorTariffDefinition::setUserId()
     * @uses MotorTariffDefinition::setVehiclesCountCorrectionTariffDefinition()
     * @uses MotorTariffDefinition::setVersion()
     * @uses MotorTariffDefinition::setZoneTariffDefinition()
     * @param string $appliesFrom
     * @param \Mu4ddi3\Compensa\Webservice\StructType\BasePremiumTariffDefinition $basePremiumTariffDefinition
     * @param \Mu4ddi3\Compensa\Webservice\StructType\BasicRateTariffDefinition $basicRateTariffDefinition
     * @param \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusTariffDefinition $bonusMalusTariffDefinition
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CapAndCollarTariffDefinition $capAndCollarTariffDefinition
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CentralAndUnderwriterDiscountBlockadeTariffDefinition $centralAndUnderwriterDiscountBlockadTariffDefinition
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantAvaliabilityTariffDefinition $claimSettlementVariantAvaliabilityTariffDefinition
     * @param string $code
     * @param string $createDate
     * @param int $daysOfferValidity
     * @param string $departmentContractScope
     * @param \Mu4ddi3\Compensa\Webservice\StructType\DiscountTariffDefinition $discountTariffDefinition
     * @param string $expiryDate
     * @param \Mu4ddi3\Compensa\Webservice\StructType\LeasingCorrectionTariffDefinition $leasingCorrectionTariffDefinition
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumTariffDefinition $minimalPremiumTariffDefinition
     * @param string $name
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroupsDefinition $priceTestGroupsDefinition
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactorsDefinition $scalpelFactorsDefinition
     * @param int $tariffDefinitionId
     * @param \Mu4ddi3\Compensa\Webservice\StructType\TerritoryUsageDiscountTariffDefinition $territoryUsageDiscountTariffDefinition
     * @param int $userId
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VehiclesCountCorrectionTariffDefinition $vehiclesCountCorrectionTariffDefinition
     * @param int $version
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ZoneTariffDefinition $zoneTariffDefinition
     */
    public function __construct($appliesFrom = null, \Mu4ddi3\Compensa\Webservice\StructType\BasePremiumTariffDefinition $basePremiumTariffDefinition = null, \Mu4ddi3\Compensa\Webservice\StructType\BasicRateTariffDefinition $basicRateTariffDefinition = null, \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusTariffDefinition $bonusMalusTariffDefinition = null, \Mu4ddi3\Compensa\Webservice\StructType\CapAndCollarTariffDefinition $capAndCollarTariffDefinition = null, \Mu4ddi3\Compensa\Webservice\StructType\CentralAndUnderwriterDiscountBlockadeTariffDefinition $centralAndUnderwriterDiscountBlockadTariffDefinition = null, \Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantAvaliabilityTariffDefinition $claimSettlementVariantAvaliabilityTariffDefinition = null, $code = null, $createDate = null, $daysOfferValidity = null, $departmentContractScope = null, \Mu4ddi3\Compensa\Webservice\StructType\DiscountTariffDefinition $discountTariffDefinition = null, $expiryDate = null, \Mu4ddi3\Compensa\Webservice\StructType\LeasingCorrectionTariffDefinition $leasingCorrectionTariffDefinition = null, \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumTariffDefinition $minimalPremiumTariffDefinition = null, $name = null, \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroupsDefinition $priceTestGroupsDefinition = null, \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactorsDefinition $scalpelFactorsDefinition = null, $tariffDefinitionId = null, \Mu4ddi3\Compensa\Webservice\StructType\TerritoryUsageDiscountTariffDefinition $territoryUsageDiscountTariffDefinition = null, $userId = null, \Mu4ddi3\Compensa\Webservice\StructType\VehiclesCountCorrectionTariffDefinition $vehiclesCountCorrectionTariffDefinition = null, $version = null, \Mu4ddi3\Compensa\Webservice\StructType\ZoneTariffDefinition $zoneTariffDefinition = null)
    {
        $this
            ->setAppliesFrom($appliesFrom)
            ->setBasePremiumTariffDefinition($basePremiumTariffDefinition)
            ->setBasicRateTariffDefinition($basicRateTariffDefinition)
            ->setBonusMalusTariffDefinition($bonusMalusTariffDefinition)
            ->setCapAndCollarTariffDefinition($capAndCollarTariffDefinition)
            ->setCentralAndUnderwriterDiscountBlockadTariffDefinition($centralAndUnderwriterDiscountBlockadTariffDefinition)
            ->setClaimSettlementVariantAvaliabilityTariffDefinition($claimSettlementVariantAvaliabilityTariffDefinition)
            ->setCode($code)
            ->setCreateDate($createDate)
            ->setDaysOfferValidity($daysOfferValidity)
            ->setDepartmentContractScope($departmentContractScope)
            ->setDiscountTariffDefinition($discountTariffDefinition)
            ->setExpiryDate($expiryDate)
            ->setLeasingCorrectionTariffDefinition($leasingCorrectionTariffDefinition)
            ->setMinimalPremiumTariffDefinition($minimalPremiumTariffDefinition)
            ->setName($name)
            ->setPriceTestGroupsDefinition($priceTestGroupsDefinition)
            ->setScalpelFactorsDefinition($scalpelFactorsDefinition)
            ->setTariffDefinitionId($tariffDefinitionId)
            ->setTerritoryUsageDiscountTariffDefinition($territoryUsageDiscountTariffDefinition)
            ->setUserId($userId)
            ->setVehiclesCountCorrectionTariffDefinition($vehiclesCountCorrectionTariffDefinition)
            ->setVersion($version)
            ->setZoneTariffDefinition($zoneTariffDefinition);
    }
    /**
     * Get AppliesFrom value
     * @return string|null
     */
    public function getAppliesFrom()
    {
        return $this->AppliesFrom;
    }
    /**
     * Set AppliesFrom value
     * @param string $appliesFrom
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorTariffDefinition
     */
    public function setAppliesFrom($appliesFrom = null)
    {
        // validation for constraint: string
        if (!is_null($appliesFrom) && !is_string($appliesFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($appliesFrom)), __LINE__);
        }
        $this->AppliesFrom = $appliesFrom;
        return $this;
    }
    /**
     * Get BasePremiumTariffDefinition value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePremiumTariffDefinition|null
     */
    public function getBasePremiumTariffDefinition()
    {
        return isset($this->BasePremiumTariffDefinition) ? $this->BasePremiumTariffDefinition : null;
    }
    /**
     * Set BasePremiumTariffDefinition value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\BasePremiumTariffDefinition $basePremiumTariffDefinition
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorTariffDefinition
     */
    public function setBasePremiumTariffDefinition(\Mu4ddi3\Compensa\Webservice\StructType\BasePremiumTariffDefinition $basePremiumTariffDefinition = null)
    {
        if (is_null($basePremiumTariffDefinition) || (is_array($basePremiumTariffDefinition) && empty($basePremiumTariffDefinition))) {
            unset($this->BasePremiumTariffDefinition);
        } else {
            $this->BasePremiumTariffDefinition = $basePremiumTariffDefinition;
        }
        return $this;
    }
    /**
     * Get BasicRateTariffDefinition value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasicRateTariffDefinition|null
     */
    public function getBasicRateTariffDefinition()
    {
        return isset($this->BasicRateTariffDefinition) ? $this->BasicRateTariffDefinition : null;
    }
    /**
     * Set BasicRateTariffDefinition value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\BasicRateTariffDefinition $basicRateTariffDefinition
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorTariffDefinition
     */
    public function setBasicRateTariffDefinition(\Mu4ddi3\Compensa\Webservice\StructType\BasicRateTariffDefinition $basicRateTariffDefinition = null)
    {
        if (is_null($basicRateTariffDefinition) || (is_array($basicRateTariffDefinition) && empty($basicRateTariffDefinition))) {
            unset($this->BasicRateTariffDefinition);
        } else {
            $this->BasicRateTariffDefinition = $basicRateTariffDefinition;
        }
        return $this;
    }
    /**
     * Get BonusMalusTariffDefinition value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusTariffDefinition|null
     */
    public function getBonusMalusTariffDefinition()
    {
        return isset($this->BonusMalusTariffDefinition) ? $this->BonusMalusTariffDefinition : null;
    }
    /**
     * Set BonusMalusTariffDefinition value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusTariffDefinition $bonusMalusTariffDefinition
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorTariffDefinition
     */
    public function setBonusMalusTariffDefinition(\Mu4ddi3\Compensa\Webservice\StructType\BonusMalusTariffDefinition $bonusMalusTariffDefinition = null)
    {
        if (is_null($bonusMalusTariffDefinition) || (is_array($bonusMalusTariffDefinition) && empty($bonusMalusTariffDefinition))) {
            unset($this->BonusMalusTariffDefinition);
        } else {
            $this->BonusMalusTariffDefinition = $bonusMalusTariffDefinition;
        }
        return $this;
    }
    /**
     * Get CapAndCollarTariffDefinition value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CapAndCollarTariffDefinition|null
     */
    public function getCapAndCollarTariffDefinition()
    {
        return isset($this->CapAndCollarTariffDefinition) ? $this->CapAndCollarTariffDefinition : null;
    }
    /**
     * Set CapAndCollarTariffDefinition value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CapAndCollarTariffDefinition $capAndCollarTariffDefinition
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorTariffDefinition
     */
    public function setCapAndCollarTariffDefinition(\Mu4ddi3\Compensa\Webservice\StructType\CapAndCollarTariffDefinition $capAndCollarTariffDefinition = null)
    {
        if (is_null($capAndCollarTariffDefinition) || (is_array($capAndCollarTariffDefinition) && empty($capAndCollarTariffDefinition))) {
            unset($this->CapAndCollarTariffDefinition);
        } else {
            $this->CapAndCollarTariffDefinition = $capAndCollarTariffDefinition;
        }
        return $this;
    }
    /**
     * Get CentralAndUnderwriterDiscountBlockadTariffDefinition value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CentralAndUnderwriterDiscountBlockadeTariffDefinition|null
     */
    public function getCentralAndUnderwriterDiscountBlockadTariffDefinition()
    {
        return isset($this->CentralAndUnderwriterDiscountBlockadTariffDefinition) ? $this->CentralAndUnderwriterDiscountBlockadTariffDefinition : null;
    }
    /**
     * Set CentralAndUnderwriterDiscountBlockadTariffDefinition value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CentralAndUnderwriterDiscountBlockadeTariffDefinition $centralAndUnderwriterDiscountBlockadTariffDefinition
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorTariffDefinition
     */
    public function setCentralAndUnderwriterDiscountBlockadTariffDefinition(\Mu4ddi3\Compensa\Webservice\StructType\CentralAndUnderwriterDiscountBlockadeTariffDefinition $centralAndUnderwriterDiscountBlockadTariffDefinition = null)
    {
        if (is_null($centralAndUnderwriterDiscountBlockadTariffDefinition) || (is_array($centralAndUnderwriterDiscountBlockadTariffDefinition) && empty($centralAndUnderwriterDiscountBlockadTariffDefinition))) {
            unset($this->CentralAndUnderwriterDiscountBlockadTariffDefinition);
        } else {
            $this->CentralAndUnderwriterDiscountBlockadTariffDefinition = $centralAndUnderwriterDiscountBlockadTariffDefinition;
        }
        return $this;
    }
    /**
     * Get ClaimSettlementVariantAvaliabilityTariffDefinition value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantAvaliabilityTariffDefinition|null
     */
    public function getClaimSettlementVariantAvaliabilityTariffDefinition()
    {
        return isset($this->ClaimSettlementVariantAvaliabilityTariffDefinition) ? $this->ClaimSettlementVariantAvaliabilityTariffDefinition : null;
    }
    /**
     * Set ClaimSettlementVariantAvaliabilityTariffDefinition value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantAvaliabilityTariffDefinition $claimSettlementVariantAvaliabilityTariffDefinition
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorTariffDefinition
     */
    public function setClaimSettlementVariantAvaliabilityTariffDefinition(\Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantAvaliabilityTariffDefinition $claimSettlementVariantAvaliabilityTariffDefinition = null)
    {
        if (is_null($claimSettlementVariantAvaliabilityTariffDefinition) || (is_array($claimSettlementVariantAvaliabilityTariffDefinition) && empty($claimSettlementVariantAvaliabilityTariffDefinition))) {
            unset($this->ClaimSettlementVariantAvaliabilityTariffDefinition);
        } else {
            $this->ClaimSettlementVariantAvaliabilityTariffDefinition = $claimSettlementVariantAvaliabilityTariffDefinition;
        }
        return $this;
    }
    /**
     * Get Code value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCode()
    {
        return isset($this->Code) ? $this->Code : null;
    }
    /**
     * Set Code value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $code
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorTariffDefinition
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        if (is_null($code) || (is_array($code) && empty($code))) {
            unset($this->Code);
        } else {
            $this->Code = $code;
        }
        return $this;
    }
    /**
     * Get CreateDate value
     * @return string|null
     */
    public function getCreateDate()
    {
        return $this->CreateDate;
    }
    /**
     * Set CreateDate value
     * @param string $createDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorTariffDefinition
     */
    public function setCreateDate($createDate = null)
    {
        // validation for constraint: string
        if (!is_null($createDate) && !is_string($createDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($createDate)), __LINE__);
        }
        $this->CreateDate = $createDate;
        return $this;
    }
    /**
     * Get DaysOfferValidity value
     * @return int|null
     */
    public function getDaysOfferValidity()
    {
        return $this->DaysOfferValidity;
    }
    /**
     * Set DaysOfferValidity value
     * @param int $daysOfferValidity
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorTariffDefinition
     */
    public function setDaysOfferValidity($daysOfferValidity = null)
    {
        // validation for constraint: int
        if (!is_null($daysOfferValidity) && !is_numeric($daysOfferValidity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($daysOfferValidity)), __LINE__);
        }
        $this->DaysOfferValidity = $daysOfferValidity;
        return $this;
    }
    /**
     * Get DepartmentContractScope value
     * @return string|null
     */
    public function getDepartmentContractScope()
    {
        return $this->DepartmentContractScope;
    }
    /**
     * Set DepartmentContractScope value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\DepartmentContractScope::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\DepartmentContractScope::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $departmentContractScope
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorTariffDefinition
     */
    public function setDepartmentContractScope($departmentContractScope = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\DepartmentContractScope::valueIsValid($departmentContractScope)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $departmentContractScope, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\DepartmentContractScope::getValidValues())), __LINE__);
        }
        $this->DepartmentContractScope = $departmentContractScope;
        return $this;
    }
    /**
     * Get DiscountTariffDefinition value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DiscountTariffDefinition|null
     */
    public function getDiscountTariffDefinition()
    {
        return isset($this->DiscountTariffDefinition) ? $this->DiscountTariffDefinition : null;
    }
    /**
     * Set DiscountTariffDefinition value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\DiscountTariffDefinition $discountTariffDefinition
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorTariffDefinition
     */
    public function setDiscountTariffDefinition(\Mu4ddi3\Compensa\Webservice\StructType\DiscountTariffDefinition $discountTariffDefinition = null)
    {
        if (is_null($discountTariffDefinition) || (is_array($discountTariffDefinition) && empty($discountTariffDefinition))) {
            unset($this->DiscountTariffDefinition);
        } else {
            $this->DiscountTariffDefinition = $discountTariffDefinition;
        }
        return $this;
    }
    /**
     * Get ExpiryDate value
     * @return string|null
     */
    public function getExpiryDate()
    {
        return $this->ExpiryDate;
    }
    /**
     * Set ExpiryDate value
     * @param string $expiryDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorTariffDefinition
     */
    public function setExpiryDate($expiryDate = null)
    {
        // validation for constraint: string
        if (!is_null($expiryDate) && !is_string($expiryDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expiryDate)), __LINE__);
        }
        $this->ExpiryDate = $expiryDate;
        return $this;
    }
    /**
     * Get LeasingCorrectionTariffDefinition value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\LeasingCorrectionTariffDefinition|null
     */
    public function getLeasingCorrectionTariffDefinition()
    {
        return isset($this->LeasingCorrectionTariffDefinition) ? $this->LeasingCorrectionTariffDefinition : null;
    }
    /**
     * Set LeasingCorrectionTariffDefinition value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\LeasingCorrectionTariffDefinition $leasingCorrectionTariffDefinition
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorTariffDefinition
     */
    public function setLeasingCorrectionTariffDefinition(\Mu4ddi3\Compensa\Webservice\StructType\LeasingCorrectionTariffDefinition $leasingCorrectionTariffDefinition = null)
    {
        if (is_null($leasingCorrectionTariffDefinition) || (is_array($leasingCorrectionTariffDefinition) && empty($leasingCorrectionTariffDefinition))) {
            unset($this->LeasingCorrectionTariffDefinition);
        } else {
            $this->LeasingCorrectionTariffDefinition = $leasingCorrectionTariffDefinition;
        }
        return $this;
    }
    /**
     * Get MinimalPremiumTariffDefinition value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumTariffDefinition|null
     */
    public function getMinimalPremiumTariffDefinition()
    {
        return isset($this->MinimalPremiumTariffDefinition) ? $this->MinimalPremiumTariffDefinition : null;
    }
    /**
     * Set MinimalPremiumTariffDefinition value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumTariffDefinition $minimalPremiumTariffDefinition
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorTariffDefinition
     */
    public function setMinimalPremiumTariffDefinition(\Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumTariffDefinition $minimalPremiumTariffDefinition = null)
    {
        if (is_null($minimalPremiumTariffDefinition) || (is_array($minimalPremiumTariffDefinition) && empty($minimalPremiumTariffDefinition))) {
            unset($this->MinimalPremiumTariffDefinition);
        } else {
            $this->MinimalPremiumTariffDefinition = $minimalPremiumTariffDefinition;
        }
        return $this;
    }
    /**
     * Get Name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getName()
    {
        return isset($this->Name) ? $this->Name : null;
    }
    /**
     * Set Name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorTariffDefinition
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->Name);
        } else {
            $this->Name = $name;
        }
        return $this;
    }
    /**
     * Get PriceTestGroupsDefinition value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroupsDefinition|null
     */
    public function getPriceTestGroupsDefinition()
    {
        return isset($this->PriceTestGroupsDefinition) ? $this->PriceTestGroupsDefinition : null;
    }
    /**
     * Set PriceTestGroupsDefinition value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroupsDefinition $priceTestGroupsDefinition
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorTariffDefinition
     */
    public function setPriceTestGroupsDefinition(\Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroupsDefinition $priceTestGroupsDefinition = null)
    {
        if (is_null($priceTestGroupsDefinition) || (is_array($priceTestGroupsDefinition) && empty($priceTestGroupsDefinition))) {
            unset($this->PriceTestGroupsDefinition);
        } else {
            $this->PriceTestGroupsDefinition = $priceTestGroupsDefinition;
        }
        return $this;
    }
    /**
     * Get ScalpelFactorsDefinition value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactorsDefinition|null
     */
    public function getScalpelFactorsDefinition()
    {
        return isset($this->ScalpelFactorsDefinition) ? $this->ScalpelFactorsDefinition : null;
    }
    /**
     * Set ScalpelFactorsDefinition value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactorsDefinition $scalpelFactorsDefinition
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorTariffDefinition
     */
    public function setScalpelFactorsDefinition(\Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactorsDefinition $scalpelFactorsDefinition = null)
    {
        if (is_null($scalpelFactorsDefinition) || (is_array($scalpelFactorsDefinition) && empty($scalpelFactorsDefinition))) {
            unset($this->ScalpelFactorsDefinition);
        } else {
            $this->ScalpelFactorsDefinition = $scalpelFactorsDefinition;
        }
        return $this;
    }
    /**
     * Get TariffDefinitionId value
     * @return int|null
     */
    public function getTariffDefinitionId()
    {
        return $this->TariffDefinitionId;
    }
    /**
     * Set TariffDefinitionId value
     * @param int $tariffDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorTariffDefinition
     */
    public function setTariffDefinitionId($tariffDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($tariffDefinitionId) && !is_numeric($tariffDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($tariffDefinitionId)), __LINE__);
        }
        $this->TariffDefinitionId = $tariffDefinitionId;
        return $this;
    }
    /**
     * Get TerritoryUsageDiscountTariffDefinition value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\TerritoryUsageDiscountTariffDefinition|null
     */
    public function getTerritoryUsageDiscountTariffDefinition()
    {
        return isset($this->TerritoryUsageDiscountTariffDefinition) ? $this->TerritoryUsageDiscountTariffDefinition : null;
    }
    /**
     * Set TerritoryUsageDiscountTariffDefinition value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\TerritoryUsageDiscountTariffDefinition $territoryUsageDiscountTariffDefinition
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorTariffDefinition
     */
    public function setTerritoryUsageDiscountTariffDefinition(\Mu4ddi3\Compensa\Webservice\StructType\TerritoryUsageDiscountTariffDefinition $territoryUsageDiscountTariffDefinition = null)
    {
        if (is_null($territoryUsageDiscountTariffDefinition) || (is_array($territoryUsageDiscountTariffDefinition) && empty($territoryUsageDiscountTariffDefinition))) {
            unset($this->TerritoryUsageDiscountTariffDefinition);
        } else {
            $this->TerritoryUsageDiscountTariffDefinition = $territoryUsageDiscountTariffDefinition;
        }
        return $this;
    }
    /**
     * Get UserId value
     * @return int|null
     */
    public function getUserId()
    {
        return $this->UserId;
    }
    /**
     * Set UserId value
     * @param int $userId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorTariffDefinition
     */
    public function setUserId($userId = null)
    {
        // validation for constraint: int
        if (!is_null($userId) && !is_numeric($userId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($userId)), __LINE__);
        }
        $this->UserId = $userId;
        return $this;
    }
    /**
     * Get VehiclesCountCorrectionTariffDefinition value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehiclesCountCorrectionTariffDefinition|null
     */
    public function getVehiclesCountCorrectionTariffDefinition()
    {
        return isset($this->VehiclesCountCorrectionTariffDefinition) ? $this->VehiclesCountCorrectionTariffDefinition : null;
    }
    /**
     * Set VehiclesCountCorrectionTariffDefinition value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VehiclesCountCorrectionTariffDefinition $vehiclesCountCorrectionTariffDefinition
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorTariffDefinition
     */
    public function setVehiclesCountCorrectionTariffDefinition(\Mu4ddi3\Compensa\Webservice\StructType\VehiclesCountCorrectionTariffDefinition $vehiclesCountCorrectionTariffDefinition = null)
    {
        if (is_null($vehiclesCountCorrectionTariffDefinition) || (is_array($vehiclesCountCorrectionTariffDefinition) && empty($vehiclesCountCorrectionTariffDefinition))) {
            unset($this->VehiclesCountCorrectionTariffDefinition);
        } else {
            $this->VehiclesCountCorrectionTariffDefinition = $vehiclesCountCorrectionTariffDefinition;
        }
        return $this;
    }
    /**
     * Get Version value
     * @return int|null
     */
    public function getVersion()
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param int $version
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorTariffDefinition
     */
    public function setVersion($version = null)
    {
        // validation for constraint: int
        if (!is_null($version) && !is_numeric($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($version)), __LINE__);
        }
        $this->Version = $version;
        return $this;
    }
    /**
     * Get ZoneTariffDefinition value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ZoneTariffDefinition|null
     */
    public function getZoneTariffDefinition()
    {
        return isset($this->ZoneTariffDefinition) ? $this->ZoneTariffDefinition : null;
    }
    /**
     * Set ZoneTariffDefinition value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ZoneTariffDefinition $zoneTariffDefinition
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorTariffDefinition
     */
    public function setZoneTariffDefinition(\Mu4ddi3\Compensa\Webservice\StructType\ZoneTariffDefinition $zoneTariffDefinition = null)
    {
        if (is_null($zoneTariffDefinition) || (is_array($zoneTariffDefinition) && empty($zoneTariffDefinition))) {
            unset($this->ZoneTariffDefinition);
        } else {
            $this->ZoneTariffDefinition = $zoneTariffDefinition;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorTariffDefinition
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
