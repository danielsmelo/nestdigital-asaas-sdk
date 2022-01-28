<?php

namespace Nestdigital\Test;

use Exception;
use Nestdigital\Asaas\Asaas;
use PHPUnit\Framework\TestCase;

class SerasaTest extends TestCase
{
    private $asaas;

    public function setUp(): void
    {
        $this->asaas = new Asaas();
    }

    public function testCheckSerasa()
    {
        $values = [];

        $result = $this->asaas
            ->serasa()
            ->check($values);

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindAllSerasa()
    {
        $this->expectException(Exception::class); //api fault

        $result = $this->asaas
            ->serasa()
            ->find();
    }

    public function testFindSerasa()
    {
        $result = $this->asaas
            ->serasa()
            ->find('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }
}
