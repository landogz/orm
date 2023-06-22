<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\CRM_TicketReplies
 *
 * @property int $ID
 * @property int $TicketNumber
 * @property \DateTime $LastModified
 * @property int $LastModBy
 * @property mixed $Body
 * @property string $Interaction_Medium
 * @property string $Headers
 * @property double $Points
 * @property int $Call_Duration
 
 */
class CRM_TicketReplies extends Model{

    protected $table = "CRM_TicketReplies";
    protected $primaryKey = "ID";

    // Your relationships...

}
