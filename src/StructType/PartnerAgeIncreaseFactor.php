<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PartnerAgeIncreaseFactor StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PartnerAgeIncreaseFactor
 * @subpackage Structs
 */
class PartnerAgeIncreaseFactor extends AbstractStructBase
{
    /**
     * The FactorPreferential
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $FactorPreferential;
    /**
     * The FactorStandard
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $FactorStandard;
    /**
     * The IsAcSelected
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAcSelected;
    /**
     * The PartnerAgeLeftBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PartnerAgeLeftBound;
    /**
     * The PartnerAgeRightBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PartnerAgeRightBound;
    /**
     * The TariffVariant
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TariffVariant;
    /**
     * The VehicleGroupId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $VehicleGroupId;
    /**
     * Constructor method for PartnerAgeIncreaseFactor
     * @uses PartnerAgeIncreaseFactor::setFactorPreferential()
     * @uses PartnerAgeIncreaseFactor::setFactorStandard()
     * @uses PartnerAgeIncreaseFactor::setIsAcSelected()
     * @uses PartnerAgeIncreaseFactor::setPartnerAgeLeftBound()
     * @uses PartnerAgeIncreaseFactor::setPartnerAgeRightBound()
     * @uses PartnerAgeIncreaseFactor::setTariffVariant()
     * @uses PartnerAgeIncreaseFactor::setVehicleGroupId()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $factorPreferential
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $factorStandard
     * @param bool $isAcSelected
     * @param int $partnerAgeLeftBound
     * @param int $partnerAgeRightBound
     * @param string $tariffVariant
     * @param int $vehicleGroupId
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\Factor $factorPreferential = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $factorStandard = null, $isAcSelected = null, $partnerAgeLeftBound = null, $partnerAgeRightBound = null, $tariffVariant = null, $vehicleGroupId = null)
    {
        $this
            ->setFactorPreferential($factorPreferential)
            ->setFactorStandard($factorStandard)
            ->setIsAcSelected($isAcSelected)
            ->setPartnerAgeLeftBound($partnerAgeLeftBound)
            ->setPartnerAgeRightBound($partnerAgeRightBound)
            ->setTariffVariant($tariffVariant)
            ->setVehicleGroupId($vehicleGroupId);
    }
    /**
     * Get FactorPreferential value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getFactorPreferential()
    {
        return isset($this->FactorPreferential) ? $this->FactorPreferential : null;
    }
    /**
     * Set FactorPreferential value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $factorPreferential
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeIncreaseFactor
     */
    public function setFactorPreferential(\Mu4ddi3\Compensa\Webservice\StructType\Factor $factorPreferential = null)
    {
        if (is_null($factorPreferential) || (is_array($factorPreferential) && empty($factorPreferential))) {
            unset($this->FactorPreferential);
        } else {
            $this->FactorPreferential = $factorPreferential;
        }
        return $this;
    }
    /**
     * Get FactorStandard value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getFactorStandard()
    {
        return isset($this->FactorStandard) ? $this->FactorStandard : null;
    }
    /**
     * Set FactorStandard value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $factorStandard
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeIncreaseFactor
     */
    public function setFactorStandard(\Mu4ddi3\Compensa\Webservice\StructType\Factor $factorStandard = null)
    {
        if (is_null($factorStandard) || (is_array($factorStandard) && empty($factorStandard))) {
            unset($this->FactorStandard);
        } else {
            $this->FactorStandard = $factorStandard;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeIncreaseFactor
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
     * Get PartnerAgeLeftBound value
     * @return int|null
     */
    public function getPartnerAgeLeftBound()
    {
        return $this->PartnerAgeLeftBound;
    }
    /**
     * Set PartnerAgeLeftBound value
     * @param int $partnerAgeLeftBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeIncreaseFactor
     */
    public function setPartnerAgeLeftBound($partnerAgeLeftBound = null)
    {
        // validation for constraint: int
        if (!is_null($partnerAgeLeftBound) && !is_numeric($partnerAgeLeftBound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($partnerAgeLeftBound)), __LINE__);
        }
        $this->PartnerAgeLeftBound = $partnerAgeLeftBound;
        return $this;
    }
    /**
     * Get PartnerAgeRightBound value
     * @return int|null
     */
    public function getPartnerAgeRightBound()
    {
        return $this->PartnerAgeRightBound;
    }
    /**
     * Set PartnerAgeRightBound value
     * @param int $partnerAgeRightBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeIncreaseFactor
     */
    public function setPartnerAgeRightBound($partnerAgeRightBound = null)
    {
        // validation for constraint: int
        if (!is_null($partnerAgeRightBound) && !is_numeric($partnerAgeRightBound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($partnerAgeRightBound)), __LINE__);
        }
        $this->PartnerAgeRightBound = $partnerAgeRightBound;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeIncreaseFactor
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeIncreaseFactor
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeIncreaseFactor
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
