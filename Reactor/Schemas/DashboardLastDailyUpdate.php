<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\DashboardLastDailyUpdate
 *
 * @property int $ID
 * @property \DateTime $LastDailyUpdate
 
 */
class DashboardLastDailyUpdate extends Model{

    protected $table = "DashboardLastDailyUpdate";
    protected $primaryKey = "ID";

    // Your relationships...

}
