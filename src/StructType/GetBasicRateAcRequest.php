<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBasicRateAcRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetBasicRateAcRequest
 * @subpackage Structs
 */
class GetBasicRateAcRequest extends GetBasicRateRequest
{
    /**
     * The InsuranceSum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $InsuranceSum;
    /**
     * The Zone
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Zone;
    /**
     * Constructor method for GetBasicRateAcRequest
     * @uses GetBasicRateAcRequest::setInsuranceSum()
     * @uses GetBasicRateAcRequest::setZone()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSum
     * @param int $zone
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSum = null, $zone = null)
    {
        $this
            ->setInsuranceSum($insuranceSum)
            ->setZone($zone);
    }
    /**
     * Get InsuranceSum value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getInsuranceSum()
    {
        return isset($this->InsuranceSum) ? $this->InsuranceSum : null;
    }
    /**
     * Set InsuranceSum value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSum
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetBasicRateAcRequest
     */
    public function setInsuranceSum(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSum = null)
    {
        if (is_null($insuranceSum) || (is_array($insuranceSum) && empty($insuranceSum))) {
            unset($this->InsuranceSum);
        } else {
            $this->InsuranceSum = $insuranceSum;
        }
        return $this;
    }
    /**
     * Get Zone value
     * @return int|null
     */
    public function getZone()
    {
        return $this->Zone;
    }
    /**
     * Set Zone value
     * @param int $zone
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetBasicRateAcRequest
     */
    public function setZone($zone = null)
    {
        // validation for constraint: int
        if (!is_null($zone) && !is_numeric($zone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($zone)), __LINE__);
        }
        $this->Zone = $zone;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetBasicRateAcRequest
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
