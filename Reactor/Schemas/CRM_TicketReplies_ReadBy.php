<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\CRM_TicketReplies_ReadBy
 *
 * @property int $ID
 * @property int $CRM_TicketReplies_ID
 * @property int $CustomerID
 * @property mixed $LastModified
 
 */
class CRM_TicketReplies_ReadBy extends Model{

    protected $table = "CRM_TicketReplies_ReadBy";
    protected $primaryKey = "ID";

    // Your relationships...

}
