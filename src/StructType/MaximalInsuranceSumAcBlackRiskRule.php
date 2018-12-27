<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MaximalInsuranceSumAcBlackRiskRule StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MaximalInsuranceSumAcBlackRiskRule
 * @subpackage Structs
 */
class MaximalInsuranceSumAcBlackRiskRule extends BlackRiskRule
{
    /**
     * The MaxInsuranceSum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $MaxInsuranceSum;
    /**
     * The VehicleGroupId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $VehicleGroupId;
    /**
     * Constructor method for MaximalInsuranceSumAcBlackRiskRule
     * @uses MaximalInsuranceSumAcBlackRiskRule::setMaxInsuranceSum()
     * @uses MaximalInsuranceSumAcBlackRiskRule::setVehicleGroupId()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $maxInsuranceSum
     * @param int $vehicleGroupId
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $maxInsuranceSum = null, $vehicleGroupId = null)
    {
        $this
            ->setMaxInsuranceSum($maxInsuranceSum)
            ->setVehicleGroupId($vehicleGroupId);
    }
    /**
     * Get MaxInsuranceSum value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getMaxInsuranceSum()
    {
        return isset($this->MaxInsuranceSum) ? $this->MaxInsuranceSum : null;
    }
    /**
     * Set MaxInsuranceSum value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $maxInsuranceSum
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MaximalInsuranceSumAcBlackRiskRule
     */
    public function setMaxInsuranceSum(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $maxInsuranceSum = null)
    {
        if (is_null($maxInsuranceSum) || (is_array($maxInsuranceSum) && empty($maxInsuranceSum))) {
            unset($this->MaxInsuranceSum);
        } else {
            $this->MaxInsuranceSum = $maxInsuranceSum;
        }
        return $this;
    }
    /**
     * Get VehicleGroupId value
     * @return int|null
     */
    public function getVehicleGroupId()
    {
        return $this->VehicleGroupId;
    }
    /**
     * Set VehicleGroupId value
     * @param int $vehicleGroupId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MaximalInsuranceSumAcBlackRiskRule
     */
    public function setVehicleGroupId($vehicleGroupId = null)
    {
        // validation for constraint: int
        if (!is_null($vehicleGroupId) && !is_numeric($vehicleGroupId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($vehicleGroupId)), __LINE__);
        }
        $this->VehicleGroupId = $vehicleGroupId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MaximalInsuranceSumAcBlackRiskRule
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
