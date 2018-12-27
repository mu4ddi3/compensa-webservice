<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FillChosenDiscountDataRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:FillChosenDiscountDataRequest
 * @subpackage Structs
 */
class FillChosenDiscountDataRequest extends PromotionsModuleRequest
{
    /**
     * The PromotionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PromotionId;
    /**
     * The SelectedPromotionDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MZPDiscount
     */
    public $SelectedPromotionDiscount;
    /**
     * Constructor method for FillChosenDiscountDataRequest
     * @uses FillChosenDiscountDataRequest::setPromotionId()
     * @uses FillChosenDiscountDataRequest::setSelectedPromotionDiscount()
     * @param int $promotionId
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MZPDiscount $selectedPromotionDiscount
     */
    public function __construct($promotionId = null, \Mu4ddi3\Compensa\Webservice\StructType\MZPDiscount $selectedPromotionDiscount = null)
    {
        $this
            ->setPromotionId($promotionId)
            ->setSelectedPromotionDiscount($selectedPromotionDiscount);
    }
    /**
     * Get PromotionId value
     * @return int|null
     */
    public function getPromotionId()
    {
        return $this->PromotionId;
    }
    /**
     * Set PromotionId value
     * @param int $promotionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\FillChosenDiscountDataRequest
     */
    public function setPromotionId($promotionId = null)
    {
        // validation for constraint: int
        if (!is_null($promotionId) && !is_numeric($promotionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($promotionId)), __LINE__);
        }
        $this->PromotionId = $promotionId;
        return $this;
    }
    /**
     * Get SelectedPromotionDiscount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPDiscount|null
     */
    public function getSelectedPromotionDiscount()
    {
        return isset($this->SelectedPromotionDiscount) ? $this->SelectedPromotionDiscount : null;
    }
    /**
     * Set SelectedPromotionDiscount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MZPDiscount $selectedPromotionDiscount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\FillChosenDiscountDataRequest
     */
    public function setSelectedPromotionDiscount(\Mu4ddi3\Compensa\Webservice\StructType\MZPDiscount $selectedPromotionDiscount = null)
    {
        if (is_null($selectedPromotionDiscount) || (is_array($selectedPromotionDiscount) && empty($selectedPromotionDiscount))) {
            unset($this->SelectedPromotionDiscount);
        } else {
            $this->SelectedPromotionDiscount = $selectedPromotionDiscount;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\FillChosenDiscountDataRequest
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
