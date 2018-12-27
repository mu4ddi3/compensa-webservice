<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClauseStatement StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ClauseStatement
 * @subpackage Structs
 */
class ClauseStatement extends AbstractStructBase
{
    /**
     * The IsHeader
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsHeader;
    /**
     * The Number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Number;
    /**
     * The Text
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Text;
    /**
     * Constructor method for ClauseStatement
     * @uses ClauseStatement::setIsHeader()
     * @uses ClauseStatement::setNumber()
     * @uses ClauseStatement::setText()
     * @param bool $isHeader
     * @param int $number
     * @param string $text
     */
    public function __construct($isHeader = null, $number = null, $text = null)
    {
        $this
            ->setIsHeader($isHeader)
            ->setNumber($number)
            ->setText($text);
    }
    /**
     * Get IsHeader value
     * @return bool|null
     */
    public function getIsHeader()
    {
        return $this->IsHeader;
    }
    /**
     * Set IsHeader value
     * @param bool $isHeader
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClauseStatement
     */
    public function setIsHeader($isHeader = null)
    {
        // validation for constraint: boolean
        if (!is_null($isHeader) && !is_bool($isHeader)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isHeader)), __LINE__);
        }
        $this->IsHeader = $isHeader;
        return $this;
    }
    /**
     * Get Number value
     * @return int|null
     */
    public function getNumber()
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param int $number
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClauseStatement
     */
    public function setNumber($number = null)
    {
        // validation for constraint: int
        if (!is_null($number) && !is_numeric($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($number)), __LINE__);
        }
        $this->Number = $number;
        return $this;
    }
    /**
     * Get Text value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getText()
    {
        return isset($this->Text) ? $this->Text : null;
    }
    /**
     * Set Text value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $text
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClauseStatement
     */
    public function setText($text = null)
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($text)), __LINE__);
        }
        if (is_null($text) || (is_array($text) && empty($text))) {
            unset($this->Text);
        } else {
            $this->Text = $text;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClauseStatement
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
