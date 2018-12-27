<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBonusMalusDiscountResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetBonusMalusDiscountResponse
 * @subpackage Structs
 */
class GetBonusMalusDiscountResponse extends AbstractStructBase
{
    /**
     * The BonusMalusDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusDiscount
     */
    public $BonusMalusDiscount;
    /**
     * Constructor method for GetBonusMalusDiscountResponse
     * @uses GetBonusMalusDiscountResponse::setBonusMalusDiscount()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusDiscount $bonusMalusDiscount
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\BonusMalusDiscount $bonusMalusDiscount = null)
    {
        $this
            ->setBonusMalusDiscount($bonusMalusDiscount);
    }
    /**
     * Get BonusMalusDiscount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusDiscount|null
     */
    public function getBonusMalusDiscount()
    {
        return isset($this->BonusMalusDiscount) ? $this->BonusMalusDiscount : null;
    }
    /**
     * Set BonusMalusDiscount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusDiscount $bonusMalusDiscount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetBonusMalusDiscountResponse
     */
    public function setBonusMalusDiscount(\Mu4ddi3\Compensa\Webservice\StructType\BonusMalusDiscount $bonusMalusDiscount = null)
    {
        if (is_null($bonusMalusDiscount) || (is_array($bonusMalusDiscount) && empty($bonusMalusDiscount))) {
            unset($this->BonusMalusDiscount);
        } else {
            $this->BonusMalusDiscount = $bonusMalusDiscount;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetBonusMalusDiscountResponse
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
