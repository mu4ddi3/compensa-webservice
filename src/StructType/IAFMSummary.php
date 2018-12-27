<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IAFMSummary StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:IAFMSummary
 * @subpackage Structs
 */
class IAFMSummary extends AbstractStructBase
{
    /**
     * The Hashcode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Hashcode;
    /**
     * The QueriedEntities
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfQueriedEntity
     */
    public $QueriedEntities;
    /**
     * The SessionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SessionId;
    /**
     * Constructor method for IAFMSummary
     * @uses IAFMSummary::setHashcode()
     * @uses IAFMSummary::setQueriedEntities()
     * @uses IAFMSummary::setSessionId()
     * @param string $hashcode
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfQueriedEntity $queriedEntities
     * @param string $sessionId
     */
    public function __construct($hashcode = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfQueriedEntity $queriedEntities = null, $sessionId = null)
    {
        $this
            ->setHashcode($hashcode)
            ->setQueriedEntities($queriedEntities)
            ->setSessionId($sessionId);
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\IAFMSummary
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
     * Get QueriedEntities value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfQueriedEntity|null
     */
    public function getQueriedEntities()
    {
        return isset($this->QueriedEntities) ? $this->QueriedEntities : null;
    }
    /**
     * Set QueriedEntities value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfQueriedEntity $queriedEntities
     * @return \Mu4ddi3\Compensa\Webservice\StructType\IAFMSummary
     */
    public function setQueriedEntities(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfQueriedEntity $queriedEntities = null)
    {
        if (is_null($queriedEntities) || (is_array($queriedEntities) && empty($queriedEntities))) {
            unset($this->QueriedEntities);
        } else {
            $this->QueriedEntities = $queriedEntities;
        }
        return $this;
    }
    /**
     * Get SessionId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSessionId()
    {
        return isset($this->SessionId) ? $this->SessionId : null;
    }
    /**
     * Set SessionId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sessionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\IAFMSummary
     */
    public function setSessionId($sessionId = null)
    {
        // validation for constraint: string
        if (!is_null($sessionId) && !is_string($sessionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sessionId)), __LINE__);
        }
        if (is_null($sessionId) || (is_array($sessionId) && empty($sessionId))) {
            unset($this->SessionId);
        } else {
            $this->SessionId = $sessionId;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\IAFMSummary
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
