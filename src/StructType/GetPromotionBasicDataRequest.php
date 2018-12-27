<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPromotionBasicDataRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetPromotionBasicDataRequest
 * @subpackage Structs
 */
class GetPromotionBasicDataRequest extends PromotionsModuleRequest
{
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
     * The UserId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $UserId;
    /**
     * Constructor method for GetPromotionBasicDataRequest
     * @uses GetPromotionBasicDataRequest::setPromotionCode()
     * @uses GetPromotionBasicDataRequest::setPromotionId()
     * @uses GetPromotionBasicDataRequest::setUserId()
     * @param string $promotionCode
     * @param int $promotionId
     * @param int $userId
     */
    public function __construct($promotionCode = null, $promotionId = null, $userId = null)
    {
        $this
            ->setPromotionCode($promotionCode)
            ->setPromotionId($promotionId)
            ->setUserId($userId);
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetPromotionBasicDataRequest
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetPromotionBasicDataRequest
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
     * Get UserId value
     * @return int|null
     */
    public function getUserId()
    {
        return $this->UserId;
    }
    /**
     * Set UserId value
     * @param int $userId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetPromotionBasicDataRequest
     */
    public function setUserId($userId = null)
    {
        // validation for constraint: int
        if (!is_null($userId) && !is_numeric($userId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($userId)), __LINE__);
        }
        $this->UserId = $userId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetPromotionBasicDataRequest
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
