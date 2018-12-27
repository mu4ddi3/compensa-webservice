<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Cessionary StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Cessionary
 * @subpackage Structs
 */
class Cessionary extends Owner
{
    /**
     * The beneficiaryId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $beneficiaryId;
    /**
     * The beneficiaryType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\CessionaryType
     */
    public $beneficiaryType;
    /**
     * Constructor method for Cessionary
     * @uses Cessionary::setBeneficiaryId()
     * @uses Cessionary::setBeneficiaryType()
     * @param string $beneficiaryId
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CessionaryType $beneficiaryType
     */
    public function __construct($beneficiaryId = null, \Mu4ddi3\Compensa\Webservice\StructType\CessionaryType $beneficiaryType = null)
    {
        $this
            ->setBeneficiaryId($beneficiaryId)
            ->setBeneficiaryType($beneficiaryType);
    }
    /**
     * Get beneficiaryId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBeneficiaryId()
    {
        return isset($this->beneficiaryId) ? $this->beneficiaryId : null;
    }
    /**
     * Set beneficiaryId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $beneficiaryId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Cessionary
     */
    public function setBeneficiaryId($beneficiaryId = null)
    {
        // validation for constraint: string
        if (!is_null($beneficiaryId) && !is_string($beneficiaryId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($beneficiaryId)), __LINE__);
        }
        if (is_null($beneficiaryId) || (is_array($beneficiaryId) && empty($beneficiaryId))) {
            unset($this->beneficiaryId);
        } else {
            $this->beneficiaryId = $beneficiaryId;
        }
        return $this;
    }
    /**
     * Get beneficiaryType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CessionaryType|null
     */
    public function getBeneficiaryType()
    {
        return isset($this->beneficiaryType) ? $this->beneficiaryType : null;
    }
    /**
     * Set beneficiaryType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CessionaryType $beneficiaryType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Cessionary
     */
    public function setBeneficiaryType(\Mu4ddi3\Compensa\Webservice\StructType\CessionaryType $beneficiaryType = null)
    {
        if (is_null($beneficiaryType) || (is_array($beneficiaryType) && empty($beneficiaryType))) {
            unset($this->beneficiaryType);
        } else {
            $this->beneficiaryType = $beneficiaryType;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Cessionary
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
