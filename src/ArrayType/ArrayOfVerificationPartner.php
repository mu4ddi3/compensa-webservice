<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfVerificationPartner ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfVerificationPartner
 * @subpackage Arrays
 */
class ArrayOfVerificationPartner extends AbstractStructArrayBase
{
    /**
     * The VerificationPartner
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\VerificationPartner[]
     */
    public $VerificationPartner;
    /**
     * Constructor method for ArrayOfVerificationPartner
     * @uses ArrayOfVerificationPartner::setVerificationPartner()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VerificationPartner[] $verificationPartner
     */
    public function __construct(array $verificationPartner = array())
    {
        $this
            ->setVerificationPartner($verificationPartner);
    }
    /**
     * Get VerificationPartner value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VerificationPartner[]|null
     */
    public function getVerificationPartner()
    {
        return isset($this->VerificationPartner) ? $this->VerificationPartner : null;
    }
    /**
     * Set VerificationPartner value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VerificationPartner[] $verificationPartner
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVerificationPartner
     */
    public function setVerificationPartner(array $verificationPartner = array())
    {
        foreach ($verificationPartner as $arrayOfVerificationPartnerVerificationPartnerItem) {
            // validation for constraint: itemType
            if (!$arrayOfVerificationPartnerVerificationPartnerItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\VerificationPartner) {
                throw new \InvalidArgumentException(sprintf('The VerificationPartner property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\VerificationPartner, "%s" given', is_object($arrayOfVerificationPartnerVerificationPartnerItem) ? get_class($arrayOfVerificationPartnerVerificationPartnerItem) : gettype($arrayOfVerificationPartnerVerificationPartnerItem)), __LINE__);
            }
        }
        if (is_null($verificationPartner) || (is_array($verificationPartner) && empty($verificationPartner))) {
            unset($this->VerificationPartner);
        } else {
            $this->VerificationPartner = $verificationPartner;
        }
        return $this;
    }
    /**
     * Add item to VerificationPartner value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VerificationPartner $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVerificationPartner
     */
    public function addToVerificationPartner(\Mu4ddi3\Compensa\Webservice\StructType\VerificationPartner $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\VerificationPartner) {
            throw new \InvalidArgumentException(sprintf('The VerificationPartner property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\VerificationPartner, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->VerificationPartner[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VerificationPartner|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VerificationPartner|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VerificationPartner|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VerificationPartner|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VerificationPartner|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string VerificationPartner
     */
    public function getAttributeName()
    {
        return 'VerificationPartner';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVerificationPartner
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
