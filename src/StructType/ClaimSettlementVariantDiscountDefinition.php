<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClaimSettlementVariantDiscountDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ClaimSettlementVariantDiscountDefinition
 * @subpackage Structs
 */
class ClaimSettlementVariantDiscountDefinition extends DiscountDefinition
{
    /**
     * The ClaimSettlementVariantDiscountFactors
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimSettlementVariantDiscountFactor
     */
    public $ClaimSettlementVariantDiscountFactors;
    /**
     * Constructor method for ClaimSettlementVariantDiscountDefinition
     * @uses ClaimSettlementVariantDiscountDefinition::setClaimSettlementVariantDiscountFactors()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimSettlementVariantDiscountFactor $claimSettlementVariantDiscountFactors
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimSettlementVariantDiscountFactor $claimSettlementVariantDiscountFactors = null)
    {
        $this
            ->setClaimSettlementVariantDiscountFactors($claimSettlementVariantDiscountFactors);
    }
    /**
     * Get ClaimSettlementVariantDiscountFactors value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimSettlementVariantDiscountFactor|null
     */
    public function getClaimSettlementVariantDiscountFactors()
    {
        return isset($this->ClaimSettlementVariantDiscountFactors) ? $this->ClaimSettlementVariantDiscountFactors : null;
    }
    /**
     * Set ClaimSettlementVariantDiscountFactors value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimSettlementVariantDiscountFactor $claimSettlementVariantDiscountFactors
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantDiscountDefinition
     */
    public function setClaimSettlementVariantDiscountFactors(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimSettlementVariantDiscountFactor $claimSettlementVariantDiscountFactors = null)
    {
        if (is_null($claimSettlementVariantDiscountFactors) || (is_array($claimSettlementVariantDiscountFactors) && empty($claimSettlementVariantDiscountFactors))) {
            unset($this->ClaimSettlementVariantDiscountFactors);
        } else {
            $this->ClaimSettlementVariantDiscountFactors = $claimSettlementVariantDiscountFactors;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantDiscountDefinition
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
