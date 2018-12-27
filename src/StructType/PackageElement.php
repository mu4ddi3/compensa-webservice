<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PackageElement StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PackageElement
 * @subpackage Structs
 */
class PackageElement extends AbstractStructBase
{
    /**
     * The Options
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfanyType
     */
    public $Options;
    /**
     * Constructor method for PackageElement
     * @uses PackageElement::setOptions()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfanyType $options
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfanyType $options = null)
    {
        $this
            ->setOptions($options);
    }
    /**
     * Get Options value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfanyType|null
     */
    public function getOptions()
    {
        return isset($this->Options) ? $this->Options : null;
    }
    /**
     * Set Options value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfanyType $options
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageElement
     */
    public function setOptions(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfanyType $options = null)
    {
        if (is_null($options) || (is_array($options) && empty($options))) {
            unset($this->Options);
        } else {
            $this->Options = $options;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageElement
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
