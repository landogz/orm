<?php

namespace Core\Database\Connectors;

use Core\Database\VolusionConnection;
use Illuminate\Contracts\Container\Container;

class ConnectionFactory
{
    protected $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function make($config)
    {
        return new VolusionConnection($config);
    }

}
