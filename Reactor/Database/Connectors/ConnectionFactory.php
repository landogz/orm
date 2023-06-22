<?php

namespace Reactor\Database\Connectors;

use Illuminate\Support\Arr;
use Reactor\Database\Connection\SqlServerConnection;
use Illuminate\Contracts\Container\Container;

class ConnectionFactory
{
    /**
     * The IoC container instance.
     *
     * @var \Illuminate\Contracts\Container\Container
     */
    protected $container;

    /**
     * Create a new connection factory instance.
     * ConnectionFactory constructor.
     * @param Container $container
     */
    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function make()
    {
        return $this->createSingleConnection();
    }

    /**
     * Create a single database connection instance.
     * @return SqlServerConnection
     */
    protected function createSingleConnection()
    {
        return $this->createConnection();
    }

     /**
     * Parse and prepare the database configuration.
     *
     * @param  array   $config
     * @param  string  $name
     * @return array
     */
    protected function parseConfig(array $config, $name)
    {
        return Arr::add(Arr::add($config, 'prefix', ''), 'name', $name);
    }

    /**
     * Create a new connection instance.
     * @return SqlServerConnection
     */
    protected function createConnection()
    {
        dd('!');
        return new SqlServerConnection($this->container);
    }
}
