<?php

namespace Reactor\Database\Connection;

use Closure;
use Exception;
use GuzzleHttp\Client;
use Throwable;
use DateTimeInterface;
use Illuminate\Support\Arr;
use Reactor\Database\Query\QueryException;
use Reactor\Database\Query\Expression;
use Reactor\Database\Query\Processors\Processor;
use Reactor\Database\Query\Builder as QueryBuilder;
use Reactor\Database\Query\Grammars\Grammar as QueryGrammar;
use \Illuminate\Contracts\Events\Dispatcher;
use \Illuminate\Contracts\Container\Container;
use XEngine\Support\Debug\Dumper;

class Connection implements ConnectionInterface
{
    /**
     * The query grammar implementation.
     *
     * @var \Reactor\Database\Query\Grammars\Grammar
     */
    protected $queryGrammar;

    /**
     * The query post processor implementation.
     *
     * @var \Reactor\Database\Query\Processors\Processor
     */
    protected $postProcessor;

    /**
     * The event dispatcher instance.
     *
     * @var \Illuminate\Contracts\Events\Dispatcher
     */
    protected $events;

    /**
     * The database connection configuration options.
     *
     * @var array
     */
    protected $config = [];

    protected $information = [];
    protected $container;

    public function __construct(Container $container)
    {
        // We need to initialize a query grammar and the query post processors
        // which are both very important parts of the database abstractions
        // so we initialize these to their default values while starting.
        $this->useDefaultQueryGrammar();
        $this->useDefaultPostProcessor();
        $this->container = $container;
        $this->information = $this->container['information'];
    }

    private function ddd()
    {
        if ($this->information['debug']) {
            array_map(function ($x) {
                (new Dumper)->dump($x);
            }, func_get_args());
        }
    }

    /**
     * Set the query grammar to the default implementation.
     *
     * @return void
     */
    public function useDefaultQueryGrammar()
    {
        $this->queryGrammar = $this->getDefaultQueryGrammar();
    }

    /**
     * Get the default query grammar instance.
     *
     * @return \Reactor\Database\Query\Grammars\Grammar
     */
    protected function getDefaultQueryGrammar()
    {
        return new QueryGrammar;
    }

      /**
     * Set the query post processor to the default implementation.
     *
     * @return void
     */
    public function useDefaultPostProcessor()
    {
        $this->postProcessor = $this->getDefaultPostProcessor();
    }

    /**
     * Get the default post processor instance.
     *
     * @return \Reactor\Database\Query\Processors\Processor
     */
    protected function getDefaultPostProcessor()
    {
        return new Processor;
    }

    /**
     * Begin a fluent query against a database table.
     *
     * @param  string $table
     *
     * @return \Reactor\Database\Query\Builder
     */
    public function table($table)
    {
        return $this->query()->from($table);
    }

    /**
     * Get a new query builder instance.
     *
     * @return \Reactor\Database\Query\Builder
     */
    public function query()
    {
        return new QueryBuilder(
            $this, $this->getQueryGrammar(), $this->getPostProcessor()
        );
    }

    /**
     * Get a new raw query expression.
     *
     * @param  mixed $value
     *
     * @return \Reactor\Database\Query\Expression
     */
    public function raw($value)
    {
        return new Expression($value);
    }

    /**
     * Run a select statement and return a single result.
     *
     * @param  string $query
     * @param  array $bindings
     *
     * @return mixed
     */
    public function selectOne($query, $bindings = [])
    {
        $records = $this->select($query, $bindings);

        return array_shift($records);
    }

    /**
     * @param string $query
     * @param array $bindings
     * @return array
     */
    public function select($query, $bindings = [])
    {
        return $this->statement($query, $bindings);

    }

    /**
     * Run an insert statement against the database.
     *
     * @param  string  $query
     * @param  array   $bindings
     * @return bool
     */
    public function insert($query, $bindings = [])
    {
        return $this->statement($query, $bindings);
    }

    /**
     * Run an update statement against the database.
     *
     * @param  string  $query
     * @param  array   $bindings
     * @return int
     */
    public function update($query, $bindings = [])
    {
        return $this->statement($query, $bindings);
    }

    /**
     * Run a delete statement against the database.
     *
     * @param  string  $query
     * @param  array   $bindings
     * @return int
     */
    public function delete($query, $bindings = [])
    {
        return $this->statement($query, $bindings);
    }

    /**
     * Execute an SQL statement and return the boolean result.
     *
     * @param  string  $query
     * @param  array   $bindings
     * @return bool
     */
    public function statement($query, $bindings = [])
    {
        return $this->prepareQuery($query, $bindings);
    }

    /**
     * Run an SQL statement and get the number of rows affected.
     *
     * @param  string $query
     * @param  array $bindings
     *
     * @return int
     */
    public function affectingStatement($query, $bindings = [])
    {
        return $this->prepareQuery($query, $bindings);
    }

