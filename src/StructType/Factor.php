<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Factor StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Factor
 * @subpackage Structs
 */
class Factor extends AbstractStructBase
{
    /**
     * The IsSumFactor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsSumFactor;
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $Value;
    /**
     * The moneySumFactorValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $moneySumFactorValue;
    /**
     * Constructor method for Factor
     * @uses Factor::setIsSumFactor()
     * @uses Factor::setValue()
     * @uses Factor::setMoneySumFactorValue()
     * @param bool $isSumFactor
     * @param float $value
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $moneySumFactorValue
     */
    public function __construct($isSumFactor = null, $value = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $moneySumFactorValue = null)
    {
        $this
            ->setIsSumFactor($isSumFactor)
            ->setValue($value)
            ->setMoneySumFactorValue($moneySumFactorValue);
    }
    /**
     * Get IsSumFactor value
     * @return bool|null
     */
    public function getIsSumFactor()
    {
        return $this->IsSumFactor;
    }
    /**
     * Set IsSumFactor value
     * @param bool $isSumFactor
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public function setIsSumFactor($isSumFactor = null)
    {
        // validation for constraint: boolean
        if (!is_null($isSumFactor) && !is_bool($isSumFactor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isSumFactor)), __LINE__);
        }
        $this->IsSumFactor = $isSumFactor;
        return $this;
    }
    /**
     * Get Value value
     * @return float|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param float $value
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public function setValue($value = null)
    {
        $this->Value = $value;
        return $this;
    }
    /**
     * Get moneySumFactorValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getMoneySumFactorValue()
    {
        return isset($this->moneySumFactorValue) ? $this->moneySumFactorValue : null;
    }
    /**
     * Set moneySumFactorValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $moneySumFactorValue
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public function setMoneySumFactorValue(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $moneySumFactorValue = null)
    {
        if (is_null($moneySumFactorValue) || (is_array($moneySumFactorValue) && empty($moneySumFactorValue))) {
            unset($this->moneySumFactorValue);
        } else {
            $this->moneySumFactorValue = $moneySumFactorValue;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor
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
