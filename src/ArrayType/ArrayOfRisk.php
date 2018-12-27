<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRisk ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfRisk
 * @subpackage Arrays
 */
class ArrayOfRisk extends AbstractStructArrayBase
{
    /**
     * The Risk
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Risk[]
     */
    public $Risk;
    /**
     * Constructor method for ArrayOfRisk
     * @uses ArrayOfRisk::setRisk()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Risk[] $risk
     */
    public function __construct(array $risk = array())
    {
        $this
            ->setRisk($risk);
    }
    /**
     * Get Risk value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Risk[]|null
     */
    public function getRisk()
    {
        return isset($this->Risk) ? $this->Risk : null;
    }
    /**
     * Set Risk value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Risk[] $risk
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRisk
     */
    public function setRisk(array $risk = array())
    {
        foreach ($risk as $arrayOfRiskRiskItem) {
            // validation for constraint: itemType
            if (!$arrayOfRiskRiskItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\Risk) {
                throw new \InvalidArgumentException(sprintf('The Risk property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\Risk, "%s" given', is_object($arrayOfRiskRiskItem) ? get_class($arrayOfRiskRiskItem) : gettype($arrayOfRiskRiskItem)), __LINE__);
            }
        }
        if (is_null($risk) || (is_array($risk) && empty($risk))) {
            unset($this->Risk);
        } else {
            $this->Risk = $risk;
        }
        return $this;
    }
    /**
     * Add item to Risk value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Risk $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRisk
     */
    public function addToRisk(\Mu4ddi3\Compensa\Webservice\StructType\Risk $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\Risk) {
            throw new \InvalidArgumentException(sprintf('The Risk property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\Risk, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Risk[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Risk|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Risk|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Risk|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Risk|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Risk|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Risk
     */
    public function getAttributeName()
    {
        return 'Risk';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRisk
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
