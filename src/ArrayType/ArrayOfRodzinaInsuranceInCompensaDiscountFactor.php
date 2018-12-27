<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRodzinaInsuranceInCompensaDiscountFactor ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfRodzinaInsuranceInCompensaDiscountFactor
 * @subpackage Arrays
 */
class ArrayOfRodzinaInsuranceInCompensaDiscountFactor extends AbstractStructArrayBase
{
    /**
     * The RodzinaInsuranceInCompensaDiscountFactor
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\RodzinaInsuranceInCompensaDiscountFactor[]
     */
    public $RodzinaInsuranceInCompensaDiscountFactor;
    /**
     * Constructor method for ArrayOfRodzinaInsuranceInCompensaDiscountFactor
     * @uses ArrayOfRodzinaInsuranceInCompensaDiscountFactor::setRodzinaInsuranceInCompensaDiscountFactor()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RodzinaInsuranceInCompensaDiscountFactor[] $rodzinaInsuranceInCompensaDiscountFactor
     */
    public function __construct(array $rodzinaInsuranceInCompensaDiscountFactor = array())
    {
        $this
            ->setRodzinaInsuranceInCompensaDiscountFactor($rodzinaInsuranceInCompensaDiscountFactor);
    }
    /**
     * Get RodzinaInsuranceInCompensaDiscountFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RodzinaInsuranceInCompensaDiscountFactor[]|null
     */
    public function getRodzinaInsuranceInCompensaDiscountFactor()
    {
        return isset($this->RodzinaInsuranceInCompensaDiscountFactor) ? $this->RodzinaInsuranceInCompensaDiscountFactor : null;
    }
    /**
     * Set RodzinaInsuranceInCompensaDiscountFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RodzinaInsuranceInCompensaDiscountFactor[] $rodzinaInsuranceInCompensaDiscountFactor
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRodzinaInsuranceInCompensaDiscountFactor
     */
    public function setRodzinaInsuranceInCompensaDiscountFactor(array $rodzinaInsuranceInCompensaDiscountFactor = array())
    {
        foreach ($rodzinaInsuranceInCompensaDiscountFactor as $arrayOfRodzinaInsuranceInCompensaDiscountFactorRodzinaInsuranceInCompensaDiscountFactorItem) {
            // validation for constraint: itemType
            if (!$arrayOfRodzinaInsuranceInCompensaDiscountFactorRodzinaInsuranceInCompensaDiscountFactorItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\RodzinaInsuranceInCompensaDiscountFactor) {
                throw new \InvalidArgumentException(sprintf('The RodzinaInsuranceInCompensaDiscountFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\RodzinaInsuranceInCompensaDiscountFactor, "%s" given', is_object($arrayOfRodzinaInsuranceInCompensaDiscountFactorRodzinaInsuranceInCompensaDiscountFactorItem) ? get_class($arrayOfRodzinaInsuranceInCompensaDiscountFactorRodzinaInsuranceInCompensaDiscountFactorItem) : gettype($arrayOfRodzinaInsuranceInCompensaDiscountFactorRodzinaInsuranceInCompensaDiscountFactorItem)), __LINE__);
            }
        }
        if (is_null($rodzinaInsuranceInCompensaDiscountFactor) || (is_array($rodzinaInsuranceInCompensaDiscountFactor) && empty($rodzinaInsuranceInCompensaDiscountFactor))) {
            unset($this->RodzinaInsuranceInCompensaDiscountFactor);
        } else {
            $this->RodzinaInsuranceInCompensaDiscountFactor = $rodzinaInsuranceInCompensaDiscountFactor;
        }
        return $this;
    }
    /**
     * Add item to RodzinaInsuranceInCompensaDiscountFactor value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RodzinaInsuranceInCompensaDiscountFactor $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRodzinaInsuranceInCompensaDiscountFactor
     */
    public function addToRodzinaInsuranceInCompensaDiscountFactor(\Mu4ddi3\Compensa\Webservice\StructType\RodzinaInsuranceInCompensaDiscountFactor $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\RodzinaInsuranceInCompensaDiscountFactor) {
            throw new \InvalidArgumentException(sprintf('The RodzinaInsuranceInCompensaDiscountFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\RodzinaInsuranceInCompensaDiscountFactor, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RodzinaInsuranceInCompensaDiscountFactor[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RodzinaInsuranceInCompensaDiscountFactor|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RodzinaInsuranceInCompensaDiscountFactor|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RodzinaInsuranceInCompensaDiscountFactor|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RodzinaInsuranceInCompensaDiscountFactor|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RodzinaInsuranceInCompensaDiscountFactor|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RodzinaInsuranceInCompensaDiscountFactor
     */
    public function getAttributeName()
    {
        return 'RodzinaInsuranceInCompensaDiscountFactor';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRodzinaInsuranceInCompensaDiscountFactor
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
