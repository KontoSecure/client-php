<?php

namespace KontoSecure\Request;

/**
 * Class CreateOrder
 * @package KontoSecure\Request
 */
class CreateOrder
{
    const URI = '/orders';
    const METHOD = 'POST';

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
     * @var float
     */
    protected $shippingFee;

    /**
     * @var string
     */
    protected $successUrl;

    /**
     * @var string
     */
    protected $failedUrl;

    /**
     * @var string
     */
    protected $canceledUrl;

    /**
     * @var string
     */
    protected $webhookUrl;

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
     * Get successUrl
     *
     * @return string
     */
    public function getSuccessUrl()
    {
        return $this->successUrl;
    }

    /**
     * Set successUrl
     *
     * @param string $successUrl
     *
     * @return $this
     */
    public function setSuccessUrl($successUrl)
    {
        $this->successUrl = $successUrl;

        return $this;
    }

    /**
     * Get failedUrl
     *
     * @return string
     */
    public function getFailedUrl()
    {
        return $this->failedUrl;
    }

    /**
     * Set failedUrl
     *
     * @param string $failedUrl
     *
     * @return $this
     */
    public function setFailedUrl($failedUrl)
    {
        $this->failedUrl = $failedUrl;

        return $this;
    }

    /**
     * Get canceledUrl
     *
     * @return string
     */
    public function getCanceledUrl()
    {
        return $this->canceledUrl;
    }

    /**
     * Set canceledUrl
     *
     * @param string $canceledUrl
     *
     * @return $this
     */
    public function setCanceledUrl($canceledUrl)
    {
        $this->canceledUrl = $canceledUrl;

        return $this;
    }

    /**
     * Get webhookUrl
     *
     * @return string
     */
    public function getWebhookUrl()
    {
        return $this->webhookUrl;
    }

    /**
     * Set webhookUrl
     *
     * @param string $webhookUrl
     *
     * @return $this
     */
    public function setWebhookUrl($webhookUrl)
    {
        $this->webhookUrl = $webhookUrl;

        return $this;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return array(
            'amount'      => $this->amount,
            'clientEmail' => $this->clientEmail,
            'description' => $this->description,
            'iban'        => $this->iban,
            'shippingFee' => $this->shippingFee,
            'successUrl'  => $this->successUrl,
            'failedUrl'   => $this->failedUrl,
            'canceledUrl' => $this->canceledUrl,
            'webhookUrl'  => $this->webhookUrl,
        );
    }
}
