<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPriceTestModifierRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetPriceTestModifierRequest
 * @subpackage Structs
 */
class GetPriceTestModifierRequest extends AbstractStructBase
{
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
     * The TestObject
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var mixed
     */
    public $TestObject;
    /**
     * Constructor method for GetPriceTestModifierRequest
     * @uses GetPriceTestModifierRequest::setSubject()
     * @uses GetPriceTestModifierRequest::setSubjectCode()
     * @uses GetPriceTestModifierRequest::setTestObject()
     * @param string $subject
     * @param string $subjectCode
     * @param mixed $testObject
     */
    public function __construct($subject = null, $subjectCode = null, $testObject = null)
    {
        $this
            ->setSubject($subject)
            ->setSubjectCode($subjectCode)
            ->setTestObject($testObject);
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetPriceTestModifierRequest
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetPriceTestModifierRequest
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
     * Get TestObject value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return mixed|null
     */
    public function getTestObject()
    {
        return isset($this->TestObject) ? $this->TestObject : null;
    }
    /**
     * Set TestObject value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param mixed $testObject
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetPriceTestModifierRequest
     */
    public function setTestObject($testObject = null)
    {
        if (is_null($testObject) || (is_array($testObject) && empty($testObject))) {
            unset($this->TestObject);
        } else {
            $this->TestObject = $testObject;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetPriceTestModifierRequest
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
