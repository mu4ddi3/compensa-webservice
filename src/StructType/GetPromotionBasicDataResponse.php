<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPromotionBasicDataResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetPromotionBasicDataResponse
 * @subpackage Structs
 */
class GetPromotionBasicDataResponse extends ResponseBase
{
    /**
     * The Discount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MZPDiscount
     */
    public $Discount;
    /**
     * The Files
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPromotionFile
     */
    public $Files;
    /**
     * The Product
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Product;
    /**
     * The PromotionBasicData
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\BasicData
     */
    public $PromotionBasicData;
    /**
     * Constructor method for GetPromotionBasicDataResponse
     * @uses GetPromotionBasicDataResponse::setDiscount()
     * @uses GetPromotionBasicDataResponse::setFiles()
     * @uses GetPromotionBasicDataResponse::setProduct()
     * @uses GetPromotionBasicDataResponse::setPromotionBasicData()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MZPDiscount $discount
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPromotionFile $files
     * @param int $product
     * @param \Mu4ddi3\Compensa\Webservice\StructType\BasicData $promotionBasicData
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\MZPDiscount $discount = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPromotionFile $files = null, $product = null, \Mu4ddi3\Compensa\Webservice\StructType\BasicData $promotionBasicData = null)
    {
        $this
            ->setDiscount($discount)
            ->setFiles($files)
            ->setProduct($product)
            ->setPromotionBasicData($promotionBasicData);
    }
    /**
     * Get Discount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPDiscount|null
     */
    public function getDiscount()
    {
        return isset($this->Discount) ? $this->Discount : null;
    }
    /**
     * Set Discount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MZPDiscount $discount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetPromotionBasicDataResponse
     */
    public function setDiscount(\Mu4ddi3\Compensa\Webservice\StructType\MZPDiscount $discount = null)
    {
        if (is_null($discount) || (is_array($discount) && empty($discount))) {
            unset($this->Discount);
        } else {
            $this->Discount = $discount;
        }
        return $this;
    }
    /**
     * Get Files value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPromotionFile|null
     */
    public function getFiles()
    {
        return isset($this->Files) ? $this->Files : null;
    }
    /**
     * Set Files value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPromotionFile $files
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetPromotionBasicDataResponse
     */
    public function setFiles(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPromotionFile $files = null)
    {
        if (is_null($files) || (is_array($files) && empty($files))) {
            unset($this->Files);
        } else {
            $this->Files = $files;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetPromotionBasicDataResponse
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
     * Get PromotionBasicData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasicData|null
     */
    public function getPromotionBasicData()
    {
        return isset($this->PromotionBasicData) ? $this->PromotionBasicData : null;
    }
    /**
     * Set PromotionBasicData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\BasicData $promotionBasicData
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetPromotionBasicDataResponse
     */
    public function setPromotionBasicData(\Mu4ddi3\Compensa\Webservice\StructType\BasicData $promotionBasicData = null)
    {
        if (is_null($promotionBasicData) || (is_array($promotionBasicData) && empty($promotionBasicData))) {
            unset($this->PromotionBasicData);
        } else {
            $this->PromotionBasicData = $promotionBasicData;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetPromotionBasicDataResponse
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
