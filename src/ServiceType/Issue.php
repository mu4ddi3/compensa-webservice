<?php

namespace Mu4ddi3\Compensa\Webservice\ServiceType;

use Mu4ddi3\Compensa\Webservice\SoapClient\SoapClientBase;

/**
 * This class stands for Issue ServiceType
 * @subpackage Services
 */
class Issue extends SoapClientBase
{
    /**
     * Method to call the operation originally named IssuePolicy
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\IssuePolicy $parameters
     * @return \Mu4ddi3\Compensa\Webservice\StructType\IssuePolicyResponse|bool
     */
    public function IssuePolicy(\Mu4ddi3\Compensa\Webservice\StructType\IssuePolicy $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->IssuePolicy($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named IssuePolicyMobile
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\IssuePolicyMobile $parameters
     * @return \Mu4ddi3\Compensa\Webservice\StructType\IssuePolicyMobileResponse|bool
     */
    public function IssuePolicyMobile(\Mu4ddi3\Compensa\Webservice\StructType\IssuePolicyMobile $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->IssuePolicyMobile($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\IssuePolicyMobileResponse|\Mu4ddi3\Compensa\Webservice\StructType\IssuePolicyResponse
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
