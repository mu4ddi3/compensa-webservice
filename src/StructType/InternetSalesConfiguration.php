<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InternetSalesConfiguration StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:InternetSalesConfiguration
 * @subpackage Structs
 */
class InternetSalesConfiguration extends AbstractStructBase
{
    /**
     * The ConfirmationFacsimilePath
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ConfirmationFacsimilePath;
    /**
     * The ConfirmationFacsimileText
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ConfirmationFacsimileText;
    /**
     * The HasInternetSales
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $HasInternetSales;
    /**
     * The PolicyFacsimilePath
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PolicyFacsimilePath;
    /**
     * The PolicyFacsimileText
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PolicyFacsimileText;
    /**
     * Constructor method for InternetSalesConfiguration
     * @uses InternetSalesConfiguration::setConfirmationFacsimilePath()
     * @uses InternetSalesConfiguration::setConfirmationFacsimileText()
     * @uses InternetSalesConfiguration::setHasInternetSales()
     * @uses InternetSalesConfiguration::setPolicyFacsimilePath()
     * @uses InternetSalesConfiguration::setPolicyFacsimileText()
     * @param string $confirmationFacsimilePath
     * @param string $confirmationFacsimileText
     * @param bool $hasInternetSales
     * @param string $policyFacsimilePath
     * @param string $policyFacsimileText
     */
    public function __construct($confirmationFacsimilePath = null, $confirmationFacsimileText = null, $hasInternetSales = null, $policyFacsimilePath = null, $policyFacsimileText = null)
    {
        $this
            ->setConfirmationFacsimilePath($confirmationFacsimilePath)
            ->setConfirmationFacsimileText($confirmationFacsimileText)
            ->setHasInternetSales($hasInternetSales)
            ->setPolicyFacsimilePath($policyFacsimilePath)
            ->setPolicyFacsimileText($policyFacsimileText);
    }
    /**
     * Get ConfirmationFacsimilePath value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getConfirmationFacsimilePath()
    {
        return isset($this->ConfirmationFacsimilePath) ? $this->ConfirmationFacsimilePath : null;
    }
    /**
     * Set ConfirmationFacsimilePath value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $confirmationFacsimilePath
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InternetSalesConfiguration
     */
    public function setConfirmationFacsimilePath($confirmationFacsimilePath = null)
    {
        // validation for constraint: string
        if (!is_null($confirmationFacsimilePath) && !is_string($confirmationFacsimilePath)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($confirmationFacsimilePath)), __LINE__);
        }
        if (is_null($confirmationFacsimilePath) || (is_array($confirmationFacsimilePath) && empty($confirmationFacsimilePath))) {
            unset($this->ConfirmationFacsimilePath);
        } else {
            $this->ConfirmationFacsimilePath = $confirmationFacsimilePath;
        }
        return $this;
    }
    /**
     * Get ConfirmationFacsimileText value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getConfirmationFacsimileText()
    {
        return isset($this->ConfirmationFacsimileText) ? $this->ConfirmationFacsimileText : null;
    }
    /**
     * Set ConfirmationFacsimileText value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $confirmationFacsimileText
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InternetSalesConfiguration
     */
    public function setConfirmationFacsimileText($confirmationFacsimileText = null)
    {
        // validation for constraint: string
        if (!is_null($confirmationFacsimileText) && !is_string($confirmationFacsimileText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($confirmationFacsimileText)), __LINE__);
        }
        if (is_null($confirmationFacsimileText) || (is_array($confirmationFacsimileText) && empty($confirmationFacsimileText))) {
            unset($this->ConfirmationFacsimileText);
        } else {
            $this->ConfirmationFacsimileText = $confirmationFacsimileText;
        }
        return $this;
    }
    /**
     * Get HasInternetSales value
     * @return bool|null
     */
    public function getHasInternetSales()
    {
        return $this->HasInternetSales;
    }
    /**
     * Set HasInternetSales value
     * @param bool $hasInternetSales
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InternetSalesConfiguration
     */
    public function setHasInternetSales($hasInternetSales = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasInternetSales) && !is_bool($hasInternetSales)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hasInternetSales)), __LINE__);
        }
        $this->HasInternetSales = $hasInternetSales;
        return $this;
    }
    /**
     * Get PolicyFacsimilePath value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPolicyFacsimilePath()
    {
        return isset($this->PolicyFacsimilePath) ? $this->PolicyFacsimilePath : null;
    }
    /**
     * Set PolicyFacsimilePath value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $policyFacsimilePath
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InternetSalesConfiguration
     */
    public function setPolicyFacsimilePath($policyFacsimilePath = null)
    {
        // validation for constraint: string
        if (!is_null($policyFacsimilePath) && !is_string($policyFacsimilePath)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($policyFacsimilePath)), __LINE__);
        }
        if (is_null($policyFacsimilePath) || (is_array($policyFacsimilePath) && empty($policyFacsimilePath))) {
            unset($this->PolicyFacsimilePath);
        } else {
            $this->PolicyFacsimilePath = $policyFacsimilePath;
        }
        return $this;
    }
    /**
     * Get PolicyFacsimileText value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPolicyFacsimileText()
    {
        return isset($this->PolicyFacsimileText) ? $this->PolicyFacsimileText : null;
    }
    /**
     * Set PolicyFacsimileText value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $policyFacsimileText
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InternetSalesConfiguration
     */
    public function setPolicyFacsimileText($policyFacsimileText = null)
    {
        // validation for constraint: string
        if (!is_null($policyFacsimileText) && !is_string($policyFacsimileText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($policyFacsimileText)), __LINE__);
        }
        if (is_null($policyFacsimileText) || (is_array($policyFacsimileText) && empty($policyFacsimileText))) {
            unset($this->PolicyFacsimileText);
        } else {
            $this->PolicyFacsimileText = $policyFacsimileText;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InternetSalesConfiguration
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
