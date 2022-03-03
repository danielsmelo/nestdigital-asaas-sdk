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
    private $account;
    private $anticipation;
    private $billPayment;
    private $customer;
    private $financialTransactions;
    private $fiscalInformation;
    private $installment;
    private $invoice;
    private $notification;
    private $payment;
    private $paymentDunning;
    private $paymentLink;
    private $serasa;
    private $subscription;
    private $webhook;

    public function __construct(
        Account $account,
        Anticipation $anticipation,
        BillPayment $billPayment,
        Customer $customer,
        FinancialTransactions $financialTransactions,
        FiscalInformation $fiscalInformation,
        Installment $installment,
        Invoice $invoice,
        Notification $notification,
        Payment $payment,
        PaymentDunning $paymentDunning,
        PaymentLink $paymentLink,
        Serasa $serasa,
        Subscription $subscription,
        Webhook $webhook
    ) {
        $this->account = $account;
        $this->anticipation = $anticipation;
        $this->billPayment = $billPayment;
        $this->customer = $customer;
        $this->financialTransactions = $financialTransactions;
        $this->fiscalInformation = $fiscalInformation;
        $this->installment = $installment;
        $this->invoice = $invoice;
        $this->notification = $notification;
        $this->payment = $payment;
        $this->paymentDunning = $paymentDunning;
        $this->paymentLink = $paymentLink;
        $this->serasa = $serasa;
        $this->subscription = $subscription;
        $this->webhook = $webhook;
    }

    public function payment()
    {
        return $this->payment;
    }

    public function customer()
    {
        return $this->customer;
    }

    public function installment()
    {
        return $this->installment;
    }

    public function subscription()
    {
        return $this->subscription;
    }

    public function paymentLink()
    {
        return $this->paymentLink;
    }

    public function notification()
    {
        return $this->notification;
    }

    public function account()
    {
        return $this->account;
    }

    public function anticipation()
    {
        return $this->anticipation;
    }

    public function billPayment()
    {
        return $this->billPayment;
    }

    public function financialTransactions()
    {
        return $this->financialTransactions;
    }

    public function fiscalInformation()
    {
        return $this->fiscalInformation;
    }

    public function invoice()
    {
        return $this->invoice;
    }

    public function paymentDunning()
    {
        return $this->paymentDunning;
    }

    public function serasa()
    {
        return $this->serasa;
    }

    public function webhook()
    {
        return $this->webhook;
    }
}
