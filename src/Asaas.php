<?php

namespace Nestdigital\Asaas;

use Nestdigital\Asaas\Api\Account;
use Nestdigital\Asaas\Api\Anticipation;
use Nestdigital\Asaas\Api\BillPayment;
use Nestdigital\Asaas\Api\Customer;
use Nestdigital\Asaas\Api\FinancialTransactions;
use Nestdigital\Asaas\Api\FiscalInformation;
use Nestdigital\Asaas\Api\Installment;
use Nestdigital\Asaas\Api\Invoice;
use Nestdigital\Asaas\Api\Notification;
use Nestdigital\Asaas\Api\Payment;
use Nestdigital\Asaas\Api\PaymentDunning;
use Nestdigital\Asaas\Api\PaymentLink;
use Nestdigital\Asaas\Api\Serasa;
use Nestdigital\Asaas\Api\Subscription;
use Nestdigital\Asaas\Api\Webhook;

class Asaas
{
    public function payment()
    {
        return new Payment();
    }

    public function customer()
    {
        return new Customer();
    }

    public function installment()
    {
        return new Installment();
    }

    public function subscription()
    {
        return new Subscription();
    }

    public function paymentLink()
    {
        return new PaymentLink();
    }

    public function notification()
    {
        return new Notification();
    }

    public function account()
    {
        return new Account();
    }

    public function anticipation()
    {
        return new Anticipation();
    }

    public function billPayment()
    {
        return new BillPayment();
    }

    public function financialTransactions()
    {
        return new FinancialTransactions();
    }

    public function fiscalInformation()
    {
        return new FiscalInformation();
    }

    public function invoice()
    {
        return new Invoice();
    }

    public function paymentDunning()
    {
        return new PaymentDunning();
    }

    public function serasa()
    {
        return new Serasa();
    }

    public function webhook()
    {
        return new Webhook();
    }
}
