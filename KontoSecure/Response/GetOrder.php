<?php

namespace KontoSecure\Response;

/**
 * Class GetOrder
 * @package KontoSecure\Response
 */
class GetOrder extends BaseResponse
{
    const STATE_CREATED = 'created';
    const STATE_PENDING = 'pending';
    const STATE_CLOSED = 'closed';
    const STATE_FAILED = 'failed';
    const STATE_TIMEOUT = 'timeout';
    const STATE_CANCELED = 'canceled';

    const CANCELED_STEP_TIMEOUT = 'canceled_step_timeout';
    const CANCELED_STEP_1 = 'canceled_step_1';
    const CANCELED_STEP_2 = 'canceled_step_2';
    const CANCELED_STEP_3 = 'canceled_step_3';


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

    /**
     * Gets cancelPosition.
     *
     * @return string|null
     */
    public function getCancelPosition()
    {
        return $this->getVal('cancel_position');
    }
}
