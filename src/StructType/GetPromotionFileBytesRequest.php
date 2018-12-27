<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPromotionFileBytesRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetPromotionFileBytesRequest
 * @subpackage Structs
 */
class GetPromotionFileBytesRequest extends PromotionsModuleRequest
{
    /**
     * The PromotionFile
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PromotionFile
     */
    public $PromotionFile;
    /**
     * The PromotionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PromotionId;
    /**
     * Constructor method for GetPromotionFileBytesRequest
     * @uses GetPromotionFileBytesRequest::setPromotionFile()
     * @uses GetPromotionFileBytesRequest::setPromotionId()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PromotionFile $promotionFile
     * @param int $promotionId
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\PromotionFile $promotionFile = null, $promotionId = null)
    {
        $this
            ->setPromotionFile($promotionFile)
            ->setPromotionId($promotionId);
    }
    /**
     * Get PromotionFile value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PromotionFile|null
     */
    public function getPromotionFile()
    {
        return isset($this->PromotionFile) ? $this->PromotionFile : null;
    }
    /**
     * Set PromotionFile value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PromotionFile $promotionFile
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetPromotionFileBytesRequest
     */
    public function setPromotionFile(\Mu4ddi3\Compensa\Webservice\StructType\PromotionFile $promotionFile = null)
    {
        if (is_null($promotionFile) || (is_array($promotionFile) && empty($promotionFile))) {
            unset($this->PromotionFile);
        } else {
            $this->PromotionFile = $promotionFile;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetPromotionFileBytesRequest
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetPromotionFileBytesRequest
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