    private function mysqlEscapeReplicate($string)
    {
        if (is_array($string))
            return array_map(__METHOD__, $string);

        if (!empty($string) && is_string($string)) {
            return str_replace(
                ['\\', "\0", "\n", "\r", "'", "\x1a"],
                ['\\\\', '\\0', '', '', "''", '\\Z'], $string);
        }

        return $string;
    }

    public function prepareQuery($query, $bindings)
    {
        try {
            return $this->run($query, $bindings, function ($query, $bindings) {
                $binder = [];
                foreach ($bindings as $k => $v) {
                    switch ($this->getType($v)) {
                        case 'float':
                        case 'double':
                            $binder[$k] = str_replace(',', '.', (string)$v);
                            break;
                        case 'integer':
                            $binder[$k] = (string)$v;
                            break;
                        case 'array':
                        case 'string':
                            $binder[$k] = "'" . $this->mysqlEscapeReplicate($v) . "'";
                            break;
                        default:
                            throw new \Exception('Unable to prepare query with this variable type: ' . $this->getType($v) . ' - index: ' . $k);
                            break;
                    }
                }
                $statement = vsprintf(str_replace("?", "%s", $query), $binder);
                $this->ddd($statement);
                return $this->queryCurl($statement);
            });
        } catch (QueryException $e) {
            return true;
        }
    }

    private function getType($var)
    {
        if (is_array($var)) {
            return "array";
        }
        if (is_int($var)) {
            return "integer";
        }
        if (is_float($var)) {
            return "float";
        }
        if (is_double($var)) {
            return "double";
        }
        if (is_object($var)) {
            return "object";
        }
        if (is_string($var)) {
            return "string";
        }

        return "unknown type";
    }

    /**
     * Run a raw, unprepared query against the PDO connection.
     *
     * @param  string $query
     *
     * @return bool
     */
    public function unprepared($query)
    {
        return $this->run($query, [], function ($me, $query) {
            return (bool)$me->exec($query);
        });
    }

    public function queryCurl($query)
    {
        return $this->connect($query);
    }

    public function connect($query)
    {
        //TODO: update this to use guzzle instead of curl maybe?
        $curl = curl_init();
        ini_set('memory_limit', -1);
        ini_set('max_execution_time', -1);

        $client = new Client();
        $response = $client->request(
            'POST',
            $this->information['store_url'] . '/v/vspfiles/schema/Generic/' . $this->information['file'],
            [
                "form_params" => [
                    'query' => base64_encode($query),
                    'api_user' => $this->information['api_user'],
                    'api_key' => $this->information['encrypted_key'],
                    'forceRequest' => $this->container['forceRequest']
                ]
            ]
        )->getBody()->getContents();

        if ($this->container['forceRequest']) {
            $fileName = json_decode($response, true)['SQLFileName'];
            /*create a new request for this filename*/
            $url = $this->information['store_url'] .
                '/net/WebService.aspx?Login=' .
                $this->information['api_user'] .
                '&EncryptedPassword=' .
                $this->information['encrypted_key'] . '&EDI_Name=Generic\\'
                . $fileName;
            $response = $client->request(
                'POST',
                $url
            )->getBody()->getContents();
        }

        $this->ddd($response);
        return $this->finalSanitizer($response);
    }

    /*
    public function sanitizeRawXML($xml)
    {
        return str_ireplace(['&#xB;', '&#xC;', '&#x1A;', '&#x1B;'], '', $xml);
    }
    */

    public function finalSanitizer($response)
    {
        if ($this->container['forceRequest']) {
            $xml = (array)simplexml_load_string($response, "SimpleXMLElement", LIBXML_NOCDATA);
            if (!isset($xml['Table'])) {
                return $this->json2array(json_encode($xml));
            } else {
                return $this->json2array(json_encode($xml['Table']));
            };
        }
        return $this->json2array($response);
    }

    /**
     * @param $object
     * @return array|mixed
     */
    public function json2array($object)
    {
        $array = json_decode($object, true);
        $this->ddd($array);
        if (empty($array)) {
            return $tmp = [];
        }

        if (isset($array['Success'])) {
            $msg = explode("\n", $array['Message']);
            $errorquery = !empty(end($msg)) ? end($msg) : $msg[count($msg) - 2];
            echo '<pre>';
            echo '<b>There is an error in your query</b><br>';
            echo '<b>Error</b> : ' . explode(':', $msg[0])[1] . '<br>';
            echo '<b>Query</b> : ' . $errorquery;
            die();
        } else {
            return $array;
        }
    }

    function contains_array($array)
    {
        foreach ($array as $value) {
            if (is_array($value)) {
                return TRUE;
            }
        }

        return FALSE;
    }

    /**
     * Prepare the query bindings for execution.
     *
     * @param  array $bindings
     *
     * @return array
     */
    public function prepareBindings(array $bindings)
    {
        $grammar = $this->getQueryGrammar();

        foreach ($bindings as $key => $value) {
            // We need to transform all instances of DateTimeInterface into the actual
            // date string. Each query grammar maintains its own date string format
            // so we'll just ask the grammar for the format to get from the date.
            if ($value instanceof DateTimeInterface) {
                $bindings[$key] = $value->format($grammar->getDateFormat());
            } elseif ($value === FALSE) {
                $bindings[$key] = 0;
            }
        }

        return $bindings;
    }

