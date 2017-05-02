<?php

namespace KontoSecure;

use KontoSecure\Request\CreateOrder as CreateOrderRequest;
use KontoSecure\Response\CreateOrder as CreateOrderResponse;
use KontoSecure\Request\GetOrder as GetOrderRequest;
use KontoSecure\Response\GetOrder as GetOrderResponse;

/**
 * Class Client
 * @package KontoSecure
 */
class Client extends BaseClient
{
    const VERSION_HEADER = 'X-Accept-Version';
    const VERSION_V1 = 'v1';

    /**
     * @var string
     */
    protected $apiKey;

    /**
     * Client constructor.
     * @param string $apiKey
     * @param string $apiVersion
     */
    public function __construct($apiKey, $apiVersion = self::VERSION_V1)
    {
        parent::__construct();

        $this->apiKey = $apiKey;
        $header = array(
            "cache-control: no-cache",
            'Api-Key: ' . $apiKey,
            static::VERSION_HEADER . ': ' . $apiVersion,
        );
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

    /**
     * @param GetOrderRequest $order
     * @return GetOrderResponse
     */
    public function getOrder(GetOrderRequest $order)
    {
        curl_setopt($this->curlHandle, CURLOPT_CUSTOMREQUEST, GetOrderRequest::METHOD);
        curl_setopt(
            $this->curlHandle,
            CURLOPT_URL,
            static::PAY_URL . sprintf(GetOrderRequest::URI, $order->getOrderId())
        );

        $result = curl_exec($this->curlHandle);
        $curlInfo = curl_getinfo($this->curlHandle);

        return new GetOrderResponse($result, $curlInfo);
    }
}
