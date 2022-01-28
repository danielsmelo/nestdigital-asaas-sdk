<?php

namespace Nestdigital\Asaas\Api;

class FinancialTransactions extends ApiAdapter
{
    public function find()
    {
        return $this->get('financialTransactions/', $this->options);
    }
}
