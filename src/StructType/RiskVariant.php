<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RiskVariant StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RiskVariant
 * @subpackage Structs
 */
class RiskVariant extends ObjectEnum
{
    /**
     * The PortalName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PortalName;
    /**
     * The Symbol
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Symbol;
    /**
     * The VersisCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $VersisCode;
    /**
     * Constructor method for RiskVariant
     * @uses RiskVariant::setPortalName()
     * @uses RiskVariant::setSymbol()
     * @uses RiskVariant::setVersisCode()
     * @param string $portalName
     * @param int $symbol
     * @param string $versisCode
     */
    public function __construct($portalName = null, $symbol = null, $versisCode = null)
    {
        $this
            ->setPortalName($portalName)
            ->setSymbol($symbol)
            ->setVersisCode($versisCode);
    }
    /**
     * Get PortalName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPortalName()
    {
        return isset($this->PortalName) ? $this->PortalName : null;
    }
    /**
     * Set PortalName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $portalName
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskVariant
     */
    public function setPortalName($portalName = null)
    {
        // validation for constraint: string
        if (!is_null($portalName) && !is_string($portalName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($portalName)), __LINE__);
        }
        if (is_null($portalName) || (is_array($portalName) && empty($portalName))) {
            unset($this->PortalName);
        } else {
            $this->PortalName = $portalName;
        }
        return $this;
    }
    /**
     * Get Symbol value
     * @return int|null
     */
    public function getSymbol()
    {
        return $this->Symbol;
    }
    /**
     * Set Symbol value
     * @param int $symbol
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskVariant
     */
    public function setSymbol($symbol = null)
    {
        // validation for constraint: int
        if (!is_null($symbol) && !is_numeric($symbol)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($symbol)), __LINE__);
        }
        $this->Symbol = $symbol;
        return $this;
    }
    /**
     * Get VersisCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getVersisCode()
    {
        return isset($this->VersisCode) ? $this->VersisCode : null;
    }
    /**
     * Set VersisCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $versisCode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskVariant
     */
    public function setVersisCode($versisCode = null)
    {
        // validation for constraint: string
        if (!is_null($versisCode) && !is_string($versisCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($versisCode)), __LINE__);
        }
        if (is_null($versisCode) || (is_array($versisCode) && empty($versisCode))) {
            unset($this->VersisCode);
        } else {
            $this->VersisCode = $versisCode;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskVariant
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
