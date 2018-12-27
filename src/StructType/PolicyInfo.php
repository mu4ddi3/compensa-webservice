<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PolicyInfo StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PolicyInfo
 * @subpackage Structs
 */
class PolicyInfo extends Policy
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
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimInfo
     */
    public $Claims;
    /**
     * The DateFrom
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DateFrom;
    /**
     * The DateTo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DateTo;
    /**
     * The HasDNA
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $HasDNA;
    /**
     * The HasOUZ
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $HasOUZ;
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
     * The LastCheckedDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LastCheckedDate;
    /**
     * The Model
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Model;
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
     * The Risk
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Risk;
    /**
     * The VinNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $VinNumber;
    /**
     * The ModClaimsCountForInsured
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ModClaimsCountForInsured;
    /**
     * The MtplClaimsCountForInsured
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MtplClaimsCountForInsured;
    /**
     * The PartnerRoleFromContract
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartnerRoleOnContract
     */
    public $PartnerRoleFromContract;
    /**
     * Constructor method for PolicyInfo
     * @uses PolicyInfo::setBrand()
     * @uses PolicyInfo::setClaims()
     * @uses PolicyInfo::setDateFrom()
     * @uses PolicyInfo::setDateTo()
     * @uses PolicyInfo::setHasDNA()
     * @uses PolicyInfo::setHasOUZ()
     * @uses PolicyInfo::setInsuranceCompany()
     * @uses PolicyInfo::setInsuranceCompanyVersisCode()
     * @uses PolicyInfo::setLastCheckedDate()
     * @uses PolicyInfo::setModel()
     * @uses PolicyInfo::setPolicyId()
     * @uses PolicyInfo::setProductTypeId()
     * @uses PolicyInfo::setRegistrationNumber()
     * @uses PolicyInfo::setRisk()
     * @uses PolicyInfo::setVinNumber()
     * @uses PolicyInfo::setModClaimsCountForInsured()
     * @uses PolicyInfo::setMtplClaimsCountForInsured()
     * @uses PolicyInfo::setPartnerRoleFromContract()
     * @param string $brand
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimInfo $claims
     * @param string $dateFrom
     * @param string $dateTo
     * @param bool $hasDNA
     * @param bool $hasOUZ
     * @param string $insuranceCompany
     * @param string $insuranceCompanyVersisCode
     * @param string $lastCheckedDate
     * @param string $model
     * @param string $policyId
     * @param string $productTypeId
     * @param string $registrationNumber
     * @param string $risk
     * @param string $vinNumber
     * @param int $modClaimsCountForInsured
     * @param int $mtplClaimsCountForInsured
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartnerRoleOnContract $partnerRoleFromContract
     */
    public function __construct($brand = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimInfo $claims = null, $dateFrom = null, $dateTo = null, $hasDNA = null, $hasOUZ = null, $insuranceCompany = null, $insuranceCompanyVersisCode = null, $lastCheckedDate = null, $model = null, $policyId = null, $productTypeId = null, $registrationNumber = null, $risk = null, $vinNumber = null, $modClaimsCountForInsured = null, $mtplClaimsCountForInsured = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartnerRoleOnContract $partnerRoleFromContract = null)
    {
        $this
            ->setBrand($brand)
            ->setClaims($claims)
            ->setDateFrom($dateFrom)
            ->setDateTo($dateTo)
            ->setHasDNA($hasDNA)
            ->setHasOUZ($hasOUZ)
            ->setInsuranceCompany($insuranceCompany)
            ->setInsuranceCompanyVersisCode($insuranceCompanyVersisCode)
            ->setLastCheckedDate($lastCheckedDate)
            ->setModel($model)
            ->setPolicyId($policyId)
            ->setProductTypeId($productTypeId)
            ->setRegistrationNumber($registrationNumber)
            ->setRisk($risk)
            ->setVinNumber($vinNumber)
            ->setModClaimsCountForInsured($modClaimsCountForInsured)
            ->setMtplClaimsCountForInsured($mtplClaimsCountForInsured)
            ->setPartnerRoleFromContract($partnerRoleFromContract);
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicyInfo
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
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimInfo|null
     */
    public function getClaims()
    {
        return isset($this->Claims) ? $this->Claims : null;
    }
    /**
     * Set Claims value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimInfo $claims
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicyInfo
     */
    public function setClaims(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimInfo $claims = null)
    {
        if (is_null($claims) || (is_array($claims) && empty($claims))) {
            unset($this->Claims);
        } else {
            $this->Claims = $claims;
        }
        return $this;
    }
    /**
     * Get DateFrom value
     * @return string|null
     */
    public function getDateFrom()
    {
        return $this->DateFrom;
    }
    /**
     * Set DateFrom value
     * @param string $dateFrom
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicyInfo
     */
    public function setDateFrom($dateFrom = null)
    {
        // validation for constraint: string
        if (!is_null($dateFrom) && !is_string($dateFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dateFrom)), __LINE__);
        }
        $this->DateFrom = $dateFrom;
        return $this;
    }
    /**
     * Get DateTo value
     * @return string|null
     */
    public function getDateTo()
    {
        return $this->DateTo;
    }
    /**
     * Set DateTo value
     * @param string $dateTo
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicyInfo
     */
    public function setDateTo($dateTo = null)
    {
        // validation for constraint: string
        if (!is_null($dateTo) && !is_string($dateTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dateTo)), __LINE__);
        }
        $this->DateTo = $dateTo;
        return $this;
    }
    /**
     * Get HasDNA value
     * @return bool|null
     */
    public function getHasDNA()
    {
        return $this->HasDNA;
    }
    /**
     * Set HasDNA value
     * @param bool $hasDNA
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicyInfo
     */
    public function setHasDNA($hasDNA = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasDNA) && !is_bool($hasDNA)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hasDNA)), __LINE__);
        }
        $this->HasDNA = $hasDNA;
        return $this;
    }
    /**
     * Get HasOUZ value
     * @return bool|null
     */
    public function getHasOUZ()
    {
        return $this->HasOUZ;
    }
    /**
     * Set HasOUZ value
     * @param bool $hasOUZ
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicyInfo
     */
    public function setHasOUZ($hasOUZ = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasOUZ) && !is_bool($hasOUZ)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hasOUZ)), __LINE__);
        }
        $this->HasOUZ = $hasOUZ;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicyInfo
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicyInfo
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
     * Get LastCheckedDate value
     * @return string|null
     */
    public function getLastCheckedDate()
    {
        return $this->LastCheckedDate;
    }
    /**
     * Set LastCheckedDate value
     * @param string $lastCheckedDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicyInfo
     */
    public function setLastCheckedDate($lastCheckedDate = null)
    {
        // validation for constraint: string
        if (!is_null($lastCheckedDate) && !is_string($lastCheckedDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastCheckedDate)), __LINE__);
        }
        $this->LastCheckedDate = $lastCheckedDate;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicyInfo
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicyInfo
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicyInfo
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicyInfo
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
     * Get Risk value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRisk()
    {
        return isset($this->Risk) ? $this->Risk : null;
    }
    /**
     * Set Risk value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $risk
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicyInfo
     */
    public function setRisk($risk = null)
    {
        // validation for constraint: string
        if (!is_null($risk) && !is_string($risk)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($risk)), __LINE__);
        }
        if (is_null($risk) || (is_array($risk) && empty($risk))) {
            unset($this->Risk);
        } else {
            $this->Risk = $risk;
        }
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicyInfo
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
     * Get ModClaimsCountForInsured value
     * @return int|null
     */
    public function getModClaimsCountForInsured()
    {
        return $this->ModClaimsCountForInsured;
    }
    /**
     * Set ModClaimsCountForInsured value
     * @param int $modClaimsCountForInsured
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicyInfo
     */
    public function setModClaimsCountForInsured($modClaimsCountForInsured = null)
    {
        // validation for constraint: int
        if (!is_null($modClaimsCountForInsured) && !is_numeric($modClaimsCountForInsured)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($modClaimsCountForInsured)), __LINE__);
        }
        $this->ModClaimsCountForInsured = $modClaimsCountForInsured;
        return $this;
    }
    /**
     * Get MtplClaimsCountForInsured value
     * @return int|null
     */
    public function getMtplClaimsCountForInsured()
    {
        return $this->MtplClaimsCountForInsured;
    }
    /**
     * Set MtplClaimsCountForInsured value
     * @param int $mtplClaimsCountForInsured
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicyInfo
     */
    public function setMtplClaimsCountForInsured($mtplClaimsCountForInsured = null)
    {
        // validation for constraint: int
        if (!is_null($mtplClaimsCountForInsured) && !is_numeric($mtplClaimsCountForInsured)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($mtplClaimsCountForInsured)), __LINE__);
        }
        $this->MtplClaimsCountForInsured = $mtplClaimsCountForInsured;
        return $this;
    }
    /**
     * Get PartnerRoleFromContract value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartnerRoleOnContract|null
     */
    public function getPartnerRoleFromContract()
    {
        return isset($this->PartnerRoleFromContract) ? $this->PartnerRoleFromContract : null;
    }
    /**
     * Set PartnerRoleFromContract value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartnerRoleOnContract $partnerRoleFromContract
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicyInfo
     */
    public function setPartnerRoleFromContract(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartnerRoleOnContract $partnerRoleFromContract = null)
    {
        if (is_null($partnerRoleFromContract) || (is_array($partnerRoleFromContract) && empty($partnerRoleFromContract))) {
            unset($this->PartnerRoleFromContract);
        } else {
            $this->PartnerRoleFromContract = $partnerRoleFromContract;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicyInfo
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
