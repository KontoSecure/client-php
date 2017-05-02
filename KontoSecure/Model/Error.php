<?php

namespace KontoSecure\Model;

/**
 * Class Error
 * @package KontoSecure\Model
 */
class Error
{
    /**
     * @var string|null
     */
    protected $code;

    /**
     * @var string|null
     */
    protected $message;

    /**
     * @var array
     */
    protected $errors = array();

    /**
     * Error constructor.
     * @param array $response
     */
    public function __construct(array $response)
    {
        $errorData = isset($response['error']) ? $response['error'] : $response;

        $this->code    = isset($errorData['code'])    ? $errorData['code'] : null;
        $this->message = isset($errorData['message']) ? $errorData['message'] : null;
        $this->errors  = isset($errorData['errors'])  ? $errorData['errors'] : array();
    }

    /**
     * Get code
     *
     * @return null|string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Get message
     *
     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Get errors
     *
     * @return array|mixed
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return array(
            'code'    => $this->code,
            'message' => $this->message,
            'errors'  => $this->errors,
        );
    }
}
