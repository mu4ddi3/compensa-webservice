<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBasePremiumGapRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetBasePremiumGapRequest
 * @subpackage Structs
 */
class GetBasePremiumGapRequest extends GetBasePremiumRequest
{
    /**
     * The InsurancePeriod
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $InsurancePeriod;
    /**
     * The InsuranceSum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $InsuranceSum;
    /**
     * The Variant
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Variant;
    /**
     * Constructor method for GetBasePremiumGapRequest
     * @uses GetBasePremiumGapRequest::setInsurancePeriod()
     * @uses GetBasePremiumGapRequest::setInsuranceSum()
     * @uses GetBasePremiumGapRequest::setVariant()
     * @param int $insurancePeriod
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSum
     * @param string $variant
     */
    public function __construct($insurancePeriod = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSum = null, $variant = null)
    {
        $this
            ->setInsurancePeriod($insurancePeriod)
            ->setInsuranceSum($insuranceSum)
            ->setVariant($variant);
    }
    /**
     * Get InsurancePeriod value
     * @return int|null
     */
    public function getInsurancePeriod()
    {
        return $this->InsurancePeriod;
    }
    /**
     * Set InsurancePeriod value
     * @param int $insurancePeriod
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetBasePremiumGapRequest
     */
    public function setInsurancePeriod($insurancePeriod = null)
    {
        // validation for constraint: int
        if (!is_null($insurancePeriod) && !is_numeric($insurancePeriod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($insurancePeriod)), __LINE__);
        }
        $this->InsurancePeriod = $insurancePeriod;
        return $this;
    }
    /**
     * Get InsuranceSum value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getInsuranceSum()
    {
        return isset($this->InsuranceSum) ? $this->InsuranceSum : null;
    }
    /**
     * Set InsuranceSum value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSum
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetBasePremiumGapRequest
     */
    public function setInsuranceSum(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSum = null)
    {
        if (is_null($insuranceSum) || (is_array($insuranceSum) && empty($insuranceSum))) {
            unset($this->InsuranceSum);
        } else {
            $this->InsuranceSum = $insuranceSum;
        }
        return $this;
    }
    /**
     * Get Variant value
     * @return string|null
     */
    public function getVariant()
    {
        return $this->Variant;
    }
    /**
     * Set Variant value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\TariffVariants::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\TariffVariants::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $variant
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetBasePremiumGapRequest
     */
    public function setVariant($variant = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\TariffVariants::valueIsValid($variant)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $variant, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\TariffVariants::getValidValues())), __LINE__);
        }
        $this->Variant = $variant;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetBasePremiumGapRequest
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
