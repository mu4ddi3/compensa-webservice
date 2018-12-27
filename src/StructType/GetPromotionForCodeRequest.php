<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPromotionForCodeRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetPromotionForCodeRequest
 * @subpackage Structs
 */
class GetPromotionForCodeRequest extends PromotionsModuleRequest
{
    /**
     * The Contract
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var mixed
     */
    public $Contract;
    /**
     * The Product
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Product;
    /**
     * The PromotionCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PromotionCode;
    /**
     * Constructor method for GetPromotionForCodeRequest
     * @uses GetPromotionForCodeRequest::setContract()
     * @uses GetPromotionForCodeRequest::setProduct()
     * @uses GetPromotionForCodeRequest::setPromotionCode()
     * @param mixed $contract
     * @param int $product
     * @param string $promotionCode
     */
    public function __construct($contract = null, $product = null, $promotionCode = null)
    {
        $this
            ->setContract($contract)
            ->setProduct($product)
            ->setPromotionCode($promotionCode);
    }
    /**
     * Get Contract value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return mixed|null
     */
    public function getContract()
    {
        return isset($this->Contract) ? $this->Contract : null;
    }
    /**
     * Set Contract value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param mixed $contract
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetPromotionForCodeRequest
     */
    public function setContract($contract = null)
    {
        if (is_null($contract) || (is_array($contract) && empty($contract))) {
            unset($this->Contract);
        } else {
            $this->Contract = $contract;
        }
        return $this;
    }
    /**
     * Get Product value
     * @return int|null
     */
    public function getProduct()
    {
        return $this->Product;
    }
    /**
     * Set Product value
     * @param int $product
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetPromotionForCodeRequest
     */
    public function setProduct($product = null)
    {
        // validation for constraint: int
        if (!is_null($product) && !is_numeric($product)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($product)), __LINE__);
        }
        $this->Product = $product;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetPromotionForCodeRequest
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetPromotionForCodeRequest
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
