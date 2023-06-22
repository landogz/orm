<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\CRM_TicketReplies_ReadBy
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
