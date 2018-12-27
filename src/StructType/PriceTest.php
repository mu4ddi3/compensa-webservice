<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PriceTest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PriceTest
 * @subpackage Structs
 */
class PriceTest extends AbstractStructBase
{
    /**
     * The CalculationDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CalculationDate;
    /**
     * The Modifier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $Modifier;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Name;
    /**
     * The State
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $State;
    /**
     * The Subject
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Subject;
    /**
     * The SubjectCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SubjectCode;
    /**
     * Constructor method for PriceTest
     * @uses PriceTest::setCalculationDate()
     * @uses PriceTest::setModifier()
     * @uses PriceTest::setName()
     * @uses PriceTest::setState()
     * @uses PriceTest::setSubject()
     * @uses PriceTest::setSubjectCode()
     * @param string $calculationDate
     * @param float $modifier
     * @param string $name
     * @param string $state
     * @param string $subject
     * @param string $subjectCode
     */
    public function __construct($calculationDate = null, $modifier = null, $name = null, $state = null, $subject = null, $subjectCode = null)
    {
        $this
            ->setCalculationDate($calculationDate)
            ->setModifier($modifier)
            ->setName($name)
            ->setState($state)
            ->setSubject($subject)
            ->setSubjectCode($subjectCode);
    }
    /**
     * Get CalculationDate value
     * @return string|null
     */
    public function getCalculationDate()
    {
        return $this->CalculationDate;
    }
    /**
     * Set CalculationDate value
     * @param string $calculationDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTest
     */
    public function setCalculationDate($calculationDate = null)
    {
        // validation for constraint: string
        if (!is_null($calculationDate) && !is_string($calculationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($calculationDate)), __LINE__);
        }
        $this->CalculationDate = $calculationDate;
        return $this;
    }
    /**
     * Get Modifier value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getModifier()
    {
        return isset($this->Modifier) ? $this->Modifier : null;
    }
    /**
     * Set Modifier value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $modifier
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTest
     */
    public function setModifier($modifier = null)
    {
        if (is_null($modifier) || (is_array($modifier) && empty($modifier))) {
            unset($this->Modifier);
        } else {
            $this->Modifier = $modifier;
        }
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTest
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
     * Get State value
     * @return string|null
     */
    public function getState()
    {
        return $this->State;
    }
    /**
     * Set State value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PriceTestStateType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PriceTestStateType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $state
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTest
     */
    public function setState($state = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\PriceTestStateType::valueIsValid($state)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $state, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\PriceTestStateType::getValidValues())), __LINE__);
        }
        $this->State = $state;
        return $this;
    }
    /**
     * Get Subject value
     * @return string|null
     */
    public function getSubject()
    {
        return $this->Subject;
    }
    /**
     * Set Subject value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PriceTestSubjectType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PriceTestSubjectType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $subject
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTest
     */
    public function setSubject($subject = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\PriceTestSubjectType::valueIsValid($subject)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $subject, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\PriceTestSubjectType::getValidValues())), __LINE__);
        }
        $this->Subject = $subject;
        return $this;
    }
    /**
     * Get SubjectCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSubjectCode()
    {
        return isset($this->SubjectCode) ? $this->SubjectCode : null;
    }
    /**
     * Set SubjectCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $subjectCode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTest
     */
    public function setSubjectCode($subjectCode = null)
    {
        // validation for constraint: string
        if (!is_null($subjectCode) && !is_string($subjectCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($subjectCode)), __LINE__);
        }
        if (is_null($subjectCode) || (is_array($subjectCode) && empty($subjectCode))) {
            unset($this->SubjectCode);
        } else {
            $this->SubjectCode = $subjectCode;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTest
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
