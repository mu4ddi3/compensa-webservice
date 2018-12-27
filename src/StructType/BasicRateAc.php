<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BasicRateAc StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BasicRateAc
 * @subpackage Structs
 */
class BasicRateAc extends BasicRate
{
    /**
     * The InsuranceSumLeftBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $InsuranceSumLeftBound;
    /**
     * The InsuranceSumRangeType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $InsuranceSumRangeType;
    /**
     * The InsuranceSumRightBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $InsuranceSumRightBound;
    /**
     * The Zone
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Zone;
    /**
     * Constructor method for BasicRateAc
     * @uses BasicRateAc::setInsuranceSumLeftBound()
     * @uses BasicRateAc::setInsuranceSumRangeType()
     * @uses BasicRateAc::setInsuranceSumRightBound()
     * @uses BasicRateAc::setZone()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSumLeftBound
     * @param string $insuranceSumRangeType
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSumRightBound
     * @param int $zone
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSumLeftBound = null, $insuranceSumRangeType = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSumRightBound = null, $zone = null)
    {
        $this
            ->setInsuranceSumLeftBound($insuranceSumLeftBound)
            ->setInsuranceSumRangeType($insuranceSumRangeType)
            ->setInsuranceSumRightBound($insuranceSumRightBound)
            ->setZone($zone);
    }
    /**
     * Get InsuranceSumLeftBound value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getInsuranceSumLeftBound()
    {
        return isset($this->InsuranceSumLeftBound) ? $this->InsuranceSumLeftBound : null;
    }
    /**
     * Set InsuranceSumLeftBound value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSumLeftBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasicRateAc
     */
    public function setInsuranceSumLeftBound(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSumLeftBound = null)
    {
        if (is_null($insuranceSumLeftBound) || (is_array($insuranceSumLeftBound) && empty($insuranceSumLeftBound))) {
            unset($this->InsuranceSumLeftBound);
        } else {
            $this->InsuranceSumLeftBound = $insuranceSumLeftBound;
        }
        return $this;
    }
    /**
     * Get InsuranceSumRangeType value
     * @return string|null
     */
    public function getInsuranceSumRangeType()
    {
        return $this->InsuranceSumRangeType;
    }
    /**
     * Set InsuranceSumRangeType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\InsuranceSumRangeType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\InsuranceSumRangeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $insuranceSumRangeType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasicRateAc
     */
    public function setInsuranceSumRangeType($insuranceSumRangeType = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\InsuranceSumRangeType::valueIsValid($insuranceSumRangeType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $insuranceSumRangeType, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\InsuranceSumRangeType::getValidValues())), __LINE__);
        }
        $this->InsuranceSumRangeType = $insuranceSumRangeType;
        return $this;
    }
    /**
     * Get InsuranceSumRightBound value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getInsuranceSumRightBound()
    {
        return isset($this->InsuranceSumRightBound) ? $this->InsuranceSumRightBound : null;
    }
    /**
     * Set InsuranceSumRightBound value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSumRightBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasicRateAc
     */
    public function setInsuranceSumRightBound(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSumRightBound = null)
    {
        if (is_null($insuranceSumRightBound) || (is_array($insuranceSumRightBound) && empty($insuranceSumRightBound))) {
            unset($this->InsuranceSumRightBound);
        } else {
            $this->InsuranceSumRightBound = $insuranceSumRightBound;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasicRateAc
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasicRateAc
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
