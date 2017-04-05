<?php

namespace KontoSecure\Response;

/**
 * Class CreateOrder
 * @package KontoSecure\Response
 */
class CreateOrder extends BaseResponse
{
    /**
     * Gets the OrderId.
     *
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->getVal('order_id');
    }

    /**
     * Gets the checkoutUrl.
     *
     * @return string|null
     */
    public function getCheckoutUrl()
    {
        return $this->getVal('checkout_url');
    }
}
