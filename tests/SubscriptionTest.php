<?php

namespace Nestdigital\Test;

use Exception;
use Nestdigital\Asaas\Asaas;
use PHPUnit\Framework\TestCase;

class SubscriptionTest extends TestCase
{
    private $asaas;

    public function setUp(): void
    {
        $this->asaas = new Asaas();
    }

    public function testCreateSubscription()
    {
        $values = [];

        $result = $this->asaas
            ->subscription()
            ->create($values);

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindSubscriptionById()
    {
        $result = $this->asaas
            ->subscription()
            ->find('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindAllSubscriptions()
    {
        $result = $this->asaas
            ->subscription()
            ->find();

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindSubscriptionByCustomerId()
    {
        $result = $this->asaas
            ->subscription()
            ->findByCustomerId('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindSubscriptionPayments()
    {
        $result = $this->asaas
            ->subscription()
            ->payments('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testUpdateSubscription()
    {
        $values = [];

        $result = $this->asaas
            ->subscription()
            ->update('1', $values);

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testRemoveSubscription()
    {
        $result = $this->asaas
            ->subscription()
            ->remove('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindSubscriptionInvoices()
    {
        $result = $this->asaas
            ->subscription()
            ->invoices('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testSetSubscriptionInvoicesSettings()
    {
        $values = [];

        $result = $this->asaas
            ->subscription()
            ->setInvoiceSettings('1', $values);

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindSubscriptionInvoicesSettings()
    {
        $result = $this->asaas
            ->subscription()
            ->invoiceSettings('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testRemoveSubscriptionInvoicesSettings()
    {
        $result = $this->asaas
            ->subscription()
            ->removeInvoiceSettings('1');

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
