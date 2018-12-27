<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompensaClaim StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CompensaClaim
 * @subpackage Structs
 */
class CompensaClaim extends Claim
{
    /**
     * The claimDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $claimDate;
    /**
     * The claimDateTick
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $claimDateTick;
    /**
     * The claimNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $claimNumber;
    /**
     * The claimStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\CompensaClaimStatus
     */
    public $claimStatus;
    /**
     * The claimStatusId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $claimStatusId;
    /**
     * The claimTypeId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $claimTypeId;
    /**
     * The costEliminateBalance
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $costEliminateBalance;
    /**
     * The costEliminateBalanceValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $costEliminateBalanceValue;
    /**
     * The costEliminatePayingDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $costEliminatePayingDate;
    /**
     * The costEliminatePayingDateTick
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $costEliminatePayingDateTick;
    /**
     * The damageCauseId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $damageCauseId;
    /**
     * The eventNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $eventNumber;
    /**
     * The payoutBalance
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $payoutBalance;
    /**
     * The payoutBalanceValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $payoutBalanceValue;
    /**
     * The payoutDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $payoutDate;
    /**
     * The payoutDateTick
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $payoutDateTick;
    /**
     * The policyId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $policyId;
    /**
     * The productTypeId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $productTypeId;
    /**
     * The regressPayingBalance
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $regressPayingBalance;
    /**
     * The regressPayingBalanceValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $regressPayingBalanceValue;
    /**
     * The regressPayingDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $regressPayingDate;
    /**
     * The regressPayingDateTick
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $regressPayingDateTick;
    /**
     * The reserveBalance
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $reserveBalance;
    /**
     * The reserveBalanceValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $reserveBalanceValue;
    /**
     * The risk
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $risk;
    /**
     * The statisticalSymbolId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $statisticalSymbolId;
    /**
     * Constructor method for CompensaClaim
     * @uses CompensaClaim::setClaimDate()
     * @uses CompensaClaim::setClaimDateTick()
     * @uses CompensaClaim::setClaimNumber()
     * @uses CompensaClaim::setClaimStatus()
     * @uses CompensaClaim::setClaimStatusId()
     * @uses CompensaClaim::setClaimTypeId()
     * @uses CompensaClaim::setCostEliminateBalance()
     * @uses CompensaClaim::setCostEliminateBalanceValue()
     * @uses CompensaClaim::setCostEliminatePayingDate()
     * @uses CompensaClaim::setCostEliminatePayingDateTick()
     * @uses CompensaClaim::setDamageCauseId()
     * @uses CompensaClaim::setEventNumber()
     * @uses CompensaClaim::setPayoutBalance()
     * @uses CompensaClaim::setPayoutBalanceValue()
     * @uses CompensaClaim::setPayoutDate()
     * @uses CompensaClaim::setPayoutDateTick()
     * @uses CompensaClaim::setPolicyId()
     * @uses CompensaClaim::setProductTypeId()
     * @uses CompensaClaim::setRegressPayingBalance()
     * @uses CompensaClaim::setRegressPayingBalanceValue()
     * @uses CompensaClaim::setRegressPayingDate()
     * @uses CompensaClaim::setRegressPayingDateTick()
     * @uses CompensaClaim::setReserveBalance()
     * @uses CompensaClaim::setReserveBalanceValue()
     * @uses CompensaClaim::setRisk()
     * @uses CompensaClaim::setStatisticalSymbolId()
     * @param string $claimDate
     * @param int $claimDateTick
     * @param int $claimNumber
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CompensaClaimStatus $claimStatus
     * @param int $claimStatusId
     * @param int $claimTypeId
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $costEliminateBalance
     * @param float $costEliminateBalanceValue
     * @param string $costEliminatePayingDate
     * @param int $costEliminatePayingDateTick
     * @param int $damageCauseId
     * @param int $eventNumber
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $payoutBalance
     * @param float $payoutBalanceValue
     * @param string $payoutDate
     * @param int $payoutDateTick
     * @param int $policyId
     * @param int $productTypeId
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $regressPayingBalance
     * @param float $regressPayingBalanceValue
     * @param string $regressPayingDate
     * @param int $regressPayingDateTick
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $reserveBalance
     * @param float $reserveBalanceValue
     * @param string $risk
     * @param int $statisticalSymbolId
     */
    public function __construct($claimDate = null, $claimDateTick = null, $claimNumber = null, \Mu4ddi3\Compensa\Webservice\StructType\CompensaClaimStatus $claimStatus = null, $claimStatusId = null, $claimTypeId = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $costEliminateBalance = null, $costEliminateBalanceValue = null, $costEliminatePayingDate = null, $costEliminatePayingDateTick = null, $damageCauseId = null, $eventNumber = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $payoutBalance = null, $payoutBalanceValue = null, $payoutDate = null, $payoutDateTick = null, $policyId = null, $productTypeId = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $regressPayingBalance = null, $regressPayingBalanceValue = null, $regressPayingDate = null, $regressPayingDateTick = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $reserveBalance = null, $reserveBalanceValue = null, $risk = null, $statisticalSymbolId = null)
    {
        $this
            ->setClaimDate($claimDate)
            ->setClaimDateTick($claimDateTick)
            ->setClaimNumber($claimNumber)
            ->setClaimStatus($claimStatus)
            ->setClaimStatusId($claimStatusId)
            ->setClaimTypeId($claimTypeId)
            ->setCostEliminateBalance($costEliminateBalance)
            ->setCostEliminateBalanceValue($costEliminateBalanceValue)
            ->setCostEliminatePayingDate($costEliminatePayingDate)
            ->setCostEliminatePayingDateTick($costEliminatePayingDateTick)
            ->setDamageCauseId($damageCauseId)
            ->setEventNumber($eventNumber)
            ->setPayoutBalance($payoutBalance)
            ->setPayoutBalanceValue($payoutBalanceValue)
            ->setPayoutDate($payoutDate)
            ->setPayoutDateTick($payoutDateTick)
            ->setPolicyId($policyId)
            ->setProductTypeId($productTypeId)
            ->setRegressPayingBalance($regressPayingBalance)
            ->setRegressPayingBalanceValue($regressPayingBalanceValue)
            ->setRegressPayingDate($regressPayingDate)
            ->setRegressPayingDateTick($regressPayingDateTick)
            ->setReserveBalance($reserveBalance)
            ->setReserveBalanceValue($reserveBalanceValue)
            ->setRisk($risk)
            ->setStatisticalSymbolId($statisticalSymbolId);
    }
    /**
     * Get claimDate value
     * @return string|null
     */
    public function getClaimDate()
    {
        return $this->claimDate;
    }
    /**
     * Set claimDate value
     * @param string $claimDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaClaim
     */
    public function setClaimDate($claimDate = null)
    {
        // validation for constraint: string
        if (!is_null($claimDate) && !is_string($claimDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($claimDate)), __LINE__);
        }
        $this->claimDate = $claimDate;
        return $this;
    }
    /**
     * Get claimDateTick value
     * @return int|null
     */
    public function getClaimDateTick()
    {
        return $this->claimDateTick;
    }
    /**
     * Set claimDateTick value
     * @param int $claimDateTick
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaClaim
     */
    public function setClaimDateTick($claimDateTick = null)
    {
        // validation for constraint: int
        if (!is_null($claimDateTick) && !is_numeric($claimDateTick)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($claimDateTick)), __LINE__);
        }
        $this->claimDateTick = $claimDateTick;
        return $this;
    }
    /**
     * Get claimNumber value
     * @return int|null
     */
    public function getClaimNumber()
    {
        return $this->claimNumber;
    }
    /**
     * Set claimNumber value
     * @param int $claimNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaClaim
     */
    public function setClaimNumber($claimNumber = null)
    {
        // validation for constraint: int
        if (!is_null($claimNumber) && !is_numeric($claimNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($claimNumber)), __LINE__);
        }
        $this->claimNumber = $claimNumber;
        return $this;
    }
    /**
     * Get claimStatus value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaClaimStatus|null
     */
    public function getClaimStatus()
    {
        return isset($this->claimStatus) ? $this->claimStatus : null;
    }
    /**
     * Set claimStatus value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CompensaClaimStatus $claimStatus
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaClaim
     */
    public function setClaimStatus(\Mu4ddi3\Compensa\Webservice\StructType\CompensaClaimStatus $claimStatus = null)
    {
        if (is_null($claimStatus) || (is_array($claimStatus) && empty($claimStatus))) {
            unset($this->claimStatus);
        } else {
            $this->claimStatus = $claimStatus;
        }
        return $this;
    }
    /**
     * Get claimStatusId value
     * @return int|null
     */
    public function getClaimStatusId()
    {
        return $this->claimStatusId;
    }
    /**
     * Set claimStatusId value
     * @param int $claimStatusId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaClaim
     */
    public function setClaimStatusId($claimStatusId = null)
    {
        // validation for constraint: int
        if (!is_null($claimStatusId) && !is_numeric($claimStatusId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($claimStatusId)), __LINE__);
        }
        $this->claimStatusId = $claimStatusId;
        return $this;
    }
    /**
     * Get claimTypeId value
     * @return int|null
     */
    public function getClaimTypeId()
    {
        return $this->claimTypeId;
    }
    /**
     * Set claimTypeId value
     * @param int $claimTypeId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaClaim
     */
    public function setClaimTypeId($claimTypeId = null)
    {
        // validation for constraint: int
        if (!is_null($claimTypeId) && !is_numeric($claimTypeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($claimTypeId)), __LINE__);
        }
        $this->claimTypeId = $claimTypeId;
        return $this;
    }
    /**
     * Get costEliminateBalance value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getCostEliminateBalance()
    {
        return isset($this->costEliminateBalance) ? $this->costEliminateBalance : null;
    }
    /**
     * Set costEliminateBalance value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $costEliminateBalance
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaClaim
     */
    public function setCostEliminateBalance(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $costEliminateBalance = null)
    {
        if (is_null($costEliminateBalance) || (is_array($costEliminateBalance) && empty($costEliminateBalance))) {
            unset($this->costEliminateBalance);
        } else {
            $this->costEliminateBalance = $costEliminateBalance;
        }
        return $this;
    }
    /**
     * Get costEliminateBalanceValue value
     * @return float|null
     */
    public function getCostEliminateBalanceValue()
    {
        return $this->costEliminateBalanceValue;
    }
    /**
     * Set costEliminateBalanceValue value
     * @param float $costEliminateBalanceValue
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaClaim
     */
    public function setCostEliminateBalanceValue($costEliminateBalanceValue = null)
    {
        $this->costEliminateBalanceValue = $costEliminateBalanceValue;
        return $this;
    }
    /**
     * Get costEliminatePayingDate value
     * @return string|null
     */
    public function getCostEliminatePayingDate()
    {
        return $this->costEliminatePayingDate;
    }
    /**
     * Set costEliminatePayingDate value
     * @param string $costEliminatePayingDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaClaim
     */
    public function setCostEliminatePayingDate($costEliminatePayingDate = null)
    {
        // validation for constraint: string
        if (!is_null($costEliminatePayingDate) && !is_string($costEliminatePayingDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($costEliminatePayingDate)), __LINE__);
        }
        $this->costEliminatePayingDate = $costEliminatePayingDate;
        return $this;
    }
    /**
     * Get costEliminatePayingDateTick value
     * @return int|null
     */
    public function getCostEliminatePayingDateTick()
    {
        return $this->costEliminatePayingDateTick;
    }
    /**
     * Set costEliminatePayingDateTick value
     * @param int $costEliminatePayingDateTick
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaClaim
     */
    public function setCostEliminatePayingDateTick($costEliminatePayingDateTick = null)
    {
        // validation for constraint: int
        if (!is_null($costEliminatePayingDateTick) && !is_numeric($costEliminatePayingDateTick)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($costEliminatePayingDateTick)), __LINE__);
        }
        $this->costEliminatePayingDateTick = $costEliminatePayingDateTick;
        return $this;
    }
    /**
     * Get damageCauseId value
     * @return int|null
     */
    public function getDamageCauseId()
    {
        return $this->damageCauseId;
    }
    /**
     * Set damageCauseId value
     * @param int $damageCauseId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaClaim
     */
    public function setDamageCauseId($damageCauseId = null)
    {
        // validation for constraint: int
        if (!is_null($damageCauseId) && !is_numeric($damageCauseId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($damageCauseId)), __LINE__);
        }
        $this->damageCauseId = $damageCauseId;
        return $this;
    }
    /**
     * Get eventNumber value
     * @return int|null
     */
    public function getEventNumber()
    {
        return $this->eventNumber;
    }
    /**
     * Set eventNumber value
     * @param int $eventNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaClaim
     */
    public function setEventNumber($eventNumber = null)
    {
        // validation for constraint: int
        if (!is_null($eventNumber) && !is_numeric($eventNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($eventNumber)), __LINE__);
        }
        $this->eventNumber = $eventNumber;
        return $this;
    }
    /**
     * Get payoutBalance value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getPayoutBalance()
    {
        return isset($this->payoutBalance) ? $this->payoutBalance : null;
    }
    /**
     * Set payoutBalance value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $payoutBalance
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaClaim
     */
    public function setPayoutBalance(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $payoutBalance = null)
    {
        if (is_null($payoutBalance) || (is_array($payoutBalance) && empty($payoutBalance))) {
            unset($this->payoutBalance);
        } else {
            $this->payoutBalance = $payoutBalance;
        }
        return $this;
    }
    /**
     * Get payoutBalanceValue value
     * @return float|null
     */
    public function getPayoutBalanceValue()
    {
        return $this->payoutBalanceValue;
    }
    /**
     * Set payoutBalanceValue value
     * @param float $payoutBalanceValue
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaClaim
     */
    public function setPayoutBalanceValue($payoutBalanceValue = null)
    {
        $this->payoutBalanceValue = $payoutBalanceValue;
        return $this;
    }
    /**
     * Get payoutDate value
     * @return string|null
     */
    public function getPayoutDate()
    {
        return $this->payoutDate;
    }
    /**
     * Set payoutDate value
     * @param string $payoutDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaClaim
     */
    public function setPayoutDate($payoutDate = null)
    {
        // validation for constraint: string
        if (!is_null($payoutDate) && !is_string($payoutDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($payoutDate)), __LINE__);
        }
        $this->payoutDate = $payoutDate;
        return $this;
    }
    /**
     * Get payoutDateTick value
     * @return int|null
     */
    public function getPayoutDateTick()
    {
        return $this->payoutDateTick;
    }
    /**
     * Set payoutDateTick value
     * @param int $payoutDateTick
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaClaim
     */
    public function setPayoutDateTick($payoutDateTick = null)
    {
        // validation for constraint: int
        if (!is_null($payoutDateTick) && !is_numeric($payoutDateTick)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($payoutDateTick)), __LINE__);
        }
        $this->payoutDateTick = $payoutDateTick;
        return $this;
    }
    /**
     * Get policyId value
     * @return int|null
     */
    public function getPolicyId()
    {
        return $this->policyId;
    }
    /**
     * Set policyId value
     * @param int $policyId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaClaim
     */
    public function setPolicyId($policyId = null)
    {
        // validation for constraint: int
        if (!is_null($policyId) && !is_numeric($policyId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($policyId)), __LINE__);
        }
        $this->policyId = $policyId;
        return $this;
    }
    /**
     * Get productTypeId value
     * @return int|null
     */
    public function getProductTypeId()
    {
        return $this->productTypeId;
    }
    /**
     * Set productTypeId value
     * @param int $productTypeId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaClaim
     */
    public function setProductTypeId($productTypeId = null)
    {
        // validation for constraint: int
        if (!is_null($productTypeId) && !is_numeric($productTypeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($productTypeId)), __LINE__);
        }
        $this->productTypeId = $productTypeId;
        return $this;
    }
    /**
     * Get regressPayingBalance value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getRegressPayingBalance()
    {
        return isset($this->regressPayingBalance) ? $this->regressPayingBalance : null;
    }
    /**
     * Set regressPayingBalance value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $regressPayingBalance
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaClaim
     */
    public function setRegressPayingBalance(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $regressPayingBalance = null)
    {
        if (is_null($regressPayingBalance) || (is_array($regressPayingBalance) && empty($regressPayingBalance))) {
            unset($this->regressPayingBalance);
        } else {
            $this->regressPayingBalance = $regressPayingBalance;
        }
        return $this;
    }
    /**
     * Get regressPayingBalanceValue value
     * @return float|null
     */
    public function getRegressPayingBalanceValue()
    {
        return $this->regressPayingBalanceValue;
    }
    /**
     * Set regressPayingBalanceValue value
     * @param float $regressPayingBalanceValue
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaClaim
     */
    public function setRegressPayingBalanceValue($regressPayingBalanceValue = null)
    {
        $this->regressPayingBalanceValue = $regressPayingBalanceValue;
        return $this;
    }
    /**
     * Get regressPayingDate value
     * @return string|null
     */
    public function getRegressPayingDate()
    {
        return $this->regressPayingDate;
    }
    /**
     * Set regressPayingDate value
     * @param string $regressPayingDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaClaim
     */
    public function setRegressPayingDate($regressPayingDate = null)
    {
        // validation for constraint: string
        if (!is_null($regressPayingDate) && !is_string($regressPayingDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($regressPayingDate)), __LINE__);
        }
        $this->regressPayingDate = $regressPayingDate;
        return $this;
    }
    /**
     * Get regressPayingDateTick value
     * @return int|null
     */
    public function getRegressPayingDateTick()
    {
        return $this->regressPayingDateTick;
    }
    /**
     * Set regressPayingDateTick value
     * @param int $regressPayingDateTick
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaClaim
     */
    public function setRegressPayingDateTick($regressPayingDateTick = null)
    {
        // validation for constraint: int
        if (!is_null($regressPayingDateTick) && !is_numeric($regressPayingDateTick)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($regressPayingDateTick)), __LINE__);
        }
        $this->regressPayingDateTick = $regressPayingDateTick;
        return $this;
    }
    /**
     * Get reserveBalance value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getReserveBalance()
    {
        return isset($this->reserveBalance) ? $this->reserveBalance : null;
    }
    /**
     * Set reserveBalance value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $reserveBalance
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaClaim
     */
    public function setReserveBalance(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $reserveBalance = null)
    {
        if (is_null($reserveBalance) || (is_array($reserveBalance) && empty($reserveBalance))) {
            unset($this->reserveBalance);
        } else {
            $this->reserveBalance = $reserveBalance;
        }
        return $this;
    }
    /**
     * Get reserveBalanceValue value
     * @return float|null
     */
    public function getReserveBalanceValue()
    {
        return $this->reserveBalanceValue;
    }
    /**
     * Set reserveBalanceValue value
     * @param float $reserveBalanceValue
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaClaim
     */
    public function setReserveBalanceValue($reserveBalanceValue = null)
    {
        $this->reserveBalanceValue = $reserveBalanceValue;
        return $this;
    }
    /**
     * Get risk value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRisk()
    {
        return isset($this->risk) ? $this->risk : null;
    }
    /**
     * Set risk value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $risk
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaClaim
     */
    public function setRisk($risk = null)
    {
        // validation for constraint: string
        if (!is_null($risk) && !is_string($risk)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($risk)), __LINE__);
        }
        if (is_null($risk) || (is_array($risk) && empty($risk))) {
            unset($this->risk);
        } else {
            $this->risk = $risk;
        }
        return $this;
    }
    /**
     * Get statisticalSymbolId value
     * @return int|null
     */
    public function getStatisticalSymbolId()
    {
        return $this->statisticalSymbolId;
    }
    /**
     * Set statisticalSymbolId value
     * @param int $statisticalSymbolId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaClaim
     */
    public function setStatisticalSymbolId($statisticalSymbolId = null)
    {
        // validation for constraint: int
        if (!is_null($statisticalSymbolId) && !is_numeric($statisticalSymbolId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($statisticalSymbolId)), __LINE__);
        }
        $this->statisticalSymbolId = $statisticalSymbolId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaClaim
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
