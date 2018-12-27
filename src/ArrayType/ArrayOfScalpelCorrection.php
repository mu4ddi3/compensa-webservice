<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfScalpelCorrection ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfScalpelCorrection
 * @subpackage Arrays
 */
class ArrayOfScalpelCorrection extends AbstractStructArrayBase
{
    /**
     * The ScalpelCorrection
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ScalpelCorrection[]
     */
    public $ScalpelCorrection;
    /**
     * Constructor method for ArrayOfScalpelCorrection
     * @uses ArrayOfScalpelCorrection::setScalpelCorrection()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ScalpelCorrection[] $scalpelCorrection
     */
    public function __construct(array $scalpelCorrection = array())
    {
        $this
            ->setScalpelCorrection($scalpelCorrection);
    }
    /**
     * Get ScalpelCorrection value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelCorrection[]|null
     */
    public function getScalpelCorrection()
    {
        return isset($this->ScalpelCorrection) ? $this->ScalpelCorrection : null;
    }
    /**
     * Set ScalpelCorrection value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ScalpelCorrection[] $scalpelCorrection
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfScalpelCorrection
     */
    public function setScalpelCorrection(array $scalpelCorrection = array())
    {
        foreach ($scalpelCorrection as $arrayOfScalpelCorrectionScalpelCorrectionItem) {
            // validation for constraint: itemType
            if (!$arrayOfScalpelCorrectionScalpelCorrectionItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\ScalpelCorrection) {
                throw new \InvalidArgumentException(sprintf('The ScalpelCorrection property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\ScalpelCorrection, "%s" given', is_object($arrayOfScalpelCorrectionScalpelCorrectionItem) ? get_class($arrayOfScalpelCorrectionScalpelCorrectionItem) : gettype($arrayOfScalpelCorrectionScalpelCorrectionItem)), __LINE__);
            }
        }
        if (is_null($scalpelCorrection) || (is_array($scalpelCorrection) && empty($scalpelCorrection))) {
            unset($this->ScalpelCorrection);
        } else {
            $this->ScalpelCorrection = $scalpelCorrection;
        }
        return $this;
    }
    /**
     * Add item to ScalpelCorrection value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ScalpelCorrection $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfScalpelCorrection
     */
    public function addToScalpelCorrection(\Mu4ddi3\Compensa\Webservice\StructType\ScalpelCorrection $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\ScalpelCorrection) {
            throw new \InvalidArgumentException(sprintf('The ScalpelCorrection property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\ScalpelCorrection, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ScalpelCorrection[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelCorrection|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelCorrection|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelCorrection|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelCorrection|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelCorrection|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ScalpelCorrection
     */
    public function getAttributeName()
    {
        return 'ScalpelCorrection';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfScalpelCorrection
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
