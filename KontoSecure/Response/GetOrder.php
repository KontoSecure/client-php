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
     * Gets transaction ID.
     *
     * @return string|null
     */
    public function getTransactionId()
    {
        $transaction = $this->getVal('transaction');

        return $this->getVal('identifier', null, $transaction);
    }

    /**
     * Gets the security token for this order.
     *
     * @return string|null
     */
    public function getSecurityToken()
    {
        return $this->getVal('security_token');
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
     * Gets the shippingFee.
     *
     * @return string|null
     */
    public function getShippingFee()
    {
        return $this->getVal('shipping_fee');
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
     * Gets the clientEmail.
     *
     * @return string|null
     */
    public function getClientEmail()
    {
        return $this->getVal('client_email');
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
     * Gets the error code.
     * "0" for undefined or no error.
     *
     * @return string|null
     */
    public function getErrorCode()
    {
        return $this->getVal('error_code');
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
     * Gets cancelPosition.
     *
     * @return string|null
     */
    public function getCancelPosition()
    {
        return $this->getVal('cancel_position');
    }

    /**
     * Gets the success redirect URL.
     *
     * @return string|null
     */
    public function getSuccessUrl()
    {
        return $this->getVal('success_url');
    }

    /**
     * Gets the failed redirect URL.
     *
     * @return string|null
     */
    public function getFailedUrl()
    {
        return $this->getVal('failed_url');
    }

    /**
     * Gets the canceled redirect URL.
     *
     * @return string|null
     */
    public function getCanceledUrl()
    {
        return $this->getVal('canceled_url');
    }

    /**
     * Gets the custom fields, transmitted with the order POST request.
     *
     * @return array|null
     */
    public function getCustomFields()
    {
        return $this->getVal('custom_fields');
    }
}
