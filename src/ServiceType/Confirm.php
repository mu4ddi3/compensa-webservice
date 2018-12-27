<?php

namespace Mu4ddi3\Compensa\Webservice\ServiceType;

use Mu4ddi3\Compensa\Webservice\SoapClient\SoapClientBase;

/**
 * This class stands for Confirm ServiceType
 * @subpackage Services
 */
class Confirm extends SoapClientBase
{
    /**
     * Method to call the operation originally named ConfirmPolicy
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ConfirmPolicy $parameters
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ConfirmPolicyResponse|bool
     */
    public function ConfirmPolicy(\Mu4ddi3\Compensa\Webservice\StructType\ConfirmPolicy $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->ConfirmPolicy($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ConfirmPolicyResponse
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
