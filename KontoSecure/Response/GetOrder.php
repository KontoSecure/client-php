<?php

namespace KontoSecure\Response;

/**
 * Class GetOrder
 * @package KontoSecure\Response
 */
class GetOrder extends BaseResponse
{
    const STATE_CLOSED = 'closed';
    const STATE_FAILED = 'failed';

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
     * Gets the amount.
     *
     * @return float|null
     */
    public function getAmount()
    {
        return $this->getVal('amount');
    }

    /**
     * Gets the clientEmail.
     *
     * @return string|null
     */
    public function getClientEmail()
    {
        return $this->getVal('client_email');
    }

    /**
     * Gets the description.
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->getVal('description');
    }

    /**
     * Gets the IBAN.
     *
     * @return string|null
     */
    public function getIban()
    {
        return $this->getVal('iban');
    }

    /**
     * Gets the BIC.
     *
     * @return string|null
     */
    public function getBic()
    {
        return $this->getVal('bic');
    }

    /**
     * Gets the shippingFee.
     *
     * @return string|null
     */
    public function getShippingFee()
    {
        return $this->getVal('shipping_fee');
    }

    /**
     * Gets the state.
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->getVal('state');
    }
}
