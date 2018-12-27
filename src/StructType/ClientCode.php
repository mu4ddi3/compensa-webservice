<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClientCode StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ClientCode
 * @subpackage Structs
 */
class ClientCode extends AbstractStructBase
{
    /**
     * The CompanyCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CompanyCode;
    /**
     * The PersonalCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PersonalCode;
    /**
     * Constructor method for ClientCode
     * @uses ClientCode::setCompanyCode()
     * @uses ClientCode::setPersonalCode()
     * @param string $companyCode
     * @param string $personalCode
     */
    public function __construct($companyCode = null, $personalCode = null)
    {
        $this
            ->setCompanyCode($companyCode)
            ->setPersonalCode($personalCode);
    }
    /**
     * Get CompanyCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCompanyCode()
    {
        return isset($this->CompanyCode) ? $this->CompanyCode : null;
    }
    /**
     * Set CompanyCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $companyCode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClientCode
     */
    public function setCompanyCode($companyCode = null)
    {
        // validation for constraint: string
        if (!is_null($companyCode) && !is_string($companyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($companyCode)), __LINE__);
        }
        if (is_null($companyCode) || (is_array($companyCode) && empty($companyCode))) {
            unset($this->CompanyCode);
        } else {
            $this->CompanyCode = $companyCode;
        }
        return $this;
    }
    /**
     * Get PersonalCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPersonalCode()
    {
        return isset($this->PersonalCode) ? $this->PersonalCode : null;
    }
    /**
     * Set PersonalCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $personalCode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClientCode
     */
    public function setPersonalCode($personalCode = null)
    {
        // validation for constraint: string
        if (!is_null($personalCode) && !is_string($personalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($personalCode)), __LINE__);
        }
        if (is_null($personalCode) || (is_array($personalCode) && empty($personalCode))) {
            unset($this->PersonalCode);
        } else {
            $this->PersonalCode = $personalCode;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClientCode
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
