<?php

namespace Nestdigital\Asaas;

use Illuminate\Config\Repository;
use Nestdigital\Test\Exceptions\ConfigFileNotFoundException;

class Config
{
    const CONFIG_FILE_NAME = 'asaas';

    private $config;

    public function __construct()
    {
        $configPath = $this->configurationPath();

        $config_file = $configPath.'/'.self::CONFIG_FILE_NAME.'.php';

        if (!file_exists($config_file)) {
            throw new ConfigFileNotFoundException();
        }

        $this->config = new Repository(require $config_file);
    }

    private function configurationPath()
    {
        // config file of package
        $config_path = __DIR__.'/Config';

        // laravel specific function `config_path()`
        if (function_exists('config_path')) {
            $config_path = config_path();
        }

        return $config_path;
    }

    public function get($key)
    {
        return $this->config->get($key);
    }
}
