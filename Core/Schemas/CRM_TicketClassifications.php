<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\CRM_TicketClassifications
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
