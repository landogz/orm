<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\CRM_Inbound_Rules_Log
 *
 * @property int $ID_CRM_Inbound_Rules_Log
 * @property int $ID_CRM_Inbound_Rules
 * @property string $Sender_Email
 * @property string $Sender_IP
 * @property string $Subject
 * @property mixed $LastModified
 
 */
class CRM_Inbound_Rules_Log extends Model{

    protected $table = "CRM_Inbound_Rules_Log";
    protected $primaryKey = "ID_CRM_Inbound_Rules_Log";

    // Your relationships...

}
