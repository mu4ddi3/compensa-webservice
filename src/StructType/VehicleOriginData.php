<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleOriginData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:VehicleOriginData
 * @subpackage Structs
 */
class VehicleOriginData extends AbstractStructBase
{
    /**
     * The CountryOfOrigin
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CountryOfOrigin;
    /**
     * The IsVehicleImportStatusConfirmed
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsVehicleImportStatusConfirmed;
    /**
     * The PreviousRegistrationNo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PreviousRegistrationNo;
    /**
     * The VehicleImportStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $VehicleImportStatus;
    /**
     * Constructor method for VehicleOriginData
     * @uses VehicleOriginData::setCountryOfOrigin()
     * @uses VehicleOriginData::setIsVehicleImportStatusConfirmed()
     * @uses VehicleOriginData::setPreviousRegistrationNo()
     * @uses VehicleOriginData::setVehicleImportStatus()
     * @param string $countryOfOrigin
     * @param bool $isVehicleImportStatusConfirmed
     * @param string $previousRegistrationNo
     * @param string $vehicleImportStatus
     */
    public function __construct($countryOfOrigin = null, $isVehicleImportStatusConfirmed = null, $previousRegistrationNo = null, $vehicleImportStatus = null)
    {
        $this
            ->setCountryOfOrigin($countryOfOrigin)
            ->setIsVehicleImportStatusConfirmed($isVehicleImportStatusConfirmed)
            ->setPreviousRegistrationNo($previousRegistrationNo)
            ->setVehicleImportStatus($vehicleImportStatus);
    }
    /**
     * Get CountryOfOrigin value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCountryOfOrigin()
    {
        return isset($this->CountryOfOrigin) ? $this->CountryOfOrigin : null;
    }
    /**
     * Set CountryOfOrigin value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $countryOfOrigin
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleOriginData
     */
    public function setCountryOfOrigin($countryOfOrigin = null)
    {
        // validation for constraint: string
        if (!is_null($countryOfOrigin) && !is_string($countryOfOrigin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($countryOfOrigin)), __LINE__);
        }
        if (is_null($countryOfOrigin) || (is_array($countryOfOrigin) && empty($countryOfOrigin))) {
            unset($this->CountryOfOrigin);
        } else {
            $this->CountryOfOrigin = $countryOfOrigin;
        }
        return $this;
    }
    /**
     * Get IsVehicleImportStatusConfirmed value
     * @return bool|null
     */
    public function getIsVehicleImportStatusConfirmed()
    {
        return $this->IsVehicleImportStatusConfirmed;
    }
    /**
     * Set IsVehicleImportStatusConfirmed value
     * @param bool $isVehicleImportStatusConfirmed
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleOriginData
     */
    public function setIsVehicleImportStatusConfirmed($isVehicleImportStatusConfirmed = null)
    {
        // validation for constraint: boolean
        if (!is_null($isVehicleImportStatusConfirmed) && !is_bool($isVehicleImportStatusConfirmed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isVehicleImportStatusConfirmed)), __LINE__);
        }
        $this->IsVehicleImportStatusConfirmed = $isVehicleImportStatusConfirmed;
        return $this;
    }
    /**
     * Get PreviousRegistrationNo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPreviousRegistrationNo()
    {
        return isset($this->PreviousRegistrationNo) ? $this->PreviousRegistrationNo : null;
    }
    /**
     * Set PreviousRegistrationNo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $previousRegistrationNo
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleOriginData
     */
    public function setPreviousRegistrationNo($previousRegistrationNo = null)
    {
        // validation for constraint: string
        if (!is_null($previousRegistrationNo) && !is_string($previousRegistrationNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($previousRegistrationNo)), __LINE__);
        }
        if (is_null($previousRegistrationNo) || (is_array($previousRegistrationNo) && empty($previousRegistrationNo))) {
            unset($this->PreviousRegistrationNo);
        } else {
            $this->PreviousRegistrationNo = $previousRegistrationNo;
        }
        return $this;
    }
    /**
     * Get VehicleImportStatus value
     * @return string|null
     */
    public function getVehicleImportStatus()
    {
        return $this->VehicleImportStatus;
    }
    /**
     * Set VehicleImportStatus value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VehicleImportStatus::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VehicleImportStatus::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $vehicleImportStatus
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleOriginData
     */
    public function setVehicleImportStatus($vehicleImportStatus = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\VehicleImportStatus::valueIsValid($vehicleImportStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $vehicleImportStatus, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\VehicleImportStatus::getValidValues())), __LINE__);
        }
        $this->VehicleImportStatus = $vehicleImportStatus;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleOriginData
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
