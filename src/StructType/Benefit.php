<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Benefit StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Benefit
 * @subpackage Structs
 */
class Benefit extends AbstractStructBase
{
    /**
     * The Beneficient
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Partner
     */
    public $Beneficient;
    /**
     * The DecisionDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DecisionDate;
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Id;
    /**
     * Constructor method for Benefit
     * @uses Benefit::setBeneficient()
     * @uses Benefit::setDecisionDate()
     * @uses Benefit::setId()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Partner $beneficient
     * @param string $decisionDate
     * @param string $id
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\Partner $beneficient = null, $decisionDate = null, $id = null)
    {
        $this
            ->setBeneficient($beneficient)
            ->setDecisionDate($decisionDate)
            ->setId($id);
    }
    /**
     * Get Beneficient value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Partner|null
     */
    public function getBeneficient()
    {
        return isset($this->Beneficient) ? $this->Beneficient : null;
    }
    /**
     * Set Beneficient value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Partner $beneficient
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Benefit
     */
    public function setBeneficient(\Mu4ddi3\Compensa\Webservice\StructType\Partner $beneficient = null)
    {
        if (is_null($beneficient) || (is_array($beneficient) && empty($beneficient))) {
            unset($this->Beneficient);
        } else {
            $this->Beneficient = $beneficient;
        }
        return $this;
    }
    /**
     * Get DecisionDate value
     * @return string|null
     */
    public function getDecisionDate()
    {
        return $this->DecisionDate;
    }
    /**
     * Set DecisionDate value
     * @param string $decisionDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Benefit
     */
    public function setDecisionDate($decisionDate = null)
    {
        // validation for constraint: string
        if (!is_null($decisionDate) && !is_string($decisionDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($decisionDate)), __LINE__);
        }
        $this->DecisionDate = $decisionDate;
        return $this;
    }
    /**
     * Get Id value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getId()
    {
        return isset($this->Id) ? $this->Id : null;
    }
    /**
     * Set Id value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $id
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Benefit
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        if (is_null($id) || (is_array($id) && empty($id))) {
            unset($this->Id);
        } else {
            $this->Id = $id;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Benefit
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
