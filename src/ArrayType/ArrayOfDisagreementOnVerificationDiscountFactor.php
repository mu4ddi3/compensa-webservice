<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDisagreementOnVerificationDiscountFactor ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfDisagreementOnVerificationDiscountFactor
 * @subpackage Arrays
 */
class ArrayOfDisagreementOnVerificationDiscountFactor extends AbstractStructArrayBase
{
    /**
     * The DisagreementOnVerificationDiscountFactor
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\DisagreementOnVerificationDiscountFactor[]
     */
    public $DisagreementOnVerificationDiscountFactor;
    /**
     * Constructor method for ArrayOfDisagreementOnVerificationDiscountFactor
     * @uses ArrayOfDisagreementOnVerificationDiscountFactor::setDisagreementOnVerificationDiscountFactor()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\DisagreementOnVerificationDiscountFactor[] $disagreementOnVerificationDiscountFactor
     */
    public function __construct(array $disagreementOnVerificationDiscountFactor = array())
    {
        $this
            ->setDisagreementOnVerificationDiscountFactor($disagreementOnVerificationDiscountFactor);
    }
    /**
     * Get DisagreementOnVerificationDiscountFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DisagreementOnVerificationDiscountFactor[]|null
     */
    public function getDisagreementOnVerificationDiscountFactor()
    {
        return isset($this->DisagreementOnVerificationDiscountFactor) ? $this->DisagreementOnVerificationDiscountFactor : null;
    }
    /**
     * Set DisagreementOnVerificationDiscountFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\DisagreementOnVerificationDiscountFactor[] $disagreementOnVerificationDiscountFactor
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDisagreementOnVerificationDiscountFactor
     */
    public function setDisagreementOnVerificationDiscountFactor(array $disagreementOnVerificationDiscountFactor = array())
    {
        foreach ($disagreementOnVerificationDiscountFactor as $arrayOfDisagreementOnVerificationDiscountFactorDisagreementOnVerificationDiscountFactorItem) {
            // validation for constraint: itemType
            if (!$arrayOfDisagreementOnVerificationDiscountFactorDisagreementOnVerificationDiscountFactorItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\DisagreementOnVerificationDiscountFactor) {
                throw new \InvalidArgumentException(sprintf('The DisagreementOnVerificationDiscountFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\DisagreementOnVerificationDiscountFactor, "%s" given', is_object($arrayOfDisagreementOnVerificationDiscountFactorDisagreementOnVerificationDiscountFactorItem) ? get_class($arrayOfDisagreementOnVerificationDiscountFactorDisagreementOnVerificationDiscountFactorItem) : gettype($arrayOfDisagreementOnVerificationDiscountFactorDisagreementOnVerificationDiscountFactorItem)), __LINE__);
            }
        }
        if (is_null($disagreementOnVerificationDiscountFactor) || (is_array($disagreementOnVerificationDiscountFactor) && empty($disagreementOnVerificationDiscountFactor))) {
            unset($this->DisagreementOnVerificationDiscountFactor);
        } else {
            $this->DisagreementOnVerificationDiscountFactor = $disagreementOnVerificationDiscountFactor;
        }
        return $this;
    }
    /**
     * Add item to DisagreementOnVerificationDiscountFactor value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\DisagreementOnVerificationDiscountFactor $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDisagreementOnVerificationDiscountFactor
     */
    public function addToDisagreementOnVerificationDiscountFactor(\Mu4ddi3\Compensa\Webservice\StructType\DisagreementOnVerificationDiscountFactor $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\DisagreementOnVerificationDiscountFactor) {
            throw new \InvalidArgumentException(sprintf('The DisagreementOnVerificationDiscountFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\DisagreementOnVerificationDiscountFactor, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DisagreementOnVerificationDiscountFactor[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DisagreementOnVerificationDiscountFactor|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DisagreementOnVerificationDiscountFactor|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DisagreementOnVerificationDiscountFactor|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DisagreementOnVerificationDiscountFactor|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DisagreementOnVerificationDiscountFactor|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DisagreementOnVerificationDiscountFactor
     */
    public function getAttributeName()
    {
        return 'DisagreementOnVerificationDiscountFactor';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDisagreementOnVerificationDiscountFactor
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
