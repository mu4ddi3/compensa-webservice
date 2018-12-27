<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompensaEndorsement StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CompensaEndorsement
 * @subpackage Structs
 */
class CompensaEndorsement extends Endorsement
{
    /**
     * The causeId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $causeId;
    /**
     * The endorsementNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $endorsementNumber;
    /**
     * The issueDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $issueDate;
    /**
     * The startDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $startDate;
    /**
     * Constructor method for CompensaEndorsement
     * @uses CompensaEndorsement::setCauseId()
     * @uses CompensaEndorsement::setEndorsementNumber()
     * @uses CompensaEndorsement::setIssueDate()
     * @uses CompensaEndorsement::setStartDate()
     * @param int $causeId
     * @param int $endorsementNumber
     * @param string $issueDate
     * @param string $startDate
     */
    public function __construct($causeId = null, $endorsementNumber = null, $issueDate = null, $startDate = null)
    {
        $this
            ->setCauseId($causeId)
            ->setEndorsementNumber($endorsementNumber)
            ->setIssueDate($issueDate)
            ->setStartDate($startDate);
    }
    /**
     * Get causeId value
     * @return int|null
     */
    public function getCauseId()
    {
        return $this->causeId;
    }
    /**
     * Set causeId value
     * @param int $causeId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaEndorsement
     */
    public function setCauseId($causeId = null)
    {
        // validation for constraint: int
        if (!is_null($causeId) && !is_numeric($causeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($causeId)), __LINE__);
        }
        $this->causeId = $causeId;
        return $this;
    }
    /**
     * Get endorsementNumber value
     * @return int|null
     */
    public function getEndorsementNumber()
    {
        return $this->endorsementNumber;
    }
    /**
     * Set endorsementNumber value
     * @param int $endorsementNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaEndorsement
     */
    public function setEndorsementNumber($endorsementNumber = null)
    {
        // validation for constraint: int
        if (!is_null($endorsementNumber) && !is_numeric($endorsementNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($endorsementNumber)), __LINE__);
        }
        $this->endorsementNumber = $endorsementNumber;
        return $this;
    }
    /**
     * Get issueDate value
     * @return string|null
     */
    public function getIssueDate()
    {
        return $this->issueDate;
    }
    /**
     * Set issueDate value
     * @param string $issueDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaEndorsement
     */
    public function setIssueDate($issueDate = null)
    {
        // validation for constraint: string
        if (!is_null($issueDate) && !is_string($issueDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($issueDate)), __LINE__);
        }
        $this->issueDate = $issueDate;
        return $this;
    }
    /**
     * Get startDate value
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->startDate;
    }
    /**
     * Set startDate value
     * @param string $startDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaEndorsement
     */
    public function setStartDate($startDate = null)
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startDate)), __LINE__);
        }
        $this->startDate = $startDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaEndorsement
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
