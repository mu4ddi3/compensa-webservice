<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Equipment StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Equipment
 * @subpackage Structs
 */
class Equipment extends AbstractStructBase
{
    /**
     * The EquipmentType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\EquipmentType
     */
    public $EquipmentType;
    /**
     * The Info
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Info;
    /**
     * The InsuranceSum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $InsuranceSum;
    /**
     * The InsuranceSumType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\InsuranceSumType
     */
    public $InsuranceSumType;
    /**
     * The ProductionYear
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ProductionYear;
    /**
     * Constructor method for Equipment
     * @uses Equipment::setEquipmentType()
     * @uses Equipment::setInfo()
     * @uses Equipment::setInsuranceSum()
     * @uses Equipment::setInsuranceSumType()
     * @uses Equipment::setProductionYear()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\EquipmentType $equipmentType
     * @param string $info
     * @param float $insuranceSum
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InsuranceSumType $insuranceSumType
     * @param int $productionYear
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\EquipmentType $equipmentType = null, $info = null, $insuranceSum = null, \Mu4ddi3\Compensa\Webservice\StructType\InsuranceSumType $insuranceSumType = null, $productionYear = null)
    {
        $this
            ->setEquipmentType($equipmentType)
            ->setInfo($info)
            ->setInsuranceSum($insuranceSum)
            ->setInsuranceSumType($insuranceSumType)
            ->setProductionYear($productionYear);
    }
    /**
     * Get EquipmentType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\EquipmentType|null
     */
    public function getEquipmentType()
    {
        return isset($this->EquipmentType) ? $this->EquipmentType : null;
    }
    /**
     * Set EquipmentType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\EquipmentType $equipmentType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Equipment
     */
    public function setEquipmentType(\Mu4ddi3\Compensa\Webservice\StructType\EquipmentType $equipmentType = null)
    {
        if (is_null($equipmentType) || (is_array($equipmentType) && empty($equipmentType))) {
            unset($this->EquipmentType);
        } else {
            $this->EquipmentType = $equipmentType;
        }
        return $this;
    }
    /**
     * Get Info value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInfo()
    {
        return isset($this->Info) ? $this->Info : null;
    }
    /**
     * Set Info value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $info
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Equipment
     */
    public function setInfo($info = null)
    {
        // validation for constraint: string
        if (!is_null($info) && !is_string($info)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($info)), __LINE__);
        }
        if (is_null($info) || (is_array($info) && empty($info))) {
            unset($this->Info);
        } else {
            $this->Info = $info;
        }
        return $this;
    }
    /**
     * Get InsuranceSum value
     * @return float|null
     */
    public function getInsuranceSum()
    {
        return $this->InsuranceSum;
    }
    /**
     * Set InsuranceSum value
     * @param float $insuranceSum
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Equipment
     */
    public function setInsuranceSum($insuranceSum = null)
    {
        $this->InsuranceSum = $insuranceSum;
        return $this;
    }
    /**
     * Get InsuranceSumType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuranceSumType|null
     */
    public function getInsuranceSumType()
    {
        return isset($this->InsuranceSumType) ? $this->InsuranceSumType : null;
    }
    /**
     * Set InsuranceSumType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InsuranceSumType $insuranceSumType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Equipment
     */
    public function setInsuranceSumType(\Mu4ddi3\Compensa\Webservice\StructType\InsuranceSumType $insuranceSumType = null)
    {
        if (is_null($insuranceSumType) || (is_array($insuranceSumType) && empty($insuranceSumType))) {
            unset($this->InsuranceSumType);
        } else {
            $this->InsuranceSumType = $insuranceSumType;
        }
        return $this;
    }
    /**
     * Get ProductionYear value
     * @return int|null
     */
    public function getProductionYear()
    {
        return $this->ProductionYear;
    }
    /**
     * Set ProductionYear value
     * @param int $productionYear
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Equipment
     */
    public function setProductionYear($productionYear = null)
    {
        // validation for constraint: int
        if (!is_null($productionYear) && !is_numeric($productionYear)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($productionYear)), __LINE__);
        }
        $this->ProductionYear = $productionYear;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Equipment
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
