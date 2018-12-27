<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfQuintupleInsuranceSumCorrectionFactor ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfQuintupleInsuranceSumCorrectionFactor
 * @subpackage Arrays
 */
class ArrayOfQuintupleInsuranceSumCorrectionFactor extends AbstractStructArrayBase
{
    /**
     * The QuintupleInsuranceSumCorrectionFactor
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\QuintupleInsuranceSumCorrectionFactor[]
     */
    public $QuintupleInsuranceSumCorrectionFactor;
    /**
     * Constructor method for ArrayOfQuintupleInsuranceSumCorrectionFactor
     * @uses ArrayOfQuintupleInsuranceSumCorrectionFactor::setQuintupleInsuranceSumCorrectionFactor()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\QuintupleInsuranceSumCorrectionFactor[] $quintupleInsuranceSumCorrectionFactor
     */
    public function __construct(array $quintupleInsuranceSumCorrectionFactor = array())
    {
        $this
            ->setQuintupleInsuranceSumCorrectionFactor($quintupleInsuranceSumCorrectionFactor);
    }
    /**
     * Get QuintupleInsuranceSumCorrectionFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\QuintupleInsuranceSumCorrectionFactor[]|null
     */
    public function getQuintupleInsuranceSumCorrectionFactor()
    {
        return isset($this->QuintupleInsuranceSumCorrectionFactor) ? $this->QuintupleInsuranceSumCorrectionFactor : null;
    }
    /**
     * Set QuintupleInsuranceSumCorrectionFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\QuintupleInsuranceSumCorrectionFactor[] $quintupleInsuranceSumCorrectionFactor
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfQuintupleInsuranceSumCorrectionFactor
     */
    public function setQuintupleInsuranceSumCorrectionFactor(array $quintupleInsuranceSumCorrectionFactor = array())
    {
        foreach ($quintupleInsuranceSumCorrectionFactor as $arrayOfQuintupleInsuranceSumCorrectionFactorQuintupleInsuranceSumCorrectionFactorItem) {
            // validation for constraint: itemType
            if (!$arrayOfQuintupleInsuranceSumCorrectionFactorQuintupleInsuranceSumCorrectionFactorItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\QuintupleInsuranceSumCorrectionFactor) {
                throw new \InvalidArgumentException(sprintf('The QuintupleInsuranceSumCorrectionFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\QuintupleInsuranceSumCorrectionFactor, "%s" given', is_object($arrayOfQuintupleInsuranceSumCorrectionFactorQuintupleInsuranceSumCorrectionFactorItem) ? get_class($arrayOfQuintupleInsuranceSumCorrectionFactorQuintupleInsuranceSumCorrectionFactorItem) : gettype($arrayOfQuintupleInsuranceSumCorrectionFactorQuintupleInsuranceSumCorrectionFactorItem)), __LINE__);
            }
        }
        if (is_null($quintupleInsuranceSumCorrectionFactor) || (is_array($quintupleInsuranceSumCorrectionFactor) && empty($quintupleInsuranceSumCorrectionFactor))) {
            unset($this->QuintupleInsuranceSumCorrectionFactor);
        } else {
            $this->QuintupleInsuranceSumCorrectionFactor = $quintupleInsuranceSumCorrectionFactor;
        }
        return $this;
    }
    /**
     * Add item to QuintupleInsuranceSumCorrectionFactor value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\QuintupleInsuranceSumCorrectionFactor $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfQuintupleInsuranceSumCorrectionFactor
     */
    public function addToQuintupleInsuranceSumCorrectionFactor(\Mu4ddi3\Compensa\Webservice\StructType\QuintupleInsuranceSumCorrectionFactor $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\QuintupleInsuranceSumCorrectionFactor) {
            throw new \InvalidArgumentException(sprintf('The QuintupleInsuranceSumCorrectionFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\QuintupleInsuranceSumCorrectionFactor, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->QuintupleInsuranceSumCorrectionFactor[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\QuintupleInsuranceSumCorrectionFactor|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\QuintupleInsuranceSumCorrectionFactor|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\QuintupleInsuranceSumCorrectionFactor|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\QuintupleInsuranceSumCorrectionFactor|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\QuintupleInsuranceSumCorrectionFactor|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string QuintupleInsuranceSumCorrectionFactor
     */
    public function getAttributeName()
    {
        return 'QuintupleInsuranceSumCorrectionFactor';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfQuintupleInsuranceSumCorrectionFactor
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
