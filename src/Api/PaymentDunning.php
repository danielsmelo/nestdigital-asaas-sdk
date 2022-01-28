<?php

namespace Nestdigital\Asaas\Api;

class PaymentDunning extends ApiAdapter
{
    public function create(array $paymentDunningData)
    {
        $this->options['body'] = json_encode($paymentDunningData);

        return $this->post('paymentDunnings', $this->options);
    }

    public function simulate(array $simulateOptions)
    {
        $this->options['body'] = json_encode($simulateOptions);

        return $this->post('paymentDunnings/simulate', $this->options);
    }

    public function find(string $paymentDunningId = null)
    {
        if ($paymentDunningId == null) {
            return $this->get('paymentDunnings/', $this->options);
        }

        return $this->get('paymentDunnings/'.$paymentDunningId, $this->options);
    }

    public function findByStatus(string $status)
    {
        return $this->get('paymentDunnings?status='.$status, $this->options);
    }

    public function findByType(string $type)
    {
        return $this->get('paymentDunnings?type='.$type, $this->options);
    }

    public function findByPaymentId(string $paymentId)
    {
        return $this->get('paymentDunnings?payment='.$paymentId, $this->options);
    }

    public function eventHistory(string $paymentDunningId)
    {
        return $this->get('paymentDunnings/'.$paymentDunningId.'/history', $this->options);
    }

    public function receivedPartialPayment(string $paymentDunningId)
    {
        return $this->get('paymentDunnings/'.$paymentDunningId.'/partialPayments', $this->options);
    }

    public function paymentsAvailableForDunning()
    {
        return $this->get('paymentDunnings/paymentsAvailableForDunning', $this->options);
    }

    public function resendDocuments(string $paymentDunningId, array $documentFiles)
    {
        $this->options['headers'] = $this->getFormDataHeader();
        $this->options['body'] = json_encode($documentFiles);

        return $this->post('paymentDunnings/'.$paymentDunningId.'/documents', $this->options);
    }

    public function cancel(string $paymentDunningId)
    {
        return $this->post('paymentDunnings/'.$paymentDunningId.'/cancel', $this->options);
    }
}
