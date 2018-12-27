<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AssistanceSubRisk StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AssistanceSubRisk
 * @subpackage Structs
 */
class AssistanceSubRisk extends MotorRisk
{
    /**
     * The AssistanceSubRiskType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AssistanceSubRiskType;
    /**
     * The TariffVariant
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TariffVariant;
    /**
     * Constructor method for AssistanceSubRisk
     * @uses AssistanceSubRisk::setAssistanceSubRiskType()
     * @uses AssistanceSubRisk::setTariffVariant()
     * @param string $assistanceSubRiskType
     * @param string $tariffVariant
     */
    public function __construct($assistanceSubRiskType = null, $tariffVariant = null)
    {
        $this
            ->setAssistanceSubRiskType($assistanceSubRiskType)
            ->setTariffVariant($tariffVariant);
    }
    /**
     * Get AssistanceSubRiskType value
     * @return string|null
     */
    public function getAssistanceSubRiskType()
    {
        return $this->AssistanceSubRiskType;
    }
    /**
     * Set AssistanceSubRiskType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\AssistanceSubRiskType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\AssistanceSubRiskType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $assistanceSubRiskType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AssistanceSubRisk
     */
    public function setAssistanceSubRiskType($assistanceSubRiskType = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\AssistanceSubRiskType::valueIsValid($assistanceSubRiskType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $assistanceSubRiskType, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\AssistanceSubRiskType::getValidValues())), __LINE__);
        }
        $this->AssistanceSubRiskType = $assistanceSubRiskType;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AssistanceSubRisk
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AssistanceSubRisk
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
