<?php

namespace Reactor\Database\Connection;

use Reactor\Database\Query\Grammars\SqlServerGrammar as QueryGrammar;

class SqlServerConnection extends Connection
{

    /**
     * Get the default query grammar instance.
     *
     * @return \Reactor\Database\Query\Grammars\SqlServerGrammar
     */
    protected function getDefaultQueryGrammar()
    {
        return new QueryGrammar;
    }

}
