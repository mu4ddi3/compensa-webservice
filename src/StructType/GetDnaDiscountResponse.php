<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDnaDiscountResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetDnaDiscountResponse
 * @subpackage Structs
 */
class GetDnaDiscountResponse extends AbstractStructBase
{
    /**
     * The DnaDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\DnaDiscount
     */
    public $DnaDiscount;
    /**
     * Constructor method for GetDnaDiscountResponse
     * @uses GetDnaDiscountResponse::setDnaDiscount()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\DnaDiscount $dnaDiscount
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\DnaDiscount $dnaDiscount = null)
    {
        $this
            ->setDnaDiscount($dnaDiscount);
    }
    /**
     * Get DnaDiscount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DnaDiscount|null
     */
    public function getDnaDiscount()
    {
        return isset($this->DnaDiscount) ? $this->DnaDiscount : null;
    }
    /**
     * Set DnaDiscount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\DnaDiscount $dnaDiscount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetDnaDiscountResponse
     */
    public function setDnaDiscount(\Mu4ddi3\Compensa\Webservice\StructType\DnaDiscount $dnaDiscount = null)
    {
        if (is_null($dnaDiscount) || (is_array($dnaDiscount) && empty($dnaDiscount))) {
            unset($this->DnaDiscount);
        } else {
            $this->DnaDiscount = $dnaDiscount;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetDnaDiscountResponse
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
