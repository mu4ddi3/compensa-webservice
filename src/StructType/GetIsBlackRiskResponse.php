<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetIsBlackRiskResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetIsBlackRiskResponse
 * @subpackage Structs
 */
class GetIsBlackRiskResponse extends AbstractStructBase
{
    /**
     * The IsBlackRisk
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsBlackRisk;
    /**
     * The RelatedObjects
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfanyType
     */
    public $RelatedObjects;
    /**
     * Constructor method for GetIsBlackRiskResponse
     * @uses GetIsBlackRiskResponse::setIsBlackRisk()
     * @uses GetIsBlackRiskResponse::setRelatedObjects()
     * @param bool $isBlackRisk
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfanyType $relatedObjects
     */
    public function __construct($isBlackRisk = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfanyType $relatedObjects = null)
    {
        $this
            ->setIsBlackRisk($isBlackRisk)
            ->setRelatedObjects($relatedObjects);
    }
    /**
     * Get IsBlackRisk value
     * @return bool|null
     */
    public function getIsBlackRisk()
    {
        return $this->IsBlackRisk;
    }
    /**
     * Set IsBlackRisk value
     * @param bool $isBlackRisk
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetIsBlackRiskResponse
     */
    public function setIsBlackRisk($isBlackRisk = null)
    {
        // validation for constraint: boolean
        if (!is_null($isBlackRisk) && !is_bool($isBlackRisk)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isBlackRisk)), __LINE__);
        }
        $this->IsBlackRisk = $isBlackRisk;
        return $this;
    }
    /**
     * Get RelatedObjects value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfanyType|null
     */
    public function getRelatedObjects()
    {
        return isset($this->RelatedObjects) ? $this->RelatedObjects : null;
    }
    /**
     * Set RelatedObjects value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfanyType $relatedObjects
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetIsBlackRiskResponse
     */
    public function setRelatedObjects(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfanyType $relatedObjects = null)
    {
        if (is_null($relatedObjects) || (is_array($relatedObjects) && empty($relatedObjects))) {
            unset($this->RelatedObjects);
        } else {
            $this->RelatedObjects = $relatedObjects;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetIsBlackRiskResponse
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
