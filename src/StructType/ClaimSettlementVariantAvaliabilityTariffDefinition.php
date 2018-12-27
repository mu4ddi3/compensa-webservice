<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClaimSettlementVariantAvaliabilityTariffDefinition
 * StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ClaimSettlementVariantAvaliabilityTariffDefinition
 * @subpackage Structs
 */
class ClaimSettlementVariantAvaliabilityTariffDefinition extends AbstractStructBase
{
    /**
     * The ClaimSettlementVariantAvaliabilityItems
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimSettlementVariantAvaliability
     */
    public $ClaimSettlementVariantAvaliabilityItems;
    /**
     * The RenewalClaimSettlementVariantAvaliabilityItems
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRenewalClaimSettlementVariantAvaliability
     */
    public $RenewalClaimSettlementVariantAvaliabilityItems;
    /**
     * Constructor method for ClaimSettlementVariantAvaliabilityTariffDefinition
     * @uses ClaimSettlementVariantAvaliabilityTariffDefinition::setClaimSettlementVariantAvaliabilityItems()
     * @uses ClaimSettlementVariantAvaliabilityTariffDefinition::setRenewalClaimSettlementVariantAvaliabilityItems()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimSettlementVariantAvaliability $claimSettlementVariantAvaliabilityItems
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRenewalClaimSettlementVariantAvaliability $renewalClaimSettlementVariantAvaliabilityItems
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimSettlementVariantAvaliability $claimSettlementVariantAvaliabilityItems = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRenewalClaimSettlementVariantAvaliability $renewalClaimSettlementVariantAvaliabilityItems = null)
    {
        $this
            ->setClaimSettlementVariantAvaliabilityItems($claimSettlementVariantAvaliabilityItems)
            ->setRenewalClaimSettlementVariantAvaliabilityItems($renewalClaimSettlementVariantAvaliabilityItems);
    }
    /**
     * Get ClaimSettlementVariantAvaliabilityItems value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimSettlementVariantAvaliability|null
     */
    public function getClaimSettlementVariantAvaliabilityItems()
    {
        return isset($this->ClaimSettlementVariantAvaliabilityItems) ? $this->ClaimSettlementVariantAvaliabilityItems : null;
    }
    /**
     * Set ClaimSettlementVariantAvaliabilityItems value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimSettlementVariantAvaliability $claimSettlementVariantAvaliabilityItems
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantAvaliabilityTariffDefinition
     */
    public function setClaimSettlementVariantAvaliabilityItems(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimSettlementVariantAvaliability $claimSettlementVariantAvaliabilityItems = null)
    {
        if (is_null($claimSettlementVariantAvaliabilityItems) || (is_array($claimSettlementVariantAvaliabilityItems) && empty($claimSettlementVariantAvaliabilityItems))) {
            unset($this->ClaimSettlementVariantAvaliabilityItems);
        } else {
            $this->ClaimSettlementVariantAvaliabilityItems = $claimSettlementVariantAvaliabilityItems;
        }
        return $this;
    }
    /**
     * Get RenewalClaimSettlementVariantAvaliabilityItems value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRenewalClaimSettlementVariantAvaliability|null
     */
    public function getRenewalClaimSettlementVariantAvaliabilityItems()
    {
        return isset($this->RenewalClaimSettlementVariantAvaliabilityItems) ? $this->RenewalClaimSettlementVariantAvaliabilityItems : null;
    }
    /**
     * Set RenewalClaimSettlementVariantAvaliabilityItems value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRenewalClaimSettlementVariantAvaliability $renewalClaimSettlementVariantAvaliabilityItems
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantAvaliabilityTariffDefinition
     */
    public function setRenewalClaimSettlementVariantAvaliabilityItems(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRenewalClaimSettlementVariantAvaliability $renewalClaimSettlementVariantAvaliabilityItems = null)
    {
        if (is_null($renewalClaimSettlementVariantAvaliabilityItems) || (is_array($renewalClaimSettlementVariantAvaliabilityItems) && empty($renewalClaimSettlementVariantAvaliabilityItems))) {
            unset($this->RenewalClaimSettlementVariantAvaliabilityItems);
        } else {
            $this->RenewalClaimSettlementVariantAvaliabilityItems = $renewalClaimSettlementVariantAvaliabilityItems;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantAvaliabilityTariffDefinition
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
