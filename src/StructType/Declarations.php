<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Declarations StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Declarations
 * @subpackage Structs
 */
class Declarations extends AbstractStructBase
{
    /**
     * The IsAgreement1CompensaZycie
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAgreement1CompensaZycie;
    /**
     * The IsAgreement2Compensa
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAgreement2Compensa;
    /**
     * The IsAgreement2CompensaZycie
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAgreement2CompensaZycie;
    /**
     * The IsAgreement3Compensa
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAgreement3Compensa;
    /**
     * The IsAgreement3CompensaZycie
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAgreement3CompensaZycie;
    /**
     * The IsAgreement4CompensaZycie
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAgreement4CompensaZycie;
    /**
     * The IsAgreement5CompensaZycie
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAgreement5CompensaZycie;
    /**
     * The IsAgreementActualPayer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $IsAgreementActualPayer;
    /**
     * The IsAgreementForNoticiesAndStatementsFromCompensa
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAgreementForNoticiesAndStatementsFromCompensa;
    /**
     * The IsAgreementForProcessingAndSharingPersonalDataWithCooperatingCompanies
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAgreementForProcessingAndSharingPersonalDataWithCooperatingCompanies;
    /**
     * The IsAgreementForProcessingAndSharingPersonalDataWithGannetGuardSystems
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAgreementForProcessingAndSharingPersonalDataWithGannetGuardSystems;
    /**
     * The IsAgreementForReceiveCommercialInformationOnEmail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAgreementForReceiveCommercialInformationOnEmail;
    /**
     * The IsGlassWithoutDamage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsGlassWithoutDamage;
    /**
     * The IsIssuerPartnersAdoInformed
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $IsIssuerPartnersAdoInformed;
    /**
     * The IsStatementAboutAntiTheftSecurity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsStatementAboutAntiTheftSecurity;
    /**
     * The LastAcInsuranceCompanyCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $LastAcInsuranceCompanyCode;
    /**
     * The LastOcInsuranceCompanyCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $LastOcInsuranceCompanyCode;
    /**
     * The Statements
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfStatement
     */
    public $Statements;
    /**
     * Constructor method for Declarations
     * @uses Declarations::setIsAgreement1CompensaZycie()
     * @uses Declarations::setIsAgreement2Compensa()
     * @uses Declarations::setIsAgreement2CompensaZycie()
     * @uses Declarations::setIsAgreement3Compensa()
     * @uses Declarations::setIsAgreement3CompensaZycie()
     * @uses Declarations::setIsAgreement4CompensaZycie()
     * @uses Declarations::setIsAgreement5CompensaZycie()
     * @uses Declarations::setIsAgreementActualPayer()
     * @uses Declarations::setIsAgreementForNoticiesAndStatementsFromCompensa()
     * @uses Declarations::setIsAgreementForProcessingAndSharingPersonalDataWithCooperatingCompanies()
     * @uses Declarations::setIsAgreementForProcessingAndSharingPersonalDataWithGannetGuardSystems()
     * @uses Declarations::setIsAgreementForReceiveCommercialInformationOnEmail()
     * @uses Declarations::setIsGlassWithoutDamage()
     * @uses Declarations::setIsIssuerPartnersAdoInformed()
     * @uses Declarations::setIsStatementAboutAntiTheftSecurity()
     * @uses Declarations::setLastAcInsuranceCompanyCode()
     * @uses Declarations::setLastOcInsuranceCompanyCode()
     * @uses Declarations::setStatements()
     * @param bool $isAgreement1CompensaZycie
     * @param bool $isAgreement2Compensa
     * @param bool $isAgreement2CompensaZycie
     * @param bool $isAgreement3Compensa
     * @param bool $isAgreement3CompensaZycie
     * @param bool $isAgreement4CompensaZycie
     * @param bool $isAgreement5CompensaZycie
     * @param bool $isAgreementActualPayer
     * @param bool $isAgreementForNoticiesAndStatementsFromCompensa
     * @param bool $isAgreementForProcessingAndSharingPersonalDataWithCooperatingCompanies
     * @param bool $isAgreementForProcessingAndSharingPersonalDataWithGannetGuardSystems
     * @param bool $isAgreementForReceiveCommercialInformationOnEmail
     * @param bool $isGlassWithoutDamage
     * @param bool $isIssuerPartnersAdoInformed
     * @param bool $isStatementAboutAntiTheftSecurity
     * @param string $lastAcInsuranceCompanyCode
     * @param string $lastOcInsuranceCompanyCode
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfStatement $statements
     */
    public function __construct($isAgreement1CompensaZycie = null, $isAgreement2Compensa = null, $isAgreement2CompensaZycie = null, $isAgreement3Compensa = null, $isAgreement3CompensaZycie = null, $isAgreement4CompensaZycie = null, $isAgreement5CompensaZycie = null, $isAgreementActualPayer = null, $isAgreementForNoticiesAndStatementsFromCompensa = null, $isAgreementForProcessingAndSharingPersonalDataWithCooperatingCompanies = null, $isAgreementForProcessingAndSharingPersonalDataWithGannetGuardSystems = null, $isAgreementForReceiveCommercialInformationOnEmail = null, $isGlassWithoutDamage = null, $isIssuerPartnersAdoInformed = null, $isStatementAboutAntiTheftSecurity = null, $lastAcInsuranceCompanyCode = null, $lastOcInsuranceCompanyCode = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfStatement $statements = null)
    {
        $this
            ->setIsAgreement1CompensaZycie($isAgreement1CompensaZycie)
            ->setIsAgreement2Compensa($isAgreement2Compensa)
            ->setIsAgreement2CompensaZycie($isAgreement2CompensaZycie)
            ->setIsAgreement3Compensa($isAgreement3Compensa)
            ->setIsAgreement3CompensaZycie($isAgreement3CompensaZycie)
            ->setIsAgreement4CompensaZycie($isAgreement4CompensaZycie)
            ->setIsAgreement5CompensaZycie($isAgreement5CompensaZycie)
            ->setIsAgreementActualPayer($isAgreementActualPayer)
            ->setIsAgreementForNoticiesAndStatementsFromCompensa($isAgreementForNoticiesAndStatementsFromCompensa)
            ->setIsAgreementForProcessingAndSharingPersonalDataWithCooperatingCompanies($isAgreementForProcessingAndSharingPersonalDataWithCooperatingCompanies)
            ->setIsAgreementForProcessingAndSharingPersonalDataWithGannetGuardSystems($isAgreementForProcessingAndSharingPersonalDataWithGannetGuardSystems)
            ->setIsAgreementForReceiveCommercialInformationOnEmail($isAgreementForReceiveCommercialInformationOnEmail)
            ->setIsGlassWithoutDamage($isGlassWithoutDamage)
            ->setIsIssuerPartnersAdoInformed($isIssuerPartnersAdoInformed)
            ->setIsStatementAboutAntiTheftSecurity($isStatementAboutAntiTheftSecurity)
            ->setLastAcInsuranceCompanyCode($lastAcInsuranceCompanyCode)
            ->setLastOcInsuranceCompanyCode($lastOcInsuranceCompanyCode)
            ->setStatements($statements);
    }
    /**
     * Get IsAgreement1CompensaZycie value
     * @return bool|null
     */
    public function getIsAgreement1CompensaZycie()
    {
        return $this->IsAgreement1CompensaZycie;
    }
    /**
     * Set IsAgreement1CompensaZycie value
     * @param bool $isAgreement1CompensaZycie
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Declarations
     */
    public function setIsAgreement1CompensaZycie($isAgreement1CompensaZycie = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAgreement1CompensaZycie) && !is_bool($isAgreement1CompensaZycie)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAgreement1CompensaZycie)), __LINE__);
        }
        $this->IsAgreement1CompensaZycie = $isAgreement1CompensaZycie;
        return $this;
    }
    /**
     * Get IsAgreement2Compensa value
     * @return bool|null
     */
    public function getIsAgreement2Compensa()
    {
        return $this->IsAgreement2Compensa;
    }
    /**
     * Set IsAgreement2Compensa value
     * @param bool $isAgreement2Compensa
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Declarations
     */
    public function setIsAgreement2Compensa($isAgreement2Compensa = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAgreement2Compensa) && !is_bool($isAgreement2Compensa)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAgreement2Compensa)), __LINE__);
        }
        $this->IsAgreement2Compensa = $isAgreement2Compensa;
        return $this;
    }
    /**
     * Get IsAgreement2CompensaZycie value
     * @return bool|null
     */
    public function getIsAgreement2CompensaZycie()
    {
        return $this->IsAgreement2CompensaZycie;
    }
    /**
     * Set IsAgreement2CompensaZycie value
     * @param bool $isAgreement2CompensaZycie
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Declarations
     */
    public function setIsAgreement2CompensaZycie($isAgreement2CompensaZycie = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAgreement2CompensaZycie) && !is_bool($isAgreement2CompensaZycie)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAgreement2CompensaZycie)), __LINE__);
        }
        $this->IsAgreement2CompensaZycie = $isAgreement2CompensaZycie;
        return $this;
    }
    /**
     * Get IsAgreement3Compensa value
     * @return bool|null
     */
    public function getIsAgreement3Compensa()
    {
        return $this->IsAgreement3Compensa;
    }
    /**
     * Set IsAgreement3Compensa value
     * @param bool $isAgreement3Compensa
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Declarations
     */
    public function setIsAgreement3Compensa($isAgreement3Compensa = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAgreement3Compensa) && !is_bool($isAgreement3Compensa)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAgreement3Compensa)), __LINE__);
        }
        $this->IsAgreement3Compensa = $isAgreement3Compensa;
        return $this;
    }
    /**
     * Get IsAgreement3CompensaZycie value
     * @return bool|null
     */
    public function getIsAgreement3CompensaZycie()
    {
        return $this->IsAgreement3CompensaZycie;
    }
    /**
     * Set IsAgreement3CompensaZycie value
     * @param bool $isAgreement3CompensaZycie
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Declarations
     */
    public function setIsAgreement3CompensaZycie($isAgreement3CompensaZycie = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAgreement3CompensaZycie) && !is_bool($isAgreement3CompensaZycie)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAgreement3CompensaZycie)), __LINE__);
        }
        $this->IsAgreement3CompensaZycie = $isAgreement3CompensaZycie;
        return $this;
    }
    /**
     * Get IsAgreement4CompensaZycie value
     * @return bool|null
     */
    public function getIsAgreement4CompensaZycie()
    {
        return $this->IsAgreement4CompensaZycie;
    }
    /**
     * Set IsAgreement4CompensaZycie value
     * @param bool $isAgreement4CompensaZycie
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Declarations
     */
    public function setIsAgreement4CompensaZycie($isAgreement4CompensaZycie = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAgreement4CompensaZycie) && !is_bool($isAgreement4CompensaZycie)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAgreement4CompensaZycie)), __LINE__);
        }
        $this->IsAgreement4CompensaZycie = $isAgreement4CompensaZycie;
        return $this;
    }
    /**
     * Get IsAgreement5CompensaZycie value
     * @return bool|null
     */
    public function getIsAgreement5CompensaZycie()
    {
        return $this->IsAgreement5CompensaZycie;
    }
    /**
     * Set IsAgreement5CompensaZycie value
     * @param bool $isAgreement5CompensaZycie
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Declarations
     */
    public function setIsAgreement5CompensaZycie($isAgreement5CompensaZycie = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAgreement5CompensaZycie) && !is_bool($isAgreement5CompensaZycie)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAgreement5CompensaZycie)), __LINE__);
        }
        $this->IsAgreement5CompensaZycie = $isAgreement5CompensaZycie;
        return $this;
    }
    /**
     * Get IsAgreementActualPayer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsAgreementActualPayer()
    {
        return isset($this->IsAgreementActualPayer) ? $this->IsAgreementActualPayer : null;
    }
    /**
     * Set IsAgreementActualPayer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isAgreementActualPayer
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Declarations
     */
    public function setIsAgreementActualPayer($isAgreementActualPayer = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAgreementActualPayer) && !is_bool($isAgreementActualPayer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAgreementActualPayer)), __LINE__);
        }
        if (is_null($isAgreementActualPayer) || (is_array($isAgreementActualPayer) && empty($isAgreementActualPayer))) {
            unset($this->IsAgreementActualPayer);
        } else {
            $this->IsAgreementActualPayer = $isAgreementActualPayer;
        }
        return $this;
    }
    /**
     * Get IsAgreementForNoticiesAndStatementsFromCompensa value
     * @return bool|null
     */
    public function getIsAgreementForNoticiesAndStatementsFromCompensa()
    {
        return $this->IsAgreementForNoticiesAndStatementsFromCompensa;
    }
    /**
     * Set IsAgreementForNoticiesAndStatementsFromCompensa value
     * @param bool $isAgreementForNoticiesAndStatementsFromCompensa
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Declarations
     */
    public function setIsAgreementForNoticiesAndStatementsFromCompensa($isAgreementForNoticiesAndStatementsFromCompensa = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAgreementForNoticiesAndStatementsFromCompensa) && !is_bool($isAgreementForNoticiesAndStatementsFromCompensa)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAgreementForNoticiesAndStatementsFromCompensa)), __LINE__);
        }
        $this->IsAgreementForNoticiesAndStatementsFromCompensa = $isAgreementForNoticiesAndStatementsFromCompensa;
        return $this;
    }
    /**
     * Get IsAgreementForProcessingAndSharingPersonalDataWithCooperatingCompanies value
     * @return bool|null
     */
    public function getIsAgreementForProcessingAndSharingPersonalDataWithCooperatingCompanies()
    {
        return $this->IsAgreementForProcessingAndSharingPersonalDataWithCooperatingCompanies;
    }
    /**
     * Set IsAgreementForProcessingAndSharingPersonalDataWithCooperatingCompanies value
     * @param bool $isAgreementForProcessingAndSharingPersonalDataWithCooperatingCompanies
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Declarations
     */
    public function setIsAgreementForProcessingAndSharingPersonalDataWithCooperatingCompanies($isAgreementForProcessingAndSharingPersonalDataWithCooperatingCompanies = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAgreementForProcessingAndSharingPersonalDataWithCooperatingCompanies) && !is_bool($isAgreementForProcessingAndSharingPersonalDataWithCooperatingCompanies)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAgreementForProcessingAndSharingPersonalDataWithCooperatingCompanies)), __LINE__);
        }
        $this->IsAgreementForProcessingAndSharingPersonalDataWithCooperatingCompanies = $isAgreementForProcessingAndSharingPersonalDataWithCooperatingCompanies;
        return $this;
    }
    /**
     * Get IsAgreementForProcessingAndSharingPersonalDataWithGannetGuardSystems value
     * @return bool|null
     */
    public function getIsAgreementForProcessingAndSharingPersonalDataWithGannetGuardSystems()
    {
        return $this->IsAgreementForProcessingAndSharingPersonalDataWithGannetGuardSystems;
    }
    /**
     * Set IsAgreementForProcessingAndSharingPersonalDataWithGannetGuardSystems value
     * @param bool $isAgreementForProcessingAndSharingPersonalDataWithGannetGuardSystems
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Declarations
     */
    public function setIsAgreementForProcessingAndSharingPersonalDataWithGannetGuardSystems($isAgreementForProcessingAndSharingPersonalDataWithGannetGuardSystems = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAgreementForProcessingAndSharingPersonalDataWithGannetGuardSystems) && !is_bool($isAgreementForProcessingAndSharingPersonalDataWithGannetGuardSystems)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAgreementForProcessingAndSharingPersonalDataWithGannetGuardSystems)), __LINE__);
        }
        $this->IsAgreementForProcessingAndSharingPersonalDataWithGannetGuardSystems = $isAgreementForProcessingAndSharingPersonalDataWithGannetGuardSystems;
        return $this;
    }
    /**
     * Get IsAgreementForReceiveCommercialInformationOnEmail value
     * @return bool|null
     */
    public function getIsAgreementForReceiveCommercialInformationOnEmail()
    {
        return $this->IsAgreementForReceiveCommercialInformationOnEmail;
    }
    /**
     * Set IsAgreementForReceiveCommercialInformationOnEmail value
     * @param bool $isAgreementForReceiveCommercialInformationOnEmail
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Declarations
     */
    public function setIsAgreementForReceiveCommercialInformationOnEmail($isAgreementForReceiveCommercialInformationOnEmail = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAgreementForReceiveCommercialInformationOnEmail) && !is_bool($isAgreementForReceiveCommercialInformationOnEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAgreementForReceiveCommercialInformationOnEmail)), __LINE__);
        }
        $this->IsAgreementForReceiveCommercialInformationOnEmail = $isAgreementForReceiveCommercialInformationOnEmail;
        return $this;
    }
    /**
     * Get IsGlassWithoutDamage value
     * @return bool|null
     */
    public function getIsGlassWithoutDamage()
    {
        return $this->IsGlassWithoutDamage;
    }
    /**
     * Set IsGlassWithoutDamage value
     * @param bool $isGlassWithoutDamage
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Declarations
     */
    public function setIsGlassWithoutDamage($isGlassWithoutDamage = null)
    {
        // validation for constraint: boolean
        if (!is_null($isGlassWithoutDamage) && !is_bool($isGlassWithoutDamage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isGlassWithoutDamage)), __LINE__);
        }
        $this->IsGlassWithoutDamage = $isGlassWithoutDamage;
        return $this;
    }
    /**
     * Get IsIssuerPartnersAdoInformed value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsIssuerPartnersAdoInformed()
    {
        return isset($this->IsIssuerPartnersAdoInformed) ? $this->IsIssuerPartnersAdoInformed : null;
    }
    /**
     * Set IsIssuerPartnersAdoInformed value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isIssuerPartnersAdoInformed
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Declarations
     */
    public function setIsIssuerPartnersAdoInformed($isIssuerPartnersAdoInformed = null)
    {
        // validation for constraint: boolean
        if (!is_null($isIssuerPartnersAdoInformed) && !is_bool($isIssuerPartnersAdoInformed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isIssuerPartnersAdoInformed)), __LINE__);
        }
        if (is_null($isIssuerPartnersAdoInformed) || (is_array($isIssuerPartnersAdoInformed) && empty($isIssuerPartnersAdoInformed))) {
            unset($this->IsIssuerPartnersAdoInformed);
        } else {
            $this->IsIssuerPartnersAdoInformed = $isIssuerPartnersAdoInformed;
        }
        return $this;
    }
    /**
     * Get IsStatementAboutAntiTheftSecurity value
     * @return bool|null
     */
    public function getIsStatementAboutAntiTheftSecurity()
    {
        return $this->IsStatementAboutAntiTheftSecurity;
    }
    /**
     * Set IsStatementAboutAntiTheftSecurity value
     * @param bool $isStatementAboutAntiTheftSecurity
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Declarations
     */
    public function setIsStatementAboutAntiTheftSecurity($isStatementAboutAntiTheftSecurity = null)
    {
        // validation for constraint: boolean
        if (!is_null($isStatementAboutAntiTheftSecurity) && !is_bool($isStatementAboutAntiTheftSecurity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isStatementAboutAntiTheftSecurity)), __LINE__);
        }
        $this->IsStatementAboutAntiTheftSecurity = $isStatementAboutAntiTheftSecurity;
        return $this;
    }
    /**
     * Get LastAcInsuranceCompanyCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLastAcInsuranceCompanyCode()
    {
        return isset($this->LastAcInsuranceCompanyCode) ? $this->LastAcInsuranceCompanyCode : null;
    }
    /**
     * Set LastAcInsuranceCompanyCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $lastAcInsuranceCompanyCode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Declarations
     */
    public function setLastAcInsuranceCompanyCode($lastAcInsuranceCompanyCode = null)
    {
        // validation for constraint: string
        if (!is_null($lastAcInsuranceCompanyCode) && !is_string($lastAcInsuranceCompanyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastAcInsuranceCompanyCode)), __LINE__);
        }
        if (is_null($lastAcInsuranceCompanyCode) || (is_array($lastAcInsuranceCompanyCode) && empty($lastAcInsuranceCompanyCode))) {
            unset($this->LastAcInsuranceCompanyCode);
        } else {
            $this->LastAcInsuranceCompanyCode = $lastAcInsuranceCompanyCode;
        }
        return $this;
    }
    /**
     * Get LastOcInsuranceCompanyCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLastOcInsuranceCompanyCode()
    {
        return isset($this->LastOcInsuranceCompanyCode) ? $this->LastOcInsuranceCompanyCode : null;
    }
    /**
     * Set LastOcInsuranceCompanyCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $lastOcInsuranceCompanyCode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Declarations
     */
    public function setLastOcInsuranceCompanyCode($lastOcInsuranceCompanyCode = null)
    {
        // validation for constraint: string
        if (!is_null($lastOcInsuranceCompanyCode) && !is_string($lastOcInsuranceCompanyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastOcInsuranceCompanyCode)), __LINE__);
        }
        if (is_null($lastOcInsuranceCompanyCode) || (is_array($lastOcInsuranceCompanyCode) && empty($lastOcInsuranceCompanyCode))) {
            unset($this->LastOcInsuranceCompanyCode);
        } else {
            $this->LastOcInsuranceCompanyCode = $lastOcInsuranceCompanyCode;
        }
        return $this;
    }
    /**
     * Get Statements value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfStatement|null
     */
    public function getStatements()
    {
        return isset($this->Statements) ? $this->Statements : null;
    }
    /**
     * Set Statements value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfStatement $statements
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Declarations
     */
    public function setStatements(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfStatement $statements = null)
    {
        if (is_null($statements) || (is_array($statements) && empty($statements))) {
            unset($this->Statements);
        } else {
            $this->Statements = $statements;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Declarations
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
