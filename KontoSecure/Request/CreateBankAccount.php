<?php

namespace KontoSecure\Request;

/**
 * Class CreateBankAccount
 *
 * @package KontoSecure\Request
 */
class CreateBankAccount
{
    /**
     * @var string
     */
    protected $accountHolder;

    /**
     * @var string
     */
    protected $iban;

    /**
     * @var string
     */
    protected $bic;

    /**
     * Get AccountHolder
     *
     * @return string
     */
    public function getAccountHolder()
    {
        return $this->accountHolder;
    }

    /**
     * Set AccountHolder
     *
     * @param string $accountHolder
     *
     * @return $this
     */
    public function setAccountHolder($accountHolder)
    {
        $this->accountHolder = $accountHolder;

        return $this;
    }

    /**
     * Get Iban
     *
     * @return string
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * Set Iban
     *
     * @param string $iban
     *
     * @return $this
     */
    public function setIban($iban)
    {
        $this->iban = $iban;

        return $this;
    }

    /**
     * Get Bic
     *
     * @return string
     */
    public function getBic()
    {
        return $this->bic;
    }

    /**
     * Set Bic
     *
     * @param string $bic
     *
     * @return $this
     */
    public function setBic($bic)
    {
        $this->bic = $bic;

        return $this;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            'accountHolder'  => $this->accountHolder,
            'iban'           => $this->iban,
            'bic'            => $this->bic,
        ];
    }
}
