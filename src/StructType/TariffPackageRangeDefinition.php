<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TariffPackageRangeDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:TariffPackageRangeDefinition
 * @subpackage Structs
 */
class TariffPackageRangeDefinition extends AbstractStructBase
{
    /**
     * The RisksRanges
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPackageRiskRangeDefinition
     */
    public $RisksRanges;
    /**
     * Constructor method for TariffPackageRangeDefinition
     * @uses TariffPackageRangeDefinition::setRisksRanges()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPackageRiskRangeDefinition $risksRanges
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPackageRiskRangeDefinition $risksRanges = null)
    {
        $this
            ->setRisksRanges($risksRanges);
    }
    /**
     * Get RisksRanges value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPackageRiskRangeDefinition|null
     */
    public function getRisksRanges()
    {
        return isset($this->RisksRanges) ? $this->RisksRanges : null;
    }
    /**
     * Set RisksRanges value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPackageRiskRangeDefinition $risksRanges
     * @return \Mu4ddi3\Compensa\Webservice\StructType\TariffPackageRangeDefinition
     */
    public function setRisksRanges(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPackageRiskRangeDefinition $risksRanges = null)
    {
        if (is_null($risksRanges) || (is_array($risksRanges) && empty($risksRanges))) {
            unset($this->RisksRanges);
        } else {
            $this->RisksRanges = $risksRanges;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\TariffPackageRangeDefinition
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
