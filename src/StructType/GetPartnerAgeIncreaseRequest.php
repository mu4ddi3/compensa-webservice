<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPartnerAgeIncreaseRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetPartnerAgeIncreaseRequest
 * @subpackage Structs
 */
class GetPartnerAgeIncreaseRequest extends AbstractStructBase
{
    /**
     * The IsPreferentialFactor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsPreferentialFactor;
    /**
     * The PartnerAge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PartnerAge;
    /**
     * Constructor method for GetPartnerAgeIncreaseRequest
     * @uses GetPartnerAgeIncreaseRequest::setIsPreferentialFactor()
     * @uses GetPartnerAgeIncreaseRequest::setPartnerAge()
     * @param bool $isPreferentialFactor
     * @param int $partnerAge
     */
    public function __construct($isPreferentialFactor = null, $partnerAge = null)
    {
        $this
            ->setIsPreferentialFactor($isPreferentialFactor)
            ->setPartnerAge($partnerAge);
    }
    /**
     * Get IsPreferentialFactor value
     * @return bool|null
     */
    public function getIsPreferentialFactor()
    {
        return $this->IsPreferentialFactor;
    }
    /**
     * Set IsPreferentialFactor value
     * @param bool $isPreferentialFactor
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetPartnerAgeIncreaseRequest
     */
    public function setIsPreferentialFactor($isPreferentialFactor = null)
    {
        // validation for constraint: boolean
        if (!is_null($isPreferentialFactor) && !is_bool($isPreferentialFactor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isPreferentialFactor)), __LINE__);
        }
        $this->IsPreferentialFactor = $isPreferentialFactor;
        return $this;
    }
    /**
     * Get PartnerAge value
     * @return int|null
     */
    public function getPartnerAge()
    {
        return $this->PartnerAge;
    }
    /**
     * Set PartnerAge value
     * @param int $partnerAge
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetPartnerAgeIncreaseRequest
     */
    public function setPartnerAge($partnerAge = null)
    {
        // validation for constraint: int
        if (!is_null($partnerAge) && !is_numeric($partnerAge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($partnerAge)), __LINE__);
        }
        $this->PartnerAge = $partnerAge;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetPartnerAgeIncreaseRequest
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
