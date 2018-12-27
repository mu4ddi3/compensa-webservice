<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAcInsuranceInCompensaDiscountFactor ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAcInsuranceInCompensaDiscountFactor
 * @subpackage Arrays
 */
class ArrayOfAcInsuranceInCompensaDiscountFactor extends AbstractStructArrayBase
{
    /**
     * The AcInsuranceInCompensaDiscountFactor
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\AcInsuranceInCompensaDiscountFactor[]
     */
    public $AcInsuranceInCompensaDiscountFactor;
    /**
     * Constructor method for ArrayOfAcInsuranceInCompensaDiscountFactor
     * @uses ArrayOfAcInsuranceInCompensaDiscountFactor::setAcInsuranceInCompensaDiscountFactor()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AcInsuranceInCompensaDiscountFactor[] $acInsuranceInCompensaDiscountFactor
     */
    public function __construct(array $acInsuranceInCompensaDiscountFactor = array())
    {
        $this
            ->setAcInsuranceInCompensaDiscountFactor($acInsuranceInCompensaDiscountFactor);
    }
    /**
     * Get AcInsuranceInCompensaDiscountFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AcInsuranceInCompensaDiscountFactor[]|null
     */
    public function getAcInsuranceInCompensaDiscountFactor()
    {
        return isset($this->AcInsuranceInCompensaDiscountFactor) ? $this->AcInsuranceInCompensaDiscountFactor : null;
    }
    /**
     * Set AcInsuranceInCompensaDiscountFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AcInsuranceInCompensaDiscountFactor[] $acInsuranceInCompensaDiscountFactor
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAcInsuranceInCompensaDiscountFactor
     */
    public function setAcInsuranceInCompensaDiscountFactor(array $acInsuranceInCompensaDiscountFactor = array())
    {
        foreach ($acInsuranceInCompensaDiscountFactor as $arrayOfAcInsuranceInCompensaDiscountFactorAcInsuranceInCompensaDiscountFactorItem) {
            // validation for constraint: itemType
            if (!$arrayOfAcInsuranceInCompensaDiscountFactorAcInsuranceInCompensaDiscountFactorItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\AcInsuranceInCompensaDiscountFactor) {
                throw new \InvalidArgumentException(sprintf('The AcInsuranceInCompensaDiscountFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\AcInsuranceInCompensaDiscountFactor, "%s" given', is_object($arrayOfAcInsuranceInCompensaDiscountFactorAcInsuranceInCompensaDiscountFactorItem) ? get_class($arrayOfAcInsuranceInCompensaDiscountFactorAcInsuranceInCompensaDiscountFactorItem) : gettype($arrayOfAcInsuranceInCompensaDiscountFactorAcInsuranceInCompensaDiscountFactorItem)), __LINE__);
            }
        }
        if (is_null($acInsuranceInCompensaDiscountFactor) || (is_array($acInsuranceInCompensaDiscountFactor) && empty($acInsuranceInCompensaDiscountFactor))) {
            unset($this->AcInsuranceInCompensaDiscountFactor);
        } else {
            $this->AcInsuranceInCompensaDiscountFactor = $acInsuranceInCompensaDiscountFactor;
        }
        return $this;
    }
    /**
     * Add item to AcInsuranceInCompensaDiscountFactor value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AcInsuranceInCompensaDiscountFactor $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAcInsuranceInCompensaDiscountFactor
     */
    public function addToAcInsuranceInCompensaDiscountFactor(\Mu4ddi3\Compensa\Webservice\StructType\AcInsuranceInCompensaDiscountFactor $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\AcInsuranceInCompensaDiscountFactor) {
            throw new \InvalidArgumentException(sprintf('The AcInsuranceInCompensaDiscountFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\AcInsuranceInCompensaDiscountFactor, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AcInsuranceInCompensaDiscountFactor[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AcInsuranceInCompensaDiscountFactor|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AcInsuranceInCompensaDiscountFactor|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AcInsuranceInCompensaDiscountFactor|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AcInsuranceInCompensaDiscountFactor|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AcInsuranceInCompensaDiscountFactor|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AcInsuranceInCompensaDiscountFactor
     */
    public function getAttributeName()
    {
        return 'AcInsuranceInCompensaDiscountFactor';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAcInsuranceInCompensaDiscountFactor
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
