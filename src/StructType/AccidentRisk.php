<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccidentRisk StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AccidentRisk
 * @subpackage Structs
 */
class AccidentRisk extends MyBusinessRisk
{
    /**
     * The InsuranceSumForPerson
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $InsuranceSumForPerson;
    /**
     * The NumberOfPeopleOver55Class1
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfPeopleOver55Class1;
    /**
     * The NumberOfPeopleOver55Class2
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfPeopleOver55Class2;
    /**
     * The NumberOfPeopleUnder55Class1
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfPeopleUnder55Class1;
    /**
     * The NumberOfPeopleUnder55Class2
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfPeopleUnder55Class2;
    /**
     * Constructor method for AccidentRisk
     * @uses AccidentRisk::setInsuranceSumForPerson()
     * @uses AccidentRisk::setNumberOfPeopleOver55Class1()
     * @uses AccidentRisk::setNumberOfPeopleOver55Class2()
     * @uses AccidentRisk::setNumberOfPeopleUnder55Class1()
     * @uses AccidentRisk::setNumberOfPeopleUnder55Class2()
     * @param float $insuranceSumForPerson
     * @param int $numberOfPeopleOver55Class1
     * @param int $numberOfPeopleOver55Class2
     * @param int $numberOfPeopleUnder55Class1
     * @param int $numberOfPeopleUnder55Class2
     */
    public function __construct($insuranceSumForPerson = null, $numberOfPeopleOver55Class1 = null, $numberOfPeopleOver55Class2 = null, $numberOfPeopleUnder55Class1 = null, $numberOfPeopleUnder55Class2 = null)
    {
        $this
            ->setInsuranceSumForPerson($insuranceSumForPerson)
            ->setNumberOfPeopleOver55Class1($numberOfPeopleOver55Class1)
            ->setNumberOfPeopleOver55Class2($numberOfPeopleOver55Class2)
            ->setNumberOfPeopleUnder55Class1($numberOfPeopleUnder55Class1)
            ->setNumberOfPeopleUnder55Class2($numberOfPeopleUnder55Class2);
    }
    /**
     * Get InsuranceSumForPerson value
     * @return float|null
     */
    public function getInsuranceSumForPerson()
    {
        return $this->InsuranceSumForPerson;
    }
    /**
     * Set InsuranceSumForPerson value
     * @param float $insuranceSumForPerson
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AccidentRisk
     */
    public function setInsuranceSumForPerson($insuranceSumForPerson = null)
    {
        $this->InsuranceSumForPerson = $insuranceSumForPerson;
        return $this;
    }
    /**
     * Get NumberOfPeopleOver55Class1 value
     * @return int|null
     */
    public function getNumberOfPeopleOver55Class1()
    {
        return $this->NumberOfPeopleOver55Class1;
    }
    /**
     * Set NumberOfPeopleOver55Class1 value
     * @param int $numberOfPeopleOver55Class1
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AccidentRisk
     */
    public function setNumberOfPeopleOver55Class1($numberOfPeopleOver55Class1 = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfPeopleOver55Class1) && !is_numeric($numberOfPeopleOver55Class1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfPeopleOver55Class1)), __LINE__);
        }
        $this->NumberOfPeopleOver55Class1 = $numberOfPeopleOver55Class1;
        return $this;
    }
    /**
     * Get NumberOfPeopleOver55Class2 value
     * @return int|null
     */
    public function getNumberOfPeopleOver55Class2()
    {
        return $this->NumberOfPeopleOver55Class2;
    }
    /**
     * Set NumberOfPeopleOver55Class2 value
     * @param int $numberOfPeopleOver55Class2
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AccidentRisk
     */
    public function setNumberOfPeopleOver55Class2($numberOfPeopleOver55Class2 = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfPeopleOver55Class2) && !is_numeric($numberOfPeopleOver55Class2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfPeopleOver55Class2)), __LINE__);
        }
        $this->NumberOfPeopleOver55Class2 = $numberOfPeopleOver55Class2;
        return $this;
    }
    /**
     * Get NumberOfPeopleUnder55Class1 value
     * @return int|null
     */
    public function getNumberOfPeopleUnder55Class1()
    {
        return $this->NumberOfPeopleUnder55Class1;
    }
    /**
     * Set NumberOfPeopleUnder55Class1 value
     * @param int $numberOfPeopleUnder55Class1
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AccidentRisk
     */
    public function setNumberOfPeopleUnder55Class1($numberOfPeopleUnder55Class1 = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfPeopleUnder55Class1) && !is_numeric($numberOfPeopleUnder55Class1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfPeopleUnder55Class1)), __LINE__);
        }
        $this->NumberOfPeopleUnder55Class1 = $numberOfPeopleUnder55Class1;
        return $this;
    }
    /**
     * Get NumberOfPeopleUnder55Class2 value
     * @return int|null
     */
    public function getNumberOfPeopleUnder55Class2()
    {
        return $this->NumberOfPeopleUnder55Class2;
    }
    /**
     * Set NumberOfPeopleUnder55Class2 value
     * @param int $numberOfPeopleUnder55Class2
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AccidentRisk
     */
    public function setNumberOfPeopleUnder55Class2($numberOfPeopleUnder55Class2 = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfPeopleUnder55Class2) && !is_numeric($numberOfPeopleUnder55Class2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfPeopleUnder55Class2)), __LINE__);
        }
        $this->NumberOfPeopleUnder55Class2 = $numberOfPeopleUnder55Class2;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AccidentRisk
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
