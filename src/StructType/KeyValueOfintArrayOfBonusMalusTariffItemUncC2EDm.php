<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KeyValueOfintArrayOfBonusMalusTariffItemUncC2EDm
 * StructType
 * @subpackage Structs
 */
class KeyValueOfintArrayOfBonusMalusTariffItemUncC2EDm extends AbstractStructBase
{
    /**
     * The Key
     * @var int
     */
    public $Key;
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBonusMalusTariffItem
     */
    public $Value;
    /**
     * Constructor method for KeyValueOfintArrayOfBonusMalusTariffItemUncC2EDm
     * @uses KeyValueOfintArrayOfBonusMalusTariffItemUncC2EDm::setKey()
     * @uses KeyValueOfintArrayOfBonusMalusTariffItemUncC2EDm::setValue()
     * @param int $key
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBonusMalusTariffItem $value
     */
    public function __construct($key = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBonusMalusTariffItem $value = null)
    {
        $this
            ->setKey($key)
            ->setValue($value);
    }
    /**
     * Get Key value
     * @return int|null
     */
    public function getKey()
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param int $key
     * @return \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfintArrayOfBonusMalusTariffItemUncC2EDm
     */
    public function setKey($key = null)
    {
        // validation for constraint: int
        if (!is_null($key) && !is_numeric($key)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($key)), __LINE__);
        }
        $this->Key = $key;
        return $this;
    }
    /**
     * Get Value value
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBonusMalusTariffItem|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBonusMalusTariffItem $value
     * @return \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfintArrayOfBonusMalusTariffItemUncC2EDm
     */
    public function setValue(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBonusMalusTariffItem $value = null)
    {
        $this->Value = $value;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfintArrayOfBonusMalusTariffItemUncC2EDm
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
