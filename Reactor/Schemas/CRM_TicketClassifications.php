<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\CRM_TicketClassifications
 *
 * @property int $ID_CRM_TicketClassifications
 * @property int $TicketType
 * @property string $Name
 * @property \DateTime $LastModified
 * @property int $LastModBy
 
 */
class CRM_TicketClassifications extends Model{

    protected $table = "CRM_TicketClassifications";
    protected $primaryKey = "ID_CRM_TicketClassifications";

    // Your relationships...

}
