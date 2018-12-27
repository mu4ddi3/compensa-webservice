<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DiscountDictionaryItem StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DiscountDictionaryItem
 * @subpackage Structs
 */
class DiscountDictionaryItem extends AbstractStructBase
{
    /**
     * The IsChangePossible
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsChangePossible;
    /**
     * The ObjectType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ObjectType;
    /**
     * The Product
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Product;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * Constructor method for DiscountDictionaryItem
     * @uses DiscountDictionaryItem::setIsChangePossible()
     * @uses DiscountDictionaryItem::setObjectType()
     * @uses DiscountDictionaryItem::setProduct()
     * @uses DiscountDictionaryItem::setType()
     * @param bool $isChangePossible
     * @param string $objectType
     * @param int $product
     * @param string $type
     */
    public function __construct($isChangePossible = null, $objectType = null, $product = null, $type = null)
    {
        $this
            ->setIsChangePossible($isChangePossible)
            ->setObjectType($objectType)
            ->setProduct($product)
            ->setType($type);
    }
    /**
     * Get IsChangePossible value
     * @return bool|null
     */
    public function getIsChangePossible()
    {
        return $this->IsChangePossible;
    }
    /**
     * Set IsChangePossible value
     * @param bool $isChangePossible
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DiscountDictionaryItem
     */
    public function setIsChangePossible($isChangePossible = null)
    {
        // validation for constraint: boolean
        if (!is_null($isChangePossible) && !is_bool($isChangePossible)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isChangePossible)), __LINE__);
        }
        $this->IsChangePossible = $isChangePossible;
        return $this;
    }
    /**
     * Get ObjectType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getObjectType()
    {
        return isset($this->ObjectType) ? $this->ObjectType : null;
    }
    /**
     * Set ObjectType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $objectType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DiscountDictionaryItem
     */
    public function setObjectType($objectType = null)
    {
        // validation for constraint: string
        if (!is_null($objectType) && !is_string($objectType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($objectType)), __LINE__);
        }
        if (is_null($objectType) || (is_array($objectType) && empty($objectType))) {
            unset($this->ObjectType);
        } else {
            $this->ObjectType = $objectType;
        }
        return $this;
    }
    /**
     * Get Product value
     * @return int|null
     */
    public function getProduct()
    {
        return $this->Product;
    }
    /**
     * Set Product value
     * @param int $product
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DiscountDictionaryItem
     */
    public function setProduct($product = null)
    {
        // validation for constraint: int
        if (!is_null($product) && !is_numeric($product)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($product)), __LINE__);
        }
        $this->Product = $product;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\DiscountType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\DiscountType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DiscountDictionaryItem
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\DiscountType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\DiscountType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DiscountDictionaryItem
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
