<?php

namespace Nestdigital\Asaas\Api;

use Exception;

class Account extends ApiAdapter
{
    public function create(array $accountData)
    {
        $this->options['body'] = json_encode($accountData);

        return $this->post('accounts', $this->options);
    }

    public function relatedAccounts()
    {
        return $this->get('accounts', $this->options);
    }

    public function balance()
    {
        return $this->get('finance/getCurrentBalance', $this->options);
    }

    public function transfer(array $transferOptions)
    {
        $this->options['body'] = json_encode($transferOptions);

        return $this->post('transfers', $this->options);
    }

    public function findTransfer(string $transferId = null)
    {
        if ($transferId == null) {
            return $this->get('transfers/', $this->options);
        }

        return $this->get('transfers/'.$transferId, $this->options);
    }

    public function findTransferByDate(string $transferDate)
    {
        return $this->get('transfers?dateCreated='.$transferDate, $this->options);
    }

    public function findTransferByType(string $transferType)
    {
        if ($transferType != 'ASAAS_ACCOUNT' || $transferType = !'BANK_ACCOUNT') {
            throw new Exception('The transferType parameter must be ASAAS_ACCOUNT or BANK_ACCOUNT');
        }

        return $this->get('transfers?type='.$transferType, $this->options);
    }

    public function comercialData()
    {
        return $this->get('myAccount', $this->options);
    }

    public function setPaymentCheckoutConfig(array $paymentCheckoutData)
    {
        $this->options['body'] = json_encode($paymentCheckoutData);

        return $this->post('myAccount/paymentCheckoutConfig', $this->options);
    }

    public function findPaymentCheckoutConfig()
    {
        return $this->get('myAccount/paymentCheckoutConfig', $this->options);
    }
}
