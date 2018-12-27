<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DiscountForDiscountTariffItem StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DiscountForDiscountTariffItem
 * @subpackage Structs
 */
class DiscountForDiscountTariffItem extends AbstractStructBase
{
    /**
     * The Factor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $Factor;
    /**
     * The NumberOfPolicyYearsAc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\RangeOfdecimal
     */
    public $NumberOfPolicyYearsAc;
    /**
     * The NumberOfPolicyYearsOc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\RangeOfdecimal
     */
    public $NumberOfPolicyYearsOc;
    /**
     * Constructor method for DiscountForDiscountTariffItem
     * @uses DiscountForDiscountTariffItem::setFactor()
     * @uses DiscountForDiscountTariffItem::setNumberOfPolicyYearsAc()
     * @uses DiscountForDiscountTariffItem::setNumberOfPolicyYearsOc()
     * @param float $factor
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RangeOfdecimal $numberOfPolicyYearsAc
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RangeOfdecimal $numberOfPolicyYearsOc
     */
    public function __construct($factor = null, \Mu4ddi3\Compensa\Webservice\StructType\RangeOfdecimal $numberOfPolicyYearsAc = null, \Mu4ddi3\Compensa\Webservice\StructType\RangeOfdecimal $numberOfPolicyYearsOc = null)
    {
        $this
            ->setFactor($factor)
            ->setNumberOfPolicyYearsAc($numberOfPolicyYearsAc)
            ->setNumberOfPolicyYearsOc($numberOfPolicyYearsOc);
    }
    /**
     * Get Factor value
     * @return float|null
     */
    public function getFactor()
    {
        return $this->Factor;
    }
    /**
     * Set Factor value
     * @param float $factor
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DiscountForDiscountTariffItem
     */
    public function setFactor($factor = null)
    {
        $this->Factor = $factor;
        return $this;
    }
    /**
     * Get NumberOfPolicyYearsAc value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RangeOfdecimal|null
     */
    public function getNumberOfPolicyYearsAc()
    {
        return isset($this->NumberOfPolicyYearsAc) ? $this->NumberOfPolicyYearsAc : null;
    }
    /**
     * Set NumberOfPolicyYearsAc value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RangeOfdecimal $numberOfPolicyYearsAc
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DiscountForDiscountTariffItem
     */
    public function setNumberOfPolicyYearsAc(\Mu4ddi3\Compensa\Webservice\StructType\RangeOfdecimal $numberOfPolicyYearsAc = null)
    {
        if (is_null($numberOfPolicyYearsAc) || (is_array($numberOfPolicyYearsAc) && empty($numberOfPolicyYearsAc))) {
            unset($this->NumberOfPolicyYearsAc);
        } else {
            $this->NumberOfPolicyYearsAc = $numberOfPolicyYearsAc;
        }
        return $this;
    }
    /**
     * Get NumberOfPolicyYearsOc value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RangeOfdecimal|null
     */
    public function getNumberOfPolicyYearsOc()
    {
        return isset($this->NumberOfPolicyYearsOc) ? $this->NumberOfPolicyYearsOc : null;
    }
    /**
     * Set NumberOfPolicyYearsOc value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RangeOfdecimal $numberOfPolicyYearsOc
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DiscountForDiscountTariffItem
     */
    public function setNumberOfPolicyYearsOc(\Mu4ddi3\Compensa\Webservice\StructType\RangeOfdecimal $numberOfPolicyYearsOc = null)
    {
        if (is_null($numberOfPolicyYearsOc) || (is_array($numberOfPolicyYearsOc) && empty($numberOfPolicyYearsOc))) {
            unset($this->NumberOfPolicyYearsOc);
        } else {
            $this->NumberOfPolicyYearsOc = $numberOfPolicyYearsOc;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DiscountForDiscountTariffItem
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
