<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PreviousInsuranceCompanyInfo StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PreviousInsuranceCompanyInfo
 * @subpackage Structs
 */
class PreviousInsuranceCompanyInfo extends AbstractStructBase
{
    /**
     * The AcPreviousInsuranceCompanyCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $AcPreviousInsuranceCompanyCode;
    /**
     * The AcPreviousInsuranceCompanyName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AcPreviousInsuranceCompanyName;
    /**
     * The OcPreviousInsuranceCompanyCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $OcPreviousInsuranceCompanyCode;
    /**
     * The OcPreviousInsuranceCompanyName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OcPreviousInsuranceCompanyName;
    /**
     * Constructor method for PreviousInsuranceCompanyInfo
     * @uses PreviousInsuranceCompanyInfo::setAcPreviousInsuranceCompanyCode()
     * @uses PreviousInsuranceCompanyInfo::setAcPreviousInsuranceCompanyName()
     * @uses PreviousInsuranceCompanyInfo::setOcPreviousInsuranceCompanyCode()
     * @uses PreviousInsuranceCompanyInfo::setOcPreviousInsuranceCompanyName()
     * @param int $acPreviousInsuranceCompanyCode
     * @param string $acPreviousInsuranceCompanyName
     * @param int $ocPreviousInsuranceCompanyCode
     * @param string $ocPreviousInsuranceCompanyName
     */
    public function __construct($acPreviousInsuranceCompanyCode = null, $acPreviousInsuranceCompanyName = null, $ocPreviousInsuranceCompanyCode = null, $ocPreviousInsuranceCompanyName = null)
    {
        $this
            ->setAcPreviousInsuranceCompanyCode($acPreviousInsuranceCompanyCode)
            ->setAcPreviousInsuranceCompanyName($acPreviousInsuranceCompanyName)
            ->setOcPreviousInsuranceCompanyCode($ocPreviousInsuranceCompanyCode)
            ->setOcPreviousInsuranceCompanyName($ocPreviousInsuranceCompanyName);
    }
    /**
     * Get AcPreviousInsuranceCompanyCode value
     * @return int|null
     */
    public function getAcPreviousInsuranceCompanyCode()
    {
        return $this->AcPreviousInsuranceCompanyCode;
    }
    /**
     * Set AcPreviousInsuranceCompanyCode value
     * @param int $acPreviousInsuranceCompanyCode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PreviousInsuranceCompanyInfo
     */
    public function setAcPreviousInsuranceCompanyCode($acPreviousInsuranceCompanyCode = null)
    {
        // validation for constraint: int
        if (!is_null($acPreviousInsuranceCompanyCode) && !is_numeric($acPreviousInsuranceCompanyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($acPreviousInsuranceCompanyCode)), __LINE__);
        }
        $this->AcPreviousInsuranceCompanyCode = $acPreviousInsuranceCompanyCode;
        return $this;
    }
    /**
     * Get AcPreviousInsuranceCompanyName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAcPreviousInsuranceCompanyName()
    {
        return isset($this->AcPreviousInsuranceCompanyName) ? $this->AcPreviousInsuranceCompanyName : null;
    }
    /**
     * Set AcPreviousInsuranceCompanyName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $acPreviousInsuranceCompanyName
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PreviousInsuranceCompanyInfo
     */
    public function setAcPreviousInsuranceCompanyName($acPreviousInsuranceCompanyName = null)
    {
        // validation for constraint: string
        if (!is_null($acPreviousInsuranceCompanyName) && !is_string($acPreviousInsuranceCompanyName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($acPreviousInsuranceCompanyName)), __LINE__);
        }
        if (is_null($acPreviousInsuranceCompanyName) || (is_array($acPreviousInsuranceCompanyName) && empty($acPreviousInsuranceCompanyName))) {
            unset($this->AcPreviousInsuranceCompanyName);
        } else {
            $this->AcPreviousInsuranceCompanyName = $acPreviousInsuranceCompanyName;
        }
        return $this;
    }
    /**
     * Get OcPreviousInsuranceCompanyCode value
     * @return int|null
     */
    public function getOcPreviousInsuranceCompanyCode()
    {
        return $this->OcPreviousInsuranceCompanyCode;
    }
    /**
     * Set OcPreviousInsuranceCompanyCode value
     * @param int $ocPreviousInsuranceCompanyCode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PreviousInsuranceCompanyInfo
     */
    public function setOcPreviousInsuranceCompanyCode($ocPreviousInsuranceCompanyCode = null)
    {
        // validation for constraint: int
        if (!is_null($ocPreviousInsuranceCompanyCode) && !is_numeric($ocPreviousInsuranceCompanyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($ocPreviousInsuranceCompanyCode)), __LINE__);
        }
        $this->OcPreviousInsuranceCompanyCode = $ocPreviousInsuranceCompanyCode;
        return $this;
    }
    /**
     * Get OcPreviousInsuranceCompanyName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOcPreviousInsuranceCompanyName()
    {
        return isset($this->OcPreviousInsuranceCompanyName) ? $this->OcPreviousInsuranceCompanyName : null;
    }
    /**
     * Set OcPreviousInsuranceCompanyName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $ocPreviousInsuranceCompanyName
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PreviousInsuranceCompanyInfo
     */
    public function setOcPreviousInsuranceCompanyName($ocPreviousInsuranceCompanyName = null)
    {
        // validation for constraint: string
        if (!is_null($ocPreviousInsuranceCompanyName) && !is_string($ocPreviousInsuranceCompanyName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ocPreviousInsuranceCompanyName)), __LINE__);
        }
        if (is_null($ocPreviousInsuranceCompanyName) || (is_array($ocPreviousInsuranceCompanyName) && empty($ocPreviousInsuranceCompanyName))) {
            unset($this->OcPreviousInsuranceCompanyName);
        } else {
            $this->OcPreviousInsuranceCompanyName = $ocPreviousInsuranceCompanyName;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PreviousInsuranceCompanyInfo
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
