<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfMotorPartnerCorrectionData ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfMotorPartnerCorrectionData
 * @subpackage Arrays
 */
class ArrayOfMotorPartnerCorrectionData extends AbstractStructArrayBase
{
    /**
     * The MotorPartnerCorrectionData
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MotorPartnerCorrectionData[]
     */
    public $MotorPartnerCorrectionData;
    /**
     * Constructor method for ArrayOfMotorPartnerCorrectionData
     * @uses ArrayOfMotorPartnerCorrectionData::setMotorPartnerCorrectionData()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MotorPartnerCorrectionData[] $motorPartnerCorrectionData
     */
    public function __construct(array $motorPartnerCorrectionData = array())
    {
        $this
            ->setMotorPartnerCorrectionData($motorPartnerCorrectionData);
    }
    /**
     * Get MotorPartnerCorrectionData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorPartnerCorrectionData[]|null
     */
    public function getMotorPartnerCorrectionData()
    {
        return isset($this->MotorPartnerCorrectionData) ? $this->MotorPartnerCorrectionData : null;
    }
    /**
     * Set MotorPartnerCorrectionData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MotorPartnerCorrectionData[] $motorPartnerCorrectionData
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMotorPartnerCorrectionData
     */
    public function setMotorPartnerCorrectionData(array $motorPartnerCorrectionData = array())
    {
        foreach ($motorPartnerCorrectionData as $arrayOfMotorPartnerCorrectionDataMotorPartnerCorrectionDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfMotorPartnerCorrectionDataMotorPartnerCorrectionDataItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\MotorPartnerCorrectionData) {
                throw new \InvalidArgumentException(sprintf('The MotorPartnerCorrectionData property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\MotorPartnerCorrectionData, "%s" given', is_object($arrayOfMotorPartnerCorrectionDataMotorPartnerCorrectionDataItem) ? get_class($arrayOfMotorPartnerCorrectionDataMotorPartnerCorrectionDataItem) : gettype($arrayOfMotorPartnerCorrectionDataMotorPartnerCorrectionDataItem)), __LINE__);
            }
        }
        if (is_null($motorPartnerCorrectionData) || (is_array($motorPartnerCorrectionData) && empty($motorPartnerCorrectionData))) {
            unset($this->MotorPartnerCorrectionData);
        } else {
            $this->MotorPartnerCorrectionData = $motorPartnerCorrectionData;
        }
        return $this;
    }
    /**
     * Add item to MotorPartnerCorrectionData value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MotorPartnerCorrectionData $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMotorPartnerCorrectionData
     */
    public function addToMotorPartnerCorrectionData(\Mu4ddi3\Compensa\Webservice\StructType\MotorPartnerCorrectionData $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\MotorPartnerCorrectionData) {
            throw new \InvalidArgumentException(sprintf('The MotorPartnerCorrectionData property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\MotorPartnerCorrectionData, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->MotorPartnerCorrectionData[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorPartnerCorrectionData|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorPartnerCorrectionData|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorPartnerCorrectionData|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorPartnerCorrectionData|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorPartnerCorrectionData|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string MotorPartnerCorrectionData
     */
    public function getAttributeName()
    {
        return 'MotorPartnerCorrectionData';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMotorPartnerCorrectionData
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
