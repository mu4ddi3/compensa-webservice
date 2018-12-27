<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LeasingCorrectionTariffDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:LeasingCorrectionTariffDefinition
 * @subpackage Structs
 */
class LeasingCorrectionTariffDefinition extends AbstractStructBase
{
    /**
     * The LeasingCorrectionRules
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfLeasingCorrectionRule
     */
    public $LeasingCorrectionRules;
    /**
     * Constructor method for LeasingCorrectionTariffDefinition
     * @uses LeasingCorrectionTariffDefinition::setLeasingCorrectionRules()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfLeasingCorrectionRule $leasingCorrectionRules
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfLeasingCorrectionRule $leasingCorrectionRules = null)
    {
        $this
            ->setLeasingCorrectionRules($leasingCorrectionRules);
    }
    /**
     * Get LeasingCorrectionRules value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfLeasingCorrectionRule|null
     */
    public function getLeasingCorrectionRules()
    {
        return isset($this->LeasingCorrectionRules) ? $this->LeasingCorrectionRules : null;
    }
    /**
     * Set LeasingCorrectionRules value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfLeasingCorrectionRule $leasingCorrectionRules
     * @return \Mu4ddi3\Compensa\Webservice\StructType\LeasingCorrectionTariffDefinition
     */
    public function setLeasingCorrectionRules(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfLeasingCorrectionRule $leasingCorrectionRules = null)
    {
        if (is_null($leasingCorrectionRules) || (is_array($leasingCorrectionRules) && empty($leasingCorrectionRules))) {
            unset($this->LeasingCorrectionRules);
        } else {
            $this->LeasingCorrectionRules = $leasingCorrectionRules;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\LeasingCorrectionTariffDefinition
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
