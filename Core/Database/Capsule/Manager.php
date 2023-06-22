<?php

namespace Core\Database\Capsule;

use Illuminate\Container\Container;
use Core\Database\DatabaseManager;
use Illuminate\Support\Traits\CapsuleManagerTrait;
use Core\Database\Eloquent\Model as Eloquent;
use Core\Database\Connectors\ConnectionFactory;

class Manager
{
    use CapsuleManagerTrait;

    /**
     * The database manager instance.
     *
     * @var \Core\Database\DatabaseManager
     */
    protected $manager;

    /**
     * Create a new database capsule manager.
     *
     * @param  \Illuminate\Container\Container|null  $container
     * @return void
     */
    public function __construct(Container $container = null)
    {
        $this->setupContainer($container ?: new Container);
        $this->setupManager();
    }

    /**
     * Build the database manager instance.
     *
     * @return void
     */
    protected function setupManager()
    {
        $factory = new ConnectionFactory($this->container);
        $this->manager = new DatabaseManager($this->container, $factory);
    }

    /**
     * Get a connection instance from the global manager.
     *
     * @param  string  $connection
     * @return \Core\Database\Connection
     */
    public static function connection($connection = null)
    {
        return static::$instance->getConnection($connection);
    }

    /**
     * Get a fluent query builder instance.
     *
     * @param  string  $table
     * @param  string  $connection
     * @return \Core\Database\Query\Builder
     */
    public static function table($table, $connection = null)
    {
        return static::$instance->connection($connection)->table($table);
    }

    public function getConnection()
    {
        return $this->manager->connection();
    }

    public function addConnection($config)
    {
        $this->container['config']['default'] = $config;
    }

    public function bootEloquent()
    {
        Eloquent::setConnectionResolver($this->manager);
    }

    /**
     * Get the database manager instance.
     *
     * @return \Core\Database\DatabaseManager
     */
    public function getDatabaseManager()
    {
        return $this->manager;
    }

    /**
     * Dynamically pass methods to the default connection.
     *
     * @param  string  $method
     * @param  array   $parameters
     * @return mixed
     */
    public static function __callStatic($method, $parameters)
    {
        return static::connection()->$method(...$parameters);
    }
}
