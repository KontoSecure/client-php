<?php

namespace KontoSecure\Response;

use KontoSecure\Model\Error;

/**
 * Class BaseResponse
 * @package KontoSecure\Response
 */
class BaseResponse
{
    /**
     * @var string
     */
    protected $rawResponse;

    /**
     * @var array
     */
    protected $arrayResponse;

    /**
     * @var bool
     */
    protected $success;

    /**
     * BaseResponse constructor.
     * @param $rawResponse
     * @param array $curlInfo
     */
    public function __construct($rawResponse, array $curlInfo)
    {
        $this->rawResponse = $rawResponse;
        $this->arrayResponse = json_decode($rawResponse, true);
        $httpCode = $curlInfo['http_code'];
        $this->success = ($httpCode >= 200 && $httpCode <= 399);
    }

    /**
     * Returns true if the request was successful.
     * @return bool
     */
    public function isSuccess()
    {
        return $this->success;
    }

    /**
     * @return Error|null
     */
    public function getError()
    {
        if ($this->success) {
            return null;
        }

        return new Error($this->arrayResponse);
    }

    /**
     * Gets a field from the response.
     * @param string $fieldName
     * @param mixed|null $default
     * @return mixed|null
     */
    protected function getVal($fieldName, $default = null)
    {
        if (!is_scalar($fieldName)) {
            $return = $default;
        } else {
            $return = isset($this->arrayResponse[$fieldName]) ? $this->arrayResponse[$fieldName] : $default;
        }

        return $return;
    }
}