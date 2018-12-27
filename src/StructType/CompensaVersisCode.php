<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompensaVersisCode StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CompensaVersisCode
 * @subpackage Structs
 */
class CompensaVersisCode extends AbstractStructBase
{
    /**
     * The RiskSymbol
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $RiskSymbol;
    /**
     * The RiskVersisCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $RiskVersisCode;
    /**
     * Constructor method for CompensaVersisCode
     * @uses CompensaVersisCode::setRiskSymbol()
     * @uses CompensaVersisCode::setRiskVersisCode()
     * @param string $riskSymbol
     * @param string $riskVersisCode
     */
    public function __construct($riskSymbol = null, $riskVersisCode = null)
    {
        $this
            ->setRiskSymbol($riskSymbol)
            ->setRiskVersisCode($riskVersisCode);
    }
    /**
     * Get RiskSymbol value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRiskSymbol()
    {
        return isset($this->RiskSymbol) ? $this->RiskSymbol : null;
    }
    /**
     * Set RiskSymbol value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $riskSymbol
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaVersisCode
     */
    public function setRiskSymbol($riskSymbol = null)
    {
        // validation for constraint: string
        if (!is_null($riskSymbol) && !is_string($riskSymbol)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($riskSymbol)), __LINE__);
        }
        if (is_null($riskSymbol) || (is_array($riskSymbol) && empty($riskSymbol))) {
            unset($this->RiskSymbol);
        } else {
            $this->RiskSymbol = $riskSymbol;
        }
        return $this;
    }
    /**
     * Get RiskVersisCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRiskVersisCode()
    {
        return isset($this->RiskVersisCode) ? $this->RiskVersisCode : null;
    }
    /**
     * Set RiskVersisCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $riskVersisCode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaVersisCode
     */
    public function setRiskVersisCode($riskVersisCode = null)
    {
        // validation for constraint: string
        if (!is_null($riskVersisCode) && !is_string($riskVersisCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($riskVersisCode)), __LINE__);
        }
        if (is_null($riskVersisCode) || (is_array($riskVersisCode) && empty($riskVersisCode))) {
            unset($this->RiskVersisCode);
        } else {
            $this->RiskVersisCode = $riskVersisCode;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaVersisCode
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
