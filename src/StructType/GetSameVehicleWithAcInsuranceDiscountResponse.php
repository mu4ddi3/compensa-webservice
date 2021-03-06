<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSameVehicleWithAcInsuranceDiscountResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetSameVehicleWithAcInsuranceDiscountResponse
 * @subpackage Structs
 */
class GetSameVehicleWithAcInsuranceDiscountResponse extends AbstractStructBase
{
    /**
     * The Discount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\SameVehicleWithAcInsuraceDiscount
     */
    public $Discount;
    /**
     * Constructor method for GetSameVehicleWithAcInsuranceDiscountResponse
     * @uses GetSameVehicleWithAcInsuranceDiscountResponse::setDiscount()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\SameVehicleWithAcInsuraceDiscount $discount
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\SameVehicleWithAcInsuraceDiscount $discount = null)
    {
        $this
            ->setDiscount($discount);
    }
    /**
     * Get Discount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\SameVehicleWithAcInsuraceDiscount|null
     */
    public function getDiscount()
    {
        return isset($this->Discount) ? $this->Discount : null;
    }
    /**
     * Set Discount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\SameVehicleWithAcInsuraceDiscount $discount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetSameVehicleWithAcInsuranceDiscountResponse
     */
    public function setDiscount(\Mu4ddi3\Compensa\Webservice\StructType\SameVehicleWithAcInsuraceDiscount $discount = null)
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetSameVehicleWithAcInsuranceDiscountResponse
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
