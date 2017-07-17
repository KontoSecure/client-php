<?php

namespace KontoSecure\Request;

/**
 * Class CreateMerchant
 * @package KontoSecure\Request
 */
class CreateMerchant
{
    const URI = '/merchants';
    const METHOD = 'POST';

    const COMPANY_TYPE_SOLE_TRADER = 'sole_trader'; // Einzelunternehmer
    const COMPANY_TYPE_REGISTERED_BUSINESSMAN = 'registered_businessman'; // Eingetragener Kaufmann / -frau
    const COMPANY_TYPE_LT = 'limited'; // Gesellschaft mit beschränkter Haftung (GmbH)
    const COMPANY_TYPE_PLT = 'public_limited'; // Aktiengesellschaft (AG)
    const COMPANY_TYPE_GENERAL_PARTNERSHIP = 'general_partnership'; // Offene Handelsgesellschaft (OHG)
    const COMPANY_TYPE_GENERAL_PARTNERSHIP_2 = 'general_partnership_2'; // Kommanditgesellschaft (KG)
    const COMPANY_TYPE_LIMITED_BY_SHARES = 'limited_by_shares'; // Kommanditgesellschaft auf Aktien (KGaA)
    const COMPANY_TYPE_PRIVATE_CORPORATION = 'private_corporation'; // Gesellschaft des bürgerlichen Rechts (GbR)
    const COMPANY_TYPE_REGISTERED_COOPERATIVE = 'registered_cooperative'; // Eingetragene Genossenschaft (eG)

    /**
     * @var string
     */
    protected $companyName;

    /**
     * @var string
     */
    protected $companyType;

    /**
     * @var string
     */
    protected $street;

    /**
     * @var string
     */
    protected $zip;

    /**
     * @var string
     */
    protected $city;

    /**
     * @var string
     */
    protected $country;

    /**
     * @var string
     */
    protected $firstName;

    /**
     * @var string
     */
    protected $lastName;

    /**
     * @var string
     */
    protected $taxNumber;

    /**
     * @var string
     */
    protected $vatId;

    /**
     * @var string
     */
    protected $website;

    /**
     * @var array
     */
    protected $bankAccounts;

    /**
     * Get CompanyName
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Set CompanyName
     *
     * @param string $companyName
     *
     * @return $this
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * Get CompanyType
     *
     * @return string
     */
    public function getCompanyType()
    {
        return $this->companyType;
    }

    /**
     * Set CompanyType
     *
     * @param string $companyType
     *
     * @return $this
     */
    public function setCompanyType($companyType)
    {
        $this->companyType = $companyType;

        return $this;
    }

    /**
     * Get Street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set Street
     *
     * @param string $street
     *
     * @return $this
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get Zip
     *
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Set Zip
     *
     * @param string $zip
     *
     * @return $this
     */
    public function setZip($zip)
    {
        $this->zip = $zip;

        return $this;
    }

    /**
     * Get City
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set City
     *
     * @param string $city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get Country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set Country
     *
     * @param string $country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get FirstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set FirstName
     *
     * @param string $firstName
     *
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get LastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set LastName
     *
     * @param string $lastName
     *
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get TaxNumber
     *
     * @return string
     */
    public function getTaxNumber()
    {
        return $this->taxNumber;
    }

    /**
     * Set TaxNumber
     *
     * @param string $taxNumber
     *
     * @return $this
     */
    public function setTaxNumber($taxNumber)
    {
        $this->taxNumber = $taxNumber;

        return $this;
    }

    /**
     * Get VatId
     *
     * @return string
     */
    public function getVatId()
    {
        return $this->vatId;
    }

    /**
     * Set VatId
     *
     * @param string $vatId
     *
     * @return $this
     */
    public function setVatId($vatId)
    {
        $this->vatId = $vatId;

        return $this;
    }

    /**
     * Get Website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set Website
     *
     * @param string $website
     *
     * @return $this
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get BankAccounts
     *
     * @return array
     */
    public function getBankAccounts()
    {
        return $this->bankAccounts;
    }

    /**
     * Set BankAccounts
     *
     * @param array $bankAccounts
     *
     * @return $this
     */
    public function setBankAccounts(array $bankAccounts)
    {
        $this->bankAccounts = $bankAccounts;

        return $this;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return array(
            'companyName'  => $this->companyName,
            'companyType'  => $this->companyType,
            'street'       => $this->street,
            'zip'          => $this->zip,
            'city'         => $this->city,
            'country'      => $this->country,
            'taxNumber'    => $this->taxNumber,
            'vatId'        => $this->vatId,
            'website'      => $this->website,
            'firstName'    => $this->firstName,
            'lastName'     => $this->lastName,
            'bankAccounts' => $this->bankAccounts,
        );
    }
}
