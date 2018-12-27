<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FillChosenDiscountDataResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:FillChosenDiscountDataResponse
 * @subpackage Structs
 */
class FillChosenDiscountDataResponse extends ResponseBase
{
    /**
     * The Discount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\CompensaDiscount
     */
    public $Discount;
    /**
     * Constructor method for FillChosenDiscountDataResponse
     * @uses FillChosenDiscountDataResponse::setDiscount()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CompensaDiscount $discount
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\CompensaDiscount $discount = null)
    {
        $this
            ->setDiscount($discount);
    }
    /**
     * Get Discount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaDiscount|null
     */
    public function getDiscount()
    {
        return isset($this->Discount) ? $this->Discount : null;
    }
    /**
     * Set Discount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CompensaDiscount $discount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\FillChosenDiscountDataResponse
     */
    public function setDiscount(\Mu4ddi3\Compensa\Webservice\StructType\CompensaDiscount $discount = null)
    {
        if (is_null($discount) || (is_array($discount) && empty($discount))) {
            unset($this->Discount);
        } else {
            $this->Discount = $discount;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\FillChosenDiscountDataResponse
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
