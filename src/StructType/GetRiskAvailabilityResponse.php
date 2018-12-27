<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRiskAvailabilityResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetRiskAvailabilityResponse
 * @subpackage Structs
 */
class GetRiskAvailabilityResponse extends AbstractStructBase
{
    /**
     * The RiskAvailabilityRule
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\RiskAvailabilityRule
     */
    public $RiskAvailabilityRule;
    /**
     * Constructor method for GetRiskAvailabilityResponse
     * @uses GetRiskAvailabilityResponse::setRiskAvailabilityRule()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RiskAvailabilityRule $riskAvailabilityRule
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\RiskAvailabilityRule $riskAvailabilityRule = null)
    {
        $this
            ->setRiskAvailabilityRule($riskAvailabilityRule);
    }
    /**
     * Get RiskAvailabilityRule value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskAvailabilityRule|null
     */
    public function getRiskAvailabilityRule()
    {
        return isset($this->RiskAvailabilityRule) ? $this->RiskAvailabilityRule : null;
    }
    /**
     * Set RiskAvailabilityRule value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RiskAvailabilityRule $riskAvailabilityRule
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetRiskAvailabilityResponse
     */
    public function setRiskAvailabilityRule(\Mu4ddi3\Compensa\Webservice\StructType\RiskAvailabilityRule $riskAvailabilityRule = null)
    {
        if (is_null($riskAvailabilityRule) || (is_array($riskAvailabilityRule) && empty($riskAvailabilityRule))) {
            unset($this->RiskAvailabilityRule);
        } else {
            $this->RiskAvailabilityRule = $riskAvailabilityRule;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetRiskAvailabilityResponse
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
