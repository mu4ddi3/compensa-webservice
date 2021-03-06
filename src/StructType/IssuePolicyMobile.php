<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IssuePolicyMobile StructType
 * @subpackage Structs
 */
class IssuePolicyMobile extends AbstractStructBase
{
    /**
     * The request
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\RequestOfIssuePolicyRequestvm2CbLAl
     */
    public $request;
    /**
     * Constructor method for IssuePolicyMobile
     * @uses IssuePolicyMobile::setRequest()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RequestOfIssuePolicyRequestvm2CbLAl $request
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\RequestOfIssuePolicyRequestvm2CbLAl $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RequestOfIssuePolicyRequestvm2CbLAl|null
     */
    public function getRequest()
    {
        return isset($this->request) ? $this->request : null;
    }
    /**
     * Set request value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RequestOfIssuePolicyRequestvm2CbLAl $request
     * @return \Mu4ddi3\Compensa\Webservice\StructType\IssuePolicyMobile
     */
    public function setRequest(\Mu4ddi3\Compensa\Webservice\StructType\RequestOfIssuePolicyRequestvm2CbLAl $request = null)
    {
        if (is_null($request) || (is_array($request) && empty($request))) {
            unset($this->request);
        } else {
            $this->request = $request;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\IssuePolicyMobile
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
