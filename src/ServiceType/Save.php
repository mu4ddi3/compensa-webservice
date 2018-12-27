<?php

namespace Mu4ddi3\Compensa\Webservice\ServiceType;

use Mu4ddi3\Compensa\Webservice\SoapClient\SoapClientBase;

/**
 * This class stands for Save ServiceType
 * @subpackage Services
 */
class Save extends SoapClientBase
{
    /**
     * Method to call the operation originally named SaveOffer
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\SaveOffer $parameters
     * @return \Mu4ddi3\Compensa\Webservice\StructType\SaveOfferResponse|bool
     */
    public function SaveOffer(\Mu4ddi3\Compensa\Webservice\StructType\SaveOffer $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->SaveOffer($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveApplication
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\SaveApplication $parameters
     * @return \Mu4ddi3\Compensa\Webservice\StructType\SaveApplicationResponse|bool
     */
    public function SaveApplication(\Mu4ddi3\Compensa\Webservice\StructType\SaveApplication $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->SaveApplication($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\SaveApplicationResponse|\Mu4ddi3\Compensa\Webservice\StructType\SaveOfferResponse
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
