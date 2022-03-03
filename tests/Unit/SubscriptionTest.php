<?php

namespace Nestdigital\Test\Unit;

use Nestdigital\Asaas\Facade\Asaas;
use Nestdigital\Test\TestCase;

class SubscriptionTest extends TestCase
{
   public function testCreateSubscription()
    {
        $values = [];

        $result = Asaas::subscription()->create($values);

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindSubscriptionById()
    {
        $result = Asaas::subscription()->find('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindAllSubscriptions()
    {
        $result = Asaas::subscription()->find();

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindSubscriptionByCustomerId()
    {
        $result = Asaas::subscription()->findByCustomerId('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindSubscriptionPayments()
    {
        $result = Asaas::subscription()->payments('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testUpdateSubscription()
    {
        $values = [];

        $result = Asaas::subscription()->update('1', $values);

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testRemoveSubscription()
    {
        $result = Asaas::subscription()->remove('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindSubscriptionInvoices()
    {
        $result = Asaas::subscription()->invoices('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testSetSubscriptionInvoicesSettings()
    {
        $values = [];

        $result = Asaas::subscription()->setInvoiceSettings('1', $values);

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindSubscriptionInvoicesSettings()
    {
        $result = Asaas::subscription()->invoiceSettings('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testRemoveSubscriptionInvoicesSettings()
    {
        $result = Asaas::subscription()->removeInvoiceSettings('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    //Need asaas sandbox configuration
    // public function testFunctionalExeptionTest()
    // {
    //     $values = [
    //         'customer' => 'cus_000004788409',
    //         'billingType' => 'CREDIT_CARD',
    //         'nextDueDate' => '2017-05-15',
    //         'value' => 19.9,
    //         'cycle' => 'MONTHLY',
    //         'description' => 'Assinatura Plano Pró',
    //         'creditCard' => [
    //             'holderName' => 'marcelo h almeida',
    //             'number' => '5162306219378829',
    //             'expiryMonth' => '05',
    //             'expiryYear' => '2021',
    //             'ccv' => '318'
    //         ],
    //         'creditCardHolderInfo' => [
    //             'name' => 'Marcelo Henrique Almeida',
    //             'email' => 'marcelo.almeida@gmail.com',
    //             'cpfCnpj' => '24971563792',
    //             'postalCode' => '89223-005',
    //             'addressNumber' => '277',
    //             'addressComplement' => null,
    //             'phone' => '4738010919',
    //             'mobilePhone' => '47998781877'
    //         ],
    //         'creditCardToken' => 'a75a1d98-c52d-4a6b-a413-71e00b193c99'
    //     ];

    //     $this->expectException(Exception::class);
    //     $this->expectExceptionMessage('Não é permitido data de vencimento inferior a hoje.');

    //     $result = $this->asaas
    //         ->subscription()
    //         ->create($values);
    // }
}
