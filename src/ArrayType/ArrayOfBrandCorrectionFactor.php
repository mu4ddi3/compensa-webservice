<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBrandCorrectionFactor ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfBrandCorrectionFactor
 * @subpackage Arrays
 */
class ArrayOfBrandCorrectionFactor extends AbstractStructArrayBase
{
    /**
     * The BrandCorrectionFactor
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\BrandCorrectionFactor[]
     */
    public $BrandCorrectionFactor;
    /**
     * Constructor method for ArrayOfBrandCorrectionFactor
     * @uses ArrayOfBrandCorrectionFactor::setBrandCorrectionFactor()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\BrandCorrectionFactor[] $brandCorrectionFactor
     */
    public function __construct(array $brandCorrectionFactor = array())
    {
        $this
            ->setBrandCorrectionFactor($brandCorrectionFactor);
    }
    /**
     * Get BrandCorrectionFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BrandCorrectionFactor[]|null
     */
    public function getBrandCorrectionFactor()
    {
        return isset($this->BrandCorrectionFactor) ? $this->BrandCorrectionFactor : null;
    }
    /**
     * Set BrandCorrectionFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\BrandCorrectionFactor[] $brandCorrectionFactor
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBrandCorrectionFactor
     */
    public function setBrandCorrectionFactor(array $brandCorrectionFactor = array())
    {
        foreach ($brandCorrectionFactor as $arrayOfBrandCorrectionFactorBrandCorrectionFactorItem) {
            // validation for constraint: itemType
            if (!$arrayOfBrandCorrectionFactorBrandCorrectionFactorItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\BrandCorrectionFactor) {
                throw new \InvalidArgumentException(sprintf('The BrandCorrectionFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\BrandCorrectionFactor, "%s" given', is_object($arrayOfBrandCorrectionFactorBrandCorrectionFactorItem) ? get_class($arrayOfBrandCorrectionFactorBrandCorrectionFactorItem) : gettype($arrayOfBrandCorrectionFactorBrandCorrectionFactorItem)), __LINE__);
            }
        }
        if (is_null($brandCorrectionFactor) || (is_array($brandCorrectionFactor) && empty($brandCorrectionFactor))) {
            unset($this->BrandCorrectionFactor);
        } else {
            $this->BrandCorrectionFactor = $brandCorrectionFactor;
        }
        return $this;
    }
    /**
     * Add item to BrandCorrectionFactor value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\BrandCorrectionFactor $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBrandCorrectionFactor
     */
    public function addToBrandCorrectionFactor(\Mu4ddi3\Compensa\Webservice\StructType\BrandCorrectionFactor $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\BrandCorrectionFactor) {
            throw new \InvalidArgumentException(sprintf('The BrandCorrectionFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\BrandCorrectionFactor, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BrandCorrectionFactor[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BrandCorrectionFactor|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BrandCorrectionFactor|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BrandCorrectionFactor|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BrandCorrectionFactor|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BrandCorrectionFactor|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string BrandCorrectionFactor
     */
    public function getAttributeName()
    {
        return 'BrandCorrectionFactor';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBrandCorrectionFactor
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
