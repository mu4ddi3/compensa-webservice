<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RiskExistenceAvaliabilityCondition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RiskExistenceAvaliabilityCondition
 * @subpackage Structs
 */
class RiskExistenceAvaliabilityCondition extends AvailabilityCondition
{
    /**
     * The RiskNamesFilterValues
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring
     */
    public $RiskNamesFilterValues;
    /**
     * Constructor method for RiskExistenceAvaliabilityCondition
     * @uses RiskExistenceAvaliabilityCondition::setRiskNamesFilterValues()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring $riskNamesFilterValues
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring $riskNamesFilterValues = null)
    {
        $this
            ->setRiskNamesFilterValues($riskNamesFilterValues);
    }
    /**
     * Get RiskNamesFilterValues value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring|null
     */
    public function getRiskNamesFilterValues()
    {
        return isset($this->RiskNamesFilterValues) ? $this->RiskNamesFilterValues : null;
    }
    /**
     * Set RiskNamesFilterValues value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring $riskNamesFilterValues
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskExistenceAvaliabilityCondition
     */
    public function setRiskNamesFilterValues(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring $riskNamesFilterValues = null)
    {
        if (is_null($riskNamesFilterValues) || (is_array($riskNamesFilterValues) && empty($riskNamesFilterValues))) {
            unset($this->RiskNamesFilterValues);
        } else {
            $this->RiskNamesFilterValues = $riskNamesFilterValues;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskExistenceAvaliabilityCondition
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
