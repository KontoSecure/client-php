<?php

namespace PayClient;

use PayClient\Request\CreateOrder as CreateOrderRequest;
use PayClient\Response\CreateOrder as CreateOrderResponse;
use PayClient\Request\GetOrder as GetOrderRequest;
use PayClient\Response\GetOrder as GetOrderResponse;

class Client extends BaseClient
{
    protected $apiKey;

    public function __construct($apiKey)
    {
        parent::__construct();
        $this->apiKey = $apiKey;
        $header = array("cache-control: no-cache", 'Api-Key: ' . $apiKey);
        curl_setopt($this->curlHandle, CURLOPT_HTTPHEADER, $header);
    }

    /**
     * @param CreateOrderRequest $order
     * @return CreateOrderResponse
     */
    public function createOrder(CreateOrderRequest $order)
    {
        curl_setopt($this->curlHandle, CURLOPT_URL, static::PAY_URL . CreateOrderRequest::URI);
        curl_setopt($this->curlHandle, CURLOPT_CUSTOMREQUEST, CreateOrderRequest::METHOD);
        curl_setopt($this->curlHandle, CURLOPT_POSTFIELDS, http_build_query($order->toArray()));

        $result = curl_exec($this->curlHandle);
        $curlInfo = curl_getinfo($this->curlHandle);

        return new CreateOrderResponse($result, $curlInfo);
    }

    public function getOrder($orderId)
    {
        curl_setopt($this->curlHandle, CURLOPT_CUSTOMREQUEST, GetOrderRequest::METHOD);
        curl_setopt($this->curlHandle, CURLOPT_URL, static::PAY_URL . sprintf(GetOrderRequest::URI, $orderId));

        $result = curl_exec($this->curlHandle);
        $curlInfo = curl_getinfo($this->curlHandle);

        return new GetOrderResponse($result, $curlInfo);
    }
}
