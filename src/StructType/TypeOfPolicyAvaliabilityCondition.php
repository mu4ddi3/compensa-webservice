<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TypeOfPolicyAvaliabilityCondition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:TypeOfPolicyAvaliabilityCondition
 * @subpackage Structs
 */
class TypeOfPolicyAvaliabilityCondition extends AvailabilityCondition
{
    /**
     * The IsContinuation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $IsContinuation;
    /**
     * Constructor method for TypeOfPolicyAvaliabilityCondition
     * @uses TypeOfPolicyAvaliabilityCondition::setIsContinuation()
     * @param bool $isContinuation
     */
    public function __construct($isContinuation = null)
    {
        $this
            ->setIsContinuation($isContinuation);
    }
    /**
     * Get IsContinuation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsContinuation()
    {
        return isset($this->IsContinuation) ? $this->IsContinuation : null;
    }
    /**
     * Set IsContinuation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isContinuation
     * @return \Mu4ddi3\Compensa\Webservice\StructType\TypeOfPolicyAvaliabilityCondition
     */
    public function setIsContinuation($isContinuation = null)
    {
        // validation for constraint: boolean
        if (!is_null($isContinuation) && !is_bool($isContinuation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isContinuation)), __LINE__);
        }
        if (is_null($isContinuation) || (is_array($isContinuation) && empty($isContinuation))) {
            unset($this->IsContinuation);
        } else {
            $this->IsContinuation = $isContinuation;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\TypeOfPolicyAvaliabilityCondition
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
