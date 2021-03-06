<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetIsBlackRiskWdInsurancePolicyDurationRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetIsBlackRiskWdInsurancePolicyDurationRequest
 * @subpackage Structs
 */
class GetIsBlackRiskWdInsurancePolicyDurationRequest extends GetIsBlackRiskRequest
{
    /**
     * The IsShortTerm
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsShortTerm;
    /**
     * Constructor method for GetIsBlackRiskWdInsurancePolicyDurationRequest
     * @uses GetIsBlackRiskWdInsurancePolicyDurationRequest::setIsShortTerm()
     * @param bool $isShortTerm
     */
    public function __construct($isShortTerm = null)
    {
        $this
            ->setIsShortTerm($isShortTerm);
    }
    /**
     * Get IsShortTerm value
     * @return bool|null
     */
    public function getIsShortTerm()
    {
        return $this->IsShortTerm;
    }
    /**
     * Set IsShortTerm value
     * @param bool $isShortTerm
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetIsBlackRiskWdInsurancePolicyDurationRequest
     */
    public function setIsShortTerm($isShortTerm = null)
    {
        // validation for constraint: boolean
        if (!is_null($isShortTerm) && !is_bool($isShortTerm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isShortTerm)), __LINE__);
        }
        $this->IsShortTerm = $isShortTerm;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetIsBlackRiskWdInsurancePolicyDurationRequest
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
