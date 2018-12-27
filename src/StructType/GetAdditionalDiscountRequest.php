<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAdditionalDiscountRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetAdditionalDiscountRequest
 * @subpackage Structs
 */
class GetAdditionalDiscountRequest extends AbstractStructBase
{
    /**
     * The DiscountCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $DiscountCode;
    /**
     * The PercentageDiscountValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PercentageDiscountValue;
    /**
     * Constructor method for GetAdditionalDiscountRequest
     * @uses GetAdditionalDiscountRequest::setDiscountCode()
     * @uses GetAdditionalDiscountRequest::setPercentageDiscountValue()
     * @param string $discountCode
     * @param int $percentageDiscountValue
     */
    public function __construct($discountCode = null, $percentageDiscountValue = null)
    {
        $this
            ->setDiscountCode($discountCode)
            ->setPercentageDiscountValue($percentageDiscountValue);
    }
    /**
     * Get DiscountCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDiscountCode()
    {
        return isset($this->DiscountCode) ? $this->DiscountCode : null;
    }
    /**
     * Set DiscountCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $discountCode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetAdditionalDiscountRequest
     */
    public function setDiscountCode($discountCode = null)
    {
        // validation for constraint: string
        if (!is_null($discountCode) && !is_string($discountCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($discountCode)), __LINE__);
        }
        if (is_null($discountCode) || (is_array($discountCode) && empty($discountCode))) {
            unset($this->DiscountCode);
        } else {
            $this->DiscountCode = $discountCode;
        }
        return $this;
    }
    /**
     * Get PercentageDiscountValue value
     * @return int|null
     */
    public function getPercentageDiscountValue()
    {
        return $this->PercentageDiscountValue;
    }
    /**
     * Set PercentageDiscountValue value
     * @param int $percentageDiscountValue
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetAdditionalDiscountRequest
     */
    public function setPercentageDiscountValue($percentageDiscountValue = null)
    {
        // validation for constraint: int
        if (!is_null($percentageDiscountValue) && !is_numeric($percentageDiscountValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($percentageDiscountValue)), __LINE__);
        }
        $this->PercentageDiscountValue = $percentageDiscountValue;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetAdditionalDiscountRequest
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
