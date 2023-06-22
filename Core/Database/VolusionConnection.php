<?php

namespace Core\Database;

use Core\Database\Query\Processors\VolusionProcessor;
use Core\Database\Query\Grammars\VolusionGrammer as QueryGrammar;

class VolusionConnection extends Connection
{
    protected function getDefaultQueryGrammar()
    {
        return $this->withTablePrefix(new QueryGrammar);
    }
    protected function getDefaultPostProcessor()
    {
        return new VolusionProcessor;
    }

}
