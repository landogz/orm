<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\WebServiceEvent
 *
 * @property int $WebServiceEventID
 * @property string $WebServiceEventToken
 * @property string $WebServiceEventDescription
 
 */
class WebServiceEvent extends Model{

    protected $table = "WebServiceEvent";
    protected $primaryKey = "WebServiceEventID";

    // Your relationships...

}
