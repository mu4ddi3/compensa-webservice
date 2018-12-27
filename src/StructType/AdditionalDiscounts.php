<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalDiscounts StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AdditionalDiscounts
 * @subpackage Structs
 */
class AdditionalDiscounts extends AbstractStructBase
{
    /**
     * The CanAddEmployeeDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $CanAddEmployeeDiscount;
    /**
     * The CentralDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $CentralDiscount;
    /**
     * The CentralDiscountPrev
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $CentralDiscountPrev;
    /**
     * The CentralDiscountSum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $CentralDiscountSum;
    /**
     * The CentralDiscountSumPrev
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $CentralDiscountSumPrev;
    /**
     * The DirectorDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $DirectorDiscount;
    /**
     * The DirectorDiscountPrev
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $DirectorDiscountPrev;
    /**
     * The DirectorDiscountSum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $DirectorDiscountSum;
    /**
     * The DirectorDiscountSumPrev
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $DirectorDiscountSumPrev;
    /**
     * The EmployeeDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $EmployeeDiscount;
    /**
     * The EmployeeDiscountPrev
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $EmployeeDiscountPrev;
    /**
     * The EmployeeDiscountSum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $EmployeeDiscountSum;
    /**
     * The EmployeeDiscountSumPrev
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $EmployeeDiscountSumPrev;
    /**
     * The MarketingDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $MarketingDiscount;
    /**
     * The MarketingDiscoutVariant
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $MarketingDiscoutVariant;
    /**
     * The OtherDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $OtherDiscount;
    /**
     * The OtherDiscountAgreement
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OtherDiscountAgreement;
    /**
     * The OtherDiscountAgreementPrev
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OtherDiscountAgreementPrev;
    /**
     * The OtherDiscountAgreementSum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OtherDiscountAgreementSum;
    /**
     * The OtherDiscountAgreementSumPrev
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OtherDiscountAgreementSumPrev;
    /**
     * The OtherDiscountPrev
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $OtherDiscountPrev;
    /**
     * The OtherDiscountSum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $OtherDiscountSum;
    /**
     * The OtherDiscountSumPrev
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $OtherDiscountSumPrev;
    /**
     * The PolicyLifeNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PolicyLifeNumber;
    /**
     * The UnderwriterDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $UnderwriterDiscount;
    /**
     * The UnderwriterDiscountPrev
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $UnderwriterDiscountPrev;
    /**
     * The UnderwriterDiscountSum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $UnderwriterDiscountSum;
    /**
     * The UnderwriterDiscountSumPrev
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $UnderwriterDiscountSumPrev;
    /**
     * Constructor method for AdditionalDiscounts
     * @uses AdditionalDiscounts::setCanAddEmployeeDiscount()
     * @uses AdditionalDiscounts::setCentralDiscount()
     * @uses AdditionalDiscounts::setCentralDiscountPrev()
     * @uses AdditionalDiscounts::setCentralDiscountSum()
     * @uses AdditionalDiscounts::setCentralDiscountSumPrev()
     * @uses AdditionalDiscounts::setDirectorDiscount()
     * @uses AdditionalDiscounts::setDirectorDiscountPrev()
     * @uses AdditionalDiscounts::setDirectorDiscountSum()
     * @uses AdditionalDiscounts::setDirectorDiscountSumPrev()
     * @uses AdditionalDiscounts::setEmployeeDiscount()
     * @uses AdditionalDiscounts::setEmployeeDiscountPrev()
     * @uses AdditionalDiscounts::setEmployeeDiscountSum()
     * @uses AdditionalDiscounts::setEmployeeDiscountSumPrev()
     * @uses AdditionalDiscounts::setMarketingDiscount()
     * @uses AdditionalDiscounts::setMarketingDiscoutVariant()
     * @uses AdditionalDiscounts::setOtherDiscount()
     * @uses AdditionalDiscounts::setOtherDiscountAgreement()
     * @uses AdditionalDiscounts::setOtherDiscountAgreementPrev()
     * @uses AdditionalDiscounts::setOtherDiscountAgreementSum()
     * @uses AdditionalDiscounts::setOtherDiscountAgreementSumPrev()
     * @uses AdditionalDiscounts::setOtherDiscountPrev()
     * @uses AdditionalDiscounts::setOtherDiscountSum()
     * @uses AdditionalDiscounts::setOtherDiscountSumPrev()
     * @uses AdditionalDiscounts::setPolicyLifeNumber()
     * @uses AdditionalDiscounts::setUnderwriterDiscount()
     * @uses AdditionalDiscounts::setUnderwriterDiscountPrev()
     * @uses AdditionalDiscounts::setUnderwriterDiscountSum()
     * @uses AdditionalDiscounts::setUnderwriterDiscountSumPrev()
     * @param bool $canAddEmployeeDiscount
     * @param float $centralDiscount
     * @param float $centralDiscountPrev
     * @param float $centralDiscountSum
     * @param float $centralDiscountSumPrev
     * @param float $directorDiscount
     * @param float $directorDiscountPrev
     * @param float $directorDiscountSum
     * @param float $directorDiscountSumPrev
     * @param float $employeeDiscount
     * @param float $employeeDiscountPrev
     * @param float $employeeDiscountSum
     * @param float $employeeDiscountSumPrev
     * @param float $marketingDiscount
     * @param string $marketingDiscoutVariant
     * @param float $otherDiscount
     * @param string $otherDiscountAgreement
     * @param string $otherDiscountAgreementPrev
     * @param string $otherDiscountAgreementSum
     * @param string $otherDiscountAgreementSumPrev
     * @param float $otherDiscountPrev
     * @param float $otherDiscountSum
     * @param float $otherDiscountSumPrev
     * @param int $policyLifeNumber
     * @param float $underwriterDiscount
     * @param float $underwriterDiscountPrev
     * @param float $underwriterDiscountSum
     * @param float $underwriterDiscountSumPrev
     */
    public function __construct($canAddEmployeeDiscount = null, $centralDiscount = null, $centralDiscountPrev = null, $centralDiscountSum = null, $centralDiscountSumPrev = null, $directorDiscount = null, $directorDiscountPrev = null, $directorDiscountSum = null, $directorDiscountSumPrev = null, $employeeDiscount = null, $employeeDiscountPrev = null, $employeeDiscountSum = null, $employeeDiscountSumPrev = null, $marketingDiscount = null, $marketingDiscoutVariant = null, $otherDiscount = null, $otherDiscountAgreement = null, $otherDiscountAgreementPrev = null, $otherDiscountAgreementSum = null, $otherDiscountAgreementSumPrev = null, $otherDiscountPrev = null, $otherDiscountSum = null, $otherDiscountSumPrev = null, $policyLifeNumber = null, $underwriterDiscount = null, $underwriterDiscountPrev = null, $underwriterDiscountSum = null, $underwriterDiscountSumPrev = null)
    {
        $this
            ->setCanAddEmployeeDiscount($canAddEmployeeDiscount)
            ->setCentralDiscount($centralDiscount)
            ->setCentralDiscountPrev($centralDiscountPrev)
            ->setCentralDiscountSum($centralDiscountSum)
            ->setCentralDiscountSumPrev($centralDiscountSumPrev)
            ->setDirectorDiscount($directorDiscount)
            ->setDirectorDiscountPrev($directorDiscountPrev)
            ->setDirectorDiscountSum($directorDiscountSum)
            ->setDirectorDiscountSumPrev($directorDiscountSumPrev)
            ->setEmployeeDiscount($employeeDiscount)
            ->setEmployeeDiscountPrev($employeeDiscountPrev)
            ->setEmployeeDiscountSum($employeeDiscountSum)
            ->setEmployeeDiscountSumPrev($employeeDiscountSumPrev)
            ->setMarketingDiscount($marketingDiscount)
            ->setMarketingDiscoutVariant($marketingDiscoutVariant)
            ->setOtherDiscount($otherDiscount)
            ->setOtherDiscountAgreement($otherDiscountAgreement)
            ->setOtherDiscountAgreementPrev($otherDiscountAgreementPrev)
            ->setOtherDiscountAgreementSum($otherDiscountAgreementSum)
            ->setOtherDiscountAgreementSumPrev($otherDiscountAgreementSumPrev)
            ->setOtherDiscountPrev($otherDiscountPrev)
            ->setOtherDiscountSum($otherDiscountSum)
            ->setOtherDiscountSumPrev($otherDiscountSumPrev)
            ->setPolicyLifeNumber($policyLifeNumber)
            ->setUnderwriterDiscount($underwriterDiscount)
            ->setUnderwriterDiscountPrev($underwriterDiscountPrev)
            ->setUnderwriterDiscountSum($underwriterDiscountSum)
            ->setUnderwriterDiscountSumPrev($underwriterDiscountSumPrev);
    }
    /**
     * Get CanAddEmployeeDiscount value
     * @return bool|null
     */
    public function getCanAddEmployeeDiscount()
    {
        return $this->CanAddEmployeeDiscount;
    }
    /**
     * Set CanAddEmployeeDiscount value
     * @param bool $canAddEmployeeDiscount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscounts
     */
    public function setCanAddEmployeeDiscount($canAddEmployeeDiscount = null)
    {
        // validation for constraint: boolean
        if (!is_null($canAddEmployeeDiscount) && !is_bool($canAddEmployeeDiscount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($canAddEmployeeDiscount)), __LINE__);
        }
        $this->CanAddEmployeeDiscount = $canAddEmployeeDiscount;
        return $this;
    }
    /**
     * Get CentralDiscount value
     * @return float|null
     */
    public function getCentralDiscount()
    {
        return $this->CentralDiscount;
    }
    /**
     * Set CentralDiscount value
     * @param float $centralDiscount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscounts
     */
    public function setCentralDiscount($centralDiscount = null)
    {
        $this->CentralDiscount = $centralDiscount;
        return $this;
    }
    /**
     * Get CentralDiscountPrev value
     * @return float|null
     */
    public function getCentralDiscountPrev()
    {
        return $this->CentralDiscountPrev;
    }
    /**
     * Set CentralDiscountPrev value
     * @param float $centralDiscountPrev
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscounts
     */
    public function setCentralDiscountPrev($centralDiscountPrev = null)
    {
        $this->CentralDiscountPrev = $centralDiscountPrev;
        return $this;
    }
    /**
     * Get CentralDiscountSum value
     * @return float|null
     */
    public function getCentralDiscountSum()
    {
        return $this->CentralDiscountSum;
    }
    /**
     * Set CentralDiscountSum value
     * @param float $centralDiscountSum
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscounts
     */
    public function setCentralDiscountSum($centralDiscountSum = null)
    {
        $this->CentralDiscountSum = $centralDiscountSum;
        return $this;
    }
    /**
     * Get CentralDiscountSumPrev value
     * @return float|null
     */
    public function getCentralDiscountSumPrev()
    {
        return $this->CentralDiscountSumPrev;
    }
    /**
     * Set CentralDiscountSumPrev value
     * @param float $centralDiscountSumPrev
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscounts
     */
    public function setCentralDiscountSumPrev($centralDiscountSumPrev = null)
    {
        $this->CentralDiscountSumPrev = $centralDiscountSumPrev;
        return $this;
    }
    /**
     * Get DirectorDiscount value
     * @return float|null
     */
    public function getDirectorDiscount()
    {
        return $this->DirectorDiscount;
    }
    /**
     * Set DirectorDiscount value
     * @param float $directorDiscount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscounts
     */
    public function setDirectorDiscount($directorDiscount = null)
    {
        $this->DirectorDiscount = $directorDiscount;
        return $this;
    }
    /**
     * Get DirectorDiscountPrev value
     * @return float|null
     */
    public function getDirectorDiscountPrev()
    {
        return $this->DirectorDiscountPrev;
    }
    /**
     * Set DirectorDiscountPrev value
     * @param float $directorDiscountPrev
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscounts
     */
    public function setDirectorDiscountPrev($directorDiscountPrev = null)
    {
        $this->DirectorDiscountPrev = $directorDiscountPrev;
        return $this;
    }
    /**
     * Get DirectorDiscountSum value
     * @return float|null
     */
    public function getDirectorDiscountSum()
    {
        return $this->DirectorDiscountSum;
    }
    /**
     * Set DirectorDiscountSum value
     * @param float $directorDiscountSum
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscounts
     */
    public function setDirectorDiscountSum($directorDiscountSum = null)
    {
        $this->DirectorDiscountSum = $directorDiscountSum;
        return $this;
    }
    /**
     * Get DirectorDiscountSumPrev value
     * @return float|null
     */
    public function getDirectorDiscountSumPrev()
    {
        return $this->DirectorDiscountSumPrev;
    }
    /**
     * Set DirectorDiscountSumPrev value
     * @param float $directorDiscountSumPrev
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscounts
     */
    public function setDirectorDiscountSumPrev($directorDiscountSumPrev = null)
    {
        $this->DirectorDiscountSumPrev = $directorDiscountSumPrev;
        return $this;
    }
    /**
     * Get EmployeeDiscount value
     * @return float|null
     */
    public function getEmployeeDiscount()
    {
        return $this->EmployeeDiscount;
    }
    /**
     * Set EmployeeDiscount value
     * @param float $employeeDiscount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscounts
     */
    public function setEmployeeDiscount($employeeDiscount = null)
    {
        $this->EmployeeDiscount = $employeeDiscount;
        return $this;
    }
    /**
     * Get EmployeeDiscountPrev value
     * @return float|null
     */
    public function getEmployeeDiscountPrev()
    {
        return $this->EmployeeDiscountPrev;
    }
    /**
     * Set EmployeeDiscountPrev value
     * @param float $employeeDiscountPrev
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscounts
     */
    public function setEmployeeDiscountPrev($employeeDiscountPrev = null)
    {
        $this->EmployeeDiscountPrev = $employeeDiscountPrev;
        return $this;
    }
    /**
     * Get EmployeeDiscountSum value
     * @return float|null
     */
    public function getEmployeeDiscountSum()
    {
        return $this->EmployeeDiscountSum;
    }
    /**
     * Set EmployeeDiscountSum value
     * @param float $employeeDiscountSum
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscounts
     */
    public function setEmployeeDiscountSum($employeeDiscountSum = null)
    {
        $this->EmployeeDiscountSum = $employeeDiscountSum;
        return $this;
    }
    /**
     * Get EmployeeDiscountSumPrev value
     * @return float|null
     */
    public function getEmployeeDiscountSumPrev()
    {
        return $this->EmployeeDiscountSumPrev;
    }
    /**
     * Set EmployeeDiscountSumPrev value
     * @param float $employeeDiscountSumPrev
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscounts
     */
    public function setEmployeeDiscountSumPrev($employeeDiscountSumPrev = null)
    {
        $this->EmployeeDiscountSumPrev = $employeeDiscountSumPrev;
        return $this;
    }
    /**
     * Get MarketingDiscount value
     * @return float|null
     */
    public function getMarketingDiscount()
    {
        return $this->MarketingDiscount;
    }
    /**
     * Set MarketingDiscount value
     * @param float $marketingDiscount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscounts
     */
    public function setMarketingDiscount($marketingDiscount = null)
    {
        $this->MarketingDiscount = $marketingDiscount;
        return $this;
    }
    /**
     * Get MarketingDiscoutVariant value
     * @return string|null
     */
    public function getMarketingDiscoutVariant()
    {
        return $this->MarketingDiscoutVariant;
    }
    /**
     * Set MarketingDiscoutVariant value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\MarketingDiscoutVariant::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\MarketingDiscoutVariant::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $marketingDiscoutVariant
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscounts
     */
    public function setMarketingDiscoutVariant($marketingDiscoutVariant = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\MarketingDiscoutVariant::valueIsValid($marketingDiscoutVariant)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $marketingDiscoutVariant, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\MarketingDiscoutVariant::getValidValues())), __LINE__);
        }
        $this->MarketingDiscoutVariant = $marketingDiscoutVariant;
        return $this;
    }
    /**
     * Get OtherDiscount value
     * @return float|null
     */
    public function getOtherDiscount()
    {
        return $this->OtherDiscount;
    }
    /**
     * Set OtherDiscount value
     * @param float $otherDiscount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscounts
     */
    public function setOtherDiscount($otherDiscount = null)
    {
        $this->OtherDiscount = $otherDiscount;
        return $this;
    }
    /**
     * Get OtherDiscountAgreement value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOtherDiscountAgreement()
    {
        return isset($this->OtherDiscountAgreement) ? $this->OtherDiscountAgreement : null;
    }
    /**
     * Set OtherDiscountAgreement value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $otherDiscountAgreement
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscounts
     */
    public function setOtherDiscountAgreement($otherDiscountAgreement = null)
    {
        // validation for constraint: string
        if (!is_null($otherDiscountAgreement) && !is_string($otherDiscountAgreement)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($otherDiscountAgreement)), __LINE__);
        }
        if (is_null($otherDiscountAgreement) || (is_array($otherDiscountAgreement) && empty($otherDiscountAgreement))) {
            unset($this->OtherDiscountAgreement);
        } else {
            $this->OtherDiscountAgreement = $otherDiscountAgreement;
        }
        return $this;
    }
    /**
     * Get OtherDiscountAgreementPrev value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOtherDiscountAgreementPrev()
    {
        return isset($this->OtherDiscountAgreementPrev) ? $this->OtherDiscountAgreementPrev : null;
    }
    /**
     * Set OtherDiscountAgreementPrev value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $otherDiscountAgreementPrev
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscounts
     */
    public function setOtherDiscountAgreementPrev($otherDiscountAgreementPrev = null)
    {
        // validation for constraint: string
        if (!is_null($otherDiscountAgreementPrev) && !is_string($otherDiscountAgreementPrev)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($otherDiscountAgreementPrev)), __LINE__);
        }
        if (is_null($otherDiscountAgreementPrev) || (is_array($otherDiscountAgreementPrev) && empty($otherDiscountAgreementPrev))) {
            unset($this->OtherDiscountAgreementPrev);
        } else {
            $this->OtherDiscountAgreementPrev = $otherDiscountAgreementPrev;
        }
        return $this;
    }
    /**
     * Get OtherDiscountAgreementSum value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOtherDiscountAgreementSum()
    {
        return isset($this->OtherDiscountAgreementSum) ? $this->OtherDiscountAgreementSum : null;
    }
    /**
     * Set OtherDiscountAgreementSum value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $otherDiscountAgreementSum
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscounts
     */
    public function setOtherDiscountAgreementSum($otherDiscountAgreementSum = null)
    {
        // validation for constraint: string
        if (!is_null($otherDiscountAgreementSum) && !is_string($otherDiscountAgreementSum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($otherDiscountAgreementSum)), __LINE__);
        }
        if (is_null($otherDiscountAgreementSum) || (is_array($otherDiscountAgreementSum) && empty($otherDiscountAgreementSum))) {
            unset($this->OtherDiscountAgreementSum);
        } else {
            $this->OtherDiscountAgreementSum = $otherDiscountAgreementSum;
        }
        return $this;
    }
    /**
     * Get OtherDiscountAgreementSumPrev value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOtherDiscountAgreementSumPrev()
    {
        return isset($this->OtherDiscountAgreementSumPrev) ? $this->OtherDiscountAgreementSumPrev : null;
    }
    /**
     * Set OtherDiscountAgreementSumPrev value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $otherDiscountAgreementSumPrev
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscounts
     */
    public function setOtherDiscountAgreementSumPrev($otherDiscountAgreementSumPrev = null)
    {
        // validation for constraint: string
        if (!is_null($otherDiscountAgreementSumPrev) && !is_string($otherDiscountAgreementSumPrev)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($otherDiscountAgreementSumPrev)), __LINE__);
        }
        if (is_null($otherDiscountAgreementSumPrev) || (is_array($otherDiscountAgreementSumPrev) && empty($otherDiscountAgreementSumPrev))) {
            unset($this->OtherDiscountAgreementSumPrev);
        } else {
            $this->OtherDiscountAgreementSumPrev = $otherDiscountAgreementSumPrev;
        }
        return $this;
    }
    /**
     * Get OtherDiscountPrev value
     * @return float|null
     */
    public function getOtherDiscountPrev()
    {
        return $this->OtherDiscountPrev;
    }
    /**
     * Set OtherDiscountPrev value
     * @param float $otherDiscountPrev
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscounts
     */
    public function setOtherDiscountPrev($otherDiscountPrev = null)
    {
        $this->OtherDiscountPrev = $otherDiscountPrev;
        return $this;
    }
    /**
     * Get OtherDiscountSum value
     * @return float|null
     */
    public function getOtherDiscountSum()
    {
        return $this->OtherDiscountSum;
    }
    /**
     * Set OtherDiscountSum value
     * @param float $otherDiscountSum
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscounts
     */
    public function setOtherDiscountSum($otherDiscountSum = null)
    {
        $this->OtherDiscountSum = $otherDiscountSum;
        return $this;
    }
    /**
     * Get OtherDiscountSumPrev value
     * @return float|null
     */
    public function getOtherDiscountSumPrev()
    {
        return $this->OtherDiscountSumPrev;
    }
    /**
     * Set OtherDiscountSumPrev value
     * @param float $otherDiscountSumPrev
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscounts
     */
    public function setOtherDiscountSumPrev($otherDiscountSumPrev = null)
    {
        $this->OtherDiscountSumPrev = $otherDiscountSumPrev;
        return $this;
    }
    /**
     * Get PolicyLifeNumber value
     * @return int|null
     */
    public function getPolicyLifeNumber()
    {
        return $this->PolicyLifeNumber;
    }
    /**
     * Set PolicyLifeNumber value
     * @param int $policyLifeNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscounts
     */
    public function setPolicyLifeNumber($policyLifeNumber = null)
    {
        // validation for constraint: int
        if (!is_null($policyLifeNumber) && !is_numeric($policyLifeNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($policyLifeNumber)), __LINE__);
        }
        $this->PolicyLifeNumber = $policyLifeNumber;
        return $this;
    }
    /**
     * Get UnderwriterDiscount value
     * @return float|null
     */
    public function getUnderwriterDiscount()
    {
        return $this->UnderwriterDiscount;
    }
    /**
     * Set UnderwriterDiscount value
     * @param float $underwriterDiscount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscounts
     */
    public function setUnderwriterDiscount($underwriterDiscount = null)
    {
        $this->UnderwriterDiscount = $underwriterDiscount;
        return $this;
    }
    /**
     * Get UnderwriterDiscountPrev value
     * @return float|null
     */
    public function getUnderwriterDiscountPrev()
    {
        return $this->UnderwriterDiscountPrev;
    }
    /**
     * Set UnderwriterDiscountPrev value
     * @param float $underwriterDiscountPrev
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscounts
     */
    public function setUnderwriterDiscountPrev($underwriterDiscountPrev = null)
    {
        $this->UnderwriterDiscountPrev = $underwriterDiscountPrev;
        return $this;
    }
    /**
     * Get UnderwriterDiscountSum value
     * @return float|null
     */
    public function getUnderwriterDiscountSum()
    {
        return $this->UnderwriterDiscountSum;
    }
    /**
     * Set UnderwriterDiscountSum value
     * @param float $underwriterDiscountSum
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscounts
     */
    public function setUnderwriterDiscountSum($underwriterDiscountSum = null)
    {
        $this->UnderwriterDiscountSum = $underwriterDiscountSum;
        return $this;
    }
    /**
     * Get UnderwriterDiscountSumPrev value
     * @return float|null
     */
    public function getUnderwriterDiscountSumPrev()
    {
        return $this->UnderwriterDiscountSumPrev;
    }
    /**
     * Set UnderwriterDiscountSumPrev value
     * @param float $underwriterDiscountSumPrev
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscounts
     */
    public function setUnderwriterDiscountSumPrev($underwriterDiscountSumPrev = null)
    {
        $this->UnderwriterDiscountSumPrev = $underwriterDiscountSumPrev;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalDiscounts
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
