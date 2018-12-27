<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Permissions StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Permissions
 * @subpackage Structs
 */
class Permissions extends AbstractStructBase
{
    /**
     * The CanAddEmployeeDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $CanAddEmployeeDiscount;
    /**
     * The CanCalculateDms
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $CanCalculateDms;
    /**
     * The CanCalculateDuk
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $CanCalculateDuk;
    /**
     * The CanPayWithCash
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $CanPayWithCash;
    /**
     * Constructor method for Permissions
     * @uses Permissions::setCanAddEmployeeDiscount()
     * @uses Permissions::setCanCalculateDms()
     * @uses Permissions::setCanCalculateDuk()
     * @uses Permissions::setCanPayWithCash()
     * @param bool $canAddEmployeeDiscount
     * @param bool $canCalculateDms
     * @param bool $canCalculateDuk
     * @param bool $canPayWithCash
     */
    public function __construct($canAddEmployeeDiscount = null, $canCalculateDms = null, $canCalculateDuk = null, $canPayWithCash = null)
    {
        $this
            ->setCanAddEmployeeDiscount($canAddEmployeeDiscount)
            ->setCanCalculateDms($canCalculateDms)
            ->setCanCalculateDuk($canCalculateDuk)
            ->setCanPayWithCash($canPayWithCash);
    }
    /**
     * Get CanAddEmployeeDiscount value
     * @return bool|null
     */
    public function getCanAddEmployeeDiscount()
    {
        return $this->CanAddEmployeeDiscount;
    }
    /**
     * Set CanAddEmployeeDiscount value
     * @param bool $canAddEmployeeDiscount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Permissions
     */
    public function setCanAddEmployeeDiscount($canAddEmployeeDiscount = null)
    {
        // validation for constraint: boolean
        if (!is_null($canAddEmployeeDiscount) && !is_bool($canAddEmployeeDiscount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($canAddEmployeeDiscount)), __LINE__);
        }
        $this->CanAddEmployeeDiscount = $canAddEmployeeDiscount;
        return $this;
    }
    /**
     * Get CanCalculateDms value
     * @return bool|null
     */
    public function getCanCalculateDms()
    {
        return $this->CanCalculateDms;
    }
    /**
     * Set CanCalculateDms value
     * @param bool $canCalculateDms
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Permissions
     */
    public function setCanCalculateDms($canCalculateDms = null)
    {
        // validation for constraint: boolean
        if (!is_null($canCalculateDms) && !is_bool($canCalculateDms)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($canCalculateDms)), __LINE__);
        }
        $this->CanCalculateDms = $canCalculateDms;
        return $this;
    }
    /**
     * Get CanCalculateDuk value
     * @return bool|null
     */
    public function getCanCalculateDuk()
    {
        return $this->CanCalculateDuk;
    }
    /**
     * Set CanCalculateDuk value
     * @param bool $canCalculateDuk
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Permissions
     */
    public function setCanCalculateDuk($canCalculateDuk = null)
    {
        // validation for constraint: boolean
        if (!is_null($canCalculateDuk) && !is_bool($canCalculateDuk)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($canCalculateDuk)), __LINE__);
        }
        $this->CanCalculateDuk = $canCalculateDuk;
        return $this;
    }
    /**
     * Get CanPayWithCash value
     * @return bool|null
     */
    public function getCanPayWithCash()
    {
        return $this->CanPayWithCash;
    }
    /**
     * Set CanPayWithCash value
     * @param bool $canPayWithCash
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Permissions
     */
    public function setCanPayWithCash($canPayWithCash = null)
    {
        // validation for constraint: boolean
        if (!is_null($canPayWithCash) && !is_bool($canPayWithCash)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($canPayWithCash)), __LINE__);
        }
        $this->CanPayWithCash = $canPayWithCash;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Permissions
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
