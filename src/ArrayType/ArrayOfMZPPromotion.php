<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfMZPPromotion ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfMZPPromotion
 * @subpackage Arrays
 */
class ArrayOfMZPPromotion extends AbstractStructArrayBase
{
    /**
     * The MZPPromotion
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MZPPromotion[]
     */
    public $MZPPromotion;
    /**
     * Constructor method for ArrayOfMZPPromotion
     * @uses ArrayOfMZPPromotion::setMZPPromotion()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MZPPromotion[] $mZPPromotion
     */
    public function __construct(array $mZPPromotion = array())
    {
        $this
            ->setMZPPromotion($mZPPromotion);
    }
    /**
     * Get MZPPromotion value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPPromotion[]|null
     */
    public function getMZPPromotion()
    {
        return isset($this->MZPPromotion) ? $this->MZPPromotion : null;
    }
    /**
     * Set MZPPromotion value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MZPPromotion[] $mZPPromotion
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMZPPromotion
     */
    public function setMZPPromotion(array $mZPPromotion = array())
    {
        foreach ($mZPPromotion as $arrayOfMZPPromotionMZPPromotionItem) {
            // validation for constraint: itemType
            if (!$arrayOfMZPPromotionMZPPromotionItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\MZPPromotion) {
                throw new \InvalidArgumentException(sprintf('The MZPPromotion property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\MZPPromotion, "%s" given', is_object($arrayOfMZPPromotionMZPPromotionItem) ? get_class($arrayOfMZPPromotionMZPPromotionItem) : gettype($arrayOfMZPPromotionMZPPromotionItem)), __LINE__);
            }
        }
        if (is_null($mZPPromotion) || (is_array($mZPPromotion) && empty($mZPPromotion))) {
            unset($this->MZPPromotion);
        } else {
            $this->MZPPromotion = $mZPPromotion;
        }
        return $this;
    }
    /**
     * Add item to MZPPromotion value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MZPPromotion $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMZPPromotion
     */
    public function addToMZPPromotion(\Mu4ddi3\Compensa\Webservice\StructType\MZPPromotion $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\MZPPromotion) {
            throw new \InvalidArgumentException(sprintf('The MZPPromotion property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\MZPPromotion, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->MZPPromotion[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPPromotion|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPPromotion|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPPromotion|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPPromotion|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPPromotion|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string MZPPromotion
     */
    public function getAttributeName()
    {
        return 'MZPPromotion';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMZPPromotion
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
