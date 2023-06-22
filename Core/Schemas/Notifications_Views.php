<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\Notifications_Views
 *
 * @property int $ID_Notifications
 * @property int $Viewed_By
 * @property \DateTime $View_Date
 * @property \DateTime $View_Date_UTC
 
 */
class Notifications_Views extends Model{

    protected $table = "Notifications_Views";
    protected $primaryKey = null;

    // Your relationships...

}
