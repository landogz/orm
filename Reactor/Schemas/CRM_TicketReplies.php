<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\CRM_TicketReplies
 *
 * @property int $ID
 * @property int $TicketNumber
 * @property \DateTime $LastModified
 * @property int $LastModBy
 * @property mixed $Body
 * @property string $Interaction_Medium
 * @property string $Headers
 * @property string $Points
 * @property int $Call_Duration
 
 */
class CRM_TicketReplies extends Model{

    protected $table = "CRM_TicketReplies";
    protected $primaryKey = "ID";

    // Your relationships...

}
