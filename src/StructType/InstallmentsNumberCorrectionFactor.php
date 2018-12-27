<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InstallmentsNumberCorrectionFactor StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:InstallmentsNumberCorrectionFactor
 * @subpackage Structs
 */
class InstallmentsNumberCorrectionFactor extends BaseFactorDefinition
{
    /**
     * The InstallmentsNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $InstallmentsNumber;
    /**
     * The RiskCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RiskCode;
    /**
     * Constructor method for InstallmentsNumberCorrectionFactor
     * @uses InstallmentsNumberCorrectionFactor::setInstallmentsNumber()
     * @uses InstallmentsNumberCorrectionFactor::setRiskCode()
     * @param int $installmentsNumber
     * @param string $riskCode
     */
    public function __construct($installmentsNumber = null, $riskCode = null)
    {
        $this
            ->setInstallmentsNumber($installmentsNumber)
            ->setRiskCode($riskCode);
    }
    /**
     * Get InstallmentsNumber value
     * @return int|null
     */
    public function getInstallmentsNumber()
    {
        return $this->InstallmentsNumber;
    }
    /**
     * Set InstallmentsNumber value
     * @param int $installmentsNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InstallmentsNumberCorrectionFactor
     */
    public function setInstallmentsNumber($installmentsNumber = null)
    {
        // validation for constraint: int
        if (!is_null($installmentsNumber) && !is_numeric($installmentsNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($installmentsNumber)), __LINE__);
        }
        $this->InstallmentsNumber = $installmentsNumber;
        return $this;
    }
    /**
     * Get RiskCode value
     * @return string|null
     */
    public function getRiskCode()
    {
        return $this->RiskCode;
    }
    /**
     * Set RiskCode value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\RiskCode::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\RiskCode::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $riskCode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InstallmentsNumberCorrectionFactor
     */
    public function setRiskCode($riskCode = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\RiskCode::valueIsValid($riskCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $riskCode, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\RiskCode::getValidValues())), __LINE__);
        }
        $this->RiskCode = $riskCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InstallmentsNumberCorrectionFactor
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