    /**
     * Execute a Closure within a transaction.
     *
     * @param  \Closure $callback
     *
     * @return mixed
     *
     * @throws \Throwable
     */
    public function transaction(Closure $callback)
    {
        $this->beginTransaction();

        // We'll simply execute the given callback within a try / catch block
        // and if we catch any exception we can rollback the transaction
        // so that none of the changes are persisted to the database.
        try {
            $result = $callback($this);

            $this->commit();
        }

            // If we catch an exception, we will roll back so nothing gets messed
            // up in the database. Then we'll re-throw the exception so it can
            // be handled how the developer sees fit for their applications.
        catch (Exception $e) {
            $this->rollBack();

            throw $e;
        } catch (Throwable $e) {
            $this->rollBack();

            throw $e;
        }

        return $result;
    }

    /**
     * Start a new database transaction.
     *
     * @return void
     */
    public function beginTransaction()
    {
        /*++$this->transactions;

        if ($this->transactions == 1) {
            $this->pdo->beginTransaction();
        } elseif ($this->transactions > 1 && $this->queryGrammar->supportsSavepoints()) {
            $this->pdo->exec(
                $this->queryGrammar->compileSavepoint('trans'.$this->transactions)
            );
        }

        $this->fireConnectionEvent('beganTransaction');*/
    }

    /**
     * Commit the active database transaction.
     *
     * @return void
     */
    public function commit()
    {
        /*if ($this->transactions == 1) {
            $this->pdo->commit();
        }

        --$this->transactions;

        $this->fireConnectionEvent('committed');*/
    }

    /**
     * Rollback the active database transaction.
     *
     * @return void
     */
    public function rollBack()
    {
        /*if ($this->transactions == 1) {
            $this->pdo->rollBack();
        } elseif ($this->transactions > 1 && $this->queryGrammar->supportsSavepoints()) {
            $this->pdo->exec(
                $this->queryGrammar->compileSavepointRollBack('trans'.$this->transactions)
            );
        }

        $this->transactions = max(0, $this->transactions - 1);

        $this->fireConnectionEvent('rollingBack');*/
    }


    /**
     * Run a SQL statement and log its execution context.
     *
     * @param  string $query
     * @param  array $bindings
     * @param  \Closure $callback
     *
     * @return mixed
     *
     * @throws \Reactor\Database\Query\QueryException
     */
    protected function run($query, $bindings, Closure $callback)
    {

        $start = microtime(true);

        // Here we will run this query. If an exception occurs we'll determine if it was
        // caused by a connection that has been lost. If that is the cause, we'll try
        // to re-establish connection and re-run the query with a fresh connection.
        try {
            $result = $this->runQueryCallback($query, $bindings, $callback);
        } catch (QueryException $e) {
            $result = $this->handleQueryException(
                $e, $query, $bindings, $callback
            );
        }

        return $result;
    }

    /**
     * Run a SQL statement.
     *
     * @param  string    $query
     * @param  array     $bindings
     * @param  \Closure  $callback
     * @return mixed
     *
     * @throws \Reactor\Database\Query\QueryException
     */
    protected function runQueryCallback($query, $bindings, Closure $callback)
    {
        // To execute the statement, we'll simply call the callback, which will actually
        // run the SQL against the PDO connection. Then we can calculate the time it
        // took to execute and log the query SQL, bindings and time in our memory.
        $result = $callback($query, $bindings);


        return $result;
    }


    /**
     * Get the elapsed time since a given starting point.
     *
     * @param  int    $start
     * @return float
     */
    protected function getElapsedTime($start)
    {
        return round((microtime(true) - $start) * 1000, 2);
    }

    /**
     * Get an option from the configuration options.
     *
     * @param  string $option
     *
     * @return mixed
     */
    public function getConfig($option)
    {
        return Arr::get($this->config, $option);
    }

    /**
     * Get the query grammar used by the connection.
     *
     * @return \Reactor\Database\Query\Grammars\Grammar
     */
    public function getQueryGrammar()
    {
        return $this->queryGrammar;
    }

    /**
     * @param \Reactor\Database\Query\Grammars\Grammar $grammar
     */
    public function setQueryGrammar(\Reactor\Database\Query\Grammars\Grammar $grammar)
    {
        $this->queryGrammar = $grammar;
    }

    /**
     * Get the query post processor used by the connection.
     *
     * @return \Reactor\Database\Query\Processors\Processor
     */
    public function getPostProcessor()
    {
        return $this->postProcessor;
    }

    /**
     * Set the query post processor used by the connection.
     *
     * @param  \Reactor\Database\Query\Processors\Processor  $processor
     * @return void
     */
    public function setPostProcessor(Processor $processor)
    {
        $this->postProcessor = $processor;
    }

}
