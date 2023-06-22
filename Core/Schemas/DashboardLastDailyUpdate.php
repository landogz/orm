<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\DashboardLastDailyUpdate
 *
 * @property int $ID
 * @property \DateTime $LastDailyUpdate
 
 */
class DashboardLastDailyUpdate extends Model{

    protected $table = "DashboardLastDailyUpdate";
    protected $primaryKey = "ID";

    // Your relationships...

}
