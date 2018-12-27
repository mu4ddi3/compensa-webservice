<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MotorPartner StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MotorPartner
 * @subpackage Structs
 */
class MotorPartner extends CompensaPartner
{
    /**
     * The AdditionalPartnerNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $AdditionalPartnerNumber;
    /**
     * The CoOwnerType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CoOwnerType;
    /**
     * The IsAdditionalCoOwner
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAdditionalCoOwner;
    /**
     * The IsCarUser
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsCarUser;
    /**
     * The IsCompensaLeasing
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $IsCompensaLeasing;
    /**
     * The IsInsurer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsInsurer;
    /**
     * The IsNoEmail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsNoEmail;
    /**
     * The LegalPersonType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LegalPersonType;
    /**
     * The PartnerType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PartnerType
     */
    public $PartnerType;
    /**
     * The PkdCodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPkdCode
     */
    public $PkdCodes;
    /**
     * The TaxId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $TaxId;
    /**
     * The VehiclePartnerRole
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\VehiclePartnerRole
     */
    public $VehiclePartnerRole;
    /**
     * Constructor method for MotorPartner
     * @uses MotorPartner::setAdditionalPartnerNumber()
     * @uses MotorPartner::setCoOwnerType()
     * @uses MotorPartner::setIsAdditionalCoOwner()
     * @uses MotorPartner::setIsCarUser()
     * @uses MotorPartner::setIsCompensaLeasing()
     * @uses MotorPartner::setIsInsurer()
     * @uses MotorPartner::setIsNoEmail()
     * @uses MotorPartner::setLegalPersonType()
     * @uses MotorPartner::setPartnerType()
     * @uses MotorPartner::setPkdCodes()
     * @uses MotorPartner::setTaxId()
     * @uses MotorPartner::setVehiclePartnerRole()
     * @param int $additionalPartnerNumber
     * @param string $coOwnerType
     * @param bool $isAdditionalCoOwner
     * @param bool $isCarUser
     * @param bool $isCompensaLeasing
     * @param bool $isInsurer
     * @param bool $isNoEmail
     * @param string $legalPersonType
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PartnerType $partnerType
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPkdCode $pkdCodes
     * @param string $taxId
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VehiclePartnerRole $vehiclePartnerRole
     */
    public function __construct($additionalPartnerNumber = null, $coOwnerType = null, $isAdditionalCoOwner = null, $isCarUser = null, $isCompensaLeasing = null, $isInsurer = null, $isNoEmail = null, $legalPersonType = null, \Mu4ddi3\Compensa\Webservice\StructType\PartnerType $partnerType = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPkdCode $pkdCodes = null, $taxId = null, \Mu4ddi3\Compensa\Webservice\StructType\VehiclePartnerRole $vehiclePartnerRole = null)
    {
        $this
            ->setAdditionalPartnerNumber($additionalPartnerNumber)
            ->setCoOwnerType($coOwnerType)
            ->setIsAdditionalCoOwner($isAdditionalCoOwner)
            ->setIsCarUser($isCarUser)
            ->setIsCompensaLeasing($isCompensaLeasing)
            ->setIsInsurer($isInsurer)
            ->setIsNoEmail($isNoEmail)
            ->setLegalPersonType($legalPersonType)
            ->setPartnerType($partnerType)
            ->setPkdCodes($pkdCodes)
            ->setTaxId($taxId)
            ->setVehiclePartnerRole($vehiclePartnerRole);
    }
    /**
     * Get AdditionalPartnerNumber value
     * @return int|null
     */
    public function getAdditionalPartnerNumber()
    {
        return $this->AdditionalPartnerNumber;
    }
    /**
     * Set AdditionalPartnerNumber value
     * @param int $additionalPartnerNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorPartner
     */
    public function setAdditionalPartnerNumber($additionalPartnerNumber = null)
    {
        // validation for constraint: int
        if (!is_null($additionalPartnerNumber) && !is_numeric($additionalPartnerNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($additionalPartnerNumber)), __LINE__);
        }
        $this->AdditionalPartnerNumber = $additionalPartnerNumber;
        return $this;
    }
    /**
     * Get CoOwnerType value
     * @return string|null
     */
    public function getCoOwnerType()
    {
        return $this->CoOwnerType;
    }
    /**
     * Set CoOwnerType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\CoOwnerType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\CoOwnerType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $coOwnerType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorPartner
     */
    public function setCoOwnerType($coOwnerType = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\CoOwnerType::valueIsValid($coOwnerType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $coOwnerType, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\CoOwnerType::getValidValues())), __LINE__);
        }
        $this->CoOwnerType = $coOwnerType;
        return $this;
    }
    /**
     * Get IsAdditionalCoOwner value
     * @return bool|null
     */
    public function getIsAdditionalCoOwner()
    {
        return $this->IsAdditionalCoOwner;
    }
    /**
     * Set IsAdditionalCoOwner value
     * @param bool $isAdditionalCoOwner
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorPartner
     */
    public function setIsAdditionalCoOwner($isAdditionalCoOwner = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAdditionalCoOwner) && !is_bool($isAdditionalCoOwner)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAdditionalCoOwner)), __LINE__);
        }
        $this->IsAdditionalCoOwner = $isAdditionalCoOwner;
        return $this;
    }
    /**
     * Get IsCarUser value
     * @return bool|null
     */
    public function getIsCarUser()
    {
        return $this->IsCarUser;
    }
    /**
     * Set IsCarUser value
     * @param bool $isCarUser
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorPartner
     */
    public function setIsCarUser($isCarUser = null)
    {
        // validation for constraint: boolean
        if (!is_null($isCarUser) && !is_bool($isCarUser)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isCarUser)), __LINE__);
        }
        $this->IsCarUser = $isCarUser;
        return $this;
    }
    /**
     * Get IsCompensaLeasing value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsCompensaLeasing()
    {
        return isset($this->IsCompensaLeasing) ? $this->IsCompensaLeasing : null;
    }
    /**
     * Set IsCompensaLeasing value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isCompensaLeasing
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorPartner
     */
    public function setIsCompensaLeasing($isCompensaLeasing = null)
    {
        // validation for constraint: boolean
        if (!is_null($isCompensaLeasing) && !is_bool($isCompensaLeasing)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isCompensaLeasing)), __LINE__);
        }
        if (is_null($isCompensaLeasing) || (is_array($isCompensaLeasing) && empty($isCompensaLeasing))) {
            unset($this->IsCompensaLeasing);
        } else {
            $this->IsCompensaLeasing = $isCompensaLeasing;
        }
        return $this;
    }
    /**
     * Get IsInsurer value
     * @return bool|null
     */
    public function getIsInsurer()
    {
        return $this->IsInsurer;
    }
    /**
     * Set IsInsurer value
     * @param bool $isInsurer
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorPartner
     */
    public function setIsInsurer($isInsurer = null)
    {
        // validation for constraint: boolean
        if (!is_null($isInsurer) && !is_bool($isInsurer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isInsurer)), __LINE__);
        }
        $this->IsInsurer = $isInsurer;
        return $this;
    }
    /**
     * Get IsNoEmail value
     * @return bool|null
     */
    public function getIsNoEmail()
    {
        return $this->IsNoEmail;
    }
    /**
     * Set IsNoEmail value
     * @param bool $isNoEmail
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorPartner
     */
    public function setIsNoEmail($isNoEmail = null)
    {
        // validation for constraint: boolean
        if (!is_null($isNoEmail) && !is_bool($isNoEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isNoEmail)), __LINE__);
        }
        $this->IsNoEmail = $isNoEmail;
        return $this;
    }
    /**
     * Get LegalPersonType value
     * @return string|null
     */
    public function getLegalPersonType()
    {
        return $this->LegalPersonType;
    }
    /**
     * Set LegalPersonType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\LegalPersonType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\LegalPersonType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $legalPersonType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorPartner
     */
    public function setLegalPersonType($legalPersonType = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\LegalPersonType::valueIsValid($legalPersonType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $legalPersonType, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\LegalPersonType::getValidValues())), __LINE__);
        }
        $this->LegalPersonType = $legalPersonType;
        return $this;
    }
    /**
     * Get PartnerType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PartnerType|null
     */
    public function getPartnerType()
    {
        return isset($this->PartnerType) ? $this->PartnerType : null;
    }
    /**
     * Set PartnerType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PartnerType $partnerType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorPartner
     */
    public function setPartnerType(\Mu4ddi3\Compensa\Webservice\StructType\PartnerType $partnerType = null)
    {
        if (is_null($partnerType) || (is_array($partnerType) && empty($partnerType))) {
            unset($this->PartnerType);
        } else {
            $this->PartnerType = $partnerType;
        }
        return $this;
    }
    /**
     * Get PkdCodes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPkdCode|null
     */
    public function getPkdCodes()
    {
        return isset($this->PkdCodes) ? $this->PkdCodes : null;
    }
    /**
     * Set PkdCodes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPkdCode $pkdCodes
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorPartner
     */
    public function setPkdCodes(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPkdCode $pkdCodes = null)
    {
        if (is_null($pkdCodes) || (is_array($pkdCodes) && empty($pkdCodes))) {
            unset($this->PkdCodes);
        } else {
            $this->PkdCodes = $pkdCodes;
        }
        return $this;
    }
    /**
     * Get TaxId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTaxId()
    {
        return isset($this->TaxId) ? $this->TaxId : null;
    }
    /**
     * Set TaxId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $taxId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorPartner
     */
    public function setTaxId($taxId = null)
    {
        // validation for constraint: string
        if (!is_null($taxId) && !is_string($taxId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($taxId)), __LINE__);
        }
        if (is_null($taxId) || (is_array($taxId) && empty($taxId))) {
            unset($this->TaxId);
        } else {
            $this->TaxId = $taxId;
        }
        return $this;
    }
    /**
     * Get VehiclePartnerRole value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehiclePartnerRole|null
     */
    public function getVehiclePartnerRole()
    {
        return isset($this->VehiclePartnerRole) ? $this->VehiclePartnerRole : null;
    }
    /**
     * Set VehiclePartnerRole value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VehiclePartnerRole $vehiclePartnerRole
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorPartner
     */
    public function setVehiclePartnerRole(\Mu4ddi3\Compensa\Webservice\StructType\VehiclePartnerRole $vehiclePartnerRole = null)
    {
        if (is_null($vehiclePartnerRole) || (is_array($vehiclePartnerRole) && empty($vehiclePartnerRole))) {
            unset($this->VehiclePartnerRole);
        } else {
            $this->VehiclePartnerRole = $vehiclePartnerRole;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorPartner
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
