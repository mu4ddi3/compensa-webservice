<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBasePremiumResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetBasePremiumResponse
 * @subpackage Structs
 */
class GetBasePremiumResponse extends AbstractStructBase
{
    /**
     * The BasePremiumValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $BasePremiumValue;
    /**
     * Constructor method for GetBasePremiumResponse
     * @uses GetBasePremiumResponse::setBasePremiumValue()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $basePremiumValue
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $basePremiumValue = null)
    {
        $this
            ->setBasePremiumValue($basePremiumValue);
    }
    /**
     * Get BasePremiumValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getBasePremiumValue()
    {
        return isset($this->BasePremiumValue) ? $this->BasePremiumValue : null;
    }
    /**
     * Set BasePremiumValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $basePremiumValue
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetBasePremiumResponse
     */
    public function setBasePremiumValue(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $basePremiumValue = null)
    {
        if (is_null($basePremiumValue) || (is_array($basePremiumValue) && empty($basePremiumValue))) {
            unset($this->BasePremiumValue);
        } else {
            $this->BasePremiumValue = $basePremiumValue;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetBasePremiumResponse
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
