<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MotorClause StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MotorClause
 * @subpackage Structs
 */
class MotorClause extends MotorRisk
{
    /**
     * The AppliesFrom
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AppliesFrom;
    /**
     * The ExpiryDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ExpiryDate;
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Id;
    /**
     * The ShortName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ShortName;
    /**
     * The Statements
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClauseStatement
     */
    public $Statements;
    /**
     * The VersisNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $VersisNumber;
    /**
     * Constructor method for MotorClause
     * @uses MotorClause::setAppliesFrom()
     * @uses MotorClause::setExpiryDate()
     * @uses MotorClause::setId()
     * @uses MotorClause::setShortName()
     * @uses MotorClause::setStatements()
     * @uses MotorClause::setVersisNumber()
     * @param string $appliesFrom
     * @param string $expiryDate
     * @param int $id
     * @param string $shortName
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClauseStatement $statements
     * @param int $versisNumber
     */
    public function __construct($appliesFrom = null, $expiryDate = null, $id = null, $shortName = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClauseStatement $statements = null, $versisNumber = null)
    {
        $this
            ->setAppliesFrom($appliesFrom)
            ->setExpiryDate($expiryDate)
            ->setId($id)
            ->setShortName($shortName)
            ->setStatements($statements)
            ->setVersisNumber($versisNumber);
    }
    /**
     * Get AppliesFrom value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAppliesFrom()
    {
        return isset($this->AppliesFrom) ? $this->AppliesFrom : null;
    }
    /**
     * Set AppliesFrom value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $appliesFrom
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorClause
     */
    public function setAppliesFrom($appliesFrom = null)
    {
        // validation for constraint: string
        if (!is_null($appliesFrom) && !is_string($appliesFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($appliesFrom)), __LINE__);
        }
        if (is_null($appliesFrom) || (is_array($appliesFrom) && empty($appliesFrom))) {
            unset($this->AppliesFrom);
        } else {
            $this->AppliesFrom = $appliesFrom;
        }
        return $this;
    }
    /**
     * Get ExpiryDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getExpiryDate()
    {
        return isset($this->ExpiryDate) ? $this->ExpiryDate : null;
    }
    /**
     * Set ExpiryDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $expiryDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorClause
     */
    public function setExpiryDate($expiryDate = null)
    {
        // validation for constraint: string
        if (!is_null($expiryDate) && !is_string($expiryDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expiryDate)), __LINE__);
        }
        if (is_null($expiryDate) || (is_array($expiryDate) && empty($expiryDate))) {
            unset($this->ExpiryDate);
        } else {
            $this->ExpiryDate = $expiryDate;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorClause
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
     * Get ShortName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShortName()
    {
        return isset($this->ShortName) ? $this->ShortName : null;
    }
    /**
     * Set ShortName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $shortName
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorClause
     */
    public function setShortName($shortName = null)
    {
        // validation for constraint: string
        if (!is_null($shortName) && !is_string($shortName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shortName)), __LINE__);
        }
        if (is_null($shortName) || (is_array($shortName) && empty($shortName))) {
            unset($this->ShortName);
        } else {
            $this->ShortName = $shortName;
        }
        return $this;
    }
    /**
     * Get Statements value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClauseStatement|null
     */
    public function getStatements()
    {
        return isset($this->Statements) ? $this->Statements : null;
    }
    /**
     * Set Statements value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClauseStatement $statements
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorClause
     */
    public function setStatements(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClauseStatement $statements = null)
    {
        if (is_null($statements) || (is_array($statements) && empty($statements))) {
            unset($this->Statements);
        } else {
            $this->Statements = $statements;
        }
        return $this;
    }
    /**
     * Get VersisNumber value
     * @return int|null
     */
    public function getVersisNumber()
    {
        return $this->VersisNumber;
    }
    /**
     * Set VersisNumber value
     * @param int $versisNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorClause
     */
    public function setVersisNumber($versisNumber = null)
    {
        // validation for constraint: int
        if (!is_null($versisNumber) && !is_numeric($versisNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($versisNumber)), __LINE__);
        }
        $this->VersisNumber = $versisNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorClause
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
