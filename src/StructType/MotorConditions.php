<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MotorConditions StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MotorConditions
 * @subpackage Structs
 */
class MotorConditions extends ProductConditions
{
    /**
     * The AcBonusMalusValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\AcBonusMalusValueCondition
     */
    public $AcBonusMalusValue;
    /**
     * The AcVariant
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\AcVariantCondition
     */
    public $AcVariant;
    /**
     * The Amortization
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\AmortizationCondition
     */
    public $Amortization;
    /**
     * The AssistanceVartiant
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\AssistanceVartiantCondition
     */
    public $AssistanceVartiant;
    /**
     * The Burglary
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\BurglaryCondition
     */
    public $Burglary;
    /**
     * The ConstantInsuranceSum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ConstantInsuranceSumCondition
     */
    public $ConstantInsuranceSum;
    /**
     * The GanTrack
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\GanTrackCondition
     */
    public $GanTrack;
    /**
     * The IeVehicleType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\IeVehicleTypeCondition
     */
    public $IeVehicleType;
    /**
     * The IsAcContinuation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $IsAcContinuation;
    /**
     * The IsOcContinuation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $IsOcContinuation;
    /**
     * The IsOwnerInsurer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $IsOwnerInsurer;
    /**
     * The IsOwnerResident
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $IsOwnerResident;
    /**
     * The IsTechnicalExaminationInvalid
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $IsTechnicalExaminationInvalid;
    /**
     * The NoConsumtionInsuranceSum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\NoConsumtionInsuranceSumCondition
     */
    public $NoConsumtionInsuranceSum;
    /**
     * The OcBonusMalusValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\OcBonusMalusValueCondition
     */
    public $OcBonusMalusValue;
    /**
     * The OpVariant
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\OpVariantCondition
     */
    public $OpVariant;
    /**
     * The OwnerType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\OwnerTypeCondition
     */
    public $OwnerType;
    /**
     * The PomocVariant
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PomocVariantCondition
     */
    public $PomocVariant;
    /**
     * The VehicleAge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\VehicleAgeCondition
     */
    public $VehicleAge;
    /**
     * The VehicleBrand
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\VehicleBrandCondition
     */
    public $VehicleBrand;
    /**
     * The VehicleCapacity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\VehicleCapacityCondition
     */
    public $VehicleCapacity;
    /**
     * The VehicleGroup
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\VehicleGroupCondition
     */
    public $VehicleGroup;
    /**
     * The VehiclePower
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\VehiclePowerCondition
     */
    public $VehiclePower;
    /**
     * The VehicleSeatsNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\VehicleSeatsNumberCondition
     */
    public $VehicleSeatsNumber;
    /**
     * Constructor method for MotorConditions
     * @uses MotorConditions::setAcBonusMalusValue()
     * @uses MotorConditions::setAcVariant()
     * @uses MotorConditions::setAmortization()
     * @uses MotorConditions::setAssistanceVartiant()
     * @uses MotorConditions::setBurglary()
     * @uses MotorConditions::setConstantInsuranceSum()
     * @uses MotorConditions::setGanTrack()
     * @uses MotorConditions::setIeVehicleType()
     * @uses MotorConditions::setIsAcContinuation()
     * @uses MotorConditions::setIsOcContinuation()
     * @uses MotorConditions::setIsOwnerInsurer()
     * @uses MotorConditions::setIsOwnerResident()
     * @uses MotorConditions::setIsTechnicalExaminationInvalid()
     * @uses MotorConditions::setNoConsumtionInsuranceSum()
     * @uses MotorConditions::setOcBonusMalusValue()
     * @uses MotorConditions::setOpVariant()
     * @uses MotorConditions::setOwnerType()
     * @uses MotorConditions::setPomocVariant()
     * @uses MotorConditions::setVehicleAge()
     * @uses MotorConditions::setVehicleBrand()
     * @uses MotorConditions::setVehicleCapacity()
     * @uses MotorConditions::setVehicleGroup()
     * @uses MotorConditions::setVehiclePower()
     * @uses MotorConditions::setVehicleSeatsNumber()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AcBonusMalusValueCondition $acBonusMalusValue
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AcVariantCondition $acVariant
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AmortizationCondition $amortization
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AssistanceVartiantCondition $assistanceVartiant
     * @param \Mu4ddi3\Compensa\Webservice\StructType\BurglaryCondition $burglary
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ConstantInsuranceSumCondition $constantInsuranceSum
     * @param \Mu4ddi3\Compensa\Webservice\StructType\GanTrackCondition $ganTrack
     * @param \Mu4ddi3\Compensa\Webservice\StructType\IeVehicleTypeCondition $ieVehicleType
     * @param bool $isAcContinuation
     * @param bool $isOcContinuation
     * @param bool $isOwnerInsurer
     * @param bool $isOwnerResident
     * @param bool $isTechnicalExaminationInvalid
     * @param \Mu4ddi3\Compensa\Webservice\StructType\NoConsumtionInsuranceSumCondition $noConsumtionInsuranceSum
     * @param \Mu4ddi3\Compensa\Webservice\StructType\OcBonusMalusValueCondition $ocBonusMalusValue
     * @param \Mu4ddi3\Compensa\Webservice\StructType\OpVariantCondition $opVariant
     * @param \Mu4ddi3\Compensa\Webservice\StructType\OwnerTypeCondition $ownerType
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PomocVariantCondition $pomocVariant
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VehicleAgeCondition $vehicleAge
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VehicleBrandCondition $vehicleBrand
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VehicleCapacityCondition $vehicleCapacity
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VehicleGroupCondition $vehicleGroup
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VehiclePowerCondition $vehiclePower
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VehicleSeatsNumberCondition $vehicleSeatsNumber
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\AcBonusMalusValueCondition $acBonusMalusValue = null, \Mu4ddi3\Compensa\Webservice\StructType\AcVariantCondition $acVariant = null, \Mu4ddi3\Compensa\Webservice\StructType\AmortizationCondition $amortization = null, \Mu4ddi3\Compensa\Webservice\StructType\AssistanceVartiantCondition $assistanceVartiant = null, \Mu4ddi3\Compensa\Webservice\StructType\BurglaryCondition $burglary = null, \Mu4ddi3\Compensa\Webservice\StructType\ConstantInsuranceSumCondition $constantInsuranceSum = null, \Mu4ddi3\Compensa\Webservice\StructType\GanTrackCondition $ganTrack = null, \Mu4ddi3\Compensa\Webservice\StructType\IeVehicleTypeCondition $ieVehicleType = null, $isAcContinuation = null, $isOcContinuation = null, $isOwnerInsurer = null, $isOwnerResident = null, $isTechnicalExaminationInvalid = null, \Mu4ddi3\Compensa\Webservice\StructType\NoConsumtionInsuranceSumCondition $noConsumtionInsuranceSum = null, \Mu4ddi3\Compensa\Webservice\StructType\OcBonusMalusValueCondition $ocBonusMalusValue = null, \Mu4ddi3\Compensa\Webservice\StructType\OpVariantCondition $opVariant = null, \Mu4ddi3\Compensa\Webservice\StructType\OwnerTypeCondition $ownerType = null, \Mu4ddi3\Compensa\Webservice\StructType\PomocVariantCondition $pomocVariant = null, \Mu4ddi3\Compensa\Webservice\StructType\VehicleAgeCondition $vehicleAge = null, \Mu4ddi3\Compensa\Webservice\StructType\VehicleBrandCondition $vehicleBrand = null, \Mu4ddi3\Compensa\Webservice\StructType\VehicleCapacityCondition $vehicleCapacity = null, \Mu4ddi3\Compensa\Webservice\StructType\VehicleGroupCondition $vehicleGroup = null, \Mu4ddi3\Compensa\Webservice\StructType\VehiclePowerCondition $vehiclePower = null, \Mu4ddi3\Compensa\Webservice\StructType\VehicleSeatsNumberCondition $vehicleSeatsNumber = null)
    {
        $this
            ->setAcBonusMalusValue($acBonusMalusValue)
            ->setAcVariant($acVariant)
            ->setAmortization($amortization)
            ->setAssistanceVartiant($assistanceVartiant)
            ->setBurglary($burglary)
            ->setConstantInsuranceSum($constantInsuranceSum)
            ->setGanTrack($ganTrack)
            ->setIeVehicleType($ieVehicleType)
            ->setIsAcContinuation($isAcContinuation)
            ->setIsOcContinuation($isOcContinuation)
            ->setIsOwnerInsurer($isOwnerInsurer)
            ->setIsOwnerResident($isOwnerResident)
            ->setIsTechnicalExaminationInvalid($isTechnicalExaminationInvalid)
            ->setNoConsumtionInsuranceSum($noConsumtionInsuranceSum)
            ->setOcBonusMalusValue($ocBonusMalusValue)
            ->setOpVariant($opVariant)
            ->setOwnerType($ownerType)
            ->setPomocVariant($pomocVariant)
            ->setVehicleAge($vehicleAge)
            ->setVehicleBrand($vehicleBrand)
            ->setVehicleCapacity($vehicleCapacity)
            ->setVehicleGroup($vehicleGroup)
            ->setVehiclePower($vehiclePower)
            ->setVehicleSeatsNumber($vehicleSeatsNumber);
    }
    /**
     * Get AcBonusMalusValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AcBonusMalusValueCondition|null
     */
    public function getAcBonusMalusValue()
    {
        return isset($this->AcBonusMalusValue) ? $this->AcBonusMalusValue : null;
    }
    /**
     * Set AcBonusMalusValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AcBonusMalusValueCondition $acBonusMalusValue
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorConditions
     */
    public function setAcBonusMalusValue(\Mu4ddi3\Compensa\Webservice\StructType\AcBonusMalusValueCondition $acBonusMalusValue = null)
    {
        if (is_null($acBonusMalusValue) || (is_array($acBonusMalusValue) && empty($acBonusMalusValue))) {
            unset($this->AcBonusMalusValue);
        } else {
            $this->AcBonusMalusValue = $acBonusMalusValue;
        }
        return $this;
    }
    /**
     * Get AcVariant value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AcVariantCondition|null
     */
    public function getAcVariant()
    {
        return isset($this->AcVariant) ? $this->AcVariant : null;
    }
    /**
     * Set AcVariant value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AcVariantCondition $acVariant
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorConditions
     */
    public function setAcVariant(\Mu4ddi3\Compensa\Webservice\StructType\AcVariantCondition $acVariant = null)
    {
        if (is_null($acVariant) || (is_array($acVariant) && empty($acVariant))) {
            unset($this->AcVariant);
        } else {
            $this->AcVariant = $acVariant;
        }
        return $this;
    }
    /**
     * Get Amortization value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AmortizationCondition|null
     */
    public function getAmortization()
    {
        return isset($this->Amortization) ? $this->Amortization : null;
    }
    /**
     * Set Amortization value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AmortizationCondition $amortization
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorConditions
     */
    public function setAmortization(\Mu4ddi3\Compensa\Webservice\StructType\AmortizationCondition $amortization = null)
    {
        if (is_null($amortization) || (is_array($amortization) && empty($amortization))) {
            unset($this->Amortization);
        } else {
            $this->Amortization = $amortization;
        }
        return $this;
    }
    /**
     * Get AssistanceVartiant value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AssistanceVartiantCondition|null
     */
    public function getAssistanceVartiant()
    {
        return isset($this->AssistanceVartiant) ? $this->AssistanceVartiant : null;
    }
    /**
     * Set AssistanceVartiant value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AssistanceVartiantCondition $assistanceVartiant
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorConditions
     */
    public function setAssistanceVartiant(\Mu4ddi3\Compensa\Webservice\StructType\AssistanceVartiantCondition $assistanceVartiant = null)
    {
        if (is_null($assistanceVartiant) || (is_array($assistanceVartiant) && empty($assistanceVartiant))) {
            unset($this->AssistanceVartiant);
        } else {
            $this->AssistanceVartiant = $assistanceVartiant;
        }
        return $this;
    }
    /**
     * Get Burglary value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BurglaryCondition|null
     */
    public function getBurglary()
    {
        return isset($this->Burglary) ? $this->Burglary : null;
    }
    /**
     * Set Burglary value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\BurglaryCondition $burglary
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorConditions
     */
    public function setBurglary(\Mu4ddi3\Compensa\Webservice\StructType\BurglaryCondition $burglary = null)
    {
        if (is_null($burglary) || (is_array($burglary) && empty($burglary))) {
            unset($this->Burglary);
        } else {
            $this->Burglary = $burglary;
        }
        return $this;
    }
    /**
     * Get ConstantInsuranceSum value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ConstantInsuranceSumCondition|null
     */
    public function getConstantInsuranceSum()
    {
        return isset($this->ConstantInsuranceSum) ? $this->ConstantInsuranceSum : null;
    }
    /**
     * Set ConstantInsuranceSum value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ConstantInsuranceSumCondition $constantInsuranceSum
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorConditions
     */
    public function setConstantInsuranceSum(\Mu4ddi3\Compensa\Webservice\StructType\ConstantInsuranceSumCondition $constantInsuranceSum = null)
    {
        if (is_null($constantInsuranceSum) || (is_array($constantInsuranceSum) && empty($constantInsuranceSum))) {
            unset($this->ConstantInsuranceSum);
        } else {
            $this->ConstantInsuranceSum = $constantInsuranceSum;
        }
        return $this;
    }
    /**
     * Get GanTrack value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GanTrackCondition|null
     */
    public function getGanTrack()
    {
        return isset($this->GanTrack) ? $this->GanTrack : null;
    }
    /**
     * Set GanTrack value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\GanTrackCondition $ganTrack
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorConditions
     */
    public function setGanTrack(\Mu4ddi3\Compensa\Webservice\StructType\GanTrackCondition $ganTrack = null)
    {
        if (is_null($ganTrack) || (is_array($ganTrack) && empty($ganTrack))) {
            unset($this->GanTrack);
        } else {
            $this->GanTrack = $ganTrack;
        }
        return $this;
    }
    /**
     * Get IeVehicleType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\IeVehicleTypeCondition|null
     */
    public function getIeVehicleType()
    {
        return isset($this->IeVehicleType) ? $this->IeVehicleType : null;
    }
    /**
     * Set IeVehicleType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\IeVehicleTypeCondition $ieVehicleType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorConditions
     */
    public function setIeVehicleType(\Mu4ddi3\Compensa\Webservice\StructType\IeVehicleTypeCondition $ieVehicleType = null)
    {
        if (is_null($ieVehicleType) || (is_array($ieVehicleType) && empty($ieVehicleType))) {
            unset($this->IeVehicleType);
        } else {
            $this->IeVehicleType = $ieVehicleType;
        }
        return $this;
    }
    /**
     * Get IsAcContinuation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsAcContinuation()
    {
        return isset($this->IsAcContinuation) ? $this->IsAcContinuation : null;
    }
    /**
     * Set IsAcContinuation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isAcContinuation
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorConditions
     */
    public function setIsAcContinuation($isAcContinuation = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAcContinuation) && !is_bool($isAcContinuation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAcContinuation)), __LINE__);
        }
        if (is_null($isAcContinuation) || (is_array($isAcContinuation) && empty($isAcContinuation))) {
            unset($this->IsAcContinuation);
        } else {
            $this->IsAcContinuation = $isAcContinuation;
        }
        return $this;
    }
    /**
     * Get IsOcContinuation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsOcContinuation()
    {
        return isset($this->IsOcContinuation) ? $this->IsOcContinuation : null;
    }
    /**
     * Set IsOcContinuation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isOcContinuation
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorConditions
     */
    public function setIsOcContinuation($isOcContinuation = null)
    {
        // validation for constraint: boolean
        if (!is_null($isOcContinuation) && !is_bool($isOcContinuation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isOcContinuation)), __LINE__);
        }
        if (is_null($isOcContinuation) || (is_array($isOcContinuation) && empty($isOcContinuation))) {
            unset($this->IsOcContinuation);
        } else {
            $this->IsOcContinuation = $isOcContinuation;
        }
        return $this;
    }
    /**
     * Get IsOwnerInsurer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsOwnerInsurer()
    {
        return isset($this->IsOwnerInsurer) ? $this->IsOwnerInsurer : null;
    }
    /**
     * Set IsOwnerInsurer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isOwnerInsurer
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorConditions
     */
    public function setIsOwnerInsurer($isOwnerInsurer = null)
    {
        // validation for constraint: boolean
        if (!is_null($isOwnerInsurer) && !is_bool($isOwnerInsurer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isOwnerInsurer)), __LINE__);
        }
        if (is_null($isOwnerInsurer) || (is_array($isOwnerInsurer) && empty($isOwnerInsurer))) {
            unset($this->IsOwnerInsurer);
        } else {
            $this->IsOwnerInsurer = $isOwnerInsurer;
        }
        return $this;
    }
    /**
     * Get IsOwnerResident value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsOwnerResident()
    {
        return isset($this->IsOwnerResident) ? $this->IsOwnerResident : null;
    }
    /**
     * Set IsOwnerResident value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isOwnerResident
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorConditions
     */
    public function setIsOwnerResident($isOwnerResident = null)
    {
        // validation for constraint: boolean
        if (!is_null($isOwnerResident) && !is_bool($isOwnerResident)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isOwnerResident)), __LINE__);
        }
        if (is_null($isOwnerResident) || (is_array($isOwnerResident) && empty($isOwnerResident))) {
            unset($this->IsOwnerResident);
        } else {
            $this->IsOwnerResident = $isOwnerResident;
        }
        return $this;
    }
    /**
     * Get IsTechnicalExaminationInvalid value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsTechnicalExaminationInvalid()
    {
        return isset($this->IsTechnicalExaminationInvalid) ? $this->IsTechnicalExaminationInvalid : null;
    }
    /**
     * Set IsTechnicalExaminationInvalid value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isTechnicalExaminationInvalid
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorConditions
     */
    public function setIsTechnicalExaminationInvalid($isTechnicalExaminationInvalid = null)
    {
        // validation for constraint: boolean
        if (!is_null($isTechnicalExaminationInvalid) && !is_bool($isTechnicalExaminationInvalid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isTechnicalExaminationInvalid)), __LINE__);
        }
        if (is_null($isTechnicalExaminationInvalid) || (is_array($isTechnicalExaminationInvalid) && empty($isTechnicalExaminationInvalid))) {
            unset($this->IsTechnicalExaminationInvalid);
        } else {
            $this->IsTechnicalExaminationInvalid = $isTechnicalExaminationInvalid;
        }
        return $this;
    }
    /**
     * Get NoConsumtionInsuranceSum value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\NoConsumtionInsuranceSumCondition|null
     */
    public function getNoConsumtionInsuranceSum()
    {
        return isset($this->NoConsumtionInsuranceSum) ? $this->NoConsumtionInsuranceSum : null;
    }
    /**
     * Set NoConsumtionInsuranceSum value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\NoConsumtionInsuranceSumCondition $noConsumtionInsuranceSum
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorConditions
     */
    public function setNoConsumtionInsuranceSum(\Mu4ddi3\Compensa\Webservice\StructType\NoConsumtionInsuranceSumCondition $noConsumtionInsuranceSum = null)
    {
        if (is_null($noConsumtionInsuranceSum) || (is_array($noConsumtionInsuranceSum) && empty($noConsumtionInsuranceSum))) {
            unset($this->NoConsumtionInsuranceSum);
        } else {
            $this->NoConsumtionInsuranceSum = $noConsumtionInsuranceSum;
        }
        return $this;
    }
    /**
     * Get OcBonusMalusValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OcBonusMalusValueCondition|null
     */
    public function getOcBonusMalusValue()
    {
        return isset($this->OcBonusMalusValue) ? $this->OcBonusMalusValue : null;
    }
    /**
     * Set OcBonusMalusValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\OcBonusMalusValueCondition $ocBonusMalusValue
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorConditions
     */
    public function setOcBonusMalusValue(\Mu4ddi3\Compensa\Webservice\StructType\OcBonusMalusValueCondition $ocBonusMalusValue = null)
    {
        if (is_null($ocBonusMalusValue) || (is_array($ocBonusMalusValue) && empty($ocBonusMalusValue))) {
            unset($this->OcBonusMalusValue);
        } else {
            $this->OcBonusMalusValue = $ocBonusMalusValue;
        }
        return $this;
    }
    /**
     * Get OpVariant value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OpVariantCondition|null
     */
    public function getOpVariant()
    {
        return isset($this->OpVariant) ? $this->OpVariant : null;
    }
    /**
     * Set OpVariant value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\OpVariantCondition $opVariant
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorConditions
     */
    public function setOpVariant(\Mu4ddi3\Compensa\Webservice\StructType\OpVariantCondition $opVariant = null)
    {
        if (is_null($opVariant) || (is_array($opVariant) && empty($opVariant))) {
            unset($this->OpVariant);
        } else {
            $this->OpVariant = $opVariant;
        }
        return $this;
    }
    /**
     * Get OwnerType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OwnerTypeCondition|null
     */
    public function getOwnerType()
    {
        return isset($this->OwnerType) ? $this->OwnerType : null;
    }
    /**
     * Set OwnerType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\OwnerTypeCondition $ownerType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorConditions
     */
    public function setOwnerType(\Mu4ddi3\Compensa\Webservice\StructType\OwnerTypeCondition $ownerType = null)
    {
        if (is_null($ownerType) || (is_array($ownerType) && empty($ownerType))) {
            unset($this->OwnerType);
        } else {
            $this->OwnerType = $ownerType;
        }
        return $this;
    }
    /**
     * Get PomocVariant value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PomocVariantCondition|null
     */
    public function getPomocVariant()
    {
        return isset($this->PomocVariant) ? $this->PomocVariant : null;
    }
    /**
     * Set PomocVariant value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PomocVariantCondition $pomocVariant
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorConditions
     */
    public function setPomocVariant(\Mu4ddi3\Compensa\Webservice\StructType\PomocVariantCondition $pomocVariant = null)
    {
        if (is_null($pomocVariant) || (is_array($pomocVariant) && empty($pomocVariant))) {
            unset($this->PomocVariant);
        } else {
            $this->PomocVariant = $pomocVariant;
        }
        return $this;
    }
    /**
     * Get VehicleAge value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleAgeCondition|null
     */
    public function getVehicleAge()
    {
        return isset($this->VehicleAge) ? $this->VehicleAge : null;
    }
    /**
     * Set VehicleAge value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VehicleAgeCondition $vehicleAge
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorConditions
     */
    public function setVehicleAge(\Mu4ddi3\Compensa\Webservice\StructType\VehicleAgeCondition $vehicleAge = null)
    {
        if (is_null($vehicleAge) || (is_array($vehicleAge) && empty($vehicleAge))) {
            unset($this->VehicleAge);
        } else {
            $this->VehicleAge = $vehicleAge;
        }
        return $this;
    }
    /**
     * Get VehicleBrand value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleBrandCondition|null
     */
    public function getVehicleBrand()
    {
        return isset($this->VehicleBrand) ? $this->VehicleBrand : null;
    }
    /**
     * Set VehicleBrand value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VehicleBrandCondition $vehicleBrand
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorConditions
     */
    public function setVehicleBrand(\Mu4ddi3\Compensa\Webservice\StructType\VehicleBrandCondition $vehicleBrand = null)
    {
        if (is_null($vehicleBrand) || (is_array($vehicleBrand) && empty($vehicleBrand))) {
            unset($this->VehicleBrand);
        } else {
            $this->VehicleBrand = $vehicleBrand;
        }
        return $this;
    }
    /**
     * Get VehicleCapacity value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleCapacityCondition|null
     */
    public function getVehicleCapacity()
    {
        return isset($this->VehicleCapacity) ? $this->VehicleCapacity : null;
    }
    /**
     * Set VehicleCapacity value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VehicleCapacityCondition $vehicleCapacity
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorConditions
     */
    public function setVehicleCapacity(\Mu4ddi3\Compensa\Webservice\StructType\VehicleCapacityCondition $vehicleCapacity = null)
    {
        if (is_null($vehicleCapacity) || (is_array($vehicleCapacity) && empty($vehicleCapacity))) {
            unset($this->VehicleCapacity);
        } else {
            $this->VehicleCapacity = $vehicleCapacity;
        }
        return $this;
    }
    /**
     * Get VehicleGroup value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleGroupCondition|null
     */
    public function getVehicleGroup()
    {
        return isset($this->VehicleGroup) ? $this->VehicleGroup : null;
    }
    /**
     * Set VehicleGroup value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VehicleGroupCondition $vehicleGroup
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorConditions
     */
    public function setVehicleGroup(\Mu4ddi3\Compensa\Webservice\StructType\VehicleGroupCondition $vehicleGroup = null)
    {
        if (is_null($vehicleGroup) || (is_array($vehicleGroup) && empty($vehicleGroup))) {
            unset($this->VehicleGroup);
        } else {
            $this->VehicleGroup = $vehicleGroup;
        }
        return $this;
    }
    /**
     * Get VehiclePower value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehiclePowerCondition|null
     */
    public function getVehiclePower()
    {
        return isset($this->VehiclePower) ? $this->VehiclePower : null;
    }
    /**
     * Set VehiclePower value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VehiclePowerCondition $vehiclePower
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorConditions
     */
    public function setVehiclePower(\Mu4ddi3\Compensa\Webservice\StructType\VehiclePowerCondition $vehiclePower = null)
    {
        if (is_null($vehiclePower) || (is_array($vehiclePower) && empty($vehiclePower))) {
            unset($this->VehiclePower);
        } else {
            $this->VehiclePower = $vehiclePower;
        }
        return $this;
    }
    /**
     * Get VehicleSeatsNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleSeatsNumberCondition|null
     */
    public function getVehicleSeatsNumber()
    {
        return isset($this->VehicleSeatsNumber) ? $this->VehicleSeatsNumber : null;
    }
    /**
     * Set VehicleSeatsNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VehicleSeatsNumberCondition $vehicleSeatsNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorConditions
     */
    public function setVehicleSeatsNumber(\Mu4ddi3\Compensa\Webservice\StructType\VehicleSeatsNumberCondition $vehicleSeatsNumber = null)
    {
        if (is_null($vehicleSeatsNumber) || (is_array($vehicleSeatsNumber) && empty($vehicleSeatsNumber))) {
            unset($this->VehicleSeatsNumber);
        } else {
            $this->VehicleSeatsNumber = $vehicleSeatsNumber;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorConditions
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
