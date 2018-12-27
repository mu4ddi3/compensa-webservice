<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRisksToChooseRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetRisksToChooseRequest
 * @subpackage Structs
 */
class GetRisksToChooseRequest extends AbstractStructBase
{
    /**
     * The AcInsuranceSum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $AcInsuranceSum;
    /**
     * The BmAcCorrectionFactor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $BmAcCorrectionFactor;
    /**
     * The BmOcCorrectionFactor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $BmOcCorrectionFactor;
    /**
     * The IsAcSelected
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAcSelected;
    /**
     * The IsAgreementForBMVerification
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAgreementForBMVerification;
    /**
     * The IsBurglaryExcludedSelected
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsBurglaryExcludedSelected;
    /**
     * The IsOcSelected
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsOcSelected;
    /**
     * The IsShortTerm
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsShortTerm;
    /**
     * The IsUnusualVehicleUsage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsUnusualVehicleUsage;
    /**
     * The IsVehicleFromCompensaDictionary
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsVehicleFromCompensaDictionary;
    /**
     * The ModelId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ModelId;
    /**
     * The ModelTypeId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ModelTypeId;
    /**
     * The RiskCodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRiskCode
     */
    public $RiskCodes;
    /**
     * The VehicleAge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $VehicleAge;
    /**
     * The VehicleBrandId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $VehicleBrandId;
    /**
     * The VehicleGroupId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $VehicleGroupId;
    /**
     * The VehicleType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $VehicleType;
    /**
     * Constructor method for GetRisksToChooseRequest
     * @uses GetRisksToChooseRequest::setAcInsuranceSum()
     * @uses GetRisksToChooseRequest::setBmAcCorrectionFactor()
     * @uses GetRisksToChooseRequest::setBmOcCorrectionFactor()
     * @uses GetRisksToChooseRequest::setIsAcSelected()
     * @uses GetRisksToChooseRequest::setIsAgreementForBMVerification()
     * @uses GetRisksToChooseRequest::setIsBurglaryExcludedSelected()
     * @uses GetRisksToChooseRequest::setIsOcSelected()
     * @uses GetRisksToChooseRequest::setIsShortTerm()
     * @uses GetRisksToChooseRequest::setIsUnusualVehicleUsage()
     * @uses GetRisksToChooseRequest::setIsVehicleFromCompensaDictionary()
     * @uses GetRisksToChooseRequest::setModelId()
     * @uses GetRisksToChooseRequest::setModelTypeId()
     * @uses GetRisksToChooseRequest::setRiskCodes()
     * @uses GetRisksToChooseRequest::setVehicleAge()
     * @uses GetRisksToChooseRequest::setVehicleBrandId()
     * @uses GetRisksToChooseRequest::setVehicleGroupId()
     * @uses GetRisksToChooseRequest::setVehicleType()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $acInsuranceSum
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $bmAcCorrectionFactor
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $bmOcCorrectionFactor
     * @param bool $isAcSelected
     * @param bool $isAgreementForBMVerification
     * @param bool $isBurglaryExcludedSelected
     * @param bool $isOcSelected
     * @param bool $isShortTerm
     * @param bool $isUnusualVehicleUsage
     * @param bool $isVehicleFromCompensaDictionary
     * @param int $modelId
     * @param int $modelTypeId
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRiskCode $riskCodes
     * @param int $vehicleAge
     * @param int $vehicleBrandId
     * @param int $vehicleGroupId
     * @param string $vehicleType
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $acInsuranceSum = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $bmAcCorrectionFactor = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $bmOcCorrectionFactor = null, $isAcSelected = null, $isAgreementForBMVerification = null, $isBurglaryExcludedSelected = null, $isOcSelected = null, $isShortTerm = null, $isUnusualVehicleUsage = null, $isVehicleFromCompensaDictionary = null, $modelId = null, $modelTypeId = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRiskCode $riskCodes = null, $vehicleAge = null, $vehicleBrandId = null, $vehicleGroupId = null, $vehicleType = null)
    {
        $this
            ->setAcInsuranceSum($acInsuranceSum)
            ->setBmAcCorrectionFactor($bmAcCorrectionFactor)
            ->setBmOcCorrectionFactor($bmOcCorrectionFactor)
            ->setIsAcSelected($isAcSelected)
            ->setIsAgreementForBMVerification($isAgreementForBMVerification)
            ->setIsBurglaryExcludedSelected($isBurglaryExcludedSelected)
            ->setIsOcSelected($isOcSelected)
            ->setIsShortTerm($isShortTerm)
            ->setIsUnusualVehicleUsage($isUnusualVehicleUsage)
            ->setIsVehicleFromCompensaDictionary($isVehicleFromCompensaDictionary)
            ->setModelId($modelId)
            ->setModelTypeId($modelTypeId)
            ->setRiskCodes($riskCodes)
            ->setVehicleAge($vehicleAge)
            ->setVehicleBrandId($vehicleBrandId)
            ->setVehicleGroupId($vehicleGroupId)
            ->setVehicleType($vehicleType);
    }
    /**
     * Get AcInsuranceSum value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getAcInsuranceSum()
    {
        return isset($this->AcInsuranceSum) ? $this->AcInsuranceSum : null;
    }
    /**
     * Set AcInsuranceSum value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $acInsuranceSum
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetRisksToChooseRequest
     */
    public function setAcInsuranceSum(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $acInsuranceSum = null)
    {
        if (is_null($acInsuranceSum) || (is_array($acInsuranceSum) && empty($acInsuranceSum))) {
            unset($this->AcInsuranceSum);
        } else {
            $this->AcInsuranceSum = $acInsuranceSum;
        }
        return $this;
    }
    /**
     * Get BmAcCorrectionFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getBmAcCorrectionFactor()
    {
        return isset($this->BmAcCorrectionFactor) ? $this->BmAcCorrectionFactor : null;
    }
    /**
     * Set BmAcCorrectionFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $bmAcCorrectionFactor
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetRisksToChooseRequest
     */
    public function setBmAcCorrectionFactor(\Mu4ddi3\Compensa\Webservice\StructType\Factor $bmAcCorrectionFactor = null)
    {
        if (is_null($bmAcCorrectionFactor) || (is_array($bmAcCorrectionFactor) && empty($bmAcCorrectionFactor))) {
            unset($this->BmAcCorrectionFactor);
        } else {
            $this->BmAcCorrectionFactor = $bmAcCorrectionFactor;
        }
        return $this;
    }
    /**
     * Get BmOcCorrectionFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getBmOcCorrectionFactor()
    {
        return isset($this->BmOcCorrectionFactor) ? $this->BmOcCorrectionFactor : null;
    }
    /**
     * Set BmOcCorrectionFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $bmOcCorrectionFactor
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetRisksToChooseRequest
     */
    public function setBmOcCorrectionFactor(\Mu4ddi3\Compensa\Webservice\StructType\Factor $bmOcCorrectionFactor = null)
    {
        if (is_null($bmOcCorrectionFactor) || (is_array($bmOcCorrectionFactor) && empty($bmOcCorrectionFactor))) {
            unset($this->BmOcCorrectionFactor);
        } else {
            $this->BmOcCorrectionFactor = $bmOcCorrectionFactor;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetRisksToChooseRequest
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
     * Get IsAgreementForBMVerification value
     * @return bool|null
     */
    public function getIsAgreementForBMVerification()
    {
        return $this->IsAgreementForBMVerification;
    }
    /**
     * Set IsAgreementForBMVerification value
     * @param bool $isAgreementForBMVerification
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetRisksToChooseRequest
     */
    public function setIsAgreementForBMVerification($isAgreementForBMVerification = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAgreementForBMVerification) && !is_bool($isAgreementForBMVerification)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAgreementForBMVerification)), __LINE__);
        }
        $this->IsAgreementForBMVerification = $isAgreementForBMVerification;
        return $this;
    }
    /**
     * Get IsBurglaryExcludedSelected value
     * @return bool|null
     */
    public function getIsBurglaryExcludedSelected()
    {
        return $this->IsBurglaryExcludedSelected;
    }
    /**
     * Set IsBurglaryExcludedSelected value
     * @param bool $isBurglaryExcludedSelected
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetRisksToChooseRequest
     */
    public function setIsBurglaryExcludedSelected($isBurglaryExcludedSelected = null)
    {
        // validation for constraint: boolean
        if (!is_null($isBurglaryExcludedSelected) && !is_bool($isBurglaryExcludedSelected)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isBurglaryExcludedSelected)), __LINE__);
        }
        $this->IsBurglaryExcludedSelected = $isBurglaryExcludedSelected;
        return $this;
    }
    /**
     * Get IsOcSelected value
     * @return bool|null
     */
    public function getIsOcSelected()
    {
        return $this->IsOcSelected;
    }
    /**
     * Set IsOcSelected value
     * @param bool $isOcSelected
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetRisksToChooseRequest
     */
    public function setIsOcSelected($isOcSelected = null)
    {
        // validation for constraint: boolean
        if (!is_null($isOcSelected) && !is_bool($isOcSelected)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isOcSelected)), __LINE__);
        }
        $this->IsOcSelected = $isOcSelected;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetRisksToChooseRequest
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
     * Get IsUnusualVehicleUsage value
     * @return bool|null
     */
    public function getIsUnusualVehicleUsage()
    {
        return $this->IsUnusualVehicleUsage;
    }
    /**
     * Set IsUnusualVehicleUsage value
     * @param bool $isUnusualVehicleUsage
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetRisksToChooseRequest
     */
    public function setIsUnusualVehicleUsage($isUnusualVehicleUsage = null)
    {
        // validation for constraint: boolean
        if (!is_null($isUnusualVehicleUsage) && !is_bool($isUnusualVehicleUsage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isUnusualVehicleUsage)), __LINE__);
        }
        $this->IsUnusualVehicleUsage = $isUnusualVehicleUsage;
        return $this;
    }
    /**
     * Get IsVehicleFromCompensaDictionary value
     * @return bool|null
     */
    public function getIsVehicleFromCompensaDictionary()
    {
        return $this->IsVehicleFromCompensaDictionary;
    }
    /**
     * Set IsVehicleFromCompensaDictionary value
     * @param bool $isVehicleFromCompensaDictionary
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetRisksToChooseRequest
     */
    public function setIsVehicleFromCompensaDictionary($isVehicleFromCompensaDictionary = null)
    {
        // validation for constraint: boolean
        if (!is_null($isVehicleFromCompensaDictionary) && !is_bool($isVehicleFromCompensaDictionary)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isVehicleFromCompensaDictionary)), __LINE__);
        }
        $this->IsVehicleFromCompensaDictionary = $isVehicleFromCompensaDictionary;
        return $this;
    }
    /**
     * Get ModelId value
     * @return int|null
     */
    public function getModelId()
    {
        return $this->ModelId;
    }
    /**
     * Set ModelId value
     * @param int $modelId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetRisksToChooseRequest
     */
    public function setModelId($modelId = null)
    {
        // validation for constraint: int
        if (!is_null($modelId) && !is_numeric($modelId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($modelId)), __LINE__);
        }
        $this->ModelId = $modelId;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetRisksToChooseRequest
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
     * Get RiskCodes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRiskCode|null
     */
    public function getRiskCodes()
    {
        return isset($this->RiskCodes) ? $this->RiskCodes : null;
    }
    /**
     * Set RiskCodes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRiskCode $riskCodes
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetRisksToChooseRequest
     */
    public function setRiskCodes(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRiskCode $riskCodes = null)
    {
        if (is_null($riskCodes) || (is_array($riskCodes) && empty($riskCodes))) {
            unset($this->RiskCodes);
        } else {
            $this->RiskCodes = $riskCodes;
        }
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetRisksToChooseRequest
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
     * Get VehicleBrandId value
     * @return int|null
     */
    public function getVehicleBrandId()
    {
        return $this->VehicleBrandId;
    }
    /**
     * Set VehicleBrandId value
     * @param int $vehicleBrandId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetRisksToChooseRequest
     */
    public function setVehicleBrandId($vehicleBrandId = null)
    {
        // validation for constraint: int
        if (!is_null($vehicleBrandId) && !is_numeric($vehicleBrandId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($vehicleBrandId)), __LINE__);
        }
        $this->VehicleBrandId = $vehicleBrandId;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetRisksToChooseRequest
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
     * Get VehicleType value
     * @return string|null
     */
    public function getVehicleType()
    {
        return $this->VehicleType;
    }
    /**
     * Set VehicleType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VehicleType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VehicleType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $vehicleType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetRisksToChooseRequest
     */
    public function setVehicleType($vehicleType = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\VehicleType::valueIsValid($vehicleType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $vehicleType, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\VehicleType::getValidValues())), __LINE__);
        }
        $this->VehicleType = $vehicleType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetRisksToChooseRequest
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
