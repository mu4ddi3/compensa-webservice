<?php

namespace Mu4ddi3\Compensa\Webservice\ServiceType;

use Mu4ddi3\Compensa\Webservice\SoapClient\SoapClientBase;

/**
 * This class stands for Cancel ServiceType
 * @subpackage Services
 */
class Cancel extends SoapClientBase
{
    /**
     * Method to call the operation originally named CancelPolicy
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CancelPolicy $parameters
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CancelPolicyResponse|bool
     */
    public function CancelPolicy(\Mu4ddi3\Compensa\Webservice\StructType\CancelPolicy $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CancelPolicy($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CancelPolicyResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
