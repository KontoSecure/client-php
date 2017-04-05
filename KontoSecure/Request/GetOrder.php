<?php

namespace KontoSecure\Request;

/**
 * Class GetOrder
 * @package KontoSecure\Request
 */
class GetOrder
{
    const URI = '/orders/%s';
    const METHOD = 'GET';

    /**
     * @var string
     */
    protected $orderId;

    /**
     * Get orderId
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Set orderId
     *
     * @param string $orderId
     *
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }
}
