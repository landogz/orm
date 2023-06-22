<?php

namespace Core\Database;

use Closure;
use Illuminate\Support\Arr;
use Core\Database\Query\Expression;
use Core\Database\Query\Processors\Processor;
use Core\Database\Query\Builder as QueryBuilder;
use Core\Database\Query\Grammars\VolusionGrammer as QueryGrammar;

class Connection
{

    protected $config = [];
    protected $postProcessor;
    protected $queryGrammar;
    protected $forceRequest = false;


    public function __construct($config = [])
    {
        $this->config = $config;
        $this->queryGrammar = new QueryGrammar;
        $this->postProcessor = new Processor;
    }

    public function table($table)
    {
        return $this->query()->from($table);
    }

    public function query()
    {
        return new QueryBuilder($this, $this->getQueryGrammar(), $this->getPostProcessor());
    }

    public function selectOne($query, $bindings = [])
    {
        $records = $this->select($query, $bindings);
        return array_shift($records);
    }

    public function setForceRequest($bool){
        $this->forceRequest = $bool;
    }

    public function getForceRequest(){
        return $this->forceRequest;
    }

    public function select($query, $bindings = [])
    {
        return $this->statement($query, $bindings);
    }


    public function insert($query, $bindings = [])
    {
        return $this->statement($query, $bindings);
    }

    public function update($query, $bindings = [])
    {
        return $this->statement($query, $bindings);
    }


    public function delete($query, $bindings = [])
    {
        return $this->statement($query, $bindings);
    }

    public function statement($query, $bindings = [])
    {
        $statement = new VolusionInterceptor($this);
        $statement->prepare($query);
        $statement->bindParams($bindings);
        return $statement->execute();
    }

    public function raw($value)
    {
        return new Expression($value);
    }

    public function getName()
    {
        return $this->getConfig('name');
    }

    public function getConfig($option = null)
    {
        return Arr::get($this->config, $option);
    }


    public function getQueryGrammar()
    {
        return $this->queryGrammar;
    }

    public function setQueryGrammar(Query\Grammars\Grammar $grammar)
    {
        $this->queryGrammar = $grammar;
    }

    public function getPostProcessor()
    {
        return $this->postProcessor;
    }

    public function setPostProcessor(Processor $processor)
    {
        $this->postProcessor = $processor;
    }

    public function getDatabaseName()
    {
        return $this->database;
    }

    public function setDatabaseName($database)
    {
        $this->database = $database;
    }

    public function getTablePrefix()
    {
        return $this->tablePrefix;
    }

    /**
     * Set the table prefix in use by the connection.
     *
     * @param  string $prefix
     * @return void
     */
    public function setTablePrefix($prefix)
    {
        $this->tablePrefix = $prefix;

        $this->getQueryGrammar()->setTablePrefix($prefix);
    }

    /**
     * Set the table prefix and return the grammar.
     *
     * @param  \Core\Database\Grammar $grammar
     * @return \Core\Database\Grammar
     */
    public function withTablePrefix(Grammar $grammar)
    {
        $grammar->setTablePrefix($this->tablePrefix);

        return $grammar;
    }

    /**
     * Register a connection resolver.
     *
     * @param  string $driver
     * @param  \Closure $callback
     * @return void
     */
    public static function resolverFor($driver, Closure $callback)
    {
        static::$resolvers[$driver] = $callback;
    }

    /**
     * Get the connection resolver for the given driver.
     *
     * @param  string $driver
     * @return mixed
     */
    public static function getResolver($driver)
    {
        return static::$resolvers[$driver] ?? null;
    }
}
