<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GapInfo StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GapInfo
 * @subpackage Structs
 */
class GapInfo extends AbstractStructBase
{
    /**
     * The PolicyNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PolicyNumber;
    /**
     * The PolicyType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PolicyType;
    /**
     * The Risk
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\GAP
     */
    public $Risk;
    /**
     * Constructor method for GapInfo
     * @uses GapInfo::setPolicyNumber()
     * @uses GapInfo::setPolicyType()
     * @uses GapInfo::setRisk()
     * @param int $policyNumber
     * @param int $policyType
     * @param \Mu4ddi3\Compensa\Webservice\StructType\GAP $risk
     */
    public function __construct($policyNumber = null, $policyType = null, \Mu4ddi3\Compensa\Webservice\StructType\GAP $risk = null)
    {
        $this
            ->setPolicyNumber($policyNumber)
            ->setPolicyType($policyType)
            ->setRisk($risk);
    }
    /**
     * Get PolicyNumber value
     * @return int|null
     */
    public function getPolicyNumber()
    {
        return $this->PolicyNumber;
    }
    /**
     * Set PolicyNumber value
     * @param int $policyNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GapInfo
     */
    public function setPolicyNumber($policyNumber = null)
    {
        // validation for constraint: int
        if (!is_null($policyNumber) && !is_numeric($policyNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($policyNumber)), __LINE__);
        }
        $this->PolicyNumber = $policyNumber;
        return $this;
    }
    /**
     * Get PolicyType value
     * @return int|null
     */
    public function getPolicyType()
    {
        return $this->PolicyType;
    }
    /**
     * Set PolicyType value
     * @param int $policyType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GapInfo
     */
    public function setPolicyType($policyType = null)
    {
        // validation for constraint: int
        if (!is_null($policyType) && !is_numeric($policyType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($policyType)), __LINE__);
        }
        $this->PolicyType = $policyType;
        return $this;
    }
    /**
     * Get Risk value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GAP|null
     */
    public function getRisk()
    {
        return isset($this->Risk) ? $this->Risk : null;
    }
    /**
     * Set Risk value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\GAP $risk
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GapInfo
     */
    public function setRisk(\Mu4ddi3\Compensa\Webservice\StructType\GAP $risk = null)
    {
        if (is_null($risk) || (is_array($risk) && empty($risk))) {
            unset($this->Risk);
        } else {
            $this->Risk = $risk;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GapInfo
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
