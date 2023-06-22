<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\WebServiceEvent
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
