<?php

namespace Nestdigital\Asaas\Api;

class Customer extends ApiAdapter
{
    public function create(array $customerData)
    {
        $this->options['body'] = json_encode($customerData);

        return $this->post('customers', $this->options);
    }

    public function find(string $customerId = null)
    {
        if ($customerId == null) {
            return $this->get('customers', $this->options);
        }

        return $this->get('customers/'.$customerId, $this->options);
    }

    public function findByName(string $customerName)
    {
        return $this->get('customers?name='.$customerName, $this->options);
    }

    public function findByEmail(string $customerEmail)
    {
        return $this->get('customers?email='.$customerEmail, $this->options);
    }

    public function findByCpfCnpj(string $customerCpfCnpj)
    {
        return $this->get('customers?cpfCnpj='.$customerCpfCnpj, $this->options);
    }

    public function update(string $customerId, array $values)
    {
        $this->options['body'] = json_encode($values);

        return $this->post('customers/'.$customerId, $this->options);
    }

    public function remove(string $customerId)
    {
        return $this->delete('customers/'.$customerId, $this->options);
    }

    public function restore(string $customerId)
    {
        return $this->post('customers/'.$customerId.'/restore', $this->options);
    }
}
