<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MZPPartner StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MZPPartner
 * @subpackage Structs
 */
class MZPPartner extends AbstractStructBase
{
    /**
     * The BirthDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $BirthDate;
    /**
     * The CompanyCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CompanyCode;
    /**
     * The HasPartnerChanged
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $HasPartnerChanged;
    /**
     * The Hashcode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Hashcode;
    /**
     * The PersonalCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PersonalCode;
    /**
     * The PkdCodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring
     */
    public $PkdCodes;
    /**
     * The PostalCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PostalCode;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PartnerType
     */
    public $Type;
    /**
     * Constructor method for MZPPartner
     * @uses MZPPartner::setBirthDate()
     * @uses MZPPartner::setCompanyCode()
     * @uses MZPPartner::setHasPartnerChanged()
     * @uses MZPPartner::setHashcode()
     * @uses MZPPartner::setPersonalCode()
     * @uses MZPPartner::setPkdCodes()
     * @uses MZPPartner::setPostalCode()
     * @uses MZPPartner::setType()
     * @param string $birthDate
     * @param string $companyCode
     * @param bool $hasPartnerChanged
     * @param string $hashcode
     * @param string $personalCode
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring $pkdCodes
     * @param string $postalCode
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PartnerType $type
     */
    public function __construct($birthDate = null, $companyCode = null, $hasPartnerChanged = null, $hashcode = null, $personalCode = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring $pkdCodes = null, $postalCode = null, \Mu4ddi3\Compensa\Webservice\StructType\PartnerType $type = null)
    {
        $this
            ->setBirthDate($birthDate)
            ->setCompanyCode($companyCode)
            ->setHasPartnerChanged($hasPartnerChanged)
            ->setHashcode($hashcode)
            ->setPersonalCode($personalCode)
            ->setPkdCodes($pkdCodes)
            ->setPostalCode($postalCode)
            ->setType($type);
    }
    /**
     * Get BirthDate value
     * @return string|null
     */
    public function getBirthDate()
    {
        return $this->BirthDate;
    }
    /**
     * Set BirthDate value
     * @param string $birthDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPPartner
     */
    public function setBirthDate($birthDate = null)
    {
        // validation for constraint: string
        if (!is_null($birthDate) && !is_string($birthDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($birthDate)), __LINE__);
        }
        $this->BirthDate = $birthDate;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPPartner
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
     * Get HasPartnerChanged value
     * @return bool|null
     */
    public function getHasPartnerChanged()
    {
        return $this->HasPartnerChanged;
    }
    /**
     * Set HasPartnerChanged value
     * @param bool $hasPartnerChanged
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPPartner
     */
    public function setHasPartnerChanged($hasPartnerChanged = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasPartnerChanged) && !is_bool($hasPartnerChanged)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hasPartnerChanged)), __LINE__);
        }
        $this->HasPartnerChanged = $hasPartnerChanged;
        return $this;
    }
    /**
     * Get Hashcode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getHashcode()
    {
        return isset($this->Hashcode) ? $this->Hashcode : null;
    }
    /**
     * Set Hashcode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $hashcode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPPartner
     */
    public function setHashcode($hashcode = null)
    {
        // validation for constraint: string
        if (!is_null($hashcode) && !is_string($hashcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hashcode)), __LINE__);
        }
        if (is_null($hashcode) || (is_array($hashcode) && empty($hashcode))) {
            unset($this->Hashcode);
        } else {
            $this->Hashcode = $hashcode;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPPartner
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
     * Get PkdCodes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring|null
     */
    public function getPkdCodes()
    {
        return isset($this->PkdCodes) ? $this->PkdCodes : null;
    }
    /**
     * Set PkdCodes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring $pkdCodes
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPPartner
     */
    public function setPkdCodes(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring $pkdCodes = null)
    {
        if (is_null($pkdCodes) || (is_array($pkdCodes) && empty($pkdCodes))) {
            unset($this->PkdCodes);
        } else {
            $this->PkdCodes = $pkdCodes;
        }
        return $this;
    }
    /**
     * Get PostalCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPostalCode()
    {
        return isset($this->PostalCode) ? $this->PostalCode : null;
    }
    /**
     * Set PostalCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $postalCode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPPartner
     */
    public function setPostalCode($postalCode = null)
    {
        // validation for constraint: string
        if (!is_null($postalCode) && !is_string($postalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postalCode)), __LINE__);
        }
        if (is_null($postalCode) || (is_array($postalCode) && empty($postalCode))) {
            unset($this->PostalCode);
        } else {
            $this->PostalCode = $postalCode;
        }
        return $this;
    }
    /**
     * Get Type value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PartnerType|null
     */
    public function getType()
    {
        return isset($this->Type) ? $this->Type : null;
    }
    /**
     * Set Type value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PartnerType $type
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPPartner
     */
    public function setType(\Mu4ddi3\Compensa\Webservice\StructType\PartnerType $type = null)
    {
        if (is_null($type) || (is_array($type) && empty($type))) {
            unset($this->Type);
        } else {
            $this->Type = $type;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPPartner
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
