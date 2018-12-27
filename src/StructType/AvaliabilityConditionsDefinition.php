<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AvaliabilityConditionsDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AvaliabilityConditionsDefinition
 * @subpackage Structs
 */
class AvaliabilityConditionsDefinition extends AbstractStructBase
{
    /**
     * The AcBonusMalusAvaliabilityCondition
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\AcBonusMalusAvaliabilityCondition
     */
    public $AcBonusMalusAvaliabilityCondition;
    /**
     * The BrandModelTypeAvailabilityCondition
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\BrandModelTypeAvailabilityCondition
     */
    public $BrandModelTypeAvailabilityCondition;
    /**
     * The DepartmentAvailabilityCondition
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\DepartmentAvailabilityCondition
     */
    public $DepartmentAvailabilityCondition;
    /**
     * The InstallmentsNubmer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInstallmentsNumber
     */
    public $InstallmentsNubmer;
    /**
     * The IssuerAvailabilityCondition
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\IssuerAvailabilityCondition
     */
    public $IssuerAvailabilityCondition;
    /**
     * The OcBonusMalusAvaliabilityCondition
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\OcBonusMalusAvaliabilityCondition
     */
    public $OcBonusMalusAvaliabilityCondition;
    /**
     * The PartnerAgeAvaliabilityCondition
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeAvaliabilityCondition
     */
    public $PartnerAgeAvaliabilityCondition;
    /**
     * The PolicyDurationAvaliabilityCondition
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PolicyDurationAvaliabilityCondition
     */
    public $PolicyDurationAvaliabilityCondition;
    /**
     * The PostalCodeAvailabilityCondition
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PostalCodeAvailabilityCondition
     */
    public $PostalCodeAvailabilityCondition;
    /**
     * The TerritoryUsageAvailabilityCondition
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\TerritoryUsageAvailabilityCondition
     */
    public $TerritoryUsageAvailabilityCondition;
    /**
     * The VehicleAgeAvailabilityCondition
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\VehicleAgeAvailabilityCondition
     */
    public $VehicleAgeAvailabilityCondition;
    /**
     * The VehicleGroupAvaliabilityCondition
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\VehicleGroupAvaliabilityCondition
     */
    public $VehicleGroupAvaliabilityCondition;
    /**
     * The VehicleUsageAvaliabilityCondition
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\VehicleUsageAvaliabilityCondition
     */
    public $VehicleUsageAvaliabilityCondition;
    /**
     * The ZoneAvailabilityCondition
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ZoneAvailabilityCondition
     */
    public $ZoneAvailabilityCondition;
    /**
     * Constructor method for AvaliabilityConditionsDefinition
     * @uses AvaliabilityConditionsDefinition::setAcBonusMalusAvaliabilityCondition()
     * @uses AvaliabilityConditionsDefinition::setBrandModelTypeAvailabilityCondition()
     * @uses AvaliabilityConditionsDefinition::setDepartmentAvailabilityCondition()
     * @uses AvaliabilityConditionsDefinition::setInstallmentsNubmer()
     * @uses AvaliabilityConditionsDefinition::setIssuerAvailabilityCondition()
     * @uses AvaliabilityConditionsDefinition::setOcBonusMalusAvaliabilityCondition()
     * @uses AvaliabilityConditionsDefinition::setPartnerAgeAvaliabilityCondition()
     * @uses AvaliabilityConditionsDefinition::setPolicyDurationAvaliabilityCondition()
     * @uses AvaliabilityConditionsDefinition::setPostalCodeAvailabilityCondition()
     * @uses AvaliabilityConditionsDefinition::setTerritoryUsageAvailabilityCondition()
     * @uses AvaliabilityConditionsDefinition::setVehicleAgeAvailabilityCondition()
     * @uses AvaliabilityConditionsDefinition::setVehicleGroupAvaliabilityCondition()
     * @uses AvaliabilityConditionsDefinition::setVehicleUsageAvaliabilityCondition()
     * @uses AvaliabilityConditionsDefinition::setZoneAvailabilityCondition()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AcBonusMalusAvaliabilityCondition $acBonusMalusAvaliabilityCondition
     * @param \Mu4ddi3\Compensa\Webservice\StructType\BrandModelTypeAvailabilityCondition $brandModelTypeAvailabilityCondition
     * @param \Mu4ddi3\Compensa\Webservice\StructType\DepartmentAvailabilityCondition $departmentAvailabilityCondition
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInstallmentsNumber $installmentsNubmer
     * @param \Mu4ddi3\Compensa\Webservice\StructType\IssuerAvailabilityCondition $issuerAvailabilityCondition
     * @param \Mu4ddi3\Compensa\Webservice\StructType\OcBonusMalusAvaliabilityCondition $ocBonusMalusAvaliabilityCondition
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeAvaliabilityCondition $partnerAgeAvaliabilityCondition
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PolicyDurationAvaliabilityCondition $policyDurationAvaliabilityCondition
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PostalCodeAvailabilityCondition $postalCodeAvailabilityCondition
     * @param \Mu4ddi3\Compensa\Webservice\StructType\TerritoryUsageAvailabilityCondition $territoryUsageAvailabilityCondition
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VehicleAgeAvailabilityCondition $vehicleAgeAvailabilityCondition
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VehicleGroupAvaliabilityCondition $vehicleGroupAvaliabilityCondition
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VehicleUsageAvaliabilityCondition $vehicleUsageAvaliabilityCondition
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ZoneAvailabilityCondition $zoneAvailabilityCondition
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\AcBonusMalusAvaliabilityCondition $acBonusMalusAvaliabilityCondition = null, \Mu4ddi3\Compensa\Webservice\StructType\BrandModelTypeAvailabilityCondition $brandModelTypeAvailabilityCondition = null, \Mu4ddi3\Compensa\Webservice\StructType\DepartmentAvailabilityCondition $departmentAvailabilityCondition = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInstallmentsNumber $installmentsNubmer = null, \Mu4ddi3\Compensa\Webservice\StructType\IssuerAvailabilityCondition $issuerAvailabilityCondition = null, \Mu4ddi3\Compensa\Webservice\StructType\OcBonusMalusAvaliabilityCondition $ocBonusMalusAvaliabilityCondition = null, \Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeAvaliabilityCondition $partnerAgeAvaliabilityCondition = null, \Mu4ddi3\Compensa\Webservice\StructType\PolicyDurationAvaliabilityCondition $policyDurationAvaliabilityCondition = null, \Mu4ddi3\Compensa\Webservice\StructType\PostalCodeAvailabilityCondition $postalCodeAvailabilityCondition = null, \Mu4ddi3\Compensa\Webservice\StructType\TerritoryUsageAvailabilityCondition $territoryUsageAvailabilityCondition = null, \Mu4ddi3\Compensa\Webservice\StructType\VehicleAgeAvailabilityCondition $vehicleAgeAvailabilityCondition = null, \Mu4ddi3\Compensa\Webservice\StructType\VehicleGroupAvaliabilityCondition $vehicleGroupAvaliabilityCondition = null, \Mu4ddi3\Compensa\Webservice\StructType\VehicleUsageAvaliabilityCondition $vehicleUsageAvaliabilityCondition = null, \Mu4ddi3\Compensa\Webservice\StructType\ZoneAvailabilityCondition $zoneAvailabilityCondition = null)
    {
        $this
            ->setAcBonusMalusAvaliabilityCondition($acBonusMalusAvaliabilityCondition)
            ->setBrandModelTypeAvailabilityCondition($brandModelTypeAvailabilityCondition)
            ->setDepartmentAvailabilityCondition($departmentAvailabilityCondition)
            ->setInstallmentsNubmer($installmentsNubmer)
            ->setIssuerAvailabilityCondition($issuerAvailabilityCondition)
            ->setOcBonusMalusAvaliabilityCondition($ocBonusMalusAvaliabilityCondition)
            ->setPartnerAgeAvaliabilityCondition($partnerAgeAvaliabilityCondition)
            ->setPolicyDurationAvaliabilityCondition($policyDurationAvaliabilityCondition)
            ->setPostalCodeAvailabilityCondition($postalCodeAvailabilityCondition)
            ->setTerritoryUsageAvailabilityCondition($territoryUsageAvailabilityCondition)
            ->setVehicleAgeAvailabilityCondition($vehicleAgeAvailabilityCondition)
            ->setVehicleGroupAvaliabilityCondition($vehicleGroupAvaliabilityCondition)
            ->setVehicleUsageAvaliabilityCondition($vehicleUsageAvaliabilityCondition)
            ->setZoneAvailabilityCondition($zoneAvailabilityCondition);
    }
    /**
     * Get AcBonusMalusAvaliabilityCondition value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AcBonusMalusAvaliabilityCondition|null
     */
    public function getAcBonusMalusAvaliabilityCondition()
    {
        return isset($this->AcBonusMalusAvaliabilityCondition) ? $this->AcBonusMalusAvaliabilityCondition : null;
    }
    /**
     * Set AcBonusMalusAvaliabilityCondition value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AcBonusMalusAvaliabilityCondition $acBonusMalusAvaliabilityCondition
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AvaliabilityConditionsDefinition
     */
    public function setAcBonusMalusAvaliabilityCondition(\Mu4ddi3\Compensa\Webservice\StructType\AcBonusMalusAvaliabilityCondition $acBonusMalusAvaliabilityCondition = null)
    {
        if (is_null($acBonusMalusAvaliabilityCondition) || (is_array($acBonusMalusAvaliabilityCondition) && empty($acBonusMalusAvaliabilityCondition))) {
            unset($this->AcBonusMalusAvaliabilityCondition);
        } else {
            $this->AcBonusMalusAvaliabilityCondition = $acBonusMalusAvaliabilityCondition;
        }
        return $this;
    }
    /**
     * Get BrandModelTypeAvailabilityCondition value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BrandModelTypeAvailabilityCondition|null
     */
    public function getBrandModelTypeAvailabilityCondition()
    {
        return isset($this->BrandModelTypeAvailabilityCondition) ? $this->BrandModelTypeAvailabilityCondition : null;
    }
    /**
     * Set BrandModelTypeAvailabilityCondition value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\BrandModelTypeAvailabilityCondition $brandModelTypeAvailabilityCondition
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AvaliabilityConditionsDefinition
     */
    public function setBrandModelTypeAvailabilityCondition(\Mu4ddi3\Compensa\Webservice\StructType\BrandModelTypeAvailabilityCondition $brandModelTypeAvailabilityCondition = null)
    {
        if (is_null($brandModelTypeAvailabilityCondition) || (is_array($brandModelTypeAvailabilityCondition) && empty($brandModelTypeAvailabilityCondition))) {
            unset($this->BrandModelTypeAvailabilityCondition);
        } else {
            $this->BrandModelTypeAvailabilityCondition = $brandModelTypeAvailabilityCondition;
        }
        return $this;
    }
    /**
     * Get DepartmentAvailabilityCondition value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DepartmentAvailabilityCondition|null
     */
    public function getDepartmentAvailabilityCondition()
    {
        return isset($this->DepartmentAvailabilityCondition) ? $this->DepartmentAvailabilityCondition : null;
    }
    /**
     * Set DepartmentAvailabilityCondition value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\DepartmentAvailabilityCondition $departmentAvailabilityCondition
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AvaliabilityConditionsDefinition
     */
    public function setDepartmentAvailabilityCondition(\Mu4ddi3\Compensa\Webservice\StructType\DepartmentAvailabilityCondition $departmentAvailabilityCondition = null)
    {
        if (is_null($departmentAvailabilityCondition) || (is_array($departmentAvailabilityCondition) && empty($departmentAvailabilityCondition))) {
            unset($this->DepartmentAvailabilityCondition);
        } else {
            $this->DepartmentAvailabilityCondition = $departmentAvailabilityCondition;
        }
        return $this;
    }
    /**
     * Get InstallmentsNubmer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInstallmentsNumber|null
     */
    public function getInstallmentsNubmer()
    {
        return isset($this->InstallmentsNubmer) ? $this->InstallmentsNubmer : null;
    }
    /**
     * Set InstallmentsNubmer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInstallmentsNumber $installmentsNubmer
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AvaliabilityConditionsDefinition
     */
    public function setInstallmentsNubmer(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInstallmentsNumber $installmentsNubmer = null)
    {
        if (is_null($installmentsNubmer) || (is_array($installmentsNubmer) && empty($installmentsNubmer))) {
            unset($this->InstallmentsNubmer);
        } else {
            $this->InstallmentsNubmer = $installmentsNubmer;
        }
        return $this;
    }
    /**
     * Get IssuerAvailabilityCondition value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\IssuerAvailabilityCondition|null
     */
    public function getIssuerAvailabilityCondition()
    {
        return isset($this->IssuerAvailabilityCondition) ? $this->IssuerAvailabilityCondition : null;
    }
    /**
     * Set IssuerAvailabilityCondition value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\IssuerAvailabilityCondition $issuerAvailabilityCondition
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AvaliabilityConditionsDefinition
     */
    public function setIssuerAvailabilityCondition(\Mu4ddi3\Compensa\Webservice\StructType\IssuerAvailabilityCondition $issuerAvailabilityCondition = null)
    {
        if (is_null($issuerAvailabilityCondition) || (is_array($issuerAvailabilityCondition) && empty($issuerAvailabilityCondition))) {
            unset($this->IssuerAvailabilityCondition);
        } else {
            $this->IssuerAvailabilityCondition = $issuerAvailabilityCondition;
        }
        return $this;
    }
    /**
     * Get OcBonusMalusAvaliabilityCondition value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OcBonusMalusAvaliabilityCondition|null
     */
    public function getOcBonusMalusAvaliabilityCondition()
    {
        return isset($this->OcBonusMalusAvaliabilityCondition) ? $this->OcBonusMalusAvaliabilityCondition : null;
    }
    /**
     * Set OcBonusMalusAvaliabilityCondition value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\OcBonusMalusAvaliabilityCondition $ocBonusMalusAvaliabilityCondition
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AvaliabilityConditionsDefinition
     */
    public function setOcBonusMalusAvaliabilityCondition(\Mu4ddi3\Compensa\Webservice\StructType\OcBonusMalusAvaliabilityCondition $ocBonusMalusAvaliabilityCondition = null)
    {
        if (is_null($ocBonusMalusAvaliabilityCondition) || (is_array($ocBonusMalusAvaliabilityCondition) && empty($ocBonusMalusAvaliabilityCondition))) {
            unset($this->OcBonusMalusAvaliabilityCondition);
        } else {
            $this->OcBonusMalusAvaliabilityCondition = $ocBonusMalusAvaliabilityCondition;
        }
        return $this;
    }
    /**
     * Get PartnerAgeAvaliabilityCondition value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeAvaliabilityCondition|null
     */
    public function getPartnerAgeAvaliabilityCondition()
    {
        return isset($this->PartnerAgeAvaliabilityCondition) ? $this->PartnerAgeAvaliabilityCondition : null;
    }
    /**
     * Set PartnerAgeAvaliabilityCondition value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeAvaliabilityCondition $partnerAgeAvaliabilityCondition
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AvaliabilityConditionsDefinition
     */
    public function setPartnerAgeAvaliabilityCondition(\Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeAvaliabilityCondition $partnerAgeAvaliabilityCondition = null)
    {
        if (is_null($partnerAgeAvaliabilityCondition) || (is_array($partnerAgeAvaliabilityCondition) && empty($partnerAgeAvaliabilityCondition))) {
            unset($this->PartnerAgeAvaliabilityCondition);
        } else {
            $this->PartnerAgeAvaliabilityCondition = $partnerAgeAvaliabilityCondition;
        }
        return $this;
    }
    /**
     * Get PolicyDurationAvaliabilityCondition value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicyDurationAvaliabilityCondition|null
     */
    public function getPolicyDurationAvaliabilityCondition()
    {
        return isset($this->PolicyDurationAvaliabilityCondition) ? $this->PolicyDurationAvaliabilityCondition : null;
    }
    /**
     * Set PolicyDurationAvaliabilityCondition value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PolicyDurationAvaliabilityCondition $policyDurationAvaliabilityCondition
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AvaliabilityConditionsDefinition
     */
    public function setPolicyDurationAvaliabilityCondition(\Mu4ddi3\Compensa\Webservice\StructType\PolicyDurationAvaliabilityCondition $policyDurationAvaliabilityCondition = null)
    {
        if (is_null($policyDurationAvaliabilityCondition) || (is_array($policyDurationAvaliabilityCondition) && empty($policyDurationAvaliabilityCondition))) {
            unset($this->PolicyDurationAvaliabilityCondition);
        } else {
            $this->PolicyDurationAvaliabilityCondition = $policyDurationAvaliabilityCondition;
        }
        return $this;
    }
    /**
     * Get PostalCodeAvailabilityCondition value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PostalCodeAvailabilityCondition|null
     */
    public function getPostalCodeAvailabilityCondition()
    {
        return isset($this->PostalCodeAvailabilityCondition) ? $this->PostalCodeAvailabilityCondition : null;
    }
    /**
     * Set PostalCodeAvailabilityCondition value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PostalCodeAvailabilityCondition $postalCodeAvailabilityCondition
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AvaliabilityConditionsDefinition
     */
    public function setPostalCodeAvailabilityCondition(\Mu4ddi3\Compensa\Webservice\StructType\PostalCodeAvailabilityCondition $postalCodeAvailabilityCondition = null)
    {
        if (is_null($postalCodeAvailabilityCondition) || (is_array($postalCodeAvailabilityCondition) && empty($postalCodeAvailabilityCondition))) {
            unset($this->PostalCodeAvailabilityCondition);
        } else {
            $this->PostalCodeAvailabilityCondition = $postalCodeAvailabilityCondition;
        }
        return $this;
    }
    /**
     * Get TerritoryUsageAvailabilityCondition value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\TerritoryUsageAvailabilityCondition|null
     */
    public function getTerritoryUsageAvailabilityCondition()
    {
        return isset($this->TerritoryUsageAvailabilityCondition) ? $this->TerritoryUsageAvailabilityCondition : null;
    }
    /**
     * Set TerritoryUsageAvailabilityCondition value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\TerritoryUsageAvailabilityCondition $territoryUsageAvailabilityCondition
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AvaliabilityConditionsDefinition
     */
    public function setTerritoryUsageAvailabilityCondition(\Mu4ddi3\Compensa\Webservice\StructType\TerritoryUsageAvailabilityCondition $territoryUsageAvailabilityCondition = null)
    {
        if (is_null($territoryUsageAvailabilityCondition) || (is_array($territoryUsageAvailabilityCondition) && empty($territoryUsageAvailabilityCondition))) {
            unset($this->TerritoryUsageAvailabilityCondition);
        } else {
            $this->TerritoryUsageAvailabilityCondition = $territoryUsageAvailabilityCondition;
        }
        return $this;
    }
    /**
     * Get VehicleAgeAvailabilityCondition value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleAgeAvailabilityCondition|null
     */
    public function getVehicleAgeAvailabilityCondition()
    {
        return isset($this->VehicleAgeAvailabilityCondition) ? $this->VehicleAgeAvailabilityCondition : null;
    }
    /**
     * Set VehicleAgeAvailabilityCondition value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VehicleAgeAvailabilityCondition $vehicleAgeAvailabilityCondition
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AvaliabilityConditionsDefinition
     */
    public function setVehicleAgeAvailabilityCondition(\Mu4ddi3\Compensa\Webservice\StructType\VehicleAgeAvailabilityCondition $vehicleAgeAvailabilityCondition = null)
    {
        if (is_null($vehicleAgeAvailabilityCondition) || (is_array($vehicleAgeAvailabilityCondition) && empty($vehicleAgeAvailabilityCondition))) {
            unset($this->VehicleAgeAvailabilityCondition);
        } else {
            $this->VehicleAgeAvailabilityCondition = $vehicleAgeAvailabilityCondition;
        }
        return $this;
    }
    /**
     * Get VehicleGroupAvaliabilityCondition value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleGroupAvaliabilityCondition|null
     */
    public function getVehicleGroupAvaliabilityCondition()
    {
        return isset($this->VehicleGroupAvaliabilityCondition) ? $this->VehicleGroupAvaliabilityCondition : null;
    }
    /**
     * Set VehicleGroupAvaliabilityCondition value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VehicleGroupAvaliabilityCondition $vehicleGroupAvaliabilityCondition
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AvaliabilityConditionsDefinition
     */
    public function setVehicleGroupAvaliabilityCondition(\Mu4ddi3\Compensa\Webservice\StructType\VehicleGroupAvaliabilityCondition $vehicleGroupAvaliabilityCondition = null)
    {
        if (is_null($vehicleGroupAvaliabilityCondition) || (is_array($vehicleGroupAvaliabilityCondition) && empty($vehicleGroupAvaliabilityCondition))) {
            unset($this->VehicleGroupAvaliabilityCondition);
        } else {
            $this->VehicleGroupAvaliabilityCondition = $vehicleGroupAvaliabilityCondition;
        }
        return $this;
    }
    /**
     * Get VehicleUsageAvaliabilityCondition value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleUsageAvaliabilityCondition|null
     */
    public function getVehicleUsageAvaliabilityCondition()
    {
        return isset($this->VehicleUsageAvaliabilityCondition) ? $this->VehicleUsageAvaliabilityCondition : null;
    }
    /**
     * Set VehicleUsageAvaliabilityCondition value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VehicleUsageAvaliabilityCondition $vehicleUsageAvaliabilityCondition
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AvaliabilityConditionsDefinition
     */
    public function setVehicleUsageAvaliabilityCondition(\Mu4ddi3\Compensa\Webservice\StructType\VehicleUsageAvaliabilityCondition $vehicleUsageAvaliabilityCondition = null)
    {
        if (is_null($vehicleUsageAvaliabilityCondition) || (is_array($vehicleUsageAvaliabilityCondition) && empty($vehicleUsageAvaliabilityCondition))) {
            unset($this->VehicleUsageAvaliabilityCondition);
        } else {
            $this->VehicleUsageAvaliabilityCondition = $vehicleUsageAvaliabilityCondition;
        }
        return $this;
    }
    /**
     * Get ZoneAvailabilityCondition value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ZoneAvailabilityCondition|null
     */
    public function getZoneAvailabilityCondition()
    {
        return isset($this->ZoneAvailabilityCondition) ? $this->ZoneAvailabilityCondition : null;
    }
    /**
     * Set ZoneAvailabilityCondition value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ZoneAvailabilityCondition $zoneAvailabilityCondition
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AvaliabilityConditionsDefinition
     */
    public function setZoneAvailabilityCondition(\Mu4ddi3\Compensa\Webservice\StructType\ZoneAvailabilityCondition $zoneAvailabilityCondition = null)
    {
        if (is_null($zoneAvailabilityCondition) || (is_array($zoneAvailabilityCondition) && empty($zoneAvailabilityCondition))) {
            unset($this->ZoneAvailabilityCondition);
        } else {
            $this->ZoneAvailabilityCondition = $zoneAvailabilityCondition;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AvaliabilityConditionsDefinition
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
