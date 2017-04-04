<?php

namespace PayClient\Request;

class GetOrder
{
    const URI = '/orders/%s';
    const METHOD = 'GET';

    /**
     * @var string
     */
    protected $orderId;

    /**
     * @var float
     */
    protected $amount;

    /**
     * @var string
     */
    protected $clientEmail;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $iban;

    /**
     * @var string
     */
    protected $bic;

    /**
     * @var float
     */
    protected $shippingFee;

    /**
     * @var string
     */
    protected $state;

    /**
     * Get orderId
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Set orderId
     *
     * @param string $orderId
     *
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * Get amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set amount
     *
     * @param float $amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get shippingFee
     *
     * @return float
     */
    public function getShippingFee()
    {
        return $this->shippingFee;
    }

    /**
     * Set shippingFee
     *
     * @param float $shippingFee
     *
     * @return $this
     */
    public function setShippingFee($shippingFee)
    {
        $this->shippingFee = $shippingFee;

        return $this;
    }

    /**
     * Get clientEmail
     *
     * @return string
     */
    public function getClientEmail()
    {
        return $this->clientEmail;
    }

    /**
     * Set clientEmail
     *
     * @param string $clientEmail
     *
     * @return $this
     */
    public function setClientEmail($clientEmail)
    {
        $this->clientEmail = $clientEmail;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get iban
     *
     * @return string
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * Set iban
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
     * Get bic
     *
     * @return string
     */
    public function getBic()
    {
        return $this->bic;
    }

    /**
     * Set bic
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
     * Get state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set state
     *
     * @param string $state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }
}
