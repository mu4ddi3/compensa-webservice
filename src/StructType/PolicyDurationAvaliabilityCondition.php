<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PolicyDurationAvaliabilityCondition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PolicyDurationAvaliabilityCondition
 * @subpackage Structs
 */
class PolicyDurationAvaliabilityCondition extends AvailabilityCondition
{
    /**
     * The AvaliableForAnnualContract
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $AvaliableForAnnualContract;
    /**
     * The AvaliableForShortTermContract
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $AvaliableForShortTermContract;
    /**
     * Constructor method for PolicyDurationAvaliabilityCondition
     * @uses PolicyDurationAvaliabilityCondition::setAvaliableForAnnualContract()
     * @uses PolicyDurationAvaliabilityCondition::setAvaliableForShortTermContract()
     * @param bool $avaliableForAnnualContract
     * @param bool $avaliableForShortTermContract
     */
    public function __construct($avaliableForAnnualContract = null, $avaliableForShortTermContract = null)
    {
        $this
            ->setAvaliableForAnnualContract($avaliableForAnnualContract)
            ->setAvaliableForShortTermContract($avaliableForShortTermContract);
    }
    /**
     * Get AvaliableForAnnualContract value
     * @return bool|null
     */
    public function getAvaliableForAnnualContract()
    {
        return $this->AvaliableForAnnualContract;
    }
    /**
     * Set AvaliableForAnnualContract value
     * @param bool $avaliableForAnnualContract
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicyDurationAvaliabilityCondition
     */
    public function setAvaliableForAnnualContract($avaliableForAnnualContract = null)
    {
        // validation for constraint: boolean
        if (!is_null($avaliableForAnnualContract) && !is_bool($avaliableForAnnualContract)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($avaliableForAnnualContract)), __LINE__);
        }
        $this->AvaliableForAnnualContract = $avaliableForAnnualContract;
        return $this;
    }
    /**
     * Get AvaliableForShortTermContract value
     * @return bool|null
     */
    public function getAvaliableForShortTermContract()
    {
        return $this->AvaliableForShortTermContract;
    }
    /**
     * Set AvaliableForShortTermContract value
     * @param bool $avaliableForShortTermContract
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicyDurationAvaliabilityCondition
     */
    public function setAvaliableForShortTermContract($avaliableForShortTermContract = null)
    {
        // validation for constraint: boolean
        if (!is_null($avaliableForShortTermContract) && !is_bool($avaliableForShortTermContract)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($avaliableForShortTermContract)), __LINE__);
        }
        $this->AvaliableForShortTermContract = $avaliableForShortTermContract;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicyDurationAvaliabilityCondition
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
