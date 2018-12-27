<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPromotionFile ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPromotionFile
 * @subpackage Arrays
 */
class ArrayOfPromotionFile extends AbstractStructArrayBase
{
    /**
     * The PromotionFile
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PromotionFile[]
     */
    public $PromotionFile;
    /**
     * Constructor method for ArrayOfPromotionFile
     * @uses ArrayOfPromotionFile::setPromotionFile()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PromotionFile[] $promotionFile
     */
    public function __construct(array $promotionFile = array())
    {
        $this
            ->setPromotionFile($promotionFile);
    }
    /**
     * Get PromotionFile value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PromotionFile[]|null
     */
    public function getPromotionFile()
    {
        return isset($this->PromotionFile) ? $this->PromotionFile : null;
    }
    /**
     * Set PromotionFile value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PromotionFile[] $promotionFile
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPromotionFile
     */
    public function setPromotionFile(array $promotionFile = array())
    {
        foreach ($promotionFile as $arrayOfPromotionFilePromotionFileItem) {
            // validation for constraint: itemType
            if (!$arrayOfPromotionFilePromotionFileItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\PromotionFile) {
                throw new \InvalidArgumentException(sprintf('The PromotionFile property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\PromotionFile, "%s" given', is_object($arrayOfPromotionFilePromotionFileItem) ? get_class($arrayOfPromotionFilePromotionFileItem) : gettype($arrayOfPromotionFilePromotionFileItem)), __LINE__);
            }
        }
        if (is_null($promotionFile) || (is_array($promotionFile) && empty($promotionFile))) {
            unset($this->PromotionFile);
        } else {
            $this->PromotionFile = $promotionFile;
        }
        return $this;
    }
    /**
     * Add item to PromotionFile value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PromotionFile $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPromotionFile
     */
    public function addToPromotionFile(\Mu4ddi3\Compensa\Webservice\StructType\PromotionFile $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\PromotionFile) {
            throw new \InvalidArgumentException(sprintf('The PromotionFile property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\PromotionFile, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PromotionFile[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PromotionFile|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PromotionFile|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PromotionFile|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PromotionFile|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PromotionFile|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PromotionFile
     */
    public function getAttributeName()
    {
        return 'PromotionFile';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPromotionFile
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
