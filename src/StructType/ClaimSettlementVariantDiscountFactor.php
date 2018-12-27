<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClaimSettlementVariantDiscountFactor StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ClaimSettlementVariantDiscountFactor
 * @subpackage Structs
 */
class ClaimSettlementVariantDiscountFactor extends BaseFactorDefinition
{
    /**
     * The ClaimSettlementVariant
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ClaimSettlementVariant;
    /**
     * Constructor method for ClaimSettlementVariantDiscountFactor
     * @uses ClaimSettlementVariantDiscountFactor::setClaimSettlementVariant()
     * @param string $claimSettlementVariant
     */
    public function __construct($claimSettlementVariant = null)
    {
        $this
            ->setClaimSettlementVariant($claimSettlementVariant);
    }
    /**
     * Get ClaimSettlementVariant value
     * @return string|null
     */
    public function getClaimSettlementVariant()
    {
        return $this->ClaimSettlementVariant;
    }
    /**
     * Set ClaimSettlementVariant value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\ClaimSettlementVariant::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\ClaimSettlementVariant::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $claimSettlementVariant
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantDiscountFactor
     */
    public function setClaimSettlementVariant($claimSettlementVariant = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\ClaimSettlementVariant::valueIsValid($claimSettlementVariant)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $claimSettlementVariant, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\ClaimSettlementVariant::getValidValues())), __LINE__);
        }
        $this->ClaimSettlementVariant = $claimSettlementVariant;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantDiscountFactor
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
