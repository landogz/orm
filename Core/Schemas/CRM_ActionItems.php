<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\CRM_ActionItems
 *
 * @property int $ID
 * @property int $TicketNumber
 * @property string $Description
 * @property \DateTime $DueDate
 * @property int $LastModBy
 * @property string $Completed
 
 */
class CRM_ActionItems extends Model{

    protected $table = "CRM_ActionItems";
    protected $primaryKey = "ID";

    // Your relationships...

}
