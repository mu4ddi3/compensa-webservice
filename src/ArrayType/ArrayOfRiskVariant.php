<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRiskVariant ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfRiskVariant
 * @subpackage Arrays
 */
class ArrayOfRiskVariant extends AbstractStructArrayBase
{
    /**
     * The RiskVariant
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\RiskVariant[]
     */
    public $RiskVariant;
    /**
     * Constructor method for ArrayOfRiskVariant
     * @uses ArrayOfRiskVariant::setRiskVariant()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RiskVariant[] $riskVariant
     */
    public function __construct(array $riskVariant = array())
    {
        $this
            ->setRiskVariant($riskVariant);
    }
    /**
     * Get RiskVariant value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskVariant[]|null
     */
    public function getRiskVariant()
    {
        return isset($this->RiskVariant) ? $this->RiskVariant : null;
    }
    /**
     * Set RiskVariant value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RiskVariant[] $riskVariant
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRiskVariant
     */
    public function setRiskVariant(array $riskVariant = array())
    {
        foreach ($riskVariant as $arrayOfRiskVariantRiskVariantItem) {
            // validation for constraint: itemType
            if (!$arrayOfRiskVariantRiskVariantItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\RiskVariant) {
                throw new \InvalidArgumentException(sprintf('The RiskVariant property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\RiskVariant, "%s" given', is_object($arrayOfRiskVariantRiskVariantItem) ? get_class($arrayOfRiskVariantRiskVariantItem) : gettype($arrayOfRiskVariantRiskVariantItem)), __LINE__);
            }
        }
        if (is_null($riskVariant) || (is_array($riskVariant) && empty($riskVariant))) {
            unset($this->RiskVariant);
        } else {
            $this->RiskVariant = $riskVariant;
        }
        return $this;
    }
    /**
     * Add item to RiskVariant value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RiskVariant $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRiskVariant
     */
    public function addToRiskVariant(\Mu4ddi3\Compensa\Webservice\StructType\RiskVariant $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\RiskVariant) {
            throw new \InvalidArgumentException(sprintf('The RiskVariant property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\RiskVariant, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RiskVariant[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskVariant|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskVariant|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskVariant|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskVariant|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskVariant|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RiskVariant
     */
    public function getAttributeName()
    {
        return 'RiskVariant';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRiskVariant
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
