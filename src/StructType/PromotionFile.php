<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PromotionFile StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PromotionFile
 * @subpackage Structs
 */
class PromotionFile extends AbstractStructBase
{
    /**
     * The Extension
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Extension;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Name;
    /**
     * The Size
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Size;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * Constructor method for PromotionFile
     * @uses PromotionFile::setExtension()
     * @uses PromotionFile::setName()
     * @uses PromotionFile::setSize()
     * @uses PromotionFile::setType()
     * @param string $extension
     * @param string $name
     * @param int $size
     * @param string $type
     */
    public function __construct($extension = null, $name = null, $size = null, $type = null)
    {
        $this
            ->setExtension($extension)
            ->setName($name)
            ->setSize($size)
            ->setType($type);
    }
    /**
     * Get Extension value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getExtension()
    {
        return isset($this->Extension) ? $this->Extension : null;
    }
    /**
     * Set Extension value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $extension
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PromotionFile
     */
    public function setExtension($extension = null)
    {
        // validation for constraint: string
        if (!is_null($extension) && !is_string($extension)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($extension)), __LINE__);
        }
        if (is_null($extension) || (is_array($extension) && empty($extension))) {
            unset($this->Extension);
        } else {
            $this->Extension = $extension;
        }
        return $this;
    }
    /**
     * Get Name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getName()
    {
        return isset($this->Name) ? $this->Name : null;
    }
    /**
     * Set Name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PromotionFile
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->Name);
        } else {
            $this->Name = $name;
        }
        return $this;
    }
    /**
     * Get Size value
     * @return int|null
     */
    public function getSize()
    {
        return $this->Size;
    }
    /**
     * Set Size value
     * @param int $size
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PromotionFile
     */
    public function setSize($size = null)
    {
        // validation for constraint: int
        if (!is_null($size) && !is_numeric($size)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($size)), __LINE__);
        }
        $this->Size = $size;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\FileType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\FileType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PromotionFile
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\FileType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\FileType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PromotionFile
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
