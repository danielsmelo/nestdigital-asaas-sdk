<?php

namespace Nestdigital\Asaas\Api;

class PaymentLink extends ApiAdapter
{
    public function create(array $paymentLinkData)
    {
        $this->options['body'] = json_encode($paymentLinkData);

        return $this->post('paymentLinks', $this->options);
    }

    public function update(string $paymentLinkId, array $paymentLinkData)
    {
        $this->options['body'] = json_encode($paymentLinkData);

        return $this->put('paymentLinks/'.$paymentLinkId, $this->options);
    }

    public function find(string $paymentLinkId = null)
    {
        if ($paymentLinkId == null) {
            return $this->get('paymentLinks', $this->options);
        }

        return $this->get('paymentLinks/'.$paymentLinkId, $this->options);
    }

    public function findActive()
    {
        return $this->get('paymentLinks?active=true', $this->options);
    }

    public function remove(string $paymentLinkId)
    {
        return $this->delete('paymentLinks/'.$paymentLinkId, $this->options);
    }

    public function restore(string $paymentLinkId)
    {
        return $this->post('paymentLinks/'.$paymentLinkId.'/restore', $this->options);
    }

    public function image(string $paymentLinkId)
    {
        $this->options['headers'] = $this->getFormDataHeader();

        return $this->post('paymentLinks/'.$paymentLinkId.'/images', $this->options);
    }

    public function findImages(string $paymentLinkId, string $imageId = null)
    {
        if ($imageId == null) {
            return $this->get('paymentLinks/'.$paymentLinkId.'/images', $this->options);
        }

        return $this->get('paymentLinks/'.$paymentLinkId.'/images/'.$imageId, $this->options);
    }

    public function removeImage(string $imageId)
    {
        return $this->delete('paymentLinks/'.$imageId.'/images', $this->options);
    }

    public function setMainImage(string $paymentLinkId, string $imageId)
    {
        return $this->post('paymentLinks/'.$paymentLinkId.'/images/'.$imageId.'/setAsMain', $this->options);
    }
}
