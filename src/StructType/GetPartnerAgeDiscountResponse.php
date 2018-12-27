<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPartnerAgeDiscountResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetPartnerAgeDiscountResponse
 * @subpackage Structs
 */
class GetPartnerAgeDiscountResponse extends AbstractStructBase
{
    /**
     * The PartnerAgeDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeDiscount
     */
    public $PartnerAgeDiscount;
    /**
     * Constructor method for GetPartnerAgeDiscountResponse
     * @uses GetPartnerAgeDiscountResponse::setPartnerAgeDiscount()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeDiscount $partnerAgeDiscount
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeDiscount $partnerAgeDiscount = null)
    {
        $this
            ->setPartnerAgeDiscount($partnerAgeDiscount);
    }
    /**
     * Get PartnerAgeDiscount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeDiscount|null
     */
    public function getPartnerAgeDiscount()
    {
        return isset($this->PartnerAgeDiscount) ? $this->PartnerAgeDiscount : null;
    }
    /**
     * Set PartnerAgeDiscount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeDiscount $partnerAgeDiscount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetPartnerAgeDiscountResponse
     */
    public function setPartnerAgeDiscount(\Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeDiscount $partnerAgeDiscount = null)
    {
        if (is_null($partnerAgeDiscount) || (is_array($partnerAgeDiscount) && empty($partnerAgeDiscount))) {
            unset($this->PartnerAgeDiscount);
        } else {
            $this->PartnerAgeDiscount = $partnerAgeDiscount;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetPartnerAgeDiscountResponse
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
