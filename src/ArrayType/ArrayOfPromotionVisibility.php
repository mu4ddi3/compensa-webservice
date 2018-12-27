<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPromotionVisibility ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPromotionVisibility
 * @subpackage Arrays
 */
class ArrayOfPromotionVisibility extends AbstractStructArrayBase
{
    /**
     * The PromotionVisibility
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $PromotionVisibility;
    /**
     * Constructor method for ArrayOfPromotionVisibility
     * @uses ArrayOfPromotionVisibility::setPromotionVisibility()
     * @param string[] $promotionVisibility
     */
    public function __construct(array $promotionVisibility = array())
    {
        $this
            ->setPromotionVisibility($promotionVisibility);
    }
    /**
     * Get PromotionVisibility value
     * @return string[]|null
     */
    public function getPromotionVisibility()
    {
        return $this->PromotionVisibility;
    }
    /**
     * Set PromotionVisibility value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PromotionVisibility::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PromotionVisibility::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $promotionVisibility
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPromotionVisibility
     */
    public function setPromotionVisibility(array $promotionVisibility = array())
    {
        $invalidValues = array();
        foreach ($promotionVisibility as $arrayOfPromotionVisibilityPromotionVisibilityItem) {
            if (!\Mu4ddi3\Compensa\Webservice\EnumType\PromotionVisibility::valueIsValid($arrayOfPromotionVisibilityPromotionVisibilityItem)) {
                $invalidValues[] = var_export($arrayOfPromotionVisibilityPromotionVisibilityItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\PromotionVisibility::getValidValues())), __LINE__);
        }
        $this->PromotionVisibility = $promotionVisibility;
        return $this;
    }
    /**
     * Add item to PromotionVisibility value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PromotionVisibility::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PromotionVisibility::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPromotionVisibility
     */
    public function addToPromotionVisibility($item)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\PromotionVisibility::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\PromotionVisibility::getValidValues())), __LINE__);
        }
        $this->PromotionVisibility[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws \InvalidArgumentException
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PromotionVisibility::valueIsValid()
     * @param string $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPromotionVisibility
     */
    public function add($item)
    {
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\PromotionVisibility::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\PromotionVisibility::getValidValues())), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PromotionVisibility
     */
    public function getAttributeName()
    {
        return 'PromotionVisibility';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPromotionVisibility
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
