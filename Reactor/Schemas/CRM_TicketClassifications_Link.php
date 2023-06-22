<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\CRM_TicketClassifications_Link
 *
 * @property int $ID_CRM_TicketTypes
 * @property int $ID_CRM_TicketClassifications
 
 */
class CRM_TicketClassifications_Link extends Model{

    protected $table = "CRM_TicketClassifications_Link";
    protected $primaryKey = null;

    // Your relationships...

}
