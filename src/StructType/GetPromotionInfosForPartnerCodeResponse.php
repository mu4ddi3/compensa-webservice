<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPromotionInfosForPartnerCodeResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetPromotionInfosForPartnerCodeResponse
 * @subpackage Structs
 */
class GetPromotionInfosForPartnerCodeResponse extends ResponseBase
{
    /**
     * The PromotionInfos
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPromotionInfo
     */
    public $PromotionInfos;
    /**
     * Constructor method for GetPromotionInfosForPartnerCodeResponse
     * @uses GetPromotionInfosForPartnerCodeResponse::setPromotionInfos()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPromotionInfo $promotionInfos
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPromotionInfo $promotionInfos = null)
    {
        $this
            ->setPromotionInfos($promotionInfos);
    }
    /**
     * Get PromotionInfos value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPromotionInfo|null
     */
    public function getPromotionInfos()
    {
        return isset($this->PromotionInfos) ? $this->PromotionInfos : null;
    }
    /**
     * Set PromotionInfos value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPromotionInfo $promotionInfos
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetPromotionInfosForPartnerCodeResponse
     */
    public function setPromotionInfos(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPromotionInfo $promotionInfos = null)
    {
        if (is_null($promotionInfos) || (is_array($promotionInfos) && empty($promotionInfos))) {
            unset($this->PromotionInfos);
        } else {
            $this->PromotionInfos = $promotionInfos;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetPromotionInfosForPartnerCodeResponse
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
