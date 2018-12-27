<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompensaBooking StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CompensaBooking
 * @subpackage Structs
 */
class CompensaBooking extends Booking
{
    /**
     * The accTextId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $accTextId;
    /**
     * The agentId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $agentId;
    /**
     * The bookingValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $bookingValue;
    /**
     * The dueFromDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $dueFromDate;
    /**
     * The dueFromDateTick
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $dueFromDateTick;
    /**
     * The dueToDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $dueToDate;
    /**
     * The dueToDateTick
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $dueToDateTick;
    /**
     * The entryDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $entryDate;
    /**
     * The entryDateTick
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $entryDateTick;
    /**
     * The partnerId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $partnerId;
    /**
     * The riskType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $riskType;
    /**
     * The riskTypeId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $riskTypeId;
    /**
     * The simpleBookingValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $simpleBookingValue;
    /**
     * Constructor method for CompensaBooking
     * @uses CompensaBooking::setAccTextId()
     * @uses CompensaBooking::setAgentId()
     * @uses CompensaBooking::setBookingValue()
     * @uses CompensaBooking::setDueFromDate()
     * @uses CompensaBooking::setDueFromDateTick()
     * @uses CompensaBooking::setDueToDate()
     * @uses CompensaBooking::setDueToDateTick()
     * @uses CompensaBooking::setEntryDate()
     * @uses CompensaBooking::setEntryDateTick()
     * @uses CompensaBooking::setPartnerId()
     * @uses CompensaBooking::setRiskType()
     * @uses CompensaBooking::setRiskTypeId()
     * @uses CompensaBooking::setSimpleBookingValue()
     * @param int $accTextId
     * @param int $agentId
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $bookingValue
     * @param string $dueFromDate
     * @param int $dueFromDateTick
     * @param string $dueToDate
     * @param int $dueToDateTick
     * @param string $entryDate
     * @param int $entryDateTick
     * @param int $partnerId
     * @param string $riskType
     * @param int $riskTypeId
     * @param float $simpleBookingValue
     */
    public function __construct($accTextId = null, $agentId = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $bookingValue = null, $dueFromDate = null, $dueFromDateTick = null, $dueToDate = null, $dueToDateTick = null, $entryDate = null, $entryDateTick = null, $partnerId = null, $riskType = null, $riskTypeId = null, $simpleBookingValue = null)
    {
        $this
            ->setAccTextId($accTextId)
            ->setAgentId($agentId)
            ->setBookingValue($bookingValue)
            ->setDueFromDate($dueFromDate)
            ->setDueFromDateTick($dueFromDateTick)
            ->setDueToDate($dueToDate)
            ->setDueToDateTick($dueToDateTick)
            ->setEntryDate($entryDate)
            ->setEntryDateTick($entryDateTick)
            ->setPartnerId($partnerId)
            ->setRiskType($riskType)
            ->setRiskTypeId($riskTypeId)
            ->setSimpleBookingValue($simpleBookingValue);
    }
    /**
     * Get accTextId value
     * @return int|null
     */
    public function getAccTextId()
    {
        return $this->accTextId;
    }
    /**
     * Set accTextId value
     * @param int $accTextId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaBooking
     */
    public function setAccTextId($accTextId = null)
    {
        // validation for constraint: int
        if (!is_null($accTextId) && !is_numeric($accTextId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($accTextId)), __LINE__);
        }
        $this->accTextId = $accTextId;
        return $this;
    }
    /**
     * Get agentId value
     * @return int|null
     */
    public function getAgentId()
    {
        return $this->agentId;
    }
    /**
     * Set agentId value
     * @param int $agentId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaBooking
     */
    public function setAgentId($agentId = null)
    {
        // validation for constraint: int
        if (!is_null($agentId) && !is_numeric($agentId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($agentId)), __LINE__);
        }
        $this->agentId = $agentId;
        return $this;
    }
    /**
     * Get bookingValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getBookingValue()
    {
        return isset($this->bookingValue) ? $this->bookingValue : null;
    }
    /**
     * Set bookingValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $bookingValue
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaBooking
     */
    public function setBookingValue(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $bookingValue = null)
    {
        if (is_null($bookingValue) || (is_array($bookingValue) && empty($bookingValue))) {
            unset($this->bookingValue);
        } else {
            $this->bookingValue = $bookingValue;
        }
        return $this;
    }
    /**
     * Get dueFromDate value
     * @return string|null
     */
    public function getDueFromDate()
    {
        return $this->dueFromDate;
    }
    /**
     * Set dueFromDate value
     * @param string $dueFromDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaBooking
     */
    public function setDueFromDate($dueFromDate = null)
    {
        // validation for constraint: string
        if (!is_null($dueFromDate) && !is_string($dueFromDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dueFromDate)), __LINE__);
        }
        $this->dueFromDate = $dueFromDate;
        return $this;
    }
    /**
     * Get dueFromDateTick value
     * @return int|null
     */
    public function getDueFromDateTick()
    {
        return $this->dueFromDateTick;
    }
    /**
     * Set dueFromDateTick value
     * @param int $dueFromDateTick
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaBooking
     */
    public function setDueFromDateTick($dueFromDateTick = null)
    {
        // validation for constraint: int
        if (!is_null($dueFromDateTick) && !is_numeric($dueFromDateTick)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($dueFromDateTick)), __LINE__);
        }
        $this->dueFromDateTick = $dueFromDateTick;
        return $this;
    }
    /**
     * Get dueToDate value
     * @return string|null
     */
    public function getDueToDate()
    {
        return $this->dueToDate;
    }
    /**
     * Set dueToDate value
     * @param string $dueToDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaBooking
     */
    public function setDueToDate($dueToDate = null)
    {
        // validation for constraint: string
        if (!is_null($dueToDate) && !is_string($dueToDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dueToDate)), __LINE__);
        }
        $this->dueToDate = $dueToDate;
        return $this;
    }
    /**
     * Get dueToDateTick value
     * @return int|null
     */
    public function getDueToDateTick()
    {
        return $this->dueToDateTick;
    }
    /**
     * Set dueToDateTick value
     * @param int $dueToDateTick
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaBooking
     */
    public function setDueToDateTick($dueToDateTick = null)
    {
        // validation for constraint: int
        if (!is_null($dueToDateTick) && !is_numeric($dueToDateTick)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($dueToDateTick)), __LINE__);
        }
        $this->dueToDateTick = $dueToDateTick;
        return $this;
    }
    /**
     * Get entryDate value
     * @return string|null
     */
    public function getEntryDate()
    {
        return $this->entryDate;
    }
    /**
     * Set entryDate value
     * @param string $entryDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaBooking
     */
    public function setEntryDate($entryDate = null)
    {
        // validation for constraint: string
        if (!is_null($entryDate) && !is_string($entryDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($entryDate)), __LINE__);
        }
        $this->entryDate = $entryDate;
        return $this;
    }
    /**
     * Get entryDateTick value
     * @return int|null
     */
    public function getEntryDateTick()
    {
        return $this->entryDateTick;
    }
    /**
     * Set entryDateTick value
     * @param int $entryDateTick
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaBooking
     */
    public function setEntryDateTick($entryDateTick = null)
    {
        // validation for constraint: int
        if (!is_null($entryDateTick) && !is_numeric($entryDateTick)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($entryDateTick)), __LINE__);
        }
        $this->entryDateTick = $entryDateTick;
        return $this;
    }
    /**
     * Get partnerId value
     * @return int|null
     */
    public function getPartnerId()
    {
        return $this->partnerId;
    }
    /**
     * Set partnerId value
     * @param int $partnerId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaBooking
     */
    public function setPartnerId($partnerId = null)
    {
        // validation for constraint: int
        if (!is_null($partnerId) && !is_numeric($partnerId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($partnerId)), __LINE__);
        }
        $this->partnerId = $partnerId;
        return $this;
    }
    /**
     * Get riskType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRiskType()
    {
        return isset($this->riskType) ? $this->riskType : null;
    }
    /**
     * Set riskType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $riskType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaBooking
     */
    public function setRiskType($riskType = null)
    {
        // validation for constraint: string
        if (!is_null($riskType) && !is_string($riskType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($riskType)), __LINE__);
        }
        if (is_null($riskType) || (is_array($riskType) && empty($riskType))) {
            unset($this->riskType);
        } else {
            $this->riskType = $riskType;
        }
        return $this;
    }
    /**
     * Get riskTypeId value
     * @return int|null
     */
    public function getRiskTypeId()
    {
        return $this->riskTypeId;
    }
    /**
     * Set riskTypeId value
     * @param int $riskTypeId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaBooking
     */
    public function setRiskTypeId($riskTypeId = null)
    {
        // validation for constraint: int
        if (!is_null($riskTypeId) && !is_numeric($riskTypeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($riskTypeId)), __LINE__);
        }
        $this->riskTypeId = $riskTypeId;
        return $this;
    }
    /**
     * Get simpleBookingValue value
     * @return float|null
     */
    public function getSimpleBookingValue()
    {
        return $this->simpleBookingValue;
    }
    /**
     * Set simpleBookingValue value
     * @param float $simpleBookingValue
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaBooking
     */
    public function setSimpleBookingValue($simpleBookingValue = null)
    {
        $this->simpleBookingValue = $simpleBookingValue;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaBooking
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
