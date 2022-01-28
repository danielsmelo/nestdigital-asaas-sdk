<?php

namespace Nestdigital\Asaas\Api;

class Payment extends ApiAdapter
{
    public function create(array $paymentData)
    {
        $this->options['body'] = json_encode($paymentData);

        return $this->post('payments', $this->options);
    }

    public function find(string $paymentId = null)
    {
        if ($paymentId == null) {
            return $this->get('payments', $this->options);
        }

        return $this->get('payments/'.$paymentId, $this->options);
    }

    public function findByCustomerId(string $customerId)
    {
        return $this->get('payments?customer='.$customerId, $this->options);
    }

    public function update(string $paymentId, array $paymentData)
    {
        $this->options['body'] = json_encode($paymentData);

        return $this->post('payments/'.$paymentId, $this->options);
    }

    public function remove(string $paymentId)
    {
        return $this->delete('payments/'.$paymentId, $this->options);
    }

    public function restore(string $paymentId)
    {
        return $this->post('payments/'.$paymentId.'/restore', $this->options);
    }

    public function reversePayment(string $paymentId)
    {
        return $this->post('payments/'.$paymentId.'/refund', $this->options);
    }

    public function bankSlipCode(string $paymentId)
    {
        return $this->get('payments/'.$paymentId.'/identificationField', $this->options);
    }

    public function pixQrCode(string $paymentId)
    {
        return $this->get('payments/'.$paymentId.'/pixQrCode', $this->options);
    }

    public function confirmReceivedInCash(string $paymentId)
    {
        return $this->post('payments/'.$paymentId.'/receiveInCash', $this->options);
    }

    public function undoReceivedInCash(string $paymentId)
    {
        return $this->post('payments/'.$paymentId.'/undoReceivedInCash', $this->options);
    }
}
