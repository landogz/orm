<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\CRM_Tickets
 *
 * @property int $TicketNumber
 * @property int $CustomerID
 * @property string $CustomerEmailAddress
 * @property string $Subject
 * @property int $TicketType
 * @property string $TicketStatus
 * @property int $LockedBy
 * @property string $TicketNotes
 * @property mixed $LastModified
 * @property int $LastModBy
 * @property int $TicketClassification
 * @property int $TicketReplies
 * @property int $TicketKey
 
 */
class CRM_Tickets extends Model{

    protected $table = "CRM_Tickets";
    protected $primaryKey = null;

    // Your relationships...

}
