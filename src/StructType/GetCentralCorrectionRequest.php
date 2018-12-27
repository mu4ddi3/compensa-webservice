<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCentralCorrectionRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetCentralCorrectionRequest
 * @subpackage Structs
 */
class GetCentralCorrectionRequest extends AbstractStructBase
{
    /**
     * The PercentageDiscountValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PercentageDiscountValue;
    /**
     * Constructor method for GetCentralCorrectionRequest
     * @uses GetCentralCorrectionRequest::setPercentageDiscountValue()
     * @param int $percentageDiscountValue
     */
    public function __construct($percentageDiscountValue = null)
    {
        $this
            ->setPercentageDiscountValue($percentageDiscountValue);
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetCentralCorrectionRequest
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetCentralCorrectionRequest
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
