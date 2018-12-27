<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CentralAndUnderwriterDiscountBlockadeTariffDefinition
 * StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CentralAndUnderwriterDiscountBlockadeTariffDefinition
 * @subpackage Structs
 */
class CentralAndUnderwriterDiscountBlockadeTariffDefinition extends AbstractStructBase
{
    /**
     * The CentralDiscountBlockedAgencies
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring
     */
    public $CentralDiscountBlockedAgencies;
    /**
     * The CentralDiscountBlockedLogins
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring
     */
    public $CentralDiscountBlockedLogins;
    /**
     * The UnderwriterDiscountBlockedAgencies
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring
     */
    public $UnderwriterDiscountBlockedAgencies;
    /**
     * The UnderwriterDiscountBlockedLogins
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring
     */
    public $UnderwriterDiscountBlockedLogins;
    /**
     * Constructor method for CentralAndUnderwriterDiscountBlockadeTariffDefinition
     * @uses CentralAndUnderwriterDiscountBlockadeTariffDefinition::setCentralDiscountBlockedAgencies()
     * @uses CentralAndUnderwriterDiscountBlockadeTariffDefinition::setCentralDiscountBlockedLogins()
     * @uses CentralAndUnderwriterDiscountBlockadeTariffDefinition::setUnderwriterDiscountBlockedAgencies()
     * @uses CentralAndUnderwriterDiscountBlockadeTariffDefinition::setUnderwriterDiscountBlockedLogins()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring $centralDiscountBlockedAgencies
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring $centralDiscountBlockedLogins
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring $underwriterDiscountBlockedAgencies
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring $underwriterDiscountBlockedLogins
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring $centralDiscountBlockedAgencies = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring $centralDiscountBlockedLogins = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring $underwriterDiscountBlockedAgencies = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring $underwriterDiscountBlockedLogins = null)
    {
        $this
            ->setCentralDiscountBlockedAgencies($centralDiscountBlockedAgencies)
            ->setCentralDiscountBlockedLogins($centralDiscountBlockedLogins)
            ->setUnderwriterDiscountBlockedAgencies($underwriterDiscountBlockedAgencies)
            ->setUnderwriterDiscountBlockedLogins($underwriterDiscountBlockedLogins);
    }
    /**
     * Get CentralDiscountBlockedAgencies value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring|null
     */
    public function getCentralDiscountBlockedAgencies()
    {
        return isset($this->CentralDiscountBlockedAgencies) ? $this->CentralDiscountBlockedAgencies : null;
    }
    /**
     * Set CentralDiscountBlockedAgencies value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring $centralDiscountBlockedAgencies
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CentralAndUnderwriterDiscountBlockadeTariffDefinition
     */
    public function setCentralDiscountBlockedAgencies(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring $centralDiscountBlockedAgencies = null)
    {
        if (is_null($centralDiscountBlockedAgencies) || (is_array($centralDiscountBlockedAgencies) && empty($centralDiscountBlockedAgencies))) {
            unset($this->CentralDiscountBlockedAgencies);
        } else {
            $this->CentralDiscountBlockedAgencies = $centralDiscountBlockedAgencies;
        }
        return $this;
    }
    /**
     * Get CentralDiscountBlockedLogins value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring|null
     */
    public function getCentralDiscountBlockedLogins()
    {
        return isset($this->CentralDiscountBlockedLogins) ? $this->CentralDiscountBlockedLogins : null;
    }
    /**
     * Set CentralDiscountBlockedLogins value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring $centralDiscountBlockedLogins
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CentralAndUnderwriterDiscountBlockadeTariffDefinition
     */
    public function setCentralDiscountBlockedLogins(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring $centralDiscountBlockedLogins = null)
    {
        if (is_null($centralDiscountBlockedLogins) || (is_array($centralDiscountBlockedLogins) && empty($centralDiscountBlockedLogins))) {
            unset($this->CentralDiscountBlockedLogins);
        } else {
            $this->CentralDiscountBlockedLogins = $centralDiscountBlockedLogins;
        }
        return $this;
    }
    /**
     * Get UnderwriterDiscountBlockedAgencies value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring|null
     */
    public function getUnderwriterDiscountBlockedAgencies()
    {
        return isset($this->UnderwriterDiscountBlockedAgencies) ? $this->UnderwriterDiscountBlockedAgencies : null;
    }
    /**
     * Set UnderwriterDiscountBlockedAgencies value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring $underwriterDiscountBlockedAgencies
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CentralAndUnderwriterDiscountBlockadeTariffDefinition
     */
    public function setUnderwriterDiscountBlockedAgencies(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring $underwriterDiscountBlockedAgencies = null)
    {
        if (is_null($underwriterDiscountBlockedAgencies) || (is_array($underwriterDiscountBlockedAgencies) && empty($underwriterDiscountBlockedAgencies))) {
            unset($this->UnderwriterDiscountBlockedAgencies);
        } else {
            $this->UnderwriterDiscountBlockedAgencies = $underwriterDiscountBlockedAgencies;
        }
        return $this;
    }
    /**
     * Get UnderwriterDiscountBlockedLogins value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring|null
     */
    public function getUnderwriterDiscountBlockedLogins()
    {
        return isset($this->UnderwriterDiscountBlockedLogins) ? $this->UnderwriterDiscountBlockedLogins : null;
    }
    /**
     * Set UnderwriterDiscountBlockedLogins value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring $underwriterDiscountBlockedLogins
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CentralAndUnderwriterDiscountBlockadeTariffDefinition
     */
    public function setUnderwriterDiscountBlockedLogins(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring $underwriterDiscountBlockedLogins = null)
    {
        if (is_null($underwriterDiscountBlockedLogins) || (is_array($underwriterDiscountBlockedLogins) && empty($underwriterDiscountBlockedLogins))) {
            unset($this->UnderwriterDiscountBlockedLogins);
        } else {
            $this->UnderwriterDiscountBlockedLogins = $underwriterDiscountBlockedLogins;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CentralAndUnderwriterDiscountBlockadeTariffDefinition
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
