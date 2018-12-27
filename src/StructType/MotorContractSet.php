<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MotorContractSet StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MotorContractSet
 * @subpackage Structs
 */
class MotorContractSet extends AbstractStructBase
{
    /**
     * The OtherContracts
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMotorContract
     */
    public $OtherContracts;
    /**
     * The PreferredContracts
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMotorContract
     */
    public $PreferredContracts;
    /**
     * The SavedContracts
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMotorContract
     */
    public $SavedContracts;
    /**
     * Constructor method for MotorContractSet
     * @uses MotorContractSet::setOtherContracts()
     * @uses MotorContractSet::setPreferredContracts()
     * @uses MotorContractSet::setSavedContracts()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMotorContract $otherContracts
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMotorContract $preferredContracts
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMotorContract $savedContracts
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMotorContract $otherContracts = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMotorContract $preferredContracts = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMotorContract $savedContracts = null)
    {
        $this
            ->setOtherContracts($otherContracts)
            ->setPreferredContracts($preferredContracts)
            ->setSavedContracts($savedContracts);
    }
    /**
     * Get OtherContracts value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMotorContract|null
     */
    public function getOtherContracts()
    {
        return isset($this->OtherContracts) ? $this->OtherContracts : null;
    }
    /**
     * Set OtherContracts value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMotorContract $otherContracts
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContractSet
     */
    public function setOtherContracts(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMotorContract $otherContracts = null)
    {
        if (is_null($otherContracts) || (is_array($otherContracts) && empty($otherContracts))) {
            unset($this->OtherContracts);
        } else {
            $this->OtherContracts = $otherContracts;
        }
        return $this;
    }
    /**
     * Get PreferredContracts value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMotorContract|null
     */
    public function getPreferredContracts()
    {
        return isset($this->PreferredContracts) ? $this->PreferredContracts : null;
    }
    /**
     * Set PreferredContracts value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMotorContract $preferredContracts
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContractSet
     */
    public function setPreferredContracts(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMotorContract $preferredContracts = null)
    {
        if (is_null($preferredContracts) || (is_array($preferredContracts) && empty($preferredContracts))) {
            unset($this->PreferredContracts);
        } else {
            $this->PreferredContracts = $preferredContracts;
        }
        return $this;
    }
    /**
     * Get SavedContracts value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMotorContract|null
     */
    public function getSavedContracts()
    {
        return isset($this->SavedContracts) ? $this->SavedContracts : null;
    }
    /**
     * Set SavedContracts value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMotorContract $savedContracts
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContractSet
     */
    public function setSavedContracts(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMotorContract $savedContracts = null)
    {
        if (is_null($savedContracts) || (is_array($savedContracts) && empty($savedContracts))) {
            unset($this->SavedContracts);
        } else {
            $this->SavedContracts = $savedContracts;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContractSet
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
