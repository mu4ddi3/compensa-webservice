<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSupressedOwnContributionCorrectionFactor ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfSupressedOwnContributionCorrectionFactor
 * @subpackage Arrays
 */
class ArrayOfSupressedOwnContributionCorrectionFactor extends AbstractStructArrayBase
{
    /**
     * The SupressedOwnContributionCorrectionFactor
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\SupressedOwnContributionCorrectionFactor[]
     */
    public $SupressedOwnContributionCorrectionFactor;
    /**
     * Constructor method for ArrayOfSupressedOwnContributionCorrectionFactor
     * @uses ArrayOfSupressedOwnContributionCorrectionFactor::setSupressedOwnContributionCorrectionFactor()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\SupressedOwnContributionCorrectionFactor[] $supressedOwnContributionCorrectionFactor
     */
    public function __construct(array $supressedOwnContributionCorrectionFactor = array())
    {
        $this
            ->setSupressedOwnContributionCorrectionFactor($supressedOwnContributionCorrectionFactor);
    }
    /**
     * Get SupressedOwnContributionCorrectionFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\SupressedOwnContributionCorrectionFactor[]|null
     */
    public function getSupressedOwnContributionCorrectionFactor()
    {
        return isset($this->SupressedOwnContributionCorrectionFactor) ? $this->SupressedOwnContributionCorrectionFactor : null;
    }
    /**
     * Set SupressedOwnContributionCorrectionFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\SupressedOwnContributionCorrectionFactor[] $supressedOwnContributionCorrectionFactor
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfSupressedOwnContributionCorrectionFactor
     */
    public function setSupressedOwnContributionCorrectionFactor(array $supressedOwnContributionCorrectionFactor = array())
    {
        foreach ($supressedOwnContributionCorrectionFactor as $arrayOfSupressedOwnContributionCorrectionFactorSupressedOwnContributionCorrectionFactorItem) {
            // validation for constraint: itemType
            if (!$arrayOfSupressedOwnContributionCorrectionFactorSupressedOwnContributionCorrectionFactorItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\SupressedOwnContributionCorrectionFactor) {
                throw new \InvalidArgumentException(sprintf('The SupressedOwnContributionCorrectionFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\SupressedOwnContributionCorrectionFactor, "%s" given', is_object($arrayOfSupressedOwnContributionCorrectionFactorSupressedOwnContributionCorrectionFactorItem) ? get_class($arrayOfSupressedOwnContributionCorrectionFactorSupressedOwnContributionCorrectionFactorItem) : gettype($arrayOfSupressedOwnContributionCorrectionFactorSupressedOwnContributionCorrectionFactorItem)), __LINE__);
            }
        }
        if (is_null($supressedOwnContributionCorrectionFactor) || (is_array($supressedOwnContributionCorrectionFactor) && empty($supressedOwnContributionCorrectionFactor))) {
            unset($this->SupressedOwnContributionCorrectionFactor);
        } else {
            $this->SupressedOwnContributionCorrectionFactor = $supressedOwnContributionCorrectionFactor;
        }
        return $this;
    }
    /**
     * Add item to SupressedOwnContributionCorrectionFactor value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\SupressedOwnContributionCorrectionFactor $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfSupressedOwnContributionCorrectionFactor
     */
    public function addToSupressedOwnContributionCorrectionFactor(\Mu4ddi3\Compensa\Webservice\StructType\SupressedOwnContributionCorrectionFactor $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\SupressedOwnContributionCorrectionFactor) {
            throw new \InvalidArgumentException(sprintf('The SupressedOwnContributionCorrectionFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\SupressedOwnContributionCorrectionFactor, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SupressedOwnContributionCorrectionFactor[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\SupressedOwnContributionCorrectionFactor|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\SupressedOwnContributionCorrectionFactor|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\SupressedOwnContributionCorrectionFactor|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\SupressedOwnContributionCorrectionFactor|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\SupressedOwnContributionCorrectionFactor|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SupressedOwnContributionCorrectionFactor
     */
    public function getAttributeName()
    {
        return 'SupressedOwnContributionCorrectionFactor';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfSupressedOwnContributionCorrectionFactor
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
