<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OcContinuationData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:OcContinuationData
 * @subpackage Structs
 */
class OcContinuationData extends AbstractStructBase
{
    /**
     * The IsOcContinued
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsOcContinued;
    /**
     * The PreviousPolicyId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PreviousPolicyId;
    /**
     * The PreviousProductType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PreviousProductType;
    /**
     * Constructor method for OcContinuationData
     * @uses OcContinuationData::setIsOcContinued()
     * @uses OcContinuationData::setPreviousPolicyId()
     * @uses OcContinuationData::setPreviousProductType()
     * @param bool $isOcContinued
     * @param int $previousPolicyId
     * @param string $previousProductType
     */
    public function __construct($isOcContinued = null, $previousPolicyId = null, $previousProductType = null)
    {
        $this
            ->setIsOcContinued($isOcContinued)
            ->setPreviousPolicyId($previousPolicyId)
            ->setPreviousProductType($previousProductType);
    }
    /**
     * Get IsOcContinued value
     * @return bool|null
     */
    public function getIsOcContinued()
    {
        return $this->IsOcContinued;
    }
    /**
     * Set IsOcContinued value
     * @param bool $isOcContinued
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OcContinuationData
     */
    public function setIsOcContinued($isOcContinued = null)
    {
        // validation for constraint: boolean
        if (!is_null($isOcContinued) && !is_bool($isOcContinued)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isOcContinued)), __LINE__);
        }
        $this->IsOcContinued = $isOcContinued;
        return $this;
    }
    /**
     * Get PreviousPolicyId value
     * @return int|null
     */
    public function getPreviousPolicyId()
    {
        return $this->PreviousPolicyId;
    }
    /**
     * Set PreviousPolicyId value
     * @param int $previousPolicyId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OcContinuationData
     */
    public function setPreviousPolicyId($previousPolicyId = null)
    {
        // validation for constraint: int
        if (!is_null($previousPolicyId) && !is_numeric($previousPolicyId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($previousPolicyId)), __LINE__);
        }
        $this->PreviousPolicyId = $previousPolicyId;
        return $this;
    }
    /**
     * Get PreviousProductType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPreviousProductType()
    {
        return isset($this->PreviousProductType) ? $this->PreviousProductType : null;
    }
    /**
     * Set PreviousProductType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $previousProductType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OcContinuationData
     */
    public function setPreviousProductType($previousProductType = null)
    {
        // validation for constraint: string
        if (!is_null($previousProductType) && !is_string($previousProductType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($previousProductType)), __LINE__);
        }
        if (is_null($previousProductType) || (is_array($previousProductType) && empty($previousProductType))) {
            unset($this->PreviousProductType);
        } else {
            $this->PreviousProductType = $previousProductType;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OcContinuationData
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
