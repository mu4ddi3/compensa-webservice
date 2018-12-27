<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAdditionalDiscountResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetAdditionalDiscountResponse
 * @subpackage Structs
 */
class GetAdditionalDiscountResponse extends AbstractStructBase
{
    /**
     * The AdditionalDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscount
     */
    public $AdditionalDiscount;
    /**
     * Constructor method for GetAdditionalDiscountResponse
     * @uses GetAdditionalDiscountResponse::setAdditionalDiscount()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscount $additionalDiscount
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscount $additionalDiscount = null)
    {
        $this
            ->setAdditionalDiscount($additionalDiscount);
    }
    /**
     * Get AdditionalDiscount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscount|null
     */
    public function getAdditionalDiscount()
    {
        return isset($this->AdditionalDiscount) ? $this->AdditionalDiscount : null;
    }
    /**
     * Set AdditionalDiscount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscount $additionalDiscount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetAdditionalDiscountResponse
     */
    public function setAdditionalDiscount(\Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscount $additionalDiscount = null)
    {
        if (is_null($additionalDiscount) || (is_array($additionalDiscount) && empty($additionalDiscount))) {
            unset($this->AdditionalDiscount);
        } else {
            $this->AdditionalDiscount = $additionalDiscount;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetAdditionalDiscountResponse
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
