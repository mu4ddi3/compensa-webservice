<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FireClause11 StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:FireClause11
 * @subpackage Structs
 */
class FireClause11 extends FireClause
{
    /**
     * The OtherObjectsThanBuildingInsuranceSum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $OtherObjectsThanBuildingInsuranceSum;
    /**
     * The PropertyInObjectInsuranceSum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $PropertyInObjectInsuranceSum;
    /**
     * Constructor method for FireClause11
     * @uses FireClause11::setOtherObjectsThanBuildingInsuranceSum()
     * @uses FireClause11::setPropertyInObjectInsuranceSum()
     * @param float $otherObjectsThanBuildingInsuranceSum
     * @param float $propertyInObjectInsuranceSum
     */
    public function __construct($otherObjectsThanBuildingInsuranceSum = null, $propertyInObjectInsuranceSum = null)
    {
        $this
            ->setOtherObjectsThanBuildingInsuranceSum($otherObjectsThanBuildingInsuranceSum)
            ->setPropertyInObjectInsuranceSum($propertyInObjectInsuranceSum);
    }
    /**
     * Get OtherObjectsThanBuildingInsuranceSum value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getOtherObjectsThanBuildingInsuranceSum()
    {
        return isset($this->OtherObjectsThanBuildingInsuranceSum) ? $this->OtherObjectsThanBuildingInsuranceSum : null;
    }
    /**
     * Set OtherObjectsThanBuildingInsuranceSum value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $otherObjectsThanBuildingInsuranceSum
     * @return \Mu4ddi3\Compensa\Webservice\StructType\FireClause11
     */
    public function setOtherObjectsThanBuildingInsuranceSum($otherObjectsThanBuildingInsuranceSum = null)
    {
        if (is_null($otherObjectsThanBuildingInsuranceSum) || (is_array($otherObjectsThanBuildingInsuranceSum) && empty($otherObjectsThanBuildingInsuranceSum))) {
            unset($this->OtherObjectsThanBuildingInsuranceSum);
        } else {
            $this->OtherObjectsThanBuildingInsuranceSum = $otherObjectsThanBuildingInsuranceSum;
        }
        return $this;
    }
    /**
     * Get PropertyInObjectInsuranceSum value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getPropertyInObjectInsuranceSum()
    {
        return isset($this->PropertyInObjectInsuranceSum) ? $this->PropertyInObjectInsuranceSum : null;
    }
    /**
     * Set PropertyInObjectInsuranceSum value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $propertyInObjectInsuranceSum
     * @return \Mu4ddi3\Compensa\Webservice\StructType\FireClause11
     */
    public function setPropertyInObjectInsuranceSum($propertyInObjectInsuranceSum = null)
    {
        if (is_null($propertyInObjectInsuranceSum) || (is_array($propertyInObjectInsuranceSum) && empty($propertyInObjectInsuranceSum))) {
            unset($this->PropertyInObjectInsuranceSum);
        } else {
            $this->PropertyInObjectInsuranceSum = $propertyInObjectInsuranceSum;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\FireClause11
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
