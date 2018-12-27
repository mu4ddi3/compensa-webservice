<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RiskAvailabilityRule StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RiskAvailabilityRule
 * @subpackage Structs
 */
class RiskAvailabilityRule extends AbstractStructBase
{
    /**
     * The AvaliableRisks
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring
     */
    public $AvaliableRisks;
    /**
     * The IsAcAvailable
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAcAvailable;
    /**
     * The IsAssistanceAvailable
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAssistanceAvailable;
    /**
     * The IsBLSAvailable
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsBLSAvailable;
    /**
     * The IsBagazAvailable
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsBagazAvailable;
    /**
     * The IsDnaAvailable
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsDnaAvailable;
    /**
     * The IsGapAvailable
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsGapAvailable;
    /**
     * The IsNnwAvailable
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsNnwAvailable;
    /**
     * The IsOcAvailable
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsOcAvailable;
    /**
     * The IsOpAvailable
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsOpAvailable;
    /**
     * The IsOuzAcAvailable
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsOuzAcAvailable;
    /**
     * The IsOuzOcAvailable
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsOuzOcAvailable;
    /**
     * The IsPomocAvailable
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsPomocAvailable;
    /**
     * The IsSzybyAvailable
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsSzybyAvailable;
    /**
     * The IsWdAvailable
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsWdAvailable;
    /**
     * The VehicleGroupId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $VehicleGroupId;
    /**
     * Constructor method for RiskAvailabilityRule
     * @uses RiskAvailabilityRule::setAvaliableRisks()
     * @uses RiskAvailabilityRule::setIsAcAvailable()
     * @uses RiskAvailabilityRule::setIsAssistanceAvailable()
     * @uses RiskAvailabilityRule::setIsBLSAvailable()
     * @uses RiskAvailabilityRule::setIsBagazAvailable()
     * @uses RiskAvailabilityRule::setIsDnaAvailable()
     * @uses RiskAvailabilityRule::setIsGapAvailable()
     * @uses RiskAvailabilityRule::setIsNnwAvailable()
     * @uses RiskAvailabilityRule::setIsOcAvailable()
     * @uses RiskAvailabilityRule::setIsOpAvailable()
     * @uses RiskAvailabilityRule::setIsOuzAcAvailable()
     * @uses RiskAvailabilityRule::setIsOuzOcAvailable()
     * @uses RiskAvailabilityRule::setIsPomocAvailable()
     * @uses RiskAvailabilityRule::setIsSzybyAvailable()
     * @uses RiskAvailabilityRule::setIsWdAvailable()
     * @uses RiskAvailabilityRule::setVehicleGroupId()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring $avaliableRisks
     * @param bool $isAcAvailable
     * @param bool $isAssistanceAvailable
     * @param bool $isBLSAvailable
     * @param bool $isBagazAvailable
     * @param bool $isDnaAvailable
     * @param bool $isGapAvailable
     * @param bool $isNnwAvailable
     * @param bool $isOcAvailable
     * @param bool $isOpAvailable
     * @param bool $isOuzAcAvailable
     * @param bool $isOuzOcAvailable
     * @param bool $isPomocAvailable
     * @param bool $isSzybyAvailable
     * @param bool $isWdAvailable
     * @param int $vehicleGroupId
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring $avaliableRisks = null, $isAcAvailable = null, $isAssistanceAvailable = null, $isBLSAvailable = null, $isBagazAvailable = null, $isDnaAvailable = null, $isGapAvailable = null, $isNnwAvailable = null, $isOcAvailable = null, $isOpAvailable = null, $isOuzAcAvailable = null, $isOuzOcAvailable = null, $isPomocAvailable = null, $isSzybyAvailable = null, $isWdAvailable = null, $vehicleGroupId = null)
    {
        $this
            ->setAvaliableRisks($avaliableRisks)
            ->setIsAcAvailable($isAcAvailable)
            ->setIsAssistanceAvailable($isAssistanceAvailable)
            ->setIsBLSAvailable($isBLSAvailable)
            ->setIsBagazAvailable($isBagazAvailable)
            ->setIsDnaAvailable($isDnaAvailable)
            ->setIsGapAvailable($isGapAvailable)
            ->setIsNnwAvailable($isNnwAvailable)
            ->setIsOcAvailable($isOcAvailable)
            ->setIsOpAvailable($isOpAvailable)
            ->setIsOuzAcAvailable($isOuzAcAvailable)
            ->setIsOuzOcAvailable($isOuzOcAvailable)
            ->setIsPomocAvailable($isPomocAvailable)
            ->setIsSzybyAvailable($isSzybyAvailable)
            ->setIsWdAvailable($isWdAvailable)
            ->setVehicleGroupId($vehicleGroupId);
    }
    /**
     * Get AvaliableRisks value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring|null
     */
    public function getAvaliableRisks()
    {
        return isset($this->AvaliableRisks) ? $this->AvaliableRisks : null;
    }
    /**
     * Set AvaliableRisks value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring $avaliableRisks
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskAvailabilityRule
     */
    public function setAvaliableRisks(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring $avaliableRisks = null)
    {
        if (is_null($avaliableRisks) || (is_array($avaliableRisks) && empty($avaliableRisks))) {
            unset($this->AvaliableRisks);
        } else {
            $this->AvaliableRisks = $avaliableRisks;
        }
        return $this;
    }
    /**
     * Get IsAcAvailable value
     * @return bool|null
     */
    public function getIsAcAvailable()
    {
        return $this->IsAcAvailable;
    }
    /**
     * Set IsAcAvailable value
     * @param bool $isAcAvailable
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskAvailabilityRule
     */
    public function setIsAcAvailable($isAcAvailable = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAcAvailable) && !is_bool($isAcAvailable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAcAvailable)), __LINE__);
        }
        $this->IsAcAvailable = $isAcAvailable;
        return $this;
    }
    /**
     * Get IsAssistanceAvailable value
     * @return bool|null
     */
    public function getIsAssistanceAvailable()
    {
        return $this->IsAssistanceAvailable;
    }
    /**
     * Set IsAssistanceAvailable value
     * @param bool $isAssistanceAvailable
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskAvailabilityRule
     */
    public function setIsAssistanceAvailable($isAssistanceAvailable = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAssistanceAvailable) && !is_bool($isAssistanceAvailable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAssistanceAvailable)), __LINE__);
        }
        $this->IsAssistanceAvailable = $isAssistanceAvailable;
        return $this;
    }
    /**
     * Get IsBLSAvailable value
     * @return bool|null
     */
    public function getIsBLSAvailable()
    {
        return $this->IsBLSAvailable;
    }
    /**
     * Set IsBLSAvailable value
     * @param bool $isBLSAvailable
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskAvailabilityRule
     */
    public function setIsBLSAvailable($isBLSAvailable = null)
    {
        // validation for constraint: boolean
        if (!is_null($isBLSAvailable) && !is_bool($isBLSAvailable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isBLSAvailable)), __LINE__);
        }
        $this->IsBLSAvailable = $isBLSAvailable;
        return $this;
    }
    /**
     * Get IsBagazAvailable value
     * @return bool|null
     */
    public function getIsBagazAvailable()
    {
        return $this->IsBagazAvailable;
    }
    /**
     * Set IsBagazAvailable value
     * @param bool $isBagazAvailable
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskAvailabilityRule
     */
    public function setIsBagazAvailable($isBagazAvailable = null)
    {
        // validation for constraint: boolean
        if (!is_null($isBagazAvailable) && !is_bool($isBagazAvailable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isBagazAvailable)), __LINE__);
        }
        $this->IsBagazAvailable = $isBagazAvailable;
        return $this;
    }
    /**
     * Get IsDnaAvailable value
     * @return bool|null
     */
    public function getIsDnaAvailable()
    {
        return $this->IsDnaAvailable;
    }
    /**
     * Set IsDnaAvailable value
     * @param bool $isDnaAvailable
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskAvailabilityRule
     */
    public function setIsDnaAvailable($isDnaAvailable = null)
    {
        // validation for constraint: boolean
        if (!is_null($isDnaAvailable) && !is_bool($isDnaAvailable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isDnaAvailable)), __LINE__);
        }
        $this->IsDnaAvailable = $isDnaAvailable;
        return $this;
    }
    /**
     * Get IsGapAvailable value
     * @return bool|null
     */
    public function getIsGapAvailable()
    {
        return $this->IsGapAvailable;
    }
    /**
     * Set IsGapAvailable value
     * @param bool $isGapAvailable
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskAvailabilityRule
     */
    public function setIsGapAvailable($isGapAvailable = null)
    {
        // validation for constraint: boolean
        if (!is_null($isGapAvailable) && !is_bool($isGapAvailable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isGapAvailable)), __LINE__);
        }
        $this->IsGapAvailable = $isGapAvailable;
        return $this;
    }
    /**
     * Get IsNnwAvailable value
     * @return bool|null
     */
    public function getIsNnwAvailable()
    {
        return $this->IsNnwAvailable;
    }
    /**
     * Set IsNnwAvailable value
     * @param bool $isNnwAvailable
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskAvailabilityRule
     */
    public function setIsNnwAvailable($isNnwAvailable = null)
    {
        // validation for constraint: boolean
        if (!is_null($isNnwAvailable) && !is_bool($isNnwAvailable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isNnwAvailable)), __LINE__);
        }
        $this->IsNnwAvailable = $isNnwAvailable;
        return $this;
    }
    /**
     * Get IsOcAvailable value
     * @return bool|null
     */
    public function getIsOcAvailable()
    {
        return $this->IsOcAvailable;
    }
    /**
     * Set IsOcAvailable value
     * @param bool $isOcAvailable
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskAvailabilityRule
     */
    public function setIsOcAvailable($isOcAvailable = null)
    {
        // validation for constraint: boolean
        if (!is_null($isOcAvailable) && !is_bool($isOcAvailable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isOcAvailable)), __LINE__);
        }
        $this->IsOcAvailable = $isOcAvailable;
        return $this;
    }
    /**
     * Get IsOpAvailable value
     * @return bool|null
     */
    public function getIsOpAvailable()
    {
        return $this->IsOpAvailable;
    }
    /**
     * Set IsOpAvailable value
     * @param bool $isOpAvailable
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskAvailabilityRule
     */
    public function setIsOpAvailable($isOpAvailable = null)
    {
        // validation for constraint: boolean
        if (!is_null($isOpAvailable) && !is_bool($isOpAvailable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isOpAvailable)), __LINE__);
        }
        $this->IsOpAvailable = $isOpAvailable;
        return $this;
    }
    /**
     * Get IsOuzAcAvailable value
     * @return bool|null
     */
    public function getIsOuzAcAvailable()
    {
        return $this->IsOuzAcAvailable;
    }
    /**
     * Set IsOuzAcAvailable value
     * @param bool $isOuzAcAvailable
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskAvailabilityRule
     */
    public function setIsOuzAcAvailable($isOuzAcAvailable = null)
    {
        // validation for constraint: boolean
        if (!is_null($isOuzAcAvailable) && !is_bool($isOuzAcAvailable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isOuzAcAvailable)), __LINE__);
        }
        $this->IsOuzAcAvailable = $isOuzAcAvailable;
        return $this;
    }
    /**
     * Get IsOuzOcAvailable value
     * @return bool|null
     */
    public function getIsOuzOcAvailable()
    {
        return $this->IsOuzOcAvailable;
    }
    /**
     * Set IsOuzOcAvailable value
     * @param bool $isOuzOcAvailable
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskAvailabilityRule
     */
    public function setIsOuzOcAvailable($isOuzOcAvailable = null)
    {
        // validation for constraint: boolean
        if (!is_null($isOuzOcAvailable) && !is_bool($isOuzOcAvailable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isOuzOcAvailable)), __LINE__);
        }
        $this->IsOuzOcAvailable = $isOuzOcAvailable;
        return $this;
    }
    /**
     * Get IsPomocAvailable value
     * @return bool|null
     */
    public function getIsPomocAvailable()
    {
        return $this->IsPomocAvailable;
    }
    /**
     * Set IsPomocAvailable value
     * @param bool $isPomocAvailable
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskAvailabilityRule
     */
    public function setIsPomocAvailable($isPomocAvailable = null)
    {
        // validation for constraint: boolean
        if (!is_null($isPomocAvailable) && !is_bool($isPomocAvailable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isPomocAvailable)), __LINE__);
        }
        $this->IsPomocAvailable = $isPomocAvailable;
        return $this;
    }
    /**
     * Get IsSzybyAvailable value
     * @return bool|null
     */
    public function getIsSzybyAvailable()
    {
        return $this->IsSzybyAvailable;
    }
    /**
     * Set IsSzybyAvailable value
     * @param bool $isSzybyAvailable
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskAvailabilityRule
     */
    public function setIsSzybyAvailable($isSzybyAvailable = null)
    {
        // validation for constraint: boolean
        if (!is_null($isSzybyAvailable) && !is_bool($isSzybyAvailable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isSzybyAvailable)), __LINE__);
        }
        $this->IsSzybyAvailable = $isSzybyAvailable;
        return $this;
    }
    /**
     * Get IsWdAvailable value
     * @return bool|null
     */
    public function getIsWdAvailable()
    {
        return $this->IsWdAvailable;
    }
    /**
     * Set IsWdAvailable value
     * @param bool $isWdAvailable
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskAvailabilityRule
     */
    public function setIsWdAvailable($isWdAvailable = null)
    {
        // validation for constraint: boolean
        if (!is_null($isWdAvailable) && !is_bool($isWdAvailable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isWdAvailable)), __LINE__);
        }
        $this->IsWdAvailable = $isWdAvailable;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskAvailabilityRule
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskAvailabilityRule
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
