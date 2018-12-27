<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseBase StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ResponseBase
 * @subpackage Structs
 */
class ResponseBase extends AbstractStructBase
{
    /**
     * The Errors
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfError
     */
    public $Errors;
    /**
     * Constructor method for ResponseBase
     * @uses ResponseBase::setErrors()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfError $errors
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfError $errors = null)
    {
        $this
            ->setErrors($errors);
    }
    /**
     * Get Errors value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfError|null
     */
    public function getErrors()
    {
        return isset($this->Errors) ? $this->Errors : null;
    }
    /**
     * Set Errors value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfError $errors
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ResponseBase
     */
    public function setErrors(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfError $errors = null)
    {
        if (is_null($errors) || (is_array($errors) && empty($errors))) {
            unset($this->Errors);
        } else {
            $this->Errors = $errors;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ResponseBase
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
