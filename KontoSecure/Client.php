<?php

namespace KontoSecure;

use KontoSecure\Request\CreateOrder as CreateOrderRequest;
use KontoSecure\Response\CreateOrder as CreateOrderResponse;
use KontoSecure\Request\GetOrder as GetOrderRequest;
use KontoSecure\Response\GetOrder as GetOrderResponse;
use KontoSecure\Request\CreateMerchant as CreateMerchantRequest;
use KontoSecure\Response\CreateMerchant as CreateMerchantResponse;

/**
 * Class Client
 * @package KontoSecure
 */
class Client extends BaseClient
{
    const API_KEY_HEADER = 'Api-Key';
    const SUB_API_KEY_HEADER = 'Sub-Api-Key';
    const VERSION_HEADER = 'X-Accept-Version';
    const VERSION_V1 = 'v1';

    /**
     * @var string
     */
    protected $apiKey;

    /**
     * @var array
     */
    protected $header = array();

    /**
     * Client constructor.
     * @param string $apiKey
     * @param string $apiVersion
     * @param string|null $baseUrl
     */
    public function __construct($apiKey, $apiVersion = self::VERSION_V1, $baseUrl = null)
    {
        parent::__construct($baseUrl);

        $this->apiKey = $apiKey;
        $this->header = array(
            "cache-control: no-cache",
            static::API_KEY_HEADER . ': ' . $apiKey,
            static::VERSION_HEADER . ': ' . $apiVersion,
        );
    }

    /**
     * Enables the test mode.
     *
     * @return $this
     */
    public function enableTestMode()
    {
        $this->baseUrl = static::TEST_API_URL;

        return $this;
    }

    /**
     * Sets the sub api key.
     *
     * @param string $subApiKey
     */
    public function setSubApiKey($subApiKey)
    {
        $this->header[] = static::SUB_API_KEY_HEADER . ': ' . $subApiKey;
    }

    /**
     * @param CreateOrderRequest $order
     * @return CreateOrderResponse
     */
    public function createOrder(CreateOrderRequest $order)
    {
        curl_setopt($this->curlHandle, CURLOPT_HTTPHEADER, $this->header);
        curl_setopt($this->curlHandle, CURLOPT_URL, $this->baseUrl . CreateOrderRequest::URI);
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
        curl_setopt($this->curlHandle, CURLOPT_HTTPHEADER, $this->header);
        curl_setopt($this->curlHandle, CURLOPT_CUSTOMREQUEST, GetOrderRequest::METHOD);
        curl_setopt(
            $this->curlHandle,
            CURLOPT_URL,
            $this->baseUrl . sprintf(GetOrderRequest::URI, $order->getOrderId())
        );

        $result = curl_exec($this->curlHandle);
        $curlInfo = curl_getinfo($this->curlHandle);

        return new GetOrderResponse($result, $curlInfo);
    }

    /**
     * @param CreateMerchantRequest $merchant
     * @return CreateMerchantResponse
     */
    public function createMerchant(CreateMerchantRequest $merchant)
    {
        curl_setopt($this->curlHandle, CURLOPT_HTTPHEADER, $this->header);
        curl_setopt($this->curlHandle, CURLOPT_URL, $this->baseUrl . CreateMerchantRequest::URI);
        curl_setopt($this->curlHandle, CURLOPT_CUSTOMREQUEST, CreateMerchantRequest::METHOD);
        curl_setopt($this->curlHandle, CURLOPT_POSTFIELDS, http_build_query($merchant->toArray()));

        $result = curl_exec($this->curlHandle);
        $curlInfo = curl_getinfo($this->curlHandle);

        return new CreateMerchantResponse($result, $curlInfo);
    }
}
