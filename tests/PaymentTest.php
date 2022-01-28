<?php

namespace Nestdigital\Test;

use Nestdigital\Asaas\Asaas;
use PHPUnit\Framework\TestCase;

class PaymentTest extends TestCase
{
    private $asaas;

    public function setUp(): void
    {
        $this->asaas = new Asaas();
    }

    public function testCreatePayment()
    {
        $values = [];

        $result = $this->asaas
            ->payment()
            ->create($values);

        $response = (array) json_decode($result->getBody(), true);

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindPaymentById()
    {
        $result = $this->asaas
            ->payment()
            ->find('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindAllPayments()
    {
        $result = $this->asaas
            ->payment()
            ->find();

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindPaymentsByCustomerId()
    {
        $result = $this->asaas
            ->payment()
            ->findByCustomerId('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testUpdatePayment()
    {
        $values = [];

        $result = $this->asaas
            ->payment()
            ->update('1', $values);

        // $response = (array) json_decode($result->getBody(), true);

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testDeletePayment()
    {
        $result = $this->asaas
            ->payment()
            ->remove('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testRestorePayment()
    {
        $result = $this->asaas
            ->payment()
            ->restore('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testReversePaymentPayment()
    {
        $result = $this->asaas
            ->payment()
            ->reversePayment('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testPaymentBankSlipCode()
    {
        $result = $this->asaas
            ->payment()
            ->BankSlipCode('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testPaymentPixQrCode()
    {
        $result = $this->asaas
            ->payment()
            ->PixQrCode('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testConfirmReceivedInCash()
    {
        $result = $this->asaas
            ->payment()
            ->confirmReceivedInCash('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testUndoReceivedInCash()
    {
        $result = $this->asaas
            ->payment()
            ->undoReceivedInCash('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }
}
