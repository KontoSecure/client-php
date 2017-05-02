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

    /**
     * Gets the order security token.
     * Can be used to later on verify the incoming webhook call.
     * This token is private and should not be exposed to the outside.
     *
     * @return string|null
     */
    public function getSecurityToken()
    {
        return $this->getVal('security_token');
    }
}
