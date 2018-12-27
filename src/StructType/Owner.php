<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Owner StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Owner
 * @subpackage Structs
 */
class Owner extends Partner
{
    /**
     * The ordinalNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ordinalNumber;
    /**
     * The percentageOfOwnership
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $percentageOfOwnership;
    /**
     * Constructor method for Owner
     * @uses Owner::setOrdinalNumber()
     * @uses Owner::setPercentageOfOwnership()
     * @param string $ordinalNumber
     * @param float $percentageOfOwnership
     */
    public function __construct($ordinalNumber = null, $percentageOfOwnership = null)
    {
        $this
            ->setOrdinalNumber($ordinalNumber)
            ->setPercentageOfOwnership($percentageOfOwnership);
    }
    /**
     * Get ordinalNumber value
     * @return string|null
     */
    public function getOrdinalNumber()
    {
        return $this->ordinalNumber;
    }
    /**
     * Set ordinalNumber value
     * @param string $ordinalNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Owner
     */
    public function setOrdinalNumber($ordinalNumber = null)
    {
        // validation for constraint: string
        if (!is_null($ordinalNumber) && !is_string($ordinalNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ordinalNumber)), __LINE__);
        }
        $this->ordinalNumber = $ordinalNumber;
        return $this;
    }
    /**
     * Get percentageOfOwnership value
     * @return float|null
     */
    public function getPercentageOfOwnership()
    {
        return $this->percentageOfOwnership;
    }
    /**
     * Set percentageOfOwnership value
     * @param float $percentageOfOwnership
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Owner
     */
    public function setPercentageOfOwnership($percentageOfOwnership = null)
    {
        $this->percentageOfOwnership = $percentageOfOwnership;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Owner
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
