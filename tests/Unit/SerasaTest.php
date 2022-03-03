<?php

namespace Nestdigital\Test\Unit;

use Exception;
use Nestdigital\Asaas\Facade\Asaas;
use Nestdigital\Test\TestCase;

class SerasaTest extends TestCase
{
    public function testCheckSerasa()
    {
        $values = [];

        $result = Asaas::serasa()->check($values);

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindAllSerasa()
    {
        $this->expectException(Exception::class); //api fault

        $result = Asaas::serasa()->find();
    }

    public function testFindSerasa()
    {
        $result = Asaas::serasa()->find('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }
}
