<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCapAndCollarResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetCapAndCollarResponse
 * @subpackage Structs
 */
class GetCapAndCollarResponse extends AbstractStructBase
{
    /**
     * The Cap
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $Cap;
    /**
     * The Collar
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $Collar;
    /**
     * Constructor method for GetCapAndCollarResponse
     * @uses GetCapAndCollarResponse::setCap()
     * @uses GetCapAndCollarResponse::setCollar()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $cap
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $collar
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\Factor $cap = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $collar = null)
    {
        $this
            ->setCap($cap)
            ->setCollar($collar);
    }
    /**
     * Get Cap value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getCap()
    {
        return isset($this->Cap) ? $this->Cap : null;
    }
    /**
     * Set Cap value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $cap
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetCapAndCollarResponse
     */
    public function setCap(\Mu4ddi3\Compensa\Webservice\StructType\Factor $cap = null)
    {
        if (is_null($cap) || (is_array($cap) && empty($cap))) {
            unset($this->Cap);
        } else {
            $this->Cap = $cap;
        }
        return $this;
    }
    /**
     * Get Collar value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getCollar()
    {
        return isset($this->Collar) ? $this->Collar : null;
    }
    /**
     * Set Collar value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $collar
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetCapAndCollarResponse
     */
    public function setCollar(\Mu4ddi3\Compensa\Webservice\StructType\Factor $collar = null)
    {
        if (is_null($collar) || (is_array($collar) && empty($collar))) {
            unset($this->Collar);
        } else {
            $this->Collar = $collar;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetCapAndCollarResponse
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
