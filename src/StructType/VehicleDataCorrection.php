<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleDataCorrection StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:VehicleDataCorrection
 * @subpackage Structs
 */
class VehicleDataCorrection extends AbstractStructBase
{
    /**
     * The IsMileageCorrectionSpecified
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsMileageCorrectionSpecified;
    /**
     * The IsNextTechnicalExaminationDateSpecified
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsNextTechnicalExaminationDateSpecified;
    /**
     * The IsNumberOfOwnersCorrectionSpecified
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsNumberOfOwnersCorrectionSpecified;
    /**
     * The Mileage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Mileage;
    /**
     * The NextTechnicalExaminationDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $NextTechnicalExaminationDate;
    /**
     * The NumberOfOwners
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfOwners;
    /**
     * Constructor method for VehicleDataCorrection
     * @uses VehicleDataCorrection::setIsMileageCorrectionSpecified()
     * @uses VehicleDataCorrection::setIsNextTechnicalExaminationDateSpecified()
     * @uses VehicleDataCorrection::setIsNumberOfOwnersCorrectionSpecified()
     * @uses VehicleDataCorrection::setMileage()
     * @uses VehicleDataCorrection::setNextTechnicalExaminationDate()
     * @uses VehicleDataCorrection::setNumberOfOwners()
     * @param bool $isMileageCorrectionSpecified
     * @param bool $isNextTechnicalExaminationDateSpecified
     * @param bool $isNumberOfOwnersCorrectionSpecified
     * @param int $mileage
     * @param string $nextTechnicalExaminationDate
     * @param int $numberOfOwners
     */
    public function __construct($isMileageCorrectionSpecified = null, $isNextTechnicalExaminationDateSpecified = null, $isNumberOfOwnersCorrectionSpecified = null, $mileage = null, $nextTechnicalExaminationDate = null, $numberOfOwners = null)
    {
        $this
            ->setIsMileageCorrectionSpecified($isMileageCorrectionSpecified)
            ->setIsNextTechnicalExaminationDateSpecified($isNextTechnicalExaminationDateSpecified)
            ->setIsNumberOfOwnersCorrectionSpecified($isNumberOfOwnersCorrectionSpecified)
            ->setMileage($mileage)
            ->setNextTechnicalExaminationDate($nextTechnicalExaminationDate)
            ->setNumberOfOwners($numberOfOwners);
    }
    /**
     * Get IsMileageCorrectionSpecified value
     * @return bool|null
     */
    public function getIsMileageCorrectionSpecified()
    {
        return $this->IsMileageCorrectionSpecified;
    }
    /**
     * Set IsMileageCorrectionSpecified value
     * @param bool $isMileageCorrectionSpecified
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleDataCorrection
     */
    public function setIsMileageCorrectionSpecified($isMileageCorrectionSpecified = null)
    {
        // validation for constraint: boolean
        if (!is_null($isMileageCorrectionSpecified) && !is_bool($isMileageCorrectionSpecified)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isMileageCorrectionSpecified)), __LINE__);
        }
        $this->IsMileageCorrectionSpecified = $isMileageCorrectionSpecified;
        return $this;
    }
    /**
     * Get IsNextTechnicalExaminationDateSpecified value
     * @return bool|null
     */
    public function getIsNextTechnicalExaminationDateSpecified()
    {
        return $this->IsNextTechnicalExaminationDateSpecified;
    }
    /**
     * Set IsNextTechnicalExaminationDateSpecified value
     * @param bool $isNextTechnicalExaminationDateSpecified
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleDataCorrection
     */
    public function setIsNextTechnicalExaminationDateSpecified($isNextTechnicalExaminationDateSpecified = null)
    {
        // validation for constraint: boolean
        if (!is_null($isNextTechnicalExaminationDateSpecified) && !is_bool($isNextTechnicalExaminationDateSpecified)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isNextTechnicalExaminationDateSpecified)), __LINE__);
        }
        $this->IsNextTechnicalExaminationDateSpecified = $isNextTechnicalExaminationDateSpecified;
        return $this;
    }
    /**
     * Get IsNumberOfOwnersCorrectionSpecified value
     * @return bool|null
     */
    public function getIsNumberOfOwnersCorrectionSpecified()
    {
        return $this->IsNumberOfOwnersCorrectionSpecified;
    }
    /**
     * Set IsNumberOfOwnersCorrectionSpecified value
     * @param bool $isNumberOfOwnersCorrectionSpecified
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleDataCorrection
     */
    public function setIsNumberOfOwnersCorrectionSpecified($isNumberOfOwnersCorrectionSpecified = null)
    {
        // validation for constraint: boolean
        if (!is_null($isNumberOfOwnersCorrectionSpecified) && !is_bool($isNumberOfOwnersCorrectionSpecified)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isNumberOfOwnersCorrectionSpecified)), __LINE__);
        }
        $this->IsNumberOfOwnersCorrectionSpecified = $isNumberOfOwnersCorrectionSpecified;
        return $this;
    }
    /**
     * Get Mileage value
     * @return int|null
     */
    public function getMileage()
    {
        return $this->Mileage;
    }
    /**
     * Set Mileage value
     * @param int $mileage
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleDataCorrection
     */
    public function setMileage($mileage = null)
    {
        // validation for constraint: int
        if (!is_null($mileage) && !is_numeric($mileage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($mileage)), __LINE__);
        }
        $this->Mileage = $mileage;
        return $this;
    }
    /**
     * Get NextTechnicalExaminationDate value
     * @return string|null
     */
    public function getNextTechnicalExaminationDate()
    {
        return $this->NextTechnicalExaminationDate;
    }
    /**
     * Set NextTechnicalExaminationDate value
     * @param string $nextTechnicalExaminationDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleDataCorrection
     */
    public function setNextTechnicalExaminationDate($nextTechnicalExaminationDate = null)
    {
        // validation for constraint: string
        if (!is_null($nextTechnicalExaminationDate) && !is_string($nextTechnicalExaminationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nextTechnicalExaminationDate)), __LINE__);
        }
        $this->NextTechnicalExaminationDate = $nextTechnicalExaminationDate;
        return $this;
    }
    /**
     * Get NumberOfOwners value
     * @return int|null
     */
    public function getNumberOfOwners()
    {
        return $this->NumberOfOwners;
    }
    /**
     * Set NumberOfOwners value
     * @param int $numberOfOwners
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleDataCorrection
     */
    public function setNumberOfOwners($numberOfOwners = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfOwners) && !is_numeric($numberOfOwners)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfOwners)), __LINE__);
        }
        $this->NumberOfOwners = $numberOfOwners;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleDataCorrection
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
