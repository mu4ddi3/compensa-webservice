<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InformationForAvaliabilityCheck StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:InformationForAvaliabilityCheck
 * @subpackage Structs
 */
class InformationForAvaliabilityCheck extends AbstractStructBase
{
    /**
     * The BonusMalusAcFactor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $BonusMalusAcFactor;
    /**
     * The BonusMalusOcFactor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $BonusMalusOcFactor;
    /**
     * The BrandId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $BrandId;
    /**
     * The CoOwnerType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CoOwnerType;
    /**
     * The Department
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Department;
    /**
     * The IsBusiness19035Selected
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsBusiness19035Selected;
    /**
     * The IsContinuation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsContinuation;
    /**
     * The IsShortTerm
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsShortTerm;
    /**
     * The IssuerLogin
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $IssuerLogin;
    /**
     * The ModelTypeId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ModelTypeId;
    /**
     * The PostalCodeCoOwner
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PostalCodeCoOwner;
    /**
     * The PostalCodeOwner
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PostalCodeOwner;
    /**
     * The Risks
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring
     */
    public $Risks;
    /**
     * The TerritoryUsageType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TerritoryUsageType;
    /**
     * The UnusualVehicleUsage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $UnusualVehicleUsage;
    /**
     * The VehicleAge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $VehicleAge;
    /**
     * The VehicleCoOwner
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MotorPartner
     */
    public $VehicleCoOwner;
    /**
     * The VehicleGroupId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $VehicleGroupId;
    /**
     * The VehicleOwner
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MotorPartner
     */
    public $VehicleOwner;
    /**
     * The YoungestUserAge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $YoungestUserAge;
    /**
     * The ZoneAc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ZoneAc;
    /**
     * The ZoneOc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ZoneOc;
    /**
     * Constructor method for InformationForAvaliabilityCheck
     * @uses InformationForAvaliabilityCheck::setBonusMalusAcFactor()
     * @uses InformationForAvaliabilityCheck::setBonusMalusOcFactor()
     * @uses InformationForAvaliabilityCheck::setBrandId()
     * @uses InformationForAvaliabilityCheck::setCoOwnerType()
     * @uses InformationForAvaliabilityCheck::setDepartment()
     * @uses InformationForAvaliabilityCheck::setIsBusiness19035Selected()
     * @uses InformationForAvaliabilityCheck::setIsContinuation()
     * @uses InformationForAvaliabilityCheck::setIsShortTerm()
     * @uses InformationForAvaliabilityCheck::setIssuerLogin()
     * @uses InformationForAvaliabilityCheck::setModelTypeId()
     * @uses InformationForAvaliabilityCheck::setPostalCodeCoOwner()
     * @uses InformationForAvaliabilityCheck::setPostalCodeOwner()
     * @uses InformationForAvaliabilityCheck::setRisks()
     * @uses InformationForAvaliabilityCheck::setTerritoryUsageType()
     * @uses InformationForAvaliabilityCheck::setUnusualVehicleUsage()
     * @uses InformationForAvaliabilityCheck::setVehicleAge()
     * @uses InformationForAvaliabilityCheck::setVehicleCoOwner()
     * @uses InformationForAvaliabilityCheck::setVehicleGroupId()
     * @uses InformationForAvaliabilityCheck::setVehicleOwner()
     * @uses InformationForAvaliabilityCheck::setYoungestUserAge()
     * @uses InformationForAvaliabilityCheck::setZoneAc()
     * @uses InformationForAvaliabilityCheck::setZoneOc()
     * @param float $bonusMalusAcFactor
     * @param float $bonusMalusOcFactor
     * @param int $brandId
     * @param string $coOwnerType
     * @param int $department
     * @param bool $isBusiness19035Selected
     * @param bool $isContinuation
     * @param bool $isShortTerm
     * @param string $issuerLogin
     * @param int $modelTypeId
     * @param string $postalCodeCoOwner
     * @param string $postalCodeOwner
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring $risks
     * @param string $territoryUsageType
     * @param string $unusualVehicleUsage
     * @param int $vehicleAge
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MotorPartner $vehicleCoOwner
     * @param int $vehicleGroupId
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MotorPartner $vehicleOwner
     * @param int $youngestUserAge
     * @param int $zoneAc
     * @param int $zoneOc
     */
    public function __construct($bonusMalusAcFactor = null, $bonusMalusOcFactor = null, $brandId = null, $coOwnerType = null, $department = null, $isBusiness19035Selected = null, $isContinuation = null, $isShortTerm = null, $issuerLogin = null, $modelTypeId = null, $postalCodeCoOwner = null, $postalCodeOwner = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring $risks = null, $territoryUsageType = null, $unusualVehicleUsage = null, $vehicleAge = null, \Mu4ddi3\Compensa\Webservice\StructType\MotorPartner $vehicleCoOwner = null, $vehicleGroupId = null, \Mu4ddi3\Compensa\Webservice\StructType\MotorPartner $vehicleOwner = null, $youngestUserAge = null, $zoneAc = null, $zoneOc = null)
    {
        $this
            ->setBonusMalusAcFactor($bonusMalusAcFactor)
            ->setBonusMalusOcFactor($bonusMalusOcFactor)
            ->setBrandId($brandId)
            ->setCoOwnerType($coOwnerType)
            ->setDepartment($department)
            ->setIsBusiness19035Selected($isBusiness19035Selected)
            ->setIsContinuation($isContinuation)
            ->setIsShortTerm($isShortTerm)
            ->setIssuerLogin($issuerLogin)
            ->setModelTypeId($modelTypeId)
            ->setPostalCodeCoOwner($postalCodeCoOwner)
            ->setPostalCodeOwner($postalCodeOwner)
            ->setRisks($risks)
            ->setTerritoryUsageType($territoryUsageType)
            ->setUnusualVehicleUsage($unusualVehicleUsage)
            ->setVehicleAge($vehicleAge)
            ->setVehicleCoOwner($vehicleCoOwner)
            ->setVehicleGroupId($vehicleGroupId)
            ->setVehicleOwner($vehicleOwner)
            ->setYoungestUserAge($youngestUserAge)
            ->setZoneAc($zoneAc)
            ->setZoneOc($zoneOc);
    }
    /**
     * Get BonusMalusAcFactor value
     * @return float|null
     */
    public function getBonusMalusAcFactor()
    {
        return $this->BonusMalusAcFactor;
    }
    /**
     * Set BonusMalusAcFactor value
     * @param float $bonusMalusAcFactor
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InformationForAvaliabilityCheck
     */
    public function setBonusMalusAcFactor($bonusMalusAcFactor = null)
    {
        $this->BonusMalusAcFactor = $bonusMalusAcFactor;
        return $this;
    }
    /**
     * Get BonusMalusOcFactor value
     * @return float|null
     */
    public function getBonusMalusOcFactor()
    {
        return $this->BonusMalusOcFactor;
    }
    /**
     * Set BonusMalusOcFactor value
     * @param float $bonusMalusOcFactor
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InformationForAvaliabilityCheck
     */
    public function setBonusMalusOcFactor($bonusMalusOcFactor = null)
    {
        $this->BonusMalusOcFactor = $bonusMalusOcFactor;
        return $this;
    }
    /**
     * Get BrandId value
     * @return int|null
     */
    public function getBrandId()
    {
        return $this->BrandId;
    }
    /**
     * Set BrandId value
     * @param int $brandId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InformationForAvaliabilityCheck
     */
    public function setBrandId($brandId = null)
    {
        // validation for constraint: int
        if (!is_null($brandId) && !is_numeric($brandId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($brandId)), __LINE__);
        }
        $this->BrandId = $brandId;
        return $this;
    }
    /**
     * Get CoOwnerType value
     * @return string|null
     */
    public function getCoOwnerType()
    {
        return $this->CoOwnerType;
    }
    /**
     * Set CoOwnerType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\CoOwnerType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\CoOwnerType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $coOwnerType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InformationForAvaliabilityCheck
     */
    public function setCoOwnerType($coOwnerType = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\CoOwnerType::valueIsValid($coOwnerType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $coOwnerType, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\CoOwnerType::getValidValues())), __LINE__);
        }
        $this->CoOwnerType = $coOwnerType;
        return $this;
    }
    /**
     * Get Department value
     * @return int|null
     */
    public function getDepartment()
    {
        return $this->Department;
    }
    /**
     * Set Department value
     * @param int $department
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InformationForAvaliabilityCheck
     */
    public function setDepartment($department = null)
    {
        // validation for constraint: int
        if (!is_null($department) && !is_numeric($department)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($department)), __LINE__);
        }
        $this->Department = $department;
        return $this;
    }
    /**
     * Get IsBusiness19035Selected value
     * @return bool|null
     */
    public function getIsBusiness19035Selected()
    {
        return $this->IsBusiness19035Selected;
    }
    /**
     * Set IsBusiness19035Selected value
     * @param bool $isBusiness19035Selected
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InformationForAvaliabilityCheck
     */
    public function setIsBusiness19035Selected($isBusiness19035Selected = null)
    {
        // validation for constraint: boolean
        if (!is_null($isBusiness19035Selected) && !is_bool($isBusiness19035Selected)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isBusiness19035Selected)), __LINE__);
        }
        $this->IsBusiness19035Selected = $isBusiness19035Selected;
        return $this;
    }
    /**
     * Get IsContinuation value
     * @return bool|null
     */
    public function getIsContinuation()
    {
        return $this->IsContinuation;
    }
    /**
     * Set IsContinuation value
     * @param bool $isContinuation
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InformationForAvaliabilityCheck
     */
    public function setIsContinuation($isContinuation = null)
    {
        // validation for constraint: boolean
        if (!is_null($isContinuation) && !is_bool($isContinuation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isContinuation)), __LINE__);
        }
        $this->IsContinuation = $isContinuation;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InformationForAvaliabilityCheck
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
     * Get IssuerLogin value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIssuerLogin()
    {
        return isset($this->IssuerLogin) ? $this->IssuerLogin : null;
    }
    /**
     * Set IssuerLogin value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $issuerLogin
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InformationForAvaliabilityCheck
     */
    public function setIssuerLogin($issuerLogin = null)
    {
        // validation for constraint: string
        if (!is_null($issuerLogin) && !is_string($issuerLogin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($issuerLogin)), __LINE__);
        }
        if (is_null($issuerLogin) || (is_array($issuerLogin) && empty($issuerLogin))) {
            unset($this->IssuerLogin);
        } else {
            $this->IssuerLogin = $issuerLogin;
        }
        return $this;
    }
    /**
     * Get ModelTypeId value
     * @return int|null
     */
    public function getModelTypeId()
    {
        return $this->ModelTypeId;
    }
    /**
     * Set ModelTypeId value
     * @param int $modelTypeId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InformationForAvaliabilityCheck
     */
    public function setModelTypeId($modelTypeId = null)
    {
        // validation for constraint: int
        if (!is_null($modelTypeId) && !is_numeric($modelTypeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($modelTypeId)), __LINE__);
        }
        $this->ModelTypeId = $modelTypeId;
        return $this;
    }
    /**
     * Get PostalCodeCoOwner value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPostalCodeCoOwner()
    {
        return isset($this->PostalCodeCoOwner) ? $this->PostalCodeCoOwner : null;
    }
    /**
     * Set PostalCodeCoOwner value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $postalCodeCoOwner
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InformationForAvaliabilityCheck
     */
    public function setPostalCodeCoOwner($postalCodeCoOwner = null)
    {
        // validation for constraint: string
        if (!is_null($postalCodeCoOwner) && !is_string($postalCodeCoOwner)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postalCodeCoOwner)), __LINE__);
        }
        if (is_null($postalCodeCoOwner) || (is_array($postalCodeCoOwner) && empty($postalCodeCoOwner))) {
            unset($this->PostalCodeCoOwner);
        } else {
            $this->PostalCodeCoOwner = $postalCodeCoOwner;
        }
        return $this;
    }
    /**
     * Get PostalCodeOwner value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPostalCodeOwner()
    {
        return isset($this->PostalCodeOwner) ? $this->PostalCodeOwner : null;
    }
    /**
     * Set PostalCodeOwner value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $postalCodeOwner
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InformationForAvaliabilityCheck
     */
    public function setPostalCodeOwner($postalCodeOwner = null)
    {
        // validation for constraint: string
        if (!is_null($postalCodeOwner) && !is_string($postalCodeOwner)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postalCodeOwner)), __LINE__);
        }
        if (is_null($postalCodeOwner) || (is_array($postalCodeOwner) && empty($postalCodeOwner))) {
            unset($this->PostalCodeOwner);
        } else {
            $this->PostalCodeOwner = $postalCodeOwner;
        }
        return $this;
    }
    /**
     * Get Risks value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring|null
     */
    public function getRisks()
    {
        return isset($this->Risks) ? $this->Risks : null;
    }
    /**
     * Set Risks value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring $risks
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InformationForAvaliabilityCheck
     */
    public function setRisks(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring $risks = null)
    {
        if (is_null($risks) || (is_array($risks) && empty($risks))) {
            unset($this->Risks);
        } else {
            $this->Risks = $risks;
        }
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InformationForAvaliabilityCheck
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
     * Get UnusualVehicleUsage value
     * @return string|null
     */
    public function getUnusualVehicleUsage()
    {
        return $this->UnusualVehicleUsage;
    }
    /**
     * Set UnusualVehicleUsage value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\UnusualVehicleUsage::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\UnusualVehicleUsage::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $unusualVehicleUsage
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InformationForAvaliabilityCheck
     */
    public function setUnusualVehicleUsage($unusualVehicleUsage = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\UnusualVehicleUsage::valueIsValid($unusualVehicleUsage)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $unusualVehicleUsage, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\UnusualVehicleUsage::getValidValues())), __LINE__);
        }
        $this->UnusualVehicleUsage = $unusualVehicleUsage;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InformationForAvaliabilityCheck
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
     * Get VehicleCoOwner value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorPartner|null
     */
    public function getVehicleCoOwner()
    {
        return isset($this->VehicleCoOwner) ? $this->VehicleCoOwner : null;
    }
    /**
     * Set VehicleCoOwner value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MotorPartner $vehicleCoOwner
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InformationForAvaliabilityCheck
     */
    public function setVehicleCoOwner(\Mu4ddi3\Compensa\Webservice\StructType\MotorPartner $vehicleCoOwner = null)
    {
        if (is_null($vehicleCoOwner) || (is_array($vehicleCoOwner) && empty($vehicleCoOwner))) {
            unset($this->VehicleCoOwner);
        } else {
            $this->VehicleCoOwner = $vehicleCoOwner;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InformationForAvaliabilityCheck
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
     * Get VehicleOwner value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorPartner|null
     */
    public function getVehicleOwner()
    {
        return isset($this->VehicleOwner) ? $this->VehicleOwner : null;
    }
    /**
     * Set VehicleOwner value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MotorPartner $vehicleOwner
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InformationForAvaliabilityCheck
     */
    public function setVehicleOwner(\Mu4ddi3\Compensa\Webservice\StructType\MotorPartner $vehicleOwner = null)
    {
        if (is_null($vehicleOwner) || (is_array($vehicleOwner) && empty($vehicleOwner))) {
            unset($this->VehicleOwner);
        } else {
            $this->VehicleOwner = $vehicleOwner;
        }
        return $this;
    }
    /**
     * Get YoungestUserAge value
     * @return int|null
     */
    public function getYoungestUserAge()
    {
        return $this->YoungestUserAge;
    }
    /**
     * Set YoungestUserAge value
     * @param int $youngestUserAge
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InformationForAvaliabilityCheck
     */
    public function setYoungestUserAge($youngestUserAge = null)
    {
        // validation for constraint: int
        if (!is_null($youngestUserAge) && !is_numeric($youngestUserAge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($youngestUserAge)), __LINE__);
        }
        $this->YoungestUserAge = $youngestUserAge;
        return $this;
    }
    /**
     * Get ZoneAc value
     * @return int|null
     */
    public function getZoneAc()
    {
        return $this->ZoneAc;
    }
    /**
     * Set ZoneAc value
     * @param int $zoneAc
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InformationForAvaliabilityCheck
     */
    public function setZoneAc($zoneAc = null)
    {
        // validation for constraint: int
        if (!is_null($zoneAc) && !is_numeric($zoneAc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($zoneAc)), __LINE__);
        }
        $this->ZoneAc = $zoneAc;
        return $this;
    }
    /**
     * Get ZoneOc value
     * @return int|null
     */
    public function getZoneOc()
    {
        return $this->ZoneOc;
    }
    /**
     * Set ZoneOc value
     * @param int $zoneOc
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InformationForAvaliabilityCheck
     */
    public function setZoneOc($zoneOc = null)
    {
        // validation for constraint: int
        if (!is_null($zoneOc) && !is_numeric($zoneOc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($zoneOc)), __LINE__);
        }
        $this->ZoneOc = $zoneOc;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InformationForAvaliabilityCheck
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
