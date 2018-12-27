<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleExclusion StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:VehicleExclusion
 * @subpackage Structs
 */
class VehicleExclusion extends Exclusion
{
    /**
     * The BrandId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $BrandId;
    /**
     * The ModelIds
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint
     */
    public $ModelIds;
    /**
     * The ModelTypeIds
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint
     */
    public $ModelTypeIds;
    /**
     * Constructor method for VehicleExclusion
     * @uses VehicleExclusion::setBrandId()
     * @uses VehicleExclusion::setModelIds()
     * @uses VehicleExclusion::setModelTypeIds()
     * @param int $brandId
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint $modelIds
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint $modelTypeIds
     */
    public function __construct($brandId = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint $modelIds = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint $modelTypeIds = null)
    {
        $this
            ->setBrandId($brandId)
            ->setModelIds($modelIds)
            ->setModelTypeIds($modelTypeIds);
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleExclusion
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
     * Get ModelIds value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint|null
     */
    public function getModelIds()
    {
        return isset($this->ModelIds) ? $this->ModelIds : null;
    }
    /**
     * Set ModelIds value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint $modelIds
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleExclusion
     */
    public function setModelIds(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint $modelIds = null)
    {
        if (is_null($modelIds) || (is_array($modelIds) && empty($modelIds))) {
            unset($this->ModelIds);
        } else {
            $this->ModelIds = $modelIds;
        }
        return $this;
    }
    /**
     * Get ModelTypeIds value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint|null
     */
    public function getModelTypeIds()
    {
        return isset($this->ModelTypeIds) ? $this->ModelTypeIds : null;
    }
    /**
     * Set ModelTypeIds value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint $modelTypeIds
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleExclusion
     */
    public function setModelTypeIds(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfint $modelTypeIds = null)
    {
        if (is_null($modelTypeIds) || (is_array($modelTypeIds) && empty($modelTypeIds))) {
            unset($this->ModelTypeIds);
        } else {
            $this->ModelTypeIds = $modelTypeIds;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleExclusion
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
