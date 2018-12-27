<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetIsBlackRiskDeductibleVariantPolicyDurationRequest
 * StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetIsBlackRiskDeductibleVariantPolicyDurationRequest
 * @subpackage Structs
 */
class GetIsBlackRiskDeductibleVariantPolicyDurationRequest extends GetIsBlackRiskRequest
{
    /**
     * The DeductibleVariant
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DeductibleVariant;
    /**
     * The IsShortTerm
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsShortTerm;
    /**
     * Constructor method for GetIsBlackRiskDeductibleVariantPolicyDurationRequest
     * @uses GetIsBlackRiskDeductibleVariantPolicyDurationRequest::setDeductibleVariant()
     * @uses GetIsBlackRiskDeductibleVariantPolicyDurationRequest::setIsShortTerm()
     * @param string $deductibleVariant
     * @param bool $isShortTerm
     */
    public function __construct($deductibleVariant = null, $isShortTerm = null)
    {
        $this
            ->setDeductibleVariant($deductibleVariant)
            ->setIsShortTerm($isShortTerm);
    }
    /**
     * Get DeductibleVariant value
     * @return string|null
     */
    public function getDeductibleVariant()
    {
        return $this->DeductibleVariant;
    }
    /**
     * Set DeductibleVariant value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\DeductibleVariant::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\DeductibleVariant::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $deductibleVariant
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetIsBlackRiskDeductibleVariantPolicyDurationRequest
     */
    public function setDeductibleVariant($deductibleVariant = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\DeductibleVariant::valueIsValid($deductibleVariant)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $deductibleVariant, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\DeductibleVariant::getValidValues())), __LINE__);
        }
        $this->DeductibleVariant = $deductibleVariant;
        return $this;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetIsBlackRiskDeductibleVariantPolicyDurationRequest
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetIsBlackRiskDeductibleVariantPolicyDurationRequest
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
