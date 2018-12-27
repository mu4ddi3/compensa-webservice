<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetContinuationWithoutClaimsDiscountResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetContinuationWithoutClaimsDiscountResponse
 * @subpackage Structs
 */
class GetContinuationWithoutClaimsDiscountResponse extends AbstractStructBase
{
    /**
     * The ContinuationWithoutClaimsDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ContinuationWithoutClaimsDiscount
     */
    public $ContinuationWithoutClaimsDiscount;
    /**
     * Constructor method for GetContinuationWithoutClaimsDiscountResponse
     * @uses GetContinuationWithoutClaimsDiscountResponse::setContinuationWithoutClaimsDiscount()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ContinuationWithoutClaimsDiscount $continuationWithoutClaimsDiscount
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\ContinuationWithoutClaimsDiscount $continuationWithoutClaimsDiscount = null)
    {
        $this
            ->setContinuationWithoutClaimsDiscount($continuationWithoutClaimsDiscount);
    }
    /**
     * Get ContinuationWithoutClaimsDiscount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ContinuationWithoutClaimsDiscount|null
     */
    public function getContinuationWithoutClaimsDiscount()
    {
        return isset($this->ContinuationWithoutClaimsDiscount) ? $this->ContinuationWithoutClaimsDiscount : null;
    }
    /**
     * Set ContinuationWithoutClaimsDiscount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ContinuationWithoutClaimsDiscount $continuationWithoutClaimsDiscount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetContinuationWithoutClaimsDiscountResponse
     */
    public function setContinuationWithoutClaimsDiscount(\Mu4ddi3\Compensa\Webservice\StructType\ContinuationWithoutClaimsDiscount $continuationWithoutClaimsDiscount = null)
    {
        if (is_null($continuationWithoutClaimsDiscount) || (is_array($continuationWithoutClaimsDiscount) && empty($continuationWithoutClaimsDiscount))) {
            unset($this->ContinuationWithoutClaimsDiscount);
        } else {
            $this->ContinuationWithoutClaimsDiscount = $continuationWithoutClaimsDiscount;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetContinuationWithoutClaimsDiscountResponse
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
