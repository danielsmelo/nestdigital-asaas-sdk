<?php

namespace Nestdigital\Asaas\Api;

class FiscalInformation extends ApiAdapter
{
    public function municipalServices()
    {
        return $this->get('customerFiscalInfo/municipalOptions', $this->options);
    }

    public function create(array $invoiceData)
    {
        $this->options['body'] = json_encode($invoiceData);

        return $this->post('customerFiscalInfo/', $this->options);
    }

    public function update(array $invoiceData)
    {
        $this->create($invoiceData);
    }

    public function find()
    {
        return $this->get('customerFiscalInfo/', $this->options);
    }
}
