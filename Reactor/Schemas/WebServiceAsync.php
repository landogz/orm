<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\WebServiceAsync
 *
 * @property int $WebServiceAsyncID
 * @property int $WebServiceTypeID
 * @property mixed $CreateDate
 * @property mixed $LastUpdate
 * @property int $RowCountTotal
 * @property int $RowCountCurrent
 
 */
class WebServiceAsync extends Model{

    protected $table = "WebServiceAsync";
    protected $primaryKey = "WebServiceAsyncID";

    // Your relationships...

}
