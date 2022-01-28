<?php

namespace Nestdigital\Test;

use Nestdigital\Asaas\Asaas;
use PHPUnit\Framework\TestCase;

class PaymentLinkTest extends TestCase
{
    private $asaas;

    public function setUp(): void
    {
        $this->asaas = new Asaas();
    }

    public function testCreatePaymentLink()
    {
        $values = [];

        $result = $this->asaas
            ->paymentLink()
            ->create($values);

        // $response = (array) json_decode($result->getBody(), true);

        $this->assertEquals($result->getStatusCode(), 200);
        // $this->assertEquals($response, $expected);
    }

    public function testUpdatePaymentLink()
    {
        $values = [];

        $result = $this->asaas
            ->paymentLink()
            ->update('1', $values);

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindSinglePaymentLink()
    {
        $result = $this->asaas
            ->paymentLink()
            ->find('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindAllPaymentLink()
    {
        $result = $this->asaas
            ->paymentLink()
            ->find();

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindActivePaymentLink()
    {
        $result = $this->asaas
            ->paymentLink()
            ->findActive('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testRemovePaymentLink()
    {
        $result = $this->asaas
            ->paymentLink()
            ->remove('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testRestorePaymentLink()
    {
        $result = $this->asaas
            ->paymentLink()
            ->restore('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testSendImageOfPaymentLink()
    {
        $result = $this->asaas
            ->paymentLink()
            ->image('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindSingleImageOfPaymentLink()
    {
        $result = $this->asaas
            ->paymentLink()
            ->findImages('1', '2');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindAllImagesOfPaymentLink()
    {
        $result = $this->asaas
            ->paymentLink()
            ->findImages('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testRemoveImageOfPaymentLink()
    {
        $result = $this->asaas
            ->paymentLink()
            ->removeImage('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testSetMainImageOfPaymentLink()
    {
        $result = $this->asaas
            ->paymentLink()
            ->setMainImage('1', '2');

        $this->assertEquals($result->getStatusCode(), 200);
    }
}
