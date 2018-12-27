<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBasePremiumOpRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetBasePremiumOpRequest
 * @subpackage Structs
 */
class GetBasePremiumOpRequest extends GetBasePremiumRequest
{
    /**
     * The DriversCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $DriversCount;
    /**
     * The InsuranceSum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $InsuranceSum;
    /**
     * The IsPersonPhysical
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsPersonPhysical;
    /**
     * The Variant
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Variant;
    /**
     * Constructor method for GetBasePremiumOpRequest
     * @uses GetBasePremiumOpRequest::setDriversCount()
     * @uses GetBasePremiumOpRequest::setInsuranceSum()
     * @uses GetBasePremiumOpRequest::setIsPersonPhysical()
     * @uses GetBasePremiumOpRequest::setVariant()
     * @param int $driversCount
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSum
     * @param bool $isPersonPhysical
     * @param string $variant
     */
    public function __construct($driversCount = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSum = null, $isPersonPhysical = null, $variant = null)
    {
        $this
            ->setDriversCount($driversCount)
            ->setInsuranceSum($insuranceSum)
            ->setIsPersonPhysical($isPersonPhysical)
            ->setVariant($variant);
    }
    /**
     * Get DriversCount value
     * @return int|null
     */
    public function getDriversCount()
    {
        return $this->DriversCount;
    }
    /**
     * Set DriversCount value
     * @param int $driversCount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetBasePremiumOpRequest
     */
    public function setDriversCount($driversCount = null)
    {
        // validation for constraint: int
        if (!is_null($driversCount) && !is_numeric($driversCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($driversCount)), __LINE__);
        }
        $this->DriversCount = $driversCount;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetBasePremiumOpRequest
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
     * Get IsPersonPhysical value
     * @return bool|null
     */
    public function getIsPersonPhysical()
    {
        return $this->IsPersonPhysical;
    }
    /**
     * Set IsPersonPhysical value
     * @param bool $isPersonPhysical
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetBasePremiumOpRequest
     */
    public function setIsPersonPhysical($isPersonPhysical = null)
    {
        // validation for constraint: boolean
        if (!is_null($isPersonPhysical) && !is_bool($isPersonPhysical)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isPersonPhysical)), __LINE__);
        }
        $this->IsPersonPhysical = $isPersonPhysical;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetBasePremiumOpRequest
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetBasePremiumOpRequest
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
