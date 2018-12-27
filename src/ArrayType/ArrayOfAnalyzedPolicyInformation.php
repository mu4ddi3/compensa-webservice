<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAnalyzedPolicyInformation ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAnalyzedPolicyInformation
 * @subpackage Arrays
 */
class ArrayOfAnalyzedPolicyInformation extends AbstractStructArrayBase
{
    /**
     * The AnalyzedPolicyInformation
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\AnalyzedPolicyInformation[]
     */
    public $AnalyzedPolicyInformation;
    /**
     * Constructor method for ArrayOfAnalyzedPolicyInformation
     * @uses ArrayOfAnalyzedPolicyInformation::setAnalyzedPolicyInformation()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AnalyzedPolicyInformation[] $analyzedPolicyInformation
     */
    public function __construct(array $analyzedPolicyInformation = array())
    {
        $this
            ->setAnalyzedPolicyInformation($analyzedPolicyInformation);
    }
    /**
     * Get AnalyzedPolicyInformation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AnalyzedPolicyInformation[]|null
     */
    public function getAnalyzedPolicyInformation()
    {
        return isset($this->AnalyzedPolicyInformation) ? $this->AnalyzedPolicyInformation : null;
    }
    /**
     * Set AnalyzedPolicyInformation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AnalyzedPolicyInformation[] $analyzedPolicyInformation
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAnalyzedPolicyInformation
     */
    public function setAnalyzedPolicyInformation(array $analyzedPolicyInformation = array())
    {
        foreach ($analyzedPolicyInformation as $arrayOfAnalyzedPolicyInformationAnalyzedPolicyInformationItem) {
            // validation for constraint: itemType
            if (!$arrayOfAnalyzedPolicyInformationAnalyzedPolicyInformationItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\AnalyzedPolicyInformation) {
                throw new \InvalidArgumentException(sprintf('The AnalyzedPolicyInformation property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\AnalyzedPolicyInformation, "%s" given', is_object($arrayOfAnalyzedPolicyInformationAnalyzedPolicyInformationItem) ? get_class($arrayOfAnalyzedPolicyInformationAnalyzedPolicyInformationItem) : gettype($arrayOfAnalyzedPolicyInformationAnalyzedPolicyInformationItem)), __LINE__);
            }
        }
        if (is_null($analyzedPolicyInformation) || (is_array($analyzedPolicyInformation) && empty($analyzedPolicyInformation))) {
            unset($this->AnalyzedPolicyInformation);
        } else {
            $this->AnalyzedPolicyInformation = $analyzedPolicyInformation;
        }
        return $this;
    }
    /**
     * Add item to AnalyzedPolicyInformation value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AnalyzedPolicyInformation $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAnalyzedPolicyInformation
     */
    public function addToAnalyzedPolicyInformation(\Mu4ddi3\Compensa\Webservice\StructType\AnalyzedPolicyInformation $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\AnalyzedPolicyInformation) {
            throw new \InvalidArgumentException(sprintf('The AnalyzedPolicyInformation property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\AnalyzedPolicyInformation, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AnalyzedPolicyInformation[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AnalyzedPolicyInformation|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AnalyzedPolicyInformation|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AnalyzedPolicyInformation|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AnalyzedPolicyInformation|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AnalyzedPolicyInformation|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AnalyzedPolicyInformation
     */
    public function getAttributeName()
    {
        return 'AnalyzedPolicyInformation';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAnalyzedPolicyInformation
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
