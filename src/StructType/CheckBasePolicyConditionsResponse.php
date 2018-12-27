<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckBasePolicyConditionsResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CheckBasePolicyConditionsResponse
 * @subpackage Structs
 */
class CheckBasePolicyConditionsResponse extends ResponseBase
{
    /**
     * The AvaliablePromotion
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MZPPromotion
     */
    public $AvaliablePromotion;
    /**
     * Constructor method for CheckBasePolicyConditionsResponse
     * @uses CheckBasePolicyConditionsResponse::setAvaliablePromotion()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MZPPromotion $avaliablePromotion
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\MZPPromotion $avaliablePromotion = null)
    {
        $this
            ->setAvaliablePromotion($avaliablePromotion);
    }
    /**
     * Get AvaliablePromotion value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPPromotion|null
     */
    public function getAvaliablePromotion()
    {
        return isset($this->AvaliablePromotion) ? $this->AvaliablePromotion : null;
    }
    /**
     * Set AvaliablePromotion value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MZPPromotion $avaliablePromotion
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CheckBasePolicyConditionsResponse
     */
    public function setAvaliablePromotion(\Mu4ddi3\Compensa\Webservice\StructType\MZPPromotion $avaliablePromotion = null)
    {
        if (is_null($avaliablePromotion) || (is_array($avaliablePromotion) && empty($avaliablePromotion))) {
            unset($this->AvaliablePromotion);
        } else {
            $this->AvaliablePromotion = $avaliablePromotion;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CheckBasePolicyConditionsResponse
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
