<?php

namespace Nestdigital\Asaas\Api;

class Anticipation extends ApiAdapter
{
    public function create(array $anticipationData)
    {
        $this->options['body'] = json_encode($anticipationData);

        return $this->post('anticipations', $this->options);
    }

    public function simulate(array $simulateOptions)
    {
        $this->options['body'] = json_encode($simulateOptions);

        return $this->post('anticipations/simulate', $this->options);
    }

    public function find(string $anticipationId)
    {
        return $this->get('anticipations/'.$anticipationId, $this->options);
    }

    public function findByPaymentId(string $paymentId)
    {
        return $this->get('anticipations?payment='.$paymentId, $this->options);
    }

    public function findByInstallmentId(string $installmentId)
    {
        return $this->get('anticipations?installment='.$installmentId, $this->options);
    }

    public function findByStatus(string $status)
    {
        return $this->get('anticipations?status='.$status, $this->options);
    }
}
