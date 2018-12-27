<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBonusMalusAcDiscountRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetBonusMalusAcDiscountRequest
 * @subpackage Structs
 */
class GetBonusMalusAcDiscountRequest extends GetBonusMalusDiscountRequest
{
    /**
     * The IsDiscountForDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsDiscountForDiscount;
    /**
     * Constructor method for GetBonusMalusAcDiscountRequest
     * @uses GetBonusMalusAcDiscountRequest::setIsDiscountForDiscount()
     * @param bool $isDiscountForDiscount
     */
    public function __construct($isDiscountForDiscount = null)
    {
        $this
            ->setIsDiscountForDiscount($isDiscountForDiscount);
    }
    /**
     * Get IsDiscountForDiscount value
     * @return bool|null
     */
    public function getIsDiscountForDiscount()
    {
        return $this->IsDiscountForDiscount;
    }
    /**
     * Set IsDiscountForDiscount value
     * @param bool $isDiscountForDiscount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetBonusMalusAcDiscountRequest
     */
    public function setIsDiscountForDiscount($isDiscountForDiscount = null)
    {
        // validation for constraint: boolean
        if (!is_null($isDiscountForDiscount) && !is_bool($isDiscountForDiscount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isDiscountForDiscount)), __LINE__);
        }
        $this->IsDiscountForDiscount = $isDiscountForDiscount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetBonusMalusAcDiscountRequest
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
