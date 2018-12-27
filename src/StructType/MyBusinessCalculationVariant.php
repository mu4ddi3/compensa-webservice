<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MyBusinessCalculationVariant StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MyBusinessCalculationVariant
 * @subpackage Structs
 */
class MyBusinessCalculationVariant extends CalculationVariant
{
    /**
     * The Contract
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessContract
     */
    public $Contract;
    /**
     * Constructor method for MyBusinessCalculationVariant
     * @uses MyBusinessCalculationVariant::setContract()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessContract $contract
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\MyBusinessContract $contract = null)
    {
        $this
            ->setContract($contract);
    }
    /**
     * Get Contract value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessContract|null
     */
    public function getContract()
    {
        return isset($this->Contract) ? $this->Contract : null;
    }
    /**
     * Set Contract value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessContract $contract
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessCalculationVariant
     */
    public function setContract(\Mu4ddi3\Compensa\Webservice\StructType\MyBusinessContract $contract = null)
    {
        if (is_null($contract) || (is_array($contract) && empty($contract))) {
            unset($this->Contract);
        } else {
            $this->Contract = $contract;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessCalculationVariant
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
