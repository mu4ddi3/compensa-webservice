<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBasePremiumGapResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetBasePremiumGapResponse
 * @subpackage Structs
 */
class GetBasePremiumGapResponse extends GetBasePremiumResponse
{
    /**
     * The BasePremiumValueNet
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $BasePremiumValueNet;
    /**
     * Constructor method for GetBasePremiumGapResponse
     * @uses GetBasePremiumGapResponse::setBasePremiumValueNet()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $basePremiumValueNet
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $basePremiumValueNet = null)
    {
        $this
            ->setBasePremiumValueNet($basePremiumValueNet);
    }
    /**
     * Get BasePremiumValueNet value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getBasePremiumValueNet()
    {
        return isset($this->BasePremiumValueNet) ? $this->BasePremiumValueNet : null;
    }
    /**
     * Set BasePremiumValueNet value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $basePremiumValueNet
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetBasePremiumGapResponse
     */
    public function setBasePremiumValueNet(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $basePremiumValueNet = null)
    {
        if (is_null($basePremiumValueNet) || (is_array($basePremiumValueNet) && empty($basePremiumValueNet))) {
            unset($this->BasePremiumValueNet);
        } else {
            $this->BasePremiumValueNet = $basePremiumValueNet;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetBasePremiumGapResponse
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
