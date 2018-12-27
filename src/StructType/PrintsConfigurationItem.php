<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintsConfigurationItem StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PrintsConfigurationItem
 * @subpackage Structs
 */
class PrintsConfigurationItem extends AbstractStructBase
{
    /**
     * The FilePath
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FilePath;
    /**
     * The IsFilePathAbsolute
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsFilePathAbsolute;
    /**
     * The PrintFileType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PrintFileType;
    /**
     * Constructor method for PrintsConfigurationItem
     * @uses PrintsConfigurationItem::setFilePath()
     * @uses PrintsConfigurationItem::setIsFilePathAbsolute()
     * @uses PrintsConfigurationItem::setPrintFileType()
     * @param string $filePath
     * @param bool $isFilePathAbsolute
     * @param string $printFileType
     */
    public function __construct($filePath = null, $isFilePathAbsolute = null, $printFileType = null)
    {
        $this
            ->setFilePath($filePath)
            ->setIsFilePathAbsolute($isFilePathAbsolute)
            ->setPrintFileType($printFileType);
    }
    /**
     * Get FilePath value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFilePath()
    {
        return isset($this->FilePath) ? $this->FilePath : null;
    }
    /**
     * Set FilePath value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $filePath
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PrintsConfigurationItem
     */
    public function setFilePath($filePath = null)
    {
        // validation for constraint: string
        if (!is_null($filePath) && !is_string($filePath)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($filePath)), __LINE__);
        }
        if (is_null($filePath) || (is_array($filePath) && empty($filePath))) {
            unset($this->FilePath);
        } else {
            $this->FilePath = $filePath;
        }
        return $this;
    }
    /**
     * Get IsFilePathAbsolute value
     * @return bool|null
     */
    public function getIsFilePathAbsolute()
    {
        return $this->IsFilePathAbsolute;
    }
    /**
     * Set IsFilePathAbsolute value
     * @param bool $isFilePathAbsolute
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PrintsConfigurationItem
     */
    public function setIsFilePathAbsolute($isFilePathAbsolute = null)
    {
        // validation for constraint: boolean
        if (!is_null($isFilePathAbsolute) && !is_bool($isFilePathAbsolute)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isFilePathAbsolute)), __LINE__);
        }
        $this->IsFilePathAbsolute = $isFilePathAbsolute;
        return $this;
    }
    /**
     * Get PrintFileType value
     * @return string|null
     */
    public function getPrintFileType()
    {
        return $this->PrintFileType;
    }
    /**
     * Set PrintFileType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PrintFileType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PrintFileType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $printFileType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PrintsConfigurationItem
     */
    public function setPrintFileType($printFileType = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\PrintFileType::valueIsValid($printFileType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $printFileType, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\PrintFileType::getValidValues())), __LINE__);
        }
        $this->PrintFileType = $printFileType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PrintsConfigurationItem
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
