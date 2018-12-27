<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://cppl.services.bro01.itis.pl/Motor/MotorService.svc/true?singleWsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc....
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://cppl.services.bro01.itis.pl/Motor/MotorService.svc/true?singleWsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Mu4ddi3\Compensa\Webservice\ClassMap::get(),
);
/**
 * Samples for Calculate ServiceType
 */
$calculate = new \Mu4ddi3\Compensa\Webservice\ServiceType\Calculate($options);
/**
 * Sample call for CalculatePremium operation/method
 */
if ($calculate->CalculatePremium(new \Mu4ddi3\Compensa\Webservice\StructType\CalculatePremium()) !== false) {
    print_r($calculate->getResult());
} else {
    print_r($calculate->getLastError());
}
/**
 * Samples for Save ServiceType
 */
$save = new \Mu4ddi3\Compensa\Webservice\ServiceType\Save($options);
/**
 * Sample call for SaveOffer operation/method
 */
if ($save->SaveOffer(new \Mu4ddi3\Compensa\Webservice\StructType\SaveOffer()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for SaveApplication operation/method
 */
if ($save->SaveApplication(new \Mu4ddi3\Compensa\Webservice\StructType\SaveApplication()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Samples for Load ServiceType
 */
$load = new \Mu4ddi3\Compensa\Webservice\ServiceType\Load($options);
/**
 * Sample call for LoadOffer operation/method
 */
if ($load->LoadOffer(new \Mu4ddi3\Compensa\Webservice\StructType\LoadOffer()) !== false) {
    print_r($load->getResult());
} else {
    print_r($load->getLastError());
}
/**
 * Samples for Update ServiceType
 */
$update = new \Mu4ddi3\Compensa\Webservice\ServiceType\Update($options);
/**
 * Sample call for UpdateOffer operation/method
 */
if ($update->UpdateOffer(new \Mu4ddi3\Compensa\Webservice\StructType\UpdateOffer()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Samples for Issue ServiceType
 */
$issue = new \Mu4ddi3\Compensa\Webservice\ServiceType\Issue($options);
/**
 * Sample call for IssuePolicy operation/method
 */
if ($issue->IssuePolicy(new \Mu4ddi3\Compensa\Webservice\StructType\IssuePolicy()) !== false) {
    print_r($issue->getResult());
} else {
    print_r($issue->getLastError());
}
/**
 * Sample call for IssuePolicyMobile operation/method
 */
if ($issue->IssuePolicyMobile(new \Mu4ddi3\Compensa\Webservice\StructType\IssuePolicyMobile()) !== false) {
    print_r($issue->getResult());
} else {
    print_r($issue->getLastError());
}
/**
 * Samples for Print ServiceType
 */
$print = new \Mu4ddi3\Compensa\Webservice\ServiceType\_Print($options);
/**
 * Sample call for PrintOffer operation/method
 */
if ($print->PrintOffer(new \Mu4ddi3\Compensa\Webservice\StructType\PrintOffer()) !== false) {
    print_r($print->getResult());
} else {
    print_r($print->getLastError());
}
/**
 * Sample call for PrintPolicy operation/method
 */
if ($print->PrintPolicy(new \Mu4ddi3\Compensa\Webservice\StructType\PrintPolicy()) !== false) {
    print_r($print->getResult());
} else {
    print_r($print->getLastError());
}
/**
 * Samples for Confirm ServiceType
 */
$confirm = new \Mu4ddi3\Compensa\Webservice\ServiceType\Confirm($options);
/**
 * Sample call for ConfirmPolicy operation/method
 */
if ($confirm->ConfirmPolicy(new \Mu4ddi3\Compensa\Webservice\StructType\ConfirmPolicy()) !== false) {
    print_r($confirm->getResult());
} else {
    print_r($confirm->getLastError());
}
/**
 * Samples for Cancel ServiceType
 */
$cancel = new \Mu4ddi3\Compensa\Webservice\ServiceType\Cancel($options);
/**
 * Sample call for CancelPolicy operation/method
 */
if ($cancel->CancelPolicy(new \Mu4ddi3\Compensa\Webservice\StructType\CancelPolicy()) !== false) {
    print_r($cancel->getResult());
} else {
    print_r($cancel->getLastError());
}
