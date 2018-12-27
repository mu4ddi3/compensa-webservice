<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNationalTransportDiscountResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetNationalTransportDiscountResponse
 * @subpackage Structs
 */
class GetNationalTransportDiscountResponse extends AbstractStructBase
{
    /**
     * The NationalTransportDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\NationalTransportDiscount
     */
    public $NationalTransportDiscount;
    /**
     * Constructor method for GetNationalTransportDiscountResponse
     * @uses GetNationalTransportDiscountResponse::setNationalTransportDiscount()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\NationalTransportDiscount $nationalTransportDiscount
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\NationalTransportDiscount $nationalTransportDiscount = null)
    {
        $this
            ->setNationalTransportDiscount($nationalTransportDiscount);
    }
    /**
     * Get NationalTransportDiscount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\NationalTransportDiscount|null
     */
    public function getNationalTransportDiscount()
    {
        return isset($this->NationalTransportDiscount) ? $this->NationalTransportDiscount : null;
    }
    /**
     * Set NationalTransportDiscount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\NationalTransportDiscount $nationalTransportDiscount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetNationalTransportDiscountResponse
     */
    public function setNationalTransportDiscount(\Mu4ddi3\Compensa\Webservice\StructType\NationalTransportDiscount $nationalTransportDiscount = null)
    {
        if (is_null($nationalTransportDiscount) || (is_array($nationalTransportDiscount) && empty($nationalTransportDiscount))) {
            unset($this->NationalTransportDiscount);
        } else {
            $this->NationalTransportDiscount = $nationalTransportDiscount;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetNationalTransportDiscountResponse
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
