<?php

namespace Nestdigital\Asaas\Api;

class Installment extends ApiAdapter
{
    public function find(string $installmentId = null)
    {
        if ($installmentId == null) {
            return $this->get('installments', $this->options);
        }

        return $this->get('installments/'.$installmentId, $this->options);
    }

    public function remove(string $installmentId)
    {
        return $this->delete('installments/'.$installmentId, $this->options);
    }

    public function reversePayment(string $installmentId)
    {
        return $this->post('installments/'.$installmentId.'/refund', $this->options);
    }
}
