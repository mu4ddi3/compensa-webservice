<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBooking ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfBooking
 * @subpackage Arrays
 */
class ArrayOfBooking extends AbstractStructArrayBase
{
    /**
     * The Booking
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Booking[]
     */
    public $Booking;
    /**
     * Constructor method for ArrayOfBooking
     * @uses ArrayOfBooking::setBooking()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Booking[] $booking
     */
    public function __construct(array $booking = array())
    {
        $this
            ->setBooking($booking);
    }
    /**
     * Get Booking value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Booking[]|null
     */
    public function getBooking()
    {
        return isset($this->Booking) ? $this->Booking : null;
    }
    /**
     * Set Booking value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Booking[] $booking
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBooking
     */
    public function setBooking(array $booking = array())
    {
        foreach ($booking as $arrayOfBookingBookingItem) {
            // validation for constraint: itemType
            if (!$arrayOfBookingBookingItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\Booking) {
                throw new \InvalidArgumentException(sprintf('The Booking property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\Booking, "%s" given', is_object($arrayOfBookingBookingItem) ? get_class($arrayOfBookingBookingItem) : gettype($arrayOfBookingBookingItem)), __LINE__);
            }
        }
        if (is_null($booking) || (is_array($booking) && empty($booking))) {
            unset($this->Booking);
        } else {
            $this->Booking = $booking;
        }
        return $this;
    }
    /**
     * Add item to Booking value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Booking $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBooking
     */
    public function addToBooking(\Mu4ddi3\Compensa\Webservice\StructType\Booking $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\Booking) {
            throw new \InvalidArgumentException(sprintf('The Booking property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\Booking, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Booking[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Booking|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Booking|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Booking|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Booking|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Booking|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Booking
     */
    public function getAttributeName()
    {
        return 'Booking';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBooking
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
