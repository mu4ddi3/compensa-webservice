<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUsaVehicleDiscountResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetUsaVehicleDiscountResponse
 * @subpackage Structs
 */
class GetUsaVehicleDiscountResponse extends AbstractStructBase
{
    /**
     * The UsaVehicleDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\UsaVehicleDiscount
     */
    public $UsaVehicleDiscount;
    /**
     * Constructor method for GetUsaVehicleDiscountResponse
     * @uses GetUsaVehicleDiscountResponse::setUsaVehicleDiscount()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\UsaVehicleDiscount $usaVehicleDiscount
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\UsaVehicleDiscount $usaVehicleDiscount = null)
    {
        $this
            ->setUsaVehicleDiscount($usaVehicleDiscount);
    }
    /**
     * Get UsaVehicleDiscount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UsaVehicleDiscount|null
     */
    public function getUsaVehicleDiscount()
    {
        return isset($this->UsaVehicleDiscount) ? $this->UsaVehicleDiscount : null;
    }
    /**
     * Set UsaVehicleDiscount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\UsaVehicleDiscount $usaVehicleDiscount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetUsaVehicleDiscountResponse
     */
    public function setUsaVehicleDiscount(\Mu4ddi3\Compensa\Webservice\StructType\UsaVehicleDiscount $usaVehicleDiscount = null)
    {
        if (is_null($usaVehicleDiscount) || (is_array($usaVehicleDiscount) && empty($usaVehicleDiscount))) {
            unset($this->UsaVehicleDiscount);
        } else {
            $this->UsaVehicleDiscount = $usaVehicleDiscount;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetUsaVehicleDiscountResponse
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
