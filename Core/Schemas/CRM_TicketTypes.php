<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\CRM_TicketTypes
 *
 * @property int $ID
 * @property string $Private_Name
 * @property string $Public_Name
 * @property mixed $LastModified
 * @property int $LastModBy
 
 */
class CRM_TicketTypes extends Model{

    protected $table = "CRM_TicketTypes";
    protected $primaryKey = "ID";

    // Your relationships...

}
