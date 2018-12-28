<?php

namespace Mu4ddi3\Compensa\Webservice\SoapClient;

/**
 * This class can be overridden at your will.
 * Its only purpose is to show you how you can use your own SoapClient client.
 */
class SoapClient extends \SoapClient
{
    /**
     * @var string
     */
    protected $lastModifiedRequest;

    /**
     * @param string $request
     * @param string $location
     * @param string $action
     * @param string $version
     * @param number $one_way
     *
     * @return mixed
     */
    public function __doRequest($request, $location, $action, $version, $one_way = 0)
    {
        //INIEKCJA REQUESTU
        //        $injectedRequest = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR
        //            . '..' . DIRECTORY_SEPARATOR
        //            . 'data' . DIRECTORY_SEPARATOR
        //            . 'reqCalculatePremium-904000614.xml'
        //        );
        //        $request = $injectedRequest;

        //        $this->removeEmptyTags($request);

        //DEBUG NA EKRAN
        $dom = new \DOMDocument();

        //ALBO TO
        //$dom->loadXML($request);

        //ALBO TO (te dwa musza byc razem)
        $this->fixInstallmentsNumber($request);
        $dom->loadXML($this->__getLastRequest());

//        $dom->formatOutput = true;
//        $xml = $dom->saveXML();
//        echo '<span>Request</span>';
//        echo '<textarea rows="15" cols="80" style="border:none;">';
//        echo htmlspecialchars($xml);
//        echo '</textarea>';

        //ODPALENIE RZECZYWISTE
        //$response = parent::__doRequest($request, $location, $action, $version);

        //Jak fixujesz to odpal z getLastRequest
        $response = parent::__doRequest($this->__getLastRequest(), $location, $action, $version);



        //INIEKCJA RESPONSA
        //        $injectedResponse = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR
        //            . '..' . DIRECTORY_SEPARATOR
        //            . 'data' . DIRECTORY_SEPARATOR
        //            . 'patrycja-response.xml'
        //        );
        //        $response = $injectedResponse;

        //        $this->removeEmptyTags(response);

        //DEBUG NA EKRAN
//        $dom2 = new \DOMDocument();
//        $dom2->loadXML($response);
//        $dom2->formatOutput = true;
//        $xml2 = $dom2->saveXML();
//        echo '<span>Response</span>';
//        echo '<textarea rows="15" cols="80" style="border:none;">';
//        echo htmlspecialchars($xml2);
//        echo '</textarea>';


        return $response;
    }

    /**
     * Returns last request
     *
     * @see SoapClient::__getLastRequest()
     * @return string
     */
    public function __getLastRequest()
    {
        return $this->lastModifiedRequest;
    }

    /**
     * Sets last request values
     *
     * @param string $_lastRequest
     *
     * @return string
     */
    public function __setLastRequest($lastRequest)
    {
        return ($this->lastModifiedRequest = $lastRequest);
    }

    /**
     * @param string $xml
     * @param array $exceptTags
     * @return string
     */
    private function fixInstallmentsNumber($xml, $exceptTags = array())
    {
        if (!empty($xml)) {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;
            if ($dom->loadXML($xml) && $dom->hasChildNodes()) {
                $mainNode = $dom->childNodes->item(0);

                $in = $mainNode->getElementsByTagName('InstallmentsNumber');
                foreach ($in as $i) {
                    if ($i->nodeValue === '') {
                        //                        $i->setAttributeNs('xsj', 'nil', 'true');
                        $i->setAttributeNode(new \DOMAttr('xsi:nil', 'true'));
                    }
                }

                $xml = $dom->saveXML($mainNode);
            }
        }
        return $this->__setLastRequest($xml);
    }

    /**
     * Removes empty tags from XML
     *
     * @param string $xml
     * @param array  $exceptTags
     *
     * @return string
     */
    private function removeEmptyTags($xml, $exceptTags = array())
    {
        if (!empty($xml)) {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;
            if ($dom->loadXML($xml) && $dom->hasChildNodes()) {
                $mainNode = $dom->childNodes->item(0);
                self::removeEmptyTagsFromDomNode($mainNode, $exceptTags);
                $xml = $dom->saveXML($mainNode);
            }
        }
        return $this->__setLastRequest($xml);
    }

    /**
     * Removes empty tags from \DOMNode
     *
     * @uses RemoveEmptyRequestTags::removeEmptyTagsFromDomNode()
     *
     * @param \DOMNode $domNode
     *
     * @return void
     */
    private static function removeEmptyTagsFromDomNode(\DOMNode $domNode, $exceptTags = array())
    {
        if ($domNode->hasChildNodes()) {
            foreach ($domNode->childNodes as $childNode) {
                self::removeEmptyTagsFromDomNode($childNode, $exceptTags);
            }
        } elseif ($domNode->attributes->length === 0 && trim($domNode->nodeValue) === '' && !in_array($domNode->nodeName, $exceptTags)) {
            /**
             * As the parent might not have returned an empty value as it contained this child
             * we go process back the parent to be sure that he validated as not empty
             */
            $parentNode = $domNode->parentNode;
            $domNode->parentNode->removeChild($domNode);
            self::removeEmptyTagsFromDomNode($parentNode, $exceptTags);
        }
    }
}
