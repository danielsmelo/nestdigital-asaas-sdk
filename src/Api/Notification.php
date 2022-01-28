<?php

namespace Nestdigital\Asaas\Api;

class Notification extends ApiAdapter
{
    public function find(string $customerId)
    {
        return $this->get('customers/'.$customerId.'/notifications', $this->options);
    }

    public function update(string $notificationId, array $notificationConfig)
    {
        $this->options['body'] = json_encode($notificationConfig);

        return $this->post('notifications/'.$notificationId, $this->options);
    }
}
