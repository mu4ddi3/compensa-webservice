<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ElectronicInsuranceRisk StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ElectronicInsuranceRisk
 * @subpackage Structs
 */
class ElectronicInsuranceRisk extends InsuranceRisk
{
    /**
     * The EquipmentDataForm
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\EquipmentDataForm
     */
    public $EquipmentDataForm;
    /**
     * The Equipments
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfEquipment
     */
    public $Equipments;
    /**
     * The NumberOfFloods
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfFloods;
    /**
     * Constructor method for ElectronicInsuranceRisk
     * @uses ElectronicInsuranceRisk::setEquipmentDataForm()
     * @uses ElectronicInsuranceRisk::setEquipments()
     * @uses ElectronicInsuranceRisk::setNumberOfFloods()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\EquipmentDataForm $equipmentDataForm
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfEquipment $equipments
     * @param int $numberOfFloods
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\EquipmentDataForm $equipmentDataForm = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfEquipment $equipments = null, $numberOfFloods = null)
    {
        $this
            ->setEquipmentDataForm($equipmentDataForm)
            ->setEquipments($equipments)
            ->setNumberOfFloods($numberOfFloods);
    }
    /**
     * Get EquipmentDataForm value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\EquipmentDataForm|null
     */
    public function getEquipmentDataForm()
    {
        return isset($this->EquipmentDataForm) ? $this->EquipmentDataForm : null;
    }
    /**
     * Set EquipmentDataForm value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\EquipmentDataForm $equipmentDataForm
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ElectronicInsuranceRisk
     */
    public function setEquipmentDataForm(\Mu4ddi3\Compensa\Webservice\StructType\EquipmentDataForm $equipmentDataForm = null)
    {
        if (is_null($equipmentDataForm) || (is_array($equipmentDataForm) && empty($equipmentDataForm))) {
            unset($this->EquipmentDataForm);
        } else {
            $this->EquipmentDataForm = $equipmentDataForm;
        }
        return $this;
    }
    /**
     * Get Equipments value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfEquipment|null
     */
    public function getEquipments()
    {
        return isset($this->Equipments) ? $this->Equipments : null;
    }
    /**
     * Set Equipments value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfEquipment $equipments
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ElectronicInsuranceRisk
     */
    public function setEquipments(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfEquipment $equipments = null)
    {
        if (is_null($equipments) || (is_array($equipments) && empty($equipments))) {
            unset($this->Equipments);
        } else {
            $this->Equipments = $equipments;
        }
        return $this;
    }
    /**
     * Get NumberOfFloods value
     * @return int|null
     */
    public function getNumberOfFloods()
    {
        return $this->NumberOfFloods;
    }
    /**
     * Set NumberOfFloods value
     * @param int $numberOfFloods
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ElectronicInsuranceRisk
     */
    public function setNumberOfFloods($numberOfFloods = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfFloods) && !is_numeric($numberOfFloods)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfFloods)), __LINE__);
        }
        $this->NumberOfFloods = $numberOfFloods;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ElectronicInsuranceRisk
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
