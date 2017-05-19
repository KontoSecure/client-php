<?php

namespace KontoSecure\Response;

use DateTime;

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

    /**
     * Gets the date until the checkout url can be opened and processed.
     *
     * @return DateTime
     */
    public function getValidUntil()
    {
        $date = $this->getVal('valid_until');

        return new DateTime($date);
    }
}
