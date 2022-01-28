<?php

namespace Nestdigital\Asaas\Api;

class BillPayment extends ApiAdapter
{
    public function create(array $billData)
    {
        $this->options['body'] = json_encode($billData);

        return $this->post('bill', $this->options);
    }

    public function simulate(array $simulateOptions)
    {
        $this->options['body'] = json_encode($simulateOptions);

        return $this->post('bill/simulate', $this->options);
    }

    public function find(string $billId = null)
    {
        if ($billId == null) {
            return $this->get('bill/', $this->options);
        }

        return $this->get('bill/'.$billId, $this->options);
    }

    public function cancel(string $billId)
    {
        return $this->post('bill/'.$billId.'/cancel', $this->options);
    }
}
