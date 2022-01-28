<?php

namespace Nestdigital\Asaas\Api;

class Serasa extends ApiAdapter
{
    public function check(array $customerData)
    {
        $this->options['body'] = json_encode($customerData);

        return $this->post('creditBureauReport', $this->options);
    }

    public function find(string $checkId = null)
    {
        if ($checkId == null) {
            return $this->get('creditBureauReport/', $this->options);
        }

        return $this->get('creditBureauReport/'.$checkId, $this->options);
    }
}
