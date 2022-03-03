<?php

namespace Nestdigital\Test;

use Nestdigital\Asaas\Facade\AsaasFacade;
use Nestdigital\Asaas\ServiceProviders\ServiceProvider;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    /**
     * @param \Illuminate\Foundation\Application $app
     * @return string[]
     */
    protected function getPackageProviders($app)
    {
        return [ServiceProvider::class];
    }

    /**
     * @param \Illuminate\Foundation\Application $app
     * @return string[]
     */
    protected function getPackageAliases($app)
    {
        return [
            'asaas' => AsaasFacade::class,
        ];
    }
}
