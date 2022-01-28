<?php

namespace Nestdigital\Asaas\Api;

class Invoice extends ApiAdapter
{
    public function create(array $invoiceData)
    {
        $this->options['body'] = json_encode($invoiceData);

        return $this->post('invoices', $this->options);
    }

    public function update(string $invoiceId, array $invoiceData)
    {
        $this->options['body'] = json_encode($invoiceData);

        return $this->put('invoices/'.$invoiceId, $this->options);
    }

    public function find(string $invoiceId = null)
    {
        if ($invoiceId == null) {
            return $this->get('invoices', $this->options);
        }

        return $this->get('invoices/'.$invoiceId, $this->options);
    }

    public function findByPaymentId(string $paymentId)
    {
        return $this->get('invoices?payment='.$paymentId, $this->options);
    }

    public function findByInstallmentId(string $installmentId)
    {
        return $this->get('invoices?installment='.$installmentId, $this->options);
    }

    public function findByStatus(string $status)
    {
        return $this->get('invoices?status='.$status, $this->options);
    }

    public function authorize(string $invoiceId)
    {
        return $this->post('invoices/'.$invoiceId.'/authorize', $this->options);
    }

    public function cancel(string $invoiceId)
    {
        return $this->post('invoices/'.$invoiceId.'/cancel', $this->options);
    }

    public function municipalServices(string $description)
    {
        return $this->get('invoices/municipalServices?description='.$description, $this->options);
    }
}
