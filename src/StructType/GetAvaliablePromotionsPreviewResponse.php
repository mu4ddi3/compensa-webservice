<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvaliablePromotionsPreviewResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetAvaliablePromotionsPreviewResponse
 * @subpackage Structs
 */
class GetAvaliablePromotionsPreviewResponse extends ResponseBase
{
    /**
     * The AvaliablePromotions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMZPPromotion
     */
    public $AvaliablePromotions;
    /**
     * Constructor method for GetAvaliablePromotionsPreviewResponse
     * @uses GetAvaliablePromotionsPreviewResponse::setAvaliablePromotions()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMZPPromotion $avaliablePromotions
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMZPPromotion $avaliablePromotions = null)
    {
        $this
            ->setAvaliablePromotions($avaliablePromotions);
    }
    /**
     * Get AvaliablePromotions value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMZPPromotion|null
     */
    public function getAvaliablePromotions()
    {
        return isset($this->AvaliablePromotions) ? $this->AvaliablePromotions : null;
    }
    /**
     * Set AvaliablePromotions value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMZPPromotion $avaliablePromotions
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetAvaliablePromotionsPreviewResponse
     */
    public function setAvaliablePromotions(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMZPPromotion $avaliablePromotions = null)
    {
        if (is_null($avaliablePromotions) || (is_array($avaliablePromotions) && empty($avaliablePromotions))) {
            unset($this->AvaliablePromotions);
        } else {
            $this->AvaliablePromotions = $avaliablePromotions;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetAvaliablePromotionsPreviewResponse
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
