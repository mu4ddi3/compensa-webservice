<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPriceTest ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPriceTest
 * @subpackage Arrays
 */
class ArrayOfPriceTest extends AbstractStructArrayBase
{
    /**
     * The PriceTest
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PriceTest[]
     */
    public $PriceTest;
    /**
     * Constructor method for ArrayOfPriceTest
     * @uses ArrayOfPriceTest::setPriceTest()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PriceTest[] $priceTest
     */
    public function __construct(array $priceTest = array())
    {
        $this
            ->setPriceTest($priceTest);
    }
    /**
     * Get PriceTest value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTest[]|null
     */
    public function getPriceTest()
    {
        return isset($this->PriceTest) ? $this->PriceTest : null;
    }
    /**
     * Set PriceTest value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PriceTest[] $priceTest
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPriceTest
     */
    public function setPriceTest(array $priceTest = array())
    {
        foreach ($priceTest as $arrayOfPriceTestPriceTestItem) {
            // validation for constraint: itemType
            if (!$arrayOfPriceTestPriceTestItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\PriceTest) {
                throw new \InvalidArgumentException(sprintf('The PriceTest property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\PriceTest, "%s" given', is_object($arrayOfPriceTestPriceTestItem) ? get_class($arrayOfPriceTestPriceTestItem) : gettype($arrayOfPriceTestPriceTestItem)), __LINE__);
            }
        }
        if (is_null($priceTest) || (is_array($priceTest) && empty($priceTest))) {
            unset($this->PriceTest);
        } else {
            $this->PriceTest = $priceTest;
        }
        return $this;
    }
    /**
     * Add item to PriceTest value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PriceTest $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPriceTest
     */
    public function addToPriceTest(\Mu4ddi3\Compensa\Webservice\StructType\PriceTest $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\PriceTest) {
            throw new \InvalidArgumentException(sprintf('The PriceTest property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\PriceTest, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PriceTest[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTest|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTest|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTest|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTest|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTest|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PriceTest
     */
    public function getAttributeName()
    {
        return 'PriceTest';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPriceTest
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
