<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfMyBusinessActivity ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfMyBusinessActivity
 * @subpackage Arrays
 */
class ArrayOfMyBusinessActivity extends AbstractStructArrayBase
{
    /**
     * The MyBusinessActivity
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessActivity[]
     */
    public $MyBusinessActivity;
    /**
     * Constructor method for ArrayOfMyBusinessActivity
     * @uses ArrayOfMyBusinessActivity::setMyBusinessActivity()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessActivity[] $myBusinessActivity
     */
    public function __construct(array $myBusinessActivity = array())
    {
        $this
            ->setMyBusinessActivity($myBusinessActivity);
    }
    /**
     * Get MyBusinessActivity value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessActivity[]|null
     */
    public function getMyBusinessActivity()
    {
        return isset($this->MyBusinessActivity) ? $this->MyBusinessActivity : null;
    }
    /**
     * Set MyBusinessActivity value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessActivity[] $myBusinessActivity
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMyBusinessActivity
     */
    public function setMyBusinessActivity(array $myBusinessActivity = array())
    {
        foreach ($myBusinessActivity as $arrayOfMyBusinessActivityMyBusinessActivityItem) {
            // validation for constraint: itemType
            if (!$arrayOfMyBusinessActivityMyBusinessActivityItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessActivity) {
                throw new \InvalidArgumentException(sprintf('The MyBusinessActivity property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessActivity, "%s" given', is_object($arrayOfMyBusinessActivityMyBusinessActivityItem) ? get_class($arrayOfMyBusinessActivityMyBusinessActivityItem) : gettype($arrayOfMyBusinessActivityMyBusinessActivityItem)), __LINE__);
            }
        }
        if (is_null($myBusinessActivity) || (is_array($myBusinessActivity) && empty($myBusinessActivity))) {
            unset($this->MyBusinessActivity);
        } else {
            $this->MyBusinessActivity = $myBusinessActivity;
        }
        return $this;
    }
    /**
     * Add item to MyBusinessActivity value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessActivity $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMyBusinessActivity
     */
    public function addToMyBusinessActivity(\Mu4ddi3\Compensa\Webservice\StructType\MyBusinessActivity $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessActivity) {
            throw new \InvalidArgumentException(sprintf('The MyBusinessActivity property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessActivity, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->MyBusinessActivity[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessActivity|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessActivity|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessActivity|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessActivity|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessActivity|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string MyBusinessActivity
     */
    public function getAttributeName()
    {
        return 'MyBusinessActivity';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMyBusinessActivity
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
