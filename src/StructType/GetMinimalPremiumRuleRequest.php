<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMinimalPremiumRuleRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetMinimalPremiumRuleRequest
 * @subpackage Structs
 */
class GetMinimalPremiumRuleRequest extends AbstractStructBase
{
    /**
     * The Capacity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Capacity;
    /**
     * The ClaimSettlementVariant
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ClaimSettlementVariant;
    /**
     * The ContinuationSource
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ContinuationSource;
    /**
     * The CrossSellWith21021
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CrossSellWith21021;
    /**
     * The EnginePower
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $EnginePower;
    /**
     * The InsuranceSum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $InsuranceSum;
    /**
     * The IsAcSelected
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAcSelected;
    /**
     * The IsEmployeeDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsEmployeeDiscount;
    /**
     * The IsShortTerm
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsShortTerm;
    /**
     * The LeasingTariffVariant
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LeasingTariffVariant;
    /**
     * The PolgenId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PolgenId;
    /**
     * The PostalCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PostalCode;
    /**
     * The PropertyPremium
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PropertyPremium;
    /**
     * The RiskCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RiskCode;
    /**
     * The TariffMode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TariffMode;
    /**
     * The TariffVariant
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TariffVariant;
    /**
     * The TerritoryUsageType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TerritoryUsageType;
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
     * The Zone
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Zone;
    /**
     * Constructor method for GetMinimalPremiumRuleRequest
     * @uses GetMinimalPremiumRuleRequest::setCapacity()
     * @uses GetMinimalPremiumRuleRequest::setClaimSettlementVariant()
     * @uses GetMinimalPremiumRuleRequest::setContinuationSource()
     * @uses GetMinimalPremiumRuleRequest::setCrossSellWith21021()
     * @uses GetMinimalPremiumRuleRequest::setEnginePower()
     * @uses GetMinimalPremiumRuleRequest::setInsuranceSum()
     * @uses GetMinimalPremiumRuleRequest::setIsAcSelected()
     * @uses GetMinimalPremiumRuleRequest::setIsEmployeeDiscount()
     * @uses GetMinimalPremiumRuleRequest::setIsShortTerm()
     * @uses GetMinimalPremiumRuleRequest::setLeasingTariffVariant()
     * @uses GetMinimalPremiumRuleRequest::setPolgenId()
     * @uses GetMinimalPremiumRuleRequest::setPostalCode()
     * @uses GetMinimalPremiumRuleRequest::setPropertyPremium()
     * @uses GetMinimalPremiumRuleRequest::setRiskCode()
     * @uses GetMinimalPremiumRuleRequest::setTariffMode()
     * @uses GetMinimalPremiumRuleRequest::setTariffVariant()
     * @uses GetMinimalPremiumRuleRequest::setTerritoryUsageType()
     * @uses GetMinimalPremiumRuleRequest::setVehicleAge()
     * @uses GetMinimalPremiumRuleRequest::setVehicleGroupId()
     * @uses GetMinimalPremiumRuleRequest::setZone()
     * @param int $capacity
     * @param string $claimSettlementVariant
     * @param string $continuationSource
     * @param string $crossSellWith21021
     * @param int $enginePower
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSum
     * @param bool $isAcSelected
     * @param bool $isEmployeeDiscount
     * @param bool $isShortTerm
     * @param string $leasingTariffVariant
     * @param int $polgenId
     * @param string $postalCode
     * @param int $propertyPremium
     * @param string $riskCode
     * @param string $tariffMode
     * @param string $tariffVariant
     * @param string $territoryUsageType
     * @param int $vehicleAge
     * @param int $vehicleGroupId
     * @param int $zone
     */
    public function __construct($capacity = null, $claimSettlementVariant = null, $continuationSource = null, $crossSellWith21021 = null, $enginePower = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSum = null, $isAcSelected = null, $isEmployeeDiscount = null, $isShortTerm = null, $leasingTariffVariant = null, $polgenId = null, $postalCode = null, $propertyPremium = null, $riskCode = null, $tariffMode = null, $tariffVariant = null, $territoryUsageType = null, $vehicleAge = null, $vehicleGroupId = null, $zone = null)
    {
        $this
            ->setCapacity($capacity)
            ->setClaimSettlementVariant($claimSettlementVariant)
            ->setContinuationSource($continuationSource)
            ->setCrossSellWith21021($crossSellWith21021)
            ->setEnginePower($enginePower)
            ->setInsuranceSum($insuranceSum)
            ->setIsAcSelected($isAcSelected)
            ->setIsEmployeeDiscount($isEmployeeDiscount)
            ->setIsShortTerm($isShortTerm)
            ->setLeasingTariffVariant($leasingTariffVariant)
            ->setPolgenId($polgenId)
            ->setPostalCode($postalCode)
            ->setPropertyPremium($propertyPremium)
            ->setRiskCode($riskCode)
            ->setTariffMode($tariffMode)
            ->setTariffVariant($tariffVariant)
            ->setTerritoryUsageType($territoryUsageType)
            ->setVehicleAge($vehicleAge)
            ->setVehicleGroupId($vehicleGroupId)
            ->setZone($zone);
    }
    /**
     * Get Capacity value
     * @return int|null
     */
    public function getCapacity()
    {
        return $this->Capacity;
    }
    /**
     * Set Capacity value
     * @param int $capacity
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetMinimalPremiumRuleRequest
     */
    public function setCapacity($capacity = null)
    {
        // validation for constraint: int
        if (!is_null($capacity) && !is_numeric($capacity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($capacity)), __LINE__);
        }
        $this->Capacity = $capacity;
        return $this;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetMinimalPremiumRuleRequest
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
     * Get ContinuationSource value
     * @return string|null
     */
    public function getContinuationSource()
    {
        return $this->ContinuationSource;
    }
    /**
     * Set ContinuationSource value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\ContinuationSource::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\ContinuationSource::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $continuationSource
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetMinimalPremiumRuleRequest
     */
    public function setContinuationSource($continuationSource = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\ContinuationSource::valueIsValid($continuationSource)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $continuationSource, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\ContinuationSource::getValidValues())), __LINE__);
        }
        $this->ContinuationSource = $continuationSource;
        return $this;
    }
    /**
     * Get CrossSellWith21021 value
     * @return string|null
     */
    public function getCrossSellWith21021()
    {
        return $this->CrossSellWith21021;
    }
    /**
     * Set CrossSellWith21021 value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\CrossSellWith21021::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\CrossSellWith21021::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $crossSellWith21021
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetMinimalPremiumRuleRequest
     */
    public function setCrossSellWith21021($crossSellWith21021 = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\CrossSellWith21021::valueIsValid($crossSellWith21021)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $crossSellWith21021, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\CrossSellWith21021::getValidValues())), __LINE__);
        }
        $this->CrossSellWith21021 = $crossSellWith21021;
        return $this;
    }
    /**
     * Get EnginePower value
     * @return int|null
     */
    public function getEnginePower()
    {
        return $this->EnginePower;
    }
    /**
     * Set EnginePower value
     * @param int $enginePower
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetMinimalPremiumRuleRequest
     */
    public function setEnginePower($enginePower = null)
    {
        // validation for constraint: int
        if (!is_null($enginePower) && !is_numeric($enginePower)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($enginePower)), __LINE__);
        }
        $this->EnginePower = $enginePower;
        return $this;
    }
    /**
     * Get InsuranceSum value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getInsuranceSum()
    {
        return isset($this->InsuranceSum) ? $this->InsuranceSum : null;
    }
    /**
     * Set InsuranceSum value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSum
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetMinimalPremiumRuleRequest
     */
    public function setInsuranceSum(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSum = null)
    {
        if (is_null($insuranceSum) || (is_array($insuranceSum) && empty($insuranceSum))) {
            unset($this->InsuranceSum);
        } else {
            $this->InsuranceSum = $insuranceSum;
        }
        return $this;
    }
    /**
     * Get IsAcSelected value
     * @return bool|null
     */
    public function getIsAcSelected()
    {
        return $this->IsAcSelected;
    }
    /**
     * Set IsAcSelected value
     * @param bool $isAcSelected
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetMinimalPremiumRuleRequest
     */
    public function setIsAcSelected($isAcSelected = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAcSelected) && !is_bool($isAcSelected)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAcSelected)), __LINE__);
        }
        $this->IsAcSelected = $isAcSelected;
        return $this;
    }
    /**
     * Get IsEmployeeDiscount value
     * @return bool|null
     */
    public function getIsEmployeeDiscount()
    {
        return $this->IsEmployeeDiscount;
    }
    /**
     * Set IsEmployeeDiscount value
     * @param bool $isEmployeeDiscount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetMinimalPremiumRuleRequest
     */
    public function setIsEmployeeDiscount($isEmployeeDiscount = null)
    {
        // validation for constraint: boolean
        if (!is_null($isEmployeeDiscount) && !is_bool($isEmployeeDiscount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isEmployeeDiscount)), __LINE__);
        }
        $this->IsEmployeeDiscount = $isEmployeeDiscount;
        return $this;
    }
    /**
     * Get IsShortTerm value
     * @return bool|null
     */
    public function getIsShortTerm()
    {
        return $this->IsShortTerm;
    }
    /**
     * Set IsShortTerm value
     * @param bool $isShortTerm
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetMinimalPremiumRuleRequest
     */
    public function setIsShortTerm($isShortTerm = null)
    {
        // validation for constraint: boolean
        if (!is_null($isShortTerm) && !is_bool($isShortTerm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isShortTerm)), __LINE__);
        }
        $this->IsShortTerm = $isShortTerm;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetMinimalPremiumRuleRequest
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
     * Get PolgenId value
     * @return int|null
     */
    public function getPolgenId()
    {
        return $this->PolgenId;
    }
    /**
     * Set PolgenId value
     * @param int $polgenId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetMinimalPremiumRuleRequest
     */
    public function setPolgenId($polgenId = null)
    {
        // validation for constraint: int
        if (!is_null($polgenId) && !is_numeric($polgenId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($polgenId)), __LINE__);
        }
        $this->PolgenId = $polgenId;
        return $this;
    }
    /**
     * Get PostalCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPostalCode()
    {
        return isset($this->PostalCode) ? $this->PostalCode : null;
    }
    /**
     * Set PostalCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $postalCode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetMinimalPremiumRuleRequest
     */
    public function setPostalCode($postalCode = null)
    {
        // validation for constraint: string
        if (!is_null($postalCode) && !is_string($postalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postalCode)), __LINE__);
        }
        if (is_null($postalCode) || (is_array($postalCode) && empty($postalCode))) {
            unset($this->PostalCode);
        } else {
            $this->PostalCode = $postalCode;
        }
        return $this;
    }
    /**
     * Get PropertyPremium value
     * @return int|null
     */
    public function getPropertyPremium()
    {
        return $this->PropertyPremium;
    }
    /**
     * Set PropertyPremium value
     * @param int $propertyPremium
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetMinimalPremiumRuleRequest
     */
    public function setPropertyPremium($propertyPremium = null)
    {
        // validation for constraint: int
        if (!is_null($propertyPremium) && !is_numeric($propertyPremium)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($propertyPremium)), __LINE__);
        }
        $this->PropertyPremium = $propertyPremium;
        return $this;
    }
    /**
     * Get RiskCode value
     * @return string|null
     */
    public function getRiskCode()
    {
        return $this->RiskCode;
    }
    /**
     * Set RiskCode value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\RiskCode::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\RiskCode::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $riskCode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetMinimalPremiumRuleRequest
     */
    public function setRiskCode($riskCode = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\RiskCode::valueIsValid($riskCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $riskCode, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\RiskCode::getValidValues())), __LINE__);
        }
        $this->RiskCode = $riskCode;
        return $this;
    }
    /**
     * Get TariffMode value
     * @return string|null
     */
    public function getTariffMode()
    {
        return $this->TariffMode;
    }
    /**
     * Set TariffMode value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\TariffMode::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\TariffMode::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $tariffMode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetMinimalPremiumRuleRequest
     */
    public function setTariffMode($tariffMode = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\TariffMode::valueIsValid($tariffMode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $tariffMode, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\TariffMode::getValidValues())), __LINE__);
        }
        $this->TariffMode = $tariffMode;
        return $this;
    }
    /**
     * Get TariffVariant value
     * @return string|null
     */
    public function getTariffVariant()
    {
        return $this->TariffVariant;
    }
    /**
     * Set TariffVariant value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\TariffVariants::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\TariffVariants::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $tariffVariant
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetMinimalPremiumRuleRequest
     */
    public function setTariffVariant($tariffVariant = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\TariffVariants::valueIsValid($tariffVariant)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $tariffVariant, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\TariffVariants::getValidValues())), __LINE__);
        }
        $this->TariffVariant = $tariffVariant;
        return $this;
    }
    /**
     * Get TerritoryUsageType value
     * @return string|null
     */
    public function getTerritoryUsageType()
    {
        return $this->TerritoryUsageType;
    }
    /**
     * Set TerritoryUsageType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\TerritoryUsageType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\TerritoryUsageType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $territoryUsageType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetMinimalPremiumRuleRequest
     */
    public function setTerritoryUsageType($territoryUsageType = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\TerritoryUsageType::valueIsValid($territoryUsageType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $territoryUsageType, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\TerritoryUsageType::getValidValues())), __LINE__);
        }
        $this->TerritoryUsageType = $territoryUsageType;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetMinimalPremiumRuleRequest
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetMinimalPremiumRuleRequest
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetMinimalPremiumRuleRequest
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetMinimalPremiumRuleRequest
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
