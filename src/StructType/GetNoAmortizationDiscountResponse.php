<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNoAmortizationDiscountResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetNoAmortizationDiscountResponse
 * @subpackage Structs
 */
class GetNoAmortizationDiscountResponse extends AbstractStructBase
{
    /**
     * The NoAmortizationDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\NoAmortizationDiscount
     */
    public $NoAmortizationDiscount;
    /**
     * Constructor method for GetNoAmortizationDiscountResponse
     * @uses GetNoAmortizationDiscountResponse::setNoAmortizationDiscount()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\NoAmortizationDiscount $noAmortizationDiscount
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\NoAmortizationDiscount $noAmortizationDiscount = null)
    {
        $this
            ->setNoAmortizationDiscount($noAmortizationDiscount);
    }
    /**
     * Get NoAmortizationDiscount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\NoAmortizationDiscount|null
     */
    public function getNoAmortizationDiscount()
    {
        return isset($this->NoAmortizationDiscount) ? $this->NoAmortizationDiscount : null;
    }
    /**
     * Set NoAmortizationDiscount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\NoAmortizationDiscount $noAmortizationDiscount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetNoAmortizationDiscountResponse
     */
    public function setNoAmortizationDiscount(\Mu4ddi3\Compensa\Webservice\StructType\NoAmortizationDiscount $noAmortizationDiscount = null)
    {
        if (is_null($noAmortizationDiscount) || (is_array($noAmortizationDiscount) && empty($noAmortizationDiscount))) {
            unset($this->NoAmortizationDiscount);
        } else {
            $this->NoAmortizationDiscount = $noAmortizationDiscount;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetNoAmortizationDiscountResponse
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
