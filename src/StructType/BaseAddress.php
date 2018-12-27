<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseAddress StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BaseAddress
 * @subpackage Structs
 */
class BaseAddress extends AbstractStructBase
{
    /**
     * The Text
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Text;
    /**
     * The UnstandarizedAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $UnstandarizedAddress;
    /**
     * Constructor method for BaseAddress
     * @uses BaseAddress::setText()
     * @uses BaseAddress::setUnstandarizedAddress()
     * @param string $text
     * @param string $unstandarizedAddress
     */
    public function __construct($text = null, $unstandarizedAddress = null)
    {
        $this
            ->setText($text)
            ->setUnstandarizedAddress($unstandarizedAddress);
    }
    /**
     * Get Text value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getText()
    {
        return isset($this->Text) ? $this->Text : null;
    }
    /**
     * Set Text value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $text
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BaseAddress
     */
    public function setText($text = null)
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($text)), __LINE__);
        }
        if (is_null($text) || (is_array($text) && empty($text))) {
            unset($this->Text);
        } else {
            $this->Text = $text;
        }
        return $this;
    }
    /**
     * Get UnstandarizedAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUnstandarizedAddress()
    {
        return isset($this->UnstandarizedAddress) ? $this->UnstandarizedAddress : null;
    }
    /**
     * Set UnstandarizedAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $unstandarizedAddress
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BaseAddress
     */
    public function setUnstandarizedAddress($unstandarizedAddress = null)
    {
        // validation for constraint: string
        if (!is_null($unstandarizedAddress) && !is_string($unstandarizedAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($unstandarizedAddress)), __LINE__);
        }
        if (is_null($unstandarizedAddress) || (is_array($unstandarizedAddress) && empty($unstandarizedAddress))) {
            unset($this->UnstandarizedAddress);
        } else {
            $this->UnstandarizedAddress = $unstandarizedAddress;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BaseAddress
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
