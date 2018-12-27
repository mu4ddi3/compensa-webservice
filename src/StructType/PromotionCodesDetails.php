<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PromotionCodesDetails StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PromotionCodesDetails
 * @subpackage Structs
 */
class PromotionCodesDetails extends AbstractStructBase
{
    /**
     * The ActivePromotionCodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ActivePromotionCodes;
    /**
     * The PromotionCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PromotionCode;
    /**
     * The PromotionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PromotionId;
    /**
     * Constructor method for PromotionCodesDetails
     * @uses PromotionCodesDetails::setActivePromotionCodes()
     * @uses PromotionCodesDetails::setPromotionCode()
     * @uses PromotionCodesDetails::setPromotionId()
     * @param int $activePromotionCodes
     * @param string $promotionCode
     * @param int $promotionId
     */
    public function __construct($activePromotionCodes = null, $promotionCode = null, $promotionId = null)
    {
        $this
            ->setActivePromotionCodes($activePromotionCodes)
            ->setPromotionCode($promotionCode)
            ->setPromotionId($promotionId);
    }
    /**
     * Get ActivePromotionCodes value
     * @return int|null
     */
    public function getActivePromotionCodes()
    {
        return $this->ActivePromotionCodes;
    }
    /**
     * Set ActivePromotionCodes value
     * @param int $activePromotionCodes
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PromotionCodesDetails
     */
    public function setActivePromotionCodes($activePromotionCodes = null)
    {
        // validation for constraint: int
        if (!is_null($activePromotionCodes) && !is_numeric($activePromotionCodes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($activePromotionCodes)), __LINE__);
        }
        $this->ActivePromotionCodes = $activePromotionCodes;
        return $this;
    }
    /**
     * Get PromotionCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPromotionCode()
    {
        return isset($this->PromotionCode) ? $this->PromotionCode : null;
    }
    /**
     * Set PromotionCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $promotionCode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PromotionCodesDetails
     */
    public function setPromotionCode($promotionCode = null)
    {
        // validation for constraint: string
        if (!is_null($promotionCode) && !is_string($promotionCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($promotionCode)), __LINE__);
        }
        if (is_null($promotionCode) || (is_array($promotionCode) && empty($promotionCode))) {
            unset($this->PromotionCode);
        } else {
            $this->PromotionCode = $promotionCode;
        }
        return $this;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PromotionCodesDetails
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PromotionCodesDetails
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
