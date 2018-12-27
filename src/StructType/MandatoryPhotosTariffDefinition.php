<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MandatoryPhotosTariffDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MandatoryPhotosTariffDefinition
 * @subpackage Structs
 */
class MandatoryPhotosTariffDefinition extends CommonTariffDefinition
{
    /**
     * The AgencyList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring
     */
    public $AgencyList;
    /**
     * The LimitFactorForBonusMalusAC
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $LimitFactorForBonusMalusAC;
    /**
     * The LimitValueForVehicleTotalInsuranceSum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $LimitValueForVehicleTotalInsuranceSum;
    /**
     * The UserLoginList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring
     */
    public $UserLoginList;
    /**
     * The UserLoginListFilterType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $UserLoginListFilterType;
    /**
     * The VehicleGroupList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVehicleGroupEnum
     */
    public $VehicleGroupList;
    /**
     * The VehicleGroupListFilterType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $VehicleGroupListFilterType;
    /**
     * Constructor method for MandatoryPhotosTariffDefinition
     * @uses MandatoryPhotosTariffDefinition::setAgencyList()
     * @uses MandatoryPhotosTariffDefinition::setLimitFactorForBonusMalusAC()
     * @uses MandatoryPhotosTariffDefinition::setLimitValueForVehicleTotalInsuranceSum()
     * @uses MandatoryPhotosTariffDefinition::setUserLoginList()
     * @uses MandatoryPhotosTariffDefinition::setUserLoginListFilterType()
     * @uses MandatoryPhotosTariffDefinition::setVehicleGroupList()
     * @uses MandatoryPhotosTariffDefinition::setVehicleGroupListFilterType()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring $agencyList
     * @param float $limitFactorForBonusMalusAC
     * @param float $limitValueForVehicleTotalInsuranceSum
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring $userLoginList
     * @param string $userLoginListFilterType
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVehicleGroupEnum $vehicleGroupList
     * @param string $vehicleGroupListFilterType
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring $agencyList = null, $limitFactorForBonusMalusAC = null, $limitValueForVehicleTotalInsuranceSum = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring $userLoginList = null, $userLoginListFilterType = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVehicleGroupEnum $vehicleGroupList = null, $vehicleGroupListFilterType = null)
    {
        $this
            ->setAgencyList($agencyList)
            ->setLimitFactorForBonusMalusAC($limitFactorForBonusMalusAC)
            ->setLimitValueForVehicleTotalInsuranceSum($limitValueForVehicleTotalInsuranceSum)
            ->setUserLoginList($userLoginList)
            ->setUserLoginListFilterType($userLoginListFilterType)
            ->setVehicleGroupList($vehicleGroupList)
            ->setVehicleGroupListFilterType($vehicleGroupListFilterType);
    }
    /**
     * Get AgencyList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring|null
     */
    public function getAgencyList()
    {
        return isset($this->AgencyList) ? $this->AgencyList : null;
    }
    /**
     * Set AgencyList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring $agencyList
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MandatoryPhotosTariffDefinition
     */
    public function setAgencyList(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring $agencyList = null)
    {
        if (is_null($agencyList) || (is_array($agencyList) && empty($agencyList))) {
            unset($this->AgencyList);
        } else {
            $this->AgencyList = $agencyList;
        }
        return $this;
    }
    /**
     * Get LimitFactorForBonusMalusAC value
     * @return float|null
     */
    public function getLimitFactorForBonusMalusAC()
    {
        return $this->LimitFactorForBonusMalusAC;
    }
    /**
     * Set LimitFactorForBonusMalusAC value
     * @param float $limitFactorForBonusMalusAC
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MandatoryPhotosTariffDefinition
     */
    public function setLimitFactorForBonusMalusAC($limitFactorForBonusMalusAC = null)
    {
        $this->LimitFactorForBonusMalusAC = $limitFactorForBonusMalusAC;
        return $this;
    }
    /**
     * Get LimitValueForVehicleTotalInsuranceSum value
     * @return float|null
     */
    public function getLimitValueForVehicleTotalInsuranceSum()
    {
        return $this->LimitValueForVehicleTotalInsuranceSum;
    }
    /**
     * Set LimitValueForVehicleTotalInsuranceSum value
     * @param float $limitValueForVehicleTotalInsuranceSum
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MandatoryPhotosTariffDefinition
     */
    public function setLimitValueForVehicleTotalInsuranceSum($limitValueForVehicleTotalInsuranceSum = null)
    {
        $this->LimitValueForVehicleTotalInsuranceSum = $limitValueForVehicleTotalInsuranceSum;
        return $this;
    }
    /**
     * Get UserLoginList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring|null
     */
    public function getUserLoginList()
    {
        return isset($this->UserLoginList) ? $this->UserLoginList : null;
    }
    /**
     * Set UserLoginList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring $userLoginList
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MandatoryPhotosTariffDefinition
     */
    public function setUserLoginList(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring $userLoginList = null)
    {
        if (is_null($userLoginList) || (is_array($userLoginList) && empty($userLoginList))) {
            unset($this->UserLoginList);
        } else {
            $this->UserLoginList = $userLoginList;
        }
        return $this;
    }
    /**
     * Get UserLoginListFilterType value
     * @return string|null
     */
    public function getUserLoginListFilterType()
    {
        return $this->UserLoginListFilterType;
    }
    /**
     * Set UserLoginListFilterType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\ListFilterType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\ListFilterType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $userLoginListFilterType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MandatoryPhotosTariffDefinition
     */
    public function setUserLoginListFilterType($userLoginListFilterType = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\ListFilterType::valueIsValid($userLoginListFilterType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $userLoginListFilterType, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\ListFilterType::getValidValues())), __LINE__);
        }
        $this->UserLoginListFilterType = $userLoginListFilterType;
        return $this;
    }
    /**
     * Get VehicleGroupList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVehicleGroupEnum|null
     */
    public function getVehicleGroupList()
    {
        return isset($this->VehicleGroupList) ? $this->VehicleGroupList : null;
    }
    /**
     * Set VehicleGroupList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVehicleGroupEnum $vehicleGroupList
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MandatoryPhotosTariffDefinition
     */
    public function setVehicleGroupList(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVehicleGroupEnum $vehicleGroupList = null)
    {
        if (is_null($vehicleGroupList) || (is_array($vehicleGroupList) && empty($vehicleGroupList))) {
            unset($this->VehicleGroupList);
        } else {
            $this->VehicleGroupList = $vehicleGroupList;
        }
        return $this;
    }
    /**
     * Get VehicleGroupListFilterType value
     * @return string|null
     */
    public function getVehicleGroupListFilterType()
    {
        return $this->VehicleGroupListFilterType;
    }
    /**
     * Set VehicleGroupListFilterType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\ListFilterType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\ListFilterType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $vehicleGroupListFilterType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MandatoryPhotosTariffDefinition
     */
    public function setVehicleGroupListFilterType($vehicleGroupListFilterType = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\ListFilterType::valueIsValid($vehicleGroupListFilterType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $vehicleGroupListFilterType, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\ListFilterType::getValidValues())), __LINE__);
        }
        $this->VehicleGroupListFilterType = $vehicleGroupListFilterType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MandatoryPhotosTariffDefinition
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
