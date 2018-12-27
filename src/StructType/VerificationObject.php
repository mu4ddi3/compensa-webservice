<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VerificationObject StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:VerificationObject
 * @subpackage Structs
 */
class VerificationObject extends AbstractStructBase
{
    /**
     * The PolicySummaryAc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PolicySummary
     */
    public $PolicySummaryAc;
    /**
     * The PolicySummaryOc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PolicySummary
     */
    public $PolicySummaryOc;
    /**
     * Constructor method for VerificationObject
     * @uses VerificationObject::setPolicySummaryAc()
     * @uses VerificationObject::setPolicySummaryOc()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PolicySummary $policySummaryAc
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PolicySummary $policySummaryOc
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\PolicySummary $policySummaryAc = null, \Mu4ddi3\Compensa\Webservice\StructType\PolicySummary $policySummaryOc = null)
    {
        $this
            ->setPolicySummaryAc($policySummaryAc)
            ->setPolicySummaryOc($policySummaryOc);
    }
    /**
     * Get PolicySummaryAc value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicySummary|null
     */
    public function getPolicySummaryAc()
    {
        return isset($this->PolicySummaryAc) ? $this->PolicySummaryAc : null;
    }
    /**
     * Set PolicySummaryAc value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PolicySummary $policySummaryAc
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VerificationObject
     */
    public function setPolicySummaryAc(\Mu4ddi3\Compensa\Webservice\StructType\PolicySummary $policySummaryAc = null)
    {
        if (is_null($policySummaryAc) || (is_array($policySummaryAc) && empty($policySummaryAc))) {
            unset($this->PolicySummaryAc);
        } else {
            $this->PolicySummaryAc = $policySummaryAc;
        }
        return $this;
    }
    /**
     * Get PolicySummaryOc value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicySummary|null
     */
    public function getPolicySummaryOc()
    {
        return isset($this->PolicySummaryOc) ? $this->PolicySummaryOc : null;
    }
    /**
     * Set PolicySummaryOc value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PolicySummary $policySummaryOc
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VerificationObject
     */
    public function setPolicySummaryOc(\Mu4ddi3\Compensa\Webservice\StructType\PolicySummary $policySummaryOc = null)
    {
        if (is_null($policySummaryOc) || (is_array($policySummaryOc) && empty($policySummaryOc))) {
            unset($this->PolicySummaryOc);
        } else {
            $this->PolicySummaryOc = $policySummaryOc;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VerificationObject
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
