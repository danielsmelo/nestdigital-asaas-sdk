<?php

namespace Nestdigital\Asaas\Api;

class Webhook extends ApiAdapter
{
    public function config(array $webhookConfig)
    {
        $this->options['body'] = json_encode($webhookConfig);

        return $this->post('webhook/', $this->options);
    }

    public function findConfig()
    {
        return $this->get('webhook/', $this->options);
    }

    public function invoiceConfig(array $invoiceConfig)
    {
        $this->options['body'] = json_encode($invoiceConfig);

        return $this->post('webhook/invoice', $this->options);
    }

    public function findInvoiceConfig()
    {
        return $this->get('webhook/invoice', $this->options);
    }

    public function transferConfig(array $transferConfig)
    {
        $this->options['body'] = json_encode($transferConfig);

        return $this->post('webhook/transfer', $this->options);
    }

    public function findTransferConfig()
    {
        return $this->get('webhook/transfer', $this->options);
    }
}
