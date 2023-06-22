<?php

namespace Core\Database;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use InvalidArgumentException;
use Core\Database\Connectors\ConnectionFactory;

/**
 * @mixin \Core\Database\Connection
 */
class DatabaseManager
{
    protected $app;
    protected $factory;

    public function __construct($app, ConnectionFactory $factory)
    {
        $this->app = $app;
        $this->factory = $factory;
    }

    public function connection()
    {
        return $this->factory->make($this->app['config']['default']);
    }

    public function __call($method, $parameters)
    {
        return $this->connection()->$method(...$parameters);
    }
}
