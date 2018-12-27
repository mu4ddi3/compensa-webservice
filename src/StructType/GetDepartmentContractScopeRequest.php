<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDepartmentContractScopeRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetDepartmentContractScopeRequest
 * @subpackage Structs
 */
class GetDepartmentContractScopeRequest extends AbstractStructBase
{
    /**
     * The CoOwner
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MotorPartner
     */
    public $CoOwner;
    /**
     * The Owner
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MotorPartner
     */
    public $Owner;
    /**
     * Constructor method for GetDepartmentContractScopeRequest
     * @uses GetDepartmentContractScopeRequest::setCoOwner()
     * @uses GetDepartmentContractScopeRequest::setOwner()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MotorPartner $coOwner
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MotorPartner $owner
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\MotorPartner $coOwner = null, \Mu4ddi3\Compensa\Webservice\StructType\MotorPartner $owner = null)
    {
        $this
            ->setCoOwner($coOwner)
            ->setOwner($owner);
    }
    /**
     * Get CoOwner value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorPartner|null
     */
    public function getCoOwner()
    {
        return isset($this->CoOwner) ? $this->CoOwner : null;
    }
    /**
     * Set CoOwner value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MotorPartner $coOwner
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetDepartmentContractScopeRequest
     */
    public function setCoOwner(\Mu4ddi3\Compensa\Webservice\StructType\MotorPartner $coOwner = null)
    {
        if (is_null($coOwner) || (is_array($coOwner) && empty($coOwner))) {
            unset($this->CoOwner);
        } else {
            $this->CoOwner = $coOwner;
        }
        return $this;
    }
    /**
     * Get Owner value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorPartner|null
     */
    public function getOwner()
    {
        return isset($this->Owner) ? $this->Owner : null;
    }
    /**
     * Set Owner value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MotorPartner $owner
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetDepartmentContractScopeRequest
     */
    public function setOwner(\Mu4ddi3\Compensa\Webservice\StructType\MotorPartner $owner = null)
    {
        if (is_null($owner) || (is_array($owner) && empty($owner))) {
            unset($this->Owner);
        } else {
            $this->Owner = $owner;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetDepartmentContractScopeRequest
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
