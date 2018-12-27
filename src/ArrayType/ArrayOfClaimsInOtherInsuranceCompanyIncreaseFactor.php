<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfClaimsInOtherInsuranceCompanyIncreaseFactor
 * ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfClaimsInOtherInsuranceCompanyIncreaseFactor
 * @subpackage Arrays
 */
class ArrayOfClaimsInOtherInsuranceCompanyIncreaseFactor extends AbstractStructArrayBase
{
    /**
     * The ClaimsInOtherInsuranceCompanyIncreaseFactor
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ClaimsInOtherInsuranceCompanyIncreaseFactor[]
     */
    public $ClaimsInOtherInsuranceCompanyIncreaseFactor;
    /**
     * Constructor method for ArrayOfClaimsInOtherInsuranceCompanyIncreaseFactor
     * @uses ArrayOfClaimsInOtherInsuranceCompanyIncreaseFactor::setClaimsInOtherInsuranceCompanyIncreaseFactor()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ClaimsInOtherInsuranceCompanyIncreaseFactor[] $claimsInOtherInsuranceCompanyIncreaseFactor
     */
    public function __construct(array $claimsInOtherInsuranceCompanyIncreaseFactor = array())
    {
        $this
            ->setClaimsInOtherInsuranceCompanyIncreaseFactor($claimsInOtherInsuranceCompanyIncreaseFactor);
    }
    /**
     * Get ClaimsInOtherInsuranceCompanyIncreaseFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimsInOtherInsuranceCompanyIncreaseFactor[]|null
     */
    public function getClaimsInOtherInsuranceCompanyIncreaseFactor()
    {
        return isset($this->ClaimsInOtherInsuranceCompanyIncreaseFactor) ? $this->ClaimsInOtherInsuranceCompanyIncreaseFactor : null;
    }
    /**
     * Set ClaimsInOtherInsuranceCompanyIncreaseFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ClaimsInOtherInsuranceCompanyIncreaseFactor[] $claimsInOtherInsuranceCompanyIncreaseFactor
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimsInOtherInsuranceCompanyIncreaseFactor
     */
    public function setClaimsInOtherInsuranceCompanyIncreaseFactor(array $claimsInOtherInsuranceCompanyIncreaseFactor = array())
    {
        foreach ($claimsInOtherInsuranceCompanyIncreaseFactor as $arrayOfClaimsInOtherInsuranceCompanyIncreaseFactorClaimsInOtherInsuranceCompanyIncreaseFactorItem) {
            // validation for constraint: itemType
            if (!$arrayOfClaimsInOtherInsuranceCompanyIncreaseFactorClaimsInOtherInsuranceCompanyIncreaseFactorItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\ClaimsInOtherInsuranceCompanyIncreaseFactor) {
                throw new \InvalidArgumentException(sprintf('The ClaimsInOtherInsuranceCompanyIncreaseFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\ClaimsInOtherInsuranceCompanyIncreaseFactor, "%s" given', is_object($arrayOfClaimsInOtherInsuranceCompanyIncreaseFactorClaimsInOtherInsuranceCompanyIncreaseFactorItem) ? get_class($arrayOfClaimsInOtherInsuranceCompanyIncreaseFactorClaimsInOtherInsuranceCompanyIncreaseFactorItem) : gettype($arrayOfClaimsInOtherInsuranceCompanyIncreaseFactorClaimsInOtherInsuranceCompanyIncreaseFactorItem)), __LINE__);
            }
        }
        if (is_null($claimsInOtherInsuranceCompanyIncreaseFactor) || (is_array($claimsInOtherInsuranceCompanyIncreaseFactor) && empty($claimsInOtherInsuranceCompanyIncreaseFactor))) {
            unset($this->ClaimsInOtherInsuranceCompanyIncreaseFactor);
        } else {
            $this->ClaimsInOtherInsuranceCompanyIncreaseFactor = $claimsInOtherInsuranceCompanyIncreaseFactor;
        }
        return $this;
    }
    /**
     * Add item to ClaimsInOtherInsuranceCompanyIncreaseFactor value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ClaimsInOtherInsuranceCompanyIncreaseFactor $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimsInOtherInsuranceCompanyIncreaseFactor
     */
    public function addToClaimsInOtherInsuranceCompanyIncreaseFactor(\Mu4ddi3\Compensa\Webservice\StructType\ClaimsInOtherInsuranceCompanyIncreaseFactor $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\ClaimsInOtherInsuranceCompanyIncreaseFactor) {
            throw new \InvalidArgumentException(sprintf('The ClaimsInOtherInsuranceCompanyIncreaseFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\ClaimsInOtherInsuranceCompanyIncreaseFactor, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ClaimsInOtherInsuranceCompanyIncreaseFactor[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimsInOtherInsuranceCompanyIncreaseFactor|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimsInOtherInsuranceCompanyIncreaseFactor|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimsInOtherInsuranceCompanyIncreaseFactor|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimsInOtherInsuranceCompanyIncreaseFactor|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimsInOtherInsuranceCompanyIncreaseFactor|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ClaimsInOtherInsuranceCompanyIncreaseFactor
     */
    public function getAttributeName()
    {
        return 'ClaimsInOtherInsuranceCompanyIncreaseFactor';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimsInOtherInsuranceCompanyIncreaseFactor
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
