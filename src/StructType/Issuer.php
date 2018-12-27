<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Issuer StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Issuer
 * @subpackage Structs
 */
class Issuer extends Partner
{
    /**
     * The issuerId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $issuerId;
    /**
     * The superiorId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $superiorId;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\UserType
     */
    public $type;
    /**
     * Constructor method for Issuer
     * @uses Issuer::setIssuerId()
     * @uses Issuer::setSuperiorId()
     * @uses Issuer::setType()
     * @param string $issuerId
     * @param string $superiorId
     * @param \Mu4ddi3\Compensa\Webservice\StructType\UserType $type
     */
    public function __construct($issuerId = null, $superiorId = null, \Mu4ddi3\Compensa\Webservice\StructType\UserType $type = null)
    {
        $this
            ->setIssuerId($issuerId)
            ->setSuperiorId($superiorId)
            ->setType($type);
    }
    /**
     * Get issuerId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIssuerId()
    {
        return isset($this->issuerId) ? $this->issuerId : null;
    }
    /**
     * Set issuerId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $issuerId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Issuer
     */
    public function setIssuerId($issuerId = null)
    {
        // validation for constraint: string
        if (!is_null($issuerId) && !is_string($issuerId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($issuerId)), __LINE__);
        }
        if (is_null($issuerId) || (is_array($issuerId) && empty($issuerId))) {
            unset($this->issuerId);
        } else {
            $this->issuerId = $issuerId;
        }
        return $this;
    }
    /**
     * Get superiorId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSuperiorId()
    {
        return isset($this->superiorId) ? $this->superiorId : null;
    }
    /**
     * Set superiorId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $superiorId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Issuer
     */
    public function setSuperiorId($superiorId = null)
    {
        // validation for constraint: string
        if (!is_null($superiorId) && !is_string($superiorId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($superiorId)), __LINE__);
        }
        if (is_null($superiorId) || (is_array($superiorId) && empty($superiorId))) {
            unset($this->superiorId);
        } else {
            $this->superiorId = $superiorId;
        }
        return $this;
    }
    /**
     * Get type value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UserType|null
     */
    public function getType()
    {
        return isset($this->type) ? $this->type : null;
    }
    /**
     * Set type value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\UserType $type
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Issuer
     */
    public function setType(\Mu4ddi3\Compensa\Webservice\StructType\UserType $type = null)
    {
        if (is_null($type) || (is_array($type) && empty($type))) {
            unset($this->type);
        } else {
            $this->type = $type;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Issuer
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
