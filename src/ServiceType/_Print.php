<?php

namespace Mu4ddi3\Compensa\Webservice\ServiceType;

use Mu4ddi3\Compensa\Webservice\SoapClient\SoapClientBase;

/**
 * This class stands for Print ServiceType
 * @subpackage Services
 */
class _Print extends SoapClientBase
{
    /**
     * Method to call the operation originally named PrintOffer
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PrintOffer $parameters
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PrintOfferResponse|bool
     */
    public function PrintOffer(\Mu4ddi3\Compensa\Webservice\StructType\PrintOffer $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->PrintOffer($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named PrintPolicy
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PrintPolicy $parameters
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PrintPolicyResponse|bool
     */
    public function PrintPolicy(\Mu4ddi3\Compensa\Webservice\StructType\PrintPolicy $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->PrintPolicy($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PrintOfferResponse|\Mu4ddi3\Compensa\Webservice\StructType\PrintPolicyResponse
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
