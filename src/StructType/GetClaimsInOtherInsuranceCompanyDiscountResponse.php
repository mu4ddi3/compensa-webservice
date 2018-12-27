<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetClaimsInOtherInsuranceCompanyDiscountResponse
 * StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetClaimsInOtherInsuranceCompanyDiscountResponse
 * @subpackage Structs
 */
class GetClaimsInOtherInsuranceCompanyDiscountResponse extends AbstractStructBase
{
    /**
     * The ClaimsInOtherInsuranceCompanyDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ClaimsInOtherInsuranceCompanyIncrease
     */
    public $ClaimsInOtherInsuranceCompanyDiscount;
    /**
     * Constructor method for GetClaimsInOtherInsuranceCompanyDiscountResponse
     * @uses GetClaimsInOtherInsuranceCompanyDiscountResponse::setClaimsInOtherInsuranceCompanyDiscount()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ClaimsInOtherInsuranceCompanyIncrease $claimsInOtherInsuranceCompanyDiscount
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\ClaimsInOtherInsuranceCompanyIncrease $claimsInOtherInsuranceCompanyDiscount = null)
    {
        $this
            ->setClaimsInOtherInsuranceCompanyDiscount($claimsInOtherInsuranceCompanyDiscount);
    }
    /**
     * Get ClaimsInOtherInsuranceCompanyDiscount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimsInOtherInsuranceCompanyIncrease|null
     */
    public function getClaimsInOtherInsuranceCompanyDiscount()
    {
        return isset($this->ClaimsInOtherInsuranceCompanyDiscount) ? $this->ClaimsInOtherInsuranceCompanyDiscount : null;
    }
    /**
     * Set ClaimsInOtherInsuranceCompanyDiscount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ClaimsInOtherInsuranceCompanyIncrease $claimsInOtherInsuranceCompanyDiscount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetClaimsInOtherInsuranceCompanyDiscountResponse
     */
    public function setClaimsInOtherInsuranceCompanyDiscount(\Mu4ddi3\Compensa\Webservice\StructType\ClaimsInOtherInsuranceCompanyIncrease $claimsInOtherInsuranceCompanyDiscount = null)
    {
        if (is_null($claimsInOtherInsuranceCompanyDiscount) || (is_array($claimsInOtherInsuranceCompanyDiscount) && empty($claimsInOtherInsuranceCompanyDiscount))) {
            unset($this->ClaimsInOtherInsuranceCompanyDiscount);
        } else {
            $this->ClaimsInOtherInsuranceCompanyDiscount = $claimsInOtherInsuranceCompanyDiscount;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetClaimsInOtherInsuranceCompanyDiscountResponse
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
