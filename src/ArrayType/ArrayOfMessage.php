<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfMessage ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfMessage
 * @subpackage Arrays
 */
class ArrayOfMessage extends AbstractStructArrayBase
{
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Message[]
     */
    public $Message;
    /**
     * Constructor method for ArrayOfMessage
     * @uses ArrayOfMessage::setMessage()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Message[] $message
     */
    public function __construct(array $message = array())
    {
        $this
            ->setMessage($message);
    }
    /**
     * Get Message value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Message[]|null
     */
    public function getMessage()
    {
        return isset($this->Message) ? $this->Message : null;
    }
    /**
     * Set Message value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Message[] $message
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMessage
     */
    public function setMessage(array $message = array())
    {
        foreach ($message as $arrayOfMessageMessageItem) {
            // validation for constraint: itemType
            if (!$arrayOfMessageMessageItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\Message) {
                throw new \InvalidArgumentException(sprintf('The Message property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\Message, "%s" given', is_object($arrayOfMessageMessageItem) ? get_class($arrayOfMessageMessageItem) : gettype($arrayOfMessageMessageItem)), __LINE__);
            }
        }
        if (is_null($message) || (is_array($message) && empty($message))) {
            unset($this->Message);
        } else {
            $this->Message = $message;
        }
        return $this;
    }
    /**
     * Add item to Message value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Message $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMessage
     */
    public function addToMessage(\Mu4ddi3\Compensa\Webservice\StructType\Message $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\Message) {
            throw new \InvalidArgumentException(sprintf('The Message property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\Message, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Message[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Message|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Message|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Message|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Message|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Message|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Message
     */
    public function getAttributeName()
    {
        return 'Message';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMessage
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
