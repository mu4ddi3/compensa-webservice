<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintPolicyResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PrintPolicyResponse
 * @subpackage Structs
 */
class PrintPolicyResponse extends AbstractStructBase
{
    /**
     * The PrintPolicyResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ResponseOfPrintPolicyResponseAwgQbKoT
     */
    public $PrintPolicyResult;
    /**
     * The Contents
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Contents;
    /**
     * The FileName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FileName;
    /**
     * Constructor method for PrintPolicyResponse
     * @uses PrintPolicyResponse::setPrintPolicyResult()
     * @uses PrintPolicyResponse::setContents()
     * @uses PrintPolicyResponse::setFileName()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ResponseOfPrintPolicyResponseAwgQbKoT $printPolicyResult
     * @param string $contents
     * @param string $fileName
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\ResponseOfPrintPolicyResponseAwgQbKoT $printPolicyResult = null, $contents = null, $fileName = null)
    {
        $this
            ->setPrintPolicyResult($printPolicyResult)
            ->setContents($contents)
            ->setFileName($fileName);
    }
    /**
     * Get PrintPolicyResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ResponseOfPrintPolicyResponseAwgQbKoT|null
     */
    public function getPrintPolicyResult()
    {
        return isset($this->PrintPolicyResult) ? $this->PrintPolicyResult : null;
    }
    /**
     * Set PrintPolicyResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ResponseOfPrintPolicyResponseAwgQbKoT $printPolicyResult
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PrintPolicyResponse
     */
    public function setPrintPolicyResult(\Mu4ddi3\Compensa\Webservice\StructType\ResponseOfPrintPolicyResponseAwgQbKoT $printPolicyResult = null)
    {
        if (is_null($printPolicyResult) || (is_array($printPolicyResult) && empty($printPolicyResult))) {
            unset($this->PrintPolicyResult);
        } else {
            $this->PrintPolicyResult = $printPolicyResult;
        }
        return $this;
    }
    /**
     * Get Contents value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getContents()
    {
        return isset($this->Contents) ? $this->Contents : null;
    }
    /**
     * Set Contents value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $contents
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PrintPolicyResponse
     */
    public function setContents($contents = null)
    {
        // validation for constraint: string
        if (!is_null($contents) && !is_string($contents)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contents)), __LINE__);
        }
        if (is_null($contents) || (is_array($contents) && empty($contents))) {
            unset($this->Contents);
        } else {
            $this->Contents = $contents;
        }
        return $this;
    }
    /**
     * Get FileName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFileName()
    {
        return isset($this->FileName) ? $this->FileName : null;
    }
    /**
     * Set FileName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fileName
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PrintPolicyResponse
     */
    public function setFileName($fileName = null)
    {
        // validation for constraint: string
        if (!is_null($fileName) && !is_string($fileName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fileName)), __LINE__);
        }
        if (is_null($fileName) || (is_array($fileName) && empty($fileName))) {
            unset($this->FileName);
        } else {
            $this->FileName = $fileName;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PrintPolicyResponse
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
