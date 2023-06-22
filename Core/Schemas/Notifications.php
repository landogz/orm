<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\Notifications
 *
 * @property int $ID_Notifications
 * @property int $ID_Volusion_Notifications
 * @property int $Priority
 * @property string $Subject
 * @property string $Message
 * @property \DateTime $Start_Date
 * @property \DateTime $End_Date
 * @property string $Super_Admins_Only
 * @property string $Disable_Once_Read
 * @property string $Announcement
 
 */
class Notifications extends Model{

    protected $table = "Notifications";
    protected $primaryKey = "ID_Notifications";

    // Your relationships...

}
