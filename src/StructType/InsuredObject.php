<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InsuredObject StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:InsuredObject
 * @subpackage Structs
 */
class InsuredObject extends AbstractStructBase
{
    /**
     * The partner
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartner
     */
    public $partner;
    /**
     * The risks
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRisk
     */
    public $risks;
    /**
     * The From
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $From;
    /**
     * The Risks
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRisk
     */
    public $Risks;
    /**
     * The To
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $To;
    /**
     * Constructor method for InsuredObject
     * @uses InsuredObject::setPartner()
     * @uses InsuredObject::setRisks()
     * @uses InsuredObject::setFrom()
     * @uses InsuredObject::setRisks_1()
     * @uses InsuredObject::setTo()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartner $partner
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRisk $risks
     * @param string $from
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRisk $risks
     * @param string $to
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartner $partner = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRisk $risks = null, $from = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRisk $risks_1 = null, $to = null)
    {
        $this
            ->setPartner($partner)
            ->setRisks($risks)
            ->setFrom($from)
            ->setRisks_1($risks_1)
            ->setTo($to);
    }
    /**
     * Get partner value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartner|null
     */
    public function getPartner()
    {
        return isset($this->partner) ? $this->partner : null;
    }
    /**
     * Set partner value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartner $partner
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuredObject
     */
    public function setPartner(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartner $partner = null)
    {
        if (is_null($partner) || (is_array($partner) && empty($partner))) {
            unset($this->partner);
        } else {
            $this->partner = $partner;
        }
        return $this;
    }
    /**
     * Get Risks value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRisk|null
     */
    public function getRisks()
    {
        return isset($this->risks) ? $this->risks : null;
    }
    /**
     * Set Risks value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRisk $risks
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuredObject
     */
    public function setRisks(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRisk $risks = null)
    {
        if (is_null($risks) || (is_array($risks) && empty($risks))) {
            unset($this->risks);
        } else {
            $this->risks = $risks;
        }
        return $this;
    }
    /**
     * Get From value
     * @return string|null
     */
    public function getFrom()
    {
        return $this->From;
    }
    /**
     * Set From value
     * @param string $from
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuredObject
     */
    public function setFrom($from = null)
    {
        // validation for constraint: string
        if (!is_null($from) && !is_string($from)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($from)), __LINE__);
        }
        $this->From = $from;
        return $this;
    }
    /**
     * Get Risks value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRisk|null
     */
    public function getRisks_1()
    {
        return isset($this->Risks) ? $this->Risks : null;
    }
    /**
     * Set Risks value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRisk $risks
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuredObject
     */
    public function setRisks_1(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRisk $risks_1 = null)
    {
        if (is_null($risks_1) || (is_array($risks_1) && empty($risks_1))) {
            unset($this->Risks);
        } else {
            $this->Risks = $risks_1;
        }
        return $this;
    }
    /**
     * Get To value
     * @return string|null
     */
    public function getTo()
    {
        return $this->To;
    }
    /**
     * Set To value
     * @param string $to
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuredObject
     */
    public function setTo($to = null)
    {
        // validation for constraint: string
        if (!is_null($to) && !is_string($to)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($to)), __LINE__);
        }
        $this->To = $to;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuredObject
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
