<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DNA StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DNA
 * @subpackage Structs
 */
class DNA extends MotorRisk
{
    /**
     * The IsDnaMarked
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsDnaMarked;
    /**
     * Constructor method for DNA
     * @uses DNA::setIsDnaMarked()
     * @param bool $isDnaMarked
     */
    public function __construct($isDnaMarked = null)
    {
        $this
            ->setIsDnaMarked($isDnaMarked);
    }
    /**
     * Get IsDnaMarked value
     * @return bool|null
     */
    public function getIsDnaMarked()
    {
        return $this->IsDnaMarked;
    }
    /**
     * Set IsDnaMarked value
     * @param bool $isDnaMarked
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DNA
     */
    public function setIsDnaMarked($isDnaMarked = null)
    {
        // validation for constraint: boolean
        if (!is_null($isDnaMarked) && !is_bool($isDnaMarked)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isDnaMarked)), __LINE__);
        }
        $this->IsDnaMarked = $isDnaMarked;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DNA
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
