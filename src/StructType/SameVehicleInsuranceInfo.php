<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SameVehicleInsuranceInfo StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:SameVehicleInsuranceInfo
 * @subpackage Structs
 */
class SameVehicleInsuranceInfo extends AbstractStructBase
{
    /**
     * The AcPolicyId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $AcPolicyId;
    /**
     * The AcProductType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AcProductType;
    /**
     * The OcPolicyId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $OcPolicyId;
    /**
     * The OcProductType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OcProductType;
    /**
     * Constructor method for SameVehicleInsuranceInfo
     * @uses SameVehicleInsuranceInfo::setAcPolicyId()
     * @uses SameVehicleInsuranceInfo::setAcProductType()
     * @uses SameVehicleInsuranceInfo::setOcPolicyId()
     * @uses SameVehicleInsuranceInfo::setOcProductType()
     * @param int $acPolicyId
     * @param string $acProductType
     * @param int $ocPolicyId
     * @param string $ocProductType
     */
    public function __construct($acPolicyId = null, $acProductType = null, $ocPolicyId = null, $ocProductType = null)
    {
        $this
            ->setAcPolicyId($acPolicyId)
            ->setAcProductType($acProductType)
            ->setOcPolicyId($ocPolicyId)
            ->setOcProductType($ocProductType);
    }
    /**
     * Get AcPolicyId value
     * @return int|null
     */
    public function getAcPolicyId()
    {
        return $this->AcPolicyId;
    }
    /**
     * Set AcPolicyId value
     * @param int $acPolicyId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\SameVehicleInsuranceInfo
     */
    public function setAcPolicyId($acPolicyId = null)
    {
        // validation for constraint: int
        if (!is_null($acPolicyId) && !is_numeric($acPolicyId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($acPolicyId)), __LINE__);
        }
        $this->AcPolicyId = $acPolicyId;
        return $this;
    }
    /**
     * Get AcProductType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAcProductType()
    {
        return isset($this->AcProductType) ? $this->AcProductType : null;
    }
    /**
     * Set AcProductType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $acProductType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\SameVehicleInsuranceInfo
     */
    public function setAcProductType($acProductType = null)
    {
        // validation for constraint: string
        if (!is_null($acProductType) && !is_string($acProductType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($acProductType)), __LINE__);
        }
        if (is_null($acProductType) || (is_array($acProductType) && empty($acProductType))) {
            unset($this->AcProductType);
        } else {
            $this->AcProductType = $acProductType;
        }
        return $this;
    }
    /**
     * Get OcPolicyId value
     * @return int|null
     */
    public function getOcPolicyId()
    {
        return $this->OcPolicyId;
    }
    /**
     * Set OcPolicyId value
     * @param int $ocPolicyId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\SameVehicleInsuranceInfo
     */
    public function setOcPolicyId($ocPolicyId = null)
    {
        // validation for constraint: int
        if (!is_null($ocPolicyId) && !is_numeric($ocPolicyId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($ocPolicyId)), __LINE__);
        }
        $this->OcPolicyId = $ocPolicyId;
        return $this;
    }
    /**
     * Get OcProductType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOcProductType()
    {
        return isset($this->OcProductType) ? $this->OcProductType : null;
    }
    /**
     * Set OcProductType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $ocProductType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\SameVehicleInsuranceInfo
     */
    public function setOcProductType($ocProductType = null)
    {
        // validation for constraint: string
        if (!is_null($ocProductType) && !is_string($ocProductType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ocProductType)), __LINE__);
        }
        if (is_null($ocProductType) || (is_array($ocProductType) && empty($ocProductType))) {
            unset($this->OcProductType);
        } else {
            $this->OcProductType = $ocProductType;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\SameVehicleInsuranceInfo
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
