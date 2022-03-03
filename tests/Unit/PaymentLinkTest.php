<?php

namespace Nestdigital\Test\Unit;

use Nestdigital\Asaas\Facade\Asaas;
use Nestdigital\Test\TestCase;

class PaymentLinkTest extends TestCase
{
    public function testCreatePaymentLink()
    {
        $values = [];

        $result = Asaas::paymentLink()->create($values);

        // $response = (array) json_decode($result->getBody(), true);

        $this->assertEquals($result->getStatusCode(), 200);
        // $this->assertEquals($response, $expected);
    }

    public function testUpdatePaymentLink()
    {
        $values = [];

        $result = Asaas::paymentLink()->update('1', $values);

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindSinglePaymentLink()
    {
        $result = Asaas::paymentLink()->find('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindAllPaymentLink()
    {
        $result = Asaas::paymentLink()->find();

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindActivePaymentLink()
    {
        $result = Asaas::paymentLink()->findActive('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testRemovePaymentLink()
    {
        $result = Asaas::paymentLink()->remove('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testRestorePaymentLink()
    {
        $result = Asaas::paymentLink()->restore('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testSendImageOfPaymentLink()
    {
        $result = Asaas::paymentLink()->image('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindSingleImageOfPaymentLink()
    {
        $result = Asaas::paymentLink()->findImages('1', '2');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindAllImagesOfPaymentLink()
    {
        $result = Asaas::paymentLink()->findImages('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testRemoveImageOfPaymentLink()
    {
        $result = Asaas::paymentLink()->removeImage('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testSetMainImageOfPaymentLink()
    {
        $result = Asaas::paymentLink()->setMainImage('1', '2');

        $this->assertEquals($result->getStatusCode(), 200);
    }
}
