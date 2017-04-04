<?php

namespace PayClient\Response;

use PayClient\Model\Error;

class GetOrder
{
    protected $rawResponse;
    protected $arrayResponse;
    protected $success;

    public function __construct($rawResponse, array $curlInfo)
    {
        $this->rawResponse = $rawResponse;
        $this->arrayResponse = json_decode($rawResponse, true);
        $httpCode = $curlInfo['http_code'];
        $this->success = (201 == $httpCode || 200 == $httpCode);
    }

    public function isSuccess()
    {
        return $this->success;
    }

    public function getOrderId()
    {
        return $this->arrayResponse['order_id'];
    }

    public function getAmount()
    {
        return $this->arrayResponse['amount'];
    }

    public function getClientEmail()
    {
        return $this->arrayResponse['client_email'];
    }

    public function getDescription()
    {
        return $this->arrayResponse['description'];
    }

    public function getIban()
    {
        return $this->arrayResponse['iban'];
    }

    public function getBic()
    {
        return $this->arrayResponse['bic'];
    }

    public function getShippingFee()
    {
        return $this->arrayResponse['shipping_fee'];
    }

    public function getState()
    {
        return $this->arrayResponse['state'];
    }

    public function getError()
    {
        if ($this->success) {
            return null;
        }

        return new Error($this->arrayResponse);
    }
}
