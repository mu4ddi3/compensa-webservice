<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetIsBlackRiskBrandModelTypeRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetIsBlackRiskBrandModelTypeRequest
 * @subpackage Structs
 */
class GetIsBlackRiskBrandModelTypeRequest extends GetIsBlackRiskRequest
{
    /**
     * The BrandId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $BrandId;
    /**
     * The GroupId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $GroupId;
    /**
     * The ModelTypeId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ModelTypeId;
    /**
     * Constructor method for GetIsBlackRiskBrandModelTypeRequest
     * @uses GetIsBlackRiskBrandModelTypeRequest::setBrandId()
     * @uses GetIsBlackRiskBrandModelTypeRequest::setGroupId()
     * @uses GetIsBlackRiskBrandModelTypeRequest::setModelTypeId()
     * @param int $brandId
     * @param int $groupId
     * @param int $modelTypeId
     */
    public function __construct($brandId = null, $groupId = null, $modelTypeId = null)
    {
        $this
            ->setBrandId($brandId)
            ->setGroupId($groupId)
            ->setModelTypeId($modelTypeId);
    }
    /**
     * Get BrandId value
     * @return int|null
     */
    public function getBrandId()
    {
        return $this->BrandId;
    }
    /**
     * Set BrandId value
     * @param int $brandId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetIsBlackRiskBrandModelTypeRequest
     */
    public function setBrandId($brandId = null)
    {
        // validation for constraint: int
        if (!is_null($brandId) && !is_numeric($brandId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($brandId)), __LINE__);
        }
        $this->BrandId = $brandId;
        return $this;
    }
    /**
     * Get GroupId value
     * @return int|null
     */
    public function getGroupId()
    {
        return $this->GroupId;
    }
    /**
     * Set GroupId value
     * @param int $groupId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetIsBlackRiskBrandModelTypeRequest
     */
    public function setGroupId($groupId = null)
    {
        // validation for constraint: int
        if (!is_null($groupId) && !is_numeric($groupId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($groupId)), __LINE__);
        }
        $this->GroupId = $groupId;
        return $this;
    }
    /**
     * Get ModelTypeId value
     * @return int|null
     */
    public function getModelTypeId()
    {
        return $this->ModelTypeId;
    }
    /**
     * Set ModelTypeId value
     * @param int $modelTypeId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetIsBlackRiskBrandModelTypeRequest
     */
    public function setModelTypeId($modelTypeId = null)
    {
        // validation for constraint: int
        if (!is_null($modelTypeId) && !is_numeric($modelTypeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($modelTypeId)), __LINE__);
        }
        $this->ModelTypeId = $modelTypeId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetIsBlackRiskBrandModelTypeRequest
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
