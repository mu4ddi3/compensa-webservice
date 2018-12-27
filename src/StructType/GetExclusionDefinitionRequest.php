<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetExclusionDefinitionRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetExclusionDefinitionRequest
 * @subpackage Structs
 */
class GetExclusionDefinitionRequest extends AbstractStructBase
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * Constructor method for GetExclusionDefinitionRequest
     * @uses GetExclusionDefinitionRequest::setName()
     * @param string $name
     */
    public function __construct($name = null)
    {
        $this
            ->setName($name);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\ExclusionTypes::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\ExclusionTypes::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $name
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetExclusionDefinitionRequest
     */
    public function setName($name = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\ExclusionTypes::valueIsValid($name)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $name, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\ExclusionTypes::getValidValues())), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetExclusionDefinitionRequest
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
