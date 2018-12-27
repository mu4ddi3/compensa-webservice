<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PriceTestsData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PriceTestsData
 * @subpackage Structs
 */
class PriceTestsData extends AbstractStructBase
{
    /**
     * The Tests
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPriceTest
     */
    public $Tests;
    /**
     * Constructor method for PriceTestsData
     * @uses PriceTestsData::setTests()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPriceTest $tests
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPriceTest $tests = null)
    {
        $this
            ->setTests($tests);
    }
    /**
     * Get Tests value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPriceTest|null
     */
    public function getTests()
    {
        return isset($this->Tests) ? $this->Tests : null;
    }
    /**
     * Set Tests value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPriceTest $tests
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestsData
     */
    public function setTests(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPriceTest $tests = null)
    {
        if (is_null($tests) || (is_array($tests) && empty($tests))) {
            unset($this->Tests);
        } else {
            $this->Tests = $tests;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestsData
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
