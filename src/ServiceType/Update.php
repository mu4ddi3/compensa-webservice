<?php

namespace Mu4ddi3\Compensa\Webservice\ServiceType;

use Mu4ddi3\Compensa\Webservice\SoapClient\SoapClientBase;

/**
 * This class stands for Update ServiceType
 * @subpackage Services
 */
class Update extends SoapClientBase
{
    /**
     * Method to call the operation originally named UpdateOffer
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\UpdateOffer $parameters
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UpdateOfferResponse|bool
     */
    public function UpdateOffer(\Mu4ddi3\Compensa\Webservice\StructType\UpdateOffer $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->UpdateOffer($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UpdateOfferResponse
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
