<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalDiscount StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AdditionalDiscount
 * @subpackage Structs
 */
class AdditionalDiscount extends MotorDiscount
{
    /**
     * The AdditionalDiscountCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AdditionalDiscountCode;
    /**
     * Constructor method for AdditionalDiscount
     * @uses AdditionalDiscount::setAdditionalDiscountCode()
     * @param string $additionalDiscountCode
     */
    public function __construct($additionalDiscountCode = null)
    {
        $this
            ->setAdditionalDiscountCode($additionalDiscountCode);
    }
    /**
     * Get AdditionalDiscountCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAdditionalDiscountCode()
    {
        return isset($this->AdditionalDiscountCode) ? $this->AdditionalDiscountCode : null;
    }
    /**
     * Set AdditionalDiscountCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $additionalDiscountCode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscount
     */
    public function setAdditionalDiscountCode($additionalDiscountCode = null)
    {
        // validation for constraint: string
        if (!is_null($additionalDiscountCode) && !is_string($additionalDiscountCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($additionalDiscountCode)), __LINE__);
        }
        if (is_null($additionalDiscountCode) || (is_array($additionalDiscountCode) && empty($additionalDiscountCode))) {
            unset($this->AdditionalDiscountCode);
        } else {
            $this->AdditionalDiscountCode = $additionalDiscountCode;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscount
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
