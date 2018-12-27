<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Message StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Message
 * @subpackage Structs
 */
class Message extends AbstractStructBase
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
     * The Description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Description;
    /**
     * The FieldName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FieldName;
    /**
     * The IsHidden
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsHidden;
    /**
     * The IsRenewalBlocked
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsRenewalBlocked;
    /**
     * The RelatedObjects
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfanyType
     */
    public $RelatedObjects;
    /**
     * The Scope
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Scope;
    /**
     * Constructor method for Message
     * @uses Message::setCode()
     * @uses Message::setDescription()
     * @uses Message::setFieldName()
     * @uses Message::setIsHidden()
     * @uses Message::setIsRenewalBlocked()
     * @uses Message::setRelatedObjects()
     * @uses Message::setScope()
     * @param string $code
     * @param string $description
     * @param string $fieldName
     * @param bool $isHidden
     * @param bool $isRenewalBlocked
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfanyType $relatedObjects
     * @param string $scope
     */
    public function __construct($code = null, $description = null, $fieldName = null, $isHidden = null, $isRenewalBlocked = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfanyType $relatedObjects = null, $scope = null)
    {
        $this
            ->setCode($code)
            ->setDescription($description)
            ->setFieldName($fieldName)
            ->setIsHidden($isHidden)
            ->setIsRenewalBlocked($isRenewalBlocked)
            ->setRelatedObjects($relatedObjects)
            ->setScope($scope);
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Message
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
     * Get Description value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDescription()
    {
        return isset($this->Description) ? $this->Description : null;
    }
    /**
     * Set Description value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $description
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Message
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        if (is_null($description) || (is_array($description) && empty($description))) {
            unset($this->Description);
        } else {
            $this->Description = $description;
        }
        return $this;
    }
    /**
     * Get FieldName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFieldName()
    {
        return isset($this->FieldName) ? $this->FieldName : null;
    }
    /**
     * Set FieldName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fieldName
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Message
     */
    public function setFieldName($fieldName = null)
    {
        // validation for constraint: string
        if (!is_null($fieldName) && !is_string($fieldName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fieldName)), __LINE__);
        }
        if (is_null($fieldName) || (is_array($fieldName) && empty($fieldName))) {
            unset($this->FieldName);
        } else {
            $this->FieldName = $fieldName;
        }
        return $this;
    }
    /**
     * Get IsHidden value
     * @return bool|null
     */
    public function getIsHidden()
    {
        return $this->IsHidden;
    }
    /**
     * Set IsHidden value
     * @param bool $isHidden
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Message
     */
    public function setIsHidden($isHidden = null)
    {
        // validation for constraint: boolean
        if (!is_null($isHidden) && !is_bool($isHidden)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isHidden)), __LINE__);
        }
        $this->IsHidden = $isHidden;
        return $this;
    }
    /**
     * Get IsRenewalBlocked value
     * @return bool|null
     */
    public function getIsRenewalBlocked()
    {
        return $this->IsRenewalBlocked;
    }
    /**
     * Set IsRenewalBlocked value
     * @param bool $isRenewalBlocked
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Message
     */
    public function setIsRenewalBlocked($isRenewalBlocked = null)
    {
        // validation for constraint: boolean
        if (!is_null($isRenewalBlocked) && !is_bool($isRenewalBlocked)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isRenewalBlocked)), __LINE__);
        }
        $this->IsRenewalBlocked = $isRenewalBlocked;
        return $this;
    }
    /**
     * Get RelatedObjects value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfanyType|null
     */
    public function getRelatedObjects()
    {
        return isset($this->RelatedObjects) ? $this->RelatedObjects : null;
    }
    /**
     * Set RelatedObjects value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfanyType $relatedObjects
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Message
     */
    public function setRelatedObjects(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfanyType $relatedObjects = null)
    {
        if (is_null($relatedObjects) || (is_array($relatedObjects) && empty($relatedObjects))) {
            unset($this->RelatedObjects);
        } else {
            $this->RelatedObjects = $relatedObjects;
        }
        return $this;
    }
    /**
     * Get Scope value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getScope()
    {
        return isset($this->Scope) ? $this->Scope : null;
    }
    /**
     * Set Scope value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $scope
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Message
     */
    public function setScope($scope = null)
    {
        // validation for constraint: string
        if (!is_null($scope) && !is_string($scope)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($scope)), __LINE__);
        }
        if (is_null($scope) || (is_array($scope) && empty($scope))) {
            unset($this->Scope);
        } else {
            $this->Scope = $scope;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Message
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
