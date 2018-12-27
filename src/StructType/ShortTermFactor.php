<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShortTermFactor StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ShortTermFactor
 * @subpackage Structs
 */
class ShortTermFactor extends AbstractStructBase
{
    /**
     * The Factor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $Factor;
    /**
     * The MonthsCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MonthsCount;
    /**
     * Constructor method for ShortTermFactor
     * @uses ShortTermFactor::setFactor()
     * @uses ShortTermFactor::setMonthsCount()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $factor
     * @param int $monthsCount
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\Factor $factor = null, $monthsCount = null)
    {
        $this
            ->setFactor($factor)
            ->setMonthsCount($monthsCount);
    }
    /**
     * Get Factor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getFactor()
    {
        return isset($this->Factor) ? $this->Factor : null;
    }
    /**
     * Set Factor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $factor
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ShortTermFactor
     */
    public function setFactor(\Mu4ddi3\Compensa\Webservice\StructType\Factor $factor = null)
    {
        if (is_null($factor) || (is_array($factor) && empty($factor))) {
            unset($this->Factor);
        } else {
            $this->Factor = $factor;
        }
        return $this;
    }
    /**
     * Get MonthsCount value
     * @return int|null
     */
    public function getMonthsCount()
    {
        return $this->MonthsCount;
    }
    /**
     * Set MonthsCount value
     * @param int $monthsCount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ShortTermFactor
     */
    public function setMonthsCount($monthsCount = null)
    {
        // validation for constraint: int
        if (!is_null($monthsCount) && !is_numeric($monthsCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($monthsCount)), __LINE__);
        }
        $this->MonthsCount = $monthsCount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ShortTermFactor
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
