<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TariffVersion StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:TariffVersion
 * @subpackage Structs
 */
class TariffVersion extends AbstractStructBase
{
    /**
     * The BlackRiskTariffDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $BlackRiskTariffDefinitionId;
    /**
     * The BonusMalusTariffDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $BonusMalusTariffDefinitionId;
    /**
     * The MinimalPremiumTariffDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MinimalPremiumTariffDefinitionId;
    /**
     * The PackageTariffDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PackageTariffDefinitionId;
    /**
     * The RenewalBonusMalusTariffDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $RenewalBonusMalusTariffDefinitionId;
    /**
     * The ShortTermTariffDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ShortTermTariffDefinitionId;
    /**
     * The StandardTariffDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $StandardTariffDefinitionId;
    /**
     * Constructor method for TariffVersion
     * @uses TariffVersion::setBlackRiskTariffDefinitionId()
     * @uses TariffVersion::setBonusMalusTariffDefinitionId()
     * @uses TariffVersion::setMinimalPremiumTariffDefinitionId()
     * @uses TariffVersion::setPackageTariffDefinitionId()
     * @uses TariffVersion::setRenewalBonusMalusTariffDefinitionId()
     * @uses TariffVersion::setShortTermTariffDefinitionId()
     * @uses TariffVersion::setStandardTariffDefinitionId()
     * @param int $blackRiskTariffDefinitionId
     * @param int $bonusMalusTariffDefinitionId
     * @param int $minimalPremiumTariffDefinitionId
     * @param int $packageTariffDefinitionId
     * @param int $renewalBonusMalusTariffDefinitionId
     * @param int $shortTermTariffDefinitionId
     * @param int $standardTariffDefinitionId
     */
    public function __construct($blackRiskTariffDefinitionId = null, $bonusMalusTariffDefinitionId = null, $minimalPremiumTariffDefinitionId = null, $packageTariffDefinitionId = null, $renewalBonusMalusTariffDefinitionId = null, $shortTermTariffDefinitionId = null, $standardTariffDefinitionId = null)
    {
        $this
            ->setBlackRiskTariffDefinitionId($blackRiskTariffDefinitionId)
            ->setBonusMalusTariffDefinitionId($bonusMalusTariffDefinitionId)
            ->setMinimalPremiumTariffDefinitionId($minimalPremiumTariffDefinitionId)
            ->setPackageTariffDefinitionId($packageTariffDefinitionId)
            ->setRenewalBonusMalusTariffDefinitionId($renewalBonusMalusTariffDefinitionId)
            ->setShortTermTariffDefinitionId($shortTermTariffDefinitionId)
            ->setStandardTariffDefinitionId($standardTariffDefinitionId);
    }
    /**
     * Get BlackRiskTariffDefinitionId value
     * @return int|null
     */
    public function getBlackRiskTariffDefinitionId()
    {
        return $this->BlackRiskTariffDefinitionId;
    }
    /**
     * Set BlackRiskTariffDefinitionId value
     * @param int $blackRiskTariffDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\TariffVersion
     */
    public function setBlackRiskTariffDefinitionId($blackRiskTariffDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($blackRiskTariffDefinitionId) && !is_numeric($blackRiskTariffDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($blackRiskTariffDefinitionId)), __LINE__);
        }
        $this->BlackRiskTariffDefinitionId = $blackRiskTariffDefinitionId;
        return $this;
    }
    /**
     * Get BonusMalusTariffDefinitionId value
     * @return int|null
     */
    public function getBonusMalusTariffDefinitionId()
    {
        return $this->BonusMalusTariffDefinitionId;
    }
    /**
     * Set BonusMalusTariffDefinitionId value
     * @param int $bonusMalusTariffDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\TariffVersion
     */
    public function setBonusMalusTariffDefinitionId($bonusMalusTariffDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($bonusMalusTariffDefinitionId) && !is_numeric($bonusMalusTariffDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($bonusMalusTariffDefinitionId)), __LINE__);
        }
        $this->BonusMalusTariffDefinitionId = $bonusMalusTariffDefinitionId;
        return $this;
    }
    /**
     * Get MinimalPremiumTariffDefinitionId value
     * @return int|null
     */
    public function getMinimalPremiumTariffDefinitionId()
    {
        return $this->MinimalPremiumTariffDefinitionId;
    }
    /**
     * Set MinimalPremiumTariffDefinitionId value
     * @param int $minimalPremiumTariffDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\TariffVersion
     */
    public function setMinimalPremiumTariffDefinitionId($minimalPremiumTariffDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($minimalPremiumTariffDefinitionId) && !is_numeric($minimalPremiumTariffDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minimalPremiumTariffDefinitionId)), __LINE__);
        }
        $this->MinimalPremiumTariffDefinitionId = $minimalPremiumTariffDefinitionId;
        return $this;
    }
    /**
     * Get PackageTariffDefinitionId value
     * @return int|null
     */
    public function getPackageTariffDefinitionId()
    {
        return $this->PackageTariffDefinitionId;
    }
    /**
     * Set PackageTariffDefinitionId value
     * @param int $packageTariffDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\TariffVersion
     */
    public function setPackageTariffDefinitionId($packageTariffDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($packageTariffDefinitionId) && !is_numeric($packageTariffDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($packageTariffDefinitionId)), __LINE__);
        }
        $this->PackageTariffDefinitionId = $packageTariffDefinitionId;
        return $this;
    }
    /**
     * Get RenewalBonusMalusTariffDefinitionId value
     * @return int|null
     */
    public function getRenewalBonusMalusTariffDefinitionId()
    {
        return $this->RenewalBonusMalusTariffDefinitionId;
    }
    /**
     * Set RenewalBonusMalusTariffDefinitionId value
     * @param int $renewalBonusMalusTariffDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\TariffVersion
     */
    public function setRenewalBonusMalusTariffDefinitionId($renewalBonusMalusTariffDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($renewalBonusMalusTariffDefinitionId) && !is_numeric($renewalBonusMalusTariffDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($renewalBonusMalusTariffDefinitionId)), __LINE__);
        }
        $this->RenewalBonusMalusTariffDefinitionId = $renewalBonusMalusTariffDefinitionId;
        return $this;
    }
    /**
     * Get ShortTermTariffDefinitionId value
     * @return int|null
     */
    public function getShortTermTariffDefinitionId()
    {
        return $this->ShortTermTariffDefinitionId;
    }
    /**
     * Set ShortTermTariffDefinitionId value
     * @param int $shortTermTariffDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\TariffVersion
     */
    public function setShortTermTariffDefinitionId($shortTermTariffDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($shortTermTariffDefinitionId) && !is_numeric($shortTermTariffDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($shortTermTariffDefinitionId)), __LINE__);
        }
        $this->ShortTermTariffDefinitionId = $shortTermTariffDefinitionId;
        return $this;
    }
    /**
     * Get StandardTariffDefinitionId value
     * @return int|null
     */
    public function getStandardTariffDefinitionId()
    {
        return $this->StandardTariffDefinitionId;
    }
    /**
     * Set StandardTariffDefinitionId value
     * @param int $standardTariffDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\TariffVersion
     */
    public function setStandardTariffDefinitionId($standardTariffDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($standardTariffDefinitionId) && !is_numeric($standardTariffDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($standardTariffDefinitionId)), __LINE__);
        }
        $this->StandardTariffDefinitionId = $standardTariffDefinitionId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\TariffVersion
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
