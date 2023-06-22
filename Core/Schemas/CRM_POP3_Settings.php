<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\CRM_POP3_Settings
 *
 * @property int $ID
 * @property string $EmailAddress
 * @property string $EmailUsername
 * @property string $EmailPassword
 * @property string $EmailServer
 * @property int $TicketType
 * @property mixed $Email_Reply_Footer
 * @property string $AutoReplySubject
 * @property mixed $AutoReplyBody
 * @property mixed $LastModified
 * @property int $LastModBy
 
 */
class CRM_POP3_Settings extends Model{

    protected $table = "CRM_POP3_Settings";
    protected $primaryKey = "ID";

    // Your relationships...

}
