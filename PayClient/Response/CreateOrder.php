<?php

namespace PayClient\Response;

use PayClient\Model\Error;

class CreateOrder
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

    public function getCheckoutUrl()
    {
        return $this->arrayResponse['checkout_url'];
    }

    public function getError()
    {
        if ($this->success) {
            return null;
        }

        return new Error($this->arrayResponse);
    }
}
