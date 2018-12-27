<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPropertyInsuranceDiscountRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetPropertyInsuranceDiscountRequest
 * @subpackage Structs
 */
class GetPropertyInsuranceDiscountRequest extends AbstractStructBase
{
    /**
     * The PercentageDiscountValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PercentageDiscountValue;
    /**
     * The PropertyInsurancePremium
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $PropertyInsurancePremium;
    /**
     * Constructor method for GetPropertyInsuranceDiscountRequest
     * @uses GetPropertyInsuranceDiscountRequest::setPercentageDiscountValue()
     * @uses GetPropertyInsuranceDiscountRequest::setPropertyInsurancePremium()
     * @param int $percentageDiscountValue
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $propertyInsurancePremium
     */
    public function __construct($percentageDiscountValue = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $propertyInsurancePremium = null)
    {
        $this
            ->setPercentageDiscountValue($percentageDiscountValue)
            ->setPropertyInsurancePremium($propertyInsurancePremium);
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetPropertyInsuranceDiscountRequest
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
     * Get PropertyInsurancePremium value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getPropertyInsurancePremium()
    {
        return isset($this->PropertyInsurancePremium) ? $this->PropertyInsurancePremium : null;
    }
    /**
     * Set PropertyInsurancePremium value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $propertyInsurancePremium
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetPropertyInsuranceDiscountRequest
     */
    public function setPropertyInsurancePremium(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $propertyInsurancePremium = null)
    {
        if (is_null($propertyInsurancePremium) || (is_array($propertyInsurancePremium) && empty($propertyInsurancePremium))) {
            unset($this->PropertyInsurancePremium);
        } else {
            $this->PropertyInsurancePremium = $propertyInsurancePremium;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetPropertyInsuranceDiscountRequest
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
