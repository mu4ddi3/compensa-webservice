<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MyBusinessActivity StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MyBusinessActivity
 * @subpackage Structs
 */
class MyBusinessActivity extends PkdCode
{
    /**
     * The Turnover
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $Turnover;
    /**
     * Constructor method for MyBusinessActivity
     * @uses MyBusinessActivity::setTurnover()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $turnover
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $turnover = null)
    {
        $this
            ->setTurnover($turnover);
    }
    /**
     * Get Turnover value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getTurnover()
    {
        return isset($this->Turnover) ? $this->Turnover : null;
    }
    /**
     * Set Turnover value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $turnover
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessActivity
     */
    public function setTurnover(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $turnover = null)
    {
        if (is_null($turnover) || (is_array($turnover) && empty($turnover))) {
            unset($this->Turnover);
        } else {
            $this->Turnover = $turnover;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessActivity
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
