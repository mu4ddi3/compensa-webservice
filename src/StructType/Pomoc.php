<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Pomoc StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Pomoc
 * @subpackage Structs
 */
class Pomoc extends MotorRisk
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
     * The AdditionalDiscountPercentageValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $AdditionalDiscountPercentageValue;
    /**
     * The CentralCorrectionPercentageValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CentralCorrectionPercentageValue;
    /**
     * The IsAdditionalDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAdditionalDiscount;
    /**
     * The IsCentralCorrection
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsCentralCorrection;
    /**
     * The TariffVariant
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TariffVariant;
    /**
     * Constructor method for Pomoc
     * @uses Pomoc::setAdditionalDiscountCode()
     * @uses Pomoc::setAdditionalDiscountPercentageValue()
     * @uses Pomoc::setCentralCorrectionPercentageValue()
     * @uses Pomoc::setIsAdditionalDiscount()
     * @uses Pomoc::setIsCentralCorrection()
     * @uses Pomoc::setTariffVariant()
     * @param string $additionalDiscountCode
     * @param int $additionalDiscountPercentageValue
     * @param int $centralCorrectionPercentageValue
     * @param bool $isAdditionalDiscount
     * @param bool $isCentralCorrection
     * @param string $tariffVariant
     */
    public function __construct($additionalDiscountCode = null, $additionalDiscountPercentageValue = null, $centralCorrectionPercentageValue = null, $isAdditionalDiscount = null, $isCentralCorrection = null, $tariffVariant = null)
    {
        $this
            ->setAdditionalDiscountCode($additionalDiscountCode)
            ->setAdditionalDiscountPercentageValue($additionalDiscountPercentageValue)
            ->setCentralCorrectionPercentageValue($centralCorrectionPercentageValue)
            ->setIsAdditionalDiscount($isAdditionalDiscount)
            ->setIsCentralCorrection($isCentralCorrection)
            ->setTariffVariant($tariffVariant);
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Pomoc
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
     * Get AdditionalDiscountPercentageValue value
     * @return int|null
     */
    public function getAdditionalDiscountPercentageValue()
    {
        return $this->AdditionalDiscountPercentageValue;
    }
    /**
     * Set AdditionalDiscountPercentageValue value
     * @param int $additionalDiscountPercentageValue
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Pomoc
     */
    public function setAdditionalDiscountPercentageValue($additionalDiscountPercentageValue = null)
    {
        // validation for constraint: int
        if (!is_null($additionalDiscountPercentageValue) && !is_numeric($additionalDiscountPercentageValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($additionalDiscountPercentageValue)), __LINE__);
        }
        $this->AdditionalDiscountPercentageValue = $additionalDiscountPercentageValue;
        return $this;
    }
    /**
     * Get CentralCorrectionPercentageValue value
     * @return int|null
     */
    public function getCentralCorrectionPercentageValue()
    {
        return $this->CentralCorrectionPercentageValue;
    }
    /**
     * Set CentralCorrectionPercentageValue value
     * @param int $centralCorrectionPercentageValue
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Pomoc
     */
    public function setCentralCorrectionPercentageValue($centralCorrectionPercentageValue = null)
    {
        // validation for constraint: int
        if (!is_null($centralCorrectionPercentageValue) && !is_numeric($centralCorrectionPercentageValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($centralCorrectionPercentageValue)), __LINE__);
        }
        $this->CentralCorrectionPercentageValue = $centralCorrectionPercentageValue;
        return $this;
    }
    /**
     * Get IsAdditionalDiscount value
     * @return bool|null
     */
    public function getIsAdditionalDiscount()
    {
        return $this->IsAdditionalDiscount;
    }
    /**
     * Set IsAdditionalDiscount value
     * @param bool $isAdditionalDiscount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Pomoc
     */
    public function setIsAdditionalDiscount($isAdditionalDiscount = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAdditionalDiscount) && !is_bool($isAdditionalDiscount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAdditionalDiscount)), __LINE__);
        }
        $this->IsAdditionalDiscount = $isAdditionalDiscount;
        return $this;
    }
    /**
     * Get IsCentralCorrection value
     * @return bool|null
     */
    public function getIsCentralCorrection()
    {
        return $this->IsCentralCorrection;
    }
    /**
     * Set IsCentralCorrection value
     * @param bool $isCentralCorrection
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Pomoc
     */
    public function setIsCentralCorrection($isCentralCorrection = null)
    {
        // validation for constraint: boolean
        if (!is_null($isCentralCorrection) && !is_bool($isCentralCorrection)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isCentralCorrection)), __LINE__);
        }
        $this->IsCentralCorrection = $isCentralCorrection;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Pomoc
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Pomoc
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
