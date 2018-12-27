<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompensaStatement StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CompensaStatement
 * @subpackage Structs
 */
class CompensaStatement extends AbstractStructBase
{
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Code;
    /**
     * The Content
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Content;
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Id;
    /**
     * The IsAgreed
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $IsAgreed;
    /**
     * The IsObligatory
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsObligatory;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Name;
    /**
     * The NameForValidation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $NameForValidation;
    /**
     * The Number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $Number;
    /**
     * The PartnerRole
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PartnerRole;
    /**
     * The ValidFrom
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ValidFrom;
    /**
     * The ValidTo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ValidTo;
    /**
     * Constructor method for CompensaStatement
     * @uses CompensaStatement::setCode()
     * @uses CompensaStatement::setContent()
     * @uses CompensaStatement::setId()
     * @uses CompensaStatement::setIsAgreed()
     * @uses CompensaStatement::setIsObligatory()
     * @uses CompensaStatement::setName()
     * @uses CompensaStatement::setNameForValidation()
     * @uses CompensaStatement::setNumber()
     * @uses CompensaStatement::setPartnerRole()
     * @uses CompensaStatement::setValidFrom()
     * @uses CompensaStatement::setValidTo()
     * @param string $code
     * @param string $content
     * @param int $id
     * @param bool $isAgreed
     * @param bool $isObligatory
     * @param string $name
     * @param string $nameForValidation
     * @param int $number
     * @param string $partnerRole
     * @param string $validFrom
     * @param string $validTo
     */
    public function __construct($code = null, $content = null, $id = null, $isAgreed = null, $isObligatory = null, $name = null, $nameForValidation = null, $number = null, $partnerRole = null, $validFrom = null, $validTo = null)
    {
        $this
            ->setCode($code)
            ->setContent($content)
            ->setId($id)
            ->setIsAgreed($isAgreed)
            ->setIsObligatory($isObligatory)
            ->setName($name)
            ->setNameForValidation($nameForValidation)
            ->setNumber($number)
            ->setPartnerRole($partnerRole)
            ->setValidFrom($validFrom)
            ->setValidTo($validTo);
    }
    /**
     * Get Code value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCode()
    {
        return isset($this->Code) ? $this->Code : null;
    }
    /**
     * Set Code value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $code
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaStatement
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        if (is_null($code) || (is_array($code) && empty($code))) {
            unset($this->Code);
        } else {
            $this->Code = $code;
        }
        return $this;
    }
    /**
     * Get Content value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getContent()
    {
        return isset($this->Content) ? $this->Content : null;
    }
    /**
     * Set Content value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $content
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaStatement
     */
    public function setContent($content = null)
    {
        // validation for constraint: string
        if (!is_null($content) && !is_string($content)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($content)), __LINE__);
        }
        if (is_null($content) || (is_array($content) && empty($content))) {
            unset($this->Content);
        } else {
            $this->Content = $content;
        }
        return $this;
    }
    /**
     * Get Id value
     * @return int|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param int $id
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaStatement
     */
    public function setId($id = null)
    {
        // validation for constraint: int
        if (!is_null($id) && !is_numeric($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($id)), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
    /**
     * Get IsAgreed value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsAgreed()
    {
        return isset($this->IsAgreed) ? $this->IsAgreed : null;
    }
    /**
     * Set IsAgreed value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isAgreed
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaStatement
     */
    public function setIsAgreed($isAgreed = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAgreed) && !is_bool($isAgreed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAgreed)), __LINE__);
        }
        if (is_null($isAgreed) || (is_array($isAgreed) && empty($isAgreed))) {
            unset($this->IsAgreed);
        } else {
            $this->IsAgreed = $isAgreed;
        }
        return $this;
    }
    /**
     * Get IsObligatory value
     * @return bool|null
     */
    public function getIsObligatory()
    {
        return $this->IsObligatory;
    }
    /**
     * Set IsObligatory value
     * @param bool $isObligatory
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaStatement
     */
    public function setIsObligatory($isObligatory = null)
    {
        // validation for constraint: boolean
        if (!is_null($isObligatory) && !is_bool($isObligatory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isObligatory)), __LINE__);
        }
        $this->IsObligatory = $isObligatory;
        return $this;
    }
    /**
     * Get Name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getName()
    {
        return isset($this->Name) ? $this->Name : null;
    }
    /**
     * Set Name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaStatement
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->Name);
        } else {
            $this->Name = $name;
        }
        return $this;
    }
    /**
     * Get NameForValidation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNameForValidation()
    {
        return isset($this->NameForValidation) ? $this->NameForValidation : null;
    }
    /**
     * Set NameForValidation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $nameForValidation
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaStatement
     */
    public function setNameForValidation($nameForValidation = null)
    {
        // validation for constraint: string
        if (!is_null($nameForValidation) && !is_string($nameForValidation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nameForValidation)), __LINE__);
        }
        if (is_null($nameForValidation) || (is_array($nameForValidation) && empty($nameForValidation))) {
            unset($this->NameForValidation);
        } else {
            $this->NameForValidation = $nameForValidation;
        }
        return $this;
    }
    /**
     * Get Number value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getNumber()
    {
        return isset($this->Number) ? $this->Number : null;
    }
    /**
     * Set Number value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $number
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaStatement
     */
    public function setNumber($number = null)
    {
        // validation for constraint: int
        if (!is_null($number) && !is_numeric($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($number)), __LINE__);
        }
        if (is_null($number) || (is_array($number) && empty($number))) {
            unset($this->Number);
        } else {
            $this->Number = $number;
        }
        return $this;
    }
    /**
     * Get PartnerRole value
     * @return string|null
     */
    public function getPartnerRole()
    {
        return $this->PartnerRole;
    }
    /**
     * Set PartnerRole value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\StatementPartnerRole::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\StatementPartnerRole::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $partnerRole
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaStatement
     */
    public function setPartnerRole($partnerRole = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\StatementPartnerRole::valueIsValid($partnerRole)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $partnerRole, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\StatementPartnerRole::getValidValues())), __LINE__);
        }
        $this->PartnerRole = $partnerRole;
        return $this;
    }
    /**
     * Get ValidFrom value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getValidFrom()
    {
        return isset($this->ValidFrom) ? $this->ValidFrom : null;
    }
    /**
     * Set ValidFrom value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $validFrom
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaStatement
     */
    public function setValidFrom($validFrom = null)
    {
        // validation for constraint: string
        if (!is_null($validFrom) && !is_string($validFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($validFrom)), __LINE__);
        }
        if (is_null($validFrom) || (is_array($validFrom) && empty($validFrom))) {
            unset($this->ValidFrom);
        } else {
            $this->ValidFrom = $validFrom;
        }
        return $this;
    }
    /**
     * Get ValidTo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getValidTo()
    {
        return isset($this->ValidTo) ? $this->ValidTo : null;
    }
    /**
     * Set ValidTo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $validTo
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaStatement
     */
    public function setValidTo($validTo = null)
    {
        // validation for constraint: string
        if (!is_null($validTo) && !is_string($validTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($validTo)), __LINE__);
        }
        if (is_null($validTo) || (is_array($validTo) && empty($validTo))) {
            unset($this->ValidTo);
        } else {
            $this->ValidTo = $validTo;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaStatement
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
