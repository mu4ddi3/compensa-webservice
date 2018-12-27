<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GAP StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GAP
 * @subpackage Structs
 */
class GAP extends MotorRisk
{
    /**
     * The GapValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $GapValue;
    /**
     * The InsurancePeriod
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $InsurancePeriod;
    /**
     * The PremiumBaseNet
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $PremiumBaseNet;
    /**
     * The TariffVariant
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TariffVariant;
    /**
     * Constructor method for GAP
     * @uses GAP::setGapValue()
     * @uses GAP::setInsurancePeriod()
     * @uses GAP::setPremiumBaseNet()
     * @uses GAP::setTariffVariant()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $gapValue
     * @param int $insurancePeriod
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premiumBaseNet
     * @param string $tariffVariant
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $gapValue = null, $insurancePeriod = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premiumBaseNet = null, $tariffVariant = null)
    {
        $this
            ->setGapValue($gapValue)
            ->setInsurancePeriod($insurancePeriod)
            ->setPremiumBaseNet($premiumBaseNet)
            ->setTariffVariant($tariffVariant);
    }
    /**
     * Get GapValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getGapValue()
    {
        return isset($this->GapValue) ? $this->GapValue : null;
    }
    /**
     * Set GapValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $gapValue
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GAP
     */
    public function setGapValue(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $gapValue = null)
    {
        if (is_null($gapValue) || (is_array($gapValue) && empty($gapValue))) {
            unset($this->GapValue);
        } else {
            $this->GapValue = $gapValue;
        }
        return $this;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GAP
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
     * Get PremiumBaseNet value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getPremiumBaseNet()
    {
        return isset($this->PremiumBaseNet) ? $this->PremiumBaseNet : null;
    }
    /**
     * Set PremiumBaseNet value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premiumBaseNet
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GAP
     */
    public function setPremiumBaseNet(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premiumBaseNet = null)
    {
        if (is_null($premiumBaseNet) || (is_array($premiumBaseNet) && empty($premiumBaseNet))) {
            unset($this->PremiumBaseNet);
        } else {
            $this->PremiumBaseNet = $premiumBaseNet;
        }
        return $this;
    }
    /**
     * Get TariffVariant value
     * @return string|null
     */
    public function getTariffVariant()
    {
        return $this->TariffVariant;
    }
    /**
     * Set TariffVariant value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\TariffVariants::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\TariffVariants::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $tariffVariant
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GAP
     */
    public function setTariffVariant($tariffVariant = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\TariffVariants::valueIsValid($tariffVariant)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $tariffVariant, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\TariffVariants::getValidValues())), __LINE__);
        }
        $this->TariffVariant = $tariffVariant;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GAP
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
