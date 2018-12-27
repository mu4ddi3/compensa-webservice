<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MyBusinessDiscount StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MyBusinessDiscount
 * @subpackage Structs
 */
class MyBusinessDiscount extends Discount
{
    /**
     * The SubDiscounts
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDiscount
     */
    public $SubDiscounts;
    /**
     * Constructor method for MyBusinessDiscount
     * @uses MyBusinessDiscount::setSubDiscounts()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDiscount $subDiscounts
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDiscount $subDiscounts = null)
    {
        $this
            ->setSubDiscounts($subDiscounts);
    }
    /**
     * Get SubDiscounts value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDiscount|null
     */
    public function getSubDiscounts()
    {
        return isset($this->SubDiscounts) ? $this->SubDiscounts : null;
    }
    /**
     * Set SubDiscounts value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDiscount $subDiscounts
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessDiscount
     */
    public function setSubDiscounts(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDiscount $subDiscounts = null)
    {
        if (is_null($subDiscounts) || (is_array($subDiscounts) && empty($subDiscounts))) {
            unset($this->SubDiscounts);
        } else {
            $this->SubDiscounts = $subDiscounts;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessDiscount
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
