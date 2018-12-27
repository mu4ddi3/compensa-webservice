<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalClause StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AdditionalClause
 * @subpackage Structs
 */
class AdditionalClause extends MyBusinessClause
{
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Description;
    /**
     * The ManualLimit
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $ManualLimit;
    /**
     * The ManualPremium
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $ManualPremium;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Name;
    /**
     * Constructor method for AdditionalClause
     * @uses AdditionalClause::setDescription()
     * @uses AdditionalClause::setManualLimit()
     * @uses AdditionalClause::setManualPremium()
     * @uses AdditionalClause::setName()
     * @param string $description
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $manualLimit
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $manualPremium
     * @param string $name
     */
    public function __construct($description = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $manualLimit = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $manualPremium = null, $name = null)
    {
        $this
            ->setDescription($description)
            ->setManualLimit($manualLimit)
            ->setManualPremium($manualPremium)
            ->setName($name);
    }
    /**
     * Get Description value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDescription()
    {
        return isset($this->Description) ? $this->Description : null;
    }
    /**
     * Set Description value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $description
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalClause
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        if (is_null($description) || (is_array($description) && empty($description))) {
            unset($this->Description);
        } else {
            $this->Description = $description;
        }
        return $this;
    }
    /**
     * Get ManualLimit value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getManualLimit()
    {
        return isset($this->ManualLimit) ? $this->ManualLimit : null;
    }
    /**
     * Set ManualLimit value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $manualLimit
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalClause
     */
    public function setManualLimit(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $manualLimit = null)
    {
        if (is_null($manualLimit) || (is_array($manualLimit) && empty($manualLimit))) {
            unset($this->ManualLimit);
        } else {
            $this->ManualLimit = $manualLimit;
        }
        return $this;
    }
    /**
     * Get ManualPremium value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getManualPremium()
    {
        return isset($this->ManualPremium) ? $this->ManualPremium : null;
    }
    /**
     * Set ManualPremium value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $manualPremium
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalClause
     */
    public function setManualPremium(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $manualPremium = null)
    {
        if (is_null($manualPremium) || (is_array($manualPremium) && empty($manualPremium))) {
            unset($this->ManualPremium);
        } else {
            $this->ManualPremium = $manualPremium;
        }
        return $this;
    }
    /**
     * Get Name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getName()
    {
        return isset($this->Name) ? $this->Name : null;
    }
    /**
     * Set Name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalClause
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->Name);
        } else {
            $this->Name = $name;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalClause
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
