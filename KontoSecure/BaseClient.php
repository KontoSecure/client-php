<?php

namespace KontoSecure;

/**
 * Class BaseClient
 * @package KontoSecure
 */
class BaseClient
{
    const PAY_URL = 'https://api.konto-secure.de';

    /**
     * @var resource CurlHandle
     */
    protected $curlHandle;

    /**
     * BaseClient constructor.
     */
    public function __construct()
    {
        $this->init();
    }

    /**
     * Initializes the curl handle
     */
    protected function init()
    {
        $this->curlHandle = curl_init();

        curl_setopt($this->curlHandle, CURLOPT_SSLVERSION, CURL_SSLVERSION_DEFAULT);
        curl_setopt($this->curlHandle, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($this->curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($this->curlHandle, CURLOPT_USERAGENT, "KontoSecure-PHP");
        curl_setopt($this->curlHandle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->curlHandle, CURLOPT_URL, static::PAY_URL);
        curl_setopt($this->curlHandle, CURLOPT_CONNECTTIMEOUT, 15);
        curl_setopt($this->curlHandle, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($this->curlHandle, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        curl_setopt($this->curlHandle, CURLOPT_ENCODING, '');
        curl_setopt($this->curlHandle, CURLOPT_MAXREDIRS, 0);
        curl_setopt($this->curlHandle, CURLOPT_TIMEOUT, 30);
        curl_setopt($this->curlHandle, CURLOPT_HTTPHEADER, array("cache-control: no-cache"));
    }
}
