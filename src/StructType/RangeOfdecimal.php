<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RangeOfdecimal StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RangeOfdecimal
 * @subpackage Structs
 */
class RangeOfdecimal extends AbstractStructBase
{
    /**
     * The lowerBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $lowerBound;
    /**
     * The rangeType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\RangeType
     */
    public $rangeType;
    /**
     * The upperBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $upperBound;
    /**
     * Constructor method for RangeOfdecimal
     * @uses RangeOfdecimal::setLowerBound()
     * @uses RangeOfdecimal::setRangeType()
     * @uses RangeOfdecimal::setUpperBound()
     * @param float $lowerBound
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RangeType $rangeType
     * @param float $upperBound
     */
    public function __construct($lowerBound = null, \Mu4ddi3\Compensa\Webservice\StructType\RangeType $rangeType = null, $upperBound = null)
    {
        $this
            ->setLowerBound($lowerBound)
            ->setRangeType($rangeType)
            ->setUpperBound($upperBound);
    }
    /**
     * Get lowerBound value
     * @return float|null
     */
    public function getLowerBound()
    {
        return $this->lowerBound;
    }
    /**
     * Set lowerBound value
     * @param float $lowerBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RangeOfdecimal
     */
    public function setLowerBound($lowerBound = null)
    {
        $this->lowerBound = $lowerBound;
        return $this;
    }
    /**
     * Get rangeType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RangeType|null
     */
    public function getRangeType()
    {
        return isset($this->rangeType) ? $this->rangeType : null;
    }
    /**
     * Set rangeType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RangeType $rangeType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RangeOfdecimal
     */
    public function setRangeType(\Mu4ddi3\Compensa\Webservice\StructType\RangeType $rangeType = null)
    {
        if (is_null($rangeType) || (is_array($rangeType) && empty($rangeType))) {
            unset($this->rangeType);
        } else {
            $this->rangeType = $rangeType;
        }
        return $this;
    }
    /**
     * Get upperBound value
     * @return float|null
     */
    public function getUpperBound()
    {
        return $this->upperBound;
    }
    /**
     * Set upperBound value
     * @param float $upperBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RangeOfdecimal
     */
    public function setUpperBound($upperBound = null)
    {
        $this->upperBound = $upperBound;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RangeOfdecimal
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
