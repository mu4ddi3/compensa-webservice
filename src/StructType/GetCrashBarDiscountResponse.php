<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCrashBarDiscountResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetCrashBarDiscountResponse
 * @subpackage Structs
 */
class GetCrashBarDiscountResponse extends AbstractStructBase
{
    /**
     * The CrashBarDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\CrashBarDiscount
     */
    public $CrashBarDiscount;
    /**
     * Constructor method for GetCrashBarDiscountResponse
     * @uses GetCrashBarDiscountResponse::setCrashBarDiscount()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CrashBarDiscount $crashBarDiscount
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\CrashBarDiscount $crashBarDiscount = null)
    {
        $this
            ->setCrashBarDiscount($crashBarDiscount);
    }
    /**
     * Get CrashBarDiscount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CrashBarDiscount|null
     */
    public function getCrashBarDiscount()
    {
        return isset($this->CrashBarDiscount) ? $this->CrashBarDiscount : null;
    }
    /**
     * Set CrashBarDiscount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CrashBarDiscount $crashBarDiscount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetCrashBarDiscountResponse
     */
    public function setCrashBarDiscount(\Mu4ddi3\Compensa\Webservice\StructType\CrashBarDiscount $crashBarDiscount = null)
    {
        if (is_null($crashBarDiscount) || (is_array($crashBarDiscount) && empty($crashBarDiscount))) {
            unset($this->CrashBarDiscount);
        } else {
            $this->CrashBarDiscount = $crashBarDiscount;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetCrashBarDiscountResponse
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
