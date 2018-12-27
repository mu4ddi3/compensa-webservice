<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalEquipment StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AdditionalEquipment
 * @subpackage Structs
 */
class AdditionalEquipment extends AbstractStructBase
{
    /**
     * The Brand
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Brand;
    /**
     * The Kind
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Kind;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Type;
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $Value;
    /**
     * Constructor method for AdditionalEquipment
     * @uses AdditionalEquipment::setBrand()
     * @uses AdditionalEquipment::setKind()
     * @uses AdditionalEquipment::setType()
     * @uses AdditionalEquipment::setValue()
     * @param string $brand
     * @param string $kind
     * @param string $type
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $value
     */
    public function __construct($brand = null, $kind = null, $type = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $value = null)
    {
        $this
            ->setBrand($brand)
            ->setKind($kind)
            ->setType($type)
            ->setValue($value);
    }
    /**
     * Get Brand value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBrand()
    {
        return isset($this->Brand) ? $this->Brand : null;
    }
    /**
     * Set Brand value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $brand
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalEquipment
     */
    public function setBrand($brand = null)
    {
        // validation for constraint: string
        if (!is_null($brand) && !is_string($brand)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($brand)), __LINE__);
        }
        if (is_null($brand) || (is_array($brand) && empty($brand))) {
            unset($this->Brand);
        } else {
            $this->Brand = $brand;
        }
        return $this;
    }
    /**
     * Get Kind value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getKind()
    {
        return isset($this->Kind) ? $this->Kind : null;
    }
    /**
     * Set Kind value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $kind
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalEquipment
     */
    public function setKind($kind = null)
    {
        // validation for constraint: string
        if (!is_null($kind) && !is_string($kind)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($kind)), __LINE__);
        }
        if (is_null($kind) || (is_array($kind) && empty($kind))) {
            unset($this->Kind);
        } else {
            $this->Kind = $kind;
        }
        return $this;
    }
    /**
     * Get Type value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getType()
    {
        return isset($this->Type) ? $this->Type : null;
    }
    /**
     * Set Type value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $type
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalEquipment
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        if (is_null($type) || (is_array($type) && empty($type))) {
            unset($this->Type);
        } else {
            $this->Type = $type;
        }
        return $this;
    }
    /**
     * Get Value value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getValue()
    {
        return isset($this->Value) ? $this->Value : null;
    }
    /**
     * Set Value value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $value
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalEquipment
     */
    public function setValue(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $value = null)
    {
        if (is_null($value) || (is_array($value) && empty($value))) {
            unset($this->Value);
        } else {
            $this->Value = $value;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalEquipment
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
