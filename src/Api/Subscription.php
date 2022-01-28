<?php

namespace Nestdigital\Asaas\Api;

class Subscription extends ApiAdapter
{
    public function create(array $subscriptionData)
    {
        $this->options['body'] = json_encode($subscriptionData);

        return $this->post('subscriptions', $this->options);
    }

    public function find(string $subscriptionId = null)
    {
        if ($subscriptionId == null) {
            return $this->get('subscriptions', $this->options);
        }

        return $this->get('subscriptions/'.$subscriptionId, $this->options);
    }

    public function findByCustomerId(string $customerId)
    {
        return $this->get('subscriptions?customer='.$customerId, $this->options);
    }

    public function payments(string $subscriptionId)
    {
        return $this->get('subscriptions/'.$subscriptionId.'/payments', $this->options);
    }

    public function update(string $subscriptionId, array $subscriptionData)
    {
        $this->options['body'] = json_encode($subscriptionData);

        return $this->post('subscriptions/'.$subscriptionId, $this->options);
    }

    public function remove(string $subscriptionId)
    {
        return $this->delete('subscriptions/'.$subscriptionId, $this->options);
    }

    public function invoices(string $subscriptionId)
    {
        return $this->get('subscriptions/'.$subscriptionId.'/invoices', $this->options);
    }

    public function setInvoiceSettings(string $subscriptionId, array $values)
    {
        $this->options['body'] = json_encode($values);

        return $this->post('subscriptions/'.$subscriptionId.'/invoiceSettings', $this->options);
    }

    public function invoiceSettings(string $subscriptionId)
    {
        return $this->get('subscriptions/'.$subscriptionId.'/invoiceSettings', $this->options);
    }

    public function removeInvoiceSettings(string $subscriptionId)
    {
        return $this->delete('subscriptions/'.$subscriptionId.'/invoiceSettings', $this->options);
    }
}
