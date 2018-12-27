<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfVerificationMessage ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfVerificationMessage
 * @subpackage Arrays
 */
class ArrayOfVerificationMessage extends AbstractStructArrayBase
{
    /**
     * The VerificationMessage
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\VerificationMessage[]
     */
    public $VerificationMessage;
    /**
     * Constructor method for ArrayOfVerificationMessage
     * @uses ArrayOfVerificationMessage::setVerificationMessage()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VerificationMessage[] $verificationMessage
     */
    public function __construct(array $verificationMessage = array())
    {
        $this
            ->setVerificationMessage($verificationMessage);
    }
    /**
     * Get VerificationMessage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VerificationMessage[]|null
     */
    public function getVerificationMessage()
    {
        return isset($this->VerificationMessage) ? $this->VerificationMessage : null;
    }
    /**
     * Set VerificationMessage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VerificationMessage[] $verificationMessage
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVerificationMessage
     */
    public function setVerificationMessage(array $verificationMessage = array())
    {
        foreach ($verificationMessage as $arrayOfVerificationMessageVerificationMessageItem) {
            // validation for constraint: itemType
            if (!$arrayOfVerificationMessageVerificationMessageItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\VerificationMessage) {
                throw new \InvalidArgumentException(sprintf('The VerificationMessage property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\VerificationMessage, "%s" given', is_object($arrayOfVerificationMessageVerificationMessageItem) ? get_class($arrayOfVerificationMessageVerificationMessageItem) : gettype($arrayOfVerificationMessageVerificationMessageItem)), __LINE__);
            }
        }
        if (is_null($verificationMessage) || (is_array($verificationMessage) && empty($verificationMessage))) {
            unset($this->VerificationMessage);
        } else {
            $this->VerificationMessage = $verificationMessage;
        }
        return $this;
    }
    /**
     * Add item to VerificationMessage value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VerificationMessage $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVerificationMessage
     */
    public function addToVerificationMessage(\Mu4ddi3\Compensa\Webservice\StructType\VerificationMessage $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\VerificationMessage) {
            throw new \InvalidArgumentException(sprintf('The VerificationMessage property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\VerificationMessage, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->VerificationMessage[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VerificationMessage|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VerificationMessage|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VerificationMessage|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VerificationMessage|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VerificationMessage|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string VerificationMessage
     */
    public function getAttributeName()
    {
        return 'VerificationMessage';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVerificationMessage
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
