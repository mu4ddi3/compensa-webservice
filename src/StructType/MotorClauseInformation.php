<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MotorClauseInformation StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MotorClauseInformation
 * @subpackage Structs
 */
class MotorClauseInformation extends AbstractStructBase
{
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Id;
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
     * The Premium
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $Premium;
    /**
     * The ShortName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ShortName;
    /**
     * The VersisNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $VersisNumber;
    /**
     * Constructor method for MotorClauseInformation
     * @uses MotorClauseInformation::setId()
     * @uses MotorClauseInformation::setIsObligatory()
     * @uses MotorClauseInformation::setName()
     * @uses MotorClauseInformation::setPremium()
     * @uses MotorClauseInformation::setShortName()
     * @uses MotorClauseInformation::setVersisNumber()
     * @param int $id
     * @param bool $isObligatory
     * @param string $name
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premium
     * @param string $shortName
     * @param int $versisNumber
     */
    public function __construct($id = null, $isObligatory = null, $name = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premium = null, $shortName = null, $versisNumber = null)
    {
        $this
            ->setId($id)
            ->setIsObligatory($isObligatory)
            ->setName($name)
            ->setPremium($premium)
            ->setShortName($shortName)
            ->setVersisNumber($versisNumber);
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorClauseInformation
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorClauseInformation
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorClauseInformation
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
     * Get Premium value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getPremium()
    {
        return isset($this->Premium) ? $this->Premium : null;
    }
    /**
     * Set Premium value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premium
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorClauseInformation
     */
    public function setPremium(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premium = null)
    {
        if (is_null($premium) || (is_array($premium) && empty($premium))) {
            unset($this->Premium);
        } else {
            $this->Premium = $premium;
        }
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorClauseInformation
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorClauseInformation
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorClauseInformation
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
