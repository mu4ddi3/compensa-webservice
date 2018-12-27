<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MyBusinessPartner StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MyBusinessPartner
 * @subpackage Structs
 */
class MyBusinessPartner extends Partner
{
    /**
     * The Nip
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Nip;
    /**
     * The Statements
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCompensaStatement
     */
    public $Statements;
    /**
     * Constructor method for MyBusinessPartner
     * @uses MyBusinessPartner::setNip()
     * @uses MyBusinessPartner::setStatements()
     * @param string $nip
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCompensaStatement $statements
     */
    public function __construct($nip = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCompensaStatement $statements = null)
    {
        $this
            ->setNip($nip)
            ->setStatements($statements);
    }
    /**
     * Get Nip value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNip()
    {
        return isset($this->Nip) ? $this->Nip : null;
    }
    /**
     * Set Nip value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $nip
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessPartner
     */
    public function setNip($nip = null)
    {
        // validation for constraint: string
        if (!is_null($nip) && !is_string($nip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nip)), __LINE__);
        }
        if (is_null($nip) || (is_array($nip) && empty($nip))) {
            unset($this->Nip);
        } else {
            $this->Nip = $nip;
        }
        return $this;
    }
    /**
     * Get Statements value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCompensaStatement|null
     */
    public function getStatements()
    {
        return isset($this->Statements) ? $this->Statements : null;
    }
    /**
     * Set Statements value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCompensaStatement $statements
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessPartner
     */
    public function setStatements(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCompensaStatement $statements = null)
    {
        if (is_null($statements) || (is_array($statements) && empty($statements))) {
            unset($this->Statements);
        } else {
            $this->Statements = $statements;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessPartner
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
