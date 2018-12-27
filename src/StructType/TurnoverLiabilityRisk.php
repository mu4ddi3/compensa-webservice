<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TurnoverLiabilityRisk StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:TurnoverLiabilityRisk
 * @subpackage Structs
 */
class TurnoverLiabilityRisk extends MyBusinessRisk
{
    /**
     * The CalculationBaseType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\CalculationBaseType
     */
    public $CalculationBaseType;
    /**
     * The Turnover
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $Turnover;
    /**
     * Constructor method for TurnoverLiabilityRisk
     * @uses TurnoverLiabilityRisk::setCalculationBaseType()
     * @uses TurnoverLiabilityRisk::setTurnover()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CalculationBaseType $calculationBaseType
     * @param float $turnover
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\CalculationBaseType $calculationBaseType = null, $turnover = null)
    {
        $this
            ->setCalculationBaseType($calculationBaseType)
            ->setTurnover($turnover);
    }
    /**
     * Get CalculationBaseType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CalculationBaseType|null
     */
    public function getCalculationBaseType()
    {
        return isset($this->CalculationBaseType) ? $this->CalculationBaseType : null;
    }
    /**
     * Set CalculationBaseType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CalculationBaseType $calculationBaseType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\TurnoverLiabilityRisk
     */
    public function setCalculationBaseType(\Mu4ddi3\Compensa\Webservice\StructType\CalculationBaseType $calculationBaseType = null)
    {
        if (is_null($calculationBaseType) || (is_array($calculationBaseType) && empty($calculationBaseType))) {
            unset($this->CalculationBaseType);
        } else {
            $this->CalculationBaseType = $calculationBaseType;
        }
        return $this;
    }
    /**
     * Get Turnover value
     * @return float|null
     */
    public function getTurnover()
    {
        return $this->Turnover;
    }
    /**
     * Set Turnover value
     * @param float $turnover
     * @return \Mu4ddi3\Compensa\Webservice\StructType\TurnoverLiabilityRisk
     */
    public function setTurnover($turnover = null)
    {
        $this->Turnover = $turnover;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\TurnoverLiabilityRisk
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
