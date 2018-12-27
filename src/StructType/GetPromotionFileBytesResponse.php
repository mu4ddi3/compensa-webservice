<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPromotionFileBytesResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetPromotionFileBytesResponse
 * @subpackage Structs
 */
class GetPromotionFileBytesResponse extends ResponseBase
{
    /**
     * The ContentType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ContentType;
    /**
     * The FileName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FileName;
    /**
     * The PromotionBytes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PromotionBytes;
    /**
     * Constructor method for GetPromotionFileBytesResponse
     * @uses GetPromotionFileBytesResponse::setContentType()
     * @uses GetPromotionFileBytesResponse::setFileName()
     * @uses GetPromotionFileBytesResponse::setPromotionBytes()
     * @param string $contentType
     * @param string $fileName
     * @param string $promotionBytes
     */
    public function __construct($contentType = null, $fileName = null, $promotionBytes = null)
    {
        $this
            ->setContentType($contentType)
            ->setFileName($fileName)
            ->setPromotionBytes($promotionBytes);
    }
    /**
     * Get ContentType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getContentType()
    {
        return isset($this->ContentType) ? $this->ContentType : null;
    }
    /**
     * Set ContentType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $contentType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetPromotionFileBytesResponse
     */
    public function setContentType($contentType = null)
    {
        // validation for constraint: string
        if (!is_null($contentType) && !is_string($contentType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contentType)), __LINE__);
        }
        if (is_null($contentType) || (is_array($contentType) && empty($contentType))) {
            unset($this->ContentType);
        } else {
            $this->ContentType = $contentType;
        }
        return $this;
    }
    /**
     * Get FileName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFileName()
    {
        return isset($this->FileName) ? $this->FileName : null;
    }
    /**
     * Set FileName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fileName
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetPromotionFileBytesResponse
     */
    public function setFileName($fileName = null)
    {
        // validation for constraint: string
        if (!is_null($fileName) && !is_string($fileName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fileName)), __LINE__);
        }
        if (is_null($fileName) || (is_array($fileName) && empty($fileName))) {
            unset($this->FileName);
        } else {
            $this->FileName = $fileName;
        }
        return $this;
    }
    /**
     * Get PromotionBytes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPromotionBytes()
    {
        return isset($this->PromotionBytes) ? $this->PromotionBytes : null;
    }
    /**
     * Set PromotionBytes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $promotionBytes
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetPromotionFileBytesResponse
     */
    public function setPromotionBytes($promotionBytes = null)
    {
        // validation for constraint: string
        if (!is_null($promotionBytes) && !is_string($promotionBytes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($promotionBytes)), __LINE__);
        }
        if (is_null($promotionBytes) || (is_array($promotionBytes) && empty($promotionBytes))) {
            unset($this->PromotionBytes);
        } else {
            $this->PromotionBytes = $promotionBytes;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetPromotionFileBytesResponse
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
