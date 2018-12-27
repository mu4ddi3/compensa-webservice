<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompensaPartner StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CompensaPartner
 * @subpackage Structs
 */
class CompensaPartner extends Partner
{
    /**
     * The IdentificationDocumentName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $IdentificationDocumentName;
    /**
     * The IdentificationDocumentNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $IdentificationDocumentNumber;
    /**
     * The IsResident
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsResident;
    /**
     * The Nationality
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Nationality;
    /**
     * The Nip
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Nip;
    /**
     * The Statements
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCompensaStatement
     */
    public $Statements;
    /**
     * Constructor method for CompensaPartner
     * @uses CompensaPartner::setIdentificationDocumentName()
     * @uses CompensaPartner::setIdentificationDocumentNumber()
     * @uses CompensaPartner::setIsResident()
     * @uses CompensaPartner::setNationality()
     * @uses CompensaPartner::setNip()
     * @uses CompensaPartner::setStatements()
     * @param string $identificationDocumentName
     * @param string $identificationDocumentNumber
     * @param bool $isResident
     * @param string $nationality
     * @param string $nip
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCompensaStatement $statements
     */
    public function __construct($identificationDocumentName = null, $identificationDocumentNumber = null, $isResident = null, $nationality = null, $nip = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCompensaStatement $statements = null)
    {
        $this
            ->setIdentificationDocumentName($identificationDocumentName)
            ->setIdentificationDocumentNumber($identificationDocumentNumber)
            ->setIsResident($isResident)
            ->setNationality($nationality)
            ->setNip($nip)
            ->setStatements($statements);
    }
    /**
     * Get IdentificationDocumentName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIdentificationDocumentName()
    {
        return isset($this->IdentificationDocumentName) ? $this->IdentificationDocumentName : null;
    }
    /**
     * Set IdentificationDocumentName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $identificationDocumentName
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaPartner
     */
    public function setIdentificationDocumentName($identificationDocumentName = null)
    {
        // validation for constraint: string
        if (!is_null($identificationDocumentName) && !is_string($identificationDocumentName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($identificationDocumentName)), __LINE__);
        }
        if (is_null($identificationDocumentName) || (is_array($identificationDocumentName) && empty($identificationDocumentName))) {
            unset($this->IdentificationDocumentName);
        } else {
            $this->IdentificationDocumentName = $identificationDocumentName;
        }
        return $this;
    }
    /**
     * Get IdentificationDocumentNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIdentificationDocumentNumber()
    {
        return isset($this->IdentificationDocumentNumber) ? $this->IdentificationDocumentNumber : null;
    }
    /**
     * Set IdentificationDocumentNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $identificationDocumentNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaPartner
     */
    public function setIdentificationDocumentNumber($identificationDocumentNumber = null)
    {
        // validation for constraint: string
        if (!is_null($identificationDocumentNumber) && !is_string($identificationDocumentNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($identificationDocumentNumber)), __LINE__);
        }
        if (is_null($identificationDocumentNumber) || (is_array($identificationDocumentNumber) && empty($identificationDocumentNumber))) {
            unset($this->IdentificationDocumentNumber);
        } else {
            $this->IdentificationDocumentNumber = $identificationDocumentNumber;
        }
        return $this;
    }
    /**
     * Get IsResident value
     * @return bool|null
     */
    public function getIsResident()
    {
        return $this->IsResident;
    }
    /**
     * Set IsResident value
     * @param bool $isResident
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaPartner
     */
    public function setIsResident($isResident = null)
    {
        // validation for constraint: boolean
        if (!is_null($isResident) && !is_bool($isResident)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isResident)), __LINE__);
        }
        $this->IsResident = $isResident;
        return $this;
    }
    /**
     * Get Nationality value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNationality()
    {
        return isset($this->Nationality) ? $this->Nationality : null;
    }
    /**
     * Set Nationality value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $nationality
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaPartner
     */
    public function setNationality($nationality = null)
    {
        // validation for constraint: string
        if (!is_null($nationality) && !is_string($nationality)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nationality)), __LINE__);
        }
        if (is_null($nationality) || (is_array($nationality) && empty($nationality))) {
            unset($this->Nationality);
        } else {
            $this->Nationality = $nationality;
        }
        return $this;
    }
    /**
     * Get Nip value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNip()
    {
        return isset($this->Nip) ? $this->Nip : null;
    }
    /**
     * Set Nip value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $nip
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaPartner
     */
    public function setNip($nip = null)
    {
        // validation for constraint: string
        if (!is_null($nip) && !is_string($nip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nip)), __LINE__);
        }
        if (is_null($nip) || (is_array($nip) && empty($nip))) {
            unset($this->Nip);
        } else {
            $this->Nip = $nip;
        }
        return $this;
    }
    /**
     * Get Statements value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCompensaStatement|null
     */
    public function getStatements()
    {
        return isset($this->Statements) ? $this->Statements : null;
    }
    /**
     * Set Statements value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCompensaStatement $statements
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaPartner
     */
    public function setStatements(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCompensaStatement $statements = null)
    {
        if (is_null($statements) || (is_array($statements) && empty($statements))) {
            unset($this->Statements);
        } else {
            $this->Statements = $statements;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaPartner
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
