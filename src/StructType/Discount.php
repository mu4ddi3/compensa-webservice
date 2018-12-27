<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Discount StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Discount
 * @subpackage Structs
 */
class Discount extends AbstractStructBase
{
    /**
     * The DefaultFactor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $DefaultFactor;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Name;
    /**
     * The PrintoutName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PrintoutName;
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $Value;
    /**
     * The ValueFactor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $ValueFactor;
    /**
     * Constructor method for Discount
     * @uses Discount::setDefaultFactor()
     * @uses Discount::setName()
     * @uses Discount::setPrintoutName()
     * @uses Discount::setValue()
     * @uses Discount::setValueFactor()
     * @param float $defaultFactor
     * @param string $name
     * @param string $printoutName
     * @param float $value
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $valueFactor
     */
    public function __construct($defaultFactor = null, $name = null, $printoutName = null, $value = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $valueFactor = null)
    {
        $this
            ->setDefaultFactor($defaultFactor)
            ->setName($name)
            ->setPrintoutName($printoutName)
            ->setValue($value)
            ->setValueFactor($valueFactor);
    }
    /**
     * Get DefaultFactor value
     * @return float|null
     */
    public function getDefaultFactor()
    {
        return $this->DefaultFactor;
    }
    /**
     * Set DefaultFactor value
     * @param float $defaultFactor
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Discount
     */
    public function setDefaultFactor($defaultFactor = null)
    {
        $this->DefaultFactor = $defaultFactor;
        return $this;
    }
    /**
     * Get Name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getName()
    {
        return isset($this->Name) ? $this->Name : null;
    }
    /**
     * Set Name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Discount
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->Name);
        } else {
            $this->Name = $name;
        }
        return $this;
    }
    /**
     * Get PrintoutName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPrintoutName()
    {
        return isset($this->PrintoutName) ? $this->PrintoutName : null;
    }
    /**
     * Set PrintoutName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $printoutName
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Discount
     */
    public function setPrintoutName($printoutName = null)
    {
        // validation for constraint: string
        if (!is_null($printoutName) && !is_string($printoutName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($printoutName)), __LINE__);
        }
        if (is_null($printoutName) || (is_array($printoutName) && empty($printoutName))) {
            unset($this->PrintoutName);
        } else {
            $this->PrintoutName = $printoutName;
        }
        return $this;
    }
    /**
     * Get Value value
     * @return float|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param float $value
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Discount
     */
    public function setValue($value = null)
    {
        $this->Value = $value;
        return $this;
    }
    /**
     * Get ValueFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getValueFactor()
    {
        return isset($this->ValueFactor) ? $this->ValueFactor : null;
    }
    /**
     * Set ValueFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $valueFactor
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Discount
     */
    public function setValueFactor(\Mu4ddi3\Compensa\Webservice\StructType\Factor $valueFactor = null)
    {
        if (is_null($valueFactor) || (is_array($valueFactor) && empty($valueFactor))) {
            unset($this->ValueFactor);
        } else {
            $this->ValueFactor = $valueFactor;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Discount
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
