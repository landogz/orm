<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\WebServiceAsyncEventLog
 *
 * @property int $WebServiceAsyncEventLogID
 * @property int $WebServiceAsyncID
 * @property int $WebServiceEventID
 * @property mixed $CreateDate
 
 */
class WebServiceAsyncEventLog extends Model{

    protected $table = "WebServiceAsyncEventLog";
    protected $primaryKey = "WebServiceAsyncEventLogID";

    // Your relationships...

}
