<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QueriedEntity StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:QueriedEntity
 * @subpackage Structs
 */
class QueriedEntity extends AbstractStructBase
{
    /**
     * The AuthorizationCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AuthorizationCode;
    /**
     * The CompanyCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CompanyCode;
    /**
     * The IsUpToDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsUpToDate;
    /**
     * The PartnerName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PartnerName;
    /**
     * The PartnerSurname
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PartnerSurname;
    /**
     * The PersonalCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PersonalCode;
    /**
     * The ProductTypeName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ProductTypeName;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\IAFMStatus
     */
    public $Status;
    /**
     * The StatusForSerialization
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $StatusForSerialization;
    /**
     * Constructor method for QueriedEntity
     * @uses QueriedEntity::setAuthorizationCode()
     * @uses QueriedEntity::setCompanyCode()
     * @uses QueriedEntity::setIsUpToDate()
     * @uses QueriedEntity::setPartnerName()
     * @uses QueriedEntity::setPartnerSurname()
     * @uses QueriedEntity::setPersonalCode()
     * @uses QueriedEntity::setProductTypeName()
     * @uses QueriedEntity::setStatus()
     * @uses QueriedEntity::setStatusForSerialization()
     * @param string $authorizationCode
     * @param string $companyCode
     * @param bool $isUpToDate
     * @param string $partnerName
     * @param string $partnerSurname
     * @param string $personalCode
     * @param string $productTypeName
     * @param \Mu4ddi3\Compensa\Webservice\StructType\IAFMStatus $status
     * @param int $statusForSerialization
     */
    public function __construct($authorizationCode = null, $companyCode = null, $isUpToDate = null, $partnerName = null, $partnerSurname = null, $personalCode = null, $productTypeName = null, \Mu4ddi3\Compensa\Webservice\StructType\IAFMStatus $status = null, $statusForSerialization = null)
    {
        $this
            ->setAuthorizationCode($authorizationCode)
            ->setCompanyCode($companyCode)
            ->setIsUpToDate($isUpToDate)
            ->setPartnerName($partnerName)
            ->setPartnerSurname($partnerSurname)
            ->setPersonalCode($personalCode)
            ->setProductTypeName($productTypeName)
            ->setStatus($status)
            ->setStatusForSerialization($statusForSerialization);
    }
    /**
     * Get AuthorizationCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAuthorizationCode()
    {
        return isset($this->AuthorizationCode) ? $this->AuthorizationCode : null;
    }
    /**
     * Set AuthorizationCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $authorizationCode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\QueriedEntity
     */
    public function setAuthorizationCode($authorizationCode = null)
    {
        // validation for constraint: string
        if (!is_null($authorizationCode) && !is_string($authorizationCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($authorizationCode)), __LINE__);
        }
        if (is_null($authorizationCode) || (is_array($authorizationCode) && empty($authorizationCode))) {
            unset($this->AuthorizationCode);
        } else {
            $this->AuthorizationCode = $authorizationCode;
        }
        return $this;
    }
    /**
     * Get CompanyCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCompanyCode()
    {
        return isset($this->CompanyCode) ? $this->CompanyCode : null;
    }
    /**
     * Set CompanyCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $companyCode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\QueriedEntity
     */
    public function setCompanyCode($companyCode = null)
    {
        // validation for constraint: string
        if (!is_null($companyCode) && !is_string($companyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($companyCode)), __LINE__);
        }
        if (is_null($companyCode) || (is_array($companyCode) && empty($companyCode))) {
            unset($this->CompanyCode);
        } else {
            $this->CompanyCode = $companyCode;
        }
        return $this;
    }
    /**
     * Get IsUpToDate value
     * @return bool|null
     */
    public function getIsUpToDate()
    {
        return $this->IsUpToDate;
    }
    /**
     * Set IsUpToDate value
     * @param bool $isUpToDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\QueriedEntity
     */
    public function setIsUpToDate($isUpToDate = null)
    {
        // validation for constraint: boolean
        if (!is_null($isUpToDate) && !is_bool($isUpToDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isUpToDate)), __LINE__);
        }
        $this->IsUpToDate = $isUpToDate;
        return $this;
    }
    /**
     * Get PartnerName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPartnerName()
    {
        return isset($this->PartnerName) ? $this->PartnerName : null;
    }
    /**
     * Set PartnerName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $partnerName
     * @return \Mu4ddi3\Compensa\Webservice\StructType\QueriedEntity
     */
    public function setPartnerName($partnerName = null)
    {
        // validation for constraint: string
        if (!is_null($partnerName) && !is_string($partnerName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($partnerName)), __LINE__);
        }
        if (is_null($partnerName) || (is_array($partnerName) && empty($partnerName))) {
            unset($this->PartnerName);
        } else {
            $this->PartnerName = $partnerName;
        }
        return $this;
    }
    /**
     * Get PartnerSurname value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPartnerSurname()
    {
        return isset($this->PartnerSurname) ? $this->PartnerSurname : null;
    }
    /**
     * Set PartnerSurname value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $partnerSurname
     * @return \Mu4ddi3\Compensa\Webservice\StructType\QueriedEntity
     */
    public function setPartnerSurname($partnerSurname = null)
    {
        // validation for constraint: string
        if (!is_null($partnerSurname) && !is_string($partnerSurname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($partnerSurname)), __LINE__);
        }
        if (is_null($partnerSurname) || (is_array($partnerSurname) && empty($partnerSurname))) {
            unset($this->PartnerSurname);
        } else {
            $this->PartnerSurname = $partnerSurname;
        }
        return $this;
    }
    /**
     * Get PersonalCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPersonalCode()
    {
        return isset($this->PersonalCode) ? $this->PersonalCode : null;
    }
    /**
     * Set PersonalCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $personalCode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\QueriedEntity
     */
    public function setPersonalCode($personalCode = null)
    {
        // validation for constraint: string
        if (!is_null($personalCode) && !is_string($personalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($personalCode)), __LINE__);
        }
        if (is_null($personalCode) || (is_array($personalCode) && empty($personalCode))) {
            unset($this->PersonalCode);
        } else {
            $this->PersonalCode = $personalCode;
        }
        return $this;
    }
    /**
     * Get ProductTypeName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProductTypeName()
    {
        return isset($this->ProductTypeName) ? $this->ProductTypeName : null;
    }
    /**
     * Set ProductTypeName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $productTypeName
     * @return \Mu4ddi3\Compensa\Webservice\StructType\QueriedEntity
     */
    public function setProductTypeName($productTypeName = null)
    {
        // validation for constraint: string
        if (!is_null($productTypeName) && !is_string($productTypeName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productTypeName)), __LINE__);
        }
        if (is_null($productTypeName) || (is_array($productTypeName) && empty($productTypeName))) {
            unset($this->ProductTypeName);
        } else {
            $this->ProductTypeName = $productTypeName;
        }
        return $this;
    }
    /**
     * Get Status value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\IAFMStatus|null
     */
    public function getStatus()
    {
        return isset($this->Status) ? $this->Status : null;
    }
    /**
     * Set Status value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\IAFMStatus $status
     * @return \Mu4ddi3\Compensa\Webservice\StructType\QueriedEntity
     */
    public function setStatus(\Mu4ddi3\Compensa\Webservice\StructType\IAFMStatus $status = null)
    {
        if (is_null($status) || (is_array($status) && empty($status))) {
            unset($this->Status);
        } else {
            $this->Status = $status;
        }
        return $this;
    }
    /**
     * Get StatusForSerialization value
     * @return int|null
     */
    public function getStatusForSerialization()
    {
        return $this->StatusForSerialization;
    }
    /**
     * Set StatusForSerialization value
     * @param int $statusForSerialization
     * @return \Mu4ddi3\Compensa\Webservice\StructType\QueriedEntity
     */
    public function setStatusForSerialization($statusForSerialization = null)
    {
        // validation for constraint: int
        if (!is_null($statusForSerialization) && !is_numeric($statusForSerialization)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($statusForSerialization)), __LINE__);
        }
        $this->StatusForSerialization = $statusForSerialization;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\QueriedEntity
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
