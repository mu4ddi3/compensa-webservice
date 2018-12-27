<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetContinuationDiscountResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetContinuationDiscountResponse
 * @subpackage Structs
 */
class GetContinuationDiscountResponse extends AbstractStructBase
{
    /**
     * The ContinuationDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ContinuationDiscount
     */
    public $ContinuationDiscount;
    /**
     * Constructor method for GetContinuationDiscountResponse
     * @uses GetContinuationDiscountResponse::setContinuationDiscount()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ContinuationDiscount $continuationDiscount
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\ContinuationDiscount $continuationDiscount = null)
    {
        $this
            ->setContinuationDiscount($continuationDiscount);
    }
    /**
     * Get ContinuationDiscount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ContinuationDiscount|null
     */
    public function getContinuationDiscount()
    {
        return isset($this->ContinuationDiscount) ? $this->ContinuationDiscount : null;
    }
    /**
     * Set ContinuationDiscount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ContinuationDiscount $continuationDiscount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetContinuationDiscountResponse
     */
    public function setContinuationDiscount(\Mu4ddi3\Compensa\Webservice\StructType\ContinuationDiscount $continuationDiscount = null)
    {
        if (is_null($continuationDiscount) || (is_array($continuationDiscount) && empty($continuationDiscount))) {
            unset($this->ContinuationDiscount);
        } else {
            $this->ContinuationDiscount = $continuationDiscount;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetContinuationDiscountResponse
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
