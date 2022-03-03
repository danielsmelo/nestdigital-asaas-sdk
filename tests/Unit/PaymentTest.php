<?php

namespace Nestdigital\Test\Unit;

use Nestdigital\Asaas\Facade\Asaas as FacadeAsaas;
use Nestdigital\Test\TestCase;

class PaymentTest extends TestCase
{
    public function testCreatePayment()
    {
        $result = FacadeAsaas::payment()->find('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindPaymentById()
    {
        $result = FacadeAsaas::payment()->find('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindAllPayments()
    {
        $result = FacadeAsaas::payment()->find();

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindPaymentsByCustomerId()
    {
        $result = FacadeAsaas::payment()->findByCustomerId('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindPaymentsBySubscriptionId()
    {
        $result = FacadeAsaas::payment()->findBySubscriptionId('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testUpdatePayment()
    {
        $values = [];

        $result = FacadeAsaas::payment()->update('1', $values);

        // $response = (array) json_decode($result->getBody(), true);

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testDeletePayment()
    {
        $result = FacadeAsaas::payment()->remove('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testRestorePayment()
    {
        $result = FacadeAsaas::payment()->restore('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testReversePaymentPayment()
    {
        $result = FacadeAsaas::payment()->reversePayment('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testPaymentBankSlipCode()
    {
        $result = FacadeAsaas::payment()->BankSlipCode('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testPaymentPixQrCode()
    {
        $result = FacadeAsaas::payment()->PixQrCode('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testConfirmReceivedInCash()
    {
        $result = FacadeAsaas::payment()->confirmReceivedInCash('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testUndoReceivedInCash()
    {
        $result = FacadeAsaas::payment()->undoReceivedInCash('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }
}
