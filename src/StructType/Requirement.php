<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Requirement StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Requirement
 * @subpackage Structs
 */
class Requirement extends AbstractStructBase
{
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Code;
    /**
     * The Discount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Discount
     */
    public $Discount;
    /**
     * The Factor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $Factor;
    /**
     * The RelatedObjects
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfanyType
     */
    public $RelatedObjects;
    /**
     * Constructor method for Requirement
     * @uses Requirement::setCode()
     * @uses Requirement::setDiscount()
     * @uses Requirement::setFactor()
     * @uses Requirement::setRelatedObjects()
     * @param string $code
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Discount $discount
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $factor
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfanyType $relatedObjects
     */
    public function __construct($code = null, \Mu4ddi3\Compensa\Webservice\StructType\Discount $discount = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $factor = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfanyType $relatedObjects = null)
    {
        $this
            ->setCode($code)
            ->setDiscount($discount)
            ->setFactor($factor)
            ->setRelatedObjects($relatedObjects);
    }
    /**
     * Get Code value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCode()
    {
        return isset($this->Code) ? $this->Code : null;
    }
    /**
     * Set Code value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $code
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Requirement
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        if (is_null($code) || (is_array($code) && empty($code))) {
            unset($this->Code);
        } else {
            $this->Code = $code;
        }
        return $this;
    }
    /**
     * Get Discount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Discount|null
     */
    public function getDiscount()
    {
        return isset($this->Discount) ? $this->Discount : null;
    }
    /**
     * Set Discount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Discount $discount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Requirement
     */
    public function setDiscount(\Mu4ddi3\Compensa\Webservice\StructType\Discount $discount = null)
    {
        if (is_null($discount) || (is_array($discount) && empty($discount))) {
            unset($this->Discount);
        } else {
            $this->Discount = $discount;
        }
        return $this;
    }
    /**
     * Get Factor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getFactor()
    {
        return isset($this->Factor) ? $this->Factor : null;
    }
    /**
     * Set Factor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $factor
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Requirement
     */
    public function setFactor(\Mu4ddi3\Compensa\Webservice\StructType\Factor $factor = null)
    {
        if (is_null($factor) || (is_array($factor) && empty($factor))) {
            unset($this->Factor);
        } else {
            $this->Factor = $factor;
        }
        return $this;
    }
    /**
     * Get RelatedObjects value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfanyType|null
     */
    public function getRelatedObjects()
    {
        return isset($this->RelatedObjects) ? $this->RelatedObjects : null;
    }
    /**
     * Set RelatedObjects value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfanyType $relatedObjects
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Requirement
     */
    public function setRelatedObjects(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfanyType $relatedObjects = null)
    {
        if (is_null($relatedObjects) || (is_array($relatedObjects) && empty($relatedObjects))) {
            unset($this->RelatedObjects);
        } else {
            $this->RelatedObjects = $relatedObjects;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Requirement
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
