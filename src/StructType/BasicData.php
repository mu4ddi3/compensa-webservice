<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BasicData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BasicData
 * @subpackage Structs
 */
class BasicData extends AbstractStructBase
{
    /**
     * The CancellationDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CancellationDate;
    /**
     * The Department
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Department;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Description;
    /**
     * The DescriptionOnOffer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $DescriptionOnOffer;
    /**
     * The ExpiryDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ExpiryDate;
    /**
     * The Goal
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Goal;
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Id;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Name;
    /**
     * The NameOnOffer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $NameOnOffer;
    /**
     * The Priority
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Priority;
    /**
     * The StartDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $StartDate;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The UsageLimit
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $UsageLimit;
    /**
     * The UserUsageLimit
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $UserUsageLimit;
    /**
     * The Visibilities
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPromotionVisibility
     */
    public $Visibilities;
    /**
     * Constructor method for BasicData
     * @uses BasicData::setCancellationDate()
     * @uses BasicData::setDepartment()
     * @uses BasicData::setDescription()
     * @uses BasicData::setDescriptionOnOffer()
     * @uses BasicData::setExpiryDate()
     * @uses BasicData::setGoal()
     * @uses BasicData::setId()
     * @uses BasicData::setName()
     * @uses BasicData::setNameOnOffer()
     * @uses BasicData::setPriority()
     * @uses BasicData::setStartDate()
     * @uses BasicData::setType()
     * @uses BasicData::setUsageLimit()
     * @uses BasicData::setUserUsageLimit()
     * @uses BasicData::setVisibilities()
     * @param string $cancellationDate
     * @param string $department
     * @param string $description
     * @param string $descriptionOnOffer
     * @param string $expiryDate
     * @param string $goal
     * @param int $id
     * @param string $name
     * @param string $nameOnOffer
     * @param int $priority
     * @param string $startDate
     * @param string $type
     * @param int $usageLimit
     * @param int $userUsageLimit
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPromotionVisibility $visibilities
     */
    public function __construct($cancellationDate = null, $department = null, $description = null, $descriptionOnOffer = null, $expiryDate = null, $goal = null, $id = null, $name = null, $nameOnOffer = null, $priority = null, $startDate = null, $type = null, $usageLimit = null, $userUsageLimit = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPromotionVisibility $visibilities = null)
    {
        $this
            ->setCancellationDate($cancellationDate)
            ->setDepartment($department)
            ->setDescription($description)
            ->setDescriptionOnOffer($descriptionOnOffer)
            ->setExpiryDate($expiryDate)
            ->setGoal($goal)
            ->setId($id)
            ->setName($name)
            ->setNameOnOffer($nameOnOffer)
            ->setPriority($priority)
            ->setStartDate($startDate)
            ->setType($type)
            ->setUsageLimit($usageLimit)
            ->setUserUsageLimit($userUsageLimit)
            ->setVisibilities($visibilities);
    }
    /**
     * Get CancellationDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCancellationDate()
    {
        return isset($this->CancellationDate) ? $this->CancellationDate : null;
    }
    /**
     * Set CancellationDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $cancellationDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasicData
     */
    public function setCancellationDate($cancellationDate = null)
    {
        // validation for constraint: string
        if (!is_null($cancellationDate) && !is_string($cancellationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cancellationDate)), __LINE__);
        }
        if (is_null($cancellationDate) || (is_array($cancellationDate) && empty($cancellationDate))) {
            unset($this->CancellationDate);
        } else {
            $this->CancellationDate = $cancellationDate;
        }
        return $this;
    }
    /**
     * Get Department value
     * @return string|null
     */
    public function getDepartment()
    {
        return $this->Department;
    }
    /**
     * Set Department value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\DepartmentType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\DepartmentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $department
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasicData
     */
    public function setDepartment($department = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\DepartmentType::valueIsValid($department)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $department, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\DepartmentType::getValidValues())), __LINE__);
        }
        $this->Department = $department;
        return $this;
    }
    /**
     * Get Description value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDescription()
    {
        return isset($this->Description) ? $this->Description : null;
    }
    /**
     * Set Description value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $description
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasicData
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        if (is_null($description) || (is_array($description) && empty($description))) {
            unset($this->Description);
        } else {
            $this->Description = $description;
        }
        return $this;
    }
    /**
     * Get DescriptionOnOffer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDescriptionOnOffer()
    {
        return isset($this->DescriptionOnOffer) ? $this->DescriptionOnOffer : null;
    }
    /**
     * Set DescriptionOnOffer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $descriptionOnOffer
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasicData
     */
    public function setDescriptionOnOffer($descriptionOnOffer = null)
    {
        // validation for constraint: string
        if (!is_null($descriptionOnOffer) && !is_string($descriptionOnOffer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($descriptionOnOffer)), __LINE__);
        }
        if (is_null($descriptionOnOffer) || (is_array($descriptionOnOffer) && empty($descriptionOnOffer))) {
            unset($this->DescriptionOnOffer);
        } else {
            $this->DescriptionOnOffer = $descriptionOnOffer;
        }
        return $this;
    }
    /**
     * Get ExpiryDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getExpiryDate()
    {
        return isset($this->ExpiryDate) ? $this->ExpiryDate : null;
    }
    /**
     * Set ExpiryDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $expiryDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasicData
     */
    public function setExpiryDate($expiryDate = null)
    {
        // validation for constraint: string
        if (!is_null($expiryDate) && !is_string($expiryDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expiryDate)), __LINE__);
        }
        if (is_null($expiryDate) || (is_array($expiryDate) && empty($expiryDate))) {
            unset($this->ExpiryDate);
        } else {
            $this->ExpiryDate = $expiryDate;
        }
        return $this;
    }
    /**
     * Get Goal value
     * @return string|null
     */
    public function getGoal()
    {
        return $this->Goal;
    }
    /**
     * Set Goal value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PromotionGoal::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PromotionGoal::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $goal
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasicData
     */
    public function setGoal($goal = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\PromotionGoal::valueIsValid($goal)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $goal, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\PromotionGoal::getValidValues())), __LINE__);
        }
        $this->Goal = $goal;
        return $this;
    }
    /**
     * Get Id value
     * @return int|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param int $id
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasicData
     */
    public function setId($id = null)
    {
        // validation for constraint: int
        if (!is_null($id) && !is_numeric($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($id)), __LINE__);
        }
        $this->Id = $id;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasicData
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
     * Get NameOnOffer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNameOnOffer()
    {
        return isset($this->NameOnOffer) ? $this->NameOnOffer : null;
    }
    /**
     * Set NameOnOffer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $nameOnOffer
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasicData
     */
    public function setNameOnOffer($nameOnOffer = null)
    {
        // validation for constraint: string
        if (!is_null($nameOnOffer) && !is_string($nameOnOffer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nameOnOffer)), __LINE__);
        }
        if (is_null($nameOnOffer) || (is_array($nameOnOffer) && empty($nameOnOffer))) {
            unset($this->NameOnOffer);
        } else {
            $this->NameOnOffer = $nameOnOffer;
        }
        return $this;
    }
    /**
     * Get Priority value
     * @return int|null
     */
    public function getPriority()
    {
        return $this->Priority;
    }
    /**
     * Set Priority value
     * @param int $priority
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasicData
     */
    public function setPriority($priority = null)
    {
        // validation for constraint: int
        if (!is_null($priority) && !is_numeric($priority)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($priority)), __LINE__);
        }
        $this->Priority = $priority;
        return $this;
    }
    /**
     * Get StartDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStartDate()
    {
        return isset($this->StartDate) ? $this->StartDate : null;
    }
    /**
     * Set StartDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $startDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasicData
     */
    public function setStartDate($startDate = null)
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startDate)), __LINE__);
        }
        if (is_null($startDate) || (is_array($startDate) && empty($startDate))) {
            unset($this->StartDate);
        } else {
            $this->StartDate = $startDate;
        }
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
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PromotionType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PromotionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasicData
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\PromotionType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\PromotionType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get UsageLimit value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getUsageLimit()
    {
        return isset($this->UsageLimit) ? $this->UsageLimit : null;
    }
    /**
     * Set UsageLimit value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $usageLimit
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasicData
     */
    public function setUsageLimit($usageLimit = null)
    {
        // validation for constraint: int
        if (!is_null($usageLimit) && !is_numeric($usageLimit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($usageLimit)), __LINE__);
        }
        if (is_null($usageLimit) || (is_array($usageLimit) && empty($usageLimit))) {
            unset($this->UsageLimit);
        } else {
            $this->UsageLimit = $usageLimit;
        }
        return $this;
    }
    /**
     * Get UserUsageLimit value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getUserUsageLimit()
    {
        return isset($this->UserUsageLimit) ? $this->UserUsageLimit : null;
    }
    /**
     * Set UserUsageLimit value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $userUsageLimit
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasicData
     */
    public function setUserUsageLimit($userUsageLimit = null)
    {
        // validation for constraint: int
        if (!is_null($userUsageLimit) && !is_numeric($userUsageLimit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($userUsageLimit)), __LINE__);
        }
        if (is_null($userUsageLimit) || (is_array($userUsageLimit) && empty($userUsageLimit))) {
            unset($this->UserUsageLimit);
        } else {
            $this->UserUsageLimit = $userUsageLimit;
        }
        return $this;
    }
    /**
     * Get Visibilities value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPromotionVisibility|null
     */
    public function getVisibilities()
    {
        return isset($this->Visibilities) ? $this->Visibilities : null;
    }
    /**
     * Set Visibilities value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPromotionVisibility $visibilities
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasicData
     */
    public function setVisibilities(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPromotionVisibility $visibilities = null)
    {
        if (is_null($visibilities) || (is_array($visibilities) && empty($visibilities))) {
            unset($this->Visibilities);
        } else {
            $this->Visibilities = $visibilities;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasicData
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
