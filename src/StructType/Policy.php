<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Policy StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Policy
 * @subpackage Structs
 */
class Policy extends AbstractStructBase
{
    /**
     * The Brand
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Brand;
    /**
     * The Claims
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaim
     */
    public $Claims;
    /**
     * The EndDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $EndDate;
    /**
     * The InsuranceCompany
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $InsuranceCompany;
    /**
     * The InsuranceCompanyVersisCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $InsuranceCompanyVersisCode;
    /**
     * The IsForeignerPolicy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsForeignerPolicy;
    /**
     * The ModVariant
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ModVariant;
    /**
     * The Model
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Model;
    /**
     * The MtplVariant
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $MtplVariant;
    /**
     * The PolicyId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PolicyId;
    /**
     * The ProductTypeId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ProductTypeId;
    /**
     * The RegistrationNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $RegistrationNumber;
    /**
     * The ResponsibleInsuranceCompanyVersisCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ResponsibleInsuranceCompanyVersisCode;
    /**
     * The Risk
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Risk;
    /**
     * The StartDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $StartDate;
    /**
     * The UfgVehicleType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $UfgVehicleType;
    /**
     * The VerificationType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $VerificationType;
    /**
     * The VinNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $VinNumber;
    /**
     * Constructor method for Policy
     * @uses Policy::setBrand()
     * @uses Policy::setClaims()
     * @uses Policy::setEndDate()
     * @uses Policy::setInsuranceCompany()
     * @uses Policy::setInsuranceCompanyVersisCode()
     * @uses Policy::setIsForeignerPolicy()
     * @uses Policy::setModVariant()
     * @uses Policy::setModel()
     * @uses Policy::setMtplVariant()
     * @uses Policy::setPolicyId()
     * @uses Policy::setProductTypeId()
     * @uses Policy::setRegistrationNumber()
     * @uses Policy::setResponsibleInsuranceCompanyVersisCode()
     * @uses Policy::setRisk()
     * @uses Policy::setStartDate()
     * @uses Policy::setUfgVehicleType()
     * @uses Policy::setVerificationType()
     * @uses Policy::setVinNumber()
     * @param string $brand
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaim $claims
     * @param string $endDate
     * @param string $insuranceCompany
     * @param string $insuranceCompanyVersisCode
     * @param bool $isForeignerPolicy
     * @param string $modVariant
     * @param string $model
     * @param string $mtplVariant
     * @param string $policyId
     * @param string $productTypeId
     * @param string $registrationNumber
     * @param string $responsibleInsuranceCompanyVersisCode
     * @param string $risk
     * @param string $startDate
     * @param string $ufgVehicleType
     * @param string $verificationType
     * @param string $vinNumber
     */
    public function __construct($brand = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaim $claims = null, $endDate = null, $insuranceCompany = null, $insuranceCompanyVersisCode = null, $isForeignerPolicy = null, $modVariant = null, $model = null, $mtplVariant = null, $policyId = null, $productTypeId = null, $registrationNumber = null, $responsibleInsuranceCompanyVersisCode = null, $risk = null, $startDate = null, $ufgVehicleType = null, $verificationType = null, $vinNumber = null)
    {
        $this
            ->setBrand($brand)
            ->setClaims($claims)
            ->setEndDate($endDate)
            ->setInsuranceCompany($insuranceCompany)
            ->setInsuranceCompanyVersisCode($insuranceCompanyVersisCode)
            ->setIsForeignerPolicy($isForeignerPolicy)
            ->setModVariant($modVariant)
            ->setModel($model)
            ->setMtplVariant($mtplVariant)
            ->setPolicyId($policyId)
            ->setProductTypeId($productTypeId)
            ->setRegistrationNumber($registrationNumber)
            ->setResponsibleInsuranceCompanyVersisCode($responsibleInsuranceCompanyVersisCode)
            ->setRisk($risk)
            ->setStartDate($startDate)
            ->setUfgVehicleType($ufgVehicleType)
            ->setVerificationType($verificationType)
            ->setVinNumber($vinNumber);
    }
    /**
     * Get Brand value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBrand()
    {
        return isset($this->Brand) ? $this->Brand : null;
    }
    /**
     * Set Brand value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $brand
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Policy
     */
    public function setBrand($brand = null)
    {
        // validation for constraint: string
        if (!is_null($brand) && !is_string($brand)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($brand)), __LINE__);
        }
        if (is_null($brand) || (is_array($brand) && empty($brand))) {
            unset($this->Brand);
        } else {
            $this->Brand = $brand;
        }
        return $this;
    }
    /**
     * Get Claims value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaim|null
     */
    public function getClaims()
    {
        return isset($this->Claims) ? $this->Claims : null;
    }
    /**
     * Set Claims value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaim $claims
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Policy
     */
    public function setClaims(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaim $claims = null)
    {
        if (is_null($claims) || (is_array($claims) && empty($claims))) {
            unset($this->Claims);
        } else {
            $this->Claims = $claims;
        }
        return $this;
    }
    /**
     * Get EndDate value
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }
    /**
     * Set EndDate value
     * @param string $endDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Policy
     */
    public function setEndDate($endDate = null)
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endDate)), __LINE__);
        }
        $this->EndDate = $endDate;
        return $this;
    }
    /**
     * Get InsuranceCompany value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInsuranceCompany()
    {
        return isset($this->InsuranceCompany) ? $this->InsuranceCompany : null;
    }
    /**
     * Set InsuranceCompany value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $insuranceCompany
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Policy
     */
    public function setInsuranceCompany($insuranceCompany = null)
    {
        // validation for constraint: string
        if (!is_null($insuranceCompany) && !is_string($insuranceCompany)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($insuranceCompany)), __LINE__);
        }
        if (is_null($insuranceCompany) || (is_array($insuranceCompany) && empty($insuranceCompany))) {
            unset($this->InsuranceCompany);
        } else {
            $this->InsuranceCompany = $insuranceCompany;
        }
        return $this;
    }
    /**
     * Get InsuranceCompanyVersisCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInsuranceCompanyVersisCode()
    {
        return isset($this->InsuranceCompanyVersisCode) ? $this->InsuranceCompanyVersisCode : null;
    }
    /**
     * Set InsuranceCompanyVersisCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $insuranceCompanyVersisCode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Policy
     */
    public function setInsuranceCompanyVersisCode($insuranceCompanyVersisCode = null)
    {
        // validation for constraint: string
        if (!is_null($insuranceCompanyVersisCode) && !is_string($insuranceCompanyVersisCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($insuranceCompanyVersisCode)), __LINE__);
        }
        if (is_null($insuranceCompanyVersisCode) || (is_array($insuranceCompanyVersisCode) && empty($insuranceCompanyVersisCode))) {
            unset($this->InsuranceCompanyVersisCode);
        } else {
            $this->InsuranceCompanyVersisCode = $insuranceCompanyVersisCode;
        }
        return $this;
    }
    /**
     * Get IsForeignerPolicy value
     * @return bool|null
     */
    public function getIsForeignerPolicy()
    {
        return $this->IsForeignerPolicy;
    }
    /**
     * Set IsForeignerPolicy value
     * @param bool $isForeignerPolicy
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Policy
     */
    public function setIsForeignerPolicy($isForeignerPolicy = null)
    {
        // validation for constraint: boolean
        if (!is_null($isForeignerPolicy) && !is_bool($isForeignerPolicy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isForeignerPolicy)), __LINE__);
        }
        $this->IsForeignerPolicy = $isForeignerPolicy;
        return $this;
    }
    /**
     * Get ModVariant value
     * @return string|null
     */
    public function getModVariant()
    {
        return $this->ModVariant;
    }
    /**
     * Set ModVariant value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\ModVariant::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\ModVariant::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $modVariant
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Policy
     */
    public function setModVariant($modVariant = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\ModVariant::valueIsValid($modVariant)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $modVariant, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\ModVariant::getValidValues())), __LINE__);
        }
        $this->ModVariant = $modVariant;
        return $this;
    }
    /**
     * Get Model value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getModel()
    {
        return isset($this->Model) ? $this->Model : null;
    }
    /**
     * Set Model value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $model
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Policy
     */
    public function setModel($model = null)
    {
        // validation for constraint: string
        if (!is_null($model) && !is_string($model)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($model)), __LINE__);
        }
        if (is_null($model) || (is_array($model) && empty($model))) {
            unset($this->Model);
        } else {
            $this->Model = $model;
        }
        return $this;
    }
    /**
     * Get MtplVariant value
     * @return string|null
     */
    public function getMtplVariant()
    {
        return $this->MtplVariant;
    }
    /**
     * Set MtplVariant value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\MtplVariant::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\MtplVariant::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $mtplVariant
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Policy
     */
    public function setMtplVariant($mtplVariant = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\MtplVariant::valueIsValid($mtplVariant)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $mtplVariant, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\MtplVariant::getValidValues())), __LINE__);
        }
        $this->MtplVariant = $mtplVariant;
        return $this;
    }
    /**
     * Get PolicyId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPolicyId()
    {
        return isset($this->PolicyId) ? $this->PolicyId : null;
    }
    /**
     * Set PolicyId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $policyId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Policy
     */
    public function setPolicyId($policyId = null)
    {
        // validation for constraint: string
        if (!is_null($policyId) && !is_string($policyId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($policyId)), __LINE__);
        }
        if (is_null($policyId) || (is_array($policyId) && empty($policyId))) {
            unset($this->PolicyId);
        } else {
            $this->PolicyId = $policyId;
        }
        return $this;
    }
    /**
     * Get ProductTypeId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProductTypeId()
    {
        return isset($this->ProductTypeId) ? $this->ProductTypeId : null;
    }
    /**
     * Set ProductTypeId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $productTypeId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Policy
     */
    public function setProductTypeId($productTypeId = null)
    {
        // validation for constraint: string
        if (!is_null($productTypeId) && !is_string($productTypeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productTypeId)), __LINE__);
        }
        if (is_null($productTypeId) || (is_array($productTypeId) && empty($productTypeId))) {
            unset($this->ProductTypeId);
        } else {
            $this->ProductTypeId = $productTypeId;
        }
        return $this;
    }
    /**
     * Get RegistrationNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRegistrationNumber()
    {
        return isset($this->RegistrationNumber) ? $this->RegistrationNumber : null;
    }
    /**
     * Set RegistrationNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $registrationNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Policy
     */
    public function setRegistrationNumber($registrationNumber = null)
    {
        // validation for constraint: string
        if (!is_null($registrationNumber) && !is_string($registrationNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($registrationNumber)), __LINE__);
        }
        if (is_null($registrationNumber) || (is_array($registrationNumber) && empty($registrationNumber))) {
            unset($this->RegistrationNumber);
        } else {
            $this->RegistrationNumber = $registrationNumber;
        }
        return $this;
    }
    /**
     * Get ResponsibleInsuranceCompanyVersisCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getResponsibleInsuranceCompanyVersisCode()
    {
        return isset($this->ResponsibleInsuranceCompanyVersisCode) ? $this->ResponsibleInsuranceCompanyVersisCode : null;
    }
    /**
     * Set ResponsibleInsuranceCompanyVersisCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $responsibleInsuranceCompanyVersisCode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Policy
     */
    public function setResponsibleInsuranceCompanyVersisCode($responsibleInsuranceCompanyVersisCode = null)
    {
        // validation for constraint: string
        if (!is_null($responsibleInsuranceCompanyVersisCode) && !is_string($responsibleInsuranceCompanyVersisCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($responsibleInsuranceCompanyVersisCode)), __LINE__);
        }
        if (is_null($responsibleInsuranceCompanyVersisCode) || (is_array($responsibleInsuranceCompanyVersisCode) && empty($responsibleInsuranceCompanyVersisCode))) {
            unset($this->ResponsibleInsuranceCompanyVersisCode);
        } else {
            $this->ResponsibleInsuranceCompanyVersisCode = $responsibleInsuranceCompanyVersisCode;
        }
        return $this;
    }
    /**
     * Get Risk value
     * @return string|null
     */
    public function getRisk()
    {
        return $this->Risk;
    }
    /**
     * Set Risk value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\RiskType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\RiskType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $risk
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Policy
     */
    public function setRisk($risk = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\RiskType::valueIsValid($risk)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $risk, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\RiskType::getValidValues())), __LINE__);
        }
        $this->Risk = $risk;
        return $this;
    }
    /**
     * Get StartDate value
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }
    /**
     * Set StartDate value
     * @param string $startDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Policy
     */
    public function setStartDate($startDate = null)
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startDate)), __LINE__);
        }
        $this->StartDate = $startDate;
        return $this;
    }
    /**
     * Get UfgVehicleType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUfgVehicleType()
    {
        return isset($this->UfgVehicleType) ? $this->UfgVehicleType : null;
    }
    /**
     * Set UfgVehicleType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $ufgVehicleType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Policy
     */
    public function setUfgVehicleType($ufgVehicleType = null)
    {
        // validation for constraint: string
        if (!is_null($ufgVehicleType) && !is_string($ufgVehicleType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ufgVehicleType)), __LINE__);
        }
        if (is_null($ufgVehicleType) || (is_array($ufgVehicleType) && empty($ufgVehicleType))) {
            unset($this->UfgVehicleType);
        } else {
            $this->UfgVehicleType = $ufgVehicleType;
        }
        return $this;
    }
    /**
     * Get VerificationType value
     * @return string|null
     */
    public function getVerificationType()
    {
        return $this->VerificationType;
    }
    /**
     * Set VerificationType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VerificationType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VerificationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $verificationType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Policy
     */
    public function setVerificationType($verificationType = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\VerificationType::valueIsValid($verificationType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $verificationType, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\VerificationType::getValidValues())), __LINE__);
        }
        $this->VerificationType = $verificationType;
        return $this;
    }
    /**
     * Get VinNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getVinNumber()
    {
        return isset($this->VinNumber) ? $this->VinNumber : null;
    }
    /**
     * Set VinNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $vinNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Policy
     */
    public function setVinNumber($vinNumber = null)
    {
        // validation for constraint: string
        if (!is_null($vinNumber) && !is_string($vinNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vinNumber)), __LINE__);
        }
        if (is_null($vinNumber) || (is_array($vinNumber) && empty($vinNumber))) {
            unset($this->VinNumber);
        } else {
            $this->VinNumber = $vinNumber;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Policy
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
