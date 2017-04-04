<?php

namespace PayClient\Model;

/**
 * Class Error
 * @package PayClient\Model
 */
class Error
{
    /**
     * @var string|null
     */
    protected $type;

    /**
     * @var string|null
     */
    protected $title;

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
        $this->type = isset($response['type']) ? $response['type'] : null;
        $this->title = isset($response['title']) ? $response['title'] : null;
        $this->errors = isset($response['errors']) ? $response['errors'] : array();
    }

    /**
     * Get type
     *
     * @return mixed|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Get title
     *
     * @return mixed|null
     */
    public function getTitle()
    {
        return $this->title;
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
            'type'   => $this->type,
            'title'  => $this->title,
            'errors' => $this->errors,
        );
    }
}
